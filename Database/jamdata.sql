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
-- Database: `jamdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cordi1`
--

CREATE TABLE `cordi1` (
  `longitutude` decimal(17,15) DEFAULT NULL,
  `lat` decimal(17,15) DEFAULT NULL,
  `name` varchar(47) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cordi1`
--

INSERT INTO `cordi1` (`longitutude`, `lat`, `name`) VALUES
(22.460979402393313, 70.070773118896160, 'Jamnagar Airport'),
(22.484142635048343, 70.081035803913040, 'Van Vihar The Tree Resort'),
(22.483871135707783, 70.079973478043140, 'Jilla Seva Sadan 4- Raman Park'),
(22.465253265740966, 70.072451307295030, 'JAMNAGAR CITY MUSEUM'),
(22.469670380529880, 70.065410036131280, 'Jilla Panchayat, Jamnagar'),
(22.468513832376786, 70.065272055359540, 'Circuit House Jamnagar'),
(22.464790447777137, 70.069698209798600, 'Lakhota Palace and Museum'),
(22.469079397214090, 70.067666603588900, 'Jamnagar Municipal Corporation'),
(22.464673497050196, 70.078952691950380, 'Jamnagar Head Post Office'),
(22.463920636711713, 70.067364914707350, 'Raksha Shakti Smarak (Canon)'),
(22.465170272635454, 70.072291778458720, 'Ranmal Lake Park'),
(22.455148348495353, 70.029606037984050, 'BAPS Shri Swaminarayan Mandir, Jamnagar'),
(22.468447940078576, 70.059714178458890, 'Jamnagar Bus Station'),
(22.477456086145317, 70.065164794323600, 'Shri M P Shah Government Medical College'),
(22.463041720123197, 70.071530671046400, 'Shri Bala Hanuman Sankirtan Temple'),
(22.470417179407100, 70.060380625012800, 'jamnagar'),
(22.458394156494627, 70.071958939573460, 'Dwarkadhish Temple'),
(22.514324490826950, 70.154967107296070, 'Khijadia Bird Sanctuary'),
(22.464456182472510, 70.080333214707310, 'jamnagar'),
(22.448654670580080, 70.050864143772000, 'Military Hospital, Jamnagar'),
(22.472172552412886, 70.066362700919040, 'Anand Hospital'),
(22.461742184514264, 70.066033789278780, 'Oshwal Aayush Hospital'),
(22.458921683611575, 70.034869587945020, 'Samarpan General Hospital'),
(22.475113444447775, 70.066975532425130, 'SIDDHI VINAYAK IVF & CHILDREN HOSPITAL JAMNAGAR'),
(22.478659013643135, 70.063994328719130, 'Guru Gobindsingh Government Hospital'),
(22.466380419468145, 70.058982760087930, 'Shreeji women\'s hospital');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `name` varchar(500) NOT NULL,
  `details` varchar(500) NOT NULL,
  `keynote` varchar(500) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  `moredetails` varchar(1000) NOT NULL,
  `moredetails2` varchar(1000) NOT NULL,
  `moredetails3` varchar(1000) NOT NULL,
  `gmap` varchar(2000) NOT NULL,
  `radio` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`name`, `details`, `keynote`, `photo`, `moredetails`, `moredetails2`, `moredetails3`, `gmap`, `radio`) VALUES
('zydus', 'View Details', 'hospital', '', '', '', '', '', 1),
('appolo', 'View Details', 'hospital', 'https://pbs.twimg.com/media/CX9zOYhUQAAaG8A.jpg', 'Apollo Hospitals was established in 1983 by Dr. Prathap C Reddy, renowned as the architect of modern healthcare in India. As the nation’s first corporate hospital, Apollo Hospitals is acclaimed for pioneering the private healthcare revolution in the country.', 'The cornerstones of Apollo’s legacy are its unstinting focus on clinical excellence, affordable costs, modern technology and forward-looking research & academics.', '', 'https://www.google.com/maps/place/Anand+Hospital/@22.4719446,70.0632943,17z/data=!3m1!4b1!4m6!3m5!1s0x39576ab96aa69ee3:0xe01af01df52da3f0!8m2!3d22.4719446!4d70.0658692!16s%2Fg%2F1tk_mp1n?entry=ttu', 2),
('Shreeji women\'s hospital', 'View Details', 'hospital', '', '', '', '', '', 4),
('Ranmal Lake Park', 'More Details', 'Lake', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/12/7f/2e/84/img-20180313-093957-largejpg.jpg?w=1200&h=1200&s=1', 'Situated in the middle of the city. Approx. 1.5 KM from City Bus Depot. JMC has developed 1.8 KM lake periphery on heritage theme and it is open for public since Jan, 2016.', 'Facilities like, 9 Entry Gates, 12 Food Shop, 3 mtr. wide IAAF approved synthetic jogging track, pedestrian path way, landscaping, fountains, floating fountains, amphitheatre, musical fountain with laser show, Digjam aquarium restoration and developed as city museum, parking, sanitation facilities etc.', 'Winner of 1st prize at National level HUDCO design award under the category of Land Scrapping & Planning for year 2015..', 'https://www.google.com/maps/place/Ranmal+Lake+Park/@22.4651069,70.0719445,18z/data=!4m6!3m5!1s0x39576ab91f844141:0x24a9dbd0cb38cb5e!8m2!3d22.464972!4d70.0718519!16s%2Fg%2F11cmrv01mw?entry=ttu', 5),
('shami', 'View Details', 'hospital', '', '', '', '', '', 7),
('Ayurved University', 'view details', 'university', 'https://medicaldialogues.in/wp-content/uploads/2020/01/gujarat-ayurved-university.jpg', 'Jamnagar is famous for his Ayurved University. Dhanvantri Mandir was built under the personal supervision of Dr. Pranjivan Manekchand Mehta, Chief Medical Officer of Guru Govindsingh Hospital. After independence it gained the status of Ayurved University.', '', '', '', 8),
('SIDDHI VINAYAK IVF AND CHILDREN HOSPITAL JAMNAGAR', 'View Details', 'hospital', 'https://images.drlogy.com/assets/uploads/img/practice-profile/hospitals/profile/siddhi-vinayak-hospital-fca948a2631-2e0b5e5822d.jpeg', 'Siddhi Vinayak IVF & Children Hospital is a leading healthcare facility in Jamnagar, Gujarat, specializing in women\'s and children\'s health. Our experienced team of doctors, including Dr. Suresh Thaker (M.D. Pediatrics) and Dr. Gayatri Thaker (M.D. Obstetrics and Gynecology), has been serving the community since 1985.', ' ', '', '', 9),
('Khambhaliya Gate', 'More Detials', 'historical ', 'https://www.gujarattourism.com/content/dam/gujrattourism/images/destinations/jamnagar/heritage/khambhalia-gate/Khambhalia%20Gate%20(2).jpg', 'Situated Nr. Hawai Chowk. Approx. 2 KM from City Bus Depot.', 'Winner of 2nd prize at National level HUDCO design award under the category of Conservation of Heritage year 2015.', '1st floor of the gate developed as heritage photo gallery with centrally AC', 'https://www.google.com/maps/place/Khambhalia+Gate/@22.4609362,70.0686461,17z/data=!3m1!4b1!4m6!3m5!1s0x39576bae1c8445bb:0x49abf094ef5730c8!8m2!3d22.4609362!4d70.071221!16s%2Fg%2F11jlh7x54q?hl=en&entry=ttu', 12),
('', 'More Detials', '', '', '', '', '', '', 16),
('Om shree Hospital ', 'More Detials', 'Hospital ', '', '', '', '', '', 17),
('Jamnagar Town Hall', 'More Detials', 'Townhall', 'https://files.yappe.in/place/full/lohana-mahajan-vadi-5972600.webp', '', '', '', 'https://www.google.com/maps/place/Town+Hall/@22.4694084,70.0705476,17z/data=!4m14!1m7!3m6!1s0x39576ab96aa69ee3:0xe01af01df52da3f0!2sAnand+Hospital!8m2!3d22.4719446!4d70.0658692!16s%2Fg%2F1tk_mp1n!3m5!1s0x39576abc38d76145:0x5f296cdaf659bf32!8m2!3d22.4694084!4d70.0705476!16s%2Fg%2F11g9k22r7s?entry=ttu', 18);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` bigint(255) NOT NULL,
  `age` int(10) NOT NULL,
  `adharnum` bigint(100) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `otp` int(10) NOT NULL,
  `vkey` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `password`, `name`, `contact`, `age`, `adharnum`, `addr`, `otp`, `vkey`) VALUES
('deepdhruvisha@yahoo.co.in', 'deep12', 'Pravinbhai', 9925205143, 50, 734732516557, '145,gokul society', 0, 1),
('hvpatel1508@gmail.com', 'harshil12', 'PATEL HARSHIL ', 9409990588, 20, 868771769150, 'TRANSVAD,KARACHI ,PAKISTAN', 67432, 1),
('pateldeep1162004@gmail.com', 'patel12', 'deep patel', 8758284374, 21, 633548756356, '145 ddd', 31939, 1),
('patelsujal292003@gmail.com', 'patel123', 'Sujal Patel', 8866173815, 19, 26567882726, 'Sec 4 new Gnr', 55308, 1),
('sjay81900@gmail.com', 'jayshah37', 'Jay Shah', 9876567897, 20, 234554326789, 'ahmedabad', 55433, 1),
('techtechnolgy12@gmail.com', 'Vrajrand', 'PATEL DEEP', 8758284374, 23, 7755555555544, 'mehsanan', 90172, 1),
('ybpatel117@gmail.com', 'Yash234', 'Yash ', 9328963964, 20, 1234567890, 'Jamnagar', 58690, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`radio`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `radio` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
