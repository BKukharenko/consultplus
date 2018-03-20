$(document).ready(function () {



    $('.post-share-text').click(function () {
        $(this).find('.share-list , .share-text').toggle("slide");
    });

    $(".fa-share-alt").click(function () {
        $(this).toggleClass("active");
    });

});
