<?php

//membuat angka 1 sampai 100

for($i=1; $i<=100; $i++){
    if($i%2==1){
        echo "$i <br>";
    }
}
//tahun kabisat

echo "<hr>";
$tahun=2024;
for ($tahun=1900; $tahun <= 2100; $tahun++){
    if (($tahun %4 == 0 && $tahun%100 != 0) || ($tahun % 400.== 0)){
        echo "tahun $tahun adalah tahun kabisat<br>";
    }else{
        echo "tahun $tahun bukan tahun kabisat<br>";
    }
}