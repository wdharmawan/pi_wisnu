-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8111
-- Generation Time: Jul 18, 2024 at 11:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(20) NOT NULL,
  `nohp_admin` varchar(20) NOT NULL,
  `alamat_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `nama_admin`, `username_admin`, `email_admin`, `pass_admin`, `nohp_admin`, `alamat_admin`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '08976678786', 'Depok'),
(3, 'Wisnu Dharmawan', 'wisnu', 'mawonwisnu@gmail.com', '12345', '214515166156', 'bogor'),
(7, 'yudistira', 'yudis', 'wisnudharmawan844@gmail.com', '8910', '090876565', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis`
--

CREATE TABLE `data_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis_sepatu` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jenis`
--

INSERT INTO `data_jenis` (`id_jenis`, `jenis_sepatu`) VALUES
(2, 'Sepatu Kets'),
(6, 'Sepatu Flatshoes'),
(7, 'Sepatu Gunung');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id_pel` int(11) NOT NULL,
  `nama_pel` varchar(100) NOT NULL,
  `username_pel` varchar(50) NOT NULL,
  `email_pel` varchar(50) NOT NULL,
  `pass_pel` varchar(20) NOT NULL,
  `nohp_pel` varchar(20) NOT NULL,
  `alamat_pel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id_pel`, `nama_pel`, `username_pel`, `email_pel`, `pass_pel`, `nohp_pel`, `alamat_pel`) VALUES
(1, 'wisnu dharmawan', 'wisnu', 'wisnu@gmail.com', '12345', '0874824', 'depok'),
(2, 'tirto aji', 'tirto', 'aji@gmail.com', '23456', '0876543', 'citayem'),
(3, 'dharmawan', 'dharma', 'dharma@gmail.com', '020103', '089855645', 'jl. Walet, Kec. Tapos, Cilangkap, No. 89'),
(11, 'Defrizal', 'rizal', 'mawonwisnu@gmail.com', '12345', '214515166156', 'Nanggewer');

-- --------------------------------------------------------

--
-- Table structure for table `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pem` varchar(100) NOT NULL,
  `alamat_pem` text NOT NULL,
  `nohp_pem` varchar(20) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `status_pes` varchar(128) NOT NULL,
  `status_transaksi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pesanan`
--

INSERT INTO `data_pesanan` (`id_pesanan`, `nama_pem`, `alamat_pem`, `nohp_pem`, `id_paket`, `id_jenis`, `tanggal_pesan`, `status_pes`, `status_transaksi`) VALUES
(5, 'aji', 'citayem', '90789676', 7, 2, '2024-04-03', 'selesai', 'Lunas'),
(71, 'tirto aji', 'citayem', '0876543', 7, 2, '2024-07-01', 'dijemput', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `data_riview`
--

CREATE TABLE `data_riview` (
  `id_riview` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `riview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_riview`
--

INSERT INTO `data_riview` (`id_riview`, `nama`, `riview`) VALUES
(1, 'aji', 'Baguss'),
(2, 'Wisnu Dharmawan', 'jbksfhweiflohwgihw'),
(3, 'widya teta wardani', 'wewwtlhwioth3it23pt'),
(4, 'Wisnu Dharmawan', 'rqw3r3r32');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_metode` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `bukti_pem` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`id_transaksi`, `id_pesanan`, `id_paket`, `id_metode`, `total_bayar`, `bukti_pem`) VALUES
(6, 71, 7, 3, 50000, '2.jpg'),
(13, 5, 7, 5, 50000, '2.png'),
(19, 5, 7, 3, 85000, '');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `desk_paket` text NOT NULL,
  `foto_paket` varchar(200) NOT NULL,
  `harga_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_paket`, `nama_paket`, `desk_paket`, `foto_paket`, `harga_paket`) VALUES
(7, 'unyellow', 'menghilangakan kuning pada sepatu', 'wfwf', 85000),
(8, 'fast clean', 'menyuci tanpa treatment khusus', 'ada', 30000),
(15, 'Repaint', 'Membuat warna sepatu yang sudah pudar menjadi seperti semula', '2.png', 180000),
(16, 'Special Treatment', 'Perawatan yang ditunjukan untuk meterial khusus dalam pengerjaanya.', 'premium.jpg', 70000),
(20, 'Deep Cleaning', 'Deep cleaning pada jasa cuci sepatu adalah metode pencucian menyeluruh yang melibatkan semua bagian sepatu, termasuk bagian dalam, tali, dan midsole.', 'deep.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `id_metode` int(11) NOT NULL,
  `metode_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metode_bayar`
--

INSERT INTO `metode_bayar` (`id_metode`, `metode_bayar`) VALUES
(1, 'BRI-1214141'),
(2, 'BNI-23544353'),
(3, 'BCA-543213'),
(5, 'DANA-089908768');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_jenis`
--
ALTER TABLE `data_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `data_pesanan_ibfk_1` (`id_jenis`),
  ADD KEY `data_pesanan_ibfk_3` (`id_paket`);

--
-- Indexes for table `data_riview`
--
ALTER TABLE `data_riview`
  ADD PRIMARY KEY (`id_riview`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `total_bayar` (`total_bayar`),
  ADD KEY `data_transaksi_ibfk_1` (`id_metode`),
  ADD KEY `data_transaksi_ibfk_2` (`id_paket`),
  ADD KEY `data_transaksi_ibfk_3` (`id_pesanan`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_metode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_jenis`
--
ALTER TABLE `data_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id_pel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `data_riview`
--
ALTER TABLE `data_riview`
  MODIFY `id_riview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_metode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pesanan`
--
ALTER TABLE `data_pesanan`
  ADD CONSTRAINT `data_pesanan_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `data_jenis` (`id_jenis`),
  ADD CONSTRAINT `data_pesanan_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `layanan` (`id_paket`);

--
-- Constraints for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD CONSTRAINT `data_transaksi_ibfk_1` FOREIGN KEY (`id_metode`) REFERENCES `metode_bayar` (`id_metode`),
  ADD CONSTRAINT `data_transaksi_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `layanan` (`id_paket`),
  ADD CONSTRAINT `data_transaksi_ibfk_3` FOREIGN KEY (`id_pesanan`) REFERENCES `data_pesanan` (`id_pesanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
