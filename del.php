	<?php 
		$connect = mysqli_connect('127.0.0.1','root','','nanastv');
		$query = mysqli_query($connect,"DELETE FROM likes WHERE restorans_idre='". $_POST['idre']. "' AND users_id='". $_GET['id']. "' ");
		header('Location: http://pro/prof.php?id='.$_GET['id']);
	 ?>