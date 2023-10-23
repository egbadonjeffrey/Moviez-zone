<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("../connection_db/connection.php");

session_start();




if (isset($_POST['submit']) && isset($_FILES['file'])) {

    $video_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];

    echo $tmp_name;


    $error = $_FILES['file']['error'];

    if ($error === 0) {
        $video_extension = pathinfo($video_name, PATHINFO_EXTENSION);
        $video_extension_lowercase = strtolower($video_extension);
        $allowed_exs = array("mp4", "webm", "avi", "flv");

        if (in_array($video_extension_lowercase, $allowed_exs)) {
            // Upload video
            $new_video_name = uniqid("video-", true) . '.' . $video_extension_lowercase;
            $video_upload_path = '/opt/lampp/htdocs/moviez-zone/videos/' . $new_video_name;

            if ($tmp_name) {
                echo 'Temp file exists';

                move_uploaded_file($tmp_name, $video_upload_path);
            } else {
                echo 'Temp file does not exist';
            }



            // Get the user from database
            if (isset($_SESSION["user_id"])) {
                $sql = "SELECT * FROM users_data WHERE id={$_SESSION["user_id"]}";

                $result = $mysqli->query($sql);

                if ($result) {
                    if ($result->num_rows > 0) {
                        $user = $result->fetch_assoc();
                        $username = $user["username"];
                    }
                } else {
                    echo "Failed to get username";
                }




            }

            $video_name_url = $new_video_name;


            // Insert to database
            $sql = "INSERT INTO videos_data (video_url, username, upload_date) VALUES ('$video_name_url', '$username', NOW())";

            // Execute query
            $result = mysqli_query($mysqli, $sql);
            if ($result) {

                echo $username . "uploaded one video successfully";

                header("Location: /moviez-zone/index.php");

            } else {
                echo "Upload Failed";
            }
        }
    }
}


?>