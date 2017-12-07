<?php
header ("Content-type: image/png");
include "jpgraph/src/jpgraph.php";
include "jpgraph/src/jpgraph_bar.php";

$daten = array(50, 30, 60);
$xachse = array("Oktober", "November", "Dezember");
$graph = new Graph(260, 200, "auto");    
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->img->SetMargin(40, 30, 20, 40);
$bplot = new BarPlot($daten);
$bplot->SetFillgradient("red", "black", GRAD_VER);
$graph->Add($bplot);
$graph->xaxis->SetTickLabels($xachse);
$graph->title->Set("Balkendiagramm");
$graph->xaxis->title->Set("Monate");
$graph->yaxis->title->Set("Umsatz");
$graph->title->SetFont(FF_FONT1, FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1, FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1, FS_BOLD);
$graph->Stroke();
?>
