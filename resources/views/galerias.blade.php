<!doctype html>
<html class="no-js" lang="en">

    @include("include.head")
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "galerias - DIICC UDA";
    ?>
    <body>
        <!-- Header -->
        @include("include/header")
        <!-- Header Area End -->
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Galerías</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin Banner -->
        <!-- Album Start -->
        <div class="galeria">
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">         
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/galeria.php" target="_blank">
                                    <img src="img/galeria/img1.jpeg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Bienvenida C2023</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Album End -->
            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/titulaciones.php" target="_blank">
                                    <img src="img/titulos/img1.jpg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Titulaciones</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->

            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/actividades.php" target="_blank">
                                    <img src="img/actividades/img1.jpg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Actividades</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->

            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/clases.php" target="_blank">
                                    <img src="img/clases/img1.JPG" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Clases</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->


            <!-- Album Start -->
            <div class="teacher-area pt-150 pb-105">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-teacher mb-45">
                                <div class="single-teacher-img">
                                    <a title="galeria" href="https://diicc.uda.cl/visitas.php" target="_blank">
                                    <img src="img/salidas/img1.jpeg" alt="teacher">  
                                </div>
                                <div class="single-teacher-content text-center">
                                    <h2><a>Salidas a Terreno</a></h2>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Album End -->

        </div> <!--fin galeria-->

            <!-- Contenedor para el widget de Instagram -->
        <div class="instagram-container">
            <!-- Código del widget de Instagram con un grid de 3x3 -->
            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/diicc_uda/" data-instgrm-version="12"></blockquote>
            <script async src="https://www.instagram.com/embed.js"></script>
        </div>




        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
    </body> 
</html>   