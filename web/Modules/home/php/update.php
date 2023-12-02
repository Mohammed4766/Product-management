<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "product_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = htmlspecialchars($_POST["product_id"]);
    $product_name = htmlspecialchars($_POST["product_name"]);
    $product_price = htmlspecialchars($_POST["Product_price"]);
    $quantity = htmlspecialchars($_POST["Quantity"]);

    // Update the product details in the database
    $sql = "UPDATE products SET product_name = '$product_name', Product_price = '$product_price', Quantity = '$quantity' WHERE id = $product_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../home.php");
        exit();
    } else {
        echo "Error updating product: " . $conn->error;
    }
}

$conn->close();
