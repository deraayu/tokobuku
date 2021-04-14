-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 08:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_buku`
--

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 1, 'buku', 0, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `limits`
--

CREATE TABLE `limits` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `count` int(10) NOT NULL,
  `hour_started` int(11) NOT NULL,
  `api_key` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `limits`
--

INSERT INTO `limits` (`id`, `uri`, `count`, `hour_started`, `api_key`) VALUES
(1, 'uri:api/buku_server/index:get', 4, 1595910072, 'buku');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `kd_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(250) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `pengarang` varchar(150) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `tahun` year(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(7) NOT NULL,
  `stok` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`kd_buku`, `judul_buku`, `kategori`, `pengarang`, `penerbit`, `tahun`, `isbn`, `gambar`, `harga`, `stok`) VALUES
('BK2007261', 'Anak Semua bangsa', 'novel', 'Pramoedya Ananta Toer', 'Hasta Mitra', 2002, '9789798659133 ', '14.jpg', 80088, 19),
('BK20072610', 'Sejarah islam yang Hilang', 'sejarah', 'Firas Alkhateeb', 'Bentang Pustaka', 2018, '9786022911296', '1.jpg', 48000, 6),
('BK2007262', 'Elena', 'novel', 'Ellya Ningsih', 'Kata Depan', 2019, '9786025713651 ', 'elena1.jpg', 51000, 2),
('BK2007263', 'My Stupid Boss', 'novel', 'yuyunardi', 'Gradien Mediatama', 2017, '9786022081609 ', '', 66000, 25),
('BK2007264', 'Pintar matematika tanpa bimbel', 'matematika', 'Loti Lansaroni, S.Si', 'Bentang B First', 2015, '9786021246368', 'pmtb2.jpg', 35000, 11),
('BK2007265', 'matematika teknik', 'matematika', 'Dra. Kumala Indriati, M. Si', 'Penerbit Unika Atma Jaya Jakarta', 2019, '9786025526664', 'matematika_teknik2.jpg', 90000, 12),
('BK2007266', 'Mengenal Matematika Diskrit', 'matematika', 'Rahayu Sri Waskitoningtyas', 'Nusa Litera Inspirasi', 2019, '9786237276487', 'mengenal_matematika_diskrit.jpg', 110000, 20),
('BK2007267', 'Koleksi Program Web PHP', 'teknologi_informasi', 'Yuniar Supardi & Irwan Kurniawan, S.Kom.', 'Elex Media Komputindo', 2020, '9786230014994', 'kpw3.jpg', 86000, 45),
('BK2007268', 'Pengolahan Citra Digital', 'teknologi_informasi', 'Rosa Andrie Asmara, ST., MT., Dr. Eng', 'PT Percetakan dan penerbitan polinema', 2018, '9786026695901', 'pengolahan_citra_digital4.jpg', 65000, 40),
('BK2007269', 'VB.Net Untuk Skripsi', 'teknologi_informasi', 'Ali Zaki,Edy Winarno ST, M.', 'Elex Media Komputindo', 2016, '9786020265674', 'VB_Net2.jpg', 57000, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'reza', 'cinangneng', '2020-07-27 12:45:11', '2020-07-28 12:45:11'),
(2, 'reza', 'cinangneng', '2020-07-27 12:45:51', '2020-07-28 12:45:51'),
(3, 'reza', 'cinangneng', '2020-07-27 12:47:04', '2020-07-28 12:47:04'),
(4, 'indra', 'Tapos kec. Tenjolaya', '2020-07-27 12:48:32', '2020-07-28 12:48:32'),
(5, '', '', '2020-07-27 23:37:10', '2020-07-28 23:37:10'),
(6, 'Rosi R Ramadan', 'Banten', '2020-07-28 13:21:02', '2020-07-29 13:21:02'),
(7, '', '', '2020-07-28 13:43:42', '2020-07-29 13:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `kd_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesanan`
--

INSERT INTO `tbl_pesanan` (`id`, `id_invoice`, `kd_buku`, `judul_buku`, `jumlah`, `harga`) VALUES
(1, 0, 'BK2007261', 'Anak Semua bangsa', 1, 80088),
(2, 4, 'BK20072610', 'Sejarah islam yang Hilang', 1, 48000),
(3, 4, 'BK2007262', 'Elena', 1, 51000),
(4, 5, 'BK2007261', 'Anak Semua bangsa', 1, 80088),
(5, 6, 'BK2007264', 'Pintar matematika tanpa bimbel', 1, 35000),
(6, 7, 'BK20072610', 'Sejarah islam yang Hilang', 1, 48000);

--
-- Triggers `tbl_pesanan`
--
DELIMITER $$
CREATE TRIGGER `penjualan` AFTER INSERT ON `tbl_pesanan` FOR EACH ROW BEGIN
update tbl_buku SET stok = stok - NEW.jumlah WHERE kd_buku = NEW.kd_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id_request` varchar(20) NOT NULL,
  `id_user` int(4) NOT NULL,
  `kd_buku` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(11) NOT NULL,
  `id_request` varchar(20) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kd_buku` varchar(20) NOT NULL,
  `jumlah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `id_request`, `id_user`, `kd_buku`, `jumlah`) VALUES
(1, 'RQ2007281', 5, 'BK20072610', 5);

--
-- Triggers `tbl_transaksi`
--
DELIMITER $$
CREATE TRIGGER `request` AFTER INSERT ON `tbl_transaksi` FOR EACH ROW BEGIN
update tbl_buku SET stok = stok - NEW.jumlah WHERE kd_buku = NEW.kd_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(1) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Dhera Ayu', 'deraa2777@gmail.com', 'default.jpg', '$2y$10$61M0rCWtVtoupZjLSNCGHO6bZpy3wn41G/2prbpkHLpgiRWo3RZGa', 1, 1, 1595753169),
(8, 'Dr Ruyatul', 'Dr.Ruyatul@gmail.com', 'default.jpg', '$2y$10$TBerbCNVoN7nrCvp2LsGb.J4qLVMEVt3FK9IPkGiJNqjo5mHKkgAK', 2, 1, 1595918171),
(9, 'hadi', 'hadybramantyo@gmail.com', 'default.jpg', '$2y$10$3uaFNFqoik4CZ5odNKNWkuTy.BfXK1jeIHhXMbgrLB8jN98MY7May', 2, 1, 1595918382);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(1) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(1) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `limits`
--
ALTER TABLE `limits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id_request`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `kd_buku` (`kd_buku`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kd_buku` (`kd_buku`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `limits`
--
ALTER TABLE `limits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD CONSTRAINT `tbl_request_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_request_ibfk_2` FOREIGN KEY (`kd_buku`) REFERENCES `tbl_buku` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`kd_buku`) REFERENCES `tbl_buku` (`kd_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
