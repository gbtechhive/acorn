// Testimonials carousel
$(".testimonials-carousel").owlCarousel({
    autoplay: true,
    animateIn: "slideInDown",
    animateOut: "slideOutDown",
    items: 1,
    smartSpeed: 450,
    dots: false,
    loop: true,
    nav: true,
    navText: [
        "<img src='./assets/images/next.png'>",
        "<img src='./assets/images/prv.png'>"
        // '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        // '<i class="fa fa-angle-right" aria-hidden="true"></i>',
    ],
    responsive: {
        0: {
            items: 1,
        },
        576: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 4,
        },
    },
});

var swiper = new Swiper(".product-slider", {
    spaceBetween: 30,
    effect: "fade",
    autoplay: true,
    // initialSlide: 2,
    loop: false,
    navigation: {
        nextEl: ".next",
        prevEl: ".prev",
    },
    // mousewheel: {
    //     // invert: false
    // },
    on: {
        init: function () {
            var index = this.activeIndex;

            var target = $(".product-slider__item").eq(index).data("target");

            console.log(target);

            $(".product-img__item").removeClass("active");
            $(".product-img__item#" + target).addClass("active");
        },
    },
});

swiper.on("slideChange", function () {
    var index = this.activeIndex;

    var target = $(".product-slider__item").eq(index).data("target");

    console.log(target);

    $(".product-img__item").removeClass("active");
    $(".product-img__item#" + target).addClass("active");

    if (swiper.isEnd) {
        $(".prev").removeClass("disabled");
        $(".next").addClass("disabled");
    } else {
        $(".next").removeClass("disabled");
    }

    if (swiper.isBeginning) {
        $(".prev").addClass("disabled");
    } else {
        $(".prev").removeClass("disabled");
    }
});

$(".js-fav").on("click", function () {
    $(this).find(".heart").toggleClass("is-active");
});
