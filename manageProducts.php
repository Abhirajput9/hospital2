
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

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
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
    </style>
</head>
<body>
    <h2>Manage Content</h2>

    <div class="container">
        <?php
        // Database connection settings
$host = "localhost";
$db_name = "hospitals_main";
$username = "root";
$password = "";



        try {
            $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get input values
                $name = $_POST["name"];
                $description = $_POST["description"];
                $price = $_POST["price"];
                $category = $_POST["category"];

                // Image upload
                $imagePath = "./productimgs/" . $_FILES["image"]["name"];
                move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);

                // SQL query to insert a new product
                $sql = "INSERT INTO prdcts (name, description, price, image, category) VALUES (:name, :description, :price, :image, :category)";
                $stmt = $conn->prepare($sql);

                // Bind parameters
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':price', $price);
                $stmt->bindParam(':image', $imagePath);
                $stmt->bindParam(':category', $category);

                // Execute the query
                $stmt->execute();

                echo "Product added successfully!";
            }

            // Retrieve and list products from the database
            $products = $conn->query("SELECT * FROM prdcts")->fetchAll(PDO::FETCH_ASSOC);
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
                <option value="Department">Company</option>
            </select>

            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="price">Narration:</label>
            <input type="text" name="price"  required>

            <label for="description">Description:</label>
            <textarea name="description" rows="4" cols="50"></textarea> 

            <label for="image">Image:</label>
            <input type="file" name="image" accept="image/*" required>

            <input type="submit" value="Add Product">
        </form>
<?php
if (isset($_GET['delete'])) {
    // Get the product ID to delete
    $productToDelete = $_GET['delete'];

    try {
        // Database connection settings
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // SQL query to delete a product by its ID
        $deleteSql = "DELETE FROM prdcts WHERE id = :id";
        $stmt = $conn->prepare($deleteSql);
        $stmt->bindParam(':id', $productToDelete);

        // Execute the query
        $stmt->execute();

        // Redirect back to the page after deleting
        header('Location: manageProducts.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>
        <!-- Table for Listing Products -->
        <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Narration</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            foreach ($products as $product) {
                echo "<tr>";
                echo "<td>{$product['name']}</td>";
                echo "<td>{$product['description']}</td>";
                echo "<td>{$product['price']}</td>";
                echo "<td>{$product['category']}</td>";
                echo "<td><img src='{$product['image']}' width='100'></td>";
                echo "<td><a href='?delete={$product['id']}' class='delete-button'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
