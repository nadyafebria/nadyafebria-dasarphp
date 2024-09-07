<?php

$totalbelanja=150000;
$diskon=0;

if ($totalbelanja>200000){
    $diskon=0;
}elseif($totalbelanja>100000){
    $diskon=0.05;
}else{
    $diskon=0;
}

$potonganharga=$totalbelanja*$diskon;
$totalbayar=$totalbelanja-$potonganharga;
echo $totalbayar;