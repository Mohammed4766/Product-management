<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "product_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = htmlspecialchars($_POST['product_name']);
    $Product_price = htmlspecialchars($_POST['Product_price']);
    $Quantity = htmlspecialchars($_POST['Quantity']);

    // Prepare an SQL statement to insert data into the database
    $sql = "INSERT INTO products (product_name, Product_price, Quantity) VALUES ('$product_name', '$Product_price', '$Quantity')";

    // Prepare and bind the statement
    $stmt = $conn->prepare($sql);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../home.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
