-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jul 2020 pada 08.09
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoindonesia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` varchar(10) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `suplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kategori`, `nama_barang`, `harga`, `stok`, `suplier`) VALUES
('BR1001', 'Makanan', 'Kerupuk Ikan', 25000, 60, 'PD Idola Snack'),
('BR1002', 'Makanan', 'Keripik Singkong', 15000, 60, 'PD Idola Snack'),
('BR2001', 'Kosmetik', 'Sabun Herbal', 10000, 40, 'Herborist'),
('BR2002', 'Kosmetik', 'Masker Spirulina', 17000, 40, 'Herborist'),
('BR3001', 'Aksesoris', 'Jam Tangan Kayu Pria', 320000, 25, 'Indocraft'),
('BR3002', 'Aksesoris', 'Jam Tangan Kayu Wanita', 270000, 20, 'Indocraft'),
('BR3003', 'Aksesoris', 'Kalung Etnik', 175000, 10, 'Indocraft'),
('brg214', 'Codeignite4', 'Exotic4', 21004, 204, 'PD Idola Snack');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gerai`
--

CREATE TABLE `gerai` (
  `id_gerai` varchar(20) NOT NULL,
  `nama_gerai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gerai`
--

INSERT INTO `gerai` (`id_gerai`, `nama_gerai`, `alamat`, `kota`, `telepon`) VALUES
('G1', 'Gerai Dago', 'Jl. Ir Hj Djuanda 115', 'Bandung', '0227206678'),
('G2', 'Gerai Soekarno Hatta', 'Jl. Soekarno Hatta 21', 'Bandung', '0227507283'),
('G3', 'Gerai Gatot Subroto', 'Jl. Gatot Subroto 15', 'Bandung', '0227497644');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama`, `alamat`, `kota`, `telepon`) VALUES
('0033434', 'dendi', 'Banjaran', 'ff', '2323'),
('0245', 'Dendi Nurmahmudi', 'Banjaran', 'bg', '23423'),
('12345', 'Dendi Nurmahmud', 'Banjara', 'ff4', '23234'),
('34', 'dendi4', 'Banjaran4', 'bdg', '23234'),
('SP01', 'PD Idola Snack', 'Jl. Kud - SUkadami', 'Bekasi', '085693725494'),
('SP02', 'Herborist', 'Jl Daan Mogot Km.11', 'Jakarta', '021-54368111'),
('SP03', 'Indocraft', 'Jl. Raya Mas No. 47', 'Bali', '0361-973091');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gerai`
--
ALTER TABLE `gerai`
  ADD PRIMARY KEY (`id_gerai`);

--
-- Indeks untuk tabel `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
