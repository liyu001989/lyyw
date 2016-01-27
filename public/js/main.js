require.config({
    baseUrl: "/js/",
    paths: {
        jquery: "../assets/bower/jquery/dist/jquery.min",
        sementic: "../assets/bower/semantic/dist/semantic.min"
    },
    shim: {
        'sementic': ['jquery'],
    }
});

require(['jquery', 'sementic'], function($) {
    $('.ui.sidebar')
        .sidebar('attach events', '.toc.item');

    // 平滑滚动
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
});
