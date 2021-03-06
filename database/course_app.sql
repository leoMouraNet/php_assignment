-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 07:27 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `image`, `status`, `date_add`) VALUES
(1, 'Beginner Course', 'beginner.png', 1, '2016-06-01 00:00:00'),
(2, 'Advanced Course', 'advanced.png', 1, '2016-06-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `question` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`question_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

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
(29, 2, 'Which of the following selector selects all paragraph elements with a lang attribute', 1, '2016-06-26 00:00:00'),
(30, 2, 'Which of the following selector selects all paragraph elements whose lang attribute has a value of exactly "fr"', 1, '2016-06-26 00:00:00'),
(31, 2, 'Which of the following selector selects all paragraph elements whose lang attribute contains the word "fr"', 1, '2016-06-26 00:00:00'),
(32, 2, 'Which of the following selector selects all paragraph elements whose lang attribute contains values that are exactly "fr", or begin with "fr-"', 1, '2016-06-26 00:00:00'),
(33, 2, 'Which of the following is a way to associate styles with your HTML document', 1, '2016-06-26 00:00:00'),
(34, 2, 'Which of the following is a way to associate styles with your HTML document', 1, '2016-06-26 00:00:00'),
(35, 2, 'Which of the following is a true about CSS style overriding', 1, '2016-06-26 00:00:00'),
(36, 2, 'Which of the following defines a measurement as a percentage relative to another value, typically an enclosing element', 1, '2016-06-26 00:00:00'),
(37, 2, 'Which of the following defines a measurement in centimeters', 1, '2016-06-26 00:00:00'),
(38, 2, 'Which of the following defines a relative measurement for the height of a font in em spaces', 1, '2016-06-26 00:00:00'),
(39, 2, 'Which of the following defines a measurement relative to a font is x-height', 1, '2016-06-26 00:00:00'),
(40, 2, 'Which of the following defines a measurement in inches', 1, '2016-06-26 00:00:00'),
(41, 3, 'Which built-in method calls a function for each element in the array?', 1, '2016-06-26 00:00:00'),
(42, 3, 'Which built-in method returns the index within the calling String object of the first occurrence of the specified value?', 1, '2016-06-26 00:00:00'),
(43, 3, 'Which built-in method returns the length of the string?', 1, '2016-06-26 00:00:00'),
(44, 3, 'Which built-in method removes the last element from an array and returns that element?', 1, '2016-06-26 00:00:00'),
(45, 3, 'Which built-in method adds one or more elements to the end of an array and returns the new length of the array?', 1, '2016-06-26 00:00:00'),
(46, 3, 'Which built-in method reverses the order of the elements of an array?', 1, '2016-06-26 00:00:00'),
(47, 3, 'Which built-in method sorts the elements of an array?', 1, '2016-06-26 00:00:00'),
(48, 3, 'Which built-in method returns the characters in a string beginning at the specified location?', 1, '2016-06-26 00:00:00'),
(49, 3, 'Which built-in method returns the calling string value converted to lower case?', 1, '2016-06-26 00:00:00'),
(50, 3, 'Which built-in method returns the calling string value converted to upper case?', 1, '2016-06-26 00:00:00'),
(51, 3, 'Which built-in method returns the string representation of the numbers value?', 1, '2016-06-26 00:00:00'),
(52, 3, 'Which of the following function of Boolean object returns the primitive value of the Boolean object?', 1, '2016-06-26 00:00:00'),
(53, 3, 'Which of the following code creates an object?', 1, '2016-06-26 00:00:00'),
(54, 3, 'Which of the following function of Number object forces a number to display in exponential notation?', 1, '2016-06-26 00:00:00'),
(55, 3, 'Which of the following function of Number object formats a number with a specific number of digits to the right of the decimal?', 1, '2016-06-26 00:00:00'),
(56, 3, 'Which of the following function of Number object returns a string value version of the current number in a format that may vary according to a browsers locale settings?', 1, '2016-06-26 00:00:00'),
(57, 3, 'Which of the following function of Number object defines how many total digits to display of a number?', 1, '2016-06-26 00:00:00'),
(58, 3, 'Which of the following function of Number object returns a string value version of the current number?', 1, '2016-06-26 00:00:00'),
(59, 3, 'Which of the following function of Number object returns the numbers value?', 1, '2016-06-26 00:00:00'),
(60, 3, 'Which of the following function of Boolean object returns a string containing the source of the Boolean object?', 1, '2016-06-26 00:00:00'),
(61, 4, 'Which of the following is true about HTML 5?', 1, '2016-06-26 00:00:00'),
(62, 4, 'Which of the following feature is a part of HTML 5?', 1, '2016-06-26 00:00:00'),
(63, 4, 'Which of the following feature is a part of HTML 5?', 1, '2016-06-26 00:00:00'),
(64, 4, 'Which of the following browser supports HTML5 in its latest version?', 1, '2016-06-26 00:00:00'),
(65, 4, 'Which of the following browser supports HTML5 in its latest version?', 1, '2016-06-26 00:00:00'),
(66, 4, 'Which of the following browser supports HTML5 in its latest version?', 1, '2016-06-26 00:00:00'),
(67, 4, 'Which of the following is correct about Web form 2.0 in HTML5?', 1, '2016-06-26 00:00:00'),
(68, 4, 'Which of the following input control represents a date and time (year, month, day, hour, minute, second, fractions of a second) encoded according to ISO 8601 with the time zone set to UTC in Web Form 2.0?', 1, '2016-06-26 00:00:00'),
(69, 4, 'Which of the following tag represents a generic document or application section in HTML5?', 1, '2016-06-26 00:00:00'),
(70, 4, 'Which of the following tag represents an independent piece of content of a document in HTML5?', 1, '2016-06-26 00:00:00'),
(71, 4, 'Which of the following tag represents a piece of content that is only slightly related to the rest of the page in HTML5?', 1, '2016-06-26 00:00:00'),
(72, 4, 'Which of the following tag represents the header of a section in HTML5?', 1, '2016-06-26 00:00:00'),
(73, 4, 'Which of the following tag represents the footer of a section in HTML5?', 1, '2016-06-26 00:00:00'),
(74, 4, 'Which of the following tag represents a section of the document intended for navigation in HTML5?', 1, '2016-06-26 00:00:00'),
(75, 4, 'Which of the following tag represents a section of the document intended for navigation in HTML5?', 1, '2016-06-26 00:00:00'),
(76, 4, 'Which of the following tag can be used to mark up a conversation in HTML5?', 1, '2016-06-26 00:00:00'),
(77, 4, 'Which of the following tag can be used to associate a caption together with some embedded content in HTML5?', 1, '2016-06-26 00:00:00'),
(78, 4, 'Which of the following is correct about custom attributes in HTML5?', 1, '2016-06-26 00:00:00'),
(79, 4, 'Which of the following is correct about custom attributes in HTML5?', 1, '2016-06-26 00:00:00'),
(80, 4, 'Which of the following is correct about Web form 2.0 in HTML5?', 1, '2016-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `question_option`
--

DROP TABLE IF EXISTS `question_option`;
CREATE TABLE IF NOT EXISTS `question_option` (
  `question_option_id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `correct_option` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`question_option_id`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB AUTO_INCREMENT=321 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_option`
--

INSERT INTO `question_option` (`question_option_id`, `question_id`, `description`, `correct_option`, `status`, `date_add`) VALUES
(1, 1, 'All variables in PHP are denoted with a leading dollar sign ($).', 0, 1, '2016-06-26 00:00:00'),
(2, 1, 'The value of a variable is the value of its most recent assignment.', 0, 1, '2016-06-26 00:00:00'),
(3, 1, 'Variables are assigned with the = operator, with the variable on the left-hand side and the expression to be evaluated on the right.', 0, 1, '2016-06-26 00:00:00'),
(4, 1, 'All of the above.', 1, 1, '2016-06-26 00:00:00'),
(5, 2, 'Integers', 1, 1, '2016-06-26 00:00:00'),
(6, 2, 'Doubles', 0, 1, '2016-06-26 00:00:00'),
(7, 2, 'Booleans', 0, 1, '2016-06-26 00:00:00'),
(8, 2, 'Strings', 0, 1, '2016-06-26 00:00:00'),
(9, 3, '_LINE_', 0, 1, '2016-06-26 00:00:00'),
(10, 3, '_FILE_', 0, 1, '2016-06-26 00:00:00'),
(11, 3, '_FUNCTION_', 1, 1, '2016-06-26 00:00:00'),
(12, 3, '_CLASS_', 0, 1, '2016-06-26 00:00:00'),
(13, 4, '.', 1, 1, '2016-06-26 00:00:00'),
(14, 4, '+', 0, 1, '2016-06-26 00:00:00'),
(15, 4, 'append', 0, 1, '2016-06-26 00:00:00'),
(16, 4, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(17, 5, 'srand()', 0, 1, '2016-06-26 00:00:00'),
(18, 5, 'rand()', 1, 1, '2016-06-26 00:00:00'),
(19, 5, 'random()', 0, 1, '2016-06-26 00:00:00'),
(20, 5, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(21, 6, 'extract()', 0, 1, '2016-06-26 00:00:00'),
(22, 6, 'in_array()', 1, 1, '2016-06-26 00:00:00'),
(23, 6, 'key()', 0, 1, '2016-06-26 00:00:00'),
(24, 6, 'krsort()', 0, 1, '2016-06-26 00:00:00'),
(25, 7, 'session_start() function', 1, 1, '2016-06-26 00:00:00'),
(26, 7, '$_SESSION[]', 0, 1, '2016-06-26 00:00:00'),
(27, 7, 'isset() function', 0, 1, '2016-06-26 00:00:00'),
(28, 7, 'session_destroy() function', 0, 1, '2016-06-26 00:00:00'),
(29, 8, '$GLOBALS', 0, 1, '2016-06-26 00:00:00'),
(30, 8, '$_SERVER', 0, 1, '2016-06-26 00:00:00'),
(31, 8, '$_COOKIE', 1, 1, '2016-06-26 00:00:00'),
(32, 8, '$_SESSION', 0, 1, '2016-06-26 00:00:00'),
(33, 9, 'getMessage()', 0, 1, '2016-06-26 00:00:00'),
(34, 9, 'getCode()', 0, 1, '2016-06-26 00:00:00'),
(35, 9, 'getFile()', 0, 1, '2016-06-26 00:00:00'),
(36, 9, 'getLine()', 1, 1, '2016-06-26 00:00:00'),
(37, 10, 'mysql_connect()', 0, 1, '2016-06-26 00:00:00'),
(38, 10, 'mysql_query()', 1, 1, '2016-06-26 00:00:00'),
(39, 10, 'mysql_close()', 0, 1, '2016-06-26 00:00:00'),
(40, 10, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(41, 11, 'Compares array keys, and returns the matches', 0, 1, '2016-06-26 00:00:00'),
(42, 11, 'Checks if the specified key exists in the array', 0, 1, '2016-06-26 00:00:00'),
(43, 11, 'Returns all the keys of an array', 1, 1, '2016-06-26 00:00:00'),
(44, 11, 'Both b and c', 0, 1, '2016-06-26 00:00:00'),
(45, 12, '$DOMAIN', 0, 1, '2016-06-26 00:00:00'),
(46, 12, '$REMOTE_ADDR', 1, 1, '2016-06-26 00:00:00'),
(47, 12, '$GLOBALS', 0, 1, '2016-06-26 00:00:00'),
(48, 12, '$_ENV', 0, 1, '2016-06-26 00:00:00'),
(49, 13, 'Using session_start()', 1, 1, '2016-06-26 00:00:00'),
(50, 13, 'Using session_register()', 0, 1, '2016-06-26 00:00:00'),
(51, 13, 'Using the variable $_SESSION', 0, 1, '2016-06-26 00:00:00'),
(52, 13, 'Using session_set()', 0, 1, '2016-06-26 00:00:00'),
(53, 14, '20 secs', 0, 1, '2016-06-26 00:00:00'),
(54, 14, '30 secs', 1, 1, '2016-06-26 00:00:00'),
(55, 14, '40 secs', 0, 1, '2016-06-26 00:00:00'),
(56, 14, '35 secs', 0, 1, '2016-06-26 00:00:00'),
(57, 15, 'Read/Write. Creates a new file. Returns FALSE and an error if file already exists', 1, 1, '2016-06-26 00:00:00'),
(58, 15, 'Write only. Creates a new file. Returns TRUE and an error if file already exists', 0, 1, '2016-06-26 00:00:00'),
(59, 15, 'Read/Write. Opens and clears the contents of file.', 0, 1, '2016-06-26 00:00:00'),
(60, 15, 'Write. Opens and clears the contents of file.', 0, 1, '2016-06-26 00:00:00'),
(61, 16, 'By using func_num_args()', 1, 1, '2016-06-26 00:00:00'),
(62, 16, 'By using func_get_arg()', 0, 1, '2016-06-26 00:00:00'),
(63, 16, 'By using func_get_args()', 0, 1, '2016-06-26 00:00:00'),
(64, 16, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(65, 17, 'PHP continues to execute the script.', 0, 1, '2016-06-26 00:00:00'),
(66, 17, 'Results in a fatal error.', 0, 1, '2016-06-26 00:00:00'),
(67, 17, 'Include_path is made use of.', 1, 1, '2016-06-26 00:00:00'),
(68, 17, 'It haults the script.', 0, 1, '2016-06-26 00:00:00'),
(69, 18, 'Using sizeof()', 0, 1, '2016-06-26 00:00:00'),
(70, 18, 'count()', 0, 1, '2016-06-26 00:00:00'),
(71, 18, 'Writing a user defined function and using array_search()', 0, 1, '2016-06-26 00:00:00'),
(72, 18, 'Both a and b', 1, 1, '2016-06-26 00:00:00'),
(73, 19, 'They both behave the same.', 0, 1, '2016-06-26 00:00:00'),
(74, 19, 'Print can take multiple parameters where as echo cannot', 0, 1, '2016-06-26 00:00:00'),
(75, 19, 'Echo can take multiple parameters where as print cannot', 1, 1, '2016-06-26 00:00:00'),
(76, 19, 'Print is a function where as echo is not.', 0, 1, '2016-06-26 00:00:00'),
(77, 20, 'trim_str', 0, 1, '2016-06-26 00:00:00'),
(78, 20, 'strip_str', 0, 1, '2016-06-26 00:00:00'),
(79, 20, 'strip', 0, 1, '2016-06-26 00:00:00'),
(80, 20, 'trim', 1, 1, '2016-06-26 00:00:00'),
(81, 21, 'CSS is used to control the style of a web document in a simple and easy way.', 0, 1, '2016-06-26 00:00:00'),
(82, 21, 'CSS is the acronym for Cascading Style Sheet.', 0, 1, '2016-06-26 00:00:00'),
(83, 21, 'You can write CSS once and then reuse same sheet in multiple HTML pages.', 0, 1, '2016-06-26 00:00:00'),
(84, 21, 'All of the above.', 1, 1, '2016-06-26 00:00:00'),
(85, 22, 'Style sheets allow content to be optimized for more than one type of device.', 0, 1, '2016-06-26 00:00:00'),
(86, 22, 'CSS can store web applications locally with the help of an offline catche.', 0, 1, '2016-06-26 00:00:00'),
(87, 22, 'Using CSS, we can view offline websites.The cache also ensures faster loading and better overall performance of the website.', 0, 1, '2016-06-26 00:00:00'),
(88, 22, 'All of the above.', 1, 1, '2016-06-26 00:00:00'),
(89, 23, 'Selector', 0, 1, '2016-06-26 00:00:00'),
(90, 23, 'Property', 0, 1, '2016-06-26 00:00:00'),
(91, 23, 'Value', 0, 1, '2016-06-26 00:00:00'),
(92, 23, 'All of the above.', 1, 1, '2016-06-26 00:00:00'),
(93, 24, 'The Type Selector', 1, 1, '2016-06-26 00:00:00'),
(94, 24, 'The Universal Selector', 0, 1, '2016-06-26 00:00:00'),
(95, 24, 'The Descendant Selector', 0, 1, '2016-06-26 00:00:00'),
(96, 24, 'The Class Selector', 0, 1, '2016-06-26 00:00:00'),
(97, 25, 'The Type Selector', 0, 1, '2016-06-26 00:00:00'),
(98, 25, 'The Universal Selector', 1, 1, '2016-06-26 00:00:00'),
(99, 25, 'The Descendant Selector', 0, 1, '2016-06-26 00:00:00'),
(100, 25, 'The Class Selector', 0, 1, '2016-06-26 00:00:00'),
(101, 26, 'The Type Selector', 0, 1, '2016-06-26 00:00:00'),
(102, 26, 'The Universal Selector', 0, 1, '2016-06-26 00:00:00'),
(103, 26, 'The Descendant Selector', 1, 1, '2016-06-26 00:00:00'),
(104, 26, 'The Class Selector', 0, 1, '2016-06-26 00:00:00'),
(105, 27, 'The Type Selector', 0, 1, '2016-06-26 00:00:00'),
(106, 27, 'The Universal Selector', 0, 1, '2016-06-26 00:00:00'),
(107, 27, 'The Descendant Selector', 0, 1, '2016-06-26 00:00:00'),
(108, 27, 'The Class Selector', 1, 1, '2016-06-26 00:00:00'),
(109, 28, 'The Id Selector', 1, 1, '2016-06-26 00:00:00'),
(110, 28, 'The Universal Selector', 0, 1, '2016-06-26 00:00:00'),
(111, 28, 'The Descendant Selector', 0, 1, '2016-06-26 00:00:00'),
(112, 28, 'The Class Selector', 0, 1, '2016-06-26 00:00:00'),
(113, 29, 'p[lang]', 1, 1, '2016-06-26 00:00:00'),
(114, 29, 'p[lang="fr"]', 0, 1, '2016-06-26 00:00:00'),
(115, 29, 'p[lang~="fr"]', 0, 1, '2016-06-26 00:00:00'),
(116, 29, 'p[lang|="fr"]', 0, 1, '2016-06-26 00:00:00'),
(117, 30, 'p[lang]', 0, 1, '2016-06-26 00:00:00'),
(118, 30, 'p[lang="fr"]', 1, 1, '2016-06-26 00:00:00'),
(119, 30, 'p[lang~="fr"]', 0, 1, '2016-06-26 00:00:00'),
(120, 30, 'p[lang|="fr"]', 0, 1, '2016-06-26 00:00:00'),
(121, 31, 'p[lang]', 0, 1, '2016-06-26 00:00:00'),
(122, 31, 'p[lang="fr"]', 0, 1, '2016-06-26 00:00:00'),
(123, 31, 'p[lang~="fr"]', 1, 1, '2016-06-26 00:00:00'),
(124, 31, 'p[lang|="fr"]', 0, 1, '2016-06-26 00:00:00'),
(125, 32, 'p[lang]', 0, 1, '2016-06-26 00:00:00'),
(126, 32, 'p[lang="fr"]', 0, 1, '2016-06-26 00:00:00'),
(127, 32, 'p[lang~="fr"]', 0, 1, '2016-06-26 00:00:00'),
(128, 32, 'p[lang|="fr"]', 1, 1, '2016-06-26 00:00:00'),
(129, 33, 'Embedded CSS - The style Element', 0, 1, '2016-06-26 00:00:00'),
(130, 33, 'Inline CSS - The style Attribute', 0, 1, '2016-06-26 00:00:00'),
(131, 33, 'Both of the above', 1, 1, '2016-06-26 00:00:00'),
(132, 33, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(133, 34, 'External CSS - TheÂ Element', 0, 1, '2016-06-26 00:00:00'),
(134, 34, 'Imported CSS - @import Rule', 0, 1, '2016-06-26 00:00:00'),
(135, 34, 'Both of the above.', 1, 1, '2016-06-26 00:00:00'),
(136, 34, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(137, 35, 'Any inline style sheet takes highest priority. So, it will override any rule defined inÂ tags or rules defined in any external style sheet file.', 0, 1, '2016-06-26 00:00:00'),
(138, 35, 'Any rule defined inÂ tags will override rules defined in any external style sheet file.', 0, 1, '2016-06-26 00:00:00'),
(139, 35, 'Any rule defined in external style sheet file takes lowest priority, and rules defined in this file will be applied only when above two rules are not applicable.', 0, 1, '2016-06-26 00:00:00'),
(140, 35, 'All of the above.', 1, 1, '2016-06-26 00:00:00'),
(141, 36, '%', 1, 1, '2016-06-26 00:00:00'),
(142, 36, 'cm', 0, 1, '2016-06-26 00:00:00'),
(143, 36, 'em', 0, 1, '2016-06-26 00:00:00'),
(144, 36, 'ex', 0, 1, '2016-06-26 00:00:00'),
(145, 37, '%', 0, 1, '2016-06-26 00:00:00'),
(146, 37, 'cm', 1, 1, '2016-06-26 00:00:00'),
(147, 37, 'em', 0, 1, '2016-06-26 00:00:00'),
(148, 37, 'ex', 0, 1, '2016-06-26 00:00:00'),
(149, 38, '%', 0, 1, '2016-06-26 00:00:00'),
(150, 38, 'cm', 0, 1, '2016-06-26 00:00:00'),
(151, 38, 'em', 1, 1, '2016-06-26 00:00:00'),
(152, 38, 'ex', 0, 1, '2016-06-26 00:00:00'),
(153, 39, '%', 0, 1, '2016-06-26 00:00:00'),
(154, 39, 'cm', 0, 1, '2016-06-26 00:00:00'),
(155, 39, 'em', 0, 1, '2016-06-26 00:00:00'),
(156, 39, 'ex', 1, 1, '2016-06-26 00:00:00'),
(157, 40, 'in', 1, 1, '2016-06-26 00:00:00'),
(158, 40, 'mm', 0, 1, '2016-06-26 00:00:00'),
(159, 40, 'pc', 0, 1, '2016-06-26 00:00:00'),
(160, 40, 'pt', 0, 1, '2016-06-26 00:00:00'),
(161, 41, 'while()', 0, 1, '2016-06-26 00:00:00'),
(162, 41, 'loop()', 0, 1, '2016-06-26 00:00:00'),
(163, 41, 'forEach()', 1, 1, '2016-06-26 00:00:00'),
(164, 41, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(165, 42, 'getIndex()', 0, 1, '2016-06-26 00:00:00'),
(166, 42, 'location()', 0, 1, '2016-06-26 00:00:00'),
(167, 42, 'indexOf()', 1, 1, '2016-06-26 00:00:00'),
(168, 42, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(169, 43, 'length()', 1, 1, '2016-06-26 00:00:00'),
(170, 43, 'size()', 0, 1, '2016-06-26 00:00:00'),
(171, 43, 'index()', 0, 1, '2016-06-26 00:00:00'),
(172, 43, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(173, 44, 'last()', 0, 1, '2016-06-26 00:00:00'),
(174, 44, 'get()', 0, 1, '2016-06-26 00:00:00'),
(175, 44, 'pop()', 1, 1, '2016-06-26 00:00:00'),
(176, 44, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(177, 45, 'last()', 0, 1, '2016-06-26 00:00:00'),
(178, 45, 'put()', 0, 1, '2016-06-26 00:00:00'),
(179, 45, 'push()', 1, 1, '2016-06-26 00:00:00'),
(180, 45, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(181, 46, 'changeOrder(order)', 0, 1, '2016-06-26 00:00:00'),
(182, 46, 'reverse()', 1, 1, '2016-06-26 00:00:00'),
(183, 46, 'sort(order)', 0, 1, '2016-06-26 00:00:00'),
(184, 46, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(185, 47, 'changeOrder(order)', 0, 1, '2016-06-26 00:00:00'),
(186, 47, 'order()', 0, 1, '2016-06-26 00:00:00'),
(187, 47, 'sort()', 1, 1, '2016-06-26 00:00:00'),
(188, 47, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(189, 48, 'substr()', 1, 1, '2016-06-26 00:00:00'),
(190, 48, 'getSubstring()', 0, 1, '2016-06-26 00:00:00'),
(191, 48, 'slice()', 0, 1, '2016-06-26 00:00:00'),
(192, 48, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(193, 49, 'toLowerCase()', 1, 1, '2016-06-26 00:00:00'),
(194, 49, 'toLower()', 0, 1, '2016-06-26 00:00:00'),
(195, 49, 'changeCase(case)', 0, 1, '2016-06-26 00:00:00'),
(196, 49, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(197, 50, 'toUpperCase() ', 1, 1, '2016-06-26 00:00:00'),
(198, 50, 'toUpper()', 0, 1, '2016-06-26 00:00:00'),
(199, 50, 'changeCase(case)', 0, 1, '2016-06-26 00:00:00'),
(200, 50, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(201, 51, 'toValue()', 0, 1, '2016-06-26 00:00:00'),
(202, 51, 'toNumber()', 0, 1, '2016-06-26 00:00:00'),
(203, 51, 'toString()', 1, 1, '2016-06-26 00:00:00'),
(204, 51, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(205, 52, 'toSource()', 0, 1, '2016-06-26 00:00:00'),
(206, 52, 'valueOf()', 1, 1, '2016-06-26 00:00:00'),
(207, 52, 'toString()', 0, 1, '2016-06-26 00:00:00'),
(208, 52, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(209, 53, 'var book = Object();', 0, 1, '2016-06-26 00:00:00'),
(210, 53, 'var book = new Object();', 1, 1, '2016-06-26 00:00:00'),
(211, 53, 'var book = new OBJECT();', 0, 1, '2016-06-26 00:00:00'),
(212, 53, 'var book = new Book();', 0, 1, '2016-06-26 00:00:00'),
(213, 54, 'toExponential()', 1, 1, '2016-06-26 00:00:00'),
(214, 54, 'toFixed()', 0, 1, '2016-06-26 00:00:00'),
(215, 54, 'toPrecision()', 0, 1, '2016-06-26 00:00:00'),
(216, 54, 'toLocaleString()', 0, 1, '2016-06-26 00:00:00'),
(217, 55, 'toExponential()', 0, 1, '2016-06-26 00:00:00'),
(218, 55, 'toFixed()', 1, 1, '2016-06-26 00:00:00'),
(219, 55, 'toPrecision()', 0, 1, '2016-06-26 00:00:00'),
(220, 55, 'toLocaleString()', 0, 1, '2016-06-26 00:00:00'),
(221, 56, 'toExponential()', 0, 1, '2016-06-26 00:00:00'),
(222, 56, 'toFixed()', 0, 1, '2016-06-26 00:00:00'),
(223, 56, 'toLocaleString()', 1, 1, '2016-06-26 00:00:00'),
(224, 56, 'toString()', 0, 1, '2016-06-26 00:00:00'),
(225, 57, 'toExponential()', 0, 1, '2016-06-26 00:00:00'),
(226, 57, 'toFixed()', 0, 1, '2016-06-26 00:00:00'),
(227, 57, 'toLocaleString()', 0, 1, '2016-06-26 00:00:00'),
(228, 57, 'toPrecision()', 1, 1, '2016-06-26 00:00:00'),
(229, 58, 'toString()', 1, 1, '2016-06-26 00:00:00'),
(230, 58, 'toFixed()', 0, 1, '2016-06-26 00:00:00'),
(231, 58, 'toLocaleString()', 0, 1, '2016-06-26 00:00:00'),
(232, 58, 'toPrecision()', 0, 1, '2016-06-26 00:00:00'),
(233, 59, 'toString()', 0, 1, '2016-06-26 00:00:00'),
(234, 59, 'valueOf()', 1, 1, '2016-06-26 00:00:00'),
(235, 59, 'toLocaleString()', 0, 1, '2016-06-26 00:00:00'),
(236, 59, 'toPrecision()', 0, 1, '2016-06-26 00:00:00'),
(237, 60, 'toSource()', 1, 1, '2016-06-26 00:00:00'),
(238, 60, 'valueOf()', 0, 1, '2016-06-26 00:00:00'),
(239, 60, 'toString()', 0, 1, '2016-06-26 00:00:00'),
(240, 60, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(241, 61, 'HTML5 is the next major revision of the HTML standard superseding HTML 4.01, XHTML 1.0, and XHTML 1.1.', 0, 1, '2016-06-26 00:00:00'),
(242, 61, 'HTML5 is a standard for structuring and presenting content on the World Wide Web.', 0, 1, '2016-06-26 00:00:00'),
(243, 61, 'HTML5 is a cooperation between the World Wide Web Consortium (W3C) and the Web Hypertext Application Technology Working Group (WHATWG).', 0, 1, '2016-06-26 00:00:00'),
(244, 61, 'All of the above', 1, 1, '2016-06-26 00:00:00'),
(245, 62, 'Persistent Local Storage', 0, 1, '2016-06-26 00:00:00'),
(246, 62, 'WebSocket', 0, 1, '2016-06-26 00:00:00'),
(247, 62, 'Server-Sent Events', 0, 1, '2016-06-26 00:00:00'),
(248, 62, 'All of the above', 1, 1, '2016-06-26 00:00:00'),
(249, 63, 'Canvas', 0, 1, '2016-06-26 00:00:00'),
(250, 63, 'Audio & Video', 0, 1, '2016-06-26 00:00:00'),
(251, 63, 'Geolocation', 0, 1, '2016-06-26 00:00:00'),
(252, 63, 'All of the above', 1, 1, '2016-06-26 00:00:00'),
(253, 64, 'Apple Safari', 0, 1, '2016-06-26 00:00:00'),
(254, 64, 'Google Chrome', 0, 1, '2016-06-26 00:00:00'),
(255, 64, 'Both of the above', 1, 1, '2016-06-26 00:00:00'),
(256, 64, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(257, 65, 'Mozilla Firefox', 0, 1, '2016-06-26 00:00:00'),
(258, 65, 'Opera', 0, 1, '2016-06-26 00:00:00'),
(259, 65, 'Both of the above', 1, 1, '2016-06-26 00:00:00'),
(260, 65, 'None of the above', 0, 1, '2016-06-26 00:00:00'),
(261, 66, 'Mozilla Firefox', 0, 1, '2016-06-26 00:00:00'),
(262, 66, 'Opera', 0, 1, '2016-06-26 00:00:00'),
(263, 66, 'Both of the above.', 1, 1, '2016-06-26 00:00:00'),
(264, 66, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(265, 67, 'Web Forms 2.0 is an extension to the forms features found in HTML4.', 0, 1, '2016-06-26 00:00:00'),
(266, 67, 'Form elements and attributes in HTML5 provide a greater degree of semantic mark-up than HTML4.', 0, 1, '2016-06-26 00:00:00'),
(267, 67, 'Form elements and attributes in HTML5 remove a great deal of the need for tedious scripting and styling that was required in HTML4.', 0, 1, '2016-06-26 00:00:00'),
(268, 67, 'All of the above.', 1, 1, '2016-06-26 00:00:00'),
(269, 68, 'datetime', 1, 1, '2016-06-26 00:00:00'),
(270, 68, 'datetime-local', 0, 1, '2016-06-26 00:00:00'),
(271, 68, 'date', 0, 1, '2016-06-26 00:00:00'),
(272, 68, 'month ', 0, 1, '2016-06-26 00:00:00'),
(273, 69, 'section', 1, 1, '2016-06-26 00:00:00'),
(274, 69, 'article', 0, 1, '2016-06-26 00:00:00'),
(275, 69, 'aside', 0, 1, '2016-06-26 00:00:00'),
(276, 69, 'header', 0, 1, '2016-06-26 00:00:00'),
(277, 70, 'section', 0, 1, '2016-06-26 00:00:00'),
(278, 70, 'article', 1, 1, '2016-06-26 00:00:00'),
(279, 70, 'aside', 0, 1, '2016-06-26 00:00:00'),
(280, 70, 'header', 0, 1, '2016-06-26 00:00:00'),
(281, 71, 'section', 0, 1, '2016-06-26 00:00:00'),
(282, 71, 'article', 0, 1, '2016-06-26 00:00:00'),
(283, 71, 'aside', 1, 1, '2016-06-26 00:00:00'),
(284, 71, 'header', 0, 1, '2016-06-26 00:00:00'),
(285, 72, 'section', 0, 1, '2016-06-26 00:00:00'),
(286, 72, 'article', 0, 1, '2016-06-26 00:00:00'),
(287, 72, 'aside', 0, 1, '2016-06-26 00:00:00'),
(288, 72, 'header', 1, 1, '2016-06-26 00:00:00'),
(289, 73, 'footer', 1, 1, '2016-06-26 00:00:00'),
(290, 73, 'nav', 0, 1, '2016-06-26 00:00:00'),
(291, 73, 'section', 0, 1, '2016-06-26 00:00:00'),
(292, 73, 'dialog', 0, 1, '2016-06-26 00:00:00'),
(293, 74, 'footer', 0, 1, '2016-06-26 00:00:00'),
(294, 74, 'nav', 1, 1, '2016-06-26 00:00:00'),
(295, 74, 'section', 0, 1, '2016-06-26 00:00:00'),
(296, 74, 'dialog', 0, 1, '2016-06-26 00:00:00'),
(297, 75, 'footer', 0, 1, '2016-06-26 00:00:00'),
(298, 75, 'nav', 1, 1, '2016-06-26 00:00:00'),
(299, 75, 'section', 0, 1, '2016-06-26 00:00:00'),
(300, 75, 'dialog', 0, 1, '2016-06-26 00:00:00'),
(301, 76, 'footer', 0, 1, '2016-06-26 00:00:00'),
(302, 76, 'nav', 0, 1, '2016-06-26 00:00:00'),
(303, 76, 'dialog', 1, 1, '2016-06-26 00:00:00'),
(304, 76, 'figure', 0, 1, '2016-06-26 00:00:00'),
(305, 77, 'footer', 0, 1, '2016-06-26 00:00:00'),
(306, 77, 'nav', 0, 1, '2016-06-26 00:00:00'),
(307, 77, 'dialog', 0, 1, '2016-06-26 00:00:00'),
(308, 77, 'figure', 1, 1, '2016-06-26 00:00:00'),
(309, 78, 'A custom data attribute starts with data- and would be named based on your requirement.', 0, 1, '2016-06-26 00:00:00'),
(310, 78, 'You would be able to get the values of these attributes using JavaScript APIs or CSS in similar way as you get for standard attributes.', 0, 1, '2016-06-26 00:00:00'),
(311, 78, 'Both of the above.', 1, 1, '2016-06-26 00:00:00'),
(312, 78, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(313, 79, 'A custom data attribute starts with data- and would be named based on your requirement.', 0, 1, '2016-06-26 00:00:00'),
(314, 79, 'You would be able to get the values of these attributes using JavaScript APIs or CSS in similar way as you get for standard attributes.', 0, 1, '2016-06-26 00:00:00'),
(315, 79, 'Both of the above.', 1, 1, '2016-06-26 00:00:00'),
(316, 79, 'None of the above.', 0, 1, '2016-06-26 00:00:00'),
(317, 80, 'Web Forms 2.0 is an extension to the forms features found in HTML4.', 0, 1, '2016-06-26 00:00:00'),
(318, 80, 'Form elements and attributes in HTML5 provide a greater degree of semantic mark-up than HTML4.', 0, 1, '2016-06-26 00:00:00'),
(319, 80, 'Form elements and attributes in HTML5 remove a great deal of the need for tedious scripting and styling that was required in HTML4.', 0, 1, '2016-06-26 00:00:00'),
(320, 80, 'All of the above.', 1, 1, '2016-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `status`, `date_add`) VALUES
(1, 'Simon', 'Gonzales', 'simon@gmail.com', '1234', '1232456789', '77 One Street', 1, '2016-06-20 00:00:00'),
(2, 'Laercio', 'Moura', 'laercio.zdq@gmail.com', '1234', '123456789', '77 Huntley Street', 1, '2016-06-20 00:00:00'),
(3, 'Kaio', 'Santos', 'kaio@gmail.com', '1234', '6478780159', '77 Huntley Street', 1, '2016-06-24 00:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

DROP TABLE IF EXISTS `student_test`;
CREATE TABLE IF NOT EXISTS `student_test` (
  `student_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  PRIMARY KEY (`student_test_id`),
  KEY `student_id` (`student_id`),
  KEY `test_id` (`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_test_answer`
--

DROP TABLE IF EXISTS `student_test_answer`;
CREATE TABLE IF NOT EXISTS `student_test_answer` (
  `student_test_answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_test_id` int(11) NOT NULL,
  `question_option_id` int(11) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`student_test_answer_id`),
  KEY `student_test_id` (`student_test_id`),
  KEY `question_option_id` (`question_option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `description` varchar(100) NOT NULL,
  `total_question` int(11) NOT NULL,
  `pass_score` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`test_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `name`, `category_id`, `image`, `description`, `total_question`, `pass_score`, `time`, `status`, `date_add`) VALUES
(1, 'PHP', 2, 'php.png', 'Course Description, bla bla', 10, 80, 20, 1, '2016-06-26 00:00:00'),
(2, 'CSS', 1, 'css.png', 'Course Description, some info ', 10, 89, 20, 1, '2016-06-26 00:00:00'),
(3, 'JavaScript', 2, 'javascript.png', 'Description, Bla bla', 10, 80, 20, 1, '2016-06-26 00:00:00'),
(4, 'HTML5', 1, 'html.png', 'Description, Bla bla html', 10, 80, 20, 1, '2016-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

DROP TABLE IF EXISTS `user1`;
CREATE TABLE IF NOT EXISTS `user1` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

INSERT INTO `user1` (`user_id`, `first_name`, `last_name`, `email`, `password`, `status`, `date_add`) VALUES
(1, 'Sr.', 'Admin', 'admin@email.com', '1234', 1, '2016-06-20 00:00:00');


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