-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Abr-2019 às 03:59
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_flexpeak`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `ID_ALUNO` int(10) UNSIGNED NOT NULL,
  `NOME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `LOGRADOURO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NUMERO` int(11) NOT NULL,
  `BAIRRO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CIDADE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ESTADO` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATA_CRIACAO` date DEFAULT NULL,
  `CEP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_CURSO` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`ID_ALUNO`, `NOME`, `DATA_NASCIMENTO`, `LOGRADOURO`, `NUMERO`, `BAIRRO`, `CIDADE`, `ESTADO`, `DATA_CRIACAO`, `CEP`, `ID_CURSO`, `created_at`, `updated_at`) VALUES
(3, 'JHON NASCIMENTO', '2019-04-06', 'Rua das Pitombeiras', 64, 'Coroado', 'Manaus', 'AM', '2020-04-11', '69082550', 3, '2019-04-07 01:25:18', '2019-04-07 04:41:21'),
(4, 'DARLEIA CARAVALHO', '2019-04-18', 'Rua Sobral', 64, 'Gilberto Mestrinho', 'Manaus', 'AM', '2019-04-16', '69086550', 4, '2019-04-07 04:29:06', '2019-04-07 05:22:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `ID_CURSO` int(10) UNSIGNED NOT NULL,
  `NOME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATA_CRIACAO` date DEFAULT NULL,
  `ID_PROFESSOR` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`ID_CURSO`, `NOME`, `DATA_CRIACAO`, `ID_PROFESSOR`, `created_at`, `updated_at`) VALUES
(3, 'GEOGRAFIA', '1988-07-17', 7, '2019-04-07 03:28:55', '2019-04-07 05:18:13'),
(4, 'TEORIA', '1999-07-17', 7, '2019-04-07 05:04:09', '2019-04-07 05:04:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_06_192904_create_PROFESSOR_table', 1),
(4, '2019_04_06_192921_create_CURSO_table', 1),
(5, '2019_04_06_192936_create_ALUNO_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professors`
--

CREATE TABLE `professors` (
  `ID_PROFESSOR` int(10) UNSIGNED NOT NULL,
  `NOME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `DATA_CRIACAO` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professors`
--

INSERT INTO `professors` (`ID_PROFESSOR`, `NOME`, `DATA_NASCIMENTO`, `DATA_CRIACAO`, `created_at`, `updated_at`) VALUES
(7, 'PEDRO', '2019-04-06', '2019-04-17', '2019-04-07 02:29:50', '2019-04-07 02:39:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`ID_ALUNO`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`ID_PROFESSOR`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `ID_ALUNO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID_CURSO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `ID_PROFESSOR` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
