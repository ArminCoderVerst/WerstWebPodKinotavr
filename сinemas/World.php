<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="style/style-word.css" rel="stylesheet" type="text/css">
	<link href="../html/fonts/icons-style.css" rel="stylesheet" type="text/css">
    <title>Киноафиша Гомеля | Кинотеатр "Мир"</title>
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
				<h3 class="sec-text__title">Кинотеатр "Мир"</h3>
				<p class="sec-text__dsc">В Гомеле по ул. Ильича, 51/Б находится кинотеатр "Мир" (Новобелицкий район), открытие которого состоялось в 1959 году. В 2012 году в "Мире" закончилась реставрация, здесь стали показывать современное кино, появилась возможность просмотра 3D фильмов.</p>
			</div>
   		<section class="sec2"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Так же в "Мир" есть бар</h3>
				<p class="sec-text__dsc">В фойе работает кинобар, где продаются прохладительные напитки, сладкая вата и попкорн.</p>
			</div>
		<section class="sec3"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">Зал в кинотеатре "Мир"</h3>
				<p class="sec-text__dsc">Сейчас в нем есть один кинозал и 2 видеозала, вместимостью от 6 до 198 мест. Большой зал "Мира" оснащен акустической системой Dolby Digital Surround, 3D системой Masterimage и цифровым кинопроектором Christie (Канада), позволяющим показывать фильмы в цифровом формате. Серебряный экран обладает эффектом светоотражения и прекрасно подходит для 3D контента. Особенностью кинотеатра "Мир" является VIP-зал, который рассчитан на 6 человек. Специальные акустические плиты в видеозале создают отличную звукоизоляцию. Гости могут сами выбирать фильм для просмотра из предложенного перечня, а также заказывать коктейли в баре кинотеатра.</p>
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