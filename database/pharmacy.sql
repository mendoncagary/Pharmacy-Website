-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2016 at 02:07 PM
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
  `Dosage` varchar(300) NOT NULL,
  `Symptoms` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`Mid`, `Mname`, `Mtype`, `Manufacturer`, `Size`, `Mprice`, `Composition`, `Description`, `Dosage`, `Symptoms`) VALUES
(100, 'Crocin Pain Relief Tablet\r\n', 'Tablets', 'Gsk', '15', 45, 'Caffiene 50 MG + Paracetamol 650 MG ', 'It is used to used to relieve mild to moderate pain and to reduce fever.', 'Take this as directed by your doctor. Do not take more than instructed by your doctor. Never take more than 1000 mg at any one time and no more than 4 times in one day. The dose for a child is different from the adult dose.', 'Migraine'),
(101, 'Benadryl Cough Formula 450ML Syrup\r\n', 'Syrup', 'Johnson', '1', 145, 'Diphenhydramine 14.08 MG+Ammonium chloride 0.138 GM+Sodium citrate 57.03 MG+Menthol 1.14 MG ', 'This medication is an antihistamine, prescribed for severe allergic conditions such as runny nose, sneezing, itchy, watery eyes. It is also used for itching of insect bites, sunburns, bee stings, poison ivy, poison oak and minor skin irritation. ', 'Adult- The recommended dose is 25 mg to 50 mg (1 to 2 capsules). Child- The recommended dose is 12.5 mg to 25 mg (1 capsule). Do not take 2 doses at the same time or extra doses. Many times this drug is taken on an as needed basis', 'Dry Cough'),
(102, 'N Flex Injection\r\n', 'Injection', 'Evita Healthcare', '1', 99, 'Methylcobalamin 1000 MCG /ML', 'It is used to prevent and treat low vitamin B12. Lack of vitamin B12 may cause anemia and damage to the nerves. It is used to treat diabetic neuropathy and peripheral neuropathy.', 'Take with or without food. Take with food if it causes an upset stomach. ', 'Muscle spasms'),
(103, 'Bro-Zedex', 'Syrup', 'Wockhardt limited', '100ml', 75, 'Terbutaline sulphate IP 1.25mg+Bromhexine hydrochloride IP 4mg+Guaiphenesin IP 50mg+Menthol IP 2.5ml', 'It is used to relieve wet cough', 'Adults: 2 teaspoonful, 3-4 times a day or as directed by physician', 'Wet cough'),
(104, 'Instaryl-D', 'Syrup', 'Aglowmed Ltd', '100ml', 64, 'Dextromethorphan hydrobromide 5mg+ chlorpheiramine maleate 2mg+Guaiphenesin IP 50mg', 'It is used for allergic cough', 'Adults and children over 10 yrs:5ml thrice daily Children 5 to 10 yrs:2.5ml thrice daily', 'Allergic cough'),
(105, 'Atorvastatin ozovas-10 ', 'Tablets', 'Ozone pharmaceutical', '10', 20, 'Atorvastatin calcium equivalent to atorvastatin 10mg+ excipient ', 'To reduce chloesterol', 'As directed by the physician', 'Chloesterol '),
(106, 'Logi-Cal 500', 'Tablets', 'Manish pharmacutical', '15', 58, '1250mg of calcium carbonate equivalent to elemental calcium 500mg+vitamin D3 400IU', 'To increase the levels of calcium and vitamin D', 'As directed by the physician', 'Lack of Calcium '),
(107, 'Paracetamol', 'Tablets', 'Danish healthcare', '10', 11, 'Paracetamol IP 500mg+excipients', 'For mild to moderate pain relief', 'As directed by the physician', 'Pain Relief'),
(108, 'Dabur Pudin hara', 'Syrup', 'Dabur India Ltd.', '30ml', 45, 'Pudina satva(Mentha piperata,aerial part OI.)-0.0337ml+excipients+alcohol 10%v/v', 'For effective cooling relief-gas,indigestion and stomach ache', '10-15 drops,2-3 times a day for adults.For children (5-12yrs)5-10drops 2-3 times a day', 'Indigestion '),
(109, 'Septilin', 'Tablets', 'Himalaya Drug Ltd', '60', 100, 'Maharasnadi quath 130mg+guduchi 98mg+manjishtha 64mg+amalaki 32mg+shigru 32mg+shankh bhasma 64mg', 'Helps improve body''s defence mechanism in its fight against sinusitis,tonsillitis,otorrhoea,furunculosis and other septic conditions', 'Initially,2 tablets twice daily,followed by 1 tablet twice daily,or as directed by the physician', 'Infection'),
(110, 'Duofilm', 'Solution', 'ZYG Pharma pvt Ltd.', '15ml', 180, 'Salicylic acid 16.7% w/w+lactic acid 16.7% w/w+flexible collodion B.P.', 'For the treatment of warts,corns and calluses', 'Apply daily or as directed by the physician', 'Warts and calluses'),
(111, 'Omiwel Gel', 'Ointment', 'Sky pharmaceutical ', '30g', 65, 'Linseed oil 3% + diclofenac sodium 1% + methyl salicylate 10% + menthol 5% + benzyl alcohol 1%', 'Quick relieves painful muscular sprain and strain', 'As directed by the physician.', 'Muscular strain'),
(112, 'Supamove', 'Ointment', 'Cymbiotics biopharma', '30g', 103, 'Methyl salicylate 10% w/w+menthol 5% w/w+capsaicin USP 0.025% w/w', 'Relieves back pain ', 'As directed by the physician.', 'Back pain'),
(113, 'Tribetrol 1', 'Tablets', 'Garnier life science', '10', 80, 'Voglibose 0.2mg+glimepiride 1mg+metformin hydrochloride 500mg+excipients', 'To reduce the sugar levels', 'As directed by the physician', 'Diabetes'),
(114, 'Asthakind', 'Syrup', 'Sirmour remedies Ltd', '100ml', 45, 'Terbutaline sulphate1.25mg + Bromhexine hydrochloride IP 4mg + Guaiphenesin IP 50mg', 'Used to relieve cough', 'As directed by the physician', 'Cough'),
(115, 'Pudina capsules', 'Tablets', 'Chandra drugs Ltd', '10', 18, 'Pudina Satva 160mg+excipients', 'Quickly relieves from abdominal pain,hyper acidity and indigestion', '1-2 capsules as and when required', 'Acidity '),
(116, 'Ascoril', 'Syrup', 'Mark pharmaceutical', '100ml', 75, 'Terbutaline sulphate 1.25mg + Bromhexine hydrochloride IP 4mg + Guaiphenesin IP 50mg + menthol 0.5mg', 'To get relief from breathing problem', 'As directed by the physician', 'Breathing problem'),
(117, 'Moxikind cv 625', 'Tablets', 'Comed pharmaceutical', '6', 83, 'Amoxycilin trihydrate 500mg+potassium clavulanate 125mg', 'To get relief from breathing problem', 'As directed by the physician', 'Breathing problem'),
(118, 'Propysalic NF ', 'Ointment', 'Hesa pharmaceutical', '30g', 150, 'Clobetasol propionate 0.05% w/w+salicylic acid 3.5% w/w', 'Used to treat skin conditions like corns,calluses,warts on hands or feet', 'As directed by the physician', 'Corns and warts'),
(119, 'Tiger balm', 'Ointment', 'Hawpar healthcare ', '19.4g', 350, 'Camphor 25%+dementholised mint oil 16%+menthol 8%+paraffin &petroleum ', 'For fast and effective relief of headache,stuffy nose,insect bites,itchiness,muscular aches and pains,sprains and flatulence', 'Apply in the affected area  twice a day', 'headache'),
(120, 'Emflam Plus', 'Tablets', 'Merck Ltd', '10', 10, 'Ibuprofen 400mg+paracetamol 325mg', 'To reduce fever', 'As directed by the physician', 'Fever'),
(121, 'Eyemist', 'Eye drops', 'Sun pharmaceutical', '10ml', 116, 'Hydroxypropyl methylcellulose 3mg+aqueous buffered vehicle', 'Instantly re-hydrates eyes', 'As directed by the physician', 'Dry eyes'),
(122, 'Candibiotic', 'Ear drops', 'Mark pharmaceutical', '5ml', 52, 'Chloramohenicol 5%+beclomethasone dipropionate 0.025%+clotrimazole 1%+lidocaine 1.73%', 'Used to relieve from itching of ears', 'Instill 4-5 drops in the ear 3-4 times daily or as directed by the physician', 'Itching of ears');

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
  `Phone` int(10) DEFAULT NULL,
  `Bldg_No/Name` varchar(20) NOT NULL DEFAULT 'Unknown',
  `Street_add/locality` varchar(20) NOT NULL DEFAULT 'Unknown',
  `City` text,
  `Country` text,
  `Date_of_join` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Password`, `Emailid`, `Fname`, `Lname`, `Gender`, `Phone`, `Bldg_No/Name`, `Street_add/locality`, `City`, `Country`, `Date_of_join`) VALUES
(104, 'user3', 'b427ebd39c845eb5417b7f7aaf1f9724', 'user3@www.com', 'user2', 'dsa', 'Male', 0, 'Unknown', 'Unknown', '', '', '2016-03-22 Tuesday 06:08:47 pm'),
(105, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', 0, 'Unknown', 'Unknown', '', '', '2016-03-28 Monday 08:39:01 pm'),
(106, 'ASDFG', '9cb1ee7cf27fd09cb2d9099afefc6287', 'AS@ee.com', 'h', 'hh', 'Female', 0, 'Unknown', 'Unknown', '', '', '2016-03-28 Monday 09:47:16 pm');

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
  MODIFY `Mid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(15) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=107;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
