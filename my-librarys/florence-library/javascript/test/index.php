<?php
/**
 * Created by PhpStorm.
 * User: t0m
 * Date: 22.09.2016
 * Time: 16:48
 */
?>
<script type="text/javascript">
var cast = ["cart-button.png","cancel-button.png"];
var max = count()
var zufall =



</script>
<?php

$allebilder = array("cart-button.png","cancel-button.png");
$max = count($allebilder)-1;
$zufallsbilder = rand(0,$max);
$sekunden = date("s");

class Person {
    public $vorname = "Thomas";
    public $nachname = "Winterling";
    public $alter = 31;

    public function vorstellen () {
        echo "Hallo ich bin " . $this->vorname;
    }
}

$neueperson = new Person;
echo $neueperson->vorstellen();
?>
<script>
    var person = new Object(){
        person.vorname = "Thomas";
        person.nachname = "Winterling";
        peron.alter = 31;

       
    }
    
</script>


