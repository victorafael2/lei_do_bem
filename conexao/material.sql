CREATE TABLE `material` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `descricao` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci