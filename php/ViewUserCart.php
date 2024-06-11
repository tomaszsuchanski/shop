<?php
session_start();

$user_id = $_SESSION['user_id'];

global $conn;
include '../php/Config.php';

// Fetch items from Cart for the user
$sql = "SELECT Products.name, Products.description, Products.amount FROM Cart 
        JOIN Products ON Cart.product_id = Products.product_id 
        WHERE Cart.user_id = ? AND Cart.status = 'in cart'";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

echo "<h1>Your Cart</h1>";
if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"] . " - " . $row["description"] . " - $" . $row["amount"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Your cart is empty.";
}

$stmt->close();
$conn->close();

