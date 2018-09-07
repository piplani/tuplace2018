-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 06:15 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumlplacement`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `pid` int(11) NOT NULL,
  `value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`pid`, `value`) VALUES
(1, 'finance'),
(2, 'Text Processing'),
(3, 'Image Processing'),
(3, 'Text Processing'),
(5, 'Image Processing'),
(6, 'Time Series');

-- --------------------------------------------------------

--
-- Table structure for table `optimization`
--

CREATE TABLE `optimization` (
  `pid` int(11) NOT NULL,
  `value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `optimization`
--

INSERT INTO `optimization` (`pid`, `value`) VALUES
(1, 'ga'),
(2, 'Adam'),
(3, 'Adam'),
(5, 'Adam'),
(6, 'Adam');

-- --------------------------------------------------------

--
-- Table structure for table `outcome`
--

CREATE TABLE `outcome` (
  `pid` int(11) NOT NULL,
  `value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outcome`
--

INSERT INTO `outcome` (`pid`, `value`) VALUES
(1, 'website'),
(2, 'Command Line Interface'),
(3, 'Command Line Interface'),
(5, 'Command Line Interface'),
(6, 'Command Line Interface');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(11) NOT NULL,
  `title` text NOT NULL,
  `summary` text NOT NULL,
  `size` int(10) NOT NULL,
  `leader` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `title`, `summary`, `size`, `leader`, `link`) VALUES
(1, 'Bank fraud detection \r\n', 'Aim of the project was to work under my mentor on analyzing whether the transaction is fraudulent.\r\n', 1, 'Kaustub nargotra ,7006894504,kaustubnargotra04@gmail.com\r\n', 'none'),
(2, 'iChatBoT: Interview Chat Bot\r\n', 'An interactive chatbot which acts as a HR representative and interacts with the candidates sitting for the interview. It uses a sequence to sequence model generating questions on the basis of the replies given by the candidate. Later his replies are used to evaluate the 5 big personality traits of the person.\r\n', 1, 'Gitesh Khanna,9988066146,gitesh.khanna97@gmail.com\r\n', 'https://github.com/GiteshKhanna/iChatBot\r\n'),
(3, 'Text To Image Synthesis Using Generative Adversarial Networks\r\n', 'Uses text descriptions to generate images in real time. \r\n', 4, 'Gitesh Khanna,9988066146,gitesh.khanna97@gmail.com\r\n', 'None'),
(5, 'Sign Language detection using deep learning \r\n', 'Sign languages are languages that use manual communication to convey meaning. This can include simultaneously employing hand gestures, movement, orientation of the fingers, arms or body, and facial expressions to convey a speaker\'s ideas.\r\n', 1, 'Hitesh Laddha , 8764405763, hiteshladdha1997@gmail.com\r\n', 'https://github.com/hitesh1997/Sign-Detection-using-Convolutional-Neural-Networks-tensorflow-\r\n'),
(6, 'Activity Detection using Barometer Sensor Outputs\r\n', 'A project sponsored by MHRD in collaboration with Design & Innovation Centre , Chandigarh. Created and used dataset from mumbai,chandigarh,delhi to find if a person at any time is Still or moving. Positives : barometers use 1/8th of the battery with respect to other sensors, hence a much better substitute for other sensors working for the same purpose like gyrometer, accelerometer.\r\n', 1, 'Gitesh khanna,9988066146,gitesh.khanna97@gmail.com\r\n', 'https://github.com/GiteshKhanna/Barometer-RoadSphygmo\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `technique`
--

CREATE TABLE `technique` (
  `pid` int(11) NOT NULL,
  `value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technique`
--

INSERT INTO `technique` (`pid`, `value`) VALUES
(1, 'ML'),
(2, 'CNN'),
(3, 'CNN'),
(5, 'CNN'),
(6, 'CNN');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `pid` int(11) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`pid`, `value`) VALUES
(1, 'R'),
(2, 'TensorFlow'),
(3, 'Python'),
(3, 'TensorFlow'),
(3, 'Keras'),
(5, 'TensorFlow'),
(5, 'Python'),
(6, 'Python'),
(6, 'Keras');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `optimization`
--
ALTER TABLE `optimization`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `outcome`
--
ALTER TABLE `outcome`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `technique`
--
ALTER TABLE `technique`
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `domain`
--
ALTER TABLE `domain`
  ADD CONSTRAINT `fk` FOREIGN KEY (`pid`) REFERENCES `project` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `optimization`
--
ALTER TABLE `optimization`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`pid`) REFERENCES `project` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `outcome`
--
ALTER TABLE `outcome`
  ADD CONSTRAINT `outcome_ibfk_1` FOREIGN KEY (`pid`) REFERENCES `project` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technique`
--
ALTER TABLE `technique`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`pid`) REFERENCES `project` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`pid`) REFERENCES `project` (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
