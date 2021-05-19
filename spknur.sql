-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 10:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spknur`
--

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_balita` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `tinggi_badan` double(8,2) NOT NULL,
  `berat_badan` double(8,2) NOT NULL,
  `imt` double(8,2) NOT NULL,
  `tbu` double(8,2) NOT NULL,
  `bbu` double(8,2) NOT NULL,
  `bbtb` double(8,2) NOT NULL,
  `imtu` double(8,2) NOT NULL,
  `status_tbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_tbu` double(8,2) NOT NULL,
  `status_bbu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_bbu` double(8,2) NOT NULL,
  `status_bbtb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_bbtb` double(8,2) NOT NULL,
  `status_imtu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_imtu` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`id`, `id_balita`, `umur`, `tinggi_badan`, `berat_badan`, `imt`, `tbu`, `bbu`, `bbtb`, `imtu`, `status_tbu`, `bobot_tbu`, `status_bbu`, `bobot_bbu`, `status_bbtb`, `bobot_bbtb`, `status_imtu`, `bobot_imtu`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 71.00, 6.50, 12.89, 0.36, -1.89, -2.71, -2.72, 'Normal', 0.75, 'Normal', 0.75, 'Kurus', 0.50, 'Kurus', 0.50, '2021-04-28 08:24:48', '2021-04-28 08:24:48'),
(5, 2, 12, 77.00, 7.50, 12.65, 1.15, -1.40, -2.50, -2.68, 'Tinggi', 1.00, 'Normal', 0.75, 'Kurus', 0.50, 'Kurus', 0.50, '2021-04-28 08:50:39', '2021-04-28 08:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `bbtb`
--

CREATE TABLE `bbtb` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tinggi_badan` double(8,2) NOT NULL,
  `min3sd` double(8,2) NOT NULL,
  `min2sd` double(8,2) NOT NULL,
  `min1sd` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `plus1sd` double(8,2) NOT NULL,
  `plus2sd` double(8,2) NOT NULL,
  `plus3sd` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bbtb`
--

INSERT INTO `bbtb` (`id`, `tinggi_badan`, `min3sd`, `min2sd`, `min1sd`, `median`, `plus1sd`, `plus2sd`, `plus3sd`, `created_at`, `updated_at`) VALUES
(1, 45.00, 1.90, 2.10, 2.30, 2.50, 2.70, 3.00, 3.30, NULL, NULL),
(2, 45.50, 2.00, 2.10, 2.30, 2.50, 2.80, 3.10, 3.40, NULL, NULL),
(3, 46.00, 2.00, 2.20, 2.40, 2.60, 2.90, 3.20, 3.50, NULL, NULL),
(4, 46.50, 2.10, 2.30, 2.50, 2.70, 3.00, 3.30, 3.60, NULL, NULL),
(5, 47.00, 2.20, 2.40, 2.60, 2.80, 3.10, 3.40, 3.70, NULL, NULL),
(6, 47.50, 2.20, 2.40, 2.60, 2.90, 3.20, 3.50, 3.80, NULL, NULL),
(7, 48.00, 2.30, 2.50, 2.70, 3.00, 3.30, 3.60, 4.00, NULL, NULL),
(8, 48.50, 2.40, 2.60, 2.80, 3.10, 3.40, 3.70, 4.10, NULL, NULL),
(9, 49.00, 2.40, 2.60, 2.90, 3.20, 3.50, 3.80, 4.20, NULL, NULL),
(10, 49.50, 2.50, 2.70, 3.00, 3.30, 3.60, 3.90, 4.30, NULL, NULL),
(11, 50.00, 2.60, 2.80, 3.10, 3.40, 3.70, 4.00, 4.50, NULL, NULL),
(12, 50.50, 2.70, 2.90, 3.20, 3.50, 3.80, 4.20, 4.60, NULL, NULL),
(13, 51.00, 2.80, 3.00, 3.30, 3.60, 3.90, 4.30, 4.80, NULL, NULL),
(14, 51.50, 2.80, 3.10, 3.40, 3.70, 4.00, 4.40, 4.90, NULL, NULL),
(15, 52.00, 2.90, 3.20, 3.50, 3.80, 4.20, 4.60, 5.10, NULL, NULL),
(16, 52.50, 3.00, 3.30, 3.60, 3.90, 4.30, 4.70, 5.20, NULL, NULL),
(17, 53.00, 3.10, 3.40, 3.70, 4.00, 4.40, 4.90, 5.40, NULL, NULL),
(18, 53.50, 3.20, 3.50, 3.80, 4.20, 4.60, 5.00, 5.50, NULL, NULL),
(19, 54.00, 3.30, 3.60, 3.90, 4.30, 4.70, 5.20, 5.70, NULL, NULL),
(20, 54.50, 3.40, 3.70, 4.00, 4.40, 4.80, 5.30, 5.90, NULL, NULL),
(21, 55.00, 3.50, 3.80, 4.20, 4.50, 5.00, 5.50, 6.10, NULL, NULL),
(22, 55.50, 3.60, 3.90, 4.30, 4.70, 5.10, 5.70, 6.30, NULL, NULL),
(23, 56.00, 3.70, 4.00, 4.40, 4.80, 5.30, 5.80, 6.40, NULL, NULL),
(24, 56.50, 3.80, 4.10, 4.50, 5.00, 5.40, 6.00, 6.60, NULL, NULL),
(25, 57.00, 3.90, 4.30, 4.60, 5.10, 5.60, 6.10, 6.80, NULL, NULL),
(26, 57.50, 4.00, 4.40, 4.80, 5.20, 5.70, 6.30, 7.00, NULL, NULL),
(27, 58.00, 4.10, 4.50, 4.90, 5.40, 5.90, 6.50, 7.10, NULL, NULL),
(28, 58.50, 4.20, 4.60, 5.00, 5.50, 6.00, 6.60, 7.30, NULL, NULL),
(29, 59.00, 4.30, 4.70, 5.10, 5.60, 6.20, 6.80, 7.50, NULL, NULL),
(30, 59.50, 4.40, 4.80, 5.30, 5.70, 6.30, 6.90, 7.70, NULL, NULL),
(31, 60.00, 4.50, 4.90, 5.40, 5.90, 6.40, 7.10, 7.80, NULL, NULL),
(32, 60.50, 4.60, 5.00, 5.50, 6.00, 6.60, 7.30, 8.00, NULL, NULL),
(33, 61.00, 4.70, 5.10, 5.60, 6.10, 6.70, 7.40, 8.20, NULL, NULL),
(34, 61.50, 4.80, 5.20, 5.70, 6.30, 6.90, 7.60, 8.40, NULL, NULL),
(35, 62.00, 4.90, 5.30, 5.80, 6.40, 7.00, 7.70, 8.50, NULL, NULL),
(36, 62.50, 5.00, 5.40, 5.90, 6.50, 7.10, 7.80, 8.70, NULL, NULL),
(37, 63.00, 5.10, 5.50, 6.00, 6.60, 7.30, 8.00, 8.80, NULL, NULL),
(38, 63.50, 5.20, 5.60, 6.20, 6.70, 7.40, 8.10, 9.00, NULL, NULL),
(39, 64.00, 5.30, 5.70, 6.30, 6.90, 7.50, 8.30, 9.10, NULL, NULL),
(40, 64.50, 5.40, 5.80, 6.40, 7.00, 7.60, 8.40, 9.30, NULL, NULL),
(41, 65.00, 5.50, 5.90, 6.50, 7.10, 7.80, 8.60, 9.50, NULL, NULL),
(42, 65.50, 5.50, 6.00, 6.60, 7.20, 7.90, 8.70, 9.60, NULL, NULL),
(43, 66.00, 5.60, 6.10, 6.70, 7.30, 8.00, 8.80, 9.80, NULL, NULL),
(44, 66.50, 5.70, 6.20, 6.80, 7.40, 8.10, 9.00, 9.90, NULL, NULL),
(45, 67.00, 5.80, 6.30, 6.90, 7.50, 8.30, 9.10, 10.00, NULL, NULL),
(46, 67.50, 5.90, 6.40, 7.00, 7.60, 8.40, 9.20, 10.20, NULL, NULL),
(47, 68.00, 6.00, 6.50, 7.10, 7.70, 8.50, 9.40, 10.30, NULL, NULL),
(48, 68.50, 6.10, 6.60, 7.20, 7.90, 8.60, 9.50, 10.50, NULL, NULL),
(49, 69.00, 6.10, 6.70, 7.30, 8.00, 8.70, 9.60, 10.60, NULL, NULL),
(50, 69.50, 6.20, 6.80, 7.40, 8.10, 8.80, 9.70, 10.70, NULL, NULL),
(51, 70.00, 6.30, 6.90, 7.50, 8.20, 9.00, 9.90, 10.90, NULL, NULL),
(52, 70.50, 6.40, 6.90, 7.60, 8.30, 9.10, 10.00, 11.00, NULL, NULL),
(53, 71.00, 6.50, 7.00, 7.70, 8.40, 9.20, 10.10, 11.10, NULL, NULL),
(54, 71.50, 6.50, 7.10, 7.70, 8.50, 9.30, 10.20, 11.30, NULL, NULL),
(55, 72.00, 6.60, 7.20, 7.80, 8.60, 9.40, 10.30, 11.40, NULL, NULL),
(56, 72.50, 6.70, 7.30, 7.90, 8.70, 9.50, 10.50, 11.50, NULL, NULL),
(57, 73.00, 6.80, 7.40, 8.00, 8.80, 9.60, 10.60, 11.70, NULL, NULL),
(58, 73.50, 6.90, 7.40, 8.10, 8.90, 9.70, 10.70, 11.80, NULL, NULL),
(59, 74.00, 6.90, 7.50, 8.20, 9.00, 9.80, 10.80, 11.90, NULL, NULL),
(60, 74.50, 7.00, 7.60, 8.30, 9.10, 9.90, 10.90, 12.00, NULL, NULL),
(61, 75.00, 7.10, 7.70, 8.40, 9.10, 10.00, 11.00, 12.20, NULL, NULL),
(62, 75.50, 7.10, 7.80, 8.50, 9.20, 10.10, 11.10, 12.30, NULL, NULL),
(63, 76.00, 7.20, 7.80, 8.50, 9.30, 10.20, 11.20, 12.40, NULL, NULL),
(64, 76.50, 7.30, 7.90, 8.60, 9.40, 10.30, 11.40, 12.50, NULL, NULL),
(65, 77.00, 7.40, 8.00, 8.70, 9.50, 10.40, 11.50, 12.60, NULL, NULL),
(66, 77.50, 7.40, 8.10, 8.80, 9.60, 10.50, 11.60, 12.80, NULL, NULL),
(67, 78.00, 7.50, 8.20, 8.90, 9.70, 10.60, 11.70, 12.90, NULL, NULL),
(68, 78.50, 7.60, 8.20, 9.00, 9.80, 10.70, 11.80, 13.00, NULL, NULL),
(69, 79.00, 7.70, 8.30, 9.10, 9.90, 10.80, 11.90, 13.10, NULL, NULL),
(70, 79.50, 7.70, 8.40, 9.10, 10.00, 10.90, 12.00, 13.30, NULL, NULL),
(71, 80.00, 7.80, 8.50, 9.20, 10.10, 11.00, 12.10, 13.40, NULL, NULL),
(72, 80.50, 7.90, 8.60, 9.30, 10.20, 11.20, 12.30, 13.50, NULL, NULL),
(73, 81.00, 8.00, 8.70, 9.40, 10.30, 11.30, 12.40, 13.70, NULL, NULL),
(74, 81.50, 8.10, 8.80, 9.50, 10.40, 11.40, 12.50, 13.80, NULL, NULL),
(75, 82.00, 8.10, 8.80, 9.60, 10.50, 11.50, 12.60, 13.90, NULL, NULL),
(76, 82.50, 8.20, 8.90, 9.70, 10.60, 11.60, 12.80, 14.10, NULL, NULL),
(77, 83.00, 8.30, 9.00, 9.80, 10.70, 11.80, 12.90, 14.20, NULL, NULL),
(78, 83.50, 8.40, 9.10, 9.90, 10.90, 11.90, 13.10, 14.40, NULL, NULL),
(79, 84.00, 8.50, 9.20, 10.10, 11.00, 12.00, 13.20, 14.50, NULL, NULL),
(80, 84.50, 8.60, 9.30, 10.20, 11.10, 12.10, 13.30, 14.70, NULL, NULL),
(81, 85.00, 8.70, 9.40, 10.30, 11.20, 12.30, 13.50, 14.90, NULL, NULL),
(82, 85.50, 8.80, 9.50, 10.40, 11.30, 12.40, 13.60, 15.00, NULL, NULL),
(83, 86.00, 8.90, 9.70, 10.50, 11.50, 12.60, 13.80, 15.20, NULL, NULL),
(84, 86.50, 9.00, 9.80, 10.60, 11.60, 12.70, 13.90, 15.40, NULL, NULL),
(85, 87.00, 9.10, 9.90, 10.70, 11.70, 12.80, 14.10, 15.50, NULL, NULL),
(86, 87.50, 9.20, 10.00, 10.90, 11.80, 13.00, 14.20, 15.70, NULL, NULL),
(87, 88.00, 9.30, 10.10, 11.00, 12.00, 13.10, 14.40, 15.90, NULL, NULL),
(88, 88.50, 9.40, 10.20, 11.10, 12.10, 13.20, 14.50, 16.00, NULL, NULL),
(89, 89.00, 9.50, 10.30, 11.20, 12.20, 13.40, 14.70, 16.20, NULL, NULL),
(90, 89.50, 9.60, 10.40, 11.30, 12.30, 13.50, 14.80, 16.40, NULL, NULL),
(91, 90.00, 9.70, 10.50, 11.40, 12.50, 13.70, 15.00, 16.50, NULL, NULL),
(92, 90.50, 9.80, 10.60, 11.50, 12.60, 13.80, 15.10, 16.70, NULL, NULL),
(93, 91.00, 9.90, 10.70, 11.70, 12.70, 13.90, 15.30, 16.90, NULL, NULL),
(94, 91.50, 10.00, 10.80, 11.80, 12.80, 14.10, 15.50, 17.00, NULL, NULL),
(95, 92.00, 10.10, 10.90, 11.90, 13.00, 14.20, 15.60, 17.20, NULL, NULL),
(96, 92.50, 10.10, 11.00, 12.00, 13.10, 14.30, 15.80, 17.40, NULL, NULL),
(97, 93.00, 10.20, 11.10, 12.10, 13.20, 14.50, 15.90, 17.50, NULL, NULL),
(98, 93.50, 10.30, 11.20, 12.20, 13.30, 14.60, 16.10, 17.70, NULL, NULL),
(99, 94.00, 10.40, 11.30, 12.30, 13.50, 14.70, 16.20, 17.90, NULL, NULL),
(100, 94.50, 10.50, 11.40, 12.40, 13.60, 14.90, 16.40, 18.00, NULL, NULL),
(101, 95.00, 10.60, 11.50, 12.60, 13.70, 15.00, 16.50, 18.20, NULL, NULL),
(102, 95.50, 10.70, 11.60, 12.70, 13.80, 15.20, 16.70, 18.40, NULL, NULL),
(103, 96.00, 10.80, 11.70, 12.80, 14.00, 15.30, 16.80, 18.60, NULL, NULL),
(104, 96.50, 10.90, 11.80, 12.90, 14.10, 15.40, 17.00, 18.70, NULL, NULL),
(105, 97.00, 11.00, 12.00, 13.00, 14.20, 15.60, 17.10, 18.90, NULL, NULL),
(106, 97.50, 11.10, 12.10, 13.10, 14.40, 15.70, 17.30, 19.10, NULL, NULL),
(107, 98.00, 11.20, 12.20, 13.30, 14.50, 15.90, 17.50, 19.30, NULL, NULL),
(108, 98.50, 11.30, 12.30, 13.40, 14.60, 16.00, 17.60, 19.50, NULL, NULL),
(109, 99.00, 11.40, 12.40, 13.50, 14.80, 16.20, 17.80, 19.60, NULL, NULL),
(110, 99.50, 11.50, 12.50, 13.60, 14.90, 16.30, 18.00, 19.80, NULL, NULL),
(111, 100.00, 11.60, 12.60, 13.70, 15.00, 16.50, 18.10, 20.00, NULL, NULL),
(112, 100.50, 11.70, 12.70, 13.90, 15.20, 16.60, 18.30, 20.20, NULL, NULL),
(113, 101.00, 11.80, 12.80, 14.00, 15.30, 16.80, 18.50, 20.40, NULL, NULL),
(114, 101.50, 11.90, 13.00, 14.10, 15.50, 17.00, 18.70, 20.60, NULL, NULL),
(115, 102.00, 12.00, 13.10, 14.30, 15.60, 17.10, 18.90, 20.80, NULL, NULL),
(116, 102.50, 12.10, 13.20, 14.40, 15.80, 17.30, 19.00, 21.00, NULL, NULL),
(117, 103.00, 12.30, 13.30, 14.50, 15.90, 17.50, 19.20, 21.30, NULL, NULL),
(118, 103.50, 12.40, 13.50, 14.70, 16.10, 17.60, 19.40, 21.50, NULL, NULL),
(119, 104.00, 12.50, 13.60, 14.80, 16.20, 17.80, 19.60, 21.70, NULL, NULL),
(120, 104.50, 12.60, 13.70, 15.00, 16.40, 18.00, 19.80, 21.90, NULL, NULL),
(121, 105.00, 12.70, 13.80, 15.10, 16.50, 18.20, 20.00, 22.20, NULL, NULL),
(122, 105.50, 12.80, 14.00, 15.30, 16.70, 18.40, 20.20, 22.40, NULL, NULL),
(123, 106.00, 13.00, 14.10, 15.40, 16.90, 18.50, 20.50, 22.60, NULL, NULL),
(124, 106.50, 13.10, 14.30, 15.60, 17.10, 18.70, 20.70, 22.90, NULL, NULL),
(125, 107.00, 13.20, 14.40, 15.70, 17.20, 18.90, 20.90, 23.10, NULL, NULL),
(126, 107.50, 13.30, 14.50, 15.90, 17.40, 19.10, 21.10, 23.40, NULL, NULL),
(127, 108.00, 13.50, 14.70, 16.00, 17.60, 19.30, 21.30, 23.60, NULL, NULL),
(128, 108.50, 13.60, 14.80, 16.20, 17.80, 19.50, 21.60, 23.90, NULL, NULL),
(129, 109.00, 13.70, 15.00, 16.40, 18.00, 19.70, 21.80, 24.20, NULL, NULL),
(130, 109.50, 13.90, 15.10, 16.50, 18.10, 20.00, 22.00, 24.40, NULL, NULL),
(131, 110.00, 14.00, 15.30, 16.70, 18.30, 20.20, 22.30, 24.70, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bbu`
--

CREATE TABLE `bbu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umur` int(255) NOT NULL,
  `min3sd` double(8,2) NOT NULL,
  `min2sd` double(8,2) NOT NULL,
  `min1sd` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `plus1sd` double(8,2) NOT NULL,
  `plus2sd` double(8,2) NOT NULL,
  `plus3sd` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bbu`
--

INSERT INTO `bbu` (`id`, `umur`, `min3sd`, `min2sd`, `min1sd`, `median`, `plus1sd`, `plus2sd`, `plus3sd`) VALUES
(1, 0, 2.00, 2.40, 2.80, 3.20, 3.70, 4.20, 4.80),
(2, 1, 2.70, 3.20, 3.60, 4.20, 4.80, 5.50, 6.20),
(3, 2, 3.40, 3.90, 4.50, 5.10, 5.80, 6.60, 7.50),
(4, 3, 4.00, 4.50, 5.20, 5.80, 6.60, 7.50, 8.50),
(5, 4, 4.40, 5.00, 5.70, 6.40, 7.30, 8.20, 9.30),
(6, 5, 4.80, 5.40, 6.10, 6.90, 7.80, 8.80, 10.00),
(7, 6, 5.10, 5.70, 6.50, 7.30, 8.20, 9.30, 10.60),
(8, 7, 5.30, 6.00, 6.80, 7.60, 8.60, 9.80, 11.10),
(9, 8, 5.60, 6.30, 7.00, 7.90, 9.00, 10.20, 11.60),
(10, 9, 5.80, 6.50, 7.30, 8.20, 9.30, 10.50, 12.00),
(11, 10, 5.90, 6.70, 7.50, 8.50, 9.60, 10.90, 12.40),
(12, 11, 6.10, 6.90, 7.70, 8.70, 9.90, 11.20, 12.80),
(13, 12, 6.30, 7.00, 7.90, 8.90, 10.10, 11.50, 13.10),
(14, 13, 6.40, 7.20, 8.10, 9.20, 10.40, 11.80, 13.50),
(15, 14, 6.60, 7.40, 8.30, 9.40, 10.60, 12.10, 13.80),
(16, 15, 6.70, 7.60, 8.50, 9.60, 10.90, 12.40, 14.10),
(17, 16, 6.90, 7.70, 8.70, 9.80, 11.10, 12.60, 14.50),
(18, 17, 7.00, 7.90, 8.90, 10.00, 11.40, 12.90, 14.80),
(19, 18, 7.20, 8.10, 9.10, 10.20, 11.60, 13.20, 15.10),
(20, 19, 7.30, 8.20, 9.20, 10.40, 11.80, 13.50, 15.40),
(21, 20, 7.50, 8.40, 9.40, 10.60, 12.10, 13.70, 15.70),
(22, 21, 7.60, 8.60, 9.60, 10.90, 12.30, 14.00, 16.00),
(23, 22, 7.80, 8.70, 9.80, 11.10, 12.50, 14.30, 16.40),
(24, 23, 7.90, 8.90, 10.00, 11.30, 12.80, 14.60, 16.70),
(25, 24, 8.10, 9.00, 10.20, 11.50, 13.00, 14.80, 17.00),
(26, 25, 8.20, 9.20, 10.30, 11.70, 13.30, 15.10, 17.30),
(27, 26, 8.40, 9.40, 10.50, 11.90, 13.50, 15.40, 17.70),
(28, 27, 8.50, 9.50, 10.70, 12.10, 13.70, 15.70, 18.00),
(29, 28, 8.60, 9.70, 10.90, 12.30, 14.00, 16.00, 18.30),
(30, 29, 8.80, 9.80, 11.10, 12.50, 14.20, 16.20, 18.70),
(31, 30, 8.90, 10.00, 11.20, 12.70, 14.40, 16.50, 19.00),
(32, 31, 9.00, 10.10, 11.40, 12.90, 14.70, 16.80, 19.30),
(33, 32, 9.10, 10.30, 11.60, 13.10, 14.90, 17.10, 19.60),
(34, 33, 9.30, 10.40, 11.70, 13.30, 15.10, 17.30, 20.00),
(35, 34, 9.40, 10.50, 11.90, 13.50, 15.40, 17.60, 20.30),
(36, 35, 9.50, 10.70, 12.00, 13.70, 15.60, 17.90, 20.60),
(37, 36, 9.60, 10.80, 12.20, 13.90, 15.80, 18.10, 20.90),
(38, 37, 9.70, 10.90, 12.40, 14.00, 16.00, 18.40, 21.30),
(39, 38, 9.80, 11.10, 12.50, 14.20, 16.30, 18.70, 21.60),
(40, 39, 9.90, 11.20, 12.70, 14.40, 16.50, 19.00, 22.00),
(41, 40, 10.10, 11.30, 12.80, 14.60, 16.70, 19.20, 22.30),
(42, 41, 10.20, 11.50, 13.00, 14.80, 16.90, 19.50, 22.70),
(43, 42, 10.30, 11.60, 13.10, 15.00, 17.20, 19.80, 23.00),
(44, 43, 10.40, 11.70, 13.30, 15.20, 17.40, 20.10, 23.40),
(45, 44, 10.50, 11.80, 13.40, 15.30, 17.60, 20.40, 23.70),
(46, 45, 10.60, 12.00, 13.60, 15.50, 17.80, 20.70, 24.10),
(47, 46, 10.70, 12.10, 13.70, 15.70, 18.10, 20.90, 24.50),
(48, 47, 10.80, 12.20, 13.90, 15.90, 18.30, 21.20, 24.80),
(49, 48, 10.90, 12.30, 14.00, 16.10, 18.50, 21.50, 25.20),
(50, 49, 11.00, 12.40, 14.20, 16.30, 18.80, 21.80, 25.50),
(51, 50, 11.10, 12.60, 14.30, 16.40, 19.00, 22.10, 25.90),
(52, 51, 11.20, 12.70, 14.50, 16.60, 19.20, 22.40, 26.30),
(53, 52, 11.30, 12.80, 14.60, 16.80, 19.40, 22.60, 26.60),
(54, 53, 11.40, 12.90, 14.80, 17.00, 19.70, 22.90, 27.00),
(55, 54, 11.50, 13.00, 14.90, 17.20, 19.90, 23.20, 27.40),
(56, 55, 11.60, 13.20, 15.10, 17.30, 20.10, 23.50, 27.70),
(57, 56, 11.70, 13.30, 15.20, 17.50, 20.30, 23.80, 28.10),
(58, 57, 11.80, 13.40, 15.30, 17.70, 20.60, 24.10, 28.50),
(59, 58, 11.90, 13.50, 15.50, 17.90, 20.80, 24.40, 28.80),
(60, 59, 12.00, 13.60, 15.60, 18.00, 21.00, 24.60, 29.20),
(61, 60, 12.10, 13.70, 15.80, 18.20, 21.20, 24.90, 29.50);

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imtu`
--

CREATE TABLE `imtu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `min3sd` double(8,2) NOT NULL,
  `min2sd` double(8,2) NOT NULL,
  `min1sd` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `plus1sd` double(8,2) NOT NULL,
  `plus2sd` double(8,2) NOT NULL,
  `plus3sd` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imtu`
--

INSERT INTO `imtu` (`id`, `umur`, `min3sd`, `min2sd`, `min1sd`, `median`, `plus1sd`, `plus2sd`, `plus3sd`, `created_at`, `updated_at`) VALUES
(1, 0, 10.10, 11.10, 12.20, 13.30, 14.60, 16.10, 17.70, NULL, NULL),
(2, 1, 10.80, 12.00, 13.20, 14.60, 16.00, 17.50, 19.10, NULL, NULL),
(3, 2, 11.80, 13.00, 14.30, 15.80, 17.30, 19.00, 20.70, NULL, NULL),
(4, 3, 12.40, 13.60, 14.90, 16.40, 17.90, 19.70, 21.50, NULL, NULL),
(5, 4, 12.70, 13.90, 15.20, 16.70, 18.30, 20.00, 22.00, NULL, NULL),
(6, 5, 12.90, 14.10, 15.40, 16.80, 18.40, 20.20, 22.20, NULL, NULL),
(7, 6, 13.00, 14.10, 15.50, 16.90, 18.50, 20.30, 22.30, NULL, NULL),
(8, 7, 13.00, 14.20, 15.50, 16.90, 18.50, 20.30, 22.30, NULL, NULL),
(9, 8, 13.00, 14.10, 15.40, 16.80, 18.40, 20.20, 22.20, NULL, NULL),
(10, 9, 12.90, 14.10, 15.30, 16.70, 18.30, 20.10, 22.10, NULL, NULL),
(11, 10, 12.90, 14.00, 15.20, 16.60, 18.20, 19.90, 21.90, NULL, NULL),
(12, 11, 12.80, 13.90, 15.10, 16.50, 18.00, 19.80, 21.80, NULL, NULL),
(13, 12, 12.70, 13.80, 15.00, 16.40, 17.90, 19.60, 21.60, NULL, NULL),
(14, 13, 12.60, 13.70, 14.90, 16.20, 17.70, 19.50, 21.40, NULL, NULL),
(15, 14, 12.60, 13.60, 14.80, 16.10, 17.60, 19.30, 21.30, NULL, NULL),
(16, 15, 12.50, 13.50, 14.70, 16.00, 17.50, 19.20, 21.10, NULL, NULL),
(17, 16, 12.40, 13.50, 14.60, 15.90, 17.40, 19.10, 21.00, NULL, NULL),
(18, 17, 12.40, 13.40, 14.50, 15.80, 17.30, 18.90, 20.90, NULL, NULL),
(19, 18, 12.30, 13.30, 14.40, 15.70, 17.20, 18.80, 20.80, NULL, NULL),
(20, 19, 12.30, 13.30, 14.40, 15.70, 17.10, 18.80, 20.70, NULL, NULL),
(21, 20, 12.20, 13.20, 14.30, 15.60, 17.00, 18.70, 20.60, NULL, NULL),
(22, 21, 12.20, 13.20, 14.30, 15.50, 17.00, 18.60, 20.50, NULL, NULL),
(23, 22, 12.20, 13.10, 14.20, 15.50, 16.90, 18.50, 20.40, NULL, NULL),
(24, 23, 12.20, 13.10, 14.20, 15.40, 16.90, 18.50, 20.40, NULL, NULL),
(25, 24, 12.40, 13.30, 14.40, 15.70, 17.10, 18.70, 20.60, NULL, NULL),
(26, 25, 12.40, 13.30, 14.40, 15.70, 17.10, 18.70, 20.60, NULL, NULL),
(27, 26, 12.30, 13.30, 14.40, 15.60, 17.00, 18.70, 20.60, NULL, NULL),
(28, 27, 12.30, 13.30, 14.40, 15.60, 17.00, 18.60, 20.50, NULL, NULL),
(29, 28, 12.30, 13.30, 14.30, 15.60, 17.00, 18.60, 20.50, NULL, NULL),
(30, 29, 12.30, 13.20, 14.30, 15.60, 17.00, 18.60, 20.40, NULL, NULL),
(31, 30, 12.30, 13.20, 14.30, 15.50, 16.90, 18.50, 20.40, NULL, NULL),
(32, 31, 12.20, 13.20, 14.30, 15.50, 16.90, 18.50, 20.40, NULL, NULL),
(33, 32, 12.20, 13.20, 14.30, 15.50, 16.90, 18.50, 20.40, NULL, NULL),
(34, 33, 12.20, 13.10, 14.20, 15.50, 16.90, 18.50, 20.30, NULL, NULL),
(35, 34, 12.20, 13.10, 14.20, 15.40, 16.80, 18.50, 20.30, NULL, NULL),
(36, 35, 12.10, 13.10, 14.20, 15.40, 16.80, 18.40, 20.30, NULL, NULL),
(37, 36, 12.10, 13.10, 14.20, 15.40, 16.80, 18.40, 20.30, NULL, NULL),
(38, 37, 12.10, 13.10, 14.10, 15.40, 16.80, 18.40, 20.30, NULL, NULL),
(39, 38, 12.10, 13.00, 14.10, 15.40, 16.80, 18.40, 20.30, NULL, NULL),
(40, 39, 12.00, 13.00, 14.10, 15.30, 16.80, 18.40, 20.30, NULL, NULL),
(41, 40, 12.00, 13.00, 14.10, 15.30, 16.80, 18.40, 20.30, NULL, NULL),
(42, 41, 12.00, 13.00, 14.10, 15.30, 16.80, 18.40, 20.40, NULL, NULL),
(43, 42, 12.00, 12.90, 14.00, 15.30, 16.80, 18.40, 20.40, NULL, NULL),
(44, 43, 11.90, 12.90, 14.00, 15.30, 16.80, 18.40, 20.40, NULL, NULL),
(45, 44, 11.90, 12.90, 14.00, 15.30, 16.80, 18.50, 20.40, NULL, NULL),
(46, 45, 11.90, 12.90, 14.00, 15.30, 16.80, 18.50, 20.50, NULL, NULL),
(47, 46, 11.90, 12.90, 14.00, 15.30, 16.80, 18.50, 20.50, NULL, NULL),
(48, 47, 11.80, 12.80, 14.00, 15.30, 16.80, 18.50, 20.50, NULL, NULL),
(49, 48, 11.80, 12.80, 14.00, 15.30, 16.80, 18.50, 20.60, NULL, NULL),
(50, 49, 11.80, 12.80, 13.90, 15.30, 16.80, 18.50, 20.60, NULL, NULL),
(51, 50, 11.80, 12.80, 13.90, 15.30, 16.80, 18.60, 20.70, NULL, NULL),
(52, 51, 11.80, 12.80, 13.90, 15.30, 16.80, 18.60, 20.70, NULL, NULL),
(53, 52, 11.70, 12.80, 13.90, 15.20, 16.80, 18.60, 20.70, NULL, NULL),
(54, 53, 11.70, 12.70, 13.90, 15.30, 16.80, 18.60, 20.80, NULL, NULL),
(55, 54, 11.70, 12.70, 13.90, 15.30, 16.80, 18.70, 20.80, NULL, NULL),
(56, 55, 11.70, 12.70, 13.90, 15.30, 16.80, 18.70, 20.90, NULL, NULL),
(57, 56, 11.70, 12.70, 13.90, 15.30, 16.80, 18.70, 20.90, NULL, NULL),
(58, 57, 11.70, 12.70, 13.90, 15.30, 16.90, 18.70, 21.00, NULL, NULL),
(59, 58, 11.70, 12.70, 13.90, 15.30, 16.90, 18.80, 21.00, NULL, NULL),
(60, 59, 11.60, 12.70, 13.90, 15.30, 16.90, 18.80, 21.00, NULL, NULL),
(61, 60, 11.60, 12.70, 13.90, 15.30, 16.90, 18.80, 21.10, NULL, NULL);

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_04_09_004203_create_orangtua_table', 1),
(4, '2021_04_09_015736_create_balita_table', 1),
(5, '2021_04_24_051732_create_tbu_table', 2),
(6, '2021_04_24_052035_create_bbu_table', 2),
(7, '2021_04_24_052105_create_bbtb_table', 2),
(8, '2021_04_24_052135_create_imtu_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_balita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id`, `id_user`, `nama_ibu`, `nama_balita`, `jenis_kelamin`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 2, 'Asrila', 'Diluc', 'Laki-laki', '082255664477', 'Keluarahan Batulo', '2021-04-28 08:12:26', '2021-04-28 08:12:26'),
(2, 3, 'Anisa Fajri', 'Rosalia', 'Perempuan', '085744841299', 'Kelurahan Batulo', '2021-04-28 08:29:58', '2021-04-28 08:29:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbu`
--

CREATE TABLE `tbu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umur` int(11) NOT NULL,
  `min3sd` double(8,2) NOT NULL,
  `min2sd` double(8,2) NOT NULL,
  `min1sd` double(8,2) NOT NULL,
  `median` double(8,2) NOT NULL,
  `plus1sd` double(8,2) NOT NULL,
  `plus2sd` double(8,2) NOT NULL,
  `plus3sd` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbu`
--

INSERT INTO `tbu` (`id`, `umur`, `min3sd`, `min2sd`, `min1sd`, `median`, `plus1sd`, `plus2sd`, `plus3sd`, `created_at`, `updated_at`) VALUES
(1, 0, 43.60, 45.40, 47.30, 49.10, 51.00, 52.90, 54.70, NULL, NULL),
(2, 1, 47.80, 49.80, 51.70, 53.70, 55.60, 57.60, 59.50, NULL, NULL),
(3, 2, 51.00, 53.00, 55.00, 57.10, 59.10, 61.10, 63.20, NULL, NULL),
(4, 3, 53.50, 55.60, 57.70, 59.80, 61.90, 64.00, 66.10, NULL, NULL),
(5, 4, 55.60, 57.80, 59.90, 62.10, 64.30, 66.40, 68.60, NULL, NULL),
(6, 5, 57.40, 59.60, 61.80, 64.00, 66.20, 68.50, 70.70, NULL, NULL),
(7, 6, 58.90, 61.20, 63.50, 65.70, 68.00, 70.30, 72.50, NULL, NULL),
(8, 7, 60.30, 62.70, 65.00, 67.30, 69.60, 71.90, 74.20, NULL, NULL),
(9, 8, 61.70, 64.00, 66.40, 68.70, 71.10, 73.50, 75.80, NULL, NULL),
(10, 9, 62.90, 65.30, 67.70, 70.10, 72.60, 75.00, 77.40, NULL, NULL),
(11, 10, 64.10, 66.50, 69.00, 71.50, 73.90, 76.40, 78.90, NULL, NULL),
(12, 11, 65.20, 67.70, 70.30, 72.80, 75.30, 77.80, 80.30, NULL, NULL),
(13, 12, 66.30, 68.90, 71.40, 74.00, 76.60, 79.20, 81.70, NULL, NULL),
(14, 13, 67.30, 70.00, 72.60, 75.20, 77.80, 80.50, 83.10, NULL, NULL),
(15, 14, 68.30, 71.00, 73.70, 76.40, 79.10, 81.70, 84.40, NULL, NULL),
(16, 15, 69.30, 72.00, 74.80, 77.50, 80.20, 83.00, 85.70, NULL, NULL),
(17, 16, 70.20, 73.00, 75.80, 78.60, 81.40, 84.20, 87.00, NULL, NULL),
(18, 17, 71.10, 74.00, 76.80, 79.70, 82.50, 85.40, 88.20, NULL, NULL),
(19, 18, 72.00, 74.90, 77.80, 80.70, 83.60, 86.50, 89.40, NULL, NULL),
(20, 19, 72.80, 75.80, 78.80, 81.70, 84.70, 87.60, 90.60, NULL, NULL),
(21, 20, 73.70, 76.70, 79.70, 82.70, 85.70, 88.70, 91.70, NULL, NULL),
(22, 21, 74.50, 77.50, 80.60, 83.70, 86.70, 89.80, 92.90, NULL, NULL),
(23, 22, 75.20, 78.40, 81.50, 84.60, 87.70, 90.80, 94.00, NULL, NULL),
(24, 23, 76.00, 79.20, 82.30, 85.50, 88.70, 91.90, 95.00, NULL, NULL),
(25, 24, 76.70, 80.00, 83.20, 86.40, 89.60, 92.90, 96.10, NULL, NULL),
(26, 25, 76.80, 80.00, 83.30, 86.60, 89.90, 93.10, 96.40, NULL, NULL),
(27, 26, 77.50, 80.80, 84.10, 87.40, 90.80, 94.10, 97.40, NULL, NULL),
(28, 27, 78.10, 81.50, 84.90, 88.30, 91.70, 95.00, 98.40, NULL, NULL),
(29, 28, 78.80, 82.20, 85.70, 89.10, 92.50, 96.00, 99.40, NULL, NULL),
(30, 29, 79.50, 82.90, 86.40, 89.90, 93.40, 96.90, 100.30, NULL, NULL),
(31, 30, 80.10, 83.60, 87.10, 90.70, 94.20, 97.70, 101.30, NULL, NULL),
(32, 31, 80.70, 84.30, 87.90, 91.40, 95.00, 98.60, 102.20, NULL, NULL),
(33, 32, 81.30, 84.90, 88.60, 92.20, 95.80, 99.40, 103.10, NULL, NULL),
(34, 33, 81.90, 85.60, 89.30, 92.90, 96.60, 100.30, 103.90, NULL, NULL),
(35, 34, 82.50, 86.20, 89.90, 93.60, 97.40, 101.10, 104.80, NULL, NULL),
(36, 35, 83.10, 86.80, 90.60, 94.40, 98.10, 101.90, 105.60, NULL, NULL),
(37, 36, 83.60, 87.40, 91.20, 95.10, 98.90, 102.70, 106.50, NULL, NULL),
(38, 37, 84.20, 88.00, 91.90, 95.70, 99.60, 103.40, 107.30, NULL, NULL),
(39, 38, 84.70, 88.60, 92.50, 96.40, 100.30, 104.20, 108.10, NULL, NULL),
(40, 39, 85.30, 89.20, 93.10, 97.10, 101.00, 105.00, 108.90, NULL, NULL),
(41, 40, 85.80, 89.80, 93.80, 97.70, 101.70, 105.70, 109.70, NULL, NULL),
(42, 41, 86.30, 90.40, 94.40, 98.40, 102.40, 106.40, 110.50, NULL, NULL),
(43, 42, 86.80, 90.90, 95.00, 99.00, 103.10, 107.20, 111.20, NULL, NULL),
(44, 43, 87.40, 91.50, 95.60, 99.70, 103.80, 107.90, 112.00, NULL, NULL),
(45, 44, 87.90, 92.00, 96.20, 100.30, 104.50, 108.60, 112.70, NULL, NULL),
(46, 45, 88.40, 92.50, 96.70, 100.90, 105.10, 109.30, 113.50, NULL, NULL),
(47, 46, 88.90, 93.10, 97.30, 101.50, 105.80, 110.00, 114.20, NULL, NULL),
(48, 47, 89.30, 93.60, 97.90, 102.10, 106.40, 110.70, 114.90, NULL, NULL),
(49, 48, 89.80, 94.10, 98.40, 102.70, 107.00, 111.30, 115.70, NULL, NULL),
(50, 49, 90.30, 94.60, 99.00, 103.30, 107.70, 112.00, 116.40, NULL, NULL),
(51, 50, 90.70, 95.10, 99.50, 103.90, 108.30, 112.70, 117.10, NULL, NULL),
(52, 51, 91.20, 95.60, 100.10, 104.50, 108.90, 113.30, 117.70, NULL, NULL),
(53, 52, 91.70, 96.10, 100.60, 105.00, 109.50, 114.00, 118.40, NULL, NULL),
(54, 53, 92.10, 96.60, 101.10, 105.60, 110.10, 114.60, 119.10, NULL, NULL),
(55, 54, 92.60, 97.10, 101.60, 106.20, 110.70, 115.20, 119.80, NULL, NULL),
(56, 55, 93.00, 97.60, 102.20, 106.70, 111.30, 115.90, 120.40, NULL, NULL),
(57, 56, 93.40, 98.10, 102.70, 107.30, 111.90, 116.50, 121.10, NULL, NULL),
(58, 57, 93.90, 98.50, 103.20, 107.80, 112.50, 117.10, 121.80, NULL, NULL),
(59, 58, 94.30, 99.00, 103.70, 108.40, 113.00, 117.70, 122.40, NULL, NULL),
(60, 59, 94.70, 99.50, 104.20, 108.90, 113.60, 118.30, 123.10, NULL, NULL),
(61, 60, 95.20, 99.90, 104.70, 109.40, 114.20, 118.90, 123.70, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','orangtua') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', NULL, 'admin123', NULL, NULL, NULL),
(2, 'Dicky Agusputra', 'dicky@gmail.com', 'orangtua', NULL, 'dicky123', NULL, '2021-04-28 08:12:26', '2021-04-28 08:12:26'),
(3, 'Jihad Al Faris', 'jihad@gmail.com', 'orangtua', NULL, 'jihad123', NULL, '2021-04-28 08:29:58', '2021-04-28 08:29:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_balita` (`id_balita`);

--
-- Indexes for table `bbtb`
--
ALTER TABLE `bbtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bbu`
--
ALTER TABLE `bbu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imtu`
--
ALTER TABLE `imtu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbu`
--
ALTER TABLE `tbu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bbtb`
--
ALTER TABLE `bbtb`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `bbu`
--
ALTER TABLE `bbu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imtu`
--
ALTER TABLE `imtu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbu`
--
ALTER TABLE `tbu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balita`
--
ALTER TABLE `balita`
  ADD CONSTRAINT `balita_ibfk_1` FOREIGN KEY (`id_balita`) REFERENCES `orangtua` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD CONSTRAINT `orangtua_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
