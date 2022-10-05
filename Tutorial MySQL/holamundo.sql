create database  holamundo;
show databases;
use holamundo;
CREATE TABLE animales (
	id int,
    tipo varchar(255),
    estado varchar(255),
    PRIMARY KEY(id)
    
);

-- INSERT INTO animales (tipo, estado) VALUES ('chanchito','feliz');
ALTER TABLE animales MODIFY COLUMN id int auto_increment;
SHOW CREATE TABLE holamundo.animales;

CREATE TABLE `animales` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO animales (tipo, estado) VALUES ('chanchito','feliz');
INSERT INTO animales (tipo, estado) VALUES ('dragon','feliz');
INSERT INTO animales (tipo, estado) VALUES ('micaela','triste');

SELECT * FROM animales; 
SELECT * FROM animales WHERE id=1;
SELECT * FROM animales WHERE estado='feliz' AND tipo='micaela';
UPDATE animales SET estado='feliz' WHERE id=3;

SELECT * FROM animales; 
DELETE FROM animales WHERE estado='feliz';

-- Error Code: 1175. You are using safe update mode and you tried to update a table without a WHERE 
-- that uses a KEY column To disable safe mode, toggle the option in Preferences -> SQL Editor and reconnect.

DELETE FROM animales WHERE id=3;
SELECT * FROM animales; 

UPDATE animales SET estado='triste' WHERE tipo='dragon';
-- tambien da error 1175 si no se le pasa el id


