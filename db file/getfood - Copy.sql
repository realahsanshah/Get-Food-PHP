-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 03:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12844846_getfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `isDone` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `dish_name` varchar(20) NOT NULL,
  `dish_detail` text NOT NULL,
  `dish_image` varchar(50) NOT NULL,
  `dish_price` double(5,2) NOT NULL DEFAULT 9.99,
  `dish_featured` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `dish_name`, `dish_detail`, `dish_image`, `dish_price`, `dish_featured`) VALUES
(1, 'Nihari', 'This dish is truly a game-changer for me when it comes to Pakistani cuisine. I would easily consider this among the best breakfasts I have ever had anywhere in the world.', './images/nihari.jpg', 10.00, 1),
(2, 'Kabuli Pulao', 'Kabul, the capital of Afghanistan, lies just a few hours from the KP Province (North-Western border) of Pakistan. Imagine Silk Road traders bringing over the very first dishes of Kabuli Pulao to eat right here in Western Pakistan.', './images/kabulipalao.jpg', 9.99, 0),
(3, 'Karahi', 'Karahi is one of the best of all Pakistani food, and is dear to the hearts of all Pakistanis. You can find Karahis cooking in the smallest roadside shop, or in the Palatial kitchen of a local Rajah.', './images/karahi.jpg', 9.99, 0),
(4, 'Haleem', 'Haleem is an incredibly hearty dish made with a combination of barley, local wheat varieties, and chana (chickpeas). This dish shows the influence on Pakistan that comes from the Middle East, and people have been enjoying Haleem here for centuries.', './images/kabulipalao.jpg', 9.99, 0),
(5, 'Halwa Puri', 'If there’s one special Pakistani food breakfast that loved by all, it would have to be halwa puri.\r\nKnown for causing feelings of extreme satisfaction, even to the point of laziness, for the remainder of the day. Halwa Puri is one of the most common breakfasts you’ll have in Pakistan.', './images/halwapuri.jpg', 9.99, 0),
(6, 'Lassi', 'After all the gloriously heavy meat meals in Pakistan, you will love the cool and refreshing tradition of enjoying lassi after breakfast, lunch, or really any time possible.\r\nLassi is simply the name of the beverage, so many of the variations in English will simply be written as ‘salt lassi,’ or ‘sweet lassi,’ or a fruit variation with mango.', './images/Lassi.jpg', 9.99, 0),
(7, 'Tikka Kebab', 'Few dishes could possibly have the people of Central Asia welcoming you to eat and enjoy more than Pakistani tikkas. Tikka is a special type of ‘kebab,’ the main thing being that tikka uses larger chunks of marinated meat (kebab meat is usually minced and then seasoned, and formed onto the skewer by hand)', './images/tikkakebab.jpg', 9.99, 0),
(8, 'Biriyani', 'Biriyani can often look like a dish of Pulao, but from the start the two are actually quite different. Pulao has all of its ingredients fried together in oil (mixing all the flavors in each bite), whereas each spoonful of steamed biriyani can be unique (ingredients are separate).', './images/biryani.jpg', 9.99, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dishesincart`
--

CREATE TABLE `dishesincart` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `dish_id` int(11) NOT NULL,
  `dish_quantity` tinyint(10) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `isDone` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`,`user_id`,`item_id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishesincart`
--
ALTER TABLE `dishesincart`
  ADD PRIMARY KEY (`id`,`cart_id`,`dish_id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`order_id`,`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
