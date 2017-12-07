<h3 style="color: red">Uebung</h3>
<?php

class Benutzer {
    public $vorname = "Thomas";
    public $nachname = "Winterling";
    public $registrierungsdatum = "16.08.2016";
    public $adresse = "Mozartstr.1";
    public $stadt = "Landshut";
    public $postleitzahl = "84034";
    public function betreff(){
        echo "1.Kunde";
    }
}

$ersterKunde = new Benutzer;

echo $ersterKunde->vorname;
echo "<br>";
echo $ersterKunde->nachname;
echo "<br>";
echo $ersterKunde->registrierungsdatum;
echo "<br>";
echo $ersterKunde->adresse;
echo "<br>";
echo $ersterKunde->stadt;
echo "<br>";
echo $ersterKunde->postleitzahl;
echo "<br>";
echo $ersterKunde->betreff();

echo "<hr>";

echo "<pre>";
echo print_r($ersterKunde);
echo "</pre>";

echo "<hr>";

if($ersterKunde->vorname == $ersterKunde->vorname){
    echo "Stimmt";
}else{
    echo "Falsch";
}

echo "<hr>";

class Kunde {
    public $name;
    public $speicherGesamt = 50;
    public $speicherVerbrauch;
    public function __construct($name, $speicherVerbrauch = 0)
    {
        $this->name = $name;
        $this->speicherVerbrauch = $speicherVerbrauch;
    }
    public function halloSagen(){
        echo "Hallo {$this->name}";
    }

}

echo "<hr>";

class Server {
    public $gesamtSpeicher = 50;
    public $speicherVerbrauch = 51;
    public function speichern($gesamtSpeicher, $speicherVerbrauch){
        if($this->gesamtSpeicher == $this->speicherVerbrauch){
            echo "Habe gespeichert.<br>";
            echo "Specherplatz wird kanpp.<br>";
            echo "Belegter Speichplatz: " . $speicherVerbrauch . " MB.";
        }elseif ($this->gesamtSpeicher >= $this->speicherVerbrauch){
            echo "Habe gespeichert.<br>";
            echo "Belegter Speichplatz: " . $speicherVerbrauch . " MB.";
        }else{
            echo "Speichern nicht moeglich.<br>";
            echo "Zu wenig Speicherplatz.";
        }
    }
}

$obect = new Server;
$obect->speichern(50,50);

echo "<br>";
echo "<hr>";

function addieren($a, $b){
    $ergebnis = $a - $b;
    echo $ergebnis;
}

addieren(20,10);

echo "<hr>";



function speichern($gesamtSpeicher,$speicherVerbrauch){
    $verfuegbarerSpeicher = $gesamtSpeicher - $speicherVerbrauch;
    if($gesamtSpeicher == $speicherVerbrauch ){
        echo "Habe gespeichert<br>";
        echo "Speicher wird kanpp <br>";
        echo "Verfuegbarer Speicher betraegt: " . $verfuegbarerSpeicher . " MB";
    }elseif ($gesamtSpeicher >= $speicherVerbrauch){
        echo "Es wurde gespeichert<br>";
        echo "Verfuegbarer Speicher betraegt: " . $verfuegbarerSpeicher . " MB";
    }else{
        echo "Speichern nicht moeglich<br>";
        echo "Nicht genuegend Speicherplatz.<br>";
        echo "Zum speichern fehlen noch: " . $verfuegbarerSpeicher . " MB";
    }
}

$gesamtSpeicher = rand(20,60);
$speicherVerbrauch = rand(20,60);

speichern($gesamtSpeicher ,$speicherVerbrauch);


