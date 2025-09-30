-- SQL file for PHP User Management System
-- Database: LoginReg
-- Table: table1

-- Create database
CREATE DATABASE IF NOT EXISTS `LoginReg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `LoginReg`;

-- Create table1 for user data
CREATE TABLE IF NOT EXISTS `latop` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    lname VARCHAR(100) NOT NULL,        
    brand VARCHAR(50) NOT NULL,        
    price DECIMAL(10,2) NOT NULL,      
    stock INT NOT NULL                
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert sample data (optional)
INSERT INTO `latop` (lname, brand, price, stock) VALUES
('Dell XPS 13', 'Dell', 25000000, 10),
('MacBook Air M2', 'Apple', 32000000, 5),
('Asus ROG Strix G15', 'Asus', 28000000, 7),
('HP Pavilion 15', 'HP', 18000000, 12),
('Lenovo ThinkPad X1 Carbon', 'Lenovo', 30000000, 6);