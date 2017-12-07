<?php
header ("Content-type: image/png");
require "jpgraph/src/jpgraph.php";
require "jpgraph/src/jpgraph_pie.php";
require "jpgraph/src/jpgraph_pie3d.php";

$daten = array(50, 30, 60);
$legende = array("Oktober", "November", "Dezember");
$graph = new PieGraph(450, 300, "PNG");
$graph->SetShadow();
$p1 = new PiePlot3D($daten);
$p1->ExplodeSlice(1);
$p1->SetCenter(0.45);
$p1->SetLegends($legende);
$p1->SetAngle(40);
$p1->SetSliceColors(array("red", "blue", "green")); 
$graph->title->Set("Tortendiagramm");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->Add($p1);
$graph->Stroke();
?> 