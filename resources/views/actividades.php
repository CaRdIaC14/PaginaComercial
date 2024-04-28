<!doctype html>
<html class="no-js" lang="en">
    @include("config.config")
    @include("include.functions")
    @include("include.head")
    <?php
        session_start();
        $file = __FILE__;
        $pagetitle = "actividades - DIICC UDA";

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
                                    <h2>Actividades</h2> 
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
                <img src="img/actividades/img1.jpg" alt="" data-img-mostrar="0">
                <img src="img/actividades/img2.jpg" alt="" data-img-mostrar="1">
                <img src="img/actividades/img3.jpg" alt="" data-img-mostrar="2">
                <img src="img/actividades/img4.jpg" alt="" data-img-mostrar="3">
                <img src="img/actividades/img5.jpg" alt="" data-img-mostrar="4">
                <img src="img/actividades/img6.jpg" alt="" data-img-mostrar="5">
                <img src="img/actividades/img7.jpg" alt="" data-img-mostrar="6">
                <img src="img/actividades/img8.jpg" alt="" data-img-mostrar="7">
                <img src="img/actividades/img9.jpg" alt="" data-img-mostrar="8">
                <img src="img/actividades/img10.jpg" alt="" data-img-mostrar="9">
            </div>

            <div class="columna">
                <img src="img/actividades/img11.jpg" alt="" data-img-mostrar="10">
                <img src="img/actividades/img12.jpg" alt="" data-img-mostrar="11">
                <img src="img/actividades/img13.jpg" alt="" data-img-mostrar="12">
                <img src="img/actividades/img14.jpg" alt="" data-img-mostrar="13">
                <img src="img/upload/noticias/CodeclubNot.jpg" alt="" data-img-mostrar="14">
                <img src="img/Bienestar/img1.jpeg" alt="" data-img-mostrar="15">
                <img src="img/Bienestar/img2.jpeg" alt="" data-img-mostrar="16">
                <img src="img/Bienestar/img3.jpeg" alt="" data-img-mostrar="17">
                <img src="img/Bienestar/img4.jpeg" alt="" data-img-mostrar="18">
                <img src="img/Bienestar/img5.jpeg" alt="" data-img-mostrar="19">
                   
            </div>

            <div class="columna">
                <img src="img/Bienestar/img6.jpeg" alt="" data-img-mostrar="20">
                <img src="img/Bienestar/img7.jpeg" alt="" data-img-mostrar="21">
                <img src="img/visitas/img1.jpeg" alt="" data-img-mostrar="22">
                <img src="img/visitas/img2.jpeg" alt="" data-img-mostrar="23">
                <img src="img/visitas/img3.jpeg" alt="" data-img-mostrar="24">
                <img src="img/visitas/img4.jpeg" alt="" data-img-mostrar="25">
                <img src="img/visitas/img5.jpeg" alt="" data-img-mostrar="26">
                <img src="img/visitas/img6.jpeg" alt="" data-img-mostrar="27">
                <img src="img/actividades/img16.jpeg" alt="" data-img-mostrar="28">
                <img src="img/actividades/img17.jpeg" alt="" data-img-mostrar="29">
                <img src="img/actividades/img18.jpeg" alt="" data-img-mostrar="30">
                
            </div>

            <div class="columna">
                <img src="img/actividades/img19.jpeg" alt="" data-img-mostrar="31">
                <img src="img/actividades/img20.jpeg" alt="" data-img-mostrar="32">
                <img src="img/actividades/img21.jpeg" alt="" data-img-mostrar="33">
                <img src="img/actividades/img22.jpeg" alt="" data-img-mostrar="34">
                <img src="img/actividades/img23.jpeg" alt="" data-img-mostrar="35">  
                <img src="img/actividades/img24.jpeg" alt="" data-img-mostrar="36">
                <img src="img/actividades/img25.jpeg" alt="" data-img-mostrar="37">
                <img src="img/actividades/img26.jpeg" alt="" data-img-mostrar="38">
                <img src="img/actividades/img27.jpeg" alt="" data-img-mostrar="39">
                <img src="img/actividades/img28.jpeg" alt="" data-img-mostrar="40">
                
            </div>

            <div class="columna">
            <img src="img/actividades/img29.jpeg" alt="" data-img-mostrar="41">
                <img src="img/actividades/img30.jpeg" alt="" data-img-mostrar="42">
                <img src="img/actividades/img31.jpeg" alt="" data-img-mostrar="43">
                <img src="img/actividades/img32.jpeg" alt="" data-img-mostrar="44">
                <img src="img/actividades/img33.jpeg" alt="" data-img-mostrar="45">
                <img src="img/actividades/img34.jpeg" alt="" data-img-mostrar="46">
                <img src="img/actividades/img35.jpeg" alt="" data-img-mostrar="47">
                <img src="img/actividades/img36.jpeg" alt="" data-img-mostrar="48">
                <img src="img/actividades/img37.jpeg" alt="" data-img-mostrar="49">
                <img src="img/actividades/img38.jpeg" alt="" data-img-mostrar="50">
                <img src="img/actividades/img39.jpeg" alt="" data-img-mostrar="51">
                <img src="img/actividades/img40.jpeg" alt="" data-img-mostrar="52">
                <img src="img/actividades/img41.jpeg" alt="" data-img-mostrar="53">
                <img src="img/actividades/img42.jpeg" alt="" data-img-mostrar="54">
                <img src="img/actividades/img43.jpeg" alt="" data-img-mostrar="55">
                <img src="img/actividades/img44.jpeg" alt="" data-img-mostrar="56">   
            </div>

        </section>
        
        
        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
        <script src="js/script3.js"></script>
    </body>
</html>