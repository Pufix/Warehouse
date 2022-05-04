-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 10:56 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `depozit_atestat`
--

-- --------------------------------------------------------

--
-- Table structure for table `comenziprimite`
--

CREATE TABLE `comenziprimite` (
  `id` int(10) NOT NULL,
  `furnizor` varchar(100) DEFAULT NULL,
  `cantitate` int(10) DEFAULT NULL,
  `idprod` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenziprimite`
--

INSERT INTO `comenziprimite` (`id`, `furnizor`, `cantitate`, `idprod`) VALUES
(10, 'Altex', 430, 21),
(11, 'Altex', 239, 19),
(12, 'Flanco', 178, 27),
(13, 'Altex', 231, 30),
(14, 'Samsung Taiwan', 157, 10),
(15, 'Samsung Taiwan', 187, 12),
(16, 'Xiaomi Europe', 196, 15),
(17, 'Xiaomi Europe', 521, 18),
(18, 'Asus Romania', 132, 6),
(19, 'Lenovo USA', 142, 5),
(20, 'Asus Romania', 187, 4),
(21, 'Gainward INC', 139, 25),
(22, 'Gainward INC', 155, 26),
(23, 'Xiaomi Europe', 1678, 32),
(24, 'Flanco', 1, 31),
(26, 'Emag', 132, 1),
(27, 'Asus Romania', 12541, 1),
(28, 'Lenovo USA', 1532, 2),
(29, 'AMD', 184, 21),
(30, 'Asus Romania', 200, 3),
(31, 'Asus Romania', 500, 3);

-- --------------------------------------------------------

--
-- Table structure for table `comenzitrimise`
--

CREATE TABLE `comenzitrimise` (
  `id` int(10) NOT NULL,
  `idprod` int(10) NOT NULL,
  `cantitate` int(10) DEFAULT NULL,
  `magazin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comenzitrimise`
--

INSERT INTO `comenzitrimise` (`id`, `idprod`, `cantitate`, `magazin`) VALUES
(3, 18, 23, 'PC Garage'),
(4, 1, 12, 'Emag'),
(5, 2, 40, 'Flanco'),
(6, 3, 42, 'Altex'),
(7, 4, 12, 'Flanco'),
(8, 3, 16, 'Flanco'),
(9, 4, 32, 'Altex'),
(10, 24, 2, 'Emag'),
(11, 4, 17, 'Altex'),
(12, 4, 17, 'Altex'),
(13, 4, 12, 'Altex'),
(14, 5, 15, 'Emag'),
(15, 6, 153, 'Media Galaxy'),
(18, 24, 1, 'Altex'),
(19, 24, 100, 'Altex'),
(21, 24, 15, 'Flanco'),
(22, 24, 1112, 'Emag'),
(23, 24, 11111, 'Emag'),
(24, 1, 12, 'Altex'),
(25, 1, 15, 'Flanco'),
(26, 1, 111, 'Flanco'),
(29, 1, 154, 'Altex'),
(30, 2, 100, 'Emag'),
(31, 21, 776, 'Altex'),
(32, 1, 500, 'Altex'),
(33, 1, 1000, 'Flanco'),
(34, 3, 95, 'Altex');

-- --------------------------------------------------------

--
-- Table structure for table `produse`
--

CREATE TABLE `produse` (
  `id` int(10) NOT NULL,
  `denumire` varchar(5000) NOT NULL,
  `pret` int(50) NOT NULL,
  `producator` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produse`
--

INSERT INTO `produse` (`id`, `denumire`, `pret`, `producator`, `categorie`, `stock`) VALUES
(1, 'Laptop ASUS 15.6\' X515EA, FHD, Procesor IntelÂ® Coreâ„¢ i3-1115G4 (6M Cache, up to 4.10 GHz), 8GB DDR4, 256GB SSD, GMA UHD, No OS, Slate Grey', 2210, 'Asus', 'Laptopuri', 11041),
(2, 'Laptop Lenovo Gaming 15.6\' IdeaPad 3 15ACH6, FHD IPS, Procesor AMD Ryzenâ„¢ 5 5600H, 8GB DDR4, 256GB SSD, GeForce GTX 1650 4GB, No OS, Shadow Black', 4799, 'Lenovo', 'Laptopuri', 1532),
(3, 'Laptop ASUS Gaming 17.3\' TUF F17 FX706HCB, FHD 144Hz, Procesor IntelÂ® Coreâ„¢ i7-11800H (24M Cache, up to 4.60 GHz), 16GB DDR4, 512GB SSD, GeForce RTX 3050 4GB, No OS, Graphite Black', 3180, 'Asus', 'Laptopuri', 800),
(4, 'Laptop ASUS 15.6\' X515EA, FHD, Procesor IntelÂ® Coreâ„¢ i5-1135G7 (8M Cache, up to 4.20 GHz), 8GB DDR4, 512GB SSD, Intel Iris Xe, No OS, Slate Grey', 2599, 'Asus', 'Laptopuri', 439),
(5, 'Laptop Lenovo Gaming 16\' Legion 5 Pro 16ACH6H, WQXGA IPS 165Hz G-Sync, Procesor AMD Ryzenâ„¢ 5 5600H, 16GB DDR4, 512GB SSD, GeForce RTX 3060 6GB, No OS, Stingray', 5999, 'Lenovo', 'Laptopuri', 271),
(6, 'Laptop ASUS 15.6\' X509UA, FHD, Procesor IntelÂ® Coreâ„¢ i3-8130U (4M Cache, up to 3.40 GHz), 8GB DDR4, 256GB SSD, GMA UHD 620, No OS, Slate Grey', 1899, 'Asus', 'Laptopuri', 546),
(10, 'Telefon mobil Samsung Galaxy A52s, Dual SIM, 128GB, 6GB RAM, 5G, Black', 1550, 'Samsung', 'Telefoane', 181),
(12, 'Telefon mobil Samsung Galaxy M12, Dual SIM, 64 GB, 4G, Black', 720, 'Samsung', 'Telefoane', 385),
(13, 'Telefon mobil Samsung Galaxy A52, Dual SIM, 128GB, 6GB RAM, 4G, Black', 1425, 'Samsung', 'Telefoane', 89),
(15, 'Telefon mobil Xiaomi Redmi Note 11S, Dual Sim, 128GB, 8GB RAM, 4G, Pearl White\r\n', 1690, 'Xiaomi', 'Telefoane', 560),
(17, 'Telefon mobil Samsung Galaxy S22 Ultra, Dual SIM, 512GB, 12GB RAM, 5G, Phantom Black', 7200, 'Samsung', 'Telefoane', 97),
(18, 'Telefon mobil Xiaomi Redmi Note 10 Pro, Dual SIM, 6GB, 128GB, Onyx Gray', 1400, 'Xiaomi', 'Telefoane', 1019),
(19, 'Procesor Intel Rocket Lake, Core i5 11600K 3.9GHz box', 1250, 'Intel', 'Procesoare', 560),
(20, 'Procesor Intel Comet Lake, Core i5 10400 2.9GHz box', 810, 'Intel', 'Procesoare', 532),
(21, 'Procesor AMD Ryzen 7 3800X 3.9GHz box', 1400, 'AMD', 'Procesoare', 184),
(22, 'Procesor AMD Ryzen 5 5600G 3.9GHz box', 1145, 'AMD', 'Procesoare', 332),
(23, 'Procesor AMD Ryzen 9 5900X 3.7GHz box', 2620, 'AMD', 'Procesoare', 68),
(24, 'Placa video MSI Radeon RX 6700 XT MECH 2X 12GB GDDR6 1â€Ž92-bit', 4475, 'AMD', 'Placi Video', 0),
(25, 'Placa video Gainward GeForce RTX 3060 Ti Ghost LHR 8GB GDDR6 256-bit', 4420, 'NVIDIA', 'Placi Video', 182),
(26, 'Placa video Gainward GeForce GTX 1660 Ti Ghost V1 6GB GDDR6 192-bit', 2690, 'NVIDIA', 'Placi Video', 242),
(27, 'Placa video Palit GeForce RTX 3080 GameRock LHR 10GB GDDR6X 320-bit', 7300, 'NVIDIA', 'Placi Video', 190),
(28, 'Placa video Sapphire Radeon RX 6600 PULSE 8GB GDDR6 128-bit', 2850, 'AMD', 'Placi Video', 89),
(29, 'Placa video XFX Radeon RX 6600 Speedster SWFT 210 Core Gaming 8GB GDDR6 128-bit', 2940, 'AMD', 'Placi Video', 75),
(30, 'Placa video Sapphire Radeon RX 6700 XT PULSE OC 12GB GDDR6 1â€Ž92-bit', 4545, 'AMD', 'Placi Video', 349),
(31, 'Telefon mobil POCO X3 Pro, Dual SIM, 256GB, 8GB RAM, 4G, Phantom Black', 1480, 'Xiaomi', 'Telefoane', 1481),
(32, 'Telefon mobil, Xiaomi, Redmi K20 Pro, Dual SIM, 256GB, 8GB RAM, 4G, Black', 1500, 'Xiaomi', 'Telefoane', 2002),
(33, '\r\nMemorie notebook Kingston ValueRAM, 16GB, DDR4, 2666MHz, CL19, 1.2v', 300, 'Kingstone', 'Placute RAM', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comenziprimite`
--
ALTER TABLE `comenziprimite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comenzitrimise`
--
ALTER TABLE `comenzitrimise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produse`
--
ALTER TABLE `produse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comenziprimite`
--
ALTER TABLE `comenziprimite`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comenzitrimise`
--
ALTER TABLE `comenzitrimise`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `produse`
--
ALTER TABLE `produse`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
