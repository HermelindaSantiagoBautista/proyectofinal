 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Registro Cliente</title>
     <link rel="stylesheet" href="EstiloCuestionarios.css">
   </head>
   <div>
   <h1>Registro</h1>
     <body>
       <form class="formulario" action="ProcesoPersona.php" method="post">
         <label for="">Nombre</label> <br><input type="text" name="nombre" value=""> <br>
         <label for="">Apellidos</label> <br><input type="text" name="apellidos" value=""> <br>
          <label for="">Edad</label> <br><input type="text" name="edad" value=""> <br>
         <label for="">Correo</label> <br><input type="email" name="email" value=""> <br>
         <label for="">Contraseña</label> <br><input type="password" name="password" value=""> <br>
         <button class="" type="submit" name="Registar">Registrar</button>
       </form>
     </div>
   </body>
 </html>
