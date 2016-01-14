-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2016 at 03:55 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suthep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` varchar(10) NOT NULL,
  `Pa_admin` varchar(10) NOT NULL,
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `list_diseases`
--

CREATE TABLE `list_diseases` (
  `List_dieases` int(3) NOT NULL,
  `Name_diseases` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `House_id` varchar(15) NOT NULL,
  `Id_user` varchar(10) NOT NULL,
  `Survey_id` int(4) NOT NULL,
  `Adress_type` varchar(1) NOT NULL,
  `Venue_name` varchar(30) NOT NULL,
  `Fname_owner` varchar(30) NOT NULL,
  `Lname_owner` varchar(30) NOT NULL,
  `List_village` varchar(2) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Status_esta` varchar(1) NOT NULL,
  `Genre_waste` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `Id_user` varchar(10) NOT NULL,
  `Pa_user` varchar(10) NOT NULL,
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `Gender` int(1) NOT NULL,
  `Birthday` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Join_date` varchar(4) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Village_level` varchar(30) DEFAULT NULL,
  `Parish_level` varchar(30) DEFAULT NULL,
  `Etc` varchar(100) DEFAULT NULL,
  `Check` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Id_user`, `Pa_user`, `F_name`, `L_name`, `Gender`, `Birthday`, `Phone`, `Join_date`, `Address`, `Village_level`, `Parish_level`, `Etc`, `Check`) VALUES
('142536789', 'asdfasdf', 'asdf', 'asdf', 0, '1994-12-12', '', '2500', '0masdf', '', '', '', 0),
('asdf', 'asdfasdf', 'asdf', 'asdf', 0, '2016-01-12', '', '2500', '0masdf', '', '', '', 0),
('asdf3333', 'asdfasdf', 'asdf', 'asdf', 0, '0000-00-00', '', '2500', '0masdf', '', '', '', 0),
('asdf333314', 'asdfasdf', 'asdf', 'asdf', 0, '2558-12-13', '', '2500', '0masdf', '', '', '', 0),
('dearx02', '462502853d', 'ธนะพงศ์', 'ยศธิ', 0, '0000-00-00', '0826971830', '2558', '6m18/2อโสก2', 'ไม่มี', 'ไม่มี', 'ไม่มี', 0),
('rrrrrrr', 'asdfasdf', 'pppppp', 'eeeeeee', 0, '0000-00-00', '', '2505', '6msd', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movement_diseases`
--

CREATE TABLE `movement_diseases` (
  `Movement_disid` int(6) NOT NULL,
  `People_id` int(4) NOT NULL,
  `List_diseases` int(3) NOT NULL,
  `Date_progress` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `People_id` int(4) NOT NULL,
  `House_id` varchar(15) NOT NULL,
  `F_name` varchar(30) NOT NULL,
  `L_name` varchar(30) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Family_ties` varchar(1) NOT NULL,
  `Contraception` varchar(1) DEFAULT NULL,
  `Movement_disid` int(3) DEFAULT NULL,
  `Physical_defect` varchar(50) DEFAULT NULL,
  `Status` varchar(20) NOT NULL,
  `Education` varchar(50) NOT NULL,
  `Job` varchar(50) NOT NULL,
  `Life_status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `Move_petid` int(4) NOT NULL,
  `House_id` varchar(15) NOT NULL,
  `Pet_id` varchar(2) NOT NULL,
  `Other` varchar(30) DEFAULT NULL,
  `Gender_pet0` int(2) DEFAULT NULL,
  `Gender_pet1` int(2) DEFAULT NULL,
  `Date_save` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `progress_member`
--

CREATE TABLE `progress_member` (
  `Sequence` int(3) NOT NULL,
  `Id_user` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `History_award` int(1) DEFAULT NULL,
  `History_awardex` varchar(2) DEFAULT NULL,
  `Directorship` varchar(100) DEFAULT NULL,
  `Train_record` varchar(50) DEFAULT NULL,
  `Diploma` varchar(30) DEFAULT NULL,
  `Portfolio` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `Survey_id` int(4) NOT NULL,
  `Id_user` varchar(10) NOT NULL,
  `Date_survey` date NOT NULL,
  `Check` int(1) NOT NULL,
  `Id_admin` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `list_diseases`
--
ALTER TABLE `list_diseases`
  ADD PRIMARY KEY (`List_dieases`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`House_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`Id_user`);

--
-- Indexes for table `movement_diseases`
--
ALTER TABLE `movement_diseases`
  ADD PRIMARY KEY (`Movement_disid`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`People_id`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`Move_petid`);

--
-- Indexes for table `progress_member`
--
ALTER TABLE `progress_member`
  ADD PRIMARY KEY (`Sequence`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`Survey_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_diseases`
--
ALTER TABLE `list_diseases`
  MODIFY `List_dieases` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `movement_diseases`
--
ALTER TABLE `movement_diseases`
  MODIFY `Movement_disid` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `People_id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `Move_petid` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `progress_member`
--
ALTER TABLE `progress_member`
  MODIFY `Sequence` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `Survey_id` int(4) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
