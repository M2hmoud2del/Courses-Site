-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 12:08 PM
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
  `More_Details` varchar(1300) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `videoLink` varchar(255) NOT NULL,
  `Category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `CourseTitle`, `Price`, `Instructor`, `Date`, `Duration`, `Description`, `More_Details`, `Image`, `videoLink`, `Category`) VALUES
(1, 'Introduction to Python Programming', 100, 'John Smith', '0000-00-00', '2 Weeks', 'Learn the basics of Python, including syntax, functions, and more.', '', 'intro_to_programming.jpg', '', 'Programming'),
(2, 'Data Science with R', 150, 'Jane Doe', '0000-00-00', '4 Weeks', 'Comprehensive course on using R for data analysis and visualization.', '', 'Data_Sience_With_R.jpg', '', 'AI'),
(3, 'Artificial Intelligence', 500, 'Dr. Sarah Jones', '0000-00-00', '16 Hour', 'Explore AI fundamentals and applications.', '', 'AI.jpg', '', 'AI'),
(4, 'Web Development', 300, 'John Doe', '0000-00-00', '8 Weeks', 'Learn to build modern web applications.', '', 'WebDevolepment.jpg', '', 'Web Development'),
(5, 'Cybersecurity', 450, 'Dr. Emily Smith', '0000-00-00', '16 Weeks', 'Comprehensive course on security protocols.', '', 'cybersecurity.jpg', '', 'Cybersecurity'),
(6, 'Data Science', 600, 'Dr. Michael Brown', '0000-00-00', '1 Hour', 'Master data analysis and visualization techniques.', '', 'DataScience.jpg', '', 'AI'),
(7, 'Digital Marketing', 350, 'Jessica White', '0000-00-00', '2 Weeks', 'Learn strategies for online marketing success.', '', 'Digital_Marketing.jpg', '', 'Marketing'),
(8, 'Financial Analysis', 400, 'George Lee', '0000-00-00', '2 Weeks', 'Analyze financial statements and trends.', '', 'Financial_Analysis.jpg', '', 'Finance'),
(9, 'Blockchain Technology', 700, 'Dr. William Clark', '0000-00-00', '4 Weeks', 'Understand blockchain and its applications.', '', 'Blockchain_Technology.jpg', '', 'Blockchain'),
(10, 'UI/UX Design', 450, 'Dr. Alice Green', '0000-00-00', '4 Weeks', 'Design user interfaces with a focus on user experience.', '', 'UI_UX_Design.jpg', '', 'Design'),
(11, 'Advanced Python Programming', 250, 'Dr. Laura Scott', '0000-00-00', '', 'Deep dive into advanced Python features and libraries.', '', 'Advanced_Python_Programming.jpg', '', 'Programming'),
(12, 'Machine Learning', 550, 'Dr. Daniel Martinez', '0000-00-00', '', 'Understand machine learning algorithms and their applications.', '', 'Machine_Learning.jpg', '', 'AI'),
(13, 'Basics of C++', 30, 'Osama Elzero', '2024-09-28', '4 Weeks', 'Learn the basics of C++ programming, including syntax, loops, functions, and object-oriented programming.', '', 'Basics_of_C++.jpg', '', 'Programming'),
(14, 'Advanced JavaScript', 300, 'Dr. Alice Williams', '0000-00-00', '4 Weeks', 'Deep dive into advanced JavaScript concepts including ES6, asynchronous programming, and more.', '', 'Advanced_JavaScript.jpg', '', 'Web Development'),
(15, 'Responsive Web Design with Bootstrap', 250, 'Sarah Mitchell', '0000-00-00', '3 Weeks', 'Learn to create responsive web designs using Bootstrap framework.', '', 'Responsive_Web_Design.jpg', '', 'Web Development'),
(16, 'Full Stack Web Development', 600, 'Dr. James Turner', '0000-00-00', '12 Weeks', 'Comprehensive course covering both front-end and back-end web development technologies.', '', 'Full_Stack_Web_Development.jpg', '', 'Web Development'),
(17, 'Deep Learning with TensorFlow', 700, 'Dr. Emily Clark', '0000-00-00', '8 Weeks', 'Learn to build and train deep learning models using TensorFlow.', '', 'Deep_Learning_TensorFlow.jpg', '', 'AI'),
(18, 'Natural Language Processing (NLP)', 550, 'Dr. Michael Johnson', '0000-00-00', '6 Weeks', 'Explore techniques and tools for processing and analyzing human language data.', '', 'NLP.jpg', '', 'AI'),
(19, 'AI for Business', 400, 'Dr. Lisa Brown', '0000-00-00', '4 Weeks', 'Understand how to leverage AI technologies to drive business decisions and strategies.', '', 'AI_for_Business.jpg', '', 'AI'),
(20, 'Java Programming for Beginners', 250, 'Dr. Linda White', '0000-00-00', '4 Weeks', 'Introduction to Java programming including basic syntax, control flow, and object-oriented principles.', '', 'Java_Programming_Beginners.jpg', '', 'Programming'),
(21, 'C# and .NET Development', 300, 'Dr. Alex Green', '0000-00-00', '6 Weeks', 'Learn C# programming and .NET framework for building robust applications.', 'This course covers everything from the fundamentals of C# programming to more advanced topics in the .NET framework. You\\\'ll learn C# syntax, object-oriented programming, and how to build scalable applications using ASP.NET Core.<br> The course is structured into modules that start from basic concepts and gradually move into complex topics like database integration with Entity Framework and building web applications.<br> By the end of the course, you\\\'ll have hands-on experience with building applications, debugging code, and deploying your own projects. This course is ideal for beginners and those looking to advance their skills in software development.', 'CSharp_NET_Development.jpg', 'https://www.youtube.com/embed/jYjNigSmPE8', 'Programming'),
(22, 'Introduction to Swift Programming', 280, 'Dr. Karen Smith', '0000-00-00', '5 Weeks', 'Learn Swift programming language for developing iOS applications.', '', 'Swift_Programming.jpg', '', 'Programming'),
(23, 'AI Ethics and Policy', 450, 'Dr. Helen Adams', '0000-00-00', '4 Weeks', 'Understand ethical considerations and policies related to AI.', '', 'AI_Ethics.jpg', '', 'AI'),
(24, 'Robotics and AI', 500, 'Dr. Thomas Harris', '0000-00-00', '6 Weeks', 'Explore the integration of AI in robotics and automation.', '', 'Robotics_and_AI.jpg', '', 'AI'),
(25, 'Introduction to Kotlin', 270, 'Dr. Laura Brown', '0000-00-00', '5 Weeks', 'Learn Kotlin programming language for modern Android development.', '', 'Kotlin_Introduction.jpg', '', 'Programming'),
(26, 'Database Programming with SQL', 320, 'Dr. Brian Smith', '0000-00-00', '6 Weeks', 'Master SQL programming for managing and querying databases.', '', 'Database_Programming.jpg', '', 'Programming'),
(27, 'Building Web Applications with React', 350, 'Dr. Emily Davis', '0000-00-00', '6 Weeks', 'Learn to build dynamic web applications using React.', '', 'React_Web_Applications.jpg', '', 'Web Development'),
(28, 'Introduction to Django', 300, 'Dr. David Clark', '0000-00-00', '5 Weeks', 'Get started with Django for building web applications in Python.', '', 'Django_Introduction.jpg', '', 'Web Development'),
(29, 'Introduction to JavaScript', 300, 'Dr. Robert Black', '0000-00-00', '5 Weeks', 'Learn the basics of JavaScript, including syntax, functions, and more.', '', 'JavaScript_Basics.jpg', '', 'Programming'),
(30, 'Advanced CSS Techniques', 350, 'Sarah Brown', '0000-00-00', '6 Weeks', 'Dive deep into advanced CSS techniques for modern web design.', '', 'Advanced_CSS.jpg', '', 'Web Development'),
(31, 'Responsive Web Design with Flexbox', 275, 'Michael Davis', '0000-00-00', '4 Weeks', 'Learn to create responsive web designs using Flexbox.', '', 'Flexbox_Design.jpg', '', 'Web Development'),
(32, 'Building E-commerce Websites', 400, 'Laura Wilson', '0000-00-00', '8 Weeks', 'Comprehensive course on building fully functional e-commerce websites.', '', 'ECommerce_Websites.jpg', '', 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `coursesmembership`
--

CREATE TABLE `coursesmembership` (
  `client` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(4, 'youssefosama@gmail.com', 'Youssef', '1234', 'Youssef', 'Osama', '01023411882⁩', 'Giza', 'Helwan'),
(19, 'khaled@gmail.com', 'KFC', '1234', 'Khaled', 'KAF', '01015032216', 'Egypt', 'Helwan'),
(20, 'abdo@gmail.com', 'Abdo', '1234', 'Abdo', 'Hany', '0109393193', 'Egypt', 'Helwan'),
(21, 'mosab@gmail.com', 'mosab', '1234', 'Mosab', 'Mohamed', '012381381991', 'Helwan', 'Hel'),

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
  MODIFY `Course_ID` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `informations`
--
ALTER TABLE `informations`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
