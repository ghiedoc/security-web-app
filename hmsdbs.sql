-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2020 at 09:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

CREATE TABLE `admindb` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`username`, `password`) VALUES
('admin', 'pass'),
('admin@email.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_Id` int(100) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Appointment_Date` varchar(50) NOT NULL,
  `Appointment_Time` varchar(50) NOT NULL,
  `Appointment_Service` varchar(50) NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `patient_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_Id`, `Fname`, `Lname`, `Email`, `Mobile`, `Appointment_Date`, `Appointment_Time`, `Appointment_Service`, `Payment`, `patient_fk`) VALUES
(1, 'Liza', 'Soberano', 'liza@email.com', '09128178593', '03/26/2020', '9am to 10am', 'Check Up - For Braces', '', 1),
(2, 'Gillian Joanna', 'Doctor', 'gillian@email.com', '09129918256', '03/27/2020', '10am to 11ampm', 'Check Up - For Braces', 'pay later', 1),
(3, 'Gillian Joanna', 'Doctor', 'ghiedoc@gmail.com', '09128178593', '03/28/2020', '3pm to 4pm', 'Dental Cleaning', '', 1),
(4, 'Gigi', 'Hadid', 'gigi@email.com', '09191919191', '03/31/2020', '10am to 11ampm', 'Tooth Filling', 'paid', 1),
(6, 'Zach', 'Betos', 'jamesbet23@gmail.com', '09979118200', '04/06/2020', '9am to 10am', 'Check Up - General', '', 1),
(7, 'Zach', 'soteb', 'jamesbet23@gmail.com', '09979118200', '04/06/2020', '9am to 10am', 'Dental Cleaning', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `medicalhistorytb`
--

CREATE TABLE `medicalhistorytb` (
  `mh_id` int(100) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `Blood_Pressure` varchar(100) NOT NULL,
  `Weight` varchar(200) NOT NULL,
  `Temperature` varchar(200) NOT NULL,
  `Medical_History` mediumtext NOT NULL,
  `Creation_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patienttb`
--

CREATE TABLE `patienttb` (
  `patient_id` int(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patienttb`
--

INSERT INTO `patienttb` (`patient_id`, `role`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'user', 'Gillian Joanna', 'Doctor', 'ghiedoc@gmail.com', 'pass123'),
(2, 'admin', 'Admin', 'Test', 'admin@email.com', 'admin'),
(3, 'user', 'Amy', 'Ordman', 'amy@email.com', 'ordman'),
(4, '', 'Ivana', 'Alawi', 'ivana@email.com', 'alawi'),
(5, '', 'Rebecca', 'Black', 'rebecca@email.com', 'rebecca'),
(6, '', 'vcbcb', 'cvbcvb', 'cvbcvb@gmail.com', 'cvbcv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_Id`),
  ADD KEY `patient_fk` (`patient_fk`);

--
-- Indexes for table `medicalhistorytb`
--
ALTER TABLE `medicalhistorytb`
  ADD PRIMARY KEY (`mh_id`);

--
-- Indexes for table `patienttb`
--
ALTER TABLE `patienttb`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `medicalhistorytb`
--
ALTER TABLE `medicalhistorytb`
  MODIFY `mh_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patienttb`
--
ALTER TABLE `patienttb`
  MODIFY `patient_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_fk`) REFERENCES `patienttb` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
