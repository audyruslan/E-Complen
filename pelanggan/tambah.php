<?php
session_start();
require '../functions.php';

function tambah_pelanggan($data)
{
    global $conn;

    $no_hp = $data['no_hp'];
    $nama = $data['nama'];
    $no_meter = $data['no_meter'];
    $password = $data['password'];
    $daya = $data['daya'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    $alamat = $data['alamat'];

    $query = "INSERT INTO tb_pelanggan
				VALUES 
				('','$no_meter','$daya','$nama','$no_hp','$password','$latitude','$longitude','$alamat')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_pelanggan($_POST) > 0) {
        $_SESSION['status'] = "Data Pelanggan";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../pelanggan.php");
    } else {
        $_SESSION['status'] = "Data Pelanggan";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../pelanggan.php");
    }
}
