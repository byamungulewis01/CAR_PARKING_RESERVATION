-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 06:51 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `datacenter`
--

CREATE TABLE `datacenter` (
  `id` int(11) NOT NULL,
  `Driver` int(11) NOT NULL,
  `Car_Plate` varchar(40) NOT NULL,
  `Car` varchar(40) NOT NULL,
  `Parking` int(11) NOT NULL,
  `p_owner` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datacenter`
--

INSERT INTO `datacenter` (`id`, `Driver`, `Car_Plate`, `Car`, `Parking`, `p_owner`, `Time`, `status`) VALUES
(1, 1, '123344', 'BMW', 7, 1, '2022-05-19 01:44:26', 1),
(2, 1, '001100', 'BMW', 3, 2, '2022-05-19 00:19:57', 0),
(3, 2, 'RAE890', 'RAMBog', 7, 0, '2022-05-18 23:16:59', 1),
(4, 2, 'REA112', 'Ritco', 2, 0, '2022-05-18 23:16:59', 1),
(5, 2, 'A567U', 'RAVA4', 11, 3, '2022-05-20 05:32:38', 0),
(6, 2, 'RAE890', 'BMW', 11, 1, '2022-05-18 23:16:59', 1),
(7, 4, 'AA32', 'RAVA4', 3, 3, '2022-05-20 05:32:34', 0),
(8, 1, 'AA32', 'RAVA4', 7, 1, '2022-05-19 01:42:06', 1),
(9, 4, 'rad280', 'randcrusor', 9, 3, '2022-05-20 05:34:14', 1),
(10, 5, 'AA12', 'V8', 3, 1, '2022-05-18 23:40:22', 1),
(11, 5, 'AA12', 'Ritco', 3, 3, '2022-05-21 21:13:02', 1),
(12, 1, 'A567U', 'BMW', 11, 1, '2022-05-19 02:24:22', 1),
(13, 1, 'AA122', 'BMW', 3, 1, '2022-05-21 21:21:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `Fname`, `Lname`, `Email`, `password`) VALUES
(1, 'BYAMUNGU', 'Bmg Lewis', 'bmg@gmail.com', '123'),
(2, 'NKURANGA', 'Alphonse', 'Alphonse@gmail.com', '1234'),
(4, 'eric', 'mugabo', 'eric@gmail.com', '1234'),
(5, 'Ishimwe', 'Gloria', 'gloria@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `parkings`
--

CREATE TABLE `parkings` (
  `id` int(11) NOT NULL,
  `P_name` varchar(30) NOT NULL,
  `P_Location` varchar(20) NOT NULL,
  `P_Size` varchar(11) NOT NULL,
  `P_owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parkings`
--

INSERT INTO `parkings` (`id`, `P_name`, `P_Location`, `P_Size`, `P_owner`) VALUES
(2, 'CITY Tower', 'Kigali', '0', 1),
(3, 'BUSOGO Parking', 'MUHANGA', '15', 1),
(4, 'CITY Tower', 'Kinyinya', '20', 3),
(5, 'TCT Parking', 'RULINDO', '221', 3),
(9, 'Gikondo Parking', 'Kigali', '2', 3),
(10, 'TTNOD Parking', 'Gisenyi', '21', 3),
(11, 'BWIZA', 'Kigali/rwnda', '4', 1),
(12, 'TTNOD Parking', 'Kigali/rwnda', '5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `parking_owner`
--

CREATE TABLE `parking_owner` (
  `id` int(11) NOT NULL,
  `Fname` varchar(40) NOT NULL,
  `Lname` varchar(40) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parking_owner`
--

INSERT INTO `parking_owner` (`id`, `Fname`, `Lname`, `Email`, `password`) VALUES
(1, 'BYAMUNGU', 'Bmg Lewis', 'bmg@gmail.com', '123'),
(2, 'NKURANGA', 'Alphonse', 'Alphonse@gmail.com', '1234'),
(3, 'NIYONASENZE', 'Aliane', 'Ally@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datacenter`
--
ALTER TABLE `datacenter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parkings`
--
ALTER TABLE `parkings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_owner`
--
ALTER TABLE `parking_owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datacenter`
--
ALTER TABLE `datacenter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `parkings`
--
ALTER TABLE `parkings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parking_owner`
--
ALTER TABLE `parking_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
