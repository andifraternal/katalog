-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 09:40 AM
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
  `id_merk` varchar(20) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `bahan` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `id_kategori`, `id_merk`, `nama_barang`, `deskripsi`, `gambar`, `bahan`, `harga`, `created_at`, `updated_at`) VALUES
('638ef2f4cb4d8', '638ed3dd25135', '639425b1e3d90', 'nama barang 2', 'deskripsi barang 2', '9a1f8e3b544ded4b634935db7616447c.PNG', 'bahan 2', 6000, '2022-12-06 14:44:52', '2022-12-06 14:44:52'),
('638f00b835398', '638f009a3fd25', '639425b1e3d90', 'oooo', 'oooo', 'f33ccf36c70e018a0bc7fbb73d740c32.jpg', 'pooo', 30000, '2022-12-06 15:43:36', '2022-12-06 15:43:36'),
('6392e1c445570', '638ed3dd25135', '639425b1e3d90', 'bsfdbfds', 'bff', '505e9134c6ebd0320f6d67b2c012e15c.png', 'fbfsb', 78800, '2022-12-09 14:20:36', '2022-12-09 14:20:36'),
('6392e22b24f58', '638f009a3fd25', '639425b1e3d90', 'bfdsbf', 'bfsbf', 'cd47dcfd84ca6f9abb450d3f8ae958bf.jpg', 'vdvd', 8000, '2022-12-09 14:22:19', '2022-12-09 14:22:19'),
('6392e350b39b4', '638f009a3fd25', '639425c09ecf4', 'qqqq', 'qqqq', '7a9223a7ee05e11a23429c7e72966ac4.jpg', 'qqq', 300, '2022-12-09 14:27:12', '2022-12-10 13:58:52'),
('6392e39420e73', '638ed3e44a6b8', '639425b1e3d90', 'vdavd', 'dvad', '7b3e87d85669b9abd90b4c224ee0867f.jpg', 'vdvd', 7000, '2022-12-09 14:28:20', '2022-12-09 14:28:20'),
('6392e3ed22192', '638f009a3fd25', '639425c09ecf4', 'gsdgdsg', 'dsgdsg', 'e592f93605d273261c0847129e41ad92.jpg', 'gdsgds', 7000, '2022-12-09 14:29:49', '2022-12-09 14:29:49'),
('6392e45322858', '638ed3dd25135', '639425c09ecf4', 'dvd', 'vdv', '978b1980525a9e8ab65d895d851c4c79.jpg', 'vd', 4000, '2022-12-09 14:31:31', '2022-12-09 14:31:31'),
('6392e48284032', '638f009a3fd25', '639425c09ecf4', 'vd', 'vdv', '7cc085b05b8cafc09c94e1911938ae59.jpg', 'vd', 5000, '2022-12-09 14:32:18', '2022-12-09 14:32:18'),
('6392e4cd9338a', '638ed3dd25135', '639425c09ecf4', 'bf', 'bf', '17a7ef151230e7dfc29603ab9c49ed07.jpg', 'bf', 66331, '2022-12-09 14:33:33', '2022-12-09 14:33:33'),
('6392e50058d79', '638ed3e44a6b8', '639425c09ecf4', 'vds', 'vds', '2ecc519279aa4cf9c8fa5ffd68fac46f.jpg', 'vsd', 1000, '2022-12-09 14:34:24', '2022-12-09 14:34:24'),
('6392e51310fc2', '638ed3e44a6b8', '639425c09ecf4', 'vds', 'vds', 'd52b963cc2042e79a37c54a472517c57.jpg', 'vsd', 900, '2022-12-09 14:34:43', '2022-12-09 14:34:43'),
('6392e56c1e9f1', '638ed3dd25135', '639425c09ecf4', 'gdsgd', 'sgdsg', '40cb75026dd7f3c3feda2f5e1fe00697.jpg', 'gds', 444, '2022-12-09 14:36:12', '2022-12-09 14:36:12'),
('63942a83c20b6', '638f009a3fd25', '639425c09ecf4', 'ooooo', 'ooooo', 'a8d7013e624949839ff00e9786ff7512.jpg', 'oooo', 800000, '2022-12-10 13:43:15', '2022-12-10 13:43:15');

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
-- Table structure for table `master_merk`
--

CREATE TABLE `master_merk` (
  `id_merk` varchar(20) NOT NULL,
  `nama_merk` varchar(500) NOT NULL,
  `aktif` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_merk`
--

INSERT INTO `master_merk` (`id_merk`, `nama_merk`, `aktif`, `created_at`, `updated_at`) VALUES
('639425b1e3d90', 'arwanaa', 'N', '2022-12-10 13:22:41', '2022-12-10 13:22:41'),
('639425c09ecf4', 'fulus', 'Y', '2022-12-10 13:22:56', '2022-12-10 13:22:56');

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
-- Indexes for table `master_merk`
--
ALTER TABLE `master_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
