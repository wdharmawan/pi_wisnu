<?php
session_start();
include "./admin/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Revou</title>
    <!-- <link rel="stylesheet" href="admin/assets/css/style.css"> -->
    <link rel="stylesheet" href="./admin/assets/css/style2.css">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="admin/assets/css/font-awesome.css"> -->
</head>

<body>
     <!-- Awal navbar -->
     <header class="header" id="home">
        <!-- <div class="logo">
            <img class="logo_content" src="./foto_layanan/disaster.jpg" alt="logo">
        </div> -->
        <div class="nav_container">
            <nav class="nav_content">
                <a href="home.php">Home</a>
            </nav>
        </div>
    </header>
    <!-- Akhir navbar -->


    <div class="title-pes">
        <h2>
            Menu Pesanan
        </h2>
    </div>
    <div class="content-table">

        <div class="wrapper-table">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Id Pesanan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Nama Paket</th>
                        <th>Jenis Sepatu</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Pesanan</th>
                        <th>Status Transaksi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php

                    // menggabungkan data dari 3 tabel berbeda dengan fungsi INNER JOIN
                    $query = mysqli_query($koneksi, "SELECT * FROM data_pesanan INNER JOIN layanan ON data_pesanan.id_paket = layanan.id_paket INNER JOIN data_jenis ON data_pesanan.id_jenis = data_jenis.id_jenis");
                    while ($data = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $data['id_pesanan']; ?></td>
                            <td><?php echo $data['nama_pem']; ?></td>
                            <td><?php echo $data['alamat_pem']; ?></td>
                            <td><?php echo $data['nohp_pem']; ?></td>
                            <td><?php echo $data['nama_paket']; ?></td>
                            <td><?php echo $data['jenis_sepatu']; ?></td>
                            <td><?php echo $data['tanggal_pesan']; ?></td>
                            <td><?php echo $data['status_pes']; ?></td>
                            <td><?php echo $data['status_transaksi']; ?></td>
                            <td>
                                <span>
                                    <a href="bayarPeng.php?id=<?php echo $data['id_pesanan']; ?>" class="btn btn-warning">Bayar</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </span> 
                            </td>
    
                        </tr>
                        <?php } ?>;
                </tbody>
    
    
            </table>
        </div>
    </div>

    <!-- js responsive navbar -->
    <script src="admin/assets/js/responsive.js"></script>


</body>

</html>
