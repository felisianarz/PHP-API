-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 03:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugaskk4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kelas`
--

INSERT INTO `tabel_kelas` (`id`, `username`, `password`, `level`, `fullname`) VALUES
(1, 'fearz', '123', 'admin', 'Felisiana Ardelia Azzahra'),
(2, 'daffa', '123', 'user', 'daffa muzafar'),
(3, 'zayn', '123', 'user', 'zaydan '),
(4, 'latifah', '123', 'user', 'Latifah Aniza'),
(5, 'laland', '123', 'user', 'Laland Ikan Lele');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
