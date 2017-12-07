<?php
echo "<strong style='color: red'>Objectorientierte Programmierung</strong>";
echo "<br>";
echo "<strong style='color: red'>Uebung 1:</strong>";
echo "<br>";

class Kunde{
    public $zahl = 1;
    public $name;
    public $nachname = "Musterman";
    public function sagHallo(){
        echo "Hallo";
    }
}

$neuerKunde = new Kunde();
$neuerKunde->name = "Max";
$neuerKunde->sagHallo();
echo " ";
echo $neuerKunde->name;
echo " ";
echo $neuerKunde->nachname;
echo "<br>";
echo $neuerKunde->zahl;

echo "<pre>";
echo print_r($neuerKunde);
echo "</pre>";


echo "<strong style='color: red'>Uebung 2:</strong>";
echo "<br>";

class Shopper {
    public $name = "Tom";
    public function sayHallo(){
        echo "Hallo{$this->name}";
    }
}

$neuerShopper = new Shopper();
$neuerShopper->sayHallo();


echo "<hr style='color: red'>";
echo "<strong style='color: red'>Objekte erstellen oder zerstoeren:</strong>";
echo "<br>";

class Beispielklassen{

    public function __construct(){
        echo get_class($this) . " wurde erstellt<br>";
    }
    public function __destruct()
    {
        echo get_class($this) . " wurde zerstoert";
    }
}

$objekt = new Beispielklassen();
unset($objekt);

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Aufgabe 1:</strong>";
echo "<br>";
echo "<strong style='color: red'>Definieren Sie eine Klasse nur mit dem Namen Fahrzueg,die die folgenden Eigenschaften hat:</strong>";
echo "<br>";
echo "<strong style='color: red'>Farbe,Hersteller.</strong>";
echo "<br>";
echo "<strong style='color: red'>Und ausserdem hat sie zwei Methoden,die jeweils eine Medldung ausgegeben:</strong>";
echo "<br>";
echo "<strong style='color: red'>Starten,Stoppen.</strong>";
echo "<br>";
echo "<strong style='color: red'>Erstellen Sie dann noch ein Objekt zur Klasse!</strong>";
echo "<br>";

class Fahrzeug{
    public $Farbe;
    public $Hersteller;
    public function _construct($farbe,$hersteller){
        $this->farbe = $farbe;
        $this->hersteller = $hersteller;
    }
    public function autostarten(){
        echo "Auto wird gestartet.";
    }
    public function autostoppen(){
        echo "Das Auto wird gestoppt.";
    }
}

$neuesAuto = new Fahrzeug ();
echo $neuesAuto->autostarten();
echo "<br>";
echo $neuesAuto->autostoppen();
echo "<br>";
echo "<hr style='color: red'>";

class Benutzer {
    public $datum;
    public $zahl = 1;
    public function halloSagen(){
        echo "Hallo";
    }
}

$neuerBenutzer = new Benutzer;
echo $neuerBenutzer->zahl;
echo "<br>";
echo $neuerBenutzer->halloSagen();
echo "<br>";

if($neuerBenutzer->zahl == 1){
    echo "Die Zahl lautet: 1";
}else{
    echo "Die Zahl lautet nicht 1";
}

echo "<hr style='color: red'>";

echo "<strong style='color: red'>Konstanten:</strong>";
echo "<br>";

class Konst {
    const KONST_WERT = 42;
    public function ausgabe(){
        echo self::KONST_WERT;
    }
}

$thing = new Konst;
$thing->ausgabe();

echo "<hr style='color: red'>";



