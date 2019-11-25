-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 05:44 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri2`
--

CREATE TABLE `galeri2` (
  `id_gambar` int(100) NOT NULL,
  `kategori` int(11) NOT NULL,
  `file_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri2`
--

INSERT INTO `galeri2` (`id_gambar`, `kategori`, `file_gambar`) VALUES
(11, 1, 'gal1.png'),
(12, 3, '4.jpg'),
(13, 3, '2.jpg'),
(14, 1, 'gal2.png'),
(15, 1, 'gal3.png'),
(16, 2, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(45) DEFAULT NULL,
  `harga` longtext,
  `dekorasi` varchar(255) DEFAULT NULL,
  `rias_baju` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  `mc` varchar(45) DEFAULT NULL,
  `free` varchar(255) DEFAULT NULL,
  `biaya_pelihara` longtext NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`, `dekorasi`, `rias_baju`, `dokumentasi`, `mc`, `free`, `biaya_pelihara`, `foto`) VALUES
(18, 'Tulip', '17000000', 'Pelaminan, Taman, Lorong, Kamar Pengantin', 'Pengantin, Besan, Among Tamu, Kembar Mayang', 'Foto, Video', 'Resepsi, Akad', 'SPA, Facial', '5000', 'gal5.png');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(255) NOT NULL,
  `catatan` varchar(255) DEFAULT NULL,
  `id_paket` int(11) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Waiting',
  `lokasi` varchar(255) NOT NULL,
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `type` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `type`, `username`, `password`, `nama`, `alamat`, `no_telp`, `email`) VALUES
(3, 'admin', 'admin', 'admin', 'admin', NULL, NULL, NULL),
(6, 'customer', 'user', 'user', 'User', 'Malang', '085123456789', 'user@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri2`
--
ALTER TABLE `galeri2`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`,`id_paket`,`user_id`),
  ADD KEY `fk_pemesanan_paket1_idx` (`id_paket`),
  ADD KEY `fk_pemesanan_user1_idx` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri2`
--
ALTER TABLE `galeri2`
  MODIFY `id_gambar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `fk_pemesanan_paket1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pemesanan_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
