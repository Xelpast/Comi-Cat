<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вход админку</title>
</head>
<body>
	<h2 style="text-align:center;padding-top:10px">Вход в админку</h2>
	<form style="text-align:center;padding-top:10px" action="admin/admin.php" method="post">
		<div class="form-group"></div>
			<input type="text" placeholder="Введите логин" name="login">
		</div>
		<div class="form-group">
			<input type="text" placeholder="Введите пароль" name="password">
		</div>
		<button type="submit" class="btn btn-primary">Войти в Ойти</button>
	</form>
</body>
</html>