<h2>Tambah Jenis Sepatu</h2>

<!-- Membuat form untuk tambah data paket -->
<section class="form-container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Jenis Sepatu</label>
            <input type="text" class="form-control" name="sepatu">
        </div>

        <button class="btn btn-primary" name="simpan">Simpan</button>
    </form>
</section>

<?php 
include "function.php";

if (isset($_POST['simpan'])) {
    // $nama = $_FILES['foto']['name'];
    // $lokasi = $_FILES['foto']['tmp_name'];
    // move_uploaded_file($lokasi, "../foto_layanan/".$nama);
    $koneksi->query("INSERT INTO data_jenis
    (jenis_sepatu )
    VALUES ('$_POST[sepatu]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=jenis_sepatu'>";
}

?>