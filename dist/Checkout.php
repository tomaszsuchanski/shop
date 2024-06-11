<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>
<h1>Products</h1>
<form action="../php/AddToCart.php" method="post">
    <table>
        <tr>
            <th>Product</th>
            <th>Action</th>
        </tr>
        <?php
        global $conn;
        include '../php/Config.php';

        $sql = "SELECT * FROM Products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . " - " . $row["description"] . "</td>";
                echo "<td><button type='submit' name='product_id' value='" . $row["product_id"] . "'>Add to Cart</button></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No products available</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</form>
</body>
</html>
