<?php
$_SESSION['usuario']='jorge';
include "conexion.inc.php";
$sql="SELECT * FROM seguimiento WHERE fechafin is null and codUsuario LIKE '".$_SESSION['usuario']."'";
$result = mysqli_query($conn,$sql);
?>
<table>
<tr>
    <td>Tramite</td>
    <td>Flujo</td>
    <td>Proceso</td>
</tr>
<?php
while ($fila = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>$fila[0]</td>";
    echo "<td>$fila[1]</td>";
    echo "<td>$fila[2]</td>";
    echo "<td><a href='http://localhost/flujo_inscripcion/motor.php?codFlujo=$fila[1]&codProceso=$fila[2]'>ver</a></td>";
    echo "</tr>";
};
?>
</table>