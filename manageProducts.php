<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to the login page if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Manage Product</title>
    <style>
        /* Form and Page Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h2 {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Form Styles */
        form {
            margin: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        /* Button Styles */
        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        /* Delete Button Styles */
        .delete-button {
            color: red;
            text-decoration: none;
        }

        .delete-button:hover {
            text-decoration: underline;

        }

        .logout-button {
            background-color: #4caf50;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #45a049;
        }

        /* Popup Overlay Styles */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        /* Popup Form Styles */
        .popup-form {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 700px;
            width: 100%;
            text-align: center;
            align-items: center;
            overflow: auto
        }
    </style>

</head>

<body>

    <h2>Manage Content</h2>
    <form action="logout.php" method="post">
        <button type="submit" class="logout-button">Logout</button>
    </form>

    <div class="container">
        <?php
        // Database connection settings
        $host = "localhost";
        $db_name = "hospitals_main";
        $username = "root";
        $password = "";

        // $host = "localhost";
        // $db_name = "jkbpiqkq_hospitals_main";
        // $username = "jkbpiqkq_sargam_user";
        // $password = "Xd_yaK3}%G@a";



        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Function to generate a unique image name
            function generateUniqueImageName($originalName)
            {
                $timestamp = time();
                $randomString = bin2hex(random_bytes(8)); // Generates a random string
                $extension = pathinfo($originalName, PATHINFO_EXTENSION);

                return $timestamp . '_' . $randomString . '.' . $extension;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get input values
                $content_id = $_POST["content_id"];
                $name = $_POST["name"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $category = $_POST["category"];

                // Generate a unique name for the image
                $imageName = generateUniqueImageName($_FILES["image"]["name"]);

                // Image upload
                $imagePath = "./productimgs/" . $imageName;
                move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
                $imageDatabasePath = "productimgs/" . $imageName;

                // SQL query to insert a new product
                $sql = "INSERT INTO prdcts (content_id, name, description, price, image, category) VALUES (:content_id, :name, :description, :price, :image, :category)";
                $stmt = $conn->prepare($sql);

                // Bind parameters
                $stmt->bindParam(':content_id', $content_id);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':image', $imageDatabasePath); // Save the unique image name in the database
                $stmt->bindParam(':category', $category);

                // Execute the query
                $stmt->execute();

                echo "Content added successfully!";
            }

            // Retrieve and list products from the database
            $products = $conn->query("SELECT * FROM prdcts ORDER BY category ASC, content_id ASC;")->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $conn = null;
        ?>

        <!-- Form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="category">Category:</label>
            <select name="category">
                <option value="Doctor">Doctor</option>
                <option value="Company">Company</option>
                <option value="Gallery">Gallery</option>
            </select>
            <label for="content_id">Content_ID:</label>
            <input type="number" name="content_id" required>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="price">Narration:</label>
            <input type="text" name="price">

            <label for="description">Description:</label>
            <textarea name="description" rows="4" cols="50"></textarea>

            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/*" required>

            <input type="submit" value="Add content">
        </form>

        <?php
        ob_start(); // Start output buffering
        if (isset($_GET['delete'])) {
            // Get the product ID to delete
            $productToDelete = $_GET['delete'];

            try {
                // Database connection settings
                $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                 // Retrieve the image path before deleting the product entry
                $getImagePathSql = "SELECT image FROM prdcts WHERE id = :id";
                $getImagePathStmt = $conn->prepare($getImagePathSql);
                $getImagePathStmt->bindParam(':id', $productToDelete);
                $getImagePathStmt->execute();

                // Fetch the image path
                $imagePath = $getImagePathStmt->fetchColumn();

                // SQL query to delete a product by its ID
                $deleteSql = "DELETE FROM prdcts WHERE id = :id";
                $stmt = $conn->prepare($deleteSql);
                $stmt->bindParam(':id', $productToDelete);

                // Execute the query
                $stmt->execute();
                // Delete the associated image file
                if ($imagePath && file_exists($imagePath)) {
                    unlink($imagePath);
                }
                // Retrieve and list products from the database
                $products = $conn->query("SELECT * FROM prdcts ORDER BY category ASC, content_id ASC;")->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            $conn = null;
        }
        ?>


        <!-- Add this HTML form after the existing form -->
        <div class="popup-overlay" id="editFormOverlay">
            <div class="popup-form" id="editForm" style="display: none">
                <h3>Edit Content</h3>
                <form action="update_product.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="editProductId" id="editProductId">

                    <label for="editCategory">Category:</label>
                    <select name="editCategory" id="editCategory">
                        <option value="Doctor">Doctor</option>
                        <option value="Company">Company</option>
                        <option value="Gallery">Gallery</option>
                    </select>

                    <label for="content_id">Content_Id:</label>
                    <input type="text" name="content_id" id="content_id" required>

                    <label for="editName">Name:</label>
                    <input type="text" name="editName" id="editName" required>

                    <label for="editPrice">Narration:</label>
                    <input type="text" name="editPrice" id="editPrice">

                    <label for="editDescription">Description:</label>
                    <textarea name="editDescription" id="editDescription" rows="4" cols=45""></textarea>

                    <label for="editImage">Image:</label>
                    <img src="" alt="Product Image" id="editImagePreview" style="max-width: 100px; height: 100px; margin-bottom: 10px;">
                    <input type="file" name="editImage" accept="image/*" id="editImage">
                    <br><br><br><br>

                    <!-- Add other fields as needed -->
                    <!-- <label for="submit">Update:</label> -->

                    <input type="submit" value="Update Content">
                </form>
                <button onclick="hideEditForm()">Cancel</button>
            </div>
        </div>


        <script>
            function hideEditForm() {
                document.getElementById("editForm").style.display = "none";
            }

            // You can further enhance the showEditForm function to fetch and populate the edit form dynamically
            function showEditForm(productId) {
                // Implement logic to fetch product details and populate the edit form dynamically
                // For now, let's just show the form
                document.getElementById("editForm").style.display = "block";
            }
        </script>
        <!-- Add this script at the end of your HTML body -->
        <!-- Add this script at the end of your HTML body -->
        <script>
            function showEditForm(editButton) {
                const productId = editButton.dataset.productId;

                // Fetch product details using AJAX
                fetch(`get_product_details.php?id=${productId}`)
                    .then(response => response.json())
                    .then(productDetails => {
                        // Populate the edit form with product details
                        populateEditForm(productDetails);
                        document.getElementById("editFormOverlay").style.display = "flex";
                    })
                    .catch(error => console.error('Error fetching product details:', error));
            }

            function populateEditForm(productDetails) {
                // Populate the edit form fields with product details
                document.getElementById("editProductId").value = productDetails.id;
                document.getElementById("content_id").value = productDetails.content_id;
                document.getElementById("editName").value = productDetails.name;
                document.getElementById("editDescription").value = productDetails.description;
                document.getElementById("editPrice").value = productDetails.price;
                document.getElementById("editCategory").value = productDetails.category;
                const editImagePreview = document.getElementById("editImagePreview");
                editImagePreview.src = productDetails.image_url;

                // Display the edit form
                document.getElementById("editForm").style.display = "block";
            }

            function hideEditForm() {
                // Hide the popup overlay
                document.getElementById("editFormOverlay").style.display = "none";
            }
        </script>





        <!-- Table for Listing Products -->
        <table>
            <tr>
                <!-- <th>Id</th> -->
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Narration</th>
                <th>Category</th>
                <th>Image</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            <?php
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>{$product['content_id']}</td>";
                echo "<td>{$product['name']}</td>";
                echo "<td>" . substr($product['description'], 0, 10) . "....</td>";
                echo "<td>" . substr($product['price'], 0, 10) . "....</td>";
                echo "<td>{$product['category']}</td>";
                echo "<td><img src='{$product['image']}' width='100'></td>";
                echo "<td><a href='?delete={$product['id']}' class='delete-button'>Delete</a></td>";
                echo "<td><a href='#' class='edit-button' data-product-id='{$product['id']}' onclick='showEditForm(this)'>Edit</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>