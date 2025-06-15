-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 05:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `package`, `price`, `arrivals`, `leaving`) VALUES
(84, 'ishan', 'mnfbacah@gmail.com', '1234567890', 'santinagar', 'Muktinath', 5, 'Standard', '72495', '2023-02-16', '2023-02-28'),
(89, 'oman', 'mnfbacah@gmail.com', '1234567890', 'suryabinayak', 'Muktinath', 2, 'Basic', '20998', '2023-02-16', '2023-02-28'),
(93, 'ishan', 'nthckble@gmail.com', '1234567890', 'asjkdhfasdf', 'Muktinath', 2, 'Basic', '20998', '2023-02-27', '2023-03-11'),
(94, 'ishan', 'nthckble@gmail.com', '1234567890', 'asjkdhfasdf', 'Muktinath', 2, 'Basic', '20998', '2023-02-27', '2023-03-11'),
(95, 'ishan', 'mnfbacah@gmail.com', '1234567890', 'asjkdhfasdf', 'Muktinath', 2, 'Basic', '20998', '2023-02-27', '2023-03-11'),
(96, 'ishan', 'mnfbacah@gmail.com', '1234567890', 'asjkdhfasdf', 'Muktinath', 2, 'Basic', '20998', '2023-02-27', '2023-03-11'),
(107, 'ishan', 'mnfbacah@gmail.com', '1234567890', 'asjkdhfasdf', 'Mustang', 11, 'Basic', 'Nrs. 25,000', '2023-03-16', '2023-03-31'),
(108, 'oman', 'aaditya@gmail.com', '9860879509', 'hghh', 'Muktinath', 3, 'Basic', '31497', '2023-03-09', '2023-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `image`, `name`, `details`) VALUES
(1, 'muktinath.jpg', 'Muktinath Darshan', 'Muktinath Is A Vishnu Temple, Sacred To Both Hindus And Buddhists. It Is........');

-- --------------------------------------------------------

--
-- Table structure for table `destination1`
--

CREATE TABLE `destination1` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination1`
--

INSERT INTO `destination1` (`id`, `image`, `name`, `details`) VALUES
(2, 'kalinchowk.jpg', 'Kalinchowk Darshan', 'Kalinchok Bhagwati Temple is a Hindu shrine located in the eastern hilly......');

-- --------------------------------------------------------

--
-- Table structure for table `destination2`
--

CREATE TABLE `destination2` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination2`
--

INSERT INTO `destination2` (`id`, `image`, `name`, `details`) VALUES
(3, 'halesi.jpg', 'Halesi Mahadev Darshan', 'Halesi Mahadev is situated in the Khotang district of...');

-- --------------------------------------------------------

--
-- Table structure for table `destination3`
--

CREATE TABLE `destination3` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination3`
--

INSERT INTO `destination3` (`id`, `image`, `name`, `details`) VALUES
(4, 'pathivara.jpg', 'Pathivara Darshan', 'Pathibhara Devi is one of the most significant temples in Nepal. It is...');

-- --------------------------------------------------------

--
-- Table structure for table `destination4`
--

CREATE TABLE `destination4` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination4`
--

INSERT INTO `destination4` (`id`, `image`, `name`, `details`) VALUES
(5, 'janaki.jpg', 'Janaki Mandir', 'Janaki Mandir is a Hindu temple in Janakpur, Nepal, dedicated to the Hindu goddess Sita. It is...');

-- --------------------------------------------------------

--
-- Table structure for table `destination5`
--

CREATE TABLE `destination5` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination5`
--

INSERT INTO `destination5` (`id`, `image`, `name`, `details`) VALUES
(6, 'lumbini.jpg', 'Lumbini Darshan', 'Siddhartha Gautama, the Lord Buddha, was born in 623 B.C. in....');

-- --------------------------------------------------------

--
-- Table structure for table `destination6`
--

CREATE TABLE `destination6` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination6`
--

INSERT INTO `destination6` (`id`, `image`, `name`, `details`) VALUES
(7, 'pashupati.jpg', 'Pashupati, Dakhsinkali, Chandragiri Darshan', 'Pashupatinath Temple is a Hindu temple dedicated to...');

-- --------------------------------------------------------

--
-- Table structure for table `destination7`
--

CREATE TABLE `destination7` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination7`
--

INSERT INTO `destination7` (`id`, `image`, `name`, `details`) VALUES
(1, 'bungee.jpg', 'Bungee/Swing', 'If you are looking for some thrill in the country, then go for Bungee Jumping in Nepal. Out....');

-- --------------------------------------------------------

--
-- Table structure for table `destination8`
--

CREATE TABLE `destination8` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination8`
--

INSERT INTO `destination8` (`id`, `image`, `name`, `details`) VALUES
(2, 'rafting.jpg', 'Rafting', 'Nepal is a land of numerous world class rivers which provide fun and exciting river rafting...');

-- --------------------------------------------------------

--
-- Table structure for table `destination9`
--

CREATE TABLE `destination9` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination9`
--

INSERT INTO `destination9` (`id`, `image`, `name`, `details`) VALUES
(3, 'wall.jpeg', 'Wall climbing', 'Wall climbing in Nepal is an indoor sports/activity that requires full-body workout and skills...');

-- --------------------------------------------------------

--
-- Table structure for table `destination10`
--

CREATE TABLE `destination10` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination10`
--

INSERT INTO `destination10` (`id`, `image`, `name`, `details`) VALUES
(4, 'mountainbiking.jpg', 'Mountain Biking', 'Mountain biking is the fastest growing sport in Nepal, with great single track and multi-day adventures throughout...');

-- --------------------------------------------------------

--
-- Table structure for table `destination11`
--

CREATE TABLE `destination11` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination11`
--

INSERT INTO `destination11` (`id`, `image`, `name`, `details`) VALUES
(5, 'paragliding2.jpg', 'Paragliding', 'Paragliding is an adventure sport which solely depends on the weather and the...');

-- --------------------------------------------------------

--
-- Table structure for table `destination12`
--

CREATE TABLE `destination12` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination12`
--

INSERT INTO `destination12` (`id`, `image`, `name`, `details`) VALUES
(6, 'canyoning.jpg', 'Canyoning', 'Canyoning is an amazing full body and mind experience that enables you to explore...');

-- --------------------------------------------------------

--
-- Table structure for table `destination13`
--

CREATE TABLE `destination13` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination13`
--

INSERT INTO `destination13` (`id`, `image`, `name`, `details`) VALUES
(7, 'zipline.jpg', 'Zipline', 'Zipflyer Nepal is, in fact, one of the world\'s longest, fastest and steepest ziplines...');

-- --------------------------------------------------------

--
-- Table structure for table `destination14`
--

CREATE TABLE `destination14` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination14`
--

INSERT INTO `destination14` (`id`, `image`, `name`, `details`) VALUES
(1, 'everest.jpg', 'Everest region trek', 'Everest Base Camp Trek is regarded as one of the trendiest trails in Nepal....');

-- --------------------------------------------------------

--
-- Table structure for table `destination15`
--

CREATE TABLE `destination15` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination15`
--

INSERT INTO `destination15` (`id`, `image`, `name`, `details`) VALUES
(2, 'annapurna.jpg', 'Annapurna Region trek', 'Annapurna Circuit Trek is one of the most popular trekking routes in the...');

-- --------------------------------------------------------

--
-- Table structure for table `destination16`
--

CREATE TABLE `destination16` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination16`
--

INSERT INTO `destination16` (`id`, `image`, `name`, `details`) VALUES
(3, 'lantang.jpeg', 'Langtang valley trek', 'Langtang Valley Trek is one of the shortest treks in the....');

-- --------------------------------------------------------

--
-- Table structure for table `destination17`
--

CREATE TABLE `destination17` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination17`
--

INSERT INTO `destination17` (`id`, `image`, `name`, `details`) VALUES
(4, 'mardi.jpg', 'Mardi himal trek', 'Mardi Himal Trekking is one of the fascinating tropical trekking routes in the western part of....');

-- --------------------------------------------------------

--
-- Table structure for table `destination18`
--

CREATE TABLE `destination18` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination18`
--

INSERT INTO `destination18` (`id`, `image`, `name`, `details`) VALUES
(5, 'ghorepani.jpg', 'Ghorepani poonhill trek', 'Ghorepani Poonhill Trek, also known as Annapurna Sunrise Trekking...');

-- --------------------------------------------------------

--
-- Table structure for table `destination19`
--

CREATE TABLE `destination19` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination19`
--

INSERT INTO `destination19` (`id`, `image`, `name`, `details`) VALUES
(6, 'gokyo.jpg', 'Gokyo lake trek', 'Gokyo Lakes Trek is one of the most adventurous and least traveled trekking routes in the....');

-- --------------------------------------------------------

--
-- Table structure for table `destination20`
--

CREATE TABLE `destination20` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination20`
--

INSERT INTO `destination20` (`id`, `image`, `name`, `details`) VALUES
(7, 'pikey.jpg', 'Pikey peak trek', 'As with most treks in Nepal, Pikey Peak is incredible during the spring, fall, and...');

-- --------------------------------------------------------

--
-- Table structure for table `destination21`
--

CREATE TABLE `destination21` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination21`
--

INSERT INTO `destination21` (`id`, `image`, `name`, `details`) VALUES
(1, 'durbar.jpg', 'Durbar Squares', 'Walkthrough the palace square and discover a treasure trove of art in stone, wood....');

-- --------------------------------------------------------

--
-- Table structure for table `destination22`
--

CREATE TABLE `destination22` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination22`
--

INSERT INTO `destination22` (`id`, `image`, `name`, `details`) VALUES
(2, 'pokhara.jpg', 'Chitwan-Lumbini-Pokhara', 'Chitwan Lumbini Pokhara Tour package is a combination of mountain scenery....');

-- --------------------------------------------------------

--
-- Table structure for table `destination23`
--

CREATE TABLE `destination23` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination23`
--

INSERT INTO `destination23` (`id`, `image`, `name`, `details`) VALUES
(3, 'bandipur.jpg', 'Gorkha-Bandipur-Palpa', 'Gorkha-Bandipur-Palpa Tour will provide the visitors with the golden opportunity....');

-- --------------------------------------------------------

--
-- Table structure for table `destination24`
--

CREATE TABLE `destination24` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination24`
--

INSERT INTO `destination24` (`id`, `image`, `name`, `details`) VALUES
(4, 'illam.jpg', 'Illam', 'Illam district is one of 14 districts of Province No. 1 of eastern Nepal. It is a Hill district...');

-- --------------------------------------------------------

--
-- Table structure for table `destination25`
--

CREATE TABLE `destination25` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination25`
--

INSERT INTO `destination25` (`id`, `image`, `name`, `details`) VALUES
(5, 'zoo.jpg', 'Zoo', 'The Central Zoo, with an area of about 6 ha., provides shelter to a total of 942 individua...');

-- --------------------------------------------------------

--
-- Table structure for table `destination26`
--

CREATE TABLE `destination26` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination26`
--

INSERT INTO `destination26` (`id`, `image`, `name`, `details`) VALUES
(6, 'botanical.avif', 'Godawari Botanical Garden', 'It is located at the base of Mt. Phulchowki (2765 m), the highest peak of the....');

-- --------------------------------------------------------

--
-- Table structure for table `destination27`
--

CREATE TABLE `destination27` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination27`
--

INSERT INTO `destination27` (`id`, `image`, `name`, `details`) VALUES
(7, 'Ghandruk.jpg', 'Ghandruk Educational Tour', 'Ghandruk is a Village Development Committee in the Kaski District of the....');

-- --------------------------------------------------------

--
-- Table structure for table `destination28`
--

CREATE TABLE `destination28` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination28`
--

INSERT INTO `destination28` (`id`, `image`, `name`, `details`) VALUES
(1, 'mustang.jpg', 'Mustang', 'Mustang District is one of the eleven districts of Gandaki Province...');

-- --------------------------------------------------------

--
-- Table structure for table `destination29`
--

CREATE TABLE `destination29` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination29`
--

INSERT INTO `destination29` (`id`, `image`, `name`, `details`) VALUES
(2, 'upper.jpg', 'Upper Mustang', 'Upper Mustang, one of the most picturesque and exciting landscape in the Nepalese....');

-- --------------------------------------------------------

--
-- Table structure for table `destination30`
--

CREATE TABLE `destination30` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination30`
--

INSERT INTO `destination30` (`id`, `image`, `name`, `details`) VALUES
(3, 'Ghandruk.jpg', 'Pokhara-Ghandruk', 'Pokhara to Ghandruk is approx. 55 KM distance which can be reached...');

-- --------------------------------------------------------

--
-- Table structure for table `destination31`
--

CREATE TABLE `destination31` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination31`
--

INSERT INTO `destination31` (`id`, `image`, `name`, `details`) VALUES
(4, 'chitwan.jpg', 'Chitwan National park', 'Chitwan National Park is the first national park in Nepal. Formerly called Royal....');

-- --------------------------------------------------------

--
-- Table structure for table `destination32`
--

CREATE TABLE `destination32` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination32`
--

INSERT INTO `destination32` (`id`, `image`, `name`, `details`) VALUES
(5, 'illam.jpg', 'Illam', 'Illam district is one of 14 districts of Province No. 1 of eastern Nepal. It is a Hill district...');

-- --------------------------------------------------------

--
-- Table structure for table `destination33`
--

CREATE TABLE `destination33` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination33`
--

INSERT INTO `destination33` (`id`, `image`, `name`, `details`) VALUES
(6, 'rara.jpg', 'Rara Lake', 'Rara Lake also known as Mahendra Lake is the largest fresh water lake...');

-- --------------------------------------------------------

--
-- Table structure for table `destination34`
--

CREATE TABLE `destination34` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination34`
--

INSERT INTO `destination34` (`id`, `image`, `name`, `details`) VALUES
(7, 'gosaikunda.jpg', 'Gosaikunda Lake', 'Gosaikunda, also spelled Gosainkunda, is an alpine freshwater oligotrophic lake....');

-- --------------------------------------------------------

--
-- Table structure for table `destination35`
--

CREATE TABLE `destination35` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination35`
--

INSERT INTO `destination35` (`id`, `image`, `name`, `details`) VALUES
(1, 'mustang.jpg', 'Mustang', 'Mustang District is one of the eleven districts of Gandaki Province and one of....');

-- --------------------------------------------------------

--
-- Table structure for table `destination36`
--

CREATE TABLE `destination36` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination36`
--

INSERT INTO `destination36` (`id`, `image`, `name`, `details`) VALUES
(2, 'upper.jpg', 'Upper Mustang', 'Upper Mustang, one of the most picturesque and exciting landscape in the Nepalese Himalaya....');

-- --------------------------------------------------------

--
-- Table structure for table `destination37`
--

CREATE TABLE `destination37` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination37`
--

INSERT INTO `destination37` (`id`, `image`, `name`, `details`) VALUES
(3, 'Ghandruk.jpg', 'Pokhara-Ghandruk', 'Pokhara to Ghandruk is approx. 55 KM distance which can be reached within....');

-- --------------------------------------------------------

--
-- Table structure for table `destination38`
--

CREATE TABLE `destination38` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination38`
--

INSERT INTO `destination38` (`id`, `image`, `name`, `details`) VALUES
(4, 'chitwan.jpg', 'Chitwan National Park', 'Chitwan National Park is the first national park in Nepal. Formerly called Royal....');

-- --------------------------------------------------------

--
-- Table structure for table `destination39`
--

CREATE TABLE `destination39` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination39`
--

INSERT INTO `destination39` (`id`, `image`, `name`, `details`) VALUES
(5, 'rara.jpg', 'Rara Lake', 'Rara Lake also known as Mahendra Lake is the largest fresh water lake....');

-- --------------------------------------------------------

--
-- Table structure for table `destination40`
--

CREATE TABLE `destination40` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination40`
--

INSERT INTO `destination40` (`id`, `image`, `name`, `details`) VALUES
(6, 'shey.jpg', 'Shey Phoksundo Lake', 'Phoksundo Lake is an alpine fresh water oligotrophic lake in Nepal\'s Shey Phoksundo National...');

-- --------------------------------------------------------

--
-- Table structure for table `destination41`
--

CREATE TABLE `destination41` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destination41`
--

INSERT INTO `destination41` (`id`, `image`, `name`, `details`) VALUES
(7, 'kuri.png', 'Kuri village', 'Kuri village is a cluster of old stone houses and home to a....');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `image`, `name`, `description`) VALUES
(1, 'chandragiri.jpg', 'Religious', 'This section includes various religious packages.');

-- --------------------------------------------------------

--
-- Table structure for table `package1`
--

CREATE TABLE `package1` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package1`
--

INSERT INTO `package1` (`id`, `image`, `name`, `description`) VALUES
(2, 'paragliding1.jpg', 'Adventure Sports', 'This section includes packages with adventurous sports.');

-- --------------------------------------------------------

--
-- Table structure for table `package2`
--

CREATE TABLE `package2` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package2`
--

INSERT INTO `package2` (`id`, `image`, `name`, `description`) VALUES
(3, 'trekking.jpeg', 'Trekking/Hiking', 'This Section Includes Various Trekking/Hiking Packages.');

-- --------------------------------------------------------

--
-- Table structure for table `package3`
--

CREATE TABLE `package3` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package3`
--

INSERT INTO `package3` (`id`, `image`, `name`, `description`) VALUES
(4, 'education.jpg', 'Educational', 'This section includes various educational packages.');

-- --------------------------------------------------------

--
-- Table structure for table `package4`
--

CREATE TABLE `package4` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package4`
--

INSERT INTO `package4` (`id`, `image`, `name`, `description`) VALUES
(5, 'family.jpg', 'Family', 'This section includes various packages for family.');

-- --------------------------------------------------------

--
-- Table structure for table `package5`
--

CREATE TABLE `package5` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package5`
--

INSERT INTO `package5` (`id`, `image`, `name`, `description`) VALUES
(6, 'couple.jpg', 'Couple', 'This section includes various packages for couples.');

-- --------------------------------------------------------

--
-- Table structure for table `package6`
--

CREATE TABLE `package6` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `package7`
--

CREATE TABLE `package7` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package7`
--

INSERT INTO `package7` (`id`, `image`, `name`, `description`) VALUES
(1, 'aashish.jpg', 'aashish', 'fasdf'),
(2, 'aashish.jpg', 'aashish', 'fasdf');

-- --------------------------------------------------------

--
-- Table structure for table `religious`
--

CREATE TABLE `religious` (
  `id` int(255) NOT NULL,
  `image` int(255) NOT NULL,
  `name` int(255) NOT NULL,
  `detail` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination1`
--
ALTER TABLE `destination1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination2`
--
ALTER TABLE `destination2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination3`
--
ALTER TABLE `destination3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination4`
--
ALTER TABLE `destination4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination5`
--
ALTER TABLE `destination5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination6`
--
ALTER TABLE `destination6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination7`
--
ALTER TABLE `destination7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination8`
--
ALTER TABLE `destination8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination9`
--
ALTER TABLE `destination9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination10`
--
ALTER TABLE `destination10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination11`
--
ALTER TABLE `destination11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination12`
--
ALTER TABLE `destination12`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination13`
--
ALTER TABLE `destination13`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination14`
--
ALTER TABLE `destination14`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination15`
--
ALTER TABLE `destination15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination16`
--
ALTER TABLE `destination16`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination17`
--
ALTER TABLE `destination17`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination18`
--
ALTER TABLE `destination18`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination19`
--
ALTER TABLE `destination19`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination20`
--
ALTER TABLE `destination20`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination21`
--
ALTER TABLE `destination21`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination22`
--
ALTER TABLE `destination22`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination23`
--
ALTER TABLE `destination23`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination24`
--
ALTER TABLE `destination24`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination25`
--
ALTER TABLE `destination25`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination26`
--
ALTER TABLE `destination26`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination27`
--
ALTER TABLE `destination27`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination28`
--
ALTER TABLE `destination28`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination29`
--
ALTER TABLE `destination29`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination30`
--
ALTER TABLE `destination30`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination31`
--
ALTER TABLE `destination31`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination32`
--
ALTER TABLE `destination32`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination33`
--
ALTER TABLE `destination33`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination34`
--
ALTER TABLE `destination34`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination35`
--
ALTER TABLE `destination35`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination36`
--
ALTER TABLE `destination36`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination37`
--
ALTER TABLE `destination37`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination38`
--
ALTER TABLE `destination38`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination39`
--
ALTER TABLE `destination39`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination40`
--
ALTER TABLE `destination40`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination41`
--
ALTER TABLE `destination41`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package1`
--
ALTER TABLE `package1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package2`
--
ALTER TABLE `package2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package3`
--
ALTER TABLE `package3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package4`
--
ALTER TABLE `package4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package5`
--
ALTER TABLE `package5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package6`
--
ALTER TABLE `package6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package7`
--
ALTER TABLE `package7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religious`
--
ALTER TABLE `religious`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination1`
--
ALTER TABLE `destination1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination2`
--
ALTER TABLE `destination2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination3`
--
ALTER TABLE `destination3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination4`
--
ALTER TABLE `destination4`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination5`
--
ALTER TABLE `destination5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination6`
--
ALTER TABLE `destination6`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `destination7`
--
ALTER TABLE `destination7`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination8`
--
ALTER TABLE `destination8`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination9`
--
ALTER TABLE `destination9`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination10`
--
ALTER TABLE `destination10`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination11`
--
ALTER TABLE `destination11`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination12`
--
ALTER TABLE `destination12`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination13`
--
ALTER TABLE `destination13`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `destination14`
--
ALTER TABLE `destination14`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination15`
--
ALTER TABLE `destination15`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination16`
--
ALTER TABLE `destination16`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination17`
--
ALTER TABLE `destination17`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination18`
--
ALTER TABLE `destination18`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination19`
--
ALTER TABLE `destination19`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination20`
--
ALTER TABLE `destination20`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destination21`
--
ALTER TABLE `destination21`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination22`
--
ALTER TABLE `destination22`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination23`
--
ALTER TABLE `destination23`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination24`
--
ALTER TABLE `destination24`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination25`
--
ALTER TABLE `destination25`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination26`
--
ALTER TABLE `destination26`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination27`
--
ALTER TABLE `destination27`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `destination28`
--
ALTER TABLE `destination28`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination29`
--
ALTER TABLE `destination29`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination30`
--
ALTER TABLE `destination30`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination31`
--
ALTER TABLE `destination31`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination32`
--
ALTER TABLE `destination32`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination33`
--
ALTER TABLE `destination33`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination34`
--
ALTER TABLE `destination34`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `destination35`
--
ALTER TABLE `destination35`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destination36`
--
ALTER TABLE `destination36`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `destination37`
--
ALTER TABLE `destination37`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destination38`
--
ALTER TABLE `destination38`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `destination39`
--
ALTER TABLE `destination39`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination40`
--
ALTER TABLE `destination40`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination41`
--
ALTER TABLE `destination41`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package2`
--
ALTER TABLE `package2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package3`
--
ALTER TABLE `package3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package4`
--
ALTER TABLE `package4`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package5`
--
ALTER TABLE `package5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `package6`
--
ALTER TABLE `package6`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package7`
--
ALTER TABLE `package7`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `religious`
--
ALTER TABLE `religious`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
