<?php
session_start();
include "./admin/function.php";


$id_param = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT dp.*, l.nama_paket, l.harga_paket 
                                 FROM data_pesanan dp 
                                 JOIN layanan l ON dp.id_paket = l.id_paket 
                                 WHERE dp.id_pesanan='$id_param'");

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_array($query);
    // Lakukan sesuatu dengan $data, misalnya tampilkan informasi
} else {
    echo '<script>alert("Data tidak ditemukan"); </script>';
}


// menirima data dari inputan form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil nama file dan lokasi sementara dari file yang diunggah
    $nama = $_FILES['gambar']['name'];
    $lokasi = $_FILES['gambar']['tmp_name'];

    // Pindahkan file yang diunggah ke direktori yang ditentukan
    move_uploaded_file($lokasi, "./foto_layanan/" . $nama);

    // Ambil nilai dari form
    $id_pesanan = $_POST['pesan'];
    $id_paket = $data['id_paket'];
    $id_metode = $_POST['metode'];
    $total_bayar = $_POST['harga'];
    $bukti_pembayaran = $nama; // Nama file yang diunggah



    // Query SQL untuk memasukkan data ke dalam tabel data_transaksi
    $query = "INSERT INTO data_transaksi (id_pesanan, id_paket, id_metode, total_bayar, bukti_Pem) 
              VALUES ('$id_pesanan', '$id_paket', '$id_metode', '$total_bayar', '$bukti_pembayaran')";

    // Eksekusi query
    if ($koneksi->query($query) === TRUE) {
        echo '<script>alert("Berhasil Melakukan Pembayaran"); location.href="pesanPeng.php";</script>';
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }
}

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

<body class="body">
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

    <!--awal membuat order  -->
    <div class="container-order">
        <div class="wrapper-order">
            <h1><b>Menu Bayar</b></h1>
        </div>
        <div class="order-form">

            <form class="wrapper-form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Id Pesanan</label>
                    <input type="text" name="pesan" value="<?php echo $data['id_pesanan']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Paket</label><br>
                    <input type="text" name="paket" value="<?php echo $data['nama_paket']; ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Metode</label>
                    <select name="metode" class="form-control">
                        <option selected>Metode</option>
                        <?php
                        $qry = $koneksi->query("SELECT * FROM metode_bayar");
                        while ($method = $qry->fetch_assoc()) { ?>
                            <option value="<?= $method['id_metode']; ?>"><?= $method["metode_bayar"]; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Total Bayar</label>
                    <input type="text" value="<?php echo $data['harga_paket']; ?>" class="form-control" name="harga">

                </div>
                <div class="form-group">
                    <label for="">Bukti Pembayaran</label>
                    <input type="file" class="form-control" name="gambar">
                </div>


                <button type="submit" class="btn-order" name="bayar">Bayar</button>
            </form>
        </div>
        ?>
    </div>

    <!-- <pre>
    <?php print_r($_SESSION['']); ?>
</pre> -->


    <!-- js responsive navbar -->
    <script src="admin/assets/js/responsive.js"></script>

</body>


</html>