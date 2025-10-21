USE LoginReg;
CREATE TABLE week7(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,        
    lastname VARCHAR(50) NOT NULL,        
    email VARCHAR(100) NOT NULL,
    contact VARCHAR(20) NOT NULL          
);
INSERT INTO `week7` (`firstname`, `lastname`, `email`, `contact`) VALUES
('John', 'Doe', 'john.doe@example.com', '1234567890'),
('Jane', 'Smith', 'jane.smith@example.com', '0987654321'),
('Mike', 'Johnson', 'mike.johnson@example.com', '5555555555');