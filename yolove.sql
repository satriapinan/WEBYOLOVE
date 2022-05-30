-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 08:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yolove`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(255) NOT NULL,
  `nama_customer` varchar(255) NOT NULL,
  `email_customer` varchar(255) NOT NULL,
  `password_customer` varchar(255) NOT NULL,
  `gender_customer` varchar(15) DEFAULT NULL,
  `tl_customer` date DEFAULT NULL,
  `gambar_customer` varchar(255) NOT NULL DEFAULT 'user.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `nama_customer`, `email_customer`, `password_customer`, `gender_customer`, `tl_customer`, `gambar_customer`) VALUES
('raymosaid', 'M. Ray Mosaid', 'raymosaid@gmail.com', '7464286059a92e2d9fbc723b34f6e49c', 'Laki-laki', '2001-01-01', 'user.png'),
('satriapinan', 'Satria Pinandita Abyatarsyah', 'satriapinan@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Laki-laki', '2003-03-03', 'satriap.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pengiriman`
--

CREATE TABLE `detail_pengiriman` (
  `id_detail_pengiriman` int(11) NOT NULL,
  `nama_penerima` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `tambahan` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_pengiriman`
--

INSERT INTO `detail_pengiriman` (`id_detail_pengiriman`, `nama_penerima`, `no_telp`, `alamat`, `kecamatan`, `kota`, `provinsi`, `kode_pos`, `tambahan`, `username`) VALUES
(1, 'Satria Pinandita Abyatarsyah', '0811111111', 'Jl. Tampomas, Indramayu', 'Indramayu', 'Indramayu', 'Jawa Barat', '45211', '', 'satriapinan'),
(2, 'Budi Domisol', '082222222222', '1234 Main St', 'Isola', 'Bandung', 'Jawa Barat', '45267', 'Pager abu', 'satriapinan'),
(4, 'Toni Sutono', '087723412098', 'Jl. Rawa Angker No. 3', 'Kayangan', 'Kayangan', 'Kayangan Pusat', '45333', 'Di atas langit', 'satriapinan');

-- --------------------------------------------------------

--
-- Table structure for table `detail_produk`
--

CREATE TABLE `detail_produk` (
  `id_detail_produk` int(11) NOT NULL,
  `nama_detail` varchar(255) NOT NULL,
  `harga_detail` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_produk`
--

INSERT INTO `detail_produk` (`id_detail_produk`, `nama_detail`, `harga_detail`, `gambar`, `id_produk`) VALUES
(6, 'Pink', 0, 'baloon flower.jpeg', 1),
(7, 'Merah', 0, 'baloon flower2.jpeg', 1),
(8, 'Ungu', 0, 'baloon flower4.jpeg', 1),
(9, 'Biru', 0, 'baloon flower5.jpeg', 1),
(10, 'Gold', 0, 'baloon flower6.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ekspedisi`
--

CREATE TABLE `ekspedisi` (
  `id_ekspedisi` int(11) NOT NULL,
  `nama_ekspedisi` varchar(255) NOT NULL,
  `jenis_ekspedisi` varchar(255) NOT NULL,
  `estimasi_waktu` varchar(255) NOT NULL,
  `harga_ekspedisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_transaksi`
--

CREATE TABLE `jenis_transaksi` (
  `id_jenis_transaksi` int(11) NOT NULL,
  `jenis_pembayaran` varchar(255) NOT NULL,
  `no_rek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `username_owner` varchar(255) NOT NULL,
  `password_owner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_pesanan` varchar(255) NOT NULL DEFAULT 'belum bayar',
  `catatan_pesanan` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk_pilihan` int(11) NOT NULL,
  `id_ekspedisi` int(11) NOT NULL,
  `id_detail_pengiriman` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `kategori_produk` varchar(20) NOT NULL,
  `stok_produk` int(11) DEFAULT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `kategori_produk`, `stok_produk`, `harga_produk`, `deskripsi_produk`, `gambar`) VALUES
(1, 'Bloom Box Flowers', 'Bouquet', NULL, 110000, 'Kerajinan balon dan bunga yang dirangkai dengan indah.', 'baloon flower.jpeg'),
(2, 'Tower Snack', 'Bouquet', NULL, 110000, 'Kerajinan dengan bahan dasar snack yang disusun menjadi bentuk menara (tower).', 'tower snack.jpeg'),
(3, 'Bloom Box Snack', 'Bouquet', NULL, 85000, 'Kerajinan balon dan snack yang dirangkai dengan indah.', 'baloon snack.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `produk_pilihan`
--

CREATE TABLE `produk_pilihan` (
  `id_produk_pilihan` int(11) NOT NULL,
  `id_detail_produk` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `id_jenis_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  ADD PRIMARY KEY (`id_detail_pengiriman`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD PRIMARY KEY (`id_detail_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  ADD PRIMARY KEY (`id_ekspedisi`);

--
-- Indexes for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  ADD PRIMARY KEY (`id_jenis_transaksi`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`username_owner`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `username` (`username`),
  ADD KEY `id_ekspedisi` (`id_ekspedisi`),
  ADD KEY `id_produk_pilihan` (`id_produk_pilihan`),
  ADD KEY `id_detail_pengiriman` (`id_detail_pengiriman`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_pilihan`
--
ALTER TABLE `produk_pilihan`
  ADD PRIMARY KEY (`id_produk_pilihan`),
  ADD KEY `id_detail_produk` (`id_detail_produk`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_jenis_transaksi` (`id_jenis_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  MODIFY `id_detail_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detail_produk`
--
ALTER TABLE `detail_produk`
  MODIFY `id_detail_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ekspedisi`
--
ALTER TABLE `ekspedisi`
  MODIFY `id_ekspedisi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_transaksi`
--
ALTER TABLE `jenis_transaksi`
  MODIFY `id_jenis_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk_pilihan`
--
ALTER TABLE `produk_pilihan`
  MODIFY `id_produk_pilihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pengiriman`
--
ALTER TABLE `detail_pengiriman`
  ADD CONSTRAINT `detail_pengiriman_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_produk`
--
ALTER TABLE `detail_produk`
  ADD CONSTRAINT `detail_produk_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_5` FOREIGN KEY (`id_ekspedisi`) REFERENCES `ekspedisi` (`id_ekspedisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_6` FOREIGN KEY (`id_produk_pilihan`) REFERENCES `produk_pilihan` (`id_produk_pilihan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_7` FOREIGN KEY (`id_detail_pengiriman`) REFERENCES `detail_pengiriman` (`id_detail_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk_pilihan`
--
ALTER TABLE `produk_pilihan`
  ADD CONSTRAINT `produk_pilihan_ibfk_1` FOREIGN KEY (`id_detail_produk`) REFERENCES `detail_produk` (`id_detail_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_pilihan_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_jenis_transaksi`) REFERENCES `jenis_transaksi` (`id_jenis_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
