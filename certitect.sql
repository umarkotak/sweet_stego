-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2018 at 02:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `certitect`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `nama_sertifikat` varchar(100) NOT NULL,
  `penerbit_sertifikat` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(15) NOT NULL,
  `nomor_sertifikat` varchar(15) NOT NULL,
  `informasi_tambahan` text NOT NULL,
  `link_gambar` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `raw_data` text NOT NULL,
  `classification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `nama_pemilik`, `nama_sertifikat`, `penerbit_sertifikat`, `tanggal_terbit`, `nomor_sertifikat`, `informasi_tambahan`, `link_gambar`, `status`, `raw_data`, `classification`) VALUES
(1, 'm umar ramadhana', 'workshop html dasar', 'lab dasar stt pln', '0001-01-01', '2019109', 'sertifikat workshop', 'm_umar_ramadhana-0001-01-01-workshop_html_dasar.png', 'verified', 'pQF2vCDuKVv8Ot9k3YbZZ8kP5u6v4FZDaQxAbdooMPycYoxVWg2Cpxnknv9tB4cEcQRb3NUhc1u5rVbCYvoZZ0nE5BGSV9r+WWopNeABWj3e9Xpm/98hvtopzeFy0oMH626/zYrLeW0wTmFXl958QsRNx36g+BiWVkwnhqsdQLZyMOlvPomZvNePLpHZPy22InZObji1zdTzn/Hl2hy7skaKmIuQGYO5XM6WhO3rk5skWt1lz/k65MHFIxEGoh4T0Khv9axjWYnvKMDy/cjR4uLbzc66H7MMj7mBM1JBxBOf0jSDNmJmhU3cMttskZSQ1qX/QiuT77K0tS63E4KGUkwMQVZ2RczuihdQXFsZ0|05fc168ef1cf70ccaa1b38b517a4acfc05e390abbca3c3d2b8f9095351498cd90632ffe27607fa572c743adbc4eb536a7e7b65311c674c6751eefa4c2ea24fef', ''),
(2, 'm umar ramadhana', 'workshop html dasar', 'lab dasar stt pln', '0001-01-01', '2019109', 'sertifikat workshop', 'm_umar_ramadhana-0001-01-01-workshop_html_dasar.png', 'verified', 'pQF2vCDuKVv8Ot9k3YbZZ8kP5u6v4FZDaQxAbdooMPycYoxVWg2Cpxnknv9tB4cEcQRb3NUhc1u5rVbCYvoZZ0nE5BGSV9r+WWopNeABWj3e9Xpm/98hvtopzeFy0oMH626/zYrLeW0wTmFXl958QsRNx36g+BiWVkwnhqsdQLZyMOlvPomZvNePLpHZPy22InZObji1zdTzn/Hl2hy7skaKmIuQGYO5XM6WhO3rk5skWt1lz/k65MHFIxEGoh4T0Khv9axjWYnvKMDy/cjR4uLbzc66H7MMj7mBM1JBxBOf0jSDNmJmhU3cMttskZSQ1qX/QiuT77K0tS63E4KGUkwMQVZ2RczuihdQXFsZ0|05fc168ef1cf70ccaa1b38b517a4acfc05e390abbca3c3d2b8f9095351498cd90632ffe27607fa572c743adbc4eb536a7e7b65311c674c6751eefa4c2ea24fef', ''),
(4, 'arladonk', 'itcc', 'stt pln', '0001-11-01', '123', 'ini punya lando', 'arladonk-0001-11-01-itcc.png', 'fake', 'ogB+vlA0OluLgqXw2NB0omqUI3co07lHxUWT+5LmT4oQJswWmIJlzeXkHCKglnbd4Xu8oqmnxkTg1Op5Lyz76ytD2akVZxS3bHWDX+R/CIIbuwZCKmOURp+2hPmaiBSYeXD07/+PcAbN9Mt5k/FQMF/IuZhLY/h3OZkL6e4mwmWxILFI70BlLNNEBtZc0DXaFsbGwe/fOU0pg82yEnZjlGDSgU4OF/Ao76nOMk7velXAmk5FeUlthDbR8NMw6TbhbnunMfwu46dqKiRpNSg4DRD9E7l1L5oh1lYNg+OmNoM9upMBdw==0|0699ca12dd9fffbd5ecb8439dbf8ba0acc642eb15b68d5a9c943fc1df1c0f1ad80ae786f00cf7fbf8ce1cf537aca4ddcdf5dd03c1e6d9cd22440b964a7eb8fc5', ''),
(5, 'muhammad efendi', 'TOEFL ITP', 'ETS', '2015-11-07', '11072015', 'Listening = 52\r\nStructure & Written Expression = 55\r\nReading Comprehension = 61\r\nTotal = 560', 'muhammad_efendi-2015-11-07-TOEFL_ITP.png', 'fake', 'TAHbqHRDQFvRZAhmXZA/4BYiHqLiIzAlIBLDOssvgzCo2RPVlCQs58TFqYl4d/UZKQ3QV1j7efTmgWk4jsDtF/XW3oKNf3V0zkoIXCN9wSWk72ulEsMlZp0zEjMM/bqaoL3PIbq8cl2Tk9CrItl/fBjxz2boLMweC+B8cpS2v9gs47o9IIsM345umKmLWifpZ5r6+UeMwXtDmY5hZ+yvWBPixp2frJ3S/QRXlk3yUlNb3ADikTo5sNZP895dqCQY2hKjTozdsSf6Cnt5a7iLBqdaAJ9IK/CZLT85bkO43k4qUPhYENFD2ZaARAWIOhR3nWId90g/mVj8F9vjy3UFbvPwWndEy8xGF5+UadsQTUIjfPt7UDaOwKPr+spX7E0lcbIpf6Vh0Ca1dqwE6SRO0fdaPyopoN2nFsL8JMbdiw==0|a1e1d085472a65d3d3d47877751aea3665b19df83cd2304a71c8a596f843f16aa1f77a48ab9dc5e4f5f32778c4dc02e9d5b207274faecb0842d642016281e76a', ''),
(6, 'm umar ramadhana', 'rubyconf', 'ruby.id', '2017-10-06', '2017', 'the first ever rubyconf in indonesia', 'm_umar_ramadhana-2017-10-06-rubyconf.png', 'verified', 'kwHXNTpsSVumd5W5OstGi6hYWssC7LYDZI+ZQ9+eKnQ08XMDk44u+XwKQ4bdDgyZwhe3BBYEP2ygOermp9Ivmq5rCIOLnMg7vQoAqPYSD2892vBzU+nyjxaq5+JuUVu/HHhHosvjOKmCagKn/dtF+5YSt3YN5QPUCxqli5qdyacqoufd3FEMDU7vys5oBQhos0nFajag9S856jpPhbtaLuavN9T2OOj/Ccy/vJh5zOHq5NLH/xl+SYAHVqnm27kv2yxKXoRXok8Bmo3a0Gf/xEmpz4IJOiAWUQTnE+jx515Eb4tBJxBs61vfF7pip9DxZwSfvsk+IzIjMHtJRJDogdU7aBBZw3I=0|f1f2c0acf94a74fb97d0e6bfb8f45b7d9a129b0db37a7305c79b37f90022bff70c5cb097566348a49d5b37acc5172a7064479debc9aacdb3074ef5c796ea9ccd', ''),
(7, 'm umar ramadhana', 'workshop html dasar', 'lab dasar stt pln', '0001-01-01', '2019109', 'sertifikat workshop', 'm_umar_ramadhana-0001-01-01-workshop_html_dasar.png', 'verified', 'pQF2vCDuKVv8Ot9k3YbZZ8kP5u6v4FZDaQxAbdooMPycYoxVWg2Cpxnknv9tB4cEcQRb3NUhc1u5rVbCYvoZZ0nE5BGSV9r+WWopNeABWj3e9Xpm/98hvtopzeFy0oMH626/zYrLeW0wTmFXl958QsRNx36g+BiWVkwnhqsdQLZyMOlvPomZvNePLpHZPy22InZObji1zdTzn/Hl2hy7skaKmIuQGYO5XM6WhO3rk5skWt1lz/k65MHFIxEGoh4T0Khv9axjWYnvKMDy/cjR4uLbzc66H7MMj7mBM1JBxBOf0jSDNmJmhU3cMttskZSQ1qX/QiuT77K0tS63E4KGUkwMQVZ2RczuihdQXFsZ0|05fc168ef1cf70ccaa1b38b517a4acfc05e390abbca3c3d2b8f9095351498cd90632ffe27607fa572c743adbc4eb536a7e7b65311c674c6751eefa4c2ea24fef', ''),
(8, 'm umar ramadhana', 'seminar nasional implementation technopreneurship in startup', 'himaka stt pln', '2017-05-02', '-', 'seminar nasional', 'm_umar_ramadhana-2017-05-02-seminar_nasional_implementation_technopreneurship_in_startup.png', 'fake', 'CgIkvB3kVVvZgQXs8qJ7CKRZ9yINpl9DFvbYgVPbriZwOFPpHhC2cGMyTjQVJduTLtu3ZdNBDNkMZ6Vku0VS6mg2GXTnC4JV5Z7qePNt47oTUMagCyy9hdEuLSvWTrkp6qKVa94a2P7pP4FsESTwIZJ+HNJ/Sry7Eb+uL16BqGd7vQXAX8wy2hMxuJZUlld5SiM/p32pZlFlhu9lxlBTQRbP2MUcqmSgk1Tfx/hCJDbof2z2BBrPuyyPGy7x9w2SKHBmKvzC2ORvhcnNULTthd/S4HzyacHZf6AXcVJ4E3BtDvcjZsoCtRAMBP6o/mxG1GRJTSpwacyXvSXiLv3hN55P69W/WOfIB9bikqVY92MMpK8pTIh95ir/phHflmc2Fm0t9CnzAvXvt4w=0|170286d3d0838640cdcb36050eac0fd48f89f0321714ae4171e76179c2e4bd3a7521869e2fdb711e6ecd3e984d99d9cea7a84733bff638788f32aeb46a78c4ca', ''),
(9, 'umar', 'implementasi api android', 'lab simpel', '2017-12-04', '-', '-', 'umar-2017-12-04-implementasi_api_android.png', 'fake', 'LQBMaftFZVue8mNOE73wWVTNJ8MiPU7ZSJRT2G6bFVtd/QGgsNCN+eug9kYzKFxfOsppQnjwxAhtrrQV6HCgmnzT8vpTiwxsTbdZMXqyHU5WFakdbOrmYl0h5dFz+X8ej44P9K7obS5oQTgURVQTQwbB8juYPCo2fKI/E2XplJg9GK52ERWdEEUkn2cDTtEtxwXqCpuy3cv8kYocCg9IK9Hq2EQd2CAnvnuErksvhVKsM0wOxfJG8PXRNRGJDMI5WaQqxbscM2LsyQZPY9Ma1gaDwtscidnTdxqIrCRWlg2I3eHOu09aGQ==0|c2176e5156815d17dcb95d3866814da7d0c62d1639d39ac50cc765b7f00ab18ada39edd9d721b63c9a82db7d669a2ba30cda06ae016160b0cb4c1bd27e352f71', ''),
(10, 'm umar ramadhana', 'implementasi api android', 'lab simpel stt pln', '2018-08-15', '1234', '-', 'm_umar_ramadhana-2018-08-15-implementasi_api_android.png', 'verified', '/AKROTtIbltJPQOZ3qhYxWvXMKR/leY355ugbsMNxZf8xKRSYI0bWQTn/WZpncAFQnsIhaEDhKbNdV1cmm77HP3k3frjO1XFKEBwXrfI1yBgBcMlA0ZeHm/VNJzNFpZi98kK7Y4pBA7mioa3O3c1Lt0nG0EO99iZDTAoWmcrHf8gBcFR0gryJgdyAmYxsmie3KVZbXvcsy0jDSayRRTRQski5xIRSxOvVkdUz009EVN+ZCXXDPBojc2WlMdHEQQEdQcjLoKMdwLDXb0u6UDhkcz3POKC3sBPVuIsqJXP0FEOAFt7oaDFn2xr2xVk/9oqrA4Wz3/b9Js6mZio7Pyo0|9d6607bf808abf318c520157c44c187fcc199954ed1c695fb9092960ce13e1813b7ae93b3f1c427275368829e44f5390cb7f356995dbf61e65b6eabbd97e5d73', ''),
(11, 'm umar ramadhana', 'implementasi api android', 'lab simpel stt pln', '2018-08-15', '1234', '-', 'm_umar_ramadhana-2018-08-15-implementasi_api_android.png', 'fake', '/AKROTtIbltJPQOZ3qhYxWvXMKR/leY355ugbsMNxZf8xKRSYI0bWQTn/WZpncAFQnsIhaEDhKbNdV1cmm77HP3k3frjO1XFKEBwXrfI1yBgBcMlA0ZeHm/VNJzNFpZi98kK7Y4pBA7mioa3O3c1Lt0nG0EO99iZDTAoWmcrHf8gBcFR0gryJgdyAmYxsmie3KVZbXvcsy0jDSayRRTRQski5xIRSxOvVkdUz009EVN+ZCXXDPBojc2WlMdHEQQEdQcjLoKMdwLDXb0u6UDhkcz3POKC3sBPVuIsqJXP0FEOAFt7oaDFn2xr2xVk/9oqrA4Wz3/b9Js6mZio7Pyo0|9d6607bf808abf318c520157c44c187fcc199954ed1c695fb9092960ce13e1813b7ae93b3f1c427275368829e44f5390cb7f356995dbf61e65b6eabbd97e5d73', '');

-- --------------------------------------------------------

--
-- Table structure for table `published_certificates`
--

CREATE TABLE `published_certificates` (
  `id` int(11) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `nama_sertifikat` varchar(100) NOT NULL,
  `penerbit_sertifikat` varchar(100) NOT NULL,
  `tanggal_terbit` varchar(15) NOT NULL,
  `nomor_sertifikat` varchar(15) NOT NULL,
  `informasi_tambahan` text NOT NULL,
  `link_gambar` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `classification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `published_certificates`
--

INSERT INTO `published_certificates` (`id`, `nama_pemilik`, `nama_sertifikat`, `penerbit_sertifikat`, `tanggal_terbit`, `nomor_sertifikat`, `informasi_tambahan`, `link_gambar`, `status`, `classification`) VALUES
(2, 'm umar ramadhana', 'workshop html dasar', 'lab dasar stt pln', '0001-01-01', '2019109', 'sertifikat workshop', 'm_umar_ramadhana-0001-01-01-workshop_html_dasar.png', 'published', ''),
(4, 'arladonk', 'itcc', 'stt pln', '0001-11-01', '123', 'ini punya lando', 'arladonk-0001-11-01-itcc.png', 'published', ''),
(5, 'muhammad efendi', 'TOEFL ITP', 'ETS', '2015-11-07', '11072015', 'Listening = 52\r\nStructure & Written Expression = 55\r\nReading Comprehension = 61\r\nTotal = 560', 'muhammad_efendi-2015-11-07-TOEFL_ITP.png', 'published', ''),
(7, 'm umar ramadhana', 'rubyconf', 'ruby.id', '2017-10-06', '2017', 'the first ever rubyconf in indonesia', 'm_umar_ramadhana-2017-10-06-rubyconf.png', 'published', ''),
(8, 'm umar ramadhana', 'seminar nasional implementation technopreneurship in startup', 'himaka stt pln', '2017-05-02', '-', 'seminar nasional', 'm_umar_ramadhana-2017-05-02-seminar_nasional_implementation_technopreneurship_in_startup.png', 'published', ''),
(9, 'umar', 'implementasi api android', 'lab simpel', '2017-12-04', '-', '-', 'umar-2017-12-04-implementasi_api_android.png', 'published', ''),
(10, 'bejo', 'sertifikasi warkop', 'warkop terdekat', '2018-08-14', '123', '-', 'bejo-2018-08-14-sertifikasi_warkop.png', 'published', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `published_certificates`
--
ALTER TABLE `published_certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `published_certificates`
--
ALTER TABLE `published_certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
