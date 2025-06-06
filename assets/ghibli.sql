-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2025 at 04:11 PM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghibli`
--

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

DROP TABLE IF EXISTS `credits`;
CREATE TABLE IF NOT EXISTS `credits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `director` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `writer` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `director`, `writer`, `created_at`, `updated_at`) VALUES
(1, 'Hayao Miyazaki', 'Hayao Miyazaki', '2024-03-08 12:57:32', '2024-03-08 12:57:32'),
(2, 'Isao Takahata', 'Isao Takahata', '2024-03-08 12:57:32', '2024-03-08 12:57:32'),
(3, 'Yoshifumi Kondô', 'Aoi Hiiragi, Hayao Miyazaki', '2024-03-08 12:57:32', '2024-03-08 12:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `credits_id` int NOT NULL,
  `release_date` date NOT NULL,
  `movie_image` varchar(125) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `posterSketch` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `credits_id`, `release_date`, `movie_image`, `created_at`, `updated_at`, `posterSketch`) VALUES
(2, 'Whisper of the Heart', 3, '1989-07-29', 'whisper-poster.jpg', '2024-03-07 21:20:36', '2024-03-07 21:20:36', 'whisper.jpg'),
(3, 'My Neighbour Tortoro', 1, '1988-04-16', 'totoro-poster.jpg', '2024-03-07 21:20:36', '2024-03-07 21:20:36', 'totoro.jpg'),
(4, 'Porko Roso', 2, '1994-07-16', 'porko-poster.jpg', '2024-03-07 21:20:36', '2024-03-07 21:20:36', 'porko.jpg'),
(5, 'Spirited Away', 1, '2001-07-20', 'spirited-poster.jpg', '2024-03-07 21:20:36', '2024-03-07 21:20:36', 'spirited.jpg'),
(6, 'Ponyo', 1, '2009-08-14', 'ponyo-poster.jpg', '2024-03-07 21:20:36', '2024-03-07 21:20:36', 'ponyo.jpg'),
(7, 'Howl\'s Moving Castle', 1, '2005-06-10', 'howls-poster.jpg', '2024-03-07 21:20:36', '2024-03-07 21:20:36', 'howls.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
