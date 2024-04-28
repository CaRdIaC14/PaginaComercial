<!doctype html>
<html class="no-js" lang="en">
    @include("config.config")
    @include("include.functions")
    @include("include.head")
<?php
    session_start();
    $file = __FILE__;
    $pagetitle = "Bolsa de Trabajo - DIICC UDA";

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
                                    <h2>Portal de trabajo</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- Banner Area End -->
        <!-- Blog Start -->
        
        <!-- Blog End -->
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
    </body>
</html>