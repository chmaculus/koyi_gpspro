DROP TABLE IF EXISTS agenda;
create table agenda(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	proveedor varchar(30),
	direccion varchar(30),
	telefono varchar(30),
	mail varchar(40),
	celular varchar(30),
	web varchar(30),
	contacto varchar(30),
	PRIMARY KEY (id)
);

