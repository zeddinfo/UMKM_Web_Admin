-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 06:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_product`
--

CREATE TABLE `master_product` (
  `id_product` int(11) NOT NULL,
  `umkm_id` int(11) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `url_file` varchar(200) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `bahan` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `motif` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_product`
--

INSERT INTO `master_product` (`id_product`, `umkm_id`, `nama_product`, `file`, `url_file`, `ukuran`, `stok`, `warna`, `model`, `bahan`, `harga`, `motif`, `ket`) VALUES
(1, 1, 'coba', 'Document_20211008014152_20f4790cc2cfd3e7ef0bd85ad94b75c3.png_wh860.png', '/storage/file/Document_20211008014152_20f4790cc2cfd3e7ef0bd85ad94b75c3.png_wh860.png', 'coba', 11, 'coba', 'coba', 'coba', 'coba', 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `master_umkm`
--

CREATE TABLE `master_umkm` (
  `id_umkm` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `url_file` varchar(200) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `jam_operasional` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `laltiude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_umkm`
--

INSERT INTO `master_umkm` (`id_umkm`, `nama`, `file`, `url_file`, `alamat`, `telp`, `pemilik`, `website`, `jam_operasional`, `keterangan`, `longitude`, `laltiude`) VALUES
(1, 'Zebra', 'Belum Ada', '', 'Coba', '1212', 'Coba', 'Coba', '01.00', 'Coba', '-', '-'),
(3, 'coba', 'Document_20211007231608_663f87c29ac49bdab805af206ba6470a.jpg', '/storage/file/Document_20211007231608_663f87c29ac49bdab805af206ba6470a.jpg', 'coba', 'coba', 'coba', 'coba', '01.00 WIB - 02.00 WIB', 'coba', 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_u` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_u`, `username`, `password`, `role_id`, `is_active`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_product`
--
ALTER TABLE `master_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `master_umkm`
--
ALTER TABLE `master_umkm`
  ADD PRIMARY KEY (`id_umkm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_product`
--
ALTER TABLE `master_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_umkm`
--
ALTER TABLE `master_umkm`
  MODIFY `id_umkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
