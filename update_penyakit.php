<?php

include './confg/koneksi.php';
$id_penyakit = $_POST[id_penyakit];
$nama_penyakit = $_POST[nama_penyakit];
$nama_latin = $_POST[nama_latin];
$info_penyakit = $_POST[info_penyakit];
if ($id_penyakit <> NULL) {
    $query = "UPDATE tb_penyakit SET nama_penyakit = '$nama_penyakit',nama_latin='$nama_latin',info_penyakit ='$info_penyakit' WHERE id_penyakit='$id_penyakit'";
    $result = mysql_query($query);
    echo "<script>alert('Data berhasil diupdate')
        location.replace('penyakit.php')</script>";
} else {
    echo "<script>alert('Data gagal diupdate')
        location.replace('penyakit.php')</script>";
}
?>
