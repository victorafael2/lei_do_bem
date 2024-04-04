CREATE TABLE `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome_pagina` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'uil-circle',
  `ver` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'sim',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci