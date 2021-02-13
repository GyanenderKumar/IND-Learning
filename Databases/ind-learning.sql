-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 11:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ind-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `s_no` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `image_name` varchar(25) NOT NULL,
  `qualification` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`s_no`, `name`, `job_name`, `image_name`, `qualification`) VALUES
(1, 'Vedant', 'Co-Founder & Instructor', 'photo-1', 'He holds a Bachelor’s degree in Computer Science from India’s most premier institute - IIT Delhi and a Master’s degree in Computer Science from Stanford University. He is a coding enthusiast and has worked with bigwigs like Amazon and Facebook in the past.'),
(2, 'Aditi', 'Founding Member & Instructor', 'photo-2', 'She holds a Master’s from IIIT Delhi and has more than four years of teaching experience in advanced level C++, Java and Android courses. Her data analytics research work has been published in prestigious conferences.'),
(3, 'Atharv', 'Software Developer & Instructor', 'photo-3', ' He holds a Bachelor’s degree in Computer Science from Delhi Technological University (DTU) and is currently working with Coding Ninjas. He has contributed majorly towards CodeZen, an online platform of Coding Ninjas for students to learn and take attempts in coding.'),
(4, 'Rahul', 'Content Developer & Instructor', 'photo-4', 'He holds a Bachelor\'s degree in Information & Technology and has previously worked with firms like Ernst and Young. He works tirelessly for the student support and works closely with teaching assistants to enhance the student experience during their formative classes.');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `s_no` int(25) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `query_no` int(25) NOT NULL,
  `user_no` int(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`s_no`, `comment`, `query_no`, `user_no`, `user_name`, `date_time`) VALUES
(1, 'hello', 1, 1, 'gk', '2020-12-08 23:32:01'),
(2, 'my name is hello', 1, 1, 'gk', '2020-12-08 23:32:10'),
(3, 'This is method to create a linkedlist.', 2, 1, 'gk', '2020-12-17 16:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `s_no` int(25) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `suggestion` varchar(250) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`s_no`, `contact_name`, `contact_email`, `phone_number`, `message`, `suggestion`, `date_time`) VALUES
(1, 'gk', 'gk@gmail.com', 123, 'gk', 'gk', '2020-12-17 15:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `s_no` int(25) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_description` varchar(400) NOT NULL,
  `course_image_name` varchar(25) NOT NULL,
  `course_url` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`s_no`, `course_name`, `course_description`, `course_image_name`, `course_url`) VALUES
(1, 'C', 'C is a general-purpose, procedural computer programming language supporting structured programming, lexical variable scope, and recursion, with a static type system. By design, C provides constructs that map efficiently to typical machine instruction.', 'c', 'c'),
(2, 'Data Structure', 'In computer science, a data structure is a data organization, management, and storage format that enables efficient access and modification. More precisely, a data structure is a collection of data values, the relationships among them, and the functions or operations that can be applied to the data.', 'ds', 'ds'),
(3, 'SQL', 'SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system.', 'sql', 'sql'),
(4, 'C++', 'The C++ programming language was initially standardized in 1998 as ISO/IEC 14882:1998, which was then amended by the C++03, C++11 and C++14 standards. The current C++17 standard supersedes these with new features and an enlarged standard library.', 'cpp', 'cpp'),
(5, 'Java', 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.Java was originally developed by James Gosling at Sun Microsystems (which has since been acquired by Oracle) and released in 1995 as a core component of Sun Microsystems\' Java platform.', 'java', 'java'),
(6, 'HTML & CSS', 'Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', 'html', 'html');

-- --------------------------------------------------------

--
-- Table structure for table `querys`
--

CREATE TABLE `querys` (
  `s_no` int(25) NOT NULL,
  `query` varchar(250) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `page` int(25) NOT NULL,
  `user_no` int(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `date_time` datetime(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `querys`
--

INSERT INTO `querys` (`s_no`, `query`, `subject`, `page`, `user_no`, `user_name`, `date_time`) VALUES
(1, 'hello', 'c', 1, 1, 'gk', '2020-12-08 23:31:49.39604'),
(2, 'How to create a class of linkedlist by c language.', 'ds', 1, 2, 'Gyanender kumar', '2020-12-09 21:27:47.48479');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `s_no` int(25) NOT NULL,
  `test_name` varchar(250) NOT NULL,
  `test_description` varchar(250) NOT NULL,
  `test_rating` int(25) NOT NULL,
  `image_name` varchar(25) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`s_no`, `test_name`, `test_description`, `test_rating`, `image_name`, `date_time`) VALUES
(1, 'Sanjana', 'I had a great learning experience with ind-learning. The concepts were clearly explained by the teacher, especially the way Gaurav sir, makes it more fun and easy. It provided me a perfect foundation. ', 4, 'pic-1', '2020-12-17 14:48:40'),
(2, 'Ashish', 'The course structure was really good and covered most of the topics which attracted my attention. Each of the faculty member especially shivam sir did a great job taking each topic to a great clarity level. ', 5, 'pic-2', '2020-12-17 14:49:11'),
(3, 'Tanvi', 'My experience with ind-learning was great, both as a student and as a TA later on. The lectures were quite student friendly and the faculty here is amazing. It really helped me enhance my progrmmming skills. ', 3, 'pic-3', '2020-12-17 14:49:54'),
(4, 'Riya', 'ind-learning is a one stop destination for understanding data structures and building algorithms from scratch. With great quality online content and video support, difficult topics are presented in a simplified manner. ', 4, 'pic-4', '2020-12-17 14:50:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `s_no` int(25) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `date_time` datetime(5) NOT NULL DEFAULT current_timestamp(5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`s_no`, `user_name`, `user_email`, `user_password`, `date_time`) VALUES
(1, 'gk', 'gk@gmail.com', '$2y$10$7bK1H.2JmpjgXrnO0LW0pO5Sbcb/H.R/6U61q1aTZP2Wy5eEtdPW2', '2020-12-08 23:31:29.01153'),
(2, 'Gyanender kumar', 'gyankum@gmail.com', '$2y$10$x9UJEMk1ievnK//7RqKGwOCSLFgoe3yw4gF9gs5RiLT5qAfgpHwgi', '2020-12-09 21:26:08.51660');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`s_no`);
ALTER TABLE `comments` ADD FULLTEXT KEY `comment` (`comment`,`user_name`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`s_no`);
ALTER TABLE `courses` ADD FULLTEXT KEY `course_name` (`course_name`,`course_description`);

--
-- Indexes for table `querys`
--
ALTER TABLE `querys`
  ADD PRIMARY KEY (`s_no`);
ALTER TABLE `querys` ADD FULLTEXT KEY `query` (`query`,`subject`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `querys`
--
ALTER TABLE `querys`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `s_no` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
