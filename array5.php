<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width: 100px;
        height: 100px;
        background-color: blue;
        text-align: center;
        vertical: center;
        padding: 50px;
        line-height: 30px;
        margin: 3px;
        float: left;
        transition: 0.5s;
    }
    .kotak:hover{
        transform: rotate(360deg);
        border-radius: 50%;
    }
    
    .clear{
        clear:both;
    }
    
    </style>
</head>
<body>
<?php $angka=[1,2,3,4,5,6,7,8,9,0]?>
<?php foreach($angka as $a):?>
    <div class="kotak clear"><?= $a ; ?></div>
    <?php endforeach;?>

    <div class="clear"></div>
    <?php $angka = [
        ["Ummi","Ratih","Rifdah"],
        ["Elsa","Ocha","Diva"],
        ["Tiyas","Sofi","Nida"]
    ]
    ?>
    <?php foreach($angka as $a):?>
<?php foreach($a as $b):?>
<div class="kotak"><?=$b; ?></div>
    <?php endforeach;?>
    <div class="clear"></div>
    <?php endforeach;?>
    
</body>
</html>