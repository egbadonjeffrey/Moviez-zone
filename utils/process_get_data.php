<?php



// Start session
session_start();


// If user is not logged in, redirect to login page
if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php");
}


// Get the user from database
if (isset($_SESSION["user_id"])) {
    $sql = "SELECT * FROM users_data WHERE id={$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $username = $user["username"];

            echo "Your username is: " . $username;
        }
    } else {
        echo "Failed";
    }
}








?>