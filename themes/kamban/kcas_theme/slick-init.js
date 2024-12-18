(function ($) {
    $(document).ready(function () {
        $('.slider').slick({
            dots: true,               // Show dots for navigation
            infinite: true,           // Infinite looping
            speed: 500,               // Transition speed
            slidesToShow: 1,          // Number of slides to show
            slidesToScroll: 1,        // Number of slides to scroll
            autoplay: true,           // Enable autoplay
            autoplaySpeed: 2000,      // Autoplay speed
            arrows: true,             // Show navigation arrows
        });
    });
})(jQuery);
