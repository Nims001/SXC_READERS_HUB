-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 03:56 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sxc_readers_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookreq`
--

CREATE TABLE `bookreq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `edition` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `edition` int(11) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `genre`, `publication`, `edition`, `file`) VALUES
(26, 'The Hobbit', 'J.R.R. Tolkein', 'Fiction', 'Cambridge', 1, 'hobbit.jpg'),
(27, 'Basic Mathematics XII', 'Bhanu Chandra Bajracharya', 'Academics', 'Sukunda', 2, 'basicmath.jpg'),
(28, 'Harry Potter and the Prisoner of Azkaban', 'J.K. Rowling', 'Fiction', 'Penguin House', 1, 'prisonerofazkaban.jpg'),
(29, 'Physics Vol I', 'Resnick, Halliday, Krane', 'Academics', 'Wiley', 5, 'download.jpg'),
(30, 'Hands-On Machine Learning with Scikit-Learn, Keras, and TensorFlow', 'Aurelien Geron', 'Academics', 'O Reily', 3, 'handsonmachine.jpg'),
(31, 'Lord of The Rings: The Return of The King', 'J.R.R. Tolkien', 'Fiction', 'Cambridge', 2, 'lotr.jpg'),
(32, 'The Hollow Kind', 'Andy Davidson', 'Horror', 'Bookpress', 7, 'hollowkind.jpg'),
(33, 'Atomic Habits', 'James Clear', 'Non-Fiction', 'Penguin House', 1, 'atomic-habits-dots.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sn` int(11) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `ppassword` varchar(255) DEFAULT NULL,
  `cpassword` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sn`, `f_name`, `l_name`, `email`, `ppassword`, `cpassword`, `admin`) VALUES
(1, 'Ram', 'Sharma', 'ramey22@gmail.com', '', 'ramram', 1),
(7, 'Shyam', 'Bahadur', 'shyam@gmail.com', '', 'samsam', 0),
(13, 'Nimesh', 'Sitoula', 'nims@gmail.com', '', 'nims', 0),
(14, 'Nirmal', 'Sharma', 'nirmal@yahoo.com', '', 'nirmal', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookreq`
--
ALTER TABLE `bookreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookreq`
--
ALTER TABLE `bookreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
