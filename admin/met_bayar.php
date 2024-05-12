<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/assets/css/custom.css">
</head>
<body>
    
    <h2>Metode Bayar</h2>
    
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Id Bayar</th>
                <th>Metode Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
    
        <tbody>
            <?php 
                include "function.php";
                $query = mysqli_query($koneksi, "select * from metode_bayar");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_metode']; ?></td>
                <td><?php echo $data['metode_bayar'];?></td>
                <td>
                    <span>
                       <a href="index.php?halaman=ubahMetbayar&id=<?php echo $data['id_metode'] ?>" class="btn btn-warning">Ubah</a>
                       <!-- ini akan diarahkan ke halaman hapusMetbayar dan ke id yg akan kita hapus -->
                       <a href="index.php?halaman=hapusMetbayar&id=<?php echo $data['id_metode'] ?>" class="btn btn-danger">Hapus</a>
                    </span>

                </td>
            </tr>
            <?php } ?>

        </tbody>
    
    
    </table>
    <a href="index.php?halaman=tambahMetode" class="btn btn-primary">Tambah Metode Bayar</a>
</body>
</html>


