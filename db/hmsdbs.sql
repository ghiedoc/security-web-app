-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 12:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `patient_fk` int(11) NOT NULL,
  `stats` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_Id`, `Fname`, `Lname`, `Email`, `Mobile`, `Appointment_Date`, `Appointment_Time`, `Appointment_Service`, `Payment`, `patient_fk`, `stats`) VALUES
(7, 'Zach', 'soteb', 'jamesbet23@gmail.com', '09979118200', '04/06/2020', '9am to 10am', 'Dental Cleaning', '', 3, 'APPROVED'),
(8, '', '', '', '', '', '9am to 10am', 'Check Up - General', '', 7, ''),
(11, 'Zach', 'Betos', '', '09128178593', '09/06/2020', '9am to 10am', 'Check Up - General', '', 9, ''),
(12, 'James Zacharei', 'Betos', '', '09128178593', '09/06/2020', '9am to 10am', 'Check Up - General', '', 9, ''),
(13, 'James Zacharei', 'Betos', '', '09128178593', '09/06/2020', '9am to 10am', 'Check Up - General', '', 9, 'PENDING'),
(14, 'James Zacharei', 'Betos', '', '09128178593', '09/06/2020', '9am to 10am', 'Check Up - General', '', 9, ''),
(15, 'Betos', 'James', '', '09128178593', '09/06/2020', '9am to 10am', 'Check Up - General', '', 9, 'PENDING'),
(16, 'James Zacharei', 'Betos', '', '12345678901', '09/06/2020', '9am to 10am', 'Check Up - General', '', 9, 'PENDING'),
(27, 'James Zacharei', 'Betos', '', '09128178593', '09/07/2020', '9am to 10am', 'Check Up - General', '', 9, 'PENDING');

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
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `adds` varchar(55) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patienttb`
--

INSERT INTO `patienttb` (`patient_id`, `role`, `fname`, `lname`, `gender`, `email`, `adds`, `password`) VALUES
(2, 'admin', 'Admin', 'Test', '', 'admin@email.com', 'Manila', 'admin'),
(3, 'user', 'Amy', 'Ordman', '', 'amy@email.com', 'QC', 'ordman'),
(4, '', 'Mona', 'Alawi', '', 'ivana@email.com', 'Manila', 'alawi'),
(5, '', 'Rebecca', 'Black', '', 'rebecca@email.com', 'Manila', 'rebecca'),
(6, '', 'vcbcb', 'cvbcvb', '', 'cvbcvb@gmail.com', 'qc lang', 'cvbcv'),
(7, '', 'Lagan', 'Joshua', '', 'joshualagan099@gmail.com', 'QC', 'Chupols09'),
(8, '', 'Boomy', 'Lagan', 'Male', 'joshualagan099@gmail.com', 'Manila', '123'),
(9, '', 'Thor', 'Odinson', 'Male', 'Thor@email.com', 'Asgard', '123'),
(10, '', 'Joshua', 'Lagan', 'Male', 'joshualagan099@gmail.com', 'Manila', ',.,.,'),
(11, '', 'Joshua', 'Lagan', 'Male', 'joshualagan099@gmail.com', 'Manila', 'asdasd'),
(12, '', 'Joshua', 'Lagan', 'Male', 'joshualagan099@gmail.com', 'Manila', 'vbhghg'),
(13, '', 'asdas', 'asdasd', 'Male', 'joshualagan099@gmail.com', 'asdasdas', 'asdsa'),
(14, '', 'Joshua', 'Lagan', 'Male', 'joshualagan099@gmail.com', 'Manila', 'asdsa'),
(15, '', 'asdas', 'adasd', 'Male', 'ghiedoc@gmail.com', 'asdasdas', 'asdas'),
(16, '', 'zach', 'betos', 'MALE', 'zachbetos23@gmail.com', 'QC', 'pscyhe'),
(17, '', 'James', 'Betos', 'Male', 'zach@gmail.com', 'QC', 'Sykesykesyke23');

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
  MODIFY `Appointment_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `medicalhistorytb`
--
ALTER TABLE `medicalhistorytb`
  MODIFY `mh_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patienttb`
--
ALTER TABLE `patienttb`
  MODIFY `patient_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
