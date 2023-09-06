-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Sep 2023 pada 16.13
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_apotek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_obat`
--

CREATE TABLE IF NOT EXISTS `produk_obat` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `bentuk_produk` varchar(50) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_obat`
--

INSERT INTO `produk_obat` (`id_produk`, `kode_produk`, `nama`, `deskripsi`, `bentuk_produk`, `jumlah_produk`, `harga_produk`, `total_harga`) VALUES
(17, 'H-1245', 'Antangin', 'Obat masuk angin', 'sirup', 5, 3500, 17500),
(18, 'H-1244', 'Paracetamol', 'Obat Penurun Panas, Demam', 'kapsul', 5, 15000, 75000),
(54, 'Ut delec', 'Ullamco quae animi ', 'Aut quae fugiat arch', 'kapsul', 84, 59, 4956);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk_obat`
--
ALTER TABLE `produk_obat`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk_obat`
--
ALTER TABLE `produk_obat`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
