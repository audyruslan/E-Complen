<?php 
    $title = "Tambah Keluhan Pelanggan - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Keluhan Pelanggan</h1>
    <form class="needs-validation" method="POST" action="laporan/tambah.php">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="id_pelanggan">Nama Pelanggan</label>
                <select class="form-control" name="id_pelanggan" id="id_pelanggan">
                    <option value="">--SIlahkan Pilih--</option>
                    <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan");
                        while ($row = mysqli_fetch_assoc($sql)) {
                    ?>
                    <option value="<?= $row["id"]; ?>"><?= $row["nama"]; ?></option>
                    <?php 
                        }
                    ?>
                </select>
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