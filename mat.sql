-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 12:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mat`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `role` varchar(15) NOT NULL DEFAULT 'user',
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mobile_no`, `username`, `pwd`, `fname`, `lname`, `email`, `role`, `is_verified`, `status`, `created_at`, `modified_at`) VALUES
(1, '', 'admin_mat', '$2y$10$w23Qtfk1Zge36xEIWUhcIuI1nYLXDzGXQ6UoiJgOI7xc9tsjt5hXa', 'Demo', 'User', 'test@test.com', 'admin', 1, 1, '2020-08-06 18:01:55', '2020-08-06 18:01:55'),
(5, '', '', '$2y$10$w23Qtfk1Zge36xEIWUhcIuI1nYLXDzGXQ6UoiJgOI7xc9tsjt5hXa', 'Vaibhavi', 'Tiwari', 'user1@gmail.com', 'user', 0, 1, '2021-04-08 07:31:22', '2021-04-08 07:31:22'),
(8, '', '', '$2y$10$w23Qtfk1Zge36xEIWUhcIuI1nYLXDzGXQ6UoiJgOI7xc9tsjt5hXa', 'Akhil', 'G', 'user2@gmail.com', 'user', 0, 1, '2021-04-08 07:31:22', '2021-04-08 07:31:22'),
(9, '', '', '$2y$10$w23Qtfk1Zge36xEIWUhcIuI1nYLXDzGXQ6UoiJgOI7xc9tsjt5hXa', 'Reena', 'Jain', 'user3@gmail.com', 'user', 0, 1, '2021-04-08 07:31:22', '2021-04-08 07:31:22'),
(10, '', '', '$2y$10$w23Qtfk1Zge36xEIWUhcIuI1nYLXDzGXQ6UoiJgOI7xc9tsjt5hXa', 'Gagan', 'Deep', 'user4@gmail.com', 'user', 0, 1, '2021-04-08 07:31:22', '2021-04-08 07:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pin_code` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `img_src` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `pin_code`, `address`, `age`, `occupation`, `city`, `img_src`, `created_at`, `updated_at`) VALUES
(46, 5, NULL, 'Budhapara, Raipur, CG', '23', 'Student', 'Raipur', '3.jpg', '2021-04-09 05:57:09', '2021-04-09 05:57:09'),
(49, 8, NULL, 'Budhapara, Raipur', '25', 'Business', 'Durg', '2.jpg', '2021-04-09 05:57:09', '2021-04-09 05:57:09'),
(50, 9, NULL, 'Budhapara, Raipur', '25', 'Software developer', 'Raipur', '4.jpg', '2021-04-09 05:57:09', '2021-04-09 05:57:09'),
(51, 10, NULL, 'Budhapara, Raipur', '27', 'High court judge', 'Jabalpur', '1.jpg', '2021-04-09 05:57:09', '2021-04-09 05:57:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
