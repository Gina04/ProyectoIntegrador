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
    <li><a href="#"><span class="glyphicon glyphicon-user"> Perfil </span></a></li>
    <li><a href="salir.php"><span class="glyphicon glyphicon-log-out"> Salir </span></a></li>
  </ul>

</div>

 
     </div>

    
     </header>

      
    
   
     <section class="container" id="contenido_index">

   
     
   
   
         <nav id="botonera">
         <ul class="nav nav-pills nav-justified" id="botonera_principal">
            <li><a href="segundo_documento.php"><span class="icon-home3"></span> Página Principal</a></li>
            <li><a href="presentacion.ph">Presentación</a></li>
            <li><a href="novedades.php">Novedades<span class="icon-alert"></span></a></li>
             <li><a href="foro.php">Foro <span class="icon-bubbles3"></span></a></li>
          </ul>
          </nav>


          
          <div class="row">

              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" id="avisos_publicitarios">
              <P> Avisos publicitarios..</P>
                 
             </div>

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 "> 
               <ul>
                  <li><a href="mensaje_foro.php"><input type="submit" value="Añadir un nuevo tema de discución"/></a></li>
                </ul>
                     <?php 
     //conectar a la base de datos
     include("conexion.php");


     //recuperar datos de la base de datos

     $consultar_mensaje=mysqli_query($datos_base, "SELECT * FROM mensajes_tabla");
     


     ?>
               <table class="table table-striped">
                  <thead>
                    <tr>
                     <th>Tema:</th>
                     <th>Comenzado por:</th>
                     
                    </tr>
                  </thead>

                   <tbody>
                   <?php while($mostrar_mensajes=mysqli_fetch_array($consultar_mensaje)) { ?>
                      <tr class="active">
                        <td><a href="#"><?php echo $mostrar_mensajes['Asunto'] ?></a></td>
                        <td><?php echo $mostrar_mensajes['usuario']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
               </table>


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