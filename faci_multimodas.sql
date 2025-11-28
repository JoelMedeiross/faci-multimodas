-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2025 às 14:23
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faci_multimodas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(10, 'Blusa preta masculina', 29.99, 'A pedida certa em diversas ocasiões é essa Camiseta Nike masculina.\r\n\r\nConfeccionada com a maciez do algodão, oferece conforto e bem-estar duradouro.\r\n\r\nA camiseta possui mangas curtas e gola careca que possibilita um ótimo caimento com o logo do jogador \"in flight\" para eternizar seu legado.\r\n\r\nCorra e confira já!', 'upload/97743002A4.avif'),
(11, 'Short', 24.99, 'Um modelo mais esportivo para a galerinha esbanjar energia e diversão em qualquer atividade, o Calção adidas Estro possui modelagem que garante uma mobilidade natural, cós elástico e o icônico logo que confere seu padrão de qualidade.\r\n\r\nConfira o ótimo preço e garanta em uma só peça a facilidade de compor vários looks confortáveis e com um toque esportivo em qualquer contexto. Compre já!', 'upload/95260031A8.avif'),
(12, 'Camiseta Masculina Nike Dri-Fit Manga ', 79.99, 'Ideal para o esporte, a Camiseta Masculina Nike Dri-Fit Manga Curta garante o conforto que necessário para alcançar a performance almejada. Na parte interna da gola, a tira em tecido ajuda a diminuir o desconforto do atrito da costura.\r\n\r\nUma peça versátil que permite combinar com várias outras peças, feita para performar e de excelente qualidade. Dê esporte de presente e garanta a sua!\r\n', 'upload/97743001A6.avif'),
(14, 'Tênis Nike Revolution', 149.99, 'A nova geração da linha Revolution oferece ainda mais conforto para suas corridas.\r\n\r\nO Revolution 8 conta com entressola em espuma que proporciona amortecimento suave e transições equilibradas. A tela superior superventilada mantém os pés frescos, enquanto os sulcos flexíveis no antepé aumentam a naturalidade dos movimentos.', 'upload/99599631A20.avif'),
(16, 'Calça Masculina Adidas', 89.99, 'Experimente o máximo conforto e desempenho com a Calça Masculina adidas LS Sereno.\r\n\r\n\r\nEquipada com tecnologia AEROREADY para respirabilidade e absorção do suor, garantindo conforto duradouro. Com seu corte Slim Fit, esta calça oferece um ajuste moderno e atlético, combinando estilo e funcionalidade em uma única peça.', 'upload/calça.avif');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Kalil', 'kalil@gmail.com', '$2y$10$jCrbseao.WoMikJPShzLUudl1uoL/2u7I/ATbHOZ8PjlDLEtIjw/a'),
(2, 'Joel', 'joel@gmail.com', '$2y$10$n7bm6tdoinXriHgeROn3BO3r54Qrj.B.FiUz/FUfNmR3wFEEX3lM6'),
(3, 'will', 'will@gmail.com', '$2y$10$cDrHxO90xpkQy9vYJlAxsOQlYDvpXJiOSpZ85ZiZkyctjXFB1hkIm'),
(5, 'will', 'will123@gmail.com', '$2y$10$2Xk6yiEM7S4bt3gYsIZFzOFdMeXVNWuV8P0CRENmCM12xr2vtA3Ri'),
(6, 'joel', 'joeljunior@gmail.com', '$2y$10$aBY6dGehItk6OjfzFUh0Vek3ymkBUjgyHwml.jMtZrO56.0EbJism');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
