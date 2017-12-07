<?php

echo "<strong style='color: red'>Mein Kartenspiel</strong>";
echo "<br>";
echo "<hr style='color: red'>";

class Karten {
    public function alleKartenbilder(){
       $alleKarten = array("bilder/herz/herz2.jpg","bilder/herz/herz3.jpg","bilder/herz/herz4.jpg","bilder/herz/herz5.jpg","bilder/herz/herz6.jpg",
       "bilder/herz/herz7.jpg","bilder/herz/herz8.jpg","bilder/herz/herz9.jpg","bilder/herz/herz10.jpg","bilder/herz/herzbube.png","bilder/herz/herzdame.jpg",
       "bilder/herz/herzkoenig.jpg","bilder/herz/herzass.jpg","bilder/karo/karo3.jpg","bilder/karo/karo4.jpg","bilder/karo/karo5.jpg","bilder/karo/karo6.jpg",
       "bilder/karo/karo7.jpg","bilder/karo/karo8.jpg","bilder/karo/karo9.jpg","bilder/karo/karo10.jpg","bilder/karo/karobube.jpg","bilder/karo/karodame.jpg",
       "bilder/karo/karokoenig.jpg","bilder/karo/karoass.jpg","bilder/kreuz/kreuz2.jpg","bilder/kreuz/kreuz3.jpg","bilder/kreuz/kreuz4.jpg","bilder/kreuz/kreuz5.jpg",
       "bilder/kreuz/kreuz6.jpg","bilder/kreuz/kreuz7.jpg","bilder/kreuz/kreuz8.jpg","bilder/kreuz/kreuz9.jpg","bilder/kreuz/kreuz10.jpg","bilder/kreuz/kreuzbube.jpg",
       "bilder/kreuz/kreuzdame.jpg","bilder/kreuz/kreuzkoenig.jpg","bilder/kreuz/kreuzass.jpg","bilder/pik/pik2.jpg","bilder/pik/pik3.jpg","bilder/pik/pik4.jpg",
       "bilder/pik/pik5.jpg","bilder/pik/pik6.jpg","bilder/pik/pik7.jpg","bilder/pik/pik8.jpg","bilder/pik/pik9.jpg","bilder/pik/pik10.jpg","bilder/pik/pikbube.jpg",
       "bilder/pik/pikdame.jpg","bilder/pik/pikkoenig","bilder/pik/pikass");
        $maxbilder = count($alleKarten)-1;
        $zufallskarte = rand(0,$maxbilder);
        echo "<img src='$alleKarten[$zufallskarte]'>";
    }


}

$alleKartenobject = new Karten;
$alleKartenobject->alleKartenbilder();
?>

<form action="index.php" method="get">
Ihre Vorname: <br>
<input type="text" name="vorname" size="20" maxlength="30"/>
<br>
Ihr Nachname: <br>
<input type="text" name="nachname" size="20" maxlength="30"/>
<br>
Ihre Emailadresse: <br>
<input type="email" name="email" size="20" maxlength="30">
<br>
Ihre Telefonnummer: <br>
<input type="tel" name="telefon" size="20" maxlength="30">
<br>
<input type="submit" value="Abschicken"/>
</form>
<?php

echo "Ihre Eingaben<br>";
echo "Vorname : {$_GET['vorname']}<br>\n";
echo "Nachname : {$_GET['nachname']}<br>\n";
echo "Email : {$_GET['email']}<br>\n";
echo "Telefon: {$_GET['telefon']} <br>\n";

if($_GET['vorname'] == "Thomas"){
    echo "funktioniert !";
}else{
    echo "funktioniert nicht !";
}
?>

<form action="index.php" method="get">
    Wie viele Karten moechten Sie ? <br>
    <input type="text" name="zahl" size="20" maxlength="30">
    <input type="submit" value="Abschicken">
</form>

<?php
echo "Ihre Eingabe : {$_GET['zahl']}<br>\n";

if($_GET{'zahl'} == 3){
  for ($i = 1;$i <= 3; $i++){
      echo $alleKartenobject->alleKartenbilder();
  }
}else{
    echo "";
}
echo "<hr>";

