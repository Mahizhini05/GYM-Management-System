-- Create database
CREATE DATABASE gym_management;

-- Use the database
USE gym_management;

-- Create members table
CREATE TABLE members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    age INT NOT NULL,
    join_date DATE NOT NULL
);
