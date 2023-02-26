-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 26 2023 г., 19:08
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_bundle`
--

CREATE TABLE `game_bundle` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `bundleId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_user`
--

CREATE TABLE `game_user` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` enum('WHISLIST','BUY') DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `wallet` float NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` enum('USER','MODERATOR','ADMIN') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `wallet`, `avatar`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '$2y$10$lyU2NVJ4svNrNFGIi1jPdO2yZC2iwFsv8xEeZ9oG9YpBKIx1AZJyW', 0, NULL, 'ADMIN', '2023-02-26 17:48:33', '2023-02-26 17:48:33');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher` (`companyId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Индексы таблицы `game_bundle`
--
ALTER TABLE `game_bundle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `bundleId` (`bundleId`);

--
-- Индексы таблицы `game_user`
--
ALTER TABLE `game_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
