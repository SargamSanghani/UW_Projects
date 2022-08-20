-- Simple Books Database

DROP TABLE IF EXISTS books;
CREATE TABLE books (
    id INTEGER NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    num_pages VARCHAR(255),
    year_published INTEGER,
    in_print BOOLEAN NOT NULL DEFAULT false
);

INSERT INTO books 
('title', 'author', 'num_pages', 'year_published')
VALUES
('Dune', 'Frank Herbert', 578, 1945),
('Island', 'Peter Benchly', 567, 1973),
('War of the worlds', ' H. F. Parker', 234, 1836);