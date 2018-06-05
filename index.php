<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/styles.css" />
    <title>London Bikes - Home</title>
  </head>
  <body>
    <header id="header">
      <div class="angosto">
        <a href="index.php" class="logo">London Bikes</a>
        <nav id="nav">
          <a href="index.php" style="text-decoration:underline">Home</a>
          <a href="nosotros.php">Nosotros</a>
          <a href="market.php">Market</a>
          <a href="registro.php">Registrarse</a>
          <a href="login.php"><label id="lblUser" text="ACCEDER">ACCEDER</label></a>
        </nav>
      </div>
    </header>
    <a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>

    <section id="banner">
      <div class="angosto">
        <h1>LONDON BIKES:<br />
          <span> BICICLETAS PARA CAMBIAR EL MUNDO</span>
        </h1>
        <ul class="mas">
          <li><a href="market.php" class="boton alt">MARKET!</a></li>
        </ul>
      </div>
    </section>

    <section id="bloque1">
      <div class="angosto">
        <header>
          <h2>LONDON BIKES</h2>
        </header>
        <p>
          <strong>Amamos las bicicletas</strong>
          , pensamos en bicicletas, hacemos bicicletas y soñamos con ellas.
           Es por ello que buscamos hacer aún más ecológico un transporte que ya
           de por sí lo es y a partir de ese sueño queremos <strong>Promover la idea de que la sustentabilidad y la conciencia ecológica</strong>
           no solo son deberes y/u obligaciones de cada individuo, sino que también,
           mediante la inteligencia aplicada al diseño, se puede lograr un mayor acercamiento
           de personas a dichos principios a través del placer, el gusto o la diversión
           proporcionada por elementos de uso cotidianos, nunca desprovistos de componentes funcionales,
            lúdicos o didácticos. A los términos eco-friendly y eco-geek sumamos el eco-fun.
        </p>
        <ul class="mas">
          <li><a href="nosotros.html" class="boton alt">MAS INFO.</a></li>
        </ul>
      </div>
    </section>

    <section id="bloque2">
      <div class="angosto">
        <article>
          <div class="content">
            <header>
              <h3>MODELOS COMPLETOS</h3>
            </header>
            <div class="imagen fit">
              <img src="imagenes/pic01.jpg" alt="" />
            </div>
            <p>Haz un paseo por nuestro MARKET y accede a todos nuestros modelos, realizados con la mejor calidad y los mejores componentes</p>
            </div>
        </article>
        <article class="alt">
          <div class="content">
            <header>
              <h3>ACCESORIOS</h3>
            </header>
            <div class="imagen fit">
              <img src="imagenes/pic02.jpg" alt="" />
            </div>
            <p>Contamos con un gran catalogo de Accesorios para que complementes tu viaje y tu equipo</p>
            </div>
        </article>
      </div>
    </section>

    <section id="bloque3">
      <div class="angosto">
        <article>
          <div class="content">
            <span class="icon fa-bicycle"></span>
            <header>
              <h3>BICICLETAS!</h3>
            </header>
            <p>"Lo que gastas en Bicicletas, lo ahorras en Salud"</p>
          </div>
        </article>
        <article>
          <div class="content">
            <span class="icon fa-credit-card-alt "></span>
            <header>
              <h3>FINANCIACION!</h3>
            </header>
            <p>Contamos con los mejores planes de financiacion para que adquieras tu Bicicleta!</p>
          </div>
        </article>
        <article>
        <div class="content">
            <span class="icon fa-users"></span>
            <header>
              <h3>COMUNIDAD!</h3>
            </header>
            <p>Convertite en miembro de la Gran Comunidad de Ciclistas de Argentina!</p>
          </div>
        </article>
      </div>
    </section>

    <section id="footer">
      <div class="angosto">
        <header>
          <h2>CONTACTO!</h2>
        </header>
        <form method="post" action="#">
          <div class="campo medio primero">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" />
          </div>
          <div class="campo medio">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" />
          </div>
          <div class="campo">
            <label for="message">Mensaje</label>
            <textarea name="message" id="message" rows="6"></textarea>
          </div>
          <ul class="mas">
            <li><input type="submit" value="CONTACTAR!" class="boton alt" /></li>
          </ul>
        </form>
        <div class="copyright">
          &copy; EANA Desing
        </div>
      </div>
    </section>
  </body>
</html>
