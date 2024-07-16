<?php
session_start();
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
<?php
if (isset($_POST['daftar'])) {
    // Retrieve form data
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $nomer = $_POST['nomer'];
    $alamat = $_POST['alamat'];

    // Check if any field is empty
    if (empty($nama) || empty($username) || empty($email) || empty($pass) || empty($nomer) || empty($alamat)) {
        echo '<script>alert("Registration failed. Please try again.")</script>';
    } else {
        // Execute the query
        $result = $koneksi->query("INSERT INTO data_admin (nama_admin, username_admin, email_admin, pass_admin, nohp_admin, alamat_admin) 
            VALUES ('$nama', '$username', '$email', '$pass', '$nomer', '$alamat')");

        // Check if the query was successful
        if ($result) {
            echo '<script>alert("Registrasi Sukses!")</script>';
        } else {
            echo '<script>alert("Registrasi Gagal. Coba Lagi.")</script>';
        }
    }
}
?>
    <!-- membuat tampilan Regis -->
    <div class="regis">
        <div class="container-regis">
            <div class="image-regis">
                <img class="image-content" src="../foto_layanan/disaster.jpg" alt="logo">
            </div>

            <!-- awal membuat form regis -->
            <div class="content-regis">
                <form class="form-content" method="post">
                    <div class="form-regis">
                        <label for="">Nama</label>
                        <input type="text" placeholder="Tulisakan Nama" name="nama">
                    </div>
                    <div class="form-regis">
                        <label for="">Username</label>
                        <input type="text" placeholder="Tulisakan Username" name="username">
                    </div>
                    <div class="form-regis">
                        <label for="">Email</label>
                        <input type="email" placeholder="Tulisakan Email" name="email">
                    </div>
                    <div class="form-regis">
                        <label for="">Passsword</label>
                        <input type="password" placeholder="Tulisakan Password" name="pass">
                    </div>
                    <div class="form-regis">
                        <label for="">No Hp</label>
                        <input type="tel" placeholder="Tulisakan No Handphone" name="nomer">
                    </div>
                    <div class="form-regis">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" placeholder="alamat"></textarea>
                    </div>
                    <div class="form-regis">
                        <button type="submit" name="daftar">Daftar</button>
                    </div>
                    <div class="form-regis">
                        <p>Sudah punya akun ? <a class="link-regis" href="login.php">Login</a></p>
                    </div>
                </form>
                <!-- akhir membuat form regis -->

            </div>
        </div>
    </div>

</body>

</html>