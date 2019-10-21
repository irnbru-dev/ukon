$(function () {
    $(".owl-projects").owlCarousel({
        loop: true,
        dots: true,
        autoplay: true,
        margin: 30,
        nav: false,
        navText: ["<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия 2</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия_2\" data-name=\"Фигура 979 копия 2\" class=\"cls-1\"><g id=\"Фигура_979_копия_2-2\" data-name=\"Фигура 979 копия 2\"><polygon class=\"cls-2\" points=\"25 12.25 6.51 12.25 16.11 2.45 13.71 0 0 14 13.71 28 16.11 25.55 6.51 15.75 25 15.75 25 12.25\"/></g></g></g></svg>", "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия\" data-name=\"Фигура 979 копия\" class=\"cls-1\"><g id=\"Фигура_979_копия-2\" data-name=\"Фигура 979 копия\"><polygon class=\"cls-2\" points=\"11.29 0 8.89 2.45 18.49 12.25 0 12.25 0 15.75 18.49 15.75 8.89 25.55 11.29 28 25 14 11.29 0\"/></g></g></g></svg>"],
        responsive: {
            0: {
                items: 1
            },
            992: {
                items: 2,
                nav: true
            }
        }
    });

    $(".clients-owl").owlCarousel({
        loop: true,
        dots: true,
        autoplay: true,
        margin: 30,
        nav: true,
        navText: ["<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия 2</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия_2\" data-name=\"Фигура 979 копия 2\" class=\"cls-1\"><g id=\"Фигура_979_копия_2-2\" data-name=\"Фигура 979 копия 2\"><polygon class=\"cls-2\" points=\"25 12.25 6.51 12.25 16.11 2.45 13.71 0 0 14 13.71 28 16.11 25.55 6.51 15.75 25 15.75 25 12.25\"/></g></g></g></svg>", "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия\" data-name=\"Фигура 979 копия\" class=\"cls-1\"><g id=\"Фигура_979_копия-2\" data-name=\"Фигура 979 копия\"><polygon class=\"cls-2\" points=\"11.29 0 8.89 2.45 18.49 12.25 0 12.25 0 15.75 18.49 15.75 8.89 25.55 11.29 28 25 14 11.29 0\"/></g></g></g></svg>"],
        responsive: {
            0: {
                items: 1
            },
            548: {
                items: 2
            },
            992: {
                items: 4
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
        nav: true,
        navText: ["<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия 2</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия_2\" data-name=\"Фигура 979 копия 2\" class=\"cls-1\"><g id=\"Фигура_979_копия_2-2\" data-name=\"Фигура 979 копия 2\"><polygon class=\"cls-2\" points=\"25 12.25 6.51 12.25 16.11 2.45 13.71 0 0 14 13.71 28 16.11 25.55 6.51 15.75 25 15.75 25 12.25\"/></g></g></g></svg>", "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 25 28\"><defs><style>.cls-1{isolation:isolate;}.cls-2{fill:#c48b27;}</style></defs><title>Фигура 979 копия</title><g id=\"Слой_2\" data-name=\"Слой 2\"><g id=\"Фигура_979_копия\" data-name=\"Фигура 979 копия\" class=\"cls-1\"><g id=\"Фигура_979_копия-2\" data-name=\"Фигура 979 копия\"><polygon class=\"cls-2\" points=\"11.29 0 8.89 2.45 18.49 12.25 0 12.25 0 15.75 18.49 15.75 8.89 25.55 11.29 28 25 14 11.29 0\"/></g></g></g></svg>"]
    });

});