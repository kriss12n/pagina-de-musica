<?php



if(!isset($_POST["usuario"]) || !isset($_POST["contraseña"]) || !isset($_POST["email"])) exit();

include_once "conexion.php";

$nombre = $_POST["usuario"];
$pass = $_POST["contraseña"];
$correo = $_POST["email"];



$sentencia = $base_de_datos->prepare('INSERT INTO usuario VALUES (null,?,?,?)');
$resultado = $sentencia->execute(array($nombre,$pass,$correo));


if($resultado === TRUE) header('location: registro_exitoso.html');
else "Algo salió mal. Por favor verifica que la tabla exista";


?>
