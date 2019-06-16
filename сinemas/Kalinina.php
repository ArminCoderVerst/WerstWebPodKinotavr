<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style-kalinina.css">
    <link href="../html/fonts/icons-style.css" rel="stylesheet" type="text/css">
    <title>Киноафиша Гомеля | Кинотеатр "Калинина</title>
</head>

<body>
    <header>
        <!--nav panel-->
            <?php require "../blocks/header.php" ?>     
        <!--end nav penel-->
    </header>
</body>
    <main role="main" class="mt-5">
        <section class="sec1"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Кинотеатр "Калинина"</h3>
				<p class="sec-text__dsc">Кинотеатр имени Калинина расположен в самом центре города Гомеля, по улице Коммунаров, 4. Это один из первых кинотеатров в Гомеле, существует с 1907. Старое здание прилегало к гостинице. В 1947 году кинотеатр имени Калинина был реконструирован. В 1969 году здесь появился еще один холл. Кинотеатр регулярно предоставляет зрителям новинки кино и производит частое обновление киноафиши, поэтому желающие попасть в кинотеатр на премьеру фильма, приобретают билеты заранее. Кинотеатр им.Калинина ежегодно становится центром фестивальных событий в городе. Большое фойе кинотеатра украшают витражи, а в фойе малого зала работает ночной бар с очень кинематографическим названием - "Голливуд".
				Каждую неделю расписание сеансов пополнятся новинками мирового проката.</p>
			</div>
   		<section class="sec2"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Так же в "Калинина" есть бар</h3>
				<p class="sec-text__dsc">В здании кинотеатра есть кафе "Cinema" со своим видеозалом на 44 человека, бар "Красная жара", ночной клуб "Cinema Club Hollywood". В фойе работает кинобар, где продаются прохладительные напитки, сладкая вата и традиционное блюдо кинолюбителей – попкорн.</p>
			</div>
		<section class="sec3"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Зал в кинотеатре "Калинина"</h3>
				<p class="sec-text__dsc">Сегодня в кинотеатре им. Калинина функционируют один зал, рассчитанный на 512 мест. Зал оборудован системой Dolby и современным кинопроектором.</p>
			</div>
    </main>
    <!--Start footer-->
	    <?php require "../blocks/footer.php" ?>
    <!--End footer-->

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
		//фиксация выбора кинотеатра
		$(".names_k").click(function(){
			$(".name_kino").html($(this).html());
		});
	</script>
</html>