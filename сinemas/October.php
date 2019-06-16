<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style-october.css">
    <link href="../html/fonts/icons-style.css" rel="stylesheet" type="text/css">
    <title>Киноафиша Гомеля | Кинотеатр "Октябрь"</title>
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
				<h3 class="sec-text__title">Кинотеатр "Октябрь"</h3>
				<p class="sec-text__dsc">Кинотеатр "Октябрь" в Гомеле был открыт в 1940 году в Советском районе города. После проведения капитального ремонта "Октябрь" преобразился и стал отвечать современным требованиям комфорта (удобные сидения, вентиляция воздуха и т.д.). Киносеансы проходят в просторном зале, в котором установлено отличное проекционное оборудование, акустическая система Dolby и идет просмотров фильмов в 3D и 2D формате. Сцена "Октября" оборудована вспомогательным боковым освещением.</p>
			</div>
   		<section class="sec2"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Так же в "Октябрь" есть бар</h3>
				<p class="sec-text__dsc">Работает и бильярдная клуб, а в фойе часто проводятся выставки фоторабот, живописи и камней-самоцветов. Купить билеты можно через интернет и в кассах кинотеатра на ул. Барыкина, 127.</p>
			</div>
		<section class="sec3"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Зал в кинотеатре "Октябрь"</h3>
				<p class="sec-text__dsc">Сегодня в кинотеатре им. Октябрь функционируют один зал, рассчитанный на 200 мест. Зал оборудован системой Dolby и современным кинопроектором.</p>
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