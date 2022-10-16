<?php
function waktu($waktu){
    //ubah timezone 
date_default_timezone_set('Asia/Ujung_Pandang');

//ambil jam dan menit
$jam = date('H:s', strtotime($waktu));

//atur salam menggunakan IF
if ($jam > '05:30' && $jam < '10:00') {
    $salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
    $salam = 'Siang';
} elseif ($jam < '18:00') {
    $salam = 'Sore';
} else {
    $salam = 'Malam';
}

//tampilkan pesan
return $waktu . " " .  $salam;
}


?>