define([
    "jquery",
    "jquery/ui",
    "slick",
], function ($, alert) {
    'use strict';
    $(document).ready(function() {
        $('#banner_slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            swipe:true
        });
    });
});

