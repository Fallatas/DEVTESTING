var aufloesungshoehe;
var aufloesungsbreite;
var gesamtaufloesung;

aufloesungshoehe = window.innerHeight;
aufloesungsbreite = window.innerWidth;

gesamtaufloesung = aufloesungsbreite + " * " + aufloesungshoehe;

if (gesamtaufloesung == "1920 * 875" ){
    $("#header").hide();
}else{
    document.write(aufloesungshoehe + " * " + aufloesungsbreite);
}

