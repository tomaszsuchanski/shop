<?php
session_start();

global $conn;
include '../php/Config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_username = $_POST['username'];
    $user_password = $_POST['password'];

    $sql = "SELECT user_id, password, token, type FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password, $user_token, $type);
        $stmt->fetch();

        if (password_verify($user_password, $hashed_password)) {

            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $user_username;
            $_SESSION['token'] = $user_token;
            $_SESSION['type'] = $type;

            echo "Login successful! Welcome, " . $_SESSION['username'] . ".";
            header("Location: ../dist/Index.php");
        } else {
            echo "Invalid username or password.";
        }
    } else {
        echo "Invalid username or password.";
    }

    $stmt->close();
}

$conn->close();

