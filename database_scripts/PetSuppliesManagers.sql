/*Manahil Syed, 9/25/2024, IT-202-005, Phase 1 assignment, ms379@njit.edu*/
SHOW DATABASES;

CREATE TABLE PetSuppliesManagers (
 PetSuppliesManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
 pronouns               VARCHAR(60)    NOT NULL,
 firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (PetSuppliesManagerID)
);

INSERT INTO PetSuppliesManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES('ash@petstore.com', SHA2('ashmanager', 256), 'he/him', 'Ash', 'Ketchum', NOW());

INSERT INTO PetSuppliesManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES('misty@petstore.com', SHA2('mistymanager', 256), 'she/her', 'Misty', 'Cat', NOW());

INSERT INTO PetSuppliesManagers (emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES('brock@petstore.com', SHA2('brockmanager', 256), 'he/him', 'Brock', 'Dog', NOW());

SHOW TABLES;

DESCRIBE PetSuppliesManagers;

SELECT * FROM `PetSuppliesManagers`;




