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
        'Electric',
        'Tesla',
        'BMW_318i.png'
    ),
    (
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
        'Electric',
        'Tesla',
        'BMW_318i.png'
    ),
    (
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
        'Electric',
        'Tesla',
        'BMW_318i.png'
    ),
    (
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
        'Electric',
        'Tesla',
        'BMW_318i.png'
    ),
    (
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
        'Electric',
        'Tesla',
        'BMW_318i.png'
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
    (1, 2),
    (2, 2),
    (2, 3),
    (3, 3),
    (3, 4),
    (4, 4),
    (4, 5),
    (5, 5),
    (5, 6),
    (6, 6),
    (6, 7),
    (7, 7),
    (7, 8),
    (8, 8),
    (8, 9),
    (9, 9),
    (9, 10),
    (10, 10),
    (10, 1),
    (11, 1),
    (11, 2),
    (12, 2),
    (12, 3),
    (13, 3),
    (13, 4),
    (14, 4),
    (14, 5),
    (15, 5),
    (15, 6);