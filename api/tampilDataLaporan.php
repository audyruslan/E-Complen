<?php 
date_default_timezone_set('Asia/Ujung_Pandang');
//Importing database    
require '../functions.php';
require '../tgl_indo.php';
require '../waktu_format.php';

//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
$sql = "SELECT * FROM tb_laporan";
//Mendapatkan Hasil 
$result = mysqli_query($conn,$sql);
//Memasukkan Hasil Kedalam Array
$riwayat_keluhan = array();
while($row = mysqli_fetch_assoc($result)){
    $waktu = waktu($row["waktu"]);
    $tanggal = tgl_indo($row["tanggal"]);
    $index['id'] = $row['id'];
    $index['keluhan'] = $row['keluhan'];
    $index['waktu'] = $waktu;
    $index['tanggal'] = $tanggal;
    array_push($riwayat_keluhan,$index);
}
//Menampilkan dalam format JSON
echo json_encode($riwayat_keluhan);
?>

