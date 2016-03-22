-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2016 at 08:14 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `Mid` int(10) NOT NULL,
  `Mname` text NOT NULL,
  `Mtype` text NOT NULL,
  `Manufacturer` varchar(20) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Mprice` int(5) unsigned NOT NULL,
  `Composition` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Dosage` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Mid`, `Mname`, `Mtype`, `Manufacturer`, `Size`, `Mprice`, `Composition`, `Description`, `Dosage`) VALUES
(100, 'Crocin Pain Relief Tablet\r\n', 'Tablet', 'Gsk', '15(units)', 45, 'Caffiene 50 MG + Paracetamol 650 MG ', 'It is used to used to relieve mild to moderate pain and to reduce fever.', 'Take this as directed by your doctor. Do not take more than instructed by your doctor. Never take more than 1000 mg at any one time and no more than 4 times in one day. The dose for a child is different from the adult dose.'),
(101, 'Benadryl Cough Formula 450ML Syrup\r\n', 'Syrup', 'Johnson', '1', 145, 'Diphenhydramine 14.08 MG+Ammonium chloride 0.138 GM+Sodium citrate 57.03 MG+Menthol 1.14 MG ', 'This medication is an antihistamine, prescribed for severe allergic conditions such as runny nose, sneezing, itchy, watery eyes. It is also used for itching of insect bites, sunburns, bee stings, poison ivy, poison oak and minor skin irritation. ', 'Adult- The recommended dose is 25 mg to 50 mg (1 to 2 capsules). Child- The recommended dose is 12.5 mg to 25 mg (1 capsule). Do not take 2 doses at the same time or extra doses. Many times this drug is taken on an as needed basis'),
(102, 'N Flex Injection\r\n', 'Injection', 'Evita Healthcare', '1', 99, 'Methylcobalamin 1000 MCG /ML', 'It is used to prevent and treat low vitamin B12. Lack of vitamin B12 may cause anemia and damage to the nerves. It is used to treat diabetic neuropathy and peripheral neuropathy.', 'Take with or without food. Take with food if it causes an upset stomach. ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Userid` int(15) unsigned NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Emailid` varchar(30) NOT NULL,
  `Fname` varchar(30) NOT NULL,
  `Lname` varchar(30) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Date_of_join` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Password`, `Emailid`, `Fname`, `Lname`, `Gender`, `Address`, `Phone`, `Date_of_join`) VALUES
(104, 'user3', 'b427ebd39c845eb5417b7f7aaf1f9724', 'user3@www.com', 'user2', 'dsa', 'Male', '', 0, '2016-03-22 Tuesday 06:08:47 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`Mid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `Mid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(15) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
