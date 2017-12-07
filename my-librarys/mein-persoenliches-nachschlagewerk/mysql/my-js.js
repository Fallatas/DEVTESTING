$(':header').hide().fadeIn(2000);
$(':header').on("click",function () {
    $(this).remove();
});
