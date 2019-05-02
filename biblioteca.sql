-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2019 at 12:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `autores`
--

CREATE TABLE `autores` (
  `id` int(11) NOT NULL,
  `nome_autores` varchar(50) NOT NULL,
  `img_autores` varchar(10) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autores`
--

INSERT INTO `autores` (`id`, `nome_autores`, `img_autores`, `updated_at`, `created_at`) VALUES
(1, 'Daw Brow', '', '0000-00-00', '0000-00-00'),
(2, 'J.K. Rowling', '', '0000-00-00', '0000-00-00'),
(3, 'Isaac Asimov', '', '0000-00-00', '0000-00-00'),
(4, 'John Ronald Reuel Tolkien', '', '0000-00-00', '0000-00-00'),
(5, 'Machado de Assis', '', '0000-00-00', '0000-00-00'),
(6, 'Carlos Drummond de Andrade', '', '0000-00-00', '0000-00-00'),
(7, 'Júlio Verne', '', '0000-00-00', '0000-00-00'),
(8, 'Paulo Coelho', '', '0000-00-00', '0000-00-00'),
(9, 'Stieg Larsson', '', '0000-00-00', '0000-00-00'),
(10, 'Stephen King', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `blogPost_titulo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogPost_msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogPost_autor` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blogPost_data` date NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `blogPost_titulo`, `blogPost_msg`, `blogPost_autor`, `blogPost_data`, `updated_at`, `created_at`) VALUES
(2, 'teste3', 'este eh um teste', 'joao', '2019-04-24', '2019-04-24', '2019-04-24'),
(4, 'teste2', 'este eh um teste', 'joao', '2019-04-24', '2019-04-24', '2019-04-24'),
(5, 'teste2', 'este eh um teste', 'joao', '2019-04-24', '2019-04-24', '2019-04-24'),
(6, 'teste2', 'este eh um teste', 'joao', '2019-04-24', '2019-04-24', '2019-04-24'),
(7, 'ssssssssss', 'este eh um teste', 'joao', '2019-04-24', '2019-04-24', '2019-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `cadastro_livros`
--

CREATE TABLE `cadastro_livros` (
  `id` int(11) NOT NULL,
  `nome_livros` varchar(100) NOT NULL,
  `isbn_livros` varchar(30) NOT NULL,
  `edicao_livros` varchar(50) NOT NULL,
  `qtd_livros` int(50) NOT NULL,
  `fk_livros_autor` int(11) NOT NULL,
  `fk_livros_editora` int(11) NOT NULL,
  `fk_livros_genero` int(11) NOT NULL,
  `fk_livros_prateleira` int(11) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cadastro_livros`
--

INSERT INTO `cadastro_livros` (`id`, `nome_livros`, `isbn_livros`, `edicao_livros`, `qtd_livros`, `fk_livros_autor`, `fk_livros_editora`, `fk_livros_genero`, `fk_livros_prateleira`, `updated_at`, `created_at`) VALUES
(2, 'Inferno', '9789722526449', '3 edicao', 2, 1, 2, 5, 1, '2019-05-02', '0000-00-00'),
(3, 'O codigo Da Vinci', '0385504209', '3 edicao', 3, 1, 3, 5, 1, '0000-00-00', '0000-00-00'),
(4, 'Harry Potter e a Pedra Filosofal', '0747532699', '1 edicao', 2, 2, 4, 3, 2, '0000-00-00', '0000-00-00'),
(5, 'Harry Potter and the Chamber of Secrets', ' 0747538492', '1 edicao', 2, 2, 4, 3, 2, '0000-00-00', '0000-00-00'),
(6, 'Harry Potter e o Prisioneiro de Azkaban', '0747542155', '1 edicao', 2, 2, 4, 3, 2, '0000-00-00', '0000-00-00'),
(7, 'Harry Potter e o Cálice de Fogo', '074754624X', '1 edicao', 2, 2, 4, 3, 2, '0000-00-00', '0000-00-00'),
(8, 'Eu, Robô', '', '2 edicao', 1, 3, 5, 1, 5, '0000-00-00', '0000-00-00'),
(9, 'Serie da Fundação', '', '3 edicao', 1, 3, 5, 1, 5, '0000-00-00', '0000-00-00'),
(10, 'Hobbit', '', '1 edicao', 1, 4, 6, 3, 2, '0000-00-00', '0000-00-00'),
(11, 'O Senhor dos Anéis', '', '1 edicao', 1, 4, 6, 3, 2, '0000-00-00', '0000-00-00'),
(12, 'Memórias Póstumas de Brás Cubas', '', '1 edicao', 1, 5, 7, 9, 6, '0000-00-00', '0000-00-00'),
(13, 'Helena', '', '1 edicao', 1, 5, 7, 4, 6, '0000-00-00', '0000-00-00'),
(14, 'O Amor Natural', '850104041X', '1 edicao', 1, 6, 8, 10, 7, '0000-00-00', '0000-00-00'),
(15, 'Viagem ao Centro da Terra', '', '1 edicao', 1, 7, 9, 6, 8, '0000-00-00', '0000-00-00'),
(16, 'A Volta ao Mundo em 80 Dias', '', '1 edicao', 1, 7, 10, 6, 8, '0000-00-00', '0000-00-00'),
(17, 'O Alquimista', '9727110118', '1 edicao', 1, 8, 11, 7, 6, '0000-00-00', '0000-00-00'),
(18, 'Os Homens que Não Amavam as Mulheres', '9727110118', '1 edicao', 1, 9, 12, 4, 4, '0000-00-00', '0000-00-00'),
(19, 'A Menina que Brincava com Fogo', '9788535916270', '1 edicao', 1, 9, 12, 4, 4, '0000-00-00', '0000-00-00'),
(20, 'A Rainha do Castelo de Ar', '9788535915204', '1 edicao', 1, 9, 12, 4, 4, '0000-00-00', '0000-00-00'),
(21, 'Carrie, a estranha', '9721031011', '1 edicao', 1, 10, 2, 2, 3, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome_clientes` varchar(50) NOT NULL,
  `endereco_clientes` varchar(50) NOT NULL,
  `celular_clientes` int(20) DEFAULT NULL,
  `cpf_clientes` varchar(11) NOT NULL,
  `email_clientes` varchar(50) NOT NULL,
  `telefone_clientes` int(20) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome_clientes`, `endereco_clientes`, `celular_clientes`, `cpf_clientes`, `email_clientes`, `telefone_clientes`, `updated_at`, `created_at`) VALUES
(21, 'Joao de Oliveira', 'Rua do Eixo, 2001', 991236274, '12345678901', 'jose@gmail.om', 23457564, '2019-05-02', '0000-00-00'),
(22, 'Jose dos Santos', 'Djalma Correia, 250', 991236276, '12345678902', 'jose.santos@gmail.com', 23457594, '0000-00-00', '0000-00-00'),
(23, 'Paulo Correia', 'Ru Vinte, 124', 991236271, '12345678903', 'paulo@gmail.com', 23457599, '0000-00-00', '0000-00-00'),
(24, 'Antonio da silva', 'Rua Dezenove , 164', 991235671, '12345676783', 'tonho@gmail.com', 23454499, '0000-00-00', '0000-00-00'),
(25, 'Marcos do Carmo', 'Rua Sena , 244', 991345671, '12323676783', 'marcos@gmail.com', 23874499, '0000-00-00', '0000-00-00'),
(26, 'Pedro Santos', 'Rua Luis da Rosa , 503', 991345953, '12320676783', 'pedro@gmail.com', 23830029, '0000-00-00', '0000-00-00'),
(27, 'Davi Jose', 'Rua Uba , 403', 991345567, '17620676783', 'davi@gmail.com', 23830499, '0000-00-00', '0000-00-00'),
(28, 'Leandro Santos', 'Av do Engenho , 100', 991345677, '17620016783', 'leandro@gmail.com', 23830419, '0000-00-00', '0000-00-00'),
(29, 'Joao Correia dos Santos', 'Av do Engenho , 150', 993345677, '17628616783', 'joao.correia@gmail.com', 23080419, '0000-00-00', '0000-00-00'),
(30, 'Jose Santos de oliveira', 'Rua Otto Unger , 450', 992815677, '17620376783', 'jose.oliveira@gmail.com', 23080649, '0000-00-00', '0000-00-00'),
(33, 'joao', 'rua teste', 12345678, '23123123', 'joao@joao', 12312312, '2019-05-02', '2019-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `editoras`
--

CREATE TABLE `editoras` (
  `id` int(11) NOT NULL,
  `nome_editoras` varchar(50) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `editoras`
--

INSERT INTO `editoras` (`id`, `nome_editoras`, `updated_at`, `created_at`) VALUES
(2, 'Doubleday', '0000-00-00', '0000-00-00'),
(3, 'Random House', '0000-00-00', '0000-00-00'),
(4, 'Bloomsburry Publishing', '0000-00-00', '0000-00-00'),
(5, 'Gnome Press ', '0000-00-00', '0000-00-00'),
(6, ' George Allen & Unwin', '0000-00-00', '0000-00-00'),
(7, ' Tipografia Nacional', '0000-00-00', '0000-00-00'),
(8, 'Record', '0000-00-00', '0000-00-00'),
(9, 'David Corazzi', '0000-00-00', '0000-00-00'),
(10, 'Melhoramentos', '0000-00-00', '0000-00-00'),
(11, 'Paralela', '0000-00-00', '0000-00-00'),
(12, 'Companhia das Letras', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `fk_emprestimo_clientes` int(11) NOT NULL,
  `fk_emprestimo_livros` int(11) NOT NULL,
  `fk_emprestimo_users` int(11) NOT NULL,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `data_devolvido` date DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `fk_emprestimo_clientes`, `fk_emprestimo_livros`, `fk_emprestimo_users`, `data_emprestimo`, `data_devolucao`, `data_devolvido`, `updated_at`, `created_at`) VALUES
(7, 27, 14, 8, '2019-04-17', '2019-05-01', '2019-05-02', '2019-04-30', '2019-04-29'),
(9, 27, 2, 8, '2019-04-25', '2019-04-06', NULL, '2019-04-30', '2019-04-30'),
(11, 23, 5, 8, '2019-04-13', '2019-04-19', NULL, '2019-04-30', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `nome_generos` varchar(50) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`id`, `nome_generos`, `updated_at`, `created_at`) VALUES
(1, 'Ficção Cientifica', '0000-00-00', '0000-00-00'),
(2, 'Terror', '0000-00-00', '0000-00-00'),
(3, 'Fantasia', '0000-00-00', '0000-00-00'),
(4, 'Romance', '0000-00-00', '0000-00-00'),
(5, 'Suspense', '0000-00-00', '0000-00-00'),
(6, 'Aventura', '0000-00-00', '0000-00-00'),
(7, 'Literatura Brasileira', '0000-00-00', '0000-00-00'),
(9, ' Literatura experimental', '0000-00-00', '0000-00-00'),
(10, 'Poesia Erotica', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `livros`
-- (See below for the actual view)
--
CREATE TABLE `livros` (
`id` int(11)
,`nome_livros` varchar(100)
,`isbn_livros` varchar(30)
,`edicao_livros` varchar(50)
,`qtd_livros` int(50)
,`nome_autores` varchar(50)
,`img_autores` varchar(10)
,`nome_editoras` varchar(50)
,`nome_generos` varchar(50)
,`identificador_prateleira` varchar(10)
,`descricao_prateleira` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_13_213213_blog_posts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prateleiras`
--

CREATE TABLE `prateleiras` (
  `id` int(11) NOT NULL,
  `identificador_prateleira` varchar(10) NOT NULL,
  `descricao_prateleira` varchar(50) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prateleiras`
--

INSERT INTO `prateleiras` (`id`, `identificador_prateleira`, `descricao_prateleira`, `updated_at`, `created_at`) VALUES
(1, '100', 'Suspenses', '0000-00-00', '0000-00-00'),
(2, '101', 'Fantasia', '0000-00-00', '0000-00-00'),
(3, '102', 'Terror', '0000-00-00', '0000-00-00'),
(4, '103', 'Romance', '0000-00-00', '0000-00-00'),
(5, '104', 'Ficção Ciêntifica', '0000-00-00', '0000-00-00'),
(6, '105', 'Literatura Brasileira', '0000-00-00', '0000-00-00'),
(7, '130', 'Poesia', '0000-00-00', '0000-00-00'),
(8, '120', 'Aventura', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `qtdClientes`
-- (See below for the actual view)
--
CREATE TABLE `qtdClientes` (
`qtdClientes` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `qtdLivros`
-- (See below for the actual view)
--
CREATE TABLE `qtdLivros` (
`qtd` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `tituloPgInicial` varchar(50) DEFAULT NULL,
  `subtituloPgInicial` varchar(50) DEFAULT NULL,
  `corHero` varchar(20) DEFAULT NULL,
  `imgHero` varchar(20) DEFAULT NULL,
  `NavBrand` varchar(20) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `ativaBlog` tinyint(1) NOT NULL DEFAULT '1',
  `ativaBusca` tinyint(1) NOT NULL DEFAULT '1',
  `CorCaracter` varchar(20) DEFAULT NULL,
  `corBusca` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `tituloPgInicial`, `subtituloPgInicial`, `corHero`, `imgHero`, `NavBrand`, `updated_at`, `ativaBlog`, `ativaBusca`, `CorCaracter`, `corBusca`) VALUES
(1, 'DougPress Library', 'CMS para gerenciamento de bibliotecas', 'lightyellow', 'book1', 'DougPress', '2019-05-02', 1, 1, 'white', 'lightcyan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(8, 'pedro', 'pedro@pedro', '$2y$10$Tq2F6xyrMlzEnODd2CPslu2g4FpqyP.jouAXNn8K.wReyBQrFfBVa', NULL, '2019-04-15 17:15:39', '2019-04-15 17:15:39', 1),
(9, 'joao', 'joao@joao', '$2y$10$Suj/eIp7eY3AHdM4P3/YaOmKndZ0GXk//Ry55gLJ7Etq3c83Gdfwe', NULL, '2019-04-16 01:34:45', '2019-04-16 01:34:45', 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_emprestimos`
-- (See below for the actual view)
--
CREATE TABLE `v_emprestimos` (
`id` int(11)
,`nome_livros` varchar(100)
,`isbn_livros` varchar(30)
,`edicao_livros` varchar(50)
,`qtd_livros` int(50)
,`nome_clientes` varchar(50)
,`cpf_clientes` varchar(11)
,`data_emprestimo` date
,`data_devolucao` date
,`data_devolvido` date
,`name` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `livros`
--
DROP TABLE IF EXISTS `livros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `livros`  AS  select `a`.`id` AS `id`,`a`.`nome_livros` AS `nome_livros`,`a`.`isbn_livros` AS `isbn_livros`,`a`.`edicao_livros` AS `edicao_livros`,`a`.`qtd_livros` AS `qtd_livros`,`b`.`nome_autores` AS `nome_autores`,`b`.`img_autores` AS `img_autores`,`c`.`nome_editoras` AS `nome_editoras`,`d`.`nome_generos` AS `nome_generos`,`f`.`identificador_prateleira` AS `identificador_prateleira`,`f`.`descricao_prateleira` AS `descricao_prateleira` from ((((`cadastro_livros` `a` left join `autores` `b` on((`a`.`fk_livros_autor` = `b`.`id`))) left join `editoras` `c` on((`a`.`fk_livros_editora` = `c`.`id`))) left join `generos` `d` on((`a`.`fk_livros_genero` = `d`.`id`))) left join `prateleiras` `f` on((`a`.`fk_livros_prateleira` = `f`.`id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `qtdClientes`
--
DROP TABLE IF EXISTS `qtdClientes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qtdClientes`  AS  select count(`clientes`.`nome_clientes`) AS `qtdClientes` from `clientes` ;

-- --------------------------------------------------------

--
-- Structure for view `qtdLivros`
--
DROP TABLE IF EXISTS `qtdLivros`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `qtdLivros`  AS  select count(`cadastro_livros`.`nome_livros`) AS `qtd` from `cadastro_livros` ;

-- --------------------------------------------------------

--
-- Structure for view `v_emprestimos`
--
DROP TABLE IF EXISTS `v_emprestimos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_emprestimos`  AS  select `a`.`id` AS `id`,`c`.`nome_livros` AS `nome_livros`,`c`.`isbn_livros` AS `isbn_livros`,`c`.`edicao_livros` AS `edicao_livros`,`c`.`qtd_livros` AS `qtd_livros`,`b`.`nome_clientes` AS `nome_clientes`,`b`.`cpf_clientes` AS `cpf_clientes`,`a`.`data_emprestimo` AS `data_emprestimo`,`a`.`data_devolucao` AS `data_devolucao`,`a`.`data_devolvido` AS `data_devolvido`,`d`.`name` AS `name` from (((`emprestimos` `a` left join `clientes` `b` on((`a`.`fk_emprestimo_clientes` = `b`.`id`))) left join `cadastro_livros` `c` on((`a`.`fk_emprestimo_livros` = `c`.`id`))) left join `users` `d` on((`a`.`fk_emprestimo_users` = `d`.`id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadastro_livros`
--
ALTER TABLE `cadastro_livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_livros_autor` (`fk_livros_autor`),
  ADD KEY `fk_livros_editora` (`fk_livros_editora`),
  ADD KEY `fk_livros_genero` (`fk_livros_genero`),
  ADD KEY `fk_livros_prateleira` (`fk_livros_prateleira`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editoras`
--
ALTER TABLE `editoras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_emprestimo_users` (`fk_emprestimo_users`),
  ADD KEY `fk_emprestimo_livros` (`fk_emprestimo_livros`),
  ADD KEY `fk_emprestimo_clientes` (`fk_emprestimo_clientes`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `prateleiras`
--
ALTER TABLE `prateleiras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cadastro_livros`
--
ALTER TABLE `cadastro_livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `editoras`
--
ALTER TABLE `editoras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prateleiras`
--
ALTER TABLE `prateleiras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cadastro_livros`
--
ALTER TABLE `cadastro_livros`
  ADD CONSTRAINT `cadastro_livros_ibfk_1` FOREIGN KEY (`fk_livros_autor`) REFERENCES `autores` (`id`),
  ADD CONSTRAINT `cadastro_livros_ibfk_2` FOREIGN KEY (`fk_livros_editora`) REFERENCES `editoras` (`id`),
  ADD CONSTRAINT `cadastro_livros_ibfk_3` FOREIGN KEY (`fk_livros_genero`) REFERENCES `generos` (`id`),
  ADD CONSTRAINT `cadastro_livros_ibfk_4` FOREIGN KEY (`fk_livros_prateleira`) REFERENCES `prateleiras` (`id`);

--
-- Constraints for table `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `emprestimos_ibfk_1` FOREIGN KEY (`fk_emprestimo_users`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `emprestimos_ibfk_2` FOREIGN KEY (`fk_emprestimo_livros`) REFERENCES `cadastro_livros` (`id`),
  ADD CONSTRAINT `emprestimos_ibfk_3` FOREIGN KEY (`fk_emprestimo_clientes`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
