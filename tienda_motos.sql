CREATE DATABASE tienda_motos;

USE tienda_motos;

CREATE TABLE articulos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    marca VARCHAR(100),
    precio DECIMAL(10,2),
    cantidad INT
);