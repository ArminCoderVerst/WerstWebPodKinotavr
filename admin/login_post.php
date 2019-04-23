<?php
	// подключаемся к серверу
	$link = mysqli_connect("localhost", "root", "123", "users_admi_kn") 
	or die("Ошибка подключения" . mysqli_error($link));
	
	session_start();
	if($_POST['login'] == "" or $_POST['password'] == "")
	{
		header("Location: index.php");
	}else
	{
		$password = $_POST['password'];
		$login = $_POST['login'];
		$pro = mysqli_query("SELECT * FROM users_admi_kn WHERE login='$login' AND password='$password'");
		$res = mysqli_fetch_array($pro);
		if(mysqli_num_rows($pro) == 0)
		{
			header("Location: inpex.php");
		}else
		{
			$_SESSION['ursename'] = $res['login'];
			$_SESSION['pass'] = $res['password'];
			echo "Вы вошли !";
		}
	}
?>