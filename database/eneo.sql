-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2024 at 07:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eneo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(11) NOT NULL,
  `nomAdmin` varchar(255) NOT NULL,
  `emailAdmin` varchar(255) NOT NULL,
  `passwordAdmin` varchar(255) NOT NULL,
  `DateAjoutAdmin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IdAdmin`, `nomAdmin`, `emailAdmin`, `passwordAdmin`, `DateAjoutAdmin`) VALUES
(1, 'Elie Makoda Kowo ', 'eliemakodakowo@gmail.com', '$2y$10$61rroWwrQDeUBhyb79Dpj.cIgJBbQFfpYjG8sR/6NQ7Z2ooPuOipG', '2024-07-28 03:31:07'),
(2, 'Henoc Syadje', 'shenoc@gmail.com', '$2y$10$V53DeCwsv7fJ2IIWM.wDGOfrV4iSm40t.tMIMK1kPrfH/qKhAFF2W', '2024-07-28 11:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `idBlog` int(11) NOT NULL,
  `tittreblog` varchar(255) NOT NULL,
  `descriptionBlog` text NOT NULL,
  `imagesBlog` varchar(255) NOT NULL,
  `DateAjoutBlog` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`idBlog`, `tittreblog`, `descriptionBlog`, `imagesBlog`, `DateAjoutBlog`) VALUES
(2, 'Election du chef des Stagiaires', 'L\'élève Siyadje Henoc dépose sa candidature pour le poste de président des Etudiants', 'WhatsApp_Image_2024-07-25_at_15.05.05-removebg-preview.png', '2024-07-28 10:22:52'),
(3, 'Fotso Henoc promet de ne plus pisser au lit', 'c\'est avec grandes amertumes que les élèves de DIPITO ont constater des urines sur la tenue de classe. pris de larmes il avoua la vérité', 'team-2.jpg', '2024-07-28 10:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `demandesstage`
--

CREATE TABLE `demandesstage` (
  `idDemande` int(11) NOT NULL,
  `iduserDemande` int(11) NOT NULL,
  `idstageDemande` int(11) NOT NULL,
  `cvDemande` varchar(255) NOT NULL,
  `StatutDemande` int(11) NOT NULL DEFAULT 0,
  `LettreMotivation` varchar(255) DEFAULT NULL,
  `DateajoutDemande` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demandesstage`
--

INSERT INTO `demandesstage` (`idDemande`, `iduserDemande`, `idstageDemande`, `cvDemande`, `StatutDemande`, `LettreMotivation`, `DateajoutDemande`) VALUES
(1, 1, 1, 'QUITUS DÉPÔT PROJET DE FIN DE CYCLE KEYCE.pdf', 2, NULL, '2024-07-28 08:46:24'),
(2, 1, 1, 'jun-doc.pdf', 2, 'Admission en Stage.pdf', '2024-07-29 06:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `idStage` int(11) NOT NULL,
  `TitrePoste` varchar(255) NOT NULL,
  `LieuStage` varchar(255) NOT NULL,
  `Statut` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `competencesReq` varchar(255) NOT NULL,
  `competenceAnnex` varchar(255) NOT NULL,
  `DateAjoutStage` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`idStage`, `TitrePoste`, `LieuStage`, `Statut`, `Description`, `competencesReq`, `competenceAnnex`, `DateAjoutStage`) VALUES
(1, 'Data analyst', 'Douala, Cameroun', 'Professionel', 'Dans le souci d\'explorer ses données tant collectés auprès de ses utilisateurs, Eneo cameroun recherche un data analyst pouvant interpreter ces données en utilisant toutes les techniques d\'analyse et logiciels prévus à cet effet!', '#élaboration de stratégie marketing \r\n#mise en place de tableau de bord dynamique \r\n#interprétation de grandes quantités de données', '#webScrapping #tableau #python #sql #powerBI #excel', '2024-07-28 04:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nomUser` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `passwordUser` varchar(255) NOT NULL,
  `dateAjoutUser` datetime NOT NULL DEFAULT current_timestamp(),
  `TelephoneUser` varchar(255) NOT NULL,
  `PiecesJointes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nomUser`, `emailUser`, `passwordUser`, `dateAjoutUser`, `TelephoneUser`, `PiecesJointes`) VALUES
(1, 'Elie Makoda Kowo', 'eliemakodakowo@gmail.com', '$2y$10$q4V6tDeCxTxZlgwPbn5Da.LmJsJ0miac8IDjA3kL3DAu4BiZwppIe', '2024-07-28 03:53:38', '674349356', ''),
(3, 'emako tech', 'emakotech@gmail.com', '$2y$10$u6c8cCcuQ0wkl8G781lwIO0PPUH3OIQ1aT4Rym8O13XRS.gAZTdPS', '2024-07-29 06:25:42', '984545545649', 'Admission en Stage.pdf,jun-doc.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idBlog`);

--
-- Indexes for table `demandesstage`
--
ALTER TABLE `demandesstage`
  ADD PRIMARY KEY (`idDemande`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`idStage`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `idBlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `demandesstage`
--
ALTER TABLE `demandesstage`
  MODIFY `idDemande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `idStage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
