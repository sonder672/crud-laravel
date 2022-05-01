DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
    `uuid` VARCHAR(36) NOT NULL,
    `title` VARCHAR(30) NOT NULL,
    `content` TEXT NULL,
    `id_user` VARCHAR(11) NOT NULL,
    `additional_data` JSON NULL DEFAULT NULL,
    PRIMARY KEY (`uuid`),
    INDEX (`title`),
    FOREIGN KEY (`id_user`) REFERENCES `user`(`id`)
) ENGINE = InnoDB;