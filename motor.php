<html>
<?php
$codFlujo=$_GET['codFlujo'];
$codProceso=$_GET['codProceso'];
include "conexion.inc.php";
$sql="select * from proceso where codFlujo='$codFlujo' and codProceso='$codProceso'";
$result = mysqli_query($conn,$sql);
$fila = mysqli_fetch_array($result);  
$archivo = $fila['pantalla'];
// echo $archivo;
?>
<body>
    <h1>Motor de Flujo</h1>
    <br>
    <form action="controlador.php" method="get">
        <?php
        include $archivo;
        ?>    
        <input type="submit" name="anterior" value="Anterior">
        <input type="submit" name="siguiente" value="Siguiente">
    </form>

</body>
</html>