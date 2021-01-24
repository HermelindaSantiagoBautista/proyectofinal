<?php
$Servidor="localhost";
$Usuario="root";
$Clave="";
$BaseDeDatos="registro";
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave, $BaseDeDatos);

if (isset($_POST['procesar'])) {
$matri = $_POST["matricula"];
$modelo = $_POST["modelo"];
$color = $_POST["color"];
$marca = $_POST["marca"];
$servicio = $_POST["servicio"];
}

$IngresarDatos = "INSERT INTO mantenimiento VALUES (
  '$matri',
  '$modelo',
  '$color',
  '$marca',
  '$servicio'
)";

$Verificar = mysqli_query($Conexion, $IngresarDatos);


if (!$Verificar) {
echo "Error No cargaron los datos";
} else {
  echo "<script>window.location='index.html';alert('Auto Regisrado con Exito');</script>";
}
 ?>
