<?php session_start(); ?>
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


    <nav id="acceder">
      <p class="identificacion">Usted no se ha identificado.</p>
        
    </nav>  
       
    
    
  </header>


  <section id="contenido_index">
    <div id="lateral_der">
      <nav id="botonera2">
      <div id="formulario">
      <form method="POST" action="ingresar.php">

         <?php if(@$_GET['i']) { ?>
        <h4> Los datos ingresados son incorrectos.</4>
        <?php }?>
        
         <ul>
           <li> Usuario:<br/><input type="texto" name="usuario" required>*</li>
           <li>Clave:<br/><input type="password" name="clave" required>*</li>
           <li> <input type="checkbox"/> Recordar nombre de usuario</li>
           <li><input type="submit" value="Ingrese"/></li>
          
          </ul>
        

         <p><a href="recuperar_clave.php">¿A extraviado la contraseña?</a></p>
      </form>
        
      </div>
      </nav>
    </div>


    <div id="lateral_izq">
      <div id="imagen">
      <div id="imagen_texto">
      <h1>Aula virtual codo a codo</h1>
      <h3>Plataforma de contenidos complementarios de las clases presenciales</h3>
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