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
  <title>Dr Juan Riestra | Trayectoria</title>
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
              <li  class="activeView">
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
            <a href="trayectoria.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="trayectoria.php">
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
            <a href="trayectoria.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="trayectoria.php">
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
  <div class="hero-trayectoria hero">
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
        <p class="p-hero1">TRAYECTORIA</p>
      </div>
    </div>
  </div>
  
   <!--  Main content -->
  <main class="j-workspace ">
    <!-- Content Trayectoria by Kikin -->
    <section class="trayectoria">
        <div class="trayectoria-container">
            <div class="trayectoria-content-1">
                <div class="card-left">
                    <h3 class="fecha">1987-1988</h3>
                    <hr>
                    <p>Hospital Regional de Zona No. 46, Guadalajara, Jalisco</p>
                    <p class="card-italic">Especialidad en Cirugía General</p>
                </div>
                <div class="card-right mg-40">
                    <h3 class="fecha">1988-1992</h3>
                    <hr>
                    <p>Centro Médico Nacional de Occidente, IMSS</p>
                    <p class="card-italic">Especialidad en Cirugía Neurológica</p>        
                </div>
                <div class="card-left">
                    <h3 class="fecha">1990</h3>
                    <hr>
                    <p>Facultad de Medicina U. de G.</p>
                    <p class="card-italic">Profesor extraordinario de la Cátedra de Propedéutica Neurológica</p>
                </div>
                <div class="card-right mg-40">
                    <h3 class="fecha">1992</h3>
                    <hr>
                    <p>Miembro de la <span class="card-italic">Sociedad de Cirugía Neurológica de Occidente, Sociedad Nacional de Cirugía Neurológica y Sociedad Nacional de Cirugía Neurológica.</span></p>        
                </div>
                <div class="card-left">
                    <h3 class="fecha">1994</h3>
                    <hr>
                    <p>Fellows en Microcirugía Cerebral y Vasos Sanguíneos</p>
                    <p class="card-italic">Estados Unidos</p>
                </div>
                <div class="card-right mg-40">
                    <h3 class="fecha">1995</h3>
                    <hr>
                    <p class="sn-mg">Miembro Activo de la AANS,</p>
                    <p class="card-italic sn-mg">American Association of Neurological Surgeons</p>
                    <p class="sn-mg">Miembro Asociado a la <span class="card-italic">Academia Nacional de Cirugía.</span></p>        
                </div>
                <div class="card-left">
                  <h3 class="fecha">1996</h3>
                  <hr>
                  <p>U. de G.</p>
                  <p class="card-italic">Profesor del Laboratorio de Microcirugía y Base de Cráneo</p>
              </div>
              <div class="card-right mg-40">
                  <h3 class="fecha">2004</h3>
                  <hr>
                  <p>Interconsultante y Asesor Externo del  <span class="card-italic">Instituto Jalisciense de Alivio de Dolor y Cuidados Paliativos (SSA)</span> </p>
                  <p>Fellows en <span class="card-italic">Spine Surgery, Alemania.</span></p>
                  <p>Adiestramiento en  <span class="card-italic">Cirugía de Columna Especializado.</span> </p>  
              </div>
              <div class="card-left mg-32">
                  <h3 class="fecha">2008</h3>
                  <hr>
                  <p>Fellows en <span class="card-italic">Spine Surgery, Austria.</span> </p>
              </div>
              <div class="card-right mg-40">
                <h3 class="fecha">2010</h3>
                <hr>
                <p>Cefálea, dolor de espalda y Parkinson. <span class="card-italic">4th World Federation of Neurology. Barcelona, España.</span> </p>
              </div>
              <div class="card-left mg-32">
                  <h3 class="fecha">2011</h3>
                  <hr>
                  <p>Avances en columna vertebral, tumores y traumatismos <span class="card-italic">Sunnydale, CA, USA.</span></p>        
                  <p>Migrañas, cefáleas, parkinson, neuralgias del trigemino y hernias de disco. <span class="card-italic">XX World Congress of Neurology Marrakesh, Morroco, África.</span> </p>
              </div>
              <div class="card-right mg-40">
                  <h3 class="fecha">2012</h3>
                  <hr>
                  <p>Cifoplastias, prótesis dinámicas cervicales, prótesis dinámicas lumbares y dolor de columna vertebral. Spine Conference of the World, <span class="card-italic">Melbourne, Australia.</span> </p>
                  <p>Primer Simposium Internacional de Tumores Cerebrales y Cirugía Espinal</p>
                  <p class="card-italic">CLEVELAND CLINIC, Florida, USA.</p>    
              </div>
              <div class="card-left mg-card">
                <h3 class="fecha">2013</h3>
                <hr>
                <p>15th Congreso Mundial de Neurocirugía (WFNS) Cirugía vascular cerebral, tumores cerebrales, columna vertebral, colocación de electrodos cerebrales profundos (parkinson). <span class="card-italic">Coex Convention Center, Seul, Korea.</span></p>        
                <p>Neuro-oncología. Lo mejor de dos continentes, Europeo (EANS) y Norteamericano (AANS). <span class="card-italic">Tel Aviv, Israel</span> </p>
              </div>
              <div class="card-right mg-40">
                  <h3 class="fecha">2014</h3>
                  <hr>
                  <p>Congreso Mundial de Cirugía de Mínima Invasión y Técnica (WCMISST) Hernia de disco, canal lumbar estrecho, tumores espinales, fracturas vertebrales y dolor de espalda (vertebral). París, Francia.</p>
              </div>
              <div class="card-left mg-resp">
                <h3 class="fecha">2015</h3>
                <hr>
                <p>Reunión de la Federación Mundial de Sociedades Enruoquirúrgicas</p>        
                <p>(WFNS), Cirugía espinal percutanea, cirugía vascular cerebral y tumores. <span class="card-italic">Roma, Italia.</span> </p>
              </div>
              <div class="card-right mg-40">
                  <h3 class="fecha">2016</h3>
                  <hr>
                  <p>16th Congreso Europeo de Neurocirugía (ECN). Athenas, Grecia.</p>  
                  <p>Congreso Global de Columna y Foro Mundial para la investigación vertebral. <span class="card-italic">Dubai, United Arab Emirates.</span> </p>
              </div>
              <div class="card-left">
                <h3 class="fecha">2016</h3>
                <hr>
                <p>Congreso Latinoamericano de Neurología, en Agosto dentro del Ibero Star.</p>        
                <p class="card-italic">Cancún, Quintana Roo.</p>
              </div>
              <div class="card-right mg-40">
                <h3 class="fecha">2016</h3>
                <hr>
                <p>Congreso Latinoamericano de Neurología, en Noviembre dentro del Ibero Star.</p>        
                <p class="card-italic">Cancún, Quintana Roo.</p>    
              </div>
            </div>
            
        </div>
    </section>
  
    
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
