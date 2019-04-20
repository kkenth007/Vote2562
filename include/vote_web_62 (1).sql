-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 01:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote_web_62`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_applicant`
--

CREATE TABLE `table_applicant` (
  `temp_id` int(12) NOT NULL,
  `candidate_number` int(250) NOT NULL,
  `logo` text NOT NULL,
  `party_name` varchar(70) NOT NULL,
  `candidate_name` varchar(70) NOT NULL,
  `candidate_picture` text NOT NULL,
  `candidate_id` varchar(60) NOT NULL,
  `area_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_applicant`
--

INSERT INTO `table_applicant` (`temp_id`, `candidate_number`, `logo`, `party_name`, `candidate_name`, `candidate_picture`, `candidate_id`, `area_id`) VALUES
(1, 1, './logo/pracharat.jpg', 'พรรคพลังประชารัฐ', 'นาย วันชัย บุษบา', './pic/1LEI1.jpg', '1LEI1', 'LEI1'),
(2, 2, './logo/pakpeathai.png', 'พรรคเพื่อไทย', 'นาย เลิศศักดิ์ พัฒนชัยกุล', './pic/2LEI1.jpg', '2LEI1', 'LEI1'),
(3, 3, './logo/newfeature.jpg', 'พรรคอนาคตใหม่', 'นาย ไมตรี วาที', './pic/3LEI1.jpg', '3LEI1', 'LEI1');

-- --------------------------------------------------------

--
-- Table structure for table `table_area`
--

CREATE TABLE `table_area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(70) NOT NULL,
  `province` varchar(70) NOT NULL,
  `prov` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_area`
--

INSERT INTO `table_area` (`area_id`, `area_name`, `province`, `prov`) VALUES
(1, 'LEI1', 'เลย', 'LEI'),
(2, 'LEI2', 'เลย', 'LEI'),
(3, 'LEI3', 'เลย', 'LEI');

-- --------------------------------------------------------

--
-- Table structure for table `table_score`
--

CREATE TABLE `table_score` (
  `score_id` int(11) NOT NULL,
  `candidate_id` varchar(70) NOT NULL,
  `area_id` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `full_name` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `household_registration` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `status` text NOT NULL,
  `id_area` int(11) NOT NULL,
  `status_scored` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_applicant`
--
ALTER TABLE `table_applicant`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indexes for table `table_area`
--
ALTER TABLE `table_area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `table_score`
--
ALTER TABLE `table_score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_applicant`
--
ALTER TABLE `table_applicant`
  MODIFY `temp_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_area`
--
ALTER TABLE `table_area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_score`
--
ALTER TABLE `table_score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
