-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2011 at 07:35 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(2, 'Gede Suma Wijaya', 'gedelumbung@gmail.com', 'Tes Soal Online merupakan bagian dari sistem pembelajaran digital atau e-learning. Dimana kita diharapkan untuk bisa belajar secara mandiri tanpa terbatas oleh waktu dan tempat. Semoga melalui E-Learning dan Sistem Tes Soal Online ini, dapat tercapainya proses pembelajaran yang efektif dan efisien. Salam Hangat.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tmp_lahir` varchar(200) NOT NULL,
  `tgl_lahir` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `ind` varchar(200) NOT NULL,
  `ing` varchar(200) NOT NULL,
  `mat` varchar(200) NOT NULL,
  `ipa` varchar(200) NOT NULL,
  `ips` varchar(200) NOT NULL,
  `ppkn` varchar(200) NOT NULL,
  `nun` varchar(100) NOT NULL,
  `ortu` varchar(200) NOT NULL,
  `alamat_ortu` varchar(200) NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `penghasilan` varchar(200) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama`, `alamat`, `tmp_lahir`, `tgl_lahir`, `sekolah`, `ind`, `ing`, `mat`, `ipa`, `ips`, `ppkn`, `nun`, `ortu`, `alamat_ortu`, `pendidikan`, `pekerjaan`, `penghasilan`) VALUES
(3, 'Gede Suma Wijaya', 'Bali', 'Denpasar', '4 Februari 1991', 'SMKN 1 Denpasar', '90', '90', '90', '90', '90', '90', '90', 'Bapak Saya', 'Bali', 'SMA', 'Wiraswasta / Jaga Warung', '4000000'),
(4, 'Afif Ikhwan Muqorrobin', 'Bandung', 'Majalengka', '4 Desember 1991', 'SMAN 4 Serang', '100', '100', '100', '80', '90', '100', '95', 'Achmad Mujahidin', 'Bandung', 'SMA', 'Polisi', '3000000'),
(5, 'Ridwan Aziz', 'Banyuwangi', 'Banyuwangi', '1 December 2011', 'SMKN 1 Sukasuka', '90', '90', '90', '90', '90', '90', '90', 'jyj', 'yj', 'jyj', 'yj', 'jyj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(1, 'gede', '13ad65cc032d4b04927943c33673a65d', 'Gede Lumbung'),
(2, 'lumbung', 'a88b71d35a8350e1f7aa1b79d91671c3', 'Dede Lumbung'),
(3, 'suma', 'dce704fd8aa775365f1168c59dc4d9ad', 'Suma Wijaya');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
