-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Maio-2023 às 14:19
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sgb_documentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `contacto` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `documento_path` varchar(255) DEFAULT NULL,
  `formulario_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id`, `nome_cliente`, `contacto`, `descricao`, `documento_path`, `formulario_path`, `created_at`, `updated_at`) VALUES
(6, 'Benia Anibal Macamo', '824962036', 'Este é um comentario', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_10-36-15_Benia Anibal Macamo_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_10-36-15_Benia Anibal Macamo_carta d\'apresentacao IRENE.docx', '2023-05-29 08:36:15', '2023-05-29 08:36:15'),
(7, 'Vanio Anibal Macamo', '485345', 'Essa é uma Descricao que realmente deve ser revista Essa é uma Descricao que realmente deve ser revista  Essa é uma Descricao que realmente deve ser revista  Essa é uma Descricao que realmente deve ser revista  Essa é uma Descricao que realmente deve ser revista  Essa é uma Descricao que realmente deve ser revista  Essa é uma Descricao que realmente deve ser revista  Essa é uma Descricao que realmente deve ser revista', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_10-37-29_Vanio Anibal Macamo_carta d\'apresentacao IRENE.docx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_10-37-29_Vanio Anibal Macamo_atalhos.txt', '2023-05-29 08:37:29', '2023-05-29 08:37:29'),
(8, 'Antoniio', '823131123', 'Comand a', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_11-38-26_Antoniio_Simulacao Mapa.docx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_11-38-26_Antoniio_Universidade Técnica de Moçambique.docx', '2023-05-29 09:38:26', '2023-05-29 09:38:26'),
(9, 'Sebastião Magala', '824962036', 'Comentarios', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_15-26-05_Sebastião Magala_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_15-26-05_Sebastião Magala_atalhos.txt', '2023-05-29 13:26:05', '2023-05-29 13:26:05'),
(10, 'Vanio Anibal Macamo', '84491313', 'j', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_15-57-03_Vanio Anibal Macamo_carta d\'apresentacao IRENE.docx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_15-57-03_Vanio Anibal Macamo_Bie Direito.docx', '2023-05-29 13:57:03', '2023-05-29 13:57:03'),
(11, 'Sebastião Magala', '84491313', 'skjdsalmdsad', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_16-17-38_Sebastião Magala_Bie Direito.docx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_16-17-38_Sebastião Magala_Bie Direito.docx', '2023-05-29 14:17:38', '2023-05-29 14:17:38'),
(12, 'Joseph Katame', '8284348234', 'Comentarios', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_16-42-05_Joseph Katame_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_16-42-05_Joseph Katame_atalhos.txt', '2023-05-29 14:42:05', '2023-05-29 14:42:05'),
(13, 'Joseph Katame', '823213421', 'cOMENT', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_16-43-31_Joseph Katame_Bie Direito.docx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_16-43-31_Joseph Katame_Simulacao Mapa.docx', '2023-05-29 14:43:31', '2023-05-29 14:43:31'),
(14, 'Antoniio', '1212', 'm,ssdsad', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-29_16-47-34_Antoniio_pgadmin.log', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-29_16-47-34_Antoniio_pgadmin.log', '2023-05-29 14:47:34', '2023-05-29 14:47:34'),
(15, 'Cintya Natalia Ruco', '821234567', 'Comentarios sobre o o problema', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-07-08_Cintya Natalia Ruco_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-07-08_Cintya Natalia Ruco_atalhos.txt', '2023-05-30 05:07:08', '2023-05-30 05:07:08'),
(16, 'Ivanildo Simoões Cau', '821234567', 'Descricao sobre o problema ele quer que isso seja feito o mais rapido posssivel', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-08-26_Ivanildo Simoões Cau_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-08-26_Ivanildo Simoões Cau_atalhos.txt', '2023-05-30 05:08:26', '2023-05-30 05:08:26'),
(17, 'Ivanildo Simoões Cau', '821234567', 'Descricao sobre o problema ele quer que isso seja feito o mais rapido posssivel', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-09-21_Ivanildo Simoões Cau_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-09-21_Ivanildo Simoões Cau_atalhos.txt', '2023-05-30 05:09:22', '2023-05-30 05:09:22'),
(18, 'Ivanildo Simoões Cau', '821234567', 'Descricao sobre o problema ele quer que isso seja feito o mais rapido posssivel', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-10-00_Ivanildo Simoões Cau_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-10-00_Ivanildo Simoões Cau_atalhos.txt', '2023-05-30 05:10:00', '2023-05-30 05:10:00'),
(19, 'Ivanildo Simoões Cau', '821234567', 'Descricao sobre o problema ele quer que isso seja feito o mais rapido posssivel', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-13-07_Ivanildo Simoões Cau_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-13-07_Ivanildo Simoões Cau_atalhos.txt', '2023-05-30 05:13:07', '2023-05-30 05:13:07'),
(20, 'Ivanildo Simoões Cau', '821234567', 'Descricao sobre o problema ele quer que isso seja feito o mais rapido posssivel', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-19-54_Ivanildo Simoões Cau_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-19-54_Ivanildo Simoões Cau_atalhos.txt', '2023-05-30 05:19:54', '2023-05-30 05:19:54'),
(21, 'Ivanildo Simoões Cau', '821234567', 'Descricao sobre o problema ele quer que isso seja feito o mais rapido posssivel', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-21-01_Ivanildo Simoões Cau_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-21-01_Ivanildo Simoões Cau_atalhos.txt', '2023-05-30 05:21:02', '2023-05-30 05:21:02'),
(22, 'Antonio Sebastião Samugudo', '822323462', 'Este cLIEEEEEENNNEWKWE', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-23-36_Antonio Sebastião Samugudo_atalhos.txt', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-23-36_Antonio Sebastião Samugudo_carta d\'apresentacao IRENE.docx', '2023-05-30 05:23:36', '2023-05-30 05:23:36'),
(23, 'Belton Benedito Jamine', '821232123', 'Esse cliente quer fazer o reset de Pin, esqueceu a password e tem todos dados completos Testeee....\r\nEsse cliente quer fazer o reset de Pin, esqueceu a password e tem todos dados completos Testeee....\r\nEsse cliente quer fazer o reset de Pin, esqueceu a password e tem todos dados completos Testeee....\r\nEsse cliente quer fazer o reset de Pin, esqueceu a password e tem todos dados completos Testeee....\r\nEsse cliente quer fazer o reset de Pin, esqueceu a password e tem todos dados completos Testeee....\r\nEsse cliente quer fazer o reset de Pin, esqueceu a password e tem todos dados completos Testeee....', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_07-49-35_Belton Benedito Jamine_Pygames.pdf', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_07-49-35_Belton Benedito Jamine_T1.rar', '2023-05-30 05:49:35', '2023-05-30 05:49:35'),
(24, 'Felizardo Arão Mutoa', '82312323131', 'Comentáriosss.', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_08-07-30_Felizardo Arão Mutoa_2023-05-29_10-36-15_Benia Anibal Macamo_carta d\'apresentacao IRENE (2).docx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_08-07-30_Felizardo Arão Mutoa_2023-05-29_10-36-15_Benia Anibal Macamo_carta d\'apresentacao IRENE (2).docx', '2023-05-30 06:07:30', '2023-05-30 06:07:30'),
(25, 'Cintya Natalia Ruco', '258833332985', 'HJSVVSCSA ZJJSA ,KHGDSA HVHJDSAD HSVDLHAJDSAB OIAJSDSA', 'C:\\Documentos_Sistema_Gestao_Documental\\Documentos_Identificacao\\2023-05-30_12-17-28_Cintya Natalia Ruco_Extracto 258833401486.xlsx', 'C:\\Documentos_Sistema_Gestao_Documental\\Formulario\\2023-05-30_12-17-28_Cintya Natalia Ruco_Diagrama de Classes quick check.asta', '2023-05-30 10:17:28', '2023-05-30 10:17:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_05_25_152428_create_documentos_table', 2),
(7, '2023_05_30_134816_add_status_and_profile_to_users_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
