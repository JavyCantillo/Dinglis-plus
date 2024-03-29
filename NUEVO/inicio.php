<?php include("db.php"); ?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8"/>
    <title>Dinglis</title>
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
            <li><a class="active" style="color: black;" href="#">Inicio</a></li>
            <li><a href="objetivos.html">Objetivos</a></li>
            <li><a href="problema.html">Problema</a></li>
            <li><a href="jugar.html">Jugar</a></li>
            <li><a href="herramientas.html">Herramientas</a></li>
            <li><a href="contacto.html">Contacto</a></li>
            <li><a href="Login.html">Cerrar Sesión</a></li>
         </ul>
    </nav>

    <h1 class="subtitulo">
        Acerca de Dinglis
    </h1>

    <div class="div_texto">
        <p>
            Dinglis es un videojuego de plataformas para aprender Ingles.<br>
            Explica a los niños de primaria (Quinto Grado) sobre sustantivos, adjetivos y verbos
            de una forma condensa, interesante, divertida y atractiva.
            Esta lo hace mediante pistas que están en cada nivel
            el jugador tendrá que recoger la pista y se le abrirá un menú con información
            de un sustantivo, adjetivo o verbo.
            Al final del nivel tendrá que utilizar esa información para llegar al siguiente nivel.
        </p>
    </div>

    <h2 class="subtitulo">
        Video explicativo<br>
    </h2>

    <p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/Yeb7YUQrVkA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe></p>

    <h2 class="subtitulo">
        Creado por:<br>
    </h2>

    <div style="width: 20%;" class="div_texto">
        <p>
            Javier Cantillo de la Asunción<br>
            Stiven Javier Guzmán Otero<br>
            Jaider Rojas Alvarez<br>
        <p>
    </div>

    <div class="boton" > 
        <a href="contacto.html"> 
            Contactar
        </a>
    </div>

    <h2 class="subtitulo">
        Fotos de Dinglis
    </h2>

        <div class="deslizador">
			<ul>
				<li>
                    <img src="images/imgJuego1.png" alt="logo">
                </li>
				<li>
                    <img src="images/imgJuego2.png" alt="selección de personajes">
                </li>
				<li>
                    <img src="images/imgJuego3.png" alt="primer nivel">
                </li>
				<li>
                    <img src="images/imgJuego4.png" alt="segundo nivel">
                </li>
			</ul>
		</div>

    <div id="jugar" >
        <a target="_blank" href="https://scratch.mit.edu/projects/419176047">JUGAR</a>
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