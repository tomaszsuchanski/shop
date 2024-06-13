<?php
global $conn;
include '../php/Config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    $_SESSION['user_id'] = 1;
}

$user_id = $_SESSION['user_id'];

// Fetch cart items
$sql = "SELECT Cart.cart_id, Products.product_id, Products.name, Products.description, Products.type, Products.amount
        FROM Cart 
        JOIN Products ON Cart.product_id = Products.product_id 
        WHERE Cart.user_id = $user_id AND Cart.status = 'active'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
</head>
<body>
<h1>Your Cart</h1>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Type</th>
        <th>Amount</th>
        <th>Action</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['type']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><a href="buy_item.php?cart_id=<?php echo $row['cart_id']; ?>&product_id=<?php echo $row['product_id']; ?>">Buy</a></td>
        </tr>
    <?php } ?>
</table>
<br>
<a href="index.php">Back to Products</a>
</body>
</html>
