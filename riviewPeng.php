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
            <h1><b>Menu Riview</b></h1>
        </div>
        <div class="order-form">
            <form class="wrapper-form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="riview">Riview</label>
                    <textarea class="form-control" name="riview" id="riview" rows="5" required></textarea>
                </div>
                <button class="btn btn-primary" name="simpan">Simpan</button>
            </form>
        </div>
    </div>


    <?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $riview = $_POST['riview'];

        // Validasi dasar
        if (!empty($nama) && !empty($riview)) {
            $stmt = $koneksi->prepare("INSERT INTO data_riview (nama, riview) VALUES (?, ?)");
            $stmt->bind_param("ss", $nama, $riview);

            if ($stmt->execute()) {
                echo "<div class='alert alert-info'>Data Tersimpan</div>";
                echo "<meta http-equiv='refresh' content='1;url=riviewPeng.php'>";
            } else {
                echo "<div class='alert alert-danger'>Data Gagal Tersimpan: " . $stmt->error . "</div>";
            }

            $stmt->close();
        } else {
            echo "<div class='alert alert-danger'>Semua bidang harus diisi</div>";
        }
    }
    ?>


<!-- js responsive navbar -->
<script src="admin/assets/js/responsive.js"></script>


</body>

</html>