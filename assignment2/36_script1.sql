———delete the database and create a new database and create the tables
SHOW DATABASES;
DROP DATABASE IF EXISTS 36_assign2db;
CREATE DATABASE 36_assign2db;
USE 36_assign2db;
SHOW TABLES;
CREATE TABLE bus (capacity INT,plateNum CHAR(7) NOT NULL, PRIMARY KEY(plateNum));
CREATE TABLE busTrip(start DATE, end DATE,county VARCHAR(30),tripName VARCHAR(50), tripID INT NOT NULL, PRIMARY KEY(tripID), plateNum CHAR(7),FOREIGN KEY(plateNum) REFERENCES bus(plateNum));
CREATE TABLE passenger(firstName VARCHAR(20),lastName VARCHAR(20), pID INT NOT NULL, PRIMARY KEY(pID), tripID INT NOT NULL, FOREIGN KEY(tripID) REFERENCES busTrip(tripID));
CREATE TABLE passport(birth DATE, passportNum CHAR(4),expiry DATE, citizenship VARCHAR(30),PRIMARY KEY(passportNum),pID INT NOT NULL,FOREIGN KEY(pID) REFERENCES passenger(pID));
SHOW TABLES;
