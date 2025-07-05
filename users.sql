-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 14, 2025 at 01:11 PM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `dob`, `password`) VALUES
(1, 'janvi mahawar', 'janvimahawar3@gmail.com', '2005-03-07', '$2y$10$zgmFFXhEmTfowetR2vExf.FWQOFTf35Gf5oJCKYmd07TDpXfkZmve'),
(2, 'gaurav shrivastava', 'gauravkshri0906@gamil.com', '2003-08-31', '$2y$10$ulTG04Ry/yzfmjbp9Hef5eVxLlnKrXD6o41LxTdriWadfbNwT1c3.'),
(3, 'aayushi singh shisodiya ', 'aayushi889@gmail.com', '2003-06-12', '$2y$10$995JcHueXLj1zY031nVdAOSbIO0t0s3VhfYXw1rNoQPOCWNTqd6hu'),
(4, 'amayra mahawar', 'amayra25@gmail.com', '2022-09-25', '$2y$10$ZerbUbpqIdJwE/3xrtf10O5LibvxQvzxihENtIfgtCr29AylX3fyG'),
(5, 'admin', 'admin@123', '2024-05-13', '$2y$10$yHfOFiQYMt104u2wEZiMUON94/xdjjkhx/wQnoCH.jBRUaQ46YxBS'),
(6, 'koina mahawar', 'koina123@gmail.com', '2006-05-31', '$2y$10$gn/TsxvWrDHwL5CPP55sxeXVeRosRRu6EYPsFJoA3epZLWfRBmngq'),
(7, 'aanchal mahawar', 'aanchal@gmail.com', '2024-01-30', '$2y$10$52ZHP3DIzMySOfDVVHCFSuKwP6pKxTHnEhMGNZYkiuFiuw8NTrhpC'),
(8, 'vedant jain', 'vedant@gmail.com', '2005-02-18', '123456789'),
(9, 'avni bhardwaj', 'avni@gmail.com', '2003-02-24', '123456789'),
(10, 'shobha mahawar', 'shobha@gmail.com', '1988-03-08', '123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
