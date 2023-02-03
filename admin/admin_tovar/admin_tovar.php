<?php
$user="root";
$password="root";
$host="localhost";
$db="testing";
$dbh= 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);

	$img=$_POST["img"];
	$korm=$_POST["korm"];
	$price=$_POST["price"];
	$row="UPDATE tovar SET img=:img,korm=:korm,price=:price";
	$query=$pdo->prepare($row);
	$query->execute(["img"=>$img,"korm"=>$korm,"price"=>$price]);
	echo '<meta HTTP-EQUIV="Refresh" Content="0; URL=/admin/admin_tovar.php">';
?>