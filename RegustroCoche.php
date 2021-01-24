<!DOCTYPE html>
<html lang="|" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro Vehiculo</title>
    <link rel="stylesheet" href="EstiloCuestionarios.css">
  </head>
  <div>
      <h1>Registrar Auto</h1>
  <body>
    <form class="Autos" action="Procesarauto.php" method="post">
      <label for="">Matricula</label> <br><input type="text" name="matricula" value=""> <br>
      <label for="">Modelo</label> <br><input type="text" name="modelo" value=""> <br>
      <label for="">Color</label> <br><input type="text" name="color" value=""> <br>
      <label for="">Marca</label> <br><input type="text" name="marca" value=""> <br>
      <label for="">Servicio</label> <br><input type="text" name="servicio" value=""> <br> <br>
      <button class="Procesar" type="submit" name="procesar">Procesar</button>
    </form>
  </body>
</div>
</html>
