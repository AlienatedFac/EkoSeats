

CREATE DATABASE EkoBDD;
use EkoBDD;

CREATE TABLE Acceso(
Id_Usuario varchar(100) NOT NULL,
Nickname varchar(22),
Password varchar(12),
Nivel varchar(30),
PRIMARY KEY(Id_Usuario));

CREATE TABLE Proveedores(
Id_Proveedor varchar(50) NOT NULL,
Pais varchar(30) NOT NULL,
Ciudad varchar(30) NOT NULL;


CREATE TABLE Material(
Id_Equipo varchar(4) NOT NULL,
Nombre varchar(20),
Pais int(2) NOT NULL,
Continente varchar(3) NOT NULL,
Logo longblob,
PRIMARY KEY(Id_Equipo),
FOREIGN KEY(Pais) REFERENCES Paises(Id_Pais),
FOREIGN KEY(Continente) REFERENCES Continentes(Id_Continente));

CREATE TABLE Horario(
Id_Horario varchar(2) NOT NULL,
Fecha date,
Hora time,
PRIMARY KEY(Id_Horario));
