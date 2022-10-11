<?php 
	//Importing database    
    require '../functions.php';
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_laporan";
	//Mendapatkan Hasil 
	$result = mysqli_query($conn,$sql);
	//Memasukkan Hasil Kedalam Array
	$riwayat_keluhan = array();
    while($row = mysqli_fetch_assoc($result)){
        $index['keluhan'] = $row['keluhan'];
        $index['waktu'] = $row['waktu'];
        $index['tanggal'] = $row['tanggal'];
		array_push($riwayat_keluhan,$index);
    }
	//Menampilkan dalam format JSON
	echo json_encode($riwayat_keluhan);
?>