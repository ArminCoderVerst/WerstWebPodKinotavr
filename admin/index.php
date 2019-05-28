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
<header class="headers" id="headers">
	<nav class="navbar navbar-dark bg-dark fixed-top">
		<a href="#" class="navbar-brand panel-wid"><span class="panel">K</span>inotavr.by</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
		      	  <button type="button" class="btn btn-danger btn-sm btn-block mt-1" id="exit">Выйти</button>
			  </li>
			</ul>
		</div>
	</nav>
</header>

<main role="main">
	<!--start content-->
	<div class="container-fluid" style="margin-top: 53px;">
		<div class="row">
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-secondary hover-block-carousel" data-toggle="modal" data-target="#exampleModalcarousel">
				  <div class="card-header">Добавить фото в слайдер</div>
				  <div class="card-body">
					<h5 class="card-title">Сейчас в кинотеатрах</h5>
					<p class="card-text">Сдесь отображается новинки из фильмов, которые проходят в кинотеатрах Гомеля.</p>
				  </div>
				</div>
			</div>
			<!--modal carousel-->
				<div class="modal fade" id="exampleModalcarousel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Редактирование слайдера</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<form id="form" action="#" method="post" enctype="multipart/form-data">  
							<div class="form-group">
								<input class="form-control-file" type="file" id="img" multiple accept="image/*" name="img"/>
								<input type="hidden" id="fileName"/>
							</div>
							<div class="form-group">
								<img class="mt-1 img-fluid" id="img-preview"/>
								<br />
								<a href="#" id="reset-img-preview" class="link-delete">удалить изображения</a>
							</div>
							<div class="form-group">
								<label for="exampleInputZagolovok">Заголовок фильма</label>
								<input type="text" class="form-control" id="exampleInputZagolovok" placeholder="Введите заголовок фильма">
							</div>
							<div class="form-group">
								<label for="exampleInputText">Альтернативный текст</label>
								<input type="text" class="form-control" id="exampleInputText" placeholder="Введите альтернативный текст">
							</div>
							<div class="form-group">
								<label for="exampleInputLink">Ссылка на билет</label>
								<input type="text" class="form-control" id="exampleInputLink" placeholder="Введите ссылку на билет">
							</div>
							<div class="form-group text-center">
								<label for="exampleInputRedakt" class="font-weight-bold">Редактирование слайдера</label>
									<!--удаления фото с базы данных-->
									<?php
										$qr = mysqli_query($connection, "SELECT * FROM pictures");

										if (mysqli_num_rows($qr) > 0) {
											while ($row = mysqli_fetch_array($qr)) {
									?>
										<!--отображение редактирования фото в слайдере-->
										<div class="text-left" id="pic<?php echo $row["id"];?>">
											<!--отображения заголовка слайдера с бд-->
											<span><?php echo $row["zagolovok_id"]; ?></span>
												<!--значок на удаление из слайдера-->
												<span style="cursor: pointer;" class="deletePic close" aria-label="Close" id_pic="<?php echo $row["id"]; ?>">
													<span aria-hidden="true">&times;</span>
												</span>
										</div>

									<?php }
										}
									?>
							</div>
						</form>
					  </div>
					  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
							<button type="button" class="btn btn-primary" id="upload">Добавить</button>
					  </div>
					</div>
				  </div>
				</div>
			<!--end modal carousel-->
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-secondary hover-block-editing" data-toggle="modal" data-target="#exampleModaleditingNew">
				  <div class="card-header">Удаление новостей/статей</div>
				  <div class="card-body">
					<h5 class="card-title">Архив новостей/статей</h5>
					<p class="card-text">Сдесь отображаються новости или какие либо спецпроекты, которые были добавлены на сайт.</p>
				  </div>
				</div>
			</div>
			<!--modal editing-->	
				<div class="modal fade" id="exampleModaleditingNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Удаление новостей/статей</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<div class="form-group text-center">
							...
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
						<button type="button" class="btn btn-primary">Добавить</button>
					  </div>
					</div>
				  </div>
				</div>
			<!--emd modal editing-->

			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-secondary hover-block-add-news" data-toggle="modal" data-target="#exampleModaladdNews">
				  <div class="card-header">Добавить новый фильм</div>
				  <div class="card-body">
					<h5 class="card-title">Новинки из фильмов</h5>
					<p class="card-text">Сюда вносятся новые фильмы, либо какие-нибудь мероприятия которые проходят в кинотеатре.</p>
				  </div>
				</div>
			</div>
			<!--modal add news-->
				<div class="modal fade" id="exampleModaladdNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"><!--bd-example-modal-xl-->
				  <div class="modal-dialog" role="document"><!--modal-xl modal-dialog-centered-->
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Добавление фильма</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
							<form id="form" action="#" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<input class="form-control-file" type="file" id="img-news" multiple accept="image/*" name="img"/>
									<!-- <input type="hidden" id="fileName"/> -->
								</div>
								<div class="form-group">
									<img class="mt-1 img-fluid" id="img-preview-news"/>
									<br />
									<a href="#" id="reset-img-preview-news" class="link-delete">удалить изображения</a>
								</div>
							</form>
					  		<div class="form-group">
					  			<label for="exampleInputVozLeng">Возраст/Язык</label>
								<input type="text" class="form-control" id="exampleInputVozLeng" placeholder="Введите возрастное ограничение и язык">
					  		</div>
							<div class="form-group">
								<label for="exampleInputStat">Заголовок статьи</label>
								<input type="text" class="form-control" id="exampleInputStat" placeholder="Введите название статьи">
							</div>
							<div class="form-group">
								<label for="exampleInputJanr">Введите жанр</label>
								<input type="text" class="form-control" id="exampleInputJanr" placeholder="Введите жанр фильма">
							</div>
							<div class="form-group">
								<label for="exampleInputData">Введите дату</label>
								<input type="text" class="form-control" id="exampleInputData" placeholder="Введите дату выхода">
							</div>
							<div class="form-group">
								<label for="exampleInputFormDisplay">Форма показа</label>
								<input type="text" class="form-control" id="exampleInputFormDisplay" placeholder="Введите форму показа">
							</div>
							<div class="form-group">
								<div class="dropdown" id="myDropdown">
								  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Категория</button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<div class="custom-control custom-checkbox ml-1">
										<input type="checkbox" class="custom-control-input" id="customControlKalinina">
										<label class="custom-control-label" for="customControlKalinina">К-р "Калинина"</label>
									</div>
									<div class="custom-control custom-checkbox ml-1">
										<input type="checkbox" class="custom-control-input" id="customControlOctober">
										<label class="custom-control-label" for="customControlOctober">К-р "Октябрь"</label>
									</div>
									<div class="custom-control custom-checkbox ml-1">
										<input type="checkbox" class="custom-control-input" id="customControlMir">
										<label class="custom-control-label" for="customControlMir">К-р "Мир"</label>
									</div>
									<div class="custom-control custom-checkbox ml-1">
										<input type="checkbox" class="custom-control-input" id="customControlNews">
										<label class="custom-control-label" for="customControlNews">Новости</label>
									</div>	
									<div class="custom-control custom-checkbox ml-1">
										<input type="checkbox" class="custom-control-input" id="customControlNowNews">
										<label class="custom-control-label" for="customControlNowNews">Сейчас в кино</label>
									</div>
									<div class="custom-control custom-checkbox ml-1">
										<input type="checkbox" class="custom-control-input" id="customControlSoon">
										<label class="custom-control-label" for="customControlSoon">Скоро</label>
									</div>
								  </div>
								</div>
							</div>
							
							<!--add repert kalinina-->
							<div class="form-group">
								<label for="exampleInputKinoKalin" class="font-weight-bold">Кинотеатр: "Калинина"</label>
							</div>
							<div class="form-group">
								<div class="col-auto col-sm-auto col-md-auto col-lg-auto">
									<div class="row">
										<label for="exampleInputDataReliz">Дата показа (1) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (2) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (3) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (4) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (5) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (6) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (7) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (8) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (9) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (10) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<label class="font-weight-bold" for="exampleInputMany">Цены на билеты:</label>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Дневные сеансы</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Вечерние сеансы, в будние дни и все сеансы в выходные дни</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Ночные сеансы</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<!--end repert kalinina-->
							
							<!--add repert October-->
							<div class="form-group">
								<label for="exampleInputKinoOctober" class="font-weight-bold">Кинотеатр: "Октябрь"</label>
							</div>
							<div class="form-group">
								<div class="col-auto col-sm-auto col-md-auto col-lg-auto">
									<div class="row">
									<label for="exampleInputDataReliz">Дата показа (1) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (2) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (3) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (4) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (5) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (6) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (7) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (8) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (9) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (10) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<label class="font-weight-bold" for="exampleInputMany">Цены на билеты:</label>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Дневные сеансы</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Вечерние сеансы, в будние дни и все сеансы в выходные дни</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Ночные сеансы</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<!--end	add repert October-->
							
							<!--add repert Mir-->
							<div class="form-group">
								<label for="exampleInputKinoMir" class="font-weight-bold">Кинотеатр: "Мир"</label>
							</div>
							<div class="form-group">
								<div class="col-auto col-sm-auto col-md-auto col-lg-auto">
									<div class="row">
									<label for="exampleInputDataReliz">Дата показа (1) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (2) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (3) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (4) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (5) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (6) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (7) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (8) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (9) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">

										<label for="exampleInputDataReliz">Дата показа (10) :</label>
										<input type="text" class="form-control" id="exampleInputDataReliz" placeholder="Введите дату показа">
										<label for="exampleInputSession">Сеанс-(ы):</label>
										<input type="text" class="form-control" id="exampleInputSession" placeholder="Введите время сеанса">
									</div>
								</div>
							</div>
							<div class="form-group text-center">
								<label class="font-weight-bold" for="exampleInputMany">Цены на билеты:</label>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Дневные сеансы</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Вечерние сеансы, в будние дни и все сеансы в выходные дни</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<div class="form-group">
								<label for="exampleInputSession">Ночные сеансы</label>
								<textarea class="form-control" id="exampleInputMany" rows="1"></textarea>
							</div>
							<!--end add repert Mir-->
							
							<!--o films -->
							<div class="form-group text-center">
								<label for="exampleInputInfotmFilms" class="font-weight-bold">Информация о фильме</label>
							</div>
							<div class="form-group">
								<label for="exampleInputInformFilms">Возрастное ораничение</label>
								<input type="text" class="form-control" id="exampleInputInformFilms" placeholder="Введите возрастное ограничение">
							</div>
							<div class="form-group">
								<label for="exampleInputJanr">Жанр</label>
								<input type="text" class="form-control" id="exampleInputJanr" placeholder="Введите жанр фильма">
							</div>
							<div class="form-group">
								<label for="exampleInputOriginalName">Оригинальное название</label>
								<input type="text" class="form-control" id="exampleInputOriginalName" placeholder="Введите оригинальное название фильма">
							</div>
							<div class="form-group">
								<label for="exampleInputYear">Год</label>
								<input type="text" class="form-control" id="exampleInputYear" placeholder="Введите год">
							</div>
							<div class="form-group">
								<label for="exampleInputCountry">Страна</label>
								<input type="text" class="form-control" id="exampleInputCountry" placeholder="Введите страну">
							</div>
							<div class="form-group">
								<label for="exampleInputAboutFilms">Кратко о фильме</label>
								<textarea class="form-control" id="exampleInputAboutFilms" rows="3"></textarea>
							</div>
							<!--end o films -->
						</div>
						<div class="form-group text-center">
								<label for="exampleInputRedNews" class="font-weight-bold">Редактирование новостей</label>
						</div>
					  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
							<button type="button" class="btn btn-primary">Добавить</button>
					  </div>
					</div>
				  </div>
				</div>
			<!--end modal add news-->
			<div class="col-12 col-sm-auto col-md-4 col-lg-3 mt-2">
				<div class="card text-white bg-primary">
				  <div class="card-header">Header</div>
				  <div class="card-body">
					<h5 class="card-title">В стадии разработки</h5>
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
	<script src="deletePicture.js"></script>
	<script src="addPicture.js"></script>
	<script src="uploadPicture.js"></script>
	
	<script>
		//предпросмотр фото в слайдере
		$('#img').change(function() {
				var input = $(this)[0];
				if (input.files && input.files[0]) {
					if (input.files[0].type.match('image.*')) {
						var reader = new FileReader();
						$("#fileName").val(input.files[0].name);
						reader.onload = function(e) {
							$('#img-preview').attr('src', e.target.result);
						}
						reader.readAsDataURL(input.files[0]);
						fileUpload();
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

	<script>
		//предпросмотр фото в новостях
			$('#img-news').change(function() {
				var input = $(this)[0];
				if (input.files && input.files[0]) {
					if (input.files[0].type.match('image.*')) {
						var reader = new FileReader();
						reader.onload = function(e) {
							$('#img-preview-news').attr('src', e.target.result);
						}
						reader.readAsDataURL(input.files[0]);
					} else {
						console.log('ошибка, не изображение');
					}
				} else {
					console.log('хьюстон у нас проблема');
				}
			});
			
			$('#reset-img-preview-news').click(function() {
				$('#img').val('');
				$('#img-preview-news').attr('src', 'default-preview.jpg');
			});
			
			$('#form').bind('reset', function() {
				$('#img-preview-news').attr('src', 'default-preview.jpg');
			});

	</script>
	
	<script>
		//фиксация dropdown
		$('.dropdown').click(function(){
			$('.dropdown-menu').show();
			$('.dropdown-menu').stop();
		});
	</script>
	
	<script>
		//плавный выпад dropdown
		$('.dropdown').on('show.bs.dropdown', function (e){
				$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
		});
		$('.dropdown').on('hide.bs.dropdown', function (e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
		});
	</script>
	
</body>
</html>