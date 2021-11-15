Steps to run the project 

1. create database
    CREATE DATABASE ishita;
2. create menu table with the parameters
    CREATE TABLE menu (
    mid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    menu_item VARCHAR(30) NOT NULL,
    des VARCHAR(150) NOT NULL,
    price Int(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )   
 
 3. create user table 
   CREATE TABLE userRec (
    uid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(150) NOT NULL,
    pass VARCHAR(150) NOT NULL,
    contact VARCHAR(10) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )  







