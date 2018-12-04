-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 07:01 PM
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
(2, 'hiren', 'hello', 1234567890, 'kapuriyahiren8899@gmail.com', 'jhgjhgjkjkhgkg', '2018-10-22 13:00:31', '2018-10-22 13:00:31'),
(3, 'fasdf', 'asdf', 1234567890, 'kapuriyahiren8899@gmail.com', 'asdf', '2018-11-05 12:07:36', '2018-11-05 12:07:36'),
(4, 'asf', 'asdf', 1234567890, 'kapuriyahiren8899@gmail.com', 'sdafdasf', '2018-11-05 12:48:35', '2018-11-05 12:48:35'),
(5, 'adsfdsadasf', 'dasfadsf', 1234567890, 'kapuriyahiren8899@gmail.com', 'asdfdasfdasfdasf', '2018-11-05 12:48:46', '2018-11-05 12:48:46'),
(8, 'dasf', 'asdf', 1234567890, 'kapuriyahiren8899@gmail.com', 'adsfdasfsdaf', '2018-11-05 12:49:31', '2018-11-05 12:49:31'),
(9, 'happy diwali', 'kapuriya', 1234567890, 'kapuriyahiren8899@gmail.com', 'easfdfg', '2018-11-06 04:59:00', '2018-11-06 04:59:00');

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
(41, 'tyag', 'kapuriyahiren8899@gmail.com', '1234567890', 'hello tray', 'hiiii', '789485500', '', '', '2018-11-30 11:24:24', '2018-11-30 11:24:24'),
(42, 'adf', 'hiren.kapuriya@commercepundit.com', '1234567890', 'lbhhkjg', 'ioioi', '454', '', '', '2018-11-30 11:30:04', '2018-11-30 11:30:04'),
(43, 'dsfv', 'kapuriyahiren8899@gmail.com', '1234567890', 'dsfasaf', '44444', '123444444', '', '', '2018-11-30 11:47:54', '2018-11-30 11:47:54');

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
(14, 'hardik.parmar@commercepundit.com', '2018-11-28 09:13:42', '2018-11-28 09:13:42');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `service_tab_details`
--
ALTER TABLE `service_tab_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `service_tab_name`
--
ALTER TABLE `service_tab_name`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
