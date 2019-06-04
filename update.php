<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');

	if ($_FILES['img']['name'] != null) {
		$qu = mysqli_query($connect,"UPDATE users SET login='".$_POST['login']."' , avatar='images/".$_FILES['img']['name'] ."', email='".$_POST['email']."' WHERE id='". $_GET['id'] ."'");	
	move_uploaded_file($_FILES['img']['tmp_name'],'images/' . $_FILES['img']['name']);
	header('Location: http://pro/prof.php?id='.$_GET['id']);
	} else {
		$qu = mysqli_query($connect,"UPDATE users SET login='".$_POST['login']."', email='".$_POST['email']."' WHERE id ='". $_GET['id'] ."'");	
	header('Location: http://pro/prof.php?id='.$_GET['id']);
	};
 ?>