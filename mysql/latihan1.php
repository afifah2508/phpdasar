<?php

$db = mysqli_connect("localhost","root","","db_phdasar");

$result = mysqli_query($db,"SELECT * FROM tb_kuliners");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Daftar Kuliner</h1>
    <table border="1" cellpadding="10" cellspacing="0" >
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Gambar</th>
    <th>Harga</th>
    <th>Asal</th>
    </tr>
    <?php $no = 1;?>
<?php while($row = mysqli_fetch_assoc($result)):?>
    <tr>

    <td><?=$no;?></td>
    <td><?=$row["nama_kuliner"];?></td>
    <td><img src="img2/<?= $row["gambar_kuliner"];?>" width="50"></td>
    <td><?=$row["harga_kuliner"];?></td>
    <td><?=$row["asal_kuliner"];?></td>

    </tr>
    <?php $no++ ?>
    <?php endwhile;?>
    </table> 
</body>
</html>