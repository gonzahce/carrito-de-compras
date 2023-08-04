<?php

$db = new Conexion();

$pass = Encrypt($_POST['pass']);
$user = $db->real_escape_string($_POST['user']);
$nombre = $db->real_escape_string($_POST['nombre']);
$direccion = $db->real_escape_string($_POST['direccion']);
$email = $db->real_escape_string($_POST['email']);

$sql = $db->query("SELECT usuario FROM cliente WHERE usuario='$user' OR correo='$email' LIMIT 1;");
if($db->rows($sql) == 0) {

    $db->query("INSERT INTO cliente (usuario,clave,nombre,correo,direccion) VALUES ('$user','$pass','$nombre','$email','$direccion');");
    $sql_2 = $db->query("SELECT MAX(id_cliente) AS id_cliente FROM cliente;");
    $_SESSION['app_id'] = $db->recorrer($sql_2)[0];
    $db->liberar($sql_2);
    $HTML = 1;

} else {
  $usuario = $db->recorrer($sql)[0];
  if(strtolower($user) == strtolower($usuario)){
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El usuario ingresado ya existe.
  </div>';
  } else {
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El email ingresado ya existe.
  </div>';
  }
}

$db->liberar($sql);
$db->close();

echo $HTML;

?>
