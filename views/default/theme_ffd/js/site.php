<?php ?>
//<script>
elgg.provide('elgg.theme_ffd');

elgg.theme_ffd.init = function() {
    $('.theme-ffd-collapse-control').live('click', function(event) {
        event.preventDefault();

        $('.theme-ffd-collapse-control').toggle();
        $('.theme-ffd-collapsable').toggle(400);
    });

    $('.ffd-widget-videos .elgg-list a').live('click', function(event) {
        event.preventDefault();

        $(this).closest('.ffd-widget-videos').find('.elgg-item').removeClass('selected');
        $(this).closest('.elgg-item').addClass('selected');

        elgg.get('/videolist/watch/' + $(this).data('guid') + '/video', {
            success: function(resultText, success, xhr) {
                $('.ffd-widget-videos .video').html(resultText);
            }
        });
    });

};

elgg.register_hook_handler('init', 'system', elgg.theme_ffd.init);