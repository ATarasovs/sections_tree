-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2019 at 04:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sections_tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog_tree`
--

CREATE TABLE `catalog_tree` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `node_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalog_tree`
--

INSERT INTO `catalog_tree` (`id`, `parent_id`, `node_id`, `title`, `content`, `user_id`, `time_created`) VALUES
(40, 0, 0, 'Section 1', '<p><span style=\"background-color: inherit;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: 11px;\">ï»¿</span><span style=\"font-style: italic;\"><span style=\"font-size: 12px;\">ï»¿Section 1 Content</span></span></span></span><br></p>', 2, '2019-08-04 13:44:12'),
(41, 0, 0, 'Section 2', '<p><span style=\"color: rgb(255, 0, 0);\"><span style=\"background-color: inherit;\"><span style=\"font-size: 11px;\">ï»¿</span><span style=\"font-weight: bold;\"><span style=\"font-style: italic;\"><span style=\"font-size: 12px;\">ï»¿Section 2 Content</span></span></span></span></span><br></p>', 2, '2019-08-04 13:44:51'),
(42, 40, 40, 'Section 1.1', '<p><span style=\"background-color: inherit;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: 11px;\">ï»¿</span><b><span style=\"font-style: italic;\"><span style=\"font-size: 12px;\">ï»¿Section 1.1 Content</span></span></b></span></span><br></p>', 2, '2019-08-04 13:45:34'),
(43, 42, 40, 'Section 1.1.1', '<p><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: 11px;\">ï»¿</span><u><span style=\"font-style: italic;\"><span style=\"font-size: 12px;\">ï»¿Section 1.1.1 Content</span></span></u></span></span><br></p>', 2, '2019-08-04 13:46:24'),
(44, 42, 40, 'Section 1.1.2', '<p><span style=\"background-color: inherit;\"><span style=\"color: rgb(0, 0, 255);\"><span style=\"font-size: 11px;\">ï»¿</span><span style=\"font-style: italic;\"><span style=\"font-size: 12px;\">ï»¿Section 1.1.2 Content</span></span></span></span><br></p>', 2, '2019-08-04 13:47:00'),
(46, 0, 0, 'Section 3', '<p><span style=\"color: rgb(115, 24, 66);\"><i><span style=\"font-size: 12px;\">Section 3 Content</span><br></i></span></p>', 1, '2019-08-04 14:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$XdXOD3i/JYdCakgv4dKDi.MoplTmOccZW5sFRB7Yq5lrSwtGHhhHG'),
(2, 'atarasov', '$2y$10$2Ens72w0cPSaw7XMmE401.6U1ulMZLivLtSunTT8m8vnd2W2aVg.O'),
(3, 'user', '$2y$10$L./dG4I/TSvFRb.PswKwDeemOM6vTSapkLFOVMwxEwi/lXje4FUCK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog_tree`
--
ALTER TABLE `catalog_tree`
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
-- AUTO_INCREMENT for table `catalog_tree`
--
ALTER TABLE `catalog_tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
