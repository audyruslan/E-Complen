<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

if (hapus_pelanggan($id) > 0) {
    $_SESSION['status'] = "Data Pelanggan";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Dihapus";
    header("Location: ../pelanggan.php");
} else {
    $_SESSION['status'] = "Data Pelanggan";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Dihapus";
    header("Location: ../pelanggan.php");
}
