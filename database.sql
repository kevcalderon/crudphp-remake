CREATE DATABASE Practicephp;
USE Practicephp;	

SELECT * FROM Usuarios;

ALTER TABLE Usuarios ADD Edad int;

SELECT * FROM Usuarios WHERE Edad=25;

INSERT INTO Usuarios(Nombre, Edad) VALUES ('Javier Alvarado', 25, 'Guatemala');

select * from usuarios where nombre like '%Calderon'; 

/*PROCEDIMIENTO AGREGAR.*/
DELIMITER &&
DROP PROCEDURE IF EXISTS AddUser&&
CREATE PROCEDURE AddUser (IN u_nombre varchar(100), IN u_edad int(11), IN u_pais varchar(100))
BEGIN
	INSERT INTO usuarios(nombre,edad,pais) VALUES (u_nombre,u_edad,u_pais);
END;&&


CALL AddUser('Andres Peraza', 12, 'Guatemala');


/*PROCEDIMIENTO ELIMINAR*/
DELIMITER &&
DROP PROCEDURE IF EXISTS DeleteUser&&
CREATE PROCEDURE DeleteUser(IN _id INT)
BEGIN
	DELETE FROM Usuarios WHERE usuarioId = _id;
END; &&

CALL DeleteUser(11);


/*PROCEDIMIENTO ACTUALIZAR*/
DELIMITER &&
DROP PROCEDURE IF EXISTS UpdateUser&&
CREATE PROCEDURE UpdateUser(IN _id INT, IN u_nombre varchar(100), IN u_edad int(11), IN u_pais varchar(100))
BEGIN
	UPDATE Usuarios SET nombre=u_nombre, edad=u_edad, pais=u_pais WHERE usuarioId=_id;
END; &&

CALL UpdateUser(1, 'Kevin Josue Calderon', 18, 'Guatemala, Ciudad');
