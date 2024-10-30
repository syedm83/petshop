/*Manahil Syed, 10/18/2024, IT-202-005, Phase 2 assignment, ms379@njit.edu*/
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

/* Pet bed */
INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(1001, 'PB', 'Pet Bed', 'A medium sized pet bed, perfect for both cats and dogs! Contains orthopedic filling that contours to your pet\'s shape, providing optimal comfort + alleviating pressure points.', 'A10', 1000, 15.00, 20.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(1002, 'PBC', 'Covered Cat Bed', 'Give your feline friend the ultimate cozy retreat with our covered cat bed, designed for warmth and privacy. Crafted with soft, plush materials and a stylish exterior, this bed provides a perfect haven for your kitty to curl up and feel secure.', 'A10', 1000, 10.00, 15.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(1003, 'PBD', 'Heated Dog Bed', 'Keep your furry companion warm and comfortable with our heated flat dog bed, perfect for chilly days and nights. Featuring a soft, durable surface and adjustable heat settings, this bed ensures your dog enjoys a restful sleep while staying snug and cozy.', 'A10', 1000, 30.00, 45.00, NOW());


/* Automatic pet feeder */

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(2001, 'ADF', 'Automatic Pet Feeder', 
            'The automatic dry food feeder ensures your pets receive the perfect portion of kibble at scheduled times, promoting healthy eating habits and preventing overeating. With customizable feeding schedules and a large capacity, this feeder is perfect for busy pet owners who want to keep their furry friends happy and well-fed, even when they\'re not home.', 'B10', 2000, 40.00, 50.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(2002, 'AWF', 'Automatic Pet Wet Food Feeder', 
            'The automatic wet food feeder provides your pets with fresh, portioned meals at designated times, ensuring they enjoy the taste and nutrition they need without the hassle of manual feeding. Designed with sealed compartments to keep food fresh, this feeder is perfect for pet owners looking to simplify mealtime while maintaining their furry friends\' dietary needs.', 'B10', 2000, 60.00, 70.00, NOW());


INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(2003, 'ACF', 'Cooling Pet Feeder', 
            'The insulated automatic pet food feeder keeps your furry friends\' meals cold and fresh, ensuring optimal taste and nutrition with every serving. With its advanced temperature control and sealed compartments, this feeder is perfect for pet owners who want to provide their pets with the highest quality meals, even in warm environments.', 'B10', 2000, 60.00, 70.00, NOW());


/* Cat Trees */

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(3001, 'LCT', 'Classic Cat Tree', 
            'The classic cat tree features multiple levels and scratching posts, providing your feline friends with ample space to climb, play, and nap. Its soft, plush fabric and sturdy design make it a cozy retreat for cats of all ages.', 'C10', 3000, 110.00, 120.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(3002, 'MCT', 'Modern Cat Tower', 
            'This sleek, modern cat tower blends stylish design with functionality, offering a minimalist aesthetic that complements any home decor. With built-in shelves and cozy hideaways, it provides your cat with an inviting space to explore and lounge.', 'C10', 3000, 120.00, 140.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(3003, 'PCT', 'Multi-Activity Cat Playground', 
            'The multi-activity cat playground is designed for energetic cats, featuring tunnels, ramps, and interactive toys to keep them engaged and entertained. Its durable construction ensures it can withstand even the most playful antics while offering a variety of enrichment options.', 'C10', 3000, 150.00, 200.00, NOW());


/* Dog Leash and Collar */

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(4001, 'CLC', 'Classic Dog Leash and Collar Kit', 
            'The classic nylon dog leash offers durability and comfort, featuring a sturdy clip and a comfortable handle for daily walks. Its vibrant colors and patterns allow pet owners to express their dog/’s personality while ensuring safety and control.', 'D10', 4000, 5.00, 8.99, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(4002, 'RLC', 'Reflective Dog Leash and Collar Kit', 
            'This reflective dog collar enhances visibility during nighttime walks, keeping your furry friend safe while adding a stylish touch. Made from soft, adjustable material, it provides a secure fit and comfort for dogs of all sizes.', 'D10', 4000, 10.00, 15.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(4003, 'TLC', 'Training Dog Leash and Collar Kit', 
            'The training harness with leash is designed to help pet owners effectively guide and train their dogs while preventing pulling. With padded straps and adjustable points, it ensures comfort and security, making it perfect for both training sessions and everyday adventures.', 'D10', 4000, 15.00, 19.99, NOW());

/* Pet Grooming Kits */

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(5001, 'BPGK', 'Professional Grooming Kit', 
            'The professional grooming kit offers a comprehensive set of tools, including clippers, scissors, and various brushes, perfect for pet owners who want to achieve salon-quality results at home. With ergonomic designs and high-quality materials, this kit is suitable for all grooming needs, ensuring your pet looks fabulous.', 'E10', 5000, 30.00, 45.00, NOW());

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(5002, 'DPGK', 'De-shedding Tool Kit', 
            'The deshedding tool kit features specialized brushes and tools designed to reduce shedding and remove loose fur from your pet’s coat. Ideal for long-haired breeds, this kit helps keep your home fur-free while promoting a healthy and shiny coat.', 'E10', 5000, 23.00, 30.00, NOW());            

INSERT INTO PSProducts
(PSProductID, PSProductCode, PSProductName, PSDescription, PSAisle_Number, PSCategoryID, PSWholesalePrice, PSListPrice, DateCreated)
VALUES
(5003, 'NPGK', 'Basic Grooming Tool Kit', 
            'The basic grooming tool kit includes essential brushes, combs, and nail clippers, perfect for maintaining your pet\'s coat and hygiene at home. Compact and easy to use, this kit provides all the basics for routine grooming, ensuring your furry friend looks and feels their best.', 'E10', 5000, 10.00, 15.00, NOW());


SELECT * FROM `PSProducts`

DELETE FROM `PSProducts`
WHERE `PSProductID`= 1009;
