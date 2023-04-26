-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 03:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `order_number` int(100) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `items` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `account_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`order_number`, `total`, `items`, `date`, `account_id`) VALUES
(20230442, '90.81', '32GAL Green Trashcan (1), 2x6x8 Pressure Treated (1), Asphalt Roofing Felt #15 (1)', '2023-04-25', 7),
(20230444, '61.56', '8\" x 8\" x 16\" Block (3), PVC 1-1/4 in. x 10 ft sch40 (2), CPVC 3/4 in. x 10 ft (1)', '2023-04-25', 7),
(20230445, '149.77', '1CUFT Potting Mix (1), Red Mulch (2), 6CUFT Steel Wheelbarrow (1)', '2023-04-25', 0),
(20230446, '159.85', 'CPVC 3/4 in. x 10 ft (1), 1CUFT Potting Mix (1), Red Mulch (2), 6CUFT Steel Wheelbarrow (1)', '2023-04-25', 0),
(20230447, '159.85', 'CPVC 3/4 in. x 10 ft (1), 1CUFT Potting Mix (1), Red Mulch (2), 6CUFT Steel Wheelbarrow (1)', '2023-04-25', 11),
(20230448, '193.42', '32GAL Blue Recycle (2), 2x8x8 Pressure Treated (3), New Propane Tank (Filled) (1)', '2023-04-25', 17),
(20230449, '130.63', '32GAL Blue Recycle (1), 2x4x8 Pressure Treated (3), New Propane Tank (Filled) (1)', '2023-04-25', 18),
(20230450, '155.04', '32GAL Green Trashcan (1), Asphalt Roofing Felt #30 (2), 8\" x 8\" x 16\" Block (2), Firewood Bundle (3)', '2023-04-25', 19),
(20230451, '67.90', 'Propane Exchange (1), PEX 1/2 in. x 10 ft Blue (2), 10LB Mortar Mix (3), 40LB TOP SOIL (3)', '2023-04-25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `user_id` int(1) NOT NULL,
  `day_of_week` varchar(10) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `is_day_off` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`user_id`, `day_of_week`, `start_time`, `end_time`, `is_day_off`) VALUES
(9, 'Sunday', '10:00:00', '17:00:00', 0),
(9, 'Monday', NULL, NULL, 1),
(9, 'Tuesday', NULL, NULL, 1),
(9, 'Wednesday', '09:00:00', '17:00:00', 0),
(9, 'Thursday', NULL, NULL, 1),
(9, 'Friday', NULL, NULL, 1),
(9, 'Saturday', '10:00:00', '16:30:00', 0),
(8, 'Sunday', '10:00:00', '15:00:00', 0),
(8, 'Monday', NULL, NULL, 1),
(8, 'Tuesday', NULL, NULL, 1),
(8, 'Wednesday', NULL, NULL, 1),
(8, 'Thursday', NULL, NULL, 1),
(8, 'Friday', NULL, NULL, 1),
(8, 'Saturday', NULL, NULL, 1),
(11, 'Sunday', '10:00:00', '16:00:00', 0),
(11, 'Monday', NULL, NULL, 1),
(11, 'Tuesday', NULL, NULL, 1),
(11, 'Wednesday', NULL, NULL, 1),
(11, 'Thursday', '14:00:00', '15:00:00', 0),
(11, 'Friday', NULL, NULL, 1),
(11, 'Saturday', NULL, NULL, 1),
(17, 'Sunday', '12:00:00', '17:00:00', 0),
(17, 'Monday', NULL, NULL, 1),
(17, 'Tuesday', NULL, NULL, 1),
(17, 'Wednesday', NULL, NULL, 1),
(17, 'Thursday', '08:00:00', '17:00:00', 0),
(17, 'Friday', '09:30:00', '16:00:00', 0),
(17, 'Saturday', '10:00:00', '15:30:00', 0),
(18, 'Sunday', '10:00:00', '14:00:00', 0),
(18, 'Monday', NULL, NULL, 1),
(18, 'Tuesday', NULL, NULL, 1),
(18, 'Wednesday', NULL, NULL, 1),
(18, 'Thursday', '08:00:00', '17:00:00', 0),
(18, 'Friday', '11:30:00', '14:30:00', 0),
(18, 'Saturday', '12:00:00', '17:00:00', 0),
(19, 'Sunday', NULL, NULL, 1),
(19, 'Monday', '09:00:00', '15:00:00', 0),
(19, 'Tuesday', '12:00:00', '16:00:00', 0),
(19, 'Wednesday', NULL, NULL, 1),
(19, 'Thursday', NULL, NULL, 1),
(19, 'Friday', '08:00:00', '17:00:00', 0),
(19, 'Saturday', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isManager` tinyint(1) NOT NULL DEFAULT 0,
  `isEmployee` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `password`, `email`, `date_created`, `isAdmin`, `isManager`, `isEmployee`) VALUES
(7, 'Kylea', 'ant', 'Pass123', 'kyle12345@gmail.com', '2023-02-28 21:53:42', 1, 1, 1),
(8, 'Kyledgbrdbd', 'Antczak', 'Pass12345', 'kyleantc@gmail.com', '2023-03-01 00:38:51', 0, 1, 1),
(9, 'ky', 'egrere', 'Passwordd', '123@gmail.com', '2023-03-01 21:48:15', 0, 0, 1),
(11, 'test1', 'teset1', 'test1', 'test1@gmail.com', '2023-04-25 02:40:40', 0, 0, 1),
(13, 'Kyle ', 'Admin', 'Pass123', 'admin@mail.com', '2023-04-25 19:10:45', 1, 1, 1),
(14, 'Kyle', 'Manager', 'Pass123', 'manager@mail.com', '2023-04-25 19:11:47', 0, 1, 1),
(15, 'Kyle', 'Employee', 'Pass123', 'employee@mail.com', '2023-04-25 19:13:08', 0, 0, 1),
(16, 'Kyle', 'Customer', 'Pass123', 'customer@mail.com', '2023-04-25 19:13:57', 0, 0, 0),
(17, 'John', 'Doe', 'Pass123', 'john@mail.com', '2023-04-25 19:45:03', 0, 0, 1),
(18, 'Jane', 'Smith', 'Pass123', 'jane@mail.com', '2023-04-25 20:09:16', 0, 0, 1),
(19, 'Will', 'Johnson', 'Pass123', 'will@mail.com', '2023-04-25 20:34:50', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `order_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20230452;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
