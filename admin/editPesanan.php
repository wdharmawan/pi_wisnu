<?php
// session_start();
include "function.php";

$id_pesanan = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT dp.*, l.nama_paket AS nama_paket, dj.jenis_sepatu AS jenis_sepatu 
                                 FROM data_pesanan dp 
                                 JOIN layanan l ON dp.id_paket = l.id_paket 
                                 JOIN data_jenis dj ON dp.id_jenis = dj.id_jenis 
                                 WHERE dp.id_pesanan='$id_pesanan'");
$data = mysqli_fetch_array($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_pesanan = $_POST['id_pesanan'];
    $nama_pem = $_POST['nama_pem'];
    $alamat_pem = $_POST['alamat_pem'];
    $id_paket = $_POST['id_paket'];
    $id_jenis = $_POST['id_jenis'];
    $tanggal_pesan = $_POST['tanggal_pesan'];
    $status_pes = $_POST['status_pes'];
    $status_transaksi = $_POST['status_transaksi'];

    // Query SQL untuk memperbarui data
    $query = "UPDATE data_pesanan SET nama_pem = ?, alamat_pem = ?, id_paket = ?, id_jenis = ?, tanggal_pesan = ?, status_pes = ?, status_transaksi = ? WHERE id_pesanan = ?";

    // Persiapan statement
    if ($stmt = $koneksi->prepare($query)) {
        // Bind parameter ke statement
        $stmt->bind_param("ssssssss", $nama_pem, $alamat_pem, $id_paket, $id_jenis, $tanggal_pesan, $status_pes, $status_transaksi, $id_pesanan);

        // Eksekusi statement
        if ($stmt->execute()) {
            echo '<script>alert("Data berhasil diperbarui"); location.href="index.php?halaman=pesanan&id=";</script>';
        } else {
            echo '<script>alert("Error saat memperbarui data: ' . $stmt->error . '"); location.href="editPesanan.php?id=' . $id_pesanan . '";</script>';
        }

        // Tutup statement
        $stmt->close();
    } else {
        // Tangani kesalahan dari prepare
        echo '<script>alert("Error preparing statement: ' . $koneksi->error . '"); location.href="editPesanan.php?id=' . $id_pesanan . '";</script>';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Pesanan</title>
</head>

<body>
    <h2>Edit Pesanan</h2>
    <form action="editPesanan.php?id=<?php echo $id_pesanan; ?>" method="POST">
        <div class="form-group">
            <input type="hidden" name="id_pesanan" value="<?php echo $data['id_pesanan']; ?>">
            <label>Nama Pemesan:</label>
            <input type="text" class="form-control" name="nama_pem" value="<?php echo $data['nama_pem']; ?>"><br>
            <label>Alamat Pemesan:</label>
            <input type="text" class="form-control" name="alamat_pem" value="<?php echo $data['alamat_pem']; ?>"><br>
            <label>Nama Paket:</label>
            <!-- <input type="text" class="form-control" name="nama_paket" value="<?php echo $data['nama_paket']; ?>" readonly><br> -->
            <select name="id_paket" class="form-control">
                <?php
                $paketQuery = mysqli_query($koneksi, "SELECT * FROM layanan");
                while ($paket = mysqli_fetch_array($paketQuery)) {
                    echo '<option value="' . $paket['id_paket'] . '"' . ($data['id_paket'] == $paket['id_paket'] ? ' selected' : '') . '>' . $paket['nama_paket'] . '</option>';
                }
                ?>
            </select><br>
            <label>Jenis Sepatu:</label>
            <select name="id_jenis" class="form-control">
                <?php
                $jenisQuery = mysqli_query($koneksi, "SELECT * FROM data_jenis");
                while ($jenis = mysqli_fetch_array($jenisQuery)) {
                    echo '<option value="' . $jenis['id_jenis'] . '"' . ($data['id_jenis'] == $jenis['id_jenis'] ? ' selected' : '') . '>' . $jenis['jenis_sepatu'] . '</option>';
                }
                ?>
            </select><br>
            <label>Tanggal Pesan:</label>
            <input type="date" class="form-control" name="tanggal_pesan" value="<?php echo $data['tanggal_pesan']; ?>"><br>
            <label>Status Pesanan:</label>
            <select name="status_pes" class="form-control">
                <option value="diproses" <?php if ($data['status_pes'] == 'diproses') echo 'selected'; ?>>Diproses</option>
                <option value="dijemput" <?php if ($data['status_pes'] == 'dijemput') echo 'selected'; ?>>Dijemput</option>
                <option value="selesai" <?php if ($data['status_pes'] == 'selesai') echo 'selected'; ?>>Selesai</option>
            </select><br>
            <label>Status Transaksi:</label>
            <select name="status_transaksi" class="form-control">
                <option value="Lunas" <?php if ($data['status_transaksi'] == 'Lunas') echo 'selected'; ?>>Lunas</option>
                <option value="Belum Bayar" <?php if ($data['status_transaksi'] == 'belumbayar') echo 'selected'; ?>>Belum Bayar</option>
                <option value="Kurang" <?php if ($data['status_transaksi'] == 'kurang') echo 'selected'; ?>>Nominal Tidak Sesuai(Kurang)</option>
            </select><br>
            <button class="btn btn-warning" type="submit">Update</button>
        </div>
    </form>
</body>

</html>