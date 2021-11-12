<?php
include("includes/conexion.php");
session_start();
unset($_SESSION['valueuser']);
$con = mysqli_connect($host, $user, $pwd, $db);
if (mysqli_connect_errno()) {
     echo "Falló la conexión:" . mysqli_connect_error();
}


$sql = "SELECT *
FROM   precios
ORDER  BY fecha DESC
LIMIT  1";

$query  = mysqli_query($con, $sql);
$fila   = mysqli_fetch_array($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="es-MX">

<head>

     <title>UGRPM</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="Unión Ganadera Regional de Porcicultores del Estado de Michoacán" />
     <meta property="og:locale" content="es_MX" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="Unión Ganadera Regional de Porcicultores del Estado de Michoacán">
     <meta property="og:description" content="Representamos a los porcicultores organizados del Estado a nivel municipal, estatal y federal, en beneficio de la porcicultura, así como en foros e instituciones a nivel internacional.">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <meta property="og:url" content="https://ugrpm.com/">
     <meta property="og:site_name" content="Unión Ganadera Regional de Porcicultores">
     <meta name="twitter:card" content="summary_large_image" />
     <meta name="twitter:title" content="Unión Ganadera Regional de Porcicultores del Estado de Michoacán">
     <meta name="twitter:description" content="Representamos a los porcicultores organizados del Estado a nivel municipal, estatal y federal, en beneficio de la porcicultura, así como en foros e instituciones a nivel internacional.">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <link href="images/icon.webp" rel="icon">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand">
                         <img src="images/logo.png" class="img-responsive" alt="UGRPM" style="width: 40%;">
                    </a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="#about" class="smoothScroll">Nosotros</a></li>
                         <li><a href="#price" class="smoothScroll">Precio del cerdo</a></li>
                         <li><a href="#courses" class="smoothScroll">Boletín Informativo</a></li>
                         <li><a href="#testimonial" class="smoothScroll">Contacto</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home">
          <div class="row">

               <div class="owl-carousel owl-theme home-slider">

                    <div class="item item-first">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1></h1>
                                        <h3>
                                             <a rel="nofollow"></a>
                                        </h3>
                                        <a href="boletin/congreso.pdf" class="section-btn btn btn-default smoothScroll" target="_blank" style="background: #733121;">Ver
                                             invitación completa</a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-second">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Conoce el precio del cerdo</h1>
                                        <h3>Actualizado al <?php echo utf8_encode($fila['fecha']); ?>.</h3>
                                        <a href="#price" class="section-btn btn btn-default smoothScroll">
                                             Ver precio
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="item item-third">
                         <div class="caption">
                              <div class="container">
                                   <div class="col-md-6 col-sm-12">
                                        <h1>Peste Porcina Africana</h1>
                                        <h3>La peste porcina africana es una enfermedad hemorrágica altamente contagiosa
                                             que afecta a cerdos domésticos y silvestres, ocasionando graves pérdidas
                                             económicas y productivas.
                                             <a rel="nofollow"></a>
                                        </h3>
                                        <a href="https://www.oie.int/es/enfermedad/peste-porcina-africana/" class="section-btn btn btn-default smoothScroll" target="_blank">Ver
                                             más</a>
                                   </div>
                              </div>
                         </div>
                    </div>


               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="section-title">
                         <h2>Unión Ganadera Regional de Porcicultores de Michoacán</h2>
                    </div>
                    <div class="col-md-7 col-sm-12">
                         <div class="about-info">
                              <h2>Nuestra Misión</h2>

                              <figure>
                                   <!--<span><i class="fa fa-users"></i></span>-->
                                   <figcaption>
                                        <h4>Representar a los porcicultores organizados del Estado a nivel municipal,
                                             estatal y federal, en beneficio de la porcicultura, así como en foros e
                                             instituciones a nivel internacional.</h4>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <img src="images/cerdito.webp" class="img-responsive" alt="UGRPM" style="
                              border-radius: 50%;
                              height: 250px;
                              width: 300px;
                              -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.45);
                              -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.45);
                              box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.45);
                          ">
                    </div>

               </div>
          </div>
     </section>


     <!-- PRICE -->
     <section id="price">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Precio del Cerdo <small>Actualizado al <?php echo utf8_encode($fila['fecha']); ?></small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image1.webp" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Cerdo de linea</h3>
                                   <span><b>$<?php echo utf8_encode($fila['cerdo_linea']); ?></b></span>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image2.webp" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Hembra Multípara</h3>
                                   <span><b>$<?php echo utf8_encode($fila['hembra_multipara']); ?></b></span>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image3.webp" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Semental de desecho</h3>
                                   <span><b>$<?php echo utf8_encode($fila['semental']); ?></b></span>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/author-image4.webp" class="img-responsive" alt="">
                              </div>
                              <div class="team-info">
                                   <h3>Lechón</h3>
                                   <span><b>$<?php echo utf8_encode($fila['lechon']); ?></b></span>
                              </div>
                         </div>
                    </div>
               </div>
               <p>*Los precios aquí presentados son únicamente de referencia estadística</p>
          </div>
     </section>


     <!-- Noticias -->
     <!-- The Modal -->
     <div id="not1" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not1')">&times;</span>
               <h3>ASAMBLEA GENERAL ORDINARIA ANUAL 2020 DE LA ASOCIACIÓN
                    GANADERA LOCAL DE PORCICULTORES DE LA PIEDAD</h3>
               <p></p>
               <p>Celebración de la asamblea anual, una vez convocada, se llevó a cabo de acuerdo a la ley, con la
                    presencia de 26 productores porcícolas, en las instalaciones de Club raqueta sol La Piedad AC.
                    Cumpliendo así con el reglamento de la ley de organizaciones ganaderas y artículos de sus estatutos
                    internos.

                    En el punto VII del orden del día elección del consejo directivo: quedo de la siguiente manera
                    Presidente Lic. Víctor Hugo Salvador Pérez León, Secretario Ernesto Macias Pérez y Tesorero C.P.
                    Pedro Aceves García.
               </p>
               <img src="images/courses-image1.webp" class="img-responsive zoom" alt="">
          </div>

     </div>

     <div id="not2" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not2')">&times;</span>
               <h3>CURSO DE MANEJO DE CERDAS Y LECHONES IMPARTIDA POR EL MVZ JUAN JOSÉ MAQUEDA ACOSTA</h3>
               <p></p>
               <p>Tema organizado por Bayer de México, de las asociaciones de porcicultores de Santa Ana y la Piedad, El
                    31 de Julio y 1° de Agosto, se llevo acabo el curso de Curso de Manejo de cerdas y lechones
                    impartida por el MVZ Juan José Maqueda Acosta en el Hotel Holiday inn en la que asistieron 48
                    participantes trabajadores y médicos veterinarios entre otros, además estuvieron presentes personal
                    de Bayer quien patrocino el ponente, los presidentes de las asociaciones de Santa y La Piedad, al
                    igual que los gerentes de las mismas, se cumplió con el objetivo propuesto de capacitación al
                    personal, al final se dieron sus constancias de participación.</p>
          </div>

     </div>

     <div id="not3" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not3')">&times;</span>
               <h3>Reunión con el Lic. Heriberto Hernández Cárdenas</h3>
               <p>Presidente de OPORMEX</p>
               <video src="videos/opormex.mp4" width="100%" height="480" controls></video>
          </div>

     </div>

     <div id="not4" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not4')">&times;</span>
               <h3>Reunión SEDRUA Peste porcina africana</h3>
               <p></p>
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <img src="images/cedro1.jfif" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/cedro2.jfif" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/cedro3.jfif" width="100%" class="zoom">
                         </div>
                    </div>
               </div>
          </div>

     </div>

     <div id="not5" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not5')">&times;</span>
               <h3>Reunión mensual con asociaciones</h3>
               <p></p>
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <img src="images/mensual1.jfif" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/mensual2.jfif" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/mensual3.jfif" width="100%" class="zoom">
                         </div>
                    </div>
               </div>
          </div>

     </div>

     <div id="not6" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not6')">&times;</span>
               <h3>Reunión con Banco del Bajío y FIRA</h3>
               <p></p>
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <img src="images/fira.jfif" width="100%" class="zoom">
                         </div>
                    </div>
               </div>
          </div>

     </div>

     <div id="not7" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
               <span class="close" onclick="cierraNoticia('not7')">&times;</span>
               <h3>Reunión mensual de octubre</h3>
               <p></p>
               <div class="container">
                    <div class="row">
                         <div class="col-md-4">
                              <img src="images/oct (1).jpeg" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/oct (2).jpeg" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/oct (3).jpeg" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/oct (4).jpeg" width="100%" class="zoom">
                         </div>
                         <div class="col-md-4">
                              <img src="images/oct (5).jpeg" width="100%" class="zoom">
                         </div>
                    </div>
               </div>
          </div>

     </div>

     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Boletín Informativo</h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <!--<div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image1.webp" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>ASAMBLEA GENERAL ORDINARIA ANUAL 2020 DE LA ASOCIACIÓN
                                                            GANADERA LOCAL DE PORCICULTORES DE LA PIEDAD</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not1')"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>-->

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/peste2.png" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 13 / 10 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>MVZ. Miguel Ángel Camacho Luna.
                                                            Coordinador de Zona CPA en Querétaro.</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a href="boletin/peste.pdf" target="_blank"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/opormex.png" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 21 / 09 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Boletín Opormex - Semana 36</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a href="boletin/bol 36.pdf" target="_blank"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/se_busca.png" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 21 / 09 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>¡Se busca!</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a href="boletin/CARTEL SE BUSCA PPA OPORMEX.pdf" target="_blank"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/enf_rojas.png" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 21 / 09 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Enfermedades rojas del cerdo</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a href="boletin/Enfermedades rojas del cerdo - Cuadríptico (OPORMEX).pdf" target="_blank"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/peste.png" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 21 / 09 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Peste Porcina Africana</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a href="boletin/Peste porcina africana - Cuadríptico (OPORMEX).pdf" target="_blank"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/slider-image2.webp" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 15 / 08 / 2021</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Peste porcina africana</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a href="https://www.oie.int/es/enfermedad/peste-porcina-africana/" target="_blank"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <!--<div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/courses-image3.webp" class="img-responsive" alt="">
                                                  </div>
                                                  <div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2020</span>
                                                  </div>
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>ASAMBLEA ANUAL Y CAMBIO DE MESA DIRECTIVA DE LA UNIÓN</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not3')"><span>Ver más</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>-->
                         </div>

                    </div>
               </div>


               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Galería</h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/oct (1).jpeg" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2021</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Reunión mensual de octubre</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not7')"><span>Ver fotos</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/reunion_opormex.png" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2021</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Reunión con el Lic. Heriberto Hernández Cárdenas</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not3')"><span>Ver video</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/cedro2.jfif" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2021</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Reunión SEDRUA Peste porcina africana</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not4')"><span>Ver fotos</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/mensual1.jfif" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2021</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Reunión mensual Unión</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not5')"><span>Ver fotos</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                  <div class="courses-image">
                                                       <img src="images/fira.jfif" class="img-responsive" alt="">
                                                  </div>
                                                  <!--<div class="courses-date">
                                                       <span><i class="fa fa-calendar"></i> 19 / 08 / 2021</span>
                                                  </div>-->
                                             </div>

                                             <div class="courses-detail">
                                                  <h3><a>Reunión con Banco del Bajío y FIRA</a></h3>
                                             </div>

                                             <div class="courses-info">
                                                  <div class="courses-price">
                                                       <a onclick="abreNoticia('not6')"><span>Ver fotos</span></a>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                         </div>

                    </div>
               </div>

     </section>


     <!-- TESTIMONIAL -->
     <section id="testimonial">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Congreso nacional de Porcicultores</h2>
                         </div>
                         <center>
                              <a href="boletin/congreso.pdf" target="_blank">
                                   <img src="images/congreso2.png" alt="Click para más información" width="50%">
                              </a>
                         </center>
                    </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="section-title">
                              <h2>Síguenos en Facebook</h2>
                         </div>
                         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fugrpm%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=3059364544386376" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share">
                         </iframe>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="section-title">
                              <h2>Mapa de ubicación</h2>
                         </div>
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.7870259377733!2d-102.04243488535545!3d20.350415086369736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842c1e4fa859ae7b%3A0xf3368476cec559b2!2sUni%C3%B3n%20Ganadera%20Regional%20del%20Estado!5e0!3m2!1ses-419!2smx!4v1629391360614!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                         </iframe>
                    </div>
               </div>
     </section>



     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Dirección</h2>
                              </div>
                              <address>
                                   <p>Blvd. Lázaro Cárdenas No. 1329, CP. 59377 La Piedad Cavadas, Michoacán de Ocampo,
                                        Mexico</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/ugrpm" target="_blank" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                              </ul>

                              <div class="copyright-text">
                                   <p>Copyright &copy; 2021 UGRPM</p>
                                   <p>Diseñado por <a href="https://hoppedmx.com/">HoppedMX</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contacto</h2>
                              </div>
                              <address>
                                   <a href="tel:3525260666">Teléfono: 352 526 0666</a>
                                   <p><a href="mailto:ugrpm@live.com.mx">Correo: ugrpm@live.com.mx</a></p>
                              </address>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Iniciar sesión como administrador</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="login.php" method="post">
                                             <input type="text" class="form-control" placeholder="Usuario" name="usuario" id="usuario" required>
                                             <input type="password" class="form-control" placeholder="Contraseña" name="pass" id="pass" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Ingresar">
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script>
          function abreNoticia(id) {
               // Get the modal
               var modal = document.getElementById(id);

               // Get the button that opens the modal
               //var btn = document.getElementById("myBtn");

               // Get the <span> element that closes the modal
               var span = document.getElementsByClassName("close")[0];

               // When the user clicks the button, open the modal 
               //btn.onclick = function () {
               modal.style.display = "block";
               //}

               // When the user clicks on <span> (x), close the modal
               //span.onclick = function () {
               //                    modal.style.display = "none";
               //             }

               // When the user clicks anywhere outside of the modal, close it
               window.onclick = function(event) {
                    if (event.target == modal) {
                         modal.style.display = "none";
                    }
               }
          }

          function cierraNoticia(id) {
               // Get the modal
               var modal = document.getElementById(id);
               modal.style.display = "none";
          }
     </script>

     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>