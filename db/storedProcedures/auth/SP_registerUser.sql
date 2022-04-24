DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_registerUser` $$ 
CREATE PROCEDURE `SP_registerUser`(
    _id VARCHAR(11),
    _name VARCHAR(),
    _last_name VARCHAR(),
    _age SMALLINT,
    _email VARCHAR(60),
    _password VARCHAR(20)
) 
BEGIN
INSERT INTO `user`
VALUES (_id, _name, _last_name, _age, _email, _password, default);
END $$