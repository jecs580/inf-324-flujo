<?php
include "conexion.inc.php";
$result = mysqli_query($conn, "select * from proceso where codProceso='P1'");
$fila = mysqli_fetch_array($result);  // Extraemos los resultados en un array
$proceso = $fila['codFlujo'];  //Separaramos los datos para obtener solo el codFlujo
echo $proceso;  // Mostramos el codFlujo por pantalla
?>