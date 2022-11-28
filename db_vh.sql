-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 05:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vh`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(45) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Device', NULL, NULL),
(2, 'Liquid', NULL, NULL),
(3, 'Accecories', NULL, NULL),
(4, 'Coil', NULL, NULL),
(5, 'Baterai', '2022-11-13 03:13:06', '2022-11-13 03:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) COLLATE utf8_bin NOT NULL,
  `gender` enum('L','P') COLLATE utf8_bin NOT NULL,
  `no_telpon` char(14) COLLATE utf8_bin NOT NULL,
  `alamat` text COLLATE utf8_bin DEFAULT NULL,
  `pembayaran_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_bin NOT NULL,
  `no_telp` varchar(15) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`id`, `name`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'codot vapesstore', '2147483647', 'Sokaraja', NULL, NULL),
(2, 'Funhale Vapesstore', '2147483647', 'Karang Lewas', NULL, NULL),
(3, 'Dr Vapor', '2147483647', 'Dukuwaluh', NULL, NULL),
(4, 'More Vapor', '089988776655', 'Nganjuk', '2022-11-13 04:14:51', '2022-11-13 04:14:51'),
(7, 'ZNTH VapeStore', '088774572235', 'Temanggung City', '2022-11-16 21:38:00', '2022-11-16 21:38:00'),
(8, 'MSIB 3 Vapestore', '081122336655', 'Planet Bekasi', '2022-11-20 02:33:54', '2022-11-20 02:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) COLLATE utf8_bin NOT NULL,
  `jenis_id` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Penjual_id` int(11) NOT NULL,
  `foto` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `jenis_id`, `Stok`, `Harga`, `Penjual_id`, `foto`, `created_at`, `updated_at`) VALUES
(12, 'RDA Alexa Z', 1, 3, 450000, 1, 'foto-RDA Alexa Z.jpg', '2022-11-14 22:45:58', NULL),
(13, 'Happy Krunch v1 Nic3', 2, 3, 125000, 2, 'foto-Happy Krunch v1 Nic3.jpg', '2022-11-14 22:48:29', NULL),
(15, 'r234 Cyber', 1, 3, 550000, 2, 'foto-r234 Cyber.jpg', '2022-11-14 22:50:17', NULL),
(16, 'Driptip 810', 3, 20, 20000, 3, 'foto-Driptip 810.jpg', '2022-11-14 22:54:49', NULL),
(17, 'Sleeve Hc', 3, 2, 100000, 2, 'foto-Sleeve Hc.jpg', '2022-11-14 22:57:02', NULL),
(18, 'THELEMA QUEST PINK SURVIVOR', 1, 10, 550000, 4, 'foto-THELEMA QUEST PINK SURVIVOR.png', '2022-11-16 21:18:16', NULL),
(20, 'Ursa Nano 2', 1, 55, 200000, 7, 'foto-Ursa Nano.png', '2022-11-20 08:35:24', NULL),
(21, 'RakkiPanda 18650 Authentic 3000mAh', 5, 100, 50000, 3, 'foto-RakkiPanda 18650 Authentic 3000mAh.png', '2022-11-20 02:29:21', NULL),
(22, 'SONY VTC 7 BATERAI 18650 BATTERY', 5, 200, 65000, 2, 'foto-SONY VTC 7 BATERAI 18650 BATTERY.png', '2022-11-20 02:31:58', NULL),
(23, 'Sony VTC6 Authentic Battery 18650', 5, 125, 45000, 8, 'foto-Sony VTC6 Authentic Battery 18650.png', '2022-11-20 02:35:03', NULL),
(24, 'BASEN BATTERY 3100MAH 40A 3.7V 18650', 5, 150, 80000, 2, 'foto-BASEN BATTERY 3100MAH 40A 3.7V 18650.png', '2022-11-20 02:37:08', NULL),
(25, 'SJP NITECORE 18650 INR 3.7V', 5, 99, 140000, 1, 'foto-SJP NITECORE 18650 INR 3.7V.png', '2022-11-20 02:42:17', NULL),
(26, 'CENTAURUS Q200', 1, 30, 480000, 4, 'foto-CENTAURUS Q200.png', '2022-11-20 04:06:52', NULL),
(27, 'L200 Legend 2 200W', 1, 45, 458000, 7, 'foto-L200 Legend 2 200W.png', '2022-11-20 04:11:03', NULL),
(28, 'Newton Berry Ice Blend', 2, 50, 110000, 1, 'foto-Newton Berry Ice Blend.png', '2022-11-20 04:18:49', NULL),
(29, 'Liquids 60ml Bubblegum', 2, 45, 11000, 4, 'foto-Liquids 60ml Bubblegum.png', '2022-11-20 04:48:34', NULL),
(30, 'King Reserve Nutty Mocha', 2, 66, 170000, 8, 'foto-King Reserve Nutty Mocha.png', '2022-11-20 04:50:00', NULL),
(31, 'Tokyo Banana Signature', 2, 77, 150000, 2, 'foto-Tokyo Banana Signature.png', '2022-11-20 05:32:14', NULL),
(32, 'ICELANDS SALTNIC SERIES', 2, 75, 120000, 7, 'foto-ICELANDS SALTNIC SERIES.png', '2022-11-20 05:40:25', NULL),
(33, 'Candu V2 Banana Cheesecake', 2, 35, 110000, 7, 'foto-Candu V2 Banana Cheesecake.png', '2022-11-20 05:42:17', NULL),
(34, 'szdenger E-liquid e-juice', 2, 99, 100000, 2, 'foto-szdenger E-liquid e-juice.png', '2022-11-20 05:45:28', NULL),
(35, 'TANG VAPOOR VAPEE PLATO', 3, 100, 12000, 8, 'foto-TANG VAPOOR VAPEE PLATO.png', '2022-11-20 05:47:44', NULL),
(36, 'Teropong Fulset VAPORR JOMO LITE', 3, 88, 138000, 1, 'foto-Teropong Fulset VAPORR JOMO LITE.png', '2022-11-20 06:08:54', NULL),
(37, 'VapeBand Vape Aksesories', 3, 555, 2500, 7, 'foto-VapeBand Vape Aksesories.png', '2022-11-20 06:10:10', NULL),
(38, 'Cotton Bacon Prime', 3, 1000, 2000, 3, 'foto-Cotton Bacon Prime.png', '2022-11-20 06:19:40', NULL),
(39, 'KAPAS HOLY FIBER AUTHENTIC', 3, 1001, 25000, 8, 'foto-KAPAS HOLY FIBER AUTHENTIC.png', '2022-11-20 07:40:19', NULL),
(41, 'V2 COIL BABY ALIEN', 4, 55, 10000, 3, 'foto-V2 COIL BABY ALIEN.png', '2022-11-20 08:10:12', NULL),
(44, 'Fused Clapton Ni90 Ni80', 4, 100, 20000, 2, 'foto-Fused Clapton Ni90 Ni80.png', '2022-11-20 08:15:37', NULL),
(47, 'V1 COIL BABY ALIEN', 4, 50, 11000, 2, 'foto-V1 COIL BABY ALIEN.png', '2022-11-20 08:34:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `keterangan` text COLLATE utf8_bin NOT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`,`transaksi_id`),
  ADD KEY `fk_pembayaran_transaksi1_idx` (`transaksi_id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembeli_pembayaran1_idx` (`pembayaran_id`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `fk_Barang_Penjual1_idx` (`Penjual_id`),
  ADD KEY `fk_barang_jenis1_idx` (`jenis_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_Barang` (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_pembayaran_transaksi1` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `fk_pembeli_pembayaran1` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_Barang_Penjual1` FOREIGN KEY (`Penjual_id`) REFERENCES `penjual` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_barang_jenis1` FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_Barang` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
