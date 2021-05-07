-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 03:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ition`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id_lomba` int(11) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `syarat` text DEFAULT NULL,
  `timeline` text DEFAULT NULL,
  `biaya` varchar(255) NOT NULL,
  `link_panduan` varchar(255) NOT NULL,
  `hadiah_juara_1` varchar(255) DEFAULT NULL,
  `hadiah_juara_2` varchar(255) DEFAULT NULL,
  `hadiah_juara_3` varchar(255) DEFAULT NULL,
  `lainnya` varchar(255) DEFAULT NULL,
  `deadline` date NOT NULL,
  `id_penyelenggara` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `link_website` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id_pelanggan` int(11) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `tgl_pengiriman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengisian_galeri`
--

CREATE TABLE `pengisian_galeri` (
  `id_admin` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `tgl_pengisian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengisian_lomba`
--

CREATE TABLE `pengisian_lomba` (
  `id_admin` int(11) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `tgl_pengisian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggara_lomba`
--

CREATE TABLE `penyelenggara_lomba` (
  `id_penyelenggara` int(11) NOT NULL,
  `nama_penyelenggara` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `nama_kontak` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviewer`
--

CREATE TABLE `reviewer` (
  `id_reviewer` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_lomba` int(11) NOT NULL,
  `id_reviewer` int(11) NOT NULL,
  `tahun_lomba` varchar(255) NOT NULL,
  `testimoni` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `id_lomba` (`id_lomba`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id_lomba`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE,
  ADD KEY `id_penyelenggara` (`id_penyelenggara`) USING BTREE;

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_pelanggan`,`id_lomba`),
  ADD KEY `id_lomba` (`id_lomba`) USING BTREE;

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pengisian_galeri`
--
ALTER TABLE `pengisian_galeri`
  ADD PRIMARY KEY (`id_admin`,`id_galeri`),
  ADD KEY `id_galeri` (`id_galeri`) USING BTREE;

--
-- Indexes for table `pengisian_lomba`
--
ALTER TABLE `pengisian_lomba`
  ADD PRIMARY KEY (`id_admin`,`id_lomba`),
  ADD KEY `id_lomba` (`id_lomba`);

--
-- Indexes for table `penyelenggara_lomba`
--
ALTER TABLE `penyelenggara_lomba`
  ADD PRIMARY KEY (`id_penyelenggara`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`id_reviewer`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_lomba`,`id_reviewer`),
  ADD KEY `id_reviewer` (`id_reviewer`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyelenggara_lomba`
--
ALTER TABLE `penyelenggara_lomba`
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id_reviewer` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`id_lomba`) REFERENCES `lomba` (`id_lomba`);

--
-- Constraints for table `lomba`
--
ALTER TABLE `lomba`
  ADD CONSTRAINT `lomba_ibfk_1` FOREIGN KEY (`id_penyelenggara`) REFERENCES `penyelenggara_lomba` (`id_penyelenggara`),
  ADD CONSTRAINT `lomba_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Constraints for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD CONSTRAINT `newsletter_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `newsletter_ibfk_2` FOREIGN KEY (`id_lomba`) REFERENCES `lomba` (`id_lomba`);

--
-- Constraints for table `pengisian_galeri`
--
ALTER TABLE `pengisian_galeri`
  ADD CONSTRAINT `pengisian_galeri_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `pengisian_galeri_ibfk_2` FOREIGN KEY (`id_galeri`) REFERENCES `galeri` (`id_galeri`);

--
-- Constraints for table `pengisian_lomba`
--
ALTER TABLE `pengisian_lomba`
  ADD CONSTRAINT `pengisian_lomba_ibfk_1` FOREIGN KEY (`id_lomba`) REFERENCES `lomba` (`id_lomba`),
  ADD CONSTRAINT `pengisian_lomba_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_reviewer`) REFERENCES `reviewer` (`id_reviewer`),
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`id_lomba`) REFERENCES `lomba` (`id_lomba`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
