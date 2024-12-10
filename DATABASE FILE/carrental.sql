-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 10 2024 г., 09:30
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carrental`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `car_id` int(20) NOT NULL,
  `car_name` varchar(50) NOT NULL,
  `car_nameplate` varchar(50) NOT NULL,
  `car_img` varchar(50) DEFAULT 'NA',
  `ac_price` float NOT NULL,
  `non_ac_price` float NOT NULL,
  `ac_price_per_day` float NOT NULL,
  `non_ac_price_per_day` float NOT NULL,
  `car_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_nameplate`, `car_img`, `ac_price`, `non_ac_price`, `ac_price_per_day`, `non_ac_price_per_day`, `car_availability`) VALUES
(1, 'Audi A4', '01 AA 001', 'assets/img/cars/audi-a4.jpg', 3600, 2600, 52000, 26000, 'yes'),
(2, 'Hyundai Creta', '45 EE 455', 'assets/img/cars/creta.jpg', 2200, 1200, 29000, 14000, 'yes'),
(3, 'BMW 6-Series', '67 ZZ 123', 'assets/img/cars/bmw6.jpg', 3900, 3000, 69500, 59990, 'yes'),
(4, 'Mercedes-Benz E-Class', '99 QQ 998', 'assets/img/cars/mcec.jpg', 4540, 3090, 86000, 52000, 'yes'),
(6, 'Ford EcoSport', '45 AP 678', 'assets/img/cars/ecosport.png', 2100, 1300, 38900, 26000, 'yes'),
(7, 'Honda Amaze', '50 RR 550', 'assets/img/cars/amaze.png', 1400, 1200, 28000, 24000, 'no'),
(8, 'Land Rover Range Rover Sport', '21 QW 234', 'assets/img/cars/rangero.jpg', 3600, 3000, 60000, 50000, 'no'),
(9, 'MG Hector', '66 GP 677', 'assets/img/cars/mghector.jpg', 2000, 1200, 29000, 14000, 'yes'),
(10, 'Honda CR-V', '96 TY 789', 'assets/img/cars/hondacr.jpg', 2200, 1500, 28500, 14000, 'yes'),
(11, 'Mahindra XUV 500', '14 RR 141', 'assets/img/cars/Mahindra XUV.jpg', 1500, 1300, 30000, 26000, 'yes'),
(12, 'Toyota Fortuner', '35 AS 355', 'assets/img/cars/Fortuner.png', 1600, 1400, 32000, 28000, 'yes'),
(13, 'Hyundai Veloster', '24 OO 515', 'assets/img/cars/hyundai0.png', 2300, 1500, 45000, 35000, 'yes'),
(14, 'Jaguar XF', '60 GJ 100', 'assets/img/cars/jaguarxf.jpg', 3900, 2990, 110000, 67090, 'no'),
(15, 'Land Rover Defender', '56 CV 001', 'assets/img/cars/1000.webp', 10000, 7000, 1500000, 1200000, 'yes'),
(16, 'Mercedes-Benz A-Class Limousine', '25 VN 025', 'assets/img/cars/Land Rover Defender.jpg', 15000, 10000, 150000, 100000, 'no'),
(17, 'Solaris X5', '36 TT 724', 'assets\\img\\cars\\cattouchret.webp', 6500, 6000, 65000, 60000, 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `clientcars`
--

CREATE TABLE `clientcars` (
  `car_id` int(20) NOT NULL,
  `client_username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `clientcars`
--

INSERT INTO `clientcars` (`car_id`, `client_username`) VALUES
(15, 'Gpw'),
(16, 'Gpw'),
(1, 'harry'),
(3, 'harry'),
(7, 'harry'),
(8, 'harry'),
(9, 'harry'),
(11, 'harry'),
(12, 'harry'),
(2, 'jenny'),
(4, 'jenny'),
(6, 'jenny'),
(10, 'jenny'),
(13, 'jenny'),
(14, 'jenny'),
(17, 'Suren909');

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `client_username` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_phone` varchar(15) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  `client_address` varchar(50) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `client_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`client_username`, `client_name`, `client_phone`, `client_email`, `client_address`, `client_password`) VALUES
('Arminka', 'Արմինե Ասատրյան', '043970242', 'armine123@gmail.com', 'House 4 Street 1', 'qwertyuiop'),
('Gpw', 'genie', '8301973920', 'Test@gmail.com', 'Thiruvelir,Madurai', 'Test@123'),
('harry', 'Harry Den', '9876543210', 'harryden@gmail.com', '2477  Harley Vincent Drive', '$2y$10$13Ehbb0yMbai6'),
('jenny', 'Jeniffer Washington', '7850000069', 'washjeni@gmail.com', '4139  Mesa Drive', '$2y$10$OGhlQOC2.Uygu'),
('Suren909', 'PLAY KINGツ', '+37443970242', 'play.king202020@gmail.com', '-', 'qazwsxedcrfv'),
('tom', 'Tommy Doee', '900696969', 'tom@gmail.com', '4645  Dawson Drive', '$2y$10$gYpLDy2TU5Eb4');

-- --------------------------------------------------------

--
-- Структура таблицы `customers`
--

CREATE TABLE `customers` (
  `customer_username` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_email` varchar(25) NOT NULL,
  `customer_address` varchar(50) NOT NULL,
  `customer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `customers`
--

INSERT INTO `customers` (`customer_username`, `customer_name`, `customer_phone`, `customer_email`, `customer_address`, `customer_password`) VALUES
('antonio', 'Antonio M', '077855580', 'antony@gmail.com', 'Erevan', '$2y$10$Ea9ovl/ajLm4w'),
('christine', 'Christine', '094558565', 'chr@gmail.com', 'Armavir', '$2y$10$tUdTFaVGPobml'),
('ethan', 'Ethan Hawk', '098474757', 'thisisethan@gmail.com', 'Sevan', 'password'),
('Gpw', 'genie', '8301973920', 'Test@gmail.com', 'Russia Moscow', 'Test@123'),
('james', 'James Washington', '-', 'james@gmail.com', 'Armenia Vardenis', '$2y$10$uK5EcErdpG9xw'),
('lucas', 'Lucas Rhoades', '-', 'lucas@gmail.com', 'Dubai', '$2y$10$ge/AeHbL3wfHV'),
('radeliaper', 'helllo', '-', '-', '', 'hello'),
('Suren909', 'PLAY KINGツ', '043970242', 'play.king202020@gmail.com', '-', '$2y$10$CgiIHge9TGAgH');

-- --------------------------------------------------------

--
-- Структура таблицы `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `dl_number` varchar(50) NOT NULL,
  `driver_phone` varchar(15) NOT NULL,
  `driver_address` varchar(50) NOT NULL,
  `driver_gender` varchar(10) NOT NULL,
  `client_username` varchar(50) NOT NULL,
  `driver_availability` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `dl_number`, `driver_phone`, `driver_address`, `driver_gender`, `client_username`, `driver_availability`) VALUES
(1, 'Արմեն Սարգսյան', '27840218658 ', '+374437863157', 'Երևան', ' Արական', 'harry', 'no'),
(2, 'Վլադիմիր Աթեյան', '03191563155 ', '+37477789852', 'Արտաշատ', 'Արական', 'harry', 'yes'),
(3, 'Կարեն Ավինյան', '32346288078 ', '+37443982838', 'Սպիտակ', 'Արական', 'harry', 'yes'),
(4, 'Գայանե Խաչատրյան', '04316015965 ', '+37498214521', 'Երևան', 'Իգական', 'jenny', 'yes'),
(5, 'Արմինե Ասատրյան', '68799466631 ', '+37493242526', 'Սևան', 'Իգական', 'jenny', 'yes'),
(6, 'Սարգիս Զաքարյան', '36740186040 ', '+37494151216', 'Վանաձոր', 'Արական', 'tom', 'yes'),
(7, 'Արտաշես Հովհաննիսյան', '44919316260 ', '+7541023695', 'Վարդենիս', 'Արական', 'harry', 'no'),
(8, 'Ստեփան Ուրումյան', '94592817723', '+37496289596', 'Դիլիջան', 'Արական', 'jenny', 'no'),
(9, 'Վահրամ Բագրատյան', '57623891710', '+37410101010', 'Հրազդան', 'Արական', 'Suren909', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(20) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`name`, `e_mail`, `message`) VALUES
('Nikhil', 'nikhil@gmail.com', 'Hope this works.');

-- --------------------------------------------------------

--
-- Структура таблицы `rentedcars`
--

CREATE TABLE `rentedcars` (
  `id` int(100) NOT NULL,
  `customer_username` varchar(50) NOT NULL,
  `car_id` int(20) NOT NULL,
  `driver_id` int(20) NOT NULL,
  `booking_date` date NOT NULL,
  `rent_start_date` date NOT NULL,
  `rent_end_date` date NOT NULL,
  `car_return_date` date DEFAULT NULL,
  `fare` double NOT NULL,
  `charge_type` varchar(25) NOT NULL DEFAULT 'days',
  `distance` double DEFAULT NULL,
  `no_of_days` int(50) DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `return_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `rentedcars`
--

INSERT INTO `rentedcars` (`id`, `customer_username`, `car_id`, `driver_id`, `booking_date`, `rent_start_date`, `rent_end_date`, `car_return_date`, `fare`, `charge_type`, `distance`, `no_of_days`, `total_amount`, `return_status`) VALUES
(574681245, 'ethan', 4, 2, '2018-07-18', '2018-07-01', '2018-07-02', '2018-07-18', 11, 'km', 244, 1, 5884, 'R'),
(574681246, 'james', 6, 6, '2018-07-18', '2018-06-01', '2018-06-28', '2018-07-18', 15, 'km', 69, 27, 5035, 'R'),
(574681247, 'antonio', 3, 1, '2018-07-18', '2018-07-19', '2018-07-22', '2018-07-20', 13, 'km', 421, 3, 5473, 'R'),
(574681248, 'ethan', 1, 2, '2018-07-20', '2018-07-28', '2018-07-29', '2018-07-20', 10, 'km', 69, 1, 690, 'R'),
(574681249, 'james', 1, 2, '2018-07-23', '2018-07-24', '2018-07-25', '2018-07-23', 10, 'km', 500, 1, 5000, 'R'),
(574681250, 'lucas', 3, 2, '2018-07-23', '2018-07-23', '2018-07-24', '2018-07-23', 2600, 'days', NULL, 1, 2600, 'R'),
(574681251, 'james', 10, 1, '2018-07-23', '2018-07-25', '2018-07-30', '2018-07-23', 10, 'km', 60, 2, 600, 'R'),
(574681252, 'christine', 11, 2, '2018-07-23', '2018-07-23', '2018-07-23', '2018-07-23', 13, 'km', 200, 0, 2600, 'R'),
(574681253, 'christine', 6, 7, '2018-07-23', '2018-07-23', '2018-08-03', '2018-07-23', 2600, 'days', NULL, 11, 28600, 'R'),
(574681254, 'ethan', 12, 5, '2018-07-23', '2018-07-23', '2018-07-26', '2018-07-23', 3200, 'days', NULL, 3, 9600, 'R'),
(574681255, 'christine', 8, 5, '2018-07-23', '2018-07-23', '2018-08-08', '2018-07-23', 2400, 'days', NULL, 16, 38400, 'R'),
(574681257, 'james', 7, 4, '2018-08-11', '2018-08-13', '2018-08-17', NULL, 14, 'km', NULL, NULL, NULL, 'NR'),
(574681258, 'lucas', 3, 1, '2021-03-24', '2021-03-24', '2021-03-25', '2021-03-24', 2600, 'days', NULL, 1, 2600, 'R'),
(574681259, 'lucas', 14, 8, '2021-03-24', '2021-03-24', '2021-03-26', '2021-03-24', 6100, 'days', NULL, 2, 12200, 'R'),
(574681260, 'ethan', 3, 3, '2024-09-18', '2024-09-25', '2024-09-26', '2024-09-18', 30, 'km', 60, 1, 1800, 'R'),
(574681261, 'radeliaper', 12, 7, '2024-09-20', '2024-09-25', '2024-09-25', NULL, 16, 'km', NULL, NULL, NULL, 'NR'),
(574681262, 'ethan', 17, 9, '2024-09-20', '2024-09-22', '2024-10-01', '2024-11-20', 1500, 'days', NULL, 9, 23500, 'R'),
(574681263, 'ethan', 10, 5, '2024-10-02', '2024-10-10', '2024-10-10', '2024-11-20', 15, 'km', 60, 0, 9100, 'R'),
(574681264, 'ethan', 3, 3, '2024-10-09', '2024-10-09', '2024-10-16', '2024-11-20', 6950, 'days', NULL, 7, 55650, 'R'),
(574681265, 'ethan', 3, 2, '2024-10-10', '2024-10-10', '2024-10-31', '2024-11-20', 6950, 'days', NULL, 21, 149950, 'R'),
(574681266, 'ethan', 10, 4, '2024-10-10', '2024-10-11', '2024-10-24', '2024-11-20', 15, 'km', 60, 13, 6300, 'R'),
(574681267, 'ethan', 4, 5, '2024-11-19', '2024-11-20', '2024-11-21', '2024-11-20', 86000, 'days', NULL, 1, 86000, 'R'),
(574681269, 'ethan', 14, 8, '2024-11-19', '2024-11-21', '2024-11-30', NULL, 3900, 'km', NULL, NULL, NULL, 'NR'),
(574681270, 'ethan', 3, 1, '2024-11-19', '2024-11-20', '2024-11-28', NULL, 3900, 'km', NULL, NULL, NULL, 'NR');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD UNIQUE KEY `car_nameplate` (`car_nameplate`);

--
-- Индексы таблицы `clientcars`
--
ALTER TABLE `clientcars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `client_username` (`client_username`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_username`);

--
-- Индексы таблицы `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_username`);

--
-- Индексы таблицы `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `dl_number` (`dl_number`),
  ADD KEY `client_username` (`client_username`);

--
-- Индексы таблицы `rentedcars`
--
ALTER TABLE `rentedcars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_username` (`customer_username`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `driver_id` (`driver_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `rentedcars`
--
ALTER TABLE `rentedcars`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=574681271;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `clientcars`
--
ALTER TABLE `clientcars`
  ADD CONSTRAINT `clientcars_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`),
  ADD CONSTRAINT `clientcars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`);

--
-- Ограничения внешнего ключа таблицы `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `driver_ibfk_1` FOREIGN KEY (`client_username`) REFERENCES `clients` (`client_username`);

--
-- Ограничения внешнего ключа таблицы `rentedcars`
--
ALTER TABLE `rentedcars`
  ADD CONSTRAINT `rentedcars_ibfk_1` FOREIGN KEY (`customer_username`) REFERENCES `customers` (`customer_username`),
  ADD CONSTRAINT `rentedcars_ibfk_2` FOREIGN KEY (`car_id`) REFERENCES `cars` (`car_id`),
  ADD CONSTRAINT `rentedcars_ibfk_3` FOREIGN KEY (`driver_id`) REFERENCES `driver` (`driver_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
