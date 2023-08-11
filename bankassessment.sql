-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 09:31 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankassessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `role_id` int(100) NOT NULL DEFAULT 2,
  `adharno` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `accounttype` varchar(255) NOT NULL,
  `openingbal` int(110) NOT NULL,
  `accountno` varchar(255) NOT NULL,
  `create at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `dob`, `phone`, `gender`, `role_id`, `adharno`, `address`, `profile_pic`, `accounttype`, `openingbal`, `accountno`, `create at`, `update at`) VALUES
(1, 'admin', 'admin', '123', 'admin@gmail.com', '1994-08-01', '9724668513', 'Male', 1, '0', 'thaltej 380054', '', '', 0, '0', '2023-08-09 07:05:16', '2023-08-09 07:05:16'),
(2, 'shailesh prajapati', 'shailesh', '123', 'Shaiileshshailesh966@yahoo.com', '2000-01-01', '9724668513', 'Male', 2, '214748364711', 'thaltej 380054', '6.jpeg', 'saving', 5200, '1234567891234567', '2023-08-09 07:26:32', '2023-08-09 07:26:32'),
(3, 'bhuvan', 'bhuvan', '123', 'bhuvan@gmail.com', '2003-01-01', '8854896354', 'Male', 2, '123445671234', 'gota', '6.jpeg', 'current', 5000, '1234567891234568', '2023-08-09 07:52:35', '2023-08-09 07:52:35'),
(4, 'ranjeet', 'ranjit', '123', 'sh@gmail.com', '1987-09-23', '9460015102', 'Male', 2, '123478951245', 'thaltej 380054', 'bird.jpeg', 'current', 5000, '1234567891234569', '2023-08-09 07:56:16', '2023-08-09 07:56:16'),
(8, 'ranjitsingh', 'ranjit', '123', 'ranjit@gmail.com', '2000-01-01', '972586413', 'Male', 2, '123478951245', 'thaltej 380052', '8.jpeg', 'saving', 4000, '1234567891234566', '2023-08-10 06:12:05', '2023-08-10 06:12:05'),
(9, 'Ranjeet singh', 'Ranjeet', '123', 'cgjgcjg@gmail.com', '0000-00-00', '946001510236', 'Male', 1, '', '', '', '', 0, '', '2023-08-11 07:05:06', '2023-08-11 07:05:06'),
(10, 'Ranjeet', 'Ranjeet', '123456', 'singhrj@gmail.com', '1987-09-23', '8306015102', 'Male', 2, '830265152315', 'thatej 380054', 'ranjit.jpg', 'saving', 159700, '3200489725486548', '2023-08-11 07:14:47', '2023-08-11 07:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
