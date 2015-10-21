-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2015. Okt 20. 16:43
-- Kiszolgáló verziója: 5.6.26
-- PHP verzió: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `symfony`
--
CREATE DATABASE IF NOT EXISTS `proba` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `proba`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cegtipus`
--

CREATE TABLE IF NOT EXISTS `cegtipus` (
  `id` int(11) NOT NULL,
  `tipus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `cegtipus`
--

INSERT INTO `cegtipus` (`id`, `tipus`) VALUES
(1, 'Cég'),
(2, 'Magánszemély');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `countries`
--

INSERT INTO `countries` (`id`, `countryCode`, `countryName`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AX', 'Åland'),
(3, 'AL', 'Albania'),
(4, 'DZ', 'Algeria'),
(5, 'AS', 'American Samoa'),
(6, 'AD', 'Andorra'),
(7, 'AO', 'Angola'),
(8, 'AI', 'Anguilla'),
(9, 'AQ', 'Antarctica'),
(10, 'AG', 'Antigua and Barbuda'),
(11, 'AR', 'Argentina'),
(12, 'AM', 'Armenia'),
(13, 'AW', 'Aruba'),
(14, 'AU', 'Australia'),
(15, 'AT', 'Austria'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BS', 'Bahamas'),
(18, 'BH', 'Bahrain'),
(19, 'BD', 'Bangladesh'),
(20, 'BB', 'Barbados'),
(21, 'BY', 'Belarus'),
(22, 'BE', 'Belgium'),
(23, 'BZ', 'Belize'),
(24, 'BJ', 'Benin'),
(25, 'BM', 'Bermuda'),
(26, 'BT', 'Bhutan'),
(27, 'BO', 'Bolivia'),
(28, 'BQ', 'Bonaire'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British Indian Ocean Territory'),
(34, 'VG', 'British Virgin Islands'),
(35, 'BN', 'Brunei'),
(36, 'BG', 'Bulgaria'),
(37, 'BF', 'Burkina Faso'),
(38, 'BI', 'Burundi'),
(39, 'KH', 'Cambodia'),
(40, 'CM', 'Cameroon'),
(41, 'CA', 'Canada'),
(42, 'CV', 'Cape Verde'),
(43, 'KY', 'Cayman Islands'),
(44, 'CF', 'Central African Republic'),
(45, 'TD', 'Chad'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CX', 'Christmas Island'),
(49, 'CC', 'Cocos [Keeling] Islands'),
(50, 'CO', 'Colombia'),
(51, 'KM', 'Comoros'),
(52, 'CK', 'Cook Islands'),
(53, 'CR', 'Costa Rica'),
(54, 'HR', 'Croatia'),
(55, 'CU', 'Cuba'),
(56, 'CW', 'Curacao'),
(57, 'CY', 'Cyprus'),
(58, 'CZ', 'Czech Republic'),
(59, 'CD', 'Democratic Republic of the Congo'),
(60, 'DK', 'Denmark'),
(61, 'DJ', 'Djibouti'),
(62, 'DM', 'Dominica'),
(63, 'DO', 'Dominican Republic'),
(64, 'TL', 'East Timor'),
(65, 'EC', 'Ecuador'),
(66, 'EG', 'Egypt'),
(67, 'SV', 'El Salvador'),
(68, 'GQ', 'Equatorial Guinea'),
(69, 'ER', 'Eritrea'),
(70, 'EE', 'Estonia'),
(71, 'ET', 'Ethiopia'),
(72, 'FK', 'Falkland Islands'),
(73, 'FO', 'Faroe Islands'),
(74, 'FJ', 'Fiji'),
(75, 'FI', 'Finland'),
(76, 'FR', 'France'),
(77, 'GF', 'French Guiana'),
(78, 'PF', 'French Polynesia'),
(79, 'TF', 'French Southern Territories'),
(80, 'GA', 'Gabon'),
(81, 'GM', 'Gambia'),
(82, 'GE', 'Georgia'),
(83, 'DE', 'Germany'),
(84, 'GH', 'Ghana'),
(85, 'GI', 'Gibraltar'),
(86, 'GR', 'Greece'),
(87, 'GL', 'Greenland'),
(88, 'GD', 'Grenada'),
(89, 'GP', 'Guadeloupe'),
(90, 'GU', 'Guam'),
(91, 'GT', 'Guatemala'),
(92, 'GG', 'Guernsey'),
(93, 'GN', 'Guinea'),
(94, 'GW', 'Guinea-Bissau'),
(95, 'GY', 'Guyana'),
(96, 'HT', 'Haiti'),
(97, 'HM', 'Heard Island and McDonald Islands'),
(98, 'HN', 'Honduras'),
(99, 'HK', 'Hong Kong'),
(100, 'HU', 'Hungary'),
(101, 'IS', 'Iceland'),
(102, 'IN', 'India'),
(103, 'ID', 'Indonesia'),
(104, 'IR', 'Iran'),
(105, 'IQ', 'Iraq'),
(106, 'IE', 'Ireland'),
(107, 'IM', 'Isle of Man'),
(108, 'IL', 'Israel'),
(109, 'IT', 'Italy'),
(110, 'CI', 'Ivory Coast'),
(111, 'JM', 'Jamaica'),
(112, 'JP', 'Japan'),
(113, 'JE', 'Jersey'),
(114, 'JO', 'Jordan'),
(115, 'KZ', 'Kazakhstan'),
(116, 'KE', 'Kenya'),
(117, 'KI', 'Kiribati'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Laos'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macao'),
(131, 'MK', 'Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'YT', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia'),
(145, 'MD', 'Moldova'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar [Burma]'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'KP', 'North Korea'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn Islands'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'CG', 'Republic of the Congo'),
(182, 'RE', 'Réunion'),
(183, 'RO', 'Romania'),
(184, 'RU', 'Russia'),
(185, 'RW', 'Rwanda'),
(186, 'BL', 'Saint Barthélemy'),
(187, 'SH', 'Saint Helena'),
(188, 'KN', 'Saint Kitts and Nevis'),
(189, 'LC', 'Saint Lucia'),
(190, 'MF', 'Saint Martin'),
(191, 'PM', 'Saint Pierre and Miquelon'),
(192, 'VC', 'Saint Vincent and the Grenadines'),
(193, 'WS', 'Samoa'),
(194, 'SM', 'San Marino'),
(195, 'ST', 'São Tomé and Príncipe'),
(196, 'SA', 'Saudi Arabia'),
(197, 'SN', 'Senegal'),
(198, 'RS', 'Serbia'),
(199, 'SC', 'Seychelles'),
(200, 'SL', 'Sierra Leone'),
(201, 'SG', 'Singapore'),
(202, 'SX', 'Sint Maarten'),
(203, 'SK', 'Slovakia'),
(204, 'SI', 'Slovenia'),
(205, 'SB', 'Solomon Islands'),
(206, 'SO', 'Somalia'),
(207, 'ZA', 'South Africa'),
(208, 'GS', 'South Georgia and the South Sandwich Islands'),
(209, 'KR', 'South Korea'),
(210, 'SS', 'South Sudan'),
(211, 'ES', 'Spain'),
(212, 'LK', 'Sri Lanka'),
(213, 'SD', 'Sudan'),
(214, 'SR', 'Suriname'),
(215, 'SJ', 'Svalbard and Jan Mayen'),
(216, 'SZ', 'Swaziland'),
(217, 'SE', 'Sweden'),
(218, 'CH', 'Switzerland'),
(219, 'SY', 'Syria'),
(220, 'TW', 'Taiwan'),
(221, 'TJ', 'Tajikistan'),
(222, 'TZ', 'Tanzania'),
(223, 'TH', 'Thailand'),
(224, 'TG', 'Togo'),
(225, 'TK', 'Tokelau'),
(226, 'TO', 'Tonga'),
(227, 'TT', 'Trinidad and Tobago'),
(228, 'TN', 'Tunisia'),
(229, 'TR', 'Turkey'),
(230, 'TM', 'Turkmenistan'),
(231, 'TC', 'Turks and Caicos Islands'),
(232, 'TV', 'Tuvalu'),
(233, 'UM', 'U.S. Minor Outlying Islands'),
(234, 'VI', 'U.S. Virgin Islands'),
(235, 'UG', 'Uganda'),
(236, 'UA', 'Ukraine'),
(237, 'AE', 'United Arab Emirates'),
(238, 'GB', 'United Kingdom'),
(239, 'US', 'United States'),
(240, 'UY', 'Uruguay'),
(241, 'UZ', 'Uzbekistan'),
(242, 'VU', 'Vanuatu'),
(243, 'VA', 'Vatican City'),
(244, 'VE', 'Venezuela'),
(245, 'VN', 'Vietnam'),
(246, 'WF', 'Wallis and Futuna'),
(247, 'EH', 'Western Sahara'),
(248, 'YE', 'Yemen'),
(249, 'ZM', 'Zambia'),
(250, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kapcsolattartok`
--

CREATE TABLE IF NOT EXISTS `kapcsolattartok` (
  `id` int(11) NOT NULL,
  `nev` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nev_elotag`
--

CREATE TABLE IF NOT EXISTS `nev_elotag` (
  `id` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `leiras` text,
  `letrehozva` varchar(25) DEFAULT NULL,
  `letrehozo` varchar(255) DEFAULT NULL,
  `modositva` varchar(25) DEFAULT NULL,
  `modosito` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `nev_elotag`
--

INSERT INTO `nev_elotag` (`id`, `nev`, `leiras`, `letrehozva`, `letrehozo`, `modositva`, `modosito`) VALUES
(24, 'Mr.', NULL, NULL, NULL, NULL, NULL),
(25, 'Mrs.', NULL, NULL, NULL, NULL, NULL),
(26, 'Miss', NULL, NULL, NULL, NULL, NULL),
(27, 'Dr.', NULL, '1445211007', 'snakeex', '1445211007', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL,
  `tipus` int(11) NOT NULL,
  `cegnev` varchar(255) DEFAULT NULL,
  `nev_elotag` int(11) DEFAULT NULL,
  `vezeteknev` varchar(255) DEFAULT NULL,
  `keresztnev` varchar(255) DEFAULT NULL,
  `szamlazasi_nev` varchar(255) DEFAULT NULL,
  `partnertipus` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `szekhely_cim_orszag` int(11) NOT NULL,
  `szekhely_cim_irsz` int(11) NOT NULL,
  `szekhely_cim_telepules` varchar(255) NOT NULL,
  `szekhely_cim_kozter` varchar(255) NOT NULL,
  `szekhely_cim_ihazsz` int(11) NOT NULL,
  `szamlazasi_cim_orszag` int(11) NOT NULL,
  `szamlazasi_cim_irsz` int(11) NOT NULL,
  `szamlazasi_cim_telepules` varchar(255) NOT NULL,
  `szamlazasi_cim_kozter` varchar(255) NOT NULL,
  `szamlazasi_cim_hazsz` int(11) NOT NULL,
  `postazasi_cim_orszag` int(11) NOT NULL,
  `postazasi_cim_irsz` int(11) NOT NULL,
  `postazasi_cim_telepules` varchar(255) NOT NULL,
  `postazasi_cim_kozter` varchar(255) NOT NULL,
  `postazasi_cim_hazsz` int(11) NOT NULL,
  `adoszam` varchar(255) DEFAULT NULL,
  `eu_adoszam` varchar(255) DEFAULT NULL,
  `cegbejegyzesi_szam` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `mobil` varchar(255) DEFAULT NULL,
  `szuletesnap` varchar(25) DEFAULT NULL,
  `anyja_neve` varchar(255) DEFAULT NULL,
  `szig_szam` char(8) DEFAULT NULL,
  `letrehozva` varchar(25) DEFAULT NULL,
  `letrehozo` varchar(255) DEFAULT NULL,
  `modositva` varchar(25) DEFAULT NULL,
  `modosito` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `partner`
--

INSERT INTO `partner` (`id`, `tipus`, `cegnev`, `nev_elotag`, `vezeteknev`, `keresztnev`, `szamlazasi_nev`, `partnertipus`, `email`, `szekhely_cim_orszag`, `szekhely_cim_irsz`, `szekhely_cim_telepules`, `szekhely_cim_kozter`, `szekhely_cim_ihazsz`, `szamlazasi_cim_orszag`, `szamlazasi_cim_irsz`, `szamlazasi_cim_telepules`, `szamlazasi_cim_kozter`, `szamlazasi_cim_hazsz`, `postazasi_cim_orszag`, `postazasi_cim_irsz`, `postazasi_cim_telepules`, `postazasi_cim_kozter`, `postazasi_cim_hazsz`, `adoszam`, `eu_adoszam`, `cegbejegyzesi_szam`, `telefon`, `fax`, `mobil`, `szuletesnap`, `anyja_neve`, `szig_szam`, `letrehozva`, `letrehozo`, `modositva`, `modosito`) VALUES
(11, 2, NULL, 24, 'Kovács', 'Miklós', 'Kovács Miklós', 1, 'kmiki@mail.com', 100, 2049, 'Diósd', 'Petőfi Sándor u.', 24, 100, 2049, 'Diósd', 'Petőfi Sándor u.', 24, 100, 2049, 'Diósd', 'Petőfi Sándor u.', 24, '845039431', NULL, NULL, NULL, NULL, '+36308587742', '640994400', NULL, '786601LA', '1445210726', 'snakeex', '1445289366', 'snakeex'),
(13, 1, 'Példa kft.', NULL, NULL, NULL, NULL, 2, 'info@peldakft.hu', 100, 7354, 'Alsómocsolád', 'Zug tér', 3, 100, 7345, 'Alsómocsolád', 'Zug tér', 3, 100, 7345, 'Alsómocsolád', 'Zug tér', 3, NULL, NULL, NULL, NULL, NULL, '630443233', NULL, NULL, NULL, '1445258952', 'snakeex', '1445289026', 'snakeex'),
(14, 1, 'Kód kft', NULL, NULL, NULL, NULL, 3, 'info@kodolas.hu', 100, 3833, 'Rásonysápberencs', 'Kavicsos u.', 5, 100, 7900, 'Botykapeterd', 'Fő út', 10, 100, 7900, 'Botykapeterd', 'Fő út', 10, NULL, NULL, NULL, NULL, NULL, '+36204457689', NULL, NULL, NULL, '1445259419', 'snakeex', '1445289201', 'snakeex');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `partnertipus`
--

CREATE TABLE IF NOT EXISTS `partnertipus` (
  `id` int(11) NOT NULL,
  `tipus` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `partnertipus`
--

INSERT INTO `partnertipus` (`id`, `tipus`) VALUES
(1, 'Vevő'),
(2, 'Szállító'),
(3, 'Vevő és Szállító'),
(4, 'Leendő partner');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `telephely`
--

CREATE TABLE IF NOT EXISTS `telephely` (
  `id` int(11) NOT NULL,
  `partner` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `orszag` int(11) NOT NULL,
  `irsz` int(11) NOT NULL,
  `telepules` varchar(255) NOT NULL,
  `kozter` varchar(255) NOT NULL,
  `hazsz` int(11) NOT NULL,
  `telefon` int(11) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `mobil` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alapertelmezett` tinyint(1) NOT NULL,
  `megjegyzes` varchar(255) DEFAULT NULL,
  `letrehozva` varchar(25) DEFAULT NULL,
  `letrehozo` varchar(255) DEFAULT NULL,
  `modositva` varchar(25) DEFAULT NULL,
  `modosito` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `telephely`
--

INSERT INTO `telephely` (`id`, `partner`, `nev`, `orszag`, `irsz`, `telepules`, `kozter`, `hazsz`, `telefon`, `fax`, `mobil`, `email`, `alapertelmezett`, `megjegyzes`, `letrehozva`, `letrehozo`, `modositva`, `modosito`) VALUES
(5, 11, 'Dósa Miklós telephelye', 100, 2049, 'Diósd', 'Mikszáth Kálmán u.', 24, NULL, NULL, NULL, NULL, 1, NULL, '1445210726', 'snakeex', '1445259628', 'snakeex'),
(6, 11, 'Második telephely', 100, 1034, 'Budapest', 'Bécsi út', 96, NULL, NULL, NULL, NULL, 0, NULL, '1445211280', 'snakeex', '1445289740', 'snakeex'),
(8, 13, 'Példa kft. telephelye', 100, 7354, 'Alsómocsolád', 'Zug tér', 3, NULL, NULL, NULL, NULL, 1, NULL, '1445258952', 'snakeex', '1445258952', NULL),
(9, 14, 'Kód kft telephelye', 100, 3833, 'Rásonysápberencs', 'Kavicsos u.', 5, NULL, NULL, NULL, NULL, 1, NULL, '1445259419', 'snakeex', '1445259419', NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `nev_elotag` int(11) DEFAULT NULL,
  `vezeteknev` varchar(255) NOT NULL,
  `keresztnev` varchar(255) NOT NULL,
  `felhasznalonev` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `nev_elotag`, `vezeteknev`, `keresztnev`, `felhasznalonev`, `jelszo`, `salt`) VALUES
(11, 24, 'Dósa', 'Miklós', 'snakeex', 'B8JXXEQ23+FpADF2NinigV2+chU=', '169349203956242777312c5');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cegtipus`
--
ALTER TABLE `cegtipus`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countryName` (`countryName`),
  ADD UNIQUE KEY `countryName_2` (`countryName`),
  ADD UNIQUE KEY `countryName_3` (`countryName`);

--
-- A tábla indexei `kapcsolattartok`
--
ALTER TABLE `kapcsolattartok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `nev_elotag`
--
ALTER TABLE `nev_elotag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nev` (`nev`);

--
-- A tábla indexei `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `szekhely_cim_orszag` (`szekhely_cim_orszag`,`szamlazasi_cim_orszag`,`postazasi_cim_orszag`),
  ADD KEY `tipus` (`tipus`),
  ADD KEY `nev_elotag` (`nev_elotag`),
  ADD KEY `szamlazasi_cim_orszag` (`szamlazasi_cim_orszag`),
  ADD KEY `postazasi_cim_orszag` (`postazasi_cim_orszag`),
  ADD KEY `partnertipus` (`partnertipus`);

--
-- A tábla indexei `partnertipus`
--
ALTER TABLE `partnertipus`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `telephely`
--
ALTER TABLE `telephely`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orszag` (`orszag`),
  ADD KEY `orszag_2` (`orszag`),
  ADD KEY `partner` (`partner`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `felhasznalonev` (`felhasznalonev`),
  ADD KEY `nev_elotag` (`nev_elotag`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT a táblához `kapcsolattartok`
--
ALTER TABLE `kapcsolattartok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT a táblához `nev_elotag`
--
ALTER TABLE `nev_elotag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT a táblához `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT a táblához `partnertipus`
--
ALTER TABLE `partnertipus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT a táblához `telephely`
--
ALTER TABLE `telephely`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `partner`
--
ALTER TABLE `partner`
  ADD CONSTRAINT `partner_ibfk_4` FOREIGN KEY (`tipus`) REFERENCES `cegtipus` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `partner_ibfk_5` FOREIGN KEY (`szekhely_cim_orszag`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `partner_ibfk_6` FOREIGN KEY (`szamlazasi_cim_orszag`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `partner_ibfk_7` FOREIGN KEY (`postazasi_cim_orszag`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `partner_ibfk_8` FOREIGN KEY (`nev_elotag`) REFERENCES `nev_elotag` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `partner_ibfk_9` FOREIGN KEY (`partnertipus`) REFERENCES `partnertipus` (`id`) ON UPDATE CASCADE;

--
-- Megkötések a táblához `telephely`
--
ALTER TABLE `telephely`
  ADD CONSTRAINT `telephely_ibfk_1` FOREIGN KEY (`orszag`) REFERENCES `countries` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `telephely_ibfk_2` FOREIGN KEY (`partner`) REFERENCES `partner` (`id`) ON UPDATE CASCADE;

--
-- Megkötések a táblához `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`nev_elotag`) REFERENCES `nev_elotag` (`id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
