CREATE TABLE `terceiros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `situacao` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf_cnpj` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci