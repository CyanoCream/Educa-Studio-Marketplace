-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 05:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `detail_orders`
--

CREATE TABLE `detail_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_order` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED DEFAULT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gambars`
--

INSERT INTO `gambars` (`id`, `created_at`, `updated_at`, `gambar`, `id_produk`) VALUES
(1, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'np5.jpeg', 1),
(2, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 'np1.jpeg', 2),
(3, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'np2.jpeg', 3),
(4, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'ak1.jpeg', 4),
(5, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'mp1.jpg', 5),
(6, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 's1.jpeg', 6),
(7, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'v1.jpg', 7),
(8, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 'le4.jpeg', 8),
(9, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'k1.jpeg', 9),
(10, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'g1.jpeg', 10),
(11, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 'akt1.jpeg', 11),
(12, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'k2.jpeg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hubungikamis`
--

CREATE TABLE `hubungikamis` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomorponsel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `created_at`, `updated_at`, `nama_kategori`) VALUES
(1, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 'Aktivitas'),
(2, '2022-08-10 17:00:00', '2022-08-11 17:00:00', 'Activity Kit'),
(3, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 'Pilihan'),
(4, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'Gratis'),
(5, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 'Kursus'),
(7, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'Video Learning'),
(8, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 'Experience'),
(9, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 'Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `qty_ker` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `packing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2022_08_08_040924_create_keranjangs_table', 1),
(5, '2022_08_08_041036_create_gambars_table', 1),
(6, '2022_08_08_041634_create_kategoris_table', 1),
(7, '2022_08_08_041926_create_varians_table', 1),
(8, '2022_08_08_042439_create_pelanggans_table', 1),
(9, '2022_08_08_042816_create_penyelenggaras_table', 1),
(10, '2022_08_08_043053_create_orders_table', 1),
(11, '2022_08_08_044216_create_pesertas_table', 1),
(12, '2022_08_08_044645_create_detail_orders_table', 1),
(13, '2022_08_09_033002_alter_produks_table', 1),
(14, '2022_08_09_063135_create_ulasans_table', 1),
(15, '2022_08_09_063150_create_pivot_ulasans_table', 1),
(16, '2022_08_10_023346_create_hubungikamis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `status_order` tinyint(1) NOT NULL DEFAULT 0,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_penyelenggara` int(10) UNSIGNED NOT NULL,
  `pengiriman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi_pen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kota_pen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan_pen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `id_pelanggan`, `status_order`, `id_produk`, `id_penyelenggara`, `pengiriman`, `kurir`, `alamat_pen`, `provinsi_pen`, `kota_pen`, `kecamatan_pen`, `jumlah_pesanan`) VALUES
(23, '2022-08-28 07:59:50', '2022-08-28 07:59:50', 1, 0, 1, 1, NULL, 'jnt', 'tidak tahu', NULL, NULL, NULL, 4);

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
-- Table structure for table `pelanggans`
--

CREATE TABLE `pelanggans` (
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

--
-- Dumping data for table `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `created_at`, `updated_at`, `foto`, `nama_pelanggan`, `no_telp`, `alamat_pel`, `provinsi_pel`, `kota_pel`, `kecamatan_pel`) VALUES
(1, '2022-08-18 04:04:05', '2022-08-03 04:04:05', '12', 'asdaf', '12324', 'dsfrgf', 'egdsf', 'fdhfbf', 'dfghtdhgf'),
(8, '2022-08-18 04:04:05', '2022-08-03 04:04:05', 'nn', 'nn', '000', 'nn', 'nn', 'nn', 'nn'),
(9, '2022-08-28 02:40:58', '2022-08-28 02:40:58', 'noimage.png', 'asfsfd', '112421', 'sdgfdgsg', 'grsgdg', 'rgrgfdh', 'dfgfdhdhd');

-- --------------------------------------------------------

--
-- Table structure for table `penyelenggaras`
--

CREATE TABLE `penyelenggaras` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota_penyelenggara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_operasional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyelenggaras`
--

INSERT INTO `penyelenggaras` (`id`, `created_at`, `updated_at`, `id_produk`, `nama_penyelenggara`, `icon_penyelenggara`, `kota_penyelenggara`, `deskripsi`, `jam_operasional`) VALUES
(1, '2022-07-07 07:47:21', '2022-07-05 07:47:21', 1, 'EnglishONE', 'https://kiddostorage.blob.core.windows.net/merchants/1495/1Logo-EnglishONE-Blue-1-thumbnail.jpg', 'Kota Madiun', 'As an English center, EnglishONE holds clear visions and realistic missions to deliver the best practice in English education.With multi services in English classes, EnglishONE has been recognized as a prestigious English center for almost a decade. Addit', '08.00'),
(2, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 2, 'EnglishONE', '	https://kiddostorage.blob.core.windows.net/merchants/1495/1Logo-EnglishONE-Blue-1-thumbnail.jpg', 'Kota Madiun', 'As an English center, EnglishONE holds clear visions and realistic missions to deliver the best practice in English education.With multi services in English classes, EnglishONE has been recognized as a prestigious English center for almost a decade. Addit', '-'),
(3, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 3, 'EnglishONE', '	https://kiddostorage.blob.core.windows.net/merchants/1495/1Logo-EnglishONE-Blue-1-thumbnail.jpg', 'Kota Madiun', 'As an English center, EnglishONE holds clear visions and realistic missions to deliver the best practice in English education.With multi services in English classes, EnglishONE has been recognized as a prestigious English center for almost a decade. Addit', '-'),
(4, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 8, 'Ruangmom', '	https://kiddostorage.blob.core.windows.net/merchan…-ruangmom_full__384%2520%25282%2529-thumbnail.png', 'Kabupaten Cirebon', 'Ruangmom adalah aplikasi pendamping Mom masa kini', '09:00:00'),
(5, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 4, 'Heptaco', '	https://kiddostorage.blob.core.windows.net/merchan…o-Logo%2520Heptaco%2520-%2520Square-thumbnail.png', 'Sleman', '-', '-'),
(6, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 5, 'Mr. BOS Junior', '	https://kiddostorage.blob.core.windows.net/merchants/1787/Logo-Mr-Bos-Junior-thumbnail.jpg', 'Jakarta Barat', 'Mr. BOS Junior -- PT. BOS Jasa Unggul -- mengasah skill English, Leadership dan Business u/ anak & remaja usia 5-17 tahun.\r\n\r\n\r\n\r\nBerdiri sejak 2016, kami memiliki murid aktif dan alumni sebanyak >200 orang, yg berasal dari sekolah Mis: Al-Azhar, Penabur,', '09:00:00'),
(7, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 6, 'Cakap', '	https://kiddostorage.blob.core.windows.net/wp-content/uploads/2020/07/logo-1020x1020-1.jpeg', '-', 'Cakap adalah sebuah perusahaan startup pengembang aplikasi edukasi teknologi asal Indonesia yang berfokus kepada pendidikan dua arah secara daring', '-'),
(8, '2022-08-03 17:00:00', '2022-08-05 17:00:00', 7, 'Learners Camp', 'https://kiddostorage.blob.core.windows.net/merchan…4/logo-microsoftteams-image-91-3055-thumbnail.png', 'Jakarta Selatan', 'Learners Camp by Kiddo.id merupakan kampus si kecil yang menghadirkan pengalaman pembelajaran tematik yang menyenangkan. Program ini disusun agar dapat sesuai dengan kecenderungan potensi terbaik dan juga sesuai dengan umur perkembangan anak masing-masing', '09:00:00'),
(9, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 9, 'Klinik Pintar', '	https://imagekiddo.s3.ap-southeast-1.amazonaws.com/merchants/3154/logo-Logo-thumbnail.png.png', 'Jakarta Selatan', 'Klinik Pintar merupakan jaringan klinik digital dan diresmikan Maret 2020. Kami percaya, pelayanan kesehatan yang terhubung, terstandarisasi, dan tepat sasaran adalah kunci mengatasi berbagai permasalahan industri kesehatan Indonesia. Kini, Klinik Pintar ', '-'),
(10, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 10, 'Surala Math Station', '	https://kiddostorage.blob.core.windows.net/merchan…A45D899-EEEA-4675-B826-CA109FAB02C9-thumbnail.png', 'Kota Bandung', 'Pembelajaran Online Matematika yang menyediakan materi pembelajaran bagi siswa sekolah dasar dengan menggunakan program terbaik yang dibuat oleh perusahaan terkemuka di Jepang, Surala Net. Program telah teruji dan dibuat khusus untuk membantu Ananda hebat', 'Senin sampai Jumat Jam 8.00 - 17.00 WIB'),
(11, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 11, 'BATIQUE', 'https://kiddostorage.blob.core.windows.net/merchants/3177/logo-title-thumbnail.png', 'Kota Bandung', 'Game based assessment untuk mengetahui keunikan setiap anak', '08.00 - 17.00'),
(12, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 12, 'Franc Studio', 'https://imagekiddo.s3.ap-southeast-1.amazonaws.com…43/profile-IMG-20220804-WA0004-thumbnail.jpg.jpeg', 'Jakarta Barat', 'Kelas kreativitas seni\r\n\r\nMenggambar, melukis, dan berkreasi seputar graphic desain dan fashion.', '-');

-- --------------------------------------------------------

--
-- Table structure for table `pesertas`
--

CREATE TABLE `pesertas` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `tgl_pembayaran` datetime NOT NULL,
  `jumlah_dana` int(11) NOT NULL,
  `nama_peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hubungan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pivot_ulasans`
--

CREATE TABLE `pivot_ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_ulasan` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `status_pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_temu` int(11) NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manfaat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bundling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `created_at`, `updated_at`, `id_kategori`, `nama_produk`, `harga_produk`, `status_pertemuan`, `stock`, `pertemuan`, `waktu_temu`, `umur`, `keterangan`, `manfaat`, `bundling`) VALUES
(1, '2022-07-07 07:47:21', '2022-08-08 17:00:00', 1, 'Kiddie English Kelas Bahasa Inggris Preschool & TK', 150000, 'Online', '10', '4x Satu Bulan', 75, '3-6 Tahun', 'Kelas Bahasa Inggris yang didesain khusus untuk kinder age (usia TK). Penuh dengan aktivitas interactive yang menarik. Dengan metode \"meaningful learning\", kiddie students akan menikmati aktivitas belajar sambil bermain secara online. Teacher kami mneggun', 'speaking & listening', 'E-certificate\r\nE-flashcard / learning tools'),
(2, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 3, 'Kindergarten English Course Power', 280000, 'Online', 'Terjual 32', '8x pertemuan', 75, '5-6 tahun', 'Merchant Festival, Kursus, Komunikasi', 'Kelas Bahasa Inggris yang didesain khusus untuk kinder age (usia TK). Penuh dengan aktivitas interactive yang menarik. Dengan metode \"meaningful learning\", kiddie students akan menikmati aktivitas belajar sambil bermain secara online. Teacher kami mneggun', '– E-certificate\r\n\r\n– E-flashcard / learning tools\r\n\r\n– E-worksheet\r\n– Harga untuk 8x meetings'),
(3, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 3, 'Private English Course Les Bahasa Inggris Privat', 450000, 'Online', 'Terjual 58', '2x Seminggu (8x Pertemuan)', 75, '3-12 tahun', 'Merchant Festival, Kursus, Kognitif, Komunikasi', 'Kelas bahasa Inggris privat online dengan kurikulum yang secara exclusive didesain untuk meningkatkan skill komunikasi bahasa Inggris. Kurikulum dan metode belajar kami sesuaikan dengan learning style masing-masing student. Sesi private kami memaksimalkan', 'E-certificate – E-flashcard / learning tools – E-worksheet – Harga untuk 8x meetings'),
(4, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 2, 'Natasha - Night Body Whitening Cream', 149925, 'Sleman', '-', 'Activity Kit', 0, 'Orang tua', 'Activity Kit, Lainnya', 'pelembab\r\npencerah kulit', '1x Natasha Night Body Whitening Cream 100gr.'),
(5, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 4, 'FREE 1 Month Trial - English - P3 (Mon and Wed) ', 0, 'Online', 'Tersedia kurang dari 10', '2x seminggu', 60, '7-8 tahun', 'Kursus, Gratis, Komunikasi', 'BOS Learning Benefits:\r\n\r\n1. CONFIDENT & FLUENT in English: Anak percaya diri dan lancar bahasa Inggris\r\n\r\n2. CAN READ: Anak belajar Phonics dan bisa baca dalam Inggris\r\n\r\n3. LEADERSHIP: Anak belajar pimpin diri sendiri (Misal: Anak bisa atur jadwal dia u', 'Kelas Online'),
(6, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 5, 'Superstar Package', 14970000, 'Online', '-', '6 Bulan', 50, '4-12 tahun\r\n', 'Kursus, Kognitif, Online, Komunikasi', 'Paket kursus bahasa Inggris selama 6 bulan untuk si buah hati, dengan metode belajar secara online memudahkan anak untuk belajar di rumah saja yang dapat diakses melalui website ataupun aplikasi. Jadikan si buah hati lancar berbahasa Inggris secara live l', 'Paket kursus bahasa Inggris selama 6 bulan'),
(7, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 7, 'Keterampilan Kreatif: Pandai Berbicara', 50000, 'Online', 'Terjual 3', 'Berlaku 30 Hari', 31, '6-12 tahun\r\n', 'Aktivitas, Video Learning, Komunikasi', '1. Mengembangkan kemampuan komunikasi anak\r\n\r\n2. Melatih kepercayaan diri anak\r\n\r\n3. Melatih anak untuk berbicara di depan umum\r\n4. Melatih fokus anak', '5 video pembelajaran interaktif (pre-recorded)\r\nPrintables'),
(8, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 8, 'Pijat Bayi (Unlimited 1 Bulan) - Medimom Clinic', 450000, 'Jakarta Selatan', '-', 'Berlaku 30 Hari', 60, '0-12 bulan\r\n', 'Experience, Perawatan, Lainnya', '-', 'Voucher merupakan membership untuk layanan pijat bayi (unlimited) selama 1 bulan\r\nVoucher dapat digunakan selama 1 bulan dan berlaku sejak tanggal pembelian'),
(9, '2022-07-31 17:00:00', '2022-08-02 17:00:00', 9, 'Vaksin DTP 2 - Homecare', 355000, 'Banyak Tempat', '-', 'Tentukan Tanggal', 60, '0-6 bulan\r\n', 'Kesehatan, Lainnya', 'Mencegah infeksi difteri yang menyebabkan penyumbatan jalan nafas, infeksi pertusis yang menyebabkan batuk rejan (batuk 100 hari), dan infeksi tetanus yang menyebabkan kaku dan kejang otot.', '1x VAKSIN PENTABIO 0.5 ML (VAK)**\r\n1x Konsultasi sebelum melakukan vaksinasi'),
(10, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 4, 'Surala trial Session - Coba Gratis Matematika', 0, 'Online', 'Tersedia kurang dari 10 | Terjual 4', 'Berlaku 60 Hari', 45, '5-15 tahun\r\n', 'Kursus, Gratis, Kognitif', 'Siswa belajar dengan kemampuan masing-masing\r\nSiswa belajar dengan kecepatan masing-masing\r\nSiswa dapat belajar materi baru\r\nSiswa mengerjakan banyak latihan soal dengan sistem penilaian real-time  \r\nSiswa mempunyai data belajar masing-masing\r\nBelajar Mat', '-'),
(11, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 1, 'BATIQUE Game Based Assessment Cognitive Test ', 123000, 'Online', '-', 'Tentukan Tanggal', 30, '6-13 tahun\r\n', 'Aktivitas, Kognitif, Sains, ', 'TeknologiMudah digunakan\r\nHasil laporan cepat\r\nBisa dilakukan kapanpun dan dimanapun selagi ada koneksi internet', 'Voucher untuk akses game\r\nUnique Report'),
(12, '2022-08-09 17:00:00', '2022-08-11 17:00:00', 5, 'Fashion Illustration Class', 825000, 'Online', '-', '2x Seminggu', 60, '9-15 tahun\r\n', 'Kursus, Seni Lukis', 'Menambah pengetahuan tentang dunia fashion', 'Kelas satu sesi selama 1 jam.\r\nHarga untuk 8 sesi/8 pertemuan.');

-- --------------------------------------------------------

--
-- Table structure for table `ulasans`
--

CREATE TABLE `ulasans` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nama', 'nama@n.m', '$2y$10$suOdIXoJcFBJjAm1gE6bQekEqNwQgfhfckPd0VRMRB1ynVdjZm59G', 'Gg3cfZYScJOo2gv0OlF4Mm3WVT255sXqWYrQRnaflh4qy8kgu3jYsWMoUfGb', '2022-08-27 20:32:18', '2022-08-27 20:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `varians`
--

CREATE TABLE `varians` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `nama_varian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_varian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_orders_id_order_foreign` (`id_order`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gambars_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `hubungikamis`
--
ALTER TABLE `hubungikamis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hubungikamis_id_pelanggan_foreign` (`id_pelanggan`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjangs_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_id_produk_foreign` (`id_produk`),
  ADD KEY `orders_id_penyelenggara_foreign` (`id_penyelenggara`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyelenggaras`
--
ALTER TABLE `penyelenggaras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penyelenggaras_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesertas_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `pivot_ulasans`
--
ALTER TABLE `pivot_ulasans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pivot_ulasans_id_ulasan_foreign` (`id_ulasan`),
  ADD KEY `pivot_ulasans_id_produk_foreign` (`id_produk`),
  ADD KEY `pivot_ulasans_id_pelanggan_foreign` (`id_pelanggan`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produks_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `ulasans`
--
ALTER TABLE `ulasans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `varians`
--
ALTER TABLE `varians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `varians_id_produk_foreign` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_orders`
--
ALTER TABLE `detail_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hubungikamis`
--
ALTER TABLE `hubungikamis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penyelenggaras`
--
ALTER TABLE `penyelenggaras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pivot_ulasans`
--
ALTER TABLE `pivot_ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ulasans`
--
ALTER TABLE `ulasans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `varians`
--
ALTER TABLE `varians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_orders`
--
ALTER TABLE `detail_orders`
  ADD CONSTRAINT `detail_orders_id_order_foreign` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `detail_orders_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `gambars`
--
ALTER TABLE `gambars`
  ADD CONSTRAINT `gambars_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `hubungikamis`
--
ALTER TABLE `hubungikamis`
  ADD CONSTRAINT `hubungikamis_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id`);

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id`),
  ADD CONSTRAINT `orders_id_penyelenggara_foreign` FOREIGN KEY (`id_penyelenggara`) REFERENCES `penyelenggaras` (`id`),
  ADD CONSTRAINT `orders_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `penyelenggaras`
--
ALTER TABLE `penyelenggaras`
  ADD CONSTRAINT `penyelenggaras_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `pesertas`
--
ALTER TABLE `pesertas`
  ADD CONSTRAINT `pesertas_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);

--
-- Constraints for table `pivot_ulasans`
--
ALTER TABLE `pivot_ulasans`
  ADD CONSTRAINT `pivot_ulasans_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggans` (`id`),
  ADD CONSTRAINT `pivot_ulasans_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`),
  ADD CONSTRAINT `pivot_ulasans_id_ulasan_foreign` FOREIGN KEY (`id_ulasan`) REFERENCES `ulasans` (`id`);

--
-- Constraints for table `produks`
--
ALTER TABLE `produks`
  ADD CONSTRAINT `produks_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `varians`
--
ALTER TABLE `varians`
  ADD CONSTRAINT `varians_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
