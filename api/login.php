<?php 
    require '../functions.php';

    $no_hp = $_POST["no_hp"];
    $password = $_POST["password"];

    $query = "SELECT * FROM tb_pelanggan WHERE no_hp = '$no_hp' AND pass = '$password'";
    $result = array();
    $result['data'] = array();
    $response = mysqli_query($conn, $query);

    if(mysqli_num_rows($response) === 1){
        $row = mysqli_fetch_assoc($response);
        $ds['id_pelanggan'] = $row['id'];
        $ds['nama'] = $row['nama'];
        $ds['no_hp'] = $row['no_hp'];
        $ds['no_meter'] = $row['no_meter'];
        $ds['daya'] = $row['daya'];
        $ds['alamat'] = $row['alamat'];

        array_push($result['data'], $ds);
        $result['status'] = 'success';
        echo json_encode($result);
    } else {
        $result['status'] = 'error';
        echo json_encode($result);
    }
?>