<?php 
    $title = "Tambah Data Pelanggan - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Pelanggan</h1>
    <form class="needs-validation" method="POST" action="pelanggan/tambah.php">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan</label>
                <input type="text" class="form-control" name="id_pelanggan" id="id_pelanggan" placeholder="ID Pelanggan" required>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_meter">No. Meter</label>
                        <input type="text" class="form-control" name="no_meter" id="no_meter" placeholder="Masukkan No.Meter" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="daya">Daya</label>
                        <input type="text" class="form-control" name="daya" id="daya" placeholder="Masukkan Daya" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"
                    placeholder="Alamat Lengkap" required></textarea>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type" required>
                    <option value="">--Silahkan Pilih--</option>
                    <option value="Keluhan">Keluhan</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="keluhan">Keluhan</label>
                <textarea class="form-control" name="keluhan" id="keluhan" cols="30" rows="6"
                    placeholder="Masukkan Keluhan" required></textarea>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" name="tambah" value="Tambah">
</form>

    <!-- /.container-fluid -->
    <?php require 'layouts/footer.php' ?>