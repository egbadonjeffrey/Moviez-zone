<?php

require("./include/header.php");

?>
<!-- Header Start -->
<div class="container-fluid hero-header bg-light py-5 mb-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <p class="text-primary text-uppercase mb-2 animated slideInDown">Welcome To Moviezone</p>
                <h1 class="display-4 mb-3 animated slideInDown">Movies shared by friends</h1>
                <p class="animated slideInDown">Share the magic of movies with friends, from anywhere, and with
                    everyone.
                </p>
                <div class="d-flex align-items-center pt-4 animated slideInDown">
                    <a href="" class="btn btn-primary py-3 px-4 me-5">Explore More</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
            <div class="col-lg-6 animated fadeIn">
                <div class="row g-3">
                    <div class="col-6 text-end">
                        <img class="img-fluid bg-white p-3 w-100 h-50 mb-3" src="img/hero-1.webp" alt="">
                        <img class="img-fluid bg-white p-3 w-60 h-50" src="img/hero-3.jpg" alt="">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid bg-white p-3 w-60 h-40 mb-3" src="img/hero-4.jpg" alt="">
                        <img class="img-fluid bg-white p-3 w-100" src="img/hero-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-3 img-twice position-relative h-100">
                    <div class="col-6">
                        <img class="img-fluid bg-light p-3" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 align-self-end">
                        <img class="img-fluid w-100 bg-light p-3" style="height: 350px;" src="img/about-2.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <p class="text-primary text-uppercase font-bold mb-2">About Us</p>
                    <h1 class="display-6 mb-4">Moviez zone - Where cinematic passion meets seamless sharing. </h1>
                    <p>Welcome to our movie upload and download platform, where cinematic passion meets seamless
                        sharing. At our core, we are dedicated to bringing the world of movies closer to you. Whether
                        you're a filmmaker looking to showcase your work or a movie enthusiast eager to discover new
                        cinematic treasures, our platform is your gateway to a world of entertainment.

                    <p>
                        We're committed to making your movie-sharing experience as user-friendly as possible. Our
                        intuitive interface and robust features ensure that uploading and downloading your favorite
                        films is a breeze. Join our community of movie lovers, where you can explore, connect, and
                        celebrate the art of storytelling through the silver screen.
                    </p>

                    <p> With a vast library of diverse films and a vibrant community of users, we invite you to embark
                        on a cinematic journey that transcends boundaries. Explore, share, and experience the magic of
                        movies with us. Welcome to the world of limitless cinematic possibilities.
                    </p>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Facts Start -->
<!-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Why Choose Us!</p>
            <h1 class="display-6 mb-5">The Leading Photo Studio In The Country</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-4 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="fact-item bg-light text-center h-100 p-5">
                    <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">35</h1>
                    <h4 class="mb-3">Award Winning</h4>
                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                        duo justo</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="fact-item bg-light text-center h-100 p-5">
                    <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">45</h1>
                    <h4 class="mb-3">Years Experience</h4>
                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                        duo justo</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="fact-item bg-light text-center h-100 p-5">
                    <h1 class="display-2 text-primary mb-3" data-toggle="counter-up">12345</h1>
                    <h4 class="mb-3">Happy Clients</h4>
                    <span>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                        duo justo</span>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Facts End -->


<!-- Service Start -->
<div class="container-xxl bg-light py-5 my-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Our Services</p>
            <h1 class="display-6 mb-4">We Provide a platform to Share and Download Movies</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                    <div class="position-relative">
                        <img class="img-fluid" style="height: 350px;" src="img/project-2.webp" alt="">
                        <div class="service-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                    class="fa fa-link text-primary"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h4>Action</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                    <div class="position-relative">
                        <img class="img-fluid" src="img/project-6.jpg" alt="">
                        <div class="service-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                    class="fa fa-link text-primary"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h4>Science Fiction</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                    <div class="position-relative">
                        <img class="img-fluid" style="height: 350px;" src="img/project-7.jpeg" alt="">
                        <div class="service-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                    class="fa fa-link text-primary"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h4>Comedy</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 pt-lg-5 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item d-flex flex-column bg-white p-3 pb-0">
                    <div class="position-relative">
                        <img class="img-fluid" style="height: 350px;" src="img/project-4.jpg" alt="">
                        <div class="service-overlay">
                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i
                                    class="fa fa-link text-primary"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h4>Romance</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Our Works</p>
            <h1 class="display-6 mb-0">Discover Movies shared by friends</h1>
        </div>
        <div class="row g-3">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid w-100" style="height: 250px;" src="img/project-5.jpeg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-5.jpeg" data-lightbox="project">
                                Action
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid" src="img/project-1.jpg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-1.jpg" data-lightbox="project">
                                Romance
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid" style="height: 400px;" src="img/project-2.webp" alt="">
                            <a class="project-title h5 mb-0" href="img/project-2.webp" data-lightbox="project">
                                Indian
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid" style="height: 250px;" src="img/project-6.jpg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-6.jpg" data-lightbox="project">
                                Sci-Fi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid w-100" style="height: 250px;" src="img/project-7.jpeg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-7.jpeg" data-lightbox="project">
                                Comedy
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid" src="img/project-3.jpg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-3.jpg" data-lightbox="project">
                                Horror
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid w-100" style="height: 400px;" src="img/project-4.jpg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-4.jpg" data-lightbox="project">
                                Drama
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="project-item">
                            <img class="img-fluid w-100" style="height: 250px;" src="img/project-8.jpg" alt="">
                            <a class="project-title h5 mb-0" href="img/project-8.jpg" data-lightbox="project">
                                Animation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-------------- Team Start ----------------->
<!-- <div class="container-xxl px-0 py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Our Team</p>
            <h1 class="display-6 mb-0">Creative Photograher And Videographer</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 flex-sm-row">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Lucifer Jhones</h4>
                                <span>Photographer</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse flex-lg-row">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Jesse Joslin</h4>
                                <span>Videographer</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 flex-lg-row-reverse">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>Richard Archer</h4>
                                <span>Retoucher</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-0 flex-sm-row-reverse">
                    <div class="col-sm-6">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="h-100 p-5 d-flex flex-column justify-content-between">
                            <div class="mb-3">
                                <h4>April Ryan</h4>
                                <span>Editor</span>
                            </div>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita
                                duo</p>
                            <div class="d-flex">
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="text-primary text-uppercase mb-2">Client's Review</p>
            <h1 class="display-6 mb-0">What Users That Share On Our Platform Have To Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-white p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-1.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                    Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-white p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-2.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                    Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-white p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-3.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                    Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-white p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos.
                    Clita erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<?php

require("./include/footer.php");

?>