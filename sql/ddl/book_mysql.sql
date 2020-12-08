--
-- Creating a small table.
-- Create a database and a user having access to this database,
-- this must be done by hand, se commented rows on how to do it.
--



--
-- Create a database
--
DROP DATABASE IF EXISTS anaxdb;
CREATE USER IF NOT EXISTS 'anax'@'localhost' IDENTIFIED BY 'anax';
CREATE DATABASE IF NOT EXISTS anaxdb;
GRANT ALL ON anaxdb.* TO 'anax'@'localhost';
USE anaxdb;



--
-- Create a database user for the test database
--
-- GRANT ALL ON anaxdb.* TO anax@localhost IDENTIFIED BY 'anax';



-- Ensure UTF8 on the database connection
SET NAMES utf8;



--
-- Table Book
--
DROP TABLE IF EXISTS Book;
CREATE TABLE Book (
    `id` INTEGER PRIMARY KEY AUTO_INCREMENT NOT NULL,
    `title` VARCHAR(50) NOT NULL,
    `author` VARCHAR(50) NOT NULL,
    `picture` VARCHAR(50) NOT NULL
);

--
-- Create test
--
INSERT INTO Book (id, title, author, picture)
VALUES (1, "Harry Potter och de vises sten", "J.K. Rowling", "img/book1");
VALUES (2, "Harry Potter och Hemligheternas kammare", "J.K. Rowling", "img/book2");
VALUES (3, "Harry Potter och fången från Azkaban", "J.K. Rowling", "img/book3");
