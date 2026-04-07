  -- phpMyAdmin SQL Dump
  -- version 5.2.1
  -- Generation Time: Mar 01, 2026
  -- Server version: 10.4.32-MariaDB

  SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
  START TRANSACTION;
  SET time_zone = "+00:00";

  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;

  --
  -- Database: `votera2526`
  --

  -- --------------------------------------------------------

  --
  -- Struktur jadual `kategori`
  --

  CREATE TABLE `kategori` (
    `id_rekod_kategori` int(11) NOT NULL,
    `Id_Kategori` varchar(10) DEFAULT NULL,
    `Kategori` varchar(100) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  --
  -- Data untuk jadual `kategori`
  --

  INSERT INTO `kategori` (`id_rekod_kategori`, `Id_Kategori`, `Kategori`) VALUES
  (1, 'KS', 'Kelas \"Sporting\"'),
  (2, 'KC', 'Kelas Ceria'),
  (3, 'KC', 'Kelas Ceria'),
  (4, 'KI', 'Kelas Islamik'),
  (5, 'KB', 'Kelas Bersih'),
  (6, 'KS', 'Kelas \"Sporting\"'),
  (7, 'KC', 'Kelas Ceria');

  -- --------------------------------------------------------

  --
  -- Struktur jadual `kelas`
  --

  CREATE TABLE `kelas` (
    `Id_Kelas` varchar(10) NOT NULL,
    `Kelas` varchar(50) DEFAULT NULL,
    `tot_undi_kelas` int(11) DEFAULT 0,
    `Undi_Kelas` varchar(50) DEFAULT NULL,
    `Gambar_Kelas` varchar(100) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  --
  -- Data untuk jadual `kelas`
  --

  INSERT INTO `kelas` (`Id_Kelas`, `Kelas`, `tot_undi_kelas`, `Undi_Kelas`, `Gambar_Kelas`) VALUES
  ('T5a', '5 Alpha', 0, 'Beta', '5a.png'),
  ('T5b', '5 Beta', 0, 'Alpha', '5b.png'),
  ('T5o', '5 Omega', 0, 'Theta', '5o.png'),
  ('T5s', '5 Sigma', 0, 'Beta', '5s.png'),
  ('T5t', '5 Theta', 0, 'Sigma', '5t.png');

  -- --------------------------------------------------------

  --
  -- Struktur jadual `pelajar`
  --

  CREATE TABLE `pelajar` (
    `Id_Pelajar` varchar(20) NOT NULL,
    `Kata_Laluan` varchar(50) DEFAULT NULL,
    `Nama_Pelajar` varchar(150) DEFAULT NULL,
    `Status_Pelajar` varchar(30) DEFAULT NULL,
    `Gambar_Pelajar` varchar(100) DEFAULT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

  --
  -- Data untuk jadual `pelajar`
  --

  INSERT INTO `pelajar` (`Id_Pelajar`, `Kata_Laluan`, `Nama_Pelajar`, `Status_Pelajar`, `Gambar_Pelajar`) VALUES
  ('mz001', 'mozac@johan', 'Hadif Johan', 'Murid', 'johan.png'),
  ('mz002', 'mozac@iman', 'Iman Nur Hafiz', 'Murid', 'iman.png'),
  ('mz003', 'mozac@azrul', 'Azrul Helmi', 'Murid', 'azrul.png'),
  ('mz007', 'mozac@dzakierin', 'Dzakierin Rayyan', 'Murid', 'dzakierin.png'),
  ('mz009', 'mozac@adwan', 'Adwan Aliff Irfan', 'Murid', 'adwan.png'),
  ('mz010', 'mozac@akif', 'Muhammad Akif Mukri', 'Murid', 'akif.png'),
  ('mzadmin', 'mozac@admin', 'Admin101', 'Admin', 'admin.png');

  --
  -- Index untuk jadual
  --

  ALTER TABLE `kategori`
    ADD PRIMARY KEY (`id_rekod_kategori`);

  ALTER TABLE `kelas`
    ADD PRIMARY KEY (`Id_Kelas`);

  ALTER TABLE `pelajar`
    ADD PRIMARY KEY (`Id_Pelajar`);

  --
  -- AUTO_INCREMENT
  --

  ALTER TABLE `kategori`
    MODIFY `id_rekod_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;