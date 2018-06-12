<?php

function registrarUsuario($array)
{
    $usuarios = leerUsuarios();
    array_push($usuarios,$array);
    $json = json_encode($usuarios);
    $file = 'usuarios.txt';
    file_put_contents($file,$json,LOCK_EX);
}

function mailExistente($mail)
{
  $existe = false;
  $usuarios = leerUsuarios();
  foreach ($usuarios as $usuario)
  {
    if($usuario["mail"]== $mail)
      $existe = true;
      break;
  }
  return $existe;
}

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

function detalleUsuario($user)
{

}

function modificarUsario($user)
{

}


 ?>
