-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 05:20 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--
CREATE DATABASE IF NOT EXISTS `news` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `news`;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(5) UNSIGNED NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `news_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `img_name`, `news_id`) VALUES
(1, '551433384.jpg', 64),
(2, 'Capture1.JPG', 64);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `slug` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `slug`) VALUES
(1, 'หาด 2015', 'Regardless of the season, we can always count on our favorite celebs to raise temperatures at the beach. Keep clicking to see the stars who''ve hit the sand in 2015, starting with Jessica Alba. The actress looked slim and fabulous while taking a dip in St. Barts on April 2, 2015. Keep reading for more beachside celebs', 'full-image-2015'),
(2, 'sese14569999999', 'se se 999 9999 999 ', 'sese'),
(3, 'asedr147', 'sdf asdfas asdfasdf', 'asedr'),
(4, 'asdf asdfasdf', 'asdfe adfasd', 'asdf-asdfasdf'),
(5, 'asdf asdf asdf asdf asdf ', 'asdfasdf adf', 'dedededed'),
(6, 'asdf asdf asdf asdf asdf ', 'asdfasdf adf', 'dedededed'),
(7, 'ddddd', 'd g d gdg dg', 'ddddd'),
(8, 'ddddd', 'd g d gdg dg', 'ddddd'),
(9, 'ddddd', 'd g d gdg dg', 'ddddd'),
(10, 'ddddd', 'd g d gdg dg', 'ddddd'),
(11, '14asdf asdf', 'asdfasdf', '14asdf-asdf'),
(12, '14asdf asdf', 'asdfasdf', '14asdf-asdf'),
(13, 'fd', 'dfasdf', 'fd'),
(14, 'fd', 'dfasdf', 'fd'),
(15, 'fd', 'dfasdf', 'fd'),
(16, 'sdfas', 'asdf', 'sdfas'),
(17, 'sdfas', 'asdf', 'sdfas'),
(18, 'กดฟ', 'ฟหกดฟหกด', 'กดฟ'),
(19, '14asdf asdf', 'asdf', '14asdf-asdf'),
(20, 'dsf', 'asdf', 'dsf'),
(21, 'sadf', 'asdf', 'sadf'),
(22, 'asdf', 'asdf', 'asdf'),
(23, 'asdf', 'asdf', 'asdf'),
(24, 'asdf', 'asdf', 'asdf'),
(25, 'asdf', 'asdf', 'asdf'),
(26, 'asdf', 'asdf', 'asdf'),
(27, 'asdf', 'asdf', 'asdf'),
(28, '14asdf asdf', 'asdf', '14asdf-asdf'),
(29, 'asdf', 'asdf', 'asdf'),
(30, 'asdf', 'asdf', 'asdf'),
(31, 'asdf', 'asdf', 'asdf'),
(32, 'asdf', 'asdf', 'asdf'),
(33, 'asdf', 'asdf', 'asdf'),
(34, 'asdf', 'asdf', 'asdf'),
(35, 'asdf', 'asdf', 'asdf'),
(36, 'asdfasdfe dcxfg', 'asdfa asdf adf', 'asdfasdfe-dcxfg'),
(37, 'asdfasdfe dcxfg', 'asdfa asdf adf', 'asdfasdfe-dcxfg'),
(38, 'asdfasdfe dcxfg', 'asdfa asdf adf', 'asdfasdfe-dcxfg'),
(39, 'asdf', 'asdf', 'asdf'),
(40, 'asdf', 'asdf', 'asdf'),
(41, 'asdf', 'asdf', 'asdf'),
(42, 'asdf', 'asdf', 'asdf'),
(43, 'dfg', 'vcvv', 'dfg'),
(44, 'dfg', 'vcvv', 'dfg'),
(45, 'f', 'sd', 'f'),
(46, 'ff', 'ff', 'ff'),
(47, 'ff', 'ff', 'ff'),
(48, 'asdf', 'asdfasd ', 'asdf'),
(49, 'dfad', 'asdf', 'dfad'),
(50, 'sdfsd', 'asdfasdf', 'sdfsd'),
(51, 'ffff', 'ffffffffff', 'ffff'),
(52, 'ffff', 'ffffffffff', 'ffff'),
(53, 'ggg', 'ggg', 'ggg'),
(54, 'ggg', 'ggg', 'ggg'),
(55, 'sdfasdf', 'asdfasdf', 'sdfasdf'),
(56, 'ddd', 'ddd', 'ddd'),
(57, 'asdas', 'asdasd', 'asdas'),
(58, 'asdf', 'asdf', 'asdf'),
(59, 'asdf', 'asdfasdfasdf', 'asdf'),
(60, 'asdf', 'asdfasdfasdf', 'asdf'),
(61, 'asdf', 'asdfasdfasdf', 'asdf'),
(62, 'asdfadsf', 'asdf asdf asdf', 'asdfadsf'),
(63, 'asdfadsf', 'asdf asdf asdf', 'asdfadsf'),
(64, 'asdf', 'asdfasd', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
