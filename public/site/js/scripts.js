$(document).ready(function() {

    $('.button-collapse').sideNav();

    $('.banner.owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true
    });

    $('.tripadvisor .owl-carousel').owlCarousel({
        items: 1,
        loop: true,
        margin: 10,
        nav: true
    });

    // Carrousel de imagens de mais detalhes

    const quantImg = $('.details .owl-carousel img').length;

    if (quantImg > 4) {
        $('.details .owl-carousel').owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            nav: true
        });
    }

    // Troca de imagem do carousel para destaque

    $('.details .owl-carousel .item').hover(function() {
        let image = $(this).find('img').attr('src');
        $('.details .featured img').attr('src', image);
    });

    setTimeout(() => {
        $('.owl-next').html('<span class="fa fa-angle-double-right"></span>');
        $('.owl-prev').html('<span class="fa fa-angle-double-left"></span>');
    }, 500);

});