<?php

function tahunKabisat ($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return true;  
    } else {
        return false; 
    }
}

$year = 2024;
if (tahunKabisat($year)) {
    echo "$year adalah tahun kabisat.";
} else {
    echo "$year bukan tahun kabisat.";
}
?>