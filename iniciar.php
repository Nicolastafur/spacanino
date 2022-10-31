<?php


include_once 'conexion/conexion.php';

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/login.css">
  <title>Document</title>

  <script>
    function blockSpecialChar(e) {
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57));
    }
  </script>
</head>

<body>

  <div class="center">
    <h1>Iniciar sesion</h1>
    <form action="inicio.php" method="get">
      <div class="inputbox">
        <input type="text" name="username" id="username" name="user" required="required">
        <span>Usuario</span>
      </div>
      <div class="inputbox">
        <input type="password" name="clave" id="clave" required="required">
        <span>Password</span>
      </div>
      <div class="inputbox">
        <input name="envia" id="ingresar" type="submit">
      </div>
    </form>
  </div>









  <script>
    var btn = document.getElementById('ingresar');
    var clave = document.getElementById('clave');
    var usuario = document.getElementById('usuario');




    btn.addEventListener('click', function(evt) {

      if (clave.value === ' ') {

        alert('el campo contraseña es obligatorio')
        evt.preventDefault();
        return false;

      } else if (usuario.value === ' ') {

        alert('el campo de usuario es obligatorio')
        evt.preventDefault();
        return false;

      } else if (usuario.value.length > 15) {

        alert('El nombre del usuario es demasiado largo')
        evt.preventDefault();
        return false;

      }


    });
  </script>

  <a href="<script>"></a>

</body>

</html>