-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2012 at 03:08 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cloneebay`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `is_deleted_flg` int(1) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `CategoryName` (`CategoryName`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `CategoryName`, `is_deleted_flg`) VALUES
(11, 'Fashion', 0),
(10, 'Motors', 0),
(9, 'Electronics', 0),
(8, 'Collectable & Art', 0),
(12, 'Home, Outdoors & Decor', 0),
(13, 'CD & Media', 0),
(14, 'Entertainment', 0),
(15, 'Sports Goods', 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` varchar(2) NOT NULL,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
('AC', 'Ascension Island'),
('AD', 'Andorra'),
('AE', 'United Arab Emirates'),
('AF', 'Afghanistan'),
('AG', 'Antigua and Barbuda'),
('AI', 'Anguilla'),
('AL', 'Albania'),
('AM', 'Armenia'),
('AN', 'Netherlands Antilles'),
('AO', 'Angola'),
('AQ', 'Antarctica'),
('AR', 'Argentina'),
('AS', 'American Samoa'),
('AT', 'Austria'),
('AU', 'Australia'),
('AW', 'Aruba'),
('AX', 'Åland Islands'),
('AZ', 'Azerbaijan'),
('BA', 'Bosnia and Herzegovina'),
('BB', 'Barbados'),
('BD', 'Bangladesh'),
('BE', 'Belgium'),
('BF', 'Burkina Faso'),
('BG', 'Bulgaria'),
('BH', 'Bahrain'),
('BI', 'Burundi'),
('BJ', 'Benin'),
('BL', 'Saint Barthélemy'),
('BM', 'Bermuda'),
('BN', 'Brunei'),
('BO', 'Bolivia'),
('BR', 'Brazil'),
('BS', 'Bahamas'),
('BT', 'Bhutan'),
('BV', 'Bouvet Island'),
('BW', 'Botswana'),
('BY', 'Belarus'),
('BZ', 'Belize'),
('CA', 'Canada'),
('CC', 'Cocos [Keeling] Islands'),
('CD', 'Congo - Kinshasa'),
('CF', 'Central African Republic'),
('CG', 'Congo - Brazzaville'),
('CH', 'Switzerland'),
('CI', 'Côte d’Ivoire'),
('CK', 'Cook Islands'),
('CL', 'Chile'),
('CM', 'Cameroon'),
('CN', 'China'),
('CO', 'Colombia'),
('CP', 'Clipperton Island'),
('CR', 'Costa Rica'),
('CS', 'Serbia and Montenegro'),
('CU', 'Cuba'),
('CV', 'Cape Verde'),
('CX', 'Christmas Island'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DE', 'Germany'),
('DG', 'Diego Garcia'),
('DJ', 'Djibouti'),
('DK', 'Denmark'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('DZ', 'Algeria'),
('EA', 'Ceuta and Melilla'),
('EC', 'Ecuador'),
('EE', 'Estonia'),
('EG', 'Egypt'),
('EH', 'Western Sahara'),
('ER', 'Eritrea'),
('ES', 'Spain'),
('ET', 'Ethiopia'),
('EU', 'European Union'),
('FI', 'Finland'),
('FJ', 'Fiji'),
('FK', 'Falkland Islands'),
('FM', 'Micronesia'),
('FO', 'Faroe Islands'),
('FR', 'France'),
('GA', 'Gabon'),
('GB', 'United Kingdom'),
('GD', 'Grenada'),
('GE', 'Georgia'),
('GF', 'French Guiana'),
('GG', 'Guernsey'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GL', 'Greenland'),
('GM', 'Gambia'),
('GN', 'Guinea'),
('GP', 'Guadeloupe'),
('GQ', 'Equatorial Guinea'),
('GR', 'Greece'),
('GS', 'South Georgia and the South Sandwich Islands'),
('GT', 'Guatemala'),
('GU', 'Guam'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HK', 'Hong Kong SAR China'),
('HM', 'Heard Island and McDonald Islands'),
('HN', 'Honduras'),
('HR', 'Croatia'),
('HT', 'Haiti'),
('HU', 'Hungary'),
('IC', 'Canary Islands'),
('ID', 'Indonesia'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IM', 'Isle of Man'),
('IN', 'India'),
('IO', 'British Indian Ocean Territory'),
('IQ', 'Iraq'),
('IR', 'Iran'),
('IS', 'Iceland'),
('IT', 'Italy'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JO', 'Jordan'),
('JP', 'Japan'),
('KE', 'Kenya'),
('KG', 'Kyrgyzstan'),
('KH', 'Cambodia'),
('KI', 'Kiribati'),
('KM', 'Comoros'),
('KN', 'Saint Kitts and Nevis'),
('KP', 'North Korea'),
('KR', 'South Korea'),
('KW', 'Kuwait'),
('KY', 'Cayman Islands'),
('KZ', 'Kazakhstan'),
('LA', 'Laos'),
('LB', 'Lebanon'),
('LC', 'Saint Lucia'),
('LI', 'Liechtenstein'),
('LK', 'Sri Lanka'),
('LR', 'Liberia'),
('LS', 'Lesotho'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('LV', 'Latvia'),
('LY', 'Libya'),
('MA', 'Morocco'),
('MC', 'Monaco'),
('MD', 'Moldova'),
('ME', 'Montenegro'),
('MF', 'Saint Martin'),
('MG', 'Madagascar'),
('MH', 'Marshall Islands'),
('MK', 'Macedonia'),
('ML', 'Mali'),
('MM', 'Myanmar [Burma]'),
('MN', 'Mongolia'),
('MO', 'Macau SAR China'),
('MP', 'Northern Mariana Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MS', 'Montserrat'),
('MT', 'Malta'),
('MU', 'Mauritius'),
('MV', 'Maldives'),
('MW', 'Malawi'),
('MX', 'Mexico'),
('MY', 'Malaysia'),
('MZ', 'Mozambique'),
('NA', 'Namibia'),
('NC', 'New Caledonia'),
('NE', 'Niger'),
('NF', 'Norfolk Island'),
('NG', 'Nigeria'),
('NI', 'Nicaragua'),
('NL', 'Netherlands'),
('NO', 'Norway'),
('NP', 'Nepal'),
('NR', 'Nauru'),
('NU', 'Niue'),
('NZ', 'New Zealand'),
('OM', 'Oman'),
('PA', 'Panama'),
('PE', 'Peru'),
('PF', 'French Polynesia'),
('PG', 'Papua New Guinea'),
('PH', 'Philippines'),
('PK', 'Pakistan'),
('PL', 'Poland'),
('PM', 'Saint Pierre and Miquelon'),
('PN', 'Pitcairn Islands'),
('PR', 'Puerto Rico'),
('PS', 'Palestinian Territories'),
('PT', 'Portugal'),
('PW', 'Palau'),
('PY', 'Paraguay'),
('QA', 'Qatar'),
('QO', 'Outlying Oceania'),
('RE', 'Réunion'),
('RO', 'Romania'),
('RS', 'Serbia'),
('RU', 'Russia'),
('RW', 'Rwanda'),
('SA', 'Saudi Arabia'),
('SB', 'Solomon Islands'),
('SC', 'Seychelles'),
('SD', 'Sudan'),
('SE', 'Sweden'),
('SG', 'Singapore'),
('SH', 'Saint Helena'),
('SI', 'Slovenia'),
('SJ', 'Svalbard and Jan Mayen'),
('SK', 'Slovakia'),
('SL', 'Sierra Leone'),
('SM', 'San Marino'),
('SN', 'Senegal'),
('SO', 'Somalia'),
('SR', 'Suriname'),
('ST', 'São Tomé and Príncipe'),
('SV', 'El Salvador'),
('SY', 'Syria'),
('SZ', 'Swaziland'),
('TA', 'Tristan da Cunha'),
('TC', 'Turks and Caicos Islands'),
('TD', 'Chad'),
('TF', 'French Southern Territories'),
('TG', 'Togo'),
('TH', 'Thailand'),
('TJ', 'Tajikistan'),
('TK', 'Tokelau'),
('TL', 'Timor-Leste'),
('TM', 'Turkmenistan'),
('TN', 'Tunisia'),
('TO', 'Tonga'),
('TR', 'Turkey'),
('TT', 'Trinidad and Tobago'),
('TV', 'Tuvalu'),
('TW', 'Taiwan'),
('TZ', 'Tanzania'),
('UA', 'Ukraine'),
('UG', 'Uganda'),
('UM', 'U.S. Minor Outlying Islands'),
('US', 'United States'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VA', 'Vatican City'),
('VC', 'Saint Vincent and the Grenadines'),
('VE', 'Venezuela'),
('VG', 'British Virgin Islands'),
('VI', 'U.S. Virgin Islands'),
('VN', 'Vietnam'),
('VU', 'Vanuatu'),
('WF', 'Wallis and Futuna'),
('WS', 'Samoa'),
('YE', 'Yemen'),
('YT', 'Mayotte'),
('ZA', 'South Africa'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `iso_countries`
--

CREATE TABLE IF NOT EXISTS `iso_countries` (
  `rowId` int(11) NOT NULL,
  `countryId` int(11) NOT NULL,
  `locale` varchar(10) NOT NULL DEFAULT 'en',
  `countryCode` char(2) NOT NULL,
  `countryName` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `phonePrefix` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`rowId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iso_countries`
--

INSERT INTO `iso_countries` (`rowId`, `countryId`, `locale`, `countryCode`, `countryName`, `phonePrefix`) VALUES
(1, 1, 'en', 'AF', 'Afghanistan', '+93'),
(2, 2, 'en', 'AL', 'Albania', '+355'),
(3, 3, 'en', 'DZ', 'Algeria', '+213'),
(4, 4, 'en', 'AD', 'Andorra', '+376'),
(5, 5, 'en', 'AO', 'Angola', '+244'),
(6, 6, 'en', 'AG', 'Antigua and Barbuda', '+1-268'),
(7, 7, 'en', 'AR', 'Argentina', '+54'),
(8, 8, 'en', 'AM', 'Armenia', '+374'),
(9, 9, 'en', 'AU', 'Australia', '+61'),
(10, 10, 'en', 'AT', 'Austria', '+43'),
(11, 11, 'en', 'AZ', 'Azerbaijan', '+994'),
(12, 12, 'en', 'BS', 'Bahamas, The', '+1-242'),
(13, 13, 'en', 'BH', 'Bahrain', '+973'),
(14, 14, 'en', 'BD', 'Bangladesh', '+880'),
(15, 15, 'en', 'BB', 'Barbados', '+1-246'),
(16, 16, 'en', 'BY', 'Belarus', '+375'),
(17, 17, 'en', 'BE', 'Belgium', '+32'),
(18, 18, 'en', 'BZ', 'Belize', '+501'),
(19, 19, 'en', 'BJ', 'Benin', '+229'),
(20, 20, 'en', 'BT', 'Bhutan', '+975'),
(21, 21, 'en', 'BO', 'Bolivia', '+591'),
(22, 22, 'en', 'BA', 'Bosnia and Herzegovina', '+387'),
(23, 23, 'en', 'BW', 'Botswana', '+267'),
(24, 24, 'en', 'BR', 'Brazil', '+55'),
(25, 25, 'en', 'BN', 'Brunei', '+673'),
(26, 26, 'en', 'BG', 'Bulgaria', '+359'),
(27, 27, 'en', 'BF', 'Burkina Faso', '+226'),
(28, 28, 'en', 'BI', 'Burundi', '+257'),
(29, 29, 'en', 'KH', 'Cambodia', '+855'),
(30, 30, 'en', 'CM', 'Cameroon', '+237'),
(31, 31, 'en', 'CA', 'Canada', '+1'),
(32, 32, 'en', 'CV', 'Cape Verde', '+238'),
(33, 33, 'en', 'CF', 'Central African Republic', '+236'),
(34, 34, 'en', 'TD', 'Chad', '+235'),
(35, 35, 'en', 'CL', 'Chile', '+56'),
(36, 36, 'en', 'CN', 'China, People''s Republic of', '+86'),
(37, 37, 'en', 'CO', 'Colombia', '+57'),
(38, 38, 'en', 'KM', 'Comoros', '+269'),
(39, 39, 'en', 'CD', 'Congo, Democratic Republic of the (Congo ? Kinshasa)', '+243'),
(40, 40, 'en', 'CG', 'Congo, Republic of the (Congo ? Brazzaville)', '+242'),
(41, 41, 'en', 'CR', 'Costa Rica', '+506'),
(42, 42, 'en', 'CI', 'Cote d''Ivoire (Ivory Coast)', '+225'),
(43, 43, 'en', 'HR', 'Croatia', '+385'),
(44, 44, 'en', 'CU', 'Cuba', '+53'),
(45, 45, 'en', 'CY', 'Cyprus', '+357'),
(46, 46, 'en', 'CZ', 'Czech Republic', '+420'),
(47, 47, 'en', 'DK', 'Denmark', '+45'),
(48, 48, 'en', 'DJ', 'Djibouti', '+253'),
(49, 49, 'en', 'DM', 'Dominica', '+1-767'),
(50, 50, 'en', 'DO', 'Dominican Republic', '+1-809 and 1-829'),
(51, 51, 'en', 'EC', 'Ecuador', '+593'),
(52, 52, 'en', 'EG', 'Egypt', '+20'),
(53, 53, 'en', 'SV', 'El Salvador', '+503'),
(54, 54, 'en', 'GQ', 'Equatorial Guinea', '+240'),
(55, 55, 'en', 'ER', 'Eritrea', '+291'),
(56, 56, 'en', 'EE', 'Estonia', '+372'),
(57, 57, 'en', 'ET', 'Ethiopia', '+251'),
(58, 58, 'en', 'FJ', 'Fiji', '+679'),
(59, 59, 'en', 'FI', 'Finland', '+358'),
(60, 60, 'en', 'FR', 'France', '+33'),
(61, 61, 'en', 'GA', 'Gabon', '+241'),
(62, 62, 'en', 'GM', 'Gambia, The', '+220'),
(63, 63, 'en', 'GE', 'Georgia', '+995'),
(64, 64, 'en', 'DE', 'Germany', '+49'),
(65, 65, 'en', 'GH', 'Ghana', '+233'),
(66, 66, 'en', 'GR', 'Greece', '+30'),
(67, 67, 'en', 'GD', 'Grenada', '+1-473'),
(68, 68, 'en', 'GT', 'Guatemala', '+502'),
(69, 69, 'en', 'GN', 'Guinea', '+224'),
(70, 70, 'en', 'GW', 'Guinea-Bissau', '+245'),
(71, 71, 'en', 'GY', 'Guyana', '+592'),
(72, 72, 'en', 'HT', 'Haiti', '+509'),
(73, 73, 'en', 'HN', 'Honduras', '+504'),
(74, 74, 'en', 'HU', 'Hungary', '+36'),
(75, 75, 'en', 'IS', 'Iceland', '+354'),
(76, 76, 'en', 'IN', 'India', '+91'),
(77, 77, 'en', 'ID', 'Indonesia', '+62'),
(78, 78, 'en', 'IR', 'Iran', '+98'),
(79, 79, 'en', 'IQ', 'Iraq', '+964'),
(80, 80, 'en', 'IE', 'Ireland', '+353'),
(81, 81, 'en', 'IL', 'Israel', '+972'),
(82, 82, 'en', 'IT', 'Italy', '+39'),
(83, 83, 'en', 'JM', 'Jamaica', '+1-876'),
(84, 84, 'en', 'JP', 'Japan', '+81'),
(85, 85, 'en', 'JO', 'Jordan', '+962'),
(86, 86, 'en', 'KZ', 'Kazakhstan', '+7'),
(87, 87, 'en', 'KE', 'Kenya', '+254'),
(88, 88, 'en', 'KI', 'Kiribati', '+686'),
(89, 89, 'en', 'KP', 'Korea, Democratic People''s Republic of (North Korea)', '+850'),
(90, 90, 'en', 'KR', 'Korea, Republic of  (South Korea)', '+82'),
(91, 91, 'en', 'KW', 'Kuwait', '+965'),
(92, 92, 'en', 'KG', 'Kyrgyzstan', '+996'),
(93, 93, 'en', 'LA', 'Laos', '+856'),
(94, 94, 'en', 'LV', 'Latvia', '+371'),
(95, 95, 'en', 'LB', 'Lebanon', '+961'),
(96, 96, 'en', 'LS', 'Lesotho', '+266'),
(97, 97, 'en', 'LR', 'Liberia', '+231'),
(98, 98, 'en', 'LY', 'Libya', '+218'),
(99, 99, 'en', 'LI', 'Liechtenstein', '+423'),
(100, 100, 'en', 'LT', 'Lithuania', '+370'),
(101, 101, 'en', 'LU', 'Luxembourg', '+352'),
(102, 102, 'en', 'MK', 'Macedonia', '+389'),
(103, 103, 'en', 'MG', 'Madagascar', '+261'),
(104, 104, 'en', 'MW', 'Malawi', '+265'),
(105, 105, 'en', 'MY', 'Malaysia', '+60'),
(106, 106, 'en', 'MV', 'Maldives', '+960'),
(107, 107, 'en', 'ML', 'Mali', '+223'),
(108, 108, 'en', 'MT', 'Malta', '+356'),
(109, 109, 'en', 'MH', 'Marshall Islands', '+692'),
(110, 110, 'en', 'MR', 'Mauritania', '+222'),
(111, 111, 'en', 'MU', 'Mauritius', '+230'),
(112, 112, 'en', 'MX', 'Mexico', '+52'),
(113, 113, 'en', 'FM', 'Micronesia', '+691'),
(114, 114, 'en', 'MD', 'Moldova', '+373'),
(115, 115, 'en', 'MC', 'Monaco', '+377'),
(116, 116, 'en', 'MN', 'Mongolia', '+976'),
(117, 117, 'en', 'ME', 'Montenegro', '+382'),
(118, 118, 'en', 'MA', 'Morocco', '+212'),
(119, 119, 'en', 'MZ', 'Mozambique', '+258'),
(120, 120, 'en', 'MM', 'Myanmar (Burma)', '+95'),
(121, 121, 'en', 'NA', 'Namibia', '+264'),
(122, 122, 'en', 'NR', 'Nauru', '+674'),
(123, 123, 'en', 'NP', 'Nepal', '+977'),
(124, 124, 'en', 'NL', 'Netherlands', '+31'),
(125, 125, 'en', 'NZ', 'New Zealand', '+64'),
(126, 126, 'en', 'NI', 'Nicaragua', '+505'),
(127, 127, 'en', 'NE', 'Niger', '+227'),
(128, 128, 'en', 'NG', 'Nigeria', '+234'),
(129, 129, 'en', 'NO', 'Norway', '+47'),
(130, 130, 'en', 'OM', 'Oman', '+968'),
(131, 131, 'en', 'PK', 'Pakistan', '+92'),
(132, 132, 'en', 'PW', 'Palau', '+680'),
(133, 133, 'en', 'PA', 'Panama', '+507'),
(134, 134, 'en', 'PG', 'Papua New Guinea', '+675'),
(135, 135, 'en', 'PY', 'Paraguay', '+595'),
(136, 136, 'en', 'PE', 'Peru', '+51'),
(137, 137, 'en', 'PH', 'Philippines', '+63'),
(138, 138, 'en', 'PL', 'Poland', '+48'),
(139, 139, 'en', 'PT', 'Portugal', '+351'),
(140, 140, 'en', 'QA', 'Qatar', '+974'),
(141, 141, 'en', 'RO', 'Romania', '+40'),
(142, 142, 'en', 'RU', 'Russia', '+7'),
(143, 143, 'en', 'RW', 'Rwanda', '+250'),
(144, 144, 'en', 'KN', 'Saint Kitts and Nevis', '+1-869'),
(145, 145, 'en', 'LC', 'Saint Lucia', '+1-758'),
(146, 146, 'en', 'VC', 'Saint Vincent and the Grenadines', '+1-784'),
(147, 147, 'en', 'WS', 'Samoa', '+685'),
(148, 148, 'en', 'SM', 'San Marino', '+378'),
(149, 149, 'en', 'ST', 'Sao Tome and Principe', '+239'),
(150, 150, 'en', 'SA', 'Saudi Arabia', '+966'),
(151, 151, 'en', 'SN', 'Senegal', '+221'),
(152, 152, 'en', 'RS', 'Serbia', '+381'),
(153, 153, 'en', 'SC', 'Seychelles', '+248'),
(154, 154, 'en', 'SL', 'Sierra Leone', '+232'),
(155, 155, 'en', 'SG', 'Singapore', '+65'),
(156, 156, 'en', 'SK', 'Slovakia', '+421'),
(157, 157, 'en', 'SI', 'Slovenia', '+386'),
(158, 158, 'en', 'SB', 'Solomon Islands', '+677'),
(159, 159, 'en', 'SO', 'Somalia', '+252'),
(160, 160, 'en', 'ZA', 'South Africa', '+27'),
(161, 161, 'en', 'ES', 'Spain', '+34'),
(162, 162, 'en', 'LK', 'Sri Lanka', '+94'),
(163, 163, 'en', 'SD', 'Sudan', '+249'),
(164, 164, 'en', 'SR', 'Suriname', '+597'),
(165, 165, 'en', 'SZ', 'Swaziland', '+268'),
(166, 166, 'en', 'SE', 'Sweden', '+46'),
(167, 167, 'en', 'CH', 'Switzerland', '+41'),
(168, 168, 'en', 'SY', 'Syria', '+963'),
(169, 169, 'en', 'TJ', 'Tajikistan', '+992'),
(170, 170, 'en', 'TZ', 'Tanzania', '+255'),
(171, 171, 'en', 'TH', 'Thailand', '+66'),
(172, 172, 'en', 'TL', 'Timor-Leste (East Timor)', '+670'),
(173, 173, 'en', 'TG', 'Togo', '+228'),
(174, 174, 'en', 'TO', 'Tonga', '+676'),
(175, 175, 'en', 'TT', 'Trinidad and Tobago', '+1-868'),
(176, 176, 'en', 'TN', 'Tunisia', '+216'),
(177, 177, 'en', 'TR', 'Turkey', '+90'),
(178, 178, 'en', 'TM', 'Turkmenistan', '+993'),
(179, 179, 'en', 'TV', 'Tuvalu', '+688'),
(180, 180, 'en', 'UG', 'Uganda', '+256'),
(181, 181, 'en', 'UA', 'Ukraine', '+380'),
(182, 182, 'en', 'AE', 'United Arab Emirates', '+971'),
(183, 183, 'en', 'GB', 'United Kingdom', '+44'),
(184, 184, 'en', 'US', 'United States', '+1'),
(185, 185, 'en', 'UY', 'Uruguay', '+598'),
(186, 186, 'en', 'UZ', 'Uzbekistan', '+998'),
(187, 187, 'en', 'VU', 'Vanuatu', '+678'),
(188, 188, 'en', 'VA', 'Vatican City', '+379'),
(189, 189, 'en', 'VE', 'Venezuela', '+58'),
(190, 190, 'en', 'VN', 'Viet Nam', '+84'),
(191, 191, 'en', 'YE', 'Yemen', '+967'),
(192, 192, 'en', 'ZM', 'Zambia', '+260'),
(193, 193, 'en', 'ZW', 'Zimbabwe', '+263'),
(194, 194, 'en', 'GE', 'Abkhazia', '+995'),
(195, 195, 'en', 'TW', 'China, Republic of (Taiwan)', '+886'),
(196, 196, 'en', 'AZ', 'Nagorno-Karabakh', '+374-97'),
(197, 197, 'en', 'CY', 'Northern Cyprus', '+90-392'),
(198, 198, 'en', 'MD', 'Pridnestrovie (Transnistria)', '+373-533'),
(199, 199, 'en', 'SO', 'Somaliland', '+252'),
(200, 200, 'en', 'GE', 'South Ossetia', '+995'),
(201, 201, 'en', 'AU', 'Ashmore and Cartier Islands', ''),
(202, 202, 'en', 'CX', 'Christmas Island', '+61'),
(203, 203, 'en', 'CC', 'Cocos (Keeling) Islands', '+61'),
(204, 204, 'en', 'AU', 'Coral Sea Islands', ''),
(205, 205, 'en', 'HM', 'Heard Island and McDonald Islands', ''),
(206, 206, 'en', 'NF', 'Norfolk Island', '+672'),
(207, 207, 'en', 'NC', 'New Caledonia', '+687'),
(208, 208, 'en', 'PF', 'French Polynesia', '+689'),
(209, 209, 'en', 'YT', 'Mayotte', '+269'),
(210, 210, 'en', 'PM', 'Saint Pierre and Miquelon', '+508'),
(211, 211, 'en', 'WF', 'Wallis and Futuna', '+681'),
(212, 212, 'en', 'TF', 'French Southern and Antarctic Lands', ''),
(213, 213, 'en', 'PF', 'Clipperton Island', ''),
(214, 214, 'en', '', 'French Scattered Islands in the Indian Ocean', ''),
(215, 215, 'en', 'BV', 'Bouvet Island', ''),
(216, 216, 'en', 'CK', 'Cook Islands', '+682'),
(217, 217, 'en', 'NU', 'Niue', '+683'),
(218, 218, 'en', 'TK', 'Tokelau', '+690'),
(219, 219, 'en', 'GG', 'Guernsey', '+44'),
(220, 220, 'en', 'IM', 'Isle of Man', '+44'),
(221, 221, 'en', 'JE', 'Jersey', '+44'),
(222, 222, 'en', 'AI', 'Anguilla', '+1-264'),
(223, 223, 'en', 'BM', 'Bermuda', '+1-441'),
(224, 224, 'en', 'IO', 'British Indian Ocean Territory', '+246'),
(225, 225, 'en', '', 'British Sovereign Base Areas', '+357'),
(226, 226, 'en', 'VG', 'British Virgin Islands', '+1-284'),
(227, 227, 'en', 'KY', 'Cayman Islands', '+1-345'),
(228, 228, 'en', 'FK', 'Falkland Islands (Islas Malvinas)', '+500'),
(229, 229, 'en', 'GI', 'Gibraltar', '+350'),
(230, 230, 'en', 'MS', 'Montserrat', '+1-664'),
(231, 231, 'en', 'PN', 'Pitcairn Islands', ''),
(232, 232, 'en', 'SH', 'Saint Helena', '+290'),
(233, 233, 'en', 'GS', 'South Georgia and the South Sandwich Islands', ''),
(234, 234, 'en', 'TC', 'Turks and Caicos Islands', '+1-649'),
(235, 235, 'en', 'MP', 'Northern Mariana Islands', '+1-670'),
(236, 236, 'en', 'PR', 'Puerto Rico', '+1-787 and 1-939'),
(237, 237, 'en', 'AS', 'American Samoa', '+1-684'),
(238, 238, 'en', 'UM', 'Baker Island', ''),
(239, 239, 'en', 'GU', 'Guam', '+1-671'),
(240, 240, 'en', 'UM', 'Howland Island', ''),
(241, 241, 'en', 'UM', 'Jarvis Island', ''),
(242, 242, 'en', 'UM', 'Johnston Atoll', ''),
(243, 243, 'en', 'UM', 'Kingman Reef', ''),
(244, 244, 'en', 'UM', 'Midway Islands', ''),
(245, 245, 'en', 'UM', 'Navassa Island', ''),
(246, 246, 'en', 'UM', 'Palmyra Atoll', ''),
(247, 247, 'en', 'VI', 'U.S. Virgin Islands', '+1-340'),
(248, 248, 'en', 'UM', 'Wake Island', ''),
(249, 249, 'en', 'HK', 'Hong Kong', '+852'),
(250, 250, 'en', 'MO', 'Macau', '+853'),
(251, 251, 'en', 'FO', 'Faroe Islands', '+298'),
(252, 252, 'en', 'GL', 'Greenland', '+299'),
(253, 253, 'en', 'GF', 'French Guiana', '+594'),
(254, 254, 'en', 'GP', 'Guadeloupe', '+590'),
(255, 255, 'en', 'MQ', 'Martinique', '+596'),
(256, 256, 'en', 'RE', 'Reunion', '+262'),
(257, 257, 'en', 'AX', 'Aland', '+358-18'),
(258, 258, 'en', 'AW', 'Aruba', '+297'),
(259, 259, 'en', 'AN', 'Netherlands Antilles', '+599'),
(260, 260, 'en', 'SJ', 'Svalbard', '+47'),
(261, 261, 'en', 'AC', 'Ascension', '+247'),
(262, 262, 'en', 'TA', 'Tristan da Cunha', ''),
(263, 263, 'en', 'AQ', 'Antarctica', ''),
(264, 264, 'en', 'CS', 'Kosovo', '+381'),
(265, 265, 'en', 'PS', 'Palestinian Territories (Gaza Strip and West Bank)', '+970'),
(266, 266, 'en', 'EH', 'Western Sahara', '+212'),
(267, 267, 'en', 'AQ', 'Australian Antarctic Territory', ''),
(268, 268, 'en', 'AQ', 'Ross Dependency', ''),
(269, 269, 'en', 'AQ', 'Peter I Island', ''),
(270, 270, 'en', 'AQ', 'Queen Maud Land', ''),
(271, 271, 'en', 'AQ', 'British Antarctic Territory', ''),
(272, 9, 'de', 'AU', 'Australien', NULL),
(273, 24, 'de', 'BR', 'Brasilien', NULL),
(274, 31, 'de', 'CA', 'Kanada', NULL),
(276, 64, 'de', 'DE', 'Deutschland', NULL),
(277, 74, 'de', 'HU', 'Ungarn', NULL),
(278, 76, 'de', 'IN', 'Indien', NULL),
(279, 82, 'de', 'IT', 'Italien', NULL),
(280, 124, 'de', 'NL', 'Holland', NULL),
(281, 125, 'de', 'NZ', 'Neu Seeland', NULL),
(282, 138, 'de', 'PL', 'Polen', NULL),
(283, 142, 'de', 'RU', 'Russland', NULL),
(284, 160, 'de', 'ZA', 'SÃƒÂ¼d Afrika', NULL),
(285, 161, 'de', 'ES', 'Spanien', NULL),
(286, 167, 'de', 'CH', 'Schweiz', NULL),
(287, 184, 'de', 'US', 'USA', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `countries` int(11) NOT NULL,
  `url` varchar(400) NOT NULL,
  `desc` text NOT NULL,
  `auctionOrFixed` tinyint(4) NOT NULL,
  `startPrice` decimal(10,0) NOT NULL,
  `BuyItNowprice` decimal(10,0) NOT NULL,
  `endPrice` decimal(10,0) NOT NULL,
  `Setting` varchar(300) NOT NULL,
  `SaleType` varchar(300) NOT NULL,
  `PropertyType` varchar(300) NOT NULL,
  `NumerOfBathrooms` int(11) NOT NULL,
  `NumberofBedrooms` varchar(300) NOT NULL,
  `ZipPostalCode` int(11) NOT NULL,
  `StateProvince` varchar(300) NOT NULL,
  `PropertyAddress` varchar(300) NOT NULL,
  `SellerStateofResidence` varchar(300) NOT NULL,
  `mileage` varchar(300) NOT NULL,
  `ExteriorColor` varchar(300) NOT NULL,
  `interiorcolor` varchar(300) NOT NULL,
  `upc` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `brand` varchar(300) NOT NULL,
  `model` varchar(300) NOT NULL,
  `pic` varchar(300) NOT NULL,
  `vin` varchar(300) NOT NULL,
  `make` varchar(300) NOT NULL,
  `releaseYear` varchar(300) NOT NULL,
  `engine` varchar(300) NOT NULL,
  `driveType` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `subtitle`, `condition`, `countries`, `url`, `desc`, `auctionOrFixed`, `startPrice`, `BuyItNowprice`, `endPrice`, `Setting`, `SaleType`, `PropertyType`, `NumerOfBathrooms`, `NumberofBedrooms`, `ZipPostalCode`, `StateProvince`, `PropertyAddress`, `SellerStateofResidence`, `mileage`, `ExteriorColor`, `interiorcolor`, `upc`, `type`, `brand`, `model`, `pic`, `vin`, `make`, `releaseYear`, `engine`, `driveType`) VALUES
(1, 'ear rings', 'something', 'new', 5, 'www.google.com', 'sdfsd', 0, 0, 0, 0, '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ear rings', 'something', 'new', 5, 'www.google.com', 'sdfsd', 0, 500, 0, 900, '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'ear rings', 'something', 'new', 5, 'www.google.com', 'sdfsd', 0, 500, 0, 900, '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'somthing', 'somthing', 'new', 0, '', '', 1, 500, 123, 900, '', '', '', 0, '', 0, '', '', '', 'somthing', 'somthing', 'somthing', '', '', '', 'somthing', '', '321231', 'somthing', 'somthing', 'somthing', 'somthing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bids`
--

CREATE TABLE IF NOT EXISTS `tbl_bids` (
  `bids_id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `bid_date` datetime NOT NULL,
  `message` text NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `upfront` varchar(50) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `estimate_deliverr` varchar(150) NOT NULL,
  PRIMARY KEY (`bids_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `streetAdd` varchar(255) NOT NULL,
  `zip` bigint(20) NOT NULL,
  `citystate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `createBids` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `countries` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `f_name`, `l_name`, `streetAdd`, `zip`, `citystate`, `email`, `phone`, `createBids`, `password`, `countries`, `status`) VALUES
(20, 'muhammad', 'saqib', 'dsfdfsf', 2342, 'atdsd', 'rooott@gmail.com', '923459549921', 'quic', 'quick', '1', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
