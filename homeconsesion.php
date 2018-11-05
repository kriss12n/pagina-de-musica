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
	<title>Machin music</title>



	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<style>

.menu{
    text-align: right;

    }
</style>

<body >

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand logo ">
    <img src="img/logo_machin.png" width="40px" class="d-inline-block align-top"  alt="logo">Machine Music</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="menu">
    <ul class="navbar-nav ml-auto nav-pills">
      <li class="nav-item dropdown boton">
        <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#">

          <?php
               if(isset($_SESSION['idUsuario'])){
                echo $_SESSION['nombre'];
               }
           ?>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" data-toggle="modal"  data-target="#modalPerfil" href="#">Mi perfil</a>
          <a class="dropdown-item" data-toggle="modal" data-target="#modalContraseña" href="#">Cambiar contraseña</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="cerrarsesion.php">Cerrar sesion</a>
        </div>
      </li>
    </ul>

  </div>
</nav>


<div class="container-fluid  center" style="margin-top:100px;">
 <h2 class="text-center">Albumes</h2>

 <div class="container-fluid  center" style="margin-left:5%;">

            <div class="demo-gallery">
                <ul id="lightgallery" class="list-unstyled row">
                    <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <div>
                            <img class="img-responsive" src="img/albun1.jpg" >
                        </div>
												<div class="details">
										 	 <div class="content">
										 	 <h1>One ok rock Ambition<br><span>Canciones</span></h1>
										 	 </div>
											 <ul>
												 <li>
													 <a href="#"><i class="fas fa-play"></i></a>
												 </li>
											 </ul>
										 	 </div>


                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="reproductorONEOK2.html">
                            <img class="img-responsive" src="img/albun2.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2" >
                        <a href="reproductorONEOK3.html">
                            <img class="img-responsive" src="img/albun3.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun4.jpg">
                        </a>
                    </li>
            <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun5.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun6.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun7.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun8.jpg">
                        </a>
                    </li>
            <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun9.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun10.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun11.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun12.jpg">
                        </a>
                    </li>
            <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun13.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun14.jpg">
                        </a>

                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun15.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun16.jpg">
                        </a>
                    </li>
            <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun17.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun18.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="img/albun19.jpg">
                        </a>
                    </li>
                    <li class="col-xs-6 col-sm-4 col-md-2 col-lg-2">
                        <a href="">
                            <img class="img-responsive" src="https://sachinchoolur.github.io/lightgallery.js/static/img/thumb-13.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

</div>
<div class="modal fade" id="modalContraseña"tabindex="-1" role="dialog" aria-labelledby="MiPerfil" aria-hidden="true">

         <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cambio de Contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="recibeEditarPerfil.php" enctype="multipart/form-data" id="formEditarPerfil" >
          <div class="modal-body">


            <p class="statusMsg"></p>




                <div class="form-group">
              <label for="nombre">Ingrese su Nueva Contraseña </label>

              <input type="password" class="form-control" id="text" name="foto" placeholder="Ingrese Su contraseña" >

            </div>

                        <div class="form-group">
              <label for="nombre">Repita su Contraseña </label>

              <input type="password" class="form-control" id="text" name="foto" placeholder="Ingrese Su contraseña" >

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
              <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp" placeholder="Ingrese su Email" value="<?php echo $_SESSION['correo']; ?>">
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



        <script>
            $(document).ready(function(){
                $('#lightgallery').lightGallery();
            });





        </script>


<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

	    <script type="text/javascript">
    $(document).ready(function() {

      $("#formEditarPerfil").on('submit', function(e){
        $('.statusMsg').html('');
</body>
</html>
