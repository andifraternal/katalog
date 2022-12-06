-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 09:21 AM
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
-- Database: `hoha`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

CREATE TABLE `master_barang` (
  `id_barang` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `nama_barang` varchar(500) NOT NULL,
  `harga_update` int(11) NOT NULL,
  `status_aktif` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id_barang`, `id_kategori`, `nama_barang`, `harga_update`, `status_aktif`, `created_at`, `updated_at`) VALUES
('63844f2c9dfcc', '63844f0665b62', 'Bolpoint', 2500, 1, '2022-11-28 13:03:24', '2022-11-28 13:03:24'),
('63844f3ba67ad', '63844f0665b62', 'Buku Tulis', 4000, 1, '2022-11-28 13:03:39', '2022-11-28 13:03:39'),
('63844f4b52a24', '63844f0665b62', 'Buku gambar', 6000, 1, '2022-11-28 13:03:55', '2022-11-28 13:03:55'),
('63844f5707067', '63844f0665b62', 'Penghapus', 1000, 1, '2022-11-28 13:04:07', '2022-11-28 13:04:07'),
('63844f6b13f8b', '63844f0024c8a', 'Roti tawar', 6500, 1, '2022-11-28 13:04:27', '2022-11-28 13:04:27'),
('63844f77333cb', '63844f0024c8a', 'Roti tidak tawar', 9000, 1, '2022-11-28 13:04:39', '2022-11-28 13:04:39'),
('63844fa23a424', '63844f0d2ef78', 'fotokopi A4', 300, 1, '2022-11-28 13:05:22', '2022-11-28 13:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `master_barang_log`
--

CREATE TABLE `master_barang_log` (
  `id_log` varchar(20) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_barang_log`
--

INSERT INTO `master_barang_log` (`id_log`, `id_barang`, `harga`, `created_at`) VALUES
('63844f2cb5918', '63844f2c9dfcc', 2500, '2022-11-28 13:03:24'),
('63844f3bba503', '63844f3ba67ad', 4000, '2022-11-28 13:03:39'),
('63844f4b616e9', '63844f4b52a24', 6000, '2022-11-28 13:03:55'),
('63844f571aa18', '63844f5707067', 1000, '2022-11-28 13:04:07'),
('63844f6b25844', '63844f6b13f8b', 6500, '2022-11-28 13:04:27'),
('63844f77448f1', '63844f77333cb', 9000, '2022-11-28 13:04:39'),
('63844fa2559a1', '63844fa23a424', 300, '2022-11-28 13:05:22');

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL,
  `status_aktif` int(11) NOT NULL,
  `pd` varchar(20) NOT NULL,
  `pajak_pd` float NOT NULL,
  `ppn` varchar(20) NOT NULL,
  `pajak_ppn` float NOT NULL,
  `pph` varchar(20) NOT NULL,
  `pajak_pph` float NOT NULL,
  `pf` varchar(20) NOT NULL,
  `pajak_pf` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kategori`
--

INSERT INTO `master_kategori` (`id_kategori`, `nama_kategori`, `status_aktif`, `pd`, `pajak_pd`, `ppn`, `pajak_ppn`, `pph`, `pajak_pph`, `pf`, `pajak_pf`, `created_at`, `updated_at`) VALUES
('63844f0024c8a', 'Catering', 1, 'Y', 0.1, 'Y', 0.11, 'Y', 0.02, 'Y', 0.02, '2022-11-28 13:02:40', '2022-11-28 13:02:40'),
('63844f0665b62', 'ATK', 1, 'N', 0, 'Y', 0.11, 'N', 0.015, 'Y', 0.02, '2022-11-28 13:02:46', '2022-11-28 13:02:46'),
('63844f0d2ef78', 'Fotokopi', 1, 'N', 0, 'Y', 0.11, 'Y', 0.02, 'Y', 0.02, '2022-11-28 13:02:53', '2022-11-28 13:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `no_invoice` varchar(50) NOT NULL,
  `no_po` varchar(50) NOT NULL,
  `tanggal_po` date NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `laba_rugi` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kategori`, `no_invoice`, `no_po`, `tanggal_po`, `id_barang`, `harga_beli`, `harga_jual`, `qty`, `laba_rugi`, `created_at`, `updated_at`) VALUES
('638450d8c56f1', '63844f0665b62', 'ABCDE', 'EFGHI', '2022-11-28', '63844f2c9dfcc', 2500, 3500, 10, 10000, '2022-11-28 13:10:32', '2022-11-28 13:10:32'),
('638450d8d7111', '63844f0665b62', 'ABCDE', 'EFGHI', '2022-11-28', '63844f3ba67ad', 4000, 5000, 50, 50000, '2022-11-28 13:10:32', '2022-11-28 13:10:32'),
('638450d8e66fc', '63844f0665b62', 'ABCDE', 'EFGHI', '2022-11-28', '63844f4b52a24', 6000, 8000, 1000, 2000000, '2022-11-28 13:10:32', '2022-11-28 13:10:32'),
('63846ead46393', '63844f0024c8a', 'pppp', 'holaholo', '2022-11-28', '63844f6b13f8b', 6500, 8000, 30, 45000, '2022-11-28 15:17:49', '2022-11-28 15:17:49'),
('63846ead58933', '63844f0024c8a', 'pppp', 'holaholo', '2022-11-28', '63844f77333cb', 9000, 11000, 30, 60000, '2022-11-28 15:17:49', '2022-11-28 15:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pengeluaran`
--

CREATE TABLE `transaksi_pengeluaran` (
  `id_transaksi_pengeluaran` varchar(20) NOT NULL,
  `no_invoice` varchar(20) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `tanggal_po` date NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pengeluaran`
--

INSERT INTO `transaksi_pengeluaran` (`id_transaksi_pengeluaran`, `no_invoice`, `no_po`, `tanggal_po`, `keterangan`, `nominal`, `created_at`) VALUES
('638450d910d18', 'ABCDE', 'EFGHI', '2022-11-28', 'BENSIN', 15000, '2022-11-28 13:10:33');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_master_transaksi`
-- (See below for the actual view)
--
CREATE TABLE `view_master_transaksi` (
`kategori` varchar(50)
,`nama_kategori` varchar(200)
,`no_invoice` varchar(50)
,`no_po` varchar(50)
,`tanggal_po` date
,`total_beli` decimal(42,0)
,`total_jual` decimal(42,0)
,`total_untung` decimal(32,0)
,`pajak_daerah` double(17,0)
,`ppn` double(17,0)
,`pph` double(17,0)
,`pajak_platform` double(17,0)
,`pengeluaran` decimal(32,0)
,`penjualan_bersih` double(17,0)
,`keuntungan_bersih` double(17,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_transaksi_pengeluaran`
-- (See below for the actual view)
--
CREATE TABLE `view_transaksi_pengeluaran` (
`no_invoice` varchar(20)
,`no_po` varchar(20)
,`tanggal_po` date
,`total_pengeluaran` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Structure for view `view_master_transaksi`
--
DROP TABLE IF EXISTS `view_master_transaksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_master_transaksi`  AS  select `z`.`kategori` AS `kategori`,`z`.`nama_kategori` AS `nama_kategori`,`z`.`no_invoice` AS `no_invoice`,`z`.`no_po` AS `no_po`,`z`.`tanggal_po` AS `tanggal_po`,`z`.`total_beli` AS `total_beli`,`z`.`total_jual` AS `total_jual`,`z`.`total_untung` AS `total_untung`,`z`.`pajak_daerah` AS `pajak_daerah`,`z`.`ppn` AS `ppn`,`z`.`pph` AS `pph`,`z`.`pajak_platform` AS `pajak_platform`,`z`.`pengeluaran` AS `pengeluaran`,`z`.`total_jual` - `z`.`pajak_daerah` - `z`.`ppn` - `z`.`pph` - `z`.`pajak_platform` - `z`.`pengeluaran` AS `penjualan_bersih`,`z`.`total_jual` - `z`.`pajak_daerah` - `z`.`ppn` - `z`.`pph` - `z`.`pajak_platform` - `z`.`pengeluaran` - `z`.`total_beli` AS `keuntungan_bersih` from (select `a`.`kategori` AS `kategori`,`b`.`nama_kategori` AS `nama_kategori`,`a`.`no_invoice` AS `no_invoice`,`a`.`no_po` AS `no_po`,`a`.`tanggal_po` AS `tanggal_po`,sum(`a`.`harga_beli` * `a`.`qty`) AS `total_beli`,sum(`a`.`harga_jual` * `a`.`qty`) AS `total_jual`,sum(`a`.`laba_rugi`) AS `total_untung`,case when `b`.`pd` = 'Y' then round(sum(`a`.`harga_jual` * `a`.`qty`) * `b`.`pajak_pd`,0) else 0 end AS `pajak_daerah`,case when (sum(`a`.`harga_jual` * `a`.`qty`) > 2000000 and `b`.`ppn` = 'Y') then round(sum(`a`.`harga_jual` * `a`.`qty`) * `b`.`pajak_ppn`,0) else 0 end AS `ppn`,case when (sum(`a`.`harga_jual` * `a`.`qty`) > 2000000 and `b`.`pph` = 'Y') then round(sum(`a`.`harga_jual` * `a`.`qty`) * `b`.`pajak_pph`,0) when (sum(`a`.`harga_jual` * `a`.`qty`) < 2000000 and `b`.`pph` = 'Y') then round(sum(`a`.`harga_jual` * `a`.`qty`) * `b`.`pajak_pph`,0) when (sum(`a`.`harga_jual` * `a`.`qty`) > 2000000 and `b`.`pph` = 'N') then round(sum(`a`.`harga_jual` * `a`.`qty`) * `b`.`pajak_pph`,0) else 0 end AS `pph`,case when `b`.`pf` = 'Y' then round(sum(`a`.`harga_jual` * `a`.`qty`) * `b`.`pajak_pf`,0) else 0 end AS `pajak_platform`,case when `c`.`total_pengeluaran` then `c`.`total_pengeluaran` else 0 end AS `pengeluaran` from ((`transaksi` `a` join `master_kategori` `b` on(`a`.`kategori` = `b`.`id_kategori`)) left join `view_transaksi_pengeluaran` `c` on(`c`.`no_invoice` = `a`.`no_invoice`)) group by `a`.`kategori`,`b`.`nama_kategori`,`a`.`no_invoice`,`a`.`no_po`,`a`.`tanggal_po`) `z` ;

-- --------------------------------------------------------

--
-- Structure for view `view_transaksi_pengeluaran`
--
DROP TABLE IF EXISTS `view_transaksi_pengeluaran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_transaksi_pengeluaran`  AS  select `transaksi_pengeluaran`.`no_invoice` AS `no_invoice`,`transaksi_pengeluaran`.`no_po` AS `no_po`,`transaksi_pengeluaran`.`tanggal_po` AS `tanggal_po`,sum(`transaksi_pengeluaran`.`nominal`) AS `total_pengeluaran` from `transaksi_pengeluaran` group by `transaksi_pengeluaran`.`no_invoice`,`transaksi_pengeluaran`.`no_po`,`transaksi_pengeluaran`.`tanggal_po` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_barang`
--
ALTER TABLE `master_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `master_barang_log`
--
ALTER TABLE `master_barang_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_pengeluaran`
--
ALTER TABLE `transaksi_pengeluaran`
  ADD PRIMARY KEY (`id_transaksi_pengeluaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
