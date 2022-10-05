CREATE TABLE user(
	id int not null auto_increment,
    name varchar(50) not null,
    age int not null,
    email varchar(100) not null,
    PRIMARY KEY(id)
);

INSERT INTO user(name,age,email) VALUES ('Mica','20','mica@gmail.com');
INSERT INTO user(name,age,email) VALUES ('Oscar','25','oscar@gmail.com');
INSERT INTO user(name,age,email) VALUES ('Layla','15','layla@gmail.com');
INSERT INTO user(name,age,email) VALUES ('Nicolas','45','nico@gmail.com');

SELECT * FROM user;
SELECT * FROM user limit 1;
SELECT * FROM user WHERE age>15;
SELECT * FROM user WHERE age>=15;
SELECT * FROM user WHERE age>20 and email='nico@gmail.com';
SELECT * FROM user WHERE age>20 or email='layla@gmail.com';
SELECT * FROM user WHERE email != 'layla@gmail.com';
SELECT * FROM user WHERE age between 15 and 30;
SELECT * FROM user WHERE email LIKE '%gmail%';
SELECT * FROM user WHERE email LIKE '%gmail';
SELECT * FROM user WHERE email LIKE 'oscar%';

SELECT * FROM user ORDER BY age ASC;
SELECT * FROM user ORDER BY age DESC;

SELECT MAX(age) AS mayor FROM user; -- max y min son funciones, tienen parametros. As es para darle nombre a la funcion.
SELECT MIN(age) AS menor FROM user;

SELECT id,name FROM user;
SELECT id,name AS nombre FROM user;
