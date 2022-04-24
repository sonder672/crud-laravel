DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_removeNote` $$ 
CREATE PROCEDURE `SP_getSpecificNote`(
    _uuid VARCHAR(30),
) 
BEGIN
DELETE FROM `notes` WHERE `uuid` = _uuid;
END $$