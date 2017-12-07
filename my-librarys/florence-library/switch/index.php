<?php
echo "<strong style='color: red'>Switch</strong> <br>\n";
echo "<strong style='color: red'>Auf Deutsch Schalter wird zur Überprüfung verwendet.</strong>";
echo "<br>";
echo "<hr style='color: red'>";

$dasda = "Apfel";
switch($dasda){
    case "Apfel":
        echo "$dasda ist ein Obst. <br>";
        break;
    case "Karotte":
        echo "$dasda ist ein Gemüse. <br>";
        break;
    case "Käse":
        echo "$dasda ist ein Milchprodukt. <br>";
        break;
    default:
        echo "Kenne ich nicht. <br>";
}

echo "<strong style='color: red'>Switch ohne break <br>\n</strong>";
echo "<strong style='color: red'>Sehen wir uns einmal an was passiert.</strong>";
echo "<br>";
echo "<hr style='color: red'>";

$dasda = "Apfel";
switch($dasda) {
    case "Apfel":
        echo "$dasda ist ein Obst. <br>";
    case "Karotte":
        echo "$dasda ist ein Gemüse. <br>";
    case "Käse":
        echo "$dasda ist ein Milchprodukt. <br>";
    default:
        echo "Kenne ich nicht. <br>";
}


echo "<strong style='color: red'>Jetzt wird alles ausgegeben auch wenn die erste Überprüfung die richtige ist!</strong>";
echo "<br>";
echo "<strong style='color: red'>Ende des Teils mit Switch</strong>";
echo "<br>";
echo "<hr style='color: red'>";