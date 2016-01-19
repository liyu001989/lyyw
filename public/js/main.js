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
});
