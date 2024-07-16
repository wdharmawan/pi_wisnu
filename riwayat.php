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
            Menu Riwayat
        </h2>
    </div>
    <div class="content-table">

        <div class="wrapper-table">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Id Pesanan</th>
                        <th>Nama</th>
                        <th>Pilihan Paket</th>
                        <th>Total Harga</th>
                        <th>Tanggal Pesan</th>
                        <th>Status Pesanan</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    // Query untuk mengambil data dari data_pesanan yang status_pes-nya 'selesai'
                    $query = mysqli_query($koneksi, "SELECT data_pesanan.*, layanan.nama_paket, layanan.harga_paket, data_jenis.jenis_sepatu 
                                                    FROM data_pesanan 
                                                    INNER JOIN layanan ON data_pesanan.id_paket = layanan.id_paket 
                                                    INNER JOIN data_jenis ON data_pesanan.id_jenis = data_jenis.id_jenis 
                                                    WHERE data_pesanan.status_pes = 'selesai'");

                    // Periksa apakah query berhasil dijalankan
                    if (!$query) {
                        die("Query gagal: " . mysqli_error($koneksi));
                    }

                    while ($data = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td><?php echo $data['id_pesanan']; ?></td>
                            <td><?php echo $data['nama_pem']; ?></td>
                            <td><?php echo $data['nama_paket']; ?></td>
                            <td><?php echo $data['harga_paket']; ?></td>
                            <td><?php echo $data['tanggal_pesan']; ?></td>
                            <td><?php echo $data['status_pes']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>


            </table>
        </div>
    </div>

    <!-- js responsive navbar -->
    <script src="admin/assets/js/responsive.js"></script>


</body>

</html>