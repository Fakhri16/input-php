<?php

$nama = $_GET['nama'];
$usia = $_GET['usia'];
$jekel= $_GET['jenkel'];
$kelas= $_GET['kelas'];
$prog=$_GET['prog'];

echo "nama : $nama <br>";
echo "usia : $usia <br>";

if ($jekel == "L") {
    echo "jenkel : laki-laki";
} else {
    echo "jenkel : perempuan";
}
 
echo "<br> kelas : $kelas"; 

// $index =0;
// while ($index <count($prog)) {
//     echo "<br> $prog[$index]";
//     $index++;
//}

// for ($index=0; $index<count($prog) ; $index++) {
//     echo "<br> $prog[$index]";
// }

foreach ($prog as $index) {
     echo "<br> - $index";
 }