<?php
 $mail[] = "mir@sanmir.de";
$mail[] = "Betreff der Mail";
$mail[] = "Und hier ist der Inhalt";
mail(...$mail);
mail("mir@sanmir.de", "Betreff der Mail", "Und hier der Inhalt");
print_r($mail);
mail('benutzer@example.com', 'Mein Betreff', "nachricht");
?>