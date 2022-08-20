-- Simple users Database

DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY,
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    phone INTEGER(10)
);

INSERT INTO users 
('first_name', 'last_name', 'email', 'phone')
VALUES
('Sargam', 'Patel', 'sargam@gmail.com', 4564564564),
('Dhruval', 'Patel', 'dhruval@gmail.com', 1231231231),
('Harry', 'Patel', 'harry@gmail.com', 7897897897),
('Bakhshish', 'Patel', 'bakhshish@gmail.com', 1591591591);