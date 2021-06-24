DROP DATABASE IF EXISTS inventario;
CREATE DATABASE IF NOT EXISTS inventario;
USE inventario;
CREATE TABLE productos(
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	producto VARCHAR(255) NOT NULL,
	referencia VARCHAR(255) NOT NULL,
	precio DECIMAL(5, 2) NOT NULL,
	peso DECIMAL(5, 2) NOT NULL,
	categoria VARCHAR(255) NOT NULL,
	fechacreacion date,
	fechaventa datetime,
	
	
	stock DECIMAL(5, 2) NOT NULL,
	PRIMARY KEY(id)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8;




INSERT INTO productos(id, producto, referencia, categoria, precio, peso, stock,fechacreacion,fechaventa) 
VALUES
(1,  'arroz', '1','grano',15, 10, 100,'02-05-2020','02-05-2021'),
(2,  'manzana','2','fruta', 80, 65, 100,'02-05-2020','02-05-2021'),
(3,  'Aceite','3','aceite', 20, 18, 100,'02-05-2020','02-05-2021'),
(4,  'chocolate','4', 'dulces',15, 12, 100,'02-05-2020','02-05-2021'),
(5,  'chocorramo','5','dulces', 8, 5, 100,'02-05-2020','02-05-2021');


