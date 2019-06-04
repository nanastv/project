<!DOCTYPE html>
<html>
<head>
	<title>	Rest</title>
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
		  <div class="bg-white p-5">
    		<form method="POST" action=<?php echo 'likes.php?id='.$us['id']?>>
    			<div class="row">
    				<div class="col-4 p-4 mr-3" style="padding: 50px">
						<div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">
						  <div class="carousel-inner">
						  	<?php 
								$connect = mysqli_connect('127.0.0.1','root','','nanastv');
								$que = mysqli_query($connect,"SELECT * FROM restorans INNER JOIN images ON restorans.idre = images.restorans_idre  WHERE idre ='". $_GET['idre']. "' ");
								for ($i=0; $i < $que->num_rows; $i++) { 
								$po = $que->fetch_assoc();  ?>
						    <div class="carousel-item active" data-interval="2000">
						      <img  src=<?php echo '"'. $po['link'].'"'?> class="d-block w-100" alt="...">
						    </div>
						    	<?php }; ?>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

	    		  	</div>
	    		  	<?php 
					$connect = mysqli_connect('127.0.0.1','root','','nanastv');
					$query = mysqli_query($connect,"SELECT * FROM restorans INNER JOIN images ON restorans.idre = images.restorans_idre  WHERE idre ='". $_GET['idre']. "' ");
					$res = $query->fetch_assoc();  ?>
	    		  	<div class="col-6">
	    		  		<div>
		    		  		<h3><?php echo  $res['headline']?></h3>
		    		  	</div>
		    		  	<div>
		    		  		<p><?php echo $res['text']?></p>
		    		  	</div>
		    		  	<div>
		    		  		<p>Адрес: <?php echo $res['adress']?></p>
		    		  	</div>
		    		  	<div>
		    		  		<p>Тел.  для справок: <?php echo $res['tel']?></p>
		    		  	</div>
		    		  	<div>
		    		  		<p>Сайт: <?php echo $res['site']?></p>
		    		  	</div>
		    		  	<input name="idre" type="hidden" value=<?php echo '"'. $res['idre'].'"'?>>
    		   			 <button type="submit" class="btn btn-outline-danger">В избранное</button>
	    		  	</div>
    		  	</div>
    		  	
		  	</form>
		  </div>
	  </div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>