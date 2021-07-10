-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 11:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engines`
--

-- --------------------------------------------------------

--
-- Table structure for table `controlpanel`
--

CREATE TABLE `controlpanel` (
  `Motor1` int(100) NOT NULL,
  `Motor2` int(100) NOT NULL,
  `Motor3` int(100) NOT NULL,
  `Motor4` int(100) NOT NULL,
  `Motor5` int(100) NOT NULL,
  `Motor6` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `controlpanel`
--

INSERT INTO `controlpanel` (`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`) VALUES
(57, 0, 50, 50, 50, 50),
(57, 0, 50, 50, 50, 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
