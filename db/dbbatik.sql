-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2020 pada 06.02
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbbatik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data`
--

CREATE TABLE IF NOT EXISTS `tb_data` (
`id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_baju` varchar(20) NOT NULL,
  `harga_terjual` int(20) NOT NULL,
  `total_harga` int(20) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `laba` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `tb_data`
--

INSERT INTO `tb_data` (`id`, `tanggal`, `nama_baju`, `harga_terjual`, `total_harga`, `jumlah`, `laba`) VALUES
(4, '2020-12-18', 'Batik wereng', 300, 400, 3, 390),
(5, '2020-12-10', 'Batik Malang', 3090, 380, 230, 1000),
(6, '2020-12-09', 'Batik Gamis', 3090, 300, 8, 307),
(7, '2020-12-09', 'Batik Gamis', 3090, 400, 34, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_stok`
--

CREATE TABLE IF NOT EXISTS `tb_stok` (
`id` int(10) NOT NULL,
  `nama_baju` varchar(20) NOT NULL,
  `ukuran_baju` varchar(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `tb_stok`
--

INSERT INTO `tb_stok` (`id`, `nama_baju`, `ukuran_baju`, `tgl_masuk`, `tgl_keluar`) VALUES
(12, 'Batik Timur', 'L', '2020-12-03', '2020-12-11'),
(2, 'Batik Malang', 'S', '2020-12-11', '2020-12-25'),
(13, 'Batik Timur', 'XL', '2020-12-10', '2020-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_stok`
--
ALTER TABLE `tb_stok`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_stok`
--
ALTER TABLE `tb_stok`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
