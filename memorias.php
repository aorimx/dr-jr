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
  <title>Dr Juan Riestra | Memorias</title>
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
              <li class="activeView">
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
            <a href="memorias.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="memorias.php">
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
            <a href="memorias.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="memorias.php">
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
  <div class="hero-memorias hero">
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
        <p class="p-hero1">MEMORIAS</p>
      </div>
    </div>
  </div>
  
   <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap-90">
      <!-- Content Dr by Kikin -->
      <section class="memorias">
        <div class="txt-description">
          <p class="memorias-text">La realización de la Especialidad en Neurocirugía y de otras ciencias requiere de la adquisición de experiencia, convivencia y la estancia hospitalaria con los principales exponentes de la medicina en el mundo.</p>
          <p class="memorias-text">El Doctor Juan Manuel Riestra Castañeda tuvo de la oportunidad de interactuar con los mejores representantes de la Neurocirugía, incluyendo al Neurocirujano del siglo el Doctor M.G. Yasargil.</p>
        </div>
      </section>
      <section class="memorias-container">
          <div class="memorias-inner">
              <div class="memorias-item slides fade">
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias1.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. TAKANORI</h3>
                    <h3 class="title-name">FUKUSHIMA</h3>
                    <hr>
                    <p>Contribuyó en el concurso, realizado por la American Association of Neurological Surgeons, Premio de Neurocirujanos Jóvenes a nivel mundial, con el tema de Anatomía Microquirúrgica del Seno Cavernoso, postulando así, por primera vez, la Estructura Hexaédrica de dicha configuración, la cual fue revisada por la revista de Neurocirugía.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias2.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. CHANDRANATH</h3>
                    <h3 class="title-name">SEN</h3>
                    <hr>
                    <p>Complementando sus estudios de Educación Media, se inclinó por el área de medicina en la Universidad de Guadalajara, de donde egresó en 1986. Así mismo, acreditó los exámenes correspondientes a Ciencias Clínicas para ingresar a programas de residencia médica en los Estados Unidos de América y Canadá, a través de la Educational Comition for Foreign Medical Graduates.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias3.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. HAKIRA</h3>
                    <h3 class="title-name">HAKUBA</h3>
                    <hr>
                    <p>Ha sido profesor asociado desde 1996 en el laboratorio de microcirugía y base de cráneo en el Departamento Neurocirujano del Hospital Civil de Guadalajara y maestro de la Cátedra de Clínica Neurológica en la Facultad de Medicina de la Universidad de Guadalajara.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias4.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. CHARLES</h3>
                    <h3 class="title-name">G. DRAKE</h3>
                    <hr>
                    <p>El Doctor Charles George Drake nació en Windsor, Ontario, en 1920 y murió el 15 de septiembre de 1998, a los 78 años de edad, de Cáncer de Pulmón. Fue ampliamente reconocido con el más alto honor en Canadá, por sus contribuciones a la Neurocirugía. Su principal interés resultó el Tratamiento de Aneurismas Complejos, principalmente Vertebrobasilares. Fue precursor del Arresto Cardíaco e Hipotermia para el tratamiento de Aneurismas Gigantes de la Basilar, llegando a intervenir en más de 1000 casos.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias5.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. TAKESHI</h3>
                    <h3 class="title-name">KAWASE</h3>
                    <hr>
                    <p>El Doctor Takeshi Kawase, actualmente, profesor y chairman del Departamento de Neurocirugía de la Universidad de Keio en Tokio, Japón. Ha realizado grandes contribuciones a la Base de Cráneo, particularmente al Seno Cavernoso y Petrosectomía Anterior Vía Extradural, a través del triángulo que lleva su nombre.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias6.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. MADJID</h3>
                    <h3 class="title-name">SAMII</h3>
                    <hr>
                    <p>El Doctor Madjid Samii (de nacionalidad alemana) nació en Teherán, Irán, el 9 de julio de 1937. Se graduó de Medicina y Biología de la Universidad de Mainz de la República Federal Alemana, en 1963. Completó su entrenamiento de Neurocirugía en 1970 bajo la dirección del profesor Kurt Schurmann. En1977, como Director de la Clínica de Neurocirugía del Hospital Nordstadt en Hannover, estableció el Laboratorio de Entrenamiento Neuroquirúrgico. En 1979 fundó el Grupo de Estudio de Base de Cráneo.</p>
                  </div>
                </div>
              </div>
              <div class="memorias-item slides fade">
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias7.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. KENICHIRO</h3>
                    <h3 class="title-name">SUGITA</h3>
                    <hr>
                    <p>El Doctor Kenichiro Sugita (1932-1994), murió a los 62 años de Cáncer Gástrico. Realizó diversas contribuciones a la Cirugía Vascular Cerebral de Base de Cráneo y fornó el Departamento de Neurocirugía en la Universidad de Shinshu, Japón.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias8.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. VINKO</h3>
                    <h3 class="title-name">DOLENC</h3>
                    <hr>
                    <p>El Doctor Vinko Dolenc, nació en Lubjiana, antes parte de Yugoslavia. En la Actualidad, cuenta con 30 años de experiencia. Labora en Charlottesville, Virginia, y su gran contribución fue sobre Anatomía Microquirúrgica y Cirugía Directa al Seno Cavernoso.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias9.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. EVANDRO</h3>
                    <h3 class="title-name">DE OLIVEIRA</h3>
                    <hr>
                    <p>El Doctor Evandro de Oliveira, jefe del Servicio de Neurocirugía del Hospital de Beneficencia Portuguesa de Sao Paulo, Brasil, cursó dos años en el Laboratorio del Doctor Albert L. Rhoton Jr. e hizo su paso a Zúrich, con el profesor Yasargil. Hoy en día es reconocido como Neurocirujano de talla mundial, principalmente enfocado al tratamiento de MAVs</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias10.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. SHIGEAKI</h3>
                    <h3 class="title-name">KOBAYASHI</h3>
                    <hr>
                    <p>El Doctor Shigeaki Kobayashi, Director del Hospital General de Komoro en Nagano, Japón, se unió con el Doctor Kenichiro Sugita para crear el Departamento de Neurocirugía de la Universidad de Shinshu.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias11.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. JULES</h3>
                    <h3 class="title-name">HARDY</h3>
                    <hr>
                    <p>El Doctor Jules Hardy nació el 16 de julio de 1936, en Sorel, Canadá. Es Profesor de Neurocirugía en la Universidad de Montreal y es director del Hospital de Notredame. Es uno de los personajes de la medicina que más ha contribuido al estudio de la Hipófisis y Cirugía Transesfenoidal para el tratamiento de Adenomas Hipofisiarios, así como también en el Campo de la Neurofisiología.</p>
                  </div>
                </div>
                <div class="memorias-card">
                  <img src="assets/images/contenido/memorias12.png" alt="">
                  <div class="card-box">
                    <h3 class="title-name">DR. MAMHMUT G.</h3>
                    <h3 class="title-name">YASARGIL</h3>
                    <hr>
                    <p>El Doctor M. G. Yasargil, Neurocirujano del siglo XX, nació el 6 de julio de 1925, en Ankara, Turquía. Durante 1943 arribó a Naumberg, Alemania. Inició su carrera de Medicina en Jena, Thuringen, donde Carl Zeiss funda su compañia (1846) y Hans Berger, en 1929, realiza el primer registro de la Actividad Bioeléctrica Cerebral (EEG). Después se trasladó a Basilea para terminar la carrera de Medicina. Como Neurocirujano inició su entrenamiento con Hugo Krayen Buhl, en Zúrich.</p>
                  </div>
                </div>
              </div>
          </div>
          <div class="nav-number">
            <i class="fa fa-angle-double-left goLeft" aria-hidden="true" onclick="plusIndex(-1)"></i>
            <p onclick="plusIndex(-1)" class="goLeft">Previous</p>
            <p class="number-1 goLeft page1" onclick="plusIndex(-1)">1</p>
            <p class="number-2 goRight page2" onclick="plusIndex(+1)">2</p>
            <p onclick="plusIndex(+1)" class="goRight">Next</p>
            <i class="fa fa-angle-double-right goRight" aria-hidden="true" onclick="plusIndex(+1)"></i>
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
<!-- nav page number colors by kikin -->
<script src="assets/scripts/js/jquery-3.1.0.min.js"></script>
<script src="assets/scripts/numberNav.js"></script>

<!-- nav-number by kikin -->
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
