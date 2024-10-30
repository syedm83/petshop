-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Oct 30, 2024 at 03:39 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ms379`
--

-- --------------------------------------------------------

--
-- Table structure for table `PSProducts`
--

CREATE TABLE IF NOT EXISTS `PSProducts` (
  `PSProductID` int(11) NOT NULL,
  `PSProductCode` varchar(10) NOT NULL,
  `PSProductName` varchar(255) NOT NULL,
  `PSdescription` text NOT NULL,
  `PSAisle_Number` varchar(15) NOT NULL,
  `PSCategoryID` int(11) NOT NULL,
  `PSWholesalePrice` decimal(10,2) NOT NULL,
  `PSListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `PSProducts`
--

INSERT INTO `PSProducts` (`PSProductID`, `PSProductCode`, `PSProductName`, `PSdescription`, `PSAisle_Number`, `PSCategoryID`, `PSWholesalePrice`, `PSListPrice`, `DateCreated`) VALUES
(101, 'CAL', 'Calico Cat Kitten', 'Calico Kitten -- 3 months old', '0', 100, 100.00, 200.00, '2024-10-30 11:13:58'),
(1001, 'PB', 'Pet Bed', 'A medium sized pet bed, perfect for both cats and dogs! Contains orthopedic filling that contours to your pet''s shape, providing optimal comfort + alleviating pressure points.', 'A10', 1000, 15.00, 20.00, '2024-10-18 13:46:47'),
(1002, 'PBC', 'Covered Cat Bed', 'Give your feline friend the ultimate cozy retreat with our covered cat bed, designed for warmth and privacy. Crafted with soft, plush materials and a stylish exterior, this bed provides a perfect haven for your kitty to curl up and feel secure.', '0', 1000, 12.00, 15.00, '2024-10-18 13:52:24'),
(1003, 'PBD', 'Heated Dog Bed', 'Keep your furry companion warm and comfortable with our heated flat dog bed, perfect for chilly days and nights. Featuring a soft, durable surface and adjustable heat settings, this bed ensures your dog enjoys a restful sleep while staying snug and cozy.', 'A10', 1000, 30.00, 45.00, '2024-10-18 13:53:35'),
(2001, 'ADF', 'Automatic Pet Feeder', 'The automatic dry food feeder ensures your pets receive the perfect portion of kibble at scheduled times, promoting healthy eating habits and preventing overeating. With customizable feeding schedules and a large capacity, this feeder is perfect for busy pet owners who want to keep their furry friends happy and well-fed, even when they''re not home.', 'B10', 2000, 40.00, 50.00, '2024-10-18 13:54:51'),
(2002, 'AWF', 'Automatic Pet Wet Food Feeder', 'The automatic wet food feeder provides your pets with fresh, portioned meals at designated times, ensuring they enjoy the taste and nutrition they need without the hassle of manual feeding. Designed with sealed compartments to keep food fresh, this feeder is perfect for pet owners looking to simplify mealtime while maintaining their furry friends'' dietary needs.', 'B10', 2000, 60.00, 70.00, '2024-10-18 13:58:04'),
(2003, 'ACF', 'Cooling Pet Feeder', 'The insulated automatic pet food feeder keeps your furry friends'' meals cold and fresh, ensuring optimal taste and nutrition with every serving. With its advanced temperature control and sealed compartments, this feeder is perfect for pet owners who want to provide their pets with the highest quality meals, even in warm environments.', 'B10', 2000, 60.00, 70.00, '2024-10-18 13:58:42'),
(3001, 'LCT', 'Classic Cat Tree', 'The classic cat tree features multiple levels and scratching posts, providing your feline friends with ample space to climb, play, and nap. Its soft, plush fabric and sturdy design make it a cozy retreat for cats of all ages.', 'C10', 3000, 110.00, 120.00, '2024-10-18 14:02:33'),
(3002, 'MCT', 'Modern Cat Tower', 'This sleek, modern cat tower blends stylish design with functionality, offering a minimalist aesthetic that complements any home decor. With built-in shelves and cozy hideaways, it provides your cat with an inviting space to explore and lounge.', 'C10', 3000, 120.00, 140.00, '2024-10-18 14:02:30'),
(3003, 'PCT', 'Multi-Activity Cat Playground', 'The multi-activity cat playground is designed for energetic cats, featuring tunnels, ramps, and interactive toys to keep them engaged and entertained. Its durable construction ensures it can withstand even the most playful antics while offering a variety of enrichment options.', 'C10', 3000, 150.00, 200.00, '2024-10-18 14:02:31'),
(4001, 'CLC', 'Classic Dog Leash and Collar Kit', 'The classic nylon dog leash offers durability and comfort, featuring a sturdy clip and a comfortable handle for daily walks. Its vibrant colors and patterns allow pet owners to express their dog/’s personality while ensuring safety and control.', 'D10', 4000, 5.00, 8.99, '2024-10-18 14:06:15'),
(4002, 'RLC', 'Reflective Dog Leash and Collar Kit', 'This reflective dog collar enhances visibility during nighttime walks, keeping your furry friend safe while adding a stylish touch. Made from soft, adjustable material, it provides a secure fit and comfort for dogs of all sizes.', 'D10', 4000, 10.00, 15.00, '2024-10-18 14:06:16'),
(4003, 'TLC', 'Training Dog Leash and Collar Kit', 'The training harness with leash is designed to help pet owners effectively guide and train their dogs while preventing pulling. With padded straps and adjustable points, it ensures comfort and security, making it perfect for both training sessions and everyday adventures.', 'D10', 4000, 15.00, 19.99, '2024-10-18 14:06:16'),
(5001, 'BPGK', 'Professional Grooming Kit', 'The professional grooming kit offers a comprehensive set of tools, including clippers, scissors, and various brushes, perfect for pet owners who want to achieve salon-quality results at home. With ergonomic designs and high-quality materials, this kit is suitable for all grooming needs, ensuring your pet looks fabulous.', 'E10', 5000, 30.00, 45.00, '2024-10-18 14:11:11'),
(5002, 'DPGK', 'De-shedding Tool Kit', 'The deshedding tool kit features specialized brushes and tools designed to reduce shedding and remove loose fur from your pet’s coat. Ideal for long-haired breeds, this kit helps keep your home fur-free while promoting a healthy and shiny coat.', 'E10', 5000, 23.00, 30.00, '2024-10-18 14:11:12'),
(5003, 'NPGK', 'Basic Grooming Tool Kit', 'The basic grooming tool kit includes essential brushes, combs, and nail clippers, perfect for maintaining your pet''s coat and hygiene at home. Compact and easy to use, this kit provides all the basics for routine grooming, ensuring your furry friend looks and feels their best.', 'E10', 5000, 10.00, 15.00, '2024-10-18 14:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PSProducts`
--
ALTER TABLE `PSProducts`
 ADD PRIMARY KEY (`PSProductID`), ADD UNIQUE KEY `PSProductCode` (`PSProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
