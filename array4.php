<?php

// Array assosiatif
$mahasiswa = [["Nama"=>"Nida", "Nim"=>"93884778","Jurusan"=>"Teknik Informatika","email"=>"nida@gmailcom"],
["Nama"=>"Ummi Kolbia","Nim"=>"784788900","Jurusan"=>"Teknik Informatika","email"=>"ummi@gmail.com"],
["Nama"=>"Ratih","Nim"=>"5368832888","Jurusan"=>"Teknik Informatika","email"=>"raeldina@gmail.com"]
];

//memanggil Ratih
echo $mahasiswa[2][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $m):?>
    <ul>
    <li>Nama : <?= $m["Nama"]?></li>
     <li>NIM : <?= $m["Nim"]?></li>
     <li>Jurusan : <?= $m["Jurusan"]?></li>
     <li>email : <?= $m["email"]?></li>


    </ul>
    <?php endforeach;?>
</body>
</html>