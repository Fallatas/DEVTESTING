<?php
if(isset($_COOKIE["name"]) && isset($_COOKIE["farbe"])){
    echo "Cookies wurden gesetzt<br>"
        . "Name: " . htmlspecialchars($_COOKIE["name"]) . "<br>\n"
        . "Farbe: " . htmlspecialchars($_COOKIE["farbe"]) . "<br>\n";
}else {
    echo "Kein Cookie gesetzt";
}