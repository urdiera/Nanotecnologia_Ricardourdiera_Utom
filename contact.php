<?php
  include 'funciones_php/funciones.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Las 3 metaetiquetas anteriores * deben * ser lo primero en la cabeza; cualquier otro contenido principal debe venir * después * de estas etiquetas -->
  <title>MICROCHIPS AND NANOTECNOLOGIA</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
 
</head>
<style type="text/css">
			
   
    
    
    
  ul, ol {
    list-style:none;
  }
  
  .nav > li {
    float:left;
  }
  
  .nav li a {
    background-color:#65AAF0;
    color:#fff;
    text-decoration:none;
  
    display:block;
  }
  
  .nav li a:hover {
    background-color:#d10000;
  }
  
  .nav li ul {
    display:none;
    position:absolute;
    min-width:140px;
  }
  
  .nav li:hover > ul {
    display:block;
  }
  
  .nav li ul li {
    position:relative;
  }
  
  .nav li ul li ul {
    right:140px;
    top:0px;
  }
  
</style>
<body>
  <header id="header">
    <nav id="naved" class="navbar navbar-default navbar-static-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <div class="navbar-brand">
            <a href="index.html"><h1>CONTACT</h1></a>
          </div>
        </div>
        <div class="navbar-collapse collapse">
          <div class="menu">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation"><a href="index.html" class="">Inicio</a>
                <li role="presentation"><a href="que_nano.html" class="">¿Qué es Nanotecnología?</a>
                <ul>
                
					
						<li><a href="que_micro.html">¿Qué es microchip?</a></li>
						<li><a href="Uso_nano.html">Usos de Nanotecnología</a></li>
						<li><a href="uso_micro.html">Uso de Microchips</a></li>
           
							</ul> 
              </li>
              
                
              
              <li role="presentation"><a href="about.html">Nanotecnología</a><ul>
                <li><a href="usa_persona.html">Uso en personas</a></li>
                <li><a href="ayuda_nano.html">Como ayuda a personas</a></li>
                
                  </ul> </li>
              
              <li role="presentation"><a href="services.html">Microchips</a>
                <ul>
                  <li><a href="usa_chip.html">Uso en personas</a></li>
                  <li><a href="clasi_micro.html">Como ayuda a personas</a></li>
                  
                    </ul>
              </li>
              <li role="presentation"><a href="gallery.html">Videos</a></li>
              <li role="presentation"><a href="contact.html" class="active">Contacto</a></li>
              <li id="login" role="presentation"><a href="login.php">Login</a></li>
              
              
            </ul>
          </div>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  



        
    
       <!--checkbox-->
       
<!--primero boton-->
<section class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Escribe tu comentario</h2>
        <p>Escribe un comentario de forma respetuosa acerca de la pagina</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
    <form action="#" method="post" id="formulario" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required/>
              <div class="validation" required></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Please enter a valid email" required/>
              <div class="validation" required></div>
            </div>
            
            <div class="form-group">
              <input type="text" class="form-control" name="comentario" id="comentario" data-rule="required" data-msg="Please write something for us" placeholder="Message" required/>
              <div class="validation" required></div>
            </div>  
        
          <div class="text-center"><button type="submit" name="submit" id="btn_comentarios" onclick="validarFormulario(email.value)"   class="btn btn-primary btn-lg" required="required">Submit Message</button></div>

    </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->  
  
  <div id="comentarios">
    <h2>Comentarios</h2>
        <ul id="area_comentarios">
         
         <?php echo $mostrar ?>
        </ul>
        
  
<!--Segundo boton-->
      <!--<div id="bloque">
        <input type="button" value="aparece imagen" id="boton"/>
      </div>
      
      <div id="div-imagen"></div>-->
      <!--
      <div class="estilo1">
        <br>
        <div class = "container estilo1 estilo2" id="unico">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, voluptas, ratione repudiandae ad beatae impedit nemo eveniet facere quia vero nulla aliquam accusantium quam laborum corporis quidem harum sapiente quaerat!
        </div>
       
        <input type="button" value="Poner Estilo" onclick="ponerEstilo()"/>
        <input type="button" value="quitar Estilo" onclick="quitarEstilo()"/>
      </div>
      -->
      <!--/.row-->
    </div>

    
    <!--/.container-->
    </section>
        
  </div>
 
  <!--/#contact-page-->


  <footer>
    <div class="container">
      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <h4>Sobre nosotros</h4>
        <p>Universidad Tecnologica del Oriente de Michoacán. </p>
        <div class="contact-info">
          <ul>
            <li><i class="fa fa-home fa"></i>Comunidad de Santa Rita S/N, Maravatio, Mich.</li>
            <li><i class="fa fa-phone fa"></i> 447 150 8913</li>
            
          </ul>
          <ul class="social-network">
            <li><a href="https://www.facebook.com/search/top?q=live%20utom" id="Face" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/utom_maravatio/?hl=es" id="instagram" class="instagram tool-tip" title="instagram"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCNAg-gkfu6tVcvV7HRCt6Pg" id="youtube" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div  class="text-center">
          <h4 id="divisor">Fotos</h4>
          <ul class="sidebar-gallery">
            <li><a href="#"><img id="id" class="imagenUTOM" src="img/utom1.jpeg" alt="" /></a></li>
            <li><a href="#"><img class="imagenUTOM" src="img/utom2.jpg" alt="" /></a></li>
            <li><a href="#"><img class="imagenUTOM" src="img/utom3.jpg" alt="" /></a></li>
            <li><a href="#"><img class="imagenUTOM" src="img/utom4.jpg" alt="" /></a></li>
            <li><a href="#"><img class="imagenUTOM" src="img/utom5.jpg" alt="" /></a></li>
            <li><a href="#"><img class="imagenUTOM" src="img/utom6.jpg" alt="" /></a></li>
          </ul>
        </div>
      </div>

      <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
        <div class="tu_gmail">
          <h4>Regístrate con tu correo</h4>
          <p>Suscríbete para más contenido y servicios de este tipo, coloca tu correo y da clic en el botón.  </p>
          <div class="btn-gamp">
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter Email">
          </div>
          <div class="btn-gamp">
            <a href="#" type="submit" id="suscribete" class="btn btn-default">Subscribe</a>
          </div>

        </div>
      </div>
      

    </div>
  </footer>

  <script>
            function validarFormulario(correo, telefono){
                let re = /^([\da-z_\.-]+)@([\da-z\.-]+)\.(^[a-z\.]{2,6})$/
                let rt = /^\(?(\d{3})\)?[-]?(\d{3})[-]?(\d{4})$/
                if (!re.test(correo)){
                    document.getElementById('error-email').innerHTML = "Invalido";
                    setTimeout(function(){
                    }, 2000);
                }
                if (!re.test(phone)){
                    document.getElementById('error-phone').innerHTML = "Invalido";
                    setTimeout(function(){
            }, 2000);
            let condiciones = document.getElementById("terminos");
            if (!condiciones.checked) {
                alert("Debes aceptar los terminos y condiciones");
            }
            }
        }
       </script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/asincrona.js"></script>
  <script src="js/app.js"></script>
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/funciones_comentarios.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  
  

  
  
  <script src="contactform/contactform.js"></script>
  

</body>

</html>
