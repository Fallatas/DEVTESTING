var bild1;
var bild2;

function vorladen() {
    bild1 = new Image();
    bild1.src = "handy-1.jpg";
    bild2 = new Image();
    bild2.src = "handy-2.jpg";
}

function Nachvorne() {
    document.getElementById("bilderrahmen").src = bild2.src;
}

function Back() {
    document.getElementById("bilderrahmen").src = bild1.src;
}

window.onload = vorladen();
