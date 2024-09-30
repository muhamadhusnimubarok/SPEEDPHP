<?php
// login.php

// You should replace this with your database connection and actual validation
$correctEmail = 'user@example.com';
$correctPassword = 'password123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginemail'];
    $password = $_POST['loginPassword'];

    // Check if the provided credentials are correct
    if ($email === $correctEmail && $password === $correctPassword) {
        // Redirect to the homepage on successful login
        header("Location: home/homepage.php");
        exit();
    } else {
        echo "Invalid credentials. Please try again.";
    }
}
?>
