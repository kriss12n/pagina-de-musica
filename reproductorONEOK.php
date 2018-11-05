<?php
session_start();

if (!isset($_SESSION['idUsuario'])) {
header('location: error_sesion.html');

}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>One Ok Rock</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/reproductor.css">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="vendor/reproductor/css/style.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
</head>
<body >



	
	<div class="container-fluid center"style=" margin-top:100px;">
	
		<div class="masthead-content">
			<div class="container">
					<div class="fullBackground"></div>
				<h1 class="masthead-subheading mb-0 titulo">One ok Rock</h1>
				<h4 class="masthead-subheading mb-0 titulo">Ambitions</h4>
			</div>
		</div>
		
		<div id="player">
				<audio src=""></audio>
				<div class="info">
					<div>
						<h2></h2>
						<h3></h3>
						<div class="progress"><div></div></div>
					</div>
				</div>
				<div class="player">
					<div class="disk">
						<div>
							<img alt="" crossOrigin = "Anonymous">
						</div>
						<span></span>
					</div>

					<button id="prev_track">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 197.1 140.1" style="enable-background:new 0 0 197.1 140.1;" xml:space="preserve">
						<path class="st0" d="M130.2,75.9l41.7,46.4c5.4,6,15.3,2.2,15.3-5.9V23.6c0-8.1-10-11.9-15.3-5.9l-41.7,46.4
							C127.2,67.4,127.2,72.5,130.2,75.9z"/>
						<path class="st0" d="M12,77.6l93.7,54.1c5.9,3.4,13.2-0.8,13.2-7.6V15.9c0-6.8-7.3-11-13.2-7.6L12,62.4C6.1,65.7,6.1,74.2,12,77.6z"
							/>
						</svg>
					</button>

					<button id="next_track">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 viewBox="0 0 197.1 140.1" style="enable-background:new 0 0 197.1 140.1;" xml:space="preserve">
						<path class="st0" d="M64.6,64.1L22.9,17.7c-5.4-6-15.3-2.2-15.3,5.9v92.8c0,8.1,10,11.9,15.3,5.9l41.7-46.4
							C67.6,72.5,67.6,67.4,64.6,64.1z"/>
						<path class="st0" d="M182.9,62.4L89.2,8.3C83.3,4.9,76,9.1,76,15.9v108.2c0,6.8,7.3,11,13.2,7.6l93.7-54.1
							C188.7,74.2,188.7,65.7,182.9,62.4z"/>
						</svg>
					</button>
					<button id="toggle_state" class="play">
						<svg id="play_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 98.1 110.8" style="enable-background:new 0 0 98.1 110.8;" xml:space="preserve">
							<path class="st0" d="M83.5,52.1L23.4,17.4c-4-2.3-9,0.6-9,5.2V92c0,4.6,5,7.5,9,5.2l60.1-34.7C87.5,60.2,87.5,54.4,83.5,52.1z"/>
						</svg>
						<div class="pause_left"></div>
						<div class="pause_right"></div>

					</button>

					<section>
						<div class="container-fluid" style=" margin-top:100px;">
							<div class="row align-items-center">

								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Artista</th>
											<th scope="col">Canción</th>
											<th scope="col">Año</th>
											<th scope="col">Duracion</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1</th>
											<td>ONE OK ROCK</td>
											<td>Introduction</td>
											<td>2017</td>
											<td>01:23</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>ONE OK ROCK</td>
											<td>Bombs away</td>
											<td>2017</td>
											<td>04:23</td>
										</tr>
										<tr>
											<th scope="row">3</th>
											<td>ONE OK ROCK</td>
											<td>Taking Off</td>
											<td>2017</td>
											<td>03:39</td>
										</tr>

										<tr>
											<th scope="row">4</th>
											<td>ONE OK ROCK</td>
											<td>We are</td>
											<td>2017</td>
											<td>04:15</td>
										</tr>


									</tbody>
								</table>

							</div>
						</div>
					</section>


				</div>




	</div>





</div>



<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand logo " href="home.php">
				<img src="img/logo_machin.png" width="40px" class="d-inline-block align-top" alt="logo">Machine Music</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="navbar-nav ml-auto nav-pills">
					<li class="nav-item dropdown boton">
						<a class="nav-link dropdown-toggle text-white mr-5 " data-toggle="dropdown" href="#">

							<?php
               if(isset($_SESSION['idUsuario'])){
                echo $_SESSION['nombre'];
               }
           ?>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" data-toggle="modal" data-target="#modalPerfil" href="#">Mi perfil</a>
							<a class="dropdown-item" data-toggle="modal" data-target="#modalContraseña" href="#">Cambiar contraseña</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="cerrarsesion.php">Cerrar sesion</a>
						</div>
					</li>
				</ul>

			</div>
	</nav>



    <header class="text-center text-white d-flex" id="titulo1">



			<header class="masthead text-center text-white" style="padding-top:50px; padding-bottom:30px; margin-bottom:20px">




					<!-- Player -->




			</header>



</header>





<script src="js/jquery-3.3.1.min.js"></script> 
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="vendor/reproductor/js/index.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/fullclip.js"></script>
	<script>
		$('.fullBackground').fullClip({
		  images: ['img/paisaje/1.jpg', 'img/paisaje/2.jpg', 'img/paisaje/3.jpg','img/paisaje/4.jpg'],
		  transitionTime: 2000,
		  wait: 5000
		});
		</script>




</body>
</html>
