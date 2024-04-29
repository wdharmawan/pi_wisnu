<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

<h2>Data Pelanggan</h2>   
    
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>Id Pelanggan</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Alamat</th>
                <!-- <th>Aksi</th> -->
            </tr>
        </thead>
    
        <tbody>
            <?php 
                include "function.php";
                $query = mysqli_query($koneksi, "select id_pel, username_pel, email_pel, nohp_pel, alamat_pel from data_pelanggan");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_pel']; ?></td>
                <td><?php echo $data['username_pel']; ?></td>
                <td><?php echo $data['email_pel']; ?></td>
                <td><?php echo $data['nohp_pel']; ?></td>
                <td><?php echo $data['alamat_pel'];?></td>
                <!-- <td>
                    <span>
                       <a href="" class="btn btn-info">Edit</a>
                       <a href="" class="btn btn-danger">Hapus</a>
                    </span>
                </td> -->

            </tr>
            <?php }?>
        </tbody>
    
    
    
    </table>

    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>