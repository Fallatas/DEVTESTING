function slideSwitch() {
    var $active = $('div#slideshow IMG.active');
    var $next = $active.next();

    $next.addClass('active');

    $active.removeClass('active');
}

autoLoad();

function autoLoad() {
    $("#scrollbar").animate({"width" : "1300px"},3000,function () {
        $(this).css("width","0");
    });
}

$(function() {
    setInterval( "slideSwitch()", 3000 );
    setInterval( "autoLoad()", 3000);
});