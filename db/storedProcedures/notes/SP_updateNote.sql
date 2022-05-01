DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_updateNote` $$ 
CREATE PROCEDURE `SP_updateNote`(
    _uuid VARCHAR(36),
    _title VARCHAR(30),
    _content TEXT
) 
BEGIN
UPDATE `notes` 
SET `title` = _title,
`content` = _content
WHERE `uuid` = _uuid;
END $$