-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2021 at 04:20 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `didi-pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `title`, `email`, `ingredients`, `created_at`) VALUES
(15, 'PESCATORE', 'jade@123.com', 'salami, bacon, egg', '2021-05-08 16:13:38'),
(16, 'AMORE', 'lucas@gmail.com', 'tuna, mushroom, spice', '2021-05-08 16:14:15'),
(17, 'BANANPIZZA', 'max@gmail.com', 'ham, banana, curry', '2021-05-08 16:14:57'),
(18, 'MOZZARELLA', 'maggie@gmail.com', 'mozzarella, ruccola, svartpeppar', '2021-05-08 16:15:29'),
(19, 'MARINARA', 'lee@123.com', 'shrimp, clam, cheese', '2021-05-08 16:16:18'),
(20, 'HAWAII', 'nathan@gmail.com', 'ham, pineapple, cheese', '2021-05-08 16:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;