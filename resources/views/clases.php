<!doctype html>
<html class="no-js" lang="en">
    @include("config.config")
    @include("include.functions")
    @include("include.head")
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "clases - DIICC UDA";

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
                                    <h2>Clases</h2> 
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
                <img src="img/clases/img1.JPG" alt="" data-img-mostrar="0">
                <img src="img/clases/img2.JPG" alt="" data-img-mostrar="1">
                <img src="img/clases/img3.JPG" alt="" data-img-mostrar="2">
                <img src="img/clases/img16.JPG" alt="" data-img-mostrar="15">
            </div>
            <div class="columna">
                <img src="img/clases/img4.JPG" alt="" data-img-mostrar="3">
                <img src="img/clases/img5.JPG" alt="" data-img-mostrar="4">
                <img src="img/clases/img6.JPG" alt="" data-img-mostrar="5">
                
            </div>
            <div class="columna">
                <img src="img/clases/img7.JPG" alt="" data-img-mostrar="6">
                <img src="img/clases/img8.JPG" alt="" data-img-mostrar="7">
                <img src="img/clases/img9.JPG" alt="" data-img-mostrar="8">
            </div>
            <div class="columna">
                <img src="img/clases/img10.JPG" alt="" data-img-mostrar="9">
                <img src="img/clases/img11.JPG" alt="" data-img-mostrar="10">
                <img src="img/clases/img12.JPG" alt="" data-img-mostrar="11">
            </div>
            <div class="columna">
                <img src="img/clases/img13.JPG" alt="" data-img-mostrar="12">
                <img src="img/clases/img14.JPG" alt="" data-img-mostrar="13">
                <img src="img/clases/img15.JPG" alt="" data-img-mostrar="14">
            </div>

        </section>
        
        
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
        <script src="js/script4.js"></script>
    </body>
</html>