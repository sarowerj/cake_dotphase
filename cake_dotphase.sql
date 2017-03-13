-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 11:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake_dotphase`
--

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `new_name` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(20) NOT NULL,
  `directory` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `name`, `new_name`, `type`, `size`, `directory`, `created`, `modified`, `status`) VALUES
(12, 'all_cat_payment_info_open_1.jpg', '58d585a161ae967c3f9228b348352700.jpg', 'image/jpeg', 315515, 'uploads', '2017-03-07 10:24:56', '2017-03-07 10:24:56', 1),
(13, 'all_cat_payment_info_v5.jpg', 'e657356bba265419118dad47e85711ba.jpg', 'image/jpeg', 220375, 'uploads', '2017-03-07 10:24:58', '2017-03-07 10:24:58', 1),
(14, 'batch_print_record.jpg', 'c79adfcf7e8de5f04637e309e3ff1d2c.jpg', 'image/jpeg', 318170, 'uploads', '2017-03-07 10:25:00', '2017-03-07 10:25:00', 1),
(15, 'upload_confirmation.jpg', '1489bd84ede978e587f927f548285013.jpg', 'image/jpeg', 161948, 'directory', '2017-03-07 21:17:40', '2017-03-07 21:17:40', 1),
(16, 'email_newsletter.jpg', 'f1fdac3a1f1d271a137335ed77d14914.jpg', 'image/jpeg', 279852, 'directory', '2017-03-07 21:45:40', '2017-03-07 21:45:40', 1),
(17, 'payment_details_view_v5.jpg', '4cdc89182a78850fddcb32d9907e3f80.jpg', 'image/jpeg', 160167, 'directory', '2017-03-07 21:45:53', '2017-03-07 21:45:53', 1),
(18, 'total_donation.jpg', '8288518f90ea547cba795e32e6ff964a.jpg', 'image/jpeg', 173096, 'directory', '2017-03-07 21:46:31', '2017-03-07 21:46:31', 1),
(19, 'upload_confirmation.jpg', '9539190db0da2849dd48e7309d08d80e.jpg', 'image/jpeg', 161948, 'directory', '2017-03-07 22:40:02', '2017-03-07 22:40:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(9) NOT NULL,
  `option_name` varchar(150) NOT NULL,
  `option_value` text NOT NULL,
  `created_by` int(9) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_by`, `created`, `updated`, `status`) VALUES
(4, 'email', 'sarowerj@gmail.com', 1, '2017-03-13 10:01:19', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `excerpt` text NOT NULL,
  `media` text NOT NULL,
  `type` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `created_by` int(10) NOT NULL,
  `updated` datetime NOT NULL,
  `updated_by` int(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `sub_title`, `content`, `excerpt`, `media`, `type`, `created`, `created_by`, `updated`, `updated_by`, `status`) VALUES
(1, 'page title', 'page sub title', '<p>some content</p>\r\n', 'some content', 'media', 'page', '2017-02-24 16:01:54', 1, '0000-00-00 00:00:00', 1, 1),
(2, 'First bookmark', 'page sub title', '<p>Create new page for your website</p>\r\n', ' Create new page for your website\r\n', 'media', 'page', '2017-02-24 16:07:39', 1, '0000-00-00 00:00:00', 1, 1),
(3, 'How do I fix the error\"Did you really think you are allowed to see that\"', 'page sub title', '<p>Create new page Create new page for your website asdfdasf</p>\r\n', 'Create new page Create new page for your website\r\n', 'media', 'page', '2017-02-24 16:14:46', 1, '0000-00-00 00:00:00', 1, 1),
(4, 'Photo clipping expart', 'page sub title', '<p>asfasdfasdf</p>\r\n', 'asdfadsfdasf', 'media', 'page', '2017-02-24 16:22:42', 1, '0000-00-00 00:00:00', 1, 1),
(5, 'How do I fix the error Did you really think you are allowed to see that', 'page sub title', '<p>sfdasfasf dasf Sar</p>\r\n', ' asdfdasfasdfasdf', 'media', 'page', '2017-02-24 17:59:11', 1, '0000-00-00 00:00:00', 1, 3),
(6, 'First bookmark', 'page sub title', '<p>adsf asdf adsf dasf dasf adsf</p>\r\n', ' adsf adsf adsf', 'media', 'page', '2017-03-07 09:24:07', 1, '0000-00-00 00:00:00', 1, 1),
(7, 'Photo clipping expart new', 'asdf adsf dasf', '<p>asdfdasas asdf asd</p>\r\n', 'a sdfadsf dasf dasfSar Sar', 'media', 'page', '2017-03-07 09:26:02', 1, '0000-00-00 00:00:00', 1, 1),
(8, 'Photo clipping expart new', 'asdf adsf dasf', '<p>asdfdasas asdf asd</p>\r\n', 'a sdfadsf dasf dasfSar Sar', 'media', 'page', '2017-03-07 09:27:42', 1, '0000-00-00 00:00:00', 1, 1),
(9, 'Photo clipping expart new', 'asdf adsf dasf', '<p>asdfdasas asdf asd</p>\r\n', 'a sdfadsf dasf dasfSar Sar', 'media', 'page', '2017-03-07 09:29:17', 1, '0000-00-00 00:00:00', 1, 1),
(10, 'Photo clipping expart new', 'asdf adsf dasf', '<p>asdfdasas asdf asd</p>\r\n', 'a sdfadsf dasf dasfSar Sar', 'media', 'page', '2017-03-07 09:29:56', 1, '0000-00-00 00:00:00', 1, 1),
(11, 'Photo clipping expart new', 'asdf adsf dasf', '<p>asdfdasas asdf asd</p>\r\n', 'a sdfadsf dasf dasfSar Sar', 'media', 'page', '2017-03-07 09:31:43', 1, '0000-00-00 00:00:00', 1, 1),
(12, 'Photo clipping expart new', 'asdf adsf dasf', '<p>asdfdasas asdf asd</p>\r\n', 'a sdfadsf dasf dasfSar Sar', 'media', 'page', '2017-03-07 09:34:27', 1, '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created`, `modified`, `status`) VALUES
(1, 'sarowerj', 'sarowerj@gmail.com', '$2y$10$iouRL5QysVPMuY5JkqgtmOBoC26HbZrwwotYAT9bI7Zi3tgPH.bCC', '', '2017-02-24 09:38:40', '2017-02-24 09:38:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
