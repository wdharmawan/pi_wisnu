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
    <?php 
    
    // menirima data dari inputan form
    if (isset($_POST['order'])) {
        
        // menambah data di tabel data pesanan
        $koneksi->query("INSERT INTO data_pesanan (nama_pem, alamat_pem, nohp_pem, id_paket, id_jenis, tanggal_pesan) 
        VALUES ('$_POST[nama]', '$_POST[alamat]', '$_POST[nomor]', '$_POST[paket]', '$_POST[jenis]', '$_POST[tanggal]')");


        echo '<script>alert("Berhasil Melakukan Order"); location.href="pesanPeng.php";</script>';

    }

    
    ?>


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
            <h1><b>Menu Order</b></h1>
        </div>
        <div class="order-form">
            <form class="wrapper-form" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Pemesan</label>
                    <input type="text" name="nama" value="<?php echo $_SESSION["user"]["nama_pel"] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea class="form-control" name="alamat" rows="5"><?php echo $_SESSION['user']['alamat_pel'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">No. Hp Pemesan</label>
                    <input type="tel" name="nomor" value="<?php echo $_SESSION["user"]["nohp_pel"] ?>" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Paket</label><br>
                    <!-- <select name="paket" id="paket" class="form-control">
                        <option selected>Pilih Paket</option>
                        <option value="fast">7</option>
                        <option value="yellow">8</option>
                        <option value="repaint">15</option>
                        <option value="special">16</option>
                    </select> -->
                    <select name="paket" class="form-control">
                        <option selected>Pilih Paket</option>
                        <?php 
                        $qry = $koneksi->query("SELECT * FROM layanan");
                        while($data = $qry->fetch_assoc()){?>
                            <option value="<?= $data['id_paket'];?>"><?= $data["nama_paket"];?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Jenis</label>
                    <!-- <select name="jenis" id="jenis" class="form-control">
                        <option selected>Jenis</option>
                        <option value="senakers">2</option>
                        <option value="gunung">5</option>
                        <option value="flat">6</option>
                        <option value="deep"></option>
                        <option value="special"></option>
                    </select> -->
                    <select name="jenis" class="form-control">
                        <option selected>Jenis</option>
                        <?php 
                        $qry = $koneksi->query("SELECT * FROM data_jenis");
                        while($data = $qry->fetch_assoc()){?>
                            <option value="<?= $data['id_jenis'];?>"><?= $data["jenis_sepatu"];?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Waktu</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>

                <button type="submit" class="btn-order" name="order">Order</button>
            </form>
        </div>
    </div>


    <!-- js responsive navbar -->
    <script src="admin/assets/js/responsive.js"></script>


</body>

</html>