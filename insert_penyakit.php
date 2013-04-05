<?php

include './confg/koneksi.php';
$id_penyakit = $_POST[id_penyakit];
$nama_penyakit = $_POST[nama_penyakit];
$nama_latin = $_POST[nama_latin];
if ($nama_penyakit <> NULL) {
    $query = "INSERT INTO tb_penyakit VALUES('$id_penyakit','$nama_penyakit','$nama_latin')";
    $result = mysql_query($query);
    echo "<script>alert('Data berhasil disimpan')
        location.replace('jenis_penyakit.php')</script>";
} else {
    echo "<script>alert('Data gagal disimpan')
        location.replace('form_insert_penyakit.php')</script>";
}
?>
