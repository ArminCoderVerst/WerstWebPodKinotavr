<!doctype html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="library/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="fonts/icons-style.css" rel="stylesheet" type="text/css">

	<meta name="Description" content="Киноафиша Гомеля"/>
	<meta name="Keywords" content="киноафиша гомеля, кино афиша гомеля, афиша гомеля, кино гомель, киноафиша гомеля октябрь, киноафиша гомеля калинина, киноафиша гомеля мир, афиша кинотеатров гомеля, афиша кинотеатра октябрь гомель, афиша кинотеатра калинина гомель, афиша кинотеатра мир гомель, киноафиша всех кинотеатров гомеля, афиша кинотеатров гомеля, расписание сеансов кинотеатров гомеля, расписание сеансов кинотеатров гомеля, афиша всех кинотеатров гомеля, киноафиша в моем городе, афиша кинотеатров в моем городе, кинотеатры гомеля, 3d кинотеатры гомеля, цены на билеты в кинотеатрах гомеля, бронирование билетов в кинотеатрах гомель, киноафиша беларуси, купить билет в кино гомель, купить билет в кинотеатр гомеля, онлайн покупка билетов в кинотеатры гомеля, афиша гомель, кинотеатр октябрь гомель, кинотеатр мир гомель, кинотеатр калинина гомель, 3d кинотеатр гомель, фильмы в кинотеатрах гомеля, премьеры в кинотеатрах гомеля, скоро в кинотеатрах гомеля, расписание кино гомель, репертуар кинотеатров гомеля, купить билет в кино гомель, видеозал гомель, детские фильмы в кинотеатрах гомеля, фильмы для детей в кинотеатрах гомеля, стоимость билета в кино гомель, стоимость билета в кинотеатрах гомеля, цена билета в кино гомель, мультфильмы в кинотеатрах гомеля, купить билет в кино онлайн гомель, бронировать место в кино гомель, купить билет в кинотеатр, мероприятия гомеля, мероприятия в кинотеатрах гомеля, акции гомеля, акции кинотеатров гомеля, сходить в кино гомель, официальный сайт кинотеатров гомеля, официальный сайт афиш кинотеатров гомеля, обсуждение кино гомель, график сеансов гомель, график премьер гомель, график показа фильмов гомель, киноманы гомеля, форум киноманов гомеля, кинотеатры гомеля, адрес кинотеатра октябрь гомель, адрес кинотеатра калинина гомель, адрес кинотеатра мир гомель, телефон кинотеатра октябрь гомель, телефон кинотеатра калинина гомель, телефон кинотеатра мир гомель, кинотеатр мир гомель, кинотеатр октябрь гомель, кинотеатр калинина гомель, сегодня в кино гомель, куп кинотавр, официальный сайт куп кинотавр, кинотавр гомель, официальная афиша гомеля, официальная киноафиша гомеля, поход в кинотеатр группой гомель, снять зал в кинотеатре гомель"/>
	<title>Киноафиша Гомеля | Официальный сайт КУП "Кинотавр"</title>

</head>

<body>

<header>
	<!--nav panel-->
			<?php require "../blocks/header.php" ?>
	<!--end nav penel-->	
</header>

<?php
	$link = mysqli_connect("127.0.0.1", "root", "123", "users_admi_kn") or die("Error sql_connect");

	$query = mysqli_query($link, "SELECT * FROM pictures");

	$res = [];

	while ($row = mysqli_fetch_array($query))
	{
		$res[] = $row;
	}
?>
<!--carusel-->
<main role="main" class="mt-5"><!--mt-5-->
	<div id="carouselExampleIndicators" class="carousel slide mobil-finde" data-ride="carousel" data-interval="false" data-pause="true"><!--carousel-fade-->
		<!--Indicators-->
		<ol class="carousel-indicators">
			<?php for($k = 0; $k < count($res); $k++) { ?>
			
				<li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $k; ?>" class="<?php echo $k == 0 ? "active" : "" ?>"></li>
				<!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
				<!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
			<?php
				} 
			?>
		</ol>
		<div class="carousel-inner">	
			<?php for($k = 0; $k < count($res); $k++) { ?>
				<div class="carousel-item <?php echo $k == 0 ? "active" : "" ?>">
					<div class="img-prev-news" style="background-image: url('pictures/<?php echo $res[$k]['slide_id'];?>');"></div>
						<div class="container-fluid">
							<div class="carousel-caption text-left"><!--d-none d-md-block text-left-->
								<h1><?php echo $res[$k]['zagolovok_id']; ?></h1>
								<p><?php echo $res[$k]['text_id']; ?></p>
								<p><a class="btn btn-primary btn-sm" href="<?php echo $res[$k]['link_films_id']; ?>" role="button">Купить билет</a></p>		
							</div>
						</div>
				</div>
			<?php } ?>
<!--
			<div class="carousel-item">
				<div class="img-prev-news-two"></div>
					<div class="container-fluid">
						<div class="carousel-caption text-left">
							<h1>Ничего хорошего в отеле "Эль Рояль"</h1>
							<p>C 11 Октября в кинотеатрах им.Калинина и "Октябрь"</p>
							<p><a class="btn btn-primary btn-sm" href="#" role="button">Купить билет</a></p>		
						</div>
					</div>		
			</div>
			<div class="carousel-item">
				<div class="img-prev-news-three"></div>
					<div class="container-fluid">
						<div class="carousel-caption text-left">
							<h1>Хэллоуин</h1>
							<p>C 23 Октября в кинотеатрах им.Калинина и "Октябрь"</p>
							<p><a class="btn btn-primary btn-sm" href="#" role="button">Купить билет</a></p>
						</div>
					</div>		
			</div>
-->
		</div>
		<!--Сontrols-->
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon icon_1" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon icon_2" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</main>
<!--End carusel-->
 
<!--Aphisha kino-->

<!--Buttons aphisha-->
<div class="container-fluid">
	<div class="row justify-content-lg-end justify-content-md-end">
		<div class="col-12 col-md col-lg aphisha">
			<h4>Афиша кино</h4>
		</div>
		
		<div class="col-3 col-sm-4 col-md-auto col-lg-auto">
			<button type="button" class="btn btn-link">Новости</button>
		</div>
		<div class="col-5 col-sm-4 col-md-auto col-lg-auto">
			<button type="button" class="btn btn-link">Сейчас в кино</button>
		</div>
		<div class="col-4 col-sm-4 col-md-auto col-lg-auto">
			<button type="button" class="btn btn-link">Скоро</button>
		</div>
	</div>
</div>
<!--End buttons aphisha-->

<!--Dropdown aphisha-->
<div class="container-fluid mb-1">
	<div class="row">
		<div class="col-12 col-lg-3 col-sm-12 col-md-6 mb-1">
			<div class="dropdown">
				<button class="btn ripple btn_open btn-default dropdown-toggle col-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-location">Все кинотеатры, Гомель</i></button>
				<div class="dropdown-menu dropdown-menu_open" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">К-р им."Калинина"</a>
					<a class="dropdown-item" href="#">К-р "Октябрь"</a>
					<a class="dropdown-item" href="#">К-р "Мир"</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-sm-12 col-md-6 mb-1">
			<div class="dropdown">
				<button class="btn btn_open btn-default dropdown-toggle col-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-calendar">Сегодня, 25 октября</i></button>
				<div class="dropdown-menu dropdown-menu_open" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Завтра, 26 октября</a>
					<a class="dropdown-item" href="#">Суббота, 27 октября</a>
					<a class="dropdown-item" href="#">Воскресенье, 28 октября</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-sm-12 col-md-6 mb-1">
			<div class="dropdown">
					<button class="btn btn_open btn-default dropdown-toggle col-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-clock">Все сеансы</i></button>
				<div class="dropdown-menu dropdown-menu_open" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Утро, 10:00-13:00</a>
					<a class="dropdown-item" href="#">День, 13:00-18:00</a>
					<a class="dropdown-item" href="#">Ранний вечер, 18:00-21:00</a>
					<a class="dropdown-item" href="#">Поздний вечер, 21:00-24:00</a>
				</div>
			</div>
		</div>
		<div class="col-12 col-lg-3 col-sm-12 col-md-6 mb-1"><!--offset-lg-2-->
			<div class="dropdown">
				<button class="btn btn_open btn-default dropdown-toggle col-12" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-tv">Форма показа</i></button>
				<div class="dropdown-menu dropdown-menu_open" aria-labelledby="dropdownMenuButton">
					<form class="ml-1">
						<div class="custom-control custom-checkbox">
							  <input type="checkbox" class="custom-control-input" id="customCheck1">
							  <label class="custom-control-label" for="customCheck1">2D</label>
						</div>
						<div class="custom-control custom-checkbox">
							  <input type="checkbox" class="custom-control-input" id="customCheck2">
							  <label class="custom-control-label" for="customCheck2">3D</label>
						</div>
					</form>
				</div>
			</div>
      	</div>
	</div>
</div>
<!--End dropdown aphisha-->
	
<!--Start card kino-->
<?php
	$connect = mysqli_connect("localhost", "root", "123", "users_admi_kn") or die ("Error sql_connect");

	$news = mysqli_query($connect, "SELECT * FROM film ORDER BY id DESC");

	$fims = [];

	while ($row = mysqli_fetch_array($news))
	{
		$films[] = $row;
	}
?>
<div class="container-fluid"><!--style="margin-top: 15px;"-->
	<div class="row">
		<?php for($f = 0; $f < count($films); $f++) { ?>
		<div class="col-12 col-sm-4 col-md-4 col-lg-3">
			<div class="card" style="background-color: #27272a; border: none; border-radius: 25px; max-height: 610px;"><!--text-white bg-dark--><!--border: solid red 1px-->
			<img class="card-img-top img-fluid mx-auto backlight" src="img/<?php echo $films[$f]['logo_films_id']?>" alt="Card image cap" style="border-radius: 25px; max-height: 400px; max-width: 280px;">
			<div class="card-body">
			 	<div class="text-center">
					<small class="voz-ograch"><?php echo $films[$f]['vozrast_tongue_id']; ?></small>
			  </div>
			  <h5 class="card-title name-film-oglav text-center"><?php echo $films[$f]['movie_title_id']; ?></h5>
				<div class="text-center">
					<small class="voz-ograch"><?php echo $films[$f]['genre_id']; ?></small>
				</div>
				<div class="text-center">
					<button type="button" class="btn btn-outline-success btn-outline-default" style="border-radius: 15px;"><?php echo $films[$f]['release_date_id']; ?></button>
					<button type="button" class="btn btn-outline-secondary btn-outline-pokaz" style="border-radius: 15px;"><?php echo $films[$f]['display_form_id']; ?></button>
				</div>
				<div class="text-center mt-2">

				<!--Start buttons modal-->
				<button type="button" class="btn btn-primary mt-1 btn-box-shadow" data-toggle="modal" data-target="#window<?php echo $f; ?>" style="border-radius: 20px; opacity: 0.9;">Расписание</button>

				<!--Modal window-->
				<div class="modal fade bd-example-modal-xl" id="window<?php echo $f; ?>" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Расписание сеансов</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						  <?php
							$rasp = mysqli_query($connect, "SELECT * FROM raspisanie WHERE raspisanie_id={$films[$f]["id"]}");

							$mrows = mysqli_fetch_array($rasp);

							$kalinina = $mrows["seans_kalinina"];
							$october = $mrows["seans_october"];
							$mir = $mrows["seans_mir"];
						?>
							
						<div class="text-left font-weight-bold">Кинотеатр "Калинина"</div>
							<div class="text-left">
								<!-- <button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 8 по 14 ноября</button>
								<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 14 по 21 ноября</button>
								<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 21 по 8 декабря</button> -->
								<?php
									$krs = explode("|", $kalinina);
									for($i = 0; $i < count($krs)-1; $i++) {
										$dt = explode(";", $krs[$i]);
										?>
											<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="<?php echo $dt[1]; ?>"><?php echo $dt[0]; ?></button>
										<?php
									}
								?>
							</div>
								<div class="text-left">
									<p>Цена за билет:</p>
									<u>- на дневные сеансы (до 17:00) в будние дни:</u>
									<p>1—14 ряд: <?php echo $mrows["cen_day_seans_id"]; ?></p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<u>- на вечерние сеансы (с 17:00) в будние дни: сеансы в выходные и праздничные дни:</u>
									<p>1—14 ряд: 6 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<u>- на ночные сеансы:</u>
									<p>1—14 ряд: 6 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>
							</div>

							<div class="text-left font-weight-bold">Кинотеатр "Октябрь"</div>
								<div class="text-left">
									<!-- <button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 8 по 14 ноября</button>
									<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 8 по 14 ноября</button> -->
									<?php 
										$krs = explode("|", $october);
										for($i = 0; $i < count($krs)-1; $i++) {
											$dt = explode(";", $krs[$i]);
											?>
												<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="<?php echo $dt[1]; ?>"><?php echo $dt[0]; ?></button>
											<?php
										}
									?>
								</div>
							<div class="text-left">
									<p>Цена за билет:</p>
									<u>- на дневные сеансы (до 17:00) в будние дни:</u>
									<p>1—14 ряд: 5 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<u>- на вечерние сеансы (с 17:00) в будние дни: сеансы в выходные и праздничные дни:</u>
									<p>1—14 ряд: 6 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<u>- на ночные сеансы:</u>
									<p>1—14 ряд: 6 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>
							</div>

							<div class="text-left font-weight-bold">Кинотеатр "Мир"</div>
								<div class="text-left">
									<?php
										$krs = explode("|", $mir);
										for($i = 0; $i < count($krs)-1; $i++) {
											$dt = explode(";", $krs[$i]);
											?>
												<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="<?php echo $dt[1]; ?>"><?php echo $dt[0]; ?></button>
											<?php
										}
									?>
									<!-- <button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 8 по 14 ноября</button>
									<button type="button" class="btn btn-sm mt-1 btn-secondary" data-placement="bottom" data-toggle="popover" data-trigger="focus" title="Сеансы:" data-content="11:40, 13:20, 15:10, 16:50">С 8 по 14 ноября</button> -->
							</div>
							<div class="text-left">
									<p>Цена за билет:</p>
									<u>- на дневные сеансы (до 17:00) в будние дни:</u>
									<p>1—14 ряд: 5 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<u>- на вечерние сеансы (с 17:00) в будние дни: сеансы в выходные и праздничные дни:</u>
									<p>1—14 ряд: 6 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<u>- на ночные сеансы:</u>
									<p>1—14 ряд: 6 руб. 50 коп.</p>

									<p><span style="color: #FF00F5;">двухместный диван «Love Seat» (15 ряд, все сеансы): 20 руб. 00 коп.</span></p>

									<p><span style="color: #EC282B;">двухместный диван со столиком (VIP-ряд, все сеансы): 20 руб. 00 коп.</span></p>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
						</div>
					</div>
				  </div>
				</div>
				<!--End modal window-->

				<!--Start buttons modal-->
				<button type="button" class="btn btn-danger btn-box-shadow mt-1" data-toggle="modal" data-target="#exampleModalLong_film_1" id="films" style="border-radius: 20px; opacity: 0.9;">О фильме</button>

				<!--Modal-->
				<div class="modal fade bd-example-modal-lg" id="exampleModalLong_film_1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
					<div class="modal-body">
						<div class="text-left">
							<p><strong>Возраст: </strong>18+</p>

							<p><strong>Жанр: </strong>драма, биография, музыка</p>

							<p><strong>Оригинальное название: </strong> Bohemian Rhapsody</p>
							<p><strong>Год: </strong> 2018</p>
							<p><strong>Страна: </strong> Великобритания, США Режиссер: Брайан Сингер</p>

							<div class="container" style="border-radius: 5px; background-color: #9B9B9B;"><p>Чествование группы Queen, их музыки и их выдающегося вокалиста Фредди Меркьюри, который бросил вызов стереотипам и победил условности, чтобы стать одним из самых любимых артистов на планете. Фильм прослеживает головокружительный путь группы к успеху, благодаря их культовым песням и революционному звуку, практически распад коллектива, поскольку образ жизни Меркьюри выходит из-под контроля, и их триумфальное воссоединение накануне концерта Live Aid, ставшим одним из величайших выступлений в истории рок-музыки.</p></div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
					 </div>
					</div>
				  </div>
				</div>
				<!--End modal window-->
			  </div>
			</div>
		  </div> 		
		 </div>
		 <!--end cols films-->
		<?php } ?>
		
		<div class="col-12 col-sm-4 col-md-4 col-lg-3" style="margin-top: 160px;">
			<div class="card text-white bg-secondary" style="background-color: #27272a !important; border: none; border-radius: 25px;">
				  <div class="card-body text-center">
						<h5 class="card-title">Не нашли фильм?</h5>
						<button type="button" class="btn btn-primary mt-1" style="border-radius: 20px; opacity: 0.8;">Сегодня в кино</button>
						<button type="button" class="btn btn-danger mt-1" style="border-radius: 20px; opacity: 0.8;">Новости</button>
				  </div>	
			</div>
 		</div>
	</div>
</div> 
<!--End card kino-->  

<!--Start footer-->
	<?php require "../blocks/footer.php" ?>
<!--End footer-->
	
	<!--Jquery scripts-->
	<script src="library/jquery-3.2.1.min.js"></script>
	
	<!--Bootstrap popper.js scripts-->
	<script src="library/js/bootstrap.bundle.min.js"></script>
	
	<!--Validation send mail-->
	<script src="../ajax/treatment.js"></script>

	<script>
		//плавный выпад dropdown
		$( '.dropdown' ).on( 'show.bs.dropdown', function ( e ) {
			$( this ).find( '.dropdown-menu' ).first().stop( true, true ).slideDown();
		} );
		$( '.dropdown' ).on( 'hide.bs.dropdown', function ( e ) {
			$( this ).find( '.dropdown-menu' ).first().stop( true, true ).slideUp();
		} );
	</script>

	<script>
		//параметры запуска сдайдера
		$("#carouselExampleIndicators").carousel({
			//остановка слайдера 
			interval : false;
		});
	</script>

	<script>
		//активация попера
		$(function () {
			$('[data-toggle="popover"]').popover()
		});
		//отмена по клику
		$('.popover-dismiss').popover({
			trigger: 'focus'
		});
	</script>

	<script>
		//чекбокс формы показа
		$('.your-checkbox').prop('indeterminate', true);
	</script>

	<script>
		//фиксация выбора кинотеатра
		$(".names_k").click(function(){
			$(".name_kino").html($(this).html());
		});
	</script>

	<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	  }, false);
	})();
	</script>
		
		<!--//плавное выпадение страницы
			//$(document).ready(function()			
			//{    			
			//$('body').toggle(500); 
			//});-->

			<!--//пауза в слайдере
			//$('#carouselExampleIndicators').on('slide.bs.carousel', function () {
			//$('.carousel').carousel('pause');
			//});
			$("#carouselExampleIndicators").carousel({
         		interval : false;
			});
			//$('body').scrollspy({ target: '#navbarDropdown' });
			
			//Всплывающие подсказки
			$('.bnts_1').tooltip('enable');
		-->
</body>

</html>