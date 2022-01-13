-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Maio-2021 às 15:29
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `intranet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE `arquivos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arquivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id`, `created_at`, `updated_at`, `nome`, `local`, `arquivo`, `tipo`) VALUES
(8, '2021-05-18 19:14:51', '2021-05-18 19:14:51', 'Escala de Turno Pisa 2021', 'Pisa', 'Escala_Turno_Pisa_1621365291.pdf', 'Escala'),
(9, '2021-05-18 19:15:11', '2021-05-18 19:15:11', 'Escala de Turno Arapoti 2021', 'Arapoti', 'Escala_Turno_Arapoti_1621365311.pdf', 'Escala'),
(10, '2021-05-18 19:22:37', '2021-05-18 19:22:37', 'Itinerário BO PISA', 'Pisa', 'Itinerario_Circular_PISA_1621365756.pdf', 'Itinerario'),
(11, '2021-05-18 19:22:53', '2021-05-18 19:22:53', 'Itinerário BO ARA', 'Arapoti', 'Itinerário ADM X Turno_1621365773.pdf', 'Itinerario'),
(12, '2021-05-18 19:37:03', '2021-05-18 19:37:03', 'Calendário 2021', NULL, 'Calendario_Feriados_1621366623.pdf', 'Calendario'),
(13, '2021-05-18 19:43:29', '2021-05-18 19:43:29', 'Assist Médica BO Paper 2021', NULL, 'PLANO DE ASSISTÊNCIA MÉDICA_1621367009.pdf', 'Psaude'),
(14, '2021-05-18 20:01:29', '2021-05-18 20:01:29', 'Programa Qualidade de Vida 2021', NULL, 'qualidade_de_vida_1621368089.pdf', 'QualidadeDeVida'),
(15, '2021-05-18 20:05:30', '2021-05-18 20:05:30', 'Responsabilidade Social', NULL, 'Ações de Solidariedade na Comunidade_1621368330.pdf', 'RespSocial'),
(16, '2021-05-18 20:09:36', '2021-05-18 20:09:36', 'Informativo Interno 2021', NULL, '04-21 - Informativo - O Papel de Nosso Papel_1621368576.pdf', 'Jornal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comunicados`
--

CREATE TABLE `comunicados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comunicados`
--

INSERT INTO `comunicados` (`id`, `titulo`, `user_id`, `created_at`, `updated_at`) VALUES
(12, 'BO PAPER Arapoti Informa | Indicadores de Performance SSMAQ | Janeiro 2021', NULL, '2021-02-18 16:57:49', '2021-02-18 16:57:49'),
(13, 'BO PAPER Informa | LEMBRETE | Programa de Bolsas de Estudos | Prazo Inscrições até 19.02.21', NULL, '2021-02-18 17:08:44', '2021-02-18 17:08:44'),
(14, 'BO PAPER Informa |  \"O Papel do Nosso Papel\" | Edição 01.2021', NULL, '2021-02-18 17:09:13', '2021-02-18 17:09:13'),
(15, 'BO PAPER Informa | Transporte Coletivo 17.02 | Horário Administrativo', NULL, '2021-02-18 17:09:37', '2021-02-18 17:09:37'),
(16, 'BO PAPER Informa | Boletim Interno Covid-19 | No. 36', NULL, '2021-02-18 17:10:28', '2021-02-18 17:10:28'),
(19, 'Titulo', NULL, '2021-04-08 20:37:10', '2021-04-08 20:37:10'),
(20, 'Comunicado Feriado', NULL, '2021-05-13 15:13:37', '2021-05-13 15:13:37'),
(21, 'asdad', NULL, '2021-05-13 19:44:34', '2021-05-13 19:44:34'),
(22, 'asdad', NULL, '2021-05-13 22:07:28', '2021-05-13 22:07:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'JORGE AUGUSTO GRIEGER', 'jorggrieger@gmail.com', '43996775500', 'Duvidas', 'Tenho Duvidas', '2021-02-18 17:14:45', '2021-02-18 17:14:45'),
(2, 'JORGE AUGUSTO GRIEGER', 'jorggrieger@gmail.com', '43996775500', 'Teste', 'TEste', '2021-05-12 13:58:13', '2021-05-12 13:58:13'),
(3, NULL, NULL, NULL, 'Duvidas', 'wsdas', '2021-05-12 14:01:06', '2021-05-12 14:01:06'),
(4, 'JORGE AUGUSTO GRIEGER', 'jorggrieger@gmail.com', '43999792496', 'Chamado', 'adasda', '2021-05-12 14:03:18', '2021-05-12 14:03:18'),
(5, NULL, NULL, NULL, 'Reclamação', 'Teste teste teste teste', '2021-05-13 15:07:48', '2021-05-13 15:07:48'),
(6, 'JORGE AUGUSTO GRIEGER', 'jorggrieger@gmail.com', '43996775500', 'Duvidas', 'Testestetstetsetststagatdahaidhsuid', '2021-05-13 15:08:22', '2021-05-13 15:08:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `indicadores`
--

CREATE TABLE `indicadores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `indicadores`
--

INSERT INTO `indicadores` (`id`, `created_at`, `updated_at`, `nome`, `arquivo`, `local`) VALUES
(1, NULL, NULL, '', 'Arapoti - Termo de Adesão Plano de Saude_1621346948.pdf', 'Arapoti'),
(3, NULL, NULL, '', 'Arapoti - Termo de Adesão Plano de Saude -_1621348193.pdf', 'Arapoti'),
(4, NULL, NULL, 'asdsadad', 'Arapoti - Termo de Adesão Plano de Saude -_1621348253.pdf', 'Arapoti'),
(5, NULL, NULL, 'asdsadad', 'Arapoti - Termo de Adesão Plano de Saude -_1621350074.pdf', 'Arapoti'),
(6, NULL, NULL, 'teste', 'Arapoti - Termo de Adesão Plano de Saude_1621350085.pdf', 'Arapoti'),
(7, NULL, NULL, 'teste2', 'Ações TI PI - Pisa_1621350164.docx', 'Pisa'),
(8, NULL, NULL, 'asdad', 'Arapoti - Termo de Adesão Plano de Saude -_1621355623.pdf', 'Pisa'),
(9, NULL, NULL, 'pta', 'Arapoti - Termo de Adesão Plano de Saude_1621356308.pdf', 'Pisa'),
(10, '2021-05-18 16:46:42', '2021-05-18 16:46:42', 'mão de obra geral', 'Arapoti - Termo de Adesão Plano de Saude -_1621356402.pdf', 'Pisa'),
(11, '2021-05-18 16:57:19', '2021-05-18 16:57:19', 'almoxarifado', 'GUIA_ACESSO_v03_1621357039.pdf', 'Pisa'),
(12, '2021-05-18 17:05:08', '2021-05-18 17:05:08', 'indicadoresssmaarapotimaio2021', 'SSMAQ_Dezembro_2020_Ara_1621357508.pdf', 'Arapoti'),
(13, '2021-05-18 18:32:44', '2021-05-18 18:32:44', 'escala de turno pisa 2021', 'Escala_Turno_Pisa_1621362764.pdf', 'Arapoti'),
(14, '2021-05-18 18:45:21', '2021-05-18 18:45:21', 'abril2021', 'pos_1621363521.pdf', 'Pisa'),
(15, '2021-05-18 19:11:16', '2021-05-18 19:11:16', 'escala turno arapoti 2021', 'Escala_Turno_Arapoti_1621365076.pdf', 'Arapoti');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_11_133554_create_contacts_table', 1),
(5, '2021_02_12_125117_create_trix_rich_texts_table', 1),
(6, '2021_02_12_125428_comunicado', 1),
(7, '2021_05_18_100905_sgi_indicadores', 2),
(8, '2021_05_18_151929_arquivos', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jorggrieger@gmail.com', '$2y$10$ppBoFxTpbEMrMqWx846nR.8TK/MBpLWTS35FzRkiKcE90HcunkV2i', '2021-05-26 15:02:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` int(10) UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `trix_attachments`
--

INSERT INTO `trix_attachments` (`id`, `field`, `attachable_id`, `attachable_type`, `attachment`, `disk`, `is_pending`, `created_at`, `updated_at`) VALUES
(9, 'content', 12, 'App\\Comunicado', 'Rb0QXsJjjlQE2A4vzEJ8m4oFlOqtHMvWr9IOD0Io.pdf', 'public', 0, '2021-02-18 16:57:40', '2021-02-18 16:57:50'),
(10, 'content', 13, 'App\\Comunicado', 'pSA1qeHXhwyNIJTaxlXLEW9AAnrVZOujIANKF0KF.png', 'public', 0, '2021-02-18 17:08:31', '2021-02-18 17:08:44'),
(11, 'content', 14, 'App\\Comunicado', '83rI0c0msRU0rwUhxkNLzamEv2uWV8Uq4tAH8vGd.pdf', 'public', 0, '2021-02-18 17:09:09', '2021-02-18 17:09:13'),
(12, 'content', 15, 'App\\Comunicado', 'cYxyfxU7BKxs5m3uNFoLVF6eOcspOiH1G2KPrw84.png', 'public', 0, '2021-02-18 17:09:33', '2021-02-18 17:09:37'),
(13, 'content', 16, 'App\\Comunicado', 'CSmAQwPvxe7Mbai1UCjYBX0NUt3LIlbUgTQkqcuC.png', 'public', 0, '2021-02-18 17:10:10', '2021-02-18 17:10:28'),
(14, 'content', 16, 'App\\Comunicado', 'MLWpZo6FUzYt4eHMTjLTOsxTQlQQNqnGrq7jKsqx.pdf', 'public', 0, '2021-02-18 17:10:26', '2021-02-18 17:10:28'),
(16, 'content', 19, 'App\\Comunicado', 'O0dp78wwEj0nq0ap4yZFDv6uK2Lwc35A0V6z8T11.png', 'public', 0, '2021-04-08 20:37:04', '2021-04-08 20:37:10'),
(18, 'content', 20, 'App\\Comunicado', 'GrPA9Nmw8jXl5KT2lJhjqQzuncTkmhGnyPzAqVMF.png', 'public', 0, '2021-05-13 15:13:31', '2021-05-13 15:13:37'),
(19, 'content', NULL, 'App\\Comunicado', 'ioDDLu4sIcu7H4wAC5UuVpeAQs19UUq7pR6JRrjF.png', 'public', 1, '2021-05-13 19:44:12', '2021-05-13 19:44:12'),
(20, 'content', 21, 'App\\Comunicado', 'dh5T7Dc6zzoQFUAmQ9gOvFqMz6yKprkPcopHwRMD.png', 'public', 0, '2021-05-13 19:44:32', '2021-05-13 19:44:34'),
(21, 'content', 22, 'App\\Comunicado', 'PSFEldYeS18j4gdmuC628Hq46MTv6fXZ8e1sH6Zz.pdf', 'public', 0, '2021-05-13 22:07:22', '2021-05-13 22:07:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `trix_rich_texts`
--

INSERT INTO `trix_rich_texts` (`id`, `field`, `model_type`, `model_id`, `content`, `created_at`, `updated_at`) VALUES
(12, 'content', 'App\\Comunicado', 12, '<div>Boa tarde !</div><div>&nbsp;</div><div>Conheça os Indicadores de Performance em SSMAQ -&nbsp; Janeiro 2021.</div><div>&nbsp;</div><div>&nbsp;</div><div>Comunicação BO PAPER<br><br><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;application/pdf&quot;,&quot;filename&quot;:&quot;Indicadores de SSMAQ Janeiro_ 2021_ Ara.pdf&quot;,&quot;filesize&quot;:1389212,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/Rb0QXsJjjlQE2A4vzEJ8m4oFlOqtHMvWr9IOD0Io.pdf&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/Rb0QXsJjjlQE2A4vzEJ8m4oFlOqtHMvWr9IOD0Io.pdf&quot;}\" data-trix-content-type=\"application/pdf\" class=\"attachment attachment--file attachment--pdf\"><a href=\"http://127.0.0.1:8000/storage/Rb0QXsJjjlQE2A4vzEJ8m4oFlOqtHMvWr9IOD0Io.pdf\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">Indicadores de SSMAQ Janeiro_ 2021_ Ara.pdf</span> <span class=\"attachment__size\">1.32 MB</span></figcaption></a></figure></div>', '2021-02-18 16:57:50', '2021-02-18 16:57:50'),
(13, 'content', 'App\\Comunicado', 13, '<div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;casdad.png&quot;,&quot;filesize&quot;:558077,&quot;height&quot;:1351,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/pSA1qeHXhwyNIJTaxlXLEW9AAnrVZOujIANKF0KF.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/pSA1qeHXhwyNIJTaxlXLEW9AAnrVZOujIANKF0KF.png&quot;,&quot;width&quot;:961}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://127.0.0.1:8000/storage/pSA1qeHXhwyNIJTaxlXLEW9AAnrVZOujIANKF0KF.png\"><img src=\"http://127.0.0.1:8000/storage/pSA1qeHXhwyNIJTaxlXLEW9AAnrVZOujIANKF0KF.png\" width=\"961\" height=\"1351\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">casdad.png</span> <span class=\"attachment__size\">545 KB</span></figcaption></a></figure>&nbsp;</div>', '2021-02-18 17:08:44', '2021-02-18 17:08:44'),
(14, 'content', 'App\\Comunicado', 14, '<div>Boa tarde !</div><div>&nbsp;</div><div>Nosso Informe está de cara nova !</div><div>Confira e aproveite a leitura...</div><div>&nbsp;</div><div>Comunicação BO Paper<br><br><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;application/pdf&quot;,&quot;filename&quot;:&quot;01-21 - Informativo - O Papel de Nosso Papel.pdf&quot;,&quot;filesize&quot;:1437254,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/83rI0c0msRU0rwUhxkNLzamEv2uWV8Uq4tAH8vGd.pdf&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/83rI0c0msRU0rwUhxkNLzamEv2uWV8Uq4tAH8vGd.pdf&quot;}\" data-trix-content-type=\"application/pdf\" class=\"attachment attachment--file attachment--pdf\"><a href=\"http://127.0.0.1:8000/storage/83rI0c0msRU0rwUhxkNLzamEv2uWV8Uq4tAH8vGd.pdf\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">01-21 - Informativo - O Papel de Nosso Papel.pdf</span> <span class=\"attachment__size\">1.37 MB</span></figcaption></a></figure></div>', '2021-02-18 17:09:13', '2021-02-18 17:09:13'),
(15, 'content', 'App\\Comunicado', 15, '<div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;sdada.png&quot;,&quot;filesize&quot;:259094,&quot;height&quot;:1369,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/cYxyfxU7BKxs5m3uNFoLVF6eOcspOiH1G2KPrw84.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/cYxyfxU7BKxs5m3uNFoLVF6eOcspOiH1G2KPrw84.png&quot;,&quot;width&quot;:916}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://127.0.0.1:8000/storage/cYxyfxU7BKxs5m3uNFoLVF6eOcspOiH1G2KPrw84.png\"><img src=\"http://127.0.0.1:8000/storage/cYxyfxU7BKxs5m3uNFoLVF6eOcspOiH1G2KPrw84.png\" width=\"916\" height=\"1369\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">sdada.png</span> <span class=\"attachment__size\">253.02 KB</span></figcaption></a></figure></div>', '2021-02-18 17:09:37', '2021-02-18 17:09:37'),
(16, 'content', 'App\\Comunicado', 16, '<div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;boletim covid.png&quot;,&quot;filesize&quot;:1154038,&quot;height&quot;:1294,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/CSmAQwPvxe7Mbai1UCjYBX0NUt3LIlbUgTQkqcuC.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/CSmAQwPvxe7Mbai1UCjYBX0NUt3LIlbUgTQkqcuC.png&quot;,&quot;width&quot;:959}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://127.0.0.1:8000/storage/CSmAQwPvxe7Mbai1UCjYBX0NUt3LIlbUgTQkqcuC.png\"><img src=\"http://127.0.0.1:8000/storage/CSmAQwPvxe7Mbai1UCjYBX0NUt3LIlbUgTQkqcuC.png\" width=\"959\" height=\"1294\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">boletim covid.png</span> <span class=\"attachment__size\">1.1 MB</span></figcaption></a></figure>&nbsp;<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;application/pdf&quot;,&quot;filename&quot;:&quot;Boletim 36.pdf&quot;,&quot;filesize&quot;:667045,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/MLWpZo6FUzYt4eHMTjLTOsxTQlQQNqnGrq7jKsqx.pdf&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/MLWpZo6FUzYt4eHMTjLTOsxTQlQQNqnGrq7jKsqx.pdf&quot;}\" data-trix-content-type=\"application/pdf\" class=\"attachment attachment--file attachment--pdf\"><a href=\"http://127.0.0.1:8000/storage/MLWpZo6FUzYt4eHMTjLTOsxTQlQQNqnGrq7jKsqx.pdf\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">Boletim 36.pdf</span> <span class=\"attachment__size\">651.41 KB</span></figcaption></a></figure></div>', '2021-02-18 17:10:28', '2021-02-18 17:10:28'),
(19, 'content', 'App\\Comunicado', 19, '<div>Conteudo<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;2020-10-28 09_35_15-Modificar função_ autorizações.png&quot;,&quot;filesize&quot;:32147,&quot;height&quot;:586,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/O0dp78wwEj0nq0ap4yZFDv6uK2Lwc35A0V6z8T11.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/O0dp78wwEj0nq0ap4yZFDv6uK2Lwc35A0V6z8T11.png&quot;,&quot;width&quot;:1152}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://127.0.0.1:8000/storage/O0dp78wwEj0nq0ap4yZFDv6uK2Lwc35A0V6z8T11.png\"><img src=\"http://127.0.0.1:8000/storage/O0dp78wwEj0nq0ap4yZFDv6uK2Lwc35A0V6z8T11.png\" width=\"1152\" height=\"586\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">2020-10-28 09_35_15-Modificar função_ autorizações.png</span> <span class=\"attachment__size\">31.39 KB</span></figcaption></a></figure></div>', '2021-04-08 20:37:10', '2021-04-08 20:37:10'),
(20, 'content', 'App\\Comunicado', 20, '<div>&nbsp;<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;aprender.png&quot;,&quot;filesize&quot;:338316,&quot;height&quot;:511,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/GrPA9Nmw8jXl5KT2lJhjqQzuncTkmhGnyPzAqVMF.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/GrPA9Nmw8jXl5KT2lJhjqQzuncTkmhGnyPzAqVMF.png&quot;,&quot;width&quot;:1024}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://127.0.0.1:8000/storage/GrPA9Nmw8jXl5KT2lJhjqQzuncTkmhGnyPzAqVMF.png\"><img src=\"http://127.0.0.1:8000/storage/GrPA9Nmw8jXl5KT2lJhjqQzuncTkmhGnyPzAqVMF.png\" width=\"1024\" height=\"511\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">aprender.png</span> <span class=\"attachment__size\">330.39 KB</span></figcaption></a></figure></div>', '2021-05-13 15:13:37', '2021-05-13 15:13:37'),
(21, 'content', 'App\\Comunicado', 21, '<div>10.219.6.204<figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image/png&quot;,&quot;filename&quot;:&quot;casdad.png&quot;,&quot;filesize&quot;:558077,&quot;height&quot;:1351,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/dh5T7Dc6zzoQFUAmQ9gOvFqMz6yKprkPcopHwRMD.png&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/dh5T7Dc6zzoQFUAmQ9gOvFqMz6yKprkPcopHwRMD.png&quot;,&quot;width&quot;:961}\" data-trix-content-type=\"image/png\" data-trix-attributes=\"{&quot;presentation&quot;:&quot;gallery&quot;}\" class=\"attachment attachment--preview attachment--png\"><a href=\"http://127.0.0.1:8000/storage/dh5T7Dc6zzoQFUAmQ9gOvFqMz6yKprkPcopHwRMD.png\"><img src=\"http://127.0.0.1:8000/storage/dh5T7Dc6zzoQFUAmQ9gOvFqMz6yKprkPcopHwRMD.png\" width=\"961\" height=\"1351\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">casdad.png</span> <span class=\"attachment__size\">545 KB</span></figcaption></a></figure></div>', '2021-05-13 19:44:34', '2021-05-13 19:44:34'),
(22, 'content', 'App\\Comunicado', 22, '<div><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;application/pdf&quot;,&quot;filename&quot;:&quot;Ações de Solidariedade na Comunidade.pdf&quot;,&quot;filesize&quot;:710960,&quot;href&quot;:&quot;http://127.0.0.1:8000/storage/PSFEldYeS18j4gdmuC628Hq46MTv6fXZ8e1sH6Zz.pdf&quot;,&quot;url&quot;:&quot;http://127.0.0.1:8000/storage/PSFEldYeS18j4gdmuC628Hq46MTv6fXZ8e1sH6Zz.pdf&quot;}\" data-trix-content-type=\"application/pdf\" class=\"attachment attachment--file attachment--pdf\"><a href=\"http://127.0.0.1:8000/storage/PSFEldYeS18j4gdmuC628Hq46MTv6fXZ8e1sH6Zz.pdf\"><figcaption class=\"attachment__caption\"><span class=\"attachment__name\">Ações de Solidariedade na Comunidade.pdf</span> <span class=\"attachment__size\">694.3 KB</span></figcaption></a></figure></div>', '2021-05-13 22:07:28', '2021-05-13 22:07:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Fatima Lodi', 'fatima.lodi@bopaper.com.br', NULL, '$2y$10$8tb9/lBuEz7oPIKGCwTVCOBVJM2uZgwRQVMY9addd/zAAxYF/nREi', NULL, '2021-05-26 12:54:39', '2021-05-26 12:54:39'),
(2, 'JORGE AUGUSTO GRIEGER', 'jorggrieger@gmail.com', NULL, '$2y$10$DNUAQOHIrusVeJeN5budE.1cMS4gwu1coDb0pZgEjEznCsNm1tb4q', NULL, '2021-05-26 15:02:14', '2021-05-26 15:02:14');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `arquivos`
--
ALTER TABLE `arquivos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comunicado_user_id_foreign` (`user_id`);

--
-- Índices para tabela `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id`);

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
-- Índices para tabela `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `arquivos`
--
ALTER TABLE `arquivos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `comunicados`
--
ALTER TABLE `comunicados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `comunicados`
--
ALTER TABLE `comunicados`
  ADD CONSTRAINT `comunicado_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
