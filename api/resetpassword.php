<?php 
    require '../functions.php';

    $no_hp = $_POST["no_hp"];
    $oldpass = $_POST["oldpass"];
    $newpass = $_POST["newpass"];
    $confirmpass = $_POST["confirmpass"];

    $sql = "SELECT * FROM tb_pelanggan WHERE no_hp = '$no_hp' AND pass = '$oldpass'";
    $query = mysqli_query($conn, $sql);

    if($newpass == $confirmpass){
        if(!mysqli_num_rows($query) > 0){
            echo "Password Lama Salah";
        } else {
            $update = "UPDATE tb_pelanggan SET pass = '$newpass' WHERE no_hp = '$no_hp'";
            $res = mysqli_query($conn,$update);
            if($res){
                echo "Password Berhasil diUbah";
            } else {
                echo "Error:-101";
            }
        }
    } else {
        echo "Password Tidak Sama!";
    }

?>