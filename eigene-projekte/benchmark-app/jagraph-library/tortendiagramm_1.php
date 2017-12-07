<?php
header ("Content-type: image/png");
require "jpgraph/src/jpgraph.php";
require "jpgraph/src/jpgraph_pie.php";
require "jpgraph/src/jpgraph_pie3d.php";

$daten = array(50, 30, 60);
$graph = new PieGraph(450, 300, "PNG");
$p1 = new PiePlot3D($daten);
$graph->Add($p1);
$graph->Stroke();
?> 