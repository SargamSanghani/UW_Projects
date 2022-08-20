-- Simple Books Database

DROP TABLE IF EXISTS books;
CREATE TABLE books (
    id INTEGER NOT NULL PRIMARY KEY,
    title VARCHAR(255),
    author VARCHAR(255),
    num_pages VARCHAR(255),
    year_published INTEGER,
    in_print BOOLEAN NOT NULL DEFAULT TRUE
);

INSERT INTO books 
(title, author, num_pages, year_published)
VALUES
('Dune', 'Frank Herbert', 566, 1975),
('Island', 'Peter Benchly', 366, 1973),
('War of the Worlds', 'H. G. Wells', 220, 1895);
