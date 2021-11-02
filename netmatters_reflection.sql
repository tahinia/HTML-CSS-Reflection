-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 12:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters_reflection`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_posts`
--

CREATE TABLE `contact_posts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `newsletter` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category` varchar(25) NOT NULL,
  `image_url` text NOT NULL,
  `image_alt_text` text NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `author_image_url` text NOT NULL,
  `author_image_alt` varchar(128) NOT NULL,
  `author_name` varchar(128) NOT NULL,
  `date_posted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category`, `image_url`, `image_alt_text`, `title`, `description`, `author_image_url`, `author_image_alt`, `author_name`, `date_posted`) VALUES
(1, 'NEWS', '\"img/how-can-i-66LR.jpg\"', '\"Netmatters Ltd\"', 'How can I ensure a smooth transition if I swi...', 'As with any contract for services, it is important that you are regularly reviewing your IT support...', '\"img/netmatters-ltd-VXAv.png\"', '\"Netmatters\"', 'Posted by Netmatters Ltd', '2021-06-18'),
(2, 'NEWS', '\"img/happy-25th-birthday-Hn2f.jpg\"', '\"Birthday\"', 'Happy 25th Birthday Gabriel!', 'This week, we celebrate Gabriel Hamilton\'s 25th Birthday! Gabriel is one of the IT technicians based...', '\"img/netmatters-ltd-VXAv.png\"', '\"Netmatters\"', 'Posted by Netmatters Ltd', '2021-06-08'),
(3, 'NEWS', '\"img/may-2021-notables-B8cl.jpg\"', '\"Netmatters Ltd\"', 'May 2021 Notables', 'Every month we celebrate the most notable of employees here at Netmatters. Each department head is a...', '\"img/netmatters-ltd-VXAv.png\"', '\"Netmatters\"', 'Posted by Netmatters Ltd', '2021-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_posts`
--
ALTER TABLE `contact_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_posts`
--
ALTER TABLE `contact_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
