-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Jan 01, 2025 at 12:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `cookie`
--

CREATE TABLE `cookie` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cookie`
--

INSERT INTO `cookie` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(1, 'Chocolate Chip Cookies', 'cookie_1735698257_cookies.jpg', '<h2 id=\"cookie-name\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; text-align: center;\">Chocolate Chip Cookies</h2><p id=\"cookie-description\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: medium; color: rgb(123, 102, 125); line-height: 1.6; font-family: Arial, sans-serif; text-align: center;\">A classic cookie filled with delicious chocolate chips.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; text-align: center;\">Ingredients:</h3><ul id=\"cookie-ingredients\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; font-size: medium; text-align: center;\"><li style=\"margin: 0px; padding: 0px;\">Flour</li><li style=\"margin: 0px; padding: 0px;\">Sugar</li><li style=\"margin: 0px; padding: 0px;\">Butter</li><li style=\"margin: 0px; padding: 0px;\">Eggs</li><li style=\"margin: 0px; padding: 0px;\">Chocolate Chips</li></ul>', '2025-01-01 02:24:17'),
(4, 'Heart Sugar Cookies', 'cookie_1735699809_heart.jpg', '<h2 id=\"cookie-name\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; text-align: center;\">Heart Sugar Cookies</h2><p id=\"cookie-description\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: medium; color: rgb(123, 102, 125); line-height: 1.6; font-family: Arial, sans-serif; text-align: center;\">Cute heart-shaped cookies with a sweet sugar glaze.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; text-align: center;\">Ingredients:</h3><ul id=\"cookie-ingredients\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; font-size: medium; text-align: center;\"><li style=\"margin: 0px; padding: 0px;\">Flour</li><li style=\"margin: 0px; padding: 0px;\">Butter</li><li style=\"margin: 0px; padding: 0px;\">Sugar</li><li style=\"margin: 0px; padding: 0px;\">Vanilla</li><li style=\"margin: 0px; padding: 0px;\">Food Coloring</li></ul>', '2025-01-01 02:50:09'),
(5, 'Milky Orange Cookies', 'cookie_1735699869_milky.jpg', '<h2 id=\"cookie-name\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; text-align: center;\">Milky Orange Cookies</h2><p id=\"cookie-description\" style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; font-size: medium; color: rgb(123, 102, 125); line-height: 1.6; font-family: Arial, sans-serif; text-align: center;\">Soft and creamy cookies with a hint of orange.</p><h3 style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; text-align: center;\">Ingredients:</h3><ul id=\"cookie-ingredients\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(74, 74, 74); font-family: Arial, sans-serif; font-size: medium; text-align: center;\"><li style=\"margin: 0px; padding: 0px;\">Flour</li><li style=\"margin: 0px; padding: 0px;\">Milk</li><li style=\"margin: 0px; padding: 0px;\">Butter</li><li style=\"margin: 0px; padding: 0px;\">Orange Zest</li><li style=\"margin: 0px; padding: 0px;\">Sugar</li></ul>', '2025-01-01 02:51:09'),
-- --------------------------------------------------------
--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cookie`
--
ALTER TABLE `cookie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cookie`
--
ALTER TABLE `cookie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
