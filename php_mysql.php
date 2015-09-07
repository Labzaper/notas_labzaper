CSS

Selectors

	* Type selectors
	* .class selectors
	* #id selectors
	* [Attribute] selector

		*      [required] {color:red;}
		*      [data-author=psmith] {color:blue;]

	* :pseudo-class and :pseudo-element selectors
	 
		*      p::first-letter {color:red;}
		*      p::first-line {color:red;}
		*      p:hover {color:red;}

	* the universal selector
	* selector chains


Combinators

	*      descendant combinator
	*      child > combinator
	*      general ~ sibling
	*      adjacent + sibling

Opacity
p { opacity: 0.5; }

box-sizing: (content-box | border-box); 

.centered
{
  display: table-cell;
  min-height: 200px;
  min-width: 200px;
  text-align: center;
  vertical-align: middle; 
}


Flex -> Vendor Prefix

  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: row wrap;
  -ms-flex-flow: row wrap;
          flex-flow: row wrap;
  -webkit-justify-content: space-around;
  -ms-flex-pack: distribute;
          justify-content: space-around;
  margin: 10px auto 20px;


/********-----------------------------------------------------------------------------------------------------------------********\

PHP

Static variables are accessible only within the function that declared them but retain their value over multiple calls.

Passing by Reference 
     Prefacing a variable with the & symbol tells the parser to pass a reference to the variable's value, not the value itself.

$this is used to access the current object's properties.

Static Methods. It is called on a class, not on an object. It has no access to any object properties.
A property declared static cannot be directly accessed within an instance of a class, but a static method can.

:: Scope resolution operator.

Accessing outside of the class:
     MyClass::$myProperty;

Inside os the class:
     self::$myProperty;

Subclass constructor. When extend a class and declare its own constructor, PHP will not automatically call the constructor method of the parent class.
     class Tiger extends wildCat
     {
          function __construct()
          {
               parent::__construct();  // Call parent constructor first. 
          }
     }

Final Methods. To prevent a subclass from overriding a superclass method, you can use the final keyword. 
Final Class. This is a class you can´t heritage from.

Extract function. Turn the key/values pairs from an array into PHP variables.
Compact function. Create an array from variables.

Cookies
     Setting a cookie syntax:
      setcookie(name, value, expire, path, domain, secure, httponly);

     Example:
      setcookie('username', 'Labzaper', time() + 60 * 60 * 24 * 7, '/');

     Access:
      if (isset($_COOKIE['username']) $username = $_COOKIE['username']);

     Destroy:
      setcookie('username', 'Labzaper', time() - 2592000, '/');
      You must set a date in the past. The 2592000 time value is equivalent to one month.

Tips:
* It is considering good practice to place functions and class definitions toward the end of a file.
* VirtualHost
* Vagrant
* puphpet

/********-----------------------------------------------------------------------------------------------------------------********\

MySQL

  * mysql -u root  
  * mysql -u guillermo.cruces -p;
  * mysql -uhomestead -psecret

  * mysql -h nombre_servidor -u nombre_usuario -p 

Si deseamos conectarnos a la base de datos en local y con nombre de usuario root tendríamos que escribir:

  * mysql -h localhost -u root -p 

  * show databases;
  * use databaseName;
  * create database [database];
  * show tables;
  * describe [table];   -- Show table structure

SQL commands and keywords are case-insensitive.

Add user
GRANT PRIVILEGES ON database.object TO 'username'@'hostname' IDENTIFY BY 'password';

     i.e. GRANT ALL ON publications.* TO 'guillermo.cruces'@'localhost' IDENTIFIED BY 'cooper'

Add a key column
ALTER TABLE classics ADD id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY; 

Delete a column
ALTER TABLE classics DROP id;

Rename a table
ALTER TABLE classics RENAME newName;

Rename a column
ALTER TABLE classics CHANGE type category VARCHAR(16);
     
     The CHANGE keyword requires the datatype to be specified.

Drop a table
DROP TABLE classics;

Changing the datatype of a column
ALTER TABLE classics MODIFY year SMALLINT;

Adding Index to a column
ALTER TABLE classics ADD INDEX(author(20));
     The (20) is limiting the index to only the first 20 characters.

Adding a FULLTEXT index
ALTER TABLE classics ADD FULLTEXT(author, title);

Adding a Primary Key
ALTER TABLE classics ADD isbn CHAR(13) PRIMARY KEY;

CREATE TABLE classics (
     author VARCHAR(128),
     title VARCHAR(128),
     category VARCHAR(16), 
     year SMALLINT) ENGINE MyISAM;

Insert rows
INSERT INTO classics (isbn, author, title, category, year) VALUES ('9780598113101','Mark Twain', 'Tom Sawyer', 'Fiction','1876');
INSERT INTO classics (isbn, author, title, category, year) VALUES ('9780598113102','Jane Austen', 'Pride and Prejudice', 'Fiction','1811');
INSERT INTO classics (isbn, author, title, category, year) VALUES ('9670598111245','Charles Darwin', 'The origin of species', 'Non-Fiction','1856');
INSERT INTO classics (isbn, author, title, category, year) VALUES ('9734598113102','William Shakespeare', 'Romeo and Juliet', 'Play','1594');
INSERT INTO classics (isbn, author, title, category, year) VALUES ('9629698111245','Charles Darwin', 'The origin of species 2', 'Non-Fiction','1880');
INSERT INTO classics (isbn, author, title, category, year) VALUES ('9851698111245','Charles Dickens', 'The old curiosity shop', 'Fiction','1870');

Select
SELECT COUNT(*) FROM classics;
SELECT DISTINCT author FROM classics;
SELECT DISTINCT author FROM classics WHERE author LIKE 'Charles%';

MATCH AGAINST. Is used to make natural-languages searches in columns that have been given a FULLTEXT index. Case insensitive.
     SELECT author, title, year FROM classics WHERE MATCH (author, title) AGAINST ('Tom Sawyer');

SELECT author, title FROM classics WHERE MATCH (author, title) AGAINST ('+Charles -Species' IN BOOLEAN MODE);

SELECT author, title FROM classics WHERE MATCH (author, title) AGAINST (' "origin of" ' IN BOOLEAN MODE);
     Double quotation marks override stopwords.

UPDATE classics SET category='Classic fiction' WHERE category = 'Fiction';

Delete. Remove a row from a table.

SELECT author, title, year FROM classics ORDER BY author ASC, year DESC;

SELECT category, COUNT(author) FROM classics GROUP BY category;

JOIN

SELECT name, author, title from customers, classics
WHERE customers.isbn = classics.isbn;

INSERT INTO customers (name, isbn) VALUES
     ('Joe Bloggs', '9780598113101'),
     ('Mary Smith', '9780598113102'),
     ('Jack Wilson', '9629698111245');

JOIN...ON
SELECT name, author, title FROM customers
JOIN classics ON customers.isbn = classics.isbn;

AS
     SELECT name, author, title 
     FROM customers AS cust, classics AS class
     WHERE cust.isbn = class.isbn;

EXPLAIN Analyze and optimize querys.
     EXPLAIN SELECT * FROM accounts;

Tips: 

  * The recommended style is to use uppercase for SQL commands and keywords.
  * Use lowercase for tables.
  * Always initialize variables by security purposes. Also is a good programming practice because you can comment each initialization to show what each variable is for. 


CREATE DATABASE demo;
USE demo;
GRANT ALL ON demo.* TO guillermo@localhost IDENTIFIED BY 'laravelmx';
FLUSH PRIVILEGES;
