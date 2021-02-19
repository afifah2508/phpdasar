<?php
// koneksi ke database
//(host, user, paw, nama, database)

$db = mysqli_connect("localhost","root","","db_phdasar");

// ambil data dari table
// selec*from = manggil semuanya
$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa");
//var_dump( $result);

// mysqli_fetch_row() = mengembalikan datanya array numerik
// mysqli_fetch_assoc() = mengembalikan array assosiasi
// mysqli_fetch_array() = mengembalikan ke2 array
// mysqli_fetch_object() = mengebalikan objek array assosiatif


//page data/ ambil data
// while($result_mhs = mysqli_fetch_assoc($result)){
// var_dump( $result_mhs);
// }

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
    <table border="1" cellpadding="10" cellspacing="0" >
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Gambar</th>
    <th>Nim</th>
    <th>Jurusan</th>
    <th>Email</th>
    </tr>
    <?php $no = 1;?>
<?php while($row = mysqli_fetch_assoc($result)):?>
    <tr>

    <td><?=$no;?></td>
    <td><?=$row["nama_,mahasiswa"];?></td>
    <td><img src="img/<?= $row["gambar_mahasiswa"];?>" width="50"></td>
    <td><?=$row["nim_mahasiswa"];?></td>
    <td><?=$row["jurusan_mahasiswa"];?></td>
    <td><?=$row["email_mahasiswa"];?></td>

    </tr>
    <?php $no++ ?>
    <?php endwhile;?>
    </table>
</body>
</html>