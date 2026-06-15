<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>
<body>
    
    <h2>Data Layanan</h2>

    <div class="container-table">

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Id layanan</th>
                    <th>Nama</th>
                    <th>deskripsi</th>
                    <th>Foto</th>
                    <th>harga</th>
                </tr>
            </thead>
        
            <tbody>
                <?php 
                    // Mengimpor file function.php yang berisi fungsi dan koneksi ke database
                    include "function.php";

                    // Melakukan query ke database untuk mengambil semua data dari tabel layanan
                    $query = mysqli_query($koneksi, "select * from layanan");

                     // Mengambil setiap baris hasil query dan menampilkannya dalam tabel
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                     <!-- Menampilkan data untuk setiap kolom dalam tabel -->
                    <td><?php echo $data['id_paket']; ?></td>
                    <td><?php echo $data['nama_paket']; ?></td>
                    <td><?php echo $data['desk_paket']; ?></td>
                    <td>
                        <!-- Menampilkan gambar berdasarkan file foto yang diambil dari database -->
                        <img src="../foto_layanan/<?php echo $data['foto_paket']; ?>" width="300">
                    </td>
                    <td><?php echo $data['harga_paket']; }?></td>
                </tr>
            </tbody>
        
        </table>
    </div>
    
    <a href="index.php?halaman=tambahLayanan" class="btn btn-primary">Tambah Layanan</a>
</body>
</html>


