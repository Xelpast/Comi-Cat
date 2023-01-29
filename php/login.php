<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=Введите логин");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Введите пароль");
	    exit();
	}else{
		$sql = "SELECT * FROM infousers WHERE login='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login'] === $uname && $row['password'] === $pass) {
            	$_SESSION['login'] = $row['login'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: home.php");
		        exit();
            }else{
				header("Location: index.php?error=Неправильный логин или пароль");
		        exit();
			}
		}else{
            header("Location: index.php?error=123");
            exit();
        }
	}
}