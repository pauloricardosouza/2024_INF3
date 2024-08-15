-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Ago-2024 às 19:34
-- Versão do servidor: 8.0.26
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `2024_inf3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int NOT NULL,
  `fotoProduto` varchar(100) NOT NULL,
  `nomeProduto` varchar(30) NOT NULL,
  `descricaoProduto` varchar(100) NOT NULL,
  `categoriaProduto` varchar(20) NOT NULL,
  `valorProduto` decimal(10,2) NOT NULL,
  `condicaoProduto` varchar(15) NOT NULL,
  `dataCadastroProduto` date NOT NULL,
  `horaCadastroProduto` time NOT NULL,
  `statusProduto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `fotoProduto`, `nomeProduto`, `descricaoProduto`, `categoriaProduto`, `valorProduto`, `condicaoProduto`, `dataCadastroProduto`, `horaCadastroProduto`, `statusProduto`) VALUES
(1, 'img/switchNeon.webp', 'Nintendo Switch Neon', 'Console Nintendo Switch Standard Neon', 'alimentos', '1500.00', 'Novo', '2024-08-06', '22:43:03', 'disponivel'),
(3, 'img/vans.webp', 'Tênis VANS', 'Calçado VANS preto Old School Bla bla bla bla', 'vestuario', '300.00', 'Novo', '2024-07-24', '02:47:09', 'esgotado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int NOT NULL,
  `fotoUsuario` varchar(100) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `cidadeUsuario` varchar(50) NOT NULL,
  `telefoneUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `fotoUsuario`, `nomeUsuario`, `cidadeUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'img/senhorCapivara.jpeg', 'Capivara Roedora de Matos', 'telemaco', '(42) 99999-9999', 'capivara@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'img/peco.jpeg', 'Paulo Ricardo de Souza Silva', 'telemaco', '(42) 99999-9999', 'paulo.silva@ifpr.edu.br', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
