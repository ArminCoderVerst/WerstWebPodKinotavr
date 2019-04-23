<!doctype html>
<html lang="en">
<head>
<base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/admin/'; ?>" />
	<meta charset="utf-8">
	<title>Administrator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="library/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="library/css/main-style.css" rel="stylesheet" type="text/css">
	
	<script src="library/jquery-3.2.1.min.js"></script>
	<script src="library/js/bootstrap.bundle.min.js"></script>
	
</head>

<body>
	<?php
		session_start();
		$connection = mysqli_connect("localhost", "root", "123");
		$select_db = mysqli_select_db($connection, 'users_admi_kn');

		if(isset($_POST['login']) and isset($_POST['password'])){
			$log = $_POST['login'];
			$pas = $_POST['password'];
			
			$query = "SELECT * FROM users WHERE login='$log' AND password='$pas' ";
			$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
			$count = mysqli_num_rows($result);
			
			if($count == 1){
				$_SESSION['login'] = $log;
			}else{
				$fmsq = "Ошибка";
			}
		}
		if(isset($_SESSION['login'])){
			$log = $_SESSION['login'];
			$mess =  "Вы вошли под: " .$log ."";
		}
	?>

	<form class="form-default text-center" method="post">
	 	<div class="form-group">
	 		<a class="wid-logo"><span class="logo">K</span>inotavr.by</a>
	 		<h5>Вход в систему</h5>
	 		<?php if(isset($fmsq)){?><div class="alert alert-danger" role="alert"><?php echo $fmsq; ?></div><?php }?>
	 		<?php if(isset($mess)){?><div class="alert alert-success" role="alert"><?php echo $mess; ?></div><?php }?>
	 		
	 		<input name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите логин" required>	
	 	</div>
	 	<div class="form-group">
	 		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" required>
	 	</div>
	 	<button type="submit" class="btn btn-primary btn-lg btn-block">Войти</button>
	</form>
	
</body>
</html>