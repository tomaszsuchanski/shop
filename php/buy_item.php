<?php
global $conn;
include '../php/Config.php';

session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1;
}

$user_id = $_SESSION['user_id'];
$cart_id = $_GET['cart_id'];
$product_id = $_GET['product_id'];

$sql = "SELECT amount FROM Products WHERE product_id = $product_id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

if ($product['amount'] > 0) {
    $new_amount = $product['amount'] - 1;
    $sql = "UPDATE Products SET amount = $new_amount WHERE product_id = $product_id";
    $conn->query($sql);

    $sql = "UPDATE Cart SET status = 'bought' WHERE cart_id = $cart_id";
    $conn->query($sql);

    echo "Product bought successfully";
} else {
    echo "Sorry, this product is out of stock";
}

header('Location: view_cart.php');
?>
