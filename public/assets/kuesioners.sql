-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 06:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `kuesioners`
--

CREATE TABLE `kuesioners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `unsur_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `uuid`, `unsur_id`, `question`, `created_at`, `updated_at`) VALUES
(1, '5b941736-acad-41fe-94b5-9d6874cf7b4d', 1, 'Kepuasan Persyaratan Pelayanan Dengan Jenis Pelayananya', '2024-05-10 15:02:22', '2024-05-14 05:43:04'),
(2, 'd604c5e4-4e88-4971-8b85-8c2f922d89d9', 2, 'Kemudahan Dalam Prosedur Pelayanan Di Unit Ini', '2024-05-10 15:24:00', '2024-05-14 05:42:54'),
(3, '81aac9de-ba57-4dcb-95be-5ec91ab93152', 3, 'Kecepatan Dalam Memberikan Pelayanan', '2024-05-14 05:41:17', '2024-05-14 05:41:17'),
(4, 'e97f1e10-8a51-42b7-a98a-89d724ce58c2', 4, 'Kewajaran Biaya Atau Tarif Pelayanan', '2024-05-14 05:41:31', '2024-05-14 05:41:31'),
(5, '59786127-e36b-4edd-8e62-7c55ca05c387', 5, 'Kepuasan Produk Pelayanan Antara Yang Tercantum Dalam Standar Pelayanan Dengan Hasil Yang Di Berikan', '2024-05-14 05:41:44', '2024-05-14 05:41:44'),
(6, '35f1d13d-aab1-4d30-82a0-3b8458d24289', 6, 'Kompetensi Atau Kemampuan Petugas Dalam Pelayanan', '2024-05-14 05:41:59', '2024-05-14 05:41:59'),
(7, 'd0e51db8-ac70-4ce0-8a5d-1539a455a649', 7, 'Perilaku Petugas Dalam Pelayanan Terkait Kesopanan Dan Keramahan', '2024-05-14 05:42:15', '2024-05-14 05:42:15'),
(8, '10d7f1f5-a2cb-43a1-a72c-a516c49a0eee', 8, 'Kualitas Sarana Dan Prasarana', '2024-05-14 05:42:26', '2024-05-14 05:42:26'),
(9, 'cf8aacf3-055a-4202-8848-c16cb2039f03', 9, 'Penanganan Pengaduan Pengguna Layanan', '2024-05-14 05:42:39', '2024-05-14 05:42:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kuesioners_uuid_unique` (`uuid`),
  ADD KEY `kuesioners_unsur_id_foreign` (`unsur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD CONSTRAINT `kuesioners_unsur_id_foreign` FOREIGN KEY (`unsur_id`) REFERENCES `unsurs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
