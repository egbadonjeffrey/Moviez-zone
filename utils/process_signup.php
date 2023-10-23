<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require('../connection_db/connection.php');

$username = $mysqli->real_escape_string($_POST['username']);
$email = $mysqli->real_escape_string($_POST['email']);
$password = $mysqli->real_escape_string($_POST['password']);
$repeat_password = $mysqli->real_escape_string($_POST['repeat-password']);

if (empty($username)) {
    die("Username is required for registration <br />");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required for registration");
}

if (strlen($password) < 8) {
    die('Password must be more 8 characters long');
}

if (!preg_match('/[a-z]/i', $password)) {
    die('Password must contain atleast one letter');
}

if (!preg_match('/[0-9]/', $password)) {
    die('Password must contain at least one number');
}

if (!preg_match('/[A-Z]/', $password)) {
    die('Password must contain at least one uppercase letter');
}

if (!preg_match('/[^a-zA-Z0-9]/', $password)) {
    die('Password must contain at least one symbol');
}

if ($password !== $repeat_password) {
    die('Password and Repeat-password do not match');
}



$password_hash = password_hash($password, PASSWORD_DEFAULT);


$query = "SELECT * FROM users_data WHERE username = '$username' OR email = '$email'";

$duplicate = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

if (mysqli_num_rows($duplicate) > 0) {
    $error = "Username or Email already taken";
    echo $error;
} else {
    $query1 = "INSERT INTO users_data (username, email, password_hash) VALUES('$username', '$email', '$password_hash')";

    $result = mysqli_query($mysqli, $query1) or die("Failed to insert into database, query1 failed");

    header("Location: /moviez-zone/signin.php");
}




// print_r($_POST);




?>