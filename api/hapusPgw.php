<?php 
 $id = $_GET['id'];
 
 //Import File Koneksi Database
 require_once('koneksi.php');
 
 //Membuat SQL Query
 $sql = "DELETE FROM tb_pelanggan WHERE id=$id;";
 
 
 //Menghapus Nilai pada Database 
 if(mysqli_query($con,$sql)){
 echo 'Berhasil Menghapus Pelanggan';
 }else{
 echo 'Gagal Menghapus Pelanggan';
 }
 
 mysqli_close($con);
?>