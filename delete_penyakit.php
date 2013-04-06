<?php

include './confg/koneksi.php';
$id = $_GET['id_penyakit'];
$delete = "DELETE FROM tb_penyakit where id_penyakit='$id'";
$query_delete = mysql_query($delete);
if ($query_delete) {
    echo "<script>alert('Data berhasil dihapus')
        location.replace('penyakit.php')</script>";
} else {
    echo "<script>alert('Data gagal dihapus')
        location.replace('penyakit.php')</script>";
}
?>