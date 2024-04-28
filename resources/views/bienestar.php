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
		<!-- Banner Area Start -->
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Semana Bienestar</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin Banner -->

        <span class = "linea"></span>
        <section class = "galeria">
            <a href="#image1"><img src="img/Bienestar/img1.jpeg" alt=""></a>
            <a href="#image2"><img src="img/Bienestar/img2.jpeg" alt=""></a>
            <a href="#image4"><img src="img/Bienestar/img4.jpeg" alt=""></a>
            <a href="#image3"><img src="img/Bienestar/img3.jpeg" alt=""></a>
            <a href="#image5"><img src="img/Bienestar/img5.jpeg" alt=""></a>
            <a href="#image6"><img src="img/Bienestar/img6.jpeg" alt=""></a>
            <a href="#image7"><img src="img/Bienestar/img7.jpeg" alt=""></a>

        </section>

        <article class="light-box" id="image1">
            <a href="#image1" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img1.jpeg" alt="">
            <a href="#image2" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>

        <article class="light-box" id="image2">
            <a href="#image1" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img2.jpeg" alt="">
            <a href="#image3" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>

        <article class="light-box" id="image3">
            <a href="#image2" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img3.jpeg" alt="">
            <a href="#image4" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>

        <article class="light-box" id="image4">
            <a href="#image3" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img4.jpeg" alt="">
            <a href="#image5" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>

        <article class="light-box" id="image5">
            <a href="#image4" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img5.jpeg" alt="">
            <a href="#image6" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>

        <article class="light-box" id="image6">
            <a href="#image5" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img6.jpeg" alt="">
            <a href="#image7" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>

        <article class="light-box" id="image7">
            <a href="#image6" class="next"><i class=""></i></a>
            <img src="img/Bienestar/img7.jpeg" alt="">
            <a href="#" class="next"><i class=""></i></a>
            <a href="#" class="close">X</a>
        </article>
            
        <!-- FOOTER -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
    </body>
</html>