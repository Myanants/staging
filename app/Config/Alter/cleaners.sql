DROP TABLE IF EXISTS `cleaners`;
CREATE TABLE `cleaners` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cleaner_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nirc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `age` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `township` bigint(20) DEFAULT NULL,
  `sunday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sunday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sunday_check` tinyint(2) DEFAULT NULL,
  `monday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monday_check` tinyint(2) DEFAULT NULL,
  `tuesday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuesday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tuesday_check` tinyint(2) DEFAULT NULL,
  `wednesday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wednesday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wednesday_check` tinyint(2) DEFAULT NULL,
  `thursday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thursday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thursday_check` tinyint(2) DEFAULT NULL,
  `friday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `friday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `friday_check` tinyint(2) DEFAULT NULL,
  `saturday_from` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saturday_to` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `saturday_check` tinyint(2) DEFAULT NULL,
  `password` char(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deactivate` tinyint(2) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `deleted` tinyint(2) DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;