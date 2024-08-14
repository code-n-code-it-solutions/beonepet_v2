var swiper = new Swiper(".productSwiper", {
    slidesPerView: 5,  // Number of slides to show at a time
    spaceBetween: 10,  // Space between slides
    loop: true,        // Loop through slides
    autoplay: {
        delay: 2500,   // Auto scroll delay in milliseconds
        disableOnInteraction: false,  // Keep auto scroll even when user interacts
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 5,
            spaceBetween: 40,
        },
    }
});

var swiper = new Swiper(".plansSwiper", {
    slidesPerView: 3,  // Number of slides to show at a time
    spaceBetween: 80,  // Space between slides
    loop: true,        // Loop through slides
    autoplay: {
        delay: 2500,   // Auto scroll delay in milliseconds
        disableOnInteraction: false,  // Keep auto scroll even when user interacts
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        576: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        992: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
    }
});


$(window).scroll(function(e){
    parallax();
});

function parallax(){
    var scrolled = $(window).scrollTop();
    $('.hero').css('top',-(scrolled*0.0315)+'rem');
    $('.hero > img').css('top',-(scrolled*-0.005)+'rem');
    // $('.hero > img').css('opacity',1-(scrolled*.00175));
};
