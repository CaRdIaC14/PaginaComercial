<!doctype html>
<html class="no-js" lang="en">
    @include("config.config")
    @include("include.functions")
    @include("include.head")
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "titulaciones - DIICC UDA";
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
                                    <h2>Titulaciones</h2> 
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
                <img src="img/titulos/img2.jpg" alt="" data-img-mostrar="0">
                <img src="img/titulos/img3.jpg" alt="" data-img-mostrar="1">
                <img src="img/titulos/img4.jpg" alt="" data-img-mostrar="2">
                <img src="img/titulos/img6.jpg" alt="" data-img-mostrar="3">
                
            </div>
            
            <div class="columna">
                <img src="img/titulos/img7.jpg" alt="" data-img-mostrar="4">
                <img src="img/titulos/img8.jpg" alt="" data-img-mostrar="5">
                <img src="img/titulos/img9.jpg" alt="" data-img-mostrar="6">
                <img src="img/titulos/img10.jpg" alt="" data-img-mostrar="7">
            </div>
          
            <div class="columna">
                <img src="img/titulos/img11.jpg" alt="" data-img-mostrar="8">
                <img src="img/titulos/img14.jpg" alt="" data-img-mostrar="9">
                <img src="img/titulos/img15.jpg" alt="" data-img-mostrar="10">
                <img src="img/titulos/img16.JPG" alt="" data-img-mostrar="11">
            </div>

            <div class="columna">
                <img src="img/titulos/img17.JPG" alt="" data-img-mostrar="12">
                <img src="img/titulos/img18.JPG" alt="" data-img-mostrar="13">
                <img src="img/titulos/img19.JPG" alt="" data-img-mostrar="14">
                <img src="img/titulos/img20.JPG" alt="" data-img-mostrar="15">
                <img src="img/titulos/img25.JPG" alt="" data-img-mostrar="20">
            </div>
            <div class="columna">
                <img src="img/titulos/img21.JPG" alt="" data-img-mostrar="16">
                <img src="img/titulos/img22.JPG" alt="" data-img-mostrar="17">
                <img src="img/titulos/img23.JPG" alt="" data-img-mostrar="18">
                <img src="img/titulos/img24.jpeg" alt="" data-img-mostrar="19">
                <img src="img/titulos/img26.jpeg" alt="" data-img-mostrar="21">   
            </div>

        </section>
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
        <script src="js/script2.js"></script>
    </body>
</html>