-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 09:53 AM
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
('638f00b835398', '638f009a3fd25', 'kjlkll', 'oooo', 'oooo', 'f33ccf36c70e018a0bc7fbb73d740c32.jpg', 'iii', 'pooo', 30000, '2022-12-06 15:43:36', '2022-12-06 15:43:36'),
('6392e1c445570', '638ed3dd25135', 'vdsgds', 'bsfdbfds', 'bff', '505e9134c6ebd0320f6d67b2c012e15c.png', 'bdbf', 'fbfsb', 78800, '2022-12-09 14:20:36', '2022-12-09 14:20:36'),
('6392e22b24f58', '638f009a3fd25', 'vfdsbd', 'bfdsbf', 'bfsbf', 'cd47dcfd84ca6f9abb450d3f8ae958bf.jpg', 'vdvds', 'vdvd', 8000, '2022-12-09 14:22:19', '2022-12-09 14:22:19'),
('6392e350b39b4', '638ed3e44a6b8', 'vavdsdddd', 'vdvdddd', 'dvavdavdddd', '7a9223a7ee05e11a23429c7e72966ac4.jpg', 'vdvdadd', 'vadvdd', 60003344, '2022-12-09 14:27:12', '2022-12-09 15:05:39'),
('6392e39420e73', '638ed3e44a6b8', 'vdvd', 'vdavd', 'dvad', '7b3e87d85669b9abd90b4c224ee0867f.jpg', 'vdv', 'vdvd', 7000, '2022-12-09 14:28:20', '2022-12-09 14:28:20'),
('6392e3ed22192', '638f009a3fd25', 'dgsgds', 'gsdgdsg', 'dsgdsg', 'e592f93605d273261c0847129e41ad92.jpg', 'gdsgds', 'gdsgds', 7000, '2022-12-09 14:29:49', '2022-12-09 14:29:49'),
('6392e45322858', '638ed3dd25135', 'vdv', 'dvd', 'vdv', '978b1980525a9e8ab65d895d851c4c79.jpg', 'vd', 'vd', 4000, '2022-12-09 14:31:31', '2022-12-09 14:31:31'),
('6392e48284032', '638f009a3fd25', 'vdv', 'vd', 'vdv', '7cc085b05b8cafc09c94e1911938ae59.jpg', 'vd', 'vd', 5000, '2022-12-09 14:32:18', '2022-12-09 14:32:18'),
('6392e4cd9338a', '638ed3dd25135', 'bf', 'bf', 'bf', '17a7ef151230e7dfc29603ab9c49ed07.jpg', 'bf', 'bf', 66331, '2022-12-09 14:33:33', '2022-12-09 14:33:33'),
('6392e50058d79', '638ed3e44a6b8', 'vd', 'vds', 'vds', '2ecc519279aa4cf9c8fa5ffd68fac46f.jpg', 'vdsv', 'vsd', 900, '2022-12-09 14:34:24', '2022-12-09 14:34:24'),
('6392e51310fc2', '638ed3e44a6b8', 'vd', 'vds', 'vds', 'd52b963cc2042e79a37c54a472517c57.jpg', 'vdsv', 'vsd', 900, '2022-12-09 14:34:43', '2022-12-09 14:34:43'),
('6392e56c1e9f1', '638ed3dd25135', 'gdsg', 'gdsgd', 'sgdsg', '40cb75026dd7f3c3feda2f5e1fe00697.jpg', 'gds', 'gds', 444, '2022-12-09 14:36:12', '2022-12-09 14:36:12'),
('6392e593135c5', '638ed3dd25135', 'gr', 'gdrsg', 'gr', '6771b4ae65736ff499a52fafbd5531e4.jpg', 'gr', 'gr', 999, '2022-12-09 14:36:51', '2022-12-09 14:36:51');

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
('638ed3dd25135', '30 x 30', 'Y', '2022-12-06 12:32:13', '2022-12-06 12:32:13'),
('638ed3e44a6b8', '25 x 25', 'Y', '2022-12-06 12:32:20', '2022-12-06 12:32:20'),
('638f009a3fd25', '60 x 60', 'Y', '2022-12-06 15:43:06', '2022-12-06 15:43:06');

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
