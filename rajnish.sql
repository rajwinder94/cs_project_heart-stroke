-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2017 at 04:55 AM
-- Server version: 5.1.33-community
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rajnish`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `area` varchar(10) NOT NULL,
  `points` int(50) NOT NULL,
  `lattitude` decimal(50,6) NOT NULL,
  `longitude` decimal(50,6) NOT NULL,
  `zone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area`, `points`, `lattitude`, `longitude`, `zone`) VALUES
('h', 1, '50.654763', '-120.347642', 1),
('h', 2, '50.654192', '-120.348098', 1),
('h', 3, '50.654311', '-120.349385', 1),
('h', 4, '50.654137', '-120.350233', 1),
('h', 5, '50.653658', '-120.350705', 1),
('h', 6, '50.653988', '-120.351692', 1),
('h', 7, '50.654668', '-120.351113', 1),
('h', 8, '50.654970', '-120.349815', 1),
('a', 1, '50.651205', '-120.338373', 1),
('a', 2, '50.651850', '-120.335686', 1),
('a', 3, '50.650263', '-120.335596', 1),
('a', 4, '50.649481', '-120.337613', 1),
('b', 1, '50.648597', '-120.338407', 1),
('b', 2, '50.648648', '-120.337053', 1),
('b', 3, '50.649131', '-120.336328', 1),
('b', 4, '50.648712', '-120.335808', 1),
('b', 5, '50.648199', '-120.336404', 1),
('b', 6, '50.647787', '-120.336430', 1),
('b', 7, '50.647583', '-120.337310', 1),
('b', 8, '50.648603', '-120.338300', 1),
('c', 1, '50.648263', '-120.338804', 1),
('c', 2, '50.648010', '-120.338450', 1),
('c', 3, '50.647882', '-120.339233', 1),
('c', 4, '50.647508', '-120.339155', 1),
('c', 5, '50.647644', '-120.338308', 1),
('c', 6, '50.646845', '-120.335931', 1),
('c', 7, '50.647028', '-120.335486', 1),
('c', 8, '50.647321', '-120.336157', 1),
('d', 1, '50.650063', '-120.339220', 1),
('d', 2, '50.650525', '-120.339751', 1),
('d', 3, '50.650814', '-120.339510', 1),
('d', 4, '50.650835', '-120.338925', 1),
('d', 5, '50.649804', '-120.338201', 1),
('d', 6, '50.648814', '-120.338973', 1),
('d', 7, '50.648892', '-120.339113', 1),
('d', 8, '50.648930', '-120.339526', 1),
('d', 9, '50.649270', '-120.339778', 1),
('d', 10, '50.649665', '-120.340062', 1),
('e', 1, '50.651297', '-120.342280', 1),
('e', 2, '50.651107', '-120.344351', 1),
('e', 3, '50.649590', '-120.340285', 1),
('e', 4, '50.649984', '-120.340081', 1),
('e', 5, '50.649971', '-120.339459', 1),
('e', 6, '50.650229', '-120.339544', 1),
('e', 7, '50.650324', '-120.340188', 1),
('e', 8, '50.651168', '-120.339834', 1),
('e', 9, '50.651195', '-120.342323', 1),
('f', 1, '50.652318', '-120.347551', 1),
('f', 2, '50.651501', '-120.344525', 1),
('f', 3, '50.651491', '-120.344434', 1),
('f', 4, '50.651855', '-120.344332', 1),
('f', 5, '50.652120', '-120.344938', 1),
('f', 6, '50.652947', '-120.346119', 1),
('g', 1, '50.651899', '-120.344375', 1),
('g', 2, '50.652049', '-120.344225', 1),
('g', 3, '50.653249', '-120.345614', 1),
('g', 4, '50.653494', '-120.345099', 1),
('g', 5, '50.653957', '-120.346027', 1),
('g', 6, '50.654188', '-120.346558', 1),
('g', 7, '50.654538', '-120.347406', 1),
('g', 8, '50.654151', '-120.348087', 1),
('g', 9, '50.653559', '-120.347470', 1),
('g', 10, '50.652937', '-120.345984', 1),
('g', 11, '50.652321', '-120.345351', 1),
('g', 12, '50.652937', '-120.345984', 1);

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=170 ;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(1, 'Frankie Johnnie & Luigo Too', '939 W El Camino Real, Mountain View, CA', 37.386337, -122.085823),
(2, 'Amici''s East Coast Pizzeria', '790 Castro St, Mountain View, CA', 37.387138, -122.083237),
(3, 'Kapp''s Pizza Bar & Grill', '191 Castro St, Mountain View, CA', 37.393887, -122.078918),
(4, 'Round Table Pizza: Mountain View', '570 N Shoreline Blvd, Mountain View, CA', 37.402653, -122.079353),
(5, 'Tony & Alba''s Pizza & Pasta', '619 Escuela Ave, Mountain View, CA', 37.394012, -122.095528),
(6, 'Oregano''s Wood-Fired Pizza', '4546 El Camino Real, Los Altos, CA', 37.401726, -122.114647),
(7, 'Round Table Pizza: Sunnyvale-Mary-Central Expy', '415 N Mary Ave, Sunnyvale, CA', 37.390038, -122.042030),
(8, 'Giordano''s', '730 N Rush St, Chicago, IL', 41.895729, -87.625412),
(9, 'Filippi''s Pizza Grotto', '1747 India St, San Diego, CA', 32.723831, -117.168327),
(10, 'Lou Malnati''s Pizzeria', '439 N Wells St, Chicago, IL', 41.890347, -87.633926),
(11, 'Sammy''s Woodfired Pizza', '770 4th Ave, San Diego, CA', 32.713383, -117.161179),
(12, 'Casa Bianca Pizza Pie', '1650 Colorado Blvd, Los Angeles, CA', 34.139160, -118.204605),
(13, 'Parkway Grill', '510 S Arroyo Pkwy, Pasadena, CA', 34.137005, -118.147301),
(14, 'Pizzeria Paradiso', '2029 P St NW, Washington, DC', 38.909649, -77.045898),
(15, 'Star Pizza', '2111 Norfolk St, Houston, TX', 29.732452, -95.411057),
(16, 'Tutta Bella Neapolitan Pizzera', '4918 Rainier Ave S, Seattle, WA', 47.557705, -122.284988),
(17, 'Touche Pasta Pizza Pool', '1425 NW Glisan St, Portland, OR', 45.526466, -122.685577),
(18, 'Piecora''s New York Pizza', '1401 E Madison St, Seattle, WA', 47.614006, -122.313988),
(19, 'Pagliacci Pizza', '550 Queen Anne Ave N, Seattle, WA', 47.623943, -122.356720),
(20, 'Zeeks Pizza - Phinney Ridge', '6000 Phinney Ave N, Seattle, WA', 47.672668, -122.354095),
(21, 'Old Town Pizza', '226 NW Davis St, Portland, OR', 45.524555, -122.672684),
(22, 'Zeeks Pizza - Belltown', '419 Denny Way, Seattle, WA', 47.618313, -122.348000),
(23, 'Escape From New York Pizza', '622 NW 23rd Ave, Portland, OR', 45.527103, -122.698509),
(24, 'Big Fred''s Pizza Garden', '1101 S 119th St, Omaha, NE', 41.248661, -96.098763),
(25, 'Old Chicago', '1111 Harney St, Omaha, NE', 41.256519, -95.930679),
(26, 'Sgt Peffer''s Cafe Italian', '1501 N Saddle Creek Rd, Omaha, NE', 41.273083, -95.987816),
(27, 'Mama''s Pizza', '715 N Saddle Creek Rd, Omaha, NE', 41.265884, -95.980682),
(28, 'Zio''s New York Style Pizzeria', '1213 Howard St, Omaha, NE', 41.255451, -95.932022),
(29, 'Boston''s Restaurant & Sports', '620 E Disk Dr, Rapid City, SD', 44.106937, -103.205223),
(30, 'Zio''s New York Style Pizzeria', '7834 W Dodge Rd, Omaha, NE', 41.263248, -96.056396),
(31, 'La Casa Pizzaria', '4432 Leavenworth St, Omaha, NE', 41.252399, -95.979576),
(32, 'Giordano''s', '730 N Rush St, Chicago, IL', 41.895729, -87.625412),
(33, 'Lou Malnati''s Pizzeria', '439 N Wells St, Chicago, IL', 41.890347, -87.633926),
(34, 'Piece Restaurant', '1927 W North Ave, Chicago, IL', 41.910492, -87.676125),
(35, 'Connie''s Pizza Inc', '2373 S Archer Ave, Chicago, IL', 41.849213, -87.641678),
(36, 'Exchequer Restaurant', '226 S Wabash Ave, Chicago, IL', 41.879189, -87.626076),
(37, 'Coco''s By The Falls', '5339 Murray Street, Niagara Falls, Ontario', 43.083553, -79.082703),
(38, 'Pompei', '1531 W Taylor St, Chicago, IL', 41.869301, -87.664780),
(39, 'Lynn''s Paradise Cafe', '984 Barret Ave, Louisville, KY', 38.236931, -85.728539),
(40, 'Otto Restaurant Enoteca Pizza', '1 5th Ave, New York, NY', 40.732162, -73.996323),
(41, 'Grimaldi''s', '19 Old Fulton St, Brooklyn, NY', 40.702515, -73.993736),
(42, 'Lombardi''s', '32 Spring St, New York, NY', 40.721676, -73.995598),
(43, 'John''s Pizzeria', '278 Bleecker St, New York, NY', 40.731705, -74.003273),
(44, 'John''s Pizzeria', '260 W 44th St, New York, NY', 40.758072, -73.987740),
(45, 'Burger Joint', '2175 Broadway, New York, NY', 40.782398, -73.981003),
(46, 'Frank Pepe Pizzeria Napoletana', '157 Wooster St, New Haven, CT', 41.302803, -72.917046),
(47, 'Adrianne''s Pizza Bar', '54 Stone St, New York, NY', 40.704479, -74.010139),
(48, 'Pizzeria Regina: Regina Pizza', '11 1/2 Thacher St, Boston, MA', 42.365337, -71.056831),
(49, 'Upper Crust', '20 Charles St, Boston, MA', 42.356606, -71.069679),
(50, 'Bertucci''s Brick Oven Rstrnt', '4 Brookline Pl, Brookline, MA', 42.331917, -71.115311),
(51, 'Aquitaine', '569 Tremont St, Boston, MA', 42.343636, -71.072266),
(52, 'Bertucci''s Brick Oven Rstrnt', '43 Stanhope St, Boston, MA', 42.348297, -71.073250),
(53, 'Upper Crust', '286 Harvard St, Brookline, MA', 42.342857, -71.122314),
(54, 'Bertucci''s Brick Oven Rstrnt', '799 Main St, Cambridge, MA', 42.363258, -71.097214),
(55, 'Bertucci''s Brick Oven Rstrnt', '22 Merchants Row, Boston, MA', 42.359146, -71.055473),
(56, 'Vinnie Van Go-Go''s', '317 W Bryan St, Savannah, GA', 32.081154, -81.094994),
(57, 'Domino''s Pizza: Myrtle Beach', '1706 S Kings Hwy # A, Myrtle Beach, SC', 33.674881, -78.905144),
(58, 'East of Chicago Pizza Company', '3901 North Kings Highway Suite 1, Myrtle Beach, SC', 33.716099, -78.855583),
(59, 'Villa Tronco Italian Rstrnt', '1213 Blanding St, Columbia, SC', 34.008049, -81.036316),
(60, 'Mellow Mushroom Pizza Bakers', '11 W Liberty St, Savannah, GA', 32.074673, -81.093697),
(61, 'Andolinis Pizza', '82 Wentworth St, Charleston, SC', 32.782330, -79.934235),
(62, 'Mellow Mushroom Pizza Bakers', '259 E Broad St, Athens, GA', 33.957802, -83.374657),
(63, 'Bucks Pizza of Edisto Beach Inc', '114 Jungle Rd, Edisto Island, SC', 32.503971, -80.297951),
(64, 'Anthony''s Coal Fired Pizza', '2203 S Federal Hwy, Fort Lauderdale, FL', 26.094671, -80.136688),
(65, 'Giordano''s', '12151 S Apopka Vineland Rd, Orlando, FL', 28.389366, -81.506226),
(66, 'Pizza Rustica', '863 Washington Ave, Miami Beach, FL', 25.779058, -80.133110),
(67, 'Mama Jennie''s Italian Restaurant', '11720 Ne 2nd Ave, North Miami, FL', 25.882782, -80.194290),
(68, 'Anthony''s Coal Fired Pizza', '17901 Biscayne Blvd, Aventura, FL', 25.941116, -80.148827),
(69, 'Anthony''s Coal Fired Pizza', '4527 Weston Rd, Weston, FL', 26.065395, -80.362442),
(70, 'Mario the Baker Pizza & Italian Restaurant', '13695 W Dixie Hwy, North Miami, FL', 25.929741, -80.156090),
(71, 'Big Cheese Pizza', '8080 SW 67th Ave, Miami, FL', 25.696026, -80.301109),
(72, 'Ingleside Village Pizza', '2396 Ingleside Ave, Macon, GA', 32.853760, -83.657410),
(73, 'Ciao Bella Pizza Da Guglielmo', '29 Highway 98 E, Destin, FL', 30.395555, -86.512093),
(74, 'Papa John''s Pizza', '810 Russell Pkwy, Warner Robins, GA', 32.593910, -83.637077),
(75, 'Papa John''s Pizza: East Central Montgomery', '2525 Madison Ave, Montgomery, AL', 32.381123, -86.273033),
(76, 'Cici''s Pizza', '6268 Atlanta Hwy, Montgomery, AL', 32.382206, -86.190674),
(77, 'Papa John''s Pizza', '1210 E Jackson St, Thomasville, GA', 30.849129, -83.963425),
(78, 'Papa John''s Pizza', '711 N Westover Blvd # G, Albany, GA', 31.613970, -84.223083),
(79, 'Mellow Mushroom Pizza Bakers', '6100 Veterans Pkwy, Columbus, GA', 32.532078, -84.955894),
(80, 'Star Pizza', '2111 Norfolk St, Houston, TX', 29.732452, -95.411057),
(81, 'Star Pizza II', '77 Harvard St, Houston, TX', 29.770752, -95.396042),
(82, 'Brothers Pizzeria', '1029 Highway 6 N # 100, Houston, TX', 29.768337, -95.643593),
(83, '11th Street Cafe Inc', '748 E 11th St, Houston, TX', 29.790794, -95.388924),
(84, 'California Pizza Kitchen', '1705 Post Oak Blvd # A, Houston, TX', 29.750172, -95.461197),
(85, 'Collina''s Italian Cafe', '3835 Richmond Ave, Houston, TX', 29.732620, -95.438965),
(86, 'Barry''s Pizza & Italian Diner', '6003 Richmond Ave, Houston, TX', 29.731430, -95.484383),
(87, 'Mario''s Seawall Italian Restaurant', '628 Seawall Blvd, Galveston, TX', 29.304543, -94.772598),
(88, 'Campisi''s Egyptian Restaurant', '5610 E Mockingbird Ln, Dallas, TX', 32.836510, -96.771782),
(89, 'Fat Joe''s Pizza Pasta & Bar', '4721 W Park Blvd # 101, Plano, TX', 33.027054, -96.788910),
(90, 'Saccone''s Pizza', '13812 N Highway 183, Austin, TX', 29.569508, -97.964661),
(91, 'Fireside Pies', '2820 N Henderson Ave, Dallas, TX', 32.819763, -96.784149),
(92, 'Romeo''s', '1500 Barton Springs Rd, Austin, TX', 30.261526, -97.760025),
(93, 'Sandella''s Cafe', '5910 N Macarthur Blvd, Irving, TX', 32.892002, -96.961189),
(94, 'Mangia Chicago Stuffed Pizza', '3500 Guadalupe St, Austin, TX', 30.301542, -97.739113),
(95, 'Frank & Angie''s', '508 West Ave, Austin, TX', 30.269394, -97.750893),
(96, 'Filippi''s Pizza Grotto', '1747 India St, San Diego, CA', 32.723831, -117.168327),
(97, 'Pizzeria Bianco', '623 E Adams St, Phoenix, AZ', 33.449375, -112.065521),
(98, 'Sammy''s Woodfired Pizza', '770 4th Ave, San Diego, CA', 32.713383, -117.161179),
(99, 'Casa Bianca Pizza Pie', '1650 Colorado Blvd, Los Angeles, CA', 34.139160, -118.204605),
(100, 'Parkway Grill', '510 S Arroyo Pkwy, Pasadena, CA', 34.137005, -118.147301),
(101, 'California Pizza Kitchen', '330 S Hope St, Los Angeles, CA', 34.053329, -118.252686),
(102, 'B J''s Pizza & Grill', '200 Main St # 101, Huntington Beach, CA', 33.658058, -118.001099),
(103, 'B J''s Restaurant & Brewhouse', '280 S Coast Hwy, Laguna Beach, CA', 33.542091, -117.783516),
(104, 'Giuseppe''s Depot Restaurant', '10 S Sierra Madre St, Colorado Springs, CO', 38.834549, -104.828300),
(105, 'Beau Jo''s Pizza', '2710 S Colorado Blvd, Denver, CO', 39.667343, -104.940704),
(106, 'Pasquini''s Pizzeria', '1310 S Broadway, Denver, CO', 39.692825, -104.987465),
(107, 'Fargos Pizza Co', '2910 E Platte Ave, Colorado Springs, CO', 38.839848, -104.774422),
(108, 'Old Chicago', '1415 Market St, Denver, CO', 39.748177, -105.000504),
(109, 'Sink', '1165 13th St, Boulder, CO', 40.008209, -105.276237),
(110, 'Ligori''s Pizza & Pasta', '4421 Harrison Blvd, Ogden, UT', 41.182732, -111.949196),
(111, 'Old Chicago', '1102 Pearl St, Boulder, CO', 40.017590, -105.280991),
(112, 'Boston''s Restaurant & Sports', '620 E Disk Dr, Rapid City, SD', 44.106937, -103.205223),
(113, 'Chuck E Cheese''s Pizza', '100 24th St W # B, Billings, MT', 45.771355, -108.576286),
(114, 'Space Aliens Grill & Bar', '1304 E Century Ave, Bismarck, ND', 46.838081, -100.771736),
(115, '2nd Street Bistro', '123 North 2nd Street, Livingston, MT', 45.661015, -110.561424),
(116, 'Domino''s Pizza', '1524 S Broadway # 1, Minot, ND', 48.219658, -101.296036),
(117, 'American Classic Pizzeria', '1744 Grand Ave, Billings, MT', 45.784119, -108.560204),
(118, 'Godfather''s Pizza', '905 Main St, Billings, MT', 45.815079, -108.470757),
(119, 'Papa John''s Pizza', '605 Main St, Billings, MT', 45.810223, -108.472122),
(120, 'Aardvark Pizza & Sub', '304A Caribou St, Banff, AB', 51.176487, -115.570747),
(121, 'Jasper Pizza Place', '402 Connaught Dr, Jasper, AB', 52.879086, -118.079315),
(122, 'Odyssey Pizza & Steak House', '3-3814 Bow Trail SW, Calgary, AB', 51.045235, -114.141251),
(123, 'Basil''s Pizza', '2118 33 Avenue SW, Calgary, AB', 51.023979, -114.109901),
(124, 'Castle Pizza & Donair', '7724 Elbow Drive SW, Calgary, AB', 50.984497, -114.083153),
(125, 'Santa Lucia Italian Restaurant', '714 8 St, Canmore, AB', 51.089195, -115.358734),
(126, 'Tops Pizza & Steak House No 3', '7-5602 4 Street NW, Calgary, AB', 51.101204, -114.071457),
(127, 'Evvia Restaurant', '837 Main St, Canmore, AB', 51.089176, -115.361771),
(128, 'D&#39;Bronx', '3904 Bell St, Kansas City, MO', 39.057182, -94.606102),
(129, 'Cicero''s Restaurant & Entrtnmt', '6691 Delmar Blvd, St Louis, MO', 38.656307, -90.308441),
(130, 'Hideaway Pizza', '6616 N Western Ave, Oklahoma City, OK', 35.539116, -97.529762),
(131, 'Fortel''s Pizza Den', '7932 Mackenzie Rd, St Louis, MO', 38.566441, -90.320793),
(132, 'Hideaway Pizza', '7877 E 51st St, Tulsa, OK', 36.089897, -95.889244),
(133, 'Farotto''s Catering', '9525 Manchester Rd, Webster Groves, MO', 38.609325, -90.364433),
(134, 'California Pizza Kitchen', '1493 Saint Louis Galleria, St Louis, MO', 38.633614, -90.345947),
(135, 'D''Bronx', '2450 Grand Blvd # 124, Kansas City, MO', 39.082722, -94.581779),
(136, 'Giuseppe''s Depot Restaurant', '10 S Sierra Madre St, Colorado Springs, CO', 38.834549, -104.828300),
(137, 'Beau Jo''s Pizza', '2710 S Colorado Blvd, Denver, CO', 39.667343, -104.940704),
(138, 'Pasquini''s Pizzeria', '1310 S Broadway, Denver, CO', 39.692825, -104.987465),
(139, 'Fargos Pizza Co', '2910 E Platte Ave, Colorado Springs, CO', 38.839848, -104.774422),
(140, 'Old Chicago', '1415 Market St, Denver, CO', 39.748177, -105.000504),
(141, 'Sink', '1165 13th St, Boulder, CO', 40.008209, -105.276237),
(142, 'Old Chicago', '1102 Pearl St, Boulder, CO', 40.017590, -105.280991),
(143, 'Gondolier', '1738 Pearl St, Boulder, CO', 40.019344, -105.272949),
(144, 'Ligori''s Pizza & Pasta', '4421 Harrison Blvd, Ogden, UT', 41.182732, -111.949196),
(145, 'Brick Oven Restaurant', '111 E 800 N, Provo, UT', 40.244492, -111.656319),
(146, 'Zachary''s Chicago Pizza', '5801 College Ave, Oakland, CA', 37.846180, -122.251953),
(147, 'Zachary''s Chicago Pizza', '1853 Solano Ave, Berkeley, CA', 37.891407, -122.278427),
(148, 'Cheese Board Pizza', '1512 Shattuck Ave, Berkeley, CA', 37.879974, -122.269272),
(149, 'Goat Hill Pizza', '300 Connecticut St, San Francisco, CA', 37.762432, -122.397614),
(150, 'Tommaso Ristorante Italiano', '1042 Kearny St, San Francisco, CA', 37.797386, -122.405373),
(151, 'Little Star Pizza LLC', '846 Divisadero St, San Francisco, CA', 37.777519, -122.438217),
(152, 'Pauline''s Pizza', '260 Valencia, San Francisco, CA', 37.768726, -122.422241),
(153, 'Villa Romana Pizzeria & Rstrnt', '731 Irving St, San Francisco, CA', 37.764072, -122.465584),
(154, 'Amici''s East Coast Pizzeria', '69 E 3rd Ave, San Mateo, CA', 37.563896, -122.324722),
(155, 'Amici''s East Coast Pizzeria', '226 Redwood Shores Pkwy, Redwood City, CA', 37.520515, -122.252258),
(156, 'North Beach Pizza', '240 E 3rd Ave, San Mateo, CA', 37.565327, -122.322639),
(157, 'Patxi''s Chicago Pizza', '441 Emerson St, Palo Alto, CA', 37.445148, -122.163551),
(158, 'Pizz''a Chicago', '4115 El Camino Real, Palo Alto, CA', 37.414104, -122.126221),
(159, 'California Pizza Kitchen', '531 Cowper St, Palo Alto, CA', 37.448074, -122.158813),
(160, 'Windy City Pizza', '35 Bovet Rd, San Mateo, CA', 37.551563, -122.314522),
(161, 'Applewood Pizza 2 Go', '1001 El Camino Real, Menlo Park, CA', 37.452965, -122.181725),
(162, 'Pizza Antica', '334 Santana Row # 1065, San Jose, CA', 37.321793, -121.947739),
(163, 'Pizz''a Chicago', '155 W San Fernando St, San Jose, CA', 37.333279, -121.891678),
(164, 'House of Pizza', '527 S Almaden Ave, San Jose, CA', 37.326351, -121.888168),
(165, 'Amici''s East Coast Pizzeria', '225 W Santa Clara St, San Jose, CA', 37.334702, -121.894043),
(166, 'Fiorillo''s Restaurant', '638 El Camino Real, Santa Clara, CA', 37.354603, -121.942574),
(167, 'Tony & Alba''s Pizza & Pasta', '3137 Stevens Creek Blvd, San Jose, CA', 37.323296, -121.951645),
(168, 'Giorgio''s', '1445 Foxworthy Ave, San Jose, CA', 37.274647, -121.892891),
(169, 'Round Table Pizza', '4302 Moorpark Ave, San Jose, CA', 37.315903, -121.977928);

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE IF NOT EXISTS `routes` (
  `zone` int(10) NOT NULL,
  `area` varchar(200) NOT NULL,
  `route` varchar(200) NOT NULL,
  `route_desc` varchar(200) NOT NULL,
  `canvasser_id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`canvasser_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`zone`, `area`, `route`, `route_desc`, `canvasser_id`) VALUES
(1, 'a', 'sahali', 'glen', 5),
(2, 'c', 'DEmo', 'For Testing', 8);

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE IF NOT EXISTS `volunteer` (
  `canvasser_ID` int(30) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `years_of_service` int(5) NOT NULL,
  `reg_date` date DEFAULT NULL,
  `cap_fname` varchar(20) NOT NULL,
  `cap_lname` varchar(20) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `community` varchar(20) NOT NULL,
  `area` varchar(50) NOT NULL,
  `route` varchar(50) NOT NULL,
  `route_desc` varchar(50) NOT NULL,
  `revenue_gen` decimal(10,0) NOT NULL,
  PRIMARY KEY (`canvasser_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`canvasser_ID`, `first_name`, `last_name`, `address`, `city`, `pin_code`, `phone`, `email`, `years_of_service`, `reg_date`, `cap_fname`, `cap_lname`, `zone`, `community`, `area`, `route`, `route_desc`, `revenue_gen`) VALUES
(5, 'Rajwinder', 'Singh', 'C-2070', 'kamloops', 's31dd2', '4353453453', 'rajw@gmail.com', 1, '2017-02-07', 'Manhoon', 'lee', '3', 'sahali', 'h', 'area1', 'glenegles', '110'),
(6, 'Rajwinder', 'Singh', 'C-2070', 'kamloops', 's31dd2', '4353453453', 'rajw@gmail.com', 1, NULL, 'Rajnish', '', '', '', 'b', '', '', '0'),
(7, 'tanya', 'Singh', 'C-2071', 'kamloops', '343245', '234235234', 'tany@gmail.com', 3, NULL, 'Manhoon', '', '', '', 'a', '', '', '0'),
(8, 'Navjot', 'Singh', 'C-20656', 'kamloops', 'ssad342', '345235224', 'tdwdw@gmail.com', 10, NULL, 'Rajnish', '', '', '', 'c', '', '', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
