-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 08:02 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allticketbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_access`
--

CREATE TABLE `admin_access` (
  `id` int(100) NOT NULL,
  `id_number` int(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_access`
--

INSERT INTO `admin_access` (`id`, `id_number`, `password`) VALUES
(1, 171352078, '171352078');

-- --------------------------------------------------------

--
-- Table structure for table `busticketbook`
--

CREATE TABLE `busticketbook` (
  `id` int(200) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pickup` varchar(100) NOT NULL,
  `Dropping` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busticketbook`
--

INSERT INTO `busticketbook` (`id`, `First_Name`, `Last_Name`, `Mobile_Number`, `Email`, `Pickup`, `Dropping`, `Time`, `Date`) VALUES
(12, 'Shamim', 'Ahmed', '+8801850628259', 'thunderbird.store12@gmail.com', 'Chattagram', 'Malyasia', '10:30am', '0000-00-00'),
(13, 'Shamim', 'Rahman', '+8801850628259', 'thunderbird.store12@gmail.com', 'Chattagram', 'khulna', '11am', '2019-07-10'),
(14, 'Reajur', 'Rahaman', '+8801850628259', 'pranto@bd', 'Feni', 'Chattagram', '10:30am', '2019-07-18'),
(15, 'Ruyhan', 'Rahman', '+8801850628259', 'rahamanrumman@gmail.com', 'Rajshahi', 'Chattagram', '10am', '2019-07-09'),
(16, 'Ruyhan', 'Rahman', '+8801850628259', 'rumman@bd', 'Dhaka', 'Rajshahi', '10:30am', '2019-08-14'),
(17, 'Shamim', 'Rahman', '+8801850628259', 'pranto@bd', 'Dhaka', 'Feni', '10:30am', '2019-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `launchticketbook`
--

CREATE TABLE `launchticketbook` (
  `id` int(200) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pickup` varchar(100) NOT NULL,
  `Dropping` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launchticketbook`
--

INSERT INTO `launchticketbook` (`id`, `First_Name`, `Last_Name`, `Mobile_Number`, `Email`, `Pickup`, `Dropping`, `Time`, `Date`) VALUES
(2, 'Ruyhan', 'Rahman', '+8801850628259', 'rumman.bd', 'Sadarghat-Dhaka', 'Bangla-Bazar', '1:30am', '2019-07-24'),
(3, 'Ruyhan', 'Rahman', '+8801850628259', 'rumman.bd', 'Sadarghat-Dhaka', 'Chandpur', '11:30am', '2019-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `movieticketbook`
--

CREATE TABLE `movieticketbook` (
  `id` int(200) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Movie_Name` varchar(100) NOT NULL,
  `Theater` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieticketbook`
--

INSERT INTO `movieticketbook` (`id`, `First_Name`, `Last_Name`, `Mobile_Number`, `Email`, `Movie_Name`, `Theater`, `Time`, `Date`) VALUES
(5, 'Shamim', 'Ahmed', '456', 'thunderbird.store12@gmail.com', 'IT-Chapter2', 'shymoli-square', '12pmTO2:00pm', '2019-08-14'),
(6, 'Rumman', 'Rahman', '+8801850628259', 'rahamanrumman@gmail.com', 'Avengers-End', 'Sony-theatre', '12pmTO2:00pm', '2019-08-26');

-- --------------------------------------------------------

--
-- Table structure for table `planeticketbook`
--

CREATE TABLE `planeticketbook` (
  `id` int(200) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pickup` varchar(100) NOT NULL,
  `Dropping` varchar(100) NOT NULL,
  `Time` varchar(100) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `age`, `email`, `password`) VALUES
(1, 'rumman', '12', 'thunderbird.store12@gmail.com', '45678'),
(2, 'pranto', '21', 'pranto@bd', '123456'),
(3, 'Shamim', '30', 'shamim@bd', '09876'),
(4, 'rumman', '21', 'pranto@bd', '123456'),
(5, 'rumman', '21', 'pranto@bd', '123456'),
(6, 'vbhjk', '30', 'shamim@bd', '123456'),
(7, 'vbhjk', '30', 'shamim@bd', '123456'),
(8, 'Ruyhan', '23', 'raihan@bd', '123456'),
(9, 'noman', '25', 'noman@bd', '124bd1296bec0d9d93c7b52a71ad8d5b'),
(10, 'shamim ahmed', '23', 'shamim@bd', 'c67cf8ff12d52339dfbece49c4795baa'),
(11, 'Shamim', '21', 'shamim@bd', 'd93591bdf7860e1e4ee2fca799911215'),
(12, 'rumman', '21', 'pranto@bd', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'gdfsd', '30', 'rahamanrumman@gmail.com', 'c67cf8ff12d52339dfbece49c4795baa'),
(14, 'gdfsd', '23', 'rahamanrumman@gmail.com', 'c67cf8ff12d52339dfbece49c4795baa'),
(15, 'ovi', '21', 'ovi@bd', 'e10adc3949ba59abbe56e057f20f883e'),
(16, 'A', '11', 'pranto@bd', 'c20ad4d76fe97759aa27a0c99bff6710'),
(17, 'a', '1', 'rahamanrumman@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(18, 'amit', '23', 'amit@bd', 'e10adc3949ba59abbe56e057f20f883e'),
(19, 'avi', '23', 'shamim@bd', 'e10adc3949ba59abbe56e057f20f883e'),
(20, 'rumman', '24', 'rahamanrumman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `trainticketbook`
--

CREATE TABLE `trainticketbook` (
  `id` int(200) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Mobile_Number` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pickup` varchar(100) NOT NULL,
  `Dropping` varchar(100) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_access`
--
ALTER TABLE `admin_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `busticketbook`
--
ALTER TABLE `busticketbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `launchticketbook`
--
ALTER TABLE `launchticketbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movieticketbook`
--
ALTER TABLE `movieticketbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planeticketbook`
--
ALTER TABLE `planeticketbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainticketbook`
--
ALTER TABLE `trainticketbook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_access`
--
ALTER TABLE `admin_access`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `busticketbook`
--
ALTER TABLE `busticketbook`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `launchticketbook`
--
ALTER TABLE `launchticketbook`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movieticketbook`
--
ALTER TABLE `movieticketbook`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `planeticketbook`
--
ALTER TABLE `planeticketbook`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trainticketbook`
--
ALTER TABLE `trainticketbook`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
