<?php
// operator penggabung string
//.
$nama1 = "nida";
$nama2 = "Apipah";

// pake titik ini untuk menggabungkan
echo $nama1 . $nama2;
// pake titik dan tanda kutip untuk memisahkan
echo $nama1 ."". $nama2;

// Operator Aritmatika
// + - * / %
$x = 40;
$y = 20;
echo "hasil dari $x + $y = ";
echo $x + $y;
echo "<br>";

echo $x * $y;
echo "<br>";

echo $x / $y;
echo "<br>";

echo $x - $y;

// Operator assigment
// = , += , -= , *= , /= , %= , .=
$x = 1;
$x -= 5;
echo $x;
echo "<br>";

$nama = "Nida";
$nama .= " ";
$nama = "Apipah";
echo $nama;
echo "<p>"; // untuk paragraf baru, sedangkan br itu untuk break

// oprator perbandingan
// < ,> , <= , >=, ==, !=

// var dump itu digunakan untuk mengetahui nama tipe data tapi ini di gunakan hanya untuk developer, untuk debugging
var_dump(1=="1");
echo "<br>";

// Operator Identitas
// === , !===
var_dump(1==="1")
// perbedaan antara perbadingan & identitas tuh kl perbandingan itu tdk ngebaca tipe data, sedangkan kl identitas itu ngbaca







?>