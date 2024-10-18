CREATE TABLE PSProducts (
 PSProductID        INT(11)        NOT NULL,
 PSProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
 PSProductName      VARCHAR(255)   NOT NULL,
 PSdescription      TEXT           NOT NULL,
 PSAisle_Number     VARCHAR(15)              NOT NULL,
 PSCategoryID       INT(11)        NOT NULL,
 PSWholesalePrice      DECIMAL(10,2)  NOT NULL,
 PSListPrice           DECIMAL(10,2)  NOT NULL,
 DateCreated               DATETIME       NOT NULL,
 PRIMARY KEY ( PSProductID )
);


INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(1001, 'PB', 'Pet Bed', 
            'A medium sized pet bed, perfect for both cats and dogs!', 'A10', 1000, 15.00, 20.00, NOW());


INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(2001, 'APF', 'Automatic Pet Feeder', 
            'The perfect dry food feeder for dogs and cats!', 'B10', 2000, 40.00, 50.00, NOW());


INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(3001, 'CT', 'Cat Tree', 
            'Perfect for cats of all sizes! Large, 7ft tree.', 'C10', 3000, 110.00, 150.00, NOW());


INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(4001, 'DLC', 'Dog Leash and Collar Kit', 
            'Perfect for small dogs, comes with adjustable straps!', 'D10', 4000, 10.00, 15.00, NOW());


INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(5001, 'PGK', 'Pet Grooming Kit', 
            'For both cats and dogs. Comes with 7 grooming tools.', 'E10', 5000, 90.00, 100.00, NOW());

SELECT * FROM `PSProducts`
