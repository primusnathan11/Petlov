-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 10:58 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `telp_admin` varchar(15) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  `alamat_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `telp_admin`, `email_admin`, `pass_admin`, `alamat_admin`) VALUES
(1, 'Admin1', '081912039', 'admin@gmail.com', 'admin', 'jl. jalan');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `preview_text` text NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `id_admin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `preview_text`, `img_title`, `id_admin`) VALUES
(1, '6 Alasan Punya Hewan Peliharaan Bisa Menjaga Kesehatan Mental Anda', '<h2 style=\"margin-top:25px;margin-bottom:15px\" class=\"text-center\"><b>6 Alasan Punya Hewan Peliharaan Bisa Menjaga Kesehatan Mental Anda</b></h2>\r\n  <center><img src=\"<?php echo base_url()?>assets/images/artikel/1.jpg\" alt=\"\" style=\"height : 300px\"  /></center>\r\n  <br>\r\n  <p>Apakah Anda sedang stres atau merasa tertekan? Jika Anda tinggal dengan hewan peliharaan, Anda mungkin dapat menjaga kesehatan mental Anda.</p>\r\n  <p>Ya, ternyata kucing atau anjing kecil Anda adalah satu-satunya terapi yang Anda butuhkan untuk mengatasi masalah kesehatan mental seperti Depresi, stres, kecemasan dan banyak lagi.</p>\r\n  <p>Itu benar, Anda mungkin berpikir bahwa Andalah yang merawat mereka, tetapi mereka mendukung dan merawat Anda dengan cara yang tidak terucapkan.</p>\r\n  <p>Menurut Medical News Today, memiliki hewan peliharaan membantu orang yang mengidap masalah kesehatan mental yang parah merasakan rasa aman, stabilitas dan menemukan makna dalam hidup.</p>\r\n  <p>Menurut sebuah penelitian, kucing dan anjing memiliki kualitas bawaan untuk membuat Anda merasa nyaman dan aman. Mereka mencintai dalam bentuk yang paling murni dan cinta itu dapat membantu mengatasi kesulitan hidup. Masih tidak percaya?</p>\r\n  <p>Berikut enam cara hewan peliharaan Anda dapat meningkatkan kesehatan mental Anda, dilansir dari Pinkvilla, Selasa (16/11/2021).</p>\r\n  <h5 style=\"margin-bottom:15px\"><b>1. Baik untuk Kesehatan Mental</b></h5>\r\n  <img src=\"<?php echo base_url()?>assets/images/artikel/1.1.jpg\" alt=\"\" style=\"height : 200px;margin-bottom:15px\"  />\r\n  <p>Membawa hewan peliharaan Anda berjalan-jalan, mendaki atau berlari dapat membantumu tetap bugar dan memenuhi kebutuhan olahraga harianmu. Berolahraga secara teratur dapat berdampak baik pada kesehatan mental Anda juga.</p>\r\n  <h5 style=\"margin-bottom:15px\"><b>2. Mengusir Rasa Kesepian</b></h5>\r\n  <img src=\"<?php echo base_url()?>assets/images/artikel/1.2.jpg\" alt=\"\" style=\"height : 200px;margin-bottom:15px\"  />\r\n  <p>Menjalani isolasi dan kesepian, kenyataan yang kita jalani saat ini yang tentu dapat menyebabkan depresi.\r\n  Merawat hewan dan bermain dengan mereka dapat membuat Anda merasa diinginkan. Mulai dari menyapa Anda di depan pintu hingga mengibaskan ekor saat menginginkan sesuatu dapat mengusir rasa kesepian secara cepat.</p>\r\n  <h5 style=\"margin-bottom:15px\"><b>3. Berinteraksi dengan Pemilik Hewan Lain</b></h5>\r\n  <img src=\"<?php echo base_url()?>assets/images/artikel/1.3.jpg\" alt=\"\" style=\"height : 200px;margin-bottom:15px\"  />\r\n  <p>Pemilik hewan peliharaan sering berbicara satu sama lain saat berjalan-jalan, ini membantu mereka tetap terhubung dan tidak terlalu menarik diri. Orang yang bersosialisasi dan bertemu orang baru cenderung lebih sehat.</p>\r\n  <h5 style=\"margin-bottom:15px\"><b>4. Buat Kita Menghargai Hal Kecil dalam Hidup</b></h5>\r\n  <img src=\"<?php echo base_url()?>assets/images/artikel/1.4.jpg\" alt=\"\" style=\"height : 200px;margin-bottom:15px\"  />\r\n  <p>Hewan peliharaan hidup di saat ini dan mengajari Anda untuk melakukan hal yang sama. Mereka membantumu menjadi lebih sadar dan menghargai hal kecil dalam hidup. Ini dapat membantu bagi mereka yang mengidap stres kronis atau kecemasan.</p>\r\n  <h5 style=\"margin-bottom:15px\"><b>5. Miliki Rutinitas</b></h5>\r\n  <img src=\"<?php echo base_url()?>assets/images/artikel/1.5.jpg\" alt=\"\" style=\"height : 200px;margin-bottom:15px\"  />\r\n  <p>Hewan peliharaan harus memiliki jadwal makan dan olahraga yang tepat, yang membantu mereka tetap tenang dan ini juga dapat membantumu.</p>\r\n  <p>Memiliki hewan peliharaan membantu Anda tetap pada jadwal dan rutinitas yang tepat yang dapat membantu Anda menjaga perubahan suasana hati Anda.</p>\r\n  <h5 style=\"margin-bottom:15px\"><b>6. Membantu Menghilangkan Stres</b></h5>\r\n  <img src=\"<?php echo base_url()?>assets/images/artikel/1.6.jpg\" alt=\"\" style=\"height : 200px;margin-bottom:15px\"   />\r\n  <p style=\"margin-bottom:50px\">Diyakini bahwa sentuhan dan gerakan adalah dua cara terbaik untuk mengelola stres. Mengelus anjing Anda, memeluknya di pangkuan Anda atau burung yang bernyanyi untuk Anda dapat membantu Anda merasa lebih tenang dan tidak terlalu stres.</p>', 'Apakah Anda sedang stres atau merasa tertekan? Jika Anda tinggal dengan hewan peliharaan, Anda mungkin dapat menjaga kesehatan mental Anda.Ya, ternyata kucing atau anjing kecil Anda adalah satu-satunya terapi yang Anda butuhkan untuk mengatasi masalah kesehatan mental seperti Depresi, stres, dan lain-lain.Berikut beberapa alasan mempunyai hewan dapat menjaga kesehatan mental anda.', '1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `foto_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti`, `id_transaksi`, `foto_bukti`) VALUES
(7, 27, 'Capture111.PNG'),
(9, 29, 'Product_Bisanara.png'),
(10, 30, '1ss1s2.PNG'),
(11, 31, '2keui7.jpg'),
(12, 32, '85bb123e999c390de50ce6e1e0b515c51.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_petshop` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `chat_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_petshop` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_produk`, `qty`, `harga`, `id_petshop`, `id_user`) VALUES
(26, 27, 14, 3, 450000, 3, 1),
(29, 29, 14, 3, 450000, 3, 1),
(30, 29, 15, 1, 150000, 3, 1),
(31, 30, 14, 2, 300000, 3, 7),
(32, 31, 14, 2, 300000, 3, 8),
(33, 32, 14, 3, 450000, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(100) NOT NULL,
  `telp_dokter` varchar(15) NOT NULL,
  `email_dokter` varchar(50) NOT NULL,
  `pass_dokter` varchar(255) NOT NULL,
  `alamat_dokter` varchar(255) NOT NULL,
  `sertifikat_dokter` varchar(255) NOT NULL,
  `sertif_approval` enum('Pending','Rejected','Approved') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `telp_dokter`, `email_dokter`, `pass_dokter`, `alamat_dokter`, `sertifikat_dokter`, `sertif_approval`) VALUES
(7, 'Dr. Tes', '08124013943', 'drprimus@gmail.com', 'drprimus', 'jl. yamur', 'Capture11.PNG', 'Approved'),
(8, 'dr. Orvala', '081333351987', 'drorvala@gmail.com', 'orvala', 'jl. jalan', 'tumblr_ntiz2gJ8be1tahpkeo1_400.jpg', 'Approved'),
(9, 'dr. Boy', '0812401941', 'drboy@gmail.com', 'dokter', 'jl. dokter', 'binus.png', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `petshop`
--

CREATE TABLE `petshop` (
  `id_petshop` int(11) NOT NULL,
  `nama_petshop` varchar(100) NOT NULL,
  `telp_petshop` varchar(15) NOT NULL,
  `email_petshop` varchar(50) NOT NULL,
  `pass_petshop` varchar(255) NOT NULL,
  `alamat_petshop` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petshop`
--

INSERT INTO `petshop` (`id_petshop`, `nama_petshop`, `telp_petshop`, `email_petshop`, `pass_petshop`, `alamat_petshop`) VALUES
(1, 'Pussy Petshop', '081234124925', 'pussypetshop@gmail.com', 'pussy', 'jl. sulfat'),
(2, 'Tes Petshop', '0812410349', 'tespetshop@gmail.com', 'tespetshop', 'jl. tes'),
(3, 'Royal Petshop', '08121419034', 'royalpetshop@gmail.com', 'royal', 'jl. toba'),
(4, 'Petshop sawojajar', '08114342', 'petshopsawojajar@gmail.com', 'petshop', 'jl. sawojajar');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `id_petshop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stok`, `gambar_produk`, `id_petshop`) VALUES
(13, 'Royal Canin', 100000, 93, 'assetpetlov11.jpg', 4),
(14, 'Grooming Kucing', 150000, 983, 'assetpetlov3.jpg', 3),
(15, 'Grooming Anjing', 150000, 998, 'assetpetlov2.jpg', 3),
(16, 'Kandang Custom', 1000000, 999, 'assetpetlov4.jpg', 3),
(17, 'Kandang Hewan', 1000000, 100, 'assetpetlov5.jpg', 3),
(18, 'Whiskas', 250000, 200, 'assetpetlov6.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `status` enum('Menunggu Pembayaran','Pesanan Diproses','Sedang Dikirim','Pesanan Selesai','Dibatalkan') NOT NULL,
  `payment` enum('BCA','Mandiri','BNI','BRI') NOT NULL,
  `total_harga` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `no_resi` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `tanggal_transaksi`, `status`, `payment`, `total_harga`, `alamat_pengiriman`, `no_resi`) VALUES
(27, 1, '2022-06-13 19:43:31', 'Sedang Dikirim', 'BCA', 450000, 'Jl. Sawojajar', 123456789),
(29, 1, '2022-06-13 19:50:27', 'Sedang Dikirim', 'BCA', 600000, 'Jl. Sawojajar', 987654321),
(30, 7, '2022-06-14 13:31:06', 'Pesanan Selesai', 'BCA', 300000, 'jl. madiun', 324256292),
(31, 8, '2022-06-17 16:15:59', 'Pesanan Selesai', 'BCA', 300000, 'jl. jalan', 1252039235),
(32, 9, '2022-06-18 06:03:51', 'Pesanan Selesai', 'BCA', 450000, 'jl. customer', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `telp_user` varchar(15) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `telp_user`, `email_user`, `pass_user`, `alamat_user`) VALUES
(1, 'Primus Nathan Orvala', '081333351987', 'nathan.primus77@gmail.com', 'primus', 'Jl. Sawojajar'),
(2, 'Barry Allen', '0821421924', 'barry_allen@gmail.com', 'barry', 'jl. madiun'),
(3, 'user3', '08124902941', 'user3@gmail.com', 'user3', 'jl. jl99'),
(4, 'Primus Orvala', '0814143920', 'primus.orvala@gmail.com', 'primus', 'jl. primus'),
(5, 'Nama User', '08912341204', 'user@gmail.com', 'user', 'jl. user'),
(6, 'Primus', '081234234', 'primus.orvala@gmail.com', 'primus', 'Jl. jalan'),
(7, 'nathan primus', '08123124423', 'nathanprimus@gmail.com', 'primus', 'jl. madiun'),
(8, 'Oliver Queen', '081241291', 'oliverqueen@gmail.com', 'pembeli', 'jl. jalan'),
(9, 'Customer1', '08124095223', 'customer1@gmail.com', 'customer', 'jl. customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_petshop` (`id_petshop`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_petshop` (`id_petshop`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `petshop`
--
ALTER TABLE `petshop`
  ADD PRIMARY KEY (`id_petshop`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_petshop` (`id_petshop`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petshop`
--
ALTER TABLE `petshop`
  MODIFY `id_petshop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD CONSTRAINT `bukti_pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_petshop`) REFERENCES `petshop` (`id_petshop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_3` FOREIGN KEY (`id_petshop`) REFERENCES `petshop` (`id_petshop`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_petshop`) REFERENCES `petshop` (`id_petshop`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
