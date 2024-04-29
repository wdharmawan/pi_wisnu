<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/admin/assets/css/custom.css"> -->
</head>
<body>
    
    <h2>Jenis Sepatu</h2>
    
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Id Sepatu</th>
                <th>Jenis Sepatu</th>
                <th>Aksi</th>
            </tr>
        </thead>
    
        <tbody>
            <?php 
                include "function.php";
                $query = mysqli_query($koneksi, "select * from data_jenis");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_jenis']; ?></td>
                <td><?php echo $data['jenis_sepatu']; ?></td>
                <td>
                    <span>
                       <a href="" class="btn btn-warning">Ubah</a>
                       <a href="" class="btn btn-danger">Hapus</a>
                    </span>

                </td>
                <?php } ?>
            </tr>
        </tbody>
    
    
    
    </table>
    <a href="index.php?halaman=tambahJenis" class="btn btn-primary">Tambah Jenis Sepatu</a>
</body>
</html>


