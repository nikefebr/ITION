-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 03:32 PM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'aldotest@gmail.com', '$2y$10$SOmHFKdHUY9ZFg1yB/EiEuMfZB/MqHla4XTE8MBSUASNbGORvxJSO');

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
(1, 'Programming'),
(2, 'Design Web'),
(3, 'Data'),
(4, 'Hackathon');

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
(1, 'lomba12.jpg', 'Competitive Programming - FIND IT ! (Future Innovations and Discovery IT)', 'Competitive Programming merupakan kompetisi yang menguji kemampuan berpikir logis untuk menyelesaikan masalah yang diberikan dengan menyusun algoritma yang paling efektif dan optimal menggunakan sebuah program komputer yang ditulis menggunakan bahasa pemrograman seperti C, C++, atau Java dalam batasan waktu dan memori yang ditentukan sebelumnya.', '- Peserta merupakan mahasiswa aktif D3 atau S1 perguruan tinggi dibuktikan dengan kartu tanda mahasiswa\r\n\r\n- Kompetisi diikuti oleh tim yang terdiri atas tiga peserta yang berasal dari perguruan tinggi yang sama\r\n\r\n- Peserta diperbolehkann mendaftar lebih dari satu cabang kompetisi Find IT! yang berbeda. Namum, seorang peserta hanya diperbolehkan menjadi ketua tim di satu canag kopetisi, tidak diperbolehkan menjadi ketua tim dicabang kompetisi lainnya.\r\n\r\n- Bahasa pemrograman yang digunakan adalah C, C++, dan Java. Keputusan dewan juri bersifat mutlak dan tidak dapat diganggu gugat\r\n', 'Sabtu, 13 Maret 2021 : Open Registration FIND IT1 2021\r\n\r\nMinggu, 11 April 2021 : Close Registration \r\n\r\nSabtu, 5 Juni 2021 : Warm Up\r\n\r\nMinggu, 6 Juni 2021 : Kualifikasi dan Pengumuman Finalis\r\n\r\nMinggu, 13 Juni 2021 : Final dan Pengumuman Juara\r\n\r\n', 'Rp 120.000', 'https://drive.google.com/file/d/1K8TKmYB7MNZ6EnSwPuQdUIFvSSHuYT1Q/view', 'Rp 3.500.000', 'Rp 2.500.000', 'Rp 1.000.000', NULL, '2021-07-01', 1, 1, '2021', 'https://find-it.id/Competition/CompetitiveProgramming'),
(2, 'lomba12.jpg', 'Data Analytics Competition - FIND IT ! (Future Innovations and Discovery IT)', 'Data Analytics Competition merupakan kompetisi menganalisis data khususnya big data yang diharapkan dapat memberikan solusi dari sebuah permasalahan yang telah disediakan. Kompetisi ini bertujuan untuk menyiapkan generasi yang mampu menganalisis data dengan baik sehingga mampu melahirkan solusi terbaik dari sebuah masalah di era digital sekarang ini.', '- Peserta merupakan mahasiswa program diploma atau sarjana di perguruan tinggi negeri atau swasta di indonesia yang berstatus aktif\r\n\r\n- Satu tim terdiri atas maksimal 3 orang dengan salah satu anggota adalah ketua tim\r\n\r\n- Setiap anggota tim harus berasal dari perguruan tinggi/instansi pendidikan yang sama\r\n\r\n- Setiap anggota hanya boleh terdaftar dalam satu tim\r\n\r\n- Setiap tim wajib melengkapi berkas pendaftaran dengan data yang benar\r\nsetiap tim tidak diperbolehkan untuk mengubah komposisi anggota tim setelah melengkapii berkas pendaftaran\r\n\r\n- Setiap tim yang tidak mengkonfirmasikan kehadirannya pada babak final sebelum acara dimulai akan didiskualifikasi\r\n\r\n- Saat babak final berlangsung,seiap tim wajib hadir semua anggota\r\nsetiap anggota tim dilarang bekerja sama dengan anggota tim lain dalam bentuk apapun\r\n\r\n- Setiap anggota tim dilarang melakukan hal atau kegiatan yang dapat mengganggu jalannya lomba atau merugikan tim lainnya\r\n\r\n- Seluruh tim wajib mengikuti peraturan yang sudah ditetapkan tanpa terkecuali\r\npanitia berhak untuk menggugurkan tim yang melakukan tindak kecurangan maupun pelanggaran terhadap aturan kompetisi sebelum atau saat kompetisi terselenggara, tanpa pemberitahuan sebelumnya\r\n\r\n- Panitia berhak untuk mempublikasikan karya peserta yangdiikutsertakan dalam kompetisi dengan hak milik karya tetap akanmenjadi hak tim.\r\n\r\n- Panitia berhak untuk mencabut gelar juara dari pemenang jikaditemukan kecurangan atau pelanggaran atas karya yangdilombakan.\r\n\r\n- Keputusan dewan juri dan panitia mutlak tidak dapat diganggugugat.\r\nApabila ada peraturan yang belum ditetapkan akan ditetapkankemudian hari.\r\n\r\n- Berita terkait perubahan atau penambahan aturan akandipublikasikan melalui situs dan Official Account resmi Find IT! 2021.\r\n', 'Sabtu, 13 Maret 2021 : Open Registration FIND IT1 2021\r\n\r\nMinggu, 11 April 2021 : Close Registration \r\n3 - 23 Mei 2021	: Pengerjaan soal dan laporan\r\n\r\n24 - 29 Mei 2021 	: Penilaian\r\n\r\n30 Mei 2021 		: Pengumuman Finalis\r\n\r\n30 Mei - 7 Juni 2021 	: Pengumpulan Video dan Pengisian Form\r\n\r\nSabtu, 12 Juni 2021 	: Presentasi Final\r\n', 'Rp 100.000', 'https://drive.google.com/file/d/1C92piZm7-glKkci6JE95OXYzwN8HdE4S/view', 'Rp 4.000.000', 'Rp 2.000.000', 'Rp 1.000.000', NULL, '2021-07-01', 2, 3, '2021', 'https://find-it.id/Competition/DataAnalyticsCompetition'),
(3, 'lomba12.jpg', 'Hackathon - FIND IT ! (Future Innovations and Discovery IT)', 'Hackathon yang merupakan gabungan dari dua kata yaitu hack dan marathon adalah kompetisi pembuatan inovasi berupa produk teknologi informasi. Kompetisi ini mengkolaborasikan aspek startup yaitu Hipster (Design and User interface / User Experience), Hacker (Engineer and Developer), dan Hustler (Business and Project Management) dalam kurun waktu tertentu.', '- Peserta adalah mahasiswa program diploma atau sarjana di perguruan tinggi negeri atau swasta di Indonesia yang berstatus aktif,berumur maksimal 24 tahun pada tanggal babak final diselenggarakan (dibuktikan dengan Kartu Tanda Mahasiswa (KTM) yang masih berlaku atau surat keterangan resmi dari perguruan tinggi/institusi terkait), dan telah mengikuti mekanisme pendaftaran secara resmi melalui situs Find IT! 2021.\r\n\r\n- Satu tim terdiri atas 2-3 orang dengan salah satu anggota adalah ketua tim.\r\n\r\n- Setiap anggota tim harus berasal dari perguruan tinggi/institusi yang sama.\r\nSetiap anggota hanya boleh terdaftar dalam satu tim.\r\n\r\n- Setiap tim wajib melengkapi berkas pendaftaran dengan data yang benar.\r\nSetiap tim tidak diperbolehkan untuk mengubah komposisi anggota tim setelah melengkapi berkas pendaftaran.\r\n\r\n- Inovasi yang diangkat harus sesuai dengan tema dan memenuhi salah satu subtema.\r\n\r\n- Setiap tim yang lolos ke tahap penyisihan proposal diharapkan melakukan pengumpulan proposal sebelum waktu pengumpulan proposal resmi ditutup. Apabila tidak melakukan pengumpulan proposal, maka tim tidak akan diikutsertakan pada babak tersebut.\r\n\r\n- Setiap tim yang tidak mengkonfirmasikan kehadirannya pada babak final selambat-lambatnya satu minggu sebelum acara dimulai akan didiskualifikasi.\r\n\r\n- Saat babak final berlangsung, setiap tim wajib hadir minimal 2 anggota tim, apabila kurang maka tim akan didiskualifikasi.\r\n\r\n- Setiap anggota tim dilarang bekerja sama dengan anggota tim lain dalam bentuk apapun.\r\n\r\n- Setiap anggota tim dilarang melakukan hal atau kegiatan yang dapat mengganggu jalannya lomba atau merugikan tim lainnya.\r\n\r\n- Seluruh tim wajib mengikuti peraturan yang sudah ditetapkan tanpa terkecuali.\r\n\r\n- Panitia berhak untuk menggugurkan tim yang melakukan tindak kecurangan maupun pelanggaran terhadap aturan kompetisi sebelum atau saat kompetisi terselenggara, tanpa pemberitahuan sebelumnya.\r\n\r\n- Panitia berhak untuk mempublikasikan karya peserta yang diikutsertakan dalam kompetisi dengan hak milik karya tetap akan menjadi hak tim.\r\n\r\n- Panitia berhak untuk mencabut gelar juara dari pemenang jika ditemukan kecurangan atau pelanggaran atas karya yang dilombakan.\r\n\r\n- Keputusan dewan juri dan panitia mutlak tidak dapat diganggu gugat.\r\nApabila ada peraturan yang belum ditetapkan akan ditetapkan kemudian hari.\r\n\r\n- Berita terkait perubahan atau penambahan aturan akan dipublikasikan melalui situs dan Official Account resmi Find IT! 2021.', 'Sabtu, 13 Maret 2021 : Open Registration FIND IT1 2021\r\n\r\nMinggu, 11 April 2021 : Close Registration \r\n\r\nMinggu, 18 April 2021 : Pengumpulan Abstrak \r\n\r\nKamis, 22 April 2021 : Pengumuman Abstrak \r\n\r\nMinggu, 9 Mei 2021 : Pengumpulan Proposal\r\n\r\nSenin,24 Mei 2021 : Pengumuman Proposal\r\n\r\nMinggu, 13 Juni 2021 : Grand Final ( Pitching )\r\n\r\n', 'Rp 100.000', 'https://drive.google.com/file/d/1oXeYctDcEU6C1etgbyubnW823fc2wPCZ/view', 'Rp 4.000.000', 'Rp 2.000.000', 'Rp 1.000.000', NULL, '2021-07-01', 3, 4, '2021', 'https://find-it.id/auth/SignInPage?q=/Registration/Hackathon'),
(4, 'lomba.jpg', 'Incridibel Think', 'Smart Access Tecnology', '1. WNI\r\n2. Memiliki KTM\r\n3. Mendaftar sebagai tim', 'Penutupan Registrasi : 30 Juni 2020\r\n', '200000', 'https://hackathon.jamkrindo.co.id/index.php/Rules', '2000000', '1000000', NULL, NULL, '2021-07-22', 1, 3, '2021', 'https://hackathon.jamkrindo.co.id/');

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
(1, 'UGM', '62895379261521', 'Fauzan Abdillah'),
(2, 'UGM', '62895637566145', 'Sasa Nadya'),
(3, 'UGM', '6281809658698', 'Yanayir Rifai');

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_penyelenggara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
