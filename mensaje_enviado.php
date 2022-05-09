<!DOCTYPE HTML>
<!--
  Miniport by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Hotel Krakus - San Bernardo</title>
    <link rel="icon" type="image/png" href="logo_krakus.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="is-preload">

    <!-- Nav -->
      <nav id="nav">
        <ul class="container">
          <li><a href="index.php#servicios">Inicio</a></li>          
          <li><a href="index.php#habitaciones">Habitaciones</a></li>
          <li><a href="index.php#servicios">Servicios</a></li>
          <li><a href="index.php#covid">Higiene</a></li>
          <li><a href="index.php#contact">Consultanos</a></li>
        </ul>
      </nav>

    <!-- Home -->
      <article id="top" class="wrapper style1">
        <div class="container">
          <div class="row">
            <div class="col-4 col-5-large col-12-medium">
              <span class="image fit"><img style="width: 85%;box-shadow: 0px 0px 15px 15px #a3a3a5a1;border-radius: 4px;" src="images/frente.jpg" alt="" /></span>
            </div>
            <div class="col-8 col-7-large col-12-medium">
              <header>
                <h1><img style="width: 6%;" src="images/logoHK.png" alt="" /> Hotel<strong>Krakus</strong>.</h1>
              </header>
              <p style="font-size: large;">Su consulta fue enviada exitosamente. En breve nos pondremos en contacto</p>
            </div>
          </div>
        </div>
      </article>

    <!-- Contact -->
      <article id="contact" class="wrapper style3">
        <div class="container medium">
          <header>
            <h2>Consultanos</h2>
            <p>Realiza tu consulta y en breve nos comunicaremos</p>
          </header>
          <div class="row">
            <div class="col-12">
              <form id="formConsulta" method="post" action="envioConsulta.php">
                <div class="row">
                  <div class="col-6 col-12-small">
                    <input type="text" name="name" id="name" placeholder="Nombre y Apellido" />
                  </div>
                  <div class="col-6 col-12-small">
                    <input type="text" name="email" id="email" placeholder="Email" />
                  </div>
                  <div class="col-12 col-12-small">
                    <input type="text" name="name" id="telefono" placeholder="telefono" />
                  </div>
                  <div class="col-6 col-6-small">
                    <input type="text" class="datepicker2" name="checkin" id="checkin" placeholder="Check In" />
                  </div>
                  <div class="col-6 col-6-small">
                    <input type="text" class="datepicker2" name="checkout" id="checkout" placeholder="Check Out" />
                  </div>
                  <div class="col-6 col-6-small">
                    <input type="text" name="adultos" id="adultos" placeholder="Cant. Adultos" />
                  </div>
                  <div class="col-6 col-6-small">
                    <input type="text" name="menores" id="menores" placeholder="Cant. Menores" />
                  </div>
                  <div class="col-12">
                    <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                  </div>
                  <div class="col-12">
                    <ul class="actions">
                      <li><input id="enviar" type="submit" value="Enviar Consulta" /></li>
                      <li><input type="reset" value="Limpiar Formulario" class="alt" /></li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-12">
              <hr />
              <h3>Seguinos en..</h3>
              <ul class="social">						
								<li><a href="https://www.facebook.com/KrakusHotel/" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/krakushotel/" class="icon brands fa-instagram"><span  class="label">Instagram</span></a></li>		
							</ul>
              <hr />
            </div>
          </div>
					<footer>					 
						<ul id="copyright">
							<li> Chiozza 1645 - San Bernardo - Partido de La Costa - Buenos Aires</li>
							<li> (02257) 460438 / 467186</li>
							<li> krakushotel@gmail.com</li>
							<li>&copy; Hotel Krakus. Todos los derechos reservados 2020.</li> 
						</ul>
					</footer>
        </div>
      </article>

    <!-- Scripts -->
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>

 