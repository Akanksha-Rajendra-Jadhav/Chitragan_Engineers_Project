CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(455) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(455) NOT NULL,
  `created` date NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) 

