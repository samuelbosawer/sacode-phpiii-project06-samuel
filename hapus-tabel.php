<?php
    // BUAT TABLE

    // Integrasi koneksi
    require_once('./config/koneksi.php');

    // Perintah SQL untuk buat
    $sql = "DROP TABLE kategori_anggota";

    // Melakukan perimintaan ke database
    $query = $koneksi->query($sql);

    // / Periksa database
    if($query === TRUE)
    {
        echo "<b> Berhasil </b> tabel berhasil dihapus  ...";
    }else{
        echo "Error :" . $sql ."<br>". $koneksi->error;
    }

?>