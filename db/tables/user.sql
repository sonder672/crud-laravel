DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    `id` VARCHAR(11) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `age` SMALLINT unsigned NULL,
    `email` VARCHAR(60) NOT NULL UNIQUE,
    `password` VARCHAR(20) NOT NULL,
    `additional_data` JSON NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    INDEX (`password`)
) ENGINE = InnoDB;