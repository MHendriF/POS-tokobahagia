-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Sep 2017 pada 08.37
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobahagia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'VexDeZWnjmq26eFykuVnwbdsdsdsdsds', 1, NULL, NULL, NULL),
(2, 2, 'VexDeZWnjmq26eFykuVnwbcyqPipk9JH', 1, NULL, NULL, NULL),
(3, 3, 'VeWBCt0vcemWQbjj8KulJd8nT6rhbkv4', 1, NULL, NULL, NULL),
(4, 4, '948ur3OXkZUuYAbxbpehLLpe12jrum0a', 1, NULL, NULL, NULL),
(5, 5, 'A6rFBna9b6XhEuwvOYQEWf7nsURKMki3', 1, NULL, NULL, NULL),
(6, 6, 'TM4r3R5TVi67ZXTe36eYrddBjIHjujrk', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'AC', NULL, NULL),
(2, 'Crt', NULL, NULL),
(3, 'Elko', NULL, NULL),
(4, 'Evaporator', NULL, NULL),
(5, 'Filter', NULL, NULL),
(6, 'Fly back', NULL, NULL),
(7, 'Freon', NULL, NULL),
(8, 'IC', NULL, NULL),
(9, 'Kompresor', NULL, NULL),
(10, 'Kulkas', NULL, NULL),
(11, 'Lampu', NULL, NULL),
(12, 'Televisi', NULL, NULL),
(13, 'Door Switch', NULL, NULL),
(14, 'Bimetal Panas', NULL, NULL),
(15, 'Bimetal Dingin', NULL, NULL),
(16, 'Fuse', NULL, NULL),
(17, 'Pulsator', NULL, NULL),
(18, 'Selonoid', NULL, NULL),
(19, 'Lain-Lain', NULL, NULL),
(20, 'Timer', NULL, NULL),
(21, 'Kimia', NULL, NULL),
(22, 'Pipa', NULL, NULL),
(23, 'Switch', NULL, NULL),
(24, 'Ran Kapasitor', NULL, NULL),
(25, 'Relay', NULL, NULL),
(26, 'Gas', NULL, NULL),
(27, 'OverLoad', NULL, NULL),
(28, 'Remote', NULL, NULL),
(29, 'Speaker', NULL, NULL),
(30, 'Kabel', NULL, NULL),
(31, 'Deflection Yoke', NULL, NULL),
(32, 'Jack', NULL, NULL),
(33, 'Transformer', NULL, NULL),
(34, 'Coil IF', NULL, NULL),
(35, 'Motor', NULL, NULL),
(36, 'Optic', NULL, NULL),
(37, 'Soket', NULL, NULL),
(38, 'Sensor', NULL, NULL),
(39, 'Led', NULL, NULL),
(40, 'Karet', NULL, NULL),
(41, 'Diode', NULL, NULL),
(42, 'Varco', NULL, NULL),
(43, 'Pintu', NULL, NULL),
(44, 'Door Liner', NULL, NULL),
(45, 'Thermostat', NULL, NULL),
(46, 'Water level', NULL, NULL),
(47, 'Gear Box', NULL, NULL),
(48, 'Tuner', NULL, NULL),
(49, 'Resistor', NULL, NULL),
(50, 'Transistor', NULL, NULL),
(51, 'Cristal', NULL, NULL),
(52, 'Pentil', NULL, NULL),
(53, 'Kawat', NULL, NULL),
(54, 'Trafo', NULL, NULL),
(55, 'Knop', NULL, NULL),
(56, 'Kondensator', NULL, NULL),
(57, 'Perak', NULL, NULL),
(58, 'Tutup Freezer', NULL, NULL),
(59, 'Drain Hose', NULL, NULL),
(60, 'Valve', NULL, NULL),
(61, 'Bimetal', NULL, NULL),
(62, 'Shaft', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additional_info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `contact_title`, `contact_name`, `phone`, `fax`, `email`, `address`, `postal_code`, `city`, `province`, `country`, `additional_info`, `created_at`, `updated_at`) VALUES
(1, 'Mr.', 'Miss Celine Durgan', '+9078417302827', '877.543.8115', 'jacobs.shane@gmail.com', '527 O\'Kon Crossroad Apt. 033\nSouth Aliza, VA 39217', '80067-8124', 'New Ameliastad', 'New Mexico', 'Italy', 'Illum libero veritatis dicta ipsam a ut. Tenetur unde natus dolorem vel. Voluptas itaque quis quam et recusandae nostrum quia. Nulla similique ut iusto adipisci qui blanditiis.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(2, 'Prof.', 'Prof. Delbert Stamm II', '+2068787017358', '888-460-3595', 'thora.beahan@gmail.com', '6650 Marta Walk Suite 643\nEast Vivian, MI 94346', '98387-7401', 'Hayleymouth', 'Texas', 'Jamaica', 'Quo tenetur aut est et. Voluptatem et ullam rerum consequatur aut. Et perferendis amet dignissimos quos voluptate ducimus. Ducimus quasi sint ut voluptate sint perspiciatis quo.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(3, 'Mrs.', 'Mohamed Nader', '+4234890288512', '1-877-971-0495', 'marvin.cassandra@gmail.com', '72941 Marquardt Mountain Apt. 948\nNorth Josefinashire, NY 15140', '34011-2702', 'Johnsshire', 'Missouri', 'Egypt', 'Ut repellendus sed tenetur. Quia expedita asperiores omnis. Enim quia minus minus minima maxime facilis est ut. Voluptatem ea dolor itaque est asperiores sunt earum.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(4, 'Dr.', 'Angelita Bradtke', '+3991230674867', '877-404-9884', 'leonora25@gmail.com', '8970 Arnulfo Corners Suite 990\nSouth Carolview, AR 55909', '56467-3998', 'Thompsonton', 'New Jersey', 'Burkina Faso', 'Libero quibusdam eos nam. Et laborum quo voluptatem enim recusandae aut. Perferendis natus sunt dolores et. Error labore ut assumenda ea enim alias.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(5, 'Dr.', 'Tillman Balistreri', '+1753937936014', '(877) 507-0297', 'ursula74@yahoo.com', '803 Alexanne Hollow Suite 890\nJackfort, MA 13370', '71683', 'Rogahntown', 'Wisconsin', 'Benin', 'Voluptatibus voluptatem aut laborum sed quis. Quisquam fugit omnis sint dignissimos animi necessitatibus. Aut dolorem nihil et aliquam non. Et rerum aut voluptas voluptatibus.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(6, 'Mr.', 'Bria Kulas', '+5030943369545', '800-634-2127', 'moore.devyn@gmail.com', '563 Murphy Green Suite 369\nPort Coltonchester, AR 31077', '49859', 'New Luciusmouth', 'Ohio', 'Guinea', 'Nobis totam unde reiciendis at est vitae. Ullam aliquam aspernatur rerum doloremque. Repudiandae dolorem iusto aut quasi molestias autem.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(7, 'Mrs.', 'Velda Lesch', '+8682525358316', '855.507.3425', 'brett.heller@hotmail.com', '176 Selena Land\nBradlyview, CO 39583-4651', '75700-5817', 'Kirlinshire', 'North Carolina', 'Nepal', 'Id eos at similique dignissimos. Ut et odio nostrum et nostrum nulla. Repudiandae quis sunt amet. Tempore qui ratione voluptatem consequatur voluptas sit.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(8, 'Prof.', 'Roma Larkin', '+5426709893901', '1-877-309-5136', 'nmiller@hotmail.com', '9494 Micaela Valleys\nPort Marilou, AR 39929', '07977', 'Duaneland', 'Alabama', 'Tonga', 'Id veniam iusto sunt et quaerat dolorem inventore. Ipsam sequi quae nulla nam minima nam perspiciatis. Et ullam vitae ut provident perferendis voluptas.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(9, 'Ms.', 'Miss Liliane Nader', '+6279615849579', '800-764-1073', 'donnell64@hotmail.com', '81150 Roob Lakes Apt. 367\nFadelhaven, WI 70743-2795', '34260-1999', 'Jonesville', 'Georgia', 'Paraguay', 'Illum laboriosam ipsa sit illum. Laboriosam excepturi ea amet facere. Et deserunt adipisci eos dolores. Deserunt sequi eius nulla facilis optio.', '2017-09-20 23:37:06', '2017-09-20 23:37:06'),
(10, 'Prof.', 'Dr. Wilhelm Mayert I', '+4737335386822', '1-877-817-8679', 'pcruickshank@gmail.com', '6904 Moen Union Suite 246\nRoelmouth, IA 61677-4031', '40942', 'Port Lydiashire', 'Wyoming', 'Lithuania', 'Vitae libero quaerat aspernatur similique animi. Doloremque et asperiores tenetur accusamus. Aut consequatur eum voluptatem aut ea.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(11, 'Mr.', 'Fatima Deckow I', '+3402562681666', '(800) 764-6960', 'volkman.coy@yahoo.com', '2940 Jakubowski Forest Suite 561\nSchadenfort, ND 07890-5123', '36226-3530', 'Lake Hugh', 'Utah', 'Azerbaijan', 'Ab dolorem ab non dolorum perferendis magni. Aperiam voluptatem voluptatem quidem earum repellat inventore beatae qui. Illum quam eum qui quas adipisci consequatur nihil doloremque.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(12, 'Miss', 'Adolfo Rippin', '+1355769166567', '877.799.4234', 'amarvin@hotmail.com', '344 Tomasa Mount\nGutmannberg, UT 75698', '63291', 'Lake Jorge', 'Arizona', 'United States Virgin Islands', 'Atque id sint aliquid ab doloribus cumque qui est. Voluptatibus est qui deserunt ut. Et error ducimus nihil quod voluptatem occaecati aut.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(13, 'Miss', 'Weston Stamm', '+6069584012088', '(855) 486-4044', 'walsh.keaton@yahoo.com', '75747 Leslie Flats Suite 423\nKatlynport, RI 53934-5984', '50307', 'South Greysonberg', 'Nebraska', 'Ghana', 'Recusandae omnis aut ducimus qui quam et. Ea non at ullam culpa. Tempore sequi voluptatem facere. Culpa aut et reprehenderit voluptas doloribus.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(14, 'Ms.', 'Alvera Bode', '+5424712927418', '1-844-439-3491', 'rau.jacinto@gmail.com', '4465 Karen Turnpike Apt. 043\nEast Shaun, SD 60101', '06118-7782', 'Haleighshire', 'Connecticut', 'Bulgaria', 'Aut rerum et voluptatibus earum dolorem eum minus. Veniam necessitatibus quidem voluptas laudantium illo sint quidem non. Eum nihil qui repellat consequatur reprehenderit.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(15, 'Dr.', 'Mack Hilpert', '+5619638700996', '855.367.9097', 'kcollins@gmail.com', '25681 Keebler Inlet Suite 775\nNorth Cierra, WY 96226-2396', '19211-9644', 'North Carlosmouth', 'Arizona', 'Marshall Islands', 'Enim amet repudiandae id et quo. Ea est iure aut sit omnis veniam. Voluptate animi aut dolorem assumenda inventore. Voluptatem dolorem dolorem sint aut et eum totam porro.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(16, 'Mr.', 'Dr. Jana Roob', '+1459456994033', '(855) 788-4530', 'kari.murazik@gmail.com', '97714 Lonzo Row Apt. 329\nSouth Eugene, LA 62050', '69854', 'North Sierrafurt', 'Wisconsin', 'Madagascar', 'Consequatur provident voluptatum inventore eum. Laudantium vel vero velit dolor. Beatae eum qui quos et.', '2017-09-20 23:37:07', '2017-09-20 23:37:07'),
(17, 'Prof.', 'Dr. Adan Carter DDS', '+9778534416559', '866-938-8386', 'evans.reichert@hotmail.com', '17578 Gussie Land\nOndrickaview, DE 27251', '13113', 'West Enidmouth', 'Washington', 'Bulgaria', 'Neque similique labore beatae quis. Non aut odit esse assumenda sunt. Omnis animi quia ea et aperiam magni voluptas odit.', '2017-09-20 23:37:08', '2017-09-20 23:37:08'),
(18, 'Dr.', 'Solon Adams V', '+1303776288210', '(888) 323-9294', 'ward.bertrand@yahoo.com', '97010 Schowalter Estates Apt. 816\nBodeview, OR 22180', '71901-4174', 'Sanfordland', 'Oregon', 'Bahrain', 'Rerum dolorem et incidunt explicabo. Minima eos est expedita corrupti possimus accusantium aut.', '2017-09-20 23:37:08', '2017-09-20 23:37:08'),
(19, 'Prof.', 'Cassidy Skiles', '+3931803477730', '855-358-2526', 'annie27@yahoo.com', '2966 Upton Grove Suite 402\nJessikastad, NY 54845', '45729-8391', 'West Eudoraberg', 'Texas', 'Canada', 'Ea eum provident ut qui. Quia consequatur suscipit nihil. Qui iure voluptatibus earum sequi qui eaque.', '2017-09-20 23:37:08', '2017-09-20 23:37:08'),
(20, 'Dr.', 'Opal Connelly', '+7303667775400', '(855) 946-6798', 'annabelle48@yahoo.com', '41199 Lila Isle\nLake Alexanderberg, VT 97972-0825', '33937', 'North Naomiefurt', 'Oregon', 'United States of America', 'Reiciendis et dolores nobis est facilis enim rerum est. Tenetur et mollitia voluptate. Qui nesciunt necessitatibus ea earum rerum.', '2017-09-20 23:37:08', '2017-09-20 23:37:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `expense`
--

CREATE TABLE `expense` (
  `id` int(10) UNSIGNED NOT NULL,
  `listrik` int(11) NOT NULL,
  `air` int(11) NOT NULL,
  `makan` int(11) DEFAULT NULL,
  `others` int(11) DEFAULT NULL,
  `expense_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Trigger `expense`
--
DELIMITER $$
CREATE TRIGGER `trigger_finance_expense` AFTER INSERT ON `expense` FOR EACH ROW BEGIN
                INSERT INTO finance (`keterangan`, `kredit`, `debit`, `created_date`) 
                VALUES ("Expense", 0, new.expense_total, now(), now());
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `finance`
--

CREATE TABLE `finance` (
  `id` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kredit` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_factory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manufacturer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_function` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost_min` int(11) NOT NULL,
  `cost_max` int(11) NOT NULL,
  `price_buy_avg` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `unit_of_measure` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`id`, `category_id`, `location_id`, `product_name`, `code_factory`, `product_desc`, `manufacturer`, `item_function`, `cost_min`, `cost_max`, `price_buy_avg`, `images`, `stock`, `unit_of_measure`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'LA 0667 na', 'LXA 4763 xf', 'Labore dolorem error debitis quo dolorem rem dolores voluptatem. Quod et ab incidunt.', '', 'TV', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:08', '2017-09-20 23:37:08'),
(2, 37, 4, 'LA 4716 ei', 'LXA 2125 rq', 'Temporibus vel doloremque harum impedit aperiam vel fugiat. Rerum non ut velit quia. Consectetur omnis et magnam eligendi perferendis. Dolores sed nemo maiores accusantium eaque.', 'Sony', 'TV', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:08', '2017-09-20 23:37:08'),
(3, 6, 4, 'LA 2920 oa', 'LXA 1361 dk', 'Labore praesentium provident esse similique nobis iure. Dolor numquam blanditiis ipsam quis nulla optio.', 'Aiwa', 'TV', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:08', '2017-09-20 23:37:08'),
(4, 23, 3, 'LA 6164 yz', 'LXA 6726 bq', 'Dolor architecto id laborum voluptatem aut. Nihil eum est minus reprehenderit est. Incidunt autem id asperiores voluptas culpa.', 'Samsung', 'Tape Mobil', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(5, 54, 1, 'LA 4976 pa', 'LXA 2954 aw', 'Sit quod quae eos non eligendi omnis. Molestiae ut reiciendis et quos. Qui magni aut dicta reprehenderit vitae. Mollitia expedita quos et corporis non maxime.', 'Sony', 'Tape Mobil', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(6, 39, 2, 'LA 8083 ht', 'LXA 5509 sh', 'Exercitationem eveniet sed modi sed. Eveniet culpa earum est assumenda. Dignissimos beatae quis ab aut sed quaerat.', 'Samsung', 'Computer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(7, 55, 1, 'LA 3785 su', 'LXA 2459 iu', 'Vero unde quis ducimus omnis non aut. Eaque fugit aut et perferendis sunt voluptatem enim. Asperiores et explicabo eaque sunt consequatur sint.', 'Samsung', 'Printer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(8, 2, 3, 'LA 3550 nz', 'LXA 6661 oa', 'Facere ipsum sit optio voluptas. Earum beatae quam perferendis. Ipsam ea error quidem in autem nisi molestiae. Laborum optio velit facere sunt aut excepturi et.', 'Samsung', 'Printer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(9, 37, 2, 'LA 3749 ll', 'LXA 5186 yx', 'Iure suscipit non et. Et provident voluptate amet quod at. Libero neque architecto cum.', 'Sony', 'TV', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(10, 59, 1, 'LA 8957 fi', 'LXA 6300 va', 'Necessitatibus odio eaque ut eveniet labore. Blanditiis aperiam temporibus itaque veritatis nesciunt odit minima. Sunt et omnis magnam iste incidunt.', 'Sanyo', 'Printer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(11, 62, 1, 'LA 2764 on', 'LXA 6674 su', 'Voluptates nihil consequatur facilis inventore. Mollitia deleniti qui qui laboriosam sint quisquam. Eum et quia est modi possimus.', 'Sanyo', 'Computer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(12, 11, 2, 'LA 6922 qn', 'LXA 7943 ow', 'Assumenda voluptas ut beatae aut labore aut. Laudantium eos perferendis est nisi est velit. Atque repudiandae cumque dolorem.', 'Sanyo', 'TV', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(13, 56, 4, 'LA 7031 tw', 'LXA 5558 az', 'Et voluptates quia asperiores non doloremque. Veritatis et rerum dolores beatae dolor. Voluptas dignissimos cumque quisquam optio. Omnis vitae vel sed amet quia recusandae provident.', 'Polytron', 'Printer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(14, 2, 3, 'LA 6313 hs', 'LXA 8551 ic', 'Qui est quas molestias dolorum a ut. Numquam et fuga nulla consequuntur sunt possimus. Dolore voluptatem architecto quo ea voluptates.', 'Polytron', 'Printer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(15, 6, 4, 'LA 2183 iq', 'LXA 1002 tw', 'Consequatur similique dicta est porro sequi voluptate. Asperiores dolores quo rem sed voluptatem esse. Perspiciatis sed maxime sequi quis laudantium.', 'Polytron', 'Computer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(16, 3, 4, 'LA 2765 jj', 'LXA 3141 yn', 'Placeat veritatis consequatur vel et. Iure corporis accusamus et molestiae voluptatum dolorum voluptas.', '', 'Computer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(17, 29, 3, 'LA 4961 cr', 'LXA 5169 fm', 'Omnis sit modi totam expedita omnis. Ipsa et iure esse aut et ad atque quae. Optio quia corporis dolorem reiciendis illo enim suscipit.', 'Samsung', 'Tape Mobil', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(18, 60, 2, 'LA 8098 qc', 'LXA 4724 lx', 'Consequatur vel minus exercitationem sint est repudiandae animi aut. Ut rerum id animi. Quis voluptas soluta id et sint consectetur. Nemo et nihil animi laborum exercitationem.', 'Sanyo', 'Printer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(19, 50, 1, 'LA 0795 op', 'LXA 2850 fr', 'Et aut explicabo nam esse placeat. Expedita quia quisquam eligendi molestias. Velit voluptates eaque in cumque dignissimos.', 'Sony', 'Computer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09'),
(20, 33, 2, 'LA 7385 yw', 'LXA 5759 jo', 'Et sunt suscipit quaerat voluptatem ut repellendus. Voluptatem aut sequi quod sed qui enim. Sint eligendi dolorum assumenda iusto sunt.', 'Sanyo', 'Computer', 0, 0, 0, 'default1.png', 0, 'pcs', '2017-09-20 23:37:09', '2017-09-20 23:37:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `locations`
--

INSERT INTO `locations` (`id`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Bahagia', NULL, NULL),
(2, 'Jatinegara 20', NULL, NULL),
(3, 'Jatinegara 26', NULL, NULL),
(4, 'Jatinegara 44A', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `main_transactions`
--

CREATE TABLE `main_transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `trans_desc_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_order` int(11) NOT NULL,
  `quantity_out` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cost_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `main_transactions`
--

INSERT INTO `main_transactions` (`id`, `user_id`, `product_id`, `trans_desc_id`, `description`, `transaction_date`, `unit_order`, `quantity_out`, `note`, `cost_price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(2, 2, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(3, 2, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(4, 2, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(5, 2, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(6, 3, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(7, 3, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(8, 3, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(9, 3, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(10, 3, 1, 1, '', '02/03/2016', 1, 1, '', 50000, NULL, NULL),
(11, 4, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(12, 4, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(13, 4, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(14, 4, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(15, 4, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(16, 5, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(17, 5, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(18, 5, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(19, 5, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(20, 5, 2, 1, '', '04/05/2016', 2, 1, '', 100000, NULL, NULL),
(21, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(22, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(23, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(24, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(25, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(26, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(27, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(28, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(29, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL),
(30, 6, 3, 1, '', '02/01/2017', 3, 1, '', 85000, NULL, NULL);

--
-- Trigger `main_transactions`
--
DELIMITER $$
CREATE TRIGGER `service_trigger` AFTER INSERT ON `main_transactions` FOR EACH ROW BEGIN
                INSERT INTO service_of_employees (`employee_id`, `created_at`, `updated_at`) 
                VALUES (NEW.user_id, now(), now());
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2017_02_08_000001_create_locations_table', 1),
(3, '2017_02_08_000002_create_categories_table', 1),
(4, '2017_02_08_000003_create_customers_table', 1),
(5, '2017_02_08_000004_create_shippings_table', 1),
(6, '2017_02_08_000005_create_companies_table', 1),
(7, '2017_02_11_000006_create_inventory', 1),
(8, '2017_02_11_000008_create_orders_table', 1),
(9, '2017_02_11_000009_create_order_details_table', 1),
(10, '2017_02_13_155643_create_suppliers_table', 1),
(11, '2017_02_13_160512_create_technicians_table', 1),
(12, '2017_02_14_062000_create_transaction_descriptions_table', 1),
(13, '2017_02_14_062800_create_main_transactions_table', 1),
(14, '2017_02_14_065821_create_purchases_table', 1),
(15, '2017_02_14_065839_create_purchase_details_table', 1),
(16, '2017_02_22_040409_create_service_items_table', 1),
(17, '2017_02_22_144621_create_service_statuses_table', 1),
(18, '2017_02_28_053459_create_service_of_employees_table', 1),
(19, '2017_02_28_053938_service_trigger', 1),
(20, '2017_03_07_225252_create_expense_table', 1),
(21, '2017_03_07_231148_create_services_table', 1),
(22, '2017_03_10_002201_create_salaries_table', 1),
(23, '2017_04_02_030455_trigger_subtract_stock', 1),
(24, '2017_04_02_164608_trigger_add_stock', 1),
(25, '2017_04_13_060412_create_tests_table', 1),
(26, '2017_05_04_050232_finance', 1),
(27, '2017_05_04_051050_trigger_finance_order', 1),
(28, '2017_05_04_052443_trigger_finance_expense', 1),
(29, '2017_05_04_055853_trigger_finance_purchases', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `shipping_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL,
  `order_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `no_po_customer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_total` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Trigger `orders`
--
DELIMITER $$
CREATE TRIGGER `trigger_finance_order` AFTER INSERT ON `orders` FOR EACH ROW BEGIN
                INSERT INTO finance (`keterangan`, `kredit`, `debit`, `created_date`) 
                VALUES ("Penjualan", new.price_total, 0, now());
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `number` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unit` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Trigger `order_details`
--
DELIMITER $$
CREATE TRIGGER `trigger_subtract_stock` AFTER INSERT ON `order_details` FOR EACH ROW BEGIN
                UPDATE inventory s
                SET s.stock = s.stock - new.quantity
                WHERE s.id = new.product_id;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `supplier_id` int(10) UNSIGNED DEFAULT NULL,
  `shipping_id` int(10) UNSIGNED DEFAULT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL,
  `purchase_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `po_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purchase_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `promised_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `freight_charge` int(11) NOT NULL,
  `price_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Trigger `purchases`
--
DELIMITER $$
CREATE TRIGGER `trigger_finance_purchases` AFTER INSERT ON `purchases` FOR EACH ROW BEGIN
                INSERT INTO finance (`keterangan`, `kredit`, `debit`, `created_date`) 
                VALUES ("Pembelian", 0, new.price_total, now());
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `purchase_id` int(10) UNSIGNED DEFAULT NULL,
  `number` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unit` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Trigger `purchase_details`
--
DELIMITER $$
CREATE TRIGGER `trigger_add_stock` AFTER INSERT ON `purchase_details` FOR EACH ROW BEGIN
                UPDATE inventory s
                SET s.stock = s.stock + new.quantity
                WHERE s.id = new.product_id;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, '2017-09-20 23:37:05', '2017-09-20 23:37:05'),
(2, 'employee', 'Employee', NULL, '2017-09-20 23:37:05', '2017-09-20 23:37:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 2, NULL, NULL),
(3, 2, NULL, NULL),
(4, 2, NULL, NULL),
(5, 2, NULL, NULL),
(6, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `technician_id` int(10) UNSIGNED DEFAULT NULL,
  `serv_item_id` int(10) UNSIGNED DEFAULT NULL,
  `serv_status_id` int(10) UNSIGNED DEFAULT NULL,
  `cust_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_addr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cust_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_serial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_damage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `warranty` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `collect_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tech_fee` int(11) NOT NULL,
  `serv_fee` int(11) NOT NULL,
  `trans_fee` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_items`
--

CREATE TABLE `service_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `serv_item_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serv_item` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `act_price` int(11) NOT NULL,
  `quantity_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity_out` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_of_employees`
--

CREATE TABLE `service_of_employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `service_of_employees`
--

INSERT INTO `service_of_employees` (`id`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(2, 2, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(3, 2, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(4, 2, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(5, 2, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(6, 3, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(7, 3, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(8, 3, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(9, 3, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(10, 3, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(11, 4, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(12, 4, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(13, 4, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(14, 4, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(15, 4, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(16, 5, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(17, 5, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(18, 5, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(19, 5, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(20, 5, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(21, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(22, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(23, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(24, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(25, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(26, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(27, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(28, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(29, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10'),
(30, 6, '2017-09-21 06:37:10', '2017-09-21 06:37:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service_statuses`
--

CREATE TABLE `service_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `service_statuses`
--

INSERT INTO `service_statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Belum Selesai', NULL, NULL),
(2, 'Selesai - Belum Diambil', NULL, NULL),
(3, 'Selesai - Sudah Diambil', NULL, NULL),
(4, 'Kembalikan', NULL, NULL),
(5, 'Dikerjakan Pabrik', NULL, NULL),
(6, 'Service Ulang', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `shippings`
--

INSERT INTO `shippings` (`id`, `method`, `created_at`, `updated_at`) VALUES
(1, 'Kirim via Pos', NULL, NULL),
(2, 'Kirim via Pos Kilat', NULL, NULL),
(3, 'Kirim via Ekspedisi', NULL, NULL),
(4, 'Antar', NULL, NULL),
(5, 'Beli sendiri', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `contact_title`, `contact_name`, `phone`, `fax`, `email`, `address`, `postal_code`, `city`, `province`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Toko Berkawan', '', 'Dana', '0216261546', '0216495691', NULL, 'Glodok Harco', '', 'Jakarta', 'DKI', 'Indonesia', NULL, NULL),
(2, 'Toko Nivico', '', 'Amin', '0216007586', '0216391479', NULL, 'Glodok Makmur Lt 1 No: 28F', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(3, 'Toko Crown', '', 'Awen', '0216295132', '0216251268', NULL, 'Glodok Harco', '', 'Jakarta', '', 'Indonesia', NULL, NULL),
(4, 'Toko Sinar Mas', '', 'Afung', '0216591135', '0216266280', NULL, 'Glodok Harco', '', 'Jakarta', '', 'Indonesia', NULL, NULL),
(5, 'Toko Aroma Baru', '', '', '0213900761', '0213900760', NULL, 'Jln. Kenari II / No. 4', '', 'Jakarta', 'DKI', 'Indonesia', NULL, NULL),
(6, 'Herry Alter s', '', '', '0218614479', '0218644479', NULL, 'Jl. Masjid Abidin No. 3, Pondok Bambu', '', 'Jakarta Timur', 'DKI', 'Indonesia', NULL, NULL),
(7, 'SANKYO', '', '', '0218660397', '0218602403', NULL, 'Jl. Jend. Basuki Rahmat Raya No.18A', '', 'Jakarta Timur', 'DKI', 'Indonesia', NULL, NULL),
(8, 'PT SHARP', '', '', '0214682407', '0214682406', NULL, 'Jl. Swadaya IV Rawa Terate Cakung', '', 'Jakarta Timur', 'DKI', 'Indonesia', NULL, NULL),
(9, 'Toko Gunung Makmur', '', 'Rudi', '0216495517', '', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(10, 'Toko Samudera', '', 'Tata', '0216260583', '0216260584', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(11, 'Toko Murata', '', '', '0216492178', '0216129978', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(12, 'Toko Ating', '', '', '0216498072', '0216287119', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(13, 'Toko Bengawan', '', '', '0216260620', '', NULL, 'Glodok Makmur', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(14, 'Toko Beng', '', '', '0216493968', '', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(15, 'Toko B 154', '', '', '0216268933', '0216909625', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(16, 'Toko Buana', '', '', '0216393932', '', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(17, 'Toko DC', '', '', '0216268712', '', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(18, 'Toko YC', '', '', '0216015714', '', NULL, 'Glodok Makmur No:29B', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(19, 'Toko GRC', '', '', '0216293238', '0216692627', NULL, 'Glodok Harco Lt 1 blok:B No: 127', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(20, 'Toko Atlantic', '', 'Aliong', '0216591371', '', NULL, 'Glodok Harco', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(21, 'Toko Johnson [TOA]', '', '', '0216593935', '0216490962', NULL, 'Glodok Harco Lt1 blok: D No:214 Lt1 blok: D No:214', '', 'Jakarta', 'Jakarta Barat', 'Indonesia', NULL, NULL),
(22, 'Toko Yusuf Electronics', '', '', '', '', NULL, 'Ps. Manggis Guntur', '', 'Jakarta', 'DKI', 'Indonesia', NULL, NULL),
(23, 'Toko Heri Cool', '', '', '', '', NULL, '', '', 'Jakarta', 'DKI', 'Indonesia', NULL, NULL),
(24, 'Toko Bahagia', '', '', '0218195961', '0218590058', NULL, 'Jl Raya Jatinegara Timur No.16', '', 'Jakarta', 'DKI', 'Indonesia', NULL, NULL),
(25, 'Dian Cempaka', '', '', '0212488505', '0219163383', NULL, 'Ruko Mega Grosir Cempaka Mas Blok J No.6 Jl Letjen Suprapto', '', 'Jakarta', 'DKI', 'Indonesia', NULL, NULL),
(26, 'PD Citra Medical Gas', '', '', '0218318487', '0218310033', NULL, 'Jl Dr. Saharjo Swadaya II No.15', '', 'Jakarta Selatan', 'DKI', 'Indonesia', NULL, NULL),
(27, 'Cash', '', '', '', '', NULL, '', '', 'Jakarta', '', 'Indonesia', NULL, NULL),
(28, 'Cash', '', '', '', '', NULL, '', '', 'Jakarta', '', 'Indonesia', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `technicians`
--

CREATE TABLE `technicians` (
  `id` int(10) UNSIGNED NOT NULL,
  `technician_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `technicians`
--

INSERT INTO `technicians` (`id`, `technician_name`, `created_at`, `updated_at`) VALUES
(1, 'Darno', NULL, NULL),
(2, 'Dasuki', NULL, NULL),
(3, 'Ewo', NULL, NULL),
(4, 'Jumali', NULL, NULL),
(5, 'Zulfikar', NULL, NULL),
(6, 'Parlan', NULL, NULL),
(7, 'Rudi', NULL, NULL),
(8, 'Kecil', NULL, NULL),
(9, 'Sapei', NULL, NULL),
(10, 'Sumadi', NULL, NULL),
(11, 'Slamet', NULL, NULL),
(12, 'Tukin', NULL, NULL),
(13, 'Yadi', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `no` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unit` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `price_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction_descriptions`
--

CREATE TABLE `transaction_descriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `transaction_descriptions`
--

INSERT INTO `transaction_descriptions` (`id`, `description`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Transfer In', 'TI', NULL, NULL),
(2, 'Transfer Out', 'TO', NULL, NULL),
(3, 'Adjustment', 'ADJ', NULL, NULL),
(4, 'Opening Balance', 'OB', NULL, NULL),
(5, 'Missing', 'MI', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `phone`, `jabatan`, `address`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', '', NULL, 'Zavox', 'Fe', '0891233243', 'Admin', 'Keputih gang 2c no 21 a', NULL, NULL),
(2, 'user2', '$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', '', NULL, 'Suryadi', 'Yadi', '8195961', 'Karyawan Tetap', 'Jalan Raya Jatinegara Timur 16', NULL, NULL),
(3, 'user3', '$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', '', NULL, 'Ali Franki', 'Ali', '8195961', 'Karyawan Tetap', 'Jalan Raya Jatinegara Timur 16', NULL, NULL),
(4, 'user4', '$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', '', NULL, 'Sudarno', 'Darno', '8195961', 'Karyawan Tetap', 'Jalan Raya Jatinegara Timur 16', NULL, NULL),
(5, 'user5', '$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', '', NULL, 'Toni', 'Toni', '8195961', 'Karyawan Tetap', 'Jalan Raya Jatinegara Timur 16', NULL, NULL),
(6, 'user6', '$2y$10$AUrlB8ld0meFBK0JXmxUGeS7d4wCuvBh6MppkU.eaBqfLMjjKY39m', '', NULL, 'Jafar', 'Jafar', '8195961', 'Karyawan Tetap', 'Jalan Raya Jatinegara Timur 16', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inventory_category_id_foreign` (`category_id`),
  ADD KEY `inventory_location_id_foreign` (`location_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_transactions`
--
ALTER TABLE `main_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_transactions_user_id_foreign` (`user_id`),
  ADD KEY `main_transactions_product_id_foreign` (`product_id`),
  ADD KEY `main_transactions_trans_desc_id_foreign` (`trans_desc_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`),
  ADD KEY `orders_location_id_foreign` (`location_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`),
  ADD KEY `purchases_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchases_shipping_id_foreign` (`shipping_id`),
  ADD KEY `purchases_location_id_foreign` (`location_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_details_product_id_foreign` (`product_id`),
  ADD KEY `purchase_details_purchase_id_foreign` (`purchase_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_user_id_foreign` (`user_id`),
  ADD KEY `services_technician_id_foreign` (`technician_id`),
  ADD KEY `services_serv_item_id_foreign` (`serv_item_id`),
  ADD KEY `services_serv_status_id_foreign` (`serv_status_id`);

--
-- Indexes for table `service_items`
--
ALTER TABLE `service_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_of_employees`
--
ALTER TABLE `service_of_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_of_employees_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `service_statuses`
--
ALTER TABLE `service_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technicians`
--
ALTER TABLE `technicians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_product_id_foreign` (`product_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `transaction_descriptions`
--
ALTER TABLE `transaction_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `main_transactions`
--
ALTER TABLE `main_transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_items`
--
ALTER TABLE `service_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_of_employees`
--
ALTER TABLE `service_of_employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `service_statuses`
--
ALTER TABLE `service_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `technicians`
--
ALTER TABLE `technicians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transaction_descriptions`
--
ALTER TABLE `transaction_descriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `main_transactions`
--
ALTER TABLE `main_transactions`
  ADD CONSTRAINT `main_transactions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_transactions_trans_desc_id_foreign` FOREIGN KEY (`trans_desc_id`) REFERENCES `transaction_descriptions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `main_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchases_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchases_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_details_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_serv_item_id_foreign` FOREIGN KEY (`serv_item_id`) REFERENCES `service_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_serv_status_id_foreign` FOREIGN KEY (`serv_status_id`) REFERENCES `service_statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_technician_id_foreign` FOREIGN KEY (`technician_id`) REFERENCES `technicians` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `service_of_employees`
--
ALTER TABLE `service_of_employees`
  ADD CONSTRAINT `service_of_employees_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `tests_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `inventory` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
