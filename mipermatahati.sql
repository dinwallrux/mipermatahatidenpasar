-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: host.docker.internal
-- Generation Time: Dec 29, 2020 at 04:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mipermatahati`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama_foto`, `image`, `kategori`, `created_at`, `updated_at`) VALUES
(10, 'Nyatur', 'public/800716751.jpg', 'catur', '2020-12-22 16:49:01', '2020-12-22 17:04:21'),
(12, 'Gambar', 'public/288657357.jpg', 'mewarnai', '2020-12-22 17:07:01', '2020-12-22 17:07:01');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `excerpt`, `created_at`, `updated_at`) VALUES
(9, 'Lorem Ipsum', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; background-color: #ffffff;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\"><strong>Lorem ipsum dolor sit amet</strong>, <em>consectetur adipiscing elit. Maecenas vitae bibendum est,</em> tincidunt hendrerit mauris. Quisque sed turpis sit amet sapien accumsan ullamcorper. Aenean maximus tellus ac metus auctor, in varius justo tincidunt. Sed condimentum augue in felis rutrum, vitae elementum nunc pulvinar.</span></span></p>\r\n<!-- pagebreak -->\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; background-color: #ffffff;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\">Morbi pellentesque efficitur tortor ut cursus. Nulla facilisi. Proin imperdiet consequat malesuada. Ut accumsan aliquam tortor eget molestie. Curabitur semper dui id fermentum eleifend. Pellentesque vitae augue a sem cursus auctor. Proin eget commodo erat. Morbi malesuada eget orci vitae mattis. Fusce mattis sem et diam iaculis, at luctus tellus scelerisque. Quisque quam mi, cursus eu magna sed, placerat sagittis arcu. Quisque ultricies laoreet facilisis.</span></span></p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; background-color: #ffffff;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\">Nullam tempus purus at lectus fermentum viverra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis consectetur est sit amet ligula lobortis, bibendum hendrerit nibh sollicitudin. Ut ornare, neque eu dapibus sagittis, arcu diam interdum quam, a mollis ipsum risus et justo. Nunc dictum massa eget tincidunt gravida. Curabitur malesuada risus in laoreet laoreet. Nam nec consectetur sem, eu egestas ex.</span></span></p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; background-color: #ffffff;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus interdum imperdiet purus, id malesuada sem condimentum non. Phasellus tincidunt ante sit amet lorem pharetra eleifend. Praesent tellus ex, posuere eu nisl ac, mattis gravida turpis. Aenean non dolor eu quam semper convallis vitae non eros. Morbi condimentum odio dictum, eleifend enim quis, pretium libero. Donec suscipit feugiat turpis eget placerat. Praesent mi risus, eleifend rutrum commodo id, euismod non arcu. Donec eget purus magna. Curabitur vitae mattis mi, ut pretium risus. Duis ultrices hendrerit velit. Curabitur a enim eget mauris condimentum tempor. In risus mi, rhoncus sit amet rhoncus quis, condimentum ac augue. Praesent aliquet, tortor at tristique aliquet, eros mauris mollis ante, quis sagittis odio turpis ultricies nulla. Duis vestibulum odio a neque mattis faucibus vel a felis.</span></span></p>', '<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; background-color: #ffffff;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\"><strong>Lorem ipsum dolor sit amet</strong>, <em>consectetur adipiscing elit. Maecenas vitae bibendum est,</em> tincidunt hendrerit mauris. Quisque sed turpis sit amet sapien accumsan ullamcorper. Aenean maximus tellus ac metus auctor, in varius justo tincidunt. Sed condimentum augue in felis rutrum, vitae elementum nunc pulvinar.</span></span></p>\r\n', '2020-12-25 16:08:33', '2020-12-25 16:08:33'),
(11, 'Hello World', '<p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Maecenas vitae bibendum est, tincidunt hendrerit mauris. Quisque sed turpis sit amet sapien accumsan ullamcorper. Aenean maximus tellus ac metus auctor, in varius justo tincidunt. Sed condimentum augue in felis rutrum,<em> vitae elementum nunc pulvinar.</em></p>\r\n<!-- pagebreak -->\r\n<p><em><strong>Morbi pellentesque efficitur tortor ut cursus</strong></em>. Nulla facilisi. Proin imperdiet consequat malesuada. Ut accumsan aliquam tortor eget molestie. Curabitur semper dui id fermentum eleifend. Pellentesque vitae augue a sem cursus auctor. Proin eget commodo erat. Morbi malesuada eget orci vitae mattis. Fusce mattis sem et diam iaculis, at luctus tellus scelerisque. Quisque quam mi, cursus eu magna sed, placerat sagittis arcu. Quisque ultricies laoreet facilisis.</p>\r\n<h2 style=\"text-align: center;\">Hello World</h2>\r\n<p><em><strong>Nullam tempus purus</strong></em> at lectus fermentum viverra. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis consectetur est sit amet ligula lobortis, bibendum hendrerit nibh sollicitudin. Ut ornare, neque eu dapibus sagittis, arcu diam interdum quam, a mollis ipsum risus et justo. Nunc dictum massa eget tincidunt gravida. Curabitur malesuada risus in laoreet laoreet. Nam nec consectetur sem, eu egestas ex.</p>', '<p><strong>Lorem ipsum dolor sit amet,</strong> consectetur adipiscing elit. Maecenas vitae bibendum est, tincidunt hendrerit mauris. Quisque sed turpis sit amet sapien accumsan ullamcorper. Aenean maximus tellus ac metus auctor, in varius justo tincidunt. Sed condimentum augue in felis rutrum,<em> vitae elementum nunc pulvinar.</em></p>\r\n', '2020-12-25 16:15:05', '2020-12-25 16:19:16');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_10_132410_create_siswa_table', 1),
(5, '2020_12_13_053324_add_status_to_users_table', 1),
(6, '2020_12_13_120607_change_length_nik_in_siswa_table', 2),
(10, '2020_12_16_142151_create_guru_table', 3),
(11, '2020_12_19_115213_change_no_sk_data_type_in_guru_table', 4),
(18, '2020_12_20_111619_create_tenaga_pendidik_table', 5),
(20, '2020_12_21_130436_create_sarpras_ruang_table', 6),
(21, '2020_12_21_143035_create_galeri_table', 7),
(22, '2020_12_22_171030_create_informasi_table', 8),
(23, '2020_12_25_160207_add_excerpt_in_informasi_table', 9),
(25, '2020_12_26_071113_create_profil_sekolah_table', 10);

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
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npsn` bigint(20) DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akreditasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kurikulum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_guru` int(11) DEFAULT NULL,
  `jumlah_siswa_laki_laki` int(11) DEFAULT NULL,
  `jumlah_siswa_perempuan` int(11) DEFAULT NULL,
  `kepala_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id`, `nama_sekolah`, `npsn`, `alamat`, `status_sekolah`, `akreditasi`, `kurikulum`, `jumlah_guru`, `jumlah_siswa_laki_laki`, `jumlah_siswa_perempuan`, `kepala_sekolah`, `created_at`, `updated_at`) VALUES
(1, 'MI Permata Hati Denpasar', 20202317, '8689 Carolina Cliffs Suite 013Port Julia, ME 19555-2539', 'negeri', 'B', 'K-13', 21, 178, 241, 'Annisa', '2020-12-26 07:31:46', '2020-12-26 12:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras_ruang`
--

CREATE TABLE `sarpras_ruang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_prasarana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ruang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lantai_ke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kapasitas` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sarpras_ruang`
--

INSERT INTO `sarpras_ruang` (`id`, `jenis_prasarana`, `nama_ruang`, `lantai_ke`, `jumlah_ruangan`, `kapasitas`, `created_at`, `updated_at`) VALUES
(1, 'ruang kelas/teori', 'Kelas 1A', '2', '4', 30, '2020-12-21 14:28:20', '2020-12-21 14:28:51'),
(2, 'ruang uks', 'Sydnee Ridges', '9', '9', 29, '2020-12-21 14:28:20', '2020-12-21 14:28:20'),
(3, 'lab komputer', 'Bernice Inlet', '8', '8', 29, '2020-12-21 14:28:20', '2020-12-21 14:28:20'),
(4, 'ruang perpustakaan', 'Homenick Bypass', '9', '4', 30, '2020-12-21 14:28:20', '2020-12-21 14:28:20'),
(5, 'ruang guru', 'Andreane Passage', '6', '9', 30, '2020-12-21 14:28:20', '2020-12-21 14:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tingkat_kelas_saat_ini` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rombel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `jenis_kelamin`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `tingkat_kelas_saat_ini`, `rombel`, `tanggal_masuk`, `alamat`, `agama`, `nama_ayah`, `nama_ibu`, `created_at`, `updated_at`) VALUES
(3, 'Miss Elissa Frami', 'P', 1234567890, 12345678901234567, 'Denpasar', '2002-01-15', 'kelas 2', 'kelas 4C', '1975-01-15', '3993 Langosh Courts Suite 215North Burnice, MN 23033', 'islam', 'Lou Franecki', 'Sarah', '2020-12-13 12:14:06', '2020-12-16 08:58:59'),
(4, 'Sam Witting DDS', 'P', 1234567890, 12345678901234567, 'Banyuwangi', '2005-09-17', 'Kelas 1', 'Kelas 1A', '2017-11-10', '3308 Savion Roads\nPort Brownmouth, HI 13855-5761', 'Islam', 'Emiliano Auer', 'Kiera Gulgowski', '2020-12-13 12:14:06', '2020-12-13 12:14:06'),
(5, 'Grady Jacobson MD', 'L', 1234567890, 12345678901234567, 'Denpasar', '1989-06-12', 'Kelas 1', 'Kelas 1B', '2018-01-24', '54872 Greenholt Island Apt. 929\nMorissettehaven, CO 79948-5274', 'Islam', 'Lizeth Osinski', 'Miss Sincere Carroll DVM', '2020-12-22 17:28:49', '2020-12-22 17:28:49'),
(6, 'Jeffry Paucek', 'L', 1234567890, 12345678901234567, 'Jakarta', '1978-09-26', 'Kelas 1', 'Kelas 6', '2007-08-03', '742 Fay Burg Suite 627\nAlannaland, GA 16680', 'Islam', 'Westley Casper', 'Bryce Wehner', '2020-12-22 17:28:49', '2020-12-22 17:28:49'),
(7, 'Prof. Dalton Cronin', 'L', 1234567890, 12345678901234567, 'Denpasar', '2002-06-27', 'Kelas 1', 'Kelas 4', '1999-04-18', '832 Meggie Islands\nPort Precious, ID 61987-7697', 'Islam', 'Dr. Sierra Lemke', 'Claude Paucek', '2020-12-22 17:28:49', '2020-12-22 17:28:49'),
(8, 'Adrien Zulauf IV', 'L', 1234567890, 12345678901234567, 'Denpasar', '1982-09-07', 'Kelas 1', 'Kelas 4', '1989-08-28', '760 Glover Locks Suite 214\nSouth Myraborough, MN 05390', 'Islam', 'Nathanael Rutherford', 'Esperanza Kuhn', '2020-12-22 17:28:49', '2020-12-22 17:28:49'),
(9, 'Haylee White', 'L', 1234567890, 12345678901234567, 'Jakarta', '1982-03-27', 'Kelas 1', 'Kelas 4', '1998-06-06', '9756 Melisa Parkway Apt. 885\nNew Oswaldostad, LA 16889-9726', 'Islam', 'Dameon Bergstrom', 'Colby Franecki', '2020-12-22 17:28:49', '2020-12-22 17:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tenaga_pendidik`
--

CREATE TABLE `tenaga_pendidik` (
  `id_tenaga_pendidik` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` bigint(20) DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nama_ibu_kandung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_tendik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` bigint(20) DEFAULT NULL,
  `nuptk` bigint(20) DEFAULT NULL,
  `jenis_ptk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_pengangkatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_pengangkatan` date DEFAULT NULL,
  `lembaga_pengangkat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk_cpns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `sumber_gaji` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenaga_pendidik`
--

INSERT INTO `tenaga_pendidik` (`id_tenaga_pendidik`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nama_ibu_kandung`, `alamat`, `agama`, `pendidikan_terakhir`, `jenis_tendik`, `status_pegawai`, `nip`, `nuptk`, `jenis_ptk`, `sk_pengangkatan`, `tmt_pengangkatan`, `lembaga_pengangkat`, `sk_cpns`, `tmt_cpns`, `sumber_gaji`, `no_telepon`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Felton Stokes', 12345678901234567, 'P', 'banyuwangi', '2001-01-16', 'Andrew Nienow I', '229 Hermiston Cliff Apt. 960\nNorth Steveberg, FL 28362-7755', 'islam', 'sma', 'gtk', 'gtt/ptt kab/kota', 123456789012345678, 12345678901234, 'laboran', '20/YPHP/VIII/2014', '2002-08-07', 'ketua yayasan', '', '1977-08-11', 'apbd provinsi', '324.909.8351', 'walker.paige@hotmail.com', '2020-12-20 14:02:59', '2020-12-20 14:02:59'),
(2, 'Bell Cranel', 12345678901234567, 'L', 'Bali', '1988-10-20', 'Richie Roberts', '599 Waino Fords Apt. 429Margaritaport, VT 57543', 'islam', 's1', 'ptk', 'guru honor sekolah', 123456789012345678, 12345678901234, 'laboran', '101/YPHP/VII/2018', '2002-05-04', 'pemerintah pusat', NULL, NULL, 'sekolah', '081226432', 'bell@wilkinson.org', '2020-12-20 14:02:59', '2020-12-20 17:32:05'),
(3, 'Kathlyn Zulauf', 12345678901234567, 'L', 'jakarta', '1985-02-09', 'Augustine Rodriguez II', '910 Rachael EstatesMarquiseborough, SC 01823-7403', 'islam', 's1', 'ptk', 'pns diperbentukan', 123456789012345678, 12345678901234, 'kepala sekolah', '101/YPHP/VII/2018', '2004-01-14', 'ketua yayasan', NULL, '1976-12-18', 'sekolah', '098187483', 'gwaelchi@stokes.org', '2020-12-20 14:02:59', '2020-12-20 17:32:54'),
(4, 'Monique Christiansen', 12345678901234567, 'P', 'jakarta', '1988-07-07', 'Ms. Meda Renner', '356 Emard Curve\nNew Janelle, SC 22392', 'islam', 's1', 'gtk', 'cpns', 123456789012345678, 12345678901234, 'laboran', '101/YPHP/VII/2018', '2006-07-31', 'pemerintah provinsi', '58/YPHP/VIII/2016', '1997-05-12', 'yayasan', '(648) 717-5458 x918', 'tyrell.kozey@mohr.net', '2020-12-20 14:02:59', '2020-12-20 14:02:59'),
(12, 'Maldo', 7362473, 'L', 'Jawa', '2020-01-02', 'Yuli', 'Jl Alamat', 'islam', 'sma/smk', 'gtk', 'gty/pty', 827483, 2374932, 'tenaga administrasi sekolah', '10/2020', '2020-01-01', 'komite sekolah', '823438246', '2020-01-31', 'sekolah', '08127637', 'joko@mail.com', '2020-12-20 16:47:33', '2020-12-20 17:30:12');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$qvzObWXYzTLxnACi4YjOyuHeGbeqH9gd5R6BwCMwf5Qj3vkstmuya', NULL, '2020-12-13 13:07:43', '2020-12-13 13:07:43', 'operator'),
(2, 'pengguna', 'pengguna@mail.com', NULL, '$2y$10$DL/..rMkpgorWWIgsEiDMOxIsPinFAxDlyb7POmBENofBpiMPwo8y', NULL, '2020-12-16 14:02:37', '2020-12-16 14:02:37', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarpras_ruang`
--
ALTER TABLE `sarpras_ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenaga_pendidik`
--
ALTER TABLE `tenaga_pendidik`
  ADD PRIMARY KEY (`id_tenaga_pendidik`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sarpras_ruang`
--
ALTER TABLE `sarpras_ruang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tenaga_pendidik`
--
ALTER TABLE `tenaga_pendidik`
  MODIFY `id_tenaga_pendidik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;