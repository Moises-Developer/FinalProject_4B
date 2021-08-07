CREATE DATABASE CINEPROMAX;
GO
USE CINEPROMAX;
GO
--TABLA 1
CREATE TABLE TARJETA(
IDTarjeta INT NOT NULL PRIMARY KEY,
NumTarjeta VARBINARY(128) NOT NULL
);
GO
--TABLA 2
CREATE TABLE SALA(
IDSala INT NOT NULL PRIMARY KEY,
Capacidad INT NOT NULL
);
GO
--TABLA 3
CREATE TABLE COMIDA(
IDComida INT NOT NULL PRIMARY KEY,
Nombre VARCHAR(15) NOT NULL,
Categoria VARCHAR(20) NOT NULL,
PRECIA DECIMAL(15,2) NOT NULL
);
GO
--TABLA 4
CREATE TABLE USUARIO(
IDUsuario INT NOT NULL PRIMARY KEY,
Nombre VARCHAR(15) NOT NULL,
Apellido VARCHAR(15) NOT NULL,
FechaNac DATE NOT NULL,
Telefono VARCHAR(15) NOT NULL,
IDTarjeta INT NOT NULL,
FOREIGN KEY(IDTarjeta) REFERENCES TARJETA(IDTarjeta)
);
GO
ALTER TABLE USUARIO ADD Contrasena VARCHAR(15);
--TABLA 5
CREATE TABLE PELICULA(
IDPelicula INT NOT NULL PRIMARY KEY,
Nombre VARCHAR(15) NOT NULL,
IDSala INT NOT NULL,
FOREIGN KEY(IDSala) REFERENCES SALA(IDSala)
);
GO
--TABLA 6
CREATE TABLE COMPRACOMIDA(
IDComida INT NOT NULL,
IDUsuario INT NOT NULL,
PRIMARY KEY(IDComida, IDUsuario),
FOREIGN KEY(IDComida) REFERENCES COMIDA(IDComida),
FOREIGN KEY(IDUsuario) REFERENCES USUARIO(IDUsuario)
);
GO
--TABLA 7
CREATE TABLE BOLETO(
IDBoleto INT NOT NULL PRIMARY KEY,
Fecha DATE NOT NULL,
Hora TIME NOT NULL,
Precio DECIMAL(20,2) NOT NULL,
IDUsuario INT NOT NULL,
IDPelicula INT NOT NULL,
FOREIGN KEY(IDUsuario) REFERENCES USUARIO(IDUsuario),
FOREIGN KEY(IDPelicula) REFERENCES PELICULA(IDPelicula)
);
GO
SELECT * FROM TARJETA;
SELECT IDTarjeta, CONVERT(VARCHAR, DECRYPTBYPASSPHRASE('CLAVE', NumTarjeta)) AS NumeroTarjeta FROM TARJETA;
SELECT * FROM USUARIO;
-- UPDATE USUARIO SET Contrasena = '12345678';
INSERT INTO TARJETA VALUES (1, ENCRYPTBYPASSPHRASE('CLAVE', '5478-4578-28'));
INSERT INTO USUARIO VALUES (1, 'Moises', 'Camacho', '2001/05/17', '3321471891', 1);