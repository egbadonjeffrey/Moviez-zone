<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('../connection_db/connection.php');

session_start();

if (isset($_POST['submit'])) {
    $errors = [];

    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];

    // Perform individual validation checks and store error messages
    if (empty($username)) {
        $errors['username'] = "Username is required for registration";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Valid email is required for registration";
    }

    if (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters long';
    } elseif (!preg_match('/[a-z]/i', $password) || !preg_match('/[0-9]/', $password) || !preg_match('/[A-Z]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password)) {
        $errors['password'] = 'Password must meet the complexity requirements';
    }

    if ($password !== $repeat_password) {
        $errors['repeat_password'] = 'Passwords do not match';
    }

    // Check for duplicate username or email
    $query = "SELECT * FROM users_data WHERE username = '$username' OR email = '$email'";
    $duplicate = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($duplicate) > 0) {
        $errors['duplicate'] = "Username or Email already exists in the database";
    }

    if (count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header('Location: /moviez-zone/signup.php');
        exit;
    }

    // If no errors, proceed with registration
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $query1 = "INSERT INTO users_data (username, email, password_hash) VALUES('$username', '$email', '$password_hash')";
    $result = mysqli_query($mysqli, $query1);

    if ($result) {
        header("Location: /moviez-zone/signin.php");
        exit;
    } else {
        $_SESSION['errors']['server'] = "Database error. Please try again.";
        header("Location: /moviez-zone/signup.php");
        exit;
    }
}
?>