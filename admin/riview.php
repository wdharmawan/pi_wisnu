<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Riview Pelanggan</h2>

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>Riview</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $nomer = 1;
            include "function.php";

            // Pastikan koneksi ke database berhasil
            if ($koneksi->connect_error) {
                die("Koneksi gagal: " . $koneksi->connect_error);
            }

            // Query untuk mengambil data dari data_riview dan data_pelanggan
            $query = "SELECT * FROM data_riview ";
            $result = mysqli_query($koneksi, $query);

            // Pastikan query berhasil dijalankan
            if (!$result) {
                die("Query gagal: " . mysqli_error($koneksi));
            }

            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $nomer; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['riview']; ?></td>
                </tr>
            <?php
                $nomer++;
            }
            ?>
        </tbody>



    </table>
</body>

</html>