(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
    setTimeout(function () {
      if ($("#spinner").length > 0) {
        $("#spinner").removeClass("show");
      }
    }, 1);
  };
  spinner();

  // Initiate the wowjs
  new WOW().init();

  // Navbar on scrolling
  $(window).scroll(function () {
    if ($(this).scrollTop() > 10) {
      $(".navbar").fadeIn("slow").css("display", "flex");
    } else {
      $(".navbar").fadeOut("slow").css("display", "none");
    }
  });

  // Modal Video
  var $videoSrc;
  $(".btn-play").click(function () {
    $videoSrc = $(this).data("src");
  });
  console.log($videoSrc);
  $("#videoModal").on("shown.bs.modal", function (e) {
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
    );
  });
  $("#videoModal").on("hide.bs.modal", function (e) {
    $("#video").attr("src", $videoSrc);
  });

  // Back to top button
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $(".back-to-top").fadeIn("slow");
    } else {
      $(".back-to-top").fadeOut("slow");
    }
  });
  $(".back-to-top").click(function () {
    $("html, body").animate({ scrollTop: 0 }, 1500, "easeInOutExpo");
    return false;
  });

  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 2000,
  });

  // Testimonials carousel
  $(".testimonial-carousel").owlCarousel({
    autoplay: false,
    smartSpeed: 1000,
    margin: 25,
    loop: true,
    center: true,
    dots: false,
    nav: true,
    navText: [
      '<i class="bi bi-chevron-left"></i>',
      '<i class="bi bi-chevron-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 3,
      },
    },
  });
})(jQuery);

// Dashboard change menu item on click

//JavaScript Code
// document.addEventListener('DOMContentLoaded', function() {
//   var menuItems = document.querySelectorAll('#menu a');
//   menuItems.forEach(function(item) {
//       item.addEventListener('click', function(e) {
//           e.preventDefault();
//           var page = this.getAttribute('data-page');

//           var xhr = new XMLHttpRequest();
//           xhr.open('GET', 'load_content.php?page=' + page, true);
//           xhr.onreadystatechange = function() {
//               if (xhr.readyState === 4 && xhr.status === 200) {
//                   document.getElementById('content').innerHTML = xhr.responseText;
//               }
//           };
//           xhr.send();
//       });
//   });
// });

//Jquery Code
$(document).ready(function () {
  // Listen for menu item clicks
  $("#menu li a").click(function (e) {
    // e.preventDefault();
    var page = $(this).data("page");

    // Make an AJAX request to load the content
    $.ajax({
      url: "../dashboard.php", // PHP script to load content based on the page parameter
      method: "GET",
      data: { page: page },
      success: function (response) {
        // Update the content area with the loaded content
        $("#content").html(response);
      },
    });
  });
});

// console.log("working");
