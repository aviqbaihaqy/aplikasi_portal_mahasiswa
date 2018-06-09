-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 06:40 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latbdl`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_jabatan`
--

CREATE TABLE IF NOT EXISTS `pegawai_jabatan` (
  `jabatan` varchar(20) NOT NULL,
  `tunjangan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_jabatan`
--

INSERT INTO `pegawai_jabatan` (`jabatan`, `tunjangan`) VALUES
('staff_pemasaran', 4000000),
('manager_pemasaran', 8000000),
('direktur_utama', 13000000),
('staff_keuangan', 5000000),
('manager_keuangan', 8500000);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_master`
--

CREATE TABLE IF NOT EXISTS `pegawai_master` (
  `id_pegawai` varchar(5) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_master`
--

INSERT INTO `pegawai_master` (`id_pegawai`, `nama`, `alamat`, `tempat_lahir`) VALUES
('p001', 'fatah', 'palembang', 'palembang'),
('p002', 'laeli', 'kaliwiro', 'wonosobo'),
('p003', 'ririn', 'kendal', 'kendal'),
('p004', 'rahmat', 'garung', 'purwokerto'),
('p005', 'irsyad', 'kejajar', 'wonosobo');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai_riwayat`
--

CREATE TABLE IF NOT EXISTS `pegawai_riwayat` (
  `id` varchar(2) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pegawai` varchar(5) NOT NULL,
  `nama_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai_riwayat`
--

INSERT INTO `pegawai_riwayat` (`id`, `tanggal`, `id_pegawai`, `nama_jabatan`) VALUES
('1', '2017-10-04', 'p001', 'staff_pemasaran'),
('2', '2017-12-11', 'p002', 'staff_keuangan'),
('3', '2018-01-16', 'p003', 'direktur_utama'),
('4', '2018-02-20', 'p002', 'manager_keuangan'),
('5', '2018-02-26', 'p001', 'manager_pemasaran'),
('6', '2018-04-03', 'p004', 'staff_keuangan'),
('7', '2018-04-03', 'p005', 'staff_pemasaran');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
