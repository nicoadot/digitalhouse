<?php
$errorLogin = "";

 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/styles.css" />
    <title>London Bikes - Registro</title>
  </head>
  <body>
    <header id="header">
      <div class="angosto">
        <a href="index.php" class="logo">London Bikes</a>
        <nav id="nav">
          <a href="index.php">Home</a>
          <a href="nosotros.php">Nosotros</a>
          <a href="market.php">Market</a>
          <a href="registro.php"  style="text-decoration:underline">Registrarse</a>
        </nav>
      </div>
    </header>
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    <section id="bloquePrincipal" >
      <div class="angosto">
        <header class="">
          <h1>ACCEDER</h1>
        </header>
        <div class="angosto">
          <form class="" action="login.php" method="post">
            <div class="campo medio primero">
              <label for="name">Mail</label>
              <input type="text" name="nombre" id="nombre" />
            </div>
            <div class="campo medio">
                <label for="password">Password</label>
              <input type="password" name="password" id="password" />
              <span><?php echo $errorLogin; ?></span>
            </div>
            <div class="">
              <input type="submit" name="registrar" value="ACCEDER" class="boton alt">
            </div>
          </form>
        </div>
      </div>
    </section>
    <section id="footer">
      <div class="angosto" style="top:0">
          <a  href="#" class="imagen"><img src="imagenes/redes11.png" alt="" /></a>
      </div>
    </section>
      </body>
  </html>
