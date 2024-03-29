<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        
    <title>Login</title>
</head>
<head>
    <meta charset="utf-8"/>
    <title>Inicio de Sesión - Dinglis</title>
    <link rel="icon" type="image/png" href="images/icono.ico">
    <meta name="description" content="Dinglis es un juego de plataformas para aprender ingles hecho en la plataforma de Scratch"/>
    <meta name="author" content="JSJ Team"/>
    <meta name="keywords" content="Ingles, Dinglis, Juego"/>
    <link rel="stylesheet" type="text/css" href="css/NavBarra.css" />
    <link rel="stylesheet" type="text/css" href="css/Pagina.css">
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <script src="js/Login.js"></script>
</head>
<body id="body">
    <br>
    <a href="inicio.html"><img href="inicio.html" id="logo" src="images/logo.png" width="375" height="105" alt="Dinglis Logo"></a>
    <br>
<body>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                <!--- LOGIN -->
                <form action="consultar.php" method="POST">
                    <div class="mb-4">
                        <label for="usuario" class="form-label">usuario</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" name="Ingresar">Iniciar Sesión</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta <a href="registro.php">Registrate</a></span><br> 
                        <span><a href="#">Recuperar Contraseña</a></span>
                    </div>
                </form>
            </div>
            <div class="col"></div>
            </div>
      <br>
      <br>
      <footer id="footer" >
        <p > 
            Dinglis - 2021 - Media Tecnica Desarrollo de Software - Institución Educativa Héctor Abad Gómez
        </p>
        <p align="center">
            <a href="https://www.iehectorabadgomez.edu.co/"><img style="padding: 0px; margin: 0px; margin-top: 5px; " width="64" height="64" src="images/I.E.Hector_Abad_Gomez.png" alt="Logo I.E Hector Abad Gomez"></a>
            <a href="https://pascualbravo.edu.co/"> <img style="padding: 0px; margin: 0px; margin-top: 5px; " width="64" height="70" src="images/Pascual_Bravo.png" alt="Logo Pascual Bravo"></a>
        </p>
    </footer>
        </div>
    </div>
</body>
</html>