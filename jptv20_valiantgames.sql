-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 20 2023 г., 21:28
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
  `title` varchar(255) NOT NULL
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
-- Структура таблицы `characteristics`
--

CREATE TABLE `characteristics` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
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
-- Структура таблицы `gamemode`
--

CREATE TABLE `gamemode` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `gamemode`
--

INSERT INTO `gamemode` (`id`, `name`) VALUES
(1, 'Singleplayer'),
(2, 'Multiplayer'),
(3, 'Local multiplayer'),
(4, 'Coop'),
(5, 'Splitscreen Coop');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `publishYear` int(11) NOT NULL,
  `publisher` int(11) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `ageLimit` int(11) NOT NULL
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
-- Структура таблицы `game_categories`
--

CREATE TABLE `game_categories` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_characteristics`
--

CREATE TABLE `game_characteristics` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `characteristicId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_companies`
--

CREATE TABLE `game_companies` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `companyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_gamemode`
--

CREATE TABLE `game_gamemode` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `gamemodeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_platforms`
--

CREATE TABLE `game_platforms` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `platformId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_regions`
--

CREATE TABLE `game_regions` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `regionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `game_users`
--

CREATE TABLE `game_users` (
  `id` int(11) NOT NULL,
  `gameId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `platforms`
--

CREATE TABLE `platforms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `platforms`
--

INSERT INTO `platforms` (`id`, `title`) VALUES
(1, 'Windows'),
(2, 'XBox One'),
(3, 'XBox 360'),
(4, 'XBox'),
(5, 'PlayStation 1'),
(6, 'PlayStation 2'),
(7, 'PlayStation 3'),
(8, 'PlayStation 4'),
(9, 'PSP'),
(10, 'Nintendo Switch'),
(11, 'SteamDeck');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `title`) VALUES
(1, 'Europe');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `reviewText` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `gameUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'ADMIN'),
(2, 'USER'),
(3, 'DEVELOPER');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `wallet` float NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `region` int(11) NOT NULL,
  `birthDate` datetime NOT NULL,
  `role` int(11) NOT NULL
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
-- Индексы таблицы `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gamemode`
--
ALTER TABLE `gamemode`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `publisher` (`publisher`);

--
-- Индексы таблицы `game_bundles`
--
ALTER TABLE `game_bundles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `bundleId` (`bundleId`);

--
-- Индексы таблицы `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Индексы таблицы `game_characteristics`
--
ALTER TABLE `game_characteristics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `characteristicId` (`characteristicId`);

--
-- Индексы таблицы `game_companies`
--
ALTER TABLE `game_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `companyId` (`companyId`);

--
-- Индексы таблицы `game_gamemode`
--
ALTER TABLE `game_gamemode`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `gamemodeId` (`gamemodeId`);

--
-- Индексы таблицы `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `platformId` (`platformId`);

--
-- Индексы таблицы `game_regions`
--
ALTER TABLE `game_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `regionId` (`regionId`);

--
-- Индексы таблицы `game_users`
--
ALTER TABLE `game_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameId` (`gameId`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gameUserId` (`gameUserId`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region`),
  ADD KEY `role` (`role`);

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
-- AUTO_INCREMENT для таблицы `characteristics`
--
ALTER TABLE `characteristics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `gamemode`
--
ALTER TABLE `gamemode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT для таблицы `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_characteristics`
--
ALTER TABLE `game_characteristics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_companies`
--
ALTER TABLE `game_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_gamemode`
--
ALTER TABLE `game_gamemode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_platforms`
--
ALTER TABLE `game_platforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_regions`
--
ALTER TABLE `game_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `game_users`
--
ALTER TABLE `game_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`publisher`) REFERENCES `companies` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_bundles`
--
ALTER TABLE `game_bundles`
  ADD CONSTRAINT `game_bundles_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_bundles_ibfk_2` FOREIGN KEY (`bundleId`) REFERENCES `bundles` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_categories`
--
ALTER TABLE `game_categories`
  ADD CONSTRAINT `game_categories_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_categories_ibfk_2` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_characteristics`
--
ALTER TABLE `game_characteristics`
  ADD CONSTRAINT `game_characteristics_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_characteristics_ibfk_2` FOREIGN KEY (`characteristicId`) REFERENCES `characteristics` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_companies`
--
ALTER TABLE `game_companies`
  ADD CONSTRAINT `game_companies_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_companies_ibfk_2` FOREIGN KEY (`companyId`) REFERENCES `companies` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_gamemode`
--
ALTER TABLE `game_gamemode`
  ADD CONSTRAINT `game_gamemode_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_gamemode_ibfk_2` FOREIGN KEY (`gamemodeId`) REFERENCES `gamemode` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_platforms`
--
ALTER TABLE `game_platforms`
  ADD CONSTRAINT `game_platforms_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_platforms_ibfk_2` FOREIGN KEY (`platformId`) REFERENCES `platforms` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_regions`
--
ALTER TABLE `game_regions`
  ADD CONSTRAINT `game_regions_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_regions_ibfk_2` FOREIGN KEY (`regionId`) REFERENCES `regions` (`id`);

--
-- Ограничения внешнего ключа таблицы `game_users`
--
ALTER TABLE `game_users`
  ADD CONSTRAINT `game_users_ibfk_1` FOREIGN KEY (`gameId`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `game_users_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`gameUserId`) REFERENCES `game_users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`region`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
