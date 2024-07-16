<?php 
session_start();
include "./admin/function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./admin/assets/css/bootstrap.css">
    <link rel="stylesheet" href="./admin/assets/css/font-awesome.css">
    <link rel="stylesheet" href="./admin/assets/css/style.css">
    <link rel="stylesheet" href="./admin/assets/js/morris/morris-0.4.3.min.css">
</head>

<body>
    
<!-- awal membuat php untuk dapat login -->
    <?php
    // jika tombol login ditekan
    if (isset($_POST['login'])) {

        // mengambil  inputan dari form 
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // melakukan query cek akun di tabel data_pelanggan di data
        $query = mysqli_query($koneksi, "SELECT * FROM data_pelanggan WHERE email_pel='$email' AND pass_pel='$password'");


        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
            echo '<script>alert("Berhasil Login"); 
            location.href="home.php";</script>';
        }else {
            echo '<script>alert("Gagal Login, Periksan Akun Anda"); </script>';
        }
    }
    ?>

    <!-- membuat tampilan login -->
    <div class="page-login">
        <div class="container">
            <div class="image-login">
                <img class="image-content" src="./foto_layanan/disaster.jpg" alt="logo">
            </div>

            <!-- awal membuat form login -->
            <div class="content-login">
                <form class="form-content" method="post">
                    <div class="form-login">
                        <label for="">Email</label>
                        <input type="email" placeholder="Tulisakan Email" name="email">
                    </div>
                    <div class="form-login">
                        <label for="">Password</label>
                        <input type="password" placeholder="Tulisakan Password" name="password">
                    </div>
                    <div class="form-login">
                        <button type="submit" name="login">Login</button>
                    </div>
                    <div class="form-login">
                        <p>Belum punya akun ? <a class="link-regis" href="regisPeng.php">Buat akun</a></p>
                    </div>
                </form>
                <!-- akhir membuat form login -->

            </div>
        </div>
    </div>


</body>

</html>