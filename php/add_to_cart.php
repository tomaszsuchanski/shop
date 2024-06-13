<?php
global $conn;
include '../php/Config.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1;
}

$product_id = $_GET['product_id'];
$user_id = $_SESSION['user_id'];

$sql = "SELECT amount FROM Products WHERE product_id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if ($product['amount'] > 0) {
    $sql = "SELECT * FROM Cart WHERE product_id = $product_id AND user_id = $user_id AND status = 'active'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        $sql = "INSERT INTO Cart (order_id, user_id, product_id, status) VALUES (0, $user_id, $product_id, 'active')";
        if ($conn->query($sql) === TRUE) {
            echo "Product added to cart successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Product is already in the cart";
    }
} else {
    echo "Sorry, this product is out of stock";
}

header('Location: index.php');
?>
