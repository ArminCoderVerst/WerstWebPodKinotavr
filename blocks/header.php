<nav class="navbar navbar-expand-lg navbar-default navbar-light fixed-top"><!--bg-light-->
	<a class="navbar-brand" href="#">
		<a class="col-auto col-sm-2 col-md-2 col-lg-auto face-logo"><span class="logo">K</span>inotavr.by</a>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link lits_1" href="#">Главная<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle lits_1 name_kino" href="#" id="navbarDropdownKinoteatr" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Кинотеатры</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item names_k" href="#">К-р "Калинина"</a>
					<a class="dropdown-item names_k" href="#">К-р "Октябрь"</a>
					<a class="dropdown-item names_k" href="#">К-р "Мир"</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle lits_1" href="#" id="navbarDropdownHelp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Обращение</a>
			<div class="dropdown-menu dropdown-menu-castom" aria-labelledby="dropdownMenuButton">
			<!--Form validate-->
				<form id="mailForm" class="forms-window-tab forms-window-tab-iphone-5">
					<div class="form-group col-12 col-md-6 col-lg-6">
						<label for="electronObrash">Обратная связь</label>
					</div>
					<div class="form-group col-12 col-md-10 col-lg-12">
						<input type="email" id="email" name="email" placeholder="Email" class="form-control">
						<div class="alert-danger container-fluid rounded-lg" role="alert" id="ErrorMessEmail"></div><!--electronObrash -->
					</div>
					<div class="form-group col-12 col-md-10 col-lg-12">
						<input type="text" id="name" name="name" placeholder="Введите имя" class="form-control">
						<div class="alert-danger container-fluid rounded-lg" role="alert" id="ErrorMessName"></div>
					</div>
					<div class="form-group col-12 col-md-10 col-lg-12">
						<input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control">
						<div class="alert-danger container-fluid rounded-lg" role="alert" id="ErrorMessPhone"></div>
					</div>
					<div class="form-group col-12 col-md-10 col-lg-12">
						<textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea>
						<div class="alert-danger container-fluid rounded-lg" role="alert" id="ErrorMessTextArea"></div>
					</div>
<!--
					<div class="form-group col-auto col-md-7">
						<label for="electronObrash">Прикрепить файл:</label>
						<input type="file" id="electronObrash">
					</div>
-->
					<div class="form-group col-auto col-md-7">
						<button type="button" id="sendMail" class="btn btn-primary btn-sm">Отправить</button>
					</div>
				</form>
				<!--End form validate-->
			</div>
			</li>
			<li class="nav-item">
				<a class="nav-link lits_1" href="#">О нас</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2 col-lg-8" type="search" placeholder="Поиск" aria-label="Поиск">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Искать</button>
		</form>
	  </div>
</nav>