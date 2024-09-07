<?php

//perulangan --> Looping
//inisialisasi variabel pengulangan; penjumlahan/pengurangan(++)
//for cek dulu baru lakukan
//while lakukan dulu baru cek

echo "<h3> perulangan for </h3>";
for($i=0; $i<=1; $i++){
    echo "ini perulangan ke-$i <br>";
}
echo "<hr>";
echo "<h3> perulangan while</h3>";

$a=0;
while($a<= 5){
    echo "ini perulangan ke-$a <br>";
    $a++;
}
echo "<hr>";
echo "<h3> perulangan Do-While</h3>";
$x=0;
do {
    echo "ini perulangan ke-$x <br>";
    $x++;
}while ($x>=0);

