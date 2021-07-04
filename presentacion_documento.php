<?php session_start(); ?>

<html>
<head>
  <title>Aula virtual</title>
     <link href="estilocss.css" rel="stylesheet">
     <link href="icomoon.css" rel="stylesheet">
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="style2.css">
     
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

   
 </head>

<body data-spy="scroll" data-target="#presentacion">
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
    <li><a href="#">Perfil</a></li>
    <li><a href="salir.php">Salir</a></li>
  </ul>

</div>

 
     </div>
   </header>
  
   <section class="row" id="contenido_documento">

   
   
     <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 "> 
          <nav class="scrollspy affix" id="presentacion">
            <div class="btn-group-vertical" >
               <button type="button" class="btn btn-default"><a href="segundo_documento.php">Página Principal</a></button>
               <button type="button" class="btn btn-default"><a href="presentacion_documento.php?seccion=tecnicas_de_programacion#presentacion_t">Técnicas de programación</a></button>
               <button type="button" class="btn btn-default"><a href="presentacion_documento.php?seccion=elementos_informaticos">Elementos infomáticos</a></button>
               <button type="button" class="btn btn-default"><a href="presentacion_documento.php?seccion=diseno_de_algoritmos">Diseño de algoritmos</a></button>
               <button type="button" class="btn btn-default"><a href="presentacion_documento.php?seccion=desarrollo_de_programas">Desarrollo de programas</a></button>
               <button type="button" class="btn btn-default"><a href="presentacion_documento.php?seccion=ejercicios">Ejercicios</a></button>
               <button type="button" class="btn btn-default"><a href="presentacion_documento.php?seccion=unidades" data toggle="dropdown" data-toggle="dropdown"> Unidades</a><span class="caret"></span>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 1</a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 2</a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 3 </a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 4</a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 5</a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 6</a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 7</a></li>
                 <li><a href="#"><span class="icon-folders"> </span>Unidad 8</a></li>
                 <li class="divider"></li>
                 <li><a href="#"> <span class="icon-folders"></span>Fin</a></li>

               </ul>
               </button>
                
               
               </div>


            </nav>   
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
           <div id="texto_presentacion">
              <div id="presentacion_t">
                 <?php
           @$queseccion=$_GET['seccion'];
           switch ($queseccion) {
             case 'tecnicas_de_programacion':
             case'elementos_informaticos':
             case'diseno_de_algoritmos':
             case 'desarrollo_de_programas':
             case'ejercicios':
             case'unidades':
              include($queseccion.'.php');
               break;

               default:
               include('tecnicas_de_programacion.php');
               break;
           }





           ?>
  
   
              </div>

           </div>

           
         
         
           </div>
        

           

           


    
     
  
    
    







  

   



     


    
        
              
               
    
   </section>
      
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
   
</body>
</html>