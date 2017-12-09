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
  <title>Dr Juan Riestra</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="./assets/styles/main.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
</head>

<body class="load">
  <div class="fondo"></div>
  <!--  Loading by Enrique -->
  <div id="load" style="display: flex; z-index:99999999999;">
    <div class="imgLoading">
      <img src="assets/images/recursos/loading.gif" alt="">
    </div>
    <h2 class="textLoading">Loading...</h2>
  </div>
  <!--  Header by Enrique -->
  <div class="header-container">
    <header class="main-nav">
      <img src="assets/images/recursos/cerebroBlanco.svg" alt="" class="cerebroImg">
      <div class="images-navBar">
        <img src="assets/images/recursos/slogan.png" alt="" class="logoImg">
      </div>

      <div class="navigationBar">
        <nav role="navigation" class="navigation">
          <ul>
            <a href="index.php">
              <li class="activeView">
                <?php echo inicio; ?>
              </li>
            </a>
            <a href="biografia.php">
              <li>
                <?php echo biografia; ?>
              </li>
            </a>
            <a href="trayectoria.php">
              <li>
                <?php echo trayectoria; ?>
              </li>
            </a>
            <a href="memorias.php">
              <li>
                <?php echo memorias; ?>
              </li>
            </a>
            <a href="contacto.php">
              <li>
                <?php echo contacto; ?>
              </li>
            </a>
          </ul>
          <ul class="idiomas-responsive">
            <a href="index.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="index.php">
              <?php echo en; ?>
            </a>
          </ul>
        </nav>
        <div class="redes">
          <a href="https://www.facebook.com/neurocenter10/" target="_blank">
            <img src="assets/images/recursos/facebook.svg" alt="" style="height: 15px;">
          </a>
          <a href="#">
            <img src="assets/images/recursos/instgram.svg" alt="" style="height: 15px;">
          </a>
          <a href="https://www.doctoralia.com.mx/medico/riestra+castaneda+juan+manuel-12335173" target="_blank">
            <img src="assets/images/recursos/doctoralia.svg" alt="">
          </a>
          <a href="#">
            <img src="assets/images/recursos/intermed.svg" alt="">
          </a>
          <ul class="list-idioma">
            <a href="index.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="index.php">
              <?php echo en; ?>
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

  <!--  Hero  By Enrique-->
  <div class="hero-home hero">
    <div class="hero-aviso">
      <div class="content-hero-aviso">
        <div class="llamanosTxt"> 
          <img src="assets/images/recursos/location.svg" class="locationIcon" alt="">
          <p><?php echo adLlamanos; ?></p>
        </div>
        <img src="assets/images/recursos/x.svg" class="closeIcon" alt="">
      </div>
    </div>
    <center class="heroContent">
      <div class="hero-text">
        <p class="p-hero1">Conoce la opinión</p>
        <p class="p-hero2">de mis <span>pacientes</span></p>
        <a href="#testimonios"><button class="hero-button">entrar</button></a>
      </div>
    </center>
  </div>
  
  <!-- Modal de Masters by Kikin -->
  <div class="modalInicio">
    <img src="assets/images/recursos/flecha.svg" alt="">
    <div class="modal-content">
      <span class="span-button"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
      <div class="modal-inner-up">
        <div class="modal-texts">
          <h2 class="modal-h2 caslon">Experto</h2>
          <h3 class="modal-h3 caslon" >en microcirugia</h3>
          <h3 class="modal-h3 caslon" >de Cerebro y Columna</h3>
          <p>Más de 5,000 Cirujias, practicadas con exito.</p>
        </div>
        <div class="modal-img-logo">
          <img src="assets/images/recursos/Logo.png" alt="">
        </div>
      </div>
      <div class="modal-inner-down">
        <img class="img-modal-1" src="assets/images/contenido/certificado1.png" alt="">
        <img class="img-modal-2" src="assets/images/contenido/certificado2.png" alt="">
        <img class="img-modal-3" src="assets/images/contenido/certificado3.png" alt="">
        <img class="img-modal-4" src="assets/images/contenido/certificado4.png" alt="">
      </div>
    </div>
  </div>

  <div class="modal-button">
    <h2>MASTERS</h2>
    <img src="assets/images/recursos/Copa.svg" alt="">
  </div>
   <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">

      <!-- Content Dr by Kikin -->
      <div class="section-inicio">
        <div class="box-image">
          <img src="assets/images/contenido/1.png" class="img-section" alt="">
          <img src="assets/images/recursos/ilustration1.png" class="img-inicio-center" alt="">
        </div>
        <div class="box-texts">
          <h2 class="bigger-text caslon">BIOGRAFÍA</h2>
          <p class="tiny-text">Médico Cirujano por la Universidad de Guadalajara con Especialidad en Neurocirugía por el Instituto Mexicano del Seguro Social</p>
          <p class="txt-description">El Dr. Juan Manuel Riestra Castañeda es médico cirujano mexicano especialista en neurocirugía. Nació en Culiacán, Sinaloa, el 27 de mayo de 19600 y se trasladó a la ciudad de Guadalajara, Jalisco en1972, con 12 años de edad.</p>
          <p class="txt-description">Ha representado una de las ciencias médicas del siglo XX. En 1991 recibió el reconocimiento al buen desempeño realizado en el departamento de neurología y neurocirugía pediátrica del Hospital de Especialdades Centro Médico de Occidente &lt;&lt;por su contribución sobresaliente y pionera a la neurocirugía moderna>>.</p>
          <a href="biografia.php">
              <button class="btn-section-inicio ripple">ir a sección</button>     
          </a>        
        </div>
      </div>
      <div class="section-inicio-2">         
        <div class="box-texts">
          <h2 class="bigger-text caslon">LABOR</h2>
          <p class="tiny-text">Educación, concursos, labores sociales, entre otras cosas hacen que el Dr. Juan Manuel Riestra tenga una experiencia y trayectoria de lo más completa.</p>
          <p class="txt-description">Es promotor de conferencias y cursos, tanto nacionales como internacionales Ha contribuido en los primeros ciclos de exposiciones monográficas de actualización cientifíca con diferentes temas médicos. Tiene varios estudios al respecto sobre la combinación sobre lesiones focales y difusas en el Traumatismo de Cráneo Encefálico Severo.</p>
          <p class="txt-description">Fue nominado en 1993 en la Worldwide Federation of Neurological Society (WFNS) con el tema de Anatomía de Seno Cavernoso, consiguiendo exponer la Estructura Hexaédrica Paraselar.</p>
          <a href="biografia.php#labor">
            <button class="btn-section-inicio">ir a sección</button>     
          </a>        
         
        </div>
        <div class="box-image">
            <img src="assets/images/contenido/2.png" class="img-section" alt="">
            <img src="assets/images/recursos/ilustration2.png" class="img-inicio-center" alt="">
        </div> 
      </div>
      <div class="section-inicio">
          <div class="box-image">
            <img src="assets/images/contenido/3.png" class="img-section" alt="">
            <img src="assets/images/recursos/ilustration3.png" class="img-inicio-center-3" alt="">
          </div>
          <div class="box-texts">
            <h2 class="bigger-text caslon">MEMORIAS</h2>
            <p class="tiny-text">El Doctor Juan Manuel Riestra Castañeda tuvo la oportunidad de interactuar con los mejores representantes de la Neurocirugía incluyendo al Neurocirujano del siglo: el Doctor M.G. Yasargil.</p>
            <div class="separator"></div>
            <p class="txt-description">La realización de la Especialidad en Neurocirugía y de otras ciencias requiere de la adquisición de experiencia, convivencia y la estancia hospitalaria con los principales exponentes de medicina en el mundo.</p>
            <div class="separator"></div>
            <a href="memorias.php">
                <button class="btn-section-inicio">ir a sección</button>     
            </a>        
          </div>
      </div>
      
    </div>
  </main>
  <!-- Slider by kikin -->
  <div class="inicio-slider" id="testimonios">
    <div class="slider-container">
        <div class="itemsSlider">
            <div class="sliderContent slides fade">
                <h2 class="p-hero1 caslon">TESTIMONIOS</h2>
                <h3 class="p-hero2">Trauma craneoencefálico</h3>
                <p class="p-hero2">Trató a mi hermana, ella tuvo un accidente en cuatrimoto y tuvo trauma craneoencefálico. Es un excelente neurocirujano, pese a lo grave que estuvo el accidente. Tiempo después necesitó una cirugía para quitar un higroma que se le formó, quedó sin secuelas. Le agradezco mucho doctor, Dios lo acompañe.</p>
                <div class="score">
                  <div class="stars">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                  </div>
                  <p class="persona">Real San José</p>
                </div>
            </div>
            <div class="sliderContent slides fade">
                <h2 class="p-hero1 caslon">TESTIMONIOS</h2>
                <h3 class="p-hero2">Trauma craneoencefálico</h3>
                <p class="p-hero2">El hospital del carmen tiene muy buenas instalaciones y médicos. El Dr. Juan Riestra antendió a mi hijo hace años de trauma craneoencefálico. Tuvo un accidente grave, requirió de varias cirugías y de rehabilitación. hoy se encuentra perfecto, pese a que varios médicos no creeyeron que se salvaría.</p>
                <div class="score">
                  <div class="stars">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                  </div>
                  <p class="persona">Hospital del Carmen</p>
                </div>
            </div>
            <div class="sliderContent slides fade">
                <h2 class="p-hero1 caslon">TESTIMONIOS</h2>
                <h3 class="p-hero2">Epilepsia</h3>
                <p class="p-hero2">Vio a mi hijo de epilepsia, mi hijo tenia mas de 20 crisis por día. lo trataron muchos neurólogos y nadie lo controlo. Yo quería que fuera candidato a cirugía, el Dr analizó la posibilidad de operarlo, pero resulto que no era viable en su caso. le dio un tratamiento nuevo y mejoro muchisimo.</p>
                <div class="score">
                  <div class="stars">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                    <img src="assets/images/recursos/Star.svg" alt="">
                  </div>
                  <p class="persona">C.M. Puerta de Hierro</p>
                </div>
            </div>
            <div class="sliderContent slides fade">
              <h2 class="p-hero1 caslon">TESTIMONIOS</h2>
              <h3 class="p-hero2">Schwannoma Cerebral.</h3>
              <p class="p-hero2">En estos tiempos es difícil encontrar profesionistas honrados y que por encima de eso sean buenos médicos. El Dr. operó a mi esposo de un Schwannoma cerebral y quedó de maravilla. No se le nota ninguna marca en su cabeza y recuperó su audición. Los dolores de cabeza tambien desaparecieron. Lo mejor</p>
              <div class="score">
                <div class="stars">
                  <img src="assets/images/recursos/Star.svg" alt="">
                  <img src="assets/images/recursos/Star.svg" alt="">
                  <img src="assets/images/recursos/Star.svg" alt="">
                  <img src="assets/images/recursos/Star.svg" alt="">
                  <img src="assets/images/recursos/Star.svg" alt="">
                </div>
                <p class="persona">Consultorio /Pablo Neruda</p>
              </div>
            </div>
            <span id="btn1" class="itemsDirections" onclick="plusIndex(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
            <span id="btn2" class="itemsDirections" onclick="plusIndex(+1)"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
        </div>
    </div>
  </div>
  <footer class="footer-dr">
    <div class="footer-content">
      <div class="footer-inner">
          <div class="footer-ubicacion">
              <div class="footer-map">
                <h2 class="caslon footer-h2" ><?php echo ubicacionTitle; ?></h2>
                <div id="map">
                  
                </div>
              </div>
              <div class="footer-telefonos">
                  <div class="numeros-telefonicos">
                    <div class="phones">
                      <img src="assets/images/recursos/phone.svg" class="imgPhones" alt="">
                      <p><?php echo tel; ?> <a href="tel:3338131360"> (33) 3813 1360</a></p>
                    </div>
                    <div class="phones">
                      <img src="assets/images/recursos/emergency.svg" class="imgPhones" alt="">
                      <p><a href="tel:013331000260"><span class="emergency-text"><?php echo emergencias; ?></span> (01) 33 3100 0260</a></p>
                    </div>
                    <div class="phones">
                      <img src="assets/images/recursos/iconoTel3.svg" class="imgPhones" alt="">
                      <p><a href="tel:018008770300"> 01 800 877 0300.</a></p>
                    </div>
                  </div>
                  <div class="footer-address">
                    <p>Pablo Neruda #3265 /2° <?php echo piso; ?></p>
                    <p>Col. Providencia. C.P. 44630. Guadalajara, Jalisco</p>
                  </div>
              </div>
            </div>
            <div class="footer-contacto">
              <div class="footer-logo">
                <img src="assets/images/recursos/cerebroBlanco.svg" alt="" class="cerebroImg">
                 <img src="assets/images/recursos/slogan.png" alt="" class="logoImg">
                   
              </div>
              <div class="footer-redes">
                <a href="https://www.facebook.com/neurocenter10/" target="_blank" class="imgFooterRedes">
                  <img src="assets/images/recursos/facebook.svg" alt="">
                </a>
                <a href="#" class="imgFooterRedes">
                  <img src="assets/images/recursos/instgram.svg" alt="">
                </a>
                <a href="https://www.doctoralia.com.mx/medico/riestra+castaneda+juan+manuel-12335173" target="_blank" class="imgFooterRedes">
                  <img src="assets/images/recursos/doctoralia.svg" alt="">
                </a>
                <a href="#" class="imgFooterRedes">
                  <img src="assets/images/recursos/intermed.svg" alt="">
                </a>
              </div>
            </div>
      </div>
      <div class="footer-copyright">
        <p>Copyright © Dr. Juan Manuel Riestra Castañeda 2017. <?php echo copy; ?></p>
        <p><a href="#"><?php echo terminos; ?></a><a href="#"> <?php echo aviso; ?></a></p>
      </div>

    </div>
  </footer>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <!-- cerrar ventana del telefono by kikin  -->
  <script src="assets/scripts/closeAd.js"></script>
  <!-- Toggle hamburger icon in responsive -->
  <script>
    $(document).ready(function(){
    $('#nav-icon').click(function(){
      $(this).toggleClass('open');
      $('.main-nav').toggleClass('responsive');
    });
    });
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();
    $(window).scroll(function(event){
        didScroll = true;
    });
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.header-container').addClass('nav-collapse');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.header-container').removeClass('nav-collapse');
            }
        }
        lastScrollTop = st;
    }
</script>
 <!-- Map by kikin -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6b-dYq7q8qdCN98o9hzOIeUtUWDvkrYg&amp;callback=initMap" async="async" defer="defer"></script>
<script>
  function initMap(){
  var map = new google.maps.Map(document.getElementById('map'),{
  center: {
    lat: 20.6961044,
    lng: -103.3930732
  },
  scrollwheel: true,
  zoom: 15
  });
  var marker = new google.maps.Marker({
  position: {
    lat: 20.696415,
    lng: -103.3924850
  },
  map: map,
  });
  }
</script>
<!-- Slider by kikin -->
<script>

  var slideIndex = 1;

  showImage(slideIndex);

  function plusIndex(n) {
    showImage(slideIndex += n);
  }

  function showImage(n) {
    var slide = document.getElementsByClassName("slides");

    if (n > slide.length){
      slideIndex = 1
    };
    if (n < 1){
      slideIndex = slide.length
    };
    for (var i = 0; i < slide.length; i++) {
      slide[i].style.display = "none";
      
    };
    slide[slideIndex-1].style.display = "flex";
  }
</script>
<!--  Modal by kikin -->
<Script src="assets/scripts/modal.js"></Script>
<!--  Loading by kikin -->
<script type="text/javascript">
     window.onload = function(){
      setTimeout(function(){
          $("#load").css("display","none");
          $(".fondo").css("display","block");
          $(".header-container").css("display","block");
          $(".load").css("margin-top","112px");
      }, 1500);
    };
</script>
</body>
</html>
