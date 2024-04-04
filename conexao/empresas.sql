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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci