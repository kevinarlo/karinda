-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 12:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbn_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `alamat`, `email`, `telepon`, `username`, `password`) VALUES
(1, 'anggoro tri putranto', 'Taman Galaxy Indah, Jl.Pulo Sirih Timur 4Blok CB/28', 'putrantotrianggoro@gmail.com', '081584818373', 'anggoro', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blogger`
--

CREATE TABLE `blogger` (
  `id` int(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogger`
--

INSERT INTO `blogger` (`id`, `gambar`, `judul`, `tanggal`, `isi`) VALUES
(1, 'blog1.jpg', 'Testing Blog', '13 Juli 2020', 'Test Blog\r\nblablablaaaaaaaaaaaaaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi`
--

CREATE TABLE `deskripsi` (
  `id` int(50) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `LT` varchar(100) NOT NULL,
  `LB` varchar(100) NOT NULL,
  `Lantai` varchar(100) NOT NULL,
  `Kamar` varchar(100) NOT NULL,
  `id_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi`
--

INSERT INTO `deskripsi` (`id`, `Type`, `LT`, `LB`, `Lantai`, `Kamar`, `id_kategori`) VALUES
(1, '30/60', '30m2', '60m2', '1 Lantai', '2 KT + 1 KM\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `estimasi_angsuran`
--

CREATE TABLE `estimasi_angsuran` (
  `id` int(100) NOT NULL,
  `10th` varchar(100) NOT NULL,
  `15th` varchar(100) NOT NULL,
  `20th` varchar(100) NOT NULL,
  `suku_bunga` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimasi_angsuran`
--

INSERT INTO `estimasi_angsuran` (`id`, `10th`, `15th`, `20th`, `suku_bunga`, `keterangan`, `id_kategori`) VALUES
(1, '1.511.400', '1.126.880', '940.500', '5%', 'flat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id_pesan` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_telepon` bigint(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_temporary`
--

CREATE TABLE `order_temporary` (
  `id_produk` int(100) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `kamar_tidur` int(100) NOT NULL,
  `kamar_mandi` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `unit_ready` int(100) NOT NULL,
  `unit_sold` int(100) NOT NULL,
  `id_kelompok` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `deskripsi` varchar(800) NOT NULL,
  `rincian_biaya` varchar(800) NOT NULL,
  `estimasi_angsuran` varchar(800) NOT NULL,
  `harga_jual_sudah` text NOT NULL,
  `harga_jual_belum` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(7) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `kamar_tidur` int(10) NOT NULL,
  `kamar_mandi` int(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `unit_ready` int(100) NOT NULL,
  `unit_sold` int(100) NOT NULL,
  `id_kelompok` varchar(20) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `tipe`, `harga`, `kamar_tidur`, `kamar_mandi`, `alamat`, `gambar`, `unit_ready`, `unit_sold`, `id_kelompok`, `id_kategori`) VALUES
('PR001', 'Bumi Sukasari Indah', '30/60', '150.000.000', 2, 1, 'Jl. Sukasari, Kec. Purwasari, Kabupaten Karawang, Jawa Barat 41373', 'KBN1.jpg', 345, 890, 'Ready', 1),
('PR002', 'Perum Permana Adimix', '30/60', '150.000.000', 2, 1, 'Jl. Permana Adimix, Desa Kalangsari, Kec. Rengasdengklok, Kab. Karawang', 'Adimix1.jpg', 500, 800, 'Ready', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rincian_biaya`
--

CREATE TABLE `rincian_biaya` (
  `id` int(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `booking_fee` varchar(100) NOT NULL,
  `uang_muka` varchar(100) NOT NULL,
  `flapod_kpr` varchar(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rincian_biaya`
--

INSERT INTO `rincian_biaya` (`id`, `harga_jual`, `booking_fee`, `uang_muka`, `flapod_kpr`, `id_kategori`) VALUES
(1, '150.000.000', '1.000.000', '0', '142.500.000', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogger`
--
ALTER TABLE `blogger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deskripsi`
--
ALTER TABLE `deskripsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimasi_angsuran`
--
ALTER TABLE `estimasi_angsuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `rincian_biaya`
--
ALTER TABLE `rincian_biaya`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogger`
--
ALTER TABLE `blogger`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deskripsi`
--
ALTER TABLE `deskripsi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estimasi_angsuran`
--
ALTER TABLE `estimasi_angsuran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id_pesan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rincian_biaya`
--
ALTER TABLE `rincian_biaya`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
