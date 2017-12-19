-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2016 at 02:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(50) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'kiran', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `image_name` varchar(50) DEFAULT NULL,
  `alias_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `category_name`, `image_name`, `alias_name`) VALUES
(1, 'Animals & Birds', 'animals.jpg', 'animals'),
(2, 'Cartoons', 'cartoons.jpg', 'cartoons'),
(3, 'Computer Knowledge', 'computers.jpg', 'computer'),
(4, 'Country flags & Country capitals', 'flags.jpg', 'flags'),
(5, 'Cricket', 'cricket.jpg', 'cricket'),
(6, 'Current Affairs', 'currentaffirs.jpg', 'currentaffairs'),
(7, 'English', 'english.jpg', 'english'),
(8, 'Genral Knowledge', 'gk.jpg', 'gk'),
(9, 'Maths', 'maths.jpg', 'maths'),
(10, 'Movies', 'movies.jpg', 'movies'),
(17, 'upcoming', 'a808af9c7b30c557b2188fc2160f81fa.jpg', 'coming soon');

-- --------------------------------------------------------

--
-- Table structure for table `daily_amount`
--

CREATE TABLE `daily_amount` (
  `id` int(11) NOT NULL,
  `daily_user_amount` int(11) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `date_time` varchar(50) DEFAULT NULL,
  `cate_id` varchar(50) DEFAULT NULL,
  `rand_number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mquiz_details`
--

CREATE TABLE `mquiz_details` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `twitter_link` varchar(100) DEFAULT NULL,
  `parkpays_link` varchar(100) DEFAULT NULL,
  `google_link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mquiz_details`
--

INSERT INTO `mquiz_details` (`id`, `title`, `logo`, `fb_link`, `twitter_link`, `parkpays_link`, `google_link`) VALUES
(1, 'Mquiz', 'logo.png', 'https://www.facebook.com/', 'https://twitter.com/?lang=en', 'http://www.parkpays.com/', 'https://plus.google.com/collections/featured');

-- --------------------------------------------------------

--
-- Table structure for table `newslatter`
--

CREATE TABLE `newslatter` (
  `e_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslatter`
--

INSERT INTO `newslatter` (`e_id`, `email`) VALUES
(1, 'kiran@gmail.com'),
(2, 'raju@gmail.com'),
(3, 'ravi@gmail.com'),
(4, 'one@gmail.com'),
(5, 'anil@gmail.com'),
(11, 'madeti.siva@gmail.com'),
(13, 'ravi123@gmail.com'),
(14, 'kran@gmail.com'),
(15, 'nani@gmaill.com'),
(16, 'ajay@gmal.com'),
(19, 'kumar@gmail.com'),
(20, 'chinthadakirankumar@gmail.com'),
(21, 'bommali.srinivas4u@gmail.com'),
(22, 'kiran124@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(200) DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `answer` varchar(100) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `image_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `c_id`, `image_name`) VALUES
(1, 'What is the name of this animal?', 'Aardvark', 'Kangaroo', 'Alpaca', 'Antelope', 'A', 1, '1.jpg'),
(2, 'What is the name of this animal?', 'Oryx', 'Okapid', 'Zebra', 'Chamois', 'C', 1, '2.jpg'),
(3, 'What is the name of this animal?', 'Cobra', 'Eel', 'Grasshopper', 'Gnu', 'A', 1, '3.jpg'),
(4, 'What is the name of this animal?', 'Hornet', 'Crab', 'Kudu', 'Jagner', 'B', 1, '4.jpg'),
(5, 'What is the name of this animal?', 'Elephant', 'Gerbil', 'Cobra', 'Deer', 'D', 1, '5.jpg'),
(6, 'What is the name of this animal?', 'Chincilla', 'Gerbil', 'Armadillo', 'African Civet', 'B', 1, '6.jpg'),
(7, 'What is the name of this animal?', 'Manatee', 'Achidna', 'Meerkat', 'Hedgehog', 'D', 1, '7.jpg'),
(8, 'What is the name of this animal?', 'Ferret', 'Dog', 'Beaber', 'Cat', 'D', 1, '8.jpg'),
(9, 'What is the name of this animal?', 'Ape', 'Elephant', 'Boar', 'Gnu', 'A', 1, '9.jpg'),
(10, 'What is the name of this animal?', 'Fish', 'Goldfish', 'Herring', 'Dugong', 'B', NULL, 'a515256c08fcb435dd6c64a89986ad90.jpg'),
(11, 'What is the name of this animal?', 'Caribou', 'Bison', 'Yak', 'Mandrill', 'C', 1, '11.jpg'),
(13, 'What is the name of this animal?', 'Dinosaur', 'Giant', 'Gnu', 'Anteatar', 'A', 1, '13.jpg'),
(14, 'What is the name of this animal?', 'Ass', 'Antelope', 'Baboon', 'Catter Pillar', 'A', 1, '14.jpg'),
(15, 'What is the name of this animal?', 'Capy Bara', 'Gerbil', 'Gnu', 'Beaver', 'A', 1, '15.jpg'),
(16, 'What is the name of this animal?', 'Crocodile', 'Eel', 'Komodo', 'Lemur', 'A', 1, '16.jpg'),
(17, 'What is the name of this animal?', 'Okapi', 'Kangaroo', 'Alpaca', 'Antelope', 'A', 1, '17.jpg'),
(18, 'What is the name of this animal?', 'Caterpillar', 'Eel', 'Dolphin', 'Ferret', 'A', 1, '18.jpg'),
(19, 'What is the name of this animal?', 'Guanaco', 'Coyote', 'Jaguar', 'Cheetah', 'B', 1, '19.jpg'),
(20, 'What is the name of this animal?', 'Goat', 'Caribou', 'Gerbil', 'Gaur', 'B', 1, '20.jpg'),
(21, 'What is the name of this animal?', 'Boar', 'Beaver', 'Camel', 'Bison', 'D', 1, '21.jpg'),
(23, 'What is the name of this animal?', 'Gaintpanda', 'Capybara', 'Frog', 'Echidna', 'C', 1, '23.jpg'),
(24, 'What is the name of this animal?', 'Coyote', 'Cattle', 'Zebra', 'Gaur', 'B', 1, '22.jpg'),
(26, 'What is the name of this animal?', 'Hale', 'Kouprey', 'Hyena', 'opossum', 'C', 1, '26.jpg'),
(27, 'What is the name of this animal?', 'Komododragon', 'Armadillo', 'Hippopotamus', 'Barracuda', 'C', 1, '27.jpg'),
(28, 'What is the name of this animal?', 'Oryx', 'Ibex', 'Deer', 'Caribou', 'A', 1, '28.jpg'),
(29, 'What is the name of this animal?', 'Echidna', 'Fox', 'Gnu', 'African Civet', 'B', 1, '29.jpg'),
(30, 'What is the name of this animal?', 'Caribou', 'Africancivet', 'Elk', 'Antelope', 'C', 1, '30.jpg'),
(32, 'What is the name of this animal?', 'Hornet', 'Gnu', 'Grasshopper', 'Kudu', 'C', 1, '24.jpg'),
(34, 'What is the name of this animal?', 'Locust', 'Alpaca', 'Kouprey', 'Newt', 'D', 1, '25.jpg'),
(35, 'What is the name of this animal?', 'Aardvark', 'Kangaroo', 'Alpaca', 'Antelope', 'A', 2, '1.jpg'),
(36, 'What is the name of this animal?', 'Oryx', 'Okapid', 'Zebra', 'Chamois', 'C', 2, '2.jpg'),
(37, 'What is the name of this animal?', 'Cobra', 'Eel', 'Grasshopper', 'Gnu', 'A', 2, '3.jpg'),
(38, 'What is the name of this animal?', 'Hornet', 'Crab', 'Kudu', 'Jagner', 'B', 2, '4.jpg'),
(39, 'What is the name of this animal?', 'Elephant', 'Gerbil', 'Cobra', 'Deer', 'D', 2, '5.jpg'),
(40, 'What is the name of this animal?', 'Chincilla', 'Gerbil', 'Armadillo', 'African Civet', 'B', 2, '6.jpg'),
(41, 'What is the name of this animal?', 'Manatee', 'Achidna', 'Meerkat', 'Hedgehog', 'D', 2, '7.jpg'),
(42, 'What is the name of this animal?', 'Ferret', 'Dog', 'Beaber', 'Cat', 'D', 2, '8.jpg'),
(43, 'What is the name of this animal?', 'Ape', 'Elephant', 'Boar', 'Gnu', 'A', 2, '9.jpg'),
(44, 'What is the name of this animal?', 'Fish', 'Goldfish', 'Herring', 'Dugong', 'B', 2, '10.jpg'),
(45, 'What is the name of this animal?', 'Caribou', 'Bison', 'Yak', 'Mandrill', 'C', 2, '11.jpg'),
(46, 'What is the name of this animal?', 'Barracuda', 'Chincilla', 'Giraffe', 'Fox', 'A', 2, '12.jpg'),
(47, 'What is the name of this animal?', 'Dinosaur', 'Giant', 'Gnu', 'Anteatar', 'A', 2, '13.jpg'),
(48, 'What is the name of this animal?', 'Ass', 'Antelope', 'Baboon', 'Catter Pillar', 'A', 2, '14.jpg'),
(49, 'What is the name of this animal?', 'Capy Bara', 'Gerbil', 'Gnu', 'Beaver', 'A', 2, '15.jpg'),
(50, 'What is the name of this animal?', 'Crocodile', 'Eel', 'Komodo', 'Lemur', 'A', 2, '16.jpg'),
(51, 'What is the name of this animal?', 'Okapi', 'Kangaroo', 'Alpaca', 'Antelope', 'A', 2, '17.jpg'),
(52, 'What is the name of this animal?', 'Caterpillar', 'Eel', 'Dolphin', 'Ferret', 'A', 2, '18.jpg'),
(53, 'What is the name of this animal?', 'Guanaco', 'Coyote', 'Jaguar', 'Cheetah', 'B', 2, '19.jpg'),
(54, 'What is the name of this animal?', 'Goat', 'Caribou', 'Gerbil', 'Gaur', 'B', 2, '20.jpg'),
(55, 'What is the name of this animal?', 'Boar', 'Beaver', 'Camel', 'Bison', 'D', 2, '21.jpg'),
(56, 'What is the name of this animal?', 'Coyote', 'Cattle', 'Zebra', 'Gaur', 'B', 2, '22.jpg'),
(57, 'What is the name of this animal?', 'Gaintpanda', 'Capybara', 'Frog', 'Echidna', 'C', 2, '23.jpg'),
(58, 'What is the name of this animal?', 'Hornet', 'Gnu', 'Grasshopper', 'Kudu', 'C', 2, '24.jpg'),
(59, 'What is the name of this animal?', 'Locust', 'Alpaca', 'Kouprey', 'Newt', 'D', 2, '25.jpg'),
(60, 'What is the name of this animal?', 'Hale', 'Kouprey', 'Hyena', 'opossum', 'C', 2, '26.jpg'),
(61, 'What is the name of this animal?', 'Komododragon', 'Armadillo', 'Hippopotamus', 'Barracuda', 'C', 2, '27.jpg'),
(62, 'What is the name of this animal?', 'Oryx', 'Ibex', 'Deer', 'Caribou', 'A', 2, '28.jpg'),
(63, 'What is the name of this animal?', 'Echidna', 'Fox', 'Gnu', 'African Civet', 'B', 2, '29.jpg'),
(64, 'What is the name of this animal?', 'Caribou', 'Africancivet', 'Elk', 'Antelope', 'C', 2, '30.jpg'),
(73, 'name of the animals ?', 'one', 'two', 'three', 'four', 'A', 1, '9f7c897e2f61e5fdf224bf692774c1d7.jpg'),
(86, 'name of the animals ?', 'kiran kumar', 'fdkjfl', 'three', 'four', 'A', 3, '2626ae989e1eda78a6bae0daf380a2e3.jpg'),
(87, 'name of the animals ?', 'one', 'two', 'three', 'four', 'A', 1, '54b41f3589e93844328e3fc0e3a7f0c1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions2`
--

CREATE TABLE `questions2` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `cid` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions2`
--

INSERT INTO `questions2` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `cid`) VALUES
(1, 'What is the name of this animal?', 'Aardvark', 'Kangaroo', 'Alpaca', 'Antelope', 'A', '1'),
(2, 'What is the name of this animal?', 'Oryx', 'Okapid', 'Zebra', 'Chamois', 'C', '1'),
(3, 'What is the name of this animal?', 'Cobra', 'Eel', 'Grasshopper', 'Gnu', 'A', '1'),
(4, 'What is the name of this animal?', 'Cobra', 'Eel', 'Grasshopper', 'Gnu', 'A', '1'),
(5, 'What is the name of this animal?', 'Oryx', 'Okapid', 'Zebra', 'Chamois', 'C', '2'),
(6, 'What is the name of this animal?', 'Aardvark', 'Kangaroo', 'Alpaca', 'Antelope', 'A', '2'),
(7, 'What is the name of this animal?', 'Oryx', 'Okapid', 'Zebra', 'Chamois', 'C', '2'),
(8, 'What is the name of this animal?', 'Aardvark', 'Kangaroo', 'Alpaca', 'Antelope', 'A', '1'),
(9, 'What is the name of this animal?', 'Oryx', 'Okapid', 'Zebra', 'Chamois', 'C', '2');

-- --------------------------------------------------------

--
-- Table structure for table `result_table`
--

CREATE TABLE `result_table` (
  `id` int(11) NOT NULL,
  `result_data` varchar(100) DEFAULT NULL,
  `user_id` varchar(30) DEFAULT NULL,
  `date_time` varchar(30) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `vComplete` varchar(100) NOT NULL DEFAULT 'nd'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_table`
--

INSERT INTO `result_table` (`id`, `result_data`, `user_id`, `date_time`, `cate_id`, `vComplete`) VALUES
(1, 'yes', '3', '17-08-2016', 1, 'd'),
(2, 'yes', '3', '17-08-2016', 1, 'd'),
(3, 'yes', '20', '18-08-2016', 1, 'd'),
(4, 'yes', '20', '18-08-2016', 1, 'd'),
(5, 'yes', '20', '18-08-2016', 1, 'd'),
(6, 'No', '20', '18-08-2016', 1, 'd'),
(7, 'No', '20', '18-08-2016', 1, 'd'),
(8, 'yes', '3', '19-08-2016', 1, 'd'),
(9, 'yes', '3', '19-08-2016', 1, 'd'),
(10, 'yes', '3', '19-08-2016', 1, 'd'),
(11, 'yes', '3', '19-08-2016', 1, 'd'),
(12, 'No', '20', '19-08-2016', 1, 'd'),
(13, 'yes', '20', '19-08-2016', 1, 'd'),
(14, 'yes', '20', '19-08-2016', 1, 'd'),
(15, 'yes', '3', '19-08-2016', 1, 'nd'),
(16, 'yes', '3', '19-08-2016', 1, 'nd'),
(17, 'yes', '3', '19-08-2016', 1, 'nd'),
(18, 'yes', '3', '19-08-2016', 1, 'nd');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_pwd` varchar(50) DEFAULT NULL,
  `user_confirm_pwd` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `user_name`, `email`, `user_pwd`, `user_confirm_pwd`, `address`, `phone_number`) VALUES
(3, 'kiran', 'kiran@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', 'vizag', '9494975506'),
(4, 'kumar', 'kumar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', 'vizag', '1234567890'),
(20, 'one', 'one@gmail.com', 'f97c5d29941bfb1b2fdab0874906ab82', 'f97c5d29941bfb1b2fdab0874906ab82', 'vizag', '1234567892');

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet`
--

CREATE TABLE `user_wallet` (
  `w_id` int(11) NOT NULL,
  `wallet_amount` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_wallet`
--

INSERT INTO `user_wallet` (`w_id`, `wallet_amount`, `user_id`) VALUES
(1, 50, 1),
(3, 475, 3),
(4, 0, 10),
(6, 20, 12),
(8, 0, 15),
(9, 75, 11),
(10, 100, 17),
(11, 100, 18),
(12, 100, 19),
(13, 115, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `daily_amount`
--
ALTER TABLE `daily_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mquiz_details`
--
ALTER TABLE `mquiz_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslatter`
--
ALTER TABLE `newslatter`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `questions2`
--
ALTER TABLE `questions2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_table`
--
ALTER TABLE `result_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wallet`
--
ALTER TABLE `user_wallet`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `daily_amount`
--
ALTER TABLE `daily_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mquiz_details`
--
ALTER TABLE `mquiz_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newslatter`
--
ALTER TABLE `newslatter`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `questions2`
--
ALTER TABLE `questions2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `result_table`
--
ALTER TABLE `result_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `user_wallet`
--
ALTER TABLE `user_wallet`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
