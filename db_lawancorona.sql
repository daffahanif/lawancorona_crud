-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2020 pada 23.06
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lawancorona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'daffa', 'daffa123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_pasien`
--

CREATE TABLE `tb_data_pasien` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `umur_pasien` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status_pasien` varchar(10) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `wn` varchar(10) NOT NULL,
  `rumah_sakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_data_pasien`
--

INSERT INTO `tb_data_pasien` (`id`, `nama_pasien`, `umur_pasien`, `gender`, `status_pasien`, `provinsi`, `wn`, `rumah_sakit`) VALUES
(3, 'test3', '239810', 'Laki-Laki', 'Meninggal', 'banten', 'indonesia', 'rs kariadi'),
(7, 'test', 'test', 'Laki-Laki', 'Sembuh', 'test', 'test', 'test'),
(8, 'testerrrrt', 'test', 'Perempuan', 'ODP', 'test', 'test', 'test'),
(9, 'test', 'test', 'Laki-Laki', 'Positif', 'test', 'test', 'test'),
(10, 'test', 'test', 'Laki-Laki', 'Sembuh', 'test', 'test', 'test'),
(12, 'Ridho', '49', 'Laki-Laki', 'PDP', 'jawa tengah', 'indonesia', 'rs persahabatan'),
(14, 'ok', 'ok', 'Laki-Laki', 'Meninggal', 'ok', 'ok', 'ok'),
(17, 'test', 'test', 'Laki-Laki', 'ODP', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id` int(11) NOT NULL,
  `nama_donatur` varchar(100) NOT NULL,
  `jumlah_donasi` int(11) NOT NULL,
  `alamat_donatur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_donasi`
--

INSERT INTO `tb_donasi` (`id`, `nama_donatur`, `jumlah_donasi`, `alamat_donatur`) VALUES
(7, 'Daffa Hanifisyafiq', 1000000, 'Pemalang'),
(11, 'Hamba Allah', 120102398, 'InYourDream'),
(12, 'DAFFA', 10010010, 'Semarang'),
(13, 'Agung', 1010, 'Pemalang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_pasien`
--
ALTER TABLE `tb_data_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_data_pasien`
--
ALTER TABLE `tb_data_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
