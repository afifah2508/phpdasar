<?php
date_default_timezone_set("Asia/jakarta");
$jam = date("H:i");

if($jam > "04.19" && $jam < "05.47"){
    $waktu = "Subuh";
    
}elseif ($jam >= "12.04" && $jam <"15.28"){
    $waktu = "Dzuhur";
    
}elseif ($jam >= "15.28" && $jam < "18.18"){
    $waktu = "Ashar";

}elseif ($jam >= "18.18" && $jam < "19.32"){
    $waktu = "Magrib";
}else{
    $waktu = "Isya";
}

echo "Sudah Shalat $waktu,?";

?>