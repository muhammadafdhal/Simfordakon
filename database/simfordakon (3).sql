-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jun 2017 pada 10.30
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simfordakon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bankId` varchar(15) NOT NULL,
  `bankNama` varchar(50) NOT NULL,
  `bankAlamat` varchar(50) NOT NULL,
  `bankTelepon` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`bankId`, `bankNama`, `bankAlamat`, `bankTelepon`) VALUES
('bank11', 'Mandiri', 'Sudirman', 89998146481),
('bank12', 'BCA', 'Panam', 8174647149381),
('bank13', 'BRI Syariah', 'Kualu', 817264527492);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE IF NOT EXISTS `konsumen` (
  `ksmId` varchar(15) NOT NULL,
  `prmId` varchar(15) NOT NULL,
  `rmhId` varchar(15) NOT NULL,
  `bankId` varchar(15) NOT NULL,
  `ksmNama` varchar(50) NOT NULL,
  `ksmTelepon` bigint(20) NOT NULL,
  `ksmNoLpa` int(11) NOT NULL,
  `ksmNosp3k` int(11) NOT NULL,
  `ksmTglAkad` date NOT NULL,
  `ksmTglWawancara` date NOT NULL,
  `ksmAlamat` varchar(50) NOT NULL,
  `ksmKpr` int(11) NOT NULL,
  `ksmNoAjb` int(11) NOT NULL,
  `ksmNoSertifikat` int(11) NOT NULL,
  `ksmTglOts` date NOT NULL,
  `ksmTglLpa` date NOT NULL,
  `ksmNoDebit` int(11) NOT NULL,
  `ksmPcn` int(11) NOT NULL,
  `ksmTglPcn` date NOT NULL,
  `ksmSimpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`ksmId`, `prmId`, `rmhId`, `bankId`, `ksmNama`, `ksmTelepon`, `ksmNoLpa`, `ksmNosp3k`, `ksmTglAkad`, `ksmTglWawancara`, `ksmAlamat`, `ksmKpr`, `ksmNoAjb`, `ksmNoSertifikat`, `ksmTglOts`, `ksmTglLpa`, `ksmNoDebit`, `ksmPcn`, `ksmTglPcn`, `ksmSimpanan`) VALUES
('sdaf', 'mn890', 'rumah11', 'bank12', 'sdfkk', 129338480, 7789798, 90909, '2017-06-08', '2017-06-20', 'sdaff', 9000, 908786, 675238, '2017-06-13', '2017-06-12', 98239, 124908, '2017-06-14', 321498);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `loginId` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `loginName` varchar(20) NOT NULL,
  `loginPassword` varchar(20) NOT NULL,
  `level` enum('Admin','Direk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`loginId`, `nama`, `loginName`, `loginPassword`, `level`) VALUES
('usr1', 'Afdhal', 'admin', 'admin', 'Admin'),
('usr2', 'hidayah', 'direk', 'direk', 'Direk'),
('usr3', 'rustam', 'admin', 'rustam', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perumahan`
--

CREATE TABLE IF NOT EXISTS `perumahan` (
  `prmId` varchar(15) NOT NULL,
  `prmNama` varchar(50) NOT NULL,
  `prmAlamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perumahan`
--

INSERT INTO `perumahan` (`prmId`, `prmNama`, `prmAlamat`) VALUES
('mn890', 'mirama', 'jl.fajar'),
('perumnas11', 'Villa Selecta', 'Rimbo Panjang'),
('perumnas13', 'Athaya2', 'Garuda Sakti');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE IF NOT EXISTS `pilihan` (
  `pilihanId` varchar(15) NOT NULL,
  `pilihanNama` enum('tahap1','tahap2','tahap3') NOT NULL,
  `pilihanJarak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`pilihanId`, `pilihanNama`, `pilihanJarak`) VALUES
('7899', 'tahap2', 23),
('pilihan11', 'tahap2', 250),
('pilihan12', 'tahap1', 500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah`
--

CREATE TABLE IF NOT EXISTS `rumah` (
  `rmhId` varchar(15) NOT NULL,
  `pilihanId` varchar(15) NOT NULL,
  `rmhLuas` int(11) NOT NULL,
  `rmhBlok` varchar(10) NOT NULL,
  `rmhType` int(11) NOT NULL,
  `tkgId` varchar(15) NOT NULL,
  `sumurId` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rumah`
--

INSERT INTO `rumah` (`rmhId`, `pilihanId`, `rmhLuas`, `rmhBlok`, `rmhType`, `tkgId`, `sumurId`) VALUES
('rumah11', 'pilihan12', 500, 'F/61', 36, 'tukang13', 'sumu11'),
('safsdf', 'pilihan12', 3434, 'sdfsdf', 34, 'tukang13', 'sumur12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sumur`
--

CREATE TABLE IF NOT EXISTS `sumur` (
  `sumurId` varchar(15) NOT NULL,
  `sumurNama` varchar(50) NOT NULL,
  `sumurTelepon` bigint(20) NOT NULL,
  `sumurAlamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sumur`
--

INSERT INTO `sumur` (`sumurId`, `sumurNama`, `sumurTelepon`, `sumurAlamat`) VALUES
('sumu11', 'Siamay', 87671684976, 'Dahlan'),
('sumur12', 'Ujang', 89875174479, 'Kuansing'),
('sumur13', 'Siudin', 918477413817, 'Buluh Cina');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tukang`
--

CREATE TABLE IF NOT EXISTS `tukang` (
  `tkgId` varchar(15) NOT NULL,
  `tkgNama` varchar(50) NOT NULL,
  `tkgTelepon` bigint(20) NOT NULL,
  `tkgAlamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tukang`
--

INSERT INTO `tukang` (`tkgId`, `tkgNama`, `tkgTelepon`, `tkgAlamat`) VALUES
('12hi', 'neli', 812617268, 'perum.mirama'),
('tukang11', 'Martijon', 82345661445, 'Kualu'),
('tukang12', 'Panjul', 813414412712, 'Danau'),
('tukang13', 'Painan', 82345572918, 'Rimbo Panjang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
 ADD PRIMARY KEY (`bankId`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
 ADD PRIMARY KEY (`ksmId`), ADD KEY `prmId` (`prmId`), ADD KEY `bankId` (`bankId`), ADD KEY `rmhId` (`rmhId`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`loginId`);

--
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
 ADD PRIMARY KEY (`prmId`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
 ADD PRIMARY KEY (`pilihanId`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
 ADD PRIMARY KEY (`rmhId`), ADD KEY `pilihanId` (`pilihanId`), ADD KEY `tkgId` (`tkgId`), ADD KEY `sumurId` (`sumurId`);

--
-- Indexes for table `sumur`
--
ALTER TABLE `sumur`
 ADD PRIMARY KEY (`sumurId`);

--
-- Indexes for table `tukang`
--
ALTER TABLE `tukang`
 ADD PRIMARY KEY (`tkgId`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
ADD CONSTRAINT `konsumen_ibfk_1` FOREIGN KEY (`bankId`) REFERENCES `bank` (`bankId`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `konsumen_ibfk_3` FOREIGN KEY (`rmhId`) REFERENCES `rumah` (`rmhId`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `konsumen_ibfk_4` FOREIGN KEY (`prmId`) REFERENCES `perumahan` (`prmId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rumah`
--
ALTER TABLE `rumah`
ADD CONSTRAINT `rumah_ibfk_2` FOREIGN KEY (`tkgId`) REFERENCES `tukang` (`tkgId`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rumah_ibfk_4` FOREIGN KEY (`pilihanId`) REFERENCES `pilihan` (`pilihanId`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rumah_ibfk_5` FOREIGN KEY (`sumurId`) REFERENCES `sumur` (`sumurId`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
