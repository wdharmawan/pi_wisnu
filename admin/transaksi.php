<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="/admin/assets/css/custom.css"> -->
</head>
<body>
    
    <h2>Data Transaksi</h2>
    
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Pesanan</th>
                <th>Nama Paket</th>
                <th>Metode Bayar</th>
                <th>Total Bayar</th>
                <th>Bukti Pembayaran</th>

            </tr>
        </thead>
    
        <tbody>
            <?php
                $nomer=1;
                include "function.php";
                $query = mysqli_query($koneksi, "SELECT * FROM data_transaksi INNER JOIN layanan ON data_transaksi.id_paket = layanan.id_paket INNER JOIN metode_bayar ON data_transaksi.id_metode = metode_bayar.id_metode");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $nomer ;?></td>
                <td><?php echo $data['id_pesanan']; ?></td>
                <td><?php echo $data['nama_paket']; ?></td>
                <td><?php echo $data['metode_bayar']; ?></td>
                <td><?php echo $data['total_bayar']; ?></td>
                <td><?php echo $data['bukti_pem']; ?></td>
                <!-- <td>
                    <span>
                       <a href="" class="btn btn-danger">Edit</a>
                       <a href="" class="btn btn-danger">Hapus</a>
                    </span>

                </td> -->
                
            </tr>
            <?php $nomer++; ?>
            <?php }?>
        </tbody>
    
    
    
    </table>
</body>
</html>


