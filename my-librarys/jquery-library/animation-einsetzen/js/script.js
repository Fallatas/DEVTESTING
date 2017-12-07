$(document).ready(function () {

    /* Bei einem Click auf ein Li Element wird die Funktion ausgeführt */
  $('li').on("click", function () {
      $(this).animate({
        opacity: 0.0 ,
        paddingLeft: '+=80'
      } , 500 , function () {
          $(this).remove();
      });
  });
});

