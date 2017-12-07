<?php
$salz = "Ein langer kryptischer zusätzlicher String, der ans Passwort angehängt wird";
$algo = "md5";
$passwort = "geheim";
$hash = hash_hmac($algo, $passwort, $salz);
echo $hash; 
?>