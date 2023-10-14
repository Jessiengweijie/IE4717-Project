CREATE database convigo;
USE convigo;
-- Import inside convigo DB
CREATE TABLE IF NOT EXISTS car (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    type VARCHAR(50) NOT NULL,
    brand VARCHAR(50) NOT NULL,
    imageURL VARCHAR(50) NOT NULL,
    seats INT NOT NULL,
    fuel_type VARCHAR(50) NOT NULL,
    boot_space VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);
CREATE TABLE IF NOT EXISTS location (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);
CREATE TABLE IF NOT EXISTS car_location (
    car_id INT UNSIGNED NOT NULL,
    location_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (car_id, location_id),
    FOREIGN KEY (car_id) REFERENCES car(id),
    FOREIGN KEY (location_id) REFERENCES location(id)
);
INSERT INTO car (
        name,
        category,
        type,
        brand,
        imageURL,
        seats,
        fuel_type,
        boot_space,
        description,
        price
    )
VALUES 
-- ************************************************* AUDI *************************************************
    (
        'Audi Q3',
        'Premium',
        'SUV',
        'Audi',
        'Audi_Q3.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        23.00
    ),
    (
        'Audi S3 Sedan',
        'Premium',
        'Sedan',
        'Audi',
        'S3_Sedan.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        23.00
    ),
    (
        'Audi A3 Sedan',
        'Premium',
        'Sedan',
        'Audi',
        'A3_Sedan.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        23.00
    ),
    (
        'Audi A6 Sedan',
        'Premium',
        'Sedan',
        'Audi',
        'A6_Sedan.png',
        5,
        'Petrol/Diesel',
        '3 large luggage',
        'car description',
        26.00
    ),
    (
        'Audi Q5',
        'Premium',
        'SUV',
        'Audi',
        'Audi_Q5.png',
        5,
        'Petrol/Diesel',
        '3 large luggage',
        'car description',
        28.00
    ),
    (
        'Audi A6 e-tron',
        'Premium',
        'Electric',
        'Audi',
        'A6_e-tron.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        30.00
    ),
    -- ************************************************* Tesla *************************************************
    (
        'Tesla Model 3',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_Model3.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        28.00
    ),
    (
        'Tesla Model S',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_ModelS.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        30.00
    ),
    (
        'Tesla Model S Performance',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_ModelS_Performance.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        35.00
    ),
    (
        'Tesla Model S Plaid',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_ModelS_Plaid.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        33.00
    ),
    -- ************************************************* BMW *************************************************
    (
        'BMW 318i',
        'Premium',
        'Sedan',
        'BMW',
        'BMW_318i.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        25.00
    ),
    (
        'BMW 530i',
        'Premium',
        'Sedan',
        'BMW',
        'BMW_530i.png',
        5,
        'Petrol/Diesel',
        '3 large luggage',
        'car description',
        32.00
    ),
    (
        'BMW X3',
        'Premium',
        'SUV',
        'BMW',
        'BMW_X3.png',
        5,
        'Petrol/Diesel',
        '3 large luggage',
        'car description',
        26.00
    ),
    (
        'BMW X4',
        'Premium',
        'SUV',
        'BMW',
        'BMW_X4.png',
        5,
        'Petrol/Diesel',
        '3 large luggage',
        'car description',
        31.00
    ),
    (
        'BMW i5',
        'Premium',
        'Electric',
        'BMW',
        'BMW_i5.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        33.00
    ),
    -- ************************************************* Hyundai *************************************************
    (
        'Hyundai Accent',
        'Standard',
        'Sedan',
        'Hyundai',
        'Hyundai_Accent.png',
        5,
        'Petrol/Diesel',
        '1 large luggage',
        'car description',
        17.00
    ),
    (
        'Hyundai Elantra',
        'Standard',
        'Sedan',
        'Hyundai',
        'Hyundai_Elantra.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        18.00
    ),
    (
        'Hyundai Sonata',
        'Standard',
        'Sedan',
        'Hyundai',
        'Hyundai_Sonata.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        18.00
    ),
    (
        'Hyundai Venue',
        'Standard',
        'SUV',
        'Hyundai',
        'Hyundai_Venue.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        20.00
    ),
    (
        'Hyundai Tucson',
        'Standard',
        'SUV',
        'Hyundai',
        'Hyundai_Tucson.png',
        5,
        'Petrol/Diesel',
        '3 large luggage',
        'car description',
        22.00
    ),
    (
        'Hyundai Ionic 6',
        'Premium',
        'Electric',
        'Hyundai',
        'Hyundai_Ioniq_6.png',
        5,
        'Electric',
        '2 large luggage',
        'car description',
        22.00
    ),
     -- ************************************************* Hyundai *************************************************
    (
        'Honda Civic Sedan',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Civic_Sedan.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        16.00
    ),
    (
        'Honda Insight',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Insight.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        16.00
    ),
    (
        'Honda Accord',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Accord.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        16.00
    ),
    (
        'Honda HR-V',
        'Standard',
        'SUV',
        'Honda',
        'Honda_HR-V.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        19.00
    ),
    (
        'Honda Passport',
        'Standard',
        'SUV',
        'Honda',
        'Honda_Passport.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        20.00
    ),
    (
        'Honda Prologue',
        'Standard',
        'SUV',
        'Honda',
        'Honda_Prologue.png',
        5,
        'Petrol/Diesel',
        '2 large luggage',
        'car description',
        23.00
    );
INSERT INTO location(name)
VALUES('Jurong'),
    ('Punggol'),
    ('Seletar'),
    ('Sembawang'),
    ('Serangoon'),
    ('Tuas'),
    ('Woodlands'),
    ('Bedok'),
    ('Changi'),
    ('Choa Chu Kang');
-- Configure the car_location table to associate cars with locations
INSERT INTO car_location (car_id, location_id)
VALUES -- Car x is available at Location y
    (1, 1),
    (1, 3),
    (1, 7),
    (2, 2),
    (2, 3),
    (2, 4),
    (2, 8),
    (3, 2),
    (3, 4),
    (3, 7),
    (3, 10),
    (4, 1),
    (4, 6),
    (4, 7),
    (4, 9),
    (5, 1),
    (5, 5),
    (5, 6),
    (5, 10),
    (6, 3),
    (6, 5),
    (6, 8),
    (6, 9),
    (7, 1),
    (7, 2),
    (7, 4),
    (7, 6),
    (8, 1),
    (8, 2),
    (8, 5),
    (8, 9),
    (9, 3),
    (9, 4),
    (9, 7),
    (9, 10),
    (10, 3),
    (10, 6),
    (10, 8),
    (11, 1),
    (11, 3),
    (11, 4),
    (11, 7),
    (12, 1),
    (12, 5),
    (12, 6),
    (12, 9),
    (13, 2),
    (13, 3),
    (13, 5),
    (13, 7),
    (14, 4),
    (14, 8),
    (15, 2),
    (15, 6),
    (15, 7),
    (15, 10),
    (16, 1),
    (16, 4),
    (16, 5),
    (16, 8),
    (17, 2),
    (17, 3),
    (17, 6),
    (17, 9),
    (18, 1),
    (18, 3),
    (18, 7),
    (18, 10),
    (19, 2),
    (19, 4),
    (19, 5),
    (19, 6),
    (20, 1),
    (20, 5),
    (20, 8),
    (20, 9),
    (21, 2),
    (21, 6),
    (21, 7),
    (21, 10),
    (22, 1),
    (22, 4),
    (22, 5),
    (22, 9),
    (23, 3),
    (23, 5),
    (23, 6),
    (23, 8),
    (24, 2),
    (24, 3),
    (24, 4),
    (24, 7),
    (25, 1),
    (25, 4),
    (25, 8),
    (25, 10);
CREATE TABLE IF NOT EXISTS authorized_users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
);
INSERT INTO authorized_users(username, password)
VALUES ('test', '123')