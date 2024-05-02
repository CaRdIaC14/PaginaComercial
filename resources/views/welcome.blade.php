<!doctype html>
<html class="no-js" lang="es">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "UDA - Departamento de Ingeniería Informática y Ciencias de la Computación";
    ?>
    @include("include.head")
 <meta charset="UTF-8">
<body>

    <body>
        <!-- Header -->
        @include("include/header")
        <!-- Header Area End -->
        <!-- Background Area Start -->
        <section id="slider-container" class="slider-area">
        <div class="slider-owl owl-theme owl-carousel">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active" style="border:1px solid #364c59;"></li>
                    <li data-target="#myCarousel" data-slide-to="1" style="border:1px solid #364c59;"></li>
                    <li data-target="#myCarousel" data-slide-to="2" style="border:1px solid #364c59;"></li>
                                                              
                </ol>
                <!--<div class="slider-owl owl-theme owl-carousel">--> <!-- cambiar -->
                <!-- Start Slingle Slide -->
                <div class="carousel-inner">
                    <div class="item active" >
                        <div class="notice-left">
                            <div class="single-slide item" style="background-image: url(img/slide/img1.jpg)">
                                <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <h3>Departamento de </h3>
                                                        <h2>Ingeniería Comercial</h2>
                                                        <p>Universidad de Atacama</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                        </div>
                    </div>
                            <!-- End Slingle Slide -->
                            <!-- Start Slingle Slide -->
                    <div class="item">
                        <div class="notice-left">
                            <div class="single-slide item" style="background-image: url(img/slide/img2.jpg)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper text-left">
                                                    <div class="slide-content">
                                                        <h3>MALLA </h3>
                                                        <h2>CURRICULAR </h2>
                                                        <p>Conoce la malla de nuestra carrera </p>
                                                        <a class="default-btn" href="malla1.php">Ver malla</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                        </div>
                    </div>
                <!-- End Slingle Slide -->
                <!-- Start Slingle Slide -->
                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/Coordinadores21.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <!--<h3>PROFESORES </h3>
                                                        <h2> </h2>
                                                        <p>Conoce a nuestros profesores </p>-->
                                                        <a class="default-btn" href="academicos.php">Ver Académicos</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                            <!-- End Slingle Slide -->
                        </div>
                    </div>

                    <!-- Start Slingle Slide  ENCUESTA-->
                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/EncuestaExAlumnos.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">
                                                        <a class="default-btn" href="https://es.surveymonkey.com/r/Y6FG8YL">Encuesta</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                            <!-- End Slingle Slide -->
                        </div>
                    </div>

                    <div class="item">
                        <div class="notice-left">

                            <div class="single-slide item" style="background-image: url(img/slide/TituloFlexible.png)">
                            <!-- Start Slider Content -->
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 col-md-offset-left-5">
                                                <div class="slide-content-wrapper">
                                                    <div class="slide-content">

                                                        <a class="default-btn" href="https://diicc.uda.cl/noticia.php?id=19">Información</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Start Slider Content -->
                            </div>
                            <!-- End Slingle Slide -->
                        </div>
                    </div>

                </div>
                        <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>-->
            </div>
        </div>
        </section>
            
        <!-- Background Area End -->

        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>Panel Informativo</h2>
                </div>
            </div>
            <img src="{{asset('img/panelInformativo/panelInformativo.png')}}" alt="" width="1500"> 

        </div>

        <!-- carrusel -->
        <div class="rowtrans">
            <div class="rowtrans-title text-center">
                <h2>NOTICIAS</h2>
            </div>                
        </div> 
         <!-- Panel de noticias -->
            
        <div class="container">
            <div class="row">            
                        
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active" style="border:1px solid #254C5A;"></li>
                        <li data-target="#myCarousel" data-slide-to="1" style="border:1px solid #254C5A;"></li>
                        <li data-target="#myCarousel" data-slide-to="2" style="border:1px solid #254C5A;"></li>
                                                              
                    </ol>

                            <!-- Diapositivas Noticias-->
                    <div class="carousel-inner">
                        <div class="item active" >
                            <div class="notice-left">
                        
                               
                            </div>
                        </div>

                        <div class="item">
                            <div class="notice-left">
                        
                               
                            </div>
                                    <!--<hr class="solid" style="border-top: 3px solid #bbb;">-->     
                        </div>
                                    
                                

                        <div class="item">
                            <div class="notice-left">
                        
                                
                            </div>
                    
                        </div>
                             
                                
                    </div> <!--cierre notice-->
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
        </div>
        <!-- Notice End -->    
           
        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>ADMISIÓN 2024</h2>
                </div>                
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/0B_pQajSHaE?si=Dc8qrDnxrTy2hoaE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        
        <!-- Courses Area Start -->

            <div class="container" style="margin-top: 3cm">
                <div class="row" id = "card-row" style="margin-top: -50px; margin-bottom: 30px">
                    <div class="card" id= "card1">
                        <a href="https://plataformavirtual.uda.cl/calendario-academico-2023/">
                            <img src="{{asset('img/icons/calendario.png')}}" alt="" width="250">
                            <h3>Calendatio academicos</h3>
                        </a>
                    </div>
                    <!-- fin tarjeta 1-->

                    <div class="card" id= "card2">
                        <a href="http://www.ingeco.uda.cl/images/malla_por_competencias_ingeco.pdf">
                            <img src="{{asset('img/icons/papel.png')}}" alt="" width="250">
                            <h3>Malla Curricullar</h3>
                        </a>
                    </div>
                    <!-- fin tarjeta 2-->

                    <div class="card" id= "card3">
                        <a href=""> 
                            <img src="{{asset('img/icons/calendarioReloj.png')}}" alt="" width="250">
                            <h3>Horario de Clases</h3>
                        </a>
                    </div>
                    <!-- fin tarjeta 3-->
                </div>
            </div>


        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->

        
    </body>

</html>