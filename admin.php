<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вход админку</title>
</head>
<body>
<div style="text-align:center; font-size=24px;">

<?php if(!empty ($_SESSION["login"])) :?>

<?php echo "Вы в админке ".$_SESSION['login']; ?>
	<br>
<a href="/logout.php"> Выйти из админки</a>
<?php else:
	echo '<h2>Вы не админ</h2>';
	echo '<a href="/">На главную</a>';
?>

<?php endif ?>
</div>
</body>
</html>