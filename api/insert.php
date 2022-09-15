<?php
	
	include "koneksi.php";
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
	
	
	if (empty($nama) || empty($nim) || empty($alamat)) { 
		echo "Kolom isian tidak boleh kosong"; 
		
	} else if(empty($id)) {
		$query = mysqli_query($con,"INSERT INTO mahasiswa (id,nim, nama,alamat) VALUES(0,'".$nim."','".$nama."','".$alamat."')");
		
		if ($query) {
			echo "Data berhasil di simpan";
			
		} else{ 
			echo "Error simpan Data";
			
		}
	}else{
		$query = mysqli_query($con,"UPDATE mahasiswa set nim = '".$nim."', nama = '".$nama."', alamat = '".$alamat."' where id = '". $id ."'");
		
		if ($query) {
			echo "Data berhasil di ubah";
			
		} else{ 
			echo "Error ubah Data";
			
		}
		
	}
?>