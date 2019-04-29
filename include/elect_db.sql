-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2019 at 06:39 AM
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
  `Number_applicant` int(11) NOT NULL,
  `Logo_applicant` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `ID_Candidate` int(11) NOT NULL,
  `Name_applicant` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Logo_Candidate` varchar(255) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Candidate_name` varchar(64) COLLATE utf8mb4_thai_520_w2 NOT NULL,
  `Area_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`Number_applicant`, `Logo_applicant`, `ID_Candidate`, `Name_applicant`, `Logo_Candidate`, `Candidate_name`, `Area_ID`) VALUES
(1, './logo/pracharat.jpg', 1, 'พรรคพลังประชารัฐ', './pic/1LEI1.jpg', 'นาย วันชัย บุษบา', 1),
(2, './logo/pakpeathai.png', 2, 'พรรคเพื่อไทย', '	\r\n./pic/2LEI1.jpg', 'นาย เลิศศักดิ์ พัฒนชัยกุล', 1),
(3, './logo/newfeature.jpg', 3, 'พรรคอนาคตใหม่', './pic/3LEI1.jpg', 'นาย ไมตรี วาที', 1),
(4, './logo/pumjaithai.png', 4, 'พรรคภูมิใจไทย', './pic/4LEI1.jpg', 'นายทศพล สังขทรัพย์', 1),
(5, './logo/sadsgidmai.png', 5, 'พรรคเศรษฐกิจใหม่', './pic/5LEI1.jpg', 'นายอุดม อ่ำแย้ม', 1),
(1, './logo/pracharat.jpg', 6, 'พรรคพลังประชารัฐ', './pic/1LEI2.jpg', 'นางเปล่งมณี เร่งสมบูรณ์สุข', 2),
(2, './logo/pakpeathai.png', 7, 'พรรคเพื่อไทย', './pic/2LEI2.jpg', 'นายศรัณย์ ทิมสุวรรณ', 2),
(3, './logo/newfeature.jpg', 8, 'พรรคอนาคตใหม่', './pic/3LEI2.jpg', 'นายนิธินันท์ อินทรโฆษิต', 2),
(4, '	 ./logo/pumjaithai.png', 9, 'พรรคภูมิใจไทย', './pic/4LEI2.jpg', 'นายแสงเดือน ศรีบุรินทร์', 2),
(5, './logo/sadsgidmai.png', 10, 'พรรคเศรษฐกิจใหม่', './pic/5LEI2.jpg', 'นายสุรสีห์ ลานนท์', 2),
(1, './logo/pracharat.jpg', 11, 'พรรคพลังประชารัฐ', './pic/1LEI3.jpg', 'นายปรีชา เร่งสมบูรณ์สุข', 3),
(2, './logo/pakpeathai.png', 12, 'พรรคเพื่อไทย', './pic/2LEI3.jpg', 'นายสันติภาพ เชื้อบุญมี', 3),
(3, './logo/newfeature.jpg', 13, 'พรรคอนาคตใหม่', './pic/3LEI3.jpg', 'นายสุรยุทธ สุระท้าว', 3),
(4, './logo/pumjaithai.png', 14, 'พรรคถูมิใจไทย', './pic/4LEI3.jpg', 'นายธนยศ ทิมสุวรรณ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Area_ID` int(11) NOT NULL,
  `areaname` varchar(255) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL,
  `provincial_abbreviation` varchar(255) COLLATE utf8mb4_thai_520_w2 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Area_ID`, `areaname`, `province`, `provincial_abbreviation`) VALUES
(1, 'เขต1', 'เลย', 'LEI'),
(2, 'เขต2', 'เลย', 'LEI'),
(3, 'เขต3', 'เลย', '	\r\nLEI');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(11) NOT NULL,
  `AREA_ID` int(11) DEFAULT NULL,
  `ID_Candidate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

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
  `AREA_ID` int(11) NOT NULL,
  `Status_scored` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_thai_520_w2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Fullname`, `IDCard`, `Register`, `Password`, `Status`, `AREA_ID`, `Status_scored`) VALUES
('นายธานินทร์ ไสยันต์', '1236040248114', '4778', 746578, '1', 2, 0),
('นายอติวิชญ์ อัมพวรรณ์', '1329900829668', '452', 245876, '1', 3, 0),
(' นางสาวกันตพร ปัดชาเขียว', '1361200255572', '456', 586745, '1', 1, 1),
('นายณัฐพล พันธ์แจ้ง', '1361300126723', '427', 124575, '1', 1, 0),
('นายเบน ไลสเนอร์', '1390200059659', '575', 576876, '1', 2, 0),
('นางสาวกฤษติยาภรณ์ นนมุต', '1399900079405', '012', 475869, '1', 2, 0),
(' นายชัยพร ตัวงาม', '1409600244299', '4758', 453785, '1', 1, 1),
(' นายอดิสร โครตวงค์', '1409800351030', '0124', 478954, '1', 2, 1),
('นายมลธกานต์ ใจภักดี', '1409901632760', '989', 563986, '1', 1, 0),
('นายศิริชัย สิงห์ลา', '1420600040482', '4785', 478856, '1', 2, 0),
('นายธีระพัฒน์ สิมมา', '1421000196709', '556', 575278, '1', 3, 0),
('นายอรัญธรรม โมกไธสง', '1421100067170', '557', 457868, '1', 3, 0),
('นายรัฐพล ทวิตชาติ', '1429900317666', '56265165', 317666, '1', 3, 0),
('นายนนทชัย อุ่นทุม', '1429900325014', '245', 425613, '1', 1, 0),
('นายคณิต วิจิตรปัญญา', '1429900326673', '56465313', 326673, '1', 2, 1),
('นายธนากร วอสวัสดิ์', '1429900326924', '263', 456654, '1', 2, 0),
('นายฤทธิรงค์ ษรจันทร์ศรี', '1429900337080', '245', 235855, '1', 1, 1),
(' นายณัฐวัฒน์ เกษเกษร', '1429900341311', '245', 245786, '1', 1, 0),
('นางสาวอภิญญา สารีมา', '1430200254469', '5558', 568456, '1', 3, 0),
('นายณัฐพงษ์ แสนสมบัติ', '1471200391041', '456', 214575, '1', 3, 1),
('นายธนพงษ์ วงศ์ปัญญา', '1749900664061', '0144', 456789, '1', 1, 0),
('นางสาวสุนิตา อาคะปัญญา', '2411001027259', '4568', 678546, '1', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ID_Candidate`),
  ADD KEY `AREA_ID` (`Area_ID`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Area_ID`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `AREA_ID` (`AREA_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDCard`),
  ADD KEY `AREA_ID` (`AREA_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `ID_Candidate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `applicant_ibfk_1` FOREIGN KEY (`Area_ID`) REFERENCES `area` (`Area_ID`);

--
-- Constraints for table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `score_ibfk_1` FOREIGN KEY (`AREA_ID`) REFERENCES `applicant` (`Area_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`AREA_ID`) REFERENCES `area` (`Area_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
