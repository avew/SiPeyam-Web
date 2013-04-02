<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$host = "localhost";
$user = "root";
$pass = "";
$db = "penyakit_ayam";

$con = mysql_connect($host, $user, $pass) or die("Koneksi database gagal");
mysql_select_db($db, $con) or die("Database tidak ada");
?>
