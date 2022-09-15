<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

// Query Data Admin
$sql = mysqli_query($conn, "SELECT * FROM tb_users
                    WHERE id = '$id'");
$image = mysqli_fetch_assoc($sql);


if (hapus_admin($id) > 0) {
    $_SESSION['status'] = "Akun Administrator";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Dihapus";
    header("Location: ../akun.php");
} else {
    $_SESSION['status'] = "Akun Administrator";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Dihapus";
    header("Location: ../akun.php");
}
