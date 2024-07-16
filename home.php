<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('location:loginPeng.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Revou</title>
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="admin/assets/css/font-awesome.css"> -->
</head>

<body class="body">
    <!-- awal navbar -->
    <header class="header" id="home">
        <div class="logo">
            <img class="logo_content" src="./foto_layanan/disaster.jpg" alt="logo">
        </div>
        <div class="nav_container">
            <nav class="nav_content">
                <a href="#home">Home</a>
                <a href="order.php">Order</a>
                <a href="pesanPeng.php">Pesanan</a>
                <a href="riwayat.php">Riwayat</a>
                <a href="#about">About</a>
                <a href="riviewPeng.php">Riview</a>
                <a href="loginPeng.php">Logout</a>
            </nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <!-- akhir navbar -->

    <!-- awal background -->
    <div class="container-title">
        <h1><b>DISASTER WASH SHOES</b></h1>
        <h3><b>"Kami Akan Mengatasi Kemalangan Sepatu Anda"</b></h3>
    </div>
    <!-- akhir background -->

    <!-- awal bagian about -->
    <div class="wrapper-about" id="about">
        <div class="content-about">
            <img src="./foto_layanan/disaster.jpg" alt="disaster">
        </div>
        <div class="text-about">
            <h2>Tentang Kami</h2>
            <p> Selamat datang di Disaster Wash Shoes, tempat terpercaya Anda untuk perawatan sepatu yang profesional. Kami adalah spesialis dalam membersihkan dan merawat sepatu dengan baik. Didirikan pada tahun 2021, kami telah tumbuh menjadi salah satu penyedia layanan cuci sepatu  di wilayah Depok.
                Visi Kami Menjadi pilihan utama bagi pecinta sepatu di wilayah Depok untuk merawat dan mempercantik sepatu kesayangan mereka.
            </p>
        </div>
    </div>
    <!-- akhir bagian about -->

    <div class="div_container" id="home">

        <div class="package_content" id="package">
            <div class="package_title">
                <p>OUR PACKAGE</p>
            </div>
            <div class="card_container">
                <div class="card_content">
                    <img src="./foto_layanan/fast.jpg" alt="fast">
                    <div class="card_fill">
                        <h3><b>FAST CLEANING</b></h3>
                        <P>Pencucian instan pada bagian upper dan midsole.</P>
                    </div>
                </div>

                <div class="card_content">
                    <img src="./foto_layanan/deep.jpg" alt="deep">
                    <div class="card_fill">
                        <h3><b>DEEP CLEANING</b></h3>
                        <P>Perawatan pembersihan sepatu, tas dan topi secara detail dan menyeluruh pada seluruh bagian.
                        </P>
                    </div>
                </div>

                <div class="card_content">
                    <img src="./foto_layanan/premium.jpg" alt="premium">
                    <div class="card_fill">
                        <h3><b>SPECIAL TREATMENT</b></h3>
                        <P>Perawatan yang ditunjukan untuk meterial khusus dalam pengerjaanya.</P>
                    </div>
                </div>

                <div class="card_content1">
                    <img src="./foto_layanan/unyellow.jpg" alt="unyellow">
                    <div class="card_fill">
                        <h3><b>UNYELLOW TREATMENT</b></h3>
                        <P>Perawatan pada bagian midsole yang telah menguning untuk menghilangkan warna kuning.</P>
                    </div>
                </div>

                <!-- <div class="card_button">
                    <a href=""><button>Lihat Harga Menu</button></a>
                </div> -->

                <div class="card_content1">
                    <img src="./foto_layanan/repaint.jpg" alt="repaint">
                    <div class="card_fill">
                        <h3><b>REPAINT TREATMENT</b></h3>
                        <P>Repaint Treatment pada cuci sepatu adalah proses restorasi warna sepatu yang melibatkan pewarnaan ulang dengan cat khusus untuk mengembalikan warna asli sepatu.</P>
                    </div>
                </div>
            </div>

            <div class="button_container">
                <a href="harga.php"><button class="button_content">Lihat Harga</button></a>
            </div>
        </div>
    </div>

    <div class="contact_container" id="contact">
        <div class="contact_title">
            <p>CONTACT US</p>
        </div>
        <div class="contact_content">
            <h2 class="">DISASTER WASH SHOES</h2>
            <p>Phone: 089768546454</p>
            <p>Email: disaster@gmail.com</p>
            <p>Jalan bahagia raya rt.07/01 Kec. Sukmajaya, kel. Abadijaya, Kota.Depok Gg.hj.ridah</p>
        </div>

        <div class="icon_content">
            <a href="https://api.whatsapp.com/send?phone=6285280395881&text=Hi"><img class="img" src="./foto_layanan/whatsapp (1).png" alt="wa"></a>
            <a href=""><img class="img" src="./foto_layanan/instagram (1).png" alt="ig"></a>
        </div>
    </div>

    <footer class="footer_container">
        <p>&copy; 2024 Disaster Wash Shoes</p>
    </footer>

    <!-- <pre>
        <?php print_r($_SESSION['user']); ?>
    </pre> -->

    <!-- js responsive navbar -->
    <script src="admin/assets/js/responsive.js"></script>

</body>


</html>