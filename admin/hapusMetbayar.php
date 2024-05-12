<?php 
include "function.php";


$ambil = $koneksi->query("SELECT * FROM metode_bayar WHERE id_metode='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// digunakan untuk menghapus dimana sesuai dengan id, 
// kenapa kita memilih id karena pada tabel metode_bayar id_metode adalah primary key artinya unik tidak akan ada yg memiliki id yg sama
$koneksi->query("DELETE FROM metode_bayar WHERE id_metode='$_GET[id]'");

echo "<script>alert('Jenis Metode Bayar Akan Dihapus');</script>";
echo "<script>location='index.php?halaman=met_bayar';</script>";

?>