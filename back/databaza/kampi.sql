-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 11:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampi`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupet`
--

CREATE TABLE `grupet` (
  `id_grupi` int(11) NOT NULL,
  `emer_grupi` varchar(100) NOT NULL,
  `pershkrimi` varchar(700) NOT NULL,
  `orari` varchar(100) NOT NULL,
  `foto_grupi` varchar(200) NOT NULL,
  `cmimi` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grupet`
--

INSERT INTO `grupet` (`id_grupi`, `emer_grupi`, `pershkrimi`, `orari`, `foto_grupi`, `cmimi`) VALUES
(1, 'Piktura', 'Kërcimi ka qënë gjithmonë endrra jote në sirtar? Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar nga balerinët më në zë të kohës, jo vetëm do kënaqemi e do argëtohemi, por do zbulojmë sëbashku gjithë kulturat kërcimore në bote. Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar nga balerinët më në zë të kohës, jo vetëm do kënaqemi e do argëtohemi, por do zbulojmë sëbashku gjithë kulturat kërcimore në bote. Ka ardhur koha ta bësh realitet këtë ëndërr!', 'Të hënë ora 08:30-12:00', 'pikture.jpg', 80.00),
(2, 'Shkencë', 'Dashuria për shkencën dhe enigmat e saj vijnë sëbashku me një eksperiecë të paharrueshme! Në laboratoret tona, drejtuar nga më të mirët e fushes, do realiojme detyra praktikisht mbi temat më tipike te biologjisë. Që prej ligjeve në fletë të shkruar të fizikës deri në implementimin e strukturavedhe elementeve të ndryshëm, që kërkojne specifika më te avancuara. Asgjë sdo të jetë problem për ju. Për më tepër do të jeni gati për të rifilluar shkollën dhe studimet shkencore. Grupi i informaticienëve është ndër grupet më dinamike të faqes. Do te zhvilloje detyrat në laboratore.', 'Të martë ora 9:00-13:00', 'shkence.jpg', 75.00),
(4, 'Fashion Design', 'Kërcimi ka qënë gjithmonë endrra jote në sirtar? Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar nga balerinët më në zë të kohës, jo vetëm do kënaqemi e do argëtohemi, por do zbulojmë sëbashku gjithë kulturat kërcimore në bote. Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar nga balerinët më në zë të kohës, jo vetëm do kënaqemi e do argëtohemi, por do zbulojmë sëbashku gjithë kulturat kërcimore në bote. Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar ', 'Të hënë ora 9:00-12:00, Të martë ora 8:00-12:00 ', 'design.jpg', 90.00),
(5, 'Kënga', 'Për të gjithë adhuruesit e muzikës do të hapet grupi i harmonisë melodike. Instrumentat muzikore: kitara akustike, kitara elektrike, piano, violinë dhe shumë të tjera do tu shtohen tashmë listës suaj të instrumentave. Gjithashtu  do të keni mundësinë të punoni për aftësitë në këndim. Në fund të këtij rrugëtimi, një mundësi e artë mbase ju pret. Për të gjithë adhuruesit e muzikës do të hapet grupi i harmonisë melodike.\r\n', 'Të martë ora 9:00-13:00', 'kenge.jpg', 80.50),
(6, 'Kërcim', 'Kërcimi ka qënë gjithmonë endrra jote në sirtar? Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar nga balerinët më në zë të kohës, jo vetëm do kënaqemi e do argëtohemi, por do zbulojmë sëbashku gjithë kulturat kërcimore në bote. Ka ardhur koha ta bësh realitet këtë ëndërr! Me grupin tonë të kërcimit, drejtuar nga balerinët më në zë të kohës, jo vetëm do kënaqemi e do argëtohemi, por do zbulojmë sëbashku gjithë kulturat kërcimore në bote.', 'Të shtunë ora 9:00-13:00, Të martë ora 16:00-19:00', 'kercim.jpg', 100.00),
(7, 'Informaticienët e Rinj', 'Dashuria për teknologjinë dhe inovacionin vijnë sëbashku me një eksperiecë të paharrueshme! Në laboratoret tona, drejtuar nga më të mirët e fushës, do realiojme detyra praktikisht mbi temat më tipike te biologjisë. Që prej ligjeve në fletë të shkruar të fizikës deri në implementimin e strukturavedhe elementeve të ndryshëm, që kërkojne specifika më te avancuara. Asgjë sdo të jetë problem për ju. Për më tepër do të jeni gati për të rifilluar shkollën dhe studimet shkencore.\r\n\r\n', 'Të premte ora 9:00-13:00', 'informatike.jpg', 66.00),
(8, 'Klubi e debatit', 'Dashuria për shkencën dhe enigmat e saj vijnë sëbashku me një eksperiecë të paharrueshme! Në laboratoret tona, drejtuar nga më të mirët e fushes, do realiojme detyra praktikisht mbi temat më tipike te biologjisë. Që prej ligjeve në fletë të shkruar të fizikës deri në implementimin e strukturavedhe elementeve të ndryshëm, që kërkojne specifika më te avancuara. Asgjë sdo të jetë problem për ju. Për më tepër do të jeni gati për të rifilluar shkollën dhe studimet shkencore. Grupi i informaticienëve është ndër grupet më dinamike të faqes.\r\n\r\n', 'Të enjte ora 16:00-20:00, Të dielë ora 16:00-19:00', 'debate.jpg', 78.99);

-- --------------------------------------------------------

--
-- Table structure for table `komente`
--

CREATE TABLE `komente` (
  `id_komenti` int(11) NOT NULL,
  `id_posti` int(11) NOT NULL,
  `komenti` varchar(300) NOT NULL,
  `id_komentuesi` int(11) NOT NULL,
  `data_komenti` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komente`
--

INSERT INTO `komente` (`id_komenti`, `id_posti`, `komenti`, `id_komentuesi`, `data_komenti`) VALUES
(1, 15, 'Keto jane vetem provat e para.', 24, '2020-02-11 00:00:00'),
(2, 15, 'Jam une e interesuar. Ku mund te adresohem?', 24, '2020-02-21 00:00:42'),
(8, 24, 'Mars duhet ta fshish kete postim se le nam!!!!', 24, '2020-02-04 14:20:13'),
(9, 12, 'Do vij edhe une po me prisni', 23, '2020-02-04 14:21:13'),
(10, 4, 'po kam ca probleme qe duhen zgjidhur patjeter', 23, '2020-02-04 14:21:54'),
(11, 12, 'Nice one!', 25, '2020-02-04 14:22:13'),
(14, 12, 'hej po uneeee', 23, '2020-02-04 15:21:08'),
(15, 12, 'tani ska me', 23, '2020-02-04 15:21:29'),
(18, 4, 'po jam drejt rruges se duhur :)', 23, '2020-02-04 15:24:42'),
(19, 17, 'me bukur sbehet', 24, '2020-02-04 17:35:06'),
(21, 25, 'he sara e shef', 23, '2020-02-04 20:03:46'),
(22, 12, 'drfjiofj', 23, '2020-02-04 20:04:03'),
(23, 24, 'sdfs', 24, '2020-02-05 13:00:26'),
(24, 24, 'prape eshte ne rregull', 24, '2020-02-05 13:04:15'),
(27, 24, 'sdfhsnifh', 24, '2020-02-05 15:47:57'),
(33, 24, 'komenti im i fundit u shtua me sukses', 24, '2020-02-05 15:55:40'),
(35, 25, 'edhe une dua te postoj dicka', 33, '2020-02-08 09:41:03'),
(36, 29, 'po komentoj', 24, '2020-02-09 12:14:56'),
(37, 37, 'ne jemi ne te njejtin grup', 26, '2020-02-09 12:47:56'),
(38, 37, 'sa mire', 24, '2020-02-09 12:48:11');

-- --------------------------------------------------------

--
-- Table structure for table `perdorues`
--

CREATE TABLE `perdorues` (
  `id_perdorues` int(11) NOT NULL,
  `emri` varchar(25) NOT NULL,
  `mbiemri` varchar(25) NOT NULL,
  `datelindja` date NOT NULL,
  `gjinia` varchar(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `fjalekalimi` varchar(32) NOT NULL,
  `id_roli` int(11) NOT NULL,
  `fotoProfili` varchar(5) NOT NULL,
  `id_grupi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perdorues`
--

INSERT INTO `perdorues` (`id_perdorues`, `emri`, `mbiemri`, `datelindja`, `gjinia`, `email`, `username`, `fjalekalimi`, `id_roli`, `fotoProfili`, `id_grupi`) VALUES
(23, 'Bella', 'Thorne', '2019-07-12', 'f', 'bthorne02@gmail.com', 'bella_thorne', '68834fdcdff2a84a2844bd794aa9bcdf', 3, 'b.jpg', 1),
(24, 'Marsida', 'Ballkoci', '2019-03-20', 'f', 'marsiballkoci@gmail.com', 'marsida_ballkoci', '68834fdcdff2a84a2844bd794aa9bcdf', 2, 'm.jpg', 2),
(25, 'Ibro', 'Superman', '2019-05-07', 'm', 'iou@super.com', 'ibro_superman', 'db7ac2c7c45bea62cb6984c3dc77d5a5', 1, 'i.jpg', 1),
(26, 'Sara', 'Kika', '2020-02-19', 'f', 'sarak@fti.edu.al', 'sara_kika', '68834fdcdff2a84a2844bd794aa9bcdf', 3, 's.jpg', 2),
(28, 'Fabi', 'Ndoj', '2020-02-21', 'm', 'fndoj8@gmail.com', 'fabi_ndoj_1', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'f.jpg', 1),
(31, 'Arsia', 'Petite', '2020-02-07', 'f', 'iou@dfgd', 'arsia_petite', '9c9cd9eb6d385c1a83131a6f5ef6843b', 4, 'a.jpg', 7),
(33, 'Kela', 'Lushi', '2020-02-16', 'f', 'klushi12@gmail.com', 'kela_lushi', '7af69961c6edaed74d3b08e480b81823', 2, 'k.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `poste`
--

CREATE TABLE `poste` (
  `id_posti` int(11) NOT NULL,
  `id_grupi` int(11) NOT NULL,
  `id_postuesi` int(11) NOT NULL,
  `data_posti` datetime NOT NULL,
  `titulli` varchar(100) NOT NULL,
  `permbajtja` varchar(600) NOT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poste`
--

INSERT INTO `poste` (`id_posti`, `id_grupi`, `id_postuesi`, `data_posti`, `titulli`, `permbajtja`, `foto`) VALUES
(4, 1, 23, '2020-02-02 14:46:10', 'mars', 'he praaa', 'foto/uploaded/5e36e0b20db2fandroidBook.jpg'),
(9, 1, 25, '2020-02-02 15:05:48', 'Once upon a time', 'kjo do jete permbajtja temporare', ''),
(11, 1, 25, '2020-02-02 15:07:40', 'taken', '\"To be or not to be\"-this is the question!', ''),
(12, 1, 25, '2020-02-02 15:09:29', 'Allez-y!', 'me ne fund funksionoi', 'foto/uploaded/5e36e62910af6img1.png'),
(15, 2, 24, '2020-02-02 17:11:54', 'kot', 'sa mire ', 'foto/uploaded/5e36f4ca5a06foriginal.jpg'),
(17, 2, 24, '2020-02-02 17:57:02', 'po vazhdojme me provat', '\"teksti ketu do te jete pak delikat\". Do thoni perse?\r\nSepse po embush me karaktere te palejuara qe kane nevoje per modifikime speciale ne menyre qe te shfaqet teksi sic duhet ne faqen e profilit. :)', 'foto/uploaded/5e36ff5ea31bddonkey.jpg'),
(19, 2, 24, '2020-02-02 18:03:46', 'Njoftim me shume rendesi per diten e neserme!', 'Neser prane shkolles sone do te vijne punonjeset e Kryqit te Kuq per te gjithe ata qe kane deshire te ndihmojne vullnetarisht femijet talasemike per dhurim gjaku. Ju lutem, shperndajeni njoftimin edhe te miq jashte ketij grupi ne menyre qe te arrijme nje numer sa me te larte dhuruesish. Dhuroni gjak, shpetoni jete!', ''),
(20, 2, 24, '2020-02-02 18:10:26', 'Festa e Qershorit', 'Neser merrni me vete letra me ngjyra sepse do punojme ne klase per krijimin e zbukurimeve per festen e 1 Qershorit.', 'foto/uploaded/5e3702829b2151559331929_qershor.jpg'),
(24, 2, 24, '2020-02-03 13:20:08', 'prove ne seminar', 'djana po shikon ketu kurse fridi po ha gishtat', 'foto/uploaded/5e380ff824190original1.jpg'),
(25, 1, 23, '2020-02-04 20:03:30', 'Regarde-moi!', 'budallaqe', ''),
(27, 7, 31, '2020-02-08 15:12:13', 'Njoftim per daten 9 Shkurt!', 'Neser nuk do zhvillohet kursi per arsye objektive. ', 'foto/uploaded/5e3ec1bda378dWEWORK-SUMMER-CAMP-2017-7-WeWork-sign-ANDREWWHITTON-FANATIC.jpg'),
(29, 2, 24, '2020-02-09 11:54:50', 'postohet', 'apo ji', ''),
(30, 2, 24, '2020-02-09 12:20:15', 'jam mesuesja', 'po', ''),
(31, 2, 24, '2020-02-09 12:41:01', 'jam mesuesja', 'po', ''),
(37, 2, 24, '2020-02-09 12:46:37', 'prove', 'wierjwepokp', 'foto/uploaded/5e3ff11dc0fc2kamp5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roli`
--

CREATE TABLE `roli` (
  `id_roli` int(11) NOT NULL,
  `roli` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roli`
--

INSERT INTO `roli` (`id_roli`, `roli`) VALUES
(1, 'nxenes'),
(2, 'mesues'),
(3, 'mesuesPending'),
(4, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupet`
--
ALTER TABLE `grupet`
  ADD PRIMARY KEY (`id_grupi`);

--
-- Indexes for table `komente`
--
ALTER TABLE `komente`
  ADD PRIMARY KEY (`id_komenti`),
  ADD KEY `id_posti` (`id_posti`),
  ADD KEY `id_komentuesi` (`id_komentuesi`);

--
-- Indexes for table `perdorues`
--
ALTER TABLE `perdorues`
  ADD PRIMARY KEY (`id_perdorues`),
  ADD KEY `id_roli` (`id_roli`),
  ADD KEY `id_grupi` (`id_grupi`);

--
-- Indexes for table `poste`
--
ALTER TABLE `poste`
  ADD PRIMARY KEY (`id_posti`),
  ADD KEY `id_grupi` (`id_grupi`),
  ADD KEY `poste_ibfk_2` (`id_postuesi`);

--
-- Indexes for table `roli`
--
ALTER TABLE `roli`
  ADD PRIMARY KEY (`id_roli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupet`
--
ALTER TABLE `grupet`
  MODIFY `id_grupi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komente`
--
ALTER TABLE `komente`
  MODIFY `id_komenti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `perdorues`
--
ALTER TABLE `perdorues`
  MODIFY `id_perdorues` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `poste`
--
ALTER TABLE `poste`
  MODIFY `id_posti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `roli`
--
ALTER TABLE `roli`
  MODIFY `id_roli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komente`
--
ALTER TABLE `komente`
  ADD CONSTRAINT `komente_ibfk_1` FOREIGN KEY (`id_posti`) REFERENCES `poste` (`id_posti`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komente_ibfk_2` FOREIGN KEY (`id_komentuesi`) REFERENCES `perdorues` (`id_perdorues`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perdorues`
--
ALTER TABLE `perdorues`
  ADD CONSTRAINT `perdorues_ibfk_1` FOREIGN KEY (`id_roli`) REFERENCES `roli` (`id_roli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perdorues_ibfk_2` FOREIGN KEY (`id_grupi`) REFERENCES `grupet` (`id_grupi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `poste`
--
ALTER TABLE `poste`
  ADD CONSTRAINT `poste_ibfk_1` FOREIGN KEY (`id_grupi`) REFERENCES `grupet` (`id_grupi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `poste_ibfk_2` FOREIGN KEY (`id_postuesi`) REFERENCES `perdorues` (`id_perdorues`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
