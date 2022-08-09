-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 02:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ripple`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_global`
--

CREATE TABLE `tbl_global` (
  `search_cnt` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_global`
--

INSERT INTO `tbl_global` (`search_cnt`) VALUES
(15);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(256) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `usercode` varchar(256) NOT NULL,
  `search_cnt` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `firstname`, `lastname`, `password`, `usercode`, `search_cnt`) VALUES
(11, 'fullstackdev116@outlook.com', 'admin', 'clev', '123456', 'u1psqhf8', 4),
(12, 'clevery116@gmail.com', 'clevery', 'vlev', '123456', '4r@nb)t7', 0),
(13, 'fullstacdfkdev116@outlook.com', 'admin', 'sdio', '1', 't6@37r2(', 0),
(14, 'fullstacwekdev116@outlook.com', 'q', 'q', '123456', 'zbs0iqmo', 0),
(15, 'fullstackdev1sd16@outlook.com', 'q', 'w', '123456', '(@3vcj9h', 0),
(16, 'fullstackdevd1sd16@outlook.com', 'w', 'w', '123456', 'a19xdlz(', 0),
(17, 'fullstackdev11rt6@outlook.com', 'w', 'q', '123456', 'g!4ctahd', 0),
(18, 'fullstackdsaev116@outlook.com', 'w', 'w', '123456', '9z%j)@e(', 0),
(19, 'fullstackdesdv116@outlook.com', 'q', 'jio', '123456', 'yiut40cv', 0),
(20, 'fullstack23dev116@outlook.com', 'w', 'jio', '123456', '@%cmgy(o', 0),
(21, 'fullstack23devwe116@outlook.com', 'Maksym', 'Ilkiv', '123456', 'd3q!w269', 0),
(22, 'fullstdackdev116@outlook.com', 'we', 'sd', '123456', 'iw9jyfkd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
