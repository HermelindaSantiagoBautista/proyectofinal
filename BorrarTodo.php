<?php
$Servidor="localhost";
$Usuario="root";
$Clave="";
$BaseDeDatos="registro";
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave, $BaseDeDatos);

$Borrar = "DELETE FROM mantenimiento";
$Respuesta= mysqli_query($Conexion, $Borrar);


if ($Borrar) {
  echo "<script>window.location='VerAutos.php'; </script>";
}
 ?>
