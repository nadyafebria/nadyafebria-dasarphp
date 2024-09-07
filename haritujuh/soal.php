<?php

//algoritma
//jam kerja = 48
//upah normal per jam =2000
//upah lembur per jam =3000

$jumlahjamkerja=50;

if($jumlahjamkerja <=48 && $jumlahjamkerja >0){
    $upahlembur =2000*$jumlahjamkerja;
}

elseif($jumlahjamkerja >48 ){
    $upahlembur =($jumlahjamkerja - 48 )*3000+(2000*48);
}

else{
    $upahlembur=0;
}

$upahmingguan=$upahlembur;
echo $upahmingguan;