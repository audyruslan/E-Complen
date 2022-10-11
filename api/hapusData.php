<?php 
	//Importing database    
    require '../functions.php';
    //Ambil id_pelanggan
    $keluhan = $_POST["keluhan"];
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID Pelanggan
	$check = "SELECT * FROM tb_laporan WHERE keluhan = '$keluhan'";
	//Mendapatkan Hasil 
	$result = mysqli_query($conn,$check);

    if(mysqli_num_rows($result) === 1){
        $sql = "DELETE FROM tb_pelanggan WHERE keluhan = '$keluhan'";
        if(mysqli_query($conn,$sql)){
            echo "Data Berhasil Dihapus!";
            echo json_encode($result);
        } else {
            echo "Data Gagal Dihapus!";
        }
    } else {
        echo "Data UnAvalable";
    }
?>