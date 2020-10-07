-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 11:49 PM
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
  `admin_id` int(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`admin_id`, `username`, `password`) VALUES
(1, 'admin@email.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `patient_fk` int(11) NOT NULL,
  `Appointment_Id` int(100) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(11) NOT NULL,
  `Appointment_Date` varchar(50) NOT NULL,
  `Appointment_Time` varchar(50) NOT NULL,
  `Appointment_Service` varchar(50) NOT NULL,
  `stats` varchar(10) NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `Payment_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`patient_fk`, `Appointment_Id`, `Fname`, `Lname`, `Email`, `Mobile`, `Appointment_Date`, `Appointment_Time`, `Appointment_Service`, `stats`, `Payment`, `Payment_Date`) VALUES
(3, 7, 'Zach', 'soteb', 'jamesbet23@gmail.com', '09979118200', '04/06/2020', '9am to 10am', 'Dental Cleaning', 'APPROVED', 'PAID', '0000-00-00 00:00:00'),
(9, 13, 'James Zacharei', 'Betos', 'hello@email.com', '09128178593', '09/06/2020', '9am to 10am', 'Check Up - General', 'APPROVED', 'PAID', '0000-00-00 00:00:00'),
(9, 27, 'James Zacharei', 'Betos', '', '09128178593', '09/07/2020', '9am to 10am', 'Check Up - General', 'APPROVED', 'PAID', '2020-10-02 21:41:06'),
(3, 28, 'Amy', 'Ordman', '', '09891162712', '09/08/2020', '9am to 10am', 'Check Up - For Braces', 'PENDING', 'PAID', '0000-00-00 00:00:00'),
(3, 30, 'Kelsey', 'Merit', '', '09191919191', '09/12/2020', '9am to 10am', 'Check Up - General', 'APPROVED', 'PAID', '2020-10-02 21:48:44'),
(3, 31, 'Camila', 'Cabello', '', '09088861221', '09/14/2020', '2pm to 3pm', 'Check Up - For Braces', 'APPROVED', 'PAID', '2020-10-02 21:44:55'),
(3, 32, 'Dahyun', 'Minatozaki', '', '09991728171', '09/13/2020', '9am to 10am', 'Check Up - General', 'APPROVED', 'PAY LATER', '2020-10-02 09:18:06');

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

--
-- Dumping data for table `medicalhistorytb`
--

INSERT INTO `medicalhistorytb` (`mh_id`, `patient_id`, `Blood_Pressure`, `Weight`, `Temperature`, `Medical_History`, `Creation_Date`) VALUES
(1, 17, '120/90', '45', '39', 'Fever, Toothache', '2020-09-06 12:44:32'),
(2, 18, '120/80', '60', '36.5', 'Check Up - For Braces', '2020-10-02 21:14:27');

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
  `password` varchar(40) NOT NULL,
  `regiDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patienttb`
--

INSERT INTO `patienttb` (`patient_id`, `role`, `fname`, `lname`, `gender`, `email`, `adds`, `password`, `regiDate`) VALUES
(3, 'user', 'Amy', 'Ordman', '', 'amy@email.com', 'Qezon', 'ordman', '2020-09-06 17:13:22'),
(4, '', 'Mona', 'Alawi', 'Female', 'ivana@email.com', 'Manila', 'alawi', '2020-09-06 10:47:24'),
(5, '', 'Rebecca', 'Black', 'Female', 'rebecca@email.com', 'Manila', 'rebecca', '2020-09-06 10:47:32'),
(9, '', 'Thor', 'Odinson', 'Male', 'Thor@email.com', 'Asgard', '$2y$10$xgp/DgBxD9IxxvbWOT4mSOKNQuiwMdgdU', '2020-09-20 14:22:32'),
(14, '', 'Joshua', 'Lagan', 'Male', 'joshualagan099@gmail.com', 'Manila', 'asdsa', '2020-09-06 10:44:31'),
(16, '', 'zach', 'betos', 'MALE', 'zachbetos23@gmail.com', 'QC', 'pscyhe', '2020-09-06 10:44:31'),
(17, '', 'James', 'Betos', 'Male', 'zach@gmail.com', 'QC', 'Sykesykesyke23', '2020-09-06 10:44:31'),
(18, '', 'Mina', 'Myoui', 'Female', 'mina@twice.com', 'Kyoto Japan', 'Minariii123', '2020-09-06 17:10:16'),
(19, '', 'John', 'Doe', 'Male', 'john#doe@email.com', '776 California', 'Mamisaranghae@123', '2020-09-12 11:42:17'),
(20, '', 'John', 'Llaneta', 'Male', 'johnllaneta05@gmail.com', 'tondo', '$2y$10$2sFwKNe/qquOi5zJu8ZgHukF6fmafhskx', '2020-09-20 17:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `Payment_Id` int(11) NOT NULL,
  `Appointment_Id` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Appointment_Service` varchar(50) NOT NULL,
  `Payment_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Payment_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`Payment_Id`, `Appointment_Id`, `Fname`, `Lname`, `Date`, `Time`, `Appointment_Service`, `Payment_Date`, `Payment_Status`) VALUES
(8, 31, 'Camila', 'Cabello', '09/14/2020', '2pm to 3pm', 'Check Up - For Braces', '2020-10-02 21:45:26', 'PAID'),
(9, 31, 'Camila', 'Cabello', '09/14/2020', '2pm to 3pm', 'Check Up - For Braces', '2020-10-02 21:45:26', 'PAID'),
(10, 30, 'Kelsey', 'Merit', '09/12/2020', '9am to 10am', 'Check Up - General', '2020-10-02 21:48:53', 'PAID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD PRIMARY KEY (`Payment_Id`),
  ADD KEY `Appointment_Id` (`Appointment_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `medicalhistorytb`
--
ALTER TABLE `medicalhistorytb`
  MODIFY `mh_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patienttb`
--
ALTER TABLE `patienttb`
  MODIFY `patient_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `paymenttable`
--
ALTER TABLE `paymenttable`
  MODIFY `Payment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_fk`) REFERENCES `patienttb` (`patient_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `paymenttable`
--
ALTER TABLE `paymenttable`
  ADD CONSTRAINT `paymenttable_ibfk_1` FOREIGN KEY (`Appointment_Id`) REFERENCES `appointment` (`Appointment_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
