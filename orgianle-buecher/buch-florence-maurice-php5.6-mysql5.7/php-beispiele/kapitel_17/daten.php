<?php
  if((isset($_GET["wahl"])) && ($_GET["wahl"] == "Nutzpflanzen")) {
    $pflanzen = array("Moschus Erdbeere", "Chester Thornless",  
                     "Anneliese Rudolph", "Roter Weinbergpfirsich", "Pfälzer Fruchtfeige");
    echo ausgeben($pflanzen);
  }
  else if((isset($_GET["wahl"])) && ($_GET["wahl"] == "Zierpflanzen")) {
    $pflanzen = array("Gelber Frauenschuh", "Knabenkraut", "Duftschneeball", "Studentenblume", "Storchschnabel");
    echo ausgeben($pflanzen);
  }
 
  function ausgeben($was)
  {
    $str = "<ul>";
    foreach ($was as $w) {
      $str .= "<li>$w</li>";
    }
    $str .= "</ul>";  
    return $str;
  }
?>