<?php 
	$connect = mysqli_connect('127.0.0.1','root','','nanastv');
    $query = mysqli_query($connect,"INSERT INTO likes (restorans_idre, users_id) VALUES ('" . $_POST['idre']. "','" .  $_GET['id']. "') ");
	header('Location: http://pro/post.php?id='.$_GET['id'].'&idre='.$_POST['idre']);
 ?>