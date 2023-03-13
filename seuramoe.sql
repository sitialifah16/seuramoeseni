-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 05:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seuramoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '827CCB0EEA8A706C4C34A16891F84E7B');

-- --------------------------------------------------------

--
-- Table structure for table `dataanggota`
--

CREATE TABLE `dataanggota` (
  `id_anggota` int(11) NOT NULL,
  `NPM` varchar(13) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Bakat` varchar(100) NOT NULL,
  `Tahun_Masuk` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataanggota`
--

INSERT INTO `dataanggota` (`id_anggota`, `NPM`, `Nama`, `Jurusan`, `Bakat`, `Tahun_Masuk`) VALUES
(1, '1608107010005', 'Mariza Agustia', 'Informatika', 'Vokal', 2016),
(2, '1608109010005', 'Dwi Garini Putri', 'Farmasi', 'Puisi', 2016),
(3, '1508101010053', 'Fauzan Ilmi', 'Matematika', 'Musik', 2015),
(4, '1608107010031', 'Misbahul Rahma', 'Informatika', 'Tari', 2016),
(5, '1708108010021', 'M. Farhan Nasution', 'Statistika', 'Tari', 2017),
(6, '1508104010057', 'Miftahul Zikra', 'Biologi', 'Tari', 2015),
(7, '1508108010026', 'Muhajir Akbar Hsb', 'Statistika', 'Musik', 2015),
(8, '1608104010015', 'Ihda Quratul Aini', 'Biologi', 'Vokal', 2016),
(9, '1708107010002', 'Zakiatus Safara', 'Informatika', 'Vokal', 2017),
(10, '1708107010005', 'Riftha Muzilla', 'Informatika', 'Tari', 2017),
(11, '1708107010057', 'Febry Mulya Permana', 'Informatika', 'Musik', 2017),
(12, '1708107010009', 'Alifia Widya', 'Informatika', 'Tari', 2017),
(13, '1708108010007', 'Silvi Eristiani', 'Statistika', 'Tari', 2017),
(14, '1708108010027', 'Saryulis', 'Statistika', 'Tari', 2017),
(15, '1708108010034', 'Anggi Afifah Rahmi', 'Statistika', 'Tari', 2017),
(16, '1608104010034', 'Zaira Fadhillah', 'Biologi', 'Vokal', 2016),
(17, '1708104010001', 'Musrina Putriani', 'Biologi', 'Vokal', 2017),
(18, '1708104010010', 'Dhita Ardianti', 'Biologi', 'Tari', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_prestasi`
--

INSERT INTO `data_prestasi` (`id_prestasi`, `prestasi`, `kategori`, `tahun`) VALUES
(1, 'Juara 2', 'Lomba Tari Kreasi Yang Diadakan Oleh Yamaha', 2017),
(2, 'Juara 1', 'Lomba Tari Nusantara di Blang Padang', 2018),
(3, 'Juara 2', 'Kompetisi Aceh Etnik', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `sewa_alat`
--

CREATE TABLE `sewa_alat` (
  `id_alat` int(3) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `Jumlah` int(3) NOT NULL,
  `harga_sewa` int(20) NOT NULL,
  `url` varchar(50) NOT NULL,
  `type` enum('image','video') NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewa_alat`
--

INSERT INTO `sewa_alat` (`id_alat`, `nama_alat`, `Jumlah`, `harga_sewa`, `url`, `type`, `gambar`) VALUES
(21, 'Gitar Akustik', 1, 100000, '', 'image', '21.jpg'),
(22, 'Bass', 1, 150000, '', 'image', '22.jpg'),
(23, 'Cajon', 1, 100000, '', 'image', '23.jpg'),
(24, 'Baju Tari', 13, 100000, '', 'image', '24.jpg'),
(25, 'Songket Aceh', 13, 30000, '', 'image', '25.jpg'),
(26, 'Topi Saman Aceh', 13, 10000, '', 'image', '26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id_anggota` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `riwayat_penyakit` varchar(50) NOT NULL,
  `alergi` varchar(50) NOT NULL,
  `minat_bakat_1` varchar(30) NOT NULL,
  `minat_bakat_2` varchar(30) NOT NULL,
  `alasan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jenis_kelamin`, `jurusan`, `angkatan`, `no_hp`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `riwayat_penyakit`, `alergi`, `minat_bakat_1`, `minat_bakat_2`, `alasan`) VALUES
(2, 'Mariza Agustia', 'perempuan', 'informatika', 2017, '085260104277', 'Punge', 'Banda Aceh', '1998-08-11', 'Tidak ada', 'Tidak ada', 'vokal', 'tari', 'Keren'),
(3, 'Siti Alifah', 'perempuan', 'informatika', 2017, '082360050793', 'Punge', 'Banda Aceh', '1998-08-23', 'Tidak ada', 'Tidak ada', 'vokal', 'vokal', 'Keren');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `dataanggota`
--
ALTER TABLE `dataanggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `npm_unique` (`NPM`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `sewa_alat`
--
ALTER TABLE `sewa_alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataanggota`
--
ALTER TABLE `dataanggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sewa_alat`
--
ALTER TABLE `sewa_alat`
  MODIFY `id_alat` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
