-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2021 at 03:49 PM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `__testnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `primary_artist` tinyint NOT NULL DEFAULT '0',
  `category` tinyint(1) DEFAULT '0' COMMENT '0=EOI Profile , 1=Upcoming, 2=professional, 3=Major Artist',
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `artist_about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `country` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spotify` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soundcloud` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applemusic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_value` float DEFAULT NULL,
  `market_value` float DEFAULT NULL,
  `dividend_payments` float DEFAULT NULL,
  `change_stock` float DEFAULT '0',
  `change_market` float DEFAULT '0',
  `current_price` float DEFAULT '0',
  `total_supply` int DEFAULT '0',
  `circulating_supply` float DEFAULT '0',
  `artist` double DEFAULT '0',
  `music_fan_investor` double DEFAULT '0',
  `sell_restrictions` int DEFAULT '0',
  `market_maker_price` float DEFAULT '0',
  `sell_limit` float DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `user_id`, `primary_artist`, `category`, `brand`, `about`, `artist_about`, `country`, `website`, `spotify`, `soundcloud`, `applemusic`, `youtube`, `facebook`, `instagram`, `photo`, `stock_value`, `market_value`, `dividend_payments`, `change_stock`, `change_market`, `current_price`, `total_supply`, `circulating_supply`, `artist`, `music_fan_investor`, `sell_restrictions`, `market_maker_price`, `sell_limit`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 0, 'Amrut Kriated', 'Singer', 'This is the demo artist created by amrut to test functionality.', 'IN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1396741054.jpg', 1.02, 102000000, 0.000002, 2, 2, 1, 99999998, 2, 99.999998, 0.000002, 0, 0, 0, '2021-11-04 13:11:52', '2021-11-05 00:11:52'),
(4, 6, 0, 0, 'Adele Ykili', 'Singer', 'I love to create contemporary music', 'IN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//73078292.jpeg', 1.03, 1000000, 0.000003, -0.9615, -99.0291, 1, 99999997, 3, 99.999997, 0.000003, 0, 0, 0, '2021-11-04 15:11:39', '2021-11-05 02:11:39'),
(5, 3, 0, 3, 'Ed Sheeran', 'singer', 'Edward Christopher Sheeran MBE born 17 February 1991) is an English singer, songwriter, record producer, musician, actor, and businessman.', 'GB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//72921766.jpg', 1.0021, 100210000, 0.000021, 0.2, 0.2, 1, 99999979, 21, 99.999979, 0.000021, 0, 0, 0, '2021-11-23 04:36:01', '2021-11-23 15:36:01'),
(7, 3, 0, 3, 'Drake', 'Rapper', 'Aubrey Drake Graham (born October 24, 1986) is a Canadian rapper, singer, songwriter, actor, producer, and entrepreneur. Gaining recognition by starring in the television series', 'CA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//120570651.jpg', 1.0293, 102930000, 0.000095, -0.0097, -0.0097, 1, 99999905, 95, 99.999905, 0.000095, 0, 0, 0, '2021-11-23 22:58:53', '2021-11-24 09:58:53'),
(8, 4, 0, 3, 'Justin Bieber', 'singer', 'Justin Drew Bieber born March 1, 1994 is a Canadian singer. He was discovered by American record executive Scooter Braun', 'CA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1946595759.jpg', 1.0001, 100010000, 0.000001, 0.01, 0.01, 1, 99999999, 1, 99.999999, 0.000001, 0, 0, 0, '2021-11-05 05:05:18', '2021-11-05 16:05:18'),
(9, 4, 0, 3, 'Eminem', 'Rapper', 'Marshall Bruce Mathers III (born October 17, 1972), known professionally as Eminem formerly stylized as EMINƎM), is an American rapper, songwriter, and record producer.', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//679484641.jpg', 1.0102, 101020000, 0.000102, 0.0099, 0.0099, 1, 99999898, 102, 99.999898, 0.000102, 0, 0, 0, '2021-11-16 08:28:29', '2021-11-16 19:28:29'),
(10, 4, 0, 3, 'Billie Eilish', 'Singer', 'Billie Eilish Pirate Baird O\'Connell born December 18, 2001) is an American singer and songwriter.', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1789377577.jpeg', 1.0001, 100010000, 0.000001, 0.01, 0.01, 1, 99999999, 1, 99.999999, 0.000001, 0, 0, 30, '2021-11-14 22:16:35', '2021-11-15 09:16:35'),
(11, 4, 0, 3, 'Rihanna', 'singer', 'Robyn Rihanna Fenty born February 20, 1988) is a Barbadian singer, actress, fashion designer, and businesswoman. Born in Saint Michael and raised in Bridgetown, Barbados,', 'BB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//2053548970.jpg', 1.0001, 100010000, 0.000001, 0.01, 0.01, 1, 99999999, 1, 99.999999, 0.000001, 0, 0, 0, '2021-11-19 06:58:21', '2021-11-19 17:58:21'),
(12, 4, 0, 0, 'Taylor Swift', 'singer', 'Taylor Alison Swift (born December 13, 1989) is an American singer-songwriter. Her narrative lyricism, which often takes inspiration from her personal life and experiences, \r\nBorn in West Reading, Pennsylvania,', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1076442079.jpg', 1.0001, 100010000, 0.000001, 0.01, 0.01, 1, 99999999, 1, 99.999999, 0.000001, 0, 0, 0, '2021-11-19 06:59:32', '2021-11-19 17:59:32'),
(13, 4, 0, 3, 'Queen (band)', 'singer', 'Queen are a British rock band formed in London in 1970. Their classic line-up was Freddie Mercury (lead vocals, piano), Brian May (guitar, vocals), Roger Taylor (drums, vocals) and John Deacon (bass)', 'GB', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1773380133.jpg', 1.0001, 100010000, 0.000001, 0.01, 0.01, 1, 99999999, 1, 99.999999, 0.000001, 0, 0, 0, '2021-11-19 06:59:54', '2021-11-19 17:59:54'),
(14, 4, 0, 3, 'BTS', 'singer', 'RR: Bangtan Sonyeondan), also known as the Bangtan Boys, is a seven-member South Korean boy band that began formation in 2010 and debuted in 2013 under Big Hit Entertainment.', 'KR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1433318057.jpg', 1, 100000000, 0, 0, 0, 1, 100000000, 0, 100, 0, 0, 0, 0, '2021-10-24 05:04:12', '2021-10-24 05:04:12'),
(15, 1, 0, 3, 'Soluta', 'Fugiat elit mollit', 'Sit nisi dolor vita', 'SN', 'https://www.cej.in', 'Mollit ut quia paria', 'Ea ut rem officia en', 'Atque in culpa corpo', 'https://www.kuzega.org.au', 'https://www.vokec.org.au', 'https://www.jonorivijule.cm', 'assets/uploads//410996894.jpg', 1, 100000000, 0, 0, 0, 1, 100000000, 0, 100, 0, 0, 0, 0, '2021-10-24 05:04:12', '2021-10-24 05:04:12'),
(16, 5, 0, 3, 'Harsh', 'Superstar', NULL, 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//195467850.png', 1, 100000000, 0, 0, 0, 1, 100000000, 0, 100, 0, 0, 0, 0, '2021-10-24 05:04:12', '2021-10-24 05:04:12'),
(17, 8, 0, 0, 'John Music Company', 'DJ', 'This is the professional John Music Company', 'US', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//63680298.jpeg', 1, 100000000, 0, 0, 0, 1, 100000000, 0, 100, 0, 0, 0, 0, '2021-10-24 05:04:12', '2021-10-24 05:04:12'),
(18, 9, 0, 0, 'Gujrati Benx', 'Singer', 'Music Is what I love to do!', 'IN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1411570369.jpeg', 1, 1000000, 0, 0, -99, 1, 100000000, 0, 100, 0, 0, 0, 0, '2021-11-04 15:30:47', '2021-11-05 02:30:47'),
(19, 11, 0, 3, 'Bhargav\'s Music Company', 'DJ', 'lorem ipsum demo content lorem ipsum demo content lorem ipsum demo content lorem ipsum demo content', 'IN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//343905976.jpg', 1, 100000000, 0, 0, 0, 1, 100000000, 0, 100, 0, 0, 0, 0, '2021-10-24 05:04:12', '2021-10-24 05:04:12'),
(20, 14, 0, 1, 'Stino', 'Rapper', 'I am Melbourne based Rapper, singer, Song writer and producer, with great love and passion for my craft. I make hip hop, trap, rnb, reggae, Afro pop, dance hall and always looking to experiment and further increase my knowledge in music.', 'AU', 'https://www.youtube.com/watch?v=VwBmp6iinsE', 'https://open.spotify.com/album/2N6wIJnZ6JkC3YdzzJuFVy', 'https://soundcloud.com/ajproductions-5', 'https://music.apple.com/au/album/fuck-your-energy-feat-raizo-dopekid-single/1578048083?at=1001loWk&ct=FFM_91b95d234f1d387f2a2ea1d5126643ee&uo=4&app=music', 'https://www.youtube.com/watch?v=VwBmp6iinsE', NULL, 'https://www.instagram.com/officialstinno/', 'assets/uploads//1721891873.jpeg', 1.01, 101000000, 0.0001, 1, 0.9999, 1, 99999900, 100, 99.9999, 0.0001, 0, 0, 0, '2021-11-05 09:54:45', '2021-11-05 20:54:45'),
(21, 19, 0, 0, 'Sun Test', 'Singer', 'Tester profile BIO.', 'RU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//468039220.jpg', NULL, NULL, NULL, 0, 0, 0, 100000000, 0, 100, 0, 0, 0, 0, '2021-11-03 06:59:31', '2021-11-03 17:59:31'),
(22, 19, 0, 1, 'Sun Mount X', 'Rapper', 'I am artist from Netherlands', 'NL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'assets/uploads//1863443496.png', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-03 16:49:55', '2021-11-03 16:49:55'),
(23, 22, 0, 1, 'Antonia Kay', 'Singer', 'Singer, Songwriter', 'AU', NULL, 'https://open.spotify.com/artist/4sQJhfsvydYymAON1Zelna?si=yQ24pgtdSbmF2Idr3vJUdw', 'https://soundcloud.com/peace_of_kay', 'https://music.apple.com/au/artist/antonia-kay/1210916383', 'https://www.youtube.com/channel/UC3HpJs6Z-nwQgslyjECIXEA', 'https://www.facebook.com/Peaceofkay', 'https://www.instagram.com/peaceofkay/?hl=en', 'assets/uploads//1789147483.JPG', 1.1002, 11002000, 0.01012, 0.0182, 0.0182, 0, 9998988, 1012, 99.98988, 0.01012, 0, 0, 0, '2021-11-04 13:08:09', '2021-11-05 00:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `artist_points`
--

CREATE TABLE `artist_points` (
  `id` int NOT NULL,
  `amount` varchar(50) NOT NULL,
  `points` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `artist_points`
--

INSERT INTO `artist_points` (`id`, `amount`, `points`) VALUES
(1, '1', '1'),
(2, '2', '2'),
(3, '3', '3'),
(4, '4', '4'),
(5, '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `business_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `otherlink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `user_id`, `business_type`, `brand`, `occupation`, `about`, `website`, `instagram`, `facebook`, `twitter`, `youtube`, `otherlink`, `photo`, `created_at`, `updated_at`) VALUES
(1, 6, 'Accompanist', 'test', 'test', 'test', 'https://test.com', 'https://instagram.com', 'https://facebook.com', 'https://twitter.com', 'https://youtube.com', NULL, 'assets/uploads/business/630226490.jpg', '2021-07-09 07:07:25', '2021-07-09 12:37:25'),
(2, 3, 'Choreographer', 'Atlantic Money', 'Record label', 'Independent label', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-10 17:44:32', '2021-07-10 23:14:32');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `song_id` int DEFAULT NULL,
  `comment` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `song_id`, `comment`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 'zxcz', '2021-07-07 01:18:02', '2021-07-07 01:18:02'),
(3, 1, 13, 'sdfasdf', '2021-07-07 23:43:50', '2021-07-07 23:43:50'),
(4, 1, 1, 'ljlkj', '2021-07-08 03:48:08', '2021-07-08 03:48:08'),
(5, 1, 1, 'ljlkj', '2021-07-08 03:48:09', '2021-07-08 03:48:09'),
(6, 1, 1, 'lklk', '2021-07-08 03:48:12', '2021-07-08 03:48:12'),
(7, 1, 13, '13', '2021-07-08 03:51:07', '2021-07-08 03:51:07'),
(8, 1, 13, '132', '2021-07-08 03:51:11', '2021-07-08 03:51:11'),
(9, 1, 13, 'nice', '2021-07-08 03:51:36', '2021-07-08 03:51:36'),
(10, 1, 13, 'bg', '2021-07-08 03:57:51', '2021-07-08 03:57:51'),
(12, 1, 29, 'dsfs', '2021-07-08 04:09:20', '2021-07-08 04:09:20'),
(13, 1, 28, 'fg', '2021-07-08 04:09:30', '2021-07-08 04:09:30'),
(43, 1, 25, 'fdgdfg', '2021-07-09 04:13:57', '2021-07-09 04:13:57'),
(17, 1, 28, '77', '2021-07-08 04:29:32', '2021-07-08 04:29:32'),
(18, 1, 28, '777', '2021-07-08 04:29:54', '2021-07-08 04:29:54'),
(19, 1, 28, '777', '2021-07-08 04:29:54', '2021-07-08 04:29:54'),
(20, 1, 28, '777', '2021-07-08 04:29:55', '2021-07-08 04:29:55'),
(21, 1, 26, 'vbnv', '2021-07-08 04:30:04', '2021-07-08 04:30:04'),
(22, 1, 28, '99', '2021-07-08 04:38:33', '2021-07-08 04:38:33'),
(23, 1, 6, '369', '2021-07-08 04:44:57', '2021-07-08 04:44:57'),
(42, 1, 13, 'dsfds', '2021-07-09 04:12:34', '2021-07-09 04:12:34'),
(25, 1, 12, '333', '2021-07-08 04:54:04', '2021-07-08 04:54:04'),
(26, 1, 3, '.,/,.hjkhj', '2021-07-08 04:55:05', '2021-07-08 04:55:05'),
(27, 1, 28, '88', '2021-07-08 04:57:22', '2021-07-08 04:57:22'),
(28, 1, 11, 'good', '2021-07-08 04:58:01', '2021-07-08 04:58:01'),
(35, 1, 7, 'ghfgh', '2021-07-08 05:59:03', '2021-07-08 05:59:03'),
(30, 1, 11, 'fgdfg', '2021-07-08 04:58:04', '2021-07-08 04:58:04'),
(34, 1, 7, 'ghfgh', '2021-07-08 05:59:03', '2021-07-08 05:59:03'),
(32, 1, 11, 'ghfgh', '2021-07-08 04:59:43', '2021-07-08 04:59:43'),
(33, 1, 11, 'ghf', '2021-07-08 04:59:48', '2021-07-08 04:59:48'),
(36, 1, 7, 'hgfh', '2021-07-08 05:59:07', '2021-07-08 05:59:07'),
(37, 1, 7, 'hgfh', '2021-07-08 05:59:07', '2021-07-08 05:59:07'),
(38, 1, 28, '43', '2021-07-08 06:00:08', '2021-07-08 06:00:08'),
(39, 1, 4, '22', '2021-07-08 06:01:51', '2021-07-08 06:01:51'),
(40, 6, 29, 'vcbcb', '2021-07-08 06:52:11', '2021-07-08 06:52:11'),
(44, 1, 13, 'fgd', '2021-07-09 04:14:06', '2021-07-09 04:14:06'),
(45, 1, 25, 'bvnv', '2021-07-09 04:14:27', '2021-07-09 04:14:27'),
(46, 1, 13, '33', '2021-07-09 05:02:25', '2021-07-09 05:02:25'),
(47, 4, 13, 'nice song', '2021-07-12 00:58:03', '2021-07-12 00:58:03'),
(48, 1, 11, '123', '2021-07-12 05:46:37', '2021-07-12 05:46:37'),
(49, 1, 29, '12', '2021-07-13 23:33:01', '2021-07-13 23:33:01'),
(50, 1, 29, '36', '2021-07-13 23:33:06', '2021-07-13 23:33:06'),
(51, 1, 29, '3', '2021-07-13 23:33:10', '2021-07-13 23:33:10'),
(52, 1, 29, 'xzc', '2021-07-14 04:39:50', '2021-07-14 04:39:50'),
(53, 1, 29, 'hjgh', '2021-07-14 05:06:16', '2021-07-14 05:06:16'),
(54, 1, 29, 'hjgh', '2021-07-14 05:06:16', '2021-07-14 05:06:16'),
(55, 1, 31, '123', '2021-07-15 03:21:47', '2021-07-15 03:21:47'),
(56, 1, 30, '123', '2021-07-15 03:25:04', '2021-07-15 03:25:04'),
(57, 1, 30, '123', '2021-07-15 03:25:04', '2021-07-15 03:25:04'),
(58, 1, 30, '222', '2021-07-15 03:25:25', '2021-07-15 03:25:25'),
(59, 1, 30, '333', '2021-07-15 03:25:31', '2021-07-15 03:25:31'),
(60, 1, 31, 'dfgd', '2021-07-15 04:04:11', '2021-07-15 04:04:11'),
(61, 1, 32, '123', '2021-07-15 05:36:53', '2021-07-15 05:36:53'),
(62, 1, 3, '132', '2021-07-15 06:14:10', '2021-07-15 06:14:10'),
(63, 1, 3, '132', '2021-07-15 06:14:10', '2021-07-15 06:14:10'),
(64, 1, 3, '11', '2021-07-15 06:14:20', '2021-07-15 06:14:20'),
(65, 1, 31, 'cxvcxv', '2021-07-15 06:49:58', '2021-07-15 06:49:58'),
(66, 1, 31, 'cvb', '2021-07-15 06:50:55', '2021-07-15 06:50:55'),
(67, 1, 33, 'xcz', '2021-07-15 06:55:14', '2021-07-15 06:55:14'),
(68, 1, 37, 'nbm', '2021-07-27 04:56:27', '2021-07-27 04:56:27'),
(69, 1, 37, '23', '2021-07-27 04:57:12', '2021-07-27 04:57:12'),
(70, 1, 37, 'hello', '2021-07-27 04:58:46', '2021-07-27 04:58:46'),
(71, 1, 37, '36', '2021-07-27 05:01:47', '2021-07-27 05:01:47'),
(72, 1, 37, 'nice', '2021-07-27 05:05:10', '2021-07-27 05:05:10'),
(73, 1, 34, 'hello', '2021-07-27 05:07:32', '2021-07-27 05:07:32'),
(74, 1, 34, '43', '2021-07-27 05:14:02', '2021-07-27 05:14:02'),
(75, 3, 13, 'Commenting is reserved for people who Valyou this song.', '2021-09-02 03:47:50', '2021-09-02 03:47:50'),
(76, 3, 97, 'test', '2021-09-26 10:29:43', '2021-09-26 10:29:43'),
(77, 13, 97, 'test', '2021-10-03 02:22:46', '2021-10-03 02:22:46'),
(78, 3, 107, 'i love this song', '2021-11-23 16:06:33', '2021-11-23 16:06:33');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cnt_id` int NOT NULL,
  `cnt_code` varchar(2) NOT NULL DEFAULT '',
  `cnt_name` varchar(100) NOT NULL DEFAULT '',
  `cnt_name_ar` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cnt_id`, `cnt_code`, `cnt_name`, `cnt_name_ar`) VALUES
(1, 'AF', 'Afghanistan', 'أفغانستان'),
(2, 'AL', 'Albania', 'ألبانيا'),
(3, 'AX', 'Aland Islands', 'جزر آلاند'),
(4, 'DZ', 'Algeria', 'الجزائر'),
(5, 'AS', 'American Samoa', 'ساموا-الأمريكي'),
(6, 'AD', 'Andorra', 'أندورا'),
(7, 'AO', 'Angola', 'أنغولا'),
(8, 'AI', 'Anguilla', 'أنغويلا'),
(9, 'AQ', 'Antarctica', 'أنتاركتيكا'),
(10, 'AG', 'Antigua and Barbuda', 'أنتيغوا وبربودا'),
(11, 'AR', 'Argentina', 'الأرجنتين'),
(12, 'AM', 'Armenia', 'أرمينيا'),
(13, 'AW', 'Aruba', 'أروبه'),
(14, 'AU', 'Australia', 'أستراليا'),
(15, 'AT', 'Austria', 'النمسا'),
(16, 'AZ', 'Azerbaijan', 'أذربيجان'),
(17, 'BS', 'Bahamas', 'الباهاماس'),
(18, 'BH', 'Bahrain', 'البحرين'),
(19, 'BD', 'Bangladesh', 'بنغلاديش'),
(20, 'BB', 'Barbados', 'بربادوس'),
(21, 'BY', 'Belarus', 'روسيا البيضاء'),
(22, 'BE', 'Belgium', 'بلجيكا'),
(23, 'BZ', 'Belize', 'بيليز'),
(24, 'BJ', 'Benin', 'بنين'),
(25, 'BL', 'Saint Barthelemy', 'سان بارتيلمي'),
(26, 'BM', 'Bermuda', 'جزر برمودا'),
(27, 'BT', 'Bhutan', 'بوتان'),
(28, 'BO', 'Bolivia', 'بوليفيا'),
(29, 'BA', 'Bosnia and Herzegovina', 'البوسنة و الهرسك'),
(30, 'BW', 'Botswana', 'بوتسوانا'),
(31, 'BV', 'Bouvet Island', 'جزيرة بوفيه'),
(32, 'BR', 'Brazil', 'البرازيل'),
(33, 'IO', 'British Indian Ocean Territory', 'إقليم المحيط الهندي البريطاني'),
(34, 'BN', 'Brunei Darussalam', 'بروني'),
(35, 'BG', 'Bulgaria', 'بلغاريا'),
(36, 'BF', 'Burkina Faso', 'بوركينا فاسو'),
(37, 'BI', 'Burundi', 'بوروندي'),
(38, 'KH', 'Cambodia', 'كمبوديا'),
(39, 'CM', 'Cameroon', 'كاميرون'),
(40, 'CA', 'Canada', 'كندا'),
(41, 'CV', 'Cape Verde', 'الرأس الأخضر'),
(42, 'KY', 'Cayman Islands', 'جزر كايمان'),
(43, 'CF', 'Central African Republic', 'جمهورية أفريقيا الوسطى'),
(44, 'TD', 'Chad', 'تشاد'),
(45, 'CL', 'Chile', 'شيلي'),
(46, 'CN', 'China', 'الصين'),
(47, 'CX', 'Christmas Island', 'جزيرة عيد الميلاد'),
(48, 'CC', 'Cocos (Keeling) Islands', 'جزر كوكوس'),
(49, 'CO', 'Colombia', 'كولومبيا'),
(50, 'KM', 'Comoros', 'جزر القمر'),
(51, 'CG', 'Congo', 'الكونغو'),
(52, 'CK', 'Cook Islands', 'جزر كوك'),
(53, 'CR', 'Costa Rica', 'كوستاريكا'),
(54, 'HR', 'Croatia', 'كرواتيا'),
(55, 'CU', 'Cuba', 'كوبا'),
(56, 'CY', 'Cyprus', 'قبرص'),
(57, 'CW', 'Curaçao', 'كوراساو'),
(58, 'CZ', 'Czech Republic', 'الجمهورية التشيكية'),
(59, 'DK', 'Denmark', 'الدانمارك'),
(60, 'DJ', 'Djibouti', 'جيبوتي'),
(61, 'DM', 'Dominica', 'دومينيكا'),
(62, 'DO', 'Dominican Republic', 'الجمهورية الدومينيكية'),
(63, 'EC', 'Ecuador', 'إكوادور'),
(64, 'EG', 'Egypt', 'مصر'),
(65, 'SV', 'El Salvador', 'إلسلفادور'),
(66, 'GQ', 'Equatorial Guinea', 'غينيا الاستوائي'),
(67, 'ER', 'Eritrea', 'إريتريا'),
(68, 'EE', 'Estonia', 'استونيا'),
(69, 'ET', 'Ethiopia', 'أثيوبيا'),
(70, 'FK', 'Falkland Islands (Malvinas)', 'جزر فوكلاند'),
(71, 'FO', 'Faroe Islands', 'جزر فارو'),
(72, 'FJ', 'Fiji', 'فيجي'),
(73, 'FI', 'Finland', 'فنلندا'),
(74, 'FR', 'France', 'فرنسا'),
(75, 'GF', 'French Guiana', 'غويانا الفرنسية'),
(76, 'PF', 'French Polynesia', 'بولينيزيا الفرنسية'),
(77, 'TF', 'French Southern and Antarctic Lands', 'أراض فرنسية جنوبية وأنتارتيكية'),
(78, 'GA', 'Gabon', 'الغابون'),
(79, 'GM', 'Gambia', 'غامبيا'),
(80, 'GE', 'Georgia', 'جيورجيا'),
(81, 'DE', 'Germany', 'ألمانيا'),
(82, 'GH', 'Ghana', 'غانا'),
(83, 'GI', 'Gibraltar', 'جبل طارق'),
(84, 'GG', 'Guernsey', 'غيرنزي'),
(85, 'GR', 'Greece', 'اليونان'),
(86, 'GL', 'Greenland', 'جرينلاند'),
(87, 'GD', 'Grenada', 'غرينادا'),
(88, 'GP', 'Guadeloupe', 'جزر جوادلوب'),
(89, 'GU', 'Guam', 'جوام'),
(90, 'GT', 'Guatemala', 'غواتيمال'),
(91, 'GN', 'Guinea', 'غينيا'),
(92, 'GW', 'Guinea-Bissau', 'غينيا-بيساو'),
(93, 'GY', 'Guyana', 'غيانا'),
(94, 'HT', 'Haiti', 'هايتي'),
(95, 'HM', 'Heard and Mc Donald Islands', 'جزيرة هيرد وجزر ماكدونالد'),
(96, 'HN', 'Honduras', 'هندوراس'),
(97, 'HK', 'Hong Kong', 'هونغ كونغ'),
(98, 'HU', 'Hungary', 'المجر'),
(99, 'IS', 'Iceland', 'آيسلندا'),
(100, 'IN', 'India', 'الهند'),
(101, 'IM', 'Isle of Man', 'جزيرة مان'),
(102, 'ID', 'Indonesia', 'أندونيسيا'),
(103, 'IR', 'Iran', 'إيران'),
(104, 'IQ', 'Iraq', 'العراق'),
(105, 'IE', 'Ireland', 'إيرلندا'),
(107, 'IT', 'Italy', 'إيطاليا'),
(108, 'CI', 'Ivory Coast', 'ساحل العاج'),
(109, 'JE', 'Jersey', 'جيرزي'),
(110, 'JM', 'Jamaica', 'جمايكا'),
(111, 'JP', 'Japan', 'اليابان'),
(112, 'JO', 'Jordan', 'الأردن'),
(113, 'KZ', 'Kazakhstan', 'كازاخستان'),
(114, 'KE', 'Kenya', 'كينيا'),
(115, 'KI', 'Kiribati', 'كيريباتي'),
(116, 'KP', 'Korea(North Korea)', 'كوريا الشمالية'),
(117, 'KR', 'Korea(South Korea)', 'كوريا الجنوبية'),
(118, 'XK', 'Kosovo', 'كوسوفو'),
(119, 'KW', 'Kuwait', 'الكويت'),
(120, 'KG', 'Kyrgyzstan', 'قيرغيزستان'),
(121, 'LA', 'Lao PDR', 'لاوس'),
(122, 'LV', 'Latvia', 'لاتفيا'),
(123, 'LB', 'Lebanon', 'لبنان'),
(124, 'LS', 'Lesotho', 'ليسوتو'),
(125, 'LR', 'Liberia', 'ليبيريا'),
(126, 'LY', 'Libya', 'ليبيا'),
(127, 'LI', 'Liechtenstein', 'ليختنشتين'),
(128, 'LT', 'Lithuania', 'لتوانيا'),
(129, 'LU', 'Luxembourg', 'لوكسمبورغ'),
(130, 'LK', 'Sri Lanka', 'سريلانكا'),
(131, 'MO', 'Macau', 'ماكاو'),
(132, 'MK', 'Macedonia', 'مقدونيا'),
(133, 'MG', 'Madagascar', 'مدغشقر'),
(134, 'MW', 'Malawi', 'مالاوي'),
(135, 'MY', 'Malaysia', 'ماليزيا'),
(136, 'MV', 'Maldives', 'المالديف'),
(137, 'ML', 'Mali', 'مالي'),
(138, 'MT', 'Malta', 'مالطا'),
(139, 'MH', 'Marshall Islands', 'جزر مارشال'),
(140, 'MQ', 'Martinique', 'مارتينيك'),
(141, 'MR', 'Mauritania', 'موريتانيا'),
(142, 'MU', 'Mauritius', 'موريشيوس'),
(143, 'YT', 'Mayotte', 'مايوت'),
(144, 'MX', 'Mexico', 'المكسيك'),
(145, 'FM', 'Micronesia', 'مايكرونيزيا'),
(146, 'MD', 'Moldova', 'مولدافيا'),
(147, 'MC', 'Monaco', 'موناكو'),
(148, 'MN', 'Mongolia', 'منغوليا'),
(149, 'ME', 'Montenegro', 'الجبل الأسود'),
(150, 'MS', 'Montserrat', 'مونتسيرات'),
(151, 'MA', 'Morocco', 'المغرب'),
(152, 'MZ', 'Mozambique', 'موزمبيق'),
(153, 'MM', 'Myanmar', 'ميانمار'),
(154, 'NA', 'Namibia', 'ناميبيا'),
(155, 'NR', 'Nauru', 'نورو'),
(156, 'NP', 'Nepal', 'نيبال'),
(157, 'NL', 'Netherlands', 'هولندا'),
(158, 'AN', 'Netherlands Antilles', 'جزر الأنتيل الهولندي'),
(159, 'NC', 'New Caledonia', 'كاليدونيا الجديدة'),
(160, 'NZ', 'New Zealand', 'نيوزيلندا'),
(161, 'NI', 'Nicaragua', 'نيكاراجوا'),
(162, 'NE', 'Niger', 'النيجر'),
(163, 'NG', 'Nigeria', 'نيجيريا'),
(164, 'NU', 'Niue', 'ني'),
(165, 'NF', 'Norfolk Island', 'جزيرة نورفولك'),
(166, 'MP', 'Northern Mariana Islands', 'جزر ماريانا الشمالية'),
(167, 'NO', 'Norway', 'النرويج'),
(168, 'OM', 'Oman', 'عمان'),
(169, 'PK', 'Pakistan', 'باكستان'),
(170, 'PW', 'Palau', 'بالاو'),
(171, 'PS', 'Palestine', 'فلسطين'),
(172, 'PA', 'Panama', 'بنما'),
(173, 'PG', 'Papua New Guinea', 'بابوا غينيا الجديدة'),
(174, 'PY', 'Paraguay', 'باراغواي'),
(175, 'PE', 'Peru', 'بيرو'),
(176, 'PH', 'Philippines', 'الفليبين'),
(177, 'PN', 'Pitcairn', 'بيتكيرن'),
(178, 'PL', 'Poland', 'بولونيا'),
(179, 'PT', 'Portugal', 'البرتغال'),
(180, 'PR', 'Puerto Rico', 'بورتو ريكو'),
(181, 'QA', 'Qatar', 'قطر'),
(182, 'RE', 'Reunion Island', 'ريونيون'),
(183, 'RO', 'Romania', 'رومانيا'),
(184, 'RU', 'Russian', 'روسيا'),
(185, 'RW', 'Rwanda', 'رواندا'),
(186, 'KN', 'Saint Kitts and Nevis', 'سانت كيتس ونيفس,'),
(187, 'MF', 'Saint Martin (French part)', 'ساينت مارتن فرنسي'),
(188, 'SX', 'Sint Maarten (Dutch part)', 'ساينت مارتن هولندي'),
(189, 'LC', 'Saint Pierre and Miquelon', 'سان بيير وميكلون'),
(190, 'VC', 'Saint Vincent and the Grenadines', 'سانت فنسنت وجزر غرينادين'),
(191, 'WS', 'Samoa', 'ساموا'),
(192, 'SM', 'San Marino', 'سان مارينو'),
(193, 'ST', 'Sao Tome and Principe', 'ساو تومي وبرينسيبي'),
(194, 'SA', 'Saudi Arabia', 'المملكة العربية السعودية'),
(195, 'SN', 'Senegal', 'السنغال'),
(196, 'RS', 'Serbia', 'صربيا'),
(197, 'SC', 'Seychelles', 'سيشيل'),
(198, 'SL', 'Sierra Leone', 'سيراليون'),
(199, 'SG', 'Singapore', 'سنغافورة'),
(200, 'SK', 'Slovakia', 'سلوفاكيا'),
(201, 'SI', 'Slovenia', 'سلوفينيا'),
(202, 'SB', 'Solomon Islands', 'جزر سليمان'),
(203, 'SO', 'Somalia', 'الصومال'),
(204, 'ZA', 'South Africa', 'جنوب أفريقيا'),
(205, 'GS', 'South Georgia and the South Sandwich', 'المنطقة القطبية الجنوبية'),
(206, 'SS', 'South Sudan', 'السودان الجنوبي'),
(207, 'ES', 'Spain', 'إسبانيا'),
(208, 'SH', 'Saint Helena', 'سانت هيلانة'),
(209, 'SD', 'Sudan', 'السودان'),
(210, 'SR', 'Suriname', 'سورينام'),
(211, 'SJ', 'Svalbard and Jan Mayen', 'سفالبارد ويان ماين'),
(212, 'SZ', 'Swaziland', 'سوازيلند'),
(213, 'SE', 'Sweden', 'السويد'),
(214, 'CH', 'Switzerland', 'سويسرا'),
(215, 'SY', 'Syria', 'سوريا'),
(216, 'TW', 'Taiwan', 'تايوان'),
(217, 'TJ', 'Tajikistan', 'طاجيكستان'),
(218, 'TZ', 'Tanzania', 'تنزانيا'),
(219, 'TH', 'Thailand', 'تايلندا'),
(220, 'TL', 'Timor-Leste', 'تيمور الشرقية'),
(221, 'TG', 'Togo', 'توغو'),
(222, 'TK', 'Tokelau', 'توكيلاو'),
(223, 'TO', 'Tonga', 'تونغا'),
(224, 'TT', 'Trinidad and Tobago', 'ترينيداد وتوباغو'),
(225, 'TN', 'Tunisia', 'تونس'),
(226, 'TR', 'Turkey', 'تركيا'),
(227, 'TM', 'Turkmenistan', 'تركمانستان'),
(228, 'TC', 'Turks and Caicos Islands', 'جزر توركس وكايكوس'),
(229, 'TV', 'Tuvalu', 'توفالو'),
(230, 'UG', 'Uganda', 'أوغندا'),
(231, 'UA', 'Ukraine', 'أوكرانيا'),
(232, 'AE', 'United Arab Emirates', 'الإمارات العربية المتحدة'),
(233, 'GB', 'United Kingdom', 'المملكة المتحدة'),
(234, 'US', 'United States', 'الولايات المتحدة'),
(235, 'UM', 'US Minor Outlying Islands', 'قائمة الولايات والمناطق الأمريكية'),
(236, 'UY', 'Uruguay', 'أورغواي'),
(237, 'UZ', 'Uzbekistan', 'أوزباكستان'),
(238, 'VU', 'Vanuatu', 'فانواتو'),
(239, 'VE', 'Venezuela', 'فنزويلا'),
(240, 'VN', 'Vietnam', 'فيتنام'),
(241, 'VI', 'Virgin Islands (U.S.)', 'الجزر العذراء الأمريكي'),
(242, 'VA', 'Vatican City', 'فنزويلا'),
(243, 'WF', 'Wallis and Futuna Islands', 'والس وفوتونا'),
(244, 'EH', 'Western Sahara', 'الصحراء الغربية'),
(245, 'YE', 'Yemen', 'اليمن'),
(246, 'ZM', 'Zambia', 'زامبيا'),
(247, 'ZW', 'Zimbabwe', 'زمبابوي');

-- --------------------------------------------------------

--
-- Table structure for table `entity_promotions`
--

CREATE TABLE `entity_promotions` (
  `id` bigint UNSIGNED NOT NULL,
  `promotion_id` int DEFAULT NULL,
  `entity` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reward` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int NOT NULL,
  `user_role` int NOT NULL COMMENT '1-admin,2-Artist,3-investor,4-Business',
  `follower_id` int NOT NULL COMMENT 'login user id',
  `following_id` int NOT NULL,
  `request_status` int NOT NULL DEFAULT '1' COMMENT '0-request,1-confirm,2-cancel',
  `artist_id` int DEFAULT NULL COMMENT '2-user role',
  `business_id` int DEFAULT NULL COMMENT '4-User role',
  `investor_id` int DEFAULT NULL COMMENT '3-user role',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `user_role`, `follower_id`, `following_id`, `request_status`, `artist_id`, `business_id`, `investor_id`, `created_at`, `updated_at`) VALUES
(7, 2, 3, 4, 1, 3, NULL, NULL, '2021-07-10 09:04:27', '2021-07-10 09:04:27'),
(8, 4, 1, 3, 1, NULL, 1, NULL, '2021-07-10 09:06:12', '2021-07-10 09:06:12'),
(9, 3, 6, 8, 1, NULL, NULL, 6, '2021-07-10 09:30:59', '2021-07-10 09:30:59'),
(10, 2, 3, 8, 1, 3, NULL, NULL, '2021-07-10 09:32:09', '2021-07-10 09:32:09'),
(11, 3, 6, 9, 1, NULL, NULL, 6, '2021-07-10 10:11:55', '2021-07-10 10:11:55'),
(12, 2, 4, 12, 1, 4, NULL, NULL, '2021-07-10 10:12:27', '2021-07-10 10:12:27'),
(14, 3, 1, 7, 1, NULL, NULL, 1, '2021-07-10 10:53:24', '2021-07-10 10:53:24'),
(16, 2, 4, 9, 1, 4, NULL, NULL, '2021-07-10 10:54:48', '2021-07-10 10:54:48'),
(17, 4, 1, 14, 1, NULL, 1, NULL, '2021-07-10 10:55:10', '2021-07-10 10:55:10'),
(18, 3, 6, 14, 1, NULL, NULL, 6, '2021-07-10 10:55:32', '2021-07-10 10:55:32'),
(19, 4, 1, 5, 1, NULL, 1, NULL, '2021-07-10 13:05:01', '2021-07-10 13:05:01'),
(20, 3, 1, 11, 1, NULL, NULL, 1, '2021-07-12 09:31:50', '2021-07-12 09:31:50'),
(23, 1, 3, 12, 1, 3, NULL, NULL, '2021-07-13 12:23:45', '2021-07-13 12:23:45'),
(24, 2, 3, 5, 1, 3, NULL, NULL, '2021-07-14 06:13:21', '2021-07-14 06:13:21'),
(25, 2, 5, 8, 1, 5, NULL, NULL, '2021-07-14 06:38:59', '2021-07-14 06:38:59'),
(28, 1, 3, 9, 1, 3, NULL, NULL, '2021-07-15 05:59:27', '2021-07-15 05:59:27'),
(30, 1, 15, 13, 1, 15, NULL, NULL, '2021-07-16 04:48:33', '2021-07-16 04:48:33'),
(32, 3, 6, 15, 1, NULL, NULL, 6, '2021-07-29 06:21:34', '2021-07-29 06:21:34'),
(33, 3, 6, 18, 1, NULL, NULL, 6, '2021-07-29 06:34:00', '2021-07-29 06:34:00'),
(34, 3, 1, 18, 1, NULL, NULL, 1, '2021-07-29 06:34:05', '2021-07-29 06:34:05'),
(35, 2, 18, 7, 1, 18, NULL, NULL, '2021-07-29 06:34:36', '2021-07-29 06:34:36'),
(37, 2, 18, 3, 1, 18, NULL, NULL, '2021-07-29 06:34:53', '2021-07-29 06:34:53'),
(41, 2, 18, 4, 1, 18, NULL, NULL, '2021-07-29 07:01:20', '2021-07-29 07:01:20'),
(42, 1, 5, 3, 1, 5, NULL, NULL, '2021-08-09 00:22:21', '2021-08-09 00:22:21'),
(44, 1, 5, 18, 1, 5, NULL, NULL, '2021-09-28 02:54:02', '2021-09-28 02:54:02'),
(45, 4, 2, 4, 1, NULL, 2, NULL, '2021-11-01 14:23:26', '2021-11-01 14:23:26'),
(46, 3, 3, 23, 1, NULL, NULL, 3, '2021-11-04 19:44:53', '2021-11-04 19:44:53'),
(47, 1, 5, 20, 1, 5, NULL, NULL, '2021-11-05 20:57:10', '2021-11-05 20:57:10'),
(48, 3, 3, 20, 1, NULL, NULL, 3, '2021-11-05 21:01:08', '2021-11-05 21:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_07_24_050817_add_new_columns_to_users_table', 1),
(10, '2020_07_27_112341_create_social_providers_table', 1),
(11, '2020_07_27_112445_create_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int NOT NULL,
  `notification_type` int NOT NULL COMMENT '1- Admin sent money 2- Play video 3. Buy Stocks 4. Sell Stocks,5-valyou song',
  `from_user_id` int NOT NULL,
  `to_user_id` int NOT NULL,
  `artist_id` int DEFAULT NULL,
  `notification_text` text NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0=unread, 1=read',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification_type`, `from_user_id`, `to_user_id`, `artist_id`, `notification_text`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 8, 8, 17, 'John Doe buy your stock', 0, '2021-07-24 12:35:05', '2021-07-24 12:35:05'),
(3, 3, 8, 6, 4, 'John Doe buy your stock', 1, '2021-07-24 12:36:38', '2021-07-29 06:15:20'),
(6, 3, 3, 9, 18, 'Bobby Oparaocha buy your stock', 0, '2021-07-25 01:25:38', '2021-07-25 01:25:38'),
(7, 2, 6, 1, 15, 'priyanka kavaiya pay for playing video', 1, '2021-07-26 07:18:33', '2021-07-26 12:08:54'),
(8, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 1, '2021-07-26 07:21:43', '2021-07-26 12:35:57'),
(9, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 1, '2021-07-26 07:21:58', '2021-07-26 07:21:58'),
(10, 2, 9, 1, 15, 'Mike Tim pay for playing video', 1, '2021-07-26 08:26:28', '2021-07-26 12:34:51'),
(11, 3, 9, 1, 3, 'Mike Tim buy your stock', 1, '2021-07-26 08:27:56', '2021-07-26 12:23:05'),
(12, 3, 3, 3, 5, 'Bobby Oparaocha buy your stock', 1, '2021-07-26 10:36:26', '2021-07-26 22:39:28'),
(13, 5, 1, 1, 3, 'Amrut Ratnani pay for valyou song', 1, '2021-07-26 13:29:15', '2021-07-27 05:27:06'),
(14, 3, 1, 1, 3, 'Amrut Ratnani buy your stock', 0, '2021-07-27 05:30:51', '2021-07-27 05:30:51'),
(15, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 1, '2021-07-27 05:33:41', '2021-07-29 06:15:22'),
(16, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-27 05:35:00', '2021-07-27 05:35:00'),
(17, 5, 1, 1, 3, 'Amrut Ratnani pay for valyou song', 0, '2021-07-27 07:19:23', '2021-07-27 07:19:23'),
(18, 2, 1, 1, 4, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 08:30:05', '2021-07-27 08:30:05'),
(19, 2, 1, 1, 3, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 08:39:04', '2021-07-27 08:39:04'),
(20, 2, 1, 1, 4, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 08:47:23', '2021-07-27 08:47:23'),
(21, 2, 1, 3, 5, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 08:49:31', '2021-07-27 08:49:31'),
(22, 5, 1, 3, 5, 'Amrut Ratnani pay for valyou song', 0, '2021-07-27 08:58:34', '2021-07-27 08:58:34'),
(23, 2, 1, 1, 3, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 09:20:17', '2021-07-27 09:20:17'),
(24, 2, 1, 1, 3, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 09:20:59', '2021-07-27 09:20:59'),
(25, 2, 1, 1, 15, 'Amrut Ratnani pay for playing video', 0, '2021-07-27 10:27:26', '2021-07-27 10:27:26'),
(26, 5, 1, 1, 3, 'Amrut Ratnani pay for valyou song', 0, '2021-07-27 10:30:44', '2021-07-27 10:30:44'),
(27, 5, 1, 1, 3, 'Amrut Ratnani pay for valyou song', 0, '2021-07-27 10:32:53', '2021-07-27 10:32:53'),
(28, 5, 1, 1, 3, 'Amrut Ratnani pay for valyou song', 0, '2021-07-27 10:35:25', '2021-07-27 10:35:25'),
(29, 2, 6, 1, 15, 'priyanka kavaiya pay for playing video', 0, '2021-07-27 11:37:09', '2021-07-27 11:37:09'),
(30, 2, 3, 1, 15, 'Bobby Oparaocha pay for playing video', 0, '2021-07-27 17:03:12', '2021-07-27 17:03:12'),
(31, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 04:44:00', '2021-07-28 04:44:00'),
(32, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 05:10:43', '2021-07-28 05:10:43'),
(33, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:14:36', '2021-07-28 05:14:36'),
(34, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:16:36', '2021-07-28 05:16:36'),
(35, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:31:04', '2021-07-28 05:31:04'),
(36, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:34:31', '2021-07-28 05:34:31'),
(37, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:40:02', '2021-07-28 05:40:02'),
(38, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:46:45', '2021-07-28 05:46:45'),
(39, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:49:31', '2021-07-28 05:49:31'),
(40, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 05:49:50', '2021-07-28 05:49:50'),
(41, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 06:12:38', '2021-07-28 06:12:38'),
(42, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 06:19:19', '2021-07-28 06:19:19'),
(43, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:20:27', '2021-07-28 06:20:27'),
(44, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:21:07', '2021-07-28 06:21:07'),
(45, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:21:51', '2021-07-28 06:21:51'),
(46, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:24:10', '2021-07-28 06:24:10'),
(47, 5, 6, 1, 15, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:24:30', '2021-07-28 06:24:30'),
(48, 5, 1, 1, 4, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 06:25:51', '2021-07-28 06:25:51'),
(49, 5, 6, 1, 3, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:26:42', '2021-07-28 06:26:42'),
(50, 5, 6, 1, 4, 'priyanka kavaiya pay for valyou song', 0, '2021-07-28 06:27:09', '2021-07-28 06:27:09'),
(51, 5, 1, 6, 4, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 06:33:06', '2021-07-28 06:33:06'),
(52, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 06:43:32', '2021-07-28 06:43:32'),
(53, 5, 1, 1, 15, 'Amrut Ratnani pay for valyou song', 0, '2021-07-28 06:44:09', '2021-07-28 06:44:09'),
(54, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 07:10:24', '2021-07-28 07:10:24'),
(55, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:11:24', '2021-07-28 07:11:24'),
(56, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 1, '2021-07-28 07:14:34', '2021-07-29 13:16:28'),
(57, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:15:28', '2021-07-28 07:15:28'),
(58, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:16:21', '2021-07-28 07:16:21'),
(59, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:17:19', '2021-07-28 07:17:19'),
(60, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:18:33', '2021-07-28 07:18:33'),
(61, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:20:12', '2021-07-28 07:20:12'),
(62, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:20:40', '2021-07-28 07:20:40'),
(63, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:26:09', '2021-07-28 07:26:09'),
(64, 3, 6, 1, 3, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:26:56', '2021-07-28 07:26:56'),
(65, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 07:27:19', '2021-07-28 07:27:19'),
(66, 3, 1, 3, 5, 'Amrut Ratnani buy your stock', 0, '2021-07-28 07:28:33', '2021-07-28 07:28:33'),
(67, 3, 6, 4, 10, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:28:50', '2021-07-28 07:28:50'),
(68, 3, 6, 3, 5, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:29:18', '2021-07-28 07:29:18'),
(69, 3, 6, 3, 5, 'priyanka kavaiya buy your stock', 0, '2021-07-28 07:35:36', '2021-07-28 07:35:36'),
(70, 5, 3, 3, 5, 'Bobby Oparaocha pay for valyou song', 0, '2021-07-28 07:49:19', '2021-07-28 07:49:19'),
(71, 3, 6, 3, 5, 'priyanka kavaiya buy your stock', 0, '2021-07-28 08:24:52', '2021-07-28 08:24:52'),
(72, 3, 6, 3, 5, 'priyanka kavaiya buy your stock', 0, '2021-07-28 08:40:05', '2021-07-28 08:40:05'),
(73, 3, 1, 3, 5, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:21:59', '2021-07-28 09:21:59'),
(74, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:26:51', '2021-07-28 09:26:51'),
(75, 3, 1, 3, 5, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:36:33', '2021-07-28 09:36:33'),
(76, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:38:47', '2021-07-28 09:38:47'),
(77, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:42:40', '2021-07-28 09:42:40'),
(78, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:42:54', '2021-07-28 09:42:54'),
(79, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:43:55', '2021-07-28 09:43:55'),
(80, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:45:31', '2021-07-28 09:45:31'),
(81, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:45:37', '2021-07-28 09:45:37'),
(82, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:46:12', '2021-07-28 09:46:12'),
(83, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:46:32', '2021-07-28 09:46:32'),
(84, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:46:58', '2021-07-28 09:46:58'),
(85, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:47:26', '2021-07-28 09:47:26'),
(86, 3, 1, 4, 13, 'Amrut Ratnani buy your stock', 0, '2021-07-28 09:50:51', '2021-07-28 09:50:51'),
(87, 4, 4, 1, 13, 'Amrut Ratnani sell stock', 0, '2021-07-28 10:20:06', '2021-07-28 10:20:06'),
(88, 4, 4, 1, 13, 'Amrut Ratnani sell stock', 0, '2021-07-28 10:20:46', '2021-07-28 10:20:46'),
(89, 4, 4, 1, 13, 'Amrut Ratnani sell stock', 0, '2021-07-28 10:21:06', '2021-07-28 10:21:06'),
(90, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-07-28 10:55:12', '2021-07-28 10:55:12'),
(91, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:04:40', '2021-07-28 11:04:40'),
(92, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:13:58', '2021-07-28 11:13:58'),
(93, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:45:37', '2021-07-28 11:45:37'),
(94, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:46:41', '2021-07-28 11:46:41'),
(95, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:49:18', '2021-07-28 11:49:18'),
(96, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:50:45', '2021-07-28 11:50:45'),
(97, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:53:30', '2021-07-28 11:53:30'),
(98, 4, 3, 1, 7, 'Amrut Ratnani sell stock', 0, '2021-07-28 11:55:53', '2021-07-28 11:55:53'),
(99, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:56:38', '2021-07-28 11:56:38'),
(100, 3, 1, 3, 7, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:56:59', '2021-07-28 11:56:59'),
(101, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 11:59:08', '2021-07-28 11:59:08'),
(102, 3, 1, 9, 18, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:25:52', '2021-07-28 12:25:52'),
(103, 3, 1, 9, 18, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:26:05', '2021-07-28 12:26:05'),
(104, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:27:24', '2021-07-28 12:27:24'),
(105, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:32:08', '2021-07-28 12:32:08'),
(106, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:34:08', '2021-07-28 12:34:08'),
(107, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:37:10', '2021-07-28 12:37:10'),
(108, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:37:33', '2021-07-28 12:37:33'),
(109, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:49:17', '2021-07-28 12:49:17'),
(110, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 12:50:36', '2021-07-28 12:50:36'),
(111, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 1, '2021-07-28 12:52:36', '2021-07-29 12:58:27'),
(112, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 1, '2021-07-28 13:04:19', '2021-07-29 12:58:26'),
(113, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 1, '2021-07-28 13:04:41', '2021-07-29 12:58:24'),
(114, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 13:05:40', '2021-07-28 13:05:40'),
(115, 3, 1, 8, 17, 'Amrut Ratnani buy your stock', 0, '2021-07-28 13:06:09', '2021-07-28 13:06:09'),
(116, 4, 8, 1, 17, 'Amrut Ratnani sell stock', 0, '2021-07-28 13:08:12', '2021-07-28 13:08:12'),
(117, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 13:08:44', '2021-07-28 13:08:44'),
(118, 3, 1, 6, 4, 'Amrut Ratnani buy your stock', 0, '2021-07-28 13:08:59', '2021-07-28 13:08:59'),
(119, 3, 1, 6, 4, 'Amrut Ratnani Valyou\'s your song.', 0, '2021-07-29 06:14:04', '2021-07-29 06:14:04'),
(120, 5, 6, 3, 15, 'priyanka kavaiya pay for valyou song', 0, '2021-07-29 06:16:53', '2021-07-29 06:16:53'),
(121, 5, 9, 1, 15, 'Mike Tim pay for valyou song', 0, '2021-07-29 06:22:55', '2021-07-29 06:22:55'),
(122, 2, 1, 9, 18, 'Amrut Ratnani pay for playing video', 0, '2021-07-29 06:26:20', '2021-07-29 06:26:20'),
(123, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-29 06:26:42', '2021-07-29 06:26:42'),
(124, 2, 6, 9, 18, 'priyanka kavaiya pay for playing video', 0, '2021-07-29 06:28:19', '2021-07-29 06:28:19'),
(125, 5, 6, 9, 18, 'priyanka kavaiya pay for valyou song', 0, '2021-07-29 06:28:23', '2021-07-29 06:28:23'),
(126, 5, 6, 9, 18, 'priyanka kavaiya pay for valyou song', 0, '2021-07-29 06:28:58', '2021-07-29 06:28:58'),
(127, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 1, '2021-07-29 07:27:06', '2021-07-30 10:31:10'),
(128, 3, 1, 6, 4, 'Amrut Ratnani Valyou\'s your song.', 0, '2021-07-29 12:01:24', '2021-07-29 12:01:24'),
(129, 3, 6, 3, 5, 'priyanka kavaiya purchased stock in your brand', 0, '2021-07-29 12:04:48', '2021-07-29 12:04:48'),
(130, 5, 6, 9, 18, 'priyanka kavaiya pay for valyou song', 0, '2021-07-30 05:13:49', '2021-07-30 05:13:49'),
(131, 3, 1, 4, 14, 'Amrut Ratnani purchased stock in your brand', 0, '2021-07-30 06:13:00', '2021-07-30 06:13:00'),
(132, 3, 1, 4, 14, 'Amrut Ratnani purchased stock in your brand', 0, '2021-07-30 06:13:30', '2021-07-30 06:13:30'),
(133, 3, 1, 4, 14, 'Amrut Ratnani purchased stock in your brand', 0, '2021-07-30 06:14:07', '2021-07-30 06:14:07'),
(134, 3, 6, 9, 18, 'priyanka kavaiya Valyou\'s your song.', 0, '2021-07-30 07:02:41', '2021-07-30 07:02:41'),
(135, 3, 6, 9, 18, 'priyanka kavaiya Valyou\'s your song.', 0, '2021-07-30 07:06:13', '2021-07-30 07:06:13'),
(136, 3, 6, 9, 18, 'priyanka kavaiya Valyou\'s your song.', 0, '2021-07-30 07:09:45', '2021-07-30 07:09:45'),
(137, 3, 6, 9, 18, 'priyanka kavaiya Valyou\'s your song.', 0, '2021-07-30 07:28:31', '2021-07-30 07:28:31'),
(138, 3, 1, 8, 17, 'Amrut Ratnani Valyou\'s your song.', 0, '2021-07-30 09:41:41', '2021-07-30 09:41:41'),
(139, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 10:33:52', '2021-07-30 10:33:52'),
(140, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:02:20', '2021-07-30 11:02:20'),
(141, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:08:51', '2021-07-30 11:08:51'),
(142, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:09:50', '2021-07-30 11:09:50'),
(143, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:10:21', '2021-07-30 11:10:21'),
(144, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:11:13', '2021-07-30 11:11:13'),
(145, 2, 3, 9, 18, 'Bobby Oparaocha pay for playing video', 0, '2021-07-30 11:49:28', '2021-07-30 11:49:28'),
(146, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:56:57', '2021-07-30 11:56:57'),
(147, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 11:59:46', '2021-07-30 11:59:46'),
(148, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:05:38', '2021-07-30 12:05:38'),
(149, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:06:20', '2021-07-30 12:06:20'),
(150, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:06:52', '2021-07-30 12:06:52'),
(151, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:09:55', '2021-07-30 12:09:55'),
(152, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:28:44', '2021-07-30 12:28:44'),
(153, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:29:27', '2021-07-30 12:29:27'),
(154, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:29:50', '2021-07-30 12:29:50'),
(155, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:31:07', '2021-07-30 12:31:07'),
(156, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:33:00', '2021-07-30 12:33:00'),
(157, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:35:28', '2021-07-30 12:35:28'),
(158, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:41:54', '2021-07-30 12:41:54'),
(159, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:50:22', '2021-07-30 12:50:22'),
(160, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:52:41', '2021-07-30 12:52:41'),
(161, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:55:00', '2021-07-30 12:55:00'),
(162, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 12:55:56', '2021-07-30 12:55:56'),
(163, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 13:20:38', '2021-07-30 13:20:38'),
(164, 5, 1, 9, 18, 'Amrut Ratnani pay for valyou song', 0, '2021-07-30 13:23:52', '2021-07-30 13:23:52'),
(165, 2, 4, 9, 18, 'ALLAN MDEHWA pay for playing video', 0, '2021-07-31 10:26:32', '2021-07-31 10:26:32'),
(166, 3, 4, 3, 5, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-07-31 10:29:22', '2021-07-31 10:29:22'),
(167, 3, 4, 3, 5, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-07-31 10:29:25', '2021-07-31 10:29:25'),
(168, 3, 4, 3, 5, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-07-31 10:29:37', '2021-07-31 10:29:37'),
(169, 2, 4, 1, 15, 'ALLAN MDEHWA pay for playing video', 0, '2021-08-01 13:31:24', '2021-08-01 13:31:24'),
(170, 5, 4, 9, 18, 'ALLAN MDEHWA pay for valyou song', 0, '2021-08-01 13:32:55', '2021-08-01 13:32:55'),
(171, 1, 1, 11, NULL, 'Admin sent you monry', 1, '2021-08-02 07:01:54', '2021-08-02 07:02:53'),
(172, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-02 07:06:05', '2021-08-02 07:06:05'),
(173, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-02 07:06:05', '2021-08-02 07:06:05'),
(174, 3, 11, 3, 5, 'bhargav Dodiya purchased stock in your brand', 0, '2021-08-02 07:09:20', '2021-08-02 07:09:20'),
(175, 3, 11, 1, NULL, 'Fees for buying stock from Ed Sheeran to bhargav Dodiya', 0, '2021-08-02 07:09:20', '2021-08-02 07:09:20'),
(176, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-02 07:10:44', '2021-08-02 07:10:44'),
(177, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-02 07:10:44', '2021-08-02 07:10:44'),
(178, 2, 3, 3, 15, 'Bobby Oparaocha pay for playing video', 0, '2021-08-02 07:14:36', '2021-08-02 07:14:36'),
(179, 3, 3, 4, 9, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-08-02 07:16:24', '2021-08-02 07:16:24'),
(180, 3, 3, 1, NULL, 'Fees for buying stock from Eminem to Bobby Oparaocha', 0, '2021-08-02 07:16:24', '2021-08-02 07:16:24'),
(181, 3, 3, 4, 9, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-08-02 08:33:37', '2021-08-02 08:33:37'),
(182, 3, 3, 1, NULL, 'Fees for buying stock from Eminem to Bobby Oparaocha', 0, '2021-08-02 08:33:37', '2021-08-02 08:33:37'),
(183, 3, 11, 11, 19, 'bhargav Dodiya purchased stock in your brand', 0, '2021-08-02 11:02:09', '2021-08-02 11:02:09'),
(184, 3, 11, 1, NULL, 'Fees for buying stock from Bhargav\'s Music Company to bhargav Dodiya', 0, '2021-08-02 11:02:09', '2021-08-02 11:02:09'),
(185, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 05:15:48', '2021-08-03 05:15:48'),
(186, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 05:15:48', '2021-08-03 05:15:48'),
(187, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:02:04', '2021-08-03 06:02:04'),
(188, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:02:21', '2021-08-03 06:02:21'),
(189, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:02:21', '2021-08-03 06:02:21'),
(190, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:19:13', '2021-08-03 06:19:13'),
(191, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:19:13', '2021-08-03 06:19:13'),
(192, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:23:03', '2021-08-03 06:23:03'),
(193, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:23:03', '2021-08-03 06:23:03'),
(194, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:30:35', '2021-08-03 06:30:35'),
(195, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:30:35', '2021-08-03 06:30:35'),
(196, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:30:50', '2021-08-03 06:30:50'),
(197, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:30:50', '2021-08-03 06:30:50'),
(198, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:31:05', '2021-08-03 06:31:05'),
(199, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:31:05', '2021-08-03 06:31:05'),
(200, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:31:26', '2021-08-03 06:31:26'),
(201, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:31:26', '2021-08-03 06:31:26'),
(202, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:31:48', '2021-08-03 06:31:48'),
(203, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:31:48', '2021-08-03 06:31:48'),
(204, 3, 1, 3, 5, 'Amrut Ratnani purchased stock in your brand', 0, '2021-08-03 06:32:02', '2021-08-03 06:32:02'),
(205, 3, 1, 1, NULL, 'Fees for buying stock from Ed Sheeran to Amrut Ratnani', 0, '2021-08-03 06:32:02', '2021-08-03 06:32:02'),
(206, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:33:06', '2021-08-03 06:33:06'),
(207, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:33:06', '2021-08-03 06:33:06'),
(208, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:33:13', '2021-08-03 06:33:13'),
(209, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:33:13', '2021-08-03 06:33:13'),
(210, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:34:27', '2021-08-03 06:34:27'),
(211, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:34:27', '2021-08-03 06:34:27'),
(212, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:34:36', '2021-08-03 06:34:36'),
(213, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:34:36', '2021-08-03 06:34:36'),
(214, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:34:54', '2021-08-03 06:34:54'),
(215, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:34:54', '2021-08-03 06:34:54'),
(216, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:39:05', '2021-08-03 06:39:05'),
(217, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:39:05', '2021-08-03 06:39:05'),
(218, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:39:29', '2021-08-03 06:39:29'),
(219, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:39:29', '2021-08-03 06:39:29'),
(220, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:39:46', '2021-08-03 06:39:46'),
(221, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:39:46', '2021-08-03 06:39:46'),
(222, 3, 11, 1, 3, 'bhargav Dodiya Valyou\'s your song.', 0, '2021-08-03 06:42:48', '2021-08-03 06:42:48'),
(223, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:42:48', '2021-08-03 06:42:48'),
(224, 3, 11, 1, 3, 'bhargav Dodiya expressed interest to purchase stock in your brand', 0, '2021-08-03 06:48:18', '2021-08-03 06:48:18'),
(225, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:48:18', '2021-08-03 06:48:18'),
(226, 3, 11, 1, 3, 'bhargav Dodiya expressed interest to purchase stock in your brand', 0, '2021-08-03 06:49:29', '2021-08-03 06:49:29'),
(227, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:49:29', '2021-08-03 06:49:29'),
(228, 3, 11, 1, 3, 'bhargav Dodiya expressed interest to purchase stock in your brand', 0, '2021-08-03 06:52:07', '2021-08-03 06:52:07'),
(229, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:52:07', '2021-08-03 06:52:07'),
(230, 3, 11, 1, 3, 'bhargav Dodiya expressed interest to purchase stock in your brand', 0, '2021-08-03 06:54:22', '2021-08-03 06:54:22'),
(231, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:54:22', '2021-08-03 06:54:22'),
(232, 3, 11, 1, 3, 'bhargav Dodiya expressed interest to purchase stock in your brand', 0, '2021-08-03 06:55:35', '2021-08-03 06:55:35'),
(233, 3, 11, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to bhargav Dodiya', 0, '2021-08-03 06:55:35', '2021-08-03 06:55:35'),
(234, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-08-03 07:17:23', '2021-08-03 07:17:23'),
(235, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-08-03 07:32:27', '2021-08-03 07:32:27'),
(236, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-08-03 07:33:46', '2021-08-03 07:33:46'),
(237, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-08-03 07:34:21', '2021-08-03 07:34:21'),
(238, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-08-03 08:23:51', '2021-08-03 08:23:51'),
(239, 4, 3, 1, 5, 'Amrut Ratnani sell stock', 0, '2021-08-03 08:32:04', '2021-08-03 08:32:04'),
(240, 5, 1, 3, 5, 'Amrut Ratnanipay for valyou song', 0, '2021-08-03 08:56:35', '2021-08-03 08:56:35'),
(241, 1, 1, 11, NULL, 'Admin sent you monry', 0, '2021-08-03 09:16:16', '2021-08-03 09:16:16'),
(242, 1, 1, 11, NULL, 'Admin sent you monry', 0, '2021-08-03 09:16:40', '2021-08-03 09:16:40'),
(243, 1, 1, 11, NULL, 'Admin sent you monry', 0, '2021-08-03 09:17:28', '2021-08-03 09:17:28'),
(244, 5, 1, 9, 18, 'Amrut Ratnanipay for valyou song', 0, '2021-08-03 09:22:40', '2021-08-03 09:22:40'),
(245, 5, 1, 9, 18, 'Amrut Ratnanipay for valyou song', 0, '2021-08-03 09:24:07', '2021-08-03 09:24:07'),
(246, 1, 1, 11, NULL, 'Admin sent you monry', 0, '2021-08-03 09:33:05', '2021-08-03 09:33:05'),
(247, 1, 1, 11, NULL, 'Admin sent you monry', 0, '2021-08-03 09:35:08', '2021-08-03 09:35:08'),
(248, 1, 1, 11, NULL, 'Admin sent you monry', 0, '2021-08-03 09:55:28', '2021-08-03 09:55:28'),
(249, 3, 3, 4, 10, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-08-03 15:35:26', '2021-08-03 15:35:26'),
(250, 3, 3, 1, NULL, 'Fees for buying stock from Billie Eilish to Bobby Oparaocha', 0, '2021-08-03 15:35:26', '2021-08-03 15:35:26'),
(251, 2, 1, 1, 3, 'Amrut Ratnani pay for playing video', 0, '2021-08-04 06:18:07', '2021-08-04 06:18:07'),
(252, 3, 3, 1, 3, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-08-05 09:44:43', '2021-08-05 09:44:43'),
(253, 3, 3, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to Bobby Oparaocha', 0, '2021-08-05 09:44:43', '2021-08-05 09:44:43'),
(254, 3, 3, 1, 3, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-08-05 09:44:49', '2021-08-05 09:44:49'),
(255, 3, 3, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to Bobby Oparaocha', 0, '2021-08-05 09:44:49', '2021-08-05 09:44:49'),
(256, 2, 3, 1, 3, 'Bobby Oparaocha pay for playing video', 0, '2021-08-05 10:46:50', '2021-08-05 10:46:50'),
(257, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-08-05 10:48:38', '2021-08-05 10:48:38'),
(258, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-08-05 10:50:26', '2021-08-05 10:50:26'),
(259, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-08-05 10:50:42', '2021-08-05 10:50:42'),
(260, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-08-05 10:51:03', '2021-08-05 10:51:03'),
(261, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-08-05 10:55:38', '2021-08-05 10:55:38'),
(262, 2, 3, 1, 3, 'Bobby Oparaocha pay for playing video', 0, '2021-08-05 10:57:20', '2021-08-05 10:57:20'),
(263, 2, 3, 1, 3, 'Bobby Oparaocha pay for playing video', 0, '2021-08-05 10:58:42', '2021-08-05 10:58:42'),
(264, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-08-05 10:58:54', '2021-08-05 10:58:54'),
(265, 2, 3, 1, 3, 'Bobby Oparaocha pay for playing video', 0, '2021-08-05 10:59:23', '2021-08-05 10:59:23'),
(266, 2, 1, 1, 3, 'Amrut Ratnani pay for playing video', 0, '2021-08-09 06:34:21', '2021-08-09 06:34:21'),
(267, 5, 1, 1, 3, 'Amrut Ratnanipay for valyou song', 0, '2021-08-09 06:57:13', '2021-08-09 06:57:13'),
(268, 5, 1, 1, 3, 'Amrut Ratnanipay for valyou song', 0, '2021-08-09 09:03:04', '2021-08-09 09:03:04'),
(269, 2, 4, 1, 3, 'ALLAN MDEHWA pay for playing video', 0, '2021-08-13 08:04:15', '2021-08-13 08:04:15'),
(270, 3, 4, 3, 7, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-08-14 22:19:39', '2021-08-14 22:19:39'),
(271, 3, 4, 1, NULL, 'Fees for buying stock from Drake to ALLAN MDEHWA', 0, '2021-08-14 22:19:39', '2021-08-14 22:19:39'),
(272, 3, 4, 3, 7, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-08-14 22:19:42', '2021-08-14 22:19:42'),
(273, 3, 4, 1, NULL, 'Fees for buying stock from Drake to ALLAN MDEHWA', 0, '2021-08-14 22:19:42', '2021-08-14 22:19:42'),
(274, 3, 4, 3, 7, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-08-14 22:19:45', '2021-08-14 22:19:45'),
(275, 3, 4, 1, NULL, 'Fees for buying stock from Drake to ALLAN MDEHWA', 0, '2021-08-14 22:19:45', '2021-08-14 22:19:45'),
(276, 3, 4, 3, 7, 'ALLAN MDEHWA purchased stock in your brand', 0, '2021-08-14 22:19:46', '2021-08-14 22:19:46'),
(277, 3, 4, 1, NULL, 'Fees for buying stock from Drake to ALLAN MDEHWA', 0, '2021-08-14 22:19:46', '2021-08-14 22:19:46'),
(278, 1, 3, 5, NULL, 'Admin sent you monry', 0, '2021-08-19 01:04:45', '2021-08-19 01:04:45'),
(279, 5, 5, 1, 3, 'Harsh Desaipay for valyou song', 0, '2021-08-19 01:05:38', '2021-08-19 01:05:38'),
(280, 5, 5, 1, 3, 'Harsh Desaipay for valyou song', 0, '2021-08-19 01:39:37', '2021-08-19 01:39:37'),
(281, 2, 4, 1, 3, 'ALLAN MDEHWA pay for playing video', 0, '2021-08-21 04:33:40', '2021-08-21 04:33:40'),
(282, 2, 4, 1, 3, 'ALLAN MDEHWA pay for playing video', 0, '2021-08-29 21:48:53', '2021-08-29 21:48:53'),
(283, 5, 4, 1, 3, 'ALLAN MDEHWApay for valyou song', 0, '2021-08-29 21:49:14', '2021-08-29 21:49:14'),
(284, 3, 3, 4, 8, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-09-02 05:00:08', '2021-09-02 05:00:08'),
(285, 3, 3, 1, NULL, 'Fees for buying stock from Justin Bieber to Bobby Oparaocha', 0, '2021-09-02 05:00:08', '2021-09-02 05:00:08'),
(286, 3, 3, 4, 8, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-09-02 05:00:16', '2021-09-02 05:00:16'),
(287, 3, 3, 1, NULL, 'Fees for buying stock from Justin Bieber to Bobby Oparaocha', 0, '2021-09-02 05:00:16', '2021-09-02 05:00:16'),
(288, 3, 3, 3, 7, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-09-02 08:55:06', '2021-09-02 08:55:06'),
(289, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-09-02 08:55:06', '2021-09-02 08:55:06'),
(290, 3, 3, 3, 7, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-09-02 08:56:50', '2021-09-02 08:56:50'),
(291, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-09-02 08:56:50', '2021-09-02 08:56:50'),
(292, 3, 3, 3, 5, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-09-02 09:03:24', '2021-09-02 09:03:24'),
(293, 3, 3, 1, NULL, 'Fees for buying stock from Ed Sheeran to Bobby Oparaocha', 0, '2021-09-02 09:03:24', '2021-09-02 09:03:24'),
(294, 3, 3, 4, 8, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-09-02 09:23:47', '2021-09-02 09:23:47'),
(295, 3, 3, 1, NULL, 'Fees for buying stock from Justin Bieber to Bobby Oparaocha', 0, '2021-09-02 09:23:47', '2021-09-02 09:23:47'),
(296, 2, 3, 3, 5, 'Bobby Oparaocha pay for playing video', 0, '2021-09-25 11:07:19', '2021-09-25 11:07:19'),
(297, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-09-26 10:28:53', '2021-09-26 10:28:53'),
(298, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-09-26 10:29:24', '2021-09-26 10:29:24'),
(299, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-09-26 10:30:03', '2021-09-26 10:30:03'),
(300, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-09-26 10:30:35', '2021-09-26 10:30:35'),
(301, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-09-26 10:31:35', '2021-09-26 10:31:35'),
(302, 5, 3, 1, 3, 'Bobby Oparaochapay for valyou song', 0, '2021-09-26 10:33:16', '2021-09-26 10:33:16'),
(303, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-10-06 10:53:18', '2021-10-06 10:53:18'),
(304, 2, 3, 1, 3, 'Bobby Oparaocha pay for playing video', 0, '2021-10-07 07:44:22', '2021-10-07 07:44:22'),
(305, 3, 19, 3, 5, 'Roman Massalskiy purchased stock in your brand', 0, '2021-10-23 04:15:10', '2021-10-23 04:15:10'),
(306, 3, 19, 1, NULL, 'Fees for buying stock from Ed Sheeran to Roman Massalskiy', 0, '2021-10-23 04:15:10', '2021-10-23 04:15:10'),
(307, 3, 19, 3, 5, 'Roman Massalskiy purchased stock in your brand', 0, '2021-10-23 04:18:38', '2021-10-23 04:18:38'),
(308, 3, 19, 1, NULL, 'Fees for buying stock from Ed Sheeran to Roman Massalskiy', 0, '2021-10-23 04:18:38', '2021-10-23 04:18:38'),
(309, 3, 19, 3, 5, 'Roman Massalskiy purchased stock in your brand', 0, '2021-10-23 04:18:56', '2021-10-23 04:18:56'),
(310, 3, 19, 1, NULL, 'Fees for buying stock from Ed Sheeran to Roman Massalskiy', 0, '2021-10-23 04:18:56', '2021-10-23 04:18:56'),
(311, 3, 19, 3, 5, 'Roman Massalskiy purchased stock in your brand', 0, '2021-10-23 04:19:17', '2021-10-23 04:19:17'),
(312, 3, 19, 1, NULL, 'Fees for buying stock from Ed Sheeran to Roman Massalskiy', 0, '2021-10-23 04:19:17', '2021-10-23 04:19:17'),
(313, 3, 3, 3, 5, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-10-23 16:05:44', '2021-10-23 16:05:44'),
(314, 3, 3, 1, NULL, 'Fees for buying stock from Ed Sheeran to Bobby Oparaocha', 0, '2021-10-23 16:05:44', '2021-10-23 16:05:44'),
(315, 3, 3, 8, 17, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-23 17:24:46', '2021-10-23 17:24:46'),
(316, 3, 3, 1, NULL, 'Fees for buying stock from John Music Company to Bobby Oparaocha', 0, '2021-10-23 17:24:46', '2021-10-23 17:24:46'),
(317, 3, 3, 4, 12, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-23 17:40:17', '2021-10-23 17:40:17'),
(318, 3, 3, 1, NULL, 'Fees for buying stock from Taylor Swift to Bobby Oparaocha', 0, '2021-10-23 17:40:17', '2021-10-23 17:40:17'),
(319, 1, 3, 20, NULL, 'Admin sent you monry', 0, '2021-10-23 17:45:55', '2021-10-23 17:45:55'),
(320, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 17:48:11', '2021-10-23 17:48:11'),
(321, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 17:48:11', '2021-10-23 17:48:11'),
(322, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:04:12', '2021-10-23 18:04:12'),
(323, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:04:12', '2021-10-23 18:04:12'),
(324, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:06:59', '2021-10-23 18:06:59'),
(325, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:06:59', '2021-10-23 18:06:59'),
(326, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:08:15', '2021-10-23 18:08:15'),
(327, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:08:15', '2021-10-23 18:08:15'),
(328, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:10:46', '2021-10-23 18:10:46'),
(329, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:10:46', '2021-10-23 18:10:46'),
(330, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:11:04', '2021-10-23 18:11:04'),
(331, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:11:04', '2021-10-23 18:11:04'),
(332, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:29:32', '2021-10-23 18:29:32'),
(333, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:29:32', '2021-10-23 18:29:32'),
(334, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:29:50', '2021-10-23 18:29:50'),
(335, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:29:50', '2021-10-23 18:29:50'),
(336, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:30:22', '2021-10-23 18:30:22'),
(337, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:30:22', '2021-10-23 18:30:22'),
(338, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 18:31:32', '2021-10-23 18:31:32'),
(339, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 18:31:32', '2021-10-23 18:31:32'),
(340, 1, 3, 20, NULL, 'Admin sent you monry', 0, '2021-10-23 18:46:49', '2021-10-23 18:46:49'),
(341, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 20:43:14', '2021-10-23 20:43:14'),
(342, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 20:43:14', '2021-10-23 20:43:14'),
(343, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-23 21:18:58', '2021-10-23 21:18:58'),
(344, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-23 21:18:58', '2021-10-23 21:18:58'),
(345, 3, 3, 4, 12, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-24 13:20:46', '2021-10-24 13:20:46'),
(346, 3, 3, 1, NULL, 'Fees for buying stock from Taylor Swift to Bobby Oparaocha', 0, '2021-10-24 13:20:46', '2021-10-24 13:20:46'),
(347, 3, 3, 4, 12, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-24 13:21:35', '2021-10-24 13:21:35'),
(348, 3, 3, 1, NULL, 'Fees for buying stock from Taylor Swift to Bobby Oparaocha', 0, '2021-10-24 13:21:35', '2021-10-24 13:21:35'),
(349, 3, 3, 4, 12, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-24 13:22:31', '2021-10-24 13:22:31'),
(350, 3, 3, 1, NULL, 'Fees for buying stock from Taylor Swift to Bobby Oparaocha', 0, '2021-10-24 13:22:31', '2021-10-24 13:22:31'),
(351, 3, 19, 1, 3, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 13:25:36', '2021-10-24 13:25:36'),
(352, 3, 19, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to Roman Massalskiy', 0, '2021-10-24 13:25:36', '2021-10-24 13:25:36'),
(353, 3, 19, 1, 3, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 13:27:37', '2021-10-24 13:27:37'),
(354, 3, 19, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to Roman Massalskiy', 0, '2021-10-24 13:27:37', '2021-10-24 13:27:37'),
(355, 3, 19, 1, 3, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 13:28:46', '2021-10-24 13:28:46'),
(356, 3, 19, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to Roman Massalskiy', 0, '2021-10-24 13:28:46', '2021-10-24 13:28:46'),
(357, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 13:30:53', '2021-10-24 13:30:53'),
(358, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-24 13:30:53', '2021-10-24 13:30:53'),
(359, 3, 3, 4, 12, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-24 13:57:15', '2021-10-24 13:57:15'),
(360, 3, 3, 1, NULL, 'Fees for buying stock from Taylor Swift to Bobby Oparaocha', 0, '2021-10-24 13:57:15', '2021-10-24 13:57:15'),
(361, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 14:00:48', '2021-10-24 14:00:48'),
(362, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-24 14:00:48', '2021-10-24 14:00:48'),
(363, 3, 19, 4, 12, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 14:07:30', '2021-10-24 14:07:30'),
(364, 3, 19, 1, NULL, 'Fees for buying stock from Taylor Swift to Roman Massalskiy', 0, '2021-10-24 14:07:30', '2021-10-24 14:07:30'),
(365, 3, 19, 6, 4, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-24 14:09:49', '2021-10-24 14:09:49'),
(366, 3, 19, 1, NULL, 'Fees for buying stock from music to Roman Massalskiy', 0, '2021-10-24 14:09:49', '2021-10-24 14:09:49'),
(367, 1, 3, 10, NULL, 'Admin sent you monry', 0, '2021-10-24 15:27:49', '2021-10-24 15:27:49'),
(368, 3, 3, 6, 4, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-10-24 16:14:11', '2021-10-24 16:14:11'),
(369, 3, 3, 1, NULL, 'Fees for buying stock from music to Bobby Oparaocha', 0, '2021-10-24 16:14:11', '2021-10-24 16:14:11'),
(370, 2, 19, 1, 3, 'Roman Massalskiy pay for playing video', 0, '2021-10-29 14:42:28', '2021-10-29 14:42:28'),
(371, 2, 3, 3, 5, 'Bobby Oparaocha pay for playing video', 0, '2021-10-29 15:35:15', '2021-10-29 15:35:15'),
(372, 3, 19, 6, 4, 'Roman Massalskiy expressed interest to purchase stock in your brand', 0, '2021-10-31 18:25:10', '2021-10-31 18:25:10'),
(373, 3, 19, 1, NULL, 'Fees for buying stock from music to Roman Massalskiy', 0, '2021-10-31 18:25:10', '2021-10-31 18:25:10'),
(374, 3, 19, 6, 4, 'Roman Massalskiy expressed interest to sell stock in your brand', 0, '2021-10-31 18:26:47', '2021-10-31 18:26:47'),
(375, 3, 19, 1, NULL, 'Fees for buying stock from music to Roman Massalskiy', 0, '2021-10-31 18:26:47', '2021-10-31 18:26:47'),
(376, 3, 19, 6, 4, 'Roman Massalskiy expressed interest to sell stock in your brand', 0, '2021-10-31 18:27:31', '2021-10-31 18:27:31'),
(377, 3, 19, 1, NULL, 'Fees for buying stock from music to Roman Massalskiy', 0, '2021-10-31 18:27:31', '2021-10-31 18:27:31'),
(378, 3, 3, 1, 3, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-11-01 08:43:07', '2021-11-01 08:43:07'),
(379, 3, 3, 1, NULL, 'Fees for buying stock from Amrut\'s Artist to Bobby Oparaocha', 0, '2021-11-01 08:43:07', '2021-11-01 08:43:07'),
(380, 2, 4, 3, 5, 'ALLAN MDEHWA pay for playing video', 0, '2021-11-01 14:55:47', '2021-11-01 14:55:47'),
(381, 2, 3, 3, 5, 'Bobby Oparaocha pay for playing video', 0, '2021-11-01 17:50:37', '2021-11-01 17:50:37'),
(382, 2, 19, 3, 5, 'Roman Massalskiy watched your video for 0.03 cents', 0, '2021-11-02 22:50:21', '2021-11-02 22:50:21'),
(383, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-03 02:02:16', '2021-11-03 02:02:16'),
(384, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-03 19:26:12', '2021-11-03 19:26:12'),
(385, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-03 19:27:17', '2021-11-03 19:27:17'),
(386, 2, 19, 19, 21, 'Roman Massalskiy watched your video for 0.03 cents', 0, '2021-11-03 19:27:42', '2021-11-03 19:27:42'),
(387, 3, 3, 3, 7, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-03 19:35:27', '2021-11-03 19:35:27'),
(388, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-03 19:35:27', '2021-11-03 19:35:27'),
(389, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-03 19:37:08', '2021-11-03 19:37:08'),
(390, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-04 09:18:05', '2021-11-04 09:18:05'),
(391, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-04 09:30:13', '2021-11-04 09:30:13'),
(392, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-04 09:30:27', '2021-11-04 09:30:27'),
(393, 3, 3, 22, 23, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-11-04 19:21:00', '2021-11-04 19:21:00'),
(394, 3, 3, 1, NULL, 'Fees for buying stock from Antonia Kay to Bobby Oparaocha', 0, '2021-11-04 19:21:00', '2021-11-04 19:21:00'),
(395, 3, 3, 22, 23, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-11-04 19:23:56', '2021-11-04 19:23:56'),
(396, 3, 3, 1, NULL, 'Fees for buying stock from Antonia Kay to Bobby Oparaocha', 0, '2021-11-04 19:23:56', '2021-11-04 19:23:56'),
(397, 5, 3, 19, 21, 'Bobby Oparaochapay for valyou song', 0, '2021-11-04 20:02:23', '2021-11-04 20:02:23'),
(398, 3, 3, 22, 23, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-11-05 00:08:09', '2021-11-05 00:08:09'),
(399, 3, 3, 1, NULL, 'Fees for buying stock from Antonia Kay to Bobby Oparaocha', 0, '2021-11-05 00:08:09', '2021-11-05 00:08:09'),
(400, 3, 3, 3, 5, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-05 16:04:49', '2021-11-05 16:04:49'),
(401, 3, 3, 1, NULL, 'Fees for buying stock from Ed Sheeran to Bobby Oparaocha', 0, '2021-11-05 16:04:49', '2021-11-05 16:04:49'),
(402, 3, 3, 4, 8, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-05 16:05:18', '2021-11-05 16:05:18'),
(403, 3, 3, 1, NULL, 'Fees for buying stock from Justin Bieber to Bobby Oparaocha', 0, '2021-11-05 16:05:18', '2021-11-05 16:05:18'),
(404, 3, 3, 4, 9, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-05 16:05:45', '2021-11-05 16:05:45'),
(405, 3, 3, 1, NULL, 'Fees for buying stock from Eminem to Bobby Oparaocha', 0, '2021-11-05 16:05:45', '2021-11-05 16:05:45'),
(406, 3, 3, 4, 10, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-05 16:06:15', '2021-11-05 16:06:15'),
(407, 3, 3, 1, NULL, 'Fees for buying stock from Billie Eilish to Bobby Oparaocha', 0, '2021-11-05 16:06:15', '2021-11-05 16:06:15'),
(408, 3, 3, 14, 20, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-11-05 20:54:45', '2021-11-05 20:54:45'),
(409, 3, 3, 1, NULL, 'Fees for buying stock from Stino to Bobby Oparaocha', 0, '2021-11-05 20:54:45', '2021-11-05 20:54:45'),
(410, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-05 21:06:31', '2021-11-05 21:06:31'),
(411, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-06 07:52:15', '2021-11-06 07:52:15'),
(412, 5, 3, 19, 21, 'Bobby Oparaochapay for valyou song', 0, '2021-11-06 07:55:15', '2021-11-06 07:55:15'),
(413, 2, 3, 1, 3, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-06 09:26:16', '2021-11-06 09:26:16'),
(414, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-06 16:26:31', '2021-11-06 16:26:31'),
(415, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-06 16:27:31', '2021-11-06 16:27:31'),
(416, 3, 3, 3, 7, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-06 20:59:00', '2021-11-06 20:59:00'),
(417, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-06 20:59:00', '2021-11-06 20:59:00'),
(418, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-08 00:15:40', '2021-11-08 00:15:40'),
(419, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-08 00:19:24', '2021-11-08 00:19:24'),
(420, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-08 00:20:01', '2021-11-08 00:20:01'),
(421, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-08 17:32:27', '2021-11-08 17:32:27'),
(422, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-08 18:13:23', '2021-11-08 18:13:23'),
(423, 2, 14, 3, 5, 'alaji agostino watched your video for 0.03 cents', 0, '2021-11-08 18:21:41', '2021-11-08 18:21:41'),
(424, 2, 14, 19, 21, 'alaji agostino watched your video for 0.03 cents', 0, '2021-11-08 18:23:07', '2021-11-08 18:23:07'),
(425, 2, 19, 3, 5, 'Roman Massalskiy watched your video for 0.03 cents', 0, '2021-11-08 18:37:54', '2021-11-08 18:37:54'),
(426, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-08 23:20:39', '2021-11-08 23:20:39'),
(427, 2, 3, 1, 3, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-09 00:17:13', '2021-11-09 00:17:13'),
(428, 2, 14, 19, 21, 'alaji agostino watched your video for 0.03 cents', 0, '2021-11-09 07:35:42', '2021-11-09 07:35:42'),
(429, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-10 21:53:58', '2021-11-10 21:53:58'),
(430, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-11 05:14:59', '2021-11-11 05:14:59'),
(431, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-11 05:19:21', '2021-11-11 05:19:21'),
(432, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-11 05:19:34', '2021-11-11 05:19:34'),
(433, 2, 3, 19, 21, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-11 05:19:43', '2021-11-11 05:19:43'),
(434, 3, 3, 3, 7, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-11 08:55:46', '2021-11-11 08:55:46'),
(435, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-11 08:55:46', '2021-11-11 08:55:46'),
(436, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-11 13:26:14', '2021-11-11 13:26:14'),
(437, 3, 3, 4, 9, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-11 16:01:10', '2021-11-11 16:01:10'),
(438, 3, 3, 1, NULL, 'Fees for buying stock from Eminem to Bobby Oparaocha', 0, '2021-11-11 16:01:10', '2021-11-11 16:01:10'),
(439, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-11 16:11:12', '2021-11-11 16:11:12'),
(440, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-11-11 16:12:50', '2021-11-11 16:12:50'),
(441, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-12 03:40:39', '2021-11-12 03:40:39');
INSERT INTO `notifications` (`id`, `notification_type`, `from_user_id`, `to_user_id`, `artist_id`, `notification_text`, `status`, `created_at`, `updated_at`) VALUES
(442, 3, 3, 3, 7, 'Bobby Oparaocha sell stock in your brand', 0, '2021-11-13 15:03:59', '2021-11-13 15:03:59'),
(443, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-13 15:03:59', '2021-11-13 15:03:59'),
(444, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-11-14 14:19:36', '2021-11-14 14:19:36'),
(445, 2, 14, 14, 20, 'alaji agostino watched your video for 0.03 cents', 0, '2021-11-16 01:32:12', '2021-11-16 01:32:12'),
(446, 2, 3, 14, 20, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-16 10:22:36', '2021-11-16 10:22:36'),
(447, 1, 3, 23, NULL, 'Admin sent you monry', 0, '2021-11-16 19:27:53', '2021-11-16 19:27:53'),
(448, 3, 23, 4, 9, 'admin admin purchased stock in your brand', 0, '2021-11-16 19:28:30', '2021-11-16 19:28:30'),
(449, 3, 23, 1, NULL, 'Fees for buying stock from Eminem to admin admin', 0, '2021-11-16 19:28:30', '2021-11-16 19:28:30'),
(450, 5, 23, 14, 20, 'admin adminpay for valyou song', 0, '2021-11-16 19:41:06', '2021-11-16 19:41:06'),
(451, 2, 23, 14, 20, 'admin admin watched your video for 0.03 cents', 0, '2021-11-16 19:55:14', '2021-11-16 19:55:14'),
(452, 3, 3, 3, 7, 'Bobby Oparaocha sell stock in your brand', 0, '2021-11-18 08:17:44', '2021-11-18 08:17:44'),
(453, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-18 08:17:44', '2021-11-18 08:17:44'),
(454, 3, 3, 3, 7, 'Bobby Oparaocha sell stock in your brand', 0, '2021-11-18 08:18:38', '2021-11-18 08:18:38'),
(455, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-18 08:18:38', '2021-11-18 08:18:38'),
(456, 2, 3, 14, 20, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-19 12:14:30', '2021-11-19 12:14:30'),
(457, 3, 3, 4, 11, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-19 17:58:21', '2021-11-19 17:58:21'),
(458, 3, 3, 1, NULL, 'Fees for buying stock from Rihanna to Bobby Oparaocha', 0, '2021-11-19 17:58:21', '2021-11-19 17:58:21'),
(459, 3, 3, 4, 12, 'Bobby Oparaocha expressed interest to purchase stock in your brand', 0, '2021-11-19 17:59:32', '2021-11-19 17:59:32'),
(460, 3, 3, 1, NULL, 'Fees for buying stock from Taylor Swift to Bobby Oparaocha', 0, '2021-11-19 17:59:32', '2021-11-19 17:59:32'),
(461, 3, 3, 4, 13, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-19 17:59:54', '2021-11-19 17:59:54'),
(462, 3, 3, 1, NULL, 'Fees for buying stock from Queen (band) to Bobby Oparaocha', 0, '2021-11-19 17:59:54', '2021-11-19 17:59:54'),
(463, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-20 22:08:06', '2021-11-20 22:08:06'),
(464, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-20 22:08:07', '2021-11-20 22:08:07'),
(465, 2, 3, 14, 20, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-21 11:47:42', '2021-11-21 11:47:42'),
(466, 2, 3, 14, 20, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-21 11:48:21', '2021-11-21 11:48:21'),
(467, 2, 19, 19, 21, 'Roman Massalskiy watched your video for 0.03 cents', 0, '2021-11-23 05:09:04', '2021-11-23 05:09:04'),
(468, 2, 19, 19, 21, 'Roman Massalskiy watched your video for 0.03 cents', 0, '2021-11-23 12:30:42', '2021-11-23 12:30:42'),
(469, 3, 3, 3, 5, 'Bobby Oparaocha purchased stock in your brand', 0, '2021-11-23 15:36:01', '2021-11-23 15:36:01'),
(470, 3, 3, 1, NULL, 'Fees for buying stock from Ed Sheeran to Bobby Oparaocha', 0, '2021-11-23 15:36:01', '2021-11-23 15:36:01'),
(471, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-23 15:43:53', '2021-11-23 15:43:53'),
(472, 2, 3, 3, 5, 'Bobby Oparaocha watched your video for 0.03 cents', 0, '2021-11-23 15:45:49', '2021-11-23 15:45:49'),
(473, 5, 3, 3, 5, 'Bobby Oparaochapay for valyou song', 0, '2021-11-23 15:59:12', '2021-11-23 15:59:12'),
(474, 3, 3, 3, 7, 'Bobby Oparaocha sell stock in your brand', 0, '2021-11-24 09:58:32', '2021-11-24 09:58:32'),
(475, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-24 09:58:32', '2021-11-24 09:58:32'),
(476, 3, 3, 3, 7, 'Bobby Oparaocha sell stock in your brand', 0, '2021-11-24 09:58:53', '2021-11-24 09:58:53'),
(477, 3, 3, 1, NULL, 'Fees for buying stock from Drake to Bobby Oparaocha', 0, '2021-11-24 09:58:53', '2021-11-24 09:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(2, 'permission_create', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(3, 'permission_edit', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(4, 'permission_show', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(5, 'permission_delete', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(6, 'permission_access', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(7, 'role_create', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(8, 'role_edit', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(9, 'role_show', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(10, 'role_delete', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(11, 'role_access', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(12, 'user_create', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(13, 'user_edit', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(14, 'user_show', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(15, 'user_delete', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(16, 'user_access', 1, '2020-11-27 02:11:07', '2020-11-27 07:11:07', NULL),
(20, 'artist_access', 1, '2021-01-03 01:06:45', '2021-01-03 06:06:45', NULL),
(21, 'music_fan_access', 1, '2021-01-03 01:06:59', '2021-01-03 06:06:59', NULL),
(22, 'business_access', 1, '2021-04-04 03:18:04', '2021-04-04 03:18:04', NULL),
(23, 'admin_access', 1, '2021-01-03 05:31:37', '2021-01-03 10:31:37', NULL),
(24, 'artist_create', 1, '2021-04-02 07:13:02', '2021-04-02 12:13:02', NULL),
(25, 'artist_edit', 1, '2021-04-02 07:13:15', '2021-04-02 12:13:15', NULL),
(26, 'artist_show', 1, '2021-04-02 07:13:35', '2021-04-02 12:13:35', NULL),
(27, 'artist_delete', 1, '2021-04-02 07:13:49', '2021-04-02 12:13:49', NULL),
(28, 'business_create', 1, '2021-04-03 22:18:56', '2021-04-04 03:18:56', NULL),
(29, 'business_edit', 1, '2021-04-03 22:19:04', '2021-04-04 03:19:04', NULL),
(30, 'business_show', 1, '2021-04-03 22:19:13', '2021-04-04 03:19:13', NULL),
(31, 'business_delete', 1, '2021-04-03 22:19:25', '2021-04-04 03:19:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int UNSIGNED NOT NULL,
  `role_id` int DEFAULT NULL,
  `permission_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(36, 1, 20),
(37, 1, 21),
(38, 1, 22),
(41, 2, 20),
(42, 3, 21),
(43, 4, 22),
(44, 1, 23),
(45, 1, 24),
(46, 1, 25),
(47, 1, 26),
(48, 1, 27),
(49, 2, 24),
(50, 2, 25),
(51, 2, 26),
(52, 2, 27),
(53, 4, 28),
(54, 4, 29),
(55, 4, 30),
(56, 4, 31),
(57, 1, 28),
(58, 1, 29),
(59, 1, 30),
(60, 1, 31),
(61, 3, 24),
(62, 3, 28);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint UNSIGNED NOT NULL,
  `song_id` int DEFAULT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reward` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `song_id`, `type`, `budget`, `reward`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 91, '2', '25', '25', 1, '2021-08-05 22:52:06', '2021-08-05 22:52:06'),
(2, 91, '2', '25', '25', 11, '2021-08-05 23:11:34', '2021-08-05 23:11:34'),
(3, 91, '2', '25', '25', 11, '2021-08-05 23:13:28', '2021-08-05 23:13:28'),
(4, 91, '2', '25', '25', 11, '2021-08-06 05:23:07', '2021-08-06 05:23:07'),
(5, 91, '2', '25', '25', 11, '2021-08-06 05:25:19', '2021-08-06 05:25:19'),
(6, 91, '2', '25', '25', 1, '2021-08-06 05:27:07', '2021-08-06 05:27:07'),
(7, 91, '2', '25', '25', 11, '2021-08-06 05:29:24', '2021-08-06 05:29:24'),
(8, 91, '2', '25', '25', 1, '2021-08-06 05:30:41', '2021-08-06 05:30:41'),
(9, 91, '2', '25', '25', 1, '2021-08-06 05:47:57', '2021-08-06 05:47:57'),
(10, 91, '2', '25', '25', 1, '2021-08-06 05:50:24', '2021-08-06 05:50:24'),
(11, 91, '2', '25', '25', 1, '2021-08-06 05:50:37', '2021-08-06 05:50:37'),
(12, 91, '2', '25', '25', 1, '2021-08-06 06:21:22', '2021-08-06 06:21:22'),
(13, 91, '2', '25', '25', 11, '2021-08-06 06:22:47', '2021-08-06 06:22:47'),
(14, 91, '2', '25', '25', 1, '2021-08-06 07:01:42', '2021-08-06 07:01:42'),
(15, 91, '2', '25', '25', 1, '2021-08-06 07:23:44', '2021-08-06 07:23:44'),
(16, 91, '2', '25', '25', 1, '2021-08-06 07:36:14', '2021-08-06 07:36:14'),
(17, 91, '2', '25', '25', 1, '2021-08-06 07:37:10', '2021-08-06 07:37:10'),
(18, 91, '2', '25', '25', 1, '2021-08-06 07:44:33', '2021-08-06 07:44:33'),
(19, 91, '2', '25', '25', 1, '2021-08-06 07:45:15', '2021-08-06 07:45:15'),
(20, 91, '2', '25', '25', 1, '2021-08-06 07:45:45', '2021-08-06 07:45:45'),
(21, 91, '2', '25', '25', 1, '2021-08-06 07:45:57', '2021-08-06 07:45:57'),
(22, 91, '2', '25', '25', 1, '2021-08-06 07:47:11', '2021-08-06 07:47:11'),
(23, 91, '2', '25', '25', 1, '2021-08-06 07:48:42', '2021-08-06 07:48:42'),
(24, 91, '2', '25', '25', 1, '2021-08-06 07:50:32', '2021-08-06 07:50:32'),
(25, 91, '2', '25', '25', 11, '2021-08-06 08:19:42', '2021-08-06 08:19:42'),
(26, 91, '2', '25', '25', 11, '2021-08-08 23:19:40', '2021-08-08 23:19:40'),
(27, 91, '2', '25', '25', 11, '2021-08-08 23:20:52', '2021-08-08 23:20:52'),
(28, 91, '2', '25', '25', 11, '2021-08-08 23:22:42', '2021-08-08 23:22:42'),
(29, 91, '2', '25', '25', 11, '2021-08-08 23:27:48', '2021-08-08 23:27:48'),
(30, 91, '2', '25', '25', 11, '2021-08-08 23:28:29', '2021-08-08 23:28:29'),
(31, 91, '2', '25', '25', 11, '2021-08-08 23:29:32', '2021-08-08 23:29:32'),
(32, 91, '2', '25', '25', 11, '2021-08-08 23:30:07', '2021-08-08 23:30:07'),
(33, 91, '2', '25', '25', 11, '2021-08-08 23:31:20', '2021-08-08 23:31:20'),
(34, 91, '2', '25', '25', 11, '2021-08-08 23:31:39', '2021-08-08 23:31:39'),
(35, 91, '2', '25', '25', 11, '2021-08-08 23:33:37', '2021-08-08 23:33:37'),
(36, 91, '2', '25', '25', 11, '2021-08-09 00:31:27', '2021-08-09 00:31:27'),
(37, 91, '2', '25', '25', 11, '2021-08-09 00:32:31', '2021-08-09 00:32:31'),
(38, 91, '2', '25', '25', 11, '2021-08-09 00:32:49', '2021-08-09 00:32:49'),
(39, 91, '2', '25', '25', 11, '2021-08-09 00:45:49', '2021-08-09 00:45:49'),
(40, 91, '2', '25', '25', 11, '2021-08-09 00:46:01', '2021-08-09 00:46:01'),
(41, 91, '2', '25', '25', 11, '2021-08-09 00:58:39', '2021-08-09 00:58:39'),
(42, 91, '2', '25', '25', 3, '2021-08-30 16:13:58', '2021-08-30 16:13:58'),
(43, 104, '2', '25', '25', 19, '2021-11-23 17:02:43', '2021-11-23 17:02:43'),
(44, 107, '2', '10', '2', 3, '2021-11-23 18:03:17', '2021-11-23 18:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '2020-11-27 02:11:07', '2020-12-18 21:10:16', NULL),
(2, 'Artist', '2020-11-27 02:11:07', '2021-01-02 12:20:42', NULL),
(3, 'Music Fan (Investor)', '2020-12-22 11:51:20', '2021-01-02 12:23:37', NULL),
(4, 'Business', '2020-12-26 23:35:50', '2021-01-02 12:20:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int UNSIGNED NOT NULL,
  `role_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`) VALUES
(188, 3, 7),
(292, 3, 8),
(329, 3, 10),
(333, 2, 9),
(340, 3, 6),
(360, 3, 12),
(361, 3, 13),
(444, 2, 11),
(445, 3, 1),
(449, 3, 5),
(457, 3, 12),
(487, 3, 13),
(497, 3, 15),
(503, 3, 16),
(504, 3, 17),
(505, 3, 18),
(508, 3, 20),
(512, 3, 21),
(545, 2, 22),
(587, 2, 4),
(606, 3, 23),
(616, 2, 14),
(627, 2, 19),
(634, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `admin_fees` varchar(50) DEFAULT NULL,
  `increments` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `market_maker_price` float NOT NULL DEFAULT '0',
  `sell_limit` float NOT NULL DEFAULT '30',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `admin_fees`, `increments`, `market_maker_price`, `sell_limit`, `created_at`, `updated_at`) VALUES
(1, '4.99', '.0001', 0, 30, '2021-07-29 10:52:54', '2021-11-15 09:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `share_videos`
--

CREATE TABLE `share_videos` (
  `id` int NOT NULL,
  `share_by_user_id` int NOT NULL,
  `video_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `provider_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_transaction`
--

CREATE TABLE `stock_transaction` (
  `id` int NOT NULL,
  `type` tinyint NOT NULL COMMENT '1-sell,2-buy',
  `user_id` int NOT NULL,
  `artist_id` int NOT NULL,
  `quantity` int NOT NULL,
  `stock_value` varchar(255) NOT NULL,
  `total_cost` varchar(255) NOT NULL,
  `admin_cost` decimal(10,0) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `stock_transaction`
--

INSERT INTO `stock_transaction` (`id`, `type`, `user_id`, `artist_id`, `quantity`, `stock_value`, `total_cost`, `admin_cost`, `created_at`, `updated_at`) VALUES
(1, 2, 9, 17, 5, '6.0000', '30.0000', NULL, '2021-07-24 09:35:47', '2021-07-24 09:35:47'),
(2, 2, 8, 18, 10, '2.0000', '20.0000', NULL, '2021-07-24 10:33:09', '2021-07-24 10:33:09'),
(3, 2, 8, 17, 3, '60.0000', '180.0000', NULL, '2021-07-24 12:34:38', '2021-07-24 12:34:38'),
(4, 2, 8, 17, 3, '60.0000', '180.0000', NULL, '2021-07-24 12:35:05', '2021-07-24 12:35:05'),
(5, 2, 8, 4, 3, '1.0000', '3.0000', NULL, '2021-07-24 12:36:38', '2021-07-24 12:36:38'),
(6, 2, 9, 3, 8, '0.0400', '0.3200', NULL, '2021-07-24 12:41:22', '2021-07-24 12:41:22'),
(7, 2, 3, 18, 2, '2.0000', '4.0000', NULL, '2021-07-25 01:25:38', '2021-07-25 01:25:38'),
(8, 2, 6, 3, 4, '0.0400', '0.1600', NULL, '2021-07-26 07:21:43', '2021-07-26 07:21:43'),
(9, 2, 6, 3, 4, '0.0400', '0.1600', NULL, '2021-07-26 07:21:58', '2021-07-26 07:21:58'),
(10, 2, 9, 3, 6, '0.0400', '0.2400', NULL, '2021-07-26 08:27:56', '2021-07-26 08:27:56'),
(11, 2, 3, 5, 10, '0.8135', '8.1350', NULL, '2021-07-26 10:36:26', '2021-07-26 10:36:26'),
(12, 2, 1, 3, 1, '0.0400', '0.0400', NULL, '2021-07-27 05:30:51', '2021-07-27 05:30:51'),
(13, 2, 1, 4, 5, '1.0000', '5.0000', NULL, '2021-07-27 05:33:41', '2021-07-27 05:33:41'),
(14, 2, 1, 4, 11, '1.0000', '11.0000', NULL, '2021-07-28 07:10:24', '2021-07-28 07:10:24'),
(15, 2, 6, 3, 5, '0.0400', '0.2000', NULL, '2021-07-28 07:11:24', '2021-07-28 07:11:24'),
(16, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:14:34', '2021-07-28 07:14:34'),
(17, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:15:28', '2021-07-28 07:15:28'),
(18, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:16:21', '2021-07-28 07:16:21'),
(19, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:17:19', '2021-07-28 07:17:19'),
(20, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:18:33', '2021-07-28 07:18:33'),
(21, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:20:12', '2021-07-28 07:20:12'),
(22, 2, 6, 3, 2, '0.0400', '0.0800', NULL, '2021-07-28 07:20:40', '2021-07-28 07:20:40'),
(23, 2, 6, 3, 4, '0.0400', '0.1600', NULL, '2021-07-28 07:26:09', '2021-07-28 07:26:09'),
(24, 2, 6, 3, 4, '0.0400', '0.1600', NULL, '2021-07-28 07:26:56', '2021-07-28 07:26:56'),
(25, 2, 1, 4, 10, '1.0000', '10.0000', NULL, '2021-07-28 07:27:19', '2021-07-28 07:27:19'),
(26, 2, 1, 5, 10, '0.8135', '8.1350', NULL, '2021-07-28 07:28:33', '2021-07-28 07:28:33'),
(27, 2, 6, 10, 10, '0.4490', '4.4900', NULL, '2021-07-28 07:28:50', '2021-07-28 07:28:50'),
(28, 2, 6, 5, 10, '0.8135', '8.1350', NULL, '2021-07-28 07:29:18', '2021-07-28 07:29:18'),
(29, 2, 6, 5, 5, '0.8135', '4.0675', NULL, '2021-07-28 07:35:36', '2021-07-28 07:35:36'),
(30, 2, 6, 5, 5, '0.8135', '4.0675', NULL, '2021-07-28 08:24:52', '2021-07-28 08:24:52'),
(31, 2, 6, 5, 10, '0.8135', '8.1350', NULL, '2021-07-28 08:40:05', '2021-07-28 08:40:05'),
(32, 2, 1, 5, 5, '0.8135', '4.0675', NULL, '2021-07-28 09:21:59', '2021-07-28 09:21:59'),
(33, 2, 1, 4, 1, '1.0000', '1.0000', NULL, '2021-07-28 09:26:51', '2021-07-28 09:26:51'),
(34, 2, 1, 5, 5, '0.8135', '4.0675', NULL, '2021-07-28 09:36:33', '2021-07-28 09:36:33'),
(35, 2, 1, 4, 10, '1.0000', '10.0000', NULL, '2021-07-28 09:38:47', '2021-07-28 09:38:47'),
(36, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:42:40', '2021-07-28 09:42:40'),
(37, 2, 1, 4, 5, '1.0000', '5.0000', NULL, '2021-07-28 09:42:54', '2021-07-28 09:42:54'),
(38, 2, 1, 4, 1, '1.0000', '1.0000', NULL, '2021-07-28 09:43:55', '2021-07-28 09:43:55'),
(39, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:45:31', '2021-07-28 09:45:31'),
(40, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:45:37', '2021-07-28 09:45:37'),
(41, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:46:12', '2021-07-28 09:46:12'),
(42, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:46:32', '2021-07-28 09:46:32'),
(43, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:46:58', '2021-07-28 09:46:58'),
(44, 2, 1, 4, 2, '1.0000', '2.0000', NULL, '2021-07-28 09:47:26', '2021-07-28 09:47:26'),
(45, 2, 1, 13, 10, '0.3492', '3.4920', NULL, '2021-07-28 09:50:51', '2021-07-28 09:50:51'),
(46, 1, 1, 13, 3, '0.3492', '1.0476', NULL, '2021-07-28 10:20:06', '2021-07-28 10:20:06'),
(47, 1, 1, 13, 7, '0.3492', '2.4444', NULL, '2021-07-28 10:20:46', '2021-07-28 10:20:46'),
(48, 1, 1, 13, 1, '0.3492', '0.3492', NULL, '2021-07-28 10:21:06', '2021-07-28 10:21:06'),
(49, 1, 1, 5, 3, '0.8135', '2.4405', NULL, '2021-07-28 10:55:12', '2021-07-28 10:55:12'),
(50, 2, 1, 7, 10, '0.5534', '5.5340', NULL, '2021-07-28 11:04:40', '2021-07-28 11:04:40'),
(51, 2, 1, 7, 5, '0.5534', '2.7670', NULL, '2021-07-28 11:13:58', '2021-07-28 11:13:58'),
(52, 2, 1, 7, 5, '0.5534', '2.7670', NULL, '2021-07-28 11:45:37', '2021-07-28 11:45:37'),
(53, 2, 1, 7, 5, '0.5534', '2.7670', NULL, '2021-07-28 11:46:41', '2021-07-28 11:46:41'),
(54, 2, 1, 7, 5, '0.5534', '2.7670', NULL, '2021-07-28 11:49:18', '2021-07-28 11:49:18'),
(55, 2, 1, 7, 2, '0.5534', '1.1068', NULL, '2021-07-28 11:50:45', '2021-07-28 11:50:45'),
(56, 2, 1, 7, 2, '0.5534', '1.1068', NULL, '2021-07-28 11:53:30', '2021-07-28 11:53:30'),
(57, 1, 1, 7, 3, '0.5534', '1.6602', NULL, '2021-07-28 11:55:53', '2021-07-28 11:55:53'),
(58, 2, 1, 7, 1, '0.5534', '0.5534', NULL, '2021-07-28 11:56:38', '2021-07-28 11:56:38'),
(59, 2, 1, 7, 150, '0.5534', '83.0100', NULL, '2021-07-28 11:56:59', '2021-07-28 11:56:59'),
(60, 2, 1, 17, 4, '60.0000', '240.0000', NULL, '2021-07-28 11:59:08', '2021-07-28 11:59:08'),
(61, 2, 1, 18, 1, '2.0000', '2.0000', NULL, '2021-07-28 12:25:52', '2021-07-28 12:25:52'),
(62, 2, 1, 18, 1, '2.0000', '2.0000', NULL, '2021-07-28 12:26:05', '2021-07-28 12:26:05'),
(63, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:27:24', '2021-07-28 12:27:24'),
(64, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:32:08', '2021-07-28 12:32:08'),
(65, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:34:08', '2021-07-28 12:34:08'),
(66, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:37:10', '2021-07-28 12:37:10'),
(67, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:37:33', '2021-07-28 12:37:33'),
(68, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:49:17', '2021-07-28 12:49:17'),
(69, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:50:36', '2021-07-28 12:50:36'),
(70, 2, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 12:52:36', '2021-07-28 12:52:36'),
(71, 2, 1, 17, 3, '60.0000', '180.0000', NULL, '2021-07-28 13:04:19', '2021-07-28 13:04:19'),
(72, 2, 1, 17, 2, '60.0000', '120.0000', NULL, '2021-07-28 13:04:41', '2021-07-28 13:04:41'),
(73, 2, 1, 17, 10, '60.0000', '600.0000', NULL, '2021-07-28 13:05:40', '2021-07-28 13:05:40'),
(74, 2, 1, 17, 10, '60.0000', '600.0000', NULL, '2021-07-28 13:06:09', '2021-07-28 13:06:09'),
(75, 1, 1, 17, 5, '60.0000', '300.0000', NULL, '2021-07-28 13:08:12', '2021-07-28 13:08:12'),
(76, 2, 1, 4, 10, '1.0000', '10.0000', NULL, '2021-07-28 13:08:44', '2021-07-28 13:08:44'),
(77, 2, 1, 4, 1500, '1.0000', '1500.0000', NULL, '2021-07-28 13:08:59', '2021-07-28 13:08:59'),
(78, 2, 1, 4, 3, '1.0000', '3.0000', NULL, '2021-07-29 06:14:04', '2021-07-29 06:14:04'),
(79, 1, 1, 5, 16, '0.8135', '13.8295', NULL, '2021-07-29 07:27:06', '2021-07-29 07:27:06'),
(80, 2, 1, 4, 2, '1.0000', '12.0000', '10', '2021-07-29 12:01:24', '2021-07-29 12:01:24'),
(81, 2, 6, 5, 5, '0.8135', '29.0675', '25', '2021-07-29 12:04:48', '2021-07-29 12:04:48'),
(82, 2, 1, 14, 1, '0.3479', '0.3479', '5', '2021-07-30 06:13:00', '2021-07-30 06:13:00'),
(83, 2, 1, 14, 4, '0.3479', '21.3916', '20', '2021-07-30 06:13:30', '2021-07-30 06:13:30'),
(84, 2, 1, 14, 1500, '0.3479', '521.8500', '5', '2021-07-30 06:14:07', '2021-07-30 06:14:07'),
(85, 2, 6, 18, 5, '2.0000', '35.0000', '25', '2021-07-30 07:02:13', '2021-07-30 07:02:13'),
(86, 2, 6, 18, 5, '2.0000', '35.0000', '25', '2021-07-30 07:02:41', '2021-07-30 07:02:41'),
(87, 2, 6, 18, 5, '2.0000', '35.0000', '25', '2021-07-30 07:06:13', '2021-07-30 07:06:13'),
(88, 2, 6, 18, 5, '2.0000', '35.0000', '25', '2021-07-30 07:09:45', '2021-07-30 07:09:45'),
(89, 2, 6, 18, 1, '2.0000', '7.0000', '5', '2021-07-30 07:28:31', '2021-07-30 07:28:31'),
(90, 2, 1, 17, 3, '60.0000', '195.0000', '15', '2021-07-30 09:41:41', '2021-07-30 09:41:41'),
(91, 2, 4, 5, 1, '0.8135', '5.8135', '5', '2021-07-31 10:29:22', '2021-07-31 10:29:22'),
(92, 2, 4, 5, 1, '0.8135', '5.8135', '5', '2021-07-31 10:29:25', '2021-07-31 10:29:25'),
(93, 2, 4, 5, 1, '0.8135', '5.8135', '5', '2021-07-31 10:29:37', '2021-07-31 10:29:37'),
(94, 2, 11, 3, 5, '0.0400', '25.2000', '25', '2021-08-02 07:06:05', '2021-08-02 07:06:05'),
(95, 2, 11, 5, 5, '0.8135', '29.0675', '25', '2021-08-02 07:09:20', '2021-08-02 07:09:20'),
(96, 2, 11, 3, 2, '0.0400', '10.0800', '10', '2021-08-02 07:10:44', '2021-08-02 07:10:44'),
(97, 2, 3, 9, 15, '0.4679', '7.0185', '5', '2021-08-02 07:16:24', '2021-08-02 07:16:24'),
(98, 2, 3, 9, 10, '0.4679', '4.6790', '5', '2021-08-02 08:33:37', '2021-08-02 08:33:37'),
(99, 2, 11, 19, 4, '1.5000', '26.0000', '20', '2021-08-02 11:02:09', '2021-08-02 11:02:09'),
(100, 2, 11, 3, 2, '0.0400', '10.0800', '10', '2021-08-03 05:15:48', '2021-08-03 05:15:48'),
(101, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:02:04', '2021-08-03 06:02:04'),
(102, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:02:21', '2021-08-03 06:02:21'),
(103, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:05:18', '2021-08-03 06:05:18'),
(104, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:05:54', '2021-08-03 06:05:54'),
(105, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:07:02', '2021-08-03 06:07:02'),
(106, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:09:08', '2021-08-03 06:09:08'),
(107, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:11:27', '2021-08-03 06:11:27'),
(108, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:12:45', '2021-08-03 06:12:45'),
(109, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:17:38', '2021-08-03 06:17:38'),
(110, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:18:02', '2021-08-03 06:18:02'),
(111, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:18:53', '2021-08-03 06:18:53'),
(112, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:19:09', '2021-08-03 06:19:09'),
(113, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:19:34', '2021-08-03 06:19:34'),
(114, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:20:15', '2021-08-03 06:20:15'),
(115, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:21:38', '2021-08-03 06:21:38'),
(116, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:22:59', '2021-08-03 06:22:59'),
(117, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:24:03', '2021-08-03 06:24:03'),
(118, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:30:35', '2021-08-03 06:30:35'),
(119, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:30:50', '2021-08-03 06:30:50'),
(120, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:31:05', '2021-08-03 06:31:05'),
(121, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:31:26', '2021-08-03 06:31:26'),
(122, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:31:48', '2021-08-03 06:31:48'),
(123, 2, 1, 5, 1, '0.8135', '5.8135', '5', '2021-08-03 06:32:02', '2021-08-03 06:32:02'),
(124, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:33:06', '2021-08-03 06:33:06'),
(125, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:33:13', '2021-08-03 06:33:13'),
(126, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:34:27', '2021-08-03 06:34:27'),
(127, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:34:36', '2021-08-03 06:34:36'),
(128, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:34:54', '2021-08-03 06:34:54'),
(129, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:39:05', '2021-08-03 06:39:05'),
(130, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:39:29', '2021-08-03 06:39:29'),
(131, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:39:46', '2021-08-03 06:39:46'),
(132, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:42:48', '2021-08-03 06:42:48'),
(133, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:48:18', '2021-08-03 06:48:18'),
(134, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:49:29', '2021-08-03 06:49:29'),
(135, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:52:07', '2021-08-03 06:52:07'),
(136, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:54:22', '2021-08-03 06:54:22'),
(137, 2, 11, 3, 1, '0.0400', '5.04', '5', '2021-08-03 06:55:35', '2021-08-03 06:55:35'),
(138, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 07:09:09', '2021-08-03 07:09:09'),
(139, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 07:17:23', '2021-08-03 07:17:23'),
(140, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 07:32:27', '2021-08-03 07:32:27'),
(141, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 07:33:46', '2021-08-03 07:33:46'),
(142, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 07:34:21', '2021-08-03 07:34:21'),
(143, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 08:23:51', '2021-08-03 08:23:51'),
(144, 1, 1, 5, 1, '0.8135', '0.8135', NULL, '2021-08-03 08:32:04', '2021-08-03 08:32:04'),
(145, 2, 3, 10, 1, '0.4490', '5.449', '5', '2021-08-03 15:35:26', '2021-08-03 15:35:26'),
(146, 2, 3, 3, 10, '0.0400', '0.4000', '5', '2021-08-05 09:44:43', '2021-08-05 09:44:43'),
(147, 2, 3, 3, 10, '0.0400', '0.4000', '5', '2021-08-05 09:44:49', '2021-08-05 09:44:49'),
(148, 2, 4, 7, 1, '0.5534', '5.5534', '5', '2021-08-14 22:19:39', '2021-08-14 22:19:39'),
(149, 2, 4, 7, 1, '0.5534', '5.5534', '5', '2021-08-14 22:19:42', '2021-08-14 22:19:42'),
(150, 2, 4, 7, 1, '0.5534', '5.5534', '5', '2021-08-14 22:19:45', '2021-08-14 22:19:45'),
(151, 2, 4, 7, 1, '0.5534', '5.5534', '5', '2021-08-14 22:19:46', '2021-08-14 22:19:46'),
(152, 2, 3, 8, 6, '0.4679', '32.8074', '30', '2021-09-02 05:00:08', '2021-09-02 05:00:08'),
(153, 2, 3, 8, 6, '0.4679', '32.8074', '30', '2021-09-02 05:00:16', '2021-09-02 05:00:16'),
(154, 2, 3, 7, 100, '0.5534', '55.3400', '5', '2021-09-02 08:55:06', '2021-09-02 08:55:06'),
(155, 2, 3, 7, 100, '0.5534', '55.3400', '5', '2021-09-02 08:56:50', '2021-09-02 08:56:50'),
(156, 2, 3, 5, 10, '0.8135', '8.1350', '5', '2021-09-02 09:03:24', '2021-09-02 09:03:24'),
(157, 2, 3, 8, 10, '0.4679', '4.6790', '5', '2021-09-02 09:23:47', '2021-09-02 09:23:47'),
(158, 2, 19, 5, 1, '0.8135', '0.854175', '0', '2021-10-23 04:15:10', '2021-10-23 04:15:10'),
(159, 2, 19, 5, 10, '0.8235', '8.6692', '1', '2021-10-23 04:18:38', '2021-10-23 04:18:38'),
(160, 2, 19, 5, 1, '0.9235', '0.969675', '0', '2021-10-23 04:18:56', '2021-10-23 04:18:56'),
(161, 2, 19, 5, 2, '0.9335', '1.9608', '0', '2021-10-23 04:19:17', '2021-10-23 04:19:17'),
(162, 2, 3, 5, 10, '0.9535', '10.0343', '1', '2021-10-23 16:05:44', '2021-10-23 16:05:44'),
(163, 2, 3, 17, 1, '60.0000', '63.0000', '3', '2021-10-23 17:24:46', '2021-10-23 17:24:46'),
(164, 2, 3, 12, 4, '0.4071', '1.7128', '0', '2021-10-23 17:40:17', '2021-10-23 17:40:17'),
(165, 2, 19, 12, 3, '0.4471', '1.4099', '0', '2021-10-23 17:48:11', '2021-10-23 17:48:11'),
(166, 2, 19, 12, 1, '0.4771', '0.500955', '0', '2021-10-23 18:04:12', '2021-10-23 18:04:12'),
(167, 2, 19, 12, 3, '0.4871', '1.5359', '0', '2021-10-23 18:06:58', '2021-10-23 18:06:58'),
(168, 2, 19, 12, 1, '0.5171', '0.542955', '0', '2021-10-23 18:08:15', '2021-10-23 18:08:15'),
(169, 2, 19, 12, 1, '0.5271', '0.553455', '0', '2021-10-23 18:10:46', '2021-10-23 18:10:46'),
(170, 2, 19, 12, 1, '0.5371', '0.5640', '0', '2021-10-23 18:11:04', '2021-10-23 18:11:04'),
(171, 2, 19, 12, 1, '0.5471', '0.574455', '0', '2021-10-23 18:29:32', '2021-10-23 18:29:32'),
(172, 2, 19, 12, 3, '0.5571', '1.7564', '0', '2021-10-23 18:29:50', '2021-10-23 18:29:50'),
(173, 2, 19, 12, 3, '0.5871', '1.8509', '0', '2021-10-23 18:30:22', '2021-10-23 18:30:22'),
(174, 2, 19, 12, 1, '0.6171', '0.647955', '0', '2021-10-23 18:31:32', '2021-10-23 18:31:32'),
(175, 2, 19, 12, 100, '0.6271', '68.3205', '56', '2021-10-23 20:43:14', '2021-10-23 20:43:14'),
(176, 2, 19, 12, 111, '1.6271', '192.6910', '74', '2021-10-23 21:18:58', '2021-10-23 21:18:58'),
(177, 2, 3, 12, 10, '2.7371', '28.7620', '2', '2021-10-24 13:20:46', '2021-10-24 13:20:46'),
(178, 2, 3, 12, 10, '2.8371', '29.8120', '2', '2021-10-24 13:21:34', '2021-10-24 13:21:34'),
(179, 2, 3, 12, 22, '2.9371', '67.9625', '6', '2021-10-24 13:22:31', '2021-10-24 13:22:31'),
(180, 2, 19, 3, 3, '0.0400', '0.1275', '0', '2021-10-24 13:25:36', '2021-10-24 13:25:36'),
(181, 2, 19, 3, 15, '0.0700', '1.1550', '1', '2021-10-24 13:27:37', '2021-10-24 13:27:37'),
(182, 2, 19, 3, 110, '0.2200', '28.4075', '65', '2021-10-24 13:28:46', '2021-10-24 13:28:46'),
(183, 2, 19, 12, 8, '3.1571', '26.5336', '2', '2021-10-24 13:30:53', '2021-10-24 13:30:53'),
(184, 2, 3, 12, 100, '3.2371', '342.3705', '69', '2021-10-24 13:57:15', '2021-10-24 13:57:15'),
(185, 2, 19, 12, 1, '4.2371', '4.448955', '0', '2021-10-24 14:00:48', '2021-10-24 14:00:48'),
(186, 2, 19, 12, 100, '4.2471', '448.4205', '74', '2021-10-24 14:07:30', '2021-10-24 14:07:30'),
(187, 2, 19, 4, 3, '1.0000', '3.1515', '0', '2021-10-24 14:09:49', '2021-10-24 14:09:49'),
(188, 2, 3, 4, 1, '1.0000', '1.05', '0', '2021-10-24 16:14:11', '2021-10-24 16:14:11'),
(189, 2, 19, 4, 6, '1.0100', '6.3705', '1', '2021-10-31 18:25:10', '2021-10-31 18:25:10'),
(190, 1, 19, 4, 3, '1.0700', '3.0210', '0', '2021-10-31 18:26:47', '2021-10-31 18:26:47'),
(191, 1, 19, 4, 1, '1.0400', '0.988', '0', '2021-10-31 18:27:31', '2021-10-31 18:27:31'),
(192, 2, 3, 3, 2, '1.0000', '2.1005', '0', '2021-11-01 08:43:07', '2021-11-01 08:43:07'),
(193, 2, 3, 7, 2, '1.0000', '2.1005', '0', '2021-11-03 19:35:26', '2021-11-03 19:35:26'),
(194, 2, 3, 23, 10, '1.0000', '10.5225', '1', '2021-11-04 19:21:00', '2021-11-04 19:21:00'),
(195, 2, 3, 23, 1000, '1.1000', '1404.7500', '5310', '2021-11-04 19:23:56', '2021-11-04 19:23:56'),
(196, 2, 3, 23, 2, '1.1000', '2.3100', '0', '2021-11-05 00:08:09', '2021-11-05 00:08:09'),
(197, 2, 3, 5, 1, '1.0000', '1.05', '0', '2021-11-05 16:04:49', '2021-11-05 16:04:49'),
(198, 2, 3, 8, 1, '1.0000', '1.05', '0', '2021-11-05 16:05:18', '2021-11-05 16:05:18'),
(199, 2, 3, 9, 1, '1.0000', '1.05', '0', '2021-11-05 16:05:45', '2021-11-05 16:05:45'),
(200, 2, 3, 10, 1, '1.0000', '1.05', '0', '2021-11-05 16:06:15', '2021-11-05 16:06:15'),
(201, 2, 3, 20, 100, '1.0000', '105.0247', '6', '2021-11-05 20:54:45', '2021-11-05 20:54:45'),
(202, 2, 3, 7, 9, '1.0200', '9.6392', '0', '2021-11-06 20:59:00', '2021-11-06 20:59:00'),
(203, 2, 3, 7, 100, '1.0209', '107.2192', '6', '2021-11-11 08:55:46', '2021-11-11 08:55:46'),
(204, 2, 3, 9, 100, '1.0001', '105.0353', '6', '2021-11-11 16:01:10', '2021-11-11 16:01:10'),
(205, 1, 3, 7, 10, '1.0309', '9.7893', '1', '2021-11-13 15:03:59', '2021-11-13 15:03:59'),
(206, 2, 23, 9, 1, '1.0101', '1.06050399', '0', '2021-11-16 19:28:29', '2021-11-16 19:28:29'),
(207, 1, 3, 7, 2, '1.0299', '1.9569', '0', '2021-11-18 08:17:44', '2021-11-18 08:17:44'),
(208, 1, 3, 7, 2, '1.0297', '1.9565', '0', '2021-11-18 08:18:38', '2021-11-18 08:18:38'),
(209, 2, 3, 11, 1, '1.0000', '1.0499', '0', '2021-11-19 17:58:21', '2021-11-19 17:58:21'),
(210, 2, 3, 12, 1, '1.0000', '1.0499', '0', '2021-11-19 17:59:32', '2021-11-19 17:59:32'),
(211, 2, 3, 13, 1, '1.0000', '1.0499', '0', '2021-11-19 17:59:54', '2021-11-19 17:59:54'),
(212, 2, 3, 5, 20, '1.0001', '21.0010', '1', '2021-11-23 15:36:01', '2021-11-23 15:36:01'),
(213, 1, 3, 7, 1, '1.0295', '0.9781', '0', '2021-11-24 09:58:32', '2021-11-24 09:58:32'),
(214, 1, 3, 7, 1, '1.0294', '0.978', '0', '2021-11-24 09:58:53', '2021-11-24 09:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `upload_videos`
--

CREATE TABLE `upload_videos` (
  `id` int UNSIGNED NOT NULL,
  `type` tinyint DEFAULT NULL COMMENT '1-audio,2-video',
  `user_id` int DEFAULT NULL,
  `artist_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio_cover_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `singer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `music_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `starcast` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `video_id` int DEFAULT NULL,
  `share` tinyint DEFAULT '0' COMMENT '1-share',
  `copyright` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `earning_user` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invite_email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_videos`
--

INSERT INTO `upload_videos` (`id`, `type`, `user_id`, `artist_id`, `name`, `audio_cover_image`, `audio_title`, `singer`, `music_by`, `starcast`, `description`, `video_id`, `share`, `copyright`, `copyright_text`, `earning_user`, `invite_email`, `status`, `created_at`, `updated_at`) VALUES
(103, 2, 3, 5, 'assets/uploads/videos/147967631.mp4', NULL, NULL, NULL, NULL, NULL, 'Edsheeran Guitar X Strings', NULL, 0, 'Yes', '100', NULL, NULL, 1, '2021-11-11 13:25:34', '2021-11-11 13:25:34'),
(104, 2, 14, 20, 'assets/uploads/videos/1622355963.mp4', NULL, NULL, NULL, NULL, NULL, 'Stino - \"Fuck Your Energy\" Ft. Raizodope\'kid', NULL, 0, 'Co-owner', '70', 'RaizoDope\'kid', 'alajibord@gmail.com', 1, '2021-11-16 01:17:50', '2021-11-16 01:17:50'),
(105, 2, 3, 5, 'assets/uploads/videos/1644020841.mp4', NULL, NULL, NULL, NULL, NULL, 'Ed Shereen - Guitar X Strings', NULL, 0, NULL, NULL, NULL, NULL, 1, '2021-11-19 16:48:42', '2021-11-19 16:48:42'),
(106, 1, 3, 5, 'assets/uploads/videos/482697331.mp3', NULL, 'Last Mission', 'ED she', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2021-11-19 19:48:31', '2021-11-19 19:48:31'),
(107, 2, 19, 21, 'assets/uploads/videos/1989331524.mp4', NULL, NULL, NULL, NULL, NULL, 'Test upload Video', NULL, 0, 'Yes', NULL, NULL, NULL, 1, '2021-11-23 05:08:35', '2021-11-23 05:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_authenticate` tinyint(1) DEFAULT '1',
  `two_factor_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `timezone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `country`, `phone_number`, `email_verified_at`, `password`, `dob`, `wallet`, `avatar`, `remember_token`, `is_authenticate`, `two_factor_code`, `two_factor_expires_at`, `created_at`, `updated_at`, `is_admin`, `timezone`) VALUES
(1, 'Amrut', 'Ratnani', 'oyeamrut@gmail.com', 'IN', '9824815775', NULL, '$2y$10$jrdaOC07vp3TKEUc3owPl.d5wBArtBhJQBmdVGC46o5R7FjXldfCu', '1991-02-18', '5334.10930399', 'assets/uploads/user/854789885.jpg', NULL, 1, NULL, NULL, '2021-06-25 00:10:55', '2021-11-24 09:58:53', 1, ''),
(3, 'Bobby', 'Oparaocha', 'bobby.o@valyouxmusic.com', 'US', '0421908569', NULL, '$2y$10$c1k//rUMwLM.BKD3g4sSz.Lu3SIWtbiljGBaNejsYJXoHRhLTosE2', '1987-02-26', '98455.1583', 'assets/uploads/user/415903533.png', NULL, 1, NULL, NULL, '2021-06-25 05:12:02', '2021-11-24 09:58:53', 1, 'Australia/Sydney'),
(4, 'ALLAN', 'MDEHWA', 'vamdehwa@yahoo.co.uk', 'AU', '0405185986', NULL, '$2y$10$wKh7.MQ/ayBEmXkyns7IwOuJHINbgC4BCI6a94RuJgSmKgcfXWbk2', '1975-06-10', '100106.4944', 'assets/uploads/user/1992130222.png', NULL, 1, NULL, NULL, '2021-06-25 08:21:41', '2021-11-19 17:59:54', 0, ''),
(5, 'Harsh', 'Desai', 'valyouxd@gmail.com', 'US', '18125685474', NULL, '$2y$10$mnpqpwXK7oJ5M8Um5Pcn4eeG4zASeLfaZP8YdC6ASoD78nSzT31yi', '1996-09-10', '', 'assets/uploads/user/25876836.png', NULL, 1, NULL, NULL, '2021-06-29 19:28:18', '2021-10-23 16:05:44', 0, ''),
(6, 'priyanka', 'kavaiya', 'priyanka@lembits.com', 'IN', '+911234567891', NULL, '$2y$10$Ja.5wXe9cGlrVBMfxgfPpebqwpDNOI2ift1c9ooIeDZwjCa2JtlTy', '1994-12-01', '1.63', 'assets/uploads/user/1575468486.jpg', NULL, 1, NULL, NULL, '2021-07-05 04:12:23', '2021-10-31 18:27:31', 0, ''),
(7, 'Bongani', 'Ntini', 'ntinibongani7@gmail.com', 'ZA', '0612125640', NULL, '$2y$10$s6e2Ffp0RdRDmwRpFQYvgew8ob4XA.5ejdH4/nQ3omIwv7gl8GW9u', '1992-03-13', '', 'assets/uploads/user/1048253232.jpg', NULL, 1, NULL, NULL, '2021-07-12 11:49:16', '2021-07-12 11:49:16', 0, ''),
(8, 'John', 'Doe', 'john@doe.com', NULL, '1234567890', NULL, '$2y$10$.Q.j6pejN8j6uKFtgXySwOCOtxdPTwwuX/PVnN8Q28Z6M8h6i2Hxe', '1991-08-18', '', 'assets/uploads/user/322067509.jpg', NULL, 1, NULL, NULL, '2021-07-24 01:40:45', '2021-07-24 07:06:38', 0, ''),
(9, 'Mike', 'Tim', 'mike@tim.com', 'US', '789456120', NULL, '$2y$10$QZqFnzuX5UZmrcxc6tjQz.L8ipneTf.xwjidEuAWsreVqaXCQsptO', '1991-08-18', '', 'assets/uploads/user/1182249971.jpg', NULL, 1, NULL, NULL, '2021-07-24 04:04:25', '2021-08-03 03:54:07', 0, ''),
(10, 'Nneji', 'Oparaocha', 'nnejioparaocha@gmail.com', 'CA', '5193317598', NULL, '$2y$10$PP3z0MCNjb4hii6uUjeRbOOoXZYRAg4nK7RFfjiMfJ1h3qw6zj/EO', '1989-03-02', '', 'assets/uploads/user/1588029527.jpg', NULL, 1, NULL, NULL, '2021-07-28 20:17:40', '2021-10-24 15:27:49', 0, ''),
(11, 'bhargav', 'Dodiya', 'bhargav@lembits.com', 'IN', '1234567890', NULL, '$2y$10$RFp7XxgzuZCrQWApr83bsuK1P1Rc873jK5Oq9WLevbPPQdi7/N8Oy', '1991-05-18', '', 'assets/uploads/user/1708502489.jpg', NULL, 1, NULL, NULL, '2021-08-02 01:22:19', '2021-08-09 00:58:39', 0, ''),
(12, 'Atif', 'Khan', 'kashi861@gmail.com', 'PK', '033289451245', NULL, '$2y$10$WoSZgnqHS8t3407wMKrd8eckaiXZawwjH1ZwzF/4D/QhTun2o1cIK', '1985-08-20', '', 'assets/uploads/user/1006870548.jpg', NULL, 1, NULL, NULL, '2021-09-25 12:48:43', '2021-10-24 14:07:30', 0, ''),
(13, 'Zain', 'Raheel', 'zainraheel114@gmail.com', 'PK', '92-300-420-5990', NULL, '$2y$10$ihLbipXT0rA54/SWnZPWaeFNsdy1GCN4UpGi0Pii7wJqUFrK4PR3K', '1996-03-18', '', 'assets/uploads/user/1526577937.jpg', NULL, 1, NULL, NULL, '2021-09-29 06:46:31', '2021-09-29 06:46:31', 0, ''),
(14, 'alaji', 'agostino', 'alajibord@gmail.com', 'AU', '+61411361127', NULL, '$2y$10$Hdi0/8JIV1y8nZB8HbblaeNxkluUXm1bnMiElbGXufBQQlZBG4m.e', '1998-07-18', '125.465', 'assets/uploads/user/1440131042.jpeg', NULL, 1, NULL, NULL, '2021-09-30 02:29:06', '2021-11-23 17:02:43', 0, ''),
(15, 'Harsh', 'Desai', 'harsh@valyouxchange.com', 'US', '911', NULL, '$2y$10$GrEmxqJ.ee1HoK1JMzu3ruXgp05lsD1v1IU1n3/1wHRvBMKIb5RdS', '1996-01-01', '', 'assets/uploads/user/642097587.png', NULL, 1, NULL, NULL, '2021-10-06 00:24:51', '2021-10-06 00:24:51', 0, ''),
(16, 'fizzy', 'maliq', 'afeeztajudeen397@gmail.com', 'NG', '3414064904', NULL, '$2y$10$hAiU5LNTAO8avSlAkBTC4O0c6VdBVmdrFowYff/8TO3bXFfSpz38m', '1997-06-11', '', 'assets/uploads/user/95921474.png', NULL, 1, NULL, NULL, '2021-10-10 18:22:37', '2021-10-10 18:22:37', 0, ''),
(17, 'abdulrasheed', 'issa', 'abdulrasheedissa80@gmail.com', NULL, '234665467', NULL, '$2y$10$GUKIe1Xb6zS5s0c26oQq9e4F2BQozsgJHga0jQVKP9w1he5WfAw/y', '1999-05-05', '', 'assets/uploads/user/1337907670.jfif', NULL, 1, NULL, NULL, '2021-10-11 06:39:24', '2021-10-23 17:24:46', 0, ''),
(18, 'handel', 'france', 'freelancehandel@gmail.com', 'NG', '08149134030', NULL, '$2y$10$lTo.ChEe7wGs.PTKjByVSuVWNRMaWMSOErytGWFitvIx2HdsviCR2', '2000-02-24', '', 'assets/uploads/user/1377502870.PNG', NULL, 1, NULL, NULL, '2021-10-11 20:56:19', '2021-10-11 20:56:19', 0, ''),
(19, 'Roman', 'Massalskiy', 'sun.mount.1991@gmail.com', 'RU', '123456789', NULL, '$2y$10$rjQbUdJklZjaudDw1NhX1ucLoEfXSVV2ZhtkDIim0byKLYNG3eToq', '1991-05-12', '9986.8335', 'assets/uploads/user/866549667.jpeg', NULL, 1, NULL, NULL, '2021-10-14 23:45:45', '2021-11-23 18:03:17', 0, 'Europe/Moscow'),
(21, 'vicky', 'khan', 'vickysingh2341@gmail.com', 'IN', '9696692341', NULL, '$2y$10$qRHJaURCBDPeUSf.bIPEguqA8VWg1VFKoPR4JPLoDSk7GIYkzaYwq', '1988-10-12', '', 'assets/uploads/user/656210833.jpg', NULL, 1, NULL, NULL, '2021-10-18 22:19:34', '2021-10-18 22:19:34', 0, 'Asia/Kolkata'),
(22, 'Antonia', 'Kay', 'peaceofkay@gmail.com', 'AU', '0403875076', NULL, '$2y$10$mhr8dy166SBvsq2yvzdf8eRCfHr.Agbv1ydyFbqjmPPL4IplFsCa6', '1993-09-11', '-3893.3503', 'assets/uploads/user/1365957059.JPG', NULL, 1, NULL, NULL, '2021-11-04 18:08:43', '2021-11-05 00:08:09', 0, '0'),
(23, 'admin', 'admin', 'admin@admin.com', 'PK', '+9290078601', NULL, '$2y$10$ThXM2YYpAAGcs.jXalklluQpuHa2brfqxq5Sv1ZTjBreEbMSGD3ae', '1996-11-10', '7.90049601', 'assets/uploads/user/1540493487.jpeg', NULL, 1, NULL, NULL, '2021-11-13 15:17:11', '2021-11-16 19:55:14', 0, 'Europe/London');

-- --------------------------------------------------------

--
-- Table structure for table `vip_points`
--

CREATE TABLE `vip_points` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `artist_id` int NOT NULL,
  `amount` int NOT NULL,
  `points` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `vip_points`
--

INSERT INTO `vip_points` (`id`, `user_id`, `artist_id`, `amount`, `points`, `created_at`, `updated_at`) VALUES
(1, 1, 15, 5, 5, '2021-07-28 06:12:38', '2021-07-28 06:12:38'),
(2, 1, 15, 5, 5, '2021-07-28 06:19:18', '2021-07-28 06:19:18'),
(3, 6, 3, 5, 5, '2021-07-28 06:20:27', '2021-07-28 06:20:27'),
(4, 6, 3, 5, 5, '2021-07-28 06:21:07', '2021-07-28 06:21:07'),
(5, 6, 3, 4, 4, '2021-07-28 06:21:51', '2021-07-28 06:21:51'),
(6, 6, 3, 5, 5, '2021-07-28 06:24:10', '2021-07-28 06:24:10'),
(7, 6, 15, 4, 4, '2021-07-28 06:24:30', '2021-07-28 06:24:30'),
(8, 1, 4, 4, 4, '2021-07-28 06:25:51', '2021-07-28 06:25:51'),
(9, 6, 3, 5, 5, '2021-07-28 06:26:42', '2021-07-28 06:26:42'),
(10, 6, 4, 3, 3, '2021-07-28 06:27:09', '2021-07-28 06:27:09'),
(11, 1, 4, 4, 4, '2021-07-28 06:33:06', '2021-07-28 06:33:06'),
(12, 1, 15, 2, 2, '2021-07-28 06:43:32', '2021-07-28 06:43:32'),
(13, 1, 15, 5, 5, '2021-07-28 06:44:09', '2021-07-28 06:44:09'),
(14, 3, 5, 3, 3, '2021-07-28 07:49:19', '2021-07-28 07:49:19'),
(15, 1, 7, 3, 3, '2021-07-28 07:49:19', '2021-07-28 07:49:19'),
(16, 6, 15, 3, 3, '2021-07-29 06:16:53', '2021-07-29 06:16:53'),
(17, 9, 15, 3, 3, '2021-07-29 06:22:55', '2021-07-29 06:22:55'),
(18, 1, 18, 5, 5, '2021-07-29 06:26:42', '2021-07-29 06:26:42'),
(19, 6, 18, 4, 4, '2021-07-29 06:28:23', '2021-07-29 06:28:23'),
(20, 6, 18, 5, 5, '2021-07-29 06:28:58', '2021-07-29 06:28:58'),
(21, 6, 18, 5, 5, '2021-07-30 05:13:49', '2021-07-30 05:13:49'),
(22, 1, 18, 5, 5, '2021-07-30 10:33:52', '2021-07-30 10:33:52'),
(23, 1, 18, 5, 5, '2021-07-30 11:02:20', '2021-07-30 11:02:20'),
(24, 1, 18, 4, 4, '2021-07-30 11:08:51', '2021-07-30 11:08:51'),
(25, 1, 18, 4, 4, '2021-07-30 11:09:50', '2021-07-30 11:09:50'),
(26, 1, 18, 4, 4, '2021-07-30 11:10:21', '2021-07-30 11:10:21'),
(27, 1, 18, 4, 4, '2021-07-30 11:11:13', '2021-07-30 11:11:13'),
(28, 1, 18, 4, 4, '2021-07-30 11:56:57', '2021-07-30 11:56:57'),
(29, 1, 18, 4, 4, '2021-07-30 11:59:46', '2021-07-30 11:59:46'),
(30, 1, 18, 3, 3, '2021-07-30 12:05:38', '2021-07-30 12:05:38'),
(31, 1, 18, 3, 3, '2021-07-30 12:06:20', '2021-07-30 12:06:20'),
(32, 1, 18, 5, 5, '2021-07-30 12:06:52', '2021-07-30 12:06:52'),
(33, 1, 18, 4, 4, '2021-07-30 12:09:55', '2021-07-30 12:09:55'),
(34, 1, 18, 1, 1, '2021-07-30 12:28:44', '2021-07-30 12:28:44'),
(35, 1, 18, 1, 1, '2021-07-30 12:29:27', '2021-07-30 12:29:27'),
(36, 1, 18, 1, 1, '2021-07-30 12:29:50', '2021-07-30 12:29:50'),
(37, 1, 18, 1, 1, '2021-07-30 12:31:07', '2021-07-30 12:31:07'),
(38, 1, 18, 4, 4, '2021-07-30 12:33:00', '2021-07-30 12:33:00'),
(39, 1, 18, 5, 5, '2021-07-30 12:35:28', '2021-07-30 12:35:28'),
(40, 1, 18, 5, 5, '2021-07-30 12:41:54', '2021-07-30 12:41:54'),
(41, 1, 18, 4, 4, '2021-07-30 12:50:22', '2021-07-30 12:50:22'),
(42, 1, 18, 4, 4, '2021-07-30 12:52:41', '2021-07-30 12:52:41'),
(43, 1, 18, 3, 3, '2021-07-30 12:55:00', '2021-07-30 12:55:00'),
(44, 1, 18, 4, 4, '2021-07-30 12:55:56', '2021-07-30 12:55:56'),
(45, 1, 18, 3, 3, '2021-07-30 13:20:38', '2021-07-30 13:20:38'),
(46, 1, 18, 4, 4, '2021-07-30 13:23:52', '2021-07-30 13:23:52'),
(47, 4, 18, 4, 4, '2021-08-01 13:32:55', '2021-08-01 13:32:55'),
(48, 1, 5, 1, 1, '2021-08-03 08:56:35', '2021-08-03 08:56:35'),
(49, 1, 18, 2, 2, '2021-08-03 09:22:40', '2021-08-03 09:22:40'),
(50, 1, 18, 2, 2, '2021-08-03 09:24:07', '2021-08-03 09:24:07'),
(51, 3, 3, 3, 3, '2021-08-05 10:48:38', '2021-08-05 10:48:38'),
(52, 3, 3, 5, 5, '2021-08-05 10:50:26', '2021-08-05 10:50:26'),
(53, 3, 3, 5, 5, '2021-08-05 10:50:42', '2021-08-05 10:50:42'),
(54, 3, 3, 5, 5, '2021-08-05 10:51:03', '2021-08-05 10:51:03'),
(55, 3, 3, 5, 5, '2021-08-05 10:55:38', '2021-08-05 10:55:38'),
(56, 3, 3, 5, 5, '2021-08-05 10:58:54', '2021-08-05 10:58:54'),
(57, 1, 3, 1, 1, '2021-08-09 06:57:13', '2021-08-09 06:57:13'),
(58, 1, 3, 1, 1, '2021-08-09 09:03:04', '2021-08-09 09:03:04'),
(59, 5, 3, 1, 1, '2021-08-19 01:05:38', '2021-08-19 01:05:38'),
(60, 5, 3, 5, 5, '2021-08-19 01:39:37', '2021-08-19 01:39:37'),
(61, 4, 3, 1, 1, '2021-08-29 21:49:14', '2021-08-29 21:49:14'),
(62, 3, 5, 2, 2, '2021-09-26 10:28:53', '2021-09-26 10:28:53'),
(63, 3, 5, 2, 2, '2021-09-26 10:29:24', '2021-09-26 10:29:24'),
(64, 3, 5, 3, 3, '2021-09-26 10:30:03', '2021-09-26 10:30:03'),
(65, 3, 5, 5, 5, '2021-09-26 10:30:35', '2021-09-26 10:30:35'),
(66, 3, 5, 2, 2, '2021-09-26 10:31:35', '2021-09-26 10:31:35'),
(67, 3, 3, 2, 2, '2021-09-26 10:33:16', '2021-09-26 10:33:16'),
(68, 3, 5, 1, 1, '2021-10-06 10:53:18', '2021-10-06 10:53:18'),
(69, 3, 21, 3, 3, '2021-11-04 20:02:23', '2021-11-04 20:02:23'),
(70, 3, 21, 1, 1, '2021-11-06 07:55:15', '2021-11-06 07:55:15'),
(71, 3, 5, 5, 5, '2021-11-11 16:12:50', '2021-11-11 16:12:50'),
(72, 3, 5, 1, 1, '2021-11-14 14:19:36', '2021-11-14 14:19:36'),
(73, 23, 20, 1, 1, '2021-11-16 19:41:06', '2021-11-16 19:41:06'),
(74, 3, 5, 1, 1, '2021-11-23 15:59:12', '2021-11-23 15:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int NOT NULL,
  `type` tinyint NOT NULL DEFAULT '0' COMMENT '0-sendmoney,1-video,2-sell,3-buy,4-valyou song,5-promote song',
  `user_role` tinyint NOT NULL DEFAULT '1',
  `from_user_id` int NOT NULL,
  `to_user_id` int NOT NULL,
  `artist_id` int DEFAULT NULL,
  `token` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `admin_cost` decimal(10,0) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `video_id` int DEFAULT NULL,
  `vip_status` tinyint NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `type`, `user_role`, `from_user_id`, `to_user_id`, `artist_id`, `token`, `amount`, `admin_cost`, `note`, `video_id`, `vip_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 1, 3, '345563', '0.039', NULL, 'You watched the video of \"Amrut Kriated\" for 0.039cents', 3, 0, '2021-11-06 09:26:16', '2021-11-06 09:26:16'),
(2, 1, 3, 3, 19, 21, '559380', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 100, 0, '2021-11-06 16:26:31', '2021-11-06 16:26:31'),
(3, 1, 3, 3, 3, 5, '805881', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 97, 0, '2021-11-06 16:27:31', '2021-11-06 16:27:31'),
(4, 3, 3, 3, 3, 7, '831388', '9.18', NULL, 'Bobby Oparaocha purchased stock in your brand', NULL, 0, '2021-11-06 20:59:00', '2021-11-06 20:59:00'),
(5, 3, 1, 3, 1, NULL, '348280', '0.4592', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-06 20:59:00', '2021-11-06 20:59:00'),
(6, 3, 1, 3, 1, NULL, '578795', '0.0045', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-06 20:59:00', '2021-11-06 20:59:00'),
(7, 1, 3, 3, 19, 21, '613052', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 100, 0, '2021-11-08 00:15:40', '2021-11-08 00:15:40'),
(8, 1, 2, 3, 3, 5, '504102', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 101, 0, '2021-11-08 00:19:24', '2021-11-08 00:19:24'),
(9, 1, 2, 3, 3, 5, '198528', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 101, 0, '2021-11-08 00:20:01', '2021-11-08 00:20:01'),
(10, 1, 2, 3, 3, 5, '466121', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 101, 0, '2021-11-08 17:32:27', '2021-11-08 17:32:27'),
(11, 1, 2, 3, 19, 21, '608355', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 100, 0, '2021-11-08 18:13:23', '2021-11-08 18:13:23'),
(12, 1, 3, 14, 3, 5, '993593', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 101, 0, '2021-11-08 18:21:41', '2021-11-08 18:21:41'),
(13, 1, 3, 14, 19, 21, '488879', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 100, 0, '2021-11-08 18:23:07', '2021-11-08 18:23:07'),
(14, 1, 2, 19, 3, 5, '748451', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 101, 0, '2021-11-08 18:37:54', '2021-11-08 18:37:54'),
(15, 1, 2, 3, 19, 21, '108953', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 102, 0, '2021-11-08 23:20:39', '2021-11-08 23:20:39'),
(16, 1, 2, 3, 1, 3, '338279', '0.039', NULL, 'You watched the video of \"Amrut Kriated\" for 0.039cents', 3, 0, '2021-11-09 00:17:13', '2021-11-09 00:17:13'),
(17, 1, 3, 14, 19, 21, '467406', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 99, 0, '2021-11-09 07:35:42', '2021-11-09 07:35:42'),
(18, 1, 2, 3, 19, 21, '187774', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 102, 0, '2021-11-10 21:53:58', '2021-11-10 21:53:58'),
(19, 1, 2, 3, 3, 5, '519121', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 101, 0, '2021-11-11 05:14:59', '2021-11-11 05:14:59'),
(20, 1, 2, 3, 19, 21, '144686', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 102, 0, '2021-11-11 05:19:21', '2021-11-11 05:19:21'),
(21, 1, 2, 3, 19, 21, '195215', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 100, 0, '2021-11-11 05:19:34', '2021-11-11 05:19:34'),
(22, 1, 2, 3, 19, 21, '648861', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 98, 0, '2021-11-11 05:19:43', '2021-11-11 05:19:43'),
(23, 3, 2, 3, 3, 7, '482050', '102.09', NULL, 'Bobby Oparaocha purchased stock in your brand', NULL, 0, '2021-11-11 08:55:46', '2021-11-11 08:55:46'),
(24, 3, 1, 3, 1, NULL, '808158', '5.1292', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-11 08:55:46', '2021-11-11 08:55:46'),
(25, 3, 1, 3, 1, NULL, '789895', '0.5050', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-11 08:55:46', '2021-11-11 08:55:46'),
(26, 1, 2, 3, 3, 5, '657265', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 103, 0, '2021-11-11 13:26:14', '2021-11-11 13:26:14'),
(27, 3, 2, 3, 4, 9, '895073', '100.01', NULL, 'Bobby Oparaocha purchased stock in your brand', NULL, 0, '2021-11-11 16:01:10', '2021-11-11 16:01:10'),
(28, 3, 1, 3, 1, NULL, '223774', '5.0253', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-11 16:01:10', '2021-11-11 16:01:10'),
(29, 3, 1, 4, 1, NULL, '494000', '0.5050', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-11 16:01:10', '2021-11-11 16:01:10'),
(30, 1, 2, 3, 3, 5, '180281', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 103, 0, '2021-11-11 16:11:12', '2021-11-11 16:11:12'),
(31, 1, 3, 3, 3, 5, '337663', '5', NULL, 'Bobby Oparaocha pay for valyou song', NULL, 1, '2021-11-11 16:12:50', '2021-11-11 16:12:50'),
(32, 1, 2, 3, 3, 5, '950185', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 103, 0, '2021-11-12 03:40:39', '2021-11-12 03:40:39'),
(33, 3, 3, 3, 3, 7, '940633', '10.3045', NULL, 'Bobby Oparaocha sell stock in your brand', NULL, 0, '2021-11-13 15:03:59', '2021-11-13 15:03:59'),
(34, 3, 1, 3, 1, NULL, '318281', '0.5152', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-13 15:03:59', '2021-11-13 15:03:59'),
(35, 1, 3, 3, 3, 5, '603291', '1', NULL, 'Bobby Oparaocha pay for valyou song', NULL, 1, '2021-11-14 14:19:36', '2021-11-14 14:19:36'),
(36, 1, 2, 14, 14, 20, '950587', '0.039', NULL, 'You watched the video of \"Stino\" for 0.039cents', 104, 0, '2021-11-16 01:32:12', '2021-11-16 01:32:12'),
(37, 1, 1, 3, 14, 20, '806724', '0.039', NULL, 'You watched the video of \"Stino\" for 0.039cents', 104, 0, '2021-11-16 10:22:36', '2021-11-16 10:22:36'),
(38, 0, 4, 3, 23, NULL, '251617', '10', NULL, '2', NULL, 0, '2021-11-16 19:27:53', '2021-11-16 19:27:53'),
(39, 3, 3, 23, 4, 9, '806803', '1.0101', NULL, 'admin admin purchased stock in your brand', NULL, 0, '2021-11-16 19:28:30', '2021-11-16 19:28:30'),
(40, 3, 1, 23, 1, NULL, '532832', '0.05040399', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-16 19:28:30', '2021-11-16 19:28:30'),
(41, 3, 1, 4, 1, NULL, '327755', '0.0001', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-16 19:28:30', '2021-11-16 19:28:30'),
(42, 1, 3, 23, 14, 20, '193287', '1', NULL, 'admin admin pay for valyou song', NULL, 1, '2021-11-16 19:41:06', '2021-11-16 19:41:06'),
(43, 1, 3, 23, 14, 20, '887988', '0.039', NULL, 'You watched the video of \"Stino\" for 0.039cents', 104, 0, '2021-11-16 19:55:14', '2021-11-16 19:55:14'),
(44, 3, 3, 3, 3, 7, '599312', '2.0597', NULL, 'Bobby Oparaocha sell stock in your brand', NULL, 0, '2021-11-18 08:17:44', '2021-11-18 08:17:44'),
(45, 3, 1, 3, 1, NULL, '171504', '0.1028', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-18 08:17:44', '2021-11-18 08:17:44'),
(46, 3, 3, 3, 3, 7, '754005', '2.0593', NULL, 'Bobby Oparaocha sell stock in your brand', NULL, 0, '2021-11-18 08:18:38', '2021-11-18 08:18:38'),
(47, 3, 1, 3, 1, NULL, '999262', '0.1028', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-18 08:18:38', '2021-11-18 08:18:38'),
(48, 1, 3, 3, 14, 20, '560285', '0.039', NULL, 'You watched the video of \"Stino\" for 0.039cents', 104, 0, '2021-11-19 12:14:30', '2021-11-19 12:14:30'),
(49, 3, 2, 3, 4, 11, '182573', '1', NULL, 'Bobby Oparaocha purchased stock in your brand', NULL, 0, '2021-11-19 17:58:21', '2021-11-19 17:58:21'),
(50, 3, 1, 3, 1, NULL, '630349', '0.0499', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-19 17:58:21', '2021-11-19 17:58:21'),
(51, 3, 1, 4, 1, NULL, '524870', '0.0001', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-19 17:58:21', '2021-11-19 17:58:21'),
(52, 3, 2, 3, 4, 12, '150903', '1', NULL, 'Bobby Oparaocha expressed interest to purchase stock in your brand', NULL, 0, '2021-11-19 17:59:32', '2021-11-19 17:59:32'),
(53, 3, 1, 3, 1, NULL, '842790', '0.0499', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-19 17:59:32', '2021-11-19 17:59:32'),
(54, 3, 1, 4, 1, NULL, '560836', '0.0001', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-19 17:59:32', '2021-11-19 17:59:32'),
(55, 3, 2, 3, 4, 13, '125394', '1', NULL, 'Bobby Oparaocha purchased stock in your brand', NULL, 0, '2021-11-19 17:59:54', '2021-11-19 17:59:54'),
(56, 3, 1, 3, 1, NULL, '923956', '0.0499', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-19 17:59:54', '2021-11-19 17:59:54'),
(57, 3, 1, 4, 1, NULL, '275696', '0.0001', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-19 17:59:54', '2021-11-19 17:59:54'),
(58, 1, 2, 3, 3, 5, '298040', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 105, 0, '2021-11-20 22:08:06', '2021-11-20 22:08:06'),
(59, 1, 2, 3, 3, 5, '260177', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 105, 0, '2021-11-20 22:08:07', '2021-11-20 22:08:07'),
(60, 1, 2, 3, 14, 20, '311337', '0.039', NULL, 'You watched the video of \"Stino\" for 0.039cents', 104, 0, '2021-11-21 11:47:42', '2021-11-21 11:47:42'),
(61, 1, 2, 3, 14, 20, '585865', '0.039', NULL, 'You watched the video of \"Stino\" for 0.039cents', 104, 0, '2021-11-21 11:48:21', '2021-11-21 11:48:21'),
(62, 1, 2, 19, 19, 21, '805762', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 107, 0, '2021-11-23 05:09:04', '2021-11-23 05:09:04'),
(63, 1, 2, 19, 19, 21, '126842', '0.039', NULL, 'You watched the video of \"Sun Test\" for 0.039cents', 107, 0, '2021-11-23 12:30:42', '2021-11-23 12:30:42'),
(64, 3, 3, 3, 3, 5, '933169', '20.002', NULL, 'Bobby Oparaocha purchased stock in your brand', NULL, 0, '2021-11-23 15:36:01', '2021-11-23 15:36:01'),
(65, 3, 1, 3, 1, NULL, '771663', '0.999', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-23 15:36:01', '2021-11-23 15:36:01'),
(66, 3, 1, 3, 1, NULL, '606321', '0.0210', NULL, 'Fees for buying stock from artist', NULL, 0, '2021-11-23 15:36:01', '2021-11-23 15:36:01'),
(67, 1, 3, 3, 3, 5, '625479', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 105, 0, '2021-11-23 15:43:53', '2021-11-23 15:43:53'),
(68, 1, 3, 3, 3, 5, '276362', '0.039', NULL, 'You watched the video of \"Ed Sheeran\" for 0.039cents', 105, 0, '2021-11-23 15:45:49', '2021-11-23 15:45:49'),
(69, 1, 3, 3, 3, 5, '902261', '1', NULL, 'Bobby Oparaocha pay for valyou song', NULL, 1, '2021-11-23 15:59:12', '2021-11-23 15:59:12'),
(70, 5, 2, 19, 14, 20, '447946', '25', NULL, 'Promoted your video', 104, 0, '2021-11-23 17:02:43', '2021-11-23 17:02:43'),
(71, 5, 2, 19, 14, 20, '609009', '25', NULL, 'You Promoted video', 104, 0, '2021-11-23 17:02:43', '2021-11-23 17:02:43'),
(72, 5, 1, 3, 19, 21, '998159', '10', NULL, 'Promoted your video', 107, 0, '2021-11-23 18:03:17', '2021-11-23 18:03:17'),
(73, 5, 1, 3, 19, 21, '657791', '10', NULL, 'You Promoted video', 107, 0, '2021-11-23 18:03:17', '2021-11-23 18:03:17'),
(74, 3, 2, 3, 3, 7, '825981', '1.0295', NULL, 'Bobby Oparaocha sell stock in your brand', NULL, 0, '2021-11-24 09:58:32', '2021-11-24 09:58:32'),
(75, 3, 1, 3, 1, NULL, '331830', '0.0514', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-24 09:58:32', '2021-11-24 09:58:32'),
(76, 3, 2, 3, 3, 7, '959143', '1.0294', NULL, 'Bobby Oparaocha sell stock in your brand', NULL, 0, '2021-11-24 09:58:53', '2021-11-24 09:58:53'),
(77, 3, 1, 3, 1, NULL, '450595', '0.0514', NULL, 'Fees for buying stock from investors', NULL, 0, '2021-11-24 09:58:53', '2021-11-24 09:58:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist_points`
--
ALTER TABLE `artist_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cnt_id`),
  ADD KEY `cnt_code` (`cnt_code`);

--
-- Indexes for table `entity_promotions`
--
ALTER TABLE `entity_promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_videos`
--
ALTER TABLE `share_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_transaction`
--
ALTER TABLE `stock_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_videos`
--
ALTER TABLE `upload_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vip_points`
--
ALTER TABLE `vip_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `artist_points`
--
ALTER TABLE `artist_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cnt_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `entity_promotions`
--
ALTER TABLE `entity_promotions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=635;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `share_videos`
--
ALTER TABLE `share_videos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_transaction`
--
ALTER TABLE `stock_transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `upload_videos`
--
ALTER TABLE `upload_videos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `vip_points`
--
ALTER TABLE `vip_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
