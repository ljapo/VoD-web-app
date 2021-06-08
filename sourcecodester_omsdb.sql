-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 10:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcecodester_omsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `kid` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `poruka` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`kid`, `ime`, `email`, `poruka`) VALUES
(2, 'toni', 'tony@gmail.com', 'Imam problem sa pokretanjem filma Avengers Infinity War'),
(3, 'nazif', 'nazzif10@gmail.com', 'Trenutno imam problema sa promjenom passworda.');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mid` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rdate` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `runtime` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `decription` text COLLATE utf8_unicode_ci NOT NULL,
  `viewers` int(10) DEFAULT 1,
  `imgpath` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `videopath` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mid`, `name`, `genre`, `rdate`, `runtime`, `decription`, `viewers`, `imgpath`, `videopath`) VALUES
(1, 'avengers infinity war', 'superhero', '2020', '149', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.', 39, 'infinity-war-poster-new.jpg', 'avengers-infinity-war-trailer-1_h1080p.mov'),
(3, 'black panther', 'superhero', '2019', '140', 'After the events of Captain America: Civil War, Prince T\'Challa returns home to the reclusive, technologically advanced African nation of Wakanda to serve as his country\'s new king. However, T\'Challa soon finds that he is challenged for the throne from factions within his own country. When two foes conspire to destroy Wakanda, the hero known as Black Panther must team up with C.I.A. agent Everett K. Ross and members of the Dora Milaje, Wakandan special forces, to prevent Wakanda from being dragged into a world war.', 14, 'black-panther-poster-2-main.jpg', 'black-panther-spot-rise-usca_h1080p.mov'),
(4, 'wonder', 'porodični', '2017', '113', 'Based on the New York Times bestseller, this movie tells the incredibly inspiring and heartwarming story of August Pullman, a boy with facial differences who enters the fifth grade, attending a mainstream elementary school for the first time.', 8, 'Wonder-294892482.jpg', 'yt1s.com - WONDER Trailer 2017_720p.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `prijedlozi`
--

CREATE TABLE `prijedlozi` (
  `pid` int(11) NOT NULL,
  `Prijedlog` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prijedlozi`
--

INSERT INTO `prijedlozi` (`pid`, `Prijedlog`) VALUES
(1, 'black panther'),
(2, 'black panther'),
(3, 'avengers endgame'),
(4, 'black panther'),
(5, 'avengers assemble'),
(6, 'avengers endgame'),
(7, 'avengers endgame'),
(8, 'black panther'),
(9, 'shazam!'),
(10, 'shazam!');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(100) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `username`, `passwd`, `name`, `phone`, `email`, `DOB`, `mid`) VALUES
(1, 'admin@gmail.com', 'admin', 'nazif salihović', '3876212462', 'nazzif10@gmail.com', '28/05/1994', 3),
(4, 'soubik@gmail.com', '1234', 'soubik bera', '8622849041', 'soubik@gmail.com', '16/10/1995', 3),
(8, 'tony@gmail.com', '11111', 'toni  marjanović', '65261262', 'tony@gmail.com', '28/10/1998', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`kid`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `prijedlozi`
--
ALTER TABLE `prijedlozi`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `mid` (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `kid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prijedlozi`
--
ALTER TABLE `prijedlozi`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `movies` (`mid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
