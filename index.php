<!DOCTYPE html>
<html>
<head>
	<title>Autor</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body class="bg-light">
	<div class="row">
		<div class="col-4 ml-auto mt-5 mr-3">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="images/logo.png" class="d-block w-100" >
			    </div>
			    <div class="carousel-item">
			      <img src="images/carus1.png" class="d-block w-100">
			    </div>
			    <div class="carousel-item">
			      <img src="images/carus3.png" class="d-block w-100">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
		</div>

		<div class="col-2 mr-auto mt-5 border bg-white px-4">
			<div class="">
				<img src="images/logo3.png" class="w-100">
				<p class="text-center text-muted">Зарегистрируйтесь, чтобы узнавать о новых новостях ресторанов!</p>
			</div>
		<form method="POST" action="autorization.php" > 
			<div class="input-group flex-nowrap mt-2">
			 	 <input type="text" name="login" class="form-control" placeholder="Имя пользователя" aria-label="Username" aria-describedby="addon-wrapping">
			</div>
			<div class="input-group flex-nowrap mt-2">
			 	 <input type="password" name="pass" class="form-control" placeholder="Пароль" aria-label="Username" aria-describedby="addon-wrapping">
			</div>
				<button class="mt-3 btn btn-danger btn-sm btn-block">Вход</button>	
		</form>
		<div class="mt-2 text-center text-danger">
			<?php echo $_GET['er']; ?>
		</div>
			<div class="d-flex text-center mb-4">
				<p class="ml-auto">Нет аккаунта? </p><a class="mr-auto" href="regis.php"> Регистрация</a>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>
</html>