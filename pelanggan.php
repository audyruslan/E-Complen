<?php 
    $title = "Data Pelanggan - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Table Laporan Pelanggan</h1>
    <p class="mb-4">Tabel Laporan Pelanggan petugas dapat melihat laporan yang telah dikirimkan oleh pelanggan, serta petugas dapat mengedit laporan
    jika gangguan telepon tersebut telah selesao ditangani oleh teknisi yang bersangkutan.</p>

    <a class="btn btn-primary mb-3" href="tambah_pelanggan.php"><i class="fas fa-plus"></i> Tambah Data</a>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tabel Laporan Pelanggan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nomor Meter</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Daya</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row['no_meter']; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row['daya']; ?></td>
                                        <td><?= $row['alamat']; ?></td>
                                        <td>
                                            <a class="btn btn-primary btn-sm ubah" target="_blank" href="maps_pelanggan.php?id=<?= $row["id"]; ?>"><i class="fas fa-map-marked-alt"></i> </a>
                                            <a class="btn btn-success btn-sm ubah" data-toggle="modal" data-target="#EditModal<?= $row["id"]; ?>"><i class="fas fa-edit"></i> </a>
                                            <a class="btn btn-danger btn-sm hapus_pelanggan" href="pelanggan/hapus.php?id=<?= $row["id"]; ?>"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditModal<?= $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="#EditModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="EditModalLabel">Ubah Data Pelanggan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="pelanggan/ubah.php" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="no_meter">No. Meter</label>
                                                                    <input type="text" autocomplete="off" class="form-control" id="no_meter" name="no_meter" value="<?= $row["no_meter"]; ?>" placeholder="No. Meter">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama">Nama Lengkap</label>
                                                                    <input type="text" autocomplete="off" class="form-control" id="nama" name="nama" value="<?= $row["nama"]; ?>" placeholder="Masukkan Lengkap">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="text" class="form-control" name="password" id="password" placeholder="Masukkan Password" value="<?= $row["pass"]; ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <textarea class="form-control" name="alamat" id="alamat"
                                                                        placeholder="Alamat Lengkap" required><?= $row["alamat"]; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="latitude">Latitude</label>
                                                                            <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude" value="<?= $row["lat"]; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="longitude">Longitude</label>
                                                                            <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude" value="<?= $row["lng"]; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="daya">Daya</label>
                                                                    <input type="text" class="form-control" name="daya" id="daya" placeholder="Masukkan Daya" value="<?= $row["daya"]; ?>" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="type">Type</label>
                                                                    <select class="form-control" name="type" id="type" required>
                                                                        <option value="">--Silahkan Pilih--</option>
                                                                        <option value="Keluhan" <?php if ($row["type"] == "Keluhan") { echo 'selected'; }?> >Keluhan</option>
                                                                        <option value="Selesai" <?php if ($row["type"] == "Selesai") { echo 'selected'; }?>>Selesai</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="keluhan">Keluhan</label>
                                                                    <textarea class="form-control" name="keluhan" id="keluhan"
                                                                        placeholder="Masukkan Keluhan" readonly><?= $row["keluhan"]; ?></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                        <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php $i++; ?>

                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.container-fluid -->
<?php require 'layouts/footer.php' ?>