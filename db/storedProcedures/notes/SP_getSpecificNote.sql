DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_getSpecificNote` $$ 
CREATE PROCEDURE `SP_getSpecificNote`(
    _userId VARCHAR(11)
) 
BEGIN
SELECT * FROM `notes` WHERE `id_user` = _userId;
END $$