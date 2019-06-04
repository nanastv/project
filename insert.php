<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
	$query = mysqli_query($connect,"INSERT INTO restorans (headline, text, logores, idre, adress, tel, site) VALUES ('" . $_POST['post_headline']. "', '" . $_POST['post_text']. "', 'img/" . $_FILES['img']['name']. "','" . $_POST['idre']. "','" . $_POST['post_adress']. "','" . $_POST['post_tel']. "','" . $_POST['post_site']. "' ) ");		
	move_uploaded_file($_FILES['img']['tmp_name'],'images/' . $_FILES['img']['name']);
	header('Location: http://pro/shab4.php?id='.$_GET['id']);
 ?>