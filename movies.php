<?php

include('connection_db/connection.php');


session_start();


$sql = "SELECT * FROM videos_data ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql);

// require("include/header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moviezone - Share movies with with everyone</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->

    <link rel="icon" type="image/x-icon"
        href="https://static.vecteezy.com/system/resources/thumbnails/002/236/321/small/movie-trendy-banner-vector.jpg">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">




    <?php
    $currentRoute = $_SERVER['REQUEST_URI'];

    $about = '/moviez-zone/about.php';
    $contact = '/moviez-zone/contact.php';
    $movies = '/moviez-zone/movies.php';

    // echo $currentRoute;
    // Check if the current route is one of the specified pages
    if (
        $currentRoute == $about ||
        $currentRoute == $contact ||
        $currentRoute == $movies ||
        $currentRoute == '/moviez-zone/' ||
        $currentRoute == '/moviez-zone/index.php'
    ) {
        echo "";
    } else {
        echo '';
    }
    ?>






    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Movies Stylesheet -->
    <link rel="stylesheet" href="css/movies.css">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <?php


    $signup = '/moviez-zone/signup.php';
    $signin = '/moviez-zone/signin.php';

    if (
        $currentRoute == '/moviez-zone/dashboard.php?page=page1' ||
        $currentRoute == '/moviez-zone/dashboard.php?page=page2' ||
        $currentRoute == '/moviez-zone/dashboard.php?page=page3' ||
        $currentRoute == '/moviez-zone/dashboard.php?page=page4'
    ) {
        $dashboard = true;
    } else {
        $dashboard = false;
    }

    ?>

    <nav class="bg-white text-black  fixed top-0 left-0 right-0 z-50 shadow-lg mb-[5rem]">
        <div class="flex flex-row gap-7 justify-center items-center">
            <div class="flex flex-row gap-4 bg-white p-4 items-center">
                <a href="index.php" class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">Home</a>
                <a href="about.php" class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">About</a>
                <a href="movies.php"
                    class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">Movies</a>
            </div>
            <a href="index.html" class="bg-orange-400 py-3 px-2 active">
                <h1 class=" text-white">Mymoviezone</h1>
            </a>

            <div class="flex flex-row gap-4 items-center">
                <a href="dashboard.php?page=page1"
                    class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">Dashboard</a>
                <div class="flex flex-row gap-2 items-center">
                    <img src="img/project-2.webp" class="h-10 w-10 rounded-full" alt="profile">
                    <div class="relative" id="dropdown">
                        <span class="text-black text-lg font-bold cursor-pointer ">Profile</span>
                        <div
                            class="hidden absolute top-6 -left-4 w-40  bg-white border border-gray-300 shadow-lg z-10 transition duration-300 ease-in-out transform scale-95 origin-top-right">
                            <a href="#"
                                class="block hover:bg-gray-100 p-2 font-bold text-black hover:text-orange-300 text-center">Settings</a>
                            <a href="#"
                                class="block hover:bg-gray-100 p-2 font-bold text-black hover:text-orange-300 text-center">Logout</a>
                        </div>
                    </div>
                </div>

            </div>


            <?php
            $authenticated = true;


            if ($authenticated) {

            } else {
                echo ' <div class="flex flex-row gap-4 bg-white p-3">
                <a href="signin.php"
                    class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">Login</a>
                <a href="signup.php"
                    class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">Register</a>
                <a href="contact.php"
                    class="text-black hover:text-orange-300 text-lg font-bold cursor-pointer ">Contact</a>
            </div>';
            }

            ?>

        </div>
    </nav>



    <!-- Movies Page -->

    <section class="my_grid mx-auto my-[5rem]">


        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $video_url = $row['video_url'];
                $video_title = $row['video_name'];
                $video_id = $row['id']; ?>

                <?php // echo $video_id;
                
                        echo ' 
            <div class="flex-shrink-0 lg:w-1/4" style="display: flex; width: 300px; height: 300px; flex-direction: column; border: 2px; background-color: gray; ">
                <video style="min-width: 300px; height: 200px;" data-video-id=" ' . $video_id . ' " controls>
                    <source src="videos/' . $video_url . '" type="video/mp4">
                    <source src="videos/' . $video_url . '" type="video/webm">
                    <source src="videos/' . $video_url . '" type="video/avi">
                    <source src="videos/' . $video_url . '" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
                <p class="" style="color: black; font-size: 1.5rem; font-weight: 600; padding-top: 1rem; text-align: center;">
                   ' . $video_title . '
                   </p> 
             </div>
                ';


            }
            // Close the row
        } else {
            echo 'No video to output';
        }

        ?>





    </section>








    <?php

    include('include/footer.php');

    ?>