DROP DATABASE IF EXISTS `Library`;

CREATE DATABASE `Library`;

USE `Library`;

-- This is a table where it identifies each member in the database
-- The attribites below are name, libraryID, dateJoined, and Address is unique to very member in the library datbase
CREATE TABLE `Member` (
    `libraryID` INT(8),
    `Name` CHAR(40),
    `dateJoined` date NOT NULL,
    `Address` CHAR(60),
    PRIMARY KEY (`libraryID`)
) engine=innoDB;

-- Insert values in the table

INSERT INTO `Member` (`libraryID`, `Name`, `dateJoined`, `Address`) VALUES
(209342123, 'Percy Jackson','1993-08-18', 'New York'),
(906374821, 'Annabeth Chase','1993-07-12', 'San Francisco'),
(829374826, 'Grover Underwood', '1989-06-05', 'Greenland'),
(273894510, 'Jason Grace','1993-07-12', 'California'),
(840264810, 'Piper Mclean','1993-07-12', 'Texas'),
(339102532, 'Frank Zhang','1993-07-12', 'Canada'),
(927364910, 'Hazel Levesque','1993-07-12', 'South Carolina'),
(152749137, 'Nico DiAngelo','1993-07-12', 'Iceland');


-- The table Book below is made to store information about the books stored in the database
CREATE TABLE `Book` (
    `bookID` INT(5),
    `Title` CHAR(40),
    `Author` CHAR(40),
    `YearPublished` YEAR,
    `MainGenre` CHAR(40),
    `status` INT(1), -- This status would only be either 0 or 1, 0 being currently borrowed and 1 being present in the library
    PRIMARY KEY (`bookID`)
) engine=innoDB;

-- Inserted below are some books that would be present in the database

INSERT INTO `Book` (`bookID`, `Title`, `Author`, `YearPublished`,`MainGenre`) VALUES
(82936, 'The Da Vinci Code','Dan Brown',`2003`, 'Mystery','1'),
(10973, 'How To Kill Your Family','Bella Mackie',`2021`, 'Suspense','1'),
(72953, 'Percy Jackson and The Olympians','Rick Riordan',`2005`, 'Fiction','1'),
(32016, 'Red White and Royal Blue','Casey McQuiston',`2019`, 'Romance','1'),
(03517, 'And Then There Were None','Agatha Christie',`1939`, 'Psychological thriller','1');




CREATE TABLE `Borrows` (
    `libraryID` INT(9),
    `bookID` INT(5),
    `DateBorrowed` date NOT NULL,
    PRIMARY KEY (`libraryID`)
) engine=innoDB;


CREATE TABLE `Librarian` (
    `librarianID` INT(8),
    `LibrarianName` CHAR(40),
) engine=innoDB;

-- Insert information about the librarians in the database
INSERT INTO `Book` (`librarianID`, `LibrarianName`) VALUES
(92073547, 'Vina Marie'),
(82937482, 'Vincent Roy'),
(72936481, 'Vince Roel'),
(73102703, 'Veronica Mae'),
(07145205, 'Venice Angel');


CREATE TABLE `BookRecord` (
    `RecordNumber` INT(11),
    `NameOfBorrower` CHAR(40),
    `libraryID` INT(8),
    `TitleOfBook` CHAR(40),
    `bookID` CHAR(8),
    `LibrarianInCharge` CHAR(40),
    `librarianID` CHAR(8),
    `Duration` INT(31),
    PRIMARY KEY (`RecordNumber`)
   
) engine=innoDB;

CREATE TABLE `Recordsin` (
    `librarianID` CHAR(8),
    `RecordNumber` CHAR(8),
    PRIMARY KEY (`RecordNumber`, `librarianID`)

) engine=innoDB;
