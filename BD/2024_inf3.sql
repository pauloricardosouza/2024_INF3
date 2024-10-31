-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Tempo de geração: 31/10/2024 às 20:52
-- Versão do servidor: 5.7.39
-- Versão do PHP: 7.4.33

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
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(11) NOT NULL,
  `fotoProduto` varchar(100) NOT NULL,
  `nomeProduto` varchar(30) NOT NULL,
  `descricaoProduto` varchar(100) NOT NULL,
  `categoriaProduto` varchar(20) NOT NULL,
  `valorProduto` decimal(10,2) NOT NULL,
  `condicaoProduto` varchar(15) NOT NULL,
  `dataCadastroProduto` date NOT NULL,
  `horaCadastroProduto` time NOT NULL,
  `statusProduto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `fotoProduto`, `nomeProduto`, `descricaoProduto`, `categoriaProduto`, `valorProduto`, `condicaoProduto`, `dataCadastroProduto`, `horaCadastroProduto`, `statusProduto`) VALUES
(1, 'img/switchNeon.webp', 'Nintendo Switch Neon', 'Console Nintendo Switch Standard Neon', 'alimentos', '1500.00', 'Novo', '2024-08-06', '22:43:03', 'disponivel'),
(3, 'img/vans.webp', 'Tênis VANS', 'Calçado VANS preto Old School Bla bla bla bla', 'vestuario', '300.00', 'Novo', '2024-07-24', '02:47:09', 'esgotado'),
(5, 'img/feijao.webp', 'Feijão Camil', 'Pacote de feijão carioca da marca Camil', 'alimentos', '10.00', 'Novo', '2024-10-31', '17:25:27', 'disponivel');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `fotoUsuario` varchar(100) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `cidadeUsuario` varchar(50) NOT NULL,
  `telefoneUsuario` varchar(20) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `fotoUsuario`, `nomeUsuario`, `cidadeUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`) VALUES
(1, 'img/senhorCapivara.jpeg', 'Capivara Roedora de Matos', 'telemaco', '(42) 99999-9999', 'capivara@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'img/peco.jpeg', 'Paulo Ricardo de Souza Silva', 'telemaco', '(42) 99999-9999', 'paulo.silva@ifpr.edu.br', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
