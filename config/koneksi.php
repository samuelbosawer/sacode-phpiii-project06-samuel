<?php 
    // KONEKSI DATABASES

    // panggil dile config 
    require_once('config.php');

    // Membuat koneksi
    $koneksi = new mysqli($servername, $username, $password,$database);

    // Periksa koneksi
    if($koneksi->connect_error)
    {
        echo "Koneksi Gagal !!";
    }else{
        echo "Koneksi Berhasil !!";
    };
?>