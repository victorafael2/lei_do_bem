CREATE TABLE `propriedade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `projeto_id` int NOT NULL,
  `propriedade_intelectual` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gastos` varchar(4000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_insercao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci