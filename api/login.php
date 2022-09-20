<?php 

require 'koneksi.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $no_meter = $_POST['no_meter'];
    $pass = $_POST['pass'];
    
    $Sql_Query = "SELECT * FROM tb_pelanggan WHERE no_meter = '$no_meter' and pass = '$pass' ";
    
    $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
    
    if(isset($check)){
        echo "Berhasil Login";
    }else{
        echo "Gagal Login";
    }
    
    }else{
    echo "Check Again";
    }
   mysqli_close($con);

?>