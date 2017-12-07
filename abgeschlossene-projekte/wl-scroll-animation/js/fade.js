$(document).ready(function () {

    var $window = $(window);
    /* Das Fenster das ausgefahren werden soll */
    var $slideAd = $('#slideAd');
    /* Hier lässt sich die Höhe steuern (- 1800 )*/
    var endZone = $('#footer').offset().top - $window.height() - 1800;

    $window.on('scroll', function() {

        if (endZone < $window.scrollTop()) {
            $slideAd.animate({ 'right': '0px' }, 500);
        } else {
            $slideAd.stop(true).animate({ 'right': '-360px' }, 500);
        }
    });

    $listitems = $("li");

    $listitems.each(function () {

        var $this = $(this);

        $this.on("click",function () {
           $this.fadeOut();
        });

    });

    var text = "Bier";

    list = $("ul");

    $("h1").on("click",function () {
      list.append("<li>" + text + "</li>");
    });

});

