-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 11:04 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `img_path` varchar(200) NOT NULL,
  `slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id`, `name`, `img_path`, `slug`) VALUES
(2, 'Ancient', 'public/image/catagories/ancient peoples.jpg', 'ancient'),
(3, 'Art', 'public/image/catagories/art.jpg', 'Art'),
(4, 'people ', 'public/image/catagories/77bb8a16ace37556b795eeed5720f89d.jpeg', 'ancient'),
(5, 'Food', 'public/image/catagories/food.jpg', 'Food'),
(6, 'scientific ', 'public/image/catagories/f5838605cb5dd43d473578665a2db17c.jpeg', 'scientific');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `ip_address` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `body`, `ip_address`) VALUES
(1, 'sdasdf', 'rty', 'qwer', 'abdu@test.com', 'qwertyuilkjhgfdsdsdfnfn hss s', '127.0.0.1'),
(2, 'sdasdf', 'qwert', 'ghtrewwer', 'abdulmejid@gmail.com', 'qwerty srhfgsdfs sf srty rty wrtywrt', '127.0.0.1'),
(3, 'sdasdf', 'qwert', 'ghtrewwer', 'abdu@test.com', 'sdfghjk.vhjstrsgb re rt', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `avatar` longtext NOT NULL,
  `title` longtext NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `catagory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `catagory_id` int(11) DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `dislike` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `avatar`, `catagory_id`, `likes`, `dislike`) VALUES
(6, 'Lalibela Church', 'some of content about lalibela church using example and so one', 'public/image/2/68d5535b971d558f594f10a5affd0a71.jpeg', 2, 0, 0),
(7, 'Aba JIfar', 'Aba Jifar is of the great leader in Ethiopia who lead the shanen Gibe for a quarter of century ', 'public/image/2/2f0581d5cbfb6eb8b67ac8599b7b728a.jpeg', 2, 0, 0),
(8, 'Atse Minilik', 'some description of the atse Minilik hat which made with a little of gold in it', 'public/image/2/dfeaf9724e83f7bbed13e436d97d0a46.jpeg', 2, 0, 0),
(11, 'Drawing of Marry', 'back in a days people uses rocks and walls to draw\r\nThis drawing is made about 200 years ago ', 'public/image/3/fcde50359751a7be2df0004a2b915d4d.jpeg', 3, 0, 0),
(12, 'beautiful girl ', 'An Ethipian girl drawn by a famous artist ', 'public/image/3/22078feb8787664f8bb290b72ec60bb1.jpeg', 3, 0, 0),
(14, ' untitled title', 'this is one of the best art ever created in this universe just look and enjoy the art', 'public/image/3/cdf1ae37a3c763ae14ee338b58462e3e.png', 3, 0, 0),
(17, 'lalibela', 'lalibela is lalibela', 'public/image/3/68d5535b971d558f594f10a5affd0a71.jpeg', 2, 0, 0),
(20, 'currency    ', 'back in a days our ancestors  uses a coin which made of gold and a picture of their leader', 'public/image/3/f5838605cb5dd43d473578665a2db17c.jpeg', 2, 0, 0),
(22, ' Eating together ', 'Eating together in a single dish is one of the best culture of Ethiopia', 'public/image/4/94bb92ac20db0fbf016c74ca2058417f.jpeg', 4, 0, 0),
(23, ' Kitfo ', 'Kitfo the best culture food of Ethiopia \r\nMost of Ethiopian likes to eat kitfo ', 'public/image/5/da02ee6e35896728aed0d7e4a7bbe8fe.jpeg', 5, 0, 0),
(24, ' doro wet ', 'Doro wet wet is Ethiopian cultural food which made up of chicken or cock', 'public/image/5/861d399e608e10704e0096826240bc62.jpeg', 5, 0, 0),
(25, ' Amhara peoples ', 'A beloved Amhara people watching over the cattles', 'public/image/4/878532e4170d5a1722ccae7e7e20ba02.jpeg', 4, 0, 0),
(26, ' people in South', 'qwertyukjhgfddg fgngv raet aer', 'public/image/4/1e1d6a496d089fd3af8a8a046f94dac0.jpeg', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `useful` bigint(20) DEFAULT 0,
  `not_useful` bigint(20) DEFAULT 0,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `secret`
--

CREATE TABLE `secret` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `catagory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secret`
--

INSERT INTO `secret` (`id`, `title`, `body`, `image`, `catagory_id`) VALUES
(3, 'another title ', 'another body of the title dldjf', 'public/image/2/f5838605cb5dd43d473578665a2db17c.jpeg', 0),
(8, ' jimma aba jima ', 'ywrty wtbye7b24526456245y5vtvh  e uw56 w57556 ', 'public/image/4/f5838605cb5dd43d473578665a2db17c.jpeg', 4),
(9, ' the golden coin', 'this golden coin found in the most gegag;hkadfkg ak afghadf g', 'public/image/5/f5838605cb5dd43d473578665a2db17c.jpeg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `profile`, `last_name`) VALUES
(1, 'abdu', 'abdu@test.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'public/image/profile.png', 'hafiz'),
(2, 'firaol', 'firaol@test.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'public/image/profile.png', 'tesfaye'),
(3, 'abdu', 'abdulmejid@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225', 'public/image/profile.png', 'shemsu');

-- --------------------------------------------------------

--
-- Table structure for table `viewer`
--

CREATE TABLE `viewer` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catagory_id` (`catagory_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secret`
--
ALTER TABLE `secret`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `viewer`
--
ALTER TABLE `viewer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `secret`
--
ALTER TABLE `secret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `viewer`
--
ALTER TABLE `viewer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id`) REFERENCES `item` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `catagory_id` FOREIGN KEY (`id`) REFERENCES `catagory` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`catagory_id`) REFERENCES `catagory` (`id`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id`) REFERENCES `item` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
