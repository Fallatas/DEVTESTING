<?php
echo "<strong style='color: red'>Schleifen steuern ueber break und continue</strong>";
echo "<hr>";
echo "<br>";

for ($i = 1; $i <= 10; $i++){
    if($i == 3){
        continue;
    }
    echo $i . ". Druchlauf <br>\n";
    if ($i == 5){
        break;
    }
}