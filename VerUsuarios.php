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
     </style>
   </head>
   <body>
<table>
<tr>
  <th>Nombre</th>
  <th>Apellidos</th>
  <th>Edad</th>
  <th>Correo</th>
  <th>Contraseña</th>
</tr>
<?php
$Cargar="SELECT * FROM persona";
$ProcesoCarg= mysqli_query($Conexion, $Cargar);
while($Cargados=mysqli_fetch_array($ProcesoCarg)){
 ?>
 <tr>
  <td><?php echo $Cargados{'nombre'} ?></td>
  <td><?php echo $Cargados{'apellidos'} ?></td>
  <td><?php echo $Cargados{'ed'} ?></td>
  <td><?php echo $Cargados{'email'} ?></td>
  <td><?php echo $Cargados{'password'} ?></td>
 </tr>
 <?php
}
 ?>
</table>
<br>
   </body>
   <a class="Botones" href="index.html" type="submit">Volver</a>
 </html>
