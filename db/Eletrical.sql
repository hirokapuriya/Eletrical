-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2018 at 04:44 PM
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
  `name` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery_image`
--

INSERT INTO `gallery_image` (`id`, `gallery_img`, `name`, `created`, `updated`) VALUES
(59, '36548.jpg', 'ddd', '2018-11-01 10:07:33', '2018-11-01 10:07:33'),
(63, '53675-dairy-milk.jpg', 'aaaaaaaaaaaaaaaaaaaaaaaa', '2018-11-02 10:13:01', '2018-11-02 10:13:01');

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
  `service_name_opt` int(10) NOT NULL,
  `service_description` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Service_tab_details`
--

INSERT INTO `Service_tab_details` (`id`, `service_name_opt`, `service_description`, `created`, `updated`) VALUES
(11, 26, '<p>abcd</p>', '2018-10-30 10:03:49', '2018-11-01 06:22:22'),
(13, 24, '<p>hello hiren kapuriya ssssssssssssssss</p>', '2018-10-30 10:04:18', '2018-11-01 07:02:35'),
(19, 21, '<p>asdfsdafsadf</p>', '2018-10-30 12:55:29', '2018-10-30 12:55:29'),
(20, 21, '<p>asdfasdfsda</p>', '2018-10-30 12:55:33', '2018-10-30 12:55:33'),
(21, 21, '<p>asdfsdaf</p>', '2018-10-30 12:55:36', '2018-10-30 12:55:36'),
(22, 21, '<p>adsfasdf</p>', '2018-10-30 12:55:42', '2018-10-30 12:55:42'),
(23, 21, '<p>xczvxcvxcvxzdsafdsfdsaf</p>', '2018-10-30 12:55:46', '2018-10-30 12:55:46'),
(24, 21, '<p>asdfdafasdfasdfasdffdafasdf</p>', '2018-10-30 12:55:51', '2018-10-30 12:55:51'),
(25, 21, '<p>sadfsdfasdfasfadfadsfdas</p>', '2018-10-30 12:55:56', '2018-10-30 12:55:56'),
(26, 21, '<p>asfasdfadsfasfadsfasdf</p>', '2018-10-30 12:56:01', '2018-10-30 12:56:01'),
(27, 21, '<p>sbgdgdfsgsfg</p>', '2018-10-30 13:25:21', '2018-10-30 13:25:21'),
(28, 24, '<p><strong><em>aaaaaaaaaaaaaA<br></em></strong></p>', '2018-10-31 04:53:48', '2018-10-31 04:53:48'),
(30, 25, '<p>aaaaaaa</p>', '2018-10-31 08:50:42', '2018-10-31 08:50:42');

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
(21, 'AC & DC', '2018-10-30 10:00:05', '2018-10-30 10:00:05'),
(22, 'asfdfasf', '2018-10-30 10:03:41', '2018-10-30 10:03:41'),
(23, 'SMI & PCL', '2018-10-30 10:05:49', '2018-10-30 10:05:49'),
(24, 'aaaaaaaaaaaaaaa', '2018-10-31 04:53:26', '2018-10-31 04:53:26'),
(25, '123456', '2018-10-31 08:50:33', '2018-10-31 08:50:33'),
(26, 'hiren', '2018-11-01 05:57:22', '2018-11-01 05:57:22');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Service_tab_details`
--
ALTER TABLE `Service_tab_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `service_tab_name`
--
ALTER TABLE `service_tab_name`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
