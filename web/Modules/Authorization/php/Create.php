<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "product_management";

// Create connection
$db = new mysqli($servername, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number =  htmlspecialchars($_POST['number']);
    $password = htmlspecialchars($_POST['password']);
    $nmae = htmlspecialchars($_POST['nmae']);
    $sql = "SELECT id FROM users  WHERE number  = '$number'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: ../Create_account.php?message=رقم الجوال موجود بالفعل");
        exit();
    } else {
        $sql = "INSERT INTO users (number, username, password) VALUES ('$number', '$nmae', '$password')";
        $result = mysqli_query($db, $sql);
        header("Location: ../../home/home.php");
        exit();
    }
}
