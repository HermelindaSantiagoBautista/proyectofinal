<?php
$Servidor="localhost";
$Usuario="root";
$Clave="";
$BaseDeDatos="registro";
$Conexion = mysqli_connect($Servidor, $Usuario, $Clave, $BaseDeDatos);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Registro Vehicular</title>
     <link rel="stylesheet" href="EstilosTablas.css">
     <title></title>
   </head>
   <body>
<table>
<tr>
  <th>Estado del aceite</th>
  <th>Porcentaje de Gasolina</th>
  <th>Computadora del auto</th>
  <th>Estado de los frenos</th>
  <th>Neumaticos</th>
</tr>
<?php
$Cargar="SELECT * FROM servicio";
$ProcesoCarg= mysqli_query($Conexion, $Cargar);
while($Cargados=mysqli_fetch_array($ProcesoCarg)){
 ?>
 <tr>
  <td><?php echo $Cargados{'aceite'} ?></td>
  <td><?php echo $Cargados{'gasolina'} ?></td>
  <td><?php echo $Cargados{'auto'} ?></td>
  <td><?php echo $Cargados{'frenos'} ?></td>
  <td><?php echo $Cargados{'neumaticos'} ?></td>
 </tr>
 <?php
}
 ?>
</table>
<br>
<a class="Botones" href="index.html">Regresar</a>
<a class="Botones" href="BorrarTodo.php">Borrar Todo</a>
   </body>
 </html>
