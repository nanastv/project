<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
		<?php 
		$connect = mysqli_connect('127.0.0.1','root','','nanastv');
		$query = mysqli_query($connect,"SELECT * FROM users WHERE id='". $_GET['id']. "' ");
		$us = $query->fetch_assoc();
	 ?>
	   	 <div class="row bg-danger mb-2" style="height:70px" >
	  	<div class="col-3">
	  		<img src="images/logo2.png" class="ml-3" style="height:70px" >
	  	</div>
	  	<div class="col-4"></div>
	  	<div class="col-5">
	  			<div class="row p-0">
		  			<div class="col-4 mt-4">
		  				<a href=<?php echo 'main.php?id='.$us['id'] ?> class="text-light">
		  					<h5>Все рестораны</h5>
		  				</a>
		  			</div>
		  			<div class="col-5 mt-4">
		  				<a href=<?php echo 'prof.php?id='.$us['id'] ?> class="text-light">
		  					<h5>Мой профиль: @<?php echo $us['login'] ?></h5>
		  				</a>
		  			</div>
		  			<div class="col-2 mt-4">
		  				<a href="index.php" class="text-light">
		  					<h5>Выход</h5>
		  				</a>
		  			</div>
		  		</div>
		  	</div>
	  </div>

	  <div class="p-5">
		  <div style="height:500px" class="bg-white p-5">
		  	<form method="POST" action=<?php echo '"update.php?id='.$us['id'].'"' ?> enctype="multipart/form-data">
    		  	<div class="mb-4">
    		  		<h3>Личная информация</h3>
    		  	</div>
    		  	<div class="mb-4">
    		  		<?php echo '<input name="login" value="'. $_POST['login'].'">'; ?>
    		  	</div>
    		  	<div class="mb-4">
    		    	<?php echo '<input type="file" name="img" >'; ?>
    		  	</div>
    		  	<div class="mb-4">
    		  		<?php echo '<input name="email" value="'. $_POST['email'].'">'; ?>
    		  	</div>
    		  	<button type="submit" class="btn btn-outline-danger">Редактировать</button>
		  	</form>
		  </div>
	  </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>