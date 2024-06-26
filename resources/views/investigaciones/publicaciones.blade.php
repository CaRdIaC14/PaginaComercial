<!doctype html>
<html class="no-js" lang="span">
    @include("include.head")

<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Publicaciones - DIICC UDA";

    if (!isset($_GET['page'])){
        $page = 0;
    }
    else{
        $page = $_GET['page'];
    }
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
                                <h2>Publicaciones</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Start -->
    <div class="blog-area pt-150 pb-150">
        <div class="container">
            <div class="row d-flex">
                   <?php
                        date_default_timezone_set('UTC');
                        setlocale(LC_ALL, 'ES');
                        $sql = sprintf("SELECT p.*, f.Nombre AS autor FROM publicaciones AS p INNER JOIN funcionarios AS f ON p.id_academico = f.id ORDER BY p.fecha DESC LIMIT 12 OFFSET %d",$page*12);
                        $resultado = mysqli_query($conexion, $sql);
                        while ($mostrar = mysqli_fetch_array($resultado)){ ?>


                        <div class="col-md-4 col-sm-6" >
                            <div class="single-blog mb-60" >
                                <div class="blog-img">
                                    <?php echo '<a href="publicaciones.php?id=' . $mostrar["id"] . '"></a>'; ?><img src=<?php echo fromroot($file, $mostrar["img_path"]); ?>></a>
                                    <div class="blog-hover">
                                        <i class="fa fa-link"></i>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-top">
                                        <p><?php echo utf8_encode($mostrar['autor']); ?> / <?php echo $mostrar['fecha'];?> / <?php echo $mostrar['revision'];?></p>
                                    </div>
                             <div class="blog-bottom">
                                <h2><?php echo '<a href="' . $mostrar["acceso"] . '">' . utf8_encode($mostrar['titulo']) . '</a>'; ?></h2>
                                <?php echo '<a href="' . $mostrar["acceso"] . '">Seguir Leyendo</a>'; ?>
                                </div>
                                 </div>
                            </div>
                        </div>                         

                    <?php  }?>
               
           
            <div class="row">
                <div class="col-xs-12">
                    <div class="pagination">
                        <ul>
                            <?php 
                            $total = mysqli_query($conexion, 'SELECT count(*) from publicaciones;');
                            
                                if ($page == 0){
                                    ++$page;
                                }
                                    $page = $page + 1;
                                    echo '<li><a href="publicaciones.php">1</a></li>';

                                if ($resultado->num_rows != 0){
                                    echo sprintf('<li><a href="publicaciones.php?page=%d">%d</a></li>', $page, $page);
                                }
                            
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            

            


        </div>

    </div>
    <!-- Blog End -->
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