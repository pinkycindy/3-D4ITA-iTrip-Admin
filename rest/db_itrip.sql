-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Sep 2017 pada 05.25
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_itrip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailplanning`
--

CREATE TABLE `detailplanning` (
  `idDetail` int(5) NOT NULL,
  `idPlanning` int(5) NOT NULL,
  `idWisata` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `idEvent` int(5) NOT NULL,
  `idProvinsi` int(5) NOT NULL,
  `namaEvent` varchar(50) NOT NULL,
  `tglEvent` date NOT NULL,
  `deskripsiEvent` text NOT NULL,
  `lokasiEvent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `idFoto` int(5) NOT NULL,
  `idUser` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `file` text NOT NULL,
  `tglUpload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `planning`
--

CREATE TABLE `planning` (
  `idPlanning` int(5) NOT NULL,
  `idUser` int(5) NOT NULL,
  `judul` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `note` text NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `popular`
--

CREATE TABLE `popular` (
  `idPopular` int(5) NOT NULL,
  `idWisata` int(5) NOT NULL,
  `idUser` int(5) NOT NULL,
  `rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `idProvinsi` int(5) NOT NULL,
  `namaProvinsi` varchar(50) NOT NULL,
  `idPulau` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pulau`
--

CREATE TABLE `pulau` (
  `idPulau` int(5) NOT NULL,
  `namaPulau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fotoProfil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `idWisata` int(11) NOT NULL,
  `idProvinsi` int(5) NOT NULL,
  `namaWisata` varchar(50) NOT NULL,
  `deskripsiWisata` text NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `biayaMasuk` int(15) NOT NULL,
  `lokasiWisata` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailplanning`
--
ALTER TABLE `detailplanning`
  ADD PRIMARY KEY (`idDetail`),
  ADD KEY `idPlanning` (`idPlanning`),
  ADD KEY `idWisata` (`idWisata`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `idProvinsi` (`idProvinsi`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idFoto`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`idPlanning`),
  ADD KEY `idPlanning` (`idPlanning`),
  ADD KEY `idPlanning_2` (`idPlanning`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`idPopular`),
  ADD KEY `idWisata` (`idWisata`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`idProvinsi`),
  ADD KEY `idPulau` (`idPulau`);

--
-- Indexes for table `pulau`
--
ALTER TABLE `pulau`
  ADD PRIMARY KEY (`idPulau`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`idWisata`),
  ADD KEY `idProvinsi` (`idProvinsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailplanning`
--
ALTER TABLE `detailplanning`
  MODIFY `idDetail` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idEvent` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `idFoto` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `idPlanning` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `idProvinsi` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pulau`
--
ALTER TABLE `pulau`
  MODIFY `idPulau` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `idWisata` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailplanning`
--
ALTER TABLE `detailplanning`
  ADD CONSTRAINT `detailplanning_ibfk_1` FOREIGN KEY (`idPlanning`) REFERENCES `planning` (`idPlanning`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detailplanning_ibfk_2` FOREIGN KEY (`idWisata`) REFERENCES `wisata` (`idWisata`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`idProvinsi`) REFERENCES `provinsi` (`idProvinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `popular`
--
ALTER TABLE `popular`
  ADD CONSTRAINT `popular_ibfk_1` FOREIGN KEY (`idWisata`) REFERENCES `wisata` (`idWisata`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `popular_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `provinsi_ibfk_1` FOREIGN KEY (`idPulau`) REFERENCES `pulau` (`idPulau`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`idProvinsi`) REFERENCES `provinsi` (`idProvinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
