<?php 
    $title = "Data Pelanggan - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';

    $id_pelanggan = $_GET["id_pelanggan"];
    $query = mysqli_query($conn, "SELECT * FROM tb_pelanggan JOIN tb_laporan ON tb_pelanggan.id = tb_laporan.id_pelanggan WHERE id_pelanggan = '$id_pelanggan'");
    $row = mysqli_fetch_assoc($query);
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laporan Keluhan <?= $row["nama"]; ?></h1>
    <p class="mb-4">Detail Laporan Keluhan Pelanggan.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Laporan Pelanggan <?= $row["nama"]; ?></h6>
                    <?php 
                    if($row['type'] == "Selesai"){
                    ?>
                    <td><span class="badge badge-success"><?= $row['type']; ?></span></td>
                    <?php 
                        } else {
                    ?>
                    <td><span class="badge badge-danger"><?= $row['type']; ?></span></td>
                    <?php } ?>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $row["nama"]; ?>" placeholder="Nama Lengkap" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_hp">No.Hp</label>
                                        <input type="text" class="form-control" name="no_hp" id="no_hp" value="<?= $row["no_hp"]; ?>" placeholder="No.Handphone" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" class="form-control" name="latitude" id="latitude" value="<?= $row["lat"]; ?>"  placeholder="Latitude" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" class="form-control" name="longitude" id="longitude" value="<?= $row["lng"]; ?>" placeholder="Longitude" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"
                                    placeholder="Alamat Lengkap" readonly><?= $row["alamat"]; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="no_meter">No. Meter</label>
                                        <input type="text" class="form-control" name="no_meter" id="no_meter" value="<?= $row["no_meter"]; ?>" placeholder="Masukkan No.Meter" readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="daya">Daya</label>
                                        <input type="text" class="form-control" name="daya" id="daya" value="<?= $row["daya"]; ?>" placeholder="Masukkan Daya" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keluhan">Keluhan Gangguan Listrik</label>
                                <textarea class="form-control" name="keluhan" id="keluhan" cols="30" rows="7"
                                    placeholder="Keluhan Pelanggan" readonly><?= $row["keluhan"]; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.container-fluid -->
<?php require 'layouts/footer.php' ?>