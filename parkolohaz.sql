-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Máj 01. 09:55
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `parkolohaz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `berles`
--

CREATE TABLE `berles` (
  `jarmu_id` bigint(20) UNSIGNED NOT NULL,
  `foglalas_datuma` datetime NOT NULL DEFAULT '2024-04-30 15:08:49',
  `foglalas_kezdet` date NOT NULL,
  `foglalas_vege` date NOT NULL,
  `ar_id` bigint(20) UNSIGNED NOT NULL,
  `kedvezmeny_id` bigint(20) UNSIGNED NOT NULL,
  `hely_id` bigint(20) UNSIGNED NOT NULL,
  `fizetve` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- A tábla adatainak kiíratása `berles`
--

INSERT INTO `berles` (`jarmu_id`, `foglalas_datuma`, `foglalas_kezdet`, `foglalas_vege`, `ar_id`, `kedvezmeny_id`, `hely_id`, `fizetve`, `created_at`, `updated_at`) VALUES
(1, '2024-04-30 12:21:10', '2024-04-30', '2025-08-07', 7, 2, 55, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(1, '2024-04-30 13:43:35', '2024-04-30', '2025-10-01', 2, 3, 38, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(1, '2024-04-30 14:45:52', '2024-05-08', '2026-01-08', 8, 10, 37, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(2, '2024-04-30 12:36:38', '2024-05-04', '2024-06-11', 10, 11, 4, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(2, '2024-04-30 12:56:29', '2024-05-09', '2026-10-10', 10, 12, 12, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(2, '2024-04-30 14:09:50', '2024-05-04', '2026-12-15', 1, 11, 49, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(3, '2024-04-30 13:41:50', '2024-05-07', '2026-04-29', 5, 12, 24, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, '2024-04-30 12:35:51', '2024-05-04', '2026-08-02', 3, 11, 34, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, '2024-04-30 13:40:08', '2024-05-02', '2026-10-23', 1, 4, 56, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, '2024-04-30 13:48:33', '2024-05-07', '2026-01-01', 9, 2, 35, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, '2024-04-30 14:36:09', '2024-05-02', '2027-04-05', 5, 11, 25, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(5, '2024-04-30 13:57:47', '2024-05-08', '2025-11-17', 5, 10, 56, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(5, '2024-04-30 13:58:14', '2024-05-04', '2025-12-31', 4, 8, 35, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(5, '2024-04-30 14:44:34', '2024-05-10', '2025-08-27', 10, 10, 40, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, '2024-04-30 12:33:56', '2024-05-10', '2026-06-16', 4, 8, 42, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, '2024-04-30 12:36:53', '2024-05-02', '2024-05-22', 8, 12, 34, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, '2024-04-30 14:08:09', '2024-05-10', '2025-07-06', 3, 11, 42, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, '2024-04-30 14:43:17', '2024-05-02', '2024-10-06', 9, 11, 21, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(7, '2024-04-30 13:21:44', '2024-05-05', '2027-04-09', 10, 8, 13, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(7, '2024-04-30 13:57:27', '2024-05-10', '2024-05-26', 1, 11, 21, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(7, '2024-04-30 14:30:32', '2024-05-05', '2024-09-22', 11, 10, 57, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(8, '2024-04-30 13:20:44', '2024-05-03', '2025-06-07', 4, 9, 69, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(8, '2024-04-30 13:59:39', '2024-05-05', '2026-04-05', 5, 12, 5, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '2024-04-30 12:40:11', '2024-05-10', '2025-05-16', 1, 1, 70, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '2024-04-30 12:41:07', '2024-05-04', '2025-01-15', 11, 12, 16, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '2024-04-30 13:19:46', '2024-05-02', '2025-12-08', 11, 1, 48, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '2024-04-30 14:04:19', '2024-05-09', '2025-01-20', 6, 3, 71, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '2024-04-30 14:53:52', '2024-05-01', '2026-07-11', 7, 9, 63, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '2024-04-30 15:07:49', '2024-05-07', '2024-06-12', 9, 8, 69, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 12:18:06', '2024-05-02', '2025-10-01', 11, 7, 47, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 12:27:43', '2024-05-07', '2024-08-26', 8, 6, 4, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 13:07:40', '2024-05-04', '2026-10-29', 8, 7, 9, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 13:23:53', '2024-05-01', '2026-10-05', 4, 5, 31, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 14:13:33', '2024-05-05', '2025-04-02', 11, 9, 71, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 14:32:21', '2024-05-04', '2024-12-27', 9, 10, 3, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '2024-04-30 15:03:16', '2024-05-09', '2025-08-05', 10, 9, 17, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(11, '2024-04-30 12:53:55', '2024-05-04', '2025-09-29', 7, 12, 62, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(11, '2024-04-30 13:35:23', '2024-05-06', '2027-01-01', 9, 8, 18, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(11, '2024-04-30 14:31:08', '2024-05-01', '2025-01-10', 4, 6, 17, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, '2024-04-30 13:04:28', '2024-05-10', '2026-02-04', 7, 10, 34, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, '2024-04-30 13:51:23', '2024-05-07', '2025-06-04', 1, 5, 15, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, '2024-04-30 14:03:21', '2024-05-10', '2024-09-12', 9, 12, 70, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, '2024-04-30 14:42:29', '2024-05-01', '2026-03-28', 2, 9, 60, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, '2024-04-30 15:01:46', '2024-04-30', '2024-06-11', 9, 1, 10, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 12:23:18', '2024-05-08', '2027-04-07', 9, 11, 6, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 13:00:14', '2024-05-05', '2025-10-05', 6, 3, 72, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 13:06:05', '2024-05-07', '2026-04-22', 11, 2, 65, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 13:35:51', '2024-05-04', '2025-02-09', 10, 9, 10, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 13:49:25', '2024-05-10', '2025-08-20', 7, 8, 51, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 14:17:28', '2024-05-05', '2026-10-19', 7, 1, 2, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 14:24:01', '2024-05-05', '2026-04-24', 9, 8, 62, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, '2024-04-30 14:47:46', '2024-05-08', '2026-10-12', 9, 4, 36, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(14, '2024-04-30 12:11:31', '2024-05-06', '2025-03-06', 7, 6, 11, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(14, '2024-04-30 12:37:09', '2024-05-07', '2024-06-15', 10, 7, 56, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(15, '2024-04-30 13:41:45', '2024-05-09', '2026-11-18', 11, 7, 50, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(15, '2024-04-30 14:08:31', '2024-05-01', '2025-01-02', 7, 10, 48, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(15, '2024-04-30 14:47:24', '2024-05-08', '2025-12-03', 2, 1, 51, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(16, '2024-04-30 12:36:14', '2024-05-02', '2025-11-28', 1, 4, 20, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(16, '2024-04-30 13:19:30', '2024-05-09', '2026-12-19', 6, 2, 26, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(16, '2024-04-30 14:14:47', '2024-05-03', '2026-01-04', 11, 4, 64, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(16, '2024-04-30 14:35:32', '2024-05-09', '2024-05-24', 1, 9, 26, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(16, '2024-04-30 14:38:24', '2024-05-01', '2027-04-26', 9, 7, 70, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(17, '2024-04-30 14:19:18', '2024-05-08', '2027-02-16', 5, 2, 46, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(17, '2024-04-30 14:32:24', '2024-04-30', '2026-02-18', 3, 10, 57, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(17, '2024-04-30 14:32:50', '2024-05-03', '2025-12-03', 9, 8, 59, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(17, '2024-04-30 14:35:17', '2024-05-03', '2024-05-13', 7, 6, 59, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(17, '2024-04-30 14:42:25', '2024-05-02', '2024-09-28', 10, 6, 25, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(18, '2024-04-30 12:45:55', '2024-05-10', '2024-07-26', 9, 4, 11, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(18, '2024-04-30 13:28:54', '2024-05-02', '2025-09-18', 8, 11, 11, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(18, '2024-04-30 14:49:19', '2024-05-02', '2025-08-10', 1, 12, 64, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(18, '2024-04-30 14:51:37', '2024-05-02', '2024-10-13', 5, 2, 50, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(19, '2024-04-30 12:11:09', '2024-05-02', '2024-12-24', 11, 10, 11, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(19, '2024-04-30 12:14:54', '2024-05-07', '2026-07-12', 10, 11, 33, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(19, '2024-04-30 14:36:14', '2024-05-10', '2024-06-29', 11, 4, 40, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(19, '2024-04-30 14:43:25', '2024-05-02', '2025-09-06', 9, 7, 32, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(20, '2024-04-30 12:52:27', '2024-05-02', '2025-11-18', 9, 3, 68, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(20, '2024-04-30 13:34:43', '2024-05-06', '2026-06-13', 3, 2, 53, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(21, '2024-04-30 12:15:24', '2024-05-08', '2025-12-16', 2, 8, 26, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(21, '2024-04-30 12:48:36', '2024-05-04', '2026-11-02', 2, 4, 55, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, '2024-04-30 12:35:01', '2024-04-30', '2024-05-28', 7, 6, 4, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, '2024-04-30 12:44:30', '2024-05-06', '2024-08-24', 7, 12, 25, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, '2024-04-30 12:50:20', '2024-05-07', '2027-03-23', 9, 4, 64, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, '2024-04-30 13:41:57', '2024-04-30', '2024-07-07', 8, 12, 51, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, '2024-04-30 14:11:11', '2024-05-07', '2026-10-07', 8, 11, 14, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, '2024-04-30 14:50:05', '2024-05-02', '2024-11-28', 4, 11, 59, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(23, '2024-04-30 12:26:04', '2024-05-07', '2026-06-02', 10, 12, 8, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(23, '2024-04-30 12:59:16', '2024-05-05', '2026-10-22', 7, 1, 22, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(23, '2024-04-30 13:24:15', '2024-05-07', '2025-12-09', 8, 11, 13, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(24, '2024-04-30 12:52:29', '2024-05-06', '2025-02-09', 7, 2, 70, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(24, '2024-04-30 13:28:04', '2024-05-07', '2025-09-12', 1, 2, 36, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(25, '2024-04-30 13:32:32', '2024-05-05', '2026-09-25', 7, 6, 35, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(25, '2024-04-30 13:43:09', '2024-05-07', '2025-01-28', 6, 4, 24, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(25, '2024-04-30 14:10:38', '2024-05-04', '2025-09-20', 10, 9, 45, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(25, '2024-04-30 14:17:19', '2024-05-01', '2025-11-03', 3, 5, 55, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(25, '2024-04-30 14:52:10', '2024-05-06', '2025-01-08', 10, 10, 36, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(26, '2024-04-30 14:23:21', '2024-05-06', '2024-10-19', 11, 9, 19, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(26, '2024-04-30 14:33:14', '2024-05-06', '2025-11-01', 8, 4, 56, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(26, '2024-04-30 14:35:31', '2024-05-04', '2025-09-04', 6, 6, 23, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(26, '2024-04-30 14:54:13', '2024-05-02', '2025-01-08', 2, 5, 32, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(26, '2024-04-30 14:56:55', '2024-05-04', '2025-05-26', 7, 8, 27, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `failed_jobs`
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
-- Tábla szerkezet ehhez a táblához `jarmu`
--

CREATE TABLE `jarmu` (
  `jarmu_id` bigint(20) UNSIGNED NOT NULL,
  `rendszam` char(8) NOT NULL,
  `felhasznalok_id` bigint(20) UNSIGNED NOT NULL,
  `jarmu_tipus` bigint(20) UNSIGNED NOT NULL,
  `generalt_azon` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- A tábla adatainak kiíratása `jarmu`
--

INSERT INTO `jarmu` (`jarmu_id`, `rendszam`, `felhasznalok_id`, `jarmu_tipus`, `generalt_azon`, `created_at`, `updated_at`) VALUES
(1, 'UXFJ275', 19, 4, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(2, 'PBFF758', 3, 2, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(3, 'OPEM614', 5, 4, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(4, 'ENTA444', 14, 1, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(5, 'GPYK823', 3, 4, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(6, 'OORT094', 19, 1, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(7, 'MIPA856', 14, 3, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(8, 'PUTY331', 8, 3, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(9, 'ALRG938', 4, 3, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(10, 'RWYO401', 12, 4, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(11, 'RRCK786', 16, 4, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(12, 'VPJI745', 1, 3, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(13, 'DBGK635', 11, 2, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(14, 'LXZD375', 3, 1, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(15, 'MJMB566', 2, 2, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(16, 'FTWF177', 18, 3, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(17, 'XOTJ478', 7, 2, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(18, 'MUSX942', 9, 2, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(19, 'ZWPZ021', 10, 1, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(20, 'EQRE246', 19, 3, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(21, 'RUYP283', 14, 2, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(22, 'CHXE771', 2, 2, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(23, 'OQBR479', 3, 4, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(24, 'NFYI708', 18, 1, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(25, 'AFRK355', 11, 4, 1, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(26, 'ABC123', 21, 1, 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kedvezmenyek`
--

CREATE TABLE `kedvezmenyek` (
  `kedvezmeny_id` bigint(20) UNSIGNED NOT NULL,
  `megnevezes` varchar(50) NOT NULL,
  `hatartol` int(11) NOT NULL,
  `hatarig` int(11) DEFAULT NULL,
  `mikortol` datetime NOT NULL,
  `meddig` datetime DEFAULT NULL,
  `merteke` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- A tábla adatainak kiíratása `kedvezmenyek`
--

INSERT INTO `kedvezmenyek` (`kedvezmeny_id`, `megnevezes`, `hatartol`, `hatarig`, `mikortol`, `meddig`, `merteke`, `created_at`, `updated_at`) VALUES
(1, '24-es alap kedvezmény', 0, 7, '2024-01-01 00:00:00', NULL, 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(2, '24-es alap kedvezmény', 8, 14, '2024-01-01 00:00:00', NULL, 5, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(3, '24-es alap kedvezmény', 15, 29, '2024-01-01 00:00:00', NULL, 10, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, '24-es alap kedvezmény', 30, NULL, '2024-01-01 00:00:00', NULL, 15, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(5, '23-as Karácsonyi', 0, 7, '2023-12-01 00:00:00', '2023-12-31 00:00:00', 5, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, '23-as Karácsonyi', 8, 14, '2023-12-01 00:00:00', '2023-12-31 00:00:00', 10, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(7, '23-as Karácsonyi', 15, 29, '2023-12-01 00:00:00', '2023-12-31 00:00:00', 15, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(8, '23-as Karácsonyi', 30, NULL, '2023-12-01 00:00:00', '2023-12-31 00:00:00', 20, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, '23-as alap kedvezmény', 0, 7, '2023-01-01 00:00:00', '2023-11-30 00:00:00', 0, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, '23-as alap kedvezmény', 8, 14, '2023-01-01 00:00:00', '2023-11-30 00:00:00', 4, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(11, '23-as alap kedvezmény', 15, 29, '2023-01-01 00:00:00', '2023-11-30 00:00:00', 8, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, '23-as alap kedvezmény', 30, NULL, '2023-01-01 00:00:00', '2023-11-30 00:00:00', 15, '2024-04-30 13:08:51', '2024-04-30 13:08:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_01_26_183230_create_tipus_table', 1),
(5, '2024_01_26_183302_create_felhasznalo_table', 1),
(6, '2024_01_26_183331_create_napi_arak_table', 1),
(7, '2024_01_26_183341_create_kedvezmenyek_table', 1),
(8, '2024_01_26_183352_create_parkolohely_table', 1),
(9, '2024_01_26_183415_create_jarmu_table', 1),
(10, '2024_01_26_183422_create_berles_table', 1),
(11, '2024_03_08_112828_trg_check_mikortol_date', 1),
(12, '2024_03_08_173000_trg_foglalas_kezdete_nem_lehet_kisebb_az_aktualis_napnal', 1),
(13, '2024_03_30_140700_trg_kedvezmeny_mikortol_nagyobb_mint_ma', 1),
(14, '2024_03_30_142628_trg_parkolohely_torlese', 1),
(15, '2024_04_06_143221_trg_m_parkolohely', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `napi_arak`
--

CREATE TABLE `napi_arak` (
  `ar_id` bigint(20) UNSIGNED NOT NULL,
  `megnevezes` varchar(50) NOT NULL,
  `ar` int(11) NOT NULL,
  `mikortol` date NOT NULL,
  `tipus` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- A tábla adatainak kiíratása `napi_arak`
--

INSERT INTO `napi_arak` (`ar_id`, `megnevezes`, `ar`, `mikortol`, `tipus`, `created_at`, `updated_at`) VALUES
(1, 'Fogassa el. - Mialatt úton volt, megváltoztattuk.', 707, '2022-04-30', 3, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(2, 'Négy óra lehetett. Az időjárás enyhült. A.', 821, '2022-07-06', 4, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(3, 'Van még ötven év körüli, loholó rendőrt, hogy.', 729, '2022-08-22', 4, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, 'Vidám volt egészséges, és szereti nagyon a.', 411, '2022-10-11', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(5, 'Hej kocsmáros! Az egész birodalom asz én.', 636, '2022-12-21', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, 'Törzse oszlopnyi combokon nyugodott. Húsos.', 846, '2023-02-11', 4, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(7, 'Először életében futott, de most nem tudom, hogy.', 448, '2023-04-14', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(8, 'A sarkon, az út keresztezésénél, fáklyák fénye.', 587, '2023-06-10', 4, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, 'Ha megölnek, akkor csakugyan kísértet. De ebbe.', 646, '2023-08-01', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, 'Nem hallotta, mit mesélt Bonifác, akit Fülig.', 447, '2023-09-12', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(11, 'Ördög. - Csakugyan tejfölösképű alak. Jókora.', 413, '2023-10-29', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `parkolohely`
--

CREATE TABLE `parkolohely` (
  `hely_id` bigint(20) UNSIGNED NOT NULL,
  `hely_tipusa` bigint(20) UNSIGNED NOT NULL,
  `statusz` char(1) NOT NULL DEFAULT 's',
  `emelet` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `parkolohely`
--

INSERT INTO `parkolohely` (`hely_id`, `hely_tipusa`, `statusz`, `emelet`, `created_at`, `updated_at`) VALUES
(1, 4, 'b', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(2, 4, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(3, 4, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(4, 4, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:09:06'),
(5, 4, 'b', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(6, 4, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(7, 3, 'S', 1, '2024-04-30 13:08:51', '2024-04-30 13:14:55'),
(8, 3, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(9, 3, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(10, 3, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(11, 3, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(12, 3, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(13, 3, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(14, 3, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:17:08'),
(15, 3, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(16, 3, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(17, 1, 'b', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(18, 1, 'b', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(19, 1, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(20, 2, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(21, 2, 'b', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(22, 2, 's', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(23, 2, 'n', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(24, 2, 'm', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(25, 4, 'n', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(26, 4, 'b', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(27, 4, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(28, 4, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(29, 4, 'b', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(30, 4, 'b', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(31, 3, 's', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(32, 3, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(33, 3, 'b', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(34, 3, 's', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(35, 3, 'm', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(36, 3, 'b', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(37, 3, 'n', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(38, 3, 's', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(39, 3, 's', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(40, 3, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(41, 1, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(42, 1, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(43, 1, 's', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(44, 2, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(45, 2, 'm', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(46, 2, 'n', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(47, 2, 'n', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(48, 2, 'f', 2, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(49, 4, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(50, 4, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(51, 4, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(52, 4, 'f', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(53, 4, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(54, 4, 'f', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(55, 3, 'f', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(56, 3, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(57, 3, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(58, 3, 's', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(59, 3, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(60, 3, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(61, 3, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(62, 3, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(63, 3, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(64, 3, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(65, 1, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(66, 1, 'n', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(67, 1, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(68, 2, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(69, 2, 'b', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(70, 2, 's', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(71, 2, 'f', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51'),
(72, 2, 'm', 3, '2024-04-30 13:08:51', '2024-04-30 13:08:51');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `personal_access_tokens`
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
-- Tábla szerkezet ehhez a táblához `tipus`
--

CREATE TABLE `tipus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `elnevezes` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `tipus`
--

INSERT INTO `tipus` (`id`, `elnevezes`, `created_at`, `updated_at`) VALUES
(1, 'mozgássérült', '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(2, 'elektromos', '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(3, 'hagyományos', '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(4, 'motor', '2024-04-30 13:08:50', '2024-04-30 13:08:50');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `telefonszam` char(15) DEFAULT NULL,
  `cim` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `megrendelo_tipus` char(1) NOT NULL,
  `adoszam` char(13) DEFAULT NULL,
  `admin_e` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `name`, `telefonszam`, `cim`, `email`, `email_verified_at`, `password`, `remember_token`, `megrendelo_tipus`, `adoszam`, `admin_e`, `created_at`, `updated_at`) VALUES
(1, 'Hegedűs Emőke PhD', '+36 06 174 7124', '6574 Szécsény, Mia körtér 36. 81. emelet', 'wanderson@example.org', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'sXbzCPUv6L', 'C', '97427359-2-25', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(2, 'Illés Ádám PhD', '+36 32 153 1339', '6432 Szeged, Fábián rakpart 620.', 'gleichner.coby@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'djfcHxaQFG', 'C', '11615431-8-48', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(3, 'Major-Hegedűs Olívia', '+36 54 716 8149', '8090 Budapest, Boros rakpart 56. 96. emelet', 'kimberly89@example.org', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', '99oiVb5mfD', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(4, 'Id. Magyar Hunor PhD', '+36 69 830 1950', '5741 Budapest, Csenge határút 19.', 'langworth.destiney@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', '1l8IENvXYK', 'C', '07593400-7-45', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(5, 'Dr. Szücsné Angéla', '+36 00 415 1076', '4637 Budapest, Julianna árok 11.', 'wmayer@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'KB0UoJssdD', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(6, 'Boros-Veres Valéria', '+36 22 842 0724', '7305 Budapest, Magyar liget 8.', 'summer.harvey@example.net', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', '3ZbdV7DrmY', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(7, 'Dr. Boros János PhD', '+36 45 577 4125', '3681 Budapest, Zita dűlősor 66.', 'xterry@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'oUGdbuU3qk', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(8, 'Dr. Bogdán Patrik PhD', '+36 89 698 1932', '4846 Budapest, Orosz erdősor 1.', 'max51@example.net', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'EGYezUodjp', 'C', '67065579-7-48', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(9, 'Báró Végh László', '+36 25 798 4874', '8638 Tatabánya, Flóra part 9. 60. emelet', 'adan.herman@example.org', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'x9w3BqsgX8', 'C', '64548330-3-16', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(10, 'Nagy Adél PhD', '+36 28 000 6058', '1646 Szekszárd, Barna lépcső 393.', 'susanna.langosh@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'v6isMjIpI3', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(11, 'Prof. Farkas Szervácné', '+36 78 812 5907', '4283 Eger, Nemes pincesor 98.', 'hailie.lang@example.net', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'CBCA2nfOb0', 'C', '41579534-4-99', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(12, 'Fekete Barnáné', '+36 13 888 7237', '8638 Enying, Takács árok 2.', 'mtreutel@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'Qz6EHGtH00', 'C', '94362785-7-28', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(13, 'Vass Vilmos PhD', '+36 06 875 6881', '7079 Kecskemét, Kerekes utca 10.', 'walker.juliana@example.org', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'drtVylt9VE', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(14, 'Kis-Szücs Ramóna', '+36 64 749 2711', '8143 Budapest, Lengyel sétány 14.', 'jay.stark@example.org', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'vygoN6mnoE', 'C', '88831945-3-95', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(15, 'Prof. Farkas Katinka', '+36 44 545 7937', '9334 Sopron, Orbán híd 72.', 'sbernier@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'Q34z56buck', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(16, 'Dr. Jónás Zoltán', '+36 97 521 6978', '6164 Budapest, Márton sétány 388. 84. emelet', 'forest87@example.net', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'O9WyGt1bko', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(17, 'Mészárosné Szalai Evelin', '+36 44 548 3449', '2504 Budapest, Barna turistaút 32.', 'stokes.newell@example.org', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'UeKQhYw0U9', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(18, 'Id. Deák Liza PhD', '+36 62 842 4529', '7428 Hódmezővásárhely, Virág sétány 450.', 'wyman.lawrence@example.net', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'pEywTWHIXn', 'C', '88372593-6-94', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(19, 'Fazekas Johanna PhD', '+36 16 564 9003', '1777 Zalaegerszeg, Orbán köz 41. 73. ajtó', 'zlegros@example.net', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', '9Pie2NbEGY', 'C', '14595569-8-25', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(20, 'Özv. Szilágyi Zétény', '+36 67 607 3036', '9911 Debrecen, Lívia útja 50.', 'gpouros@example.com', '2024-04-30 13:08:50', '$2y$12$nQS2KwSrIhwBsI1P22fj4OpxIhyMyGCMXiW96vU6nv5ILH3VYlRh.', 'MZgPEYkC2T', 'M', NULL, 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(21, 'Teszt Elek', '+36 15 319 9436', '7476 Budapest, Soma körtér 932.', 'elek@teszt.com', '2024-04-30 13:08:50', '$2y$12$UQL6ES6NCExuaE3V4ECwi.lwHiLpyadnenlmFSHxeChqGtvI7GMk2', 'jIs2gDkl7f', 'C', '47040874-6-18', 0, '2024-04-30 13:08:50', '2024-04-30 13:08:50'),
(22, 'Admin Bandi', '+36 37 748 1458', '7531 Budapest, Vörös körtér 58. 38. emelet', 'admin@admin.com', '2024-04-30 13:08:50', '$2y$12$Btt0wrk4kNUjCYrwCpMbUup2Kv2ZfYXMD6.Y28cPrHyN0RKS2vAbS', '7FGoEbuRoT', 'C', '41093980-9-17', 1, '2024-04-30 13:08:51', '2024-04-30 13:08:51');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `berles`
--
ALTER TABLE `berles`
  ADD PRIMARY KEY (`jarmu_id`,`foglalas_datuma`),
  ADD KEY `berles_ar_id_foreign` (`ar_id`),
  ADD KEY `berles_kedvezmeny_id_foreign` (`kedvezmeny_id`),
  ADD KEY `berles_hely_id_foreign` (`hely_id`);

--
-- A tábla indexei `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- A tábla indexei `jarmu`
--
ALTER TABLE `jarmu`
  ADD PRIMARY KEY (`jarmu_id`),
  ADD KEY `jarmu_felhasznalok_id_foreign` (`felhasznalok_id`),
  ADD KEY `jarmu_jarmu_tipus_foreign` (`jarmu_tipus`);

--
-- A tábla indexei `kedvezmenyek`
--
ALTER TABLE `kedvezmenyek`
  ADD PRIMARY KEY (`kedvezmeny_id`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `napi_arak`
--
ALTER TABLE `napi_arak`
  ADD PRIMARY KEY (`ar_id`),
  ADD KEY `napi_arak_tipus_foreign` (`tipus`);

--
-- A tábla indexei `parkolohely`
--
ALTER TABLE `parkolohely`
  ADD PRIMARY KEY (`hely_id`),
  ADD KEY `parkolohely_hely_tipusa_foreign` (`hely_tipusa`);

--
-- A tábla indexei `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- A tábla indexei `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- A tábla indexei `tipus`
--
ALTER TABLE `tipus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tipus_elnevezes_unique` (`elnevezes`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `jarmu`
--
ALTER TABLE `jarmu`
  MODIFY `jarmu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `kedvezmenyek`
--
ALTER TABLE `kedvezmenyek`
  MODIFY `kedvezmeny_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `napi_arak`
--
ALTER TABLE `napi_arak`
  MODIFY `ar_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `parkolohely`
--
ALTER TABLE `parkolohely`
  MODIFY `hely_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT a táblához `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `tipus`
--
ALTER TABLE `tipus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `berles`
--
ALTER TABLE `berles`
  ADD CONSTRAINT `berles_ar_id_foreign` FOREIGN KEY (`ar_id`) REFERENCES `napi_arak` (`ar_id`),
  ADD CONSTRAINT `berles_hely_id_foreign` FOREIGN KEY (`hely_id`) REFERENCES `parkolohely` (`hely_id`),
  ADD CONSTRAINT `berles_jarmu_id_foreign` FOREIGN KEY (`jarmu_id`) REFERENCES `jarmu` (`jarmu_id`),
  ADD CONSTRAINT `berles_kedvezmeny_id_foreign` FOREIGN KEY (`kedvezmeny_id`) REFERENCES `kedvezmenyek` (`kedvezmeny_id`);

--
-- Megkötések a táblához `jarmu`
--
ALTER TABLE `jarmu`
  ADD CONSTRAINT `jarmu_felhasznalok_id_foreign` FOREIGN KEY (`felhasznalok_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `jarmu_jarmu_tipus_foreign` FOREIGN KEY (`jarmu_tipus`) REFERENCES `tipus` (`id`);

--
-- Megkötések a táblához `napi_arak`
--
ALTER TABLE `napi_arak`
  ADD CONSTRAINT `napi_arak_tipus_foreign` FOREIGN KEY (`tipus`) REFERENCES `tipus` (`id`);

--
-- Megkötések a táblához `parkolohely`
--
ALTER TABLE `parkolohely`
  ADD CONSTRAINT `parkolohely_hely_tipusa_foreign` FOREIGN KEY (`hely_tipusa`) REFERENCES `tipus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
