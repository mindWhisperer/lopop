-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 03, 2024 at 08:42 PM
-- Server version: 8.0.35
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databazka`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `genre`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Imrich', 1, 'https://www.zoobratislava.sk/assets/Uploads/Lexikon/Cicavce/Lama-krotka/03_TH70493__ScaleMaxWidthWzEyMDBd.jpg', 'Milujeme lamky', '2019-01-11 23:00:00', '2019-01-11 23:00:00'),
(3, 'Ursula', 3, 'https://dcontent.inviacdn.net/shared/img/web-830/2018/5/3/m0/605813.jpg', 'Pavuuuuuk', '2023-12-07 19:44:25', '2023-12-07 19:44:29'),
(4, 'Kevin', 5, 'https://plotpoint.sk/wp-content/uploads/2020/12/macaulay-culkin-sam-doma-696x392.webp', 'juchu', '2023-12-07 19:50:16', NULL),
(5, 'Kevin', 7, 'https://plotpoint.sk/wp-content/uploads/2020/12/macaulay-culkin-sam-doma-696x392.webp', 'juchu', '2023-12-07 19:54:44', NULL),
(6, 'Kevin', 11, 'https://plotpoint.sk/wp-content/uploads/2020/12/macaulay-culkin-sam-doma-696x392.webp', 'juchu', '2023-12-07 19:55:08', NULL),
(7, 'Kevin', 2, 'https://images.twinkl.co.uk/tw1n/image/private/t_630_eco/image_repo/7d/a9/t-tp-2548603-ascending-and-descending-display-poster_ver_2.avif', 'juchu', '2023-12-07 19:56:03', NULL),
(8, 'Emanuel Bacigala', 5, 'https://preview.redd.it/in-the-animated-movie-up-kevin-a-flightless-bird-changes-v0-lw0jq9kia6791.jpg?auto=webp&s=ae902419b8dfa92261c368bfd1eb25d68054f24d', 'Emanuel Bacigala z Popradu Vyfasoval karbobrúsku zo skladu. Tú starú Boshku karbošku poškodenú trošku, A poďho rezať zo železa ohradu. Už si dneska minul štyri kotúče, Čo s tým robíš, Bacigala, do púče?! A včera flexku Narexku, ná kdes to videl, v Tescu? Však vedúci ťa s vodováhou utlče! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Vysvetlujte zdrogovanej mládeži, Že sa im nenačíta brúsny kotúč na veži. Sa tu s tým prdkáš a trtkáš, furt sa tu s tým šmrdkáš, Tri dni sa tu jebeme a čas beží! A nedrž mi tú karbobrúsku pri uchu, Celý život ťa mám vodiť za ruku?! Zatlačil jak Rambo, kotúč letí stavbou A vedúceho trafil rovno do krku. Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem. Ja toho Bacigalu zabijem. Ja toho Bacigalu zabijem. Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem! Ja toho Bacigalu zabijem!\n', '2024-12-02 19:56:23', NULL),
(9, 'Sluka', 6, 'https://images.twinkl.co.uk/tw1n/image/private/t_630/u/ux/prime-numbers-wiki_ver_1.png', 'sluka sluka sluka na sluka', '2023-12-07 19:56:23', '2024-11-27 12:33:56'),
(10, 'Margarita', 7, 'https://www.semienkozivota.sk/wp-content/uploads/2021/01/Margaretka-biela.jpg', 'Pojdes mi srdcko moje', '2024-11-27 12:35:28', '2024-11-27 12:35:24'),
(11, 'Semienko', 3, 'https://mojekvety.sk/wp-content/uploads/2022/03/margaretka_letna_ruzova_svetla_2.jpg', 'Semienko zasialo mudrost zivota', '2024-05-28 18:12:15', NULL),
(14, 'Meliškov brat', 6, 'https://www.zoobratislava.sk/assets/Uploads/Lexikon/Cicavce/Lama-krotka/03_TH70493__ScaleMaxWidthWzEyMDBd.jpg', 'Je to veľký frajer', '2024-12-03 19:39:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Fantasy'),
(2, 'Romantika'),
(3, 'Young Adult'),
(4, 'Dobrodružný'),
(5, 'Manga'),
(6, 'Krimi'),
(7, 'Detektívka'),
(8, 'Poézia'),
(9, 'Sci-fi'),
(10, 'Triler'),
(11, 'Deti a Mládež');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(34, 'admin', 'admin@knizocka.sk', '2024-12-03 10:04:16', '$2y$12$Oi5kDA7VYVLtHfTFRxXeBuw5CY2Fdite9f6aBq9z846xp48JkZ772', '2024-12-03 10:04:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
