<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style-o-kalin.css" type="text/css">
    <link href="../html/fonts/icons-style.css" rel="stylesheet" type="text/css">    
    <title>Киноафиша Гомеля | О нас "Калинина"</title>
</head>
<body>
    
</body>
    <header>
        <!--nav panel-->
            <?php require "../blocks/header.php" ?>     
        <!--end nav penel-->
    </header>

    <main role="main" class="mt-5">
        <section class="sec1"></section>
			<div class="sec-text">
				<h3 class="sec-text__title">История кинотеатра "Калинина"</h3>
				<p class="sec-text__dsc">Коммунальное унитарное предприятие «Кинотавр», известное как «Кинотеатр имени Калинина», является сохранившийся частью комплекса зданий гостиницы «Савой», основано в 1910 году, заказчиком выступили братья Шановичи. Здание запроектировано как крупный архитектурный комплекс многофункционального назначения, в котором одновременно совмещались помещения культурно-бытового обслуживания (гостиница, ресторан, парикмахерская) и культурно – просветительного характера (театрально-концертный зал, библиотека с читальным залом, кинематограф). Сейчас КУП «Кинотавр» является одним из самых ведущих организаций в Гомеле, которые включают в себя такие кинотеатры как: «Калинина», «Октябрь» и «Мир».</p>
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