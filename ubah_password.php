<?php 
     $title = "Ubah Password - E-Complent";
    require 'layouts/header.php';
    require 'layouts/sidebar.php';
    require 'layouts/navbar.php';

    if (isset($_POST["ubah"])) {

        $username = $_POST["username"];
        $password_lama = $_POST["password_lama"];
        $password_baru = $_POST["password_baru"];
        $konfirmasi_password = $_POST["konfirmasi_password"];
    
    
        $result = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password_lama, $row["password"])) {
            if ($password_baru == $konfirmasi_password) {
                // enkripsi password
                $password_baru = password_hash($password_baru, PASSWORD_DEFAULT);
                $query = "UPDATE tb_users SET password = '$password_baru' WHERE username = '$username' ";
                mysqli_query($conn, $query);
                $_SESSION['pesan'] = "<strong>Password Berhasil Diubah!</strong>";
            } else {
                $_SESSION['error'] = "<strong>Konfirmasi Password Salah!</strong>";
            }
        } else {
            $_SESSION['error'] = "<strong>Password Lama Salah!</strong>";
        }
    
    
        $error = true; 
    }
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Ubah Password</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ubah Password</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <?php if (isset($_SESSION['pesan'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['pesan'];  ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php unset($_SESSION['pesan']); ?>
                            <?php } ?>
                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $_SESSION['error'];  ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php unset($_SESSION['error']); ?>
                            <?php } ?>
                            <form action="" method="POST">
                            <input type="hidden" name="username" value="<?= $_SESSION["username"]; ?>">
                            <div class="form-group">
                                <label for="password_lama">Masukkan Password Lama</label>
                                <input type="text" class="form-control" name="password_lama" id="password_lama" placeholder="Masukkan Password Lama" required>
                            </div>
                            <div class="form-group">
                                <label for="password_baru">Masukkan Password Baru</label>
                                <input type="text" class="form-control" name="password_baru" id="password_baru" placeholder="Masukkan Password Baru" required>
                            </div>
                            <div class="form-group">
                                <label for="konfirmasi_password">Masukkan Konfirmasi Password</label>
                                <input type="text" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Masukkan Konfirmasi Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="ubah">Ubah Password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- /.container-fluid -->
<?php require 'layouts/footer.php' ?>