<?php

function Cliente() {
  $db = new Conexion();

  $sql = $db->query("SELECT * FROM cliente;");
  
  if($db->rows($sql)) {
    while($d = $db->recorrer($sql)) {
      $users[$d['id_cliente']] = $d;
    }
  } else {
    if(!isset($_SESSION['users'])) {
      while($d = $db->recorrer($sql)) {
        $users[$d['id_cliente']] = $d;
      }
    } else {
      $users = $_SESSION['users'];
    }
  }

  $_SESSION['users'] = $users;

  $db->liberar($sql);
  $db->close();

  return $_SESSION['users'];
}

?>