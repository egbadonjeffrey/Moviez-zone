<?php


session_start();

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


    <?php

    if ($currentRoute == $movies) {

        echo '
    <style>
    .my-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
      }
      
    //   @media (min-width: 640px) {
    //     .my-grid {
    //       grid-template-columns: repeat(2, 1fr);
    //     }
    //   }
      
      @media (max-width: 768px) {
        .my-grid {
          grid-template-columns: repeat(2, 1fr);
        }
      }
      
      @media (max-width: 1400px) {
        .my-grid {
          grid-template-columns: repeat(3, 1fr);
        }
      }
      
      .my-grid-gap {
        gap: 1rem;
      }
      </style>
      ';
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

    $dashboard1 = '/moviez-zone/dashboard.php?page=page1';
    $dashboard2 = '/moviez-zone/dashboard.php?page=page2';
    $signin = '/moviez-zone/signin.php';
    $signup = '/moviez-zone/signup.php';

    if ($currentRoute !== $dashboard1 && $currentRoute !== $dashboard2 && $currentRoute !== $signin && $currentRoute !== $signup) { ?>

        <?php if (isset($_SESSION['user_id'])) { ?>
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow py-lg-0 px-4 px-lg-5">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="text-primary">Mymoviezone</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="movies.php" class="nav-item nav-link">Movies</a>
                    </div>
                    <a href="index.html" class="navbar-brand bg-primary py-2 px-4 mx-3 d-none d-lg-block">
                        <h1 class="text-white">Mymoviezone</h1>
                    </a>
                    <div class="navbar-nav me-auto py-0">
                        <a href="dashboard.php?page=page1" class="nav-item nav-link">Dashboard</a>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </a>
                            <ul class="dropdown-menu bg-light" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                                <li><a class="dropdown-item" href="./utils/process_logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>




        <?php } else { ?>

            <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn"
                data-wow-delay="0.1s">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="text-primary">Mymoviezone</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="movies.php" class="nav-item nav-link">Movies</a>
                    </div>
                    <a href="index.html" class="navbar-brand bg-primary py-2 px-4 mx-3 d-none d-lg-block">
                        <h1 class="text-white">Mymoviezone</h1>
                    </a>
                    <div class="navbar-nav me-auto py-0">
                        <a href="signin.php" class="nav-item nav-link">Login</a>
                        <a href="signup.php" class="nav-item nav-link">Join us</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>



            <!-- Navbar End -->
        <?php } ?>

    <?php } ?>