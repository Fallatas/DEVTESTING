<?php
$mysqli = new mysqli("localhost","root","","geld");

if($mysqli->connect_error){
    echo "Fehler bei der Verbindung";
}else{
    $ergebnis = $mysqli->query("SELECT netto,brutto,id FROM uebersicht");
    $zeile = $ergebnis->fetch_array();

    echo "<table border='1'>";
    while($zeile = $ergebnis->fetch_array()){
        echo "<tr><td id='one'>" . htmlspecialchars($zeile["netto"]) . "</td>"
            ."<td id='two' style='color: blue'>" . htmlspecialchars($zeile["brutto"]) . "</td>"
            ."<td id='three' style='color: orange'>" . htmlspecialchars($zeile["id"]) . "</td></tr>";
    }
    echo "</table>";
}
?>