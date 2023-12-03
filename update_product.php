<?php
// update_product.php

// Database connection settings
$host = "localhost";
$db_name = "hospitals_main";
$username = "root";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editProductId'])) {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Get input values
        $content_id = $_POST["content_id"];
        $productId = $_POST["editProductId"];
        $name = $_POST["editName"];
        $description = $_POST["editDescription"];
        $price = $_POST["editPrice"];
        $category = $_POST["editCategory"];
        // Check if a new image is uploaded
        if ($_FILES['editImage']['size'] > 0) {
            // Image upload
            $editImagePath = "./productimgs/" . $_FILES["editImage"]["name"];
            move_uploaded_file($_FILES["editImage"]["tmp_name"], $editImagePath);

            // Update the image path in the database only if a new image is uploaded
            $updateImageSql = "UPDATE prdcts SET content_id = :content_id,name = :name, description = :description, price = :price, category = :category, image = :image WHERE id = :id";
            $stmtUpdateImage = $conn->prepare($updateImageSql);
            $stmtUpdateImage->bindParam(':id', $productId);
            $stmtUpdateImage->bindParam(':content_id', $content_id);
            $stmtUpdateImage->bindParam(':name', $name);
            $stmtUpdateImage->bindParam(':description', $description);
            $stmtUpdateImage->bindParam(':price', $price);
            $stmtUpdateImage->bindParam(':category', $category);
            $stmtUpdateImage->bindParam(':image', $editImagePath);
            $stmtUpdateImage->execute();
        }
        else{
            // SQL query to update the product
        $sql = "UPDATE prdcts SET content_id = :content_id,name = :name, description = :description, price = :price, category = :category WHERE id = :id";
        $stmt = $conn->prepare($sql);
        // Bind parameters
        $stmt->bindParam(':id', $productId);
        $stmt->bindParam(':content_id', $content_id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':category', $category);

        // Execute the query
        $stmt->execute();
        }

        

        

        // Redirect back to the page after updating
        header('Location: manageProducts.php');
    } catch (PDOException $e) {
        echo "Error updating product: " . $e->getMessage();
    }

    $conn = null;
} else {
    echo "Invalid request";
}
?>
