DROP DATABASE IF EXISTS portfolio;
CREATE DATABASE portfolio;
USE portfolio;
CREATE TABLE github_projects(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description VARCHAR(255),
    language VARCHAR(255),
    url VARCHAR(255)
);