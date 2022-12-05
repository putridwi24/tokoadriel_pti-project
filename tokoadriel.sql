-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 12:13 PM
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
-- Database: `tokoadriel`
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
(91, 'Aqua', 10, '2022-12-28', 9000, 8000, 'Antarmitra Sembada', 'Minuman'),
(92, 'Indomie Kari Ayam', 9, '2022-12-13', 3000, 2000, 'Belibis', 'Makanan Instan'),
(43234, 'Aqua', 5, '2023-01-01', 6000, 5500, 'Mensa Binasukses', 'Minuman');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang1`
--

CREATE TABLE `tb_barang1` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `nama_kat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang1`
--

INSERT INTO `tb_barang1` (`id`, `nama_barang`, `nama_kat`) VALUES
(1, 'Coca Cola', 'Minuman'),
(2, 'Aqua', 'Minuman'),
(3, 'Indomie Kari Ayam', 'Makanan Instan'),
(4, 'Pepsi', 'Minuman Kaleng'),
(5, 'Pepsi', 'Minuman Kaleng');

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
(45, 'Minuman Kaleng', 'Minuman dalam kaleng'),
(52, 'Makanan Instan', 'Makanan yang praktis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_beli` int(11) NOT NULL,
  `id` int(20) NOT NULL,
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

INSERT INTO `tb_pembelian` (`id_beli`, `id`, `ref`, `nama_barang`, `h_beli`, `h_jual`, `banyak`, `subtotal`, `nama_supplier`, `tgl_beli`, `grandtotal`, `kedaluwarsa`) VALUES
(44, 0, 'zU8yMYi2RP', 'Aqua', 8000, 9000, 15, 120000, 'Antarmitra Sembada', '2022-11-28', 120000, '2022-12-28'),
(45, 0, 'yZuQNZZLQu', 'Indomie Kari Ayam', 2000, 3000, 20, 40000, 'Belibis', '2022-10-28', 40000, '2022-12-13'),
(46, 0, 'VfQPkMrAVx', 'Coca Cola', 5000, 6000, 15, 75000, 'Mensa Binasukses', '2022-11-15', 75000, '2022-12-25'),
(47, 1234567, 'de7M5kHLIJ', 'Aqua', 5500, 6000, 2, 11000, 'Bina San Prima', '2022-12-04', 11000, '2023-01-01'),
(48, 43234, 'dWUp8B95F8', 'Aqua', 5500, 6000, 5, 27500, 'Mensa Binasukses', '2022-12-05', 27500, '2023-01-01');

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
(93, 91, 'xiBhAQ8SvN', 'Aqua', 8000, 5, 40000, 'samsul', '2022-11-28', 40000),
(94, 92, 'BkeNbF7YuX', 'Indomie Kari Ayam', 2000, 11, 22000, 'jeje', '2022-10-31', 22000),
(95, 93, 'QYGKJDh9tg', 'Coca Cola', 5000, 15, 75000, 'Denis', '2022-11-28', 75000),
(96, 1234567, 'jQSog2mlvc', 'Aqua', 5500, 2, 11000, 'samsul', '2022-12-04', 11000);

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
(31, 'Antarmitra Sembada', 'Jl. Cut Nyak Dien No.76, Palapa, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119', 721263087);

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
-- Indexes for table `tb_barang1`
--
ALTER TABLE `tb_barang1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kat` (`nama_kat`),
  ADD KEY `nama_kat` (`nama_kat`),
  ADD KEY `nama_obat` (`nama_barang`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kat`),
  ADD UNIQUE KEY `nama_kat` (`nama_kat`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang1`
--
ALTER TABLE `tb_barang1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
