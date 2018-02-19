-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2018 at 06:10 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `password`, `add_time`) VALUES
(16, 'swetha sree', 'swetha123@gmail.com', 'swetha123', '2018-02-02 01:29:38'),
(17, 'Sonia Agarwal', 'sonia123@gmail.com', 'sonia123', '2018-02-02 01:52:49'),
(18, 'divya', 'divya123@gmail.com', 'divya123', '2018-02-02 02:27:50'),
(19, 'harika', 'harika123@gmail.com', 'harika123', '2018-02-06 15:08:39'),
(20, 'Vyshnavi', 'vyshu123@gmail.com', 'vyshu123', '2018-02-07 04:35:53'),
(21, 'Niharika', 'niharika123@gmail.com', 'niharika', '2018-02-08 06:08:54'),
(22, 'deepika', 'deepika123@gmail.com', 'deepika123', '2018-02-08 15:09:28'),
(24, 'Teja Sree', 'teju123@gmail.com', 'teju123', '2018-02-17 08:34:49');

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE `url` (
  `user_id` int(5) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `url_id` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`user_id`, `username`, `url`, `url_id`, `category`, `add_time`) VALUES
(18, 'divya', 'chrome://apps/', 'chrome', 'Social Networking', '2018-02-08 07:36:45'),
(14, 'swetha sree', 'http://localhost/bookmark/index.php', 'host', 'Social Networking', '2018-02-14 05:03:47'),
(14, 'swetha sree', 'gfhjdskl,.xmcbhuik', 'ngi', 'Sports', '2018-02-14 05:07:36'),
(17, 'Sonia Agarwal', 'https://drive.google.com/drive/u/1/folders/1RMP5csUI6pU6XXHxVmTTLoHCWOwjVonv', 'drive', 'Social Networking', '2018-02-14 05:09:10'),
(17, 'Sonia Agarwal', 'https://www.youtube.com/results?search_query=Find OBST ', 'OBST', 'Social Networking', '2018-02-14 16:03:08'),
(17, 'Sonia Agarwal', 'dfghujikol;.', 'fjckgh', 'Sports', '2018-02-16 12:16:00'),
(17, 'Sonia Agarwal', 'https://www.youtube.com/watch?v=LXb6f8GJ0qs', 'heroku', 'Social Networking', '2018-02-16 13:22:56'),
(17, 'Sonia Agarwal', 'kop', 'pop', 'Stories', '2018-02-16 13:35:07'),
(17, 'Sonia Agarwal', 'kop', 'pop', 'Stories', '2018-02-16 13:35:18'),
(24, 'Teja Sree', 'http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database', 'php', 'Studies', '2018-02-17 08:35:28'),
(17, 'Sonia Agarwal', 'http://www.inmotionhosting.com/support/edu/website-design/using-php-and-mysql/php-insert-database', 'website', 'Social Networking', '2018-02-17 08:42:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
