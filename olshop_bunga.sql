-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2018 at 10:51 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olshop_bunga`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `spek` text NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` int(25) NOT NULL,
  `diskon` int(3) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_brg`, `nama_brg`, `spek`, `stok`, `harga`, `diskon`, `kategori`, `foto`) VALUES
(1, 'Handbouqet Wisuda 0101', 'Perpaduan bunga mawar pink dengan bunga lili putih\r\ndikemas dengan warna pastel indah nan cantik', 5, 285000, 5, 'Handbouqet', '27062018095245wisuda5.jpg'),
(2, 'Handbouqet Wisuda 0102', 'Handbouqet yang terbuat dari kain satin yang berbentuk bunga\r\ndikombinasikan dengan aksesoris mutiara', 5, 130000, 5, 'Handbouqet', '27062018095850wisuda4.jpg'),
(3, 'Handbouqet Wisuda 0103', 'Kombinasi bunga mawar yang dirangkai dengan boneka beruang', 10, 293000, 3, 'Handbouqet', '27062018100215hand51.jpg'),
(4, 'Handbouqet Wisuda 0104', 'Berisi bunga mawar pink dan mawar putih asli', 8, 210000, 5, 'Handbouqet', '27062018100933hand1.jpg'),
(5, 'Handbouqet Wisuda 0105', 'Kombinasi sederhana dari bunga mawar pink dan mawar putih', 15, 186000, 10, 'Handbouqet', '27062018101705hand3.jpg'),
(6, 'Handbouqet Wisuda 0106', 'Gabungan dari bunga kain dengan bunga krisan putih yang harum', 8, 266000, 3, 'Handbouqet', '27062018101911hand9.jpg'),
(7, 'Handbouqet Wedding 0107', 'Handbouqet Wedding kombinasi bunga mawar dengan bunga lili merah', 10, 310000, 3, 'Handbouqet', '27062018102116weddin1.jpg'),
(8, 'Handbouqet Wedding 0108', 'Handbouqet Wdding kombinasi bunga mawar peach dengan mawar putih', 7, 200000, 5, 'Handbouqet', '27062018102721weddingg.jpg'),
(9, 'Handbouqet Wedding 0109', 'Handbouqet Wedding kombinasi bunga mawar peach,putih dan merah', 8, 310000, 10, 'Handbouqet', '27062018123932wedding1.jpg'),
(10, 'Handbouqet Wedding 0110', 'Handbouqet Wedding dari bunga lili putih yang harum dan indah', 15, 278000, 5, 'Handbouqet', '27062018104208wedding3.jpg'),
(11, 'Bunga Papan Ucapan 0340', 'Bunga Papan Ucapan dengan dimensi\r\n2 x 1,5 meter ', 12, 3125000, 8, 'Bunga Papan', '27062018122421congrat2.jpg'),
(12, 'Bunga Papan Ucapan 0341', 'Bunga Papan Ucapan dengan dimensi\r\n2 x 1,5 meter', 10, 2965000, 6, 'Bunga Papan', '27062018122539congrat3.jpg'),
(13, 'Bunga Papan Ucapan 0342', 'Bunga Papan Ucapan dengan dimensi\r\n2 x 1,5 meter', 4, 2340000, 7, 'Bunga Papan', '27062018122721congrat6.jpg'),
(14, 'Bunga Papan Duka Cita 0343', 'Bunga Papan Duka Cita dengan dimensi\r\n2 x 1,5 meter', 11, 1798000, 3, 'Bunga Papan', '27062018122908duka1.jpg'),
(15, 'Bunga Papan Duka Cita 0344', 'Bunga Papan Duka Cita dengan dimensi\r\n2 x 1,5 meter', 13, 1634000, 0, 'Bunga Papan', '27062018123046duka4.jpg'),
(16, 'Bunga Papan Duka Cita 0345', 'Bunga Papan Duka Cita dengan dimensi\r\n2 x 1,5 meter', 10, 1300000, 0, 'Bunga Papan', '27062018123228duka5.jpg'),
(17, 'Bunga Papan Wedding 0346', 'Bunga Papan Wedding dengan dimensi\r\n2 x 1,5 meter', 15, 1865000, 0, 'Bunga Papan', '27062018143031happy51.jpg'),
(18, 'Bunga Papan Wedding 0347', 'Bunga Papan Wedding dengan dimensi\r\n2 x 1,5 meter', 10, 2345000, 8, 'Bunga Papan', '27062018143103happy41.jpg'),
(19, 'Bunga Salib 0440', 'Rangkaian bunga untuk peti mati umat non muslim\r\ndengan dimensi 60 x 100 cm', 15, 867000, 5, 'Bunga Salib', '27062018142626salib.jpg'),
(20, 'Bunga Salib 0441', 'Rangkaian bunga untuk peti mati umat non muslim\r\ndengan dimensi 60 x 100 cm', 15, 1090000, 5, 'Bunga Salib', '27062018142033salib5.jpg'),
(21, 'Bunga Salib 0442', 'Rangkaian bunga untuk peti mati umat non muslim\r\ndengan dimensi 60 x 100 cm', 15, 789000, 5, 'Bunga Salib', '27062018144149salib1.jpg'),
(22, 'Bunga Salib 0443', 'Rangkaian bunga untuk peti mati umat non muslim\r\ndengan dimensi 60 x 100 cm', 15, 589000, 0, 'Bunga Salib', '27062018142335salib3.jpg'),
(23, 'Bunga Salib 0444', 'Rangkaian bunga untuk peti mati umat non muslim\r\ndengan dimensi 60 x 100 cm', 15, 745000, 0, 'Bunga Salib', '27062018142431salib2.jpg'),
(24, 'Bunga Salib 0445', 'Rangkaian bunga untuk peti mati umat non muslim\r\ndengan dimensi 60 x 100 cm', 15, 967900, 3, 'Bunga Salib', '27062018144318salib4.jpg'),
(25, 'Bloom Box 0401', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 498000, 0, 'Bloom Box', '27062018143833bloomm.jpg'),
(26, 'Bloom Box 0402', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 576000, 0, 'Bloom Box', '27062018143851bloom11.jpg'),
(27, 'Bloom Box 0403', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 552000, 10, 'Bloom Box', '27062018144444bloom3.jpg'),
(28, 'Bloom Box 0404', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 738000, 0, 'Bloom Box', '27062018144551bloom4.jpg'),
(29, 'Bloom Box 0405', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 690000, 0, 'Bloom Box', '27062018144728bloom2.jpg'),
(30, 'Bloom Box 0406', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 342000, 0, 'Bloom Box', '27062018144915bloom6.jpg'),
(31, 'Bloom Box 0407', 'Rangkaian bunga  mawar dalam box yang cantik', 20, 512000, 0, 'Bloom Box', '27062018145013bloom51.jpg'),
(32, 'Baby Hampers 0501', 'Rangkaian produk bayi yang dikemas rapi\r\ncocok untuk hantaran sahabat/keluarga lahiran', 20, 200000, 5, 'Baby Hampers', '28062018124519baby21.jpg'),
(33, 'Baby Hampers 0502', 'Rangkaian produk bayi yang dikemas rapi\r\ncocok untuk hantaran sahabat/keluarga lahiran', 20, 180000, 3, 'Baby Hampers', '28062018124409baby1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `kd_brg` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `id_session` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`kd_brg`, `jumlah`, `id_session`) VALUES
(28, 1, 'septi'),
(4, 1, 'septi');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `kdpegawai` varchar(5) NOT NULL,
  `nmpegawai` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `hakakses` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`kdpegawai`, `nmpegawai`, `pass`, `hakakses`, `status`) VALUES
('P01', 'Andri', '8a52c18655d9751e628eb21e3474105b', 'Admin', 'Aktif'),
('P02', 'septi', 'sdc96', 'Admin', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_brg`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kdpegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `kd_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
