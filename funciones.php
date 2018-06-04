<?php

function registrarUsuario($array)
{
  //array con info del Registro
    $json = json_encode($array);
    $file = 'usuarios.json';
    file_put_contents($file,$json,FILE_APPEND|LOCK_EX);
}

function mailExistente($mail)
{
  $existe = true;
  $usuarios = file_get_contents("usuarios.json");
  $json = json_decode($usuarios,true);
  var_dump($json);
  return $existe;
}

 ?>
