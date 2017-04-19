CREATE DATABASE TuBanda;
USE TuBanda;

CREATE TABLE Usuario(
    uID INT NOT NULL AUTO_INCREMENT,
    uCorreo VARCHAR(50) NOT NULL,
    uUsuario VARCHAR(20) NOT NULL,
    uNombre VARCHAR(30) NOT NULL,
    uContrasena VARCHAR(20) NOT NULL,
    uImagen VARCHAR(50),
    uFechaNacimiento DATE NOT NULL,
    uLugarOrigen VARCHAR(30) NOT NULL,
    uInstrumento VARCHAR(30),
    uGenero VARCHAR(30),
    CONSTRAINT ck_usuario UNIQUE (uUsuario),
    CONSTRAINT ck_correo UNIQUE (uCorreo),
    CONSTRAINT pk_usuario PRIMARY KEY (uID)
);

CREATE TABLE Instrumento(
    uID INT NOT NULL AUTO_INCREMENT,
    iNombre VARCHAR(30) NOT NULL,
    CONSTRAINT ck_instrumento UNIQUE (iNombre),
    CONSTRAINT fk_usuario_instrumento FOREIGN KEY (uID) REFERENCES Usuario (uID)
);

CREATE TABLE Genero(
	uID INT NOT NULL AUTO_INCREMENT,
    gNombre VARCHAR(30) NOT NULL,
    CONSTRAINT ck_genero UNIQUE (gNombre),
    CONSTRAINT fk_usuario_genero FOREIGN KEY (uID) REFERENCES Usuario (uID)
);

describe Usuario;