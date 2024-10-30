/*Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu*/

CREATE TABLE PScategories (
 PScategoryID       INT(11)        NOT NULL,
 PScategoryCode     VARCHAR(10)    NOT NULL,
 PScategoryName     VARCHAR(255)   NOT NULL,
 PScategoryModel    VARCHAR(255)   NOT NULL,
 DateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (PScategoryID)
);


INSERT INTO PScategories
(PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated)
VALUES
(1000, 'PB', 'Pet Bed', 'Large', NOW());

INSERT INTO PScategories
(PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated)
VALUES
(2000, 'APF', 'Automatic Pet Feeder', 'With Timer', NOW());

INSERT INTO PScategories
(PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated)
VALUES
(3000, 'CT', 'Cat Tree', 'Tall, 6ft and up', NOW());

INSERT INTO PScategories
(PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated)
VALUES
(4000, 'DLC', 'Dog Leash and Collar Kit', 'Small', NOW());

INSERT INTO PScategories
(PScategoryID, PScategoryCode, PScategoryName, PScategoryModel, DateCreated)
VALUES
(5000, 'PGK', 'Pet Grooming Kit', 'For dogs and cats', NOW());

SELECT * FROM `PScategories`

DELETE FROM `PScategories`
WHERE `PScategoryID`=6000;