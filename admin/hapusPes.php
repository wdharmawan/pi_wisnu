<?php
include "function.php";

if (isset($_GET['id'])) {
    $id_pesanan = $_GET['id'];
    ?>

    <script type="text/javascript">
        var confirmation = confirm("Apakah kamu yakin ingin hapus?");
        if (confirmation) {
            window.location.href = 'delete.php?id=<?php echo $id_pesanan; ?>&confirm=true';
        } else {
            window.location.href = 'index.php?halaman=pesanan';
        }
    </script>

    <?php
} elseif (isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
    $id_pesanan = $_GET['id'];

    // Hapus catatan terkait di tabel data_transaksi
    $delete_transaksi = mysqli_query($koneksi, "DELETE FROM data_transaksi WHERE id_pesanan = '$id_pesanan'");

    if ($delete_transaksi) {
        // Hapus catatan di tabel data_pesanan
        $delete_pesanan = mysqli_query($koneksi, "DELETE FROM data_pesanan WHERE id_pesanan = '$id_pesanan'");

        if ($delete_pesanan) {
            echo "<script>alert('Data berhasil dihapus'); window.location='index.php?halaman=pesanan';</script>";
        } else {
            $error = mysqli_error($koneksi);
            echo "<script>alert('Data gagal dihapus: $error'); window.location='index.php?halaman=pesanan';</script>";
        }
    } else {
        $error = mysqli_error($koneksi);
        echo "<script>alert('Data gagal dihapus di data_transaksi: $error'); window.location='index.php?halaman=pesanan';</script>";
    }
} else {
    echo "<script>alert('ID tidak ditemukan'); window.location='index.php?halaman=pesanan';</script>";
}
?>