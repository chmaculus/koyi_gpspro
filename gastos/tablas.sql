DROP TABLE IF EXISTS gastos;
create table gastos(
	id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	categoria varchar(30), 
	fecha date,
	hora time,
	detalle text,
	monto double,
	PRIMARY KEY (id)
);