-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 06:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `img_form_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `city`, `phone number`, `image`) VALUES
(1, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/img007.jpg'),
(2, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(3, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(4, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(5, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(6, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(7, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(8, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(9, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(10, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(11, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(12, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(13, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(14, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/Untitled-Project.jpg'),
(15, 'Abhinav Jha', 'Boisar', '+919766318407', 'profile_pic/asd (1).jpg'),
(16, 'Dhruv Jha', 'Boisar', '+919766318407', 'profile_pic/image_9_100x100.png'),
(17, 'Abhiyank Jha', 'Mumbai', '8208400761', 'profile_pic/WhatsApp Image 2020-08-22 at 9.22.10 AM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
