create database centro3;
use centro3;

create table persona(
    id int primary key auto_increment,
    nombre varchar (100),
    apellido varchar (100),
    direccion varchar(100),
    telefono varchar(30),
    DNI varchar (15));
    insert into persona (nombre,apellido,direccion,telefono,DNI) values ("pablo","rico","Strobel 444","223444334", "23.444.555"),
("juan","gonzales","chaco 7734","223444333","34.555.666"),
("ricardo","kkkkk","juan b. justo 444","2235556666","45.556.789"),
("ruben","lopez","colon 555","2238889999","25.222.444");

create table alumno(
    id int primary key auto_increment,
 id_persona varchar (100));
 insert into alumno (id_persona) values ("2"),("4");
show tables;
describe alumno;
select * from alumno;
create table instructores(
  id int primary key auto_increment,
  id_persona varchar(100),
  Area varchar (100));
  insert into instructores (id_persona, Area) values ("1","Programacion"), ("3", "Disenio web");

create table cursos(
    id int primary key auto_increment,
 nomb varchar(100),
 duracion varchar(100),
 id_instructor varchar (100),
  cupototal varchar(100),
  imagen varchar (250));
  insert into cursos (nomb, duracion,id_instructor,cupototal,imagen) values ("Disenio web","5 meses","2","30","https://i0.wp.com/artoyclaro.com/wp-content/uploads/2022/05/Graphic-design-is-my-passion.jpg?resize=680%2C427&ssl=1"),
("Programacion","3 meses","1","40","https://www.meme-arsenal.com/memes/f3361bd0d6555d4d838a1773fd487908.jpg");
show tables;
describe cursos;
select * from cursos;


create table inscripcion (
    id int primary key auto_increment,
    id_alumno varchar (100),
    id_cursos varchar (100),
    fecha_de_inscripcion varchar (100));
show tables;
describe inscripcion;
insert into inscripcion (id_alumno,id_cursos,fecha_de_inscripcion) values ("1","2","27/04/2003"),("2","1","30/04/2005");
select * from inscripcion;

create table usuarios (
  id int primary key auto_increment,
  n_usuario varchar(100),
  clave varchar (100),
  id_persona varchar (100),
  ft_perfil varchar(250));

insert into usuarios (n_usuario,clave,id_persona,ft_perfil) values ("juancarlosBJ","bokitapasion","2","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHNLMUnk-uTkNL0qWoBm90a8HAlPY2tfEKQg&usqp=CAU"),
("pablo123","fulbo","1","https://i.pinimg.com/474x/ae/fa/59/aefa5916c45d996ff5d4bd38d1703973.jpg"), 
("ricardovich","si","3","https://i.pinimg.com/236x/84/f9/ba/84f9ba3ae33c1ea4784720de8b33d196.jpg"),
("ruben","no","4","https://media.lacapital.com.ar/p/ecad63f5b98b67ecdf62d3bf66b6a855/adjuntos/203/imagenes/100/616/0100616705/1200x675/smart/rubenjpg.jpg");


$conexion->new mysqli;