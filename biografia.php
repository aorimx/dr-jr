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
            <a href="index.php">
              <li>
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
            <a href="biografia.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="biografia.php?idioma=en">
              <?php echo en; ?>
            </a>
          </ul>
        </nav>
        <div class="redes">
          <a href="https://www.facebook.com/neurocenter10/" target="_blank">
            <img src="assets/images/recursos/facebook.svg" alt="">
          </a>
          <a href="#">
            <img src="assets/images/recursos/instgram.svg" alt="">
          </a>
          <a href="https://www.doctoralia.com.mx/medico/riestra+castaneda+juan+manuel-12335173" target="_blank">
            <img src="assets/images/recursos/doctoralia.svg" alt="">
          </a>
          <a href="#">
            <img src="assets/images/recursos/intermed.svg" alt="">
          </a>
          <ul class="list-idioma">
            <a href="biografia.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="biografia.php?idioma=en">
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
  <div class="hero-biografia hero">
    <div class="hero-aviso">
      <div class="content-hero-aviso">
        <div class="llamanosTxt"> 
          <img src="assets/images/recursos/location.svg" class="locationIcon" alt="">
          <p><?php echo adLlamanos; ?></p>
        </div>
        <img src="assets/images/recursos/x.svg" class="closeIcon" alt="">
      </div>
    </div>
    <div class="heroContent">
      <div class="hero-text">
        <p class="p-hero1">BIOGRAFÍA</p>
      </div>
    </div>
  </div>
  
   <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap">
      <!-- Content Dr by Kikin -->
      <section class="biografia-historia">
        <div class="box-perfil">
          <h2 class="bigger-text caslon" >HISTORIA</h2>
          <p class="tiny-text">Médico Cirujano por la Universidad de Guadalajara con Especialidad en Neurocirujía por el instituto Mexicano del Seguro Social.</p>
        </div>
        <div class="box-texts">
          <p class="txt-description-up">El Dr. Juan Manuel Riestra Castañeda es médico cirujano mexicano especialista en neurocirugía. Nació en Culiacán, Sinaloa, el 27 de mayo de 19600 y se trasladó a la ciudad de Guadalajara, Jalisco en1972, con 12 años de edad.</p>
          <p class="txt-description-down">Ha representado una de las ciencias médicas del siglo XX. En 1991 recibió el reconocimiento al buen desempeño realizado en el departamento de neurología y neurocirugía pediátrica del Hospital de Especialdades Centro Médico de Occidente &lt;&lt;por su contribución sobresaliente y pionera a la neuricirugía moderna>>.</p>      
        </div>
      </section>
    </div>

    <section class="labor" id="labor">
      <div class="labor-content">
        <h2 class="caslon bigger-text">LABOR</h2>
        <div class="labor-inner">
          <div class="labor-column">
            <div class="labor-item">
              <p class="labor-item-text">Creó el Servicio Social en el Centro de Educación Especial y Rehabilitación Infantil (CEERI) que, hasta hoy, continúa vigente.</p>
              <img class="img-item" src="assets/images/recursos/biografia1.svg" alt="">
            </div>
            <div class="labor-item">
              <p class="labor-item-text">Contribuyó en el concurso, realizado por la American Association of Neurological Surgeons, Premio de Neurocirujanos Jóvenes a nivel mundial, con el tema de Anatomía Microquirúrgica del Seno Cavernoso, postulando así, por primera vez, la Estructura Hexaédrica de dicha configuración, la cual fue revisada por la revista de Neurocirugía.</p>
              <img class="img-item2" src="assets/images/recursos/biografia3.svg" alt="">
            </div>
            <div class="labor-item">
              <p class="labor-item-text">Complementando sus estudios de Educación Media, se inclinó por el área de medicina en la Universidad de Guadalajara, de donde egresó en 1986. Así mismo, acreditó los exámenes correspondientes a Ciencias Clínicas para ingresar a programas de residencia médica en los Estados Unidos de América y Canadá, a través de la Educational Comition for Foreign Medical Graduates.</p>
              <img class="img-item3" src="assets/images/recursos/biografia5.svg" alt="">
            </div>
            <div class="labor-item">
              <p class="text-not-border">Ha sido profesor asociado desde 1996 en el laboratorio de microcirugía y base de cráneo en el Departamento Neurocirujano del Hospital Civil de Guadalajara y maestro de la Cátedra de Clínica Neurológica en la Facultad de Medicina de la Universiadad de Guadalajara.</p>
              <img class="img-item3" src="assets/images/recursos/biografia7.svg" alt="">
            </div>
          </div>
          <div class="labor-column">
            <div class="labor-item pd-left">
              <img class="img-item" src="assets/images/recursos/biografia2.svg" alt="">
              <p class="labor-item-text2">Actualmente es un neurocirujano que cuenta con 19 años de experiencia y es reconocido en el argot de Cirugía Neurológica a nivel nacional.</p>
            </div>
            <div class="labor-item pd-left">
              <img class="img-item2" src="assets/images/recursos/biografia4.svg" alt="">
              <p class="labor-item-text2">Es promotor de conferencias y cursos, tanto nacionales como internacionales. Ha contribuido en los primeros ciclos de exposiciones monográficas de actualización científica con diferentes temas médicos. Tiene varios estudios al respecto sobre la combinación sobre lesiones focales y difusas en el Traumatismo de Cráneo Encefálico Severo.</p>
            </div>
            <div class="labor-item pd-left">
              <img class="img-item4" src="assets/images/recursos/biografia6.svg" alt="">
              <p class="labor-item-text3">En 1993 concurrió de manera activa en el estudio inédito, presentado en el Congreso Mundial de Neurocirugía en el décimo International Congress of Neurological Surgery sobre "combine lesions in severe trauma head". Esto le premitió realizar varios artículos de interés mundial como: Graunalomatous Amebic Encephalitis due to Balamuthis Mandrillaris.</p>
            </div>
            <div class="labor-item pd-left">
              <img class="img-item5" src="assets/images/recursos/biografia8.svg" alt="">
              <p class="text-not-border2">Fue nominado en 1993 e la Worldwide Federation of Neurological Society (WFNS) con el tema de Anatomía de Seno Cavernoso, consiguiendo exponer la Estructura Hexaédrica Paraselar.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="j-wrap">
     <!-- Content Dr by Kikin -->
      <section class="datos-importantes">
          <div class="datos-title">
            <h2 class="datos-h2 caslon">DATOS IMPORTANTES</h2>
            <div class="datos-img">
              <img src="assets/images/recursos/datosimportantes1.png" alt="">
              <img src="assets/images/recursos/datosimportantes2.png" alt="">
              <img src="assets/images/recursos/datosimportantes3.png" alt="">
              <img src="assets/images/recursos/datosimportantes4.png" alt="">
            </div>
          </div>
          <div class="datos-container">
            <div class="datos-aside">
              <div class="datos-items">
                <img src="assets/images/recursos/datos1.png" alt="">
                <p>Interconsultante y asesor externo del Instituto Jalisciense de Alivio de Dolor y Cuidados Paleativos 2004 (SSA).</p>
              </div>
              <div class="datos-items">
                <img src="assets/images/recursos/datos2.png" alt="">
                <p>Recertificado tres veces por el consejo Nacional de Cirugía Neurológica.</p>
              </div>
              <div class="datos-items">
                <img src="assets/images/recursos/datos3.png" alt="">
                <p>Más de 2,000 cirugías de Columna Realizadas con éxito.</p>
              </div>
            </div>
            <div class="datos-column">
              <p class="strongP">Fundador del Colegio de Cirugía Neurológica de Jalisco en 1992.</p>
              <hr class="datos-hr">
              <p>Experto en cefaleas, cirugía de columna, cirugía no oncológica de SNC, cirugía de vascular cerebral de urgencia, enfermedades cerebrovasculares, enfermedades degenerativas y demencias, enfermedades desmielizantes, neurocirugía y neurología pediátrica.</p>
              <hr class="datos-hr">
              <p class="strongP">Experiencia como neurocirujano especializado y subespecializado durante 22años consecutivos.</p>
            </div>
            <div class="datos-aside">
              <div class="datos-items">
                <p>Miembro activo de la American Association of Neurological Surgeons (AANS) desde 1995.</p>
                <img src="assets/images/recursos/datos4.png" alt="">
              </div>
              <div class="datos-items">
                <p>Más de 1,500 cirugías de Sistema Nervioso Central realizadas.</p>
                <img src="assets/images/recursos/datos5.png" alt="">
              </div>
              <div class="datos-items">
                <p>Más de 4,000 cirugías realizadas durante la residencia y la práctica profesional. Pionero de la Neurocirugía en Puerto Vallarta, Jalisco.</p>
                <img src="assets/images/recursos/datos6.png" alt="">
              </div>
            </div>
          </div>
     </section>          
    </div>

  </main>
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
                      <p><?php echo tel; ?> <a href="tel:33381360"> (33) 3813 1360</a></p>
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
                <img src="assets/images/recursos/nombreDrBlanco.png" alt="" class="logoImg">
                <img src="assets/images/recursos/Slogan.png"class="logoSlogan" alt="">
              </div>
              <div class="footer-redes">
                <a href="#" class="imgFooterRedes">
                  <img src="assets/images/recursos/facebook.svg" alt="">
                </a>
                <a href="#" class="imgFooterRedes">
                  <img src="assets/images/recursos/instgram.svg" alt="">
                </a>
                <a href="#" class="imgFooterRedes">
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
</body>
</html>
