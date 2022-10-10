<?php
session_start();
require '../functions.php';

$id = $_GET["id"];

if (hapus_laporan($id) > 0) {
    $_SESSION['status'] = "Data Keluhan Pelanggan";
    $_SESSION['status_icon'] = "success";
    $_SESSION['status_info'] = "Berhasil Dihapus";
    header("Location: ../laporan.php");
} else {
    $_SESSION['status'] = "Data Keluhan Pelanggan";
    $_SESSION['status_icon'] = "error";
    $_SESSION['status_info'] = "Gagal Dihapus";
    header("Location: ../laporan.php");
}
