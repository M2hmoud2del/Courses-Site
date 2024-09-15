-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2024 at 12:55 PM
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
-- Database: `clients`
--
CREATE DATABASE IF NOT EXISTS `clients` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `clients`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_ID` int(13) NOT NULL,
  `CourseTitle` varchar(255) NOT NULL,
  `Price` int(13) NOT NULL,
  `Instructor` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Duration` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `CourseTitle`, `Price`, `Instructor`, `Date`, `Duration`, `Description`, `Image`) VALUES
(1, 'Introduction to Python Programming', 100, 'John Smith', '0000-00-00', '2 Weeks', 'Learn the basics of Python, including syntax, functions, and more.', 'intro_to_programming.jpg'),
(2, 'Data Science with R', 150, 'Jane Doe', '0000-00-00', '4 Weeks', 'Comprehensive course on using R for data analysis and visualization.', 'Data_Sience_With_R.jpg'),
(3, 'Artificial Intelligence', 500, 'Dr. Sarah Jones', '0000-00-00', '16 Hour', 'Explore AI fundamentals and applications.', 'AI.jpg'),
(4, 'Web Development', 300, 'John Doe', '0000-00-00', '8 Weeks', 'Learn to build modern web applications.', 'WebDevolepment.jpg'),
(5, 'Cybersecurity', 450, 'Dr. Emily Smith', '0000-00-00', '16 Weeks', 'Comprehensive course on security protocols.', 'cybersecurity.jpg'),
(6, 'Data Science', 600, 'Dr. Michael Brown', '0000-00-00', '1 Hour', 'Master data analysis and visualization techniques.', 'DataScience.jpg'),
(7, 'Digital Marketing', 350, 'Jessica White', '0000-00-00', '2 Weeks', 'Learn strategies for online marketing success.', 'Digital_Marketing.jpg'),
(8, 'Financial Analysis', 400, 'George Lee', '0000-00-00', '2 Weeks', 'Analyze financial statements and trends.', 'Financial_Analysis.jpg'),
(9, 'Blockchain Technology', 700, 'Dr. William Clark', '0000-00-00', '4 Weeks', 'Understand blockchain and its applications.', 'Blockchain_Technology.jpg'),
(10, 'UI/UX Design', 450, 'Dr. Alice Green', '0000-00-00', '4 Weeks', 'Design user interfaces with a focus on user experience.', 'UI_UX_Design.jpg'),
(11, 'Advanced Python Programming', 250, 'Dr. Laura Scott', '0000-00-00', '', 'Deep dive into advanced Python features and libraries.', 'Advanced_Python_Programming.jpg'),
(12, 'Machine Learning', 550, 'Dr. Daniel Martinez', '0000-00-00', '', 'Understand machine learning algorithms and their applications.', 'Machine_Learning.jpg'),
(13, 'Basics of C++', 30, 'Osama Elzero', '2024-09-28', '4 Weeks', 'Learn the basics of C++ programming, including syntax, loops, functions, and object-oriented programming.', 'Basics_of_C++.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coursesmembership`
--

CREATE TABLE `coursesmembership` (
  `client` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursesmembership`
--

INSERT INTO `coursesmembership` (`client`, `course`) VALUES
(2, 1),
(2, 2),
(2, 3),
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

CREATE TABLE `informations` (
  `Client_ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Phone_Number` varchar(20) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `University` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`Client_ID`, `Email`, `Username`, `Password`, `First_Name`, `Last_Name`, `Phone_Number`, `Country`, `University`) VALUES
(1, 'osama@gmail.com', 'Youssef Osama', '1234', 'Osama', 'Khaled', '01024145141', 'Egypt', 'Helwan'),
(2, 'capoking3@gmail.com', 'Mahmoud2del', '1234', 'Mahmoud', 'Adel', '01015032216', 'Egypt', 'Helwan'),
(3, 'youssefezzatb@yahoo.com', 'Eren_Corger', '1234', 'Youssef', 'Ezzat', '01114191941', 'Hwamdya', 'Helwan'),
(4, 'youssefosama@gmail.com', 'Youssef', '1234', 'Youssef', 'Osama', '01023411882⁩', 'Giza', 'Helwan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`),
  ADD UNIQUE KEY `CourseTitle` (`CourseTitle`);

--
-- Indexes for table `coursesmembership`
--
ALTER TABLE `coursesmembership`
  ADD PRIMARY KEY (`client`,`course`),
  ADD KEY `cons_course` (`course`);

--
-- Indexes for table `informations`
--
ALTER TABLE `informations`
  ADD PRIMARY KEY (`Client_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `Course_ID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursesmembership`
--
ALTER TABLE `coursesmembership`
  ADD CONSTRAINT `cons_client` FOREIGN KEY (`client`) REFERENCES `informations` (`Client_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cons_course` FOREIGN KEY (`course`) REFERENCES `courses` (`Course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
