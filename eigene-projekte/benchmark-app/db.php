<?php
$server = "localhost";
$user = "root";
$passwort = "";
$databasename = "benchmark-app-database";

$mysqli = new mysqli($server,$user,$passwort,$databasename);

if ($mysqli->connect_error){
    echo "Fehler bei dir Verbindung:<br>" . $mysqli->connect_error;
    $mysqli->close();
}elseif ($mysqli->select_db($databasename) == "benchmark-app-databse"){
    echo "Mit der Datenbank verbunden";
}