<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>Inhalte von Absätzen auslesen</title>
</head>
<body>
<?php
$muster = "@<p[^>]*>(.*)</p>@Us";
$in = "<p class='example'>Ein Absatz 
       und das geht gleich weiter</p><p>Hier folgt der zweite</p><p>Und ein dritter</p>";
if(preg_match_all($muster, $in, $treffer)) {
  echo "passt <br />\n";
  print_r($treffer);
  echo "<br/>\n";
  foreach($treffer[1] as $str) {
    echo "$str ";
  }
}

?>
</body>
</html>