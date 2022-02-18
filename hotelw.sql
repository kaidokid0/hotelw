-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 01:21 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelw`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `booking_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_booking` timestamp NOT NULL DEFAULT current_timestamp(),
  `set_booking` datetime NOT NULL,
  `price` varchar(255) NOT NULL,
  `editbooking_at` datetime NOT NULL,
  `editbooking_by` varchar(255) NOT NULL,
  `checkin_date` datetime NOT NULL,
  `by_checkin` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `setdate_checkout` datetime NOT NULL,
  `editsetdatecheckout_at` datetime NOT NULL,
  `editsetdatecheckout_by` varchar(255) NOT NULL,
  `bill` varchar(255) NOT NULL,
  `date_checkout` datetime NOT NULL,
  `checkout_by` varchar(255) NOT NULL,
  `checkout_room` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `cancel_by` varchar(255) NOT NULL,
  `missed_by` varchar(255) NOT NULL,
  `markmissed_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fullname`, `booking_by`, `status`, `date_booking`, `set_booking`, `price`, `editbooking_at`, `editbooking_by`, `checkin_date`, `by_checkin`, `days`, `room_no`, `setdate_checkout`, `editsetdatecheckout_at`, `editsetdatecheckout_by`, `bill`, `date_checkout`, `checkout_by`, `checkout_room`, `payment`, `cancel_by`, `missed_by`, `markmissed_at`) VALUES
(1, 'user one', '6', 'Check Out', '2022-02-13 19:38:00', '2022-02-14 15:33:00', '2000', '2022-02-14 03:33:35', '1', '2022-02-15 02:01:17', '1', '4', 'null', '2022-02-18 02:00:00', '2022-02-14 03:36:04', '1', '8000', '2022-02-15 02:01:17', '1', '502', 'Paid', '', '', '0000-00-00 00:00:00'),
(2, 'red blue', '4', 'Check Out', '2022-02-14 18:15:43', '2022-02-16 02:17:00', '3000', '2022-02-15 02:16:59', '8', '2022-02-15 04:06:56', '1', '4', 'null', '2022-02-19 04:03:00', '0000-00-00 00:00:00', '', '12000', '2022-02-15 04:06:56', '1', '2', 'Paid', '', '', '0000-00-00 00:00:00'),
(3, 'user four', '16', 'Check Out', '2022-02-14 19:04:46', '2022-02-17 03:04:00', '2000', '0000-00-00 00:00:00', '', '2022-02-15 03:27:52', '1', '3', 'null', '2022-02-17 03:18:00', '0000-00-00 00:00:00', '', '6000', '2022-02-15 03:27:52', '1', '204', 'Paid', '', '', '0000-00-00 00:00:00'),
(4, 'xample chou', '14', 'Check Out', '2022-02-14 20:05:13', '2022-02-17 04:05:00', '3000', '0000-00-00 00:00:00', '', '2022-02-15 08:04:39', '1', '4', 'null', '2022-02-18 04:08:00', '2022-02-15 04:08:38', '1', '12000', '2022-02-15 08:04:39', '1', '3', 'Paid', '', '', '0000-00-00 00:00:00'),
(5, 'xample chou', '14', 'Check In', '2022-02-14 20:06:04', '2022-02-16 08:02:00', '3000', '2022-02-15 08:02:18', '1', '2022-02-15 08:03:01', '1', '3', '1', '2022-02-17 08:03:00', '0000-00-00 00:00:00', '', '9000', '0000-00-00 00:00:00', '', '', '', '', '1', '2022-02-15 07:28:24'),
(6, 'xample chou', '14', 'Block', '2022-02-14 20:06:09', '2022-02-21 04:06:00', '2000', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '', '', '', '', '1', '2022-02-15 05:07:44'),
(7, 'xample chou', '14', 'Block', '2022-02-14 20:06:13', '2022-02-17 04:06:00', '2000', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '', '', '', '', '1', '2022-02-15 04:53:04'),
(8, 'red blue', '4', 'Missed', '2022-02-15 00:01:38', '2022-02-16 08:01:00', '2000', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00 00:00:00', '', '', '', '', '1', '2022-02-15 08:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `role_as` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_by` varchar(255) NOT NULL,
  `edit_by` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `edit_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `contact`, `gender`, `role_as`, `email`, `password`, `create_by`, `edit_by`, `created_at`, `edit_at`) VALUES
(1, 'admin first', '123456789', 'Male', 'Admin', 'admin@gmail.com', '123', 'null', '1', '2022-02-10 00:17:35', '2022-02-13 19:42:59'),
(3, 'user two', '123', 'Male', 'Block', 'user1@gmail.com', '123', 'null', '1', '2022-02-10 00:54:14', '2022-02-14 21:25:52'),
(4, 'red blue', '123456', 'Male', 'User', 'red@gmail.com', '1234', 'null', '1', '2022-02-10 00:57:49', '2022-02-12 01:38:21'),
(5, 'sky blue', '090909', 'Female', 'User', 'sky@gmail.com', 'abc', 'null', '', '2022-02-10 01:07:19', '2022-02-11 19:44:03'),
(6, 'user one', '123456', 'Male', 'User', 'user@gmail.com', '123', 'null', '', '2022-02-10 14:59:08', '2022-02-11 19:44:03'),
(7, 'user three', '123456', 'Female', 'User', 'user3@gmail.com', '123', 'null', '', '2022-02-10 15:01:22', '2022-02-11 19:44:03'),
(8, 'admin three', '0303606405', 'Male', 'Admin', 'admin3@gmail.com', '123', 'null', '1', '2022-02-11 02:23:00', '2022-02-12 00:21:35'),
(14, 'xample chou', '09642578', 'Male', 'User', 'chou@gmail.com', '123', '1', '1', '2022-02-12 12:01:02', '2022-02-12 01:32:48'),
(15, 'admin four', '132456', 'Female', 'Admin', 'admin4@gmail.com', '123', '1', '1', '2022-02-12 13:37:04', '2022-02-12 01:52:57'),
(16, 'user four', '090909', 'Male', 'User', 'user4@gmail.com', '123', '1', '', '2022-02-12 13:38:03', '2022-02-12 13:38:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
