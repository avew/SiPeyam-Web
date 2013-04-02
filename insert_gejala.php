<?php

include './confg/koneksi.php';
$id_gejala = $_POST[id_gejala];
$nama_gejala = $_POST[nama_gejala];
if ($nama_gejala <> NULL) {
    $query = "INSERT INTO tb_gejala VALUES('$id_gejala','$nama_gejala')";
    $result = mysql_query($query);
    echo "<script>alert('Data berhasil disimpan')
        location.replace('gejala.php')</script>";
} else {
    echo "<script>alert('Data gagal disimpan')
        location.replace('form_gejala.php')</script>";
}
?>
