
--1

CREATE DATABASE Library;
CREATE TABLE Books
( 
	id_book int NOT NULL,
	book_name varchar(100),
	ISBN int UNIQUE,
	year_publishing int,
	id_author int,
	PRIMARY KEY (id_book),
	FOREIGN KEY (id_author)
        REFERENCES Authors(id_author)
);

CREATE TABLE Authors 
(
	id_author int NOT NULL,
	first_name varchar(25),
	last_name varchar(25),
	PRIMARY KEY (id_author)
);

CREATE TABLE Reviews(
	id_review int NOT NULL,
	mark int,
	id_book int,
	CONSTRAINT CHK_Mark CHECK (mark >= 0 AND mark <=10)
	PRIMARY KEY (id_review),
	FOREIGN KEY (id_book)
        REFERENCES Books(id_book)	
);

--2
SELECT 
	CONCAT(a.first_name, ' ', a.last_name) AS authorFio, 
	count(*) as countOfBooks
FROM Authors a 
INNER JOIN Books b ON a.id_author = b.id_author 
GROUP BY authorFio;

--3
SELECT 	 
	a.first_name, a.last_name,
	AVG(r.mark) AS AVG_MARK
FROM Authors a 
INNER JOIN Books b ON b.id_author = a.id_author 
INNER JOIN Reviews r ON r.id_book = b.id_book  
GROUP BY a.first_name, a.last_name
Order By AVG_MARK DESC 
Limit 5;

CREATE VIEW AVG_MARK_AUTHORS AS 
SELECT 	 
	a.first_name, a.last_name,
	AVG(r.mark) AS AVG_MARK
FROM Authors a 
INNER JOIN Books b ON b.id_author = a.id_author 
INNER JOIN Reviews r ON r.id_book = b.id_book  
GROUP BY a.first_name, a.last_name
Order By AVG_MARK DESC 
Limit 5;

