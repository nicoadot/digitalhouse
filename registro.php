<?php
session_start();
include ('funciones.php');
$nombre = $apellido = $mail = $pass = "";
$errorNombre = $errorApellido = $errorMail = $errorPass = "";
$user = "ACCEDER";
$validado =  true;
if(isset($_SESSION['login']))
{
  $user = $_SESSION["nombre"];
  header("Location: detalleUsuario.php");
}
if($_POST)
{
  if(!isset($_POST["nombre"]))
  {
    $errorNombre = "Por favor, ingrese un Nombre";
    $validado =  false;
  }
  else if(strlen(trim(($_POST["nombre"]))) ==0)
  {
    $errorNombre = "Por favor, ingrese un Nombre válido";
    $validado =  false;
  }
  else
    $nombre = trim(($_POST["nombre"]));

  if(!isset($_POST["apellido"]))
  {
    $errorApellido = "Por favor, ingrese un Apellido";
    $validado =  false;
  }
  else if(strlen(trim(($_POST["apellido"]))) ==0)
  {
    $errorApellido = "Por favor, ingrese un Apellido válido";
    $validado =  false;
  }
  else
    $apellido = trim(($_POST["apellido"]));

  if(!isset($_POST["mail"]))
  {
    $errorMail = "Por favor, ingrese un Mail";
    $validado =  false;
  }
  else if(strlen(trim(($_POST["mail"]))) ==0 || (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) )
  {
    $errorMail = "Por favor, ingrese un Mail válido";
    $validado =  false;
  }

  else if(mailExistente(trim($_POST["mail"])))
  {
    $errorMail = "El mail cargado ya se encuentra registrado";
    $mail = trim(($_POST["mail"]));
    $validado = false;
  }

  else
    $mail = trim(($_POST["mail"]));

  if(!isset($_POST["password"]))
  {
    $errorPass = "Por favor, ingrese una Contraseña";
    $validado =  false;
  }
  else if(strlen(trim(($_POST["password"]))) < 8)
  {
    $errorPass = "Por favor, ingrese una Contraseña válida";
    $validado =  false;
  }
  else
    $pass = trim(($_POST["password"]));



  if($validado)
  {
    $_POST["nombre"] = $nombre;
    $_POST["apellido"] = $apellido;
    $_POST["mail"] = $mail;
    $_POST["password"] = password_hash($pass,PASSWORD_DEFAULT);
    registrarUsuario($_POST);

  }

}

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
          <a href="login.php"><label id="lblUser"><?php echo $user ?></label></a>
        </nav>
      </div>
    </header>
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
    <section id="bloquePrincipal" >
      <div class="angosto">
        <header class="angosto">
          <h1>Registro</h1>
        </header>
        <div class="angosto">
          <form class="" action="registro.php" method="post">
            <div class="">
              <div class="campo medio primero">
                <label for="name">Nombre</label>
                <input type="text" name="nombre" id="nombre"  value="<?php echo $nombre;?>" />
                <span><?php echo $errorNombre; ?></span>
              </div>
              <div class="campo medio">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" id="apellido"  value="<?php echo $apellido;?>" />
                <span><?php echo $errorApellido; ?></span>
              </div>
              <div class="campo medio primero">
                <label for="mail">Mail</label>
                <input type="text" name="mail" id="mail" placeholder="juan@dominio.com.ar"  value="<?php echo $mail;?>" />
                <span><?php echo $errorMail; ?></span>
              </div>
              <div class="campo medio">
                  <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Debe tener al menos 8 caracteres alfanumericos" />
                <span><?php echo $errorPass; ?></span>
              </div>
            </div>
            <div style="display: block">
              <input type="submit" name="registrar" value="ACEPTAR" class="boton" style="margin-top:20px">
            </div>
          </form>
        </div>
      </div>
    </section>
    <section id="footer">
      <div class="angosto" style="top:0">
        <h4>SOCIAL!</h4>
        <ul class="icons">
          <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
          <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
          <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
          <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
          <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
          <li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
        </ul>
      </div>
    </section>
      </body>
  </html>
