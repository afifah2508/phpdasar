<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan pengulangan</title>
    <style>
    .warna-baris{
        background-color: grey;
    }
    </style>
</head>
<body>
   <table border ="1" cellpadding="10" cellspassing="0">
  <?php for($baris = 1 ; $baris <= 3; $baris++) : ?>
  <?php if ($baris % 2 == 0):?>
  <tr class="warna-baris">
  <?php else:?>
  <tr>
  <?php endif;?>
  <?php for($kolom = "1"; $kolom <= 5; $kolom++): ?>
  <td><?php echo "$baris, $kolom" ?></td>
  <?php endfor;?>
  </tr>
  <?php endfor;?>

   </table>
</body>
</html>