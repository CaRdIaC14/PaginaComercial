<!doctype html>
<html class="no-js" lang="en">
    @include("include.head")

<?php
session_start();
$file = __FILE__;
$pagetitle = "Ingeniería Civil en Computación e Informática - DIICC UDA";

echo '<script src="../js/malla.js"></script>';
?>

<body>
    <!-- HEADER -->
    @include("include/header")
    <!-- HEADER -->

    <div class="contenedor-2">
        <p class="titulo">INGENIERÍA COMERCIAL</p>
        <p class="descripcion">La carrera de Ingeniería Comercial tiene por finalidad contribuir al desarrollo de la región y del país formando profesionales
            íntegros con sólidos principios éticos y de responsabilidad social.</p>

    </div>

    <div class="perfil-egreso">
        <p class="titulo-2">PERFIL DE EGRESO</p>
        <p class="descripcion-2">El Plan de Estudios de la carrera integra el Sistema de Créditos Transferibles por lo que promueve y facilita la movilidad estudiantil, además los
            alumnos luego de haber cumplido su último año de estudios egresan en calidad de titulados y con un alto manejo de Tecnologías de la Información y
            de Comunicación lo cual le permite desarrollarse en el mundo laboral de una manera eficiente.</p>

        <p class="descripcion-2">El enfoque del Ingeniero Comercial UDA se centra en el comportamiento humano, es decir, en cómo incorporar a las personas en los procesos
            organizacionales y en cómo la economía influye en cada aspecto del trabajo considerando sus efectos y proyecciones, teniendo como marco una
            mirada sistémica de la organización. Además posee una sólida formación en las ciencias administrativas, económicas, sociales, matemáticas, sistemas
            y tecnologías de la información, métodos de investigación y ciencias básicas que se encuentran al servicio de los conocimientos de la especialidad.
            </p>

        <p class="descripcion-2">Por sus características el campo de acción del Ingeniero Comercial es vinculante a todas las áreas de una empresa, lo que le permite desempeñarse
            en organizaciones públicas y de servicio, con o sin fines de lucro, en el ejercicio libre de la profesión, empresas comerciales y financieras.
            </p>
    </div>

    <div class="contenedor-a">
        <div class="contenedor-b">
            <p class="titulo-ab">COMPETENCIAS GENÉRICAS</p>
                <ul class="punto" style="margin-top: 1cm">
                    <li>Compromiso con la calidad</li>
                    <br>
                    <li>Compromiso ético</li>
                    <br>
                    <li>Capacidad para lidera y tomar decisiones</li>
                    <br>
                    <li>Conocimientos sobre el área de estudio de la profesión</li>
                    <br>
                    <li>Capacidad de aprender y actualizarse permanentemente</li>
                </ul>
        </div>
        <div class="contenedor-b">
            <p class="titulo-ab">COMPETENCIAS ESPECÍFICAS</p>
            <ul class="punto" style="margin-left: 1cm">
                <li>Maneja en forma eficiente las tecnologías de la información y
                    comunicación.</li>
                <br>
                <li>Aplica los conocimientos de las ciencias administrativas en la
                    problemática organizacional en el marco ético y legal.</li>
                <br>
                <li>Resuelve problemas y conflictos con interés y motivación a
                    través de técnicas de negociación y aplicación de
                    conocimientos de manera innovadora.</li>
                <br>
                <li>Toma decisiones en distintos escenarios y comprende su
                    impacto en el ámbito social, económico y medio ambiental.</li>
            </ul>
        </div>
    </div>
    <div class="contenedor-b" style="width: 60%">
        <p class="titulo-ab" style="font-size: 30px">ÁREAS DE DESEMPEÑO</p>
        <ul class="punto">
            <li>Analiza y soluciona problemas de administración.</li>
            <br>
            <li>Se comunica eficazmente en el lenguaje técnico de la disciplina.</li>
            <br>
            <li>Investiga temas relacionados con la administración.</li>
        </ul>
    </div>
    <div class="contenedor-b" style="width: 100%">
        <p class="titulo-ab" style="font-size: 30px">CAMPO OCUPACIONAL</p>
        <p class="descripcion-2" style="font-size: 20px">El Ingeniero Comercial UDA se puede desarrollar profesionalmente en todos los ámbitos empresariales, tales como: Industria,
            Comercio, Gobierno, Salud, Educación y todo lugar en donde se requiera la administración e investigación para la toma de decisiones.</p>
    </div>

    <div class="contenedor-b">
        <p class="titulo-ab" style="font-size: 30px">REQUISITOS DE ADMISIÓN</p>
    </div>
    <!-- FOOTER -->
    @include("include.footer")
    <!-- FOOTER -->
</body>
</html>