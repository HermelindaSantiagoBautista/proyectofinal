<?php
$Servidor="localhost";
$Usuario="root";
$Clave="";
$BaseDeDatos="registro";
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave, $BaseDeDatos);

if (isset($_POST['Registar'])) {
$nom = $_POST["nombre"];
$apell = $_POST["apellidos"];
$ed = $_POST["edad"];
$email = $_POST["email"];
$pwa = $_POST["password"];
}

$IngresarDatos = "INSERT INTO persona VALUES (
  '$nom',
  '$apell',
  '$ed',
  '$email',
  '$pwa'
)";

$Verificar = mysqli_query($Conexion, $IngresarDatos);


if (!$Verificar) {
echo "Error No cargaron los datos";
} else {
  echo "<script>window.location='index.html'; alert('Registro Completo BIENVENIDO') </script>";
}
 ?>
