<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
		
    //Mendapatkan Nilai Variable
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $keluhan = $_POST['keluhan'];
    
    //Pembuatan Syntax SQL
    $sql = "INSERT INTO tb_pelanggan (nama,alamat,keluhan) VALUES ('$nama','$alamat','$keluhan')";
    
    //Import File Koneksi database
    require_once('koneksi.php');
    
    //Eksekusi Query database
    if(mysqli_query($con,$sql)){
        echo 'Berhasil Menambahkan Pegawai';
    }else{
        echo 'Gagal Menambahkan Pegawai';
    }
    
    mysqli_close($con);
}
?>