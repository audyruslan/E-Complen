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
                <div class="col-md-12">
                     
 
                        <div class="row">
                            <label class="col-sm-2 col-form-label">
                                Awal
                            </label>
                            <div class="col">
                                <select class="form-control" id="start">
                                    <option value="Palu">Palu</option>
                                    <option value="Sigi">Sigi</option>
                                    <option value="Donggala">Donggala</option>
                                </select>
                            </div>
                            <label class="col-sm-2 col-form-label">
                                Tujuan
                            </label>
                            <div class="col">
                                <select class="form-control" id="finish">
                                    <option value="Palu">Palu</option>
                                    <option value="Sigi">Sigi</option>
                                    <option value="Donggala">Donggala</option>
                                </select>
                            </div>
                        </div>
                        <span id="error">
                        </span>
                    </br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="map" class="card">
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <div id="panel" class="card-block" style="overflow-y: scroll;height: 400px;">
                     
                  </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
<?php require 'layouts/footer.php' ?>