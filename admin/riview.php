
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
                include "function.php";
                $query = mysqli_query($koneksi, "select * from data_riview");
                while ($data = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $data['id_riview']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['riview']; }?></td>
            </tr>
        </tbody>
    
    
    
    </table>
</body>
</html>
