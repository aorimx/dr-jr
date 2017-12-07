<?php
session_start ();
if(isset($_GET["idioma"])) {
    if (!$_SESSION["idiomas"]){
      $_SESSION["idiomas"] = "es";
  }
  elseif ($_GET["idioma"]){
    $_SESSION["idiomas"]= $_GET["idioma"];
  }

}
else{
  $_GET["idioma"] = "es";
  $_SESSION["idiomas"]= $_GET["idioma"];
}


include ("lang_".$_SESSION["idiomas"].".php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Dr Juan | [#TODO]</title>
  <link rel="icon" type="image/png" href="https://dummyimage.com/64x64/000/fff" sizes="64x64">
  <link rel="icon" type="image/png" href="https://dummyimage.com/180x180/000/fff" sizes="180x180">
  <!-- [#TODO] Dont forget to update the FAVICON IMAGES in the next route -->
  <!-- <link rel="icon" type="image/png" href="assets/images/favicon-180x180.png" sizes="128x128"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>

<body>
  <div class="fondo"></div>
  <!--  Header by Enrique -->
  <div class="header-container">
    <header class="main-nav">
      <img src="assets/images/recursos/cerebroBlanco.svg" alt="" class="cerebroImg">
      <div class="images-navBar">
        <img src="assets/images/recursos/nombreDrBlanco.png" alt="" class="logoImg">
        <img src="assets/images/recursos/Slogan.png"class="logoSlogan" alt="">
      </div>
      
      <div class="navigationBar">
        <nav role="navigation" class="navigation">
          <ul>
            <a href="index.html">
              <li>
                <?php echo inicio; ?>
              </li>
            </a>
            <a href="biografia.html">
              <li>
                BIOGRAFÍA
              </li>
            </a>
            <a href="trayectoria.html">
              <li>
                TRAYECTORIA
              </li>
            </a>
            <a href="memorias.html">
              <li>
                MEMORIAS
              </li>
            </a>
            <a href="contacto.php">
              <li class="activeView">
               CONTACTO
              </li>
            </a>
           
          </ul>
          <ul class="idiomas-responsive">
            <a href="prueba.php?idioma=es">
              <li>ES</li>
            </a>
            <a href="prueba.php?idioma=en">
              <li>EN</li>
            </a>
            
          </ul>
        </nav>
        <div class="redes">
          <a href="https://www.facebook.com/neurocenter10/" target="_blank">
            <img src="assets/images/recursos/facebook.svg" alt="">
          </a>
          <a href="#" target="_blank">
            <img src="assets/images/recursos/instgram.svg" alt="">
          </a>
          <a href="https://www.doctoralia.com.mx/medico/riestra+castaneda+juan+manuel-12335173" target="_blank">
            <img src="assets/images/recursos/doctoralia.svg" alt="">
          </a>
          <a href="#" target="_blank">
            <img src="assets/images/recursos/intermed.svg" alt="">
          </a>
          <ul class="list-idioma">
            <a href="prueba.php?idioma=es">
              <li>ES</li>
            </a>
            <a href="prueba.php?idioma=en">
              <li>EN</li>
            </a>
            
          </ul>
        </div>
      </div>
     
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
  </div>

</body>
</html>