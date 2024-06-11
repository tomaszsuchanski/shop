<?php
global $conn;
include '../php/Config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = "SELECT * FROM Product WHERE product_id='$product_id'";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];

    $sql = "UPDATE Product SET name='$name', description='$description', type='$type', amount='$amount' WHERE product_id='$product_id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();

