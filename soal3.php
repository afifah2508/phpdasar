<?php
$nilai = "85";
echo "Nilai:{$nilai} <br>";

if ($nilai >= 90 and $nilai<= 100){
    echo "Predikat: A";

}elseif ($nilai >= 80){
    echo "Predikat: B";

}elseif ($nilai >= 70){
    echo "Predikat: C";
    
}else {
    echo "Belum Tuntas";
}
?>