CREATE TABLE productos(
	id int not null auto_increment,
    name varchar(50) not null,
    created_by int not null,
    marca varchar(50) not null,
    PRIMARY KEY(id),
    FOREIGN KEY(created_by) REFERENCES user(id)
);

RENAME TABLE productos TO product;
INSERT INTO product(name,created_by,marca)
VALUES
	('ipad'		,	1	,	'apple'),
    ('iphone'	,	1	,	'apple'),
    ('watch'	,	2	,	'apple'),
    ('macbook'	,	6	,	'apple'),
    ('ipad mini',	2	,	'apple'),
    ('imac',	6	,	'apple');
    
SELECT * FROM product;
SELECT u.id,u.email,p.name FROM user u LEFT JOIN product p ON u.id=p.created_by;
SELECT u.id,u.email,p.name FROM user u RIGHT JOIN product p ON u.id=p.created_by;
SELECT u.id,u.email,p.name FROM user u INNER JOIN product p ON u.id=p.created_by;

SELECT u.id,u.email,p.name FROM user u CROSS JOIN product p;

SELECT COUNT(id), marca FROM product GROUP BY marca;
SELECT COUNT(p.id), u.name FROM product p LEFT JOIN USER u ON u.id=p.created_by GROUP BY p.created_by
HAVING COUNT(p.id) >=2; 

