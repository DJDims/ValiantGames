-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 28 2023 г., 18:24
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jptv20_valiantgames`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bundles`
--

CREATE TABLE `bundles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `bundles`
--

INSERT INTO `bundles` (`id`, `title`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Bioshock: The Collection', 59.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(2, 'Hotline Miami Collection', 40.33, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(3, 'Fallout Classic Collection', 19.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(4, 'Fallout Series', 179.92, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(5, 'Outlast Trinity', 39.33, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(6, 'The Walking Dead Ultimate Bundle', 117.83, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(7, 'Amnesia Re-Collection', 54.39, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(8, 'Frictional Collection', 80.03, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(9, 'Watch_Dogs Bundle', 80.98, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(10, 'Watch_Dogs Complete', 49.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(11, 'Dishonored - Definitive Edition', 19.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(12, 'Dishonored: Death of the Outsider - Deluxe Bundle', 59.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(13, 'Prey and Dishonored 2 Bundle', 48.58, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(14, 'Arkane 20th Anniversary Bundle', 88.74, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(15, 'Prey Digital Deluxe', 39.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(16, 'Prey Digital Deluxe + Control Ultimate Edition', 71.98, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(17, 'Control + Alan Wake Franchise', 59.38, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(18, 'Disco Elysium + Control', 71.98, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(19, 'Alan Wake Collectors Edition', 16.79, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(20, 'Alan Wake Franchise', 20.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(21, 'S.T.A.L.K.E.R Bundle', 33.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(22, 'Metro Exodus - Gold Edition', 39.99, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(23, 'Metro Saga Bundle', 59.46, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(24, 'The Orange Box', 19.5, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(25, 'Half-Life Complete', 32.4, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(26, 'Valve Complete Pack', 62.23, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(27, 'Half-Life 1: Source', 9.75, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(28, 'Half-Life 1 Anthology', 11.07, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(29, 'Left 4 Dead Bundle', 14.62, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(30, 'Portal Bundle', 14.62, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(31, 'The Binding of Isaac: Rebirth Complete Bundle', 48.46, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(32, 'The Binding of Isaac: Afterbirth+ Bundle', 35.97, '2023-02-26 17:46:15', '2023-02-26 17:46:43'),
(33, 'The Blue King Collection', 75.52, '2023-02-26 17:46:15', '2023-02-26 17:46:43');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryTitle` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryTitle`, `created_at`, `updated_at`) VALUES
(1, 'Horror', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(2, 'Psyhological Horror', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(3, 'Survival Horror', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(4, 'Visual Novel', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(5, 'Shooter', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(6, 'Sandbox', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(7, 'Factory Sim', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(8, 'Immersive Sim', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(9, 'Arcade', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(10, 'Fighting', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(11, 'Rythm', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(12, 'Platformer', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(13, 'Rogue like', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(14, 'Strategy', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(15, 'Puzzle', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(16, 'RPG', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(17, 'MMO', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(18, 'Diabloid', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(19, 'Race', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(20, 'Sport', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(21, 'Simulator', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(22, 'Adventure', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(23, 'Deep plot', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(24, 'Casual', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(25, 'Action', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(26, 'Cyberpunk', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(27, 'Survival', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(28, 'VR', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(29, 'Science fiction', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(30, 'OST', '2023-02-26 17:48:32', '2023-02-26 17:48:32');

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'ASkii Soft', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(2, 'GSC Gameworld', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(3, 'CD Project Red', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(4, '505 games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(5, 'Valve', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(6, 'TomHapp Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(7, 'Free Lives', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(8, 'Irrational Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(9, '2K Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(10, 'Ubisoft', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(11, 'Electronic Arts', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(12, 'DYO Team', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(13, 'Rockstar', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(14, 'Frictional games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(15, 'Tell Tale', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(16, 'Bethesda', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(17, 'Arcane Studio', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(18, '4A Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(19, 'Id Software', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(20, 'Remedy', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(21, 'Tommorow Corporation', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(22, 'Gearbox', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(23, 'Devolver Digital', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(24, 'Dennaton Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(25, 'Deep Silver', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(26, 'TobyFox', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(27, 'Red Barrels', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(28, 'Re-Logic', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(29, 'Project Moon', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(30, 'Wube Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(31, 'Soviet Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(32, 'Team Salvato', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(33, 'Chinese Room', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(34, 'Kojima Productions', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(35, 'Illusion Softworks', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(36, 'Vanripper', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(37, 'Scott Cawthon', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(38, 'Edmund McMillen', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(39, 'Take-Two Interactive', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(40, 'Riot Games', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(41, 'Blizzard', '2023-02-26 17:48:32', '2023-02-26 17:48:32'),
(42, 'Deconstructeam', '2023-02-26 17:48:32', '2023-02-26 17:48:32');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishYear` int(4) NOT NULL,
  `companyId` int(11) NOT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float NOT NULL,
  `categoryId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `title`, `publishYear`, `companyId`, `poster`, `description`, `price`, `categoryId`, `created_at`, `updated_at`) VALUES
(1, 'BioShock', 2007, 9, 'https://m.media-amazon.com/images/M/MV5BNjBkZmI4NzktZTJmMC00NDNlLTk2M2ItNGEwODUxZGEwNmZiXkEyXkFqcGdeQXVyNTgyNTA4MjM@._V1_FMjpg_UX1000_.jpg', '', 10.99, 5, '2023-02-28 04:58:30', '2023-02-28 04:58:30'),
(2, 'Bioshock 2', 2010, 9, 'https://cdn1.epicgames.com/offer/304724b675974566b1d7e23af80a1f52/EGS_BioShock2Remastered_MassMediaGames_S2_1200x1600-9ce67143723d05cda671b3e966732fd7', '', 19.99, 5, '2023-02-28 05:02:48', '2023-02-28 05:17:23'),
(3, 'Bioshock 2 minervas den', 2013, 9, 'https://s1.gaming-cdn.com/images/products/3813/orig-fallback-v1/bioshock-2-minerva-s-den-pc-mac-game-steam-cover.jpg?v=1649692276', '', 9.99, 5, '2023-02-28 05:04:03', '2023-02-28 05:17:29'),
(4, 'Bioshock infinite', 2013, 9, 'https://m.media-amazon.com/images/M/MV5BMTU3NTYwNDg0NV5BMl5BanBnXkFtZTcwNzAxMTQ2OA@@._V1_FMjpg_UX1000_.jpg', '', 29.99, 5, '2023-02-28 05:05:03', '2023-02-28 05:17:37'),
(5, 'BioShock Infinite: Burial at Sea - Episode One', 2013, 9, 'https://res.cloudinary.com/cook-becker/image/fetch/q_auto:eco,f_auto,w_1920,e_sharpen/https://candb.com/site/candb/images/artwork/Burial-at-Sea-BioShock-Infinite-Art_Irrational-Games.jpg', '', 14.99, 5, '2023-02-28 05:06:12', '2023-02-28 05:06:12'),
(6, 'BioShock Infinite: Burial at Sea - Episode Two', 2014, 9, 'https://assets-prd.ignimgs.com/2022/08/19/burialatsea2-1660893297972.jpg', '', 14.99, 5, '2023-02-28 05:07:34', '2023-02-28 05:07:34'),
(7, 'Hotline miami', 2012, 24, 'https://upload.wikimedia.org/wikipedia/ru/f/f4/Hotline_Miami_cover.png', '', 9.75, 25, '2023-02-28 05:09:07', '2023-02-28 05:09:07'),
(8, 'Hotline miami 2: wrong number', 2015, 24, 'https://image.api.playstation.com/vulcan/ap/rnd/202104/3018/x0cMtPaOTtUWRymojmrEjT9f.png', '', 14.79, 25, '2023-02-28 05:10:00', '2023-02-28 05:10:00'),
(9, 'Fallout: A Post Nuclear Role Playing Game', 1997, 16, 'https://cdn1.epicgames.com/offer/2e412cfcbd954e7180930e9784a47e18/EGS_FalloutAPostNuclearRolePlayingGame_BethesdaGameStudios_S2_1200x1600-f4406e1a479760bfbebc4459f7c17932', '', 9.99, 16, '2023-02-28 05:12:48', '2023-02-28 05:12:48'),
(10, 'Fallout 2: A Post Nuclear Role Playing Game', 1998, 16, 'https://cdn1.epicgames.com/offer/aae22da1fb884fa395b25bc30dd61faf/EGS_Fallout2APostNuclearRolePlayingGame_BethesdaGameStudios_S2_1200x1600-d07a5a6352badc1a2111ed42a393d049', '', 9.99, 16, '2023-02-28 05:14:01', '2023-02-28 05:14:01'),
(11, 'Fallout Tactics: Brotherhood of steel', 2001, 16, 'https://upload.wikimedia.org/wikipedia/ru/thumb/c/c9/Fallout_tactics_cover.jpg/640px-Fallout_tactics_cover.jpg', '', 9.99, 16, '2023-02-28 05:14:57', '2023-02-28 05:14:57'),
(12, 'Fallout 3', 2003, 16, 'https://upload.wikimedia.org/wikipedia/ru/c/c1/Fallout_3.jpg', '', 9.99, 16, '2023-02-28 05:15:51', '2023-02-28 05:15:51'),
(13, 'Fallout: New Vegas', 2010, 16, 'https://assets-prd.ignimgs.com/2021/12/08/falloutnv-1638924156844.jpg', '', 9.99, 16, '2023-02-28 05:16:47', '2023-02-28 05:16:47'),
(14, 'Fallout 4', 2015, 16, 'https://static.wikia.nocookie.net/fallout/images/4/4d/Fo4_Original_Game_Soundtrack_cover.jpg/revision/latest?cb=20151107223642', '', 19.99, 16, '2023-02-28 05:19:28', '2023-02-28 05:19:28'),
(15, 'Fallout 76', 2020, 16, 'https://img.prisguiden.no/2869/2869952/original.836x1024!m.jpg', '', 39.99, 16, '2023-02-28 05:21:07', '2023-02-28 05:21:07'),
(16, 'Outlast', 2013, 27, 'https://m.media-amazon.com/images/M/MV5BZWFiMGE4MWYtZDkwMy00ZDIzLWJkNDAtMWFiOWUzZjIyMTM2XkEyXkFqcGdeQXVyNjUxNDQwMzA@._V1_.jpg', '', 16.79, 3, '2023-02-28 05:23:16', '2023-02-28 05:23:16'),
(17, 'Outlast: Whistleblower DLC', 2014, 27, 'https://images.prom.ua/4144727716_w640_h640_outlast-whistleblower-dlc.jpg', '', 7.39, 1, '2023-02-28 05:25:55', '2023-02-28 05:25:55'),
(18, 'Outlast 2', 2017, 27, 'https://store-images.s-microsoft.com/image/apps.53880.64478484299016632.acc161ee-ac6b-492b-bd5e-6aca1d3ce791.1ffcf012-8978-4b7b-b54f-81bcbfd1e130?w=180&h=270&q=60', '', 24.99, 1, '2023-02-28 05:27:37', '2023-02-28 05:27:37'),
(19, 'The Walking Dead', 2012, 15, 'https://upload.wikimedia.org/wikipedia/ru/3/31/The_Walking_Dead_Season_One.jpg', '', 14.99, 22, '2023-02-28 05:33:24', '2023-02-28 05:33:24'),
(20, 'The Walking Dead: 400 Days', 2013, 15, 'https://images.gog-statics.com/cd57dbd74c0799e3f46edb28117320f24a4da273bc28fa6da1fdb4b74f8324a5.jpg', '', 4.99, 22, '2023-02-28 05:34:36', '2023-02-28 05:34:36'),
(21, 'The Walking Dead: Season Two', 2013, 15, 'https://m.media-amazon.com/images/M/MV5BZjcwOGVmODgtMWUxYS00Mjk3LTlkZDMtYjZkZDA3ZWJiYTI3XkEyXkFqcGdeQXVyNTM3NzExMDQ@._V1_.jpg', '', 14.99, 22, '2023-02-28 05:35:36', '2023-02-28 05:35:36'),
(22, 'The Walking Dead: A New Frontier', 2016, 15, 'https://play-lh.googleusercontent.com/zytctoIngr4TCYxECLqZWuSx20cQ1OpAHSmle4BHnEwf-buMOA_ezEIoUx0VLO666g', '', 14.99, 22, '2023-02-28 05:36:45', '2023-02-28 05:36:45'),
(23, 'The Walking Dead: Michonne - A Telltale Miniseries', 2016, 15, 'https://m.media-amazon.com/images/M/MV5BNmNlOWVjYjgtOTE3OC00YzAwLTllY2ItN2NkM2UzNGI5ZTVmXkEyXkFqcGdeQXVyMjM5NzU3OTM@._V1_FMjpg_UX1000_.jpg', '', 14.99, 22, '2023-02-28 05:37:32', '2023-02-28 05:37:32'),
(24, 'The Walking Dead: The Final Season', 2018, 15, 'https://image.api.playstation.com/cdn/UP2026/CUSA11998_00/SV3Q3aE4B7eJHJix5gw5GFqnx5gIndbW.png', '', 23.99, 22, '2023-02-28 05:38:29', '2023-02-28 05:38:29'),
(25, 'Amnesia: The Dark Descent', 2010, 14, 'https://assets-prd.ignimgs.com/2021/12/14/amnesia-1639516050762.jpg', '', 19.5, 3, '2023-02-28 05:39:45', '2023-02-28 05:44:12'),
(26, 'Amnesia: A Machine for Pigs', 2013, 14, 'https://f4.bcbits.com/img/a2878584477_10.jpg', '', 19.5, 3, '2023-02-28 05:41:32', '2023-02-28 05:44:05'),
(27, 'Amnesia: Rebirth', 2020, 14, 'https://static-cdn.jtvnw.net/ttv-boxart/Amnesia:%20Rebirth.jpg', '', 28.99, 3, '2023-02-28 05:43:57', '2023-02-28 05:43:57'),
(28, 'SOMA', 2015, 14, 'https://static.muve.pl/uploads/product-cover/0044/0938/soma-pc-g-shphqwr.jpg', '', 28.99, 2, '2023-02-28 05:45:21', '2023-02-28 05:45:21'),
(29, 'Penumbra Overture', 2007, 14, 'https://p1.akcdn.net/full/46746068.frictional-games-penumbra-overture-pc.jpg', '', 9.75, 3, '2023-02-28 05:50:35', '2023-02-28 05:50:35'),
(30, 'Penumbra: Black Plague Gold Edition', 2009, 14, 'https://cdn2.steamgriddb.com/file/sgdb-cdn/grid/570238e768c5b541a11ad1dc0ed2b7f6.png', '', 9.75, 3, '2023-02-28 05:53:14', '2023-02-28 05:53:14'),
(31, 'Watch_Dogs', 2014, 10, 'https://image.api.playstation.com/cdn/EP0001/CUSA00016_00/aDGI4Z0njFI5nPpLOqIlkMFxLmMsQk6oEj409OQxa2nP4Wy7ITl168UQwjlZNlzh.png', '', 29.99, 25, '2023-02-28 06:10:44', '2023-02-28 06:10:44'),
(32, 'Watch_Dogs - Bad Blood', 2014, 10, 'https://assets-prd.ignimgs.com/2022/01/05/watch-dogs-bad-blood-button-1641369146803.jpg', '', 14.99, 25, '2023-02-28 06:12:24', '2023-02-28 06:12:24'),
(33, 'Watch_Dogs 2', 2016, 10, 'https://image.api.playstation.com/cdn/UP0001/CUSA04459_00/qBxvfDJJ9dbavai6xsWOcWaxRDGRb7h0.png', '', 59.99, 25, '2023-02-28 06:13:55', '2023-02-28 06:13:55'),
(34, 'Dishonored', 2012, 17, 'https://m.media-amazon.com/images/M/MV5BYmQ2ZjZiZDAtZGNhZC00ZDI5LTkzMWQtMTA2MTFlNjkyODc0XkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg', '', 9.99, 8, '2023-02-28 06:17:44', '2023-02-28 06:17:44'),
(35, 'Dishonored: The Brigmore Witches', 2013, 17, 'https://static.wikia.nocookie.net/dishonoredvideogame/images/9/9a/The_Brigmore_Witches_Poster.png/revision/latest?cb=20130716155457', '', 4.99, 8, '2023-02-28 06:18:38', '2023-02-28 06:18:38'),
(36, 'Dishonored - The Knife of Dunwall', 2013, 17, 'https://m.media-amazon.com/images/M/MV5BMDYyY2E0OTAtZWQwMy00ZTViLWI4MjktY2M2YjJiNGZkNTAxXkEyXkFqcGdeQXVyMTI0MzA4NTgw._V1_FMjpg_UX1000_.jpg', '', 4.99, 8, '2023-02-28 06:19:22', '2023-02-28 06:19:22'),
(37, 'Dishonored 2', 2016, 17, 'https://image.api.playstation.com/vulcan/ap/rnd/202009/2918/1UfdyQmXpeSdoFE104sNkLd4.png', '', 29.99, 8, '2023-02-28 06:20:08', '2023-02-28 06:20:08'),
(38, 'Dishonored: Death of the Outsider', 2017, 17, 'https://m.media-amazon.com/images/M/MV5BMDI2YThmNjktYjczNy00ZWNkLWE5ODEtZjhjMGExZGFiNTUyXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_FMjpg_UX1000_.jpg', '', 29.99, 8, '2023-02-28 06:21:15', '2023-02-28 06:21:15'),
(39, 'Prey', 2017, 17, 'https://cdn1.epicgames.com/salesEvent/salesEvent/EGS_Prey_ArkaneStudios_S2_1200x1600-98e869dbf74a7db4857c4242c044272d', '', 29.99, 8, '2023-02-28 06:22:15', '2023-02-28 06:22:15'),
(40, 'DEATHLOOP', 2021, 17, 'https://media.gamestop.com/i/gamestop/11112058/Deathloop---PlayStation-5?$pdp$', '', 59.99, 8, '2023-02-28 06:23:32', '2023-02-28 06:23:32'),
(41, 'Control Ultimate Edition', 2020, 20, 'https://image.api.playstation.com/vulcan/ap/rnd/202008/2111/kZuu7RcHultdoVUuGsReuGcq.png', '', 39.99, 25, '2023-02-28 06:24:48', '2023-02-28 06:25:25'),
(42, 'Alan Wake', 2012, 20, 'https://cdn1.epicgames.com/salesEvent/salesEvent/en_Remedy_DEER_S2_1200x1600_1200x1600-43dd4a2f28f9edbf0ed1461339fc11d4', '', 12.49, 25, '2023-02-28 06:26:22', '2023-02-28 06:26:22'),
(43, 'Disco Elysium - The Final Cut', 2019, 31, 'https://m.media-amazon.com/images/M/MV5BY2UxMTY2OTUtMzBlMy00Zjk4LThmY2UtMzVhOTlkOWEwYjdkXkEyXkFqcGdeQXVyMTMxNDI1OTQx._V1_.jpg', '', 39.99, 16, '2023-02-28 06:29:53', '2023-02-28 06:29:53'),
(44, 'S.T.A.L.K.E.R.: Shadow of Chernobyl', 2007, 2, 'https://m.media-amazon.com/images/M/MV5BYTE5MDJkMzQtZjFmYi00NzgyLWE2YmQtNzA2NmY4Mjk0MjFkXkEyXkFqcGdeQXVyMTA0MTM5NjI2._V1_.jpg', '', 14.99, 16, '2023-02-28 06:30:59', '2023-02-28 06:32:22'),
(45, 'S.T.A.L.K.E.R.: Clear Sky', 2008, 2, 'https://steamuserimages-a.akamaihd.net/ugc/1849288437186891461/637551BFEB547BB5A5B39F6A18AF4FCF0902514E/?imw=512&imh=507&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true', '', 9.99, 16, '2023-02-28 06:32:04', '2023-02-28 06:32:04'),
(46, 'S.T.A.L.K.E.R.: Call of Pripyat', 2010, 2, 'https://m.media-amazon.com/images/M/MV5BNTdkZTYyZWEtNGE2Yi00MzY3LWFhOWQtY2M1MzFmNzFhYzg5XkEyXkFqcGdeQXVyMTA0MTM5NjI2._V1_.jpg', '', 10.99, 16, '2023-02-28 06:33:48', '2023-02-28 06:33:48'),
(47, 'Metro 2033 Redux', 2014, 18, 'https://cdn1.epicgames.com/offer/petunia/metro_2033_epic_tile_1200x1600_1200x1600-c126d15c1891a94e95491ae3cd056948', '', 19.99, 25, '2023-02-28 06:34:45', '2023-02-28 06:34:45'),
(48, 'Metro: Last Light Redux', 2014, 25, 'https://cdn1.epicgames.com/offer/c5e786eddfd041caa9984213e3f9621d/metro_last_light_epic_tile_1200x1600_1200x1600-d4f66fca79c098f57e6759dedb6c6565', '', 19.99, 25, '2023-02-28 06:36:47', '2023-02-28 06:36:47'),
(49, 'Metro Exodus', 2019, 25, 'https://upload.wikimedia.org/wikipedia/uk/8/87/%D0%9E%D0%B1%D0%BA%D0%BB%D0%B0%D0%B4%D0%B8%D0%BD%D0%BA%D0%B0_%D0%B2%D1%96%D0%B4%D0%B5%D0%BE%D0%B3%D1%80%D0%B8_Metro_Exodus.jpg', '', 29.99, 25, '2023-02-28 06:37:50', '2023-02-28 06:37:50'),
(50, 'Portal', 2007, 5, 'https://cdn.kanobu.ru/games/36/47b0d41ad30c49e58ed92de8f1898de4', '', 9.75, 15, '2023-02-28 06:39:32', '2023-02-28 06:39:32'),
(51, 'Portal 2', 2011, 5, 'https://upload.wikimedia.org/wikipedia/en/f/f9/Portal2cover.jpg', '', 9.75, 15, '2023-02-28 06:40:34', '2023-02-28 06:40:34'),
(52, 'Team Fortress 2', 2007, 5, 'https://m.media-amazon.com/images/I/51u2Imk7dcL._AC_UF1000,1000_QL80_.jpg', '', 0, 5, '2023-02-28 06:42:18', '2023-02-28 06:42:18'),
(53, 'Half-Life', 1998, 5, 'https://preview.redd.it/zid734prcol31.jpg?auto=webp&s=9dc4b54f8b1168afeb3074e08a31ea5a216c15e7', '', 8.19, 5, '2023-02-28 06:44:21', '2023-02-28 06:44:21'),
(54, 'Half-Life 2', 2004, 5, 'https://upload.wikimedia.org/wikipedia/en/2/25/Half-Life_2_cover.jpg', '', 9.75, 5, '2023-02-28 06:45:11', '2023-02-28 06:45:11'),
(55, 'Half-Life 2: Episode One', 2006, 5, 'https://upload.wikimedia.org/wikipedia/en/thumb/5/5b/Half-Life_2_-_Episode_One.jpg/220px-Half-Life_2_-_Episode_One.jpg', '', 7.79, 5, '2023-02-28 06:46:38', '2023-02-28 06:46:38'),
(56, 'Half-Life 2: Episode Two', 2007, 5, 'https://upload.wikimedia.org/wikipedia/en/thumb/2/2d/Half-Life_2_Episode_Two_title.jpg/220px-Half-Life_2_Episode_Two_title.jpg', '', 6.59, 5, '2023-02-28 06:47:51', '2023-02-28 06:47:51'),
(57, 'Left 4 Dead', 2008, 5, 'https://upload.wikimedia.org/wikipedia/en/5/5b/Left4Dead_Windows_cover.jpg', '', 9.75, 27, '2023-02-28 06:49:14', '2023-02-28 06:49:14'),
(58, 'Left 4 dead 2', 2009, 5, '', '', 9.75, 3, '2023-02-28 06:50:13', '2023-02-28 06:50:13');

-- --------------------------------------------------------

--
-- Структура таблицы `game_bundle`
--

CREATE TABLE `game_bundle` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `bundleId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_user`
--

CREATE TABLE `game_user` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` enum('WISHLIST','BUY') NOT NULL DEFAULT 'WISHLIST',
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `wallet` float NOT NULL DEFAULT 0,
  `avatar` varchar(255) DEFAULT 'https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png',
  `role` enum('USER','MODERATOR','ADMIN') NOT NULL DEFAULT 'USER',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `wallet`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$lyU2NVJ4svNrNFGIi1jPdO2yZC2iwFsv8xEeZ9oG9YpBKIx1AZJyW', 0, 'https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png', 'ADMIN', '2023-02-26 17:48:33', '2023-02-26 17:48:33');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`title`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`),
  ADD UNIQUE KEY `name` (`categoryTitle`);

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`title`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`title`),
  ADD KEY `publisher` (`companyId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Индексы таблицы `game_bundle`
--
ALTER TABLE `game_bundle`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`gameId`,`bundleId`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `bundleId` (`bundleId`);

--
-- Индексы таблицы `game_user`
--
ALTER TABLE `game_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`gameId`,`userId`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT для таблицы `game_bundle`
--
ALTER TABLE `game_bundle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_user`
--
ALTER TABLE `game_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`categoryId`);

--
-- Ограничения внешнего ключа таблицы `game_bundle`
--
ALTER TABLE `game_bundle`
  ADD CONSTRAINT `game_bundle_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_bundle_ibfk_2` FOREIGN KEY (`bundleId`) REFERENCES `bundles` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_user`
--
ALTER TABLE `game_user`
  ADD CONSTRAINT `game_user_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_user_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
