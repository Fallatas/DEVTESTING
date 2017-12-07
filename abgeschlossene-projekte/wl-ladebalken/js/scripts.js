$(document).ready(function () {

    function ladebalken() {
        $("#ladebalken").animate({"width" : "500px"},3000,function () {
            $("#ladebalken").fadeOut(1500);
        });
    }
    ladebalken();
});