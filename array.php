<?php
//array 
//variable yang memiliki banayak nilai 
//elemen arrray itu itu boleh memiliki tipe data yang berbeda
//array = pasangan antara key dan value
// key = index, dimulai dari angka 0

$hari = "senin";
$hari2 = "selas";

//membuat array
$hari = array("Senin","Selasa","rabu",);

//cara baru
$bulan = ["Januari","Februari","Maret"];
$arr = [123, "taext", true];

// mencetak array
// untuk debugging
var_dump($arr); //untuk mengetahui tipe data, bug, terus sama tipe nya
echo "<p>?";
print_r($bulan); 

echo "<P>";

echo "$bulan[1]";

// menambahkan elemen baru pada array
$bulan[] = "april";
var_dump($bulan);

?>