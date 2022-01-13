
<!DOCTYPE html>
<html lang="ru">
	<head>

		<meta charset="utf-8">  
		<title>Гостевая книга</title>
		<link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="./css/styles.css">
		
	</head>
	<body>
<div id="wrapper">
			<h1>Гостевая книга</h1>
			<div class="note">
<?php 
include("comment.php");
comment($data);
?>
</div>	
		
<div id="form">
				<form action="/form.php" method="POST">
					<p><input class="form-control" name="userName" placeholder="Ваше имя"></p>
					<p><textarea class="form-control" name="comment" placeholder="Ваш отзыв"></textarea></p>
					<p><input type="submit"  class="btn btn-info btn-block" value="Сохранить"></p>
				</form>
			</div>
		</div>





</body>
</html>

