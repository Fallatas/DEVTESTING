<?php
/**
 * Created by PhpStorm.
 * User: t0m
 * Date: 05.08.2016
 * Time: 19:06
 */
echo "<strong style='color: red'>While Schleifen</strong>";
echo "<br>";
echo "<strong style='color: red'>Uebung 1:</strong>";
echo "<br>";

$i = 1;
while($i <= 6){
    echo $i;
    echo "<br>";
    $i++;
}

echo "<hr style='color: red'>";
echo "<strong style='color: red'>while Schleife:</strong>";
echo "<br>";

$i = 1;
while($i < 20){
    echo "$i.<a href=''>Ich will immer brav und artig dokumentieren</a><br>\n";
    $i++;
}

echo "<strong style='color: red'>Nochmal als for Schleife:</strong>";
echo "<br>";

for($i = 1; $i < 20; $i++){
    echo "$i.Ich will immer brav und artig dokumentieren.<br>\n";
}

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Das grosse 1 mal 1:</strong>";
echo "<hr style='color: red'>";
?>
<table border="1">
    <?php
    for($i = 1;$i <= 10; $i++){
        echo "<tr>\n";
        for($j = 1;$j <= 10; $j++){
            $zahl = $i * $j;
            echo "\t<td>$zahl</td>\n";
        }
        echo "<tr>\n";
    }
    ?>
</table>
<?php
echo "<hr style='color: red'>";
echo "<br>";
echo "<strong style='color: red'>Ein Array mit einer For - Schleife ausgabe.</strong>";
echo "<br>";

$zahlen = array(10,20,30,40,50,60,70,80,90); /* Ein ganz normales Array mit Zahlen */
$anzahl = count($zahlen); /* Überprüft die Anzahl der Zahlen im Array */

for ($i = 0;$i < $anzahl; $i++){
    echo $zahlen[$i] . "<br>";
}

echo "<hr style='color: red'>";
echo "<strong style='color: red'>Array als Option ausgeben.</strong>";
echo "<hr style='color: red'>";

    $zahlen = array(10,20,30,40,50,60,70,80,90,100);
    $anzahl = count($zahlen);
    ?>
<form>
    <select>
        <?php
        for ($i = 0;$i < $anzahl; $i++)
            echo "<option>" . $zahlen[$i] . "</option>";
        ?>
    </select>
</form>

<?php
echo "<hr style='color: red'>";












