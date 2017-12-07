$(document).ready(function () {

    var offset = $("div").offset();

    console.log(offset);

    /* Abstand Links */
    var abstanstleft = offset.left;

    /* Abstand Rechts */
    var abstandright = offset.right;

    /* Ausgabe der Abstände */
    console.log("Der Abstand links lautet: " + abstanstleft);
    console.log("Der Abstand rechts leutet: " + abstandright);

    var window = $(window);
    var $slideAd = $("#slideAd");
    var endZone = $("#footer").offset().top() - $window.height() - 500;

    $window.on("scroll",function () {

        if(endZone < $window.scrollTop()){
            $slideAd.animate({"right" : "0px"},250);
        }else {
            $slideAd.stop(true).animate({"right" : "-350px"},250);
        }

    });
});

