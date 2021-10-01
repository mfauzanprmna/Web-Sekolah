-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 11:20 AM
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
-- Database: `db_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_lulus` int(11) DEFAULT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_kerja` int(11) DEFAULT NULL,
  `penghasilan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categories_alumnis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `name`, `tahun_lulus`, `nama_perusahaan`, `posisi`, `tahun_kerja`, `penghasilan`, `created_at`, `updated_at`, `categories_alumnis`, `jurusan`) VALUES
(1, 'Syaifudin Ilham', 2022, 'Cv Propose', 'Managaer', 2023, '200000', '2021-10-01 05:59:57', '2021-10-01 05:59:57', 'Bekerja', 'Multimedia'),
(2, 'DIo Selvinus Silalebit', 2022, 'Universitas Indonesia', 'Teknik Informatika', 2025, '10000000', '2021-10-01 06:27:00', '2021-10-01 06:31:13', 'Kuliah', 'Teknik Komputer Jaringan'),
(3, 'Muhammad Yafik Ramdhan Ilham', 2022, 'Google Corporation', 'Managaer', 2025, '10000000', '2021-10-01 06:34:42', '2021-10-01 06:34:42', 'Bekerja', 'Teknik Komputer Jaringan'),
(4, 'Nur Firdaus', 2022, 'Minuman dan Makanan', NULL, NULL, NULL, '2021-10-01 06:58:31', '2021-10-01 06:58:31', 'Bekerja', NULL),
(5, 'Nur Firdaus', 2022, 'Minuman dan Makanan', NULL, NULL, '15000000', '2021-10-01 06:59:12', '2021-10-01 06:59:12', 'Wirausaha', 'Teknik Komputer Jaringan'),
(6, 'Muhamman Tarmidzi Bariq', 2022, 'Universitas Gunadarma', 'Management', NULL, NULL, '2021-10-01 07:34:36', '2021-10-01 07:34:36', 'Kuliah', 'Multimedia'),
(7, 'Rafie Aydin Ihsan', 2022, 'Galon Isi Ulang', NULL, NULL, '10000000', '2021-10-01 07:35:46', '2021-10-01 07:35:46', 'Wirausaha', 'Multimedia'),
(8, 'Angkasa Raya', 2022, 'Nasa', 'Managaer', 2025, '10000000', '2021-10-01 07:37:09', '2021-10-01 07:37:09', 'Bekerja', 'Rekayasa Perangkat Lunak'),
(9, 'Muhammad Irsyam Kelana', 2021, 'Universitas Unindra', 'Otomotif', NULL, NULL, '2021-10-01 07:38:47', '2021-10-01 07:38:47', 'Kuliah', 'Rekayasa Perangkat Lunak'),
(10, 'Andhika Riski Hidayat', 2022, 'Milk Shake', NULL, NULL, '5000000', '2021-10-01 07:39:50', '2021-10-01 07:39:50', 'Wirausaha', 'Rekayasa Perangkat Lunak'),
(11, 'Dana Satria', 2022, 'PT Ada kalanya', 'Web Dev', 2025, '15000000', '2021-10-01 07:41:30', '2021-10-01 07:41:30', 'Bekerja', 'Broadcast'),
(12, 'Satrai Dwi Putra', 2022, 'Universitas Gadjah Mada', 'Sistem Informasi', NULL, NULL, '2021-10-01 07:42:37', '2021-10-01 07:42:37', 'Kuliah', 'Broadcast'),
(13, 'Rifki Ahmad Zahidan', 2022, 'Usaha Bidang Kesehatan', NULL, NULL, '12000000', '2021-10-01 07:43:28', '2021-10-01 07:43:28', 'Wirausaha', 'Broadcast'),
(14, 'Muhammad Adil Farizki', 2022, 'PT Jaya Abadi', 'CEO', 2025, '15000000', '2021-10-01 07:44:39', '2021-10-01 07:44:39', 'Bekerja', 'Teknik Elektronik Industri'),
(15, 'Sheva Sinatrya Putra', 2022, 'Institute Pertanian Bogor', 'Pertanian', NULL, NULL, '2021-10-01 07:45:51', '2021-10-01 07:45:51', 'Kuliah', 'Teknik Elektronik Industri'),
(16, 'Kelvyn Nathanael', 2022, 'Coffee', NULL, NULL, '10000000', '2021-10-01 07:47:39', '2021-10-01 07:47:39', 'Wirausaha', 'Teknik Elektronik Industri'),
(17, 'Firdaus Caesar', 2022, 'Universitas Unair', 'Sistem Informasi', NULL, NULL, '2021-10-01 08:36:18', '2021-10-01 08:36:18', 'Kuliah', 'Rekayasa Perangkat Lunak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
