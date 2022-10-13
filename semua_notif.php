<?php 
    $title = "Data Pelanggan - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Notifikasi Semua Laporan Pelanggan</h1>
    <p class="mb-4">Semua Notifikasi Laporan Keluhan Gangguan Listrik.</p>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Notifikasi Keluhan Pelanggan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Waktu</th>
                                    <th>Tanggal</th>
                                    <th>Keluhan</th>
                                    <th>Type</th>
                                </tr>
                            </thead>
                            <?php
                                $i = 1;
                                $sql = mysqli_query($conn, "SELECT * FROM tb_pelanggan JOIN tb_laporan ON tb_pelanggan.id = tb_laporan.id_pelanggan WHERE type = 'Keluhan'");
                                while ($row = mysqli_fetch_assoc($sql)) {
                                ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row['waktu']; ?></td>
                                        <td><?= tgl_indo($row['tanggal']); ?></td>
                                        <td><?= $row['keluhan']; ?></td>
                                        <td><span class="badge badge-danger"><?= $row['type']; ?></span></td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="EditModal<?= $row["id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="#EditModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="EditModalLabel">Ubah Data Laporan Pelanggan</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="laporan/ubah.php" method="post">
                                                    <div class="modal-body">
                                                        <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                                        <input type="hidden" name="id_pelanggan" value="<?= $row["id_pelanggan"]; ?>">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label for="nama">Nama Lengkap</label>
                                                                    <input type="text" autocomplete="off" class="form-control" id="nama" name="nama" value="<?= $row["nama"]; ?>" placeholder="Masukkan Lengkap" readonly>
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