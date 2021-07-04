
<!DOCTYPE html>
<html>
<head>
  <title>Aula virtual</title>
  <link href="estilocss.css" rel="stylesheet">
  <meta charset="utf-8">
</head>

<body>
  
    <header id="cabecera_index">
     <div id="logo"><img alt="codo a codo" src="imagen_av/logo1.png">
     </div>

     <div id="acceder">
      <div class="dropdown">
  Usted no se ha identificado <a id="dLabel" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
    
   <a href="salir.php">Salir</a> <span class="caret"></span>
  </a>

  

</div>

 

  



  
    
    
  </header>


  <section class="container" id="contenido_index">

  <div class="row">

  <div class="col-lg-12 ">
  <div id="texto_presentacion">
  <p>Para reajustar su clave, envíe su nombre de usuario o su dirección de correo electrónico. Si podemos encontrarlo en la base de datos, le enviaremos un email con instrucciones para poder acceder de nuevo.</p>

  <h2>Buscar por nombre de usuario</h2>

 
   
<form method="post" action="Buscar_clave.php">
<ul>
  <li>Usuario:<input type="text" name="usuario"> </li>
  <li><input type="submit" value="Buscar"/></li>
</ul>
</form>
<?php if(@$_GET['h']){ ?>
<p>El usuario no esta registrado en nuestra base de datos</p>
<?php } ?>  



<h2>Buscar por dirección mail</h2>
<form method="POST" action="Buscar_clave_correo.php">
  <ul>
  <li>Direccion de correo:<input type="mail" name="correo"></li>
  <li><input type="submit" value="Buscar"></li>
</ul>
</form>
    
  </div>
    

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
</body>
</html>