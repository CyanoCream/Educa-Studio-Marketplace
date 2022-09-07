-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 10:43 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `echild`
--

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
(3, '2022_08_08_040709_create_produks_table', 1),
(4, '2022_08_08_041036_create_gambars_table', 1),
(5, '2022_08_08_042439_create_pelanggans_table', 1),
(6, '2022_08_08_042816_create_penyelenggaras_table', 1),
(7, '2022_08_08_043053_create_orders_table', 1),
(8, '2022_08_08_044645_create_detail_orders_table', 1),
(9, '2022_08_09_063135_create_ulasans_table', 1),
(10, '2022_08_09_063150_create_pivot_ulasans_table', 1),
(11, '2022_08_10_023346_create_hubungikamis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_orders`
--

CREATE TABLE `tbl_detail_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(255) NOT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambars`
--

CREATE TABLE `tbl_gambars` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_gambars`
--

INSERT INTO `tbl_gambars` (`id`, `created_at`, `updated_at`, `gambar`, `id_produk`) VALUES
(1, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Kindergarten English Course Power.jpeg', 1),
(2, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Private English Course Les Bahasa Inggris Privat.jpeg\r\n', 2),
(3, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Program Trial Coding.jpg', 3),
(4, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'FREE 1 Month Trial - English - P3 (Mon and Wed).jpg\r\n', 4),
(5, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Promo USG 2D Klinik Ibu Anak Cinere.jpeg', 5),
(6, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Promo Vaksin BCG & MR - Klinik Ibu Anak Cinere.jpeg', 6),
(7, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Les Baca - Tulis - Hitung (CALISTUNG).jpg', 7),
(8, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'ENGLISH FOR KIDS - 4-6 YEARS OLD.jpg', 8),
(9, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Number Board Papan Angka.jpg\r\n', 9),
(10, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Nut n Bold Mur & Baut - Toddler.jpg\r\n', 10),
(11, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'Enak Berbakat  Membuat Sarapan Sendiri.jpg\r\n', 11),
(12, '2022-08-03 17:00:00', '2022-08-05 17:00:00', 'Keterampilan Kreatif Pandai Berbicara.jpg\r\n', 12),
(13, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Pijat Laktasi  Oksitosin - Klinik Bidan Asih.jpeg  \r\n', 13),
(14, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Baby Kids Spa - Klinik Bidan Asih.jpeg   \r\n', 14),
(15, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Vaksin Engerix B (Hep B) 0.5 ml Kiara Healthcare.jpeg\r\n', 15),
(16, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Natasha - Moisturizing Milk Cleanser.jpeg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungikamis`
--

CREATE TABLE `tbl_hubungikamis` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorponsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_order` tinyint(1) NOT NULL DEFAULT '0',
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_penyelenggara` int(10) UNSIGNED NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggans`
--

CREATE TABLE `tbl_pelanggans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_pel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_pel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_pel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penyelenggaras`
--

CREATE TABLE `tbl_penyelenggaras` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `icon_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_operasional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pivot_ulasans`
--

CREATE TABLE `tbl_pivot_ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ulasan` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produks`
--

CREATE TABLE `tbl_produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` char(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(255) NOT NULL,
  `pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_temu` int(11) NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manfaat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bundling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_produks`
--

INSERT INTO `tbl_produks` (`id`, `created_at`, `updated_at`, `kategori`, `nama_produk`, `harga_produk`, `status_pertemuan`, `stock`, `pertemuan`, `waktu_temu`, `umur`, `keterangan`, `manfaat`, `bundling`) VALUES
(1, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Pilihan', 'Kindergarten English Course Power', '280.000', 'Online', 20, '8x pertemuan', 75, '5-6 tahun', 'Kelas Bahasa Inggris yang didesain khusus untuk kinder age (usia TK). Penuh dengan aktivitas interactive yang menarik. Dengan metode \"meaningful learning\", kiddie students akan menikmati aktivitas belajar sambil bermain secara online. Teacher kami mneggun', 'Merchant Festival, Kursus, Komunikasi', '– E-certificate'),
(2, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Pilihan', 'Private English Course Les Bahasa Inggris Privat', '450.000', 'Online', 58, '8x Pertemuan\r\n', 75, '3-12 tahun\r\n', 'Merchant Festival, Kursus, Kognitif, Komunikasi', 'Kelas bahasa Inggris privat online dengan kurikulum yang secara exclusive didesain untuk meningkatkan skill komunikasi bahasa Inggris.', 'E-certificate – E-flashcard / learning tools – E-worksheet – Harga untuk 8x meetings'),
(3, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Gratis', 'Program Trial Coding (Belajar Coding Anak)\r\n', 'Gratis', 'Online', 10, '1x Pertemuan\r\n', 60, '5-15 tahun\r\n', 'Kursus, Kognitif, Teknologi, Gratis', 'Menambah kreativitas dan pola pikir anak', 'Materi pembelajaran\r\n'),
(4, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'Gratis', 'FREE 1 Month Trial - English - P3 (Mon and Wed) \r\n', 'Gratis', 'Online', 10, '2x seminggu\r\n', 60, '7-8 tahun\r\n', 'Kursus, Gratis, Komunikasi', 'CONFIDENT & FLUENT in English: Anak percaya diri dan lancar bahasa Inggris', 'Kelas Online\r\n\r\n'),
(5, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Aktivitas', 'Promo USG 2D Klinik Ibu Anak Cinere\r\n', '189.000', 'Depok', 12, 'Pilih Tanggal\r\n', 30, 'Orang tua\r\n', 'Aktivitas, Perawatan, Lainnya', 'Voucher termasuk biaya konsultasi ke dokter Obgyn dan print hasil USG', 'Voucher tidak termasuk obat/vitamin yang diresepkan'),
(6, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Aktivitas', 'Promo Vaksin BCG & MR - Klinik Ibu Anak Cinere\r\n', '75.000', 'Depok', 10, 'Pilih Tanggal\r\n', 30, 'Orang tua\r\n', 'Aktivitas, Perawatan, Lainnya', 'Voucher termasuk biaya promo vaksin BCG / MR', 'Voucher tidak termasuk obat/vitamin yang diresepkan'),
(7, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Kursus', 'Les Baca - Tulis - Hitung (CALISTUNG)\r\n', '150.000', 'Online', 11, '4x Pertemuan', 60, '3-8 tahun\r\n', 'Kursus, Kognitif', 'Difasilitasi oleh pengajar yang berpengalaman, dan didukung dengan materi pelajaran yang menyenangkan.', 'Materi pembelajaran untuk 4 sesi pertemuan les privat. 1 sesi berdurasi 45 - 60 menit.'),
(8, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Kursus', 'ENGLISH FOR KIDS - 4-6 YEARS OLD\r\n', '370.000', 'Online', 10, '2x seminggu', 60, '4-6 tahun', 'Kursus, Komunikasi, Kognitif', 'Dapat menggunakan bahasa Inggris sehari-hari dan membiasakan diri berbahasa Inggris aktif.', 'Harga termasuk PDF buku dan Monthly Report'),
(9, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Activity Kit', 'Number Board / Papan Angka (0-9)\r\n', '250.000', 'Kota Tangerang', 10, 'Activity Kit', 0, '3-5 tahun\r\n', 'Activity Kit, Kognitif, Motorik, Sensorik', 'Belajar menulis angka', 'Papan angka 0-9 dan 1 buah stand kayu'),
(10, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Activity Kit', 'Nut n Bold / Mur & Baut - Toddler\r\n', '200.000', 'Kota Tangerang', 10, 'Activity Kit', 0, '2-3 tahun\r\n', 'Activity Kit, Motorik', '- focus & concentration\r\n- fine motor skill', '2 buah nut n bold dengan baut yang berbeda bentuknya'),
(11, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'Video Learning', 'Enak Berbakat: Membuat Sarapan Sendiri\r\n', '50.000', 'Online', 5, 'Berlaku 30 Hari', 49, '3-8 tahun\r\n', 'Aktivitas, Video Learning, Kulinari', 'Menstimulasi kemampuan motorik halus dan kasar anak', '5 video pembelajaran interaktif (pre-recorded)'),
(12, '2022-08-03 17:00:00', '2022-08-05 17:00:00', 'Video Learning', 'Keterampilan Kreatif: Pandai Berbicara\r\n', '50.000', 'Online', 5, 'Berlaku 30 Hari', 31, '6-12 tahun\r\n', 'Aktivitas, Video Learning, Komunikasi', '1. Mengembangkan kemampuan komunikasi anak\r\n', '5 video pembelajaran interaktif (pre-recorded)'),
(13, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Experience', 'Pijat Laktasi / Oksitosin - Klinik Bidan Asih   \r\n', '120.000', 'Kota Tangerang', 5, 'Berlaku 30 Hari\r\n', 30, ' 2-5 tahun', 'Experience, Perawatan, Lainnya', 'Voucher merupakan layanan Baby / Kids Spa di Klinik Bidan Asih', 'Voucher sudah termasuk biaya administrasi'),
(14, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Experience', 'Baby Spa and Gym - Klinik Bidan Asih    \r\n', '150.000', 'Kota Tangerang', 10, 'Berlaku 30 Hari', 40, '0-12 bulan\r\n', 'Experience, Perawatan, Lainnya', 'Voucher merupakan layanan Baby Spa dan Gym di Klinik Bidan Asih', 'Voucher sudah termasuk biaya administrasi'),
(15, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Kesehatan', 'Vaksin Engerix B (Hep B) 0.5 ml Kiara Healthcare\r\n', '465.000', 'Jakarta Timur', 15, 'Berlaku 30 Hari', 30, 'Semua Umur\r\n', 'Kesehatan, Lainnya', 'Voucher termasuk biaya konsultasi, administrasi, BMHP dan suntik', 'Voucher termasuk biaya konsultasi, administrasi, BMHP dan suntik'),
(16, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Keluarga', 'Natasha - Moisturizing Milk Cleanser\r\n', '95.000', 'Sleman', 10, 'Activity Kit', 0, 'Orang tua\r\n', 'Keluarga, Lainnya', 'Membersihkan kotoran dan sisa make-up.', '1 x Natasha Moisturizing Milk Cleanser 150gr.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ulasans`
--

CREATE TABLE `tbl_ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penilaian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_detail_orders`
--
ALTER TABLE `tbl_detail_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_detail_orders_id_order_foreign` (`id_order`),
  ADD KEY `tbl_detail_orders_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `tbl_gambars`
--
ALTER TABLE `tbl_gambars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_gambars_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `tbl_hubungikamis`
--
ALTER TABLE `tbl_hubungikamis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_orders_id_produk_foreign` (`id_produk`),
  ADD KEY `tbl_orders_id_penyelenggara_foreign` (`id_penyelenggara`);

--
-- Indexes for table `tbl_pelanggans`
--
ALTER TABLE `tbl_pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penyelenggaras`
--
ALTER TABLE `tbl_penyelenggaras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_penyelenggaras_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `tbl_pivot_ulasans`
--
ALTER TABLE `tbl_pivot_ulasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_pivot_ulasans_id_ulasan_foreign` (`id_ulasan`),
  ADD KEY `tbl_pivot_ulasans_id_produk_foreign` (`id_produk`),
  ADD KEY `tbl_pivot_ulasans_id_pelanggan_foreign` (`id_pelanggan`);

--
-- Indexes for table `tbl_produks`
--
ALTER TABLE `tbl_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ulasans`
--
ALTER TABLE `tbl_ulasans`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_detail_orders`
--
ALTER TABLE `tbl_detail_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gambars`
--
ALTER TABLE `tbl_gambars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_hubungikamis`
--
ALTER TABLE `tbl_hubungikamis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pelanggans`
--
ALTER TABLE `tbl_pelanggans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penyelenggaras`
--
ALTER TABLE `tbl_penyelenggaras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pivot_ulasans`
--
ALTER TABLE `tbl_pivot_ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produks`
--
ALTER TABLE `tbl_produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_ulasans`
--
ALTER TABLE `tbl_ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_orders`
--
ALTER TABLE `tbl_detail_orders`
  ADD CONSTRAINT `tbl_detail_orders_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `tbl_orders` (`id`),
  ADD CONSTRAINT `tbl_detail_orders_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produks` (`id`);

--
-- Constraints for table `tbl_gambars`
--
ALTER TABLE `tbl_gambars`
  ADD CONSTRAINT `tbl_gambars_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produks` (`id`);

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_id_penyelenggara_foreign` FOREIGN KEY (`id_penyelenggara`) REFERENCES `tbl_penyelenggaras` (`id`),
  ADD CONSTRAINT `tbl_orders_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produks` (`id`);

--
-- Constraints for table `tbl_penyelenggaras`
--
ALTER TABLE `tbl_penyelenggaras`
  ADD CONSTRAINT `tbl_penyelenggaras_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produks` (`id`);

--
-- Constraints for table `tbl_pivot_ulasans`
--
ALTER TABLE `tbl_pivot_ulasans`
  ADD CONSTRAINT `tbl_pivot_ulasans_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `tbl_pelanggans` (`id`),
  ADD CONSTRAINT `tbl_pivot_ulasans_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produks` (`id`),
  ADD CONSTRAINT `tbl_pivot_ulasans_id_ulasan_foreign` FOREIGN KEY (`id_ulasan`) REFERENCES `tbl_ulasans` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
