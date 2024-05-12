<?php
include "function.php";

$ambil = $koneksi->query("SELECT * FROM data_jenis WHERE id_jenis='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM data_jenis WHERE id_jenis='$_GET[id]'");

echo "<script>alert('Jenis Sepatu Akan Dihapus');</script>";
echo "<script>location='index.php?halaman=jenis_sepatu';</script>";
?>