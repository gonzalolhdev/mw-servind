<?php
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/c102cb97f8.js" crossorigin="anonymous"></script>

  <!-- Smooth Scroll -->
  <script src="js/smooth-scroll.min.js"></script>


  <!-- Titulo -->
  <title>MW Servicios Industriales</title>
</head>

<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-md scrolling-navbar fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="Images/Logo-MW-fondo-oscuro.svg" class="logo-brand" alt="logo" id="logo-nav"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Links Navegación -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a data-scroll class="nav-link" href="#top" id="inicio-link">Inicio</a>
          </li>
          <li class="nav-item">
            <a data-scroll class="nav-link" href="#nosotros" id="nosotros-link">Nosotros</a>
          </li>
          <li class="nav-item">
            <a data-scroll class="nav-link" href="#servicios" id="servicios-link">Servicios</a>
          </li>
          <li class="nav-item">
            <a data-scroll class="nav-link" href="#contacto" id="contacto-link">Contacto</a>
          </li>
        </ul>
      </div>

      <!-- Links Redes -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto navbar-icon">
          <li class="nav-item">
            <a href="https://www.linkedin.com/company/mw-servicios-industriales" target="_blank"><i class="fab fa-linkedin"></i></a>
          </li>
          <li class="nav-item">
            <a href="https://www.instagram.com/mwserviciosindustriales?r=nametag" target="_blank"><i class="fab fa-instagram"></i></a>
          </li>
          <li class="nav-item">
            <a href="https://wa.me/+543875185202" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </li>
          <li class="nav-item">
            <a href="#contacto" target="_blank"><i class="fas fa-envelope"></i></a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <!-- Portada -->
  <section id="hero">
    <!--<div class="titulo">
      <h1>Soluciones para cada necesidad de tu empresa</h1>
    </div> -->

    <div id="portada" class="carousel slide" data-ride="carousel" id="carrusel">
      <ol class="carousel-indicators">
        <li data-target="#portada" data-slide-to="0" class="active cursor-pointer"></li>
        <li data-target="#portada" data-slide-to="1" class="cursor-pointer"></li>
        <li data-target="#portada" data-slide-to="2" class="cursor-pointer"></li>
        <li data-target="#portada" data-slide-to="3" class="cursor-pointer"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
        <img class="d-block w-100" src="css/Images/Hero-2-proyectos-electricos.jpg">
          <div class="carousel-caption">
            <h1 class="titulo">Proyectos Eléctricos</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="css/Images/Hero-1-obras-electricas.jpg" alt="Hola">
          <div class="carousel-caption">
            <h1 class="titulo">Obras Eléctricas</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="css/Images/Hero-3-sistemas-de-control.jpg">
          <div class="carousel-caption">
            <h1 class="titulo">Sistemas de Control</h1>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="css/Images/Hero-4-soluciones-em-y-electroinstrumentales.jpg">
          <div class="carousel-caption">
            <h1 class="titulo-largo">Soluciones EM y Electroinstrumentales</h1>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#portada" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#portada" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- Sección Nosotros -->
  <section id="nosotros" class="cuerpo bg-primary">
    <!-- <div class="container-fluid"> -->
    <!-- <div class="" id="dis-atras">
        <img src="Images/diseño-superior-1.svg" alt="">
      </div> -->
    <div class="container">
      <div class="container-fluid">
        <h1>Soluciones en ingenieria para tu empresa</h1>
        <br>
        <br>
        <div class="row">
          <div class="col card-flex">
            <div class="card">
              <img src="Images/nuestros-valores.svg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title">Nuestros valores</h5>
                  <p class="card-text">Se basan en el compromiso, honestidad y profesionalismo
                    aplicados al objetivo de
                    brindar soluciones que
                    acompañen y potencien el desarrollo de nuestros clientes.</p>
              </div>
            </div>
          </div>
          <div class="col card-flex">
            <div class="card">
              <img src="Images/nuestros-conocimientos.svg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title">Nuestros conocimientos</h5>
                  <p class="card-text">Contamos con especialistas en Ingeniería Eléctrica,
                    Electrónica, Instrumentación,
                    Automatización y Control,
                    lo que nos permite brindar una asesoría integral en las etapas de diseño,
                    ejecución y post puesta en
                    marcha de
                    su proyecto.</p>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
        </div>
        <br>
        <!-- <hr>
        <h2>Nuestros valores</h2>
        <p>Se basan en el compromiso, honestidad y profesionalismo aplicados al objetivo de brindar soluciones que
          acompañen y potencien el desarrollo de nuestros clientes.</p>
        <hr>
        <h2>Nuestros conocimientos</h2>
        <p>Contamos con especialistas en Ingeniería Eléctrica, Electrónica, Instrumentación, Automatización y Control,
          lo que nos permite brindar una asesoría integral en las etapas de diseño, ejecución y post puesta en marcha de
          su proyecto.</p> -->
      </div>
      <!-- </div> -->
    </div>

  </section>

  <!-- Sección de servicios -->
  <section id="servicios" class="cuerpo">
    <div class="container">
      <div class="container-fluid">
        <h1>Servicios</h1>
        <hr>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="Images/proyectos-y-obras-electricas.svg" alt="">
            <h3>Proyectos y Obras Eléctricas</h3>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12" style="display: flex; align-items: center;">
            <div>
              <li><a>Proyectos Eléctricos para loteos urbanísticos, edificios y desarrollos inmobiliarios
                  en general</a>
              </li>
              <li><a>Proyectos Eléctricos para instalaciones industriales</a></li>
              <li><a>Alumbrado Público e Iluminación en general</a></li>
              <li><a>Tableros Eléctricos</a></li>
              <li><a>Correción de factor de potencia</a></li>
              <li><a>Asesoramiento en la contratación de suministros Eléctricos</a></li>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="Images/sistemas-control-automatizacion.svg" alt="">
            <h3>Sistemas de control y automatización</h3>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12" style="display: flex; align-items: center;">
            <div>
              <li><a>Mejoras/Actualizaciones de Sistemas de Control</a></li>
              <li><a>Implementación de Lazos de control de procesos</a></li>
              <li><a>Programacion de automatismos en general</a></li>
              <li><a>Implementación y Mejora de sistemas SCADA</a></li>
              <li><a>Diagnóstico y Soporte Técnico</a></li>
              <li><a>Implementación de tableros de Variables Críticas</a></li>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <img src="Images/soluciones-electromecanicas.svg" alt="">
            <h3>Soluciones Electromecánicas y Electroinstrumentales</h3>
          </div>
          <div class="col-lg-8 col-md-6 col-sm-12 " style="display: flex; align-items: center;">
            <div>
              <li><a>Modificación de planta y procesos</a></li>
              <li><a>Tableros de Control</a></li>
              <li><a>Selección y montaje de instrumentación Industrial</a></li>
              <li><a>Asesoría para selección de material y tecnologias</a></li>
              <li><a>Contraste y/o calibración de instrumentos</a></li>
              <li><a>Parametrización y configuración de equipos</a></li>
              <li><a>Mediciones de puesta a tierra</a></li>
              <li><a>Termografías</a></li>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="Images/asesoramiento-y-est-espec.svg" alt="">
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12" style="display: flex; align-items: center;">
            <div>
              <h3>Asesoramiento y Estudios Especiales</h3>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <img src="Images/capacitaciones.svg" alt="">
            <h3>Capacitaciones</h3>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12" style="display: flex; align-items: center;">
            <div>
              <li><a>Electricidad e Instrumentación Industrial</a></li>
              <li><a>Automatización y Sistemas de Control</a></li>
              <li><a>Cursos a medida</a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección contacto -->
  <section id="contacto" class="cuerpo bg-primary">
    <div class="container-fluid fondo-contacto">
      <div class="container">
        <!-- <div class="container-fluid"> -->

        <h1>Contacto</h1>
        <div class="row" style="justify-content: center;">
          <div class="col-lg-6 col-md-12">
            <div class="info-wrap">
              <div class="dbox d-flex align-items-start justify-content-center" id="logo-contacto">
                <img src="Images/Logo-MW-logotipo.svg" alt="">
              </div>
              <div class="dbox d-flex align-items-start">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-phone"></span>
                </div>
                <div class="text pl-4">
                  <span>Tel/WhatsApp:</span>
                  <p class="break-word">
                    <a href="https://wa.me/+543875185202" target="_blank">387-5185202</a>
                  </p>
                </div>
              </div>
              <div class="dbox d-flex align-items-start">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text pl-4">
                  <span>E-mail:</span>
                  <p class="break-word">
                    <a href="mailto:administracion@mw-servind.com.ar">administracion@mw-servind.com.ar</a>
                  </p>
                </div>
              </div>
              <div class="dbox d-flex align-items-start">
                <div class="icon d-flex align-items-center justify-content-center">
                  <span class="fa fa-globe"></span>
                </div>
                <div class="text pl-4">
                  <span>Sitio Web:</span>
                  <p class="break-word">
                    <a href="#">www.mw-servind.com.ar</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12">
            <!-- ======================================================================================================================== -->
            <div class="card">
              <form id="contact-form" method="post" action="php\contacto.php" role="form" style="padding:1em;">

                <div class="messages"></div>

                <div class="controls">
                  <div class="form-group">
                    <label for="form_name">Nombre *</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Ingrese su nombre..." required="required" data-error="Nombre requerido.">
                    <div class="help-block with-errors"></div>
                  </div>
                  <!-- <div class="form-group">
                      <label for="form_lastname">Apellido *</label>
                      <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Ingrese su apellido..." required="required" data-error="Apellido requerido.">
                      <div class="help-block with-errors"></div>
                    </div> -->
                  <div class="form-group">
                    <label for="form_email">E-mail *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="E-mail..." required="required" data-error="E-mail no válido.">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form_need">Asunto *</label>
                    <input id="form_need" type="need" name="need" class="form-control" placeholder="Asunto..." required="required" data-error="Ingrese asunto.">
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">
                    <label for="form_message">Mensaje *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Mensaje..." rows="4" required="required" data-error="Por favor, escriba su mensaje"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                  <div class="form-group">


                    <button type="submit" name="submit" class="btn btn-success btn-send form-control" value="Enviar">Enviar
                      <!-- <input type="submit" name="submit" class="btn btn-success btn-send" value="Enviar" > -->
                    </button>
                  </div>



                </div>

              </form>
            </div>
            <div class="col">
              <p class="text-muted" style="padding-top: 0.3em; font-size:1.2em; text-align:right;">
                <strong>*</strong>Campos requeridos.
              </p>
            </div>
            <!-- ======================================================================================================================== -->
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
  </section>

  <!-- Pie de página -->
  <footer>
    <div class="container">

    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 1000,
      speedAsDuration: true,
      offset: 59
    });
  </script>
  <script type="text/javascript">
    $('.carousel').carousel({
      interval: 5000,
      pause:false
    });
  </script>
</body>

</html>