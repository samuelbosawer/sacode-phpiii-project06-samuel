<?php
// HAPUS DATABASE

// Integrasi koneksi
require_once('./config/koneksi.php');

// Perintah SQL untuk buat databate
$sql  = "DROP DATABASE sacode";

$query = $koneksi->query($sql);

// Periksa database
if($query === TRUE)
{
    echo "<b> Berhasil </b> Database sudah terhapus ...";
}else{
    echo "Error :" . $sql ."<br>". $koneksi->error;
}
?>