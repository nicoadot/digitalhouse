<?php
//$json = file_get_contents('usuarios.txt');
//var_dump(json_decode($json, true));


function leerUsuarios()
{
  $contenidoArchivo = file_get_contents('usuarios.txt');
  $usuarios = json_decode($contenidoArchivo,true);
  return $usuarios;
}

function intentoLogin($mail,$pass)
{
  $user = [];
  $usuarios = leerUsuarios();
  foreach ($usuarios as $usuario)
  {
    if($usuario["mail"] == $mail && (password_verify($pass,$usuario["password"])))
      $user = $usuario;
  }
  return $user;
}

var_dump(intentoLogin("admin@admin.com","12345678"))


 ?>
