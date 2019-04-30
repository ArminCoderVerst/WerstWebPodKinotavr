<!doctype html>
<html lang="ru">
<head>

<base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/admin/'; ?>" />
	<meta charset="utf-8">
	<title>Administrator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="library/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="library/css/main-style.css" rel="stylesheet" type="text/css">
		
</head>

<body>

<?php
	$connection = mysqli_connect("localhost", "root", "123", "users_admi_kn") or die('Error sql_connect');
	
	if (!isset($_COOKIE['token'])) {
?>
	<div class="form-default" method="post">
	 	<div class="form-group text-center">
	 		<a class="wid-logo"><span class="logo">K</span>inotavr.by</a>
	 		<h5 class="hiden">Вход в систему</h5>
	 			<!--alert form-->
				<div class="alert alert-danger powins" id="error" style="display: none" role="alert">Ошибка авторизации</div>
				<div class="alert alert-success" id="notError" style="display: none" role="alert">Верно</div>

	 		<input name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите логин" required>	
	 	</div>
	 	<div class="form-group">
	 		<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль" required>
	 	</div>
	 	<button type="button" class="btn btn-primary btn-lg btn-block" id="enter">Войти</button>
	</div>
<?php } else { 
	$query = mysqli_query($connection, "SELECT id FROM users WHERE token='{$_COOKIE['token']}'");
		if (mysqli_num_rows($query) > 0)
		{
?>
<!--start container-->
<main role="main" class="container-fluid">
	<header>
		<nav class="navbar navbar-dark bg-dark fixed-top">
			<a href="#" class="navbar-brand panel-wid"><span class="panel">K</span>inotavr.by</a>
		</nav>
	</header>
	<div class="text-center">
		<button type="button" class="btn btn-primary btn-sm" id="exit">Выйти</button>
	</div>
</main>
<!--end container-->
		<?php } else { ?>
			Ага, конечно, ты меня взломал!
		<?php } ?>
	<?php } ?>
	
	<script src="library/jquery-3.2.1.min.js"></script>
	<script src="library/js/bootstrap.bundle.min.js"></script>
	<script src="validation.js"></script>
</body>
</html>