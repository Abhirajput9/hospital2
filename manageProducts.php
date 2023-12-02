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
            max-width: 600px;
            width: 100%;
            text-align: center;
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
                <option value="Company">Company</option>
            </select>

            <label for="name">Name:</label>
            <input type="text" name="name" required>

            <label for="price">Narration:</label>
            <input type="text" name="price">

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


        <!-- Add this HTML form after the existing form -->
        <div class="popup-overlay" id="editFormOverlay">
            <div class="popup-form" id="editForm" style="display: none">
                <h3>Edit Product</h3>
                <form action="update_product.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="editProductId" id="editProductId">

                    <label for="editCategory">Category:</label>
                    <select name="editCategory" id="editCategory">
                        <option value="Doctor">Doctor</option>
                        <option value="Company">Company</option>
                    </select>

                    <label for="editName">Name:</label>
                    <input type="text" name="editName" id="editName" required>

                    <label for="editPrice">Narration:</label>
                    <input type="text" name="editPrice" id="editPrice">

                    <label for="editDescription">Description:</label>
                    <textarea name="editDescription" id="editDescription" rows="4" cols="50"></textarea>

                    <label for="editImage">Image:</label>
                    <img src="" alt="Product Image" id="editImagePreview" style="max-width: 100px; height: 100px; margin-bottom: 10px;">
                    <input type="file" name="editImage" accept="image/*" id="editImage">
                    <br><br><br><br>

                    <!-- Add other fields as needed -->
                    <!-- <label for="submit">Update:</label> -->
                    
                    <input type="submit" value="Update Product">
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
                echo "<td>{$product['id']}</td>";
                echo "<td>{$product['name']}</td>";
                echo "<td>{$product['description']}</td>";
                echo "<td>{$product['price']}</td>";
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