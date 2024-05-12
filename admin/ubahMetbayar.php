<h2>Ubah Metode Bayar</h2>

<?php 
include "function.php";

$ambil = $koneksi->query("SELECT * FROM metode_bayar WHERE id_metode='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<!-- Membuat form untuk uabh jenis sepatu -->
<section class="form-container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Metode Bayar</label>
            <input type="text" class="form-control" name="bayar" value="<?php echo $pecah['metode_bayar']; ?>">
        </div>
        <button class="btn btn-warning" name="ubah">Ubah</button>
    </form>
</section>

<?php 
include "function.php";

if (isset($_POST['ubah'])) {

    $koneksi->query("UPDATE metode_bayar SET metode_bayar='$_POST[bayar]' WHERE id_metode='$_GET[id]'");

    echo "<script>alert('Melakukan Perubahan Pada Metode Bayar');</script>";
    echo "<script>location='index.php?halaman=met_bayar';</script>";
}


?>
