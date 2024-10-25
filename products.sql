CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255)
);

INSERT INTO products (name, description, price, image) VALUES
('Procesador Intel i7', 'Procesador Intel Core i7 de última generación', 300.00, 'intel_i7.jpg'),
('Memoria RAM 16GB', 'Memoria RAM DDR4 de 16GB para alto rendimiento', 80.00, 'ram_16gb.jpg');