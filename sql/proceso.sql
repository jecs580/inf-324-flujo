
-- Creacion de la tabla PROCESO
create table proceso(
    codFlujo VARCHAR(3),
    codProceso VARCHAR(4),
    codProcesoSiguiente VARCHAR(4),
    tipo VARCHAR(1),
    codRol VARCHAR(4),
    pantalla VARCHAR(30)
)

-- Insertando procesos
insert into proceso values('F1','P1','P2','I','E','averigua.inc.php');
insert into proceso values('F1','P2','P3','P','E','listadoc.inc.php');
insert into proceso values('F1','P3','P4','P','E','presentar.inc.php');
insert into proceso values('F1','P4',null,'C','K','docdia.inc.php');