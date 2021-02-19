<?php
//date() berfungsi untuk menampilkan tanggal dengan format tertentu
date_default_timezone_set(Asia/jakarta);
echo date("D, d m y ");
echo "<br>";
echo date("H:i:s");
echo "<br>";

//untuk nsmpilin detik
//detik yang sudah berlalu sejak 1 januari 1970
echo time();
echo "<br>";

// menghitung menit 1000 hari kedepan 
echo date("l, d M Y", time()+60*60*60*24*1000);

echo "<P>";
echo date("l,d, M Y", time()-60*60*24*1000);
echo "<p>";
//strtotime
// string to time (string)

echo date("l", strtotime("25 aug 2001"));

?>