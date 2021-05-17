-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2021 at 04:09 PM
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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_foto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_lomba`, `foto`, `deskripsi`, `tgl_foto`) VALUES
(1, 1, 'https://www.pens.ac.id/wp-content/uploads/2019/08/Smart-Green-House.jpeg', 'Test', '2021-05-02'),
(2, 1, 'https://www.pens.ac.id/wp-content/uploads/2021/04/web-pak-wikan.jpg', 'Peluncuran Program Studi Baru dan Pameran Produk Inovasi Politeknik Elektronika Negeri Surabaya (PENS)', '2021-05-09'),
(3, 2, 'https://www.pens.ac.id/wp-content/uploads/2021/03/Team-Sierra-Web.jpg', 'Peluncuran Program Studi Baru dan Pameran Produk Inovasi Politeknik Elektronika Negeri Surabaya (PENS)', '2021-04-02'),
(6, 3, 'https://www.pens.ac.id/wp-content/uploads/2019/05/web.jpg', 'Peluncuran Program Studi Baru dan Pameran Produk Inovasi Politeknik Elektronika Negeri Surabaya (PENS)', '2021-05-02'),
(7, 4, 'https://www.pens.ac.id/wp-content/uploads/2021/03/PEDDES-WEB.png', 'Peluncuran Program Studi Baru dan Pameran Produk Inovasi Politeknik Elektronika Negeri Surabaya (PENS)', '2021-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Hackathon'),
(3, 'Design Web'),
(4, 'Programming');

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

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id_lomba`, `poster`, `judul`, `deskripsi`, `syarat`, `timeline`, `biaya`, `link_panduan`, `hadiah_juara_1`, `hadiah_juara_2`, `hadiah_juara_3`, `lainnya`, `deadline`, `id_penyelenggara`, `id_kategori`, `tahun`, `link_website`) VALUES
(1, 'https://miro.medium.com/max/2160/1*F8KK-eU-V441JBIuns0N8w.png', 'Jamkrindo Hackathon 2021', 'Smart Access Tecnology', '1. WNI\r\n2. Memiliki KTM\r\n3. Mendaftar sebagai tim', 'Penutupan Registrasi : 30 Juni 2021\r\n', '0', 'https://hackathon.jamkrindo.co.id/index.php/Rules', NULL, NULL, NULL, NULL, '2021-06-30', 1, 1, '2021', 'https://hackathon.jamkrindo.co.id/'),
(2, 'https://bslc.or.id/wp-content/uploads/2017/01/MP-E-TIME-2017-Electro-Activities-Programme-2017-Himpunan-Mahasiswa-Elektro-PNJ-Copy.jpg', 'Incridibel Think', 'Smart Access Tecnology', '1. WNI\r\n2. Memiliki KTM\r\n3. Mendaftar sebagai tim', 'Penutupan Registrasi : 30 Juni 2020\r\n', '0', 'https://hackathon.jamkrindo.co.id/index.php/Rules', NULL, NULL, NULL, NULL, '2020-07-15', 1, 3, '2020', 'https://hackathon.jamkrindo.co.id/'),
(3, 'https://i0.wp.com/eventpelajar.com/wp-content/uploads/2019/03/poster%20hackathon.jpg?fit=1280%2C1280&ssl=1', 'Siloam Hackathon 2021', 'Smart Access Tecnology', '1. WNI\r\n2. Memiliki KTM\r\n3. Mendaftar sebagai tim', 'Penutupan Registrasi : 30 Juni 2021\r\n', '0', 'https://hackathon.jamkrindo.co.id/index.php/Rules', NULL, NULL, NULL, NULL, '2021-06-30', 1, 4, '2021', 'https://hackathon.jamkrindo.co.id/'),
(4, 'https://2.bp.blogspot.com/-w1XuEGn1yPE/VrAhZWI9UxI/AAAAAAAADos/mHHixzHIcfU/s1600/POSTER-WDC.jpg', 'Incridibel Think', 'Smart Access Tecnology', '1. WNI\r\n2. Memiliki KTM\r\n3. Mendaftar sebagai tim', 'Penutupan Registrasi : 30 Juni 2020\r\n', '0', 'https://hackathon.jamkrindo.co.id/index.php/Rules', NULL, NULL, NULL, NULL, '2021-07-22', 1, 3, '2021', 'https://hackathon.jamkrindo.co.id/');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

--
-- Dumping data for table `penyelenggara_lomba`
--

INSERT INTO `penyelenggara_lomba` (`id_penyelenggara`, `nama_penyelenggara`, `kontak`, `nama_kontak`) VALUES
(1, 'UGM', '6285157555010', 'IZ');

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

--
-- Dumping data for table `reviewer`
--

INSERT INTO `reviewer` (`id_reviewer`, `foto`, `nama`, `angkatan`) VALUES
(1, 'fagi.jpg', 'fagi', '2019'),
(2, 'Muhammad zaid.jpg', 'zaid', '2019');

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
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_lomba`, `id_reviewer`, `tahun_lomba`, `testimoni`) VALUES
(1, 2, '2019', 'wow keren sekalo'),
(2, 1, '2019', 'wahh bagus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aldo Faiz Winarno', 'aldo@gmail.com', NULL, '$2y$10$wpE2AgafcHZ4JLr.MUS/aOmoHDWszsKOuTNtNUa87js5TuE.l.sNu', NULL, '2021-05-07 00:13:58', '2021-05-07 00:13:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id_pelanggan`,`id_lomba`),
  ADD KEY `id_lomba` (`id_lomba`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id_lomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penyelenggara_lomba`
--
ALTER TABLE `penyelenggara_lomba`
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `id_reviewer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
