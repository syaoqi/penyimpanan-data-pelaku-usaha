-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2021 pada 12.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dkp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `no` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`no`, `user`, `pass`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(3, 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bima`
--

CREATE TABLE `bima` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bima`
--

INSERT INTO `bima` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(3, 'aa', 'aa', 'a', 'a', '2021-09-27', '2022-09-27', 2022, 'q', 'q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dompu`
--

CREATE TABLE `dompu` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dompu`
--

INSERT INTO `dompu` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(1, 'Cv Bintang Jaya', 'Ds. Mangge Aseh Dompu ', 'Registrasi', 'Nasi', '2018-07-18', '2023-07-18', 0, 'KEMTAN RI PD 52.05-II.I.00-00002-12/2019', 'Pt. Mutu Agung Lestari'),
(2, 'PT .SAN . Cab.Dompu (Jempol)', 'Ds. TK sire Manggalewa Dompu', 'Registrasi', 'Nasi', '2019-12-03', '2024-12-03', 0, 'KEMTAN RI PD 52.05-II.I.00-00003-12/2019', 'PT Saras Wanti Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotabima`
--

CREATE TABLE `kotabima` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ksb`
--

CREATE TABLE `ksb` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ksb`
--

INSERT INTO `ksb` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(9, 'OKI', 'DSD', 'DD', 'DD', '2020-09-10', '2023-02-11', 2024, '242424', 'EWDSF'),
(10, 'CGHGCHG', 'B VVH  B', 'GFYU', 'CFFYGC', '3333-02-12', '6344-06-22', 22222, '12323435', 'ADsafdsf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loteng`
--

CREATE TABLE `loteng` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loteng`
--

INSERT INTO `loteng` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(1, 'Pacu Pacu ', 'Desa Ganti Kec. Praya Timur Loteng', 'Sertifikat', 'Melon ', '2010-12-29', '2013-12-29', 0, '52/04-3-1/031-003-12/2010', 'lppt ugm yogyakarta'),
(2, 'klp.aiq meneng', 'Ds.ganti kec jonggat lombok tengah', 'Sertifikat', 'Melon', '2012-12-27', '2015-12-27', 0, '52/02/3-1/036-011/12/2012', 'lppt ugm yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lotim`
--

CREATE TABLE `lotim` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lout`
--

CREATE TABLE `lout` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mataram`
--

CREATE TABLE `mataram` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mataram`
--

INSERT INTO `mataram` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(3, 'a', 'a', 'a', 'a', '2022-09-28', '2022-09-28', 2022, 'a', 'a'),
(8, 'aaa', 'aaa', 'aaa', 'aaa', '2021-09-29', '2022-09-29', 2021, '12451', 'qqqqq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pu`
--

CREATE TABLE `pu` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pu`
--

INSERT INTO `pu` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(14, 'qqqqq', 'qqq', 'qqqq', 'www', '2021-09-27', '2022-09-27', 2021, 'a', 'a'),
(16, 'aaa', 'aa', 'aa', 'aaaa', '2017-09-28', '2025-09-27', 2017, 'q', 'q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumbawa`
--

CREATE TABLE `sumbawa` (
  `nomor` int(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `rlk` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `sampai` date NOT NULL,
  `tahun` int(20) NOT NULL,
  `rek` varchar(50) NOT NULL,
  `lab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumbawa`
--

INSERT INTO `sumbawa` (`nomor`, `unit`, `alamat`, `jenis`, `rlk`, `mulai`, `sampai`, `tahun`, `rek`, `lab`) VALUES
(5, 'sddf', 'sffsaf', 'fdfe', 'dfdf', '4333-04-10', '0333-02-10', 3222, '2e2e', 'dddf'),
(6, 'csaf', 'sfasffbb', 'dvdv', 'dvd', '2222-04-01', '0000-00-00', 5556, '232323', 'sdsdsfd'),
(7, 'a', '', '', '', '0000-00-00', '0000-00-00', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `bima`
--
ALTER TABLE `bima`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `dompu`
--
ALTER TABLE `dompu`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `kotabima`
--
ALTER TABLE `kotabima`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `ksb`
--
ALTER TABLE `ksb`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `loteng`
--
ALTER TABLE `loteng`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `lotim`
--
ALTER TABLE `lotim`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `lout`
--
ALTER TABLE `lout`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `mataram`
--
ALTER TABLE `mataram`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `pu`
--
ALTER TABLE `pu`
  ADD PRIMARY KEY (`nomor`);

--
-- Indeks untuk tabel `sumbawa`
--
ALTER TABLE `sumbawa`
  ADD PRIMARY KEY (`nomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bima`
--
ALTER TABLE `bima`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dompu`
--
ALTER TABLE `dompu`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kotabima`
--
ALTER TABLE `kotabima`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ksb`
--
ALTER TABLE `ksb`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `loteng`
--
ALTER TABLE `loteng`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lotim`
--
ALTER TABLE `lotim`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lout`
--
ALTER TABLE `lout`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mataram`
--
ALTER TABLE `mataram`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pu`
--
ALTER TABLE `pu`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `sumbawa`
--
ALTER TABLE `sumbawa`
  MODIFY `nomor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
