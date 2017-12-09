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
  <title>Dr Juan Riestra | Contactos</title>
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
              <li>
                <?php echo memorias; ?>
              </li>
            </a>
            <a href="contacto.php">
              <li  class="activeView">
                <?php echo contacto; ?>
              </li>
            </a>
          </ul>
          <ul class="idiomas-responsive">
            <a href="contacto.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="contacto.php">
              <?php echo en; ?>
            </a>
          </ul>
        </nav>
        <div class="redes">
          <a href="https://www.facebook.com/neurocenter10/" target="_blank">
            <img src="assets/images/recursos/facebook.svg" alt="" style="height: 15px;">
          </a>
          <a href="#" target="_blank">
            <img src="assets/images/recursos/instgram.svg" alt="" style="height: 15px;">
          </a>
          <a href="https://www.doctoralia.com.mx/medico/riestra+castaneda+juan+manuel-12335173" target="_blank">
            <img src="assets/images/recursos/doctoralia.svg" alt="">
          </a>
          <a href="#" target="_blank">
            <img src="assets/images/recursos/intermed.svg" alt="">
          </a>
          <ul class="list-idioma">
            <a href="contacto.php?idioma=es">
              <?php echo es; ?>
            </a>
            <a href="contacto.php">
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
  <div class="hero-contacto hero">
    <div class="hero-aviso">
      <div class="content-hero-aviso">
        <div class="llamanosTxt"> 
          <img src="assets/images/recursos/location.svg" class="locationIcon" alt="">
          <p><?php echo adLlamanos; ?></p>
        </div>
        <img src="assets/images/recursos/x.svg" class="closeIcon" alt="">
      </div>
    </div>
  </div>
  
   <!--  Main content -->
  <main class="j-workspace ">
    <div class="j-wrap-80">
      <!-- formulario by kikin-->
      <section class="contacto">
          <h2 class="contacto-title">CONTACTO</h2>
          <form class="contacto-form" id="contact-form" action="#" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-container">
                <div class="form-card">
                    <label for="inputNombre">Nombre *</label>
                    <input type="text" name="nombre" id="inputNombre">
                </div>
                <div class="form-card">
                    <label for="inputApellidos">Apellidos *</label>
                    <input type="text" name="apellidos" id="inputApellidos">
                </div>
            </div>
            <div class="form-container">
                <div class="form-card">
                    <label for="inputEmail">Correo Electrónico *</label>
                    <input type="email" name="email" id="inputEmail">
                </div>
                <div class="form-card">
                    <label for="inputFecha">Fecha de nacimiento</label>
                    <input type="text" name="fecha" id="inputFecha" onfocus="(this.type='date')" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" min="1920-01-01" max="2010-12-31">
                </div>
            </div>
            <div class="form-container">
                <div class="form-card">
                    <label for="selectPais">País</label>
                    <select name="pais" id="selectPais">
                        <option value="Elegir opción" id="EO">Elegir opción</option>
                        <option value="Argentina" id="AR">Argentina</option>
                        <option value="Belice" id="BZ">Belice</option>
                        <option value="Bolivia" id="BO">Bolivia</option>
                        <option value="Brasil" id="BR">Brasil</option>
                        <option value="Canadá" id="CA">Canadá</option>
                        <option value="Chile" id="CL">Chile</option>
                        <option value="Colombia" id="CO">Colombia</option>
                        <option value="Costa Rica" id="CR">Costa Rica</option>
                        <option value="Ecuador" id="EC">Ecuador</option>
                        <option value="El Salvador" id="SV">El Salvador</option>
                        <option value="Estados Unidos" id="US">Estados Unidos</option>
                        <option value="Guatemala" id="GT">Guatemala</option>
                        <option value="Guyana" id="GY">Guyana</option>
                        <option value="Honduras" id="HN">Honduras</option>
                        <option value="México" id="MX">México</option>          
                        <option value="Nicaragua" id="NI">Nicaragua</option>                      
                        <option value="Panamá" id="PA">Panamá</option>                       
                        <option value="Paraguay" id="PY">Paraguay</option>
                        <option value="Perú" id="PE">Perú</option>
                        <option value="Surinam" id="SN">Surinam</option>
                        <option value="Uruguay" id="UY">Uruguay</option>
                        <option value="Venezuela" id="VE">Venezuela</option>
                        <option value="Otro" id="otroPais">Otro</option>
                    </select>
                </div>
                <div class="form-card">
                    <label for="selectEstado">Estado</label>
                    <input type="text" name="estado" id="selectEstado">
                    <!--<select name="Estados" id="selectEstado">
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California ">Baja California </option>
                        <option value="Baja California Sur ">Baja California Sur </option>
                        <option value="Campeche ">Campeche </option>
                        <option value="Chiapas ">Chiapas </option>
                        <option value="Chihuahua ">Chihuahua </option>
                        <option value="Coahuila ">Coahuila </option>
                        <option value="Colima ">Colima </option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Durango ">Durango </option>
                        <option value="Estado de México ">Estado de México </option>
                        <option value="Guanajuato ">Guanajuato </option>
                        <option value="Guerrero ">Guerrero </option>
                        <option value="Hidalgo ">Hidalgo </option>
                        <option value="Jalisco ">Jalisco </option>
                        <option value="Michoacán ">Michoacán </option>
                        <option value="Morelos ">Morelos </option>
                        <option value="Nayarit ">Nayarit </option>
                        <option value="Nuevo León ">Nuevo León </option>
                        <option value="Oaxaca ">Oaxaca </option>
                        <option value="Puebla ">Puebla </option>
                        <option value="Querétaro ">Querétaro </option>
                        <option value="Quintana Roo ">Quintana Roo </option>
                        <option value="San Luis Potosí ">San Luis Potosí </option>
                        <option value="Sinaloa ">Sinaloa </option>
                        <option value="Sonora ">Sonora </option>
                        <option value="Tabasco ">Tabasco </option>
                        <option value="Tamaulipas ">Tamaulipas </option>
                        <option value="Tlaxcala ">Tlaxcala </option>
                        <option value="Veracruz ">Veracruz </option>
                        <option value="Yucatán ">Yucatán </option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>-->
                </div>
            </div>
            <div class="form-container-2">
                <label for="inputAsunto">Asunto *</label>
                <select name="asunto" id="selectAsunto">
                    <option value="Elije una opción" id="euo">Elije una opción</option>
                    <option value="Deseos agendar una consulta" id="dauc">Deseos agendar una consulta.</option>
                    <option value="Deseo pedir informes" id="dpi">Deseo pedir informes.</option>
                    <option value="Otro" id="otro">Otro</option>
                </select>
            </div>
            <div class="form-container-2">
                <label for="taMensaje">Mensaje *</label>
                <textarea name="mensaje" id="taMensaje" placeholder=""></textarea>
            </div>
            <button type="submit" class="ripple">ENVIAR</button>
            <div class="nota"><span>Los campos marcados con * son obligatorios</span></div>
          </form>
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
  <!-- Validar Form -->
  <script src="assets/scripts/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <script src="assets/scripts/enviarForm.js"></script>
  <script>
      $('#contact-form').submit(function(e){
      	e.preventDefault();
      	$('input').removeClass('error');
      	$('textarea').removeClass('error');
      	$('label.error').remove();
      	var name=$("input[name='nombre']");
        var apellidos=$("input[name='apellidos']");
        var pais=$("select[name='pais']");
        var estado=$("input[name='estado']");
      	var asunto=$("select[name='asunto']");
        var mensaje=$("textarea[name='mensaje']");
        var fecha=$("input[name='fecha']");
      	var email=$("input[name='email']");
      	var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
      	if(name.val() === ""){
      		$(name).addClass('error');
      		$(name).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(apellidos.val() === ""){
      		$(apellidos).addClass('error');
      		$(apellidos).after('<label class="error"> Campo obligatorio</label>');
        }
        if(fecha.val() === ""){
      		$(fecha).addClass('error');
      		$(fecha).after('<label class="error"> Campo obligatorio</label>');
        }
        if(pais.val() === "Elegir opción"){
      		$(pais).addClass('error');
      		$(pais).after('<label class="error"> Campo obligatorio</label>');
      	}
        if(estado.val() === ""){
      		$(estado).addClass('error');
      		$(estado).after('<label class="error"> Campo obligatorio</label>');
        }
      	if(asunto.val() === "Elije una opción"){
      		$(asunto).addClass('error');
      		$(asunto).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(mensaje.val() === ""){
      		$(mensaje).addClass('error');
      		$(mensaje).after('<label class="error"> Campo obligatorio</label>');
      	}
      	if(!pattern.test(email.val())){
      		$(email).addClass('error');
      		$(email).after('<label class="error"> El correo electrónico señalado es incorrecto</label>');				
      	}
      	if($('label.error').length == 0){
          console.log("se enviara un correo");
          contactoEnviarMensajeBtn_click();
          contactoEnviarDatos();
      	}
      

          return false;
      });
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
