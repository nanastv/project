<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
	$query = mysqli_query($connect,"INSERT INTO users (email, login, pass) VALUES ('" . $_POST['email']. "','" . $_POST['login']. "','" . $_POST['pass']. "') ");
	header('Location: http://pro/index.php');
 ?>