<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta property="og:image" content="img/opengraph.jpg">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<title>Контакты</title>

	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">

	<link rel="stylesheet" href="css/styles.css">

	<noscript>
		<style>
			.animate {
				opacity: 1;
				top: 0;
			}
		</style>
	</noscript>

</head>

<body >

	<!-- page__contacts -->
	<div class="page__contacts">

		<!-- header -->
		<?php include("header.php");?>
		<!-- header end -->

		<!-- contmap -->
		<section class="contmap">
			<div class="container">
				<h2 class="title section-title--black contmap__title">Контакты</h2>
			</div>
			<div class="contmap__interactive">
				<div class="container">
					<div class="contmap__interactive-container">
					<div class="contmap__img"></div>
						<div class="contmap__point contmap__point-1">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Санкт-Петербург</div>
						</div>
						<div class="contmap__point contmap__point-2">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Москва</div>
						</div>
						<div class="contmap__point contmap__point-3">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 3</div>
						</div>
						<div class="contmap__point contmap__point-4">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 4</div>
						</div>
						<div class="contmap__point contmap__point-5">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 5</div>
						</div>
						<div class="contmap__point contmap__point-6">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 6</div>
						</div>
						<div class="contmap__point contmap__point-7">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 7</div>
						</div>
						<div class="contmap__point contmap__point-8">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 8</div>
						</div>
						<div class="contmap__point contmap__point-9">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 9</div>
						</div>
						<div class="contmap__point contmap__point-10">
							<img src="img/map-point.svg" alt="Точка">
							<div class="contmap__point-descr">Город 10</div>
						</div>
					</div>
					<!-- contmap__interactive-container end -->
				</div>
				<!-- container end -->
			</div>
			<!-- contmap__interactive end -->
		</section>
		<!-- contmap end -->

		<!-- contdata -->
		<div class="continfo animate">
			<div class="container-fluid">
				<div class="row align-items-center no-gutters">
					<div class="col-12 col-xl-6">
						<div class="continfo__data">
							<div class="continfo__city">
								<select name="city-choise" class="custom-select-cities" id="select-6">
									<option value="val1">Екатеринбург</option>
									<option value="val2">Москва</option>
									<option value="val3">Санкт-Петербург</option>
									<option value="val4">Екатеринбург 2</option>
									<option value="val5">Екатеринбург 3</option>
									<option value="val6">Екатеринбург 4</option>
									<option value="val7">Екатеринбург 5</option>
									<option value="val8">Екатеринбург 6</option>
									<option value="val9">Екатеринбург 7</option>
									<option value="val10">Екатеринбург 8</option>
									<option value="val11">Екатеринбург 9</option>
									<option value="val12">Екатеринбург 10</option>
								</select>
							</div>
							<!-- continfo__data-city end -->

							<div class="continfo__data-dynamic continfo__data-dynamic-ekaterinburg">
								<div class="continfo__descr">
									<p>ООО «Метало-Промышленная компания» (ООО «МПК»)</p>
									<p>Центральный филиал в Екатеринбурге</p>
								</div>
								<div class="continfo__tel">
									<span class="continfo__tel-info">Многоканальный</span>
									<a class="continfo__tel-link" href="tel:+73433020157">+7 (343) 302-01-57</a>
								</div>
								<div class="continfo__more">
									<div class="row no-gutters">
										<div class="col-12 col-xl-6">
											<div class="continfo__address">620142, Свердловская обл., <span class="nowrap">г. Екатеринбург</span>, <span class="nowrap">ул. Щорса,  7</span></div>
										</div>
										<div class="col-12 col-xl-6">
											<div class="continfo__worktime">Работаем с понедельника <span class="nowrap">по пятницу с 9 до 18</span></div>
										</div>
									</div>
								</div>
							</div>
							<!-- continfo__data-dynamic end -->

						</div>
						<!-- continfo__data end -->
					</div>
					<!-- col end -->
					<div class="col-12 col-xl-6">
						<div class="continfo__map"><iframe src="https://snazzymaps.com/embed/73928" width="100%" height="775px" style="border:none;"></iframe></div>
					</div>
				</div>
				<!-- row end -->
			</div>
			<!-- container-fluid end -->
		</div>
		<!-- contdata end -->


		<!-- info -->
		<div class="info page__contacts-info animate">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-12 col-xl-6">
						<div class="info__email-block">
							<div class="info__email"><a class="info__email-link" href="mailto:sale@mpk66.ru">sale@mpk66.ru</a></div>
							<div class="info__email-add">Отправьте заявку — получите счёт на оплату за 10 мин!</div>
						</div>
						<!-- info__contacts end -->
						<div class="info__img" style="background-image: url('img/contacts-info-img.jpg')"><!-- <img class="img-responsive" src="img/contacts-info-img.jpg" alt="alt"> --></div>
						<!-- info__map end -->
					</div>
					<!-- col end -->
					<div class="col-12 col-xl-6">
						<div class="info__form-block">
							<div class="title section-title--white info__form-title">Персональная помощь</div>
							<p class="info__form-call">Оставьте заявку сейчас и наш помощник в режиме реального времени ответит на Ваши вопросы</p>
							<div class="info__form">
								<form action="#">
									<input class="info__form-input info__form-input-name" type="text" name="Имя" placeholder="Как вас зовут?" required>
									<input class="info__form-input info__form-input-tel js-mask" type="tel" name="Телефон" placeholder="Ваш телефон" required>
									<label class="checkbox">
										<input type="checkbox" checked="" class="checkbox-hidden" required name="Согласие на обработку">
										<span class="checkbox-wrap">
											<span class="checkbox-pseudo">
												<svg class="checkbox-check" xmlns="http://www.w3.org/2000/svg" version="1.1" width="13.5" height="12.5" viewBox="0 0 14.5 11.5">
													<path d="M20 7L12 16L8 12" fill-opacity="0" fill="#ef6719" stroke-linejoin="round" stroke-linecap="round" stroke-opacity="1" stroke="#ef6719" stroke-miterlimit="50" stroke-width="3" transform="matrix(1,0,0,1,-6.75,-5.75)"></path>
												</svg>
											</span>
										</span>
										<span class="checkbox-text">
											Подтверждаю, что я ознакомлен с пользовательским соглашением правилами обработки персональных данных</span>
									</label>
									<input class="btn info__form-btn" type="submit" value="Отправить">
								</form>
							</div>
						</div>
						<!-- nfo__form-block end -->
					</div>
				</div>
				<!-- row end -->
			</div>
			<!-- container-fluid end -->
		</div>
		<!-- info end -->


		<!-- footer -->
		<?php include("footer.php");?>
		<!-- footer end -->

	</div>
	<!-- page__contacts end -->







	<!-- Jquery с облака и замена в случае отсутствия доступа к облаку  -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>window.jQuery || document.write('<script src="libs/jquery/dist/jquery.min.js"><\/script>')</script>

	<!-- Jquery ui -->
	<script
	src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
	integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E="
	crossorigin="anonymous"></script>

	<script src="js/scripts.js"></script>

</body>
</html>
