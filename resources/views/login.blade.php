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
                                    <h2>iniciar sesion</h2> 
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
                                    @error('invalid_credentials')
                                        <small style="color: red">
                                            {{$message}}
                                        </small>  
                                    @enderror
                                    <form action="{{ route('loginVerify') }}" method="POST" >
                                        @csrf
                                        <input type="email" name="correo" value="{{old('correo')}}" placeholder="Correo institucional">
                                        <input type="password" name="password" placeholder="Contraseña">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Recuérdame</label>
                                                <a href="#">Olvidaste la clave?</a>
                                                <a href="{{ route('register') }}" style="margin-right: 30px;">Registrar</a>
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
