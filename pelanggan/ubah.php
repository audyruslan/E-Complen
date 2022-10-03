<?php
session_start();
require '../functions.php';

function ubah_pelanggan($data)
{
    global $conn;
    $id = $data["id"];
    $nama = $data['nama'];
    $password = $data['password'];
    $daya = $data['daya'];
    $alamat = $data['alamat'];
    $latitude = $data['latitude'];
    $longitude = $data['longitude'];
    $type = $data['type'];  
    $keluhan = $data['keluhan'];

    $query = "UPDATE tb_pelanggan
                SET
				nama = '$nama'
				pass = '$password',
				daya = '$daya',
				alamat = '$alamat',
				lat = '$latitude',
				lng = '$longitude',
				type = '$type',
				keluhan = '$keluhan',
                WHERE id = $id
			";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// Ubah Data
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah_pelanggan($_POST) > 0) {
        $_SESSION['status'] = "Data Pelanggan";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Diubah";
        header("Location: ../pelanggan.php");
    } else {
        $_SESSION['status'] = "Data Pelanggan";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Diubah";
        header("Location: ../pelanggan.php");
    }
}
