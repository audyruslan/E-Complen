<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    //MEndapatkan Nilai Dari Variable 
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    
    //import file koneksi database 
    require_once('koneksi.php');
    
    //Membuat SQL Query
    $sql = "UPDATE tb_pelanggan SET nama = '$nama', alamat = '$alamat', keluhan = '$keluhan' WHERE id = $id;";
    
    //Meng-update Database 
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Update Data Pelanggan';
    }else{
        echo 'Gagal Update Data Pelanggan';
    }
    
    mysqli_close($con);
}
?>