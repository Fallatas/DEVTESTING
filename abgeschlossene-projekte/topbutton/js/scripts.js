$(document).ready(function () {

    var $window = $(window);
    var $slideAd = $('#topbutton');
    var endZone = $('#footer').offset().top - $window.height() - 800;

    $window.on('scroll', function() {

        if (endZone < $window.scrollTop()) {
            $slideAd.animate({ 'right': '0px' }, 500);
        } else {
            $slideAd.stop(true).animate({ 'right': '-360px' }, 500);
        }

    });
});