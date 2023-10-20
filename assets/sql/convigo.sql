CREATE database convigo;
USE convigo;
-- Import inside convigo DB
CREATE TABLE IF NOT EXISTS car (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    imageURL VARCHAR(255) NOT NULL,
    seats INT NOT NULL,
    fuel_type VARCHAR(255) NOT NULL,
    boot_space VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);
CREATE TABLE IF NOT EXISTS location (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
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
VALUES -- ************************************************* AUDI *************************************************
    (
        'Audi Q3',
        'Premium',
        'SUV',
        'Audi',
        'Audi_Q3.png',
        5,
        'Petrol/Diesel',
        '2 large luggagess',
        'Block 315 Ang Mo Kio Avenue 1; Level 4 Block 209 Bedok North Street 1; Block 290 Bukit Batok East Avenue 3, Level 4; Block 962 Jurong West Street 91, Level 3',
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
        '2 large luggagess',
        'Block 556 Ang Mo Kio Avenue 10, Level 5; Block 85 Bedok North Road, Level 6; 3 HarbourFront Place, HarbourFront Tower Two, Level 6; Block 612D Punggol Drive, Level 3',
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
        '2 large luggages',
        'Block 85 Bedok North Road, Level 6; Block 155 Sengkang East Avenue, Level 4; Block 342 Woodlands Avenue 1, Level 4',
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
        '3 large luggagess',
        'Block 512 Bukit Batok Street 52, Level 5; 176 Orchard Road, The Centrepoint, Level 3; Block 144 Tampines Street 12, Level 5',
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
        '3 large luggages',
        'Block 395 Bukit Batok West Avenue 5, Level 2; 81 Telok Blangah Road, Level 3; Block 342 Woodlands Avenue 1, Level 4',
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
        '2 large luggages',
        'Block 512 Bukit Batok Street 52, Level 5; 1 Harbourfront Walk, VivoCity, Level 4',
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
        '2 Large Luggages',
        'Block 292B Punggol Central, Level 5; Block 155 Sengkang East Avenue, Level 4; Block 492D Tampines Street 45, Level 3; Block 342 Woodlands Avenue 1, Level 4',
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
        '2 Large Luggages',
        'Block 55 Bedok South Avenue 3, Level 3; 1 Harbourfront Walk, VivoCity, Level 4; 290 Orchard Road, Paragon Shopping Centre, Level 4',
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
        '2 Large Luggages',
        '1092 Lower Delta Road, Level 5; Block 286 Tampines Street 22, Level 4',
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
        '2 Large Luggages',
        'Block 129 Ang Mo Kio Street 11, Level 3; 68 Orchard Road, Plaza Singapura, Level 5',
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
        '2 Large Luggages',
        'Block 512 Bukit Batok Street 52, Level 5; Block 450D Fernvale Road, Level 5; Block 492D Tampines Street 45, Level 3; Block 894C Woodlands Drive 50, Level 3',
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
        '3 Large Luggages',
        'Block 962 Jurong West Street 91, Level 3; Block 144 Tampines Street 12, Level 5',
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
        '3 Large Luggages',
        'Compass One Mall, Level 2; Block 6 Woodlands Centre Road, Basement 1',
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
        '3 Large Luggages',
        'Block 318B Punggol Way, Level 2; Block 260 Sengkang Street 21, Level 3',
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
        '2 Large Luggages',
        'Block 501 Jurong West Street 51, Level 2; Block 495D Tampines Street 43, Level 4',
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
        '1 Large Luggages',
        'Block 315 Ang Mo Kio Avenue 1, Level 4; Block 220 Bedok Central, Level 3; Block 130 Bukit Batok Street 11, Level 4',
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
        '2 Large Luggages',
        'Block 215 Bedok North Street 1, Level 2; Block 10 Woodlands Circle, Level 2',
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
        '2 Large Luggages',
        'Block 55 Bedok South Avenue 3, Level 3; Block 512 Bukit Batok Street 52, Level 5',
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
        '2 Large Luggages',
        'Block 165 Bukit Batok West Avenue 8, Level 3; Block 612D Punggol Drive, Level 3',
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
        '3 Large Luggages',
        'Block 745 Jurong West Street 73, Level 2',
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
        '2 Large Luggages',
        'Block 85 Bedok North Road, Level 6; Block 402 Punggol Place, Level 2',
        22.00
    ),
    -- ************************************************* Honda *************************************************
    (
        'Honda Civic Sedan',
        'Standard',
        'Sedan',
        'Honda',
        'Honda_Civic_Sedan.png',
        5,
        'Petrol/Diesel',
        '2 Large Luggages',
        'Block 209 Bedok North Street 1, Level 4; 3 HarbourFront Place, HarbourFront Tower Two, Level 6; Block 492D Tampines Street 45, Level 3; Block 101 Woodlands Street 13, Level 5',
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
        '2 Large Luggages',
        'Block 129 Ang Mo Kio Street 11, Level 3; Block 725 Bedok Reservoir Road, Level 3; Block 265D Sengkang East Way, Level 2',
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
        '2 Large Luggages',
        'Block 745 Jurong West Street 73, Level 2; Block 28A Cairnhill Road, Level 2',
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
        '2 Large Luggages',
        'Block 320 Ang Mo Kio Avenue 2, Level 3; Block 215 Bedok North Street 1, Level 2; Block 315A Punggol Way, Level 4',
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
        '2 Large Luggages',
        'Block 321B Punggol Central, Level 3; Block 265 Sengkang Central, Level 2; Block 1 Woodlands Street 11, Level 3',
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
        '2 Large Luggages',
        'Block 512 Jurong West Street 52, Level 4; Block 500 Tampines Central 1, Level 2',
        23.00
    );
INSERT INTO location(name)
VALUES('Ang Mo Kio'),
    ('Bedok'),
    ('Bukit Batok'),
    ('Harbourfront'),
    ('Jurong West'),
    ('Orchard'),
    ('Punggol'),
    ('Sengkang'),
    ('Tampines'),
    ('Woodlands');
-- Configure the car_location table to associate cars with locations
INSERT INTO car_location (car_id, location_id)
VALUES -- Car x is available at Location y
    (1, 1),
    (1, 2),
    (1, 3),
    (1, 5),
    (2, 1),
    (2, 2),
    (2, 4),
    (2, 7),
    (3, 2),
    (3, 8),
    (3, 10),
    (4, 3),
    (4, 6),
    (4, 9),
    (5, 3),
    (5, 4),
    (5, 10),
    (6, 3),
    (6, 4),
    (7, 7),
    (7, 8),
    (7, 9),
    (7, 10),
    (8, 2),
    (8, 4),
    (8, 6),
    (9, 4),
    (9, 9),
    (10, 1),
    (10, 6),
    (11, 3),
    (11, 8),
    (11, 9),
    (11, 10),
    (12, 5),
    (12, 9),
    (13, 8),
    (13, 10),
    (14, 7),
    (14, 8),
    (15, 5),
    (15, 6),
    (15, 7),
    (16, 1),
    (16, 2),
    (16, 3),
    (17, 2),
    (17, 10),
    (18, 2),
    (18, 3),
    (19, 3),
    (19, 7),
    (20, 5),
    (21, 2),
    (21, 7),
    (22, 2),
    (22, 4),
    (22, 9),
    (22, 10),
    (23, 1),
    (23, 2),
    (23, 8),
    (24, 5),
    (24, 6),
    (25, 1),
    (25, 3),
    (25, 7),
    (26, 7),
    (26, 8),
    (26, 10),
    (27, 5),
    (27, 9);
CREATE TABLE IF NOT EXISTS authorized_users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE IF NOT EXISTS user_info (
    id INT UNSIGNED NOT NULL PRIMARY KEY,
    surname VARCHAR(255) NOT NULL,
    firstname VARCHAR(255) NOT NULL,
    nric VARCHAR(9) NOT NULL,
    dob DATE NOT NULL,
    license VARCHAR(255) NOT NULL,
    mobile VARCHAR(8) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    languages VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    bank VARCHAR(255) NOT NULL,
    bankacc VARCHAR(15) NOT NULL,
    notification VARCHAR(255) NOT NULL,
    FOREIGN KEY (id) REFERENCES authorized_users(id)
);
INSERT INTO authorized_users(id, username, password)
VALUES (
        1,
        'test@gmail.com',
        '40bd001563085fc35165329ea1ff5c5ecbdbbeef'
    );
INSERT INTO user_info(
        id,
        surname,
        firstname,
        nric,
        dob,
        license,
        mobile,
        email,
        languages,
        address,
        bank,
        bankacc,
        notification
    )
VALUES (
        1,
        'Budidharma',
        'Alessandro',
        'S1234567J',
        '1999-7-13',
        '3',
        '91234567',
        'test@gmail.com',
        'a:6:{i:0;s:7:"English";i:1;s:7:"Chinese";i:2;s:5:"Malay";i:3;s:5:"Tamil";i:4;s:5:"Hindi";i:5;s:6:"Others";}',
        'NTU South Spine Toilet',
        'DBS',
        '123456789',
        'a:3:{i:0;s:12:"Text Message";i:1;s:10:"Phone Call";i:2;s:5:"Email";}'
    );
CREATE TABLE IF NOT EXISTS newsletter (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE
)
