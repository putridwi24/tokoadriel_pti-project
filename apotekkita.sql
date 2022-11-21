-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 06:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotekkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_num` int(11) NOT NULL,
  `month_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_num`, `month_name`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `stok` int(11) NOT NULL,
  `kedaluwarsa` date NOT NULL,
  `h_jual` int(11) NOT NULL,
  `h_beli` int(11) NOT NULL,
  `nama_supplier` varchar(128) NOT NULL,
  `nama_kat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_barang`, `stok`, `kedaluwarsa`, `h_jual`, `h_beli`, `nama_supplier`, `nama_kat`) VALUES
(63, 'Aqua', 10, '2022-11-30', 5000, 4000, 'Bina San Prima', 'Makanan'),
(75, 'Coca Cola', 3, '2022-11-29', 9000, 8999, 'S', 'Minuman'),
(76, 'Sprite', 3, '2022-11-30', 10000, 9000, 'S', 'Minuman'),
(77, 'Fanta', 9, '2023-12-20', 6000, 5500, 'Sari Roti', 'Minuman'),
(78, 'Pepsi', 28, '0000-00-00', 7000, 8000, 'Bina San Prima', 'Minuman'),
(80, 'Pepsi', 6, '0000-00-00', 7000, 8000, 'Bina San Prima', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(128) NOT NULL,
  `desk_kat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kat`, `nama_kat`, `desk_kat`) VALUES
(45, 'Minuman', 'Air mineral botol'),
(52, 'Makanan', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(128) NOT NULL,
  `penyimpanan` varchar(128) NOT NULL,
  `stok` int(11) NOT NULL,
  `kedaluwarsa` date NOT NULL,
  `h_jual` int(11) NOT NULL,
  `h_beli` int(11) NOT NULL,
  `nama_pemasok` varchar(128) NOT NULL,
  `nama_kat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id`, `nama_obat`, `penyimpanan`, `stok`, `kedaluwarsa`, `h_jual`, `h_beli`, `nama_pemasok`, `nama_kat`) VALUES
(63, 'Amoxicilin', 'Etalase 1', 50, '2022-06-16', 13320, 10000, 'Antarmitra Sembada', 'Antibiotik'),
(64, 'Cefadroxil', 'Etalase  1', 20, '2022-05-30', 17316, 13000, 'Antarmitra Sembada', ' Antibiotik'),
(65, 'Paracetamol', 'Etalase 2', 20, '2022-05-23', 3500, 3000, 'Bina San Prima', ' Demam'),
(66, 'Ambroxol', 'Etalase 2', 31, '2022-06-12', 3000, 2500, 'Belibis', ' Obat Batuk'),
(67, 'OBH', 'Etalase 2', 14, '2023-05-16', 13000, 10000, 'Belibis', 'Obat Batuk'),
(68, 'Ibuprofin', 'Etalase 3', 20, '2022-06-11', 4000, 3500, 'Bina San Prima', 'Demam'),
(69, 'OBP', 'Etalase 2', 25, '2022-05-28', 14000, 11000, 'Belibis', 'Obat Batuk'),
(70, 'Candesartan (8mg)', 'Etalase 4', 10, '2022-05-31', 25000, 22000, 'Mensa Binasukses', 'Darah Tinggi'),
(71, 'Amlodipin', 'Etalase 4', 15, '2022-05-28', 23000, 20000, 'Mensa Binasukses', 'Darah Tinggi'),
(72, 'Bisoprolol', 'Etalase 4', 15, '2022-05-22', 18000, 15000, 'Mensa Binasukses', ' Darah Tinggi'),
(73, 'Ciprofroksasin', 'Etalase 1', 25, '2022-05-24', 18000, 15000, 'Antarmitra Sembada', 'Antibiotik'),
(74, 'OBH', 'Etalase 1', 10, '2022-05-17', 13320, 10000, 'Antarmitra Sembada', 'Obat Batuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemasok`
--

CREATE TABLE `tb_pemasok` (
  `id_pemasok` int(11) NOT NULL,
  `nama_pemasok` varchar(128) NOT NULL,
  `alamat_pemasok` varchar(128) NOT NULL,
  `telepon_pemasok` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pemasok`
--

INSERT INTO `tb_pemasok` (`id_pemasok`, `nama_pemasok`, `alamat_pemasok`, `telepon_pemasok`) VALUES
(27, 'Mensa Binasukses', 'Kedamaian, Tanjungkarang Timur, Bandar Lampung', 721253690),
(28, 'Belibis', 'JALAN UDANG I NO 29, Garuntang, Kec. Bumi Waras, Kota Bandar Lampung, Lampung 35227', 721472153),
(29, 'Bina San Prima', 'JL P. Tembesu No.16 A, Campang Raya, Kec. Tanjungkarang Timur, Kota Bandar Lampung, Lampung 35122', 721788664),
(30, 'Sapta Sari Tama', 'Jl. Arif Rahman Hakim Blok B No.20, Way Halim Permai, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133', 721706896),
(31, 'Antarmitra Sembada', 'Jl. Cut Nyak Dien No.76, Palapa, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 721263087);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_beli` int(11) NOT NULL,
  `ref` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `h_beli` int(11) NOT NULL,
  `h_jual` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `nama_supplier` varchar(128) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(11) NOT NULL,
  `kedaluwarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_beli`, `ref`, `nama_barang`, `h_beli`, `h_jual`, `banyak`, `subtotal`, `nama_supplier`, `tgl_beli`, `grandtotal`, `kedaluwarsa`) VALUES
(30, 'bjUdFPnxQ7', 'Pepsi', 8000, 9000, 9, 72000, 'Bina San Prima', '2022-11-08', 72000, '2022-11-30'),
(31, 'BoQhlLLZGZ', 'Aqua', 4000, 5000, 1, 4000, 'Bina San Prima', '2022-11-13', 12000, '2022-11-30'),
(32, 'BoQhlLLZGZ', 'Pepsi', 8000, 7000, 1, 8000, 'Bina San Prima', '2022-11-13', 12000, '0000-00-00'),
(33, 'obvrZ8uEWG', 'Fanta', 5500, 6000, 1, 5500, 'Sari Roti', '2023-06-19', 5500, '2023-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_jual` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `ref` varchar(128) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `h_beli` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `nama_pembeli` varchar(128) NOT NULL,
  `tgl_beli` date NOT NULL,
  `grandtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_jual`, `id_barang`, `ref`, `nama_barang`, `h_beli`, `banyak`, `subtotal`, `nama_pembeli`, `tgl_beli`, `grandtotal`) VALUES
(86, 80, 'glIRtHUgFL', 'Pepsi', 8000, 4, 32000, 'samsul', '2022-11-20', 32000),
(87, 75, 'n0UfansUKd', 'Coca Cola', 8999, 6, 53994, 'Denis', '2022-10-05', 162994),
(88, 76, 'n0UfansUKd', 'Sprite', 9000, 5, 45000, 'Denis', '2022-10-05', 162994),
(89, 80, 'n0UfansUKd', 'Pepsi', 8000, 8, 64000, 'Denis', '2022-10-05', 162994);

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(128) NOT NULL,
  `alamat_supplier` varchar(128) NOT NULL,
  `telepon_supplier` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telepon_supplier`) VALUES
(27, 'Mensa Binasukses', 'Kedamaian, Tanjung karang Timur, Bandar Lampung', 721253690),
(28, 'Belibis', 'JALAN UDANG I NO 29, Garuntang, Kec. Bumi Waras, Kota Bandar Lampung, Lampung 35227', 721472153),
(29, 'Bina San Prima', 'JL P. Tembesu No.16 A, Campang Raya, Kec. Tanjungkarang Timur, Kota Bandar Lampung, Lampung 35122', 721788664),
(30, 'Sapta Sari Tama', 'Jl. Arif Rahman Hakim Blok B No.20, Way Halim Permai, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133', 721706896),
(31, 'Antarmitra Sembada', 'Jl. Cut Nyak Dien No.76, Palapa, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 721263087),
(33, 'Sari Roti', 'Jl. Nusa Indah', 2147483647),
(34, 'a', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'Candra Wahyu F', 'candra@gmail.com', 'default.png', '$2y$10$3uGOaFUpOQO4UWpt9f24.OO2UUP1Ab/FZIVvnP5A9ltG/FBaERwqG', 1, 1, 1649111986),
(4, 'admin', 'admin@gmail.com', 'default.png', '$2y$10$Roy4l/1.yx7GgGZcCL76lefSC2VtJ5T3tu2SaRRc7F56FPTrxg5FG', 1, 1, 1649148911),
(7, 'Nesa Oktavia', 'nesaoktavia10@gmail.com', 'default.png', '$2y$10$TFcqzB0iGJE0uD9200sjiOdKpch2dZ70eSWCfP5U8RqBKZwnrY95C', 1, 1, 1668852314),
(8, 'Nesa Oktavia', 'nesaoktavia20@gmail.com', 'default.png', '$2y$10$0wLlUrr0vKxJ2C/FQjAJ4eXCgvq36hSCnPV3iCPTwbwlv1BD9vpJi', 1, 1, 1668864395);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_num`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kat` (`nama_kat`),
  ADD KEY `nama_kat` (`nama_kat`),
  ADD KEY `nama_obat` (`nama_barang`),
  ADD KEY `nama_supplier` (`nama_supplier`) USING BTREE;

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kat`),
  ADD UNIQUE KEY `nama_kat` (`nama_kat`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kat` (`nama_kat`),
  ADD KEY `nama_kat` (`nama_kat`),
  ADD KEY `nama_pemasok` (`nama_pemasok`),
  ADD KEY `nama_obat` (`nama_obat`);

--
-- Indexes for table `tb_pemasok`
--
ALTER TABLE `tb_pemasok`
  ADD PRIMARY KEY (`id_pemasok`),
  ADD KEY `nama_pemasok` (`nama_pemasok`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `nama_supplier` (`nama_supplier`) USING BTREE,
  ADD KEY `nama_barang` (`nama_barang`) USING BTREE;

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `nama_obat` (`nama_barang`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`),
  ADD KEY `nama_supplier` (`nama_supplier`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tb_pemasok`
--
ALTER TABLE `tb_pemasok`
  MODIFY `id_pemasok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
