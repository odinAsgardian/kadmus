<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kadmus Enterprise</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css0">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">K-DMUS</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.php"><span class="glyphicon glyphicon-send"></span> Home</a></li>
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-open"></span> Portifolio<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Jogos</a></li>
          <li><a href="#">Desenvolvimento</a></li>
        </ul>
      </li>
				<li><a href="equipe.php"><span class="glyphicon glyphicon-heart"></span> Equipe</a></li>			
      			<li><a href="#sobre" data-toggle="modal"><span class="fa fa-terminal">
      			</span> Sobre</a></li>

				<form class="navbar-form navbar-left">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>
			</ul>			
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-globe"></span> Log In</a></li>
				</ul>
		</div>
	</nav>
	<div class="modal fade" id="sobre" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<li class="fa fa-cog fa-spin fa-1x fa-fw">
					</li>
					<h4 class="modal-title">A Equipe da K-DMUS</h4>
				</div>
				<div class="modal-body">
					<p>A equipe K-DMUS é composta por 7 integrantes.</p>
				</div>

				<!-- o código abaixo é um footer com um botão para fechar o modal. -->
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">fechar</button>
				</div> -->
			</div>
		</div>
	</div>
	<!-- <div class="container">
		<h3>A Equipe Kadmus</h3>
		<p>Site de desenvolvimento da equipe Kadmus</p>
	</div> -->

		
</body>
</html>