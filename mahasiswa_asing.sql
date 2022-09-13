-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 12:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa_asing`
--

-- --------------------------------------------------------

--
-- Table structure for table `gelombang`
--

CREATE TABLE `gelombang` (
  `id` int(11) NOT NULL,
  `gelombang` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gelombang`
--

INSERT INTO `gelombang` (`id`, `gelombang`, `tahun`, `keterangan`, `status`) VALUES
(2, 1, 2022, 'Sipenmasing gelombang 1 tahun 2022', 1),
(4, 2, 2022, 'Sipenmasing gelombang 2 tahun 2022', 1),
(7, 3, 2022, 'Sipenmasing gelombang 3 tahun 2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lulus`
--

CREATE TABLE `lulus` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `hp` varchar(40) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `negara` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `ijazah` varchar(128) NOT NULL,
  `passport` varchar(128) NOT NULL,
  `penanggung_jawab` varchar(128) NOT NULL,
  `pernyataan_tidak_bekerja` varchar(128) NOT NULL,
  `pernyataan_undang` varchar(128) NOT NULL,
  `jaminan_biaya` varchar(128) NOT NULL,
  `surat_kesehatan` varchar(128) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `pernyataan_tidak_berpolitik` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lulus`
--

INSERT INTO `lulus` (`id`, `nama`, `email`, `nik`, `hp`, `id_prodi`, `negara`, `tempat_lahir`, `ijazah`, `passport`, `penanggung_jawab`, `pernyataan_tidak_bekerja`, `pernyataan_undang`, `jaminan_biaya`, `surat_kesehatan`, `foto`, `pernyataan_tidak_berpolitik`) VALUES
(61, 'Muhammad Zulfan', 'adminict@uui.ac.id', '1107070611980002334', '0823703857583434sad323', 0, 'Indonesia dfafd', 'Indonesia sadfdf', 'surat1.pdf', 'surat2.pdf', 'pernyataan_undang.pdf', 'surat_kesehatan2.pdf', 'surat_kesehatan3.pdf', 'surat_kesehatan.pdf', 'pernyataan_tidak_bekerja.pdf', 'foto8.jpg', 'INI_PASSPORT.pdf'),
(62, 'zulfan', 'zulfanict@gmail.com', '43543534', '345435345435', 10033, '45345353', '345345', 'INI_IJAZAH10.pdf', 'INI_PASSPORT10.pdf', 'jaminan13.pdf', 'penanggung_jawab10.pdf', 'pernyataan_undang15.pdf', 'surat5.pdf', 'surat_kesehatan5.pdf', 'kk1.jpeg', 'pernyataan_tidak_bekerja10.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `lulus` int(2) NOT NULL DEFAULT 0,
  `gelombang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `lulus`, `gelombang`) VALUES
(6, 'Muhammad Zulfan', 'adminict@uui.ac.id', 'default.jpg', '$2y$10$w/vfJFPK4gecg1hbTEFN.OpCl4KAYxHbQfcgnR0l181GdLWZtygYK', 1, 1, 1646733374, 1, 0),
(11, 'zulfan', 'zulfanict@gmail.com', 'default.jpg', '$2y$10$L9.9JiRVN4bGQiSQOnLzIOeqlW6KkMtgQMsviLNQ03CpY4kiEM4SW', 2, 1, 1653040089, 1, 4),
(14, 'iqrairwanda', 'iqrairwanda@uui.ac.id', 'default.jpg', '$2y$10$0/A9Cfatj7LkDClig1/Y2um5fMxNM0SFFhf0Koc9Vb/3c5md/njUa', 2, 1, 1653885634, 0, 7),
(15, 'coba', 'coba@gmail.com', 'default.jpg', '$2y$10$cFgoUVE.QK3NHdloPBYK5.m5k3q1w93.jtzFfS.iXYDxCV8hJDX76', 2, 0, 1653904486, 0, 7),
(16, 'coba', 'coba@gmail.coma', 'default.jpg', '$2y$10$kSRmc2wYHgb9xjLDDEtTTeOU0esj0NlR/j1q1faZUfugNOJ5zGIVG', 2, 0, 1653904518, 0, 7),
(17, 'coba', 'coba@gmail.comdf', 'default.jpg', '$2y$10$hyFZ0GKBXFLRN96eZfs.NeTNY0a6MrKdrav.MUCYP3/YfRq6DjgCe', 2, 0, 1653904581, 0, 7),
(18, 'adsfdaf', 'dasfdfas@fggad.com', 'default.jpg', '$2y$10$7rZVlH6EejadCWDT.ldbQOzH9CzGlB1wMAbqtOMuK1SxiNyI7uftS', 2, 0, 1653904626, 0, 7),
(19, 'adsfdaf', 'dasfdfas@gmail.com', 'default.jpg', '$2y$10$5Pl8UrE6SGzkQdzCrNWMSemh.KNHd6csZk4Ic2d74xGoiFy54dtZy', 2, 0, 1653904678, 0, 7),
(20, 'adsfdaf', 'dasfdfas@gmail.coma', 'default.jpg', '$2y$10$lL/gddW9RmR/6mov37tlEuzSAaZ9RVBUOj11eloYth9Kbk1Z6rI76', 2, 0, 1653904722, 0, 7),
(21, 'adsfdaf', 'dasfdfas@gmail.comaa', 'default.jpg', '$2y$10$TSjhxsBQDimVsmS2Tw5SDOrEvEDGYom.Yq2kWj0432EyBQmcr3s3e', 2, 0, 1653904937, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` varchar(10) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`) VALUES
('10011', 'S-1 Akutansi'),
('10012', 'S-1 Manajemen'),
('10021', 'S-1 Hukum'),
('10022', 'S-1 Ilmu Pemerintahan'),
('10033', 'S-1 Informatika'),
('10034', 'S-1 Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Pendaftar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gelombang`
--
ALTER TABLE `gelombang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lulus`
--
ALTER TABLE `lulus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gelombang`
--
ALTER TABLE `gelombang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lulus`
--
ALTER TABLE `lulus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
