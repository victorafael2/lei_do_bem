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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci