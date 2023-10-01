-- Import inside convigo DB
CREATE TABLE IF NOT EXISTS car (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    category VARCHAR(50) NOT NULL,
    type VARCHAR(50) NOT NULL,
    brand VARCHAR(50) NOT NULL,
    imageURL VARCHAR(50) NOT NULL
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
INSERT INTO car (name, category, type, brand, imageURL)
VALUES (
        'Tesla Model 3',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_Model3.png'
    ),
    (
        'Audi Q3',
        'Premium',
        'SUV',
        'Audi',
        'Audi_Q3.png'
    ),
    (
        'BMW 318i',
        'Premium',
        'Sedan',
        'BMW',
        'BMW_318i.png'
    ),
    (
        'Audi S3 Sedan',
        'Premium',
        'Sedan',
        'Audi',
        'S3_Sedan.png'
    ),
    (
        'Audi A3 Sedan',
        'Premium',
        'Sedan',
        'Audi',
        'A3_Sedan.png'
    ),
    (
        'Audi A6 Sedan',
        'Premium',
        'Sedan',
        'Audi',
        'A6_Sedan.png'
    ),
    (
        'Audi Q5',
        'Premium',
        'SUV',
        'Audi',
        'Audi_Q5.png'
    ),
    (
        'Audi A6 e-tron',
        'Premium',
        'Electric',
        'Audi',
        'A6_e-tron.png'
    ),
    (
        'Tesla Model S',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_ModelS.png'
    ),
    (
        'Tesla Model S Performance',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_ModelS_Performance.png'
    ),
    (
        'Tesla Model S Plaid',
        'Premium',
        'Electric',
        'Tesla',
        'Tesla_ModelS_Plaid.png'
    ),
    (
        'BMW 530i',
        'Premium',
        'Sedan',
        'BMW',
        'BMW_530i.png'
    ),
    (
        'BMW X3',
        'Premium',
        'SUV',
        'BMW',
        'BMW_X3.png'
    ),
    (
        'BMW X4',
        'Premium',
        'SUV',
        'BMW',
        'BMW_X4.png'
    ),
    (
        'BMW i5',
        'Premium',
        'Electric',
        'BMW',
        'BMW_i5.png'
    ),
    (
        'Hyundai Accent',
        'Standard',
        'Sedan',
        'Hyundai',
        'Hyundai_Accent.png'
    ),
    (
        'Hyundai Sonata',
        'Standard',
        'Sedan',
        'Hyundai',
        'Hyundai_Sonata.png'
    ),
    (
        'Hyundai Venue',
        'Standard',
        'SUV',
        'Hyundai',
        'Hyundai_Venue.png'
    ),
    (
        'Hyundai Tucson',
        'Standard',
        'SUV',
        'Hyundai',
        'Hyundai_Tucson.png'
    ),
    (
        'Hyundai Ionic 6',
        'Premium',
        'Electric',
        'Hyundai',
        'Hyundai_Ioniq_6.png'
    ),
    (
        'Honda Civic Sedan',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Civic_Sedan.png'
    ),
    (
        'Honda Insight',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Insight.png'
    ),
    (
        'Honda Accord',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Accord.png'
    ),
    (
        'Honda HR-V',
        'Standard',
        'SUV',
        'Honda',
        'Honda_HR-V.png'
    ),
    (
        'Honda Passport',
        'Standard',
        'SUV',
        'Honda',
        'Honda_Passport.png'
    ),
    (
        'Honda Prologue',
        'Standard',
        'SUV',
        'Honda',
        'Honda_Prologue.png'
    );
INSERT INTO location(name)
VALUES('Jurong'),
    ('Nee Soon'),
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