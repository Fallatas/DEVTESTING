<?php
/* Damit dieses Beispiel funktioniert, müssen Sie Ihre SMTP-Daten eintragen :-) 
und außerdem die benötigten Klassen von PHPMailer herunterladen :-) */
require "PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = "STMP-Server";  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "Benutzername";                            // SMTP username
$mail->Password = "Passwort";                           // SMTP password
$mail->CharSet = "utf-8";
$mail->From = "Absender-E-Mail";

$mail->addAddress("E-Mail Adressat", "Name");  // Add a recipient                      
$mail->Subject = "Der Betreffstext für die Mail";
$mail->Body    = "Dieser Text beinhaltet die eigentliche Nachricht, auch mit Sönderzäichen";

if(!$mail->send()) {
   echo "Nachricht konnte nicht gesandt werden.";
   echo "Mailer Fehler: " . $mail->ErrorInfo;
   exit;
}

echo "Nachricht wurde versandt";