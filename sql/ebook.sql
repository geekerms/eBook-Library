-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2020 at 08:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `countryCode` int(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `gender`, `profession`, `countryCode`, `phone`, `email`, `password`) VALUES
('Mamata Shee', 'f', 'Student', 91, 9700000008, 'mamata@gmail.com', 'admin123'),
('Dipshikha Neogi', 'f', 'Student', 91, 6200000004, 'dipshikha@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `copies` int(255) NOT NULL,
  `department` varchar(30) NOT NULL,
  `filename` varchar(1000) NOT NULL,
  `cover` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `copies`, `department`, `filename`, `cover`) VALUES
('trending1', 'Finding our place in the universe', 'Hélène Courtois', '1e', 'Available', 2, 'Trending Books', 'trending1.pdf', 'trending1_img.jpg'),
('trending2', 'Where the Crawdads Sing', 'Delia Owens', '1e', 'Unavailable', 0, 'Trending Books', 'trending2.pdf', 'trending2_img.jpg'),
('trending3', 'The Woman in Our House', 'Andrew Hart', '1e', 'Available', 3, 'Trending Books', 'trending3.pdf', 'treding3_img.jpg'),
('trending4', 'It Ends with Us', 'Colleen Hoover', '1e', 'Available', 1, 'Trending Books', 'trending4.pdf', 'trending4_img.jpg'),
('trending5', 'Long Bright River', 'Liz Moore', '1e', 'Available', 2, 'Trending Books', 'trending5.pdf', 'trending5_img.jpg'),
('trending6', 'Everything I have Never Had', 'Lynetta Halat', '1e', 'Available', 5, 'Trending Books', 'trending6.pdf', 'trending6_img.jpg'),
('editor2', 'Guy kawaski', 'Guy kawaski', '1e', 'Unavailable', 0, 'Editors Choice', 'editor2.pdf', 'editor2_img.jpg'),
('editor3', 'Book title', 'Book Title', '1e', 'Available', 5, 'Editors Choice', 'editor3.pdf', 'editor3_img.jpg'),
('editor4', 'Messiah', ' Boris Starling', '1e', 'Available', 18, 'Editors Choice', 'editor4.pdf', 'editor4_img.jpg'),
('editor5', 'Call by your name', 'André Aciman', '1e', 'Available', 8, 'Editors Choice', 'editor5.pdf', 'editor5_img.jpg'),
('editor6', 'The Hypocrite World', 'Sophia Hill', '1e', 'Available', 15, 'Editors Choice', 'editor6.pdf', 'editor6_img.jpg'),
('classic1', 'Sherlock Homes', 'Arthur Conan Doyle ', '3e', 'Available', 12, 'Classic', 'classic1.pdf', 'classic1_img.jpg'),
('classic2', 'Fahrenheit 451', 'Ray Bradbury', '1e', 'Available', 5, 'Classic', 'classic2.pdf', 'classic2_img.jpg'),
('classic3', 'The Lovely Bones', 'Alice Sebold', '1e', 'Available', 2, 'Classic', 'classic3.pdf', 'classic3_img.jpg'),
('classic4', 'Great', ' Sara Benincasa', '1e', 'Available', 2, 'Classic', 'classic4.pdf', 'classic4_img.jpg'),
('classic5', 'Incidents in the Life of a Slave Girl', 'Harriet Jacobs', '1e', 'Available', 20, 'Classic', 'classic5.pdf', 'classic5_img.jpg'),
('classic6', 'Died in the wool', 'Ngaio Marsh', '1e', 'Available', 5, 'Classic', 'classic6.pdf', 'classic6_img.jpg'),
('academic2', 'The Science of Human Hacking', 'Christopher Hadnagy', '1e', 'Available', 5, 'Academic', 'academic2.pdf', 'academic2_img.jpg'),
('academic3', 'Introduction to Software Engineering', ' Ronald J Leach', '1e', 'Available', 20, 'Academic', 'academic3.pdf', 'academic3_img.jpg'),
('academic4', 'What is Mathematics', 'Richard Courant, Herbert Robbins', '1e', 'Available', 15, 'Academic', 'academic4.pdf', 'academic4_img.jpg'),
('academic5', 'A Handbook of civil Engineering', 'Ramamurtham', '1e', 'Available', 23, 'Academic', 'academic5.pdf', 'academic5_img.jpg'),
('academic6', 'Data Structure with C', 'Anil K. Ahlawat', '1e', 'Available', 13, 'Academic', 'academic6.pdf', 'academic6_img.jpg'),
('kids1', 'BreadCrumbs', ' Anne Ursu', '1e', 'Available', 21, 'Kids', 'kids1.pdf', 'kids1_img.jpg'),
('kids2', 'Dog Man: A Tale of Two Kitties', 'Dav Pilkey', '1e', 'Available', 4, 'Kids', 'kids2.pdf', 'kids2_img.jpg'),
('kids3', 'Nate the Great', 'Marjorie W. Sharmat, Craig Sharmat', '1e', 'Available', 5, 'Kids', 'kids3.pdf', 'kids3_img.jpg'),
('kids4', 'Child of the civil rights movement', 'Paula Young Shelton', '1e', 'Available', 7, 'Kids', 'kids4.pdf', 'kids4_img.jpg'),
('kids5', 'Since we are friends', 'Celeste Shally', '1e', 'Available', 19, 'Kids', 'kids5.pdf', 'kids5_img.jpg'),
('kids6', 'Bedtime Math', 'Laura Overdeck', '1e', 'Available', 11, 'Kids', 'kids6.pdf', 'kids6_img.jpg'),
('thrillers1', 'The Secret Client', 'Taylor Palacio', '1e', 'Available', 9, 'Thrillers', 'thrillers1.pdf', 'thrillers1_img.jpg'),
('thrillers2', 'The wolf on the', 'Unknown', '1e', 'Available', 10, 'Thrillers', 'thrillers2.pdf', 'thrillers2_img.jpg'),
('thrillers3', 'Dont go there', 'Adam Fletcher', '1e', 'Available', 11, 'Thrillers', 'thrillers3.pdf', 'thrillers3_img.jpg'),
('thrillers4', 'The Method', 'Juli Zeh', '1e', 'Available', 7, 'Thrillers', 'thrillers4.pdf', 'thrillers4_img.jpg'),
('thrillers5', 'The Shining', 'Stephen King', '1e', 'Available', 19, 'Thrillers', 'thrillers5.pdf', 'thrillers5_img.jpg'),
('thrillers6', 'G-man', 'Stephen Hunter', '1e', 'Available', 13, 'Thrillers', 'thrillers6.pdf', 'thrillers6_img.jpg'),
('academic1', 'Industrial Engineering and Management ', 'O P Khanna', '17e', 'Available', 19, 'Academic', 'academic1.pdf', 'academic1_img.jpg'),
('music1', 'Brillante', 'Unknown', '1e', 'Available', 5, 'Music', 'music1.pdf', 'music1_img.jpg'),
('music2', 'The music shop', 'Rachel Joyce', '1e', 'Available', 21, 'Music', 'music2.pdf', 'music2_img.jpg'),
('music3', 'The music shop', 'Andrew Sullivan', '1e', 'Available', 22, 'Music', 'music3.pdf', 'music3_img.jpg'),
('music5', 'Babys Bedtime Music', 'Unknown', '1e', 'Available', 37, 'Music', 'MySQL and PHP  book given by Anik Sir.pdf', 'music5_img.jpg'),
('music6', 'Its Music,not theory damn it', 'Bill Gordon', '1e', 'Available', 19, 'Music', 'music6.pdf', 'music6_img.jpg'),
('poem1', 'Poem for everyday of a year', 'Unknown', '1e', 'Available', 25, 'Poems', 'poem1.pdf', 'poem1_img.jpg'),
('poem2', 'Hope and Resilience', 'Monique Gray Smith', '1e', 'Available', 9, 'Poems', 'poem2.pdf', 'poem2_img.jpg'),
('poem3', 'Poems for Palestine', 'Unknown', '1e', 'Available', 17, 'Poems', 'poem3.pdf', 'poem3_img.jpg'),
('poem4', 'The eighth color of a rainbow', 'Unknown', '1e', 'Available', 14, 'Poems', 'poem4.pdf', 'poem4_img.jpg'),
('poem5', 'The mind has Cliffs of fall', 'Robert Pinsky', '1e', 'Available', 17, 'Poems', 'poem5.pdf', 'poem5_img.jpg'),
('poem6', 'Milk and Honey', 'Rupi Kaur', '1e', 'Available', 19, 'Poems', 'poem6.pdf', 'poem6_img.jpg'),
('novels1', 'Journey of Life', 'Unknown', '1e', 'Available', 26, 'Novels', 'novels1.pdf', 'novels1_img.jpg'),
('novels2', 'Impervious', 'Laura Kirwan', '1e', 'Available', 18, 'Novels', 'novels2.pdf', 'novels2_img.jpg'),
('novels3', 'Last Olympian', 'Rick Riordan', '1e', 'Available', 23, 'Novels', 'novels3.pdf', 'novels3_img.jpg'),
('novels4', 'The Bachman Books', 'Richard Bachman', '1e', 'Available', 19, 'Novels', 'novels4.pdf', 'novels4_img.jpg'),
('novels5', 'The lives we lost', 'Megan Crewe', '1e', 'Available', 9, 'Novels', 'novels5.pdf', 'novels5_img.jpg'),
('novels6', 'The neverland wars', 'Audrey Greathouse', '1e', 'Available', 27, 'Novels', 'novels6.pdf', 'novels6_img.jpg'),
('music4', 'Beach Music', 'Pat Conroy', '1e', 'Available', 5, 'Music', 'music4.pdf', 'music4_img.jpg'),
('editor1', 'Allegiance', 'Raymond Cooper', '1e', 'Available', 15, 'Editors Choice', 'editor1.pdf', 'editor1_img.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`) VALUES
(16, 'Alex Akash', 'alex@gmail.com', 'Are all books available for free?'),
(34, 'python', 'python@gmail.com', 'Woow. \r\nEvery books are just awesome.....');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `countryCode` int(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`name`, `gender`, `countryCode`, `phone`, `email`, `password`) VALUES
('Alex Akash', 'm', 880, 2530000100, 'alex@gmail.com', 'alex123'),
('Jit Roy Chowdhury', 'm', 91, 6250000001, 'jit@gmail.com', 'jit123'),
('Mamata Shee', 'f', 91, 7000000008, 'mamata@gmail.com', 'mamata12'),
('Dipshikha Neogi', 'f', 91, 6200000004, 'dipshikha@gmail.com', 'dip123'),
('Kondaka Rupa', 'f', 91, 6500000003, 'rupa@gmail.com', 'rupa123'),
('Dipa Sahoo', 'f', 91, 6300000009, 'dipa@gmail.com', 'dipa123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
