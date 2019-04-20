-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 07:57 PM
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
-- Database: `elect_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `temp_id` int(10) NOT NULL,
  `Number_applicant` int(11) NOT NULL,
  `Logo_applicant` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Name_applicant` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Candidate_name` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Logo_Candidate` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `ID_Candidate` int(10) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`temp_id`, `Number_applicant`, `Logo_applicant`, `Name_applicant`, `Candidate_name`, `Logo_Candidate`, `ID_Candidate`, `ID`) VALUES
(1, 1, './logo/pracharat.jpg', 'พรรคพลังประชารัฐ', 'นาย วันชัย บุษบา', './pic/1LEI1.jpg', 1, 1),
(2, 2, './logo/pakpeathai.png', 'พรรคเพื่อไทย', 'นาย เลิศศักดิ์ พัฒนชัยกุล', '	\r\n./pic/2LEI1.jpg', 2, 1),
(3, 3, './logo/newfeature.jpg', 'พรรคอนาคตใหม่', 'นาย ไมตรี วาที', './pic/3LEI1.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `ID` int(11) NOT NULL,
  `areaname` varchar(255) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `provincial_abbreviation` varchar(255) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`ID`, `areaname`, `province`, `provincial_abbreviation`) VALUES
(1, 'เขต1', 'เลย', 'LEI'),
(2, 'เขต2', 'เลย', 'LEI'),
(3, 'เขต3', 'เลย', '	\r\nLEI');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `_id` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `ID_Candidate` int(11) DEFAULT NULL,
  `point` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`_id`, `ID`, `ID_Candidate`, `point`) VALUES
(1, 1, 3, 120),
(2, 1, 3, 350),
(3, 1, 1, 12),
(4, 1, 3, 589),
(5, 1, 2, 589);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Fullname` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `IDCard` varchar(13) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Register` varchar(5000) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Password` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `ID` int(11) NOT NULL,
  `Status_scored` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Fullname`, `IDCard`, `Register`, `Password`, `Status`, `ID`, `Status_scored`) VALUES
('คณิต วิจิตรปัญญา', '1429900326673', '56465313', 326673, '1', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`temp_id`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`_id`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_Candidate` (`ID_Candidate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDCard`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `temp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `area` (`ID`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `applicant` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `area` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
