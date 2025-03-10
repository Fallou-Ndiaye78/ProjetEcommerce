CREATE DATABASE commerce;

USE commerce;

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

CREATE TABLE new_shirt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO new_shirt (image_path, name, price, currency, description) VALUES
('produit/new-shirt/1.jpeg', 'Basic Slim Fit T-Shirt', 34.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/new-shirt/2.jpeg', 'Crewneck T-Shirt', 75.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/new-shirt/3.jpeg', 'Basic Heavy Weight T-Shirt', 19.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/new-shirt/4.jpeg', 'Full Sleeve Zipper', 91.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/new-shirt/5.jpeg', 'Full Slim Zipper', 23.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');

CREATE TABLE polo_shirt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO polo_shirt (image_path, name, price, currency, description) VALUES
('produit/polo-t-chirt/1.jpeg', 'Basic Slim Fit T-Shirt', 56.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/polo-t-chirt/2.jpeg', 'Crewneck T-Shirt', 52.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/polo-t-chirt/3.jpeg', 'Basic Heavy Weight T-Shirt', 54.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/polo-t-chirt/4.jpeg', 'Full Sleeve Zipper', 58.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/polo-t-chirt/5.jpeg', 'Full Slim Zipper', 66.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE short (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO short (image_path, name, price, currency, description) VALUES
('produit/short/1.jpeg', 'Basic Slim Fit T-Shirt', 23.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/short/2.jpeg', 'Crewneck T-Shirt', 17.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/short/3.jpeg', 'Basic Heavy Weight T-Shirt', 38.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/short/4.jpeg', 'Full Sleeve Zipper', 33.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/short/5.jpeg', 'Full Slim Zipper', 29.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE sweatshirt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO sweatshirt (image_path, name, price, currency, description) VALUES
('produit/sweat-shirt/1.jpeg', 'Basic Slim Fit T-Shirt', 99.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/sweat-shirt/2.jpeg', 'Crewneck T-Shirt', 84.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/sweat-shirt/3.jpeg', 'Basic Heavy Weight T-Shirt', 68.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/sweat-shirt/4.jpeg', 'Full Sleeve Zipper', 94.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/sweat-shirt/5.jpeg', 'Full Slim Zipper', 75.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE best_seller (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO best_seller (image_path, name, price, currency, description) VALUES
('produit/best-seller/1.jpeg', 'Basic Slim Fit T-Shirt', 188.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/best-seller/2.jpeg', 'Crewneck T-Shirt', 101.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/best-seller/3.jpeg', 'Basic Heavy Weight T-Shirt', 110.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/best-seller/4.jpeg', 'Full Sleeve Zipper', 193.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/best-seller/5.jpeg', 'Full Slim Zipper', 199.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE t_shirt (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO t_shirt (image_path, name, price, currency, description) VALUES
('produit/t_shirt/1.jpeg', 'Basic Slim Fit T-Shirt', 19.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/t_shirt/2.jpeg' 'Crewneck T-Shirt', 18.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/t_shirt/3.jpeg', 'Basic Heavy Weight T-Shirt', 11.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/t_shirt/4.jpeg', 'Full Sleeve Zipper', 15.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/t_shirt/5.jpeg', 'Full Slim Zipper', 16.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE jean (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO jean (image_path, name, price, currency, description) VALUES
('produit/jean/1.jpeg', 'Basic Slim Fit T-Shirt', 45.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/jean/2.jpeg', 'Crewneck T-Shirt', 42.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/jean/3.jpeg', 'Basic Heavy Weight T-Shirt', 36.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/jean/4.jpeg', 'Full Sleeve Zipper', 38.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/jean/5.jpeg', 'Full Slim Zipper', 57.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE jacket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO jacket (image_path, name, price, currency, description) VALUES
('produit/jacket/1.jpeg', 'Basic Slim Fit T-Shirt', 104.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/jacket/2.jpeg', 'Crewneck T-Shirt', 123.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/jacket/3.jpeg', 'Basic Heavy Weight T-Shirt', 150.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/jacket/4.jpeg', 'Full Sleeve Zipper', 189.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/jacket/5.jpeg', 'Full Slim Zipper', 190.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');


CREATE TABLE capuchons (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) DEFAULT 'USD',
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO capuchons (image_path, name, price, currency, description) VALUES
('produit/capuchont/1.jpeg', 'Basic Slim Fit T-Shirt', 94.00, 'USD', 'A comfortable slim fit t-shirt for everyday wear.'),
('produit/capuchont/2.jpeg', 'Crewneck T-Shirt', 84.00, 'USD', 'Classic crewneck t-shirt with durable fabric.'),
('produit/capuchont/3.jpeg', 'Basic Heavy Weight T-Shirt', 74.00, 'USD', 'Heavy weight t-shirt designed for durability and comfort.'),
('produit/capuchont/4.jpeg', 'Full Sleeve Zipper', 59.00, 'USD', 'Full sleeve zipper jacket perfect for cooler weather.'),
('produit/capuchont/5.jpeg', 'Full Slim Zipper', 91.00, 'USD', 'Alternative style full sleeve zipper jacket with modern design.');