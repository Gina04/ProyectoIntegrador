<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
  <title>Aula virtual</title>
  <link href="estilocss.css" rel="stylesheet">
  <link href="icomoon.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"  href="style4.css">
  <link rel="stylesheet" href="style6.css">
  <link rel="stylesheet"  href="style3.css">
  <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   
</head>

<body>

    <header id="cabecera_index">
     <div id="logo"><img alt="codo a codo" src="imagen_av/logo1.png">
     </div>

     <div id="acceder">
      <div class="dropdown">
  Usted se ha identificado como: <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    <?php echo $_SESSION['registro']; ?>
    <span class="caret"></span>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dLabel">
    <li><a href="#"><span class="glyphicon glyphicon-user"> Perfil</span></a></li>
    <li><a href="salir.php"><span class="glyphicon glyphicon-log-out"> Salir</span></a></li>
  </ul>

</div>

 
     </div>

    
     </header>
      
    
   
     <section class="container" id="contenido_index">

   
     
   
   
         <nav id="botonera">
         <ul class="nav nav-pills nav-justified" id="botonera_principal">
            <li><a href="segundo_documento.php"><span class="icon-home3"></span> Página Principal</a></li>
            <li><a href="presentacion.php">Presentación</a></li>
            <li><a href="novedades.php">Novedades<span class="icon-alert"></span></a></li>
             <li><a href="foro.php">Foro <span class="icon-bubbles3"></span></a></li>
          </ul>
          </nav>
          
          <div class="row"> 

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 id= avisos_publicitarios">
              <P> Avisos publicitarios..</P>
              <div class="carousel slide" id="galeria">
               <ol class="carousel-indicators">
    <li data-target="#galeria" data-slide-to="0" class="active"></li>
    <li data-target="#galeria" data-slide-to="1"></li>
  </ol>
              <div class="carousel-inner">

                <div class="item active">
                  <img src="servicios/Potenciate.jpg">
                </div>
                <div class="item">
                <img src="servicios/hackaton.jpg">
                  
                </div>
              </div>
                
              </div>
             <!-- <a href="#galeria" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
              <a href="#galeria" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                -->


              </div>



             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 " id="texto_foro">
             
               <h1>Foro de Consultas Generales</h1>
 

                 <p>En este espacio podrán consultar sus dudas al Dpto. de Ministerio de Educación.</p>

                 <p>El foro está dividido en temas. Les sugerimos elegir aquel que sea pertinente para su consulta: exámenes, tutorías, material impreso, certificados, gestión de trámites administrativos y problemas de acceso al sistema. Cada tema tiene información en el encabezado que puede servirles.</p>

                 <p>Las respuestas del  Dpto. de Ministerio de Educación aparecerán en color naranja y se actualizan aproximadamente cada 48hs.</p>

                 <p>Les sugerimos que  lean las consultas de sus compañeros y las respuestas generales que vamos ofreciendo.</p>

                 <p>Este espacio permanecerá abierto durante todo el cuatrimestre.</p>
                <ul>
                  <li><a href="mensaje_foro.php"><input type="submit" value="Añadir un nuevo tema de discución"/></a></li><br/>

                  <li><a href="foro_social.php"><input type="submit" value="Foro abierto a todos los temas"></a></li>
                </ul>

            
          </div>
  
    </div>
   </section>

  
   <footer id="pie_index">
     <div id="imagen2">
     </div>


     <div id="datos_direccion">
         <p>Direccion General de Gestion Digital</p>
         <p>Ministerio de Educación</p>
     </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

  
  

  
</html>