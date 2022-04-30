<?php

include_once('funciones_php/token_unico.php')

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    

    <!-- Bootstrap core CSS -->
 <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="">
  <form class="formulario">
    <img class="mb-4" src="img/nanotecnologia.png" alt="" width="72" height="57">
    <p  class="cuenta-gratis">INICIO DE SESIÓN</p>

    <div class="form-floating">
      
      
      <input type="email" placeholder="Email" id="floatingInput" class="">
    </div>
    <div class="form-floating">
      
      <input type="password" placeholder="Contraseña" class="" id="floatingPassword" >
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" id="recordar"> Remember me
      </label>
    </div>
   
    <input type="button" value="Acceder" id="login">


      <br>
    <div class="form-floating">
      <a href="recuperar.php">¿Olvidaste tu contraseña?</a>
    </div>


    <p class="mt-5 mb-3 text-muted" id="respuesta"> </p>
  </form>
</main>


   


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/admin_login.js"></script>

  </body>
</html>
