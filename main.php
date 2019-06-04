<!DOCTYPE html>
<html>
<head>
	<title>Main</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
	<?php 
		$connect = mysqli_connect('127.0.0.1','root','','nanastv');
		$query = mysqli_query($connect,"SELECT * FROM users WHERE id='". $_GET['id']. "' ");
		$us = $query->fetch_assoc();
	 ?>
<body class="bg-light">
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
		  <div style="height:100px" class="bg-danger row mb-4">
		  </div>
		  <div class="row">
		  	<?php
				$que = mysqli_query($connect,"SELECT * FROM restorans");
				for ($i=0; $i < $que->num_rows; $i++) { 
				$po = $que->fetch_assoc();
			?>
		  		<div class="col-3 bg-white border mb-2 p-3">
		  			<a href=<?php echo 'post.php?id='.$us['id'].'&idre='.$po['idre'] ?> >
			  			<h5><?php echo $po['headline']; ?></h5>
			  			<img  class="w-100 mb-3" src=<?php echo '"'. $po['logores'].'"'?>>
			  			<button class="btn btn-outline-danger">Посмотреть</button>
			  		</a>
		  		</div>
		  	<?php } ?>
		  </div>
	  </div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>