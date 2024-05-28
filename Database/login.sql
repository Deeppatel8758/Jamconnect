-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 06:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `otp` int(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `time` time NOT NULL,
  `hospital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`otp`, `name`, `time`, `hospital`) VALUES
(5766, '', '00:00:00', ''),
(0, 'deep@gmail.com', '00:00:00', 'xxx'),
(5472, 'deepdhruvisha@yahoo.co.in', '00:00:00', 'zydus'),
(5820, 'patelsujal292003@gmail.com', '00:00:00', 'appolo'),
(9683, 'techtechnology12@gmail.com', '00:00:00', 'shami');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL,
  `facilityname` varchar(512) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `adhar` bigint(100) NOT NULL,
  `age` int(100) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `keynote` varchar(512) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `payment_status`, `payment_id`, `added_on`, `facilityname`, `contact`, `adhar`, `age`, `addr`, `keynote`, `used`) VALUES
(1, 'patel deep', 60, 'pending', '', '2023-11-22 07:20:41', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(2, 'patel deep', 30, 'pending', '', '2023-11-22 07:22:53', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(3, 'patel deep', 30, 'pending', '', '2023-11-22 07:24:44', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(4, 'patel deep', 30, 'complete', 'pay_N3cOQtF0xq9NIl', '2023-11-22 07:26:53', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(5, 'patel deep', 30, 'complete', 'pay_N3d0qA7KhJbVEu', '2023-11-22 08:03:13', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(6, 'patel deep', 30, 'complete', 'pay_N3d59GGX8pr3Kl', '2023-11-22 08:07:18', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 1),
(7, 'patel deep', 30, 'complete', 'pay_N3dBLxbeOmymSx', '2023-11-22 08:13:09', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 1),
(8, 'patel deep', 60, 'complete', 'pay_N3dDui7rJW5p4F', '2023-11-22 08:15:35', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(9, 'patel deep', 90, 'complete', 'pay_N3dFcK6Y0srTLf', '2023-11-22 08:17:08', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 1),
(10, 'patel deep', 60, 'complete', 'pay_N3dHeUf6vgjQIB', '2023-11-22 08:19:07', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 1),
(11, 'patel deep', 30, 'complete', 'pay_N3dJifc4WJ57Dv', '2023-11-22 08:21:07', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 1),
(12, 'patel deep', 60, 'complete', 'pay_N3dNb2JjbYtq1i', '2023-11-22 08:24:46', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 1),
(13, 'patel deep', 60, 'complete', 'pay_N3dRBdMHLuY1BN', '2023-11-22 08:28:10', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(14, 'patel deep', 60, 'complete', 'pay_N3dSQ0LGf6YrW1', '2023-11-22 08:29:22', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(15, 'patel deep', 60, 'complete', 'pay_N3dTVpo6h7FKP2', '2023-11-22 08:30:18', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(16, 'patel deep', 60, 'complete', 'pay_N3dW3jHclUhbDH', '2023-11-22 08:32:46', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(17, 'patel deep', 120, 'complete', 'pay_N3dbNPf7HwMQic', '2023-11-22 08:37:49', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(18, 'patel deep', 30, 'complete', 'pay_N3dihNFiRETyLc', '2023-11-22 08:44:43', 'Ayurved University', 8758284374, 734732516558, 20, 'mehsana\r\n', 'university', 0),
(19, 'patel deep', 270, 'complete', 'pay_N3nNAQy1aiNrWZ', '2023-11-23 06:08:43', 'Ayurved University', 8758284374, 734732516558, 20, 'mehsana\r\n', 'university', 0),
(20, 'patel deep', 120, 'complete', 'pay_N3u0sm1uM9EaQW', '2023-11-23 12:40:46', 'Ranmal Lake Park', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Lake', 0),
(21, 'Sujal Patel', 300, 'complete', 'pay_N3zu78TtfDQlVl', '2023-11-23 06:26:10', 'Ranmal Lake Park', 8866173815, 26567882726, 19, 'Sec 4 new Gnr', 'Lake', 0),
(22, 'PATEL DEEP', 60, 'complete', 'pay_N4DZQkZgpBICq0', '2023-11-24 07:48:53', 'Ayurved University', 87582843714, 7755555555544, 20, '145 ddd', 'university', 0),
(23, 'PATEL DEEP', 60, 'complete', 'pay_N4EKqgJ59m0j24', '2023-11-24 08:33:47', 'Ranmal Lake Park', 87582843714, 7755555555544, 20, '145 ddd', 'Lake', 1),
(24, 'PATEL DEEP', 60, 'pending', '', '2023-11-24 08:42:56', 'Ranmal Lake Park', 87582843714, 7755555555544, 20, '145 ddd', 'Lake', 0),
(25, 'Krish Patel', 2520, 'pending', '', '2023-11-25 05:06:30', 'Ranmal Lake Park', 9104510155, 868797107134, 20, '52, Nandanvan Township,', 'Lake', 0),
(26, 'Krish Patel', 1830, 'complete', 'pay_N4ZNivppKLcH5I', '2023-11-25 05:08:26', 'Ranmal Lake Park', 9104510155, 868797107134, 20, '52, Nandanvan Township,', 'Lake', 1),
(27, 'Yash ', 150, 'complete', 'pay_N4cGUWXrTz6z5A', '2023-11-25 07:57:55', 'Ranmal Lake Park', 9328963964, 1234567890, 20, 'Jamnagar', 'Lake', 0),
(28, 'PATEL DEEP', 30, 'complete', 'pay_N4dyjmrPiTwLrS', '2023-11-25 09:38:56', 'Ranmal Lake Park', 87582843714, 7755555555544, 20, '145 ddd', 'Lake', 0),
(29, 'PATEL DEEP', 300, 'pending', '', '2023-11-25 11:29:14', 'Ranmal Lake Park', 87582843714, 7755555555544, 20, '145 ddd', 'Lake', 0),
(30, 'PATEL DEEP', 600, 'complete', 'pay_N4hBBizNIRCDcO', '2023-11-25 12:46:32', 'Ranmal Lake Park', 87582843714, 7755555555544, 20, '145 ddd', 'Lake', 1),
(31, 'deep patel', 60, 'complete', 'pay_NCiQF7ulYVhGZi', '2023-12-15 07:11:12', 'Ranmal Lake Park', 8758284374, 633548756356, 21, '145 ddd', 'Lake', 0),
(32, 'PATEL HARSHIL ', 60, 'complete', 'pay_NIaae5TQ8Wahb5', '2023-12-30 03:25:46', 'Ranmal Lake Park', 9409990588, 868771769150, 20, 'TRANSVAD,KARACHI ,PAKISTAN', 'Lake', 0),
(33, 'Pravinbhai', 60, 'complete', 'pay_NNa8TyJh0L1Wry', '2024-01-12 06:14:21', 'Ranmal Lake Park', 9925205143, 734732516557, 50, '145,gokul society', 'Lake', 1),
(34, 'deep patel', 60, 'complete', 'pay_NVJcDoyPgiDXZE', '2024-01-31 07:16:41', 'Ranmal Lake Park', 8758284374, 633548756356, 21, '145 ddd', 'Lake', 0),
(35, 'deep patel', 120, 'complete', 'pay_NbEhHFQHR6kAaL', '2024-02-15 06:21:55', 'Ranmal Lake Park', 8758284374, 633548756356, 21, '145 ddd', 'Lake', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `hospital` varchar(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `dec_spec` varchar(300) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `slot` int(200) NOT NULL,
  `radio` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`hospital`, `doc_name`, `dec_spec`, `time_from`, `time_to`, `slot`, `radio`, `date`) VALUES
('appolo', 'deep patel', 'cardiologist', '11:00:00', '01:00:00', 4, 13, '2023-11-18'),
('appolo', 'krish', 'MD', '10:00:00', '12:00:00', 12, 15, '2023-11-18'),
('shami', 'Yash Patel', 'Gynecologist', '11:00:00', '12:00:00', 18, 17, '2023-11-19'),
('shami', 'deep patel', 'Gynecologist', '11:00:00', '00:00:00', 4, 20, '2023-11-19'),
('shami', 'sujal', 'md', '16:00:00', '17:00:00', 11, 21, '2023-11-19'),
('zydus', 'pravinpatel', 'md', '12:00:00', '13:00:00', 16, 22, '2023-11-21'),
('appolo', 'Ashish Kukadiya', 'Dentist', '10:30:00', '11:30:00', 50, 24, '2023-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `name` varchar(512) NOT NULL,
  `capcity` int(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`name`, `capcity`, `price`) VALUES
('Ranmal Lake Park', 38, 30),
('Ayurved University', 139, 30);

-- --------------------------------------------------------

--
-- Table structure for table `ticketauth`
--

CREATE TABLE `ticketauth` (
  `otp` int(100) NOT NULL,
  `name` varchar(512) NOT NULL,
  `facility` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticketauth`
--

INSERT INTO `ticketauth` (`otp`, `name`, `facility`) VALUES
(1661, 'pateldeep1162004@gmail.com', 'Ranmal Lake Park'),
(3405, 'techtechnology12@gmail.com', 'Ayurved University'),
(8553, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `hospital` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `adhar` bigint(255) NOT NULL,
  `age` int(100) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `doc_type` varchar(255) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `slotid` int(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`hospital`, `name`, `contact`, `adhar`, `age`, `addr`, `doc_name`, `doc_type`, `time_from`, `time_to`, `slotid`, `date`) VALUES
('shami', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'sujal', 'md', '16:00:00', '17:00:00', 80, '2023-11-19'),
('shami', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'Yash Patel', 'Gynecologist', '11:00:00', '12:00:00', 81, '2023-11-20'),
('shami', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'deep patel', 'Gynecologist', '11:00:00', '00:00:00', 82, '2023-11-20'),
('zydus', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'pravinpatel', 'md', '12:00:00', '13:00:00', 83, '2023-11-21'),
('appolo', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'krish', 'cardiologist', '23:22:00', '15:11:00', 84, '2023-11-22'),
('appolo', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'krish', 'cardiologist', '23:22:00', '15:11:00', 85, '2023-11-23'),
('appolo', 'patel deep', 8758284374, 734732516558, 20, 'mehsana\r\n', 'krish', 'cardiologist', '23:22:00', '15:11:00', 86, '2023-11-23'),
('appolo', 'Sujal Patel', 8866173815, 26567882726, 19, 'Sec 4 new Gnr', 'deep patel', 'cardiologist', '11:11:00', '23:11:00', 87, '2023-11-23'),
('shami', 'PATEL DEEP', 87582843714, 7755555555544, 20, '145 ddd', 'Yash Patel', 'Gynecologist', '11:00:00', '12:00:00', 88, '2023-11-24'),
('appolo', 'Krish Patel', 9104510155, 868797107134, 20, '52, Nandanvan Township,', 'krish', 'cardiologist', '23:22:00', '15:11:00', 89, '2023-11-25'),
('zydus', 'Sujal Patel', 8866173815, 26567882726, 19, 'Sec 4 new Gnr', 'pravinpatel', 'md', '12:00:00', '13:00:00', 90, '2023-11-25'),
('appolo', 'Sujal Patel', 8866173815, 26567882726, 19, 'Sec 4 new Gnr', 'deep patel', 'cardiologist', '11:11:00', '23:11:00', 91, '2023-11-25'),
('zydus', 'Krish Patel', 9104510155, 868797107134, 20, '52, Nandanvan Township,', 'pravinpatel', 'md', '12:00:00', '13:00:00', 92, '2023-11-25'),
('appolo', 'PATEL DEEP', 87582843714, 7755555555544, 20, '145 ddd', 'deep patel', 'cardiologist', '11:11:00', '23:11:00', 98, '2023-11-25'),
('appolo', 'Jay Shah', 9876567897, 234554326789, 20, 'ahmedabad', 'krish', 'cardiologist', '23:22:00', '15:11:00', 99, '2023-11-25'),
('appolo', 'Jay Shah', 9876567897, 234554326789, 20, 'ahmedabad', 'krish', 'cardiologist', '23:22:00', '15:11:00', 100, '2023-11-25'),
('appolo', 'Jay Shah', 9876567897, 234554326789, 20, 'ahmedabad', 'krish', 'cardiologist', '23:22:00', '15:11:00', 101, '2023-11-25'),
('zydus', 'Yash ', 9328963964, 1234567890, 20, 'Jamnagar', 'pravinpatel', 'md', '12:00:00', '13:00:00', 102, '2023-11-25'),
('appolo', 'Yash ', 9328963964, 1234567890, 20, 'Jamnagar', 'deep patel', 'cardiologist', '11:11:00', '23:11:00', 103, '2023-11-25'),
('appolo', 'Krish Patel', 9104510155, 868797107134, 20, '52, Nandanvan Township,', 'krish', 'MD', '10:00:00', '12:00:00', 104, '2023-11-25'),
('appolo', 'PATEL DEEP', 87582843714, 7755555555544, 20, '145 ddd', 'krish', 'MD', '10:00:00', '12:00:00', 105, '2023-11-25'),
('appolo', 'PATEL HARSHIL ', 9409990588, 868771769150, 20, 'TRANSVAD,KARACHI ,PAKISTAN', 'krish', 'MD', '10:00:00', '12:00:00', 106, '2023-12-30'),
('appolo', 'Pravinbhai', 9925205143, 734732516557, 50, '145,gokul society', 'krish', 'MD', '10:00:00', '12:00:00', 107, '2024-01-12'),
('shami', 'deep patel', 8758284374, 633548756356, 21, '145 ddd', 'sujal', 'md', '16:00:00', '17:00:00', 108, '2024-01-24'),
('appolo', 'deep patel', 8758284374, 633548756356, 21, '145 ddd', 'krish', 'MD', '10:00:00', '12:00:00', 109, '2024-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `val`
--

CREATE TABLE `val` (
  `val` int(100) NOT NULL,
  `radio` int(100) NOT NULL,
  `time` time NOT NULL,
  `doc` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `val`
--

INSERT INTO `val` (`val`, `radio`, `time`, `doc`) VALUES
(0, 1, '00:00:00', ''),
(0, 2, '00:00:00', ''),
(18, 3, '05:00:00', ''),
(6, 4, '11:00:00', ''),
(7, 5, '10:00:00', ''),
(47, 6, '12:00:00', ''),
(50, 7, '12:00:00', ''),
(50, 8, '12:00:00', ''),
(50, 9, '12:00:00', ''),
(50, 10, '12:00:00', ''),
(30, 11, '19:00:00', 'deep patel'),
(18, 12, '19:00:00', 'sujal patel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`radio`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`slotid`);

--
-- Indexes for table `val`
--
ALTER TABLE `val`
  ADD PRIMARY KEY (`radio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `radio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `slotid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `val`
--
ALTER TABLE `val`
  MODIFY `radio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
