-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2018 at 07:22 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Eletrical`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(240) NOT NULL,
  `subject` varchar(240) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(240) NOT NULL,
  `message` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `phone`, `email`, `message`, `created`, `updated`) VALUES
(2, 'hiren', 'hello', 1234567890, 'kapuriyahiren8899@gmail.com', 'jhgjhgjkjkhgkg', '2018-10-22 13:00:31', '2018-10-22 13:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_image`
--

CREATE TABLE `gallery_image` (
  `id` int(10) NOT NULL,
  `gallery_img` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `Service_tab_details`
--

CREATE TABLE `Service_tab_details` (
  `id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `service_description` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service_tab_name`
--

CREATE TABLE `service_tab_name` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_tab_name`
--

INSERT INTO `service_tab_name` (`service_id`, `service_name`, `created`, `updated`) VALUES
(3, 'shtrrrrrrrrrrr', '2018-10-26 11:47:50', '2018-10-26 11:47:50'),
(4, 'shtrrrrrrrrrrr', '2018-10-26 11:48:30', '2018-10-26 11:48:30'),
(5, 'asfddddddddddddddddd', '2018-10-26 11:48:33', '2018-10-26 11:48:33'),
(6, 'asfddddddddddddddddd', '2018-10-26 11:48:47', '2018-10-26 11:48:47'),
(7, 'sssssssssssss', '2018-10-26 12:01:47', '2018-10-26 12:01:47'),
(8, 'sdddddddddddddd', '2018-10-26 12:03:21', '2018-10-26 12:03:21'),
(9, 'sssssssssssss', '2018-10-26 12:03:24', '2018-10-26 12:03:24'),
(10, 'aaaaaaaaaaaaaaaaaa', '2018-10-26 13:07:35', '2018-10-26 13:07:35'),
(11, '789797987', '2018-10-26 13:07:41', '2018-10-26 13:07:41'),
(12, '111111', '2018-10-26 13:08:22', '2018-10-26 13:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(10) NOT NULL,
  `subscribe_email` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `subscribe_email`, `created`, `updated`) VALUES
(1, '', '2018-10-25 09:58:06', '2018-10-25 09:58:06'),
(2, '', '2018-10-25 09:58:34', '2018-10-25 09:58:34'),
(3, '', '2018-10-25 10:05:43', '2018-10-25 10:05:43'),
(4, 'kapuriyahiren8899@gmail.com', '2018-10-25 10:13:30', '2018-10-25 10:13:30'),
(5, 'sdfgfsd', '2018-10-25 11:29:38', '2018-10-25 11:29:38'),
(6, 'kapuriyahiren8899@gmail.com', '2018-10-26 07:15:28', '2018-10-26 07:15:28'),
(7, 'sdfg', '2018-10-26 08:17:49', '2018-10-26 08:17:49'),
(8, 'asfdsdaf', '2018-10-26 10:02:25', '2018-10-26 10:02:25'),
(9, '".$subscribe_email."', '2018-10-26 11:40:29', '2018-10-26 11:40:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_image`
--
ALTER TABLE `gallery_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Service_tab_details`
--
ALTER TABLE `Service_tab_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_tab_name`
--
ALTER TABLE `service_tab_name`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Service_tab_details`
--
ALTER TABLE `Service_tab_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_tab_name`
--
ALTER TABLE `service_tab_name`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
