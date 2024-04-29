<h2>Tambah Layanan</h2>

<!-- Membuat form untuk tambah data paket -->
<section class="form-container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama Paket</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga">
        </div>

        <button class="btn btn-primary" name="simpan">Simpan</button>
    </form>
</section>

<?php 
include "function.php";

if (isset($_POST['simpan'])) {
    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../foto_layanan/".$nama);
    $koneksi->query("INSERT INTO layanan 
    (nama_paket, desk_paket, foto_paket, harga_paket)
    VALUES ('$_POST[nama]', '$_POST[deskripsi]', '$nama', '$_POST[harga]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=data_paket'>";
}

?>

