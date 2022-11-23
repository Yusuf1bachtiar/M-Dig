-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 03:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m-dig`
--

-- --------------------------------------------------------

--
-- Table structure for table `catesurat`
--

CREATE TABLE `catesurat` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `date_post`
--

CREATE TABLE `date_post` (
  `id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `date_agenda` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subject` text NOT NULL,
  `body` longtext NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `subject`, `body`, `date_created`) VALUES
(1, 1, 'Visi Dan Misi', '<p><span class=\"firstcharacter\">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>\n\n              <figure class=\"my-4\">\n                <img src=\"assets/img/post-landscape-1.jpg\" alt=\"\" class=\"img-fluid\">\n                <figcaption>Ini adalah caption foto </figcaption>\n              </figure>\n              <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.\n\nExplicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.\n\nReprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam dolor.\n\nDolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?\n\nEst soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>\n              \n              <figure class=\"my-4\">\n                <img src=\"assets/img/post-landscape-5.jpg\" alt=\"\" class=\"img-fluid\">\n                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>\n              </figure>', '2022-11-21 15:00:36'),
(2, 1, 'Pemerintahan Desa', '<p><span class=\"firstcharacter\">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>\n\n              <figure class=\"my-4\">\n                <img src=\"assets/img/post-landscape-1.jpg\" alt=\"\" class=\"img-fluid\">\n                <figcaption>Ini adalah caption foto </figcaption>\n              </figure>\n              <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.\n\nExplicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.\n\nReprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam dolor.\n\nDolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?\n\nEst soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>\n              \n              <figure class=\"my-4\">\n                <img src=\"assets/img/post-landscape-5.jpg\" alt=\"\" class=\"img-fluid\">\n                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>\n              </figure>', '2022-11-21 15:00:36'),
(3, 1, 'Badan Permusyawaratan Desa', '<p><span class=\"firstcharacter\">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>\n\n              <figure class=\"my-4\">\n                <img src=\"assets/img/post-landscape-1.jpg\" alt=\"\" class=\"img-fluid\">\n                <figcaption>Ini adalah caption foto </figcaption>\n              </figure>\n              <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.\n\nExplicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.\n\nReprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam dolor.\n\nDolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?\n\nEst soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>\n              \n              <figure class=\"my-4\">\n                <img src=\"assets/img/post-landscape-5.jpg\" alt=\"\" class=\"img-fluid\">\n                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>\n              </figure>', '2022-11-21 15:00:36'),
(4, 1, 'Sejarah Desa', '<p><span class=\"firstcharacter\">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>\r\n\r\n              <figure class=\"my-4\">\r\n                <img src=\"assets/img/post-landscape-1.jpg\" alt=\"\" class=\"img-fluid\">\r\n                <figcaption>Ini adalah caption foto </figcaption>\r\n              </figure>\r\n              <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.\r\n\r\nExplicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.\r\n\r\nReprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam dolor.\r\n\r\nDolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?\r\n\r\nEst soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>\r\n              \r\n              <figure class=\"my-4\">\r\n                <img src=\"assets/img/post-landscape-5.jpg\" alt=\"\" class=\"img-fluid\">\r\n                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>\r\n              </figure>', '2022-11-21 15:00:36'),
(5, 1, 'Profil Wilayah Desa', '<p><span class=\"firstcharacter\">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>\r\n\r\n              <figure class=\"my-4\">\r\n                <img src=\"assets/img/post-landscape-1.jpg\" alt=\"\" class=\"img-fluid\">\r\n                <figcaption>Ini adalah caption foto </figcaption>\r\n              </figure>\r\n              <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.\r\n\r\nExplicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.\r\n\r\nReprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam dolor.\r\n\r\nDolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?\r\n\r\nEst soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>\r\n              \r\n              <figure class=\"my-4\">\r\n                <img src=\"assets/img/post-landscape-5.jpg\" alt=\"\" class=\"img-fluid\">\r\n                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>\r\n              </figure>', '2022-11-21 15:00:36'),
(6, 1, 'Arti Lambang Desa', '<p><span class=\"firstcharacter\">L</span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>\r\n\r\n              <figure class=\"my-4\">\r\n                <img src=\"assets/img/post-landscape-1.jpg\" alt=\"\" class=\"img-fluid\">\r\n                <figcaption>Ini adalah caption foto </figcaption>\r\n              </figure>\r\n              <p>Sunt reprehenderit, hic vel optio odit est dolore, distinctio iure itaque enim pariatur ducimus. Rerum soluta, perspiciatis voluptatum cupiditate praesentium repellendus quas expedita exercitationem tempora aliquam quaerat in eligendi adipisci harum non omnis reprehenderit quidem beatae modi. Ea fugiat enim libero, ipsam dicta explicabo nihil, tempore, nulla repellendus eos necessitatibus eligendi corporis cum? Eaque harum, eligendi itaque numquam aliquam soluta.\r\n\r\nExplicabo perspiciatis, laborum provident voluptates illum in nulla consectetur atque quaerat excepturi quisquam, veniam velit ex pariatur quos consequuntur? Excepturi reiciendis perferendis, cupiditate dolorem eos illum amet. Beatae voluptates nemo esse ratione voluptate, nesciunt fugit magnam veritatis voluptas dignissimos doloribus maiores? Aliquam, dolores natus exercitationem corrupti blanditiis, consequuntur nihil nobis sed voluptatibus maiores sunt, illo provident aliquid laborum. Vitae, ut.\r\n\r\nReprehenderit aut sed doloribus blanditiis, aspernatur magni? In molestias rem, similique ut esse repudiandae quod recusandae dolores neque earum omnis at, suscipit fuga? Minima qui veniam deserunt quisquam error amet at ratione nesciunt porro quis placeat repudiandae voluptatibus officiis fuga necessitatibus, expedita officia adipisci eaque labore accusamus? Nesciunt repellat illo exercitationem facilis similique quaerat, quis sequi? Praesentium nulla ipsam dolor.\r\n\r\nDolorum, incidunt! Adipisci harum itaque maxime dolores doloremque porro eligendi quis, doloribus vel sit rerum sunt obcaecati nam suscipit nulla vitae alias blanditiis aliquam debitis atque illo modi et placeat. Ratione iure eveniet provident. Culpa laboriosam sed ad quia. Corrupti, earum, perferendis dolore cupiditate sint nihil maiores iusto tempora nobis porro itaque est. Ut laborum culpa assumenda pariatur et perferendis?\r\n\r\nEst soluta veritatis laboriosam, consequuntur temporibus asperiores, fugit id a ullam sed, expedita sequi doloribus fugiat. Odio et necessitatibus enim nam, iste reprehenderit cupiditate omnis ut iure aliquid obcaecati, repellendus nemo provident eveniet tempora minus! Voluptates aut laboriosam, maiores nihil accusantium, a dolorum quaerat tenetur illo eum culpa cum laudantium sunt doloremque modi possimus magni? Perferendis cum repudiandae corrupti porro.</p>\r\n              \r\n              <figure class=\"my-4\">\r\n                <img src=\"assets/img/post-landscape-5.jpg\" alt=\"\" class=\"img-fluid\">\r\n                <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>\r\n              </figure>', '2022-11-21 15:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `status` enum('Aktif','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_category`
--

INSERT INTO `post_category` (`id`, `category_name`, `status`) VALUES
(1, 'Informasi Desa', 'Aktif'),
(2, 'Berita', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `post_view`
--

CREATE TABLE `post_view` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_view`
--

INSERT INTO `post_view` (`id`, `id_post`) VALUES
(1, 1),
(2, 1),
(25, 1),
(26, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(35, 1),
(40, 1),
(33, 2),
(34, 2),
(36, 2),
(46, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(24, 3),
(27, 3),
(28, 3),
(37, 3),
(38, 4),
(39, 4),
(41, 4),
(47, 4),
(42, 5),
(43, 6),
(44, 6),
(45, 6);

-- --------------------------------------------------------

--
-- Table structure for table `request_surat`
--

CREATE TABLE `request_surat` (
  `id` int(11) NOT NULL,
  `request_user` int(11) NOT NULL,
  `surat` int(11) NOT NULL,
  `pesan` longtext NOT NULL,
  `status` enum('Request','Process','Ready to Pickup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` enum('Admin','Masyarakat') NOT NULL,
  `status` enum('Not Yet Verified','Verified','Tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `nik` int(16) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` datetime NOT NULL,
  `jkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` longtext NOT NULL,
  `agama` enum('islam','katolik','kristen','hindu','buddha','konghucu') NOT NULL,
  `pekerjaan` text NOT NULL,
  `gol_darah` enum('-','A','AB','B','O') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catesurat`
--
ALTER TABLE `catesurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_post`
--
ALTER TABLE `date_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post` (`post`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Post ID` (`post`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Category ID` (`category`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_view`
--
ALTER TABLE `post_view`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `request_surat`
--
ALTER TABLE `request_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_user` (`request_user`),
  ADD KEY `Category Surat ID` (`surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User ID` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catesurat`
--
ALTER TABLE `catesurat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `date_post`
--
ALTER TABLE `date_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_view`
--
ALTER TABLE `post_view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `request_surat`
--
ALTER TABLE `request_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `date_post`
--
ALTER TABLE `date_post`
  ADD CONSTRAINT `date_post_ibfk_1` FOREIGN KEY (`post`) REFERENCES `post` (`id`);

--
-- Constraints for table `harga`
--
ALTER TABLE `harga`
  ADD CONSTRAINT `Post ID` FOREIGN KEY (`post`) REFERENCES `post` (`id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `Category ID` FOREIGN KEY (`category`) REFERENCES `post_category` (`id`);

--
-- Constraints for table `post_view`
--
ALTER TABLE `post_view`
  ADD CONSTRAINT `id_post` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`);

--
-- Constraints for table `request_surat`
--
ALTER TABLE `request_surat`
  ADD CONSTRAINT `Category Surat ID` FOREIGN KEY (`surat`) REFERENCES `catesurat` (`id`),
  ADD CONSTRAINT `request_surat_ibfk_1` FOREIGN KEY (`request_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `User ID` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
