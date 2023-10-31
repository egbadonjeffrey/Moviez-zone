<?php


session_start();

include("../connection_db/connection.php");



// If user is not logged in, redirect to login page
if (!isset($_SESSION["user_id"])) {
    header("Location: signin.php");
} else {
    $user = $_SESSION["user_id"];
    $sql_user = "SELECT username FROM users_data WHERE id = $user";
    $result_user = mysqli_query($mysqli, $sql_user);

    if ($result_user && $result_user->num_rows > 0) {
        $row = $result_user->fetch_assoc();
        $username = $row['username'];

        echo $username;

        // Get video to delete id
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['videoId'])) {
            $video_to_delete_id = $_POST['videoId'];



            echo " video id: " . $video_to_delete_id;
            ;

            // Get Videos username from DB
            $sql_video_username = "SELECT username FROM videos_data WHERE id = $video_to_delete_id";
            $result_video = mysqli_query($mysqli, $sql_video_username);

            if ($result_video && $result_video->num_rows > 0) {
                $video_username_row = mysqli_fetch_assoc($result_video);
                $video_username = $video_username_row["username"];
                if ($username !== $video_username) {
                    $_SESSION['username_mismatch'] = "You cannot delete a video, you did not upload !!!";
                    header("Location: ");
                    echo 'Failed';
                    exit;
                } else {
                    $delete_query = "DELETE FROM videos_data WHERE id = $video_to_delete_id";

                    if (mysqli_query($mysqli, $delete_query)) {
                        echo "Video deleted successfully.";
                    } else {
                        // echo "Error deleting video: " . mysqli_error($mysqli);
                    }
                }
            }



        } else {
            echo 'Video Id not available';
        }
    } else {
        echo 'No such user exists';
    }
}







