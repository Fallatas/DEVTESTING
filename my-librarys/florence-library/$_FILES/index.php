<?php
echo "<strong style='color: red'>Arbeiten mit \$_FILES</strong> <br>\n";
echo "<strong style='color: red'>Wird verwendet um hochgeladene Dateien zu verwalten.</strong> <br>\n";
echo "<hr style='color: red'>";
?>
<!-- Die Encoding-Art enctype MUSS wie dargestellt angegeben werden -->
<form enctype="multipart/form-data" action="index.php" method="POST">
    <!-- MAX_FILE_SIZE muss vor dem Dateiupload Input Feld stehen -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Der Name des Input Felds bestimmt den Namen im $_FILES Array -->
    Diese Datei hochladen: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

echo  "Name der Datei: ". $_FILES['userfile']['name'] . "<br\n>"
    /* Der ursprüngliche Dateiname auf dem Computer des Benutzers. */
    .  "Type der Datei: " . $_FILES["userfile"]["type"] . "<br\n>"
    /* Der Mime-Type der Datei, falls der Browser diese Information zur Verfügung gestellt hat. Ein Beispiel wäre "image/gif". Dieser Mime-Type wird jedoch nicht von PHP geprüft und kann somit falsch sein. */
    .  "Groeße der Datei: " . $_FILES["userfile"]["size"] . "<br\n>"
    /* Die Größe der hochgeladenen Datei in Bytes. */
    .  "Fehlercode der Datei: " . $_FILES["userfile"]["error"] . "<br>\n"
    /* Der Fehlercode des Uploads. */
    .  "Speicherort der Datei " . $_FILES["userfile"]["tmp_name"];
    /* Der temporäre Dateiname, unter dem die hochgeladene Datei auf dem Server gespeichert wurde. */

/*Infos für Files hochladen*/
/*http://php.net/manual/de/features.file-upload.post-method.php*/

?>