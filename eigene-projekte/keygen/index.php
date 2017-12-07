<?php
/**
 * Created by PhpStorm.
 * User: t0m
 * Date: 27.02.2016
 * Time: 13:55
 */
$kette = array("a","b","c","d","e","f","g","h","0","1","2","3","4","5","6","7","8","9");
$code = "";
for($i=0;$i<5;$i++) {
    $zufall = rand(0,17);
    $code .= $kette[$zufall];
}

$kette2 = array ("#","-","%");
for($i=0;$i<1;$i++) {
    $zufall = rand(0,2);
    $code .= $kette2[$zufall];
}

$kette = array ("a","b","c","d","e","f","g","h","0","1","2","3","4","5","6","7","8","9");
for($i=0;$i<2;$i++) {
    $zufall = rand(0,17);
    $code .= $kette[$zufall];
}

echo $code;