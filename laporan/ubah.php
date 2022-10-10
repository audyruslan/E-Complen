<?php
session_start();
date_default_timezone_set('Asia/Ujung_Pandang');
require '../functions.php';

function ubah_laporan($data)
{
    global $conn;
    $id = $data["id"];
    $id_pelanggan = $data['id_pelanggan'];
    $waktu = date("H:i:s");
    $tanggal = date("Y-m-d");
    $type = $data['type'];
    $keluhan = $data['keluhan'];


    $query = "UPDATE tb_laporan
                SET
				id_pelanggan = '$id_pelanggan',
                waktu = '$waktu',
                tanggal = '$tanggal',
				type = '$type',
				keluhan = '$keluhan'
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_laporan($_POST) > 0) {
        $_SESSION['status'] = "Data Keluhan Pelanggan";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../laporan.php");
    } else {
        $_SESSION['status'] = "Data Keluhan Pelanggan";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../laporan.php");
    }
}
