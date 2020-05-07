-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 07 2020 г., 22:54
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pyex`
--

-- --------------------------------------------------------

--
-- Структура таблицы `country`
--

CREATE TABLE `country` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'United States of America'),
(2, 'Canada'),
(3, 'United Arab Emirates'),
(4, 'Republic of Maldives'),
(5, 'Federal Republic of Germany'),
(6, 'Republic of Seychelles'),
(7, 'Japan');

-- --------------------------------------------------------

--
-- Структура таблицы `crypto`
--

CREATE TABLE `crypto` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL,
  `name_short` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `crypto`
--

INSERT INTO `crypto` (`id`, `name`, `name_short`) VALUES
(1, 'Bitcoin', 'BTC'),
(2, 'Ethereum', 'ETH'),
(3, 'EOS', 'EOS'),
(4, 'IOTA', 'MIOTA'),
(5, 'Ripple', 'XRP'),
(6, 'Bitcoin cash', 'BCH');

-- --------------------------------------------------------

--
-- Структура таблицы `myorder`
--

CREATE TABLE `myorder` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `tradingpair_id` int(11) UNSIGNED NOT NULL,
  `type_id` int(11) UNSIGNED NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `myorder`
--

INSERT INTO `myorder` (`id`, `user_id`, `tradingpair_id`, `type_id`, `amount`) VALUES
(1, 3, 4, 1, 0.17),
(2, 2, 9, 2, 0.1),
(3, 1, 1, 1, 400);

-- --------------------------------------------------------

--
-- Структура таблицы `myorder_type`
--

CREATE TABLE `myorder_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `myorder_type`
--

INSERT INTO `myorder_type` (`id`, `description`) VALUES
(1, 'Buy'),
(2, 'Sell');

-- --------------------------------------------------------

--
-- Структура таблицы `tradingpair`
--

CREATE TABLE `tradingpair` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_crypto_id` int(11) UNSIGNED NOT NULL,
  `sec_crypto_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tradingpair`
--

INSERT INTO `tradingpair` (`id`, `first_crypto_id`, `sec_crypto_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 2, 1),
(7, 3, 1),
(8, 4, 1),
(9, 5, 1),
(10, 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) UNSIGNED NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `country_id` int(11) UNSIGNED DEFAULT NULL,
  `seller_fee` double NOT NULL,
  `buyer_fee` double NOT NULL,
  `registration_ip` varchar(15) NOT NULL,
  `registration_time` date NOT NULL,
  `kyc_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `nickname`, `email`, `country_id`, `seller_fee`, `buyer_fee`, `registration_ip`, `registration_time`, `kyc_status`) VALUES
(1, 'iXasthur', 'xasthur009@pyex.com', 7, 0.001, 0.001, '120.120.120.120', '2020-05-07', 1),
(2, 'LePasse', 'lepasse@pyex.com', 1, 0.05, 0.05, '120.120.120.121', '2020-05-07', 0),
(3, 'BlackParrot', 'blackparrot@pyex.com', 4, 0.05, 0.05, '120.120.120.122', '2020-05-07', 0),
(4, 'Goganad', 'goganad@gmail.com', 2, 0.05, 0.05, '120.120.120.123', '2020-05-07', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `wallet`
--

CREATE TABLE `wallet` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `crypto_id` int(11) UNSIGNED NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wallet`
--

INSERT INTO `wallet` (`id`, `user_id`, `crypto_id`, `amount`) VALUES
(1, 1, 1, 500),
(2, 1, 2, 50000),
(3, 1, 3, 5000000),
(4, 2, 2, 50),
(5, 2, 4, 70000000),
(6, 3, 1, 1200),
(7, 4, 3, 1200000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `crypto`
--
ALTER TABLE `crypto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tradingpair_id` (`tradingpair_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `myorder_type`
--
ALTER TABLE `myorder_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tradingpair`
--
ALTER TABLE `tradingpair`
  ADD PRIMARY KEY (`id`),
  ADD KEY `first_crypto_id` (`first_crypto_id`),
  ADD KEY `sec_crypto_id` (`sec_crypto_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Индексы таблицы `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crypto_id` (`crypto_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `crypto`
--
ALTER TABLE `crypto`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `myorder`
--
ALTER TABLE `myorder`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `myorder_type`
--
ALTER TABLE `myorder_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tradingpair`
--
ALTER TABLE `tradingpair`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `myorder`
--
ALTER TABLE `myorder`
  ADD CONSTRAINT `myorder_ibfk_1` FOREIGN KEY (`tradingpair_id`) REFERENCES `tradingpair` (`id`),
  ADD CONSTRAINT `myorder_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `myorder_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `myorder_type` (`id`);

--
-- Ограничения внешнего ключа таблицы `tradingpair`
--
ALTER TABLE `tradingpair`
  ADD CONSTRAINT `tradingpair_ibfk_1` FOREIGN KEY (`first_crypto_id`) REFERENCES `crypto` (`id`),
  ADD CONSTRAINT `tradingpair_ibfk_2` FOREIGN KEY (`sec_crypto_id`) REFERENCES `crypto` (`id`);

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Ограничения внешнего ключа таблицы `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`crypto_id`) REFERENCES `crypto` (`id`),
  ADD CONSTRAINT `wallet_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
