<?php
include "./admin/function.php";


if (isset($_GET['id'])) {
    $id_pesanan = $_GET['id'];

    // Hapus data di tabel data_transaksi terlebih dahulu jika ada relasi foreign key
    $delete_transaksi = mysqli_query($koneksi, "DELETE FROM data_transaksi WHERE id_pesanan = '$id_pesanan'");

    // Cek apakah penghapusan di tabel data_transaksi berhasil
    if ($delete_transaksi) {
        // Jika berhasil, hapus data di tabel data_pesanan
        $delete_pesanan = mysqli_query($koneksi, "DELETE FROM data_pesanan WHERE id_pesanan='$id_pesanan'");

        if ($delete_pesanan) {
            echo "<script>alert('Pesanan berhasil dihapus'); window.location='pesanPeng.php';</script>";
        } else {
            // Jika gagal, tampilkan pesan error
            $error = mysqli_error($koneksi);
            echo "<script>alert('Gagal menghapus pesanan: $error'); window.location='pesanPeng.php';</script>";
        }
    } else {
        // Jika penghapusan di tabel data_transaksi gagal, tampilkan pesan error
        $error = mysqli_error($koneksi);
        echo "<script>alert('Gagal menghapus transaksi: $error'); window.location='pesanPeng.php';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='pesanPeng.php';</script>";
}
?>
