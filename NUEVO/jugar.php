<?php include("db.php"); ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8"/>
    <title>Jugar - Dinglis</title>
    <link rel="icon" type="image/png" href="images/icono.ico">
    <meta name="description" content="Dinglis es un juego de plataformas para aprender ingles hecho en la plataforma de Scratch"/>
    <meta name="author" content="JSJ Team"/>
    <meta name="keywords" content="Ingles, Dinglis, Juego"/>
    <link rel="stylesheet" type="text/css" href="css/NavBarra.css" />
    <link rel="stylesheet" type="text/css" href="css/Pagina.css">
    <link rel="stylesheet" type="text/css" href="css/deslizador.css">
</head>
<body id="body">
    <br>
    <a href="inicio.html"><img href="inicio.html" id="logo" src="images/logo.png" width="375" height="105" alt="Dinglis Logo"></a>
    <br>
    <nav class="NavBarra">
        <ul>
            <li><a href="inicio.html">Inicio</a></li>
            <li><a href="objetivos.html">Objetivos</a></li>
            <li><a href="problema.html">Problema</a></li>
            <li><a class="active" style="color: black;" href="#">Jugar</a></li>
            <li><a href="herramientas.html">Herramientas</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="Login.html">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <div>
        <h1 class="subtitulo">
            ¿Cómo se puede jugar Dinglis?
        </h1>
        <div class="div_texto">
            <p>
                Para poder jugar a Dinglis se debe ir a la pagina de Scratch, la cual es la plataforma con la que se realizo y donde se aloja.<br>
                Puedes hacerlo dandole click al boton de Jugar o mediante esta pagina.<br>
            </p>
        </div>
        <div id="jugar" >
            <a target="_blank" href="https://scratch.mit.edu/projects/419176047">JUGAR</a>
        </div>
        <p align="center" style="margin: 25px;"><iframe id="Scratch" src="https://scratch.mit.edu/projects/419176047/embed" allowtransparency="true" width="679" height="563" frameborder="0" scrolling="no" allowfullscreen></iframe></p>
        <br>
        <br>
    </div>
    <footer id="footer" >
        <p > 
            Dinglis - 2021 - Media Tecnica Desarrollo de Software - Institución Educativa Héctor Abad Gómez
        </p>
        <p align="center">
            <a href="https://www.iehectorabadgomez.edu.co/"><img style="padding: 0px; margin: 0px; margin-top: 5px; " width="64" height="64" src="images/I.E.Hector_Abad_Gomez.png" alt="Logo I.E Hector Abad Gomez"></a>
            <a href="https://pascualbravo.edu.co/"> <img style="padding: 0px; margin: 0px; margin-top: 5px; " width="64" height="70" src="images/Pascual_Bravo.png" alt="Logo Pascual Bravo"></a>
        </p>
    </footer>
</body>
</html>