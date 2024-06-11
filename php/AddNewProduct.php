<?php

global $conn;
include '../php/Config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];

    $stmt = $conn->prepare("INSERT INTO Products (name, description, type, amount) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $name, $description, $type, $amount);

    if ($stmt->execute()) {
        header("Location: ../php/Dashboard.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}

