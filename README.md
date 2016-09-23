# Hair Salon

## An exercise in establishing database relations, 09/23/2016

### By Zach Baum

#### Description

An application for a hair salon. The owner should be able to add stylists, and for each stylist, add clients who see that stylist. The stylists work independently, so each client only belongs to a single stylist.

#### Installation

1. Clone or download files from github.
2. Install Composer if you haven't already, then open the terminal in "/hair-salon" and run the "composer install" command to load frameworks.
3. Open terminal in "/hair-salon/web" and run the command "php -S localhost:8000".
4. Open the internet browser of your choice and go to "localhost:8000/".

#### Specs

Stylists can be created and added to a list of stylists with a form.
Input: Add "Randy" to the list of stylists.
Output: Stylists: Randy.

Stylists can be updated to change their name.

Input: Update "Randy" to "Randal".
Output: Stylists: Randal.
User can search through the list of stylists by inputting key words.

User can select a Stylist and become a client.

Input: "Zachary" is now a client of "Randy".
Output: Stylists: Randy. Randy's Clients: Zachary.

#### Support and contact details

zacharybaum42@gmail.com

#### Technologies Used

PHP, Silex, Twig, PHPUnit, Bootstrap, Mysql, MAMP

#### SQL Commands:

~~~
CREATE DATABASE hair_salon;
CREATE TABLE stylists (id serial PRIMARY KEY, name varchar (255));
CREATE TABLE clients (id serial PRIMARY KEY, name varchar (255), stylist_id int);
CREATE DATABASE hair_salon_test;
CREATE TABLE stylists (id serial PRIMARY KEY, name varchar (255));
CREATE TABLE clients (id serial PRIMARY KEY, name varchar (255), stylist_id int);
<!--StylistTest.php-->
INSERT INTO stylists (name) VALUES ('Randy');
SELECT * FROM stylists;
DELETE FROM stylists;
INSERT INTO stylists (name) VALUES ('Randy');
INSERT INTO stylists (name) VALUES ('Phoebe');
SELECT * FROM stylists;
DELETE FROM stylists;
INSERT INTO stylists (name) VALUES ('Randy');
INSERT INTO stylists (name) VALUES ('Phoebe');
DELETE FROM stylists;
SELECT * FROM stylists;
DELETE FROM stylists;
INSERT INTO stylists (name) VALUES ('Randy');
INSERT INTO stylists (name) VALUES ('Phoebe);
SELECT * FROM stylists;
DELETE FROM stylists;
INSERT INTO stylists (name) VALUES ('Randy');
INSERT INTO clients (name, stylist_id) VALUES ('Zachary', 1);
INSERT INTO clients (name, stylist_id) VALUES ('Alexi', 1);
SELECT * FROM clients WHERE stylist_id = 1;
DELETE FROM stylists;
DELETE FROM clients;
INSERT INTO stylists (name) VALUES ('Randy');
INSERT INTO stylists (name) VALUES ('Phoebe);
DELETE FROM stylists WHERE id = 1;
SELECT * FROM stylists;
DELETE FROM stylists;
INSERT INTO stylists (name) VALUES ('Randy');
UPDATE stylists SET name = 'Randal' WHERE id = 1;
DELETE FROM stylists;
~~~

License
*Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.*

Copyright (c) 2016 Zachary Baum
