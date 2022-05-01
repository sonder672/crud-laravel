DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_removeNote` $$ 
CREATE PROCEDURE `SP_removeNote`(
    _uuid VARCHAR(36)
) 
BEGIN
DELETE FROM `notes` WHERE `uuid` = _uuid;
END $$