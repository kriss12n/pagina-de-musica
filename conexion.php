<?php
$usuario = "root";
$contraseña ="";


try{
	$base_de_datos = new PDO('mysql:host=localhost;dbname=paginamusica',$usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}

?>
