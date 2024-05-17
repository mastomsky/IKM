-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2024 pada 07.17
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `kuesioner_id` bigint(20) UNSIGNED NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `answer` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `answers`
--

INSERT INTO `answers` (`id`, `uuid`, `kuesioner_id`, `responden_id`, `answer`, `created_at`, `updated_at`) VALUES
(1, '04c77a0c-6974-4d02-8597-697e22b46b68', 1, 1, 3, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(2, '74f034a2-d8ba-4993-bf59-392d8d6e2b58', 2, 1, 2, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(3, '3adbc154-72fe-4732-95cc-e38818a6eb82', 3, 1, 3, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(4, 'b86c2ce9-9b29-4106-a5b7-446d854cf7f6', 4, 1, 4, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(5, '6a573f48-87bb-4004-b03a-70456d4d337b', 5, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(6, 'd55c8ca7-45cd-496f-827b-c946a8c76ada', 6, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(7, 'a770950e-bfc1-4e64-906f-47d81459ba83', 7, 1, 4, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(8, 'f1ef0341-d992-499d-8863-959603e51b5e', 8, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(9, '4270a5f1-a13f-4df0-aff9-ef697dc8f7dc', 9, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(10, '92156ff1-e5d7-4602-99b6-11422b8c7e86', 10, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(11, '50e01336-3705-406e-98b3-53c2d40f20b5', 11, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(12, '6496ff2f-b75d-4943-a1b7-307e5e97433f', 12, 1, 3, '2024-01-14 23:05:34', '2024-01-14 23:05:34'),
(13, '824942e7-d79b-4d21-87c6-927802c9a763', 13, 1, 4, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(14, '05424de5-6c1e-4730-9849-61ac7ce2968b', 14, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(15, 'd5cbe405-01f0-489f-b401-bd404db7f1ff', 15, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(16, '67089d3a-ef40-4e24-832a-941ec164a8a4', 16, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(17, '2fe18aaa-be23-4b81-b5b5-9b128f93c36c', 17, 1, 1, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(18, '1b04b5f1-4d7a-413c-a464-27800dd3adfc', 18, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(19, 'e9ebb755-4a23-41a0-8484-87a82327aedf', 19, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(20, '3f648c95-56d8-4b9c-b322-b95856d230e4', 20, 1, 4, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(21, 'd282e250-4a30-44e5-b8a5-7a8350e1bca3', 21, 1, 1, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(22, '1bf93d4d-b2f5-4d19-acf0-c2bac6805df3', 22, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(23, 'ba28a630-ee7e-4acd-916b-34d1938e176f', 23, 1, 1, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(24, 'd6c78146-eceb-49e4-a2d2-880b9533617d', 24, 1, 2, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(25, 'bc7cb8b8-daad-4140-a5e6-a7ca43328fed', 25, 1, 3, '2024-01-14 23:05:35', '2024-01-14 23:05:35'),
(26, '6cf652ad-3299-4f04-bf6d-1ca5726b3348', 26, 1, 4, '2024-01-14 23:05:36', '2024-01-14 23:05:36'),
(27, '9dc6fd86-cf0e-4037-ab50-6def18d541a1', 27, 1, 1, '2024-01-14 23:05:36', '2024-01-14 23:05:36'),
(28, 'd2da863a-f87c-4051-beca-173bb9fc70e7', 1, 2, 2, '2024-01-14 23:09:16', '2024-01-14 23:09:16'),
(29, '48e4fb1a-df40-412f-855f-7fe7dd6bd61b', 2, 2, 2, '2024-01-14 23:09:16', '2024-01-14 23:09:16'),
(30, 'b8d83bea-4513-496c-b641-f57f9413640b', 3, 2, 3, '2024-01-14 23:09:16', '2024-01-14 23:09:16'),
(31, 'ddf4976d-9913-4e95-be70-58f2da37b3f3', 4, 2, 2, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(32, '681f4135-5468-4978-b752-5eea3dea6c91', 5, 2, 3, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(33, 'cfd1a9f5-71ec-4c49-b457-4538ef34c3c1', 6, 2, 2, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(34, 'd3ee8157-9b27-4233-bbe7-1d55209030a3', 7, 2, 4, '2024-01-14 23:09:17', '2024-01-14 23:09:17'),
(35, '9253835e-c2c4-4c08-9c14-a88fa574dc2d', 8, 2, 4, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(36, 'e779806b-1cda-42aa-a0f3-e69abad19c3b', 9, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(37, 'fe997d17-090c-47ae-8641-cedbec74b420', 10, 2, 2, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(38, 'fef8b888-a410-4388-a45c-3c9cb8ec86f3', 11, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(39, 'bf3a6b56-13e4-44fb-bd19-3d56910c2ad3', 12, 2, 2, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(40, 'bc4385c5-17df-41c2-bd33-1f249b8e23d2', 13, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(41, '14f70d62-4766-48ae-867d-6249e188c86e', 14, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(42, '7c7c907e-e9e9-47ed-9e19-6ae20edcee91', 15, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(43, '5431ba8c-d126-4ff7-aaa2-ea24a7a4ae59', 16, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(44, 'e556a6dc-a682-4e71-a249-d8055776bb1b', 17, 2, 4, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(45, 'dafa00e8-ff08-49b4-9a3d-5925135a6509', 18, 2, 2, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(46, '5f71348c-573b-48c0-8ca9-af7a3841f21f', 19, 2, 3, '2024-01-14 23:09:18', '2024-01-14 23:09:18'),
(47, '289e6eb3-fae0-4f3e-a7cd-d7a39212bbab', 20, 2, 4, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(48, '7630c8b6-d363-4943-b2dd-90074c83e3a4', 21, 2, 3, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(49, '18917579-e540-41e7-b5f7-a28291872206', 22, 2, 4, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(50, 'ba1ae496-0dfa-4c99-83d5-09e82b32e2cb', 23, 2, 4, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(51, '887d9f8c-644f-4358-afae-bf430a9ae949', 24, 2, 3, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(52, '4ec3e5c1-2b07-4545-8fd9-8982324b2c0a', 25, 2, 2, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(53, 'fe9e5ffc-073d-417c-a820-d947aa8c9e96', 26, 2, 3, '2024-01-14 23:09:19', '2024-01-14 23:09:19'),
(54, 'd02d539b-e6a7-4e8d-8975-0b251de7ebe9', 27, 2, 2, '2024-01-14 23:09:19', '2024-01-14 23:09:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `responden_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `uuid`, `responden_id`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'acb67e0a-0a65-43d2-92b8-0a24bf959381', 1, 'Tolong perbaiki bagian pelayanan ya', '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(2, '66c810d4-7976-4cd4-ab56-14e6d9636042', 2, 'Masih banyak yang perlu di perbaiki, terutama saat menunggu pelayanan, mohon ruangan ber AC, dan dilengkapi dengan kursi pijit repleksi', '2024-01-14 23:09:16', '2024-01-14 23:09:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioners`
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
-- Dumping data untuk tabel `kuesioners`
--

INSERT INTO `kuesioners` (`id`, `uuid`, `unsur_id`, `question`, `created_at`, `updated_at`) VALUES
(1, '11508100-ff01-4202-a616-88efbcf1b9ad', 1, 'Seberapa jelas dan mudah dipahami persyaratan yang diberikan?', '2024-01-14 22:55:37', '2024-01-14 22:55:37'),
(2, '054628a9-23e1-4034-b000-0a807cc0aeda', 1, 'Apakah Anda mengalami kesulitan dalam memenuhi persyaratan yang ditetapkan?', '2024-01-14 22:55:55', '2024-01-14 22:55:55'),
(3, '5c0b7c17-a3c2-49eb-b86d-bfd5337a7d26', 1, 'Bagaimana tingkat kepuasan Anda terhadap informasi yang disediakan tentang persyaratan?', '2024-01-14 22:56:14', '2024-01-14 22:56:14'),
(4, '84356f8d-7cbb-4798-b17e-779002b03f5b', 2, 'Sejauh mana prosedur pelayanan terlihat efisien dan efektif bagi Anda?', '2024-01-14 22:56:30', '2024-01-14 22:56:30'),
(5, '6974f48f-07fa-4964-bf9e-31c3426ed0cb', 2, 'Apakah ada aspek prosedur yang menurut Anda perlu ditingkatkan atau disederhanakan?', '2024-01-14 22:56:43', '2024-01-14 22:56:43'),
(6, '35ccf79c-e4e1-4658-a754-d5f9ba1beb45', 2, 'Bagaimana pengalaman Anda dalam mengikuti prosedur pelayanan?', '2024-01-14 22:56:55', '2024-01-14 22:56:55'),
(7, '355f92c0-de11-4736-b9fc-8840a761258d', 3, 'Seberapa cepat pelayanan diberikan sesuai dengan waktu yang dijanjikan?', '2024-01-14 22:57:11', '2024-01-14 22:57:11'),
(8, 'a0ea5eb9-03f5-4a02-bd31-b8c8fbfc93a9', 3, 'Apakah ada peningkatan yang dapat dilakukan dalam mengurangi waktu tunggu?', '2024-01-14 22:57:23', '2024-01-14 22:57:23'),
(9, '1b7be547-ae6f-43bf-a8ea-610fff68fcb6', 3, 'Bagaimana tingkat kepuasan Anda terhadap kecepatan pelayanan yang diberikan?', '2024-01-14 22:57:35', '2024-01-14 22:57:35'),
(10, '91343c91-bfcb-4bb3-9b06-5ef43a20c089', 4, 'Apakah biaya yang dikenakan sesuai dengan kualitas pelayanan yang Anda terima?', '2024-01-14 22:57:50', '2024-01-14 22:57:50'),
(11, 'e03a88b8-1ba6-49ac-b729-230c0164334c', 4, 'Apakah ada klarifikasi yang diperlukan terkait dengan biaya tarif?', '2024-01-14 22:58:02', '2024-01-14 22:58:02'),
(12, '141bb390-47b0-4663-b71a-76d42c81c121', 4, 'Bagaimana tingkat kepuasan Anda terhadap nilai uang dari biaya yang dikeluarkan?', '2024-01-14 22:58:13', '2024-01-14 22:58:13'),
(13, '002e4bef-505a-4247-819d-cd59f471622a', 5, 'Apakah produk layanan yang diberikan memenuhi harapan Anda?', '2024-01-14 22:58:28', '2024-01-14 22:58:28'),
(14, '0264e4ba-9d67-444d-bd9d-1a466bdfc56e', 5, 'Apakah ada aspek khusus dari produk layanan yang menurut Anda perlu diperbaiki?', '2024-01-14 22:58:41', '2024-01-14 22:58:41'),
(15, 'de5247fd-0515-4c7e-8234-e2dea8a72a81', 5, 'Bagaimana tingkat kepuasan Anda terhadap variasi produk layanan yang ditawarkan?', '2024-01-14 22:58:58', '2024-01-14 22:58:58'),
(16, 'f23c6940-8c3f-450f-8633-28b2bca657d2', 6, 'Seberapa kompeten dan berpengetahuan para pelaksana dalam memberikan pelayanan?', '2024-01-14 22:59:12', '2024-01-14 22:59:12'),
(17, '3fefea20-2e34-4136-b812-5dcc3ad22ecf', 6, 'Apakah Anda merasa puas dengan tingkat keahlian para pelaksana?', '2024-01-14 22:59:25', '2024-01-14 22:59:25'),
(18, '460868fb-7d8a-47ec-bcc5-fc34e171a075', 6, 'Apakah ada area di mana pelaksana dapat meningkatkan kompetensinya?', '2024-01-14 22:59:36', '2024-01-14 22:59:36'),
(19, '2aa16fa2-ce75-4ec5-91fc-9528602ac94c', 7, 'Sejauh mana pelaksana memberikan pelayanan dengan sikap ramah dan profesional?', '2024-01-14 22:59:50', '2024-01-14 22:59:50'),
(20, '844c230b-7d49-4255-9db2-961c2a781219', 7, 'Apakah Anda pernah mengalami perilaku pelaksana yang tidak diinginkan?', '2024-01-14 23:00:04', '2024-01-14 23:00:04'),
(21, '1ead8b92-3d05-4853-9e60-18e6f293a40d', 7, 'Bagaimana tingkat kepuasan Anda terhadap interaksi dengan pelaksana?', '2024-01-14 23:00:17', '2024-01-14 23:00:17'),
(22, '7e32213f-0a7e-4b46-aedc-2cb852a20a89', 8, 'Bagaimana kualitas sarana dan prasarana yang disediakan untuk pelayanan?', '2024-01-14 23:00:30', '2024-01-14 23:00:30'),
(23, '232a6ebd-2fc3-426f-a882-cec97c5795ae', 8, 'Apakah ada fasilitas atau peralatan yang perlu diperbaiki atau ditingkatkan?', '2024-01-14 23:00:43', '2024-01-14 23:00:43'),
(24, '088a0579-f6ad-44c6-bf52-bb3f57576720', 8, 'Bagaimana tingkat kepuasan Anda terhadap kondisi sarana dan prasarana?', '2024-01-14 23:00:59', '2024-01-14 23:00:59'),
(25, 'f75abcf3-d46f-4513-aaff-5e32a9c41e5f', 9, 'Apakah Anda puas dengan cara pengaduan Anda ditangani?', '2024-01-14 23:01:16', '2024-01-14 23:01:16'),
(26, '99998a6d-29b2-4d50-8582-4ab4e32c540e', 9, 'Apakah ada saran yang dapat diberikan untuk meningkatkan proses penanganan pengaduan?', '2024-01-14 23:01:30', '2024-01-14 23:01:30'),
(27, '7b738ff6-3719-4ce7-9a8c-77097808a08d', 9, 'Bagaimana tingkat kepuasan Anda terhadap respons terhadap pengaduan yang Anda ajukan?', '2024-01-14 23:01:43', '2024-01-14 23:01:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2019_12_14_000002_create_unsurs_table', 1),
(6, '2023_09_27_175259_create_villages_table', 1),
(7, '2023_09_27_175260_create_kuesioners_table', 1),
(8, '2023_09_29_175629_create_respondens_table', 1),
(9, '2023_09_29_175758_create_answers_table', 1),
(10, '2023_10_01_081531_create_feedback_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `respondens`
--

CREATE TABLE `respondens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `village_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `respondens`
--

INSERT INTO `respondens` (`id`, `uuid`, `name`, `gender`, `age`, `education`, `job`, `village_id`, `created_at`, `updated_at`) VALUES
(1, 'efb2766b-3520-4a9c-a046-f329fe0ec474', 'ALFAZA INDRA', 'Laki-laki', 46, 'S1', 'Dosen', 1, '2024-01-14 23:05:33', '2024-01-14 23:05:33'),
(2, '4738c479-c39b-4285-89a8-2e7f82d08b63', 'NADIA KUMALASARI', 'Perempuan', 24, 'D3', 'Pedagang', 4, '2024-01-14 23:09:16', '2024-01-14 23:09:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unsurs`
--

CREATE TABLE `unsurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unsur` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `unsurs`
--

INSERT INTO `unsurs` (`id`, `unsur`, `created_at`, `updated_at`) VALUES
(1, 'Persyaratan', '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(2, 'Prosedur', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(3, 'Waktu Pelayanan', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(4, 'Biaya Tarif', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(5, 'Produk Layanan', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(6, 'Kompetensi Pelaksana', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(7, 'Perilaku Pelaksana', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(8, 'Sarana dan Prasarana', '2024-01-14 22:06:10', '2024-01-14 22:06:10'),
(9, 'Penanganan Pengaduan', '2024-01-14 22:06:10', '2024-01-14 22:06:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin IKM', 'admin@admin.com', '2024-01-14 22:06:08', '$2y$10$sXNXZXsMsuYmbHK4xJEDBuNL.WIB7G973R9epG6RDIims5eRT17gq', 'https://www.gravatar.com/avatar/5d4ee428568d05b22f3eb71c1a23ac03d16c046d5b1b2a4cb094d7f2a876f467', 'V0VpEa8Wfz', '2024-01-14 22:06:08', '2024-01-14 22:06:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `villages`
--

CREATE TABLE `villages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) NOT NULL,
  `village` varchar(25) NOT NULL,
  `allowDelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `villages`
--

INSERT INTO `villages` (`id`, `uuid`, `village`, `allowDelete`, `created_at`, `updated_at`) VALUES
(1, '937e2cbf-f91f-4bbb-b503-7ea7720bc61a', 'Moodulio', 0, '2024-01-14 22:06:08', '2024-01-14 22:06:08'),
(2, 'b494e896-f87e-4551-bd00-12989ba10d9f', 'Muara Bone', 0, '2024-01-14 22:06:08', '2024-01-14 22:06:08'),
(3, 'e6c0c9b0-b7d0-435e-91ff-250b689545f8', 'Masiaga', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(4, 'c0cc26f0-0503-48a0-aa89-eee325ae267e', 'Taludaa', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(5, '3232f364-9783-4a93-ad82-b4715e2e75c5', 'Permata', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(6, '5dddf09a-dbd8-4bb5-aa9d-8fd7b295f82d', 'Inogaluma', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(7, '9ea6a362-ad05-4625-8c12-a40ad4f2cfe0', 'Molamahu', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(8, '14700c5a-ae15-47b7-b57b-cd15ef7fa5b3', 'Sogitia', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(9, 'ecef7558-527b-4b80-8cf4-914ed49f5585', 'Cendana Putih', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(10, '3dabdac0-1017-4622-b6cb-280be2b75671', 'Monano', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(11, '208c0d54-fe4c-4a88-989f-56ddbf51ad3a', 'Tumbuh Mekar', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(12, '92628d48-a7e1-4ed0-91f8-fbd00c21bd28', 'Waluhu', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(13, '3bfaef38-b3f4-48ae-9ac9-ef04974c9397', 'Ilohuuwa', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09'),
(14, '494ac46a-4c24-4a77-afcc-fb7fc3a91e97', 'Bilolantunga', 0, '2024-01-14 22:06:09', '2024-01-14 22:06:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `answers_uuid_unique` (`uuid`),
  ADD KEY `answers_kuesioner_id_foreign` (`kuesioner_id`),
  ADD KEY `answers_responden_id_foreign` (`responden_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `feedback_uuid_unique` (`uuid`),
  ADD KEY `feedback_responden_id_foreign` (`responden_id`);

--
-- Indeks untuk tabel `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kuesioners_uuid_unique` (`uuid`),
  ADD KEY `kuesioners_unsur_id_foreign` (`unsur_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `respondens`
--
ALTER TABLE `respondens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `respondens_uuid_unique` (`uuid`),
  ADD KEY `respondens_village_id_foreign` (`village_id`);

--
-- Indeks untuk tabel `unsurs`
--
ALTER TABLE `unsurs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `villages_uuid_unique` (`uuid`),
  ADD UNIQUE KEY `villages_village_unique` (`village`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kuesioners`
--
ALTER TABLE `kuesioners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `respondens`
--
ALTER TABLE `respondens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `unsurs`
--
ALTER TABLE `unsurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `villages`
--
ALTER TABLE `villages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_kuesioner_id_foreign` FOREIGN KEY (`kuesioner_id`) REFERENCES `kuesioners` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_responden_id_foreign` FOREIGN KEY (`responden_id`) REFERENCES `respondens` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kuesioners`
--
ALTER TABLE `kuesioners`
  ADD CONSTRAINT `kuesioners_unsur_id_foreign` FOREIGN KEY (`unsur_id`) REFERENCES `unsurs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `respondens`
--
ALTER TABLE `respondens`
  ADD CONSTRAINT `respondens_village_id_foreign` FOREIGN KEY (`village_id`) REFERENCES `villages` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
