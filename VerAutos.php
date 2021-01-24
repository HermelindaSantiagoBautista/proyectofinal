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
     <link rel="stylesheet" href="EstilosTablas.css">
     <title>Tabla de Registro Vehicular</title>
   </head>
   <body>
<table>
<tr>
  <th>Matricula</th>
  <th>Modelo</th>
  <th>Color</th>
  <th>Marca</th>
  <th>Servicio</th>
</tr>
<?php
$Cargar="SELECT * FROM mantenimiento";
$ProcesoCarg= mysqli_query($Conexion, $Cargar);
while($Cargados=mysqli_fetch_array($ProcesoCarg)){
 ?>
 <tr>
  <td><?php echo $Cargados{'matricula'} ?></td>
  <td><?php echo $Cargados{'modelo'} ?></td>
  <td><?php echo $Cargados{'color'} ?></td>
  <td><?php echo $Cargados{'marca'} ?></td>
  <td><?php echo $Cargados{'servicio'} ?></td>
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
