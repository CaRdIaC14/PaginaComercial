<!doctype html>
<html class="no-js" lang="es">
    <!-- @include("include.functions") -->
    @include("include.head")
<?php
    // session_start();
    // $_SESSION['root'] = dirname(__FILE__);
    // $file = __FILE__;
    // $pagetitle = "Departamento - DIICC UDA";
?>

    
<body>

    <!-- Header -->
    @include("include/header")
    <!-- Header Area End -->

    
    <!-- Inicio de Historia -->
    <div class="historia-area pt-25 pb-70">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="about-content">
                            <h2>Historia</h2>
                        </div>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="about-content">
                            <p>El proyecto de la Carrera de Ingeniería Comercial se aprobó el año 2005 por el
                                Decreto N° 380 y se gestionó su dictación en el año 2009. Como estructura
                                para sustentar esta carrera, la dirección de la Universidad creó la Escuela
                                Docente de Ingeniería Comercial según el Decreto N° 448. La dictación de
                                Ingeniería Comercial comenzó el año 2009 con su primera cohorte de 43
                                alumnos y en la actualidad (primer semestre del 2016) la carrera cuenta con
                                226 alumnos regulares (considerando todos los niveles) y 18 alumnos titulados
                                a la fecha.
                                Como avance en el posicionamiento de la carrera, en el año 2014 se
                                presentaron los antecedentes al Colegio de Ingenieros de Chile A.G., quienes
                                en la sesión 02/2015 del día 18 de marzo aprobaron incluir la carrera de
                                Ingeniería Comercial de la UDA en los títulos y universidades que forman el
                                registro de dicho Colegio. En el año 2016 se aprobó la creación del
                                Departamento de Ingeniería Comercial por Decreto N°03.
                            </p>
                        </div>
                    </div>

                    <!--Imagen del frontis del departamento-->
                    <div id="img_dpto" class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <img id="img_old" src="img/tesis/4.png" class="img-responsive">
                        <h5>Seminario de tesis 2016.</h5>
                    </div>
                    <!--Fin Imagen del frontis del departamento-->

                </div>
                <!--Mision y Vision de la Carrera,junto a los Lineamientos Estrategicos-->

                <div class="row">
                    <!--MISION-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="mision-comercial" class="about-content text-center">
                            <h2>Misión</h2>
                        </div>
                        <p> 
                            Aporta a la profesionalización en la gestión de las organizaciones, mediante la formación de profesionales en el ámbito de las
                            ciencias de la administración, la vinculación con el medio y el desarrollo de la investigación, en estrecha relación con los
                            requerimientos regionales y nacionales.
                        </p>
                    </div>
                    <!--FIN MISION-->
                    <!--VISION-->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="vision-comercial" class="about-content text-center">
                            <h2>Visión</h2>
                        </div>
                        <p>Ser referente a nivel regional y en la macro zona norte como formadores de profesionales calificados, de alta empleabilidad y
                            valorados por él, mediante la utilización de procesos de enseñanza y aprendizaje que cumplan con elevados estándares de
                            calidad y destacar en el ámbito de la investigación por el aporte a los propósitos institucionales
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="valores-comercial" class="about-content text-center">
                            <h2>Valores</h2>
                        </div>
                        <div id="img_valores" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                            <img src="{{asset('img/logo/iconos-valores.png')}}"/>
                        </div>
                    </div>


                </div>
                <!--FIN VISION-->
                
                <!--CARRUSEL-->
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div id="infra-diicc" class="about-content">
                            <h2>xd</h2>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="infraestructura" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-cencer">
                        <div id="infra-diicc" class="about-content">
                        </div>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                                <li data-target="#myCarousel" data-slide-to="7"></li>
                                <li data-target="#myCarousel" data-slide-to="8"></li>
                                <!--Diapositivas para las salas
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                    <li data-target="#myCarousel" data-slide-to="6"></li>
                                    <li data-target="#myCarousel" data-slide-to="7"></li>
                                    -->
                            </ol>

                            <!-- Diapositivas -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="img/tesis/4.png" alt="Olimpo" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio Olimpo</h4>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/dpto/Melquiades.jpg" alt="Melquiades" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio Melquíades</h4>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="img/dpto/Robotica1.jpg" alt="Robotica1" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio de Robótica</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Conectividad1.JPG" alt="Conectividad1" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Laboratorio de Conectividad y Redes</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/SalaEstudio1.JPG" alt="SalaEstudio" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Sala de Estudios</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Auditorio.JPG" alt="Auditorio" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Auditorio</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Magister.JPG" alt="Magister" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Magíster</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/DIICC2.JPG" alt="DIICC2" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Sala Multimedia</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="img/dpto/Salas.JPG" alt="Salas" class="img-responsive">
                                    <div class="carousel-caption">
                                        <h4>Sala de Clases</h4>
                                    </div>
                                </div>
                                <!--Sala de Clases
                                    <div class="item">
                                        <img src="img/dpto/diicc1.jpg" alt="DIICC1" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/diicc2.jpg" alt="DIICC2" class="img-responsive">
                                    </div>
                                    <div class="item">
                                        <img src="img/dpto/diicc3.jpg" alt="DIICC3" class="img-responsive">
                                    </div>
                                    -->
                            </div>
                            <!-- Controles Izquierda y Derecha-->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>


                        </div>
                    </div>
                    <!--FIN CARRUSEL-->
                    
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    @include("include.footer")
    <!-- FOOTER -->


    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>