-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 09 2020 г., 20:31
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
  `password_hash` varchar(120) NOT NULL,
  `seller_fee` double NOT NULL DEFAULT 0.05,
  `buyer_fee` double NOT NULL DEFAULT 0.05,
  `kyc_status` tinyint(1) NOT NULL DEFAULT 0,
  `receive_broadcast` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `nickname`, `email`, `password_hash`, `seller_fee`, `buyer_fee`, `kyc_status`, `receive_broadcast`) VALUES
(7, 'admin', 'admin@pyex.com', '$argon2i$v=19$m=65536,t=4,p=1$VUNLc1F2WmcydHNXMDJDOA$82rzevbTx0Uif6XU5vSE2yjeAb55U/1BwSxUdVSN6+E', 0, 0, 1, 0);

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
-- Индексы сохранённых таблиц
--

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Ограничения внешнего ключа таблицы `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`crypto_id`) REFERENCES `crypto` (`id`),
  ADD CONSTRAINT `wallet_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
