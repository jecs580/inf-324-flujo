-- TABLA ALUMNO
create table alumno
(
    ci varchar(15),
    nombre varchar(30),
    apellido varchar(30),
)

INSERT INTO `alumno` (`ci`, `nombre`, `apellido`) VALUES ('12', 'jorge', 'callisaya'); --Forma de insertar datos en mysql. Si queremos insertar datos en una base de datos diferente colocamos:
-- INSERT INTO <nombre db>.<tabla> (`ci`, `nombre`, `apellido`) VALUES ('12', 'jorge', 'callisaya');