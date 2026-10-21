-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para selecao
CREATE DATABASE IF NOT EXISTS `selecao` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `selecao`;

-- Copiando estrutura para tabela selecao.cadastro_ia
CREATE TABLE IF NOT EXISTS `cadastro_ia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `zona` varchar(6) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `rg` varchar(25) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `cargo` varchar(150) DEFAULT NULL,
  `pos_graduacao` varchar(10) DEFAULT NULL,
  `mestrado` char(3) DEFAULT NULL,
  `doutorado` char(3) DEFAULT NULL,
  `selecao_vaga` varchar(150) DEFAULT NULL,
  `experiencia` varchar(150) DEFAULT NULL,
  `cargo_final` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela selecao.cadastro_ia: ~2 rows (aproximadamente)
INSERT INTO `cadastro_ia` (`id`, `zona`, `email`, `cpf`, `nome`, `rg`, `endereco`, `data_nasc`, `telefone`, `cargo`, `pos_graduacao`, `mestrado`, `doutorado`, `selecao_vaga`, `experiencia`, `cargo_final`) VALUES
	(10, 'urbana', 'teste@gmail.com', '69551022653', 'Glaison Queiroz', '4465465', 'Rua da Intendencia 316', '2000-10-26', '+553198545555', 'Professor de Educação Básica - Séries Iniciais / Finais', 'nenhuma', 'sim', 'sim', 'ampla_concorrencia', '10 pontos – De 1.461 a 1.825 dias de experiência', 'Professor de Educação Básica – Séries Finais – Ciências Biológicas');

-- Copiando estrutura para tabela selecao.cadastro_ib
CREATE TABLE IF NOT EXISTS `cadastro_ib` (
  `id` int NOT NULL AUTO_INCREMENT,
  `zona` varchar(6) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `rg` varchar(25) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `cargo` varchar(150) DEFAULT NULL,
  `curso_formacao_continuada` char(3) DEFAULT NULL,
  `curso_tecnico` char(3) DEFAULT NULL,
  `graduacao` char(3) DEFAULT NULL,
  `pos_graduacao` varchar(7) DEFAULT NULL,
  `selecao_vaga` varchar(150) DEFAULT NULL,
  `experiencia` varchar(150) DEFAULT NULL,
  `cargo_final` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela selecao.cadastro_ib: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela selecao.cadastro_ic
CREATE TABLE IF NOT EXISTS `cadastro_ic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `zona` varchar(7) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `cpf` char(14) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `rg` varchar(25) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `cargo` varchar(120) DEFAULT NULL,
  `ensino_medio` char(3) DEFAULT NULL,
  `selecao_vaga` varchar(120) DEFAULT NULL,
  `experiencia` varchar(120) DEFAULT NULL,
  `cargo_final` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela selecao.cadastro_ic: ~0 rows (aproximadamente)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
