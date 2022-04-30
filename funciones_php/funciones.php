<?php


    $conexion = mysqli_connect('localhost', 'root', '', 'nanotecnologia');
    if(!$conexion){
        die('conexion failed'.mysqli_error($conexion));
    }
    if(isset($_POST['save'])){
        $nom = $_POST['name'];
        $correo = $_POST['email'];
        $comen = $_POST['comment'];
        $fecha = $_POST['date'];

        $insertar = "INSERT INTO comentarios (nombre, fecha, comentario, correo) 
            values('{$nom}', '{$fecha}', '{$comen}', '{$correo}')";
        if(mysqli_query($conexion, $insertar)){
            $id = mysqli_insert_id($conexion);
            $guardado ='
            
            
            <li>
            <article>
              <header>
                <figure class="avatar"><img src="img/avatar.png" alt=""></figure>
                <address>
                By <a href="#"> "'. $nom . '"</a>
                </address>
                <time datetime="">"'. $fecha .'"</time>
              </header>
              <div class="comcont">
                <p>"'. $comen .'"</p>
              </div>
            </article> 
          </li>
         
            ';
            echo $guardado; 
        }else {
            echo "Error: ". mysqli_error($conexion);
        }
        exit();
    }

    $consulta = "SELECT * FROM comentarios";
    $resultado = mysqli_query($conexion, $consulta);
    $mostrar = "";
    while ($fila = mysqli_fetch_array($resultado)) {
      $mostrar .= '
      
      <form class="formulario">
      <li>
      <article>
        <header>
          <figure class="avatar"><img src="img/avatar.png" alt=""></figure>
          <address>
          By <a href="#"> "'. $fila['nombre'] . '"</a>
          </address>
          <time datetime="">"'. $fila['fecha'] .'"</time>
        </header>
        <div class="comcont">
          <p>"'. $fila['comentario'] .'"</p>
        </div>
      </article> 
    </li>
    </form>
      ';
    }

?>