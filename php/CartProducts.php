<?php
global $conn;
include '../php/Config.php';

$sql = "SELECT * FROM Products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
</head>
<body>
<h1>Products</h1>
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
            <td><a href="add_to_cart.php?product_id=<?php echo $row['product_id']; ?>">Add to Cart</a></td>
        </tr>
    <?php } ?>
</table>
<br>
<a href="view_cart.php">View Cart</a>
</body>
</html>
