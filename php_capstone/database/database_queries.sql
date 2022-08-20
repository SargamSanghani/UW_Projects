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
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted BOOL NOT NULL DEFAULT 0,
    is_admin BOOL NOT NULL DEFAULT 0
);

-- Insert user 

INSERT INTO users
            (first_name, last_name, street, city, postal_code, province, country, phone, email, password, is_subscribed)
            VALUES
            ('Sargam', 'Sanghani', '75 street', 'Winnipeg', 'R5M 4J3', 'Manitoba', 'Canada', '456-456-4567', 'sargam@gmail.com', 'zxcvbnm@123', 1);

-- Create logs table

DROP TABLE IF EXISTS log;

CREATE TABLE log
(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    event VARCHAR(255),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Create categories table

DROP TABLE IF EXISTS categories;

CREATE TABLE categories
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted BOOL NOT NULL DEFAULT 0
);

INSERT INTO categories (category_name)
values ('Pizza'), ('Drinks'), ('Desserts'), ('Sides'), ('Sandwich');

-- Create products table

DROP TABLE IF EXISTS products;

CREATE TABLE products 
(
    id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    excerpt VARCHAR(255),
    image VARCHAR(255),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted BOOL NOT NULL DEFAULT 0,
    price DECIMAL(7, 2),
    category_id INT,
    is_out_of_stock BOOLEAN NOT NULL DEFAULT 0,
    preparing_time DECIMAL,
    calories VARCHAR(255),
    total_sales BIGINT,
    servings INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- Create order table

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders`
(
    id BIGINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_id BIGINT,
    gst DECIMAL(7, 2),
    pst DECIMAL(7, 2),
    delivery_charges DECIMAL(7, 2),
    sub_total DECIMAL(7, 2),
    total DECIMAL(7, 2),
    cc_number INT(4),
    address VARCHAR(255),
    order_status enum('pending', 'completed', 'cancelled'),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Create order_product table

DROP TABLE IF EXISTS `order_product`;

CREATE TABLE `order_product`
(
    order_id BIGINT,
    product_id BIGINT,
    quantity int NOT NULL,
    price decimal(7, 2),
    total_price decimal(7, 2),
    title VARCHAR(255) NOT NULL, 
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES `orders`(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);
