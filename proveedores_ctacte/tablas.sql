DROP TABLE IF EXISTS banco;
create table banco(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	numero varchar(20),
	cuenta varchar(10),
	fecha_emision date,
	fecha_vencimiento date,
	importe double,
	detalle varchar(50),
	cobrado varchar(1),
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS banco;
create table banco(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	id_padre MEDIUMINT UNSIGNED NOT NULL;
	numero varchar(20),
	cuenta varchar(10),
	fecha_emision date,
	fecha_vencimiento date,
	importe double,
	detalle varchar(50),
	cobrado varchar(1),
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS datos_banco;
create table datos_banco(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	anio_mes varchar(8),
	tipo varchar(20),
	valor double,
	PRIMARY KEY (id)
);