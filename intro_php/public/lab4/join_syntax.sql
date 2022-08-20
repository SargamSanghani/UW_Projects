-- Join Syntax

SELECT 
book.id as book_id,
book.title, 
author.name as author,
genre.name as genre,
format.name as format,
publisher.name as publisher,
book.price
FROM
book
JOIN author on book.author_id = author.id
JOIN publisher on book.publisher_id = publisher.id
JOIN genre on book.genre_id = genre.id
JOIN format on book.format_id = format.id
WHERE book.in_print = 1
order by book.title;

SELECT 
book.image,
book.title, 
book.year_published,
book.num_pages, 
book.in_print, 
book.price, 
book.description,
author.name as author, 
author.country as author_country,
genre.name as genre,
format.name as format,
publisher.name as publisher,
publisher.city as publisher_city,
publisher.phone as publisher_phone
FROM
book
INNER JOIN author on book.author_id = author.id
INNER JOIN publisher on book.publisher_id = publisher.id
JOIN genre on book.genre_id = genre.id
JOIN format on book.format_id = format.id
WHERE book.id = ?;
