<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "complen_db");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Hapus Data Pelanggan
function hapus_pelanggan($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pelanggan WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}

// Hapus Data Akun Administrator
function hapus_admin($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_users WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}