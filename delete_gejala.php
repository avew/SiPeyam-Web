<?php

include './confg/koneksi.php';
$id = $_GET['id_gejala'];
$delete = "DELETE FROM tb_gejala where id_gejala='$id'";
$query_delete = mysql_query($delete);
if ($query_delete) {
    echo "<script>alert('Data berhasil dihapus')
        location.replace('gejala.php')</script>";
} else {
    echo "<script>alert('Data gagal dihapus')
        location.replace('gejala.php')</script>";
}
?>