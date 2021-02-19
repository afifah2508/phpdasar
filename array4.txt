<?php
$mahasiswa = [["Nida", "93884778","Teknik Informatika","nida@gmailcom"],
["Ummi Kolbia","784788900","Teknik Informatika","ummi@gmail.com"],
["Ratih","5368832888","Teknik Informatika","raeldina@gmail.com"]
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
    <li>Nama : <?= $m[0]?></li>
     <li>NIM : <?= $m[1]?></li>
     <li>Jurusan : <?= $m[2]?></li>

    </ul>
    <?php endforeach;?>
</body>
</html>