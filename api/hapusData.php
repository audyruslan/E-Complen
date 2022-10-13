<?php 
	//Importing database    
    require '../functions.php';
    //Ambil id
    $id = $_POST["id"];
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID Pelanggan
	$query = "SELECT * FROM tb_laporan WHERE id = '$id'";
	//Mendapatkan Hasil 
	$check = mysqli_query($conn,$query);
    $result = array();
    if(mysqli_num_rows($check) === 1){
        $sql = "DELETE FROM tb_laporan WHERE id = '$id'";
        if(mysqli_query($conn,$sql)){
            $result['state'] = "delete";
            echo json_encode($result);
        } else {
            echo "Data Berhasil Dihapus!";
        }
    } else {
        echo "Data Gagal Dihapus";
    }
?>