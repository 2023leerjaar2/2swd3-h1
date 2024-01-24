-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 29 nov 2023 om 11:21
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamadoing`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `GebruikerID` int(11) NOT NULL,
  `Gebruikersnaam` varchar(50) NOT NULL,
  `Wachtwoord` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`GebruikerID`, `Gebruikersnaam`, `Wachtwoord`) VALUES
(15, 'Desmond De Groen', 'groente'),
(18, 'SS', 'Spek');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `receptboeken`
--

CREATE TABLE `receptboeken` (
  `BoekID` int(11) NOT NULL,
  `Titel` varchar(100) NOT NULL,
  `PublicatieDatum` date NOT NULL,
  `Auteurnaam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `recepten`
--

CREATE TABLE `recepten` (
  `Moeilijkheidsgraad` varchar(50) NOT NULL,
  `Vega` varchar(3) NOT NULL,
  `Bereidingstijd` text NOT NULL,
  `Ingrediënten` text NOT NULL,
  `Soort_gerecht` varchar(100) NOT NULL,
  `Beschrijving` text NOT NULL,
  `Foto` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `recepten`
--

INSERT INTO `recepten` (`Moeilijkheidsgraad`, `Vega`, `Bereidingstijd`, `Ingrediënten`, `Soort_gerecht`, `Beschrijving`, `Foto`) VALUES
('', '', '00:00:00', '', '', '', 0x75706c6f6164732f),
('', '', '00:00:00', '', '', '', 0x75706c6f6164732f),
('', '', '00:00:00', '', '', '', 0x75706c6f6164732f);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`GebruikerID`);

--
-- Indexen voor tabel `receptboeken`
--
ALTER TABLE `receptboeken`
  ADD PRIMARY KEY (`BoekID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `GebruikerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT voor een tabel `receptboeken`
--
ALTER TABLE `receptboeken`
  MODIFY `BoekID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
