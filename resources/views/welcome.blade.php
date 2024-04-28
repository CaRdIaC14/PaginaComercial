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
                                                        <h3>DEPARTAMENTO DE INGENIERÍA </h3>
                                                        <h2>INFORMÁTICA Y CIENCIAS DE LA COMPUTACIÓN</h2>
                                                        <p>Universidad de Atacama, Copiapó, Atacama, Chile.</p>
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
           
        
        
        
        <!-- Courses Area Start -->

        <div class="courses-area pt-30 pb-40 text-center">
            <div class="rowtrans">
                    <div class="rowtrans-title">
                        <h2 style = "padding: 20px">ÁREAS DE DESARROLLO</h2>
                    </div>                
            </div>
        </div>

            <div class="container">
                <div class="row" id = "card-row" style="margin-top: -50px; margin-bottom: 30px">
                    <div class="card" id= "card1">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="head">
                                    <div class="circle"></div>
                                        <div class="img">
                                            <img src="{{asset('img/areas/SoftwareEngineering/img1.jpg')}}" alt="course">
                                        </div>
                                        <div style="padding-top: 280px; font-weight: bold;">
                                            <h3 style = "font-weight: bold; color: black; ">Inteligencia de Máquinas</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description">
                                        <p>La ciencia de computación ha facilitado la creación de tecnologías con capacidades de procesamiento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- fin tarjeta 1-->

                    <div class="card" id= "card2">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="head">
                                    <div class="circle"></div>
                                        <div class="img">
                                            <img src="{{asset('img/areas/ArtificialIntelligent/img1.jpg')}}" alt="course">
                                        </div>
                                        <div style="padding-top: 280px; font-weight: bold;">
                                            <h3 style = "font-weight: bold; color: black; ">Ingeniería de Software</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description">
                                        <p>La Ingeniería de Software comprende procesos, metodologías, métodos, herramientas, y personas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- fin tarjeta 2-->

                    <div class="card" id= "card3">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <div class="head">
                                    <div class="circle"></div>
                                        <div class="img">
                                            <img src="{{asset('img/areas/GestionTI/img1.jpg')}}" alt="course">
                                        </div>
                                        <div style="padding-top: 280px; font-weight: bold;">
                                            <h3 style = "font-weight: bold; color: black; ">Gestión TI</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="description">
                                        <p>La información cada vez más valiosa en las organizaciones requiere de procesos, tecnologías y técnicas adecuadas para su procesamiento.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- fin tarjeta 3-->
                </div>
            </div>

          
         <!-- Testimonial Area Start usado para noticias destacada instagram-->
        <div class="testimonial-area pt-110 pb-105 text-center">
            <div class="container tres-columnas">
                    <div class="row">
                        <!--<div class="testimonial-owl owl-theme owl-carousel">-->
                            <div class="col-md-8 col-md-offset-2 col-sm-12">
                                <div class="single-testimonial col-md-6"><!--cambios-->
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="{{asset('img/academicos/robots.jpg')}}" alt="academicos">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>ROBÓTICA EDUCATIVA</h4>
                                            <p>Talleres de Robótica diseñados para el acercamiento hacia la programación, el análisis y solución de
                                                problemáticas desafiantes.
                                            </p> 
                                            <p>Es un campo de la ingeniería y la ciencia que se centra en el diseño, construcción y operación
                                                de robots. </p>
                                        
                                        </div>
                                    </div>
                                    
                                
                                </div>
                                <div class="single-testimonial col-md-6"><!--cambios-->
                                    <div class="testimonial-info">
                                        <div class="testimonial-img">
                                            <img src="{{asset('img/academicos/code.jpg')}}" alt="academicos">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>Code Club UDA</h4>
                                            <p>Code Club UDA versión 2023 con alumnado de COANIL</p> 
                                            <p>Iniciativa que impulsa el departamento de Ingeniería en Informática y Ciencias de la 
                                            Computación desde el año 2014, para educar a escolares en lenguaje de programación</p>
                                        
                                        </div>
                                    </div>
                                    
                                
                                </div>
                            
                            </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>

        <!--Admision-->

        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>ADMISIÓN 2024</h2>
                </div>                
            </div>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/IDjY341K8Wg?si=MjzCRre_oM4r4Rz_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </div>

        <!--7 consejos-->

        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>7 CONSEJOS PARA POTENCIAR TUS ESTUDIOS</h2>
                </div>                
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gfGYPyeZ_qY?si=U_wvWEwK3iw0PfFE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            

        </div>

        <!-- IA-->
        <div class="event-area one text-center pt-140 pb-50" id="admision">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>LA IA Y SU IMPACTO EN LA SOCIEDAD</h2>
                </div>                
            </div>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/yjPClOYcAsI?si=TfAkZlQb7WynAlbm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            

        </div>

        <!-- Event Area Start -->
        <div class="event-area one text-center pt-140 pb-50" id="eventos">
            <div class="rowtrans">
                <div class="rowtrans-title">
                    <h2>PRÓXIMOS EVENTOS</h2>
                </div>                
            </div>
            
            <div class="container">
               
                <div class="row">
                   
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Area End -->
        
         <!-- Blog Area Start ultimas publicaciones-->
         <div class="rowtrans">
            <div class="rowtrans-title text-center">
                <h2>ÚLTIMAS PUBLICACIONES Y TÉSIS</h2>
            </div>                
        </div> 
         <div class="blog-area pt-50 pb-50">
            <div class="container">
                
                <div class="row">
                
                    
                </div>
            </div>
        </div>
        <!-- Blog Area End -->
        


        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->

        
    </body>

</html>