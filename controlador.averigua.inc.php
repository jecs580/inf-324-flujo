<!-- Registro de nuevos alumnos -->
<?php
include "conexion.inc.php";
$ci=$_GET['ci'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$sql="INSERT INTO academico.alumno (ci, nombre, apellido) VALUES ('$ci','$nombre','$apellido')";
// No es necesario q creemos un nuevo archivo de conexion para la base de datos academico puesto que
//especificamos que base de datos usará. Solamente se requiere las credenciales de usuario.
$result = mysqli_query($conn,$sql);
?>