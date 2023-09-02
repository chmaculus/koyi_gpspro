DROP TABLE IF EXISTS proveedores;
create table proveedores(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	categoria varchar(30), 
	proveedor varchar(30),
	direccion varchar(30),
	telefono varchar(30),
	mail varchar(40),
	celular varchar(30),
	web varchar(30),
	contacto varchar(30),
	margen double,
	exclusividad int,
	compra_directa int,
	condicion_pago int,
	relacion int,
	postal varchar(10),
	fecha date,
	hora time,
	PRIMARY KEY (id)
);


DROP TABLE IF EXISTS proveedores_reunion;
create table proveedores_reunion(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	id_proveedor MEDIUMINT UNSIGNED NOT NULL,
	detalle text,
	fecha date,
	hora time,
	PRIMARY KEY (id)
);

