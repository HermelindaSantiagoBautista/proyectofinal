<?php
$Servidor="localhost";
$Usuario="root";
$Clave="";
$BaseDeDatos="registro";
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave, $BaseDeDatos);

if (isset($_POST['procesar'])) {
$aceite = $_POST["aceite"];
$gasolina = $_POST["gasolina"];
$auto = $_POST["compu"];
$frenos = $_POST["frenos"];
$neumaticos = $_POST["neu"];
}

$IngresarDatos = "INSERT INTO servicio VALUES (
  '$aceite',
  '$gasolina',
  '$auto',
  '$frenos',
  '$neumaticos'
)";

$Verificar = mysqli_query($Conexion, $IngresarDatos);


if (!$Verificar) {
echo "Error No cargaron los datos";
} else {
  echo "<script>window.location='index.html';alert('Observaciones Registradas');</script>";
}
 ?>
