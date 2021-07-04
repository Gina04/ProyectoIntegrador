    <?php session_start();?>
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
            <li><a href="#"><span class="icon-home3"></span> Página Principal</a></li>
            <li><a href="presentacion.php">Presentación</a></li>
            <li><a href="novedades.php">Novedades<span class="icon-alert"></span></a></li>
             <li><a href="foro.php">Foro <span class="icon-bubbles3"></span></a></li>
          </ul>
          </nav>

         
          <div class="col-lg-6" id="logos_programacion_izq">
                 <a href="#">
                 <div class="logos tecnicas_programacion">
                 <span class="icon-tree"></span>
              
                 </div>
                 </a>
                 <div class="texto_logo">
                   <h4><a href="presentacion_documento.php">Técnicas de programación</a></h4>

                 </div>
                 <a href="#">
                <div class="logos programacion_objetos">
                 <span class="icon-codepen"></span>
              
                 </div>
                 </a>
                 <div class="texto_logo">
                   <h4><a href="#">Programación orientada a objetos</a></h4>
                   <h6>(Proximamente)</h6>
                 </div>

          </div>
          <a href="#">
          <div id="logos_programacion_der" class="col-lg-6">
             <div class="logos base_datos">
                 <span class="icon-database"></span>
              
                 </div>
                 </a>
                 <div class="texto_logo">
                   <h4><a href="#">Bases de datos</a></h4>
                   <h6>(Proximamente)</h6>
                 </div>
                 <a href="#">
                <div class="logos desarrollo_software">
                 <span class="icon-display"></span>
              
                 </div>
                 </a>
                 <div class="texto_logo">
                   <h4><a href="#">Desarrollo de Software</a></h4>
                   <h6>(Proximamente)</h6>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

  
  

  
</html>