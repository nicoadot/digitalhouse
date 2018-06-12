<?php
session_start();
$user = "ACCEDER";
if(isset($_SESSION['login']))
{
  $user = $_SESSION["nombre"];
}

 ?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>London Bikes - Nosotros</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/styles.css" />
    <title>London Bikes - Nosotros</title>
	</head>

	<body>
    <header id="header">
      <div class="angosto">
        <a href="index.php" class="logo">London Bikes</a>
        <nav id="nav">
          <a href="index.php" >Home</a>
          <a href="nosotros.php" style="text-decoration:underline">Nosotros</a>
          <a href="market.php">Market</a>
          <a href="registro.php">Registrarse</a>
          <a href="login.php"><label id="lblUser" text="ACCEDER">ACCEDER</label></a>
        </nav>
      </div>
    </header>
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <section id="bloquePrincipal" >
      <div class="angosto">
        <header class="">
          <h1>Nosotros</h1>
          <p>Los que amamos las bicicletas!</p>
        </header>
        <a href="#" class="imagen fit"><img src="imagenes/wall4.jpg" alt="" /></a>
        <p>Pedaleamos por diversión. Pedaleamos por deporte. Pedaleamos para ir de aquí para allá, para liberarnos de la rutina diaria y para hacer de nuestro mundo un lugar mejor a través de las bicicletas. A veces pedaleamos sin ninguna razón en absoluto.
          Pedaleamos porque amamos cómo al movernos en bicicleta se crea una brisa fresca en una mañana y por cómo, después de un largo día de trabajo, al subir a una bicicleta nos hace sentir como si el día recién comenzara. Pedaleamos para que nuestros niños puedan disfrutar del simple placer de las aventuras en dos ruedas por el barrio. Pedaleamos para hacer los lugares conocidos nuevos otra vez.
        </p>
        <p>	www.pleopleforbikes.org</p>
        <p>Proporcionamos un frente unificado para la defensa de ciclismo a nivel nacional, un centro estratégico para asegurar la colaboración entre cada pieza en el movimiento de andar en bicicleta, y la capacidad de soportar los esfuerzos locales a través de nuestros recursos financieros, la comunidad y la comunicación.</p>
      </div>
    </section>

    <section id="footer">
      <div class="angosto" style="top:0">
          <a  href="#" class="imagen "><img src="imagenes/map.jpg" alt="" /></a>
      </div>
    </section>
  </body>
</html>
