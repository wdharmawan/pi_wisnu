<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>
<body>
    
</body>
</html>
<h2>Data Admin</h2>   
    
    <div class="container-table">

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Id Admin</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                </tr>
            </thead>
        
            <tbody>
                <?php 
                    include "function.php";
                    $query = mysqli_query($koneksi, "select id_admin, username_admin, email_admin, nohp_admin, alamat_admin from data_admin");
                    while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?php echo $data['id_admin']; ?></td>
                    <td><?php echo $data['username_admin']; ?></td>
                    <td><?php echo $data['email_admin']; ?></td>
                    <td><?php echo $data['nohp_admin']; ?></td>
                    <td><?php echo $data['alamat_admin']; }?></td>
                </tr>
            </tbody>
        
        
        
        </table>
    </div>