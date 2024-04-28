<header class="top">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7">
                    <div class="header-top-right">
                        <ul>
                            <li><a href="http://www.moodle.uda.cl/" target="_blank">Moodle</a></li>
                            <li><a href="http://www.alumnos.uda.cl/" target="_blank">Intranet</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    <div class="header-top-right text-right">
                        <ul>
                            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSeuu1sPGDU3e2R0Tz8ja5oUdVX0PBNcYaj-aiErw89I4rr56w/viewform?embedded=true" target="_blank">Sugerencias</a></li>
                            <li><a href="https://admision.uda.cl/index.php/ingenieria-civil-en-computacion-e-informatica/" target="_blank">Admisión</a></li>
                            <li><a href="{{ route('login') }}">iniciar sesion</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-area header-sticky fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-16">
                    <div class="logo">
                        <a href="https://uda.cl/" target="_blank">
                            <img id="imglogo" src="{{asset('img/logo/logodep.png')}}"/>
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-10 col-xs-12">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <div class="main-menu one text-right">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('welcome') }}")>Inicio</a></li>
                                    <li><a href="{{ route('Departamento') }}">Departamento</a></li>
                                    <li class="hidden-sm"><a href="academicos.php">Equipo</a>
                                        <ul>
                                            <li><a href="{{ route('academicos') }}">Académicos</a></li>
                                            <li><a href="{{ route('funcionarios') }}">Administrativos</a></li>
                                        </ul>
                                    </li>
                                   
                                    
                                    <li><a>Carrera</a>
                                        <ul>
                                            <li><a>Pregrado</a>
                                                <ul>
                                                    <li><a href="{{ route('Ingenieria-Civil') }}">Ingeniería civil en Computación e Informática</a></li>
                                                </ul>
                                            </li>
                                            <li><a>Postítulo</a>
                                                <ul>
                                                    <li><a href="{{ route('Inteligencia-Negocio') }}">Diplomado en tecnología para inteligencia de negocios</a></li>
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "postitulo/diplomado-gestion.php"); */?>>Diplomado en gestión de tecnologias de la información</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a>Postgrado</a>
                                                <ul>
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "postgrado/tecnologia.php"); */?>>Magister en tecnologias de la informacion e innovación</a></li> -->
                                                    <li><a href="{{ route('Magister-Informatica') }}">Magíster en Informática y Ciencias de la Computación</a></li>
                                                    <!-- <li><a href=<?php /* echo fromroot($file, "postgrado/procesos-software.php"); */?>>Diplomado en procesos integrales de software</a></li> -->
                                                    <!-- <li><a href=<?php /*echo fromroot($file, "postgrado/gestion-innovacion.php"); */?>>Diplomado en gestión de innovacion y emprendimiento</a></li> -->
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('noticias') }}">Noticias</a></li>
                                    
                                    <li><a>Investigaciones</a>
                                        <ul>
                                            <li><a href="{{ route('publicacion') }}">Publicaciones</a></li>
                                            <li><a href="{{ route('proyecto') }}">Proyectos</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="{{ route('galeria') }}">Galería</a></li>
                                    <!-- <li><a href="trabajo.php">Bolsa de Trabajo</a></li>-->
                                    </li>
                                    <!--<li><a href="bolsaempleo.php">Empleos</a></li>-->
                                </ul>


                            </nav>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md one"></div>
                        <!-- MENU PRINCIPAL-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>