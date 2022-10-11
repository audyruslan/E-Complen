<?php 
    require '../functions.php';

    $nama = $_POST["nama"];
    $no_meter = $_POST["no_meter"];
    $no_hp = $_POST["no_hp"];
    $daya = $_POST["daya"];
    $alamat = $_POST["alamat"];
    $oldNohp = $_POST["oldNohp"];

    $query = "SELECT * FROM tb_pelanggan WHERE no_hp = '$oldNohp'";
    $check = mysqli_query($conn, $query);

    if(mysqli_num_rows($check) > 0){
        $result = "UPDATE tb_pelanggan SET nama = '$nama', no_hp = '$no_hp', no_meter = '$no_meter', daya = '$daya', alamat = '$alamat' WHERE no_hp = '$oldNohp'";
        if(mysqli_query($conn, $result)){
            echo "Data Berhasi diubah";
        } else {
            echo "Data Gagal diubah";
        }
    } else {
        echo "UnAthorized User";
    }
?>