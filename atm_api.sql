-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 11:57 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `agd`
--

CREATE TABLE `agd` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agd`
--

INSERT INTO `agd` (`id`, `name`, `address`, `division`, `lat`, `lon`) VALUES
(1, 'Sule', 'No. (73/75), Sule Pagoda Road, Pabaedan Township.', 'Yangon', '160.456', '-19.285'),
(2, 'AGD Tower ATM(1)', 'No. (73/75), Sule Pagoda Road, Pabaedan Township.', 'Yangon', '160.767', '-14.324');

-- --------------------------------------------------------

--
-- Table structure for table `aya`
--

CREATE TABLE `aya` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aya`
--

INSERT INTO `aya` (`id`, `name`, `address`, `division`, `lat`, `lon`) VALUES
(1, 'Hlaing', 'Ywama Curve, BaYintNaung Road, Hlaing Township. ', 'Yangon', '160.657', '-19.576'),
(2, 'Junction Mawtin', 'Corner of Anawyahtar and LanThit Road, LanMaDaw Township.', 'Yangon', '160.456', '-19.343'),
(3, 'Junction Zawana', 'No 26, LayHtountKan Road ,ThuMingalar Ward, Thingangkunn Township.', 'Yangon', '145.867', '-57.768'),
(4, 'City Mart(Myaynigone)', 'No 231-232 , Pyay Road, ShinSawPu Ward, San Chaung Township.', 'Yangon', '324.8678', '123.567'),
(5, 'City Mart(Thamine)', 'Corner of InnSein and KyikeWinePagoda Road, MayanGone Township.', 'Yangon', '160.678', '234.576'),
(6, 'Ocean(9 Miles)', 'Corner of Pyay Road and Witoriya Road, Corner Kamaryut Township.', 'Yangon', '46.786', '-68.679'),
(7, 'Taw Win Centre', 'No (45), Pyay Road, Dagon Township.', 'Yangon', '160.789', '-19.657'),
(8, 'Max(Office)', 'AlanPya Pagoda Road, Dagon Township.', 'Yangon', '123.657', '-16.646'),
(9, 'City Mart-Head office', 'No (1-11), BarGaYar Road, San Chaung Township.', 'Yangon', '76.588', '23.757'),
(10, 'Sein Gay Har(Pyay Road-YGN)', 'No (44), Pyay Road, Dagon Township.', 'Yangon', '35.757', '89.768'),
(11, 'Yangon International Hotel', 'No.(330), Ah Lone Street, Dagon Township.', 'Yangon', '169.456', '19.456'),
(12, 'Sein Gay Har (Hledan)', 'No 39-41, Hledan Road, KaMarYut Township.', 'Yangon', '160.789', '-190.678'),
(13, 'Yan Kin Centre', 'Sayar San Road, Yankin Township.', 'Yangon', '160.856', '-12.679'),
(14, 'AYA Mandalay Branch(1)', 'No 602 ,26th Street, Between (83x84)St, ChanAyeTharZan Township.', 'Mandalay', '160.799', '-13.689'),
(15, 'Bo Aung Kyaw', 'No 149, BoAungKyaw Street, Between Merchant Road and Mahar Bandoola Road, KyoutTaTar Township.', 'Yangon', '160.890', '-19.806'),
(16, 'Test', 'adfasdf', 'afddfa', '243', '234');

-- --------------------------------------------------------

--
-- Table structure for table `cb`
--

CREATE TABLE `cb` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cb`
--

INSERT INTO `cb` (`id`, `name`, `address`, `division`, `lat`, `lon`) VALUES
(1, '(33)Street', 'No.(275), 33 Street, Between 84 x 85 Street, Chan Aye Thar Zan.', 'Mandalay', '160.578', '16.797'),
(2, 'Kyeemyindaing', 'No.(501/A), Lower Kyeemyindaing, Kayin National Ward, Kyeemyindaing.', 'Yangon', '160.789', '-19.647');

-- --------------------------------------------------------

--
-- Table structure for table `kbz`
--

CREATE TABLE `kbz` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kbz`
--

INSERT INTO `kbz` (`id`, `name`, `address`, `division`, `lat`, `lon`) VALUES
(1, 'Sawbwargyikone', 'No.(86/87), Lan Thit Street, Nant Thar Kone Ward, Sawbwargyikone,Innsein township.', 'Yangon', '160.459', '-19.235'),
(2, 'North Okkalar ', 'No.(315/KA 4),Ga Gyi Quarter, Thudama Street,North Okkalarpa Township.', 'Yangon', '160.453', '-19.330');

-- --------------------------------------------------------

--
-- Table structure for table `mab`
--

CREATE TABLE `mab` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mab`
--

INSERT INTO `mab` (`id`, `name`, `address`, `division`, `lat`, `lon`) VALUES
(1, 'Ahlone', 'No.43/44, Kyeemyindine Kanar St, Sinmin Ward,Ahlone Township.', 'Yangon', '160.894', '-19.456'),
(2, 'AKK Shopping', 'AKK Shopping Mall, Lay Htank Kann Road	Tinggangyun Township.', 'Yangon', '160.543', '-19.679');

-- --------------------------------------------------------

--
-- Table structure for table `uab`
--

CREATE TABLE `uab` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uab`
--

INSERT INTO `uab` (`id`, `name`, `address`, `division`, `lat`, `lon`) VALUES
(1, 'Alone(Lower Kyi MyinDaing Road)', 'No (289), Lower Kyi MyinDaing Road,Alone Township.', 'Yangon', '160.867', '-19.456'),
(2, 'Bayint Naung', 'No.(J/53), Yuzana Road, 1st Quarter,Bayint Naung Warehouse,Mayangone.', 'Yangon', '160.345', '-19.345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agd`
--
ALTER TABLE `agd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aya`
--
ALTER TABLE `aya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cb`
--
ALTER TABLE `cb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kbz`
--
ALTER TABLE `kbz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mab`
--
ALTER TABLE `mab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uab`
--
ALTER TABLE `uab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agd`
--
ALTER TABLE `agd`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `aya`
--
ALTER TABLE `aya`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cb`
--
ALTER TABLE `cb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kbz`
--
ALTER TABLE `kbz`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mab`
--
ALTER TABLE `mab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uab`
--
ALTER TABLE `uab`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
