-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 21 2023 г., 08:46
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

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
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `bundles`
--

INSERT INTO `bundles` (`id`, `title`, `price`) VALUES
(1, 'Bioshock: The Collection', 59.99),
(2, 'Hotline Miami Collection', 40.33),
(3, 'Fallout Classic Collection', 19.99),
(4, 'Fallout Series', 179.92),
(5, 'Outlast Trinity', 39.33),
(6, 'The Walking Dead Ultimate Bundle', 117.83),
(7, 'Amnesia Re-Collection', 54.39),
(8, 'Frictional Collection', 80.03),
(9, 'Watch_Dogs Bundle', 80.98),
(10, 'Watch_Dogs Complete', 49.99),
(11, 'Dishonored - Definitive Edition', 19.99),
(12, 'Dishonored: Death of the Outsider - Deluxe Bundle', 59.99),
(13, 'Prey and Dishonored 2 Bundle', 48.58),
(14, 'Arkane 20th Anniversary Bundle', 88.74),
(15, 'Prey Digital Deluxe', 39.99),
(16, 'Prey Digital Deluxe + Control Ultimate Edition', 71.98),
(17, 'Control + Alan Wake Franchise', 59.38),
(18, 'Disco Elysium + Control', 71.98),
(19, 'Alan Wake Collectors Edition', 16.79),
(20, 'Alan Wake Franchise', 20.99),
(21, 'S.T.A.L.K.E.R Bundle', 33.99),
(22, 'Metro Exodus - Gold Edition', 39.99),
(23, 'Metro Saga Bundle', 59.46),
(24, 'The Orange Box', 19.5),
(25, 'Half-Life Complete', 32.4),
(26, 'Valve Complete Pack', 62.23),
(27, 'Half-Life 1: Source', 9.75),
(28, 'Half-Life 1 Anthology', 11.07),
(29, 'Left 4 Dead Bundle', 14.62),
(30, 'Portal Bundle', 14.62),
(31, 'The Binding of Isaac: Rebirth Complete Bundle', 48.46),
(32, 'The Binding of Isaac: Afterbirth+ Bundle', 35.97),
(33, 'The Blue King Collection', 75.52);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Horror'),
(2, 'Psyhological Horror'),
(3, 'Survival Horror'),
(4, 'Visual Novel'),
(5, 'Shooter'),
(6, 'Sandbox'),
(7, 'Factory Sim'),
(8, 'Immersive Sim'),
(9, 'Arcade'),
(10, 'Fighting'),
(11, 'Rythm'),
(12, 'Platformer'),
(13, 'Rogue like'),
(14, 'Strategy'),
(15, 'Puzzle'),
(16, 'RPG'),
(17, 'MMO'),
(18, 'Diabloid'),
(19, 'Race'),
(20, 'Sport'),
(21, 'Simulator'),
(22, 'Adventure'),
(23, 'Deep plot'),
(24, 'Casual'),
(25, 'Action'),
(26, 'Cyberpunk'),
(27, 'Survival'),
(28, 'VR'),
(29, 'Science fiction'),
(30, 'OST');

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`id`, `title`) VALUES
(1, 'ASkii Soft'),
(2, 'GSC Gameworld'),
(3, 'CD Project Red'),
(4, '505 games'),
(5, 'Valve'),
(6, 'TomHapp Games'),
(7, 'Free Lives'),
(8, 'Irrational Games'),
(9, '2K Games'),
(10, 'Ubisoft'),
(11, 'Electronic Arts'),
(12, 'DYO Team'),
(13, 'Rockstar'),
(14, 'Frictional games'),
(15, 'Tell Tale'),
(16, 'Bethesda'),
(17, 'Arcane Studio'),
(18, '4A Games'),
(19, 'Id Software'),
(20, 'Remedy'),
(21, 'Tommorow Corporation'),
(22, 'Gearbox'),
(23, 'Devolver Digital'),
(24, 'Dennaton Games'),
(25, 'Deep Silver'),
(26, 'TobyFox'),
(27, 'Red Barrels'),
(28, 'Re-Logic'),
(29, 'Project Moon'),
(30, 'Wube Games'),
(31, 'Soviet Games'),
(32, 'Team Salvato'),
(33, 'Chinese Room'),
(34, 'Kojima Productions'),
(35, 'Illusion Softworks'),
(36, 'Vanripper'),
(37, 'Scott Cawthon'),
(38, 'Edmund McMillen'),
(39, 'Take-Two Interactive'),
(40, 'Riot Games'),
(41, 'Blizzard'),
(42, 'Deconstructeam');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publishYear` int(4) NOT NULL,
  `companyId` int(11) NOT NULL,
  `poster` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_bundles`
--

CREATE TABLE `game_bundles` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `bundleId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_users`
--

CREATE TABLE `game_users` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` enum('WHISLIST','BUY') COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wallet` float NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('USER','MODERATOR','ADMIN') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `game_bundles`
--
ALTER TABLE `game_bundles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `bundleId` (`bundleId`);

--
-- Индексы таблицы `game_users`
--
ALTER TABLE `game_users`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
-- AUTO_INCREMENT для таблицы `game_bundles`
--
ALTER TABLE `game_bundles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_users`
--
ALTER TABLE `game_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`companyId`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_bundles`
--
ALTER TABLE `game_bundles`
  ADD CONSTRAINT `game_bundles_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_bundles_ibfk_2` FOREIGN KEY (`bundleId`) REFERENCES `bundles` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_users`
--
ALTER TABLE `game_users`
  ADD CONSTRAINT `game_users_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_users_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
