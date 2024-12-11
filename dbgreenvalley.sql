-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 10:55 PM
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
-- Database: `dbgreenvalley`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `COURSE_ID` int(11) NOT NULL,
  `COURSE_NAME` varchar(100) NOT NULL,
  `COURSE_LEVEL` varchar(50) NOT NULL DEFAULT '1',
  `DEPT_ID` int(11) NOT NULL,
  `SETSEMESTER` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_ID`, `COURSE_NAME`, `COURSE_LEVEL`, `DEPT_ID`, `SETSEMESTER`) VALUES
(1, 'Information Technology', '1', 1, ''),
(2, 'Information Technology', '2', 1, ''),
(3, 'Information Technology', '3', 1, ''),
(4, 'Information Technology', '4', 1, ''),
(5, 'Information Technology', '5', 1, ''),
(6, 'Information Technology', '6', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DEPT_ID` int(11) NOT NULL,
  `DEPARTMENT_NAME` varchar(30) NOT NULL,
  `DEPARTMENT_DESC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DEPT_ID`, `DEPARTMENT_NAME`, `DEPARTMENT_DESC`) VALUES
(1, 'IT', 'Information Technology Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `GRADE_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `FIRST` int(11) NOT NULL,
  `SECOND` int(11) NOT NULL,
  `THIRD` int(11) NOT NULL,
  `FOURTH` int(11) NOT NULL,
  `AVE` float NOT NULL,
  `REMARKS` text NOT NULL,
  `COMMENT` text NOT NULL,
  `SEMS` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GRADE_ID`, `IDNO`, `SUBJ_ID`, `FIRST`, `SECOND`, `THIRD`, `FOURTH`, `AVE`, `REMARKS`, `COMMENT`, `SEMS`) VALUES
(1, 1000000291, 1, 0, 0, 0, 0, 0, '', '', ''),
(2, 1000000292, 19, 0, 0, 0, 0, 0, '', '', ''),
(3, 1000000292, 20, 0, 0, 0, 0, 0, '', '', ''),
(4, 1000000292, 21, 0, 0, 0, 0, 0, '', '', ''),
(5, 1000000293, 5, 0, 0, 0, 0, 0, '', '', ''),
(6, 1000000293, 6, 0, 0, 0, 0, 0, '', '', ''),
(7, 1000000293, 7, 0, 0, 0, 0, 0, '', '', ''),
(8, 1000000293, 8, 0, 0, 0, 0, 0, '', '', ''),
(9, 1000000293, 9, 0, 0, 0, 0, 0, '', '', ''),
(10, 1000000294, 5, 0, 0, 0, 0, 0, '', '', ''),
(11, 1000000294, 6, 0, 0, 0, 0, 0, '', '', ''),
(12, 1000000294, 7, 0, 0, 0, 0, 0, '', '', ''),
(13, 1000000294, 8, 0, 0, 0, 0, 0, '', '', ''),
(14, 1000000294, 9, 0, 0, 0, 0, 0, '', '', ''),
(15, 1000000295, 5, 0, 0, 0, 0, 0, '', '', ''),
(16, 1000000295, 6, 0, 0, 0, 0, 0, '', '', ''),
(17, 1000000295, 7, 0, 0, 0, 0, 0, '', '', ''),
(18, 1000000295, 8, 0, 0, 0, 0, 0, '', '', ''),
(19, 1000000295, 9, 0, 0, 0, 0, 0, '', '', ''),
(20, 1000000296, 1, 0, 0, 0, 0, 0, '', '', ''),
(21, 1000000297, 15, 0, 0, 0, 0, 0, '', '', ''),
(22, 1000000297, 16, 0, 0, 0, 0, 0, '', '', ''),
(23, 1000000297, 17, 0, 0, 0, 0, 0, '', '', ''),
(24, 1000000297, 18, 0, 0, 0, 0, 0, '', '', ''),
(25, 1000000298, 15, 0, 0, 0, 0, 0, '', '', ''),
(26, 1000000298, 16, 0, 0, 0, 0, 0, '', '', ''),
(27, 1000000298, 17, 0, 0, 0, 0, 0, '', '', ''),
(28, 1000000298, 18, 0, 0, 0, 0, 0, '', '', ''),
(29, 1000000299, 1, 0, 0, 0, 0, 0, '', '', ''),
(30, 1000000300, 1, 0, 0, 0, 0, 0, '', '', ''),
(31, 1000000301, 1, 0, 0, 0, 0, 0, '', '', ''),
(32, 1000000302, 5, 0, 0, 0, 0, 0, '', '', ''),
(33, 1000000302, 6, 0, 0, 0, 0, 0, '', '', ''),
(34, 1000000302, 7, 0, 0, 0, 0, 0, '', '', ''),
(35, 1000000302, 8, 0, 0, 0, 0, 0, '', '', ''),
(36, 1000000302, 9, 0, 0, 0, 0, 0, '', '', ''),
(37, 1000000303, 1, 0, 0, 0, 0, 0, '', '', ''),
(38, 1000000304, 1, 0, 0, 0, 0, 0, '', '', ''),
(39, 1000000305, 1, 0, 0, 0, 0, 0, '', '', ''),
(40, 1000000306, 1, 0, 0, 0, 0, 0, '', '', ''),
(41, 1000000307, 1, 0, 0, 0, 0, 0, '', '', ''),
(42, 1000000308, 5, 0, 0, 0, 0, 0, '', '', ''),
(43, 1000000308, 6, 0, 0, 0, 0, 0, '', '', ''),
(44, 1000000308, 7, 0, 0, 0, 0, 0, '', '', ''),
(45, 1000000308, 8, 0, 0, 0, 0, 0, '', '', ''),
(46, 1000000308, 9, 0, 0, 0, 0, 0, '', '', ''),
(47, 1000000309, 15, 0, 0, 0, 0, 0, '', '', ''),
(48, 1000000309, 16, 0, 0, 0, 0, 0, '', '', ''),
(49, 1000000309, 17, 0, 0, 0, 0, 0, '', '', ''),
(50, 1000000309, 18, 0, 0, 0, 0, 0, '', '', ''),
(51, 1000000310, 15, 0, 0, 0, 0, 0, '', '', ''),
(52, 1000000310, 16, 0, 0, 0, 0, 0, '', '', ''),
(53, 1000000310, 17, 0, 0, 0, 0, 0, '', '', ''),
(54, 1000000310, 18, 0, 0, 0, 0, 0, '', '', ''),
(55, 1000000311, 15, 0, 0, 0, 0, 0, '', '', ''),
(56, 1000000311, 16, 0, 0, 0, 0, 0, '', '', ''),
(57, 1000000311, 17, 0, 0, 0, 0, 0, '', '', ''),
(58, 1000000311, 18, 0, 0, 0, 0, 0, '', '', ''),
(59, 1000000312, 15, 0, 0, 0, 0, 0, '', '', ''),
(60, 1000000312, 16, 0, 0, 0, 0, 0, '', '', ''),
(61, 1000000312, 17, 0, 0, 0, 0, 0, '', '', ''),
(62, 1000000312, 18, 0, 0, 0, 0, 0, '', '', ''),
(63, 1000000313, 15, 0, 0, 0, 0, 0, '', '', ''),
(64, 1000000313, 16, 0, 0, 0, 0, 0, '', '', ''),
(65, 1000000313, 17, 0, 0, 0, 0, 0, '', '', ''),
(66, 1000000313, 18, 0, 0, 0, 0, 0, '', '', ''),
(67, 1000000314, 15, 0, 0, 0, 0, 0, '', '', ''),
(68, 1000000314, 16, 0, 0, 0, 0, 0, '', '', ''),
(69, 1000000314, 17, 0, 0, 0, 0, 0, '', '', ''),
(70, 1000000314, 18, 0, 0, 0, 0, 0, '', '', ''),
(71, 1000000315, 15, 0, 0, 0, 0, 0, '', '', ''),
(72, 1000000315, 16, 0, 0, 0, 0, 0, '', '', ''),
(73, 1000000315, 17, 0, 0, 0, 0, 0, '', '', ''),
(74, 1000000315, 18, 0, 0, 0, 0, 0, '', '', ''),
(75, 1000000316, 15, 0, 0, 0, 0, 0, '', '', ''),
(76, 1000000316, 16, 0, 0, 0, 0, 0, '', '', ''),
(77, 1000000316, 17, 0, 0, 0, 0, 0, '', '', ''),
(78, 1000000316, 18, 0, 0, 0, 0, 0, '', '', ''),
(79, 1000000317, 10, 0, 0, 0, 0, 0, '', '', ''),
(80, 1000000317, 11, 0, 0, 0, 0, 0, '', '', ''),
(81, 1000000317, 12, 0, 0, 0, 0, 0, '', '', ''),
(82, 1000000317, 13, 0, 0, 0, 0, 0, '', '', ''),
(83, 1000000317, 14, 0, 0, 0, 0, 0, '', '', ''),
(84, 1000000318, 15, 0, 0, 0, 0, 0, '', '', ''),
(85, 1000000318, 16, 0, 0, 0, 0, 0, '', '', ''),
(86, 1000000318, 17, 0, 0, 0, 0, 0, '', '', ''),
(87, 1000000318, 18, 0, 0, 0, 0, 0, '', '', ''),
(88, 1000000319, 15, 0, 0, 0, 0, 0, '', '', ''),
(89, 1000000319, 16, 0, 0, 0, 0, 0, '', '', ''),
(90, 1000000319, 17, 0, 0, 0, 0, 0, '', '', ''),
(91, 1000000319, 18, 0, 0, 0, 0, 0, '', '', ''),
(92, 1000000321, 15, 70, 0, 0, 0, 70, 'Passed', '', ''),
(93, 1000000321, 16, 80, 0, 0, 0, 80, 'Passed', '', ''),
(94, 1000000321, 17, 0, 0, 0, 0, 0, '', '', ''),
(95, 1000000321, 18, 0, 0, 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `schoolyr`
--

CREATE TABLE `schoolyr` (
  `SYID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `ROLLNO` int(11) NOT NULL,
  `IDNO` int(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL DEFAULT 'ENROLLED',
  `DATE_RESERVED` datetime NOT NULL,
  `DATE_ENROLLED` datetime NOT NULL,
  `STATUS` varchar(30) NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schoolyr`
--

INSERT INTO `schoolyr` (`SYID`, `AY`, `SEMESTER`, `COURSE_ID`, `ROLLNO`, `IDNO`, `CATEGORY`, `DATE_RESERVED`, `DATE_ENROLLED`, `STATUS`) VALUES
(1, '2024-2025', 'First', 1, 27, 1000000291, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(2, '2024-2025', 'First', 6, 1, 1000000292, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(3, '2024-2025', 'First', 3, 1, 1000000293, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(4, '2024-2025', 'First', 3, 7, 1000000294, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(5, '2024-2025', 'First', 3, 3, 1000000295, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(6, '2024-2025', 'First', 1, 29, 1000000296, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(7, '2024-2025', 'First', 5, 22, 1000000297, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(8, '2024-2025', 'First', 5, 4, 1000000298, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(9, '2024-2025', 'First', 1, 4, 1000000299, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(10, '2024-2025', 'First', 1, 43, 1000000300, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(11, '2024-2025', 'First', 1, 13, 1000000301, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(12, '2024-2025', 'First', 3, 37, 1000000302, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(13, '2024-2025', 'First', 1, 12, 1000000303, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(14, '2024-2025', 'First', 1, 46, 1000000304, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(15, '2024-2025', 'First', 1, 39, 1000000305, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(16, '2024-2025', 'First', 1, 33, 1000000306, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(17, '2024-2025', 'First', 1, 24, 1000000307, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(18, '2024-2025', 'First', 3, 31, 1000000308, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(19, '2024-2025', 'First', 5, 6, 1000000309, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(20, '2024-2025', 'First', 5, 14, 1000000310, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(21, '2024-2025', 'First', 5, 1, 1000000311, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(22, '2024-2025', 'First', 5, 13, 1000000312, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(23, '2024-2025', 'First', 5, 3, 1000000313, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(24, '2024-2025', 'First', 5, 9, 1000000314, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(25, '2024-2025', 'First', 5, 19, 1000000315, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(26, '2024-2025', 'First', 5, 10, 1000000316, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(27, '2024-2025', 'First', 4, 11, 1000000317, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(28, '2024-2025', 'First', 5, 11, 1000000318, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New'),
(29, '2024-2025', 'First', 5, 2, 1000000319, 'ENROLLED', '2024-10-08 00:00:00', '2024-10-08 00:00:00', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `IDNO` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `SEX` varchar(25) NOT NULL,
  `ROLLNO` varchar(50) NOT NULL,
  `NRC` varchar(50) NOT NULL,
  `ADMISSION_NO` int(11) NOT NULL,
  `AY` varchar(50) NOT NULL,
  `BDAY` date DEFAULT NULL,
  `CONTACT_NO` varchar(100) NOT NULL,
  `HOME_ADD` varchar(255) NOT NULL,
  `FATHER_NAME` varchar(100) NOT NULL,
  `FATHER_OCCUPTION` varchar(100) NOT NULL,
  `MOTHER_NAME` varchar(100) NOT NULL,
  `MOTHER_OCCUPTION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`IDNO`, `NAME`, `EMAIL`, `SEX`, `ROLLNO`, `NRC`, `ADMISSION_NO`, `AY`, `BDAY`, `CONTACT_NO`, `HOME_ADD`, `FATHER_NAME`, `FATHER_OCCUPTION`, `MOTHER_NAME`, `MOTHER_OCCUPTION`) VALUES
(1, 'Chit Su Thway ', 'suthway38@gmail.com', 'Female', 'V IT - 2', '12/Tamana(N)122910', 1586, '2023-2024', '2000-11-30', '09969365786', 'C, Maugone Housing, Yangon ', 'U Kyin Naing', 'Retired', 'Daw Win Win Hlaing', 'Government staff'),
(2, 'Su Sandy Aung', 'susandy210@gmail.com', 'Female', 'V IT - 11', '12/DaGaMa(N)032847', 1650, '2023-2024', '2000-09-19', '09254448527', 'No(1193), Seinchal street, 49 quarter, North Dagon', 'U Than Naing', 'Dependent', 'Daw Tin Tin New', 'Dependent'),
(3, 'Hein Htet Zaw ', 'exaid9879@gmail.com', 'Male', 'IV IT - 11', 'Tka(n)211417', 2135, '2023-2024', '2001-07-05', '09750104655', 'Tharkayta ', 'U Nyan Ye Win', 'Kaytumadi\'s AGM', 'Daw Than Than Myint', 'Housewife '),
(4, 'Aung Zin Ko', 'aungzinko495@gmail.com', 'Male', 'V IT - 10', '9/MaThaNa(N)176632', 9125, '2023-2024', '2001-02-15', '09761012244', 'Myittha,Mandalay Region', 'U Tun Ko Ko', 'Farmer', 'Daw Cho Cho Win', 'Farmer'),
(5, 'Pyae Phone Aung', 'mnkhntko@gmail.com', 'Male', 'V IT - 19R', '10/BaLaNa(N)166105', 4412, '2023-2024', '1999-05-26', '09988687759', 'No.148, Zayarthiri 7th St, Dawbon,Yangon', 'U Kyaw Soe Naing', 'Farmer', 'Kyu Kyu Khaing', 'Housewife '),
(6, 'Eaint Chaw', 'eaintchaw49@gmail.com', 'Female', 'V IT - 9', '-', 2117, '2023-2024', '2001-04-09', '09796666187', 'Dagon Satekan, Yangon', 'U Hla Win', 'Passed away', 'Daw San San Yee', 'Retired'),
(7, 'Mya Thinzar Kyaw', 'myathinzarkyaw28@gmail.com', 'Female', 'V IT - 3', '14/PhaPaNa(N)192586', 1676, '2023-2024', '1999-10-28', '09973873162', 'No(292 )Thida Street,Pyapon', 'U Aung Kyaw Moe', 'Trader', 'Daw Kyi Kyi Lwin', 'Housewife '),
(8, 'Phyo Min Khine', 'phyokhine458@gmail.com', 'Male', 'V IT - 13', '11/KaPhaNa(N)117149', 2563, '2023-2024', '1999-08-26', '09264614750', 'Sarthinkayung Street, Saytiya, KyaukPhyu', 'U Thein Kyaw Hlaing', 'Merchant', 'Daw Aye Aye Myint', 'Housewife '),
(9, 'Inkyinn Thaw Thaw', 'ikthawthaw30@gmail.com', 'Female', 'V IT - 1', '12/yapatha(N)103238', 1608, '2023-2024', '2000-07-30', '09787822672', '355 mahar bandula road, kyuttada, Yangon', 'U Kyaw Soe Win', 'Government staff', 'Daw San San Naing', 'Dependent'),
(10, 'Htoo Thiri Khin', 'htookhin022@gmail.com', 'Female', 'V IT - 14', '7/PaMaNa(N)211012', 1597, '2023-2024', '2000-02-12', '09787040001', 'Bayintnaung Tower, Kamayut, Yangon', 'U Kyaw Moe Khaing', 'Merchant', 'Daw Aye Myat Thandar', 'Dependent'),
(11, 'Swe Zin Oo', 'swrzinoo939@gmail.com', 'Female', 'V IT - 6', '12/ThaLaNa(N)163811', 2109, '2023-2024', '2001-02-28', '09953809280', 'Thanlyin', 'U Htay Oo', 'Passed away', 'Daw Lai Lai Win', 'Housewife '),
(12, 'Tin Nilar Win ', 'tinnilarwin964@gmail.com', 'Female', 'III IT(J)-31', '12/DGT(N)097575', 3336, '2023-2024', '2004-06-09', '9985499137', '1004/B,Khatter St,72 Ward, South Dagon,Yangon', 'U Win Thura Zaw', 'Government staff', 'Daw Nilar Khaing', 'Dependent'),
(13, 'Yair Moe Aung', '-', 'Male', 'I IT - 24', '12/ThaGaKa(N)220612', 900, '2023-2024', '2004-08-07', '9888559889', 'Chanaye Street, Thingankyun, Yangon', 'U Min Moe', 'Merchant', 'Daw Hnin Yu Khaing', 'Dependent'),
(14, 'Hsu Nan Dar', 'ssu627366@gmail.com', 'Female', 'I IT - 33 ', '12/ThaGaKa(N)200807', 4191, '2023-2024', '2004-06-01', '943027649', '33, Thirizayyar Street, Zawana, Thingankyun, Yangon', 'U Nay Lin/ U Zay Ya Min', 'Shopkeeper', 'Daw Khin Su Yee', 'Passed away'),
(15, 'Ei May Me Nyein', 'eimayyangon324@gmail.com', 'Female', 'I IT - 39', '12/DaGaYa(N)039727', 600, '2023-2024', '2005-02-27', '9457555128', 'Dagon MyoThit, Thonekwa Ward, YwarLel Street', 'U Aung Myat Soe Nyein', 'Passed away', 'Daw Mar Mar Lwin', 'Factory Staff'),
(16, 'Ngu Wah Hlaing ', 'nguwahhlaing05@gmail.com', 'Female', 'I IT - 46', '12/DaLaNa(N)100105', 100, '2023-2024', '2005-01-24', '9943436334', 'Yazathingyan street, Panwar Road, Dala', 'U Si Thu', 'Staff', 'Daw Myint Myint Mar', 'Housewife '),
(17, 'Thal Nu San', 'thaesan61@gmail.com', 'Female', 'I IT - 12', '12/DaGaTa(N)130489', 93, '2023-2024', '2004-12-27', '9263608057', '2/4/16(Ka), Sinphyushin street, South Dagon, Yangon', 'U Kyaw Naing Win ', 'Sailor ', 'Daw Myat Thandar Aung', 'Housewife '),
(18, 'Kyo Kyo Moe', 'kyokyomoe54@gmail.com', 'Female', 'III IT - 37', '10/PaMaMa(N)258074', 4204, '2023-2024', '2004-04-12', '9793323995', 'Paung Township,Mon state', 'U Aung Kyaw Moe', 'Shopkeeper', 'Daw Kay Thwe Khaing', 'Shopkeeper'),
(19, 'Cho Cho Lwin', 'chocholwim21@gmail.com ', 'Female', 'I IT - 13', '7/MaLaNa(N)140133', 102, '2023-2024', '2005-04-25', '9683954888', 'Min Hla ', 'U Aye Lwin', 'Farmer', 'Daw Cho Mar', 'Farmer'),
(20, 'Eaint Chyu Myint Myat Phoo', 'pphoo0996@gmail.com', 'Female', 'I IT - 43', '12/DaLaNa(N)083353', 220, '2023-2024', '2005-04-03', '9770582081', 'PyawBwalKyi Village, Dala, Yangon', 'U Aung Soe', 'Farmer', 'Daw Pyone Yee', 'Farmer'),
(21, 'Hnin Moe Lwin', 'hninmoelwin73@gmail.com', 'Female', 'I IT - 4', '12/MaGaTa(N)125338', 4162, '2023-2024', '2004-09-04', '9755620016', '16,123st,Mingalar Taung Nyunt Township, Yangon ', 'U Min Zaw Moe', 'Taxi Driver', 'Daw Zin Mar Lwin', 'Housewife '),
(22, 'Kyaw Kay Zin Han', 'kyawkayzinhan@gmail.com', 'Female', 'V IT - 4', '12/ThaKaTa(N)200419 ', 2125, '2023-2024', '2001-08-09', '9754708004', 'Tharkayta ', 'U Moe Kyaw', '-', 'Daw San San Thein', 'Government staff'),
(23, 'Yin Thu Zar Aung', 'yinthuzaraung113@gmail.com', 'Female', 'V IT - Ext2', '-', 1192, '2023-2024', '1999-03-24', '9758240422', '15th Street, 13 Ward, South Okkalapa', 'U Htay Lwin', '-', 'Daw Myint Myint Yee', 'Dependent'),
(24, 'Lamin May Oo', 'laminmayoo18@gmail.com', 'Female', 'I IT - 29', '12/ALaNa(N)052518', 134, '2023-2024', '2004-12-18', '9796930449', 'No.11, 30 Ward, SaungHaymarn Housing, North Dagon', 'U Kyaw Swar Tun', 'Sailor ', 'Daw Yadanar La Win', 'Dependent'),
(26, 'Yoon Yati Htut', 'yoonyoonhtut@gmail.com', 'Female', 'III IT(J) - 3', '7/DaUNa(N)216849', 3323, '2023-2024', '2004-06-11', '9965559689', 'Main Road,Daik-U,Bago', 'U Ye Min Thu', 'Merchant', 'Daw Win May Thu', 'Nurse(Retired)'),
(27, 'Shwe Yee', 'shweyeewin2610@gmail.com', 'Female', 'III IT(S) - 7', '10/MLM(N)271173', 7, '2023-2024', '2001-10-26', '9756344113', 'Aung Thu kha road mawlamyine', 'U Ko Ko', 'Business', 'Daw Mee Mee Shwe', 'Business'),
(28, 'Pyae Thuta', 'hehehaha@gmail.com', 'Male', 'III IT(S) - 1', '14/DGM(N)012567', 1, '2023-2024', '2003-02-05', '9584112', 'Shan State', 'U Thuta', 'Retired', 'Daw Mee Mee Shwe', 'Retired'),
(29, 'Mon Kyi Marn', 'monkyimern123@gmail.com', 'Male', 'V  IT - 1', '12/BoKaLay(N)456789', 6981, '2023-2024', '1944-03-12', '9.5567836572829E+14', '128/1B Shwe Taung Kyar 1, Mandalay', 'U Ba', 'Doctor', 'Daw Mya', 'Engineer '),
(30, 'Thu Thu Thiha', 'thuthu2133222@gmail.com', 'Female', 'I IT - 27', '12/TaKaNa(N)280196', 4185, '2023-2024', '2005-02-25', '9777165031', 'ThaMaKawLate street, AMhuHtan Ward, Thanlyin', 'U Kyaw Thiha Tun', 'Driver', 'Daw San San Win', 'Dependent');

-- --------------------------------------------------------

--
-- Table structure for table `studentschedule`
--

CREATE TABLE `studentschedule` (
  `CLASS_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `schedID` int(11) NOT NULL,
  `AY` varchar(11) NOT NULL,
  `DAY` varchar(20) NOT NULL,
  `C_TIME` varchar(30) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `ROOM` text NOT NULL,
  `CSECTION` varchar(30) NOT NULL DEFAULT 'NONE',
  `COURSE_ID` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentsubjects`
--

CREATE TABLE `studentsubjects` (
  `STUDSUBJ_ID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `LEVEL` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SY` text NOT NULL,
  `ATTEMP` int(11) NOT NULL,
  `AVERAGE` double NOT NULL,
  `OUTCOME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `studentsubjects`
--

INSERT INTO `studentsubjects` (`STUDSUBJ_ID`, `IDNO`, `SUBJ_ID`, `LEVEL`, `SEMESTER`, `SY`, `ATTEMP`, `AVERAGE`, `OUTCOME`) VALUES
(1, 1000000291, 1, 1, 'First', '2024-2025', 1, 0, ''),
(2, 1000000292, 19, 6, 'First', '2024-2025', 1, 0, ''),
(3, 1000000292, 20, 6, 'First', '2024-2025', 1, 0, ''),
(4, 1000000292, 21, 6, 'First', '2024-2025', 1, 0, ''),
(5, 1000000293, 5, 3, 'First', '2024-2025', 1, 0, ''),
(6, 1000000293, 6, 3, 'First', '2024-2025', 1, 0, ''),
(7, 1000000293, 7, 3, 'First', '2024-2025', 1, 0, ''),
(8, 1000000293, 8, 3, 'First', '2024-2025', 1, 0, ''),
(9, 1000000293, 9, 3, 'First', '2024-2025', 1, 0, ''),
(10, 1000000294, 5, 3, 'First', '2024-2025', 1, 0, ''),
(11, 1000000294, 6, 3, 'First', '2024-2025', 1, 0, ''),
(12, 1000000294, 7, 3, 'First', '2024-2025', 1, 0, ''),
(13, 1000000294, 8, 3, 'First', '2024-2025', 1, 0, ''),
(14, 1000000294, 9, 3, 'First', '2024-2025', 1, 0, ''),
(15, 1000000295, 5, 3, 'First', '2024-2025', 1, 0, ''),
(16, 1000000295, 6, 3, 'First', '2024-2025', 1, 0, ''),
(17, 1000000295, 7, 3, 'First', '2024-2025', 1, 0, ''),
(18, 1000000295, 8, 3, 'First', '2024-2025', 1, 0, ''),
(19, 1000000295, 9, 3, 'First', '2024-2025', 1, 0, ''),
(20, 1000000296, 1, 1, 'First', '2024-2025', 1, 0, ''),
(21, 1000000297, 15, 5, 'First', '2024-2025', 1, 0, ''),
(22, 1000000297, 16, 5, 'First', '2024-2025', 1, 0, ''),
(23, 1000000297, 17, 5, 'First', '2024-2025', 1, 0, ''),
(24, 1000000297, 18, 5, 'First', '2024-2025', 1, 0, ''),
(25, 1000000298, 15, 5, 'First', '2024-2025', 1, 0, ''),
(26, 1000000298, 16, 5, 'First', '2024-2025', 1, 0, ''),
(27, 1000000298, 17, 5, 'First', '2024-2025', 1, 0, ''),
(28, 1000000298, 18, 5, 'First', '2024-2025', 1, 0, ''),
(29, 1000000299, 1, 1, 'First', '2024-2025', 1, 0, ''),
(30, 1000000300, 1, 1, 'First', '2024-2025', 1, 0, ''),
(31, 1000000301, 1, 1, 'First', '2024-2025', 1, 0, ''),
(32, 1000000302, 5, 3, 'First', '2024-2025', 1, 0, ''),
(33, 1000000302, 6, 3, 'First', '2024-2025', 1, 0, ''),
(34, 1000000302, 7, 3, 'First', '2024-2025', 1, 0, ''),
(35, 1000000302, 8, 3, 'First', '2024-2025', 1, 0, ''),
(36, 1000000302, 9, 3, 'First', '2024-2025', 1, 0, ''),
(37, 1000000303, 1, 1, 'First', '2024-2025', 1, 0, ''),
(38, 1000000304, 1, 1, 'First', '2024-2025', 1, 0, ''),
(39, 1000000305, 1, 1, 'First', '2024-2025', 1, 0, ''),
(40, 1000000306, 1, 1, 'First', '2024-2025', 1, 0, ''),
(41, 1000000307, 1, 1, 'First', '2024-2025', 1, 0, ''),
(42, 1000000308, 5, 3, 'First', '2024-2025', 1, 0, ''),
(43, 1000000308, 6, 3, 'First', '2024-2025', 1, 0, ''),
(44, 1000000308, 7, 3, 'First', '2024-2025', 1, 0, ''),
(45, 1000000308, 8, 3, 'First', '2024-2025', 1, 0, ''),
(46, 1000000308, 9, 3, 'First', '2024-2025', 1, 0, ''),
(47, 1000000309, 15, 5, 'First', '2024-2025', 1, 0, ''),
(48, 1000000309, 16, 5, 'First', '2024-2025', 1, 0, ''),
(49, 1000000309, 17, 5, 'First', '2024-2025', 1, 0, ''),
(50, 1000000309, 18, 5, 'First', '2024-2025', 1, 0, ''),
(51, 1000000310, 15, 5, 'First', '2024-2025', 1, 0, ''),
(52, 1000000310, 16, 5, 'First', '2024-2025', 1, 0, ''),
(53, 1000000310, 17, 5, 'First', '2024-2025', 1, 0, ''),
(54, 1000000310, 18, 5, 'First', '2024-2025', 1, 0, ''),
(55, 1000000311, 15, 5, 'First', '2024-2025', 1, 0, ''),
(56, 1000000311, 16, 5, 'First', '2024-2025', 1, 0, ''),
(57, 1000000311, 17, 5, 'First', '2024-2025', 1, 0, ''),
(58, 1000000311, 18, 5, 'First', '2024-2025', 1, 0, ''),
(59, 1000000312, 15, 5, 'First', '2024-2025', 1, 0, ''),
(60, 1000000312, 16, 5, 'First', '2024-2025', 1, 0, ''),
(61, 1000000312, 17, 5, 'First', '2024-2025', 1, 0, ''),
(62, 1000000312, 18, 5, 'First', '2024-2025', 1, 0, ''),
(63, 1000000313, 15, 5, 'First', '2024-2025', 1, 0, ''),
(64, 1000000313, 16, 5, 'First', '2024-2025', 1, 0, ''),
(65, 1000000313, 17, 5, 'First', '2024-2025', 1, 0, ''),
(66, 1000000313, 18, 5, 'First', '2024-2025', 1, 0, ''),
(67, 1000000314, 15, 5, 'First', '2024-2025', 1, 0, ''),
(68, 1000000314, 16, 5, 'First', '2024-2025', 1, 0, ''),
(69, 1000000314, 17, 5, 'First', '2024-2025', 1, 0, ''),
(70, 1000000314, 18, 5, 'First', '2024-2025', 1, 0, ''),
(71, 1000000315, 15, 5, 'First', '2024-2025', 1, 0, ''),
(72, 1000000315, 16, 5, 'First', '2024-2025', 1, 0, ''),
(73, 1000000315, 17, 5, 'First', '2024-2025', 1, 0, ''),
(74, 1000000315, 18, 5, 'First', '2024-2025', 1, 0, ''),
(75, 1000000316, 15, 5, 'First', '2024-2025', 1, 0, ''),
(76, 1000000316, 16, 5, 'First', '2024-2025', 1, 0, ''),
(77, 1000000316, 17, 5, 'First', '2024-2025', 1, 0, ''),
(78, 1000000316, 18, 5, 'First', '2024-2025', 1, 0, ''),
(79, 1000000317, 10, 4, 'First', '2024-2025', 1, 0, ''),
(80, 1000000317, 11, 4, 'First', '2024-2025', 1, 0, ''),
(81, 1000000317, 12, 4, 'First', '2024-2025', 1, 0, ''),
(82, 1000000317, 13, 4, 'First', '2024-2025', 1, 0, ''),
(83, 1000000317, 14, 4, 'First', '2024-2025', 1, 0, ''),
(84, 1000000318, 15, 5, 'First', '2024-2025', 1, 0, ''),
(85, 1000000318, 16, 5, 'First', '2024-2025', 1, 0, ''),
(86, 1000000318, 17, 5, 'First', '2024-2025', 1, 0, ''),
(87, 1000000318, 18, 5, 'First', '2024-2025', 1, 0, ''),
(88, 1000000319, 15, 5, 'First', '2024-2025', 1, 0, ''),
(89, 1000000319, 16, 5, 'First', '2024-2025', 1, 0, ''),
(90, 1000000319, 17, 5, 'First', '2024-2025', 1, 0, ''),
(91, 1000000319, 18, 5, 'First', '2024-2025', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SUBJ_ID` int(11) NOT NULL,
  `SUBJ_CODE` varchar(30) NOT NULL,
  `SUBJ_DESCRIPTION` varchar(255) NOT NULL,
  `UNIT` int(2) NOT NULL,
  `PRE_REQUISITE` varchar(30) NOT NULL DEFAULT 'None',
  `COURSE_ID` int(11) NOT NULL,
  `AY` varchar(30) NOT NULL,
  `SEMESTER` varchar(20) NOT NULL,
  `PreTaken` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SUBJ_ID`, `SUBJ_CODE`, `SUBJ_DESCRIPTION`, `UNIT`, `PRE_REQUISITE`, `COURSE_ID`, `AY`, `SEMESTER`, `PreTaken`) VALUES
(1, 'IT 12022', 'Introduction to Computer System', 0, 'None', 1, '', 'First', 0),
(2, 'IT 22012', 'Data Communication', 0, 'None', 2, '', 'First', 0),
(3, 'IT 22021', 'Digital Logic Design', 0, 'None', 2, '', 'First', 0),
(4, 'IT 22011', 'Basic Electricity And Electronics ', 0, 'None', 2, '', 'First', 0),
(5, 'IT 32022', 'Computer Network', 0, 'None', 3, '', 'First', 0),
(6, 'IT 32035', 'Web Development Technologices II', 0, 'None', 3, '', 'First', 0),
(7, 'IT 32045', 'Programming Language in Java', 0, 'None', 3, '', 'First', 0),
(8, 'IT 32055', 'Data Structure', 0, 'None', 3, '', 'First', 0),
(9, 'IT 32016', 'Database Management Systems', 0, 'None', 3, '', 'First', 0),
(10, 'IT 42032', 'Advanced Computer Networks', 0, 'None', 4, '', 'First', 0),
(11, 'IT 42023', 'Computer Architecture and Organization', 0, 'None', 4, '', 'First', 0),
(12, 'IT 42033', 'Operating Systems', 0, 'None', 4, '', 'First', 0),
(13, 'IT 42026', 'Advanced Data Management Techniques', 0, 'None', 4, '', 'First', 0),
(14, 'IT 42017`', 'Modern Control Systems', 0, 'None', 4, '', 'First', 0),
(15, 'IT 52065', 'Software Engineering', 0, 'None', 5, '', 'First', 0),
(16, 'IT 52037', 'Digital Image Processing', 0, 'None', 5, '', 'First', 0),
(17, 'IT 52042', 'Cryptography and Network Security', 0, 'None', 5, '', 'First', 0),
(18, 'IT 52043', 'Artifical Intelligence I', 0, 'None', 5, '', 'First', 0),
(19, 'IT 61052', 'Network Planning and Management', 0, 'None', 6, '', 'First', 0),
(20, 'IT 61075', 'Project Management', 0, 'None', 6, '', 'First', 0),
(21, 'IT 61062', 'Wireless and Mobile Communications', 0, 'None', 6, '', 'First', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblauto`
--

CREATE TABLE `tblauto` (
  `ID` int(11) NOT NULL,
  `autocode` varchar(255) DEFAULT NULL,
  `autoname` varchar(255) DEFAULT NULL,
  `appendchar` varchar(255) DEFAULT NULL,
  `autostart` int(11) DEFAULT 0,
  `autoend` int(11) DEFAULT 0,
  `incrementvalue` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tblauto`
--

INSERT INTO `tblauto` (`ID`, `autocode`, `autoname`, `appendchar`, `autostart`, `autoend`, `incrementvalue`) VALUES
(1, 'Asset', 'Asset', 'ASitem', 0, 3, 1),
(2, 'Trans', 'Transaction', 'TrAnS', 1, 5, 1),
(3, 'SIDNO', 'IDNO', '2015', 1000000, 322, 1),
(4, 'EMPLOYEE', 'EMPID', '020010', 0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblinstructor`
--

CREATE TABLE `tblinstructor` (
  `INST_ID` int(11) NOT NULL,
  `INST_NAME` varchar(90) NOT NULL,
  `INST_MAJOR` int(90) NOT NULL,
  `INST_CONTACT` varchar(30) NOT NULL,
  `INST_EMAIL` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblinstructor`
--

INSERT INTO `tblinstructor` (`INST_ID`, `INST_NAME`, `INST_MAJOR`, `INST_CONTACT`, `INST_EMAIL`) VALUES
(1, 'Daw Mon Mon Zaw', 1, '09876543211', 'monmonzaw@gmail.com'),
(2, 'Daw Aye Chan Mon', 1, '09876523456', 'ayechan@gmail.com'),
(3, 'Daw Hay Mum Oo', 1, '09876523432', 'haymum@gmail.com'),
(4, 'Daw Myat Hay Marn Win', 1, '09288523456', 'myathay@gmail.com'),
(5, 'Daw Nge', 1, '09567523456', 'dawnge@gmail.com'),
(13, 'Daw Swe Thiri Maw', 1, '09876543211', 'ayewin121@gmail.com'),
(14, 'Daw Khin Kyi Pyar', 1, '098765432', 'khinkyipyar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `LOGID` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `LOGDATETIME` datetime NOT NULL,
  `LOGROLE` varchar(55) NOT NULL,
  `LOGMODE` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`LOGID`, `USERID`, `LOGDATETIME`, `LOGROLE`, `LOGMODE`) VALUES
(1, 1000000321, '2024-10-08 22:48:48', 'Student', 'Logged in'),
(2, 1000000321, '2024-10-08 22:50:15', 'Student', 'Logged out'),
(3, 1000000321, '2024-10-08 22:50:24', 'Student', 'Logged in'),
(4, 1000000321, '2024-10-08 22:52:06', 'Student', 'Logged out');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `PAYMENTID` int(11) NOT NULL,
  `IDNO` int(11) NOT NULL,
  `SY` varchar(30) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `ENTRANCEFEE` double NOT NULL,
  `PSLIP` varchar(255) NOT NULL,
  `DATETIME` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`PAYMENTID`, `IDNO`, `SY`, `COURSE_ID`, `SEMESTER`, `ENTRANCEFEE`, `PSLIP`, `DATETIME`) VALUES
(1, 1000000291, '2024-2025', 1, 'First', 0, '', '2024-10-09 01:28:20'),
(2, 1000000292, '2024-2025', 6, 'First', 0, '', '2024-10-09 01:36:27'),
(3, 1000000293, '2024-2025', 3, 'First', 0, '', '2024-10-09 01:40:28'),
(4, 1000000294, '2024-2025', 3, 'First', 0, '', '2024-10-09 01:43:13'),
(5, 1000000295, '2024-2025', 3, 'First', 0, '', '2024-10-09 01:45:55'),
(6, 1000000296, '2024-2025', 1, 'First', 0, '', '2024-10-09 01:48:29'),
(7, 1000000297, '2024-2025', 5, 'First', 0, '', '2024-10-09 01:55:19'),
(8, 1000000298, '2024-2025', 5, 'First', 0, '', '2024-10-09 01:58:31'),
(9, 1000000299, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:02:26'),
(10, 1000000300, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:05:36'),
(11, 1000000301, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:08:20'),
(12, 1000000302, '2024-2025', 3, 'First', 0, '', '2024-10-09 02:11:08'),
(13, 1000000303, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:14:10'),
(14, 1000000304, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:17:39'),
(15, 1000000305, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:20:22'),
(16, 1000000306, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:23:01'),
(17, 1000000307, '2024-2025', 1, 'First', 0, '', '2024-10-09 02:26:17'),
(18, 1000000308, '2024-2025', 3, 'First', 0, '', '2024-10-09 02:28:48'),
(19, 1000000309, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:31:01'),
(20, 1000000310, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:33:28'),
(21, 1000000311, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:35:47'),
(22, 1000000312, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:37:53'),
(23, 1000000313, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:40:27'),
(24, 1000000314, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:42:59'),
(25, 1000000315, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:45:26'),
(26, 1000000316, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:47:27'),
(27, 1000000317, '2024-2025', 4, 'First', 0, '', '2024-10-09 02:50:25'),
(28, 1000000318, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:52:51'),
(29, 1000000319, '2024-2025', 5, 'First', 0, '', '2024-10-09 02:55:06'),
(30, 1000000291, '2024-2025', 5, 'First', 0, '', '2024-10-09 03:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `tblschedule`
--

CREATE TABLE `tblschedule` (
  `schedID` int(11) NOT NULL,
  `TIME_FROM` varchar(90) NOT NULL,
  `TIME_TO` varchar(90) NOT NULL,
  `sched_time` varchar(30) NOT NULL,
  `sched_day` varchar(30) NOT NULL,
  `sched_semester` varchar(30) NOT NULL,
  `sched_sy` varchar(30) NOT NULL,
  `sched_room` varchar(30) NOT NULL,
  `SECTION` varchar(30) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `SUBJ_ID` int(11) NOT NULL,
  `INST_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblschedule`
--

INSERT INTO `tblschedule` (`schedID`, `TIME_FROM`, `TIME_TO`, `sched_time`, `sched_day`, `sched_semester`, `sched_sy`, `sched_room`, `SECTION`, `COURSE_ID`, `SUBJ_ID`, `INST_ID`) VALUES
(1, '09:00 am', '11:40 am', '09:00 am-11:40 am', 'Tuesday', 'First', '2024-2025', '', '', 5, 18, 2),
(2, '01:15 pm', '02:05 pm', '01:15 pm-02:05 pm', 'Tuesday', 'First', '2024-2025', '', '', 5, 17, 13),
(3, '02:10 pm', '03:00 pm', '02:10 pm-03:00 pm', 'Tuesday', 'First', '2024-2025', '', '', 5, 16, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tblsemester`
--

CREATE TABLE `tblsemester` (
  `SEMID` int(11) NOT NULL,
  `SEMESTER` varchar(90) NOT NULL,
  `SETSEM` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsemester`
--

INSERT INTO `tblsemester` (`SEMID`, `SEMESTER`, `SETSEM`) VALUES
(1, 'First', 1),
(2, 'Second', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblstuddetails`
--

CREATE TABLE `tblstuddetails` (
  `DETAIL_ID` int(11) NOT NULL,
  `ADMISSION_NO` int(11) NOT NULL,
  `FATHER_NAME` varchar(30) NOT NULL,
  `FATHER_OCCUPATION` varchar(30) NOT NULL,
  `MOTHER_NAME` varchar(30) NOT NULL,
  `MOTHER_OCCUPATION` varchar(30) NOT NULL,
  `IDNO` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstuddetails`
--

INSERT INTO `tblstuddetails` (`DETAIL_ID`, `ADMISSION_NO`, `FATHER_NAME`, `FATHER_OCCUPATION`, `MOTHER_NAME`, `MOTHER_OCCUPATION`, `IDNO`) VALUES
(1, 4185, 'U Kyaw Thiha Tun', 'Driver', 'Daw San San Win', 'Dependent', 1000000291),
(2, 6981, 'U Ba', 'Doctor', 'Daw Mya', 'Engineer ', 1000000292),
(3, 1, 'U Thuta', 'Retired', 'Daw Mee Mee Shwe', 'Retired', 1000000293),
(4, 7, 'U Ko Ko', 'Business', 'Daw Mee Mee Shwe', 'Business', 1000000294),
(5, 3323, 'U Ye Min Thu', 'Merchant', 'Daw Win May Thu', 'Nurse(Retired)', 1000000295),
(6, 134, 'U Kyaw Swar Tun', 'Sailor ', 'Daw Yadanar La Win', 'Dependent', 1000000296),
(7, 1192, 'U Htay Lwin', '-', 'Daw Myint Myint Yee', 'Dependent', 1000000297),
(8, 2125, 'U Moe Kyaw', '-', 'Daw San San Thein', 'Government staff', 1000000298),
(9, 4162, 'U Min Zaw Moe', 'Taxi Driver', 'Daw Zin Mar Lwin', 'Housewife ', 1000000299),
(10, 220, 'U Aung Soe', 'Farmer', 'Daw Pyone Yee', 'Farmer', 1000000300),
(11, 102, 'U Aye Lwin', 'Farmer', 'Daw Cho Mar', 'Farmer', 1000000301),
(12, 4204, 'U Aung Kyaw Moe', 'Shopkeeper', 'Daw Kay Thwe Khaing', 'Shopkeeper', 1000000302),
(13, 93, 'U Kyaw Naing Win ', 'Sailor ', 'Daw Myat Thandar Aung', 'Housewife ', 1000000303),
(14, 100, 'U Si Thu', 'Staff', 'Daw Myint Myint Mar', 'Housewife ', 1000000304),
(15, 600, 'U Aung Myat Soe Nyein', 'Passed away', 'Daw Mar Mar Lwin', 'Factory Staff', 1000000305),
(16, 4191, 'U Nay Lin/ U Zay Ya Min', 'Shopkeeper', 'Daw Khin Su Yee', 'Passed away', 1000000306),
(17, 900, 'U Min Moe', 'Merchant', 'Daw Hnin Yu Khaing', 'Dependent', 1000000307),
(18, 3336, 'U Win Thura Zaw', 'Government staff', 'Daw Nilar Khaing', 'Dependent', 1000000308),
(19, 2109, 'U Htay Oo', 'Passed away', 'Daw Lai Lai Win', 'Housewife ', 1000000309),
(20, 1597, 'U Kyaw Moe Khaing', 'Merchant', 'Daw Aye Myat Thandar', 'Dependent', 1000000310),
(21, 1608, 'U Kyaw Soe Win', 'Government staff', 'Daw San San Naing', 'Dependent', 1000000311),
(22, 2563, 'U Thein Kyaw Hlaing', 'Merchant', 'Daw Aye Aye Myint', 'Housewife ', 1000000312),
(23, 1676, 'U Aung Kyaw Moe', 'Trader', 'Daw Kyi Kyi Lwin', 'Housewife ', 1000000313),
(24, 2117, 'U Hla Win', 'Passed away', 'Daw San San Yee', 'Retired', 1000000314),
(25, 4412, 'U Kyaw Soe Naing', 'Farmer', 'Kyu Kyu Khaing', 'Housewife ', 1000000315),
(26, 9125, 'U Tun Ko Ko', 'Farmer', 'Daw Cho Cho Win', 'Farmer', 1000000316),
(27, 2135, 'U Nyan Ye Win', 'Kaytumadi\'s AGM', 'Daw Than Than Myint', 'Housewife ', 1000000317),
(28, 1650, 'U Than Naing', 'Dependent', 'Daw Tin Tin New', 'Dependent', 1000000318),
(29, 1586, 'U Kyin Naing', 'Retired', 'Daw Win Win Hlaing', 'Government staff', 1000000319);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `S_ID` int(11) NOT NULL,
  `IDNO` int(20) NOT NULL,
  `FNAME` varchar(40) NOT NULL,
  `SEX` varchar(10) NOT NULL DEFAULT 'Male',
  `BDAY` date NOT NULL,
  `NRC` varchar(50) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `STATUS` varchar(30) NOT NULL,
  `AGE` int(30) NOT NULL,
  `NATIONALITY` varchar(40) NOT NULL,
  `RELIGION` varchar(255) NOT NULL,
  `CONTACT_NO` varchar(40) NOT NULL,
  `HOME_ADD` text NOT NULL,
  `ACC_USERNAME` varchar(255) NOT NULL,
  `ACC_PASSWORD` text NOT NULL,
  `student_status` text NOT NULL,
  `YEARLEVEL` int(11) NOT NULL,
  `STUDSECTION` int(11) NOT NULL,
  `COURSE_ID` int(11) NOT NULL,
  `STUDPHOTO` varchar(255) NOT NULL,
  `STUDNRC` varchar(225) NOT NULL,
  `SEMESTER` varchar(30) NOT NULL,
  `SYEAR` varchar(30) NOT NULL,
  `NewEnrollees` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`S_ID`, `IDNO`, `FNAME`, `SEX`, `BDAY`, `NRC`, `EMAIL`, `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `ACC_USERNAME`, `ACC_PASSWORD`, `student_status`, `YEARLEVEL`, `STUDSECTION`, `COURSE_ID`, `STUDPHOTO`, `STUDNRC`, `SEMESTER`, `SYEAR`, `NewEnrollees`) VALUES
(1, 1000000291, 'Thu Thu Thiha', 'Female', '2005-02-05', '12/TaKaNa(N)280196', 'thuthu2133222@gmail.com', '', 0, '', '', '09777165031', 'ThaMaKawLate street, AMhuHtan Ward, Thanlyin', 'thuthuthiha', 'fa8c6b8ac92c1009d16e7d19b2273733233e4174', 'New', 1, 0, 1, 'avatar-1728419902.jpg', '', 'First', '', 0),
(2, 1000000292, 'Mon Kyi Marn', 'Female', '1994-12-03', '12/BoKaLay(N)456789', 'monkyimern123@gmail.com', '', 0, '', '', '09556783657', '128/1B Shwe Taung Kyar 1, Mandalay', 'monkyimarn', 'dca6adc396bc451b53a9ea1511f8f817fee83a7a', 'New', 6, 0, 6, 'avatar-1728414387.jpg', '', 'First', '', 0),
(3, 1000000293, 'Pyae Thuta', 'Male', '2003-02-05', '14/DGM(N)012567', 'hehehaha@gmail.com', '', 0, '', '', '09584112', 'Shan State', 'pyaethuta', '6be61a0839074c86475abf140ad8b40a39d64a28', 'New', 3, 0, 3, 'avatar-1728414628.jpg', '', 'First', '', 0),
(4, 1000000294, 'Shwe Yee', 'Female', '2001-10-26', '10/MLM(N)271173', 'shweyeewin2610@gmail.com', '', 0, '', '', '09756344113', 'Aung Thu kha road mawlamyine', 'shweyee', '84aa1c8398b79af06b3fb0b8aad3054a17dd3024', 'New', 3, 0, 3, 'avatar-1728414793.jpg', '', 'First', '', 0),
(5, 1000000295, 'Yoon Yati Htut', 'Female', '2004-06-11', '7/DaUNa(N)216849', 'yoonyoonhtut@gmail.com', '', 0, '', '', '09965559689', 'Main Road,Daik-U,Bago', 'yoonyatihtut', 'afa5735c4a439beaaf5969231efe2665554cc0e7', 'New', 3, 0, 3, 'avatar-1728414955.jpg', '', 'First', '', 0),
(6, 1000000296, 'Lamin May Oo', 'Female', '2004-12-18', '12/ALaNa(N)052518', 'laminmayoo18@gmail.com', '', 0, '', '', '09796930449', 'No.11, 30 Ward, SaungHaymarn Housing, North Dagon', 'laminmayoo', '5ab0e4cebb240f1c6edb98148ccbc3a86e93934b', 'New', 1, 0, 1, 'avatar-1728415109.jpg', '', 'First', '', 0),
(7, 1000000297, 'Yin Thu Zar Aung', 'Female', '1999-03-24', '-', 'yinthuzaraung113@gmail.com', '', 0, '', '', '09758240422', '15th Street, 13 Ward, South Okkalapa', 'yinthuzaraung', '7b9c23a096902418d9d8d476e3d08c180a240426', 'New', 5, 0, 5, 'avatar-1728415519.jpg', '', 'First', '', 0),
(8, 1000000298, 'Kyaw Kay Zin Han', 'Female', '2001-08-09', '12/ThaKaTa(N)200419 ', 'kyawkayzinhan@gmail.com', '', 0, '', '', '09754708004', 'Tharkayta ', 'kyawkayzinhan', '239b25770949268f35b573ba3367d3afc505bdd7', 'New', 5, 0, 5, 'avatar-1728415711.jpg', '', 'First', '', 0),
(9, 1000000299, 'Hnin Moe Lwin', 'Female', '2004-09-04', '12/MaGaTa(N)125338', 'hninmoelwin73@gmail.com', '', 0, '', '', '09755620016', '16,123st,Mingalar Taung Nyunt Township, Yangon ', 'hninmoelwin', '445706bd3d0d2421586f323eaa0cb4b6f02b6780', 'New', 1, 0, 1, 'avatar-1728415946.jpg', '', 'First', '', 0),
(10, 1000000300, 'Eaint Chyu Myint Myat Phoo', 'Female', '2005-04-03', '12/DaLaNa(N)083353', 'pphoo0996@gmail.com', '', 0, '', '', '09770582081', 'PyawBwalKyi Village, Dala, Yangon', 'eaintchyumyintmyatphoo', 'e732febcd93dfea8565152e05f687bbccb903976', 'New', 1, 0, 1, 'avatar-1728416136.jpg', '', 'First', '', 0),
(11, 1000000301, 'Cho Cho Lwin', 'Female', '2005-04-25', '7/MaLaNa(N)140133', 'chocholwim21@gmail.com', '', 0, '', '', '09683954888', 'Min Hla ', 'chocholwin', '5a1eb6e735749b6fc32f98624a3eeb19cfe31b08', 'New', 1, 0, 1, 'avatar-1728416300.jpg', '', 'First', '', 0),
(12, 1000000302, 'Kyo Kyo Moe', 'Female', '2004-04-12', '10/PaMaMa(N)258074', 'kyokyomoe54@gmail.com', '', 0, '', '', '09793323995', 'Paung Township,Mon state', 'kyokyomoe', 'e0aea6ccaca45a4bfed1c5cd7697e5531f3fba4c', 'New', 3, 0, 3, 'avatar-1728416468.jpg', '', 'First', '', 0),
(13, 1000000303, 'Thal Nu San', 'Female', '2004-12-27', '12/DaGaTa(N)130489', 'thaesan61@gmail.com', '', 0, '', '', '09263608057', '2/4/16(Ka), Sinphyushin street, South Dagon, Yangon', 'thalnusan', 'ef5756b24c22ddb4bb72aa7e33a9cd58e2f65834', 'New', 1, 0, 1, 'avatar-1728416650.jpg', '', 'First', '', 0),
(14, 1000000304, 'Ngu Wah Hlaing ', 'Female', '2005-01-24', '12/DaLaNa(N)100105', 'nguwahhlaing05@gmail.com', '', 0, '', '', '09943436334', 'Yazathingyan street, Panwar Road, Dala', 'nguwahhlaing', 'ed3e354a7ae67028ac48559b414bfe3a1e73aa5a', 'New', 1, 0, 1, 'avatar-1728416859.jpg', '', 'First', '', 0),
(15, 1000000305, 'Ei May Me Nyein', 'Female', '2005-02-27', '12/DaGaYa(N)039727', 'eimayyangon324@gmail.com', '', 0, '', '', '09457555128', 'Dagon MyoThit, Thonekwa Ward, YwarLel Street', 'eimaymenyein', '1bc56332f5f7357d5e165e7ac6d51e7448a2e6c2', 'New', 1, 0, 1, 'avatar-1728417022.jpg', '', 'First', '', 0),
(16, 1000000306, 'Hsu Nan Dar', 'Female', '2004-06-01', '12/ThaGaKa(N)200807', 'ssu627366@gmail.com', '', 0, '', '', '0943027649', '33, Thirizayyar Street, Zawana, Thingankyun, Yangon', 'hsunandar', '5ecaf2efa98e58f037d9e51987e71359c1e58f20', 'New', 1, 0, 1, 'avatar-1728417181.jpg', '', 'First', '', 0),
(17, 1000000307, 'Yair Moe Aung', 'Male', '2004-08-07', '12/ThaGaKa(N)220612', 'example@gmail.com', '', 0, '', '', '09888559889', 'Chanaye Street, Thingankyun, Yangon', 'yairmoeaung', '57724052647052a220188fe34b32b39db6651822', 'New', 1, 0, 1, 'avatar-1728417377.jpg', '', 'First', '', 0),
(18, 1000000308, 'Tin Nilar Win ', 'Female', '2004-06-09', '12/DGT(N)097575', 'tinnilarwin964@gmail.com', '', 0, '', '', '09985499137', '1004/B,Khatter St,72 Ward, South Dagon,Yangon', 'tinnilarwin', 'a5dbecba195df51a337fc5483430cdb1448ad468', 'New', 3, 0, 3, 'avatar-1728417528.jpg', '', 'First', '', 0),
(19, 1000000309, 'Swe Zin Oo', 'Female', '2001-02-28', '12/ThaLaNa(N)163811', 'swrzinoo939@gmail.com', '', 0, '', '', '09953809280', 'Thanlyin', 'swezinoo', '84a4514393e95012dddde0b22c9fd0f48669a549', 'New', 5, 0, 5, 'avatar-1728417661.jpg', '', 'First', '', 0),
(20, 1000000310, 'Htoo Thiri Khin', 'Female', '2000-02-12', '7/PaMaNa(N)211012', 'htookhin022@gmail.com', '', 0, '', '', '09787040001', 'Bayintnaung Tower, Kamayut, Yangon', 'htoothirikhin', '4a956bc27740f4e0f339ea14df3a407dca1b2f0d', 'New', 5, 0, 5, 'avatar-1728417808.jpg', '', 'First', '', 0),
(21, 1000000311, 'Inkyinn Thaw Thaw', 'Female', '2000-07-30', '12/yapatha(N)103238', 'ikthawthaw30@gmail.com', '', 0, '', '', '09787822672', '355 mahar bandula road, kyuttada, Yangon', 'inkyinnthawthaw', 'c58b94f18b129956476ff3b0b955b794c5ddd74b', 'New', 5, 0, 5, 'avatar-1728417947.jpg', '', 'First', '', 0),
(22, 1000000312, 'Phyo Min Khine', 'Male', '1999-08-26', '11/KaPhaNa(N)117149', 'phyokhine458@gmail.com', '', 0, '', '', '09264614750', 'Sarthinkayung Street, Saytiya, KyaukPhyu', 'phyominkhine', '121f1491e38a8ed7cf313589d8717d98bb153f15', 'New', 5, 0, 5, 'avatar-1728418073.jpg', '', 'First', '', 0),
(23, 1000000313, 'Mya Thinzar Kyaw', 'Female', '1999-10-28', '14/PhaPaNa(N)192586', 'myathinzarkyaw28@gmail.com', '', 0, '', '', '09973873162', 'No(292 )Thida Street,Pyapon', 'myathinzarkyaw', '0545d4b8a5a228bf9f1779b65fcd9f4c6d96db0c', 'New', 5, 0, 5, 'avatar-1728418227.jpg', '', 'First', '', 0),
(24, 1000000314, 'Eaint Chaw ', 'Female', '2000-09-04', '-', 'eaintchaw49@gmail.com', '', 0, '', '', '09796666187', 'Dagon Satekan, Yangon', 'eaintchaw', '211683c74d8d03a64a0e36c9279b7bbd8e015813', 'New', 5, 0, 5, 'avatar-1728418379.jpg', '', 'First', '', 0),
(25, 1000000315, 'Pyae Phone Aung', 'Male', '1999-05-26', '10/BaLaNa(N)166105', 'mnkhntko@gmail.com', '', 0, '', '', '09988687759', 'No.148, Zayarthiri 7th St, Dawbon,Yangon', 'pyaephoneaung', '6bae2c72d950bb49fd80066c2cc19bffd0612cd0', 'New', 5, 0, 5, 'avatar-1728418526.jpg', '', 'First', '', 0),
(26, 1000000316, 'Aung Zin Ko', 'Male', '2001-02-15', '9/MaThaNa(N)176632', 'aungzinko495@gmail.com', '', 0, '', '', '09761012244', 'Myittha,Mandalay Region', 'aungzinko', '22003a12d918d87521ff8e78718cd6e17dee04d7', 'New', 5, 0, 5, 'avatar-1728418647.jpg', '', 'First', '', 0),
(27, 1000000317, 'Hein Htet Zaw ', 'Male', '2001-07-05', 'Tka(n)211417', 'exaid9879@gmail.com', '', 0, '', '', '09750104655', 'Tharkayta ', 'heinhtetzaw', 'b83a6e31d227ff21b11729ddbdff0cf7009ecc95', 'New', 4, 0, 4, 'avatar-1728418825.jpg', '', 'First', '', 0),
(28, 1000000318, 'Su Sandy Aung', 'Female', '2000-09-19', '12/DaGaMa(N)032847', 'susandy210@gmail.com', '', 0, '', '', '09254448527', 'No(1193), Seinchal street, 49 quarter, North Dagon', 'susandyaung', 'f0b099ff8bc68a207ebba28e777ca06a0117dd79', 'New', 5, 0, 5, 'avatar-1728418971.jpg', '', 'First', '', 0),
(29, 1000000319, 'Chit Su Thway ', 'Female', '2000-11-30', '12/Tamana(N)122910', 'suthway38@gmail.com', '', 0, '', '', '09969365786', 'C, Maugone Housing, Yangon ', 'chitsuthway', '65e85084944baf6b2d2a0d9e7269788a49581fff', 'New', 5, 0, 5, 'avatar-1728419106.jpg', '', 'First', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `ACCOUNT_ID` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(255) NOT NULL,
  `ACCOUNT_USERNAME` varchar(255) NOT NULL,
  `ACCOUNT_PASSWORD` text NOT NULL,
  `ACCOUNT_TYPE` varchar(30) NOT NULL,
  `EMPID` int(11) NOT NULL,
  `USERIMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`ACCOUNT_ID`, `ACCOUNT_NAME`, `ACCOUNT_USERNAME`, `ACCOUNT_PASSWORD`, `ACCOUNT_TYPE`, `EMPID`, `USERIMAGE`) VALUES
(1, 'Thiri', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator', 1234, 'photos/LoginRed.jpg'),
(2, 'Nilar', 'norhan', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Registrar', 0, ''),
(3, 'SweZin', 'Rory', '8cb2237d0679ca88db6464eac60da96345513964', 'Administrator', 0, ''),
(4, 'thazin', 'thazin', 'bf3fe7dd871f2cc03ec32c3a09e955b2fc8ad797', 'Registrar', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`COURSE_ID`),
  ADD KEY `DEPT_ID` (`DEPT_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DEPT_ID`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`GRADE_ID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `schoolyr`
--
ALTER TABLE `schoolyr`
  ADD PRIMARY KEY (`SYID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`IDNO`);

--
-- Indexes for table `studentschedule`
--
ALTER TABLE `studentschedule`
  ADD PRIMARY KEY (`CLASS_ID`),
  ADD KEY `IDNO` (`IDNO`),
  ADD KEY `schedID` (`schedID`);

--
-- Indexes for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  ADD PRIMARY KEY (`STUDSUBJ_ID`),
  ADD KEY `IDNO` (`IDNO`),
  ADD KEY `SUBJ_ID` (`SUBJ_ID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SUBJ_ID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`);

--
-- Indexes for table `tblauto`
--
ALTER TABLE `tblauto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `autocode` (`autocode`);

--
-- Indexes for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  ADD PRIMARY KEY (`INST_ID`);

--
-- Indexes for table `tbllogs`
--
ALTER TABLE `tbllogs`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`PAYMENTID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblschedule`
--
ALTER TABLE `tblschedule`
  ADD PRIMARY KEY (`schedID`),
  ADD KEY `COURSE_ID` (`COURSE_ID`),
  ADD KEY `SUBJ_ID` (`SUBJ_ID`);

--
-- Indexes for table `tblsemester`
--
ALTER TABLE `tblsemester`
  ADD PRIMARY KEY (`SEMID`);

--
-- Indexes for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  ADD PRIMARY KEY (`DETAIL_ID`),
  ADD KEY `IDNO` (`IDNO`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`S_ID`),
  ADD UNIQUE KEY `IDNO` (`IDNO`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`ACCOUNT_ID`),
  ADD UNIQUE KEY `ACCOUNT_USERNAME` (`ACCOUNT_USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `COURSE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `DEPT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `GRADE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `schoolyr`
--
ALTER TABLE `schoolyr`
  MODIFY `SYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `IDNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `studentschedule`
--
ALTER TABLE `studentschedule`
  MODIFY `CLASS_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentsubjects`
--
ALTER TABLE `studentsubjects`
  MODIFY `STUDSUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SUBJ_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblauto`
--
ALTER TABLE `tblauto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblinstructor`
--
ALTER TABLE `tblinstructor`
  MODIFY `INST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbllogs`
--
ALTER TABLE `tbllogs`
  MODIFY `LOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `PAYMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblschedule`
--
ALTER TABLE `tblschedule`
  MODIFY `schedID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsemester`
--
ALTER TABLE `tblsemester`
  MODIFY `SEMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstuddetails`
--
ALTER TABLE `tblstuddetails`
  MODIFY `DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `ACCOUNT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
