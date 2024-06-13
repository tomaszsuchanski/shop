<?php
session_start();

global $conn;
include '../php/Config.php';

function generateToken() {
    return bin2hex(random_bytes(32));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_username = $_POST['username'];
    $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_token = generateToken();

    $_SESSION['token'] = $user_token;

    $query = "SELECT * FROM Users WHERE username='$user_username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "User with this name already exists. Try creating new username.";
    } else {

    $sql = "INSERT INTO users (username, password, token) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user_username, $user_password, $user_token);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();}
