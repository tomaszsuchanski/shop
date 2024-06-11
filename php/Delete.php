<?php

global $conn;
include '../php/Config.php';

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = "DELETE FROM Products WHERE product_id='$product_id'";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../php/Dashboard.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();

