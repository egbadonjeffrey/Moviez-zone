<!-- Footer Start -->
<div class="container-fluid footer position-relative bg-dark text-white-50 py-5 px-4 px-lg-5 wow fadeIn"
    data-wow-delay="0.1s">
    <div class="row g-5 py-5">
        <div class="col-lg-6 pe-lg-5">
            <a href="index.html" class="navbar-brand">
                <h1 class="display-5 text-primary">Mymoviezone</h1>
            </a>
            <p>Share the magic of movies with friends, from anywhere, and with everyone..</p>
            <p><i class="fa fa-map-marker-alt me-2"></i>Nigeria</p>
            <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square btn-outline-primary rounded-circle me-2" href="#"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-6 ps-lg-5">
            <div class="row g-5">
                <div class="col-sm-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="movies.php">Movies</a>
                    <a class="btn btn-link" href="signup.php">Register</a>
                    <!-- <a class="btn btn-link" href="">Support</a> -->
                </div>
                <!-- <div class="col-sm-6">
                    <h4 class="text-light mb-4">Popular Links</h4>
                <a class="btn btn-link" href="index.php">Home</a>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="movies.php">Movies</a>
                <a class="btn btn-link" href="signup.php">Register</a>
                <a class="btn btn-link" href="">Support</a>
            </div> -->
                <div class="col-sm-12">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 bg-secondary" style="padding: 20px 30px;"
                                placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-dark text-white border-top border-secondary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
        <div class="py-4 px-5 text-center text-md-start">
            <p class="mb-0">&copy; <a class="text-primary" href="#">mymoviezone</a>. All Rights Reserved.</p>
        </div>
        <div class="py-4 px-5 bg-secondary footer-shape position-relative text-center text-md-end">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">Designed by <a class="text-primary fw-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
            <p class="mb-0">Developed by <a class="text-primary fw-bold" href="">Scarlett</a></a>
            </p>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<!-- dropdown script for nav -->
<script>
    const dropdown = document.getElementById('dropdown');

    console.log(dropdown);

    dropdown.addEventListener('mouseenter', () => {
        const dropdownContent = dropdown.querySelector('.hidden');
        dropdownContent.classList.remove('hidden');
        dropdownContent.classList.add('block');
    });

    dropdown.addEventListener('mouseleave', () => {
        const dropdownContent = dropdown.querySelector('.block');
        dropdownContent.classList.remove('block');
        dropdownContent.classList.add('hidden');
    });
</script>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>



<?php

$dashboard1 = '/moviez-zone/dashboard.php?page=page1';
$dashboard2 = '/moviez-zone/dashboard.php?page=page2';
$signin = '/moviez-zone/signin.php';
$signup = '/moviez-zone/signup.php';

if ($currentRoute == $dashboard1 || $currentRoute == $dashboard2 || $currentRoute == $signin || $currentRoute == $signup) {
    echo "<!-- Tailwindcss Stylesheet -->
<script src='https://cdn.tailwindcss.com'></script>";
}

?>





<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>