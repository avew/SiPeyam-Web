<?php

include './confg/koneksi.php';
$id_gejala = $_POST[id_gejala];
$nama_gejala = $_POST[nama_gejala];
if ($id_gejala <> NULL) {
    $query = "UPDATE tb_gejala SET nama_gejala = '$nama_gejala' WHERE id_gejala='$id_gejala'";
    $result = mysql_query($query);
    echo "<script>alert('Data berhasil diupdate')
        location.replace('gejala.php')</script>";
} else {
    echo "<script>alert('Data gagal diupdate')
        location.replace('form_gejala.php')</script>";
}
?>
