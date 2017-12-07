$(document).ready(function () {

    /* Hier wird auf alle Listitems zugegriffen */
    /* Mit Each() wird auf allen Elementen die davor stehen der selbe Code ausgeführt */
   $('li').each(function () {
       var ids = this.id;
       $(this).append("<em>" +  " Produkt hat folgende id -> " + ids + "</em>");
   });

});

