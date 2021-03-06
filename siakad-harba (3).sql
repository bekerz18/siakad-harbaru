-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 24, 2019 at 10:19 AM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.3.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad-harba`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `administrator_id` int(11) NOT NULL,
  `administrator_username` varchar(35) NOT NULL,
  `administrator_sandi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`administrator_id`, `administrator_username`, `administrator_sandi`) VALUES
(1, 'adm00n', 'MD5(SHA1(juju7788))'),
(2, 'adm020n', '*12F77A2507BC0CC21869DCF6C92FF65A694BB774'),
(3, 'adm0dd0n', 'a31c86d61e1c1773167ca7b5bf023f98'),
(5, 'bahtiar', 'a31c86d61e1c1773167ca7b5bf023f98');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` varchar(100) NOT NULL,
  `kelas_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kelas_id`, `kelas_nama`) VALUES
('5dd8a93c370cc', 'Kelas 6');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `matpel_id` varchar(100) NOT NULL,
  `matpel_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`matpel_id`, `matpel_nama`) VALUES
('5dd8ef2208500', 'Agama');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `siswa_id` varchar(100) NOT NULL,
  `siswa_nis` int(11) NOT NULL,
  `siswa_nisn` int(11) NOT NULL,
  `siswa_nama` varchar(90) NOT NULL,
  `siswa_jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `siswa_tempat_lahir` varchar(50) DEFAULT NULL,
  `siswa_tanggal_lahir` date DEFAULT NULL,
  `siswa_agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `siswa_kewarganegaraan` enum('WNA','WNI') DEFAULT NULL,
  `siswa_alamat_jalan` varchar(40) DEFAULT NULL,
  `siswa_alamat_rtrw` varchar(40) DEFAULT NULL,
  `siswa_alamat_desa` varchar(30) DEFAULT NULL,
  `siswa_alamat_kecamatan` varchar(30) DEFAULT NULL,
  `siswa_alamat_kabupaten` varchar(30) DEFAULT NULL,
  `siswa_alamat_provinsi` varchar(30) DEFAULT NULL,
  `siswa_alamat_kodepos` varchar(10) DEFAULT NULL,
  `siswa_foto` varchar(50) DEFAULT NULL,
  `orangtua_ayah_nama` varchar(90) DEFAULT NULL,
  `orangtua_ayah_agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `orangtua_ayah_kewarganegaraan` enum('WNA','WNI') DEFAULT NULL,
  `orangtua_ayah_pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `orangtua_ayah_pekerjaan` varchar(20) DEFAULT NULL,
  `orangtua_ayah_alamat_jalan` varchar(40) DEFAULT NULL,
  `orangtua_ayah_alamat_rtrw` varchar(40) DEFAULT NULL,
  `orangtua_ayah_alamat_desa` varchar(30) DEFAULT NULL,
  `orangtua_ayah_alamat_kecamatan` varchar(30) DEFAULT NULL,
  `orangtua_ayah_alamat_kabupaten` varchar(30) DEFAULT NULL,
  `orangtua_ayah_alamat_provinsi` varchar(30) DEFAULT NULL,
  `orangtua_ayah_alamat_kodepos` varchar(10) DEFAULT NULL,
  `orangtua_ibu_nama` varchar(90) DEFAULT NULL,
  `orangtua_ibu_agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `orangtua_ibu_kewarganegaraan` enum('WNA','WNI') DEFAULT NULL,
  `orangtua_ibu_pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `orangtua_ibu_pekerjaan` varchar(20) DEFAULT NULL,
  `orangtua_ibu_alamat_jalan` varchar(40) DEFAULT NULL,
  `orangtua_ibu_alamat_rtrw` varchar(40) DEFAULT NULL,
  `orangtua_ibu_alamat_desa` varchar(30) DEFAULT NULL,
  `orangtua_ibu_alamat_kecamatan` varchar(30) DEFAULT NULL,
  `orangtua_ibu_alamat_kabupaten` varchar(30) DEFAULT NULL,
  `orangtua_ibu_alamat_provinsi` varchar(30) DEFAULT NULL,
  `orangtua_ibu_alamat_kodepos` varchar(10) DEFAULT NULL,
  `orangtua_wali_nama` varchar(90) DEFAULT NULL,
  `orangtua_wali_agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `orangtua_wali_kewarganegaraan` enum('WNA','WNI') DEFAULT NULL,
  `orangtua_wali_pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `orangtua_wali_pekerjaan` varchar(20) DEFAULT NULL,
  `orangtua_wali_alamat_jalan` varchar(40) DEFAULT NULL,
  `orangtua_wali_alamat_rtrw` varchar(40) DEFAULT NULL,
  `orangtua_wali_alamat_desa` varchar(30) DEFAULT NULL,
  `orangtua_wali_alamat_kecamatan` varchar(30) DEFAULT NULL,
  `orangtua_wali_alamat_kabupaten` varchar(30) DEFAULT NULL,
  `orangtua_wali_alamat_provinsi` varchar(30) DEFAULT NULL,
  `orangtua_wali_alamat_kodepos` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`siswa_id`, `siswa_nis`, `siswa_nisn`, `siswa_nama`, `siswa_jenis_kelamin`, `siswa_tempat_lahir`, `siswa_tanggal_lahir`, `siswa_agama`, `siswa_kewarganegaraan`, `siswa_alamat_jalan`, `siswa_alamat_rtrw`, `siswa_alamat_desa`, `siswa_alamat_kecamatan`, `siswa_alamat_kabupaten`, `siswa_alamat_provinsi`, `siswa_alamat_kodepos`, `siswa_foto`, `orangtua_ayah_nama`, `orangtua_ayah_agama`, `orangtua_ayah_kewarganegaraan`, `orangtua_ayah_pendidikan_terakhir`, `orangtua_ayah_pekerjaan`, `orangtua_ayah_alamat_jalan`, `orangtua_ayah_alamat_rtrw`, `orangtua_ayah_alamat_desa`, `orangtua_ayah_alamat_kecamatan`, `orangtua_ayah_alamat_kabupaten`, `orangtua_ayah_alamat_provinsi`, `orangtua_ayah_alamat_kodepos`, `orangtua_ibu_nama`, `orangtua_ibu_agama`, `orangtua_ibu_kewarganegaraan`, `orangtua_ibu_pendidikan_terakhir`, `orangtua_ibu_pekerjaan`, `orangtua_ibu_alamat_jalan`, `orangtua_ibu_alamat_rtrw`, `orangtua_ibu_alamat_desa`, `orangtua_ibu_alamat_kecamatan`, `orangtua_ibu_alamat_kabupaten`, `orangtua_ibu_alamat_provinsi`, `orangtua_ibu_alamat_kodepos`, `orangtua_wali_nama`, `orangtua_wali_agama`, `orangtua_wali_kewarganegaraan`, `orangtua_wali_pendidikan_terakhir`, `orangtua_wali_pekerjaan`, `orangtua_wali_alamat_jalan`, `orangtua_wali_alamat_rtrw`, `orangtua_wali_alamat_desa`, `orangtua_wali_alamat_kecamatan`, `orangtua_wali_alamat_kabupaten`, `orangtua_wali_alamat_provinsi`, `orangtua_wali_alamat_kodepos`) VALUES
('1', 151707032, 2147483647, 'Pipit', 'Wanita', 'Tasikmalaya', '1998-02-03', 'Islam', 'WNI', 'Genteng', '003/001', 'Cilamajang', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', NULL, 'Enceng', 'Islam', 'WNI', 'SD', 'Buruh', 'Genteng', '003/001', 'Cilamajang', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', 'Rohayah', 'Islam', 'WNI', NULL, 'Buruh', 'Genteng', '003/001', 'Cilamajang', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5', 99999999, 0, 'Zam Zam', 'Pria', 'Tasikmalaya', '1820-09-08', 'Islam', '', 'Cihonje', '', '', '', '', '', '', NULL, '', '', NULL, '0', '', '', '', '', '', '', '', '', '', '', NULL, '0', '', '', '', '', '', '', '', '', '', '', NULL, '0', '', '', '', '', '', '', '', ''),
('5dd9f526970a4', 20190689, 0, 'Reza', 'Wanita', 'Tasikmalaya', '2019-11-01', 'Islam', 'WNI', '', '', '', '', '', '', '', NULL, '', '', NULL, '0', '', '', '', '', '', '', '', '', '', '', NULL, '0', '', '', '', '', '', '', '', '', '', '', NULL, '0', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tutor_id` varchar(100) NOT NULL,
  `tutor_nip` varchar(20) NOT NULL,
  `tutor_nama` varchar(90) DEFAULT NULL,
  `tutor_jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tutor_tempat_lahir` varchar(50) DEFAULT NULL,
  `tutor_tanggal_lahir` date DEFAULT NULL,
  `tutor_agama` enum('Islam','Kristen Protestan','Katolik','Hindu','Buddha','Kong Hu Cu') DEFAULT NULL,
  `tutor_kewarganegaraan` enum('WNA','WNI') DEFAULT NULL,
  `tutor_pendidikan_terakhir` varchar(30) DEFAULT NULL,
  `tutor_alamat_jalan` varchar(40) DEFAULT NULL,
  `tutor_alamat_rtrw` varchar(40) DEFAULT NULL,
  `tutor_alamat_desa` varchar(30) DEFAULT NULL,
  `tutor_alamat_kecamatan` varchar(30) DEFAULT NULL,
  `tutor_alamat_kabupaten` varchar(30) DEFAULT NULL,
  `tutor_alamat_provinsi` varchar(30) DEFAULT NULL,
  `tutor_alamat_kodepos` varchar(10) DEFAULT NULL,
  `tutor_foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`tutor_id`, `tutor_nip`, `tutor_nama`, `tutor_jenis_kelamin`, `tutor_tempat_lahir`, `tutor_tanggal_lahir`, `tutor_agama`, `tutor_kewarganegaraan`, `tutor_pendidikan_terakhir`, `tutor_alamat_jalan`, `tutor_alamat_rtrw`, `tutor_alamat_desa`, `tutor_alamat_kecamatan`, `tutor_alamat_kabupaten`, `tutor_alamat_provinsi`, `tutor_alamat_kodepos`, `tutor_foto`) VALUES
('1', '99', 'Iyep', 'Pria', 'Tasikmalaya', '2019-11-22', 'Islam', 'WNA', 'SLTA Sederajat', 'Cihonje', '002/002', 'Karanganyar', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', 'default.jpg'),
('2', '920', 'Ida, S.Pd', 'Wanita', 'Rembang', '2019-11-19', 'Islam', 'WNI', 'S1', 'Cibeuti', '003/002', 'Cibeuti', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', 'default.jpg'),
('3', '1', 'Acep', 'Pria', 'Tasikmalaya', '2019-11-22', 'Islam', 'WNA', 'D4', 'Cijeruk', '01/03', 'Karanganyar', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', NULL),
('5dd8125fec6cb', '13131', 'Acep Fikri2', 'Wanita', 'Tasikmalaya', '2019-11-02', 'Islam', 'WNA', 'S3', 'Cijeruk', '01/03', 'Karanganyar', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', NULL),
('5dd81312b8773', '999992', 'Jaenudin', 'Pria', 'Tasikmalaya', NULL, '', '', '0', 'Cihonje', '02/02', 'Karanganyar', 'Kawalu', 'Kota Tasikmalaya', 'Jawa Barat', '46182', NULL),
('5dd89999dacbf', '912', 'Yusiko', 'Wanita', 'Tasikmalaya', '2019-11-05', 'Kong Hu Cu', 'WNA', 'SLTA Sederajat', 'Cibeunying Kidul', '002/003', 'Karanganyar', 'Kawalu', 'Tasikmalaya', 'Jawa Barat', '46182', NULL),
('5dd8b11631424', 'p', 'p', 'Pria', 'p', '2019-11-01', 'Islam', 'WNA', 'S1', 'p', 'p', 'p', 'p', 'p', 'p', 'p', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`administrator_id`),
  ADD UNIQUE KEY `administrator_username` (`administrator_username`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`matpel_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `administrator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
