
$(':header').hide().delay(2000).fadeIn(1400);
$('header').addClass('myheader').on('click',function () {
    $(this).remove();
});

$("#hallo").on("click",function () {
    $(this).toggle();
});