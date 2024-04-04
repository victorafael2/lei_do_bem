-- Estrutura da tabela 'empresas'
CREATE TABLE `empresas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnpj` varchar(18) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital_origin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_employees` int DEFAULT NULL,
  `fiscal_incentives` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'financiamento'
CREATE TABLE `financiamento` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `financiamento` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'material'
CREATE TABLE `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `descricao` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'pages'
CREATE TABLE `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_pagina` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'uil-circle',
  `ver` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sim',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'projetos'
CREATE TABLE `projetos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `empresa` int NOT NULL DEFAULT (0),
  `ano_base` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nome_projeto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detalhamento_projeto` text COLLATE utf8mb4_unicode_ci,
  `tipo_projeto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_projeto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `natureza_projeto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `palavras_chave` text COLLATE utf8mb4_unicode_ci,
  `elemento_tecnologico` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metodologia` text COLLATE utf8mb4_unicode_ci,
  `barreiras_desafios` text COLLATE utf8mb4_unicode_ci,
  `plurianual` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_termino` date DEFAULT NULL,
  `resultados_economicos` text COLLATE utf8mb4_unicode_ci,
  `resultados_inovacao` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'propriedade'
CREATE TABLE `propriedade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `propriedade_intelectual` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gastos` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'rh'
CREATE TABLE `rh` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulacao` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_horas` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dedicacao` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horas_dedicadas` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mes` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salario_encargos` decimal(10,2) DEFAULT NULL,
  `projeto_id` int DEFAULT NULL,
  `data_envio` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Estrutura da tabela 'terceiros'
CREATE TABLE `terceiros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

