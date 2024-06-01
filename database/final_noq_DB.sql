-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 04:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noq`
--

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `chef_ID` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ID` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone number` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`chef_ID`, `name`, `ID`, `password`, `phone number`) VALUES
('1', 'Aziz massoudi', '09486874', 'azizos654648', '97543215'),
('2', 'mohamed amine chaar', '11426975', 'chaarmahbouuuul', '28975344');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `meal_id` int(255) NOT NULL,
  `chef_id` int(2) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Ingredients` text NOT NULL,
  `image` text NOT NULL,
  `no_coming` int(255) NOT NULL,
  `no_bread` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`meal_id`, `chef_id`, `Name`, `Date`, `Ingredients`, `image`, `no_coming`, `no_bread`) VALUES
(1, 1, 'Brik', '2023/01/21', 'Phyllo pastry, Tuna fish, Egg, Parsley, Harissa, Vegetable oil (for frying).', 'Meal Images/Brik.jpg', 0, 0),
(2, 1, 'Coscous', '2023/01/21', 'Semolina grains (Couscous grains), Water, Salt, Meat or fish, and Vegetables.', 'Meal Images/Coscous.jpg', 0, 0),
(3, 1, 'Tajine', '2023/01/21', 'Turkey Meat, Vegetables, Spices (such as cumin, coriander, and cinnamon), eggs, Cheese, and Olive oil.', 'Meal Images/Tajine.jpg', 0, 0),
(4, 1, 'Mloukhia', '2023/01/21', 'Mloukhia (jute) leaves, Meat ( Sheep, Beef, or Camel), Spices (such as cumin, coriander, and garlic), Bay Leaves, and Olive oil.', 'Meal Images/Mloukhia.jpg', 0, 0),
(5, 1, 'Djerbian Rice', '2023/01/21', 'Rice, Meat (such as chicken, beef, or lamb) and/or Seafood (such as shrimp, mussels or squid), Vegetables (such as onions, tomatoes, bell peppers, and carrots), Spices (such as saffron, cumin, coriander, paprika, and black pepper), Olive oil, and Garlic.', 'Meal Images/Rouz_Jerbi.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `allergy` varchar(6) NOT NULL,
  `last_meal_sub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `password`, `phone_number`, `allergy`, `last_meal_sub`) VALUES
('1', 'fedi lejmi', 'fedi_lejmi97@gmail.com', 'fedihayiicha', '20346975', 'no', '5'),
('2', 'sami melki', 'samsoum@gmail.com', 'samimelki56', '20474934', 'no', '2'),
('3', 'lionel messi', 'lionelmessi@gmail.com', 'messimessimessi', '55367244', 'yes', '5'),
('4', 'cristiano ronaldo', 'ronaldo@alnassr.sa', 'ronaldomahboul', '27679354', 'yes', '2'),
('5', 'Mahdi Messai', 'jakephex@protonmail.com', '3XMtYJa9LKe!@zzf', '27377161', 'yes', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`chef_ID`);

--
-- Indexes for table `meal`
--
ALTER TABLE `meal`
  ADD PRIMARY KEY (`meal_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
