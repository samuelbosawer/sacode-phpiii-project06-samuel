<?php
// BUAT DATABASE

// Integrasi koneksi
require_once('./config/koneksi2.php');

// Perintah SQL untuk buat databate
$sql  = "CREATE DATABASE sacode";

$query = $koneksi->query($sql);

// Periksa database
if($query === TRUE)
{
    echo "<b> Berhasil </b> Database sudah jadi ...";
}else{
    echo "Error :" . $sql ."<br>". $koneksi->error;
}
?>