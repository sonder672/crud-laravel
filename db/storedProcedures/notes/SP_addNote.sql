DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_addNote` $$ 
CREATE PROCEDURE `SP_addNote`(
    _title VARCHAR(30),
    _content TEXT,
    _userId VARCHAR(11)
) 
BEGIN
INSERT INTO `notes`
VALUES (UNHEX(REPLACE(UUID(), "-", "")),_title,_content,_userId,default);
END $$