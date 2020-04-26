-- Creacion de la tabla seguimiento
create table seguimiento(
    nroTramite int,
    codFlujo VARCHAR(3),
    codProceso VARCHAR(4),
    codUsuario VARCHAR(15),
    fechaini date,
    fechafin date
)


-- Insertando datos
insert into seguimiento values(100,'F1','P1','jorge','01-04-2018','01-04-2018');
insert into seguimiento values(100,'F1','P2','jorge','01-04-2018','02-04-2018');
insert into seguimiento values(100,'F1','P3','jorge','02-04-2018','03-04-2018');
insert into seguimiento values(100,'F1','P3','marco','03-04-2018','01-05-2018');
insert into seguimiento values(210,'F1','P1','jorge','01-04-2019',null);
insert into seguimiento values(511,'F1','P1','jorge','01-04-2020',null);
