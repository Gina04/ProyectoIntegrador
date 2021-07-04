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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
      
    
   
     <section id="contenido_index">

   
     
   
   
         <nav id="botonera">
         <ul class="nav nav-pills nav-justified" id="botonera_principal">
            <li><a href="segundo_documento.php"><span class="icon-home3"></span> Página Principal</a></li>
            <li><a href="presentacion.php">Presentación</a></li>
            <li><a href="#">Novedades<span class="icon-alert"></span></a></li>
             <li><a href="foro.php">Foro <span class="icon-bubbles3"></span></a></li>
          </ul>
          </nav>
          
          <div class="row">
          <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
              <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12" id="avisos_publicitarios">
                   <div class="fb-page" data-href="https://www.facebook.com/cfp11codoacodo/" data-tabs="timeline" data-width="200" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cfp11codoacodo/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cfp11codoacodo/">Cfp 11 - Codo a Codo</a></blockquote></div>
               </div>

                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

                <h2> Calendario 2017</h2>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li style="text-align:center">
      julio<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
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