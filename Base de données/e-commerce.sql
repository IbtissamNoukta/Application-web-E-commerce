-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 14, 2020 at 07:38 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `ID_CAT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_CAT` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CAT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`ID_CAT`, `NOM_CAT`) VALUES
('0001', 'chaises'),
('0002', 'Lits '),
('0003', 'Accessoires'),
('0004', 'Meubles'),
('0005', 'Tableaux '),
('0006', 'tables');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID_CLIENT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_Cli` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRENOM` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADRESSE` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TELE` int(11) DEFAULT NULL,
  `VILLE` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CODE_POSTAL` int(11) DEFAULT NULL,
  `PAYS` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CMT` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_CLIENT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID_CLIENT`, `NOM_Cli`, `PRENOM`, `Email`, `ADRESSE`, `TELE`, `VILLE`, `CODE_POSTAL`, `PAYS`, `CMT`) VALUES
('0001', 'Ibtissam', 'noukta', 'amd.noukta@gmail.com', 'rue 12', 606060606, 'Safi', 6564, 'Morocco', 'fkbkdfjgnkfjgn');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `ID_COM` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CLIENT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TOTAL` float DEFAULT NULL,
  `PAIEMENT` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATE_COM` date DEFAULT NULL,
  PRIMARY KEY (`ID_COM`),
  KEY `FK_PASSER` (`ID_CLIENT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`ID_COM`, `ID_CLIENT`, `TOTAL`, `PAIEMENT`, `DATE_COM`) VALUES
('0001', '', 141.92, 'Cash on Delivery', '2020-01-02'),
('0002', '', 141.92, 'Paypal', '2020-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `constituer`
--

DROP TABLE IF EXISTS `constituer`;
CREATE TABLE IF NOT EXISTS `constituer` (
  `ID_COM` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_PRODUIT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QTE` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_COM`,`ID_PRODUIT`),
  KEY `FK_CONSTITUER` (`ID_PRODUIT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `constituer`
--

INSERT INTO `constituer` (`ID_COM`, `ID_PRODUIT`, `QTE`) VALUES
('0005', '0007', 1),
('0004', '0002', 3),
('0001', '0001', 1),
('0002', '0001', 3),
('0003', '0001 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `ID_MARQ` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_MARQ` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MARQ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`ID_MARQ`, `NOM_MARQ`) VALUES
('0001', 'Kitea'),
('0002', 'Ikea'),
('0003', 'Pretty Home'),
('0004', 'Flash Furniture'),
('0005', 'Ashler Home Deco');

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `ID_PRODUIT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CAT` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_MARQ` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NOM_PR` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `QUANT` int(11) DEFAULT NULL,
  `DATE_P` date DEFAULT NULL,
  `PRIX` float DEFAULT NULL,
  `COLOR` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DESCRIPTION` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NB_IMG` int(11) DEFAULT NULL,
  `POPULAIRE` int(11) DEFAULT NULL,
  `Mot_Cle` json NOT NULL,
  PRIMARY KEY (`ID_PRODUIT`),
  KEY `FK_CORRESPONDRE` (`ID_CAT`),
  KEY `FK_FOURNIR` (`ID_MARQ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`ID_PRODUIT`, `ID_CAT`, `ID_MARQ`, `NOM_PR`, `QUANT`, `DATE_P`, `PRIX`, `COLOR`, `DESCRIPTION`, `NB_IMG`, `POPULAIRE`, `Mot_Cle`) VALUES
('0001', '0003', '0003', 'Plante de bureau à décor d\'ananas', 0, '2019-10-01', 13.99, 'rose', 'Pot en porcelaine + herbe PE, pot en forme d\'ananas\r\nDesign simple, adapté aux scènes, salons, chambres, bureaux, hôtel, salles à manger, magasins, club privé et tout autre endroit que vous souhaitez décorer\r\nCette herbe ne mourra jamais et s\'en occupe facilement. pour que ce soit une belle décoration pour longtemps.\r\nTAILLE: Hauteur totale 7,8 \", largeur 4\", hauteur du pot en porcelaine 3,5 \"', 2, 0, '[\"plante\", \"decore\", \"ananas\", \"rose\", \"accessoire\", \"pretty home\"]'),
('0002', '0003', '0005', 'Ashler Faux Fur blanc', 6, '2019-11-10', 23.99, 'blanc', 'Fabriqué avec de la fausse fourrure mongole de haute qualité qui offre le meilleur toucher et la meilleure sensation.\r\nEnviron 2 pi x 3 pi; la taille parfaite pour le tapis de la maison\r\nTapis en fausse fourrure utilisé pour le coussin de siège de chaise ou le décor de salon de chambre à coucher.\r\nNettoyer avec un chiffon humide, sécher à plat.\r\nFourrure super douce, avec fond en cuir', 4, 0, '[\"fur\", \"tapis\", \"blanc\", \"ashler\", \"accessoire\", \"ashler home deco\"]'),
('0003', '0006', '0004', 'Petite table pliante de bureau d\'ordinateur', 3, '2019-09-09', 79, 'noire', 'Petit bureau: L31 1/2 \"* W15 3/4\" * H29 1/4 \". Sa conception petite et compacte s\'adapte là où vous en avez besoin, et offre toujours suffisamment d\'espace de table pour écrire, lire ou travailler sur votre ordinateur. C\'est un complément parfait aux bureaux à domicile, aux appartements et aux dortoirs des collèges.', 3, 0, '[\"flash fourniture\", \"table\", \"noire\", \"ashler\", \"petite\"]'),
('0004', '0001', '0002', 'Chaise de salle à manger de style moderne', 5, '2019-12-17', 66, 'gris\r\n', 'Conception: La conception ergonomique de la hauteur parfaite et du siège incurvé soutient bien le dos de l\'utilisateur en position assise et mène à des conversations faciles.\r\nUne étape pour terminer l\'assemblage: avec les pieds assemblés, ne les visser que dans le siège pour terminer l\'installation complète.\r\nIdéal pour la maison et le bureau - salons, salles à manger, chambres, hall, réception, salles d\'attente et banquets\r\nLimite de poids: 275 livres; Dimension du siège: 18,1 \"x 16,7\" （P x L), hauteur du siège: 18,1 \", dimension globale: 18,1\" x 16,9 \"x 34,6\" (P x L x H)', 2, 1, '[\"chaise\", \"gris\", \"ikea\", \"salle a manger\"]'),
('0005', '0005', '0001', '3 pièces Art mural', 0, '2019-12-16', 100, 'orange', 'Toile imprimée de haute qualité étirée et agrafée à des cadres résistants au rétrécissement durables.\r\nBarres de civière de 1,50 po d\'épaisseur pour un profil de qualité galerie.\r\nLes toiles sont imprimées et étirées à la main aux USA par des professionnels.', 2, 0, '[\"art\", \"art mural\", \"tableau\", \"orange\", \"accessoire\", \"kitea\"]'),
('0006', '0002', '0004', 'Lit avec tête et pied incurvés', 7, '2019-09-20', 202.99, 'marron', 'HAUTE QUALITÉ - Le cadre en métal, les lattes de bois et le lin offrent une plus grande capacité de poids, tout simplement parfait pour les besoins de la famille\r\nCONSTRUCTION FORTE - Construction robuste en bois et structure métallique, les pieds de lit en métal améliorés sont plus stables et durables\r\nDESIGN UNIQUE - Belle garniture clouée pour les chambres modernes et traditionnelles, le lit plateforme rembourré ajoute calme et simplicité à votre chambre', 3, 0, '[\"lit\", \"marron\", \"flash fourniture\"]'),
('0007', '0004', '0001', 'fauteuil jaune', 3, '2019-11-03', 989, 'jaune', 'Pièce d\'appoint moderne et élégante en tapisserie d\'ameublement en lin avec détails passepoil, dossier capitonné nervuré et pieds en bois inclinés.\r\nConception emblématique sans bras avec un grand soutien arrière pour s\'asseoir confortablement.\r\nExpédié dans une boîte et se monte en quelques minutes en deux étapes faciles.', 2, 1, '[\"fauteuil\", \"jaune\", \"meubles\", \"kitea\"]'),
('0008', '0005', '0005', 'Le vieux guitariste de Pablo Picasso - décoration murale en toile', 1, '2020-01-01', 39.99, 'bleu', 'Toile imprimée de haute qualité étirée et agrafée à des cadres résistants au rétrécissement durables.\r\nOeuvre d\'impression moderne sur toile jet d\'encre haute définition, un cadeau parfait pour vos parents et amis pour l\'anniversaire, le jour du mariage, l\'anniversaire, le festival, etc.\r\nUne peinture murale parfaite pour les décorations de salon, chambre à coucher, cuisine, bureau, hôtel, salle à manger, salle de bain, bar, etc.\r\nÉtiré et encadré, prêt à accrocher pour la décoration intérieure.\r\nS\'IL VOUS PLAÎT NOTE: en raison de problèmes d\'affichage du moniteur, les couleurs de l\'art mural en toile réelle peuvent être légèrement différentes des images.', 2, 0, '[\"bleu\", \"tableau\", \"toile\", \"decore murale\", \"accessoire\", \"ashler home deco\"]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
