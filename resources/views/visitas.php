<!doctype html>
<html class="no-js" lang="es">
    @include("config.config")
    @include("include.functions")
    @include("include.head")
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "Salidas - DIICC UDA";
    ?>
    <body>
        <!-- Header -->
        @include("include/header")
        <!-- Header Area End -->
        <div class="overlay">
            <div class="slideshow">
                <span class="btn_cerrar">&times;</span>
                <div class="botones adelante">
                    <i class="mdi mdi-arrow-right-circle-outline">
                    </i>
                </div>
                <div class="botones atras">
                    <i class="mdi mdi-arrow-left-circle-outline"></i>
                </div>
                <img src="" alt="" id="img_slideshow">
            </div>
        </div>
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Salidas a terreno</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin Banner -->
        <span class = "linea"></span>
        <section class = "galerias">
            <div class="columna">
                <img src="img/salidas/img1.jpeg" alt="" data-img-mostrar="0">
                <img src="img/salidas/img6.jpeg" alt="" data-img-mostrar="5">
                
            </div>
            <div class="columna">
                <img src="img/salidas/img2.jpeg" alt="" data-img-mostrar="1">
                <img src="img/salidas/img7.JPG" alt="" data-img-mostrar="6"> 
            </div>
            <div class="columna">
                <img src="img/salidas/img3.jpeg" alt="" data-img-mostrar="2">
            </div>
            <div class="columna">
                <img src="img/salidas/img4.jpeg" alt="" data-img-mostrar="3">
            </div>
            <div class="columna">
                <img src="img/salidas/img5.jpeg" alt="" data-img-mostrar="4">
            </div>

        </section>
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
        <script src="js/script1.js"></script>
    </body>
</html>