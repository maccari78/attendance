-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 01:56 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendee`
--

CREATE TABLE `attendee` (
  `attendee_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dateofbirth` date NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `contactnumber` varchar(20) NOT NULL,
  `specialty_id` int(11) NOT NULL,
  `avatar_path` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendee`
--

INSERT INTO `attendee` (`attendee_id`, `firstname`, `lastname`, `dateofbirth`, `emailaddress`, `contactnumber`, `specialty_id`, `avatar_path`) VALUES
(1, 'Mary', 'Poppins', '2019-05-09', 'mpopp@gmail.com', '+44 7 8962-52147', 1, NULL),
(2, 'Tom', 'Hopkins', '2019-09-13', 'thop@gmail.com', '+44 7 3214-56987', 3, NULL),
(3, 'Danilo', 'Maccari', '1978-07-12', 'maccari78@gmail.com', '+54 9 291 444-4264', 2, 'uploads/+54 9 291 444-4264.'),
(4, 'Agnis', 'Walters', '2019-06-09', 'awalters@gmail.com', '+54 9 291 444-3567', 3, NULL),
(5, 'Jhon', 'Constantine', '1980-07-05', 'jconstantine@gmail.com', '+54 9 291 444-4624', 3, NULL),
(6, 'Thomas A.', 'Anderson', '1970-04-05', 'tanderson@gmail.com', '+1 9 408 333-2435', 2, NULL),
(7, 'Elliot', 'Alderson', '1986-07-03', 'eanderson@gmail.com', '+1 9 408 333-5874', 2, NULL),
(8, 'Archibald', 'Thomas', '1970-03-09', 'athomas@gmail.com', '+54 9 11 325-8273', 4, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendee`
--
ALTER TABLE `attendee`
  ADD PRIMARY KEY (`attendee_id`),
  ADD KEY `fk_attendee_specialties` (`specialty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendee`
--
ALTER TABLE `attendee`
  MODIFY `attendee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendee`
--
ALTER TABLE `attendee`
  ADD CONSTRAINT `fk_attendee_specialties` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`specialty_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
