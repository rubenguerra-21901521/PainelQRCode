-- --------------------------------------------------------
-- Anfitrião:                    192.168.1.122
-- Versão do servidor:           5.6.49-log - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table painel_rubengue.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `morada` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `codpostal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table painel_rubengue.clientes: ~63 rows (approximately)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id`, `name`, `morada`, `codpostal`, `local`, `created_at`, `updated_at`) VALUES
	(1, 'EXIDE TECHNOLOGIES,GMBH', 'SEEWEG 12-16', '63654 BUDINGEN', 'GERMANY', '2019-12-23 21:53:47', '2019-12-26 16:08:13'),
	(2, 'EXIDE TECHNOLOGIES SAS', '180 RUE DU FAUBOURG D´ARRAS', 'F-59000 LILLE', 'FRANCE', '2019-12-26 16:09:59', '2019-12-26 16:09:59'),
	(3, 'EXIDE TECHNOLOGIES AB', 'LAYOUTVAGEN 2', '43533 MOLNLYCKE', 'SWEDEN', '2019-12-26 16:10:02', '2019-12-26 16:10:56'),
	(4, 'MOMMER METAIL GMBH', 'HAMICHER WEG 18-22', '52224 STOLBERG', 'GERMANY', '2019-12-26 16:11:47', '2019-12-26 16:11:47'),
	(5, 'EXIDE TECHNOLOGIES S.R.L', 'GIBER - VIA MARCONI, 117', '24058 ROMANO DI LOMBARDIA', 'ITALY', '2019-12-26 16:35:11', '2019-12-26 16:35:11'),
	(6, 'STARK POWER', 'GEWERBEPARK BIRKENHAIN 21', '63579 FREIGERICHT BERNBACH', 'GERMANY', '2019-12-26 19:26:37', '2019-12-26 19:26:37'),
	(7, 'STIB-MIVB - MAGAZIJN 5G', 'RUISBROEKSESTEENWEG 52-74', '1180      BRUSSEL', 'BELGIUM', '2019-12-26 19:55:38', '2019-12-26 19:55:38'),
	(8, 'CW MECHELEN', 'BAUTERSEMSTRAAT 61', '2800      MECHELEN', 'BELGIUM', '2019-12-26 19:56:39', '2019-12-26 19:56:39'),
	(9, 'AEG POWER SOLUTIONS B.V.', 'VENENWEG 68', '1161 AK   ZWANENBURG', 'HOLLAND', '2019-12-26 19:58:36', '2019-12-26 19:58:36'),
	(10, 'UTT PROCUREMENT B.V.', 'KERKWEG 47D "HARREGAT"', '3214 VC   ZUIDLAND', 'HOLLAND', '2019-12-26 19:59:40', '2019-12-26 19:59:40'),
	(11, 'EXIDE TECHNOLOGIES S.L.U', 'LA CARTUJA BAJA', '50720 50720 ZARAGOZA', 'SPAIN', '2019-12-27 17:45:48', '2019-12-27 17:45:48'),
	(12, 'S.T.C. SERVIZIO TRASPORTI COMBNATI S.P.A', 'VIA ROLLA 29 C', '16152     GENES', 'ITALY', '2020-01-03 19:24:09', '2020-01-03 19:24:09'),
	(13, 'STIB-MIVB - LOKAAL MAGAZIJN 5F', 'HOUTWEG 99', '1130 HAREN (BRUSSEL)', 'BELGIUM', '2020-01-21 19:29:16', '2020-01-21 19:37:38'),
	(14, 'STIB - MIVB -  LOKAAL MAGAZIJN 5B', 'EDINGENSTRAAT 26', '1080 BRUSSEL', 'BELGIUM', '2020-01-21 19:32:10', '2020-01-21 19:37:13'),
	(15, 'STIB - MIVB - LOKAAL MAGAZIJN 5E', 'KUREGEMSTRAAT 56', '1000 BRUSSEL', 'BELGIUM', '2020-01-21 19:35:48', '2020-01-21 19:36:53'),
	(16, 'STIB - MIVB - LOKAAL MAGAZIJN 5A', 'KONINGSLAAN 19-21', '1060 SAINT-GILLIS', 'BELGIUM', '2020-01-21 20:25:01', '2020-01-21 20:25:01'),
	(17, 'STIB - MIVB - LOKAAL MAGAZIJN 5D', 'RENBAANLAAN 170', '1050 ELSENE', 'BELGIUM', '2020-01-21 20:26:26', '2020-01-21 20:26:26'),
	(18, 'STIB - MIVB - LOKAAL MAGZIJN 5Z', 'TERVURENLAAN 364', '1150 SAINT-PIETERS WOLUWE', 'BELGIUM', '2020-01-21 20:27:24', '2020-01-21 20:27:24'),
	(19, 'STIB - MIVB - LOKAAL MAGAZIJN 5C', 'HAACHTSESTEENWEG 327', '1030  SCHAARBEEK', 'BELGIUM', '2020-01-21 20:31:35', '2020-01-21 20:31:35'),
	(20, 'DE HOEVE MULTIPOWER', 'PROF.EYKMANWEG 27', '5144 ND WAALWIJK', 'HOLLAND', '2020-01-23 16:50:09', '2020-01-23 16:50:09'),
	(22, 'EUROCONTROL MAASTRICHT UAC', 'HORSTERWEG 11', '6199 AC MAASTRCHT-AIRPORT', 'HOLLAND', '2020-01-23 16:51:27', '2020-01-23 16:51:27'),
	(23, 'HEYNEN BV - SJAAK WIJNAKKER', 'DE GROOTE HEEZE 11', '6598 AV HEYNEN', 'HOLLAND', '2020-01-23 16:52:53', '2020-01-23 16:52:53'),
	(24, 'SHELL NEDERLAND RAFFINADERIJ', 'VONDELINGENWEG 601', '3196 KK HOOGVLIET', 'HOLLAND', '2020-01-23 16:54:28', '2020-01-23 16:54:28'),
	(25, 'EXIDE TECHNOLOGIES, SAS', '15-17 RUE PAUL LANGEVIN', '95220 HERBLAY', 'FRANCE', '2020-01-23 16:55:09', '2020-01-23 16:55:09'),
	(26, 'EXIDE TECHNOLOGIES IND.BUSINESS UNIT', 'UL.GDYNSKA, 31/33  PO 135', '61-016 POZNAN', 'POLONIA', '2020-01-23 16:56:20', '2020-01-23 16:56:20'),
	(27, 'B & A SERVICES', 'VLEUGELBOOT 30', '3991 CL HOUTEN', 'HOLLAND', '2020-01-24 15:54:20', '2020-01-24 15:54:20'),
	(28, 'STANLEY SECURITY SOLUTIONS NL', 'SCHOOTENSE 24', '5708 HZ HELMOND', 'HOLLAND', '2020-01-24 17:54:52', '2020-01-24 17:54:52'),
	(29, 'CBL LOGISTICA', 'C/ENEBRO S/N -POL.IND.SENDILLA', '28350 CIEMPOZUELOS', 'SPAIN', '2020-01-24 17:56:49', '2020-01-24 17:56:49'),
	(30, 'CAT LC POLSKA SP.Z.O.O.', 'OZAROWSKA 40/42 STR.I', '05-850 DUCHNICE', 'POLAND', '2020-01-24 18:44:26', '2020-01-24 18:44:26'),
	(31, 'ELECTROMACH B.V.', 'JAN TINBERGENSTRAAT 193', '7559 SP HENGELO / OV.', 'HOLLAND', '2020-01-31 10:19:38', '2020-01-31 10:19:38'),
	(32, 'ETC TRADING CORPORATION KG', 'KURT FISCHER STR.34', '22926 AHRESBURG', 'GERMANY', '2020-01-31 10:21:38', '2020-01-31 10:21:38'),
	(33, 'RIVION B.V', 'POMPMOLENLAAN 14', '3447 GK WOERDEN', 'HOLLAND', '2020-01-31 10:22:28', '2020-01-31 10:22:28'),
	(34, 'ELEKTRO WROBEL', 'Z.VERF.EXIDE TECHNOLOGIES DOLOMISTR.10/INDUSTRIEGEBIET INGO DOERGE 05524/82-205', '37431 BAD LAUTERBERG', 'GERMANY', '2020-01-31 10:24:10', '2020-01-31 10:24:10'),
	(35, 'SALICRU', 'AV. DE LA SERRA 100', '08460 STA.M.PALAUTORDERA', 'SPAIN', '2020-02-05 15:50:35', '2020-02-05 15:50:35'),
	(36, 'EXIDE TECHNOLOGIES OY', 'TAKKATIE 21', '00370 HELSINKI', 'FINLAND', '2020-02-06 12:48:46', '2020-02-06 12:48:46'),
	(37, 'TRIATHLON SYSTEM GMBH', 'NIEDERLASSUNG GERA', '07548  GERA', 'GERMANY', '2020-02-06 12:59:07', '2020-02-06 12:59:07'),
	(39, 'GLOBAL TRANSIT', '38 BOULEVARD DU CAPITAINE GEZE', '13014 MARSEILLE', 'FRANCE', '2020-02-06 13:00:49', '2020-02-06 13:00:49'),
	(40, 'MV SOLITAIRE', 'HAVEN NR 2515 OPHEMERSTRAAT 85', '3089 JD  ROTTERDAM', 'HOLLAND', '2020-02-06 13:03:21', '2020-02-06 13:03:21'),
	(41, 'ELINEX POWER SOLUTIONS B.V', 'WOLWEVERSTRAAT 15', '2984 CE RIDDERKERK', 'HOLLAND', '2020-02-06 14:18:00', '2020-02-06 14:18:00'),
	(42, 'MANBAT LIMITED', 'T/A EUROPA BATTERIES', '00000 IRELAND', 'IRELAND', '2020-02-07 14:10:41', '2020-02-07 14:10:41'),
	(44, 'STIB MIVB - MAGAZIJN 5G', 'RUISBROEKSESTEENWEG 52-74', '1180      BRUSSEL', 'BELGIUM', '2020-02-17 16:22:31', '2020-02-17 16:22:31'),
	(45, 'SCHNEIDER ELECTRIC', 'INNOVALLE 140 AVENUE JEAN KUNTZMANN', '38330 MONTBONNOT ST MARTIN', 'FRANCE', '2020-02-19 08:34:09', '2020-02-19 08:34:09'),
	(46, 'COLT TECHNOLOGY SERVICES SPA', 'VIA S.MARTINI 127/129', '100142  ROMA', 'ITALY', '2020-02-21 08:03:53', '2020-02-21 08:04:21'),
	(47, 'DMS TECHNOLOGIES', 'BELBINS BUSINESS PARK', 'SO51 7JF ROMSEY', 'ENGLAND', '2020-02-21 08:06:05', '2020-02-21 08:06:05'),
	(48, 'EXIDE TECHNOLOGIES BV', 'KIOTOWEG  201', '3047 BG ROTTERDAM', 'HOLLAND', '2020-03-13 11:39:31', '2020-03-13 11:39:31'),
	(49, 'DASSEN -  LVH B.V.NP', 'OMMELSEWEG 71', '5721 WT ASTEN', 'HOLLAND', '2020-03-13 11:40:30', '2020-03-13 11:40:30'),
	(50, 'EXIDE TECHNOLOGIES S.R.L', 'VIA LE DANTE ALIGHIERI 100,106', '24058 ROMANO LOMBARDIA', 'ITALY', '2020-03-13 11:41:13', '2020-03-13 11:41:13'),
	(51, 'EXIDE TECHNOLOGIES S.R.L', 'VIALE DANTE ALIGHIERY 208', '24058 ROMANO LOMBARDIA', 'ITALY', '2020-03-13 11:41:48', '2020-03-13 11:41:48'),
	(52, 'HOLLAND BATTERIES B.V.', 'LOGGERSTRAAT 15', '1976 CX IJMUIDEN', 'HOLLAND', '2020-04-01 07:23:58', '2020-04-01 07:23:58'),
	(53, 'HOLLAND BATTERIES B.V.', 'LOGGERSTRAAT 15', '1976 CX IJMUIDEN', 'HOLLAND', '2020-04-01 07:23:58', '2020-04-01 07:23:58'),
	(54, 'NEDELKO B.V', 'RIGA 12', '2993 LW BARENDRECHT', 'HOLLAND', '2020-04-01 07:27:13', '2020-04-01 07:27:13'),
	(55, 'NORTHERN IND BATTERY SVS LTD', 'UNIT 6 FOUR CROSSES BUS PARK LLANYMYNECH POWYS', 'SY22 6ST WALES', 'ENGLAND', '2020-04-03 07:41:30', '2020-04-03 07:41:30'),
	(57, 'EATON INDUSTREIES NETHERLANDS', 'AMBACHT 6', '5301 KW ZALTBOMMEL', 'HOLLAND', '2020-04-07 11:19:38', '2020-04-07 11:19:38'),
	(58, 'MULTIBAT NEDERLAND BV ZWOLLE', 'RIETVELDSTRAAT 12', '8013 RW ZWOLLE', 'HOLLAND', '2020-04-13 14:40:00', '2020-04-13 14:40:00'),
	(59, 'EUROTRONIC B.V.', 'CURIEWEG 8 D', '2408 BZ ALPHEN', 'HOLLAND', '2020-04-13 14:42:27', '2020-04-13 14:42:27'),
	(60, 'PHILEA', '3 RUE DE LA FONTAINE', '34670 BAILLARGUES', 'FRANCE', '2020-04-22 14:33:16', '2020-04-22 14:33:16'),
	(61, 'EXIDE TECHNOLOGIES, S.L.U.', 'CTRA N. II KM 41, 800', '19200 AZUQUECA DE HENARES', 'SPAIN', '2020-05-20 19:51:41', '2020-05-20 19:51:41'),
	(62, 'VERIZON FRANCE', 'PARC SAIN DENIS DE LA PLAINE, 14 RUE DE LA MONT JOIE', 'F-93210 PARIS', 'FRANCE', '2020-05-20 20:12:01', '2020-05-20 20:12:01'),
	(63, 'ACIST EUROPE B.V', 'ARGONSTRAAT 3', '6422 PH HEERLEN', 'HOLLAND', '2020-05-28 19:58:19', '2020-05-28 19:58:19'),
	(64, 'ENDENBURG ELECTROTECHN.BV', 'PR. PIETER CHRISTIAANSTRAAT 50', '3066 TB ROTTERDAM', 'HOLLAND', '2020-06-05 15:09:28', '2020-06-05 15:09:41'),
	(65, 'STIB-MIVB CENTRAAL MAGAZIJN', 'F. DEMETSKAAI 33', '1070 BRUSSEL', 'BELGIUM', '2020-06-05 15:14:02', '2020-06-05 15:14:02'),
	(66, 'TEUNIS RIJSSEN B.V', 'GALVANISTRAAT 3', '7461 JC  RIJSSEN', 'HOLLAND', '2020-06-15 18:02:40', '2020-06-15 18:02:40'),
	(67, 'CORLIDO PROJECT SUPPLY B.V.', 'JAMES COOKSTRAAT 53', '7825 AX EMMEN', 'HOLLAND', '2020-06-18 17:59:34', '2020-06-18 17:59:34'),
	(68, 'teste1', 'teste2', 'teste3', 'teste4', '2020-06-20 12:42:41', '2020-06-20 12:42:53'),
	(69, 'ROLLEMA TRANSPORT BV', 'SCHIEWEG 76', '2627 AN DELFT', 'HOLLAND', '2020-06-22 13:35:36', '2020-06-22 13:35:36'),
	(70, 'KONCAR -  ELECTRONICS AND', 'FALLEROVA SETALISTE 22', '10000 ZAGREB', 'CROACIA', '2020-07-06 14:33:52', '2020-07-06 14:33:52'),
	(71, 'FIRST CASE (SCHNEIDER)', 'SCHIPLUIDENSEWEG 13', '2291 PC  WATERINGEN', 'HOLLAND', '2020-07-09 14:19:07', '2020-07-09 14:19:07'),
	(72, 'GVX21 STACKBO DATA CENTER', 'LAGGARBOVAGEN 70 -- STACKBO', '81891  VALBO', 'SWEDEN', '2020-07-24 10:38:55', '2020-07-24 10:38:55'),
	(73, 'WAREHOUSE VERTIV', 'DOUGLASSINGEL 41', '1119 NL MD SCHPHOL', 'ENGLAND', '2020-07-29 11:43:48', '2020-07-29 11:43:48'),
	(74, 'ELEKTRO WROBEL', 'Z.IND.FRAMATOME GMBH', '37431 BAD LAUTERBERG/OSTERHEGEN', 'GERMANY', '2020-07-29 13:10:45', '2020-07-29 13:10:45'),
	(75, 'BENNING NL', 'PEPPELKADE 42', '3992 AK HOUTEN', 'HOLLAND', '2020-07-29 15:21:56', '2020-07-29 15:21:56'),
	(76, 'VARICOM', 'DARIAUS IR GIRENO G.149', 'LT-.2189 VILNIUS', 'LITUANIA', '2020-09-18 09:24:20', '2020-09-18 09:24:20'),
	(77, 'TELZAS LTD', 'KAMIL HOLOWACZ   +48 735967678', '78-400 SZCZECINEK', 'POLAND', '2020-09-24 14:52:13', '2020-09-24 14:52:13');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Dumping structure for table painel_rubengue.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table painel_rubengue.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table painel_rubengue.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table painel_rubengue.migrations: ~0 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table painel_rubengue.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table painel_rubengue.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table painel_rubengue.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table painel_rubengue.users: ~3 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Ruben Guerra', 'geral@rubenguerra.pt', NULL, '$2y$10$ypAVf6Lv2vXtTJT7NCEWuOksGfrnZykNKtDDoo7NlhzQwCU8t6Hay', NULL, '2020-02-19 08:39:58', '2020-02-19 08:52:46'),
	(2, 'Paulo Guerra', 'paulo.guerra@exide.com', NULL, '$2y$10$JvRIN97K5DyyWBu8VSfoLuT/3fnn3q.OTblSHdtapa6HSTfS4pVkm', NULL, '2020-03-20 09:01:45', '2020-09-16 14:33:35'),
	(4, 'Igor Guilherme', 'igor.guilherme@exide.com', NULL, '$2y$10$KE9NrTpvdGQMxIyR8AXmzeRwygnwMOGJ5n./GpqRwgDH5TeyaWIxe', NULL, '2020-02-19 08:46:23', '2020-02-21 14:55:54');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;