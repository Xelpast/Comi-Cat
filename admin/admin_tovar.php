<?php session_start();?>
<?php require_once '../functions/connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Админка товаров</title>
</head>
<body>
	<h1 style="text-align:center; font-size=24px;">Редактирование товаров</h1>
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
<form action="/admin/admin_tovar/admin_tovar.php" method="post" enctype="multipart/form-data">

	<p>
		<input type="file" name="im">
	</p>

	<input type="text" name="img" value="<?php echo $res->img ?>"><br>
	<input type="text" name="korm" value="<?php echo $res->korm ?>"><br>
	<input type="text" name="price" value="<?php echo $res->price ?>"><br>
	<input type="submit" name="save" value="сохранить" >

</form>
<br>
<img src="/admin_tovar/img/<?php echo $res->img ?>"

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