<?php
// superglobal variable
// var_dump($_GET)
//$_GET
// $_GET["nama"] = ["nida"];
// var_dump($_GET);
//didalam url itu kit bisa nambahin data yaitu dengan cara namabahin tanda tanya setelah .php
// superlobal ini juga busa ngirim data ke hlaman lain lewat url

$mahasiswa = [["Nama"=>"Nida", "Nim"=>"93884778","Jurusan"=>"Teknik Informatika","email"=>"nida@gmailcom"],
["Nama"=>"Ummi Kolbia","Nim"=>"784788900","Jurusan"=>"Teknik Informatika","email"=>"ummi@gmail.com"],
["Nama"=>"Ratih","Nim"=>"5368832888","Jurusan"=>"Teknik Informatika","email"=>"raeldina@gmail.com"]
]

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
    <ul>
        <?php foreach($mahasiswa as $m):?>
        <li>
        <!-- untuk ngirim data ( metode get) -->
            <a href="latihan3.php?Nama=<?= $m["Nama"] ?>
            &jurusan=<?= $m["Jurusan"]?>
            &email=<?= $m["email"]?>
            &nim=<?= $m["Nim"]?>">
            <?=$m["Nama"];?>
        </li>
        <?php endforeach;?>
    </ul?>  
</body>
</html>

