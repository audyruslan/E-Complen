<?php 
date_default_timezone_set('Asia/Ujung_Pandang');
//Import File Koneksi database
require '../functions.php';

//Mendapatkan Nilai Variable
$id_pelanggan = $_POST['id_pelanggan'];
$waktu = date("H:i:s");
$tanggal = date("Y-m-d");
$type = "Keluhan";
$keluhan = $_POST["keluhan"];

//Pembuatan Syntax SQL
$sql = "INSERT INTO tb_laporan VALUES ('','$id_pelanggan','$waktu','$tanggal','$type','$keluhan')";

//Eksekusi Query database
if(mysqli_query($conn,$sql)){
    echo 'Data Berhasil Ditambahkan!';
}else{
    echo 'Data Gagal Ditambahkan!';
}

mysqli_close($conn);
?>