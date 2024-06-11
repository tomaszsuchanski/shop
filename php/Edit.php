<?php
global $conn;
include '../php/Config.php';

$product = [
    'product_id' => '',
    'name' => '',
    'description' => '',
    'type' => '',
    'amount' => ''
];

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = "SELECT * FROM Products WHERE product_id='$product_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];

    $sql = "UPDATE Products SET name='$name', description='$description', type='$type', amount='$amount' WHERE product_id='$product_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        header("Location: ../php/Dashboard.php");
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
<h2>Edit Product</h2>
<form method="post" action="Edit.php">
    <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['product_id']); ?>">
    Name: <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>"><br>
    Description: <input type="text" name="description" value="<?php echo htmlspecialchars($product['description']); ?>"><br>
    Type: <input type="text" name="type" value="<?php echo htmlspecialchars($product['type']); ?>"><br>
    Amount: <input type="text" name="amount" value="<?php echo htmlspecialchars($product['amount']); ?>"><br>
    <input type="submit" value="Update">
</form>
</body>
</html>
