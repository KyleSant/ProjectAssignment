-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 07:00 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outlet`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `Admin_ID` int(11) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Email` varchar(85) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`Admin_ID`, `Username`, `Password`, `Email`) VALUES
(1, 'kylesant', 'outlet123', 'kyle.sant.a100883@mcast.edu.mt');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Brand_Id` int(11) NOT NULL,
  `Brand_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`Brand_Id`, `Brand_Name`) VALUES
(1, 'ZOWIE'),
(2, 'RAZER'),
(3, 'CORSAIR'),
(4, 'LOGITECH'),
(5, 'ROCCAT'),
(6, 'RED');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Category_ID` int(11) NOT NULL,
  `Category_Name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Category_ID`, `Category_Name`) VALUES
(1, 'Mice'),
(2, 'Keyboards'),
(3, 'Monitors'),
(4, 'Headsets'),
(5, 'Laptop'),
(6, 'Gaming chair');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `Client_ID` int(11) NOT NULL,
  `First_Name` varchar(25) NOT NULL,
  `Last_Name` varchar(25) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_Number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`Client_ID`, `First_Name`, `Last_Name`, `Password`, `Email`, `Phone_Number`) VALUES
(1, 'Kyle', 'Sant', 'kyle123', 'kyle.sant.a100883@mcast.edu.mt', '99604166'),
(2, 'Silvan', 'Vella', 'silvan123', 'silvan.vella.a100887@mcast.edu.mt', '99604325'),
(3, 'Owen', 'Mark', 'owen123', 'owen123', '99604222');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(25) NOT NULL,
  `Price` float NOT NULL,
  `Stock` varchar(25) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Brand` int(11) NOT NULL,
  `Category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_Id`, `Product_Name`, `Price`, `Stock`, `Description`, `Image`, `Brand`, `Category`) VALUES
(1, 'Zowie FK1', 86, 'In Stock', 'No matter whether you are right-handed or left-handed, FK Series are designed for your comfort', 'images/zowie.jpg', 1, 1),
(2, 'Razer Taipan', 89, 'In Stock', 'Whether you\'re right-handed or a south-paw; use claw, palm or fingertip-grip, this mouse stays firmly in hand and comfortably', 'images/taipan.jpg', 2, 1),
(3, 'Razer Mamba', 109, 'In Stock', 'Boasting the world\'s most precise 16,000 DPI sensor, the Razer Mamba wireless mouse provides unsurpassable accuracy for an even greater edge over your competition', 'images/mamba.jpg', 2, 1),
(4, 'Zowie ECA-1', 68, 'In Stock', 'Ergonomic design exclusively for right-handed users. It offers users a bigger room for wrist movements', 'images/ECA.jpg', 1, 1),
(5, 'Corsair Glaive', 99, 'In Stock', 'The Glaive RGB from Corsair is a gaming mouse that aims to appeal to all gamers. Allowing for the user to quickly hot-swap different side pieces, the Glaive is a highly versatile mouse', 'images/glaive.jpg', 3, 1),
(6, 'Roccat Suora', 109, 'In Stock', 'Total gaming domination. Skill is essential, but the right tool is what puts a dedicated gamer over the top. Combining amazing technical engineering with savvy, eye-pleasing design', 'images/Roccat.jpg', 5, 2),
(7, 'Logitech G10', 117, 'In Stock', 'Craft is a wireless keyboard with a premium typing experience and a versatile input dial that adapts to what you\'re making - keeping you focused and in your creative flow', 'images/logitech.jpeg', 4, 2),
(8, 'Red Dragon', 130, 'In Stock', 'Custom mechanical switches (Cherry Blue equivalent) for ultimate gaming performance\r\nRed LED adjustable lighting and double-shot injection molded keycaps for crystal clear backlighting', 'images/redragon.jpg', 6, 2),
(9, 'Corsair MX Cherry Red', 139, 'In Stock', 'Aircraft-grade anodized brushed aluminum frame for superior durability / Advanced lighting control and large font keycaps deliver dynamic, vibrant backlighting\r\nCUE support enables advanced macro', 'images/mxcherry.jpg', 3, 2),
(10, 'Razer Black Widow ', 159, 'In Stock', 'Mechanical Key Architecture for superior tactility and faster response,USB Wired\r\nFully Programmable Keys + 5 Additional Gaming Keys - With On-The-Fly macro recording\r\n10 Customizable software profile', 'images/blackwidow.jpg', 2, 2),
(11, 'DXRacer Formula Series', 319, 'In Stock', 'Type: Gaming chair.\r\nMaterial: Synthetic leather.\r\nSuitable for body size: 160 cm up to 180 cm.\r\nColour: Black.\r\nWeight: 22 kg.', 'images/DXRacer.jpg', 2, 6),
(12, 'GT OMEGA PRO RACING', 187, 'In Stock', '85-160 degrees angle adjuster\r\nHeadrest pillow and lumbar cushion are included\r\nOrthopedically and ergonomically designed\r\nBlue & black Composite fabric material\r\nHeight-adjustable gas spring cylinder', 'images/gtomega.jpg', 3, 6),
(13, 'JL Comfurni', 120, 'In Stock', 'Ultra Comfy Design with Top Quality Faux Leather and Wheels -- The designed curves and shapes enable our leather chair to perfectly position your body, making you feel extremely comfortable', 'images/com.jpg', 4, 6),
(14, 'VERTAGEAR Racing Series', 288, 'In Stock', 'Manufacturer\'s warranty: 1 year (S)\r\nMaterial: Faux _ leather\r\nColour: Black/Carbon', 'images/verta.jpg', 3, 6),
(15, 'KLIM IMPACT', 39, 'In Stock', 'TOTAL IMMERSION: KLIM Impact gives you an immersive 7.1 surround sound.', 'images/klim.jpg', 4, 4),
(17, 'Razer Kraken', 89, 'In Stock', 'Everything from gunfire, to footsteps, voices and even the wind in the trees can be heard with positional accuracy relative to your location in the game world', 'images/headsetrazer.jpg', 2, 4),
(18, 'Logitech G430 ', 54, 'In Stock', 'You can hear up to seven discrete channels of audio data plus the low-frequency effects channel, known as 7.1 surround sound', 'images/headsetlogitech.jpg', 4, 4),
(19, 'HyperX Cloud II', 129, 'In Stock', 'USB Audio Sound Card with 7.1 Virtual Surround Sound, 53mm Drivers Neodymium Magnets', 'images/hyperx.jpg', 6, 4),
(20, 'Lenovo IdeaPad 320-15AST', 329, 'In Stock', 'Laptops come in various sizes, which usually refer to the size of the display. They range from a 10-inch to an 20-inch for mainstream laptops. Their weight ranges from a couple of pounds to over 9lbs.\r\n', 'images/lenovo.jpg', 6, 5),
(21, 'Acer Chromebook 14', 300, 'In Stock', 'Laptops come in various sizes, which usually refer to the size of the display. They range from a 10-inch to an 20-inch for mainstream laptops. Their weight ranges from a couple of pounds to over 9lbs.', 'images/acer.jpg', 5, 5),
(22, 'HP Pavilion', 445, 'In Stock', 'Laptops come in various sizes, which usually refer to the size of the display. They range from a 10-inch to an 20-inch for mainstream laptops. Their weight ranges from a couple of pounds to over 9lbs.', 'images/hp.jpg', 3, 5),
(23, 'ASUS X Series', 279, 'In Stock', 'Laptops come in various sizes, which usually refer to the size of the display. They range from a 10-inch to an 20-inch for mainstream laptops. Their weight ranges from a couple of pounds to over 9lbs.', 'images/asus.jpg', 4, 5),
(24, 'Dell Inspiron 5000', 649, 'In Stock', 'Laptops come in various sizes, which usually refer to the size of the display. They range from a 10-inch to an 20-inch for mainstream laptops. Their weight ranges from a couple of pounds to over 9lbs.', 'images/dell.jpg', 3, 5),
(25, 'MSI GP62MVR', 929, 'In Stock', 'Laptops come in various sizes, which usually refer to the size of the display. They range from a 10-inch to an 20-inch for mainstream laptops. Their weight ranges from a couple of pounds to over 9lbs.', 'images/msi.jpg', 6, 5),
(26, 'ASUS VS248HR', 113, 'In Stock', '50,000,000:1 ASUS smart contrast ratio. Asus support line: 01442-265548 for queries related to the product', 'images/monitorasus.jpg', 5, 3),
(27, 'LG 23MP68VQ', 299, 'In Stock', 'IPS/color calibrated\r\nNew cinema screen\r\nAMD Freesync(HDMI)\r\nBlack stabilizer', 'images/monitorlg.jpg', 3, 3),
(28, 'ViewSonic VX3211', 254, 'In Stock', '2K WQHD 2560 x 1440 Resolution\r\n99% sRGB colour coverage and 87% AdobeRGB colour coverage provide richer and more precise colour\r\nIPS SuperClear technology for vivid picture quality and wider viewing angles', 'images/viewsonic.jpg', 6, 3),
(29, 'BenQ GL2580H', 108, 'In Stock', 'Enhanced 1920 x 1080 display\r\nFast 2 ms GTG response time\r\nEdge to edge slim bezel design to create seamless multi-panel configurations\r\nLow blue blight and Flicker free technology\r\nCable management system', 'images/benq.jpg', 3, 3),
(30, 'iiyama XUB2790HS-B1', 209, 'In Stock', 'IPS - IPS technology offers higher contrast, darker blacks and much better viewing angles than standard TN technology. The screen will look good no matter what angle you look at it.', 'images/iiyama.jpg', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `Product` int(11) NOT NULL,
  `Client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping_carts`
--

INSERT INTO `shopping_carts` (`Product`, `Client`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`Brand_Id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Category_ID`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`Client_ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_Id`),
  ADD KEY `Category` (`Category`),
  ADD KEY `Brand` (`Brand`);

--
-- Indexes for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD UNIQUE KEY `Product_2` (`Product`),
  ADD KEY `Client` (`Client`),
  ADD KEY `Product` (`Product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `Brand_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `Client_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Brand`) REFERENCES `brands` (`Brand_Id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`Category`) REFERENCES `categories` (`Category_ID`);

--
-- Constraints for table `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD CONSTRAINT `shopping_carts_ibfk_1` FOREIGN KEY (`Product`) REFERENCES `products` (`Product_Id`),
  ADD CONSTRAINT `shopping_carts_ibfk_2` FOREIGN KEY (`Client`) REFERENCES `clients` (`Client_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
