<?php
session_start();
if (isset($_SESSION["login"]) && $_SESSION["login"] == "ok") {
require_once "db_daten_aktuell.php";
$host = htmlspecialchars($_SERVER["HTTP_HOST"]);
$uri  = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
$extra = "anzeigen.php";
if(!isset($_GET["id"]) || !is_numeric($_GET["id"])) {
  header("Location: http://$host$uri/$extra");
}
$id = $_GET["id"];
if($stmt = $mysqli->prepare("DELETE FROM aktuell WHERE id=?")) {
  $stmt->bind_param("i",  $id);
  $stmt->execute();
  $stmt->close();
  $mysqli->close();
  header("Location: http://$host$uri/$extra");
} 
?>
<?php
} else {
  $host  = htmlspecialchars($_SERVER["HTTP_HOST"]);
  $uri   = rtrim(dirname(htmlspecialchars($_SERVER["PHP_SELF"])), "/\\");
  $extra = "start.php";
  header("Location: http://$host$uri/$extra");
}
?>
