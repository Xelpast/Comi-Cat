<?php session_start();?>
<?php require_once '../functions/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка товаров</title>
</head>
<body>
	<h1 style="text-align:center; font-size=24px;">Редактирование контактной информации</h1>
<div style="text-align:center; font-size=24px;">

<?php if(!empty ($_SESSION["login"])) :?>
	
<?php echo "Вы в админке ".$_SESSION['login']; ?>
	<br>
		<a href="/logout.php"> Выйти</a>
	<br>
<?php
$sql = $pdo->prepare("SELECT * FROM tovar");
$sql->execute();
$res = $sql->fetch(PDO::FETCH_OBJ);
?>
<form action="/admin/admin_tovar/admin_tovar.php" method="post">

	<input type="text" name="img" value="<?php echo $res->img ?>">
	<input type="text" name="korm" value="<?php echo $res->korm ?>">
	<input type="text" name="price" value="<?php echo $res->price ?>">
	<input type="submit" value="сохранить" >

</form>

<?php
	$img=$_POST["img"];
	$korm=$_POST["korm"];
	$price=$_POST["price"];
	$row="UPDATE tovar SET img=:img,korm=:korm,price=:price";
	$query=$pdo->prepare($row);
	$query->execute(["img"=>$img,"korm"=>$korm,"price"=>$price]);
?>

<?php else:
	echo '<h2>Вы не админ</h2>';
	echo '<a href="/">На главную</a>';
?>

<?php endif ?>
</div>
</body>
</html>