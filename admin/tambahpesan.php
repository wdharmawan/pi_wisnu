<h2>Tambah Pesanan</h2>

<!-- Membuat form untuk tambah data paket -->
<!-- <section class="form-container">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">alamat</label>
            <textarea class="form-control" name="deskripsi" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">nomer</label>
            <input type="tel" class="form-control" name="nomer">
        </div>
        <div class="form-group">
            <label for="">Paket</label>
            <input type="text" class="form-control" name="paket">
        </div>
        <div class="form-group">
            <label for="">jenis</label>
            <input type="text" class="form-control" name="jenis">
        </div>
        <div class="form-group">
            <label for="">Tanggal</label>
            <input type="date" class="form-control" name="tanggal">
        </div>
        <div class="form-group">
            <label for="">Status Pesa</label>
            <input type="text" class="form-control" name="pes">
        </div>
        <div class="form-group">
            <label for="">metode</label>
            <input type="text" class="form-control" name="met">
        </div>
        <div class="form-group">
            <label for="">status transaksi</label>
            <input type="text" class="form-control" name="tran">
        </div>

        <button class="btn btn-primary" name="simpan">Simpan</button>
    </form>
</section> -->

<?php 
include "function.php";

if (isset($_POST['simpan'])) {
    // $nama = $_FILES['foto']['name'];
    // $lokasi = $_FILES['foto']['tmp_name'];
    // move_uploaded_file($lokasi, "../foto_layanan/".$nama);
    $koneksi->query("INSERT INTO data_pesanan 
    (nama_pem, alamat_pem, nohp_pem, tanggal_pesan, status_Pes,status_transaksi)
    VALUES ('$_POST[nama]', '$_POST[deskripsi]', '$_POST[nomer]', '$_POST[tanggal]', '$_POST[pes]','$_POST[tran]')");

    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pesanan'>";
}

?>
