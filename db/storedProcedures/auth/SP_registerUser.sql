DELIMITER $$ 
DROP PROCEDURE IF EXISTS `SP_registerUser` $$ 
CREATE PROCEDURE `SP_registerUser`(
    _id VARCHAR(11),
    _name VARCHAR(40),
    _last_name VARCHAR(40),
    _age SMALLINT,
    _email VARCHAR(60),
    _password VARCHAR(100)
) 
BEGIN
INSERT INTO `user`
VALUES (_id, _name, _last_name, _age, _email, _password, default);
END $$