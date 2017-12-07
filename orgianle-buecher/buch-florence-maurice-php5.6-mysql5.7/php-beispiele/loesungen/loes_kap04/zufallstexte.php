<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Zufallstexte</title> 
</head>
<body>
<?php
$texte = array("Lorem ipsum dolor sit amet", 
               "Überall dieselbe alte Leier. Das Layout ist fertig, der Text lässt auf sich warten.",
              "Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte.", 
              "Manchmal benutzt man Worte wie Hamburgefonts, Rafgenduks oder Handgloves, um Schriften zu testen." );
$max = count($texte)-1;
$zufallszahl = rand(0, $max);
echo $texte[$zufallszahl];
?>
</body>
</html>