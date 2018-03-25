$(document).ready(function () {

    $('.post-share-text').click(function () {
        $(this).find('.share-list , .share-text').toggle("slide");
    });

    $(".fa-share-alt").click(function () {
        $(this).toggleClass("active");
    });

    $(".quotes-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.clients-slider'
    });
    $(".clients-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.quotes-slider',
        dots: true,
        centerMode: true,
        arrows:false,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 1500
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500
                }
            }
        ]
    });

});
