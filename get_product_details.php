<?php
// get_product_details.php

// Database connection settings
$host = "localhost";
$db_name = "hospitals_main";
$username = "root";
$password = "";

// Get product ID from the AJAX request
$productId = isset($_GET['id']) ? $_GET['id'] : null;

if ($productId) {
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch product details by ID
        $stmt = $conn->prepare("SELECT * FROM prdcts WHERE id = :id");
        $stmt->bindParam(':id', $productId);
        $stmt->execute();
        $productDetails = $stmt->fetch(PDO::FETCH_ASSOC);

        // Include image URL in the response
        $productDetails['image_url'] = $productDetails['image'];

        // Return product details as JSON
        header('Content-Type: application/json');
        echo json_encode($productDetails);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Error fetching product details: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Product ID not provided']);
}
?>
