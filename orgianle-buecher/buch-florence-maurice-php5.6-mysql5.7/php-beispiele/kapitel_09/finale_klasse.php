<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Überschreiben verhindern mit final</title>
</head>
<body>
<?php
/*Das ergibt eine Fehlermeldung, da eine finale Klasse nicht überschrieben werden kann */
final class Endgueltig 
{
}
class Versuch extends Endgueltig
{
}
$obj = new Versuch();

?>

</body>
</html>


