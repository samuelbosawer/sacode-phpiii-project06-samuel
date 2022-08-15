<?php
    // BUAT TABLE

    // Integrasi koneksi
    require_once('./config/koneksi.php');

    // Perintah SQL untuk buat
    $sql = "CREATE TABLE kategori_anggota(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        kategori VARCHAR(50) NOT NULL)";

    // Melakukan perimintaan ke database
    $query = $koneksi->query($sql);

    // / Periksa database
    if($query === TRUE)
    {
        echo "<b> Berhasil </b> tabel berhasil dibuat  ...";
    }else{
        echo "Error :" . $sql ."<br>". $koneksi->error;
    }

?>