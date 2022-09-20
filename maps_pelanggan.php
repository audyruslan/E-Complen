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
            <div class="row">
                <div class="col-md-6">
                <?php 
                    $id_lokasi = $_GET["id"];
                    $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan WHERE id = '$id_lokasi'");
                    while ($row = mysqli_fetch_assoc($sql)) {
                ?>
                    <h1 class="h5 text-gray-800">No. Meter : <?= $row['no_meter']; ?></h1>
                    <h1 class="h5 text-gray-800">Nama Pelanggan : <?= $row['nama']; ?></h1>
                <?php 
                    }
                ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="map2"></div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
<?php require 'layouts/footer.php' ?>