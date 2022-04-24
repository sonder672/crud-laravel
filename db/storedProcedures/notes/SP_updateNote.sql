DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_updateNote` $$ 
CREATE PROCEDURE `SP_updateNote`(
    _uuid VARCHAR(30),
    _title VARCHAR(),
    _content TEXT,
    _userId VARCHAR (11)
) 
BEGIN
UPDATE `notes` 
SET `title` = _title,
`content` = _content
WHERE `uuid` = _uuid;
END $$