<?php 
session_start();
require 'functions.php';
require 'tgl_indo.php';
if (!isset($_SESSION["username"])) {
echo '<script>
            alert("Silahkan Login Terlebih Dauhulu!");
            window.location="login.php";
            </script>';
return false;
}
if (isset($_SESSION["login"])) {
$user = $_SESSION["username"];
$query = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$user'");
$admin = mysqli_fetch_assoc($query);
}

//Total Data Lokasi
$totLokasi = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pelanggan"));
//Total Data Pelanggan
$totPelanggan = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_pelanggan"));
//Total Data Riwayat Keluhan
$totRiwayat = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_laporan"));
//Total Data Admin
$totAdmin = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tb_users"));
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    
    <!-- Sweetalert2 -->
    <link href="assets/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    
    <!-- Leaflet Routing Mechine -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
    <link rel="stylesheet" href="assets/js/leaflet/leaflet-routing-machine.css" />
    <style>
        #map { margin-top: 10px; width: 100%; height: 400px; }
        #map2 { margin-top: 10px; width: 100%; height: 400px; }
    </style>
        
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">