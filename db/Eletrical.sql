-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2018 at 11:07 AM
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
  `phone` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `message` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`, `created`, `updated`) VALUES
(24, 'aaaa', '', '9978001901', 'hiren.kapuriya@commercepundit.com', '2018-12-11 11:13:13', '2018-12-11 11:13:13'),
(25, 'aaaa', '9978001901', 'hiren.kapuriya@commercepundit.com', 'aaaaaaaaa', '2018-12-11 11:14:01', '2018-12-11 11:14:01'),
(26, 'hiren', '1234567890', 'hiren.kapuriya@commercepundit.com', 'aaaaaaaa', '2018-12-11 11:14:21', '2018-12-11 11:14:21'),
(27, 'hiren', '1234567890', 'hiren.kapuriya@commercepundit.com', 'aaaaaaaa', '2018-12-11 11:15:11', '2018-12-11 11:15:11'),
(28, 'fasdf', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaaaaaaa', '2018-12-11 11:15:33', '2018-12-11 11:15:33'),
(29, 'hiiii', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 11:41:39', '2018-12-11 11:41:39'),
(30, 'hiiii', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 11:42:32', '2018-12-11 11:42:32'),
(31, 'hiiii', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 11:44:26', '2018-12-11 11:44:26'),
(32, 'hiiii', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 11:45:06', '2018-12-11 11:45:06'),
(33, 'hiiii', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 11:52:23', '2018-12-11 11:52:23'),
(34, 'hiiii', '9978001901', 'kapuriyahiren8899@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 11:53:01', '2018-12-11 11:53:01'),
(35, 'aaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaa', '2018-12-11 11:58:34', '2018-12-11 11:58:34'),
(36, 'aaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaa', '2018-12-11 11:59:53', '2018-12-11 11:59:53'),
(37, 'aaa', '9978001901', 'tyagu@gmail.com', 'aaaaaa', '2018-12-11 12:19:19', '2018-12-11 12:19:19'),
(38, 'aaaaaaaaa', '9978001901', 'dddd@fsf.fgddd', 'aaaaaaaaaaaaaa', '2018-12-11 12:20:41', '2018-12-11 12:20:41'),
(39, 'aaaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaa', '2018-12-11 12:22:28', '2018-12-11 12:22:28'),
(40, 'aaaaa', '9978001901', 'ssssss@ffffff.dgdfgdsg', 'sdfgddddddddddddddddd', '2018-12-11 12:30:00', '2018-12-11 12:30:00'),
(41, 'zzzzzzzzzzzz', '9978001901', 'tyagu@gmail.com', 'zzzzzzzzzzzzzzzz', '2018-12-11 12:31:04', '2018-12-11 12:31:04'),
(42, 'aaaaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaaaaa', '2018-12-11 12:59:25', '2018-12-11 12:59:25'),
(43, 'aaaaaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaaaa', '2018-12-11 13:01:41', '2018-12-11 13:01:41'),
(44, 'aaaaaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaaaa', '2018-12-11 13:02:35', '2018-12-11 13:02:35'),
(45, 'kjhkjh', '9978001901', 'tyagu@gmail.com', 'sadfdssadsadssds', '2018-12-11 13:18:58', '2018-12-11 13:18:58'),
(46, 'kjhkjh', '9978001901', 'tyagu@gmail.com', 'sadfdssadsadssds', '2018-12-11 13:20:08', '2018-12-11 13:20:08'),
(47, 'aaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaa', '2018-12-11 13:22:50', '2018-12-11 13:22:50'),
(48, 'aaaaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaaaaaaaa', '2018-12-11 13:23:29', '2018-12-11 13:23:29'),
(49, 'aaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaaaa', '2018-12-11 13:24:36', '2018-12-11 13:24:36'),
(50, 'aaaaaaaaaaa', '9978001901', 'tyagu@gmail.com', 'aaaaaaaaaaaa', '2018-12-11 13:25:21', '2018-12-11 13:25:21');

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
(67, '2100Happy-Diwali-Background-Wallpapers-25451.jpg', 'fsgfsgsdfgfg', '2018-11-02 11:42:26', '2018-11-02 11:42:26'),
(68, '9180IMG_20180203_113804.jpg', 'hiren', '2018-11-02 12:50:41', '2018-11-02 12:50:41'),
(74, '70948.jpg', 'aaaa', '2018-11-02 12:54:45', '2018-11-02 12:54:45'),
(76, '4787IMG_20180203_113804.jpg', 'dfsgh', '2018-11-02 12:55:00', '2018-11-02 12:55:00'),
(77, '7817IMG_20180203_114227.jpg', 'aaaaa', '2018-11-02 12:56:07', '2018-11-02 12:56:07'),
(78, '8677IMG_20170128_173112 (1).jpg', 'aaaa', '2018-11-02 12:56:17', '2018-11-02 12:56:17'),
(79, '671images (2).jpeg', 'aaaaaaaaaaaaaaaaa', '2018-11-02 12:56:26', '2018-11-02 12:56:26'),
(80, '4625images (1).jpeg', 'a1223', '2018-11-02 12:56:42', '2018-11-02 12:56:42'),
(81, '2621images (4).jpeg', 'aaaaaaaaaaaaa', '2018-11-02 12:56:58', '2018-11-02 12:56:58'),
(82, '5789image_yK.png', 'aaaaaaa', '2018-11-02 12:57:14', '2018-11-02 12:57:14'),
(100, '3919Untitled-4.png', 'gfhcgf', '2018-11-02 14:37:57', '2018-11-02 14:37:57'),
(101, '3718image1.jpeg', 'sz', '2018-11-02 14:38:23', '2018-11-02 14:38:23'),
(102, '5681images (1).jpeg', 'qqqq', '2018-11-02 14:40:46', '2018-11-02 14:40:46'),
(103, '5567Cloud-White-Wallpaper-Simple.jpeg', 'dark image', '2018-11-06 05:53:03', '2018-11-06 05:53:03');

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
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `contact` varchar(240) NOT NULL,
  `message` varchar(240) NOT NULL,
  `comman_drive` varchar(240) NOT NULL,
  `drive_no` varchar(240) NOT NULL,
  `capcity` varchar(240) NOT NULL,
  `machine_name` varchar(240) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `contact`, `message`, `comman_drive`, `drive_no`, `capcity`, `machine_name`, `created`, `updated`) VALUES
(37, '', 'kapuriyahiren8899@gmail.com', '', '', '', '', '', '', '2018-11-26 06:44:47', '2018-11-26 06:44:47'),
(38, '', '', '978001901', '', '', '', '', '', '2018-11-26 06:44:58', '2018-11-26 06:44:58'),
(39, '', '', '', 'hirenkapapappapa', '', '', '', '', '2018-11-26 06:45:24', '2018-11-26 06:45:24'),
(40, '', 'hiiii', 'hiiii', 'hiiii', '', '', '', '', '2018-11-26 06:45:41', '2018-11-26 06:45:41'),
(47, 'aaa', 'kapuriyahiren8899@gmail.com', '789', 'hello', '', '', '', '', '2018-12-05 09:49:11', '2018-12-05 09:49:11'),
(48, 'a', 'aaaaaaaaaaa', 'a', 'a', '', '', '', '', '2018-12-05 09:49:19', '2018-12-05 09:49:19'),
(49, 'aasd', 'dsaf', 'asdf', 'dsaf', '', '', '', '', '2018-12-05 09:49:27', '2018-12-05 09:49:27'),
(50, 'a', 'a', 'a', 'aaaaaaa', '', '', 'a', 'a', '2018-12-05 11:33:27', '2018-12-05 11:33:27'),
(51, 'a', 'rr', 'a', 'rrr', 'rr', 'rr', '', '', '2018-12-05 11:34:25', '2018-12-05 11:34:25'),
(52, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa@ddd.hhh', 'aaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaa', '', '', '2018-12-05 14:04:31', '2018-12-05 14:04:31'),
(53, '', '', '', '', '', '', '', '', '2018-12-10 09:07:38', '2018-12-10 09:07:38'),
(54, '', '', '', '', '', '', '', '', '2018-12-10 09:10:03', '2018-12-10 09:10:03'),
(55, '', '', '', '', '', '', '', '', '2018-12-10 09:10:10', '2018-12-10 09:10:10'),
(56, '', '', '', '', '', '', '', '', '2018-12-10 09:10:33', '2018-12-10 09:10:33'),
(57, '', '', '', '', '', '', '', '', '2018-12-10 09:10:47', '2018-12-10 09:10:47'),
(58, '', '', '', '', '', '', '', '', '2018-12-10 09:11:30', '2018-12-10 09:11:30'),
(59, '', '', '', '', '', '', '', '', '2018-12-10 09:11:38', '2018-12-10 09:11:38'),
(60, '', '', '', '', '', '', '', '', '2018-12-10 10:23:44', '2018-12-10 10:23:44'),
(61, '', '', '', '', '', '', '', '', '2018-12-10 10:24:18', '2018-12-10 10:24:18'),
(62, '', '', '', '', '', '', '', '', '2018-12-10 10:24:27', '2018-12-10 10:24:27'),
(63, '', '', '', '', '', '', '', '', '2018-12-10 10:24:42', '2018-12-10 10:24:42'),
(64, '', '', '', '', '', '', '', '', '2018-12-10 10:25:34', '2018-12-10 10:25:34'),
(65, '', '', '', '', '', '', '', '', '2018-12-10 10:25:37', '2018-12-10 10:25:37'),
(66, '', '', '', '', '', '', '', '', '2018-12-10 10:25:46', '2018-12-10 10:25:46'),
(67, '', '', '', '', '', '', '', '', '2018-12-10 10:25:55', '2018-12-10 10:25:55'),
(68, '', '', '', '', '', '', '', '', '2018-12-10 11:05:12', '2018-12-10 11:05:12'),
(69, '', '', '', '', '', '', '', '', '2018-12-10 11:06:46', '2018-12-10 11:06:46'),
(70, '', '', '', '', '', '', '', '', '2018-12-10 11:07:20', '2018-12-10 11:07:20'),
(71, '', '', '', '', '', '', '', '', '2018-12-10 11:08:11', '2018-12-10 11:08:11'),
(72, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tyagu@gmail.com', '1245678900', 'aaaaaaaaaa', 'aaa', 'aaa', '', '', '2018-12-11 06:27:34', '2018-12-11 06:27:34'),
(73, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'tyagu@gmail.com', '1245678900', 'aaaaaaaaaa', 'aaa', 'aaa', '', '', '2018-12-11 09:03:50', '2018-12-11 09:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `service_tab_details`
--

CREATE TABLE `service_tab_details` (
  `id` int(11) NOT NULL,
  `service_name_opt` int(11) NOT NULL,
  `service_description` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_tab_details`
--

INSERT INTO `service_tab_details` (`id`, `service_name_opt`, `service_description`, `created`, `updated`) VALUES
(18, 12, '<h3>Finibus Bonorum Malorum</h3><p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p><h3>Air Condition</h3><p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><ul><li>Powerfull HTML5 Template</li><li>Quality Design and more</li><li>Smooth Design</li><li>It&#39;s ferfect for any business website</li><li>Powerfull HTML5 Template</li><li>Quality Design and more</li><li>Smooth Design</li><li>It&#39;s ferfect for any business website</li></ul>', '2018-11-30 09:16:02', '2018-11-30 09:16:02'),
(19, 13, '<p><span style="color: rgb(44, 130, 201);"><strong><u>Powerfull</u></strong><strong><u>&nbsp;HTML5 Template</u></strong></span><br>Quality Design and more<br>Smooth Design<br>It&#39;s ferfect for any business website<br>Powerfull HTML5 Template<br>Quality Design and more<br>Smooth Design<br>It&#39;s ferfect for any business website</p>', '2018-11-30 09:22:55', '2018-11-30 09:27:12'),
(20, 14, '<h3>Finibus Bonorum Malorum</h3><p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p><h3>Air Condition</h3><p>Eque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '2018-11-30 09:28:25', '2018-11-30 09:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `service_tab_name`
--

CREATE TABLE `service_tab_name` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_tab_name`
--

INSERT INTO `service_tab_name` (`service_id`, `service_name`, `created`, `updated`) VALUES
(12, 'AC&DC Drive Programming', '2018-11-30 09:02:23', '2018-11-30 09:02:23'),
(13, 'AC&DC Drive Reparing', '2018-11-30 09:02:41', '2018-11-30 09:02:41'),
(14, 'PLC & SMI Programming', '2018-11-30 09:02:59', '2018-11-30 09:02:59');

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
(11, 'hardik.parmar@commercepundit.com', '2018-11-05 07:05:33', '2018-11-05 07:05:33'),
(12, 'hiren.kapuriya@commercepundit.com', '2018-11-05 07:25:27', '2018-11-05 07:25:27'),
(13, 'kapuriyahiren8899@gmail.com', '2018-11-06 04:57:33', '2018-11-06 04:57:33'),
(14, 'hardik.parmar@commercepundit.com', '2018-11-28 09:13:42', '2018-11-28 09:13:42'),
(15, 'kapuriyahiren8899@gmail.com', '2018-12-05 12:28:03', '2018-12-05 12:28:03'),
(16, 'kapuriyahiren8899@gmail.com', '2018-12-05 12:29:48', '2018-12-05 12:29:48'),
(17, 'kapuriyahiren8899@gmail.com', '2018-12-05 12:34:01', '2018-12-05 12:34:01'),
(18, 'kapuriyahiren8899@gmail.com', '2018-12-05 12:36:48', '2018-12-05 12:36:48'),
(19, 'kapuriyahiren8899@gmail.com', '2018-12-05 12:37:52', '2018-12-05 12:37:52'),
(20, 'kapuriyahiren8899@gmail.com', '2018-12-05 12:40:39', '2018-12-05 12:40:39'),
(21, 'hiren.kapuriya@commercepundit.com', '2018-12-05 12:40:54', '2018-12-05 12:40:54'),
(22, '', '2018-12-05 13:02:23', '2018-12-05 13:02:23'),
(23, 'kapuriyahiren8899@gmail.com', '2018-12-05 13:02:30', '2018-12-05 13:02:30'),
(24, 'hiren.kapuriya@commercepundit.com', '2018-12-11 09:04:03', '2018-12-11 09:04:03');

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
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_tab_details`
--
ALTER TABLE `service_tab_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_service_tab_name` (`service_name_opt`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `gallery_image`
--
ALTER TABLE `gallery_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `service_tab_details`
--
ALTER TABLE `service_tab_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `service_tab_name`
--
ALTER TABLE `service_tab_name`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_tab_details`
--
ALTER TABLE `service_tab_details`
  ADD CONSTRAINT `service_tab_details_ibfk_1` FOREIGN KEY (`service_name_opt`) REFERENCES `service_tab_name` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
