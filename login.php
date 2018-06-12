<?php
session_start();
include ('funciones.php');
$errorLogin = "";
$user= [];
$usuario = "ACCEDER";
$validado = false;
if($_POST)
{
  if(!isset($_POST["user"]))
  {
    $errorLogin = "Por favor, ingrese un correo electronico valido";
    $validado = false;
  }
  else if(strlen(trim(($_POST["user"]))) ==0 || (!filter_var($_POST["user"], FILTER_VALIDATE_EMAIL)) )
  {
    $errorLogin = "Por favor, ingrese un correo electronico valido";
    $validado =  false;
  }
  if(!isset($_POST["password"]))
  {
    $errorLogin = "El mail y/o la clave no son validos";
    $validado = false;
  }

  $mail = $_POST["user"];
  $pass = $_POST["password"];
  $user = intentoLogin($mail,$pass);
  if(!empty($user))
  {
    $_SESSION["login"]=$user["mail"];
    $_SESSION["nombre"] = $user["nombre"];
    $_SESSION["apellido"] = $user["apellido"];
    $usuario = $_SESSION["nombre"];
  }
}
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/styles.css" />
    <title>London Bikes - Acceder</title>
  </head>
  <body>
    <header id="header">
      <div class="angosto">
        <a href="index.php" class="logo">London Bikes</a>
        <nav id="nav">
          <a href="index.php">Home</a>
          <a href="nosotros.php">Nosotros</a>
          <a href="market.php">Market</a>
          <a href="registro.php" >Registrarse</a>
          <a href="login.php" style="text-decoration:underline"><label id="lblUser"><?php echo $usuario ?></label></a>
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
              <input type="text" name="user" id="nombre" />
            </div>
            <div class="campo medio">
              <label for="password">Password</label>
              <input type="password" name="password" id="password"/>
            </div>
            <span><?php echo $errorLogin; ?></span>
            <div style="padding-top:10px">
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
