<h2>Ubah Jenis Sepatu</h2>

<?php 
include "function.php";

$ambil = $koneksi->query("SELECT * FROM data_jenis WHERE id_jenis='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

?>

<!-- Membuat form untuk uabh jenis sepatu -->
<section class="form-container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Jenis Sepatu</label>
            <input type="text" class="form-control" name="sepatu" value="<?php echo $pecah['jenis_sepatu']; ?>">
        </div>
        <button class="btn btn-warning" name="ubah">Ubah</button>
    </form>
</section>

<?php 
include "function.php";

if (isset($_POST['ubah'])) {

    $koneksi->query("UPDATE data_jenis SET jenis_sepatu='$_POST[sepatu]' WHERE id_jenis='$_GET[id]'");

    echo "<script>alert('Melakukan Perubahan Pada Jenis Sepatu');</script>";
    echo "<script>location='index.php?halaman=jenis_sepatu';</script>";
}


?>
