DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_loginUser` $$ 
CREATE PROCEDURE `SP_loginUser`(
    _email VARCHAR(60),
    _password VARCHAR(20)
) 
BEGIN
SELECT * FROM `user` WHERE `email` = _email AND `password` = _password;
END $$