-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 26, 2016 at 07:24 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `test_id`, `question`, `status`, `date_add`) VALUES
(1, 1, 'Which of the following is true about php variables', 1, '2016-06-26 00:00:00'),
(2, 1, 'Which of the following type of variables are whole numbers, without a decimal point, like 4195?', 1, '2016-06-26 00:00:00'),
(3, 1, 'Which of the following magic constant of PHP returns function name', 1, '2016-06-26 00:00:00'),
(4, 1, 'Which of the following operator is used to concatenate two strings', 1, '2016-06-26 00:00:00'),
(5, 1, 'Which of the following variable is used to generate random numbers using PHP', 1, '2016-06-26 00:00:00'),
(6, 1, 'Which of the following function checks if a specified value exists in an array', 1, '2016-06-26 00:00:00'),
(7, 1, 'Which of the following is used to create a session', 1, '2016-06-26 00:00:00'),
(8, 1, 'Which of the following is an associative array of variables passed to the current script via HTTP cookies', 1, '2016-06-26 00:00:00'),
(9, 1, 'Which of the following method of Exception class returns source line', 1, '2016-06-26 00:00:00'),
(10, 1, 'Which of the following method can be used to create a MySql database using PHP', 1, '2016-06-26 00:00:00'),
(11, 1, 'What is array_keys() used for', 1, '2016-06-26 00:00:00'),
(12, 1, 'In which variable is the users IP address stored', 1, '2016-06-26 00:00:00'),
(13, 1, 'How do we start a php session', 1, '2016-06-26 00:00:00'),
(14, 1, 'What is the default execution time set in set_time_limit()?', 1, '2016-06-26 00:00:00'),
(15, 1, 'What is x+ mode in fopen() used for', 1, '2016-06-26 00:00:00'),
(16, 1, 'How do I find out the number of parameters passed into function', 1, '2016-06-26 00:00:00'),
(17, 1, 'What happens if no file path is given in include() function', 1, '2016-06-26 00:00:00'),
(18, 1, 'How can we count the number of elements in an array', 1, '2016-06-26 00:00:00'),
(19, 1, 'What is the difference between echo and print', 1, '2016-06-26 00:00:00'),
(20, 1, 'Which function is used to strip whitespace (or other characters) from the beginning and end of a string', 1, '2016-06-26 00:00:00'),
(21, 2, 'Which of the following is correct about CSS', 1, '2016-06-26 00:00:00'),
(22, 2, 'Which of the following is correct about CSS', 1, '2016-06-26 00:00:00'),
(23, 2, 'Which of the following is a component of CSS style rule', 1, '2016-06-26 00:00:00'),
(24, 2, 'Which of the following selector matches all elements of a type', 1, '2016-06-26 00:00:00'),
(25, 2, 'Which of the following selector matches the name of any element type', 1, '2016-06-26 00:00:00'),
(26, 2, 'Which of the following selector matches a particular element only when it lies inside a particular element', 1, '2016-06-26 00:00:00'),
(27, 2, 'Which of the following selector matches a element based on its class attribute', 1, '2016-06-26 00:00:00'),
(28, 2, 'Which of the following selector matches an element based on its id', 1, '2016-06-26 00:00:00'),
(31, 2, 'Which of the following selector selects all paragraph elements with a lang attribute', 1, '2016-06-26 00:00:00'),
(32, 2, 'Which of the following selector selects all paragraph elements whose lang attribute has a value of exactly "fr"', 1, '2016-06-26 00:00:00'),
(33, 2, 'Which of the following selector selects all paragraph elements whose lang attribute contains the word "fr"', 1, '2016-06-26 00:00:00'),
(34, 2, 'Which of the following selector selects all paragraph elements whose lang attribute contains values that are exactly "fr", or begin with "fr-"', 1, '2016-06-26 00:00:00'),
(35, 2, 'Which of the following is a way to associate styles with your HTML document', 1, '2016-06-26 00:00:00'),
(36, 2, 'Which of the following is a way to associate styles with your HTML document', 1, '2016-06-26 00:00:00'),
(37, 2, 'Which of the following is a true about CSS style overriding', 1, '2016-06-26 00:00:00'),
(38, 2, 'Which of the following defines a measurement as a percentage relative to another value, typically an enclosing element', 1, '2016-06-26 00:00:00'),
(39, 2, 'Which of the following defines a measurement in centimeters', 1, '2016-06-26 00:00:00'),
(40, 2, 'Which of the following defines a relative measurement for the height of a font in em spaces', 1, '2016-06-26 00:00:00'),
(41, 2, 'Which of the following defines a measurement relative to a font is x-height', 1, '2016-06-26 00:00:00'),
(42, 2, 'Which of the following defines a measurement in inches', 1, '2016-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question_option`
--

CREATE TABLE `question_option` (
  `question_option_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `correct_option` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `status`, `date_add`) VALUES
(1, 'Simon', 'Gonzalez', 'ximonali@gmail.com', 'student', '4168357552', '28 blakemanor blvd', 1, '2016-06-24 18:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

CREATE TABLE `student_test` (
  `student_test_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_test_answer`
--

CREATE TABLE `student_test_answer` (
  `student_test_answer_id` int(11) NOT NULL,
  `student_test_id` int(11) NOT NULL,
  `question_option_id` int(11) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `total_question` int(11) NOT NULL,
  `pass_score` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `name`, `description`, `total_question`, `pass_score`, `time`, `status`, `date_add`) VALUES
(1, 'PHP', 'Course Description, bla bla', 20, 90, 15, 0, '2016-06-26 00:00:00'),
(2, 'CSS', 'Course Description, some info ', 20, 85, 10, 0, '2016-06-26 00:00:00'),
(3, 'JavaScript', 'Description, Bla bla', 20, 80, 20, 1, '2016-06-26 00:00:00'),
(4, 'HTML5', 'Description, Bla bla html', 20, 90, 20, 1, '2016-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`user_id`, `first_name`, `last_name`, `email`, `password`, `status`, `date_add`) VALUES
(1, 'Simon', 'Gonzalez', 'ximonali@gmail.com', 'admin', 1, '2016-06-25 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `question_option`
--
ALTER TABLE `question_option`
  ADD PRIMARY KEY (`question_option_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_test`
--
ALTER TABLE `student_test`
  ADD PRIMARY KEY (`student_test_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `test_id` (`test_id`);

--
-- Indexes for table `student_test_answer`
--
ALTER TABLE `student_test_answer`
  ADD PRIMARY KEY (`student_test_answer_id`),
  ADD KEY `student_test_id` (`student_test_id`),
  ADD KEY `question_option_id` (`question_option_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `question_option`
--
ALTER TABLE `question_option`
  MODIFY `question_option_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_test`
--
ALTER TABLE `student_test`
  MODIFY `student_test_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_test_answer`
--
ALTER TABLE `student_test_answer`
  MODIFY `student_test_answer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);

--
-- Constraints for table `question_option`
--
ALTER TABLE `question_option`
  ADD CONSTRAINT `question_option_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`);

--
-- Constraints for table `student_test`
--
ALTER TABLE `student_test`
  ADD CONSTRAINT `student_test_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `student_test_ibfk_2` FOREIGN KEY (`test_id`) REFERENCES `test` (`test_id`);

--
-- Constraints for table `student_test_answer`
--
ALTER TABLE `student_test_answer`
  ADD CONSTRAINT `student_test_answer_ibfk_1` FOREIGN KEY (`student_test_id`) REFERENCES `student_test` (`student_test_id`),
  ADD CONSTRAINT `student_test_answer_ibfk_2` FOREIGN KEY (`question_option_id`) REFERENCES `question_option` (`question_option_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
