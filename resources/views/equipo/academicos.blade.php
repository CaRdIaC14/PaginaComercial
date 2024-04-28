<!doctype html>
<html class="no-js" lang="en">
    @include("include.head")
<?php
    session_start();
    $_SESSION['root'] = dirname(__FILE__);
    $file = __FILE__;
    $pagetitle = "Académicos - DIICC UDA";

?>

    <body id="body_academicos">
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
                                    <h2>Académicos</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->
        <!-- Teacher Start -->
        <div id= "espacio"></div>
            <section class="container">
                <div class="row active-with-click">
                   <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h3>
                                <span><a id="enlace" href="academico1.php?id=<?php echo $mostrar['id']; ?>"><?php echo utf8_encode($mostrar['Nombre']); ?></a></span>
                                <strong>
                                    <?php echo utf8_encode($mostrar['cargo']);?>
                                </strong>
                            </h3>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img alt="teacher" src=<?php echo fromroot($file, $mostrar['img_path']);?>>
                                </div>
                                <div class="mc-description"style="overflow: auto; text-align: justify;">
                                    <?php echo utf8_encode($mostrar['grado_academico'])?>
                                </div>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                                <h5><?php echo ($mostrar['correo']) ?></h5>
                                <h5>fono: <?php echo ($mostrar['fono']) ?></h5>
                            </div>
                        </article>
                        <div id= "espacio"></div> 
                    </div>
                
                    <?php 
                    $consecutivo++;
            

                    ?>
                </div>
            </section>
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
    </body>

</html>