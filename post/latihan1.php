<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- kalo tombol submitnya di klik maka tampilkan text selamat datang  -->
<?php if(isset($_POST["submit"])):?>
<h1> Selamat Datang, <?= $_POST["nama"]?> </h1>
<?php endif; ?>
<form action="" method="post">
Masukkan Nama :
<input type="text" name="nama">
<p>
<button type="submit" name="submit">kirim</button>
 </form>
</body>
</html>