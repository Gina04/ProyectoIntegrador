
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
            <li><a href="segundo_documento.php"><span class="icon-home3"></span> Página Principal</a></li>
            <li><a href="#">Presentación</a></li>
            <li><a href="novedades.php">Novedades<span class="icon-alert"></span></a></li>
             <li><a href="foro.php">Foro <span class="icon-bubbles3"></span></a></li>
          </ul>
          </nav>
          
          <div class="row">

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="avisos_publicitarios">
              <p>Avisos publicitarios..</p>
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
            
              
              </div>
                
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 " id="texto_foro">
             
               <h1>Where does it come from?</h1>
 

                 <p>
                 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                 <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                

            
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