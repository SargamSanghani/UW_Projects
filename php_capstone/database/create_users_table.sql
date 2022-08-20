-- Create users table

DROP TABLE IF EXISTS users;

CREATE TABLE users 
(
    id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    street VARCHAR(255),
    city VARCHAR(255),
    postal_code CHAR(7),
    province VARCHAR(50),
    country VARCHAR(50),
    phone VARCHAR(12),
    email VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    is_subscribed BOOL NOT NULL DEFAULT 0,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    deleted BOOL NOT NULL DEFAULT 0 
);