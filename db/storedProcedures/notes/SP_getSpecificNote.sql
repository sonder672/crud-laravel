DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_getSpecificNote` $$ 
CREATE PROCEDURE `SP_getSpecificNote`(
    _uuid VARCHAR(30),
) 
BEGIN
SELECT * FROM `notes` WHERE `uuid` = _uuid;
END $$