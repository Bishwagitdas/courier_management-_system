-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 07:55 AM
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
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_code` varchar(50) NOT NULL,
  `street` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_code`, `street`, `city`, `state`, `zip_code`, `country`, `contact`, `date_created`) VALUES
(4, 'dIbUK5mEh96f0Zc', 'Rajshahi', 'Rajshahi', 'Rajshahi', '6000', 'Bangladesh', '01700000000', '2020-11-27 13:31:49'),
(5, 'JfVbO0UClGYkM1Q', 'Naogaon', 'Rajshahi', 'Naogaon', '3500', 'Bangladesh', '01600000000', '2022-03-18 00:11:16'),
(9, '71dCHMBZiCIlOk3', 'Bogura', 'Rajshahi', 'Bogura', '3400', 'Bangladesh', '01300000000', '2022-03-18 00:56:30'),
(10, '6JwDoRziIsfzrMp', 'Dhaka', 'Dhaka', 'Dhaka', '1229', 'Bangladesh', '01800000000', '2022-03-19 22:01:40'),
(11, '4pRffAQEkkIeQSR', 'Rangpur', 'Rangpur', 'Rangpur', '100', 'Bangladesh', '01600000000', '2023-04-03 11:59:22'),
(12, 'UXaxLnenwVRRDf6', 'Munshiganj', 'Dhaka', 'Dhaka', '1200', 'Bangladesh', '01700000000', '2023-05-11 12:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `id` int(30) NOT NULL,
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `sender_address` text NOT NULL,
  `sender_contact` text NOT NULL,
  `recipient_name` text NOT NULL,
  `recipient_address` text NOT NULL,
  `recipient_contact` text NOT NULL,
  `type` int(1) NOT NULL COMMENT '1 = Deliver, 2=Pickup',
  `from_branch_id` int(30) NOT NULL,
  `to_branch_id` int(30) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `width` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`id`, `reference_number`, `sender_name`, `sender_address`, `sender_contact`, `recipient_name`, `recipient_address`, `recipient_contact`, `type`, `from_branch_id`, `to_branch_id`, `weight`, `height`, `width`, `length`, `price`, `status`, `date_created`) VALUES
(24, '4931725841', 'Avi Das', 'Rangpur', '01700000002', 'Pritam Das', 'Naogaon', '01700000001', 2, 11, 5, '10', '10', '25', '10', 500, 7, '2022-03-20 16:51:07'),
(25, '3535554352', 'Bappi Mondal', 'Naogaon', '01700000000', 'Bishwagit Das', 'Dhaka', '01700000000', 2, 5, 10, '100', '15', '25', '25', 350, 1, '2022-03-20 16:51:07'),
(27, '6737799077', 'Nazmul Hassan', 'Dhaka', '01700000000', 'Sourav Hassan', 'Rangpur', '01700000000', 2, 5, 11, '48', '56', '65', '98', 100, 0, '2022-03-20 17:23:11'),
(30, '8196229703', 'Pranto Mondal', 'Dhaka', '01600000000', 'Dip Mondal', 'Rajshahi', '01300000000', 2, 10, 4, '48', '56', '65', '98', 365, 9, '2022-03-20 17:29:25'),
(31, '0649896049', 'Apu Das', 'Rajshahi', '01700000000', 'Tapu Das', 'Naogaon', '01800000000', 2, 4, 5, '48', '56', '65', '98', 200, 3, '2022-03-20 17:29:25');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_tracks`
--

CREATE TABLE `parcel_tracks` (
  `id` int(30) NOT NULL,
  `parcel_id` int(30) NOT NULL,
  `status` int(2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parcel_tracks`
--

INSERT INTO `parcel_tracks` (`id`, `parcel_id`, `status`, `date_created`) VALUES
(1, 2, 1, '2020-11-27 09:53:27'),
(2, 3, 1, '2020-11-27 09:55:17'),
(3, 1, 1, '2020-11-27 10:28:01'),
(4, 1, 2, '2020-11-27 10:28:10'),
(5, 1, 3, '2020-11-27 10:28:16'),
(6, 1, 4, '2020-11-27 11:05:03'),
(7, 1, 5, '2020-11-27 11:05:17'),
(8, 1, 7, '2020-11-27 11:05:26'),
(9, 3, 2, '2020-11-27 11:05:41'),
(10, 6, 1, '2020-11-27 14:06:57'),
(11, 22, 2, '2022-03-20 01:08:45'),
(14, 23, 7, '2022-03-20 14:42:40'),
(15, 25, 2, '2022-03-20 16:51:18'),
(16, 24, 4, '2022-03-20 16:51:22'),
(17, 25, 6, '2022-03-20 17:08:30'),
(18, 31, 3, '2022-03-20 17:29:53'),
(19, 30, 9, '2022-03-20 17:29:59'),
(20, 25, 1, '2022-03-20 18:30:26'),
(21, 24, 7, '2022-03-20 18:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `address`, `cover_img`) VALUES
(1, 'Courier Management System', 'info@gmail.com', '+880170303030303', 'Dhaka 1229,Bangladesh', 'cms.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1 = admin, 2 = staff',
  `branch_id` int(30) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`, `type`, `branch_id`, `date_created`) VALUES
(4, 'Bishwagit', 'Das', '01703030348', 'admin@gmail.com', '$2y$06$I5dyK1V5jd40bFa2.LV31uOXyuH8oGd6VYHkOH8ke8J/fnVgmmPwa', 1, 0, '2022-03-17 20:22:46'),
(5, 'Pranto', 'mondal', '+8801600000000', 'pranto@gmail.com', '$2y$04$6Bec4IKH9EFnUYuLq5yuzuEZT1k47B.p4sTbuNBNXHd8sOW2BGnPG', 2, 5, '2022-03-18 01:55:28'),
(6, 'Khalek', 'hassan', '+8801700000000', 'khalek@gmail.com', '$2y$10$CUBIrE/2vWZjTHqphzcALeUTFlsAEjDiv3S42ur/cFHbaZom7bo4C', 2, 10, '2022-03-18 01:56:57'),
(8, 'habib', 'khan', '+8801600000000', 'habib@gmail.com', '$2y$10$xN3jOr3/G92IRwN8idLmA.5XteupcfmecEdayUbXkUCaqzpu3PL0C', 2, 9, '2022-03-21 00:31:53'),
(9, 'Apu', 'Mondal', '+8801300000000', 'apu@gmail.com', '$2y$10$ljn/BctSQCoHAkdiiPhq1u354pHmv.zLlPvUnUiPP60ftp5kc9I7i', 2, 4, '2023-04-03 12:14:16'),
(10, 'Pallob', 'Sarkar', '+8801900000000', 'pallob@gmail.com', '$2y$10$DCpzqJwSWN.mg2.Z/FzqB.aT5g5aO9/PUx5ziMM.H8JQpSXMVdlgm', 2, 11, '2023-04-03 12:15:26'),
(11, 'Masum', 'Reza', '01600000001', 'masum@gmail.com', '$2y$10$CkQBx8dABaNbKmlZT6zPEupSfCu/qiQk5iVjAv/tSdIBuE2.Qg7Rm', 2, 12, '2023-05-11 12:41:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_branch_id` (`from_branch_id`);

--
-- Indexes for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parcel_id` (`parcel_id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parcels`
--
ALTER TABLE `parcels`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `parcel_tracks`
--
ALTER TABLE `parcel_tracks`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parcels`
--
ALTER TABLE `parcels`
  ADD CONSTRAINT `parcels_ibfk_1` FOREIGN KEY (`from_branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
