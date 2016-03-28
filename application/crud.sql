drop table Usuario;
create table Usuario(
 usuario_id int(10) primary key not null auto_increment,
 nombre varchar(25),
 apepat varchar(25),
 apemat varchar(25),
 ciudad_id int(10),
 user varchar(25),
 pass varchar(25),
 estado varchar(25),
 rol_id int(10)
);

drop table Ciudad;
create table Ciudad(
 ciudad_id int(10) primary key not null auto_increment,
 nombre varchar(25),
 estado varchar(25)
);

drop table Asignatura;
create table Asignatura(
 asignatura_id int(10) primary key not null auto_increment,
 nombre varchar(25),
 estado varchar(25)
);

drop table Rol;
create table Rol(
 rol_id int(10) primary key not null auto_increment,
 tipo varchar(25),
 estado varchar(25)
);

drop table Usuario_Asignatura;
create table Usuario_Asignatura(
 usuario_id int(10),
 asignatura_id int(10)
);

insert into Usuario(nombre,apepat,apemat,ciudad_id,user,pass,estado,rol_id) values('Ricardo','Toledo','Barria',1,'rtoledo','1234','activo',1);
insert into Usuario(nombre,apepat,apemat,ciudad_id,user,pass,estado,rol_id) values('Docente','Docente','Docente',1,'docente','1234','activo',2);
insert into Usuario(nombre,apepat,apemat,ciudad_id,user,pass,estado,rol_id) values('Alumno','Alumno','Alumno',1,'alumno','1234','activo',3);
insert into Ciudad(nombre,estado) values('Punta Arenas','activo');
insert into Ciudad(nombre,estado) values('Santiago','activo');
insert into Ciudad(nombre,estado) values('Puerto Natales','activo');
insert into Ciudad(nombre,estado) values('Rancagua','activo');
insert into Asignatura(nombre,estado) values('Programacio1','activo');
insert into Asignatura(nombre,estado) values('Programacio2','activo');
insert into Rol(tipo,estado) values('administrador','activo');
insert into Rol(tipo,estado) values('docente','activo');
insert into Rol(tipo,estado) values('alumno','activo');
insert into Usuario_Asignatura(usuario_id,asignatura_id) values(3,1);
insert into Usuario_Asignatura(usuario_id,asignatura_id) values(3,2);
