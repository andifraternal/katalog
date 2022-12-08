-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 09:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `kode_barang_sistem` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `ukuran` varchar(200) NOT NULL,
  `bahan` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `id_kategori`, `kode_barang_sistem`, `nama_barang`, `deskripsi`, `gambar`, `ukuran`, `bahan`, `harga`, `created_at`, `updated_at`) VALUES
('638ef2f4cb4d8', '638ed3dd25135', 'wkwkwk', 'nama barang 2', 'deskripsi barang 2', '9a1f8e3b544ded4b634935db7616447c.PNG', 'ukuran 2', 'bahan 2', 6000, '2022-12-06 14:44:52', '2022-12-06 14:44:52'),
('638f00b835398', '638f009a3fd25', 'kjlkll', 'oooo', 'oooo', 'f33ccf36c70e018a0bc7fbb73d740c32.jpg', 'iii', 'pooo', 30000, '2022-12-06 15:43:36', '2022-12-06 15:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `aktif` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kategori`
--

INSERT INTO `master_kategori` (`id_kategori`, `nama_kategori`, `aktif`, `created_at`, `updated_at`) VALUES
('638ed3dd25135', 'hahaha', 'Y', '2022-12-06 12:32:13', '2022-12-06 12:32:13'),
('638ed3e44a6b8', 'gemblunggg', 'Y', '2022-12-06 12:32:20', '2022-12-06 12:32:20'),
('638f009a3fd25', 'pppppp', 'Y', '2022-12-06 15:43:06', '2022-12-06 15:43:06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
