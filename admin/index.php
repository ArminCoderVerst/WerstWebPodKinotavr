<!doctype html>
<html lang="ru">
<head>

<base href="<?php echo stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://' . $_SERVER['SERVER_NAME'].'/admin/'; ?>" />
	<meta charset="utf-8">
	<title>Administrator</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="library/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="library/css/main-style.css" rel="stylesheet" type="text/css">
	
	<style>
		#img-preview{
			width: 310px;
			height: 120px;
		}
    </style>
	
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
<header>
	<nav class="navbar navbar-dark bg-dark fixed-top">
		<a href="#" class="navbar-brand panel-wid"><span class="panel">K</span>inotavr.by</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
		      	  <button type="button" class="btn btn-secondary btn-sm btn-block mt-1" id="exit">Выйти</button>
			  </li>
			</ul>
		</div>
	</nav>
</header>

<main role="main">
	<!--start content-->
	<div class="container-fluid" style="margin-top: 53px;">
		<div class="row">
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2 hover-block" data-toggle="modal" data-target="#exampleModal">
				<div class="card text-white bg-secondary">
				  <div class="card-header">Добавить фото в слайдер</div>
				  <div class="card-body">
					<h5 class="card-title">Сейчас в кино</h5>
					<p class="card-text">Сдесь отображается новинки из фильмов, которые проходят в кинотеатрах Гомеля.</p>
				  </div>
				</div>
			</div>
			<!--modal-->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Редактирование слайдера</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form id="form" action="" method="post" enctype="multipart/form-data">   
							<div>
								<input type="file" id="img" multiple accept="image/*" name="img"/>
							</div>
							<div>
								<img class="mt-1" id="img-preview"/>
								<br />
								<a href="#" id="reset-img-preview" class="link-delete">удалить изображения</a>
							</div>
						</form>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
						<button type="button" class="btn btn-primary">Добавить</button>
					  </div>
					</div>
				  </div>
				</div>
			<!--end modal-->
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-primary">
				  <div class="card-header">Header</div>
				  <div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-primary">
				  <div class="card-header">Header</div>
				  <div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-primary">
				  <div class="card-header">Header</div>
				  <div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-primary">
				  <div class="card-header">Header</div>
				  <div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-primary">
				  <div class="card-header">Header</div>
				  <div class="card-body">
					<h5 class="card-title">Primary card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				  </div>
				</div>
			</div>
		</div>	
	</div>
</main>
			
<!--end container-->
		<?php } else { ?>
			Ага, конечно, ты меня взломал!
		<?php } ?>
	<?php } ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="library/js/bootstrap.bundle.min.js"></script>
	<script src="validation.js"></script>
	
	<script>
		$('#img').change(function() {
				var input = $(this)[0];
				if (input.files && input.files[0]) {
					if (input.files[0].type.match('image.*')) {
						var reader = new FileReader();
						reader.onload = function(e) {
							$('#img-preview').attr('src', e.target.result);
						}
						reader.readAsDataURL(input.files[0]);
					} else {
						console.log('ошибка, не изображение');
					}
				} else {
					console.log('хьюстон у нас проблема');
				}
			});
			
			$('#reset-img-preview').click(function() {
				$('#img').val('');
				$('#img-preview').attr('src', 'default-preview.jpg');
			});
			
			$('#form').bind('reset', function() {
				$('#img-preview').attr('src', 'default-preview.jpg');
			});

	</script>
</body>
</html>