<?php
$error = "";
$db_user ="";
$db_pass ="";
IF($_POST)
{
  if(!($_POST["userDB"]))
  {
    $error ="Por favor, ingrese usuario y password";
  }
  else if(!($_POST["passDB"]))
  {
    $error ="Por favor, ingrese usuario y password";
  }
  else {
    $dsn = 'mysql:host=127.0.0.1;dbname=londonbikes_db;port=3306';
    $opt = [PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION];

    IF($_POST["userDB"])
      $db_user = $_POST["userDB"];
    IF($_POST["passDB"])
      $db_pass = $_POST["passDB"];

    try {
      $db = new PDO($dsn, $db_user,$db_pass,$opt);
      $error= "Conexion establecida";
    }
    catch (PDOException $e) {
      $error ="Error PDO:".$e->getMessage();
    }
  }
}

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
 		  <link rel="stylesheet" href="css/styles.css" />
     <title></title>
   </head>
   <body>
     <section id="bloquePrincipal" >
       <div class="angosto">
         <span class="angosto"><?php echo($error); ?></span>
         <form class="angosto" action="" method="post">
           <input type="text" name="userDB" value="" placeholder="Usuario">
           <input type="password" name="passDB" value="" placeholder="Password">
           <input type="submit" name="" class="boton alt" style="margin-top:10px" value="RESTAURAR DB">
         </form>
     </div>
   </section>

   </body>
 </html>
