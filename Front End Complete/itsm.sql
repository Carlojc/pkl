-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 05:37 AM
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
-- Database: `itsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `entity`
--

CREATE TABLE `entity` (
  `ID_Entity` int(11) NOT NULL,
  `Nama_Unit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE `hardware` (
  `ID_HW` int(11) NOT NULL,
  `Nama_HW` varchar(200) NOT NULL,
  `Owner_HW` int(11) NOT NULL,
  `Jenis_HW` int(11) NOT NULL,
  `Penyedia_HW` int(11) NOT NULL,
  `Kondisi_HW` int(11) NOT NULL,
  `Status_HW` int(11) NOT NULL,
  `Fungsi` varchar(200) NOT NULL,
  `Detail_Deskripsi` varchar(200) NOT NULL,
  `Spesifikasi` varchar(200) NOT NULL,
  `Lokasi_HW` int(11) NOT NULL,
  `Tgl_Sewa` date DEFAULT NULL,
  `SKP` blob NOT NULL,
  `Status_Kepemilikan` varchar(200) NOT NULL,
  `Harga_Barang` int(11) DEFAULT NULL,
  `Tgl_Implementasi` date DEFAULT NULL,
  `Berita_Acara` blob,
  `Tgl_Maintenance` date DEFAULT NULL,
  `No_PKS` int(10) NOT NULL,
  `PKS` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hardware`
--

CREATE TABLE `jenis_hardware` (
  `ID_Jenis_HW` int(11) NOT NULL,
  `Type_HW` varchar(200) NOT NULL,
  `Jenis_HW` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_software`
--

CREATE TABLE `jenis_software` (
  `ID_Jenis_SW` int(11) NOT NULL,
  `Nama_SW` varchar(200) NOT NULL,
  `Jenis` varchar(200) NOT NULL,
  `Lisensi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_asset`
--

CREATE TABLE `kondisi_asset` (
  `ID_Kondisi` int(11) NOT NULL,
  `Kondisi_Asset` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi_asset`
--

INSERT INTO `kondisi_asset` (`ID_Kondisi`, `Kondisi_Asset`) VALUES
(1, 'Baik'),
(2, 'Rusak'),
(3, 'Perbaikan'),
(4, 'Pindah Lokasi/Kepemilikan'),
(5, 'Hilang/Tidak Diketahui');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `ID_Lokasi` int(11) NOT NULL,
  `Nama_Lokasi` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_data_center`
--

CREATE TABLE `lokasi_data_center` (
  `ID_Lokasi_DC` int(11) NOT NULL,
  `Nama_Lokasi_DC` varchar(100) NOT NULL,
  `Alamat_Lokasi_DC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region_server`
--

CREATE TABLE `region_server` (
  `ID_Region_Server` int(11) NOT NULL,
  `GAS` varchar(100) NOT NULL,
  `DEV` varchar(100) NOT NULL,
  `PROD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `ID_SW` int(11) NOT NULL,
  `Nama_Aplikasi` varchar(200) NOT NULL,
  `Owner_App` int(11) NOT NULL,
  `Jenis_App` int(11) NOT NULL,
  `Kondisi_App` int(11) NOT NULL,
  `Status_App` int(11) NOT NULL,
  `Nama_Server` varchar(200) NOT NULL,
  `Fungsi` varchar(200) NOT NULL,
  `Detail_Deskripsi` varchar(200) NOT NULL,
  `Spesifikasi` varchar(200) NOT NULL,
  `Platform` varchar(200) NOT NULL,
  `Database` varchar(200) NOT NULL,
  `IP_Address` varchar(200) NOT NULL,
  `Hostname` varchar(200) NOT NULL,
  `Memory` int(11) NOT NULL,
  `Storage` int(11) NOT NULL,
  `CPU` varchar(200) NOT NULL,
  `Mesin_Server` varchar(200) NOT NULL,
  `Lokasi_DC` int(11) NOT NULL,
  `Developed_By` int(11) NOT NULL,
  `Region_Server` int(11) NOT NULL,
  `Site` varchar(200) NOT NULL,
  `BackUp_Real_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Tgl_Implementasi` date DEFAULT NULL,
  `Berita_Acara` blob,
  `Status_Kepemilikan` varchar(200) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Tgl_Pembelian` date DEFAULT NULL,
  `SKP` blob,
  `Tgl_Maintenance` date DEFAULT NULL,
  `No_PKS` int(11) NOT NULL,
  `PKS` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_asset`
--

CREATE TABLE `status_asset` (
  `ID_Status` int(11) NOT NULL,
  `Status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_asset`
--

INSERT INTO `status_asset` (`ID_Status`, `Status`) VALUES
(1, 'Ada'),
(2, 'Tidak Ada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(10) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Hak_Akses` varchar(200) NOT NULL,
  `Nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `Username`, `Pass`, `Hak_Akses`, `Nama`) VALUES
(1, 'manajer_departemen', '4e04f072533b82d7560240217f2a4ba2', 'Manager', 'Ihza'),
(2, 'Manajer_Divisi', '9e92087d45f50e9e0f78180c0ce80cd4', 'Manager', 'Carlo');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ID_Vendor` int(11) NOT NULL,
  `Nama_Vendor` varchar(200) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No_Telp` varchar(200) NOT NULL,
  `No_Fax` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`ID_Entity`),
  ADD KEY `idx_software` (`ID_Entity`);

--
-- Indexes for table `hardware`
--
ALTER TABLE `hardware`
  ADD PRIMARY KEY (`ID_HW`),
  ADD KEY `Owner_HW` (`Owner_HW`),
  ADD KEY `fk_hardware_jenisHW` (`Jenis_HW`),
  ADD KEY `fk_hardware_kondisi` (`Kondisi_HW`),
  ADD KEY `fk_hardware_lokasi` (`Lokasi_HW`),
  ADD KEY `fk_hardware_vendor` (`Penyedia_HW`),
  ADD KEY `fk_hardware_status` (`Status_HW`);

--
-- Indexes for table `jenis_hardware`
--
ALTER TABLE `jenis_hardware`
  ADD PRIMARY KEY (`ID_Jenis_HW`);

--
-- Indexes for table `jenis_software`
--
ALTER TABLE `jenis_software`
  ADD PRIMARY KEY (`ID_Jenis_SW`);

--
-- Indexes for table `kondisi_asset`
--
ALTER TABLE `kondisi_asset`
  ADD PRIMARY KEY (`ID_Kondisi`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`ID_Lokasi`);

--
-- Indexes for table `lokasi_data_center`
--
ALTER TABLE `lokasi_data_center`
  ADD PRIMARY KEY (`ID_Lokasi_DC`);

--
-- Indexes for table `region_server`
--
ALTER TABLE `region_server`
  ADD PRIMARY KEY (`ID_Region_Server`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`ID_SW`),
  ADD KEY `fk_software_entity` (`Owner_App`),
  ADD KEY `fk_software_jenisSW` (`Jenis_App`),
  ADD KEY `fk_software_kondisi` (`Kondisi_App`),
  ADD KEY `fk_software_lokasiDC` (`Lokasi_DC`),
  ADD KEY `fk_software_region` (`Region_Server`),
  ADD KEY `fk_software_status` (`Status_App`),
  ADD KEY `fk_software_vendor` (`Developed_By`);

--
-- Indexes for table `status_asset`
--
ALTER TABLE `status_asset`
  ADD PRIMARY KEY (`ID_Status`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ID_Vendor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entity`
--
ALTER TABLE `entity`
  MODIFY `ID_Entity` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hardware`
--
ALTER TABLE `hardware`
  MODIFY `ID_HW` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_hardware`
--
ALTER TABLE `jenis_hardware`
  MODIFY `ID_Jenis_HW` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_software`
--
ALTER TABLE `jenis_software`
  MODIFY `ID_Jenis_SW` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi_asset`
--
ALTER TABLE `kondisi_asset`
  MODIFY `ID_Kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `ID_Lokasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lokasi_data_center`
--
ALTER TABLE `lokasi_data_center`
  MODIFY `ID_Lokasi_DC` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region_server`
--
ALTER TABLE `region_server`
  MODIFY `ID_Region_Server` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_asset`
--
ALTER TABLE `status_asset`
  MODIFY `ID_Status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ID_Vendor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hardware`
--
ALTER TABLE `hardware`
  ADD CONSTRAINT `fk_hardware_entity` FOREIGN KEY (`Owner_HW`) REFERENCES `entity` (`ID_Entity`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hardware_jenisHW` FOREIGN KEY (`Jenis_HW`) REFERENCES `jenis_hardware` (`ID_Jenis_HW`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hardware_kondisi` FOREIGN KEY (`Kondisi_HW`) REFERENCES `kondisi_asset` (`ID_Kondisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hardware_lokasi` FOREIGN KEY (`Lokasi_HW`) REFERENCES `lokasi` (`ID_Lokasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hardware_status` FOREIGN KEY (`Status_HW`) REFERENCES `status_asset` (`ID_Status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hardware_vendor` FOREIGN KEY (`Penyedia_HW`) REFERENCES `vendor` (`ID_Vendor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `fk_software_entity` FOREIGN KEY (`Owner_App`) REFERENCES `entity` (`ID_Entity`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_software_jenisSW` FOREIGN KEY (`Jenis_App`) REFERENCES `jenis_software` (`ID_Jenis_SW`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_software_kondisi` FOREIGN KEY (`Kondisi_App`) REFERENCES `kondisi_asset` (`ID_Kondisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_software_lokasiDC` FOREIGN KEY (`Lokasi_DC`) REFERENCES `lokasi_data_center` (`ID_Lokasi_DC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_software_region` FOREIGN KEY (`Region_Server`) REFERENCES `region_server` (`ID_Region_Server`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_software_status` FOREIGN KEY (`Status_App`) REFERENCES `status_asset` (`ID_Status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_software_vendor` FOREIGN KEY (`Developed_By`) REFERENCES `vendor` (`ID_Vendor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
