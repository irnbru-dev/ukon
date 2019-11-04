$('.navbar-toggler').on('click', function () {
    $target = $(this).data("target");

    $(this).toggleClass('open');
    $('.menu-main-container').toggleClass('show');
});


$('.page_item_has_children > a').on('click', function (e) {
    e.preventDefault();

    $(this).next('.children').collapse("toggle");
});


$(window).on('load resize', function () {
    if ($(window).width() < 991) {
        
        $('.menu > .menu-item-has-children > a').on('click tap', function (e) {
            e.preventDefault();

            $(this).toggleClass('open').next('.sub-menu').collapse("toggle");
        });
    }
});


//contact form 7
document.addEventListener('wpcf7mailsent', function () {

    console.log('SEND')

    var $modal = $('.modal'),
        $modalParts = $modal.find('.modal-header,.modal-body,.modal-footer'),
        $responseMsg = $('.response-info').data('response-title'),
        $responseMsgSub = $('.response-info').data('response-subtitle');

    $modalParts.addClass('success');

    setTimeout(function () {
        $modalParts.hide(300);
        $modal
            .find('.modal-content')
            .append('<div class="response-message"><h2>' + $responseMsg + '</h2><p>' + $responseMsgSub + '</p></div>')

    }, 300);

    $modal.on('hidden.bs.modal', function () {
        $modalParts.removeClass('success');
        $modalParts.show();
        $('.response-message').remove();
    });
}, false);


//owl
$(function () {
    $(".owl-projects").owlCarousel({
        loop: true,
        dots: true,
        autoplay: true,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2,
                nav: true,
                navText: ["<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия 2</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия_2\" data-name=\"Фигура 979 копия 2\" class=\"cls-1\"><g id=\"Фигура_979_копия_2-2\" data-name=\"Фигура 979 копия 2\"><polygon class=\"cls-2\" points=\"25 12.25 6.51 12.25 16.11 2.45 13.71 0 0 14 13.71 28 16.11 25.55 6.51 15.75 25 15.75 25 12.25\"/></g></g></g></svg>", "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия\" data-name=\"Фигура 979 копия\" class=\"cls-1\"><g id=\"Фигура_979_копия-2\" data-name=\"Фигура 979 копия\"><polygon class=\"cls-2\" points=\"11.29 0 8.89 2.45 18.49 12.25 0 12.25 0 15.75 18.49 15.75 8.89 25.55 11.29 28 25 14 11.29 0\"/></g></g></g></svg>"]
            }
        }
    });

    $(".clients-owl").owlCarousel({
        loop: true,
        dots: true,
        autoplay: true,
        margin: 30,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            548: {
                items: 2
            },
            992: {
                items: 4,
                nav: true,
                navText: ["<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия 2</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия_2\" data-name=\"Фигура 979 копия 2\" class=\"cls-1\"><g id=\"Фигура_979_копия_2-2\" data-name=\"Фигура 979 копия 2\"><polygon class=\"cls-2\" points=\"25 12.25 6.51 12.25 16.11 2.45 13.71 0 0 14 13.71 28 16.11 25.55 6.51 15.75 25 15.75 25 12.25\"/></g></g></g></svg>", "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия\" data-name=\"Фигура 979 копия\" class=\"cls-1\"><g id=\"Фигура_979_копия-2\" data-name=\"Фигура 979 копия\"><polygon class=\"cls-2\" points=\"11.29 0 8.89 2.45 18.49 12.25 0 12.25 0 15.75 18.49 15.75 8.89 25.55 11.29 28 25 14 11.29 0\"/></g></g></g></svg>"]
            }
        }


    });

    $(".reviews-owl").owlCarousel({
        items: 3,
        loop: true,
        dots: true,
        autoplay: true,
        margin: 30,
        center: true,
        nav: false,
        responsive: {
            992: {
                nav: true,
                navText: ["<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия 2</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия_2\" data-name=\"Фигура 979 копия 2\" class=\"cls-1\"><g id=\"Фигура_979_копия_2-2\" data-name=\"Фигура 979 копия 2\"><polygon class=\"cls-2\" points=\"25 12.25 6.51 12.25 16.11 2.45 13.71 0 0 14 13.71 28 16.11 25.55 6.51 15.75 25 15.75 25 12.25\"/></g></g></g></svg>", "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия\" data-name=\"Фигура 979 копия\" class=\"cls-1\"><g id=\"Фигура_979_копия-2\" data-name=\"Фигура 979 копия\"><polygon class=\"cls-2\" points=\"11.29 0 8.89 2.45 18.49 12.25 0 12.25 0 15.75 18.49 15.75 8.89 25.55 11.29 28 25 14 11.29 0\"/></g></g></g></svg>"]
            }
        }
    });

    // $('[data-toggle="expand"]').on('click', function (e) {
    //     e.preventDefault();
    //
    //     let $target = $(e.target);
    //     // TODO: refactor
    //     if ($target.hasClass('btn')) {
    //         window.location.href = $target.attr('href');
    //     } else {
    //         $(this).next().stop().slideToggle(100, function () {
    //             if ($(this).is(':visible'))
    //                 $(this).css('display', 'flex');
    //         }).parent().toggleClass('active');
    //     }
    // });

});

