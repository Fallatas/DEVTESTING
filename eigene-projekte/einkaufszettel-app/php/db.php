<?php
/* Input Felder werden erstellt. */
for($i = 1; $i <= 15; $i++){

    echo "<input name='produktfelder$i'>";

    if ($i == 3){
        echo "<br>";
    }elseif ($i == 6){
        echo "<br>";
    }elseif ($i == 9){
        echo "<br>";
    }elseif ($i == 12){
        echo "<br>";
    }elseif ($i == 15){
        echo "<br>";
    }
    if (isset($_POST["produktfelder$i"])){

        $produkt = "produkt$i";
        $produkt = $_POST["produktfelder$i"];

        $waren = array($produkt);

        foreach ($waren as $ware ){
            echo $ware . "<br>";

        }
    }
}


?>