<?php
$user="root";
$password="root";
$host="localhost";
$db="testing";
$dbh= 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);

if(isset($_POST["save"])){
	$list=['.php','.zip','.html','.js','css'];
		foreach($list as $item){
			if(preg_match("/$item$/", $_FILES['im']['name'])) exit ("Расширение файла не подходит");
		}
		$type=getimagesize($_FILES['im']['tmp_name']);
		if($type && ($type['mime'] !='img/jpg' || $type['mime'] !='img/png')){
			if($_FILES['im'] ['name']<1024 * 1000){
				$upload = 'img/'.$_FILES['im'] ['name'];

				if(move_uploaded_file($_FILES['im']['tmp_name'], $upload)) echo"Файл загружен";
				else echo("Ошибка загрузки файла");
			}
			else exit("Размер файла превышен");
		}
		else exit("Тип файла не подходит");
}

	$korm=$_POST["korm"];
	$price=$_POST["price"];
	$row="UPDATE tovar SET img=:img,korm=:korm,price=:price";
	$query=$pdo->prepare($row);
	$query->execute(["img"=>$_FILES['im']['tmp_name'],"korm"=>$korm,"price"=>$price]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/admin_tovar.php">';
?>