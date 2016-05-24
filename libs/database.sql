-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2016 at 06:15 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `name2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `delete_flg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `name2`, `delete_flg`) VALUES
(3, 'Apartments', 'CÄƒn Há»™', 0),
(4, 'Buildings', 'TÃ²a NhÃ ', 0),
(5, 'villas', 'Biá»‡t Thá»±', 0),
(6, 'Houses', 'NhÃ  á»ž', 0),
(7, 'Ware Houses', 'NhÃ  Kho', 0);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `idproduct` int(11) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `delete_flg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `idproduct`, `name`, `delete_flg`) VALUES
(8, 9, 'product_20160521014954.jpg', 0),
(9, 9, 'product_20160521014955.jpg', 0),
(10, 9, 'product_20160521014955.jpg', 0),
(11, 9, 'product_20160521014955.jpg', 0),
(12, 19, 'product_20160523051134.jpg', 0),
(13, 19, 'product_20160523051134.jpg', 0),
(14, 19, 'product_20160523051134.jpg', 0),
(15, 19, 'product_20160523051134.jpg', 0),
(16, 19, 'product_20160523051134.jpg', 0),
(17, 19, 'product_20160523051134.jpg', 0),
(18, 19, 'product_20160523051134.jpg', 0),
(19, 19, 'product_20160523051135.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `name2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `delete_flg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `name2`, `delete_flg`) VALUES
(3, 'District 1', 'Quáº­n 1', 0),
(4, 'District 2', 'Quáº­n 2', 0),
(5, 'District 3', 'Quáº­n 3', 0),
(6, 'District 4', 'Quáº­n 4', 0),
(7, 'District 5', 'Quáº­n 5', 0),
(8, 'District 6', 'Quáº­n 6', 0),
(9, 'Districtt 7', 'Quáº­n 7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `idcategory` int(11) DEFAULT NULL,
  `idlocation` int(11) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `namevi` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `adress` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `datepost` date DEFAULT NULL,
  `image` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `bathroom` int(11) DEFAULT NULL,
  `bedroom` int(11) DEFAULT NULL,
  `forsale` int(11) DEFAULT NULL,
  `hot` int(11) DEFAULT NULL,
  `square` int(11) DEFAULT NULL,
  `description` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `descriptionvi` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `map` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `delete_flg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `idcategory`, `idlocation`, `name`, `namevi`, `adress`, `datepost`, `image`, `price`, `bathroom`, `bedroom`, `forsale`, `hot`, `square`, `description`, `descriptionvi`, `map`, `delete_flg`) VALUES
(9, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 1, 1, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(10, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 1, 1, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(11, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 1, 1, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(12, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 1, 1, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(13, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 1, 1, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(14, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 0, 2, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(15, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 0, 2, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(16, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 1, 0, 2, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(17, 3, 3, 'Ngo gia tu aparment', 'Chung cÆ° ngÃ´ gia tá»±', 'NgÃ´ Gia TÆ°Ì£, ÄÆ°á»ng lÃ´ I, Ho Chi Minh City, Vietnam', '2016-05-21', 'product_20160521014938.jpg', 200, 2, 1, 0, 0, 2, 'Chung cÆ° má»›i xÃ¢y xanh sach dep', 'Chung cÆ° má»›i xÃ¢y xanh sach dep', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0),
(18, 3, 3, 'thangtest', 'Thangtest', 'thu duc', '2016-05-22', 'product_20160522091234.jpg', 200, 2, 2, 0, 0, 60, 'ddd', 'ttt', '111', 0),
(19, 3, 3, '  Star Hill, located in the International Commercial and Financial District, is surrounded by mix-us', '  Star Hill, located in the International Commercial and Financial District, is surrounded by mix-us', 'Quáº­n 7', '2016-05-23', 'product_20160523050847.jpg', 157, 1, 1, 0, 1, 60, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.637173770138!2d106.67119261456321!3d10.762420792331021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ee3cc59d807%3A0x7d3e88a4d7e94cfe!2zQ2h1bmcgQ8awIE5nw7QgR2lhIFTGsMyj!5e0!3m2!1sen!2s!4v1463831115151" width="320" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) CHARACTER SET utf8 NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `delete_flg` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `pass`, `name`, `email`, `delete_flg`) VALUES
('admin', 'admin', 'thang', '123@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
