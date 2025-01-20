 CREATE USER 'smash'@'localhost' IDENTIFIED BY '1234';

 SELECT User, Host FROM mysql.user;

GRANT ALL PRIVILEGES ON *.* TO 'smash'@'localhost';

SHOW GRANTS FOR 'smash'@'localhost';

DROP USER 'smash'@'localhost';