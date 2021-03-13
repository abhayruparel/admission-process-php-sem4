-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 08:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ap`
--

-- --------------------------------------------------------

--
-- Table structure for table `counselor_master`
--

CREATE TABLE `counselor_master` (
  `counselor_id` int(11) NOT NULL,
  `counselor_fanme` varchar(50) NOT NULL,
  `counselor_lname` varchar(50) NOT NULL,
  `counselor_mail` varchar(100) NOT NULL,
  `counselor_number` varchar(15) NOT NULL,
  `counselor_pass` varchar(50) NOT NULL,
  `counselor_photo` varchar(500) NOT NULL,
  `login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselor_master`
--

INSERT INTO `counselor_master` (`counselor_id`, `counselor_fanme`, `counselor_lname`, `counselor_mail`, `counselor_number`, `counselor_pass`, `counselor_photo`, `login`) VALUES
(1, 'amisha', 'patel', 'amisha@gmail.com', '1234567890', '12345678', 'photo.png', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counselor_master`
--
ALTER TABLE `counselor_master`
  ADD PRIMARY KEY (`counselor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counselor_master`
--
ALTER TABLE `counselor_master`
  MODIFY `counselor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
