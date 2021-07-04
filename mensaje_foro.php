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
   <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

   
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
      
    
   
     <section  class="container" id="contenido_index">

   
     
   
   
         <nav id="botonera">
         <ul class="nav nav-pills nav-justified" id="botonera_principal">
            <li><a href="segundo_documento.php"><span class="icon-home3"></span> Página Principal</a></li>
            <li><a href="presentacion.php">Presentación</a></li>
            <li><a href="novedades.php">Novedades<span class="icon-alert"></span></a></li>
             <li><a href="foro.php">Foro <span class="icon-bubbles3"></span></a></li>
          </ul>
          </nav>
          
          <div class="row">

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="avisos_publicitarios">
              <P> Avisos publicitarios..</P>
                


              </div>



             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 " id="texto_foro">
             
               <h1>Foro Social</h1>

               
               <div class="container">
                  <form class="form-horizontal" method="POST" action="mensaje_inserta.php">
                     <div class="form-group" >
                       <div class="col-sm-6">
                       <input class="form-control" id="disabledInput"  type="text" value="Foro abierto  a todos los temas" disabled>
                     </div>
                     </div>
                     <div class="form-group">
                       <label class="col-sm-1 control-label">Asunto:*</label>
                       <div class="col-sm-6">
                        <input class="form-control" id="focusedInput" name="asunto" type="text"  required="obligatorio">
                        </div>
                        
                     </div>
                     <div class="form-group">
                          
                             <label class="col-sm-1" for="Mensaje">Mensaje:</label> 
                             <div class="col-sm-6">


                             <textarea class="form-control" rows="5"  id="comment" name="mensaje"></textarea>
                         </div>
                       
                     </div>

                     <div class="col-sm-6" border-radius:50px>

                     <div class="form-group" >
    
                      <!-- <input type="file" id="exampleInputFile"> -->
   
                     </div>
                     <input type="hidden" name="usuario" value="<?php echo $_SESSION['registro']; ?>">
                     <button type="submit" class="btn btn-default">Enviar al foro</button>
                     </div>

                     </div>

                    </form>
                    
                </div> 

             
                     
                 
               
                 
               </div>
                 
               </div>
                 
               </form>
                 
               
 

                 

            
          
  
    
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