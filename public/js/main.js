$(document).ready(function() {

  // Slick Slide for Facebook Page feed
  $('.fb-feed').slick({
    dots: true,
    infinite: true,
    speed: 700,
    autoplay:true,
    autoplaySpeed: 2000,
    arrows:false,
    slidesToShow: 1,
    slidesToScroll: 1
  });

    // This will fire when document is ready:
    $(window).resize(function() {
        // This will fire each time the window is resized:
        if($(window).width() <= 768) {
            // if larger or equal
            $('#responsive_social').show();
        } else {
            // if smaller
            $('#responsive_social').hide();
        }
    }).resize(); // This will simulate a resize to trigger the initial run.


        // $('#navbarResponsive').on('click', function(){
        //   if($('.navbar-toggle').css('display') !='none'){
        //     $(".navbar-toggle").trigger( "click" ); //Navbar onClick Toggle
        //   }
        // });

});











// $(document).ready(function ($) {
//
//     //initialise Stellar.js
//     $(window).stellar();
//     //Cache some variables
//     var links = $('.navigation').find('li');
//     slide = $('.slide');
//     button_Down = $('.button');
//     button_Up = $('.buttonUp');
//     mywindow = $(window);
//     htmlbody = $('html,body');
//     //Setup waypoints plugin
//     slide.waypoint(function (event, direction) {
//         //cache the variable of the data-slide attribute associated with each slide
//         dataslide = $(this).attr('data-slide');
//         //If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and
//         //remove the active class from the previous navigation link
//         if (direction === 'down') {
//             $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');
//         }
//         // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to active and
//         //remove the active class from the next navigation link
//         else {
//             $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').next().removeClass('active');
//         }
//     });
//     //waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class
//     //from navigation link slide 2 and adds it to navigation link slide 1.
//     mywindow.scroll(function () {
//         if (mywindow.scrollTop() == 0) {
//             $('.navigation li[data-slide="1"]').addClass('active');
//             $('.navigation li[data-slide="2"]').removeClass('active');
//         }
//     });
//     //Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
//     //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
//     function goToByScroll(dataslide) {
//         htmlbody.animate({
//             scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top
//         }, 2000, 'easeInOutQuint');
//     }
//     //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
//     links.click(function (e) {
//         e.preventDefault();
//         dataslide = $(this).attr('data-slide');
//         goToByScroll(dataslide);
//     });
//     //When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
//     button_Down.click(function (e) {
//         e.preventDefault();
//         dataslide = $(this).attr('data-slide');
//         goToByScroll(dataslide);
//     });
//     button_Up.click(function (e) {
//         e.preventDefault();
//         dataslide = $(this).attr('data-slide');
//         goToByScroll(dataslide);
//     });
//         $('.nav a').on('click', function(){
//         if($('.navbar-toggle').css('display') !='none'){
//         $(".navbar-toggle").trigger( "click" ); //Navbar onClick Toggle
//         }
//     });
//
//         setInterval(function(){
//           $('.panel-title>a.active').removeClass('active');//remove class active
//         },0);
//
//         $('#accordion').on('show.bs.collapse', function () {
//         $('#accordion .in').collapse('hide');
//     });
// });
