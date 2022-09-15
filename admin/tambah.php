<?php
session_start();
require '../functions.php';

function tambah_admin($data)
{
    global $conn;

    $nama = $data['nama'];
    $username = $data['username'];
    $password = $data['password'];

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO tb_users (nama,username,password) VALUES('$nama','$username','$password')");

    return mysqli_affected_rows($conn);
}

//Data Menu
if (isset($_POST["tambah"])) {

    if (tambah_admin($_POST) > 0) {
        $_SESSION['status'] = "Akun Baru Administrator";
        $_SESSION['status_icon'] = "success";
        $_SESSION['status_info'] = "Berhasil Terkirim";
        header("Location: ../akun.php");
    } else {
        $_SESSION['status'] = "Akun Baru Administrator";
        $_SESSION['status_icon'] = "error";
        $_SESSION['status_info'] = "Gagal Terkirim";
        header("Location: ../akun.php");
    }
}
