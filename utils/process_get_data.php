<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start session
// session_start();






// Get the user from database
if (isset($_SESSION["user_id"])) {
    $sql = "SELECT * FROM users_data WHERE id={$_SESSION["user_id"]}";



    $result = mysqli_query($mysqli, $sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $username = $user["username"];

        echo "Your username is: " . $username;
    }


}

// GET ALL VIDEOS FROM DATABASE
$sql = "SELECT * FROM videos_data ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql);


// GET VIDEOS UPLOADED BY USER
$sql2 = "SELECT * FROM videos_data WHERE username = '$username'";
$user_uploaded_results = mysqli_query($mysqli, $sql2);







?>