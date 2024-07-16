<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>

<body>

    <h2>Data Pesanan</h2>

    <div class="container-table">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
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
                $nomer = 1;
                include "function.php";

                // menggabungkan data dari 3 tabel berbeda dengan fungsi INNER JOIN
                $query = mysqli_query($koneksi, "SELECT * FROM data_pesanan INNER JOIN layanan ON data_pesanan.id_paket = layanan.id_paket INNER JOIN data_jenis ON data_pesanan.id_jenis = data_jenis.id_jenis");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $nomer; ?></td>
                        <td><?php echo $data['nama_pem']; ?></td>
                        <td><?php echo $data['alamat_pem']; ?></td>
                        <td><?php echo $data['nama_paket']; ?></td>
                        <td><?php echo $data['jenis_sepatu']; ?></td>
                        <td><?php echo $data['tanggal_pesan']; ?></td>
                        <td><?php echo $data['status_pes']; ?></td>
                        <td><?php echo $data['status_transaksi']; ?></td>
                        <td>
                            <span>
                                <a href="index.php?halaman=editPesanan&id=<?php echo $data['id_pesanan'] ?>" class="btn btn-warning">Ubah</a>
                                <a href="hapusPes.php?id=<?php echo $data['id_pesanan'] ?>" class="btn btn-danger">Hapus</a>
                            </span>
                        </td>

                    </tr>
                    <?php $nomer++; }?>;
            </tbody>



        </table>
    </div>

    <!-- <a href="index.php?halaman=tambahPesan" class="btn btn-primary">Tambah Pesanan</a> -->
</body>

</html>