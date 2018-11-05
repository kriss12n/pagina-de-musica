<?php
if(!isset($_POST["correo"]) || !isset($_POST["contrasena"])) exit();

include_once "conexion.php";


$email = $_POST["correo"];
$pass = $_POST["contrasena"];

$sentencia = $base_de_datos->prepare("SELECT * FROM usuario WHERE correo = '$email' AND pass = '$pass';");
$sentencia->execute();
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);



if($usuario->id !== "" ){

      session_start();
    if (!isset($_SESSION['idUsuario'])) {

        $_SESSION['idUsuario'] = $usuario->id;
        $_SESSION['nombre'] = $usuario->nombre;
        $_SESSION['contraseña'] = $usuario->contraseña;
        $_SESSION['correo'] = $usuario->correo;




    }
    header('location: home.php');

}else {
  echo "Algo salió mal. Por favor verifica que la password y contraseña";
}

?>
