$(document).ready(function () {

    var listHeight = $('#page').height();

    $('ul').append('<p style="color: green">' + "Höhe beträgt: " + listHeight + " px" + "</p>");
    $('li').width('50%');
    $('li#one').width(125);
    $('li#two').width('50%');
    $('li#three').width('75%');
});

