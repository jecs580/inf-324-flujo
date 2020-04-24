<!-- Se encarga de enviar a una pantalla en especifico. -->
<?php
$codFlujo=$_GET['codFlujo'];
$codProceso=$_GET['codProceso'];
$codProcesoSiguiente=$_GET['codProcesoSiguiente'];
if (isset($_GET['anterior'])) {
    if($codProceso=='P1'){
        $codProceso=$codProcesoSiguiente;
    }
    $sql="select * from proceso where codFlujo='$codFlujo' and codProcesoSiguiente='$codProceso'";
}
if (isset($_GET['siguiente'])) {
    if($codProceso=='P3'){
        $codProcesoSiguiente=$codProceso;
    }
    $sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProcesoSiguiente'";
}
include "conexion.inc.php";
$result = mysqli_query($conn,$sql);
$fila = mysqli_fetch_array($result);  
$codProcesoEnvia=$fila['codProceso'];
$archivoEnvia="motor.php?codFlujo=".$codFlujo."&codProceso=".$codProcesoEnvia;
// echo $archivoEnvia;
header("Location: ".$archivoEnvia);  //Enviamos una cabecera, donde podemos especificar los distintos
// valores de la cabecera, en este caso la locacion(ruta despues del nombre de dominio).
?>
<!-- TODO: Hacer validaciones para el boton anterior cuando estemos en el primer proceso. -->
<!-- TODO: Hacer validaciones para el boton siguiente cuando estemos en el ultimo proceso. -->