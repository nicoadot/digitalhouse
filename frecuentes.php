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
		<title>London Bikes - F.A.Q.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/styles.css" />
    <title>London Bikes - F.A.Q.</title>
	</head>

	<body>
    <header id="header">
      <div class="angosto">
        <a href="index.php" class="logo">London Bikes</a>
        <nav id="nav">
          <a href="index.php" >Home</a>
          <a href="nosotros.php" style="text-decoration:underline">Nosotros</a>
          <a href="market.php">Market</a>
          <a href="login.php" ><label id="lblUser"> <strong><?php echo $user ?></strong></label></a>
          <?php if(isset($_SESSION["login"]))
              echo( "<a href='logout.php' >Salir</a>");  ?>
        </nav>
      </div>
    </header>
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <section id="bloquePrincipal" >
      <div class="angosto">
        <header class="">
          <h1>Preguntas Frecuentes!</h1>
        </header>
        <p>
          <strong>
              * Cómo puedo averiguar el precio de una bicicleta?
          </strong>
        </p>
        <p>
          Podes contactarnos via mail ventas@londonbikes.com o registrandote en el sitio, accediendo al Market!
        </p>
        <p>
          <strong>
              * Hacen envios?
          </strong>
        </p>
        <p>
          Si! A todo el pais! Las tarifas se comunican al realizar la venta!
        </p>
        <p>
          <strong>
              * Brindan asesoramiento?
          </strong>
        </p>
        <p>
          Si! Contamos con un personal dispuesto a respoder todas tus consultas y
          lograr que des con la bicicleta que estas buscando!
        </p>
        <p>
          <strong>
              * Las bicis tienen garantia?
          </strong>
        </p>
        <p>
          Si! Todos nuestros productos tienen garantia oficial!
        </p>
      </div>
    </section>

    <section id="footer">
      <div class="angosto" style="top:0">
          <a  href="#" class="imagen "><img src="imagenes/map.jpg" alt="" /></a>
      </div>
    </section>
  </body>
</html>
