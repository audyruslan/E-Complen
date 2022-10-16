<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $photo = $_POST['photo'];

    $path = "profile/$id.jpeg";
    $finalPath = "https://e-complaint.banua-software.com/api/".$path;

    require '../functions.php';

    $sql = "UPDATE tb_pelanggan SET photo='$finalPath' WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        
        if ( file_put_contents( $path, base64_decode($photo) ) ) {
            
            $result['success'] = "1";
            $result['message'] = "success";

            echo json_encode($result);
            mysqli_close($conn);

        }

    }

}