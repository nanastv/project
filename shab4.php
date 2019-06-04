<!DOCTYPE html>
<html>
<head>
	<title>	autor	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
	<div class="ml-5 mt-5">
				<form method="POST" action="insert.php" enctype="multipart/form-data">
					<input type="" placeholder="Заголовок" name="post_headline">
					<input type="" placeholder="Текст" name="post_text">
					<input type="file" name="img">
					<?php echo '<input type="hidden" name="id" value="'.$da['idre'].'"  >'?>
					<input type="" placeholder="adress" name="post_adress">
					<input type="" placeholder="Тel" name="post_tel">
					<input type="" placeholder="site" name="post_site">
					<button>da</button>
				</form>
	</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>