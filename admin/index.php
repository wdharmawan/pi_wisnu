
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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Disaster admin</a> 
            </div>
    <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>

                    <li><a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=pelanggan"><i class="fa fa-dashboard fa-3x"></i> Data Pelanggan</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=admin"><i class="fa fa-dashboard fa-3x"></i> Data Admin</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=pesanan"><i class="fa fa-dashboard fa-3x"></i> Data Pesanan</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=data_paket"><i class="fa fa-dashboard fa-3x"></i> Data Layanan</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=jenis_sepatu"><i class="fa fa-dashboard fa-3x"></i> Jenis Sepatu</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=dat_transaksi"><i class="fa fa-dashboard fa-3x"></i> Data Transaksi</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=met_bayar"><i class="fa fa-dashboard fa-3x"></i> Metode Bayar</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=riview"><i class="fa fa-dashboard fa-3x"></i> Riview</a></li>
                    <li><a class="active-menu"  href="index.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i> Logout</a></li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                // akan mengarahkan ke halaman dashbboard.php
                if (isset($_GET ["halaman"])) 
                {
                    // jika variabel halaman sama dengan pelanggan makan akan ke halaman pelenggan.php
                    if ($_GET ["halaman"]=="pelanggan")
                    {
                        include "pelanggan.php";
                    }

                    // jika variabel halaman sama dengan riview makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="admin") {
                        include "admin.php";
                    }

                    // jika variabel halaman sama dengan pesanan makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="pesanan") {
                        include "pesanan.php";
                    }


                    // jika variabel halaman sama dengan layanan makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="data_paket") {
                        include "data_paket.php";
                    }

                    // jika variabel halaman sama dengan jenis_sepatu  makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="jenis_sepatu") {
                        include "jen_sepatu.php";
                    }

                    // jika variabel halaman sama dengan dat_transaksi makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="dat_transaksi") {
                        include "transaksi.php";
                    }

                    // jika variabel halaman sama dengan met_bayar makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="met_bayar") {
                        include "met_bayar.php";
                    }

                     // jika variabel halaman sama dengan riview makan akan ke halaman pesanan.php
                     else if ($_GET ["halaman"]=="riview") {
                        include "riview.php";
                    }

                     // jika variabel halaman sama dengan logout makan akan ke halaman pesanan.php
                     else if ($_GET ["halaman"]=="logout") {
                        include "data_paket.php";
                    }

                    // jika variabel halaman sama dengan tambahProduk makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="tambahLayanan") {
                        include "tambah_Layanan.php";
                    }

                    // jika variabel halaman sama dengan tambahMetode makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="tambahMetode") {
                        include "tambah_metbayar.php";
                    }

                    // jika variabel halaman sama dengan tambahMetode makan akan ke halaman pesanan.php
                    else if ($_GET ["halaman"]=="tambahJenis") {
                        include "tambah_jenis.php";
                    }



                }
                else 
                {
                    include "dashboard.php";
                }
                
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
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
