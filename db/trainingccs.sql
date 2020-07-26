-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 12:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingccs`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `applicationID` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `IDnumber` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `course` int(20) NOT NULL,
  `startingDate` date DEFAULT NULL,
  `finishingDate` date DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `ministry` int(10) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`applicationID`, `firstname`, `surname`, `IDnumber`, `DOB`, `sex`, `address`, `phoneNumber`, `email`, `course`, `startingDate`, `finishingDate`, `category`, `ministry`, `designation`, `status`) VALUES
(12, 'Dylan', 'DIle', '12-230230M23', '2000-01-01', 'male', '34Mkoba 19', '263713325000', 'amukoko@mail.com', 1, '2020-07-13', '2020-07-18', 'Government', 18, 'Trainer ', 'training'),
(13, 'James King', 'King', '23-45645621', '2001-12-12', 'male', '892 Woodlands Park', '26371456456', 'james@mail.com', 1, '2020-07-14', '2020-07-19', 'Citizen', 0, '', 'training'),
(14, 'Percy', 'Nikita', '52-12314512', '2001-01-01', 'female', '34Mkoba ', '+263713325000', 'james@mail.com', 1, '2020-07-14', '2020-07-20', 'Citizen', 0, '', 'training');

-- --------------------------------------------------------

--
-- Table structure for table `applicationshistory`
--

CREATE TABLE `applicationshistory` (
  `applicationID` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `IDnumber` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `startingDate` date NOT NULL,
  `finishingDate` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `ministry` int(10) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `applicationID` int(20) NOT NULL,
  `courseID` int(80) DEFAULT NULL,
  `day1` int(5) DEFAULT NULL,
  `day2` int(5) DEFAULT NULL,
  `day3` int(5) DEFAULT NULL,
  `day4` int(5) DEFAULT NULL,
  `day5` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`applicationID`, `courseID`, `day1`, `day2`, `day3`, `day4`, `day5`) VALUES
(12, 1, NULL, NULL, NULL, NULL, NULL),
(13, 1, 2, NULL, NULL, NULL, NULL),
(14, 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseID` int(11) NOT NULL,
  `courseName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseID`, `courseName`) VALUES
(1, 'Basic ICDL'),
(2, 'TEST ');

-- --------------------------------------------------------

--
-- Table structure for table `ministries`
--

CREATE TABLE `ministries` (
  `minID` int(10) NOT NULL,
  `ministry` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ministries`
--

INSERT INTO `ministries` (`minID`, `ministry`) VALUES
(1, 'Ministry of Defence, Security and War Veterans'),
(2, 'Ministry of Energy and Power Development'),
(3, 'Ministry of Environment, Tourism and Hospitality Industry'),
(4, 'Ministry of Finance and Economic Planning'),
(5, 'Ministry of Foreign Affairs And International Trade'),
(6, 'Ministry of Higher Education, Science and Technology Development'),
(7, 'Ministry of Home Affairs and Culture'),
(8, 'Ministry of Industry and Commerce'),
(9, 'Ministry of Information Communication Technology, Postal and Courier Services'),
(10, 'Ministry of Information, Publicity and Broadcasting Services'),
(11, 'Ministry of Justice, Legal and Parliamentary Affairs'),
(12, 'Ministry of Public Service, Labour and Social Welfare'),
(13, 'Ministry of Lands, Agriculture and Rural Resettlement'),
(14, 'Ministry of Local Government, Public Works, and National Housing'),
(15, 'Ministry of Mines and Mining Development'),
(16, 'Ministry of Primary and Secondary Education'),
(17, 'Ministry of Youth ,Sports, Arts and Recreation'),
(18, 'Ministry of Transport and Infrastructure Development'),
(19, 'Ministry of Women Affairs, Community, Small and Medium Enterprises – Developments'),
(20, 'NOT APPLICABLE'),
(21, 'Ministry of chinoz'),
(22, 'Ministry of chinoz2');

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `paraID` int(11) NOT NULL,
  `id` int(12) NOT NULL,
  `paraName` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`paraID`, `id`, `paraName`) VALUES
(1, 1, 'Not Satisfactory'),
(2, 2, 'Fair'),
(3, 3, 'Good'),
(4, 4, 'Very Good'),
(5, 5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleID`, `roleName`) VALUES
(1, 'Administrator'),
(2, 'Facilitator'),
(3, 'Tutor'),
(4, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userRole` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userEmail`, `userPassword`, `userRole`) VALUES
(1, 'admin@ccs.gov.zw', '12345678', 1),
(2, 'tapiwanobela2@gmail.com', 'pierre1606', 2),
(3, 'diledylan001@gmail.com', '12345678', 2),
(4, 'diledylan001@gmail.com', 'erer', 3);

-- --------------------------------------------------------

--
-- Table structure for table `weeklyregister`
--

CREATE TABLE `weeklyregister` (
  `applicationID` int(20) NOT NULL,
  `course` int(10) NOT NULL,
  `day1` int(5) DEFAULT NULL,
  `day2` int(5) DEFAULT NULL,
  `day3` int(5) DEFAULT NULL,
  `day4` int(5) DEFAULT NULL,
  `day5` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weeklyregister`
--

INSERT INTO `weeklyregister` (`applicationID`, `course`, `day1`, `day2`, `day3`, `day4`, `day5`) VALUES
(12, 1, NULL, 0, NULL, NULL, NULL),
(13, 1, 1, NULL, NULL, NULL, NULL),
(14, 1, 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `applicationshistory`
--
ALTER TABLE `applicationshistory`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`applicationID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `ministries`
--
ALTER TABLE `ministries`
  ADD PRIMARY KEY (`minID`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`paraID`),
  ADD UNIQUE KEY `paraName` (`paraName`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `weeklyregister`
--
ALTER TABLE `weeklyregister`
  ADD PRIMARY KEY (`applicationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `applicationID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `applicationshistory`
--
ALTER TABLE `applicationshistory`
  MODIFY `applicationID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ministries`
--
ALTER TABLE `ministries`
  MODIFY `minID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `paraID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
