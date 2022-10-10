<?php
session_start();
date_default_timezone_set('Asia/Ujung_Pandang');
require '../functions.php';

function tambah_laporan($data)
{
    global $conn;

    $id_pelanggan = $data['id_pelanggan'];
    $waktu = date("H:i:s");
    $tanggal = date("Y-m-d");
    $type = $data['type'];
    $keluhan = $data['keluhan'];

    $query = "INSERT INTO tb_laporan
				VALUES 
				('','$id_pelanggan','$waktu','$tanggal','$type','$keluhan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_laporan($_POST) > 0) {
        $_SESSION['status'] = "Data Laporan Pelanggan";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../laporan.php");
    } else {
        $_SESSION['status'] = "Data Laporan Pelanggan";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../laporan.php");
    }
}
