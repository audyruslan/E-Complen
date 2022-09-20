<?php 
    $title = "Data Lokasi - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Peta Lokasi Pelanggan Jaringan Listrik Kota Palu</h1>
            <p class="mb-4">Peta petugas dapat melihat titik lokasi gangguan Listrik Padam yang telah dikirim oleh pelanggan, pada titik peta yang berwarna merah merupakan titik lokasi kerusakan, maka petugas dapat melihat jalur terpendek menuju lokasi gangguan tersebut.</p>

            <!-- Content Row -->
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lokasi_kantor">Lokasi Kantor</label>
                        <input type="text" class="form-control" name="lokasi_kantor" id="lokasi_kantor" placeholder="Lokasi Kantor" value="PT. Telkom Cabang Palu" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lokasi_pelanggan">Lokasi Pelanggan</label>
                        <select class="form-control" name="lokasi_pelanggan" id="lokasi_pelanggan">
                            <option value="">--Silahkan Pilih--</option>
                            <?php 
                                $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan");
                                while ($row = mysqli_fetch_assoc($sql)) {
                            ?>
                            <option data-lat="<?= $row['lat']; ?>" data-lng="<?= $row['lng']; ?>"><?= $row['no_meter']; ?></option>
                            <?php 
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div> -->

            <div class="row">
                <div class="col-md-12">
                    <div id="map"></div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
<?php require 'layouts/footer.php' ?>