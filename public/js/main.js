require.config({
    baseUrl: '/js/lib',
    paths: {
        jquery: 'jquery.min',
        semantic: 'semantic.min'
    },
    shim: {
        'semantic': {
            deps: ['jquery'],
            exports: 'semantic'
        }      
    }
});

require(['jquery', 'semantic'], function($) {
    $('.dropdown')
      .dropdown('setting', 'transition', 'vertical flip')
      .dropdown('set selected', 'female');
});
