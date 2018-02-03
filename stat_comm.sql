-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 02:56 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stat_comm`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga_eceran`
--

CREATE TABLE IF NOT EXISTS `harga_eceran` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL DEFAULT '2016',
  `nama_barang` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `harga_eceran`
--

INSERT INTO `harga_eceran` (`id_barang`, `tahun`, `nama_barang`, `harga`) VALUES
(1, 2016, 'Daging Ayam Ras (kg)', 38614),
(2, 2016, 'Daging Sapi (kg)', 106565),
(3, 2016, 'Susu Kental (kaleng 385ml)', 9921),
(4, 2016, 'Minyak Goreng (kg)', 13859),
(5, 2016, 'Gula Pasir (kg)', 14517),
(6, 2016, 'Tepung Terigu (kg)', 8016),
(7, 2016, 'Cabai Rawit (kg)', 37650),
(8, 2016, 'Cabai Merah (kg)', 39333),
(9, 2016, 'Telur Ayam Ras (kg)', 20473),
(10, 2016, 'Ikan Kembung (kg)', 30924),
(11, 2011, 'Daging Ayam Ras (kg)', 28639.4),
(12, 2011, 'Daging Sapi (kg)', 65902.9),
(13, 2011, 'Susu Kental (kaleng 385ml)', 7687.92),
(14, 2011, 'Minyak Goreng (kg)', 12908.9),
(15, 2011, 'Gula Pasir (kg)', 10818.4),
(16, 2011, 'Tepung Terigu (kg)', 7235.5),
(17, 2011, 'Cabai Rawit (kg)', 27693.2),
(18, 2011, 'Cabai Merah (kg)', 22679),
(19, 2011, 'Telur Ayam Ras (kg)', 14697.5),
(20, 2011, 'Ikan Kembung (kg)', 21835.2),
(21, 2012, 'Daging Ayam Ras (kg)', 30198.7),
(22, 2012, 'Daging Sapi (kg)', 72708.7),
(23, 2012, 'Susu Kental (kaleng 385ml)', 7995.33),
(24, 2012, 'Minyak Goreng (kg)', 13119.5),
(25, 2012, 'Gula Pasir (kg)', 11961.4),
(26, 2012, 'Tepung Terigu (kg)', 7372.25),
(27, 2012, 'Cabai Rawit (kg)', 21549.2),
(28, 2012, 'Cabai Merah (kg)', 21365.8),
(29, 2012, 'Telur Ayam Ras (kg)', 15773.1),
(30, 2012, 'Ikan Kembung (kg)', 23335.2),
(31, 2013, 'Daging Ayam Ras (kg)', 33458.1),
(32, 2013, 'Daging Sapi (kg)', 86962.7),
(33, 2013, 'Susu Kental (kaleng 385ml)', 8291.75),
(34, 2013, 'Minyak Goreng (kg)', 12610.3),
(35, 2013, 'Gula Pasir (kg)', 12541),
(36, 2013, 'Tepung Terigu (kg)', 7441.75),
(37, 2013, 'Cabai Rawit (kg)', 32510.5),
(38, 2013, 'Cabai Merah (kg)', 31214.1),
(39, 2013, 'Telur Ayam Ras (kg)', 17238),
(40, 2013, 'Ikan Kembung (kg)', 25813.8),
(41, 2014, 'Daging Ayam Ras (kg)', 34534.5),
(42, 2014, 'Daging Sapi (kg)', 93043.8),
(43, 2014, 'Susu Kental (kaleng 385ml)', 9444.08),
(44, 2014, 'Minyak Goreng (kg)', 13722.1),
(45, 2014, 'Gula Pasir (kg)', 11782.8),
(46, 2014, 'Tepung Terigu (kg)', 7780.83),
(47, 2014, 'Cabai Rawit (kg)', 35790.6),
(48, 2014, 'Cabai Merah (kg)', 30462.8),
(49, 2014, 'Telur Ayam Ras (kg)', 17769.1),
(50, 2014, 'Ikan Kembung (kg)', 28333.4),
(51, 2015, 'Daging Ayam Ras (kg)', 36695.8),
(52, 2015, 'Daging Sapi (kg)', 98460),
(53, 2015, 'Susu Kental (kaleng 385ml)', 9806.58),
(54, 2015, 'Minyak Goreng (kg)', 13692.3),
(55, 2015, 'Gula Pasir (kg)', 12570.8),
(56, 2015, 'Tepung Terigu (kg)', 7895.92),
(57, 2015, 'Cabai Rawit (kg)', 35986.2),
(58, 2015, 'Cabai Merah (kg)', 30305.8),
(59, 2015, 'Telur Ayam Ras (kg)', 19648.4),
(60, 2015, 'Ikan Kembung (kg)', 30202.8);

-- --------------------------------------------------------

--
-- Table structure for table `inflasi`
--

CREATE TABLE IF NOT EXISTS `inflasi` (
  `id_entri` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `inflasi_rate` double NOT NULL,
  `ihk` double NOT NULL,
  PRIMARY KEY (`id_entri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `inflasi`
--

INSERT INTO `inflasi` (`id_entri`, `tahun`, `bulan`, `inflasi_rate`, `ihk`) VALUES
(1, 2010, 1, 0.84, 118.01),
(2, 2010, 2, 0.3, 118.36),
(3, 2010, 3, -0.14, 118.19),
(4, 2010, 4, 0.15, 118.37),
(5, 2010, 5, 0.29, 118.71),
(6, 2010, 6, 0.97, 119.86),
(7, 2010, 7, 1.57, 121.74),
(8, 2010, 8, 0.76, 122.67),
(9, 2010, 9, 0.44, 123.21),
(10, 2010, 10, 0.06, 123.29),
(11, 2010, 11, 0.6, 124.03),
(12, 2010, 12, 0.92, 125.17),
(13, 2011, 1, 0.89, 136.88),
(14, 2011, 2, 0.13, 137.91),
(15, 2011, 3, -0.32, 138.78),
(16, 2011, 4, -0.31, 138.64),
(17, 2011, 5, 0.12, 138.6),
(18, 2011, 6, 0.55, 140.03),
(19, 2011, 7, 0.67, 144.63),
(20, 2011, 8, 0.93, 146.25),
(21, 2011, 9, 0.27, 145.74),
(22, 2011, 10, -0.12, 145.87),
(23, 2011, 11, 0.34, 146.04),
(24, 2011, 12, 0.57, 146.84),
(25, 2012, 1, 0.76, 130.9),
(26, 2012, 2, 0.05, 130.96),
(27, 2012, 3, 0.07, 131.05),
(28, 2012, 4, 0.21, 131.32),
(29, 2012, 5, 0.07, 131.41),
(30, 2012, 6, 0.62, 132.23),
(31, 2012, 7, 0.7, 133.16),
(32, 2012, 8, 0.95, 134.43),
(33, 2012, 9, 0.01, 134.45),
(34, 2012, 10, 0.16, 134.67),
(35, 2012, 11, 0.07, 134.76),
(36, 2012, 12, 0.54, 135.49),
(37, 2013, 1, 1.03, 136.88),
(38, 2013, 2, 0.75, 137.91),
(39, 2013, 3, 0.63, 138.78),
(40, 2013, 4, -0.1, 138.64),
(41, 2013, 5, -0.03, 138.6),
(42, 2013, 6, 1.03, 140.03),
(43, 2013, 7, 3.29, 144.63),
(44, 2013, 8, 1.12, 146.25),
(45, 2013, 9, -0.35, 145.74),
(46, 2013, 10, 0.09, 145.87),
(47, 2013, 11, 0.12, 146.04),
(48, 2013, 12, 0.55, 146.84),
(49, 2014, 1, 1.07, 110.992),
(50, 2014, 2, 0.26, 111.28),
(51, 2014, 3, 0.08, 111.37),
(52, 2014, 4, -0.02, 111.35),
(53, 2014, 5, 0.16, 111.53),
(54, 2014, 6, 0.43, 112.01),
(55, 2014, 7, 0.93, 113.05),
(56, 2014, 8, 0.47, 113.58),
(57, 2014, 9, 0.27, 113.89),
(58, 2014, 10, 0.47, 114.42),
(59, 2014, 11, 1.5, 116.14),
(60, 2014, 12, 2.46, 119),
(61, 2015, 1, -0.24, 118.71),
(62, 2015, 2, -0.36, 118.28),
(63, 2015, 3, 0.17, 118.48),
(64, 2015, 4, 0.36, 118.91),
(65, 2015, 5, 0.5, 119.5),
(66, 2015, 6, 0.54, 120.14),
(67, 2015, 7, 0.93, 121.26),
(68, 2015, 8, 0.39, 121.73),
(69, 2015, 9, -0.05, 121.67),
(70, 2015, 10, -0.08, 121.57),
(71, 2015, 11, 0.21, 121.82),
(72, 2015, 12, 0.96, 122.99),
(73, 2016, 1, 0.51, 123.62),
(74, 2016, 2, -0.09, 123.51),
(75, 2016, 3, 0.19, 123.75),
(76, 2016, 4, -0.45, 123.19),
(77, 2016, 5, 0.24, 123.48),
(78, 2016, 6, 0.66, 124.29),
(79, 2016, 7, 0.69, 125.15),
(80, 2016, 8, -0.02, 125.13),
(81, 2016, 9, 0.22, 125.41),
(82, 2016, 10, 0.14, 125.59),
(83, 2016, 11, 0.47, 126.18),
(84, 2016, 12, 0.42, 126.71),
(85, 2017, 1, 0.97, 127.94),
(86, 2017, 2, 0.23, 128.24),
(87, 2017, 3, -0.02, 128.22),
(88, 2017, 4, 0.09, 128.33),
(89, 2017, 5, 0.39, 128.83),
(90, 2017, 6, 0.69, 129.72);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('tes@tes.com', 'pbwbisa');

-- --------------------------------------------------------

--
-- Table structure for table `umk_umb`
--

CREATE TABLE IF NOT EXISTS `umk_umb` (
  `id_entri` int(11) NOT NULL AUTO_INCREMENT,
  `nama_prov` varchar(30) NOT NULL,
  `umk` int(11) NOT NULL,
  `umb` int(11) NOT NULL,
  PRIMARY KEY (`id_entri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=308 ;

--
-- Dumping data for table `umk_umb`
--

INSERT INTO `umk_umb` (`id_entri`, `nama_prov`, `umk`, `umb`) VALUES
(273, 'Aceh', 427344, 5475),
(274, 'Sumatera Utara', 1161154, 17122),
(275, 'Sumatera Barat', 584781, 8300),
(276, 'Riau', 516189, 10558),
(277, 'Jambi', 312629, 4394),
(278, 'Sumatera Selatan', 648971, 8593),
(279, 'Bengkulu', 197559, 2445),
(280, 'Lampung', 775607, 7679),
(281, 'Kep Bangka Belitung', 125381, 2044),
(282, 'Kepulauan Riau', 147842, 7666),
(283, 'DKI Jakarta', 1154792, 80859),
(284, 'Jawa Barat', 4564958, 69849),
(285, 'Jawa Tengah', 4131727, 42483),
(286, 'DI Yogyakarta', 524936, 8734),
(287, 'Jawa Timur', 4608754, 63672),
(288, 'Banten', 946723, 26099),
(289, 'Bali', 468658, 13826),
(290, 'Nusa Tenggara Barat', 593755, 4954),
(291, 'Nusa Tenggara Timur', 433113, 3308),
(292, 'Kalimantan Barat', 295537, 5627),
(293, 'Kalimantan Tengah', 233354, 3738),
(294, 'Kalimantan Selatan', 466222, 5903),
(295, 'Kalimantan Timur', 304066, 10029),
(296, 'Kalimantan Utara', 53145, 1348),
(297, 'Sulawesi Utara', 293184, 3953),
(298, 'Sulawesi Tengah', 340572, 3133),
(299, 'Sulawesi Selatan', 923257, 13037),
(300, 'Sulawesi Tenggara', 282618, 2868),
(301, 'Gorontalo', 157418, 1230),
(302, 'Sulawesi Barat', 137530, 889),
(303, 'Maluku', 148228, 1591),
(304, 'Maluku Utara', 81453, 1150),
(305, 'Papua Barat', 72071, 1621),
(306, 'Papua', 150122, 3174);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
