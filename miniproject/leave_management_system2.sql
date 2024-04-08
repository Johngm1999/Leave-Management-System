-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 07:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management_system2`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department`, `total`) VALUES
(1, 'Information science', 0),
(2, 'computer science', 0),
(3, 'E&C', 0),
(4, 'Civil', 0),
(5, 'Mechanical', 0),
(6, 'MCA', 0),
(7, 'BCA', 0),
(13, 'msw', 0),
(14, 'msw', 0),
(15, 'msw', 0),
(16, 'msw', 15);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `birthday` date NOT NULL,
  `role` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `designation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `mobile`, `password`, `department_id`, `address`, `birthday`, `role`, `image`, `designation`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234567890', '123', 0, 'Ernakulam', '0000-00-00', 4, 'pesce.png', ''),
(3, 'Principal', 'principal@gmail.com', '7560991849', '123', 0, 'Ernakulam', '2001-01-19', 5, '1.png', 'Principal'),
(73, '	divya pb', 'diivya@gmail.com', '9087512547', 'divya', 6, 'aluva', '2022-12-25', 3, 'hod.jpg', 'hod'),
(74, 'Anandhu Vijayan', 'anandhuvijayan001@gmail.com', '9061012615', '1234', 6, 'aluva', '2022-12-26', 2, 'assistant-professor.png', 'assistant professor'),
(75, 'sherna mohan', 'sherna@gmail.com', '9876543245', 'sherna', 1, 'uc', '2022-12-28', 3, 'hod.jpg', 'hod'),
(76, 'bindhu', 'bindhu@gmail.com', '3465758571', 'bindhu', 1, 'germany', '2022-12-07', 2, 'assistant-professor.png', 'assistant professor'),
(77, 'steve', 'steave@gmail.com', '9061012615', 'steave', 6, 'germany', '2022-12-28', 6, 'pesce.png', 'lab assistant'),
(78, 'ravi', 'anandhuvijayan001@gmail.com', '3456789032', 'ravi', 1, 'uc', '2022-12-28', 6, 'pesce.png', 'clerk'),
(80, 'Anandhu Vijayan', 'anandhuvijayan001@gmail.com', '9061012615', '1234', 6, 'aluva', '1999-02-10', 2, 'assistant-professor.png', 'assistant professor'),
(81, 'Anandhu Vijayan', 'anandhuvijayan001@gmail.com', '1234567890', '123', 6, 'germany', '2023-01-07', 6, '', 'clerk'),
(83, 'jose', 'vijayanaswathy97@gmail.com', '9087512547', 'jose', 1, 'kochi', '2022-12-16', 6, 'pesce.png', 'clerk'),
(84, 'erics', 'anandhuvijayan001@gmail.com', '698745715', 'erics', 1, 'kochi', '2022-12-28', 2, '', 'assistant professor'),
(85, '	john george', 'johngm1999@gmail.com', '9061012615', '123', 6, 'dvgrev', '2023-01-26', 3, 'Ananthu Vijayan.jpg', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `hod_leave`
--

CREATE TABLE `hod_leave` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `leave_id` int(11) NOT NULL,
  `leave_from` date NOT NULL,
  `leave_to` date NOT NULL,
  `leave_description` varchar(20) NOT NULL,
  `leave_status` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `alternate` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `leave_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod_leave`
--

INSERT INTO `hod_leave` (`id`, `employee_id`, `leave_id`, `leave_from`, `leave_to`, `leave_description`, `leave_status`, `role`, `department_id`, `employee_name`, `alternate`, `email`, `leave_no`) VALUES
(17, 71, 4, '2022-12-25', '2022-12-30', 'Hospital Case', 2, 3, 7, 'Jacob Yohannan', 'James', 'jacobyohannan191@gmail.com', 0),
(18, 73, 3, '2022-12-26', '2022-12-28', 'aaa', 3, 3, 2, '	divya pb', 'aaaaa', 'diivya@gmail.com', 0),
(20, 73, 4, '2022-12-26', '2022-12-26', 'aaaaaaaaaaaa', 1, 3, 2, '	divya pb', 'aaaaaaaaaaaaaaaa\r\n', 'diivya@gmail.com', 0),
(21, 73, 3, '2022-12-08', '2022-12-09', 'hospital', 1, 3, 2, '	divya pb', 'jhgfusdgh', 'diivya@gmail.com', 0),
(22, 73, 4, '2023-01-19', '2023-01-23', 'dfrtyu', 1, 3, 6, '	divya pb', 'dfsfgrthyjukli;o\'', 'diivya@gmail.com', 0),
(23, 71, 3, '2023-01-21', '2023-01-26', 'hospital', 1, 3, 7, 'Jacob Yohannan', '', 'johngm1999@gmail.com', 0),
(24, 85, 4, '2023-01-27', '2023-01-30', 'hospital', 1, 3, 6, '	john george', '', 'johngm1999@gmail.com', 0),
(25, 85, 4, '2023-01-28', '2023-01-26', 'hospital', 1, 3, 6, '	john george', '', 'johngm1999@gmail.com', 0),
(26, 74, 3, '2023-02-01', '2023-02-24', 'rdscdeg', 3, 2, 6, 'Anandhu Vijayan', '5trjn5trbf', 'anandhuvijayan001@gmail.com', 0),
(27, 74, 4, '2023-02-01', '2023-03-03', 'se', 3, 2, 6, 'Anandhu Vijayan', 'asdfghj', 'anandhuvijayan001@gmail.com', 0),
(28, 77, 3, '2023-02-11', '2023-02-25', 'hospital', 1, 6, 6, 'steve', 'aaaaaaaaaaaaaaaaaaa', 'steave@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(11) NOT NULL,
  `leave_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `leave_type`) VALUES
(2, 'Casual'),
(3, 'Earned'),
(4, 'Sick');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `feedback` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `name`, `email`, `image`, `feedback`, `department_id`) VALUES
(34, 'Principal', 'principal@gmail.com', '1.png', 'excellent', 0),
(35, 'Jacob Yohannan', 'jacobyohannan191@gmail.com', 'hod.jpg', 'average', 7),
(36, 'John George', 'jacobyohannan50@gmail.com', 'assistant-professor.png', 'bad', 7),
(37, 'Principal', 'principal@gmail.com', '1.png', 'good', 0),
(38, 'Principal', 'principal@gmail.com', '1.png', 'bad', 0),
(39, 'jose', 'jose@gmail.com', 'pesce.png', 'excellent', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod_leave`
--
ALTER TABLE `hod_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `hod_leave`
--
ALTER TABLE `hod_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
