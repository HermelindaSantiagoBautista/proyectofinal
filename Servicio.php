<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mantenimiento</title>
    <link rel="stylesheet" href="EstiloCuestionarios.css">
  </head>
      <body>
  <div>
    <h1>Observaciones de Mantenimiento</h1>
      <form class="" action="ProcesoMantenimiento.php" method="post">
        <label for="">Estado del aceite</label> <br><input type="text" name="aceite" value=""> <br>
        <label for="">Porcentaje de gasolina</label> <br><input type="text" name="gasolina" value=""> <br>
         <label for="">Computadora del auto</label> <br><input type="text" name="compu" value=""> <br>
        <label for="">Estado de los frenos</label> <br><input type="text" name="frenos" value=""> <br>
        <label for="">Neumaticos</label> <br><input type="text" name="neu" value=""> <br>

        <button class="" type="submit" name="procesar">Registrar</button>
      </form>
  </body>
</html>
