<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>.: HOME :.</title>
        <link rel="stylesheet" type="text/css" href="clientes/css/bootstrap.min.css">
	</head>
	<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">UNIBienes</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>
              <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Personas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="clientes/index.php">Clientes</a></li>
          <li><a href="#">Usuarios</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bienes <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="poliza_automotor/automovil/index.php">Automovil</a></li>
          <li><a href="#">Casa</a></li>
        </ul>
      </li>
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pólizas <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="ver_polizas_automotor/index.php">Automotores</a></li>
          <li><a href="#">Incencio</a></li>
        </ul>
      </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Bienvenido al Sistema</h2>

</div>
</div>
</div>
            <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="clientes/js/bootstrap.min.js"></script>

	</body>
</html>