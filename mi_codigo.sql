--Mi codigo SQL
create table  ciudad(
	ciu_id SERIAL primary key,
	ciu_des varchar(60) unique
);

--La agregacion se convirtio en FK
create table persona(
	per_id SERIAL primary key
	, per_nombres varchar(30) not null
	, per_apellidos varchar(30) not null
	, per_ci varchar(100) not null
	, ciu_id integer not null
	, foreign key(ciu_id) references ciudad(ciu_id)
);

--La composiciones se convirtio en una relacion IDENTIFICABLE
create table empleado(
	per_id integer primary key
	, salario integer
	, foreign key(per_id) references persona(per_id)
);



