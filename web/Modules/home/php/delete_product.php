<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "product_management";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$p1 = $_GET["1"];
$sql = "DELETE FROM products WHERE id = $p1";

// Execute the statement
if (mysqli_query($conn, $sql)) {
    header("Location: ../home.php");
    exit();
} else {
    echo "Error deleting product: " . mysqli_error($conn);
}

// Close the connection
$conn->close();
?>
