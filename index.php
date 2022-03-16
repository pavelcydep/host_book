
<!DOCTYPE html>
<html lang="ru">
	<head>

		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="./css/styles.css">
		<?php
		include("bd.php");
		?>
	</head>
	<body>
<div id="wrapper">
			<h1>Гостевая книга</h1>
			<div class="note">
<?php 
require("./Comment.php");
require('./DB.php');
$db = new DB;
$result = $db->getAll('comments');
$comment= new Comment($result);
$comment->render();
?>
</div>	
		
<div id="form">
				<form action="/form.php" method="POST"  enctype='multipart/form-data'>
					<p><input class="form-control" name="userName" placeholder="Ваше имя"></p>
					<p><textarea class="form-control" name="comment" placeholder="Ваш отзыв"></textarea></p>
					Выберите файл:<input type='file' class="form-control" name='filename' size='10' /><br /><br />
					<button type="submit" name="upload" class="btn btn-primary">Добавить3 комментарий</button>
				
	
	</form>
			</div>
		</div>

</body>
</html>

