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
	<title>Home</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	 crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
</head>

<body>
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand logo ">
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



	<div class="container" style="padding-top: 7%;">
		<div class="row justify-content-center">
			<div class="col-sm-2">
				<h1>ÁLBUMES</h1>
			</div>
		</div>
	</div>

	<section>

		<div class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="box">
							<div class="imgbox">
								<img src="img/albun1.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>One OK Rock</h3>
								<p>Ambitions</p>
								<a href="reproductorONEOK.php" class="btn btn-default btnD"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box">
							<div class="imgbox">
								<img src="img/albun2.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>One OK Rock</h3>
								<p>35XXXV</p>
								<a href="reproductorONEOK2.php" class="btn btn-default btnD"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box">
							<div class="imgbox">
								<img src="img/albun3.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>One OK Rock</h3>
								<p>JINSEI KAKETE BOKU WA</p>
								<a href="reproductorONEOK3.php" class="btn btn-default btnD"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row pt-5">
					<div class="col-sm-4">
						<div class="box">
							<div class="imgbox">
								<img src="img/albun4.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>Punk Goes Pop</h3>
								<p>Volume 5</p>
								<a href="reproductorPUNK.php" class="btn btn-default btnD"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box">
							<div class="imgbox">
								<img src="img/albun5.jpg" class="img-fluid">
							</div>
							<div class="content">
								<h3>Asking Alexandria</h3>
								<p>Stand up and scream</p>
								<a href="reproductorASKING.php" class="btn btn-default btnD"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="box">
							<div class="imgbox">
								<img src="img/albun6.jpeg" class="img-fluid">
							</div>
							<div class="content">
								<h3>Tronic</h3>
								<p>Ke patine la risa</p>
								<a href="reproductorTRONIC.php" class="btn btn-default btnD"><i class="fas fa-play"></i></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		</div>
		</div>
	

    <!-- Modal -->
    <div class="modal fade" id="modalPerfil" tabindex="-1" role="dialog" aria-labelledby="MiPerfil" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Mi Perfil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="recibeEditarPerfil.php" enctype="multipart/form-data" id="formEditarPerfil" >
          <div class="modal-body">


            <p class="statusMsg"></p>

            
            <div class="form-group">
              <label for="correo">Email</label>
              <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese su Email" value="<?php echo $_SESSION['email']; ?>">
              <small id="emailHelp" class="form-text text-muted">Recuerde que su correo lo utilizará para iniciar sesión</small>
            </div>
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="<?php echo $_SESSION['nombre']; ?>">
            </div>

            <div class="form-group">
              <label for="nombre">Foto de Perfil</label>
              <input type="file" class="form-control" id="foto" name="foto" placeholder="Seleccione su foto" >
            </div>
            

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" id="btnEditar">Guardar Cambios</button>
          </div>
        </form>
        </div>
      </div>
    </div>

	</section>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>

</html>