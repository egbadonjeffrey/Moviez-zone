<?php

require("./include/header.php");

?>


<!-- Header Start -->
<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown">404 Page</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">404 Page</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 animated fadeIn">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid bg-white p-3 w-100" src="img/hero-1.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-white p-3 w-100" src="img/hero-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- 404 Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page Not Found</h1>
                <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our
                    home page or try to use a search?</p>
                <a class="btn btn-primary py-3 px-5" href="index.php">Go Back To Home</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->


<?php

require("./include/footer.php");

?>