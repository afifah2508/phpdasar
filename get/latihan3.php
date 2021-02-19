<?php
// isset = ngecek variable apakah udah dibikin apa belum?
// cek apakah tidak ada data di $_Get
// ketika blm dibikinin maka akan dipaksa dipindah ke halaman latihan2.php
if (! isset($_GET["Nama"]) ||
! isset($_GET["Nim"]) ||
! isset($_GET["jurusan"]) ||
! isset($_GET["email"]) 
){
    //redirect = memindahkan data ke halamn lain

    header("Location: latihan2.php");
    exit;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Daftar Mahasiswa</h1>
    <ul>
    <li><?= $_GET["Nama"]?></li>
    <li><?= $_GET["jurusan"]?></li>
    <li><?= $_GET["Nim"]?></li>
    <li><?= $_GET["emil"]?></li>
    </ul>

    <a href="latihan2.php">Back</a>
    
</body>
</html>