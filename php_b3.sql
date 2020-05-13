-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 10:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_b3`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phonenumber`, `message`) VALUES
(6, 'mg mg ', '123123', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.'),
(7, 'mg mg ', '123123', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.'),
(8, 'mg mg ', '123123', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.'),
(9, 'mg mg ', '123123', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.'),
(10, 'mg mg ', '123123', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus reprehenderit mollitia ipsa! Qui magnam tempora iusto dicta possimus veritatis in consequuntur, labore quisquam non? Magni quia commodi quasi hic. Rem.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
