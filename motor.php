<html>
<?php
$codFlujo=$_GET['codFlujo'];
$codProceso=$_GET['codProceso'];
include "conexion.inc.php";
$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";
$result = mysqli_query($conn,$sql);
$fila = mysqli_fetch_array($result);  
$archivo = $fila['pantalla'];  // Nombre de la pantalla a mostrar.
$codProcesoSiguiente = $fila['codProcesoSiguiente'];
// echo $archivo;
?>
<body>
    <h1>Motor de Flujo</h1>
    <br>
    <form action="controlador.php" method="get">
        <?php
        include $archivo;
        ?>

        <input type="hidden" value="<?php echo $codFlujo; ?>" name="codFlujo">
        <input type="hidden" value="<?php echo $codProceso; ?>" name="codProceso">
        <input type="hidden" value="<?php echo $codProcesoSiguiente; ?>" name="codProcesoSiguiente">
        <input type="hidden" value="<?php echo $archivo; ?>" name="archivo">
        <input type="submit" name="anterior" value="Anterior">
        <input type="submit" name="siguiente" value="Siguiente">
    </form>

</body>
</html>