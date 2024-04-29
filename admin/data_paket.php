<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/assets/css/custom.css">
</head>
<body>
    
    <h2>Data Layanan</h2>

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
                include "function.php";
                $query = mysqli_query($koneksi, "select * from layanan");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_paket']; ?></td>
                <td><?php echo $data['nama_paket']; ?></td>
                <td><?php echo $data['desk_paket']; ?></td>
                <td>
                    <img src="../foto_layanan/<?php echo $data['foto_paket']; ?>" width="100">
                </td>
                <td><?php echo $data['harga_paket']; }?></td>
            </tr>
        </tbody>
    
    </table>
    
    <a href="index.php?halaman=tambahLayanan" class="btn btn-primary">Tambah Layanan</a>
</body>
</html>


