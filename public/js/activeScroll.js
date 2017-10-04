// $(document).ready(function () {
//
//   (function($) {
//     "use strict"; // Start of use strict
//
//     // Smooth scrolling using jQuery easing
//     $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
//       if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//         if (target.length) {
//           $('html, body').animate({
//             scrollTop: (target.offset().top - 54)
//           }, 1000, "easeInOutExpo");
//           return false;
//         }
//       }
//     });
//
//     // Closes responsive menu when a scroll trigger link is clicked
//     $('.js-scroll-trigger').click(function() {
//       $('.navbar-collapse').collapse('hide');
//     });
//
//     // Activate scrollspy to add active class to navbar items on scroll
//     $('body').scrollspy({
//       target: '#mainNav',
//       offset: 54
//     });
//
//   })(jQuery); // End of use strict
//
//






//     $(document).on("scroll", onScroll);
//
//     $('a[href^="#"]').on('click', function (e) {
//         e.preventDefault();
//         $(document).off("scroll");
//
//         $('nav a').each(function () {
//             $(this).removeClass('active');
//         })
//         $(this).addClass('active');
//
//         var target = this.hash;
//         $target = $(target);
//         $('html, body').stop().animate({
//             'scrollTop': $target.offset().top+1
//         }, 1000, 'swing', function () {
//             window.location.hash = target;
//             $(document).on("scroll", onScroll);
//         });
//     });
// });
//
// function onScroll(event){
//     var scrollPosition = $(document).scrollTop();
//     $('nav a').each(function () {
//         var currentLink = $(this);
//         var refElement = $(currentLink.attr("href"));
//         if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
//             $('nav a').removeClass("active");
//             currentLink.addClass("active");
//         }
//         else{
//             currentLink.removeClass("active");
//         };
//     });
// });
