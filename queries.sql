-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 09:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `id` int(11) NOT NULL,
  `person_name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telephone` double DEFAULT NULL,
  `query` varchar(56) NOT NULL,
  `contact_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`id`, `person_name`, `email`, `telephone`, `query`, `contact_message`) VALUES
(1, 'John Bracken', 'peargc313@gmail.com', 0, 'curriculum', 'Message'),
(2, 'JinJing Li', 'peargc313@gmail.com', 879635771, 'tandc', 'What are your terms and conditions?'),
(3, 'Virgil Bracken', 'weeman101@yahoo.com', 879636963, 'facilities', 'Can I use your pool?'),
(4, 'Virgil Bracken', 'weeman101@yahoo.com', 879636963, 'facilities', 'Can I use your pool?'),
(5, 'JinJing Li', 'peargc313@gmail.com', 879635771, 'curriculum', 'Hi there'),
(6, 'John Bracken', 'seanobrachain@gmail.com', 123456789, 'curriculum', 'What do you teach?'),
(7, 'John Bracken', 'peargc313@gmail.com', 132456789, 'tandc', 'Hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
