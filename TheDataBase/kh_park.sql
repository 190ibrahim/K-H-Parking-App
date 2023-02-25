-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25. Feb, 2023 15:55 PM
-- Tjener-versjon: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kh_park`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `guest`
--

CREATE TABLE `guest` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `lisence_plate` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_answere` int(11) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `visiting_who` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `guest_waiting_list`
--

CREATE TABLE `guest_waiting_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lisence_plate` varchar(255) NOT NULL,
  `date_put_on_list` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_want_parking` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `parking_lot`
--

CREATE TABLE `parking_lot` (
  `parking_spot_number` bigint(20) UNSIGNED NOT NULL,
  `is_free` tinyint(1) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `lisence_plate` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `in_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `time_out` datetime NOT NULL,
  `expected_arrival_time` datetime NOT NULL,
  `reserved_from` datetime NOT NULL,
  `reserved_to` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` bigint(20) NOT NULL,
  `lisence_plate` varchar(255) NOT NULL,
  `credit` int(11) NOT NULL,
  `parking_space` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `working_from` time NOT NULL,
  `working_to` time NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_answere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `waiting_list`
--

CREATE TABLE `waiting_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `waiting` tinyint(1) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `lisence_plate` bigint(20) NOT NULL,
  `date_put_on_list` datetime NOT NULL,
  `date_want_a_spot` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lisence_plate` (`lisence_plate`);

--
-- Indexes for table `guest_waiting_list`
--
ALTER TABLE `guest_waiting_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lisence_plate` (`lisence_plate`) USING BTREE;

--
-- Indexes for table `parking_lot`
--
ALTER TABLE `parking_lot`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `lisence_plate` (`lisence_plate`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `lisence_plate` (`lisence_plate`);

--
-- Indexes for table `waiting_list`
--
ALTER TABLE `waiting_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking_lot`
--
ALTER TABLE `parking_lot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Begrensninger for dumpede tabeller
--

--
-- Begrensninger for tabell `guest_waiting_list`
--
ALTER TABLE `guest_waiting_list`
  ADD CONSTRAINT `guest_waiting_list_ibfk_1` FOREIGN KEY (`lisence_plate`) REFERENCES `guest` (`lisence_plate`);

--
-- Begrensninger for tabell `parking_lot`
--
ALTER TABLE `parking_lot`
  ADD CONSTRAINT `parking_lot_ibfk_1` FOREIGN KEY (`lisence_plate`) REFERENCES `guest` (`lisence_plate`);

--
-- Begrensninger for tabell `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `parking_lot` (`user_id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `parking_lot` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
