-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 10:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `richman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` bigint(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(150) NOT NULL,
  `status` enum('active','inactive') NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `name`, `email`, `username`, `password`, `token`, `status`, `deleted`) VALUES
(1, 'Sohel', 'mhsohel017@gmail.com', 'mhsohel', '827ccb0eea8a706c4c34a16891f84e7b', 'hjk', 'active', 0),
(7, 'BHDC', 'bhdcbd@gmail.com', 'bhdcbd', '827ccb0eea8a706c4c34a16891f84e7b', '', 'active', 1),
(8, 'Swee Ting', 'sweetingbhdcbd@gmail.com', 'sweeting', '827ccb0eea8a706c4c34a16891f84e7b', '', 'active', 1),
(10, 'biva', 'biva@gmail.com', '', '12345', '', 'active', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brandID` bigint(20) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brandID`, `brand_name`, `photo`) VALUES
(1, 'Yellow', '3.jpg'),
(2, 'Easy', '1.png'),
(3, 'arong', '2.png'),
(5, 'anjons', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` bigint(20) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `orders` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `category_name`, `orders`) VALUES
(1, 'Men Fashion', 0),
(2, 'Women', NULL),
(3, 'Kids', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coustomer`
--

CREATE TABLE `coustomer` (
  `id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` bigint(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coustomer`
--

INSERT INTO `coustomer` (`id`, `f_name`, `l_name`, `address`, `town`, `postcode`, `email`, `phone`, `password`) VALUES
(1, 'biva', 'mony', 'biddanagor', 'biddanagor', 3460, 'biva@gmail.com', '065767687', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(150) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `f_name`, `l_name`, `address`, `city`, `post_code`, `email`, `phone`, `username`, `password`) VALUES
(1, 'Morshed', 'Habib', 'Dhaka', 'dhaka', '1209', 'mhsohel017@gmail.com', '01735254295', 'mhsohel', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Sohel', 'Rana', 'Mirpur, Dhaka', 'Dhaka', '1207', 'sohel@gmail.com', '01735254295', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'samim', 'hossain', 'mirpur', 'dhaka', '1207', 'samim@gmail.com', '01715231452', '', '12345'),
(6, 'Harmon Bruen', 'Harmon Bruen', '5472 Adan Gateway', 'Jacobifurt', 'Neck', 'Carli.Lowe@hotmail.com', '10840268723', '', 'cef7b752933ab841cc4fcd65a4615913'),
(7, 'Yesenia Cremin', 'Yesenia Cremin', '427 Crist Manor', 'Macejkovicfort', 'Rubber', 'reikicolortherapy@gmail.com', '18806894192', '', '334540e0c16eaa32d0895d03103278f9'),
(8, 'Sohel', 'Rana', 'Dhaka', 'Dhaka', '1207', 'mhsohel017@gmail.com', '01735254295', '', ''),
(9, 'Jaki', 'Arman', 'House # 14, Road # 3, Sector # 6, Uttara, Dhaka', 'Dhaka', '1230', 'jakiarman@gmail.com', '01914495461', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `id` int(11) NOT NULL,
  `site_title` text NOT NULL,
  `logo` text NOT NULL,
  `specialty_text` text NOT NULL,
  `about_photo` text NOT NULL,
  `about_text` text NOT NULL,
  `insta_text` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_text` text NOT NULL,
  `map` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `tags` text NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL,
  `insta` text NOT NULL,
  `about_banner` text NOT NULL,
  `contact_banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`id`, `site_title`, `logo`, `specialty_text`, `about_photo`, `about_text`, `insta_text`, `address`, `phone`, `email`, `contact_text`, `map`, `meta_keywords`, `meta_description`, `tags`, `fb`, `twitter`, `insta`, `about_banner`, `contact_banner`) VALUES
(1, 'Meem Fashion', '31eac330ef4b1861dcaefbd401e021ee.png', 'Nullam quis risus eget urna mollis ornare vel eu leo. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui.', 'about1.jpg', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultricies vehicula ut id elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.\r\n\r\nFermentum massa justo sit amet risus. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Etiam porta sem malesuada magna mollis euismod. Aenean lacinia bibendum nulla.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo.', 'DHULIAN\r\nPAKUR ROAD\r\nMURSHIDABAD\r\n742202', '017', 'mhsohel017@gmail.com', 'Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas faucibus.', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.4483800426133!2d3.2241689!3d51.2108153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c350cfcf934d7d%3A0xa4d8f385ffa7d70b!2sChoco-Story!5e0!3m2!1sen!2str!4v1534408440419', 'meta keywords', 'meta description', 'shirt, man, kids shirt', 'prantiksoft', 'morshedhabibat', 'morshedhabibat', 'breadcrumbs.jpg', 'breadcrumbs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_blocks`
--

CREATE TABLE `home_blocks` (
  `id` int(11) NOT NULL,
  `first_text_1` varchar(255) NOT NULL,
  `first_text_2` varchar(255) NOT NULL,
  `first_text_3` varchar(255) NOT NULL,
  `first_category` varchar(12) NOT NULL,
  `first_photo` varchar(255) NOT NULL,
  `second_text_1` varchar(255) NOT NULL,
  `second_text_2` varchar(255) NOT NULL,
  `second_text_3` varchar(255) NOT NULL,
  `second_category` varchar(12) NOT NULL,
  `second_photo` varchar(255) NOT NULL,
  `third_text_1` varchar(255) NOT NULL,
  `third_text_2` varchar(255) NOT NULL,
  `third_text_3` varchar(255) NOT NULL,
  `third_category` varchar(12) NOT NULL,
  `third_photo` varchar(255) NOT NULL,
  `fourth_text_1` varchar(255) NOT NULL,
  `fourth_text_2` varchar(255) NOT NULL,
  `fourth_text_3` varchar(255) NOT NULL,
  `fourth_category` varchar(12) NOT NULL,
  `fourth_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_blocks`
--

INSERT INTO `home_blocks` (`id`, `first_text_1`, `first_text_2`, `first_text_3`, `first_category`, `first_photo`, `second_text_1`, `second_text_2`, `second_text_3`, `second_category`, `second_photo`, `third_text_1`, `third_text_2`, `third_text_3`, `third_category`, `third_photo`, `fourth_text_1`, `fourth_text_2`, `fourth_text_3`, `fourth_category`, `fourth_photo`) VALUES
(1, 'Sale off', 'HOT FASHION', 'cloth Collection 2018', '1', 'e71feab00d6284711f601e84175bb832.jpg', 'Sale off', 'NEW FASHION', 'cloth Collection 2018', '2', '7e11bf6c76fe4fed12d4830407cd399b.jpg', 'Sale off', 'WEMEN FASHION', 'cloth Collection 2018', '3', '47853548e68ede5d49769aea22a2805a.jpg', 'Sale off', 'MEN', 'cloth Collection 2018', '1', '6d42195131351d65638833132c4ebd74.jpg'),
(1, 'Sale On', 'Honey', 'Honey Collection 2020', '1', '45020650291fcb065a9c4a628cf93d0b.png', 'Sale On', 'Mustard Oil', 'Mustard Oil Collection 2020', '1', 'd9d9050e875c9c78161a125bde673793.png', 'Sale On', 'Dates', 'Dates Collection 2020', '1', '25d4a65bc747a2264413e8cef94fc80d.png', 'Sale On', 'Black Seed Oil', 'Black Seed Oil Collection 2020', '1', '4f8fc3ed7ab9d522fc8784c6ea4cc09a.png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `msg`, `date`) VALUES
(1, 'Md. Nazrul Islam', 'mhsohel017@gmail.com', 'dfss', NULL),
(2, 'Md. Nazrul Islam', 'mhsohel017@gmail.com', 'asda', NULL),
(3, 'Md. Nazrul Islam', 'mhsohel017@gmail.com', 'asda', NULL),
(4, 'Md. Nazrul Islam', 'mhsohel017@gmail.com', 'ghjg', NULL),
(5, 'Md. Nazrul Islam', 'mhsohel017@gmail.com', 'ghjg', NULL),
(6, 'ff', 'ddmymensingh@gmail.com', 'asdas', '2020-09-12'),
(7, 'Sohel', 'mhsohel017@gmail.com', 'sdfs', '2020-09-24'),
(8, 'Test', 'test@gmail.com', 'hi', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productID`, `price`, `qty`) VALUES
(1, 2, '40', '6'),
(2, 2, '40', '9'),
(3, 1, '60', '3'),
(4, 2, '40', '9'),
(5, 1, '60', '3'),
(6, 1, '60', '3'),
(7, 2, '40', '3');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `details`) VALUES
(1, 'Return Policy', '<p><strong>Return policy is here</strong></p>'),
(2, 'Privacy Policy', '<p><strong>Privacy Policy goes here</strong></p>'),
(3, 'Terms & Conditions', '<p>Terms &amp; Conditions goes here</p>');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `subCatID` bigint(20) DEFAULT NULL,
  `brandID` bigint(20) DEFAULT NULL,
  `name` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `previous_price` varchar(100) DEFAULT NULL,
  `photo` text NOT NULL,
  `brief` text DEFAULT NULL,
  `description` text NOT NULL,
  `colors` varchar(255) NOT NULL,
  `sizes` varchar(255) NOT NULL,
  `show_new` varchar(255) NOT NULL,
  `show_hot` enum('true','false') NOT NULL DEFAULT 'false',
  `tags` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `categoryID`, `subCatID`, `brandID`, `name`, `price`, `previous_price`, `photo`, `brief`, `description`, `colors`, `sizes`, `show_new`, `show_hot`, `tags`) VALUES
(2, 1, 2, 1, 'Phasellus Vel Hendrerit', '1245', '1300', '13.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.', '<ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li><li>Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper.</li><li>Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.&nbsp;</li></ul><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>', 'Red,Black,Green', 'M,XL,L', 'true', 'true', 'man, men shirt'),
(4, 2, 1, 2, 'Black Girls High Low Kids Dress', '1300', '1400', 'w3.jpg', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', '', '', '', 'false', ''),
(5, 2, 2, 1, 'Phasellus Vel Hendrerit', '1600', '1700', 'w6.jpg', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', '', '', '', 'false', ''),
(6, 3, 7, 1, 'Daraz White Cotton', '1900', '2000', 'w1.jpg', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', '', '', '', 'false', ''),
(7, 1, 9, 3, 'black t-shirt', '1200', '1400', '12.jpg', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', 'Pellentesque non diam et tortor dignissim bibendum. Neque sit amet mauris egestas quis mattis velit fringilla. Curabitur viver justo sed scelerisque. Cras mattis consectetur purus sit amet.\r\n\r\nTortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nullam id dolor id nibh ultr', '', '', '', 'false', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `sorting` int(11) NOT NULL,
  `categoryID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `photo`, `sorting`, `categoryID`) VALUES
(1, 'Trendy fashion shop', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'slide2.jpg', 0, 1),
(3, 'Best fashion shop', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'slide3.jpg', 0, 2),
(4, 'Trendy fashion shop', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas', 'slide4.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `subCatID` bigint(20) NOT NULL,
  `categoryID` bigint(20) NOT NULL,
  `sub_cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`subCatID`, `categoryID`, `sub_cat_name`) VALUES
(1, 1, 'Shirt'),
(2, 1, 'Pant'),
(6, 1, 'longi'),
(7, 2, 'shari'),
(8, 2, 'tops'),
(9, 3, 'tops');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `msg`) VALUES
(1, 'Md. Nazrul Islam', 'this is message from me'),
(2, 'Moshed Habib', 'Thank you so much');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brandID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `coustomer`
--
ALTER TABLE `coustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `sub_catID` (`subCatID`),
  ADD KEY `brandID` (`brandID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`subCatID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brandID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coustomer`
--
ALTER TABLE `coustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `subCatID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `category` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
