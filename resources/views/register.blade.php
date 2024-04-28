<!doctype html>
<html class="no-js" lang="en">
    @include("include.head");

<?php
    // session_start();
    // $file = __FILE__;
    // $pagetitle = "Iniciar Sesión - DIICC UDA";

    // if (isset($_SESSION['usuario'])){
    //     header(sprintf('Location:%s', fromroot($file, "dashboard/index.php", True)));
    // }
?>
    <body>
        <!-- HEADER -->
        @include("include/header")
        <!-- HEADER -->
		
		<div class="banner-area-wrapper">
            <div class="banner-area text-center">	
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="banner-content-wrapper">
                                <div class="banner-content">
                                    <h2>Registrar</h2> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
		
        <!-- Login start -->
        <div class="login-area pt-150 pb-150">
            <div class="container pt-100">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-form">
                                    <form action="{{ route('registerVerify') }}" method="POST" >
                                        @csrf
                                        <input type="text" name="nombre" placeholder="Ingrese Nombre">
                                        <input type="text" name="apellido" placeholder="Ingrese Apellido">
                                        
                                        @error('correo')
                                            <small class="text-danger mt-1">
                                                <strong>Correo ya existente </strong>
                                            </small>
                                        @enderror
                                        <input type="email" name="correo" placeholder="Correo institucional">
                                        <input type="password" name="password" placeholder="Contraseña">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Recuérdame</label>
                                                <a href="#">Olvidaste la clave?</a>
                                            </div>
                                            <div class="button-box text-center">
                                                <button type="submit" class="default-btn">Entrar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login end --> 
        
        <!-- FOOTER -->
        @include("include.footer")
        <!-- FOOTER -->
    </body>
</html>
