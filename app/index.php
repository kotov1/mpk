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

	<title>МПК</title>

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

<body class="main">

	<!-- page__main -->
	<div class="page__main">

		<!-- header -->
		<?php include("header.php");?>
		<!-- header end -->
	
	
		<!-- intro -->
		<section class="intro">
			<!--  Video is muted & autoplays  -->
			<video class="intro__video-bg" autoplay loop muted>
				<source src="video/21.mp4" type="video/mp4">
			</video>
			<div class="container">
	
				<!-- intro__heading end -->
				<div class="intro__heading">
					<div class="row">
						<div class="col-12 col-lg-6">
							<h1 class="page-title title">Метало-Промышленная Компания</h1>
							<h3 class="intro__sub-heading title">Стопудовое решение</h3>
							<p class="intro__text">Максимально возможный ассортимент сертифицированного<br> и качественного металлопроката по оптимальной цене.</p>
							<div class="intro__about">о нас</div>
						</div>
						<div class="col-12 col-lg-6 d-flex align-items-start justify-content-start justify-content-lg-end align-items-lg-end">
							<div class="intro__offer">Подбор металлопроката</div>
						</div>
					</div>
				</div>
				<!-- intro__heading end -->
	
				<div class="intro__scroll-down"></div>
	
			</div>
			<!-- container end -->
		</section>
		<!-- intro end -->
		
	
	
		<!-- price -->
		<section class="price">
			<!-- price__title -->
			<div class="section-title-wrap">
				<div class="container">
					<h2 class="title section-title section-title--black">Прайс on-line</h2>
				</div>
			</div>
			<!-- price__title end-->
			<!-- price__search -->
			<div class="price__search">
				<div class="container">
					<!-- price__search-type -->
					<div class="price__search-check-box">
						<span class="price__search-type price__search-type--active">Быстрый подбор</span>
						<div class="price__search-check">
							<input type="checkbox" id="rounded">
							<label for="rounded" id="rounded-label"></label>
						</div>
						<span class="price__search-type">Продукция списком</span>
					</div>
					<!-- price__search-type end -->
					<!-- price__search-form -->
					<div class="price__search-form">
						<form action="#">
							<div class="row">
								<div class="col-12">
									<label class="search-icon">
										<input class="price__search-item" type="text" placeholder="Начните вводить название">
										<small class="field-hint">Название продукции</small>
									</label>
								</div>
							</div>
							<div class="row mt-30">
								<div class="col-12 col-md-4">
									<label>
										<select name="Размер сторон" class="custom-select-form" id="select-2">
											<option value="val1">110</option>
											<option value="val2">120</option>
											<option value="val3">130</option>
											<option value="val4">140x130</option>
											<option value="val5">150</option>
										</select>
										<small class="field-hint">Размер сторон</small>
									</label>
								</div>
								<div class="col-12 col-md-4">
									<label>
										<select name="Толщина стенки" class="custom-select-form" id="select-3">
											<option value="val1">1</option>
											<option value="val2">2</option>
											<option value="val3">3</option>
											<option value="val4">4</option>
											<option value="val5">5</option>
											<option value="val6">6</option>
											<option value="val7">7</option>
											<option value="val8">8</option>
											<option value="val9">9</option>
											<option value="val10">10</option>
										</select>
										<small class="field-hint">Толщина стенки</small>
									</label>
								</div>
								<div class="col-12 col-md-4">
									<label>
										<select name="Размер сторон" class="custom-select-form" id="select-4">
											<option value="val1">110</option>
											<option value="val2">120</option>
											<option value="val3">130</option>
											<option value="val4">140x130</option>
											<option value="val5">150</option>
											<option value="val6">160</option>
											<option value="val7">170</option>
											<option value="val8">180x200</option>
											<option value="val9">190</option>
											<option value="val10">200</option>
										</select>
										<small class="field-hint">Размер сторон</small>
									</label>
								</div>
						</div>
						<!-- row end -->
						</form>
					</div>
					<!-- price__search-form end -->
				</div>
			</div>
			<!-- price__search end -->
	
			<!-- price__result -->
			<div class="price__result">
				<div class="container">
					<div class="price__result-inner">
						<div class="price__result-item">
							Уголок - равнополочный
							<span class="price__result-item-code">3,09г2с</span>
							<span class="price__result-item-size">3—16x3,09</span>
						</div>
						<div class="price__result-line">
							<div class="row align-items-center">
								<div class="col-md-6 col-lg-5">
									<div class="row no-gutters">
										<div class="col-6">
											<select name="units" class="custom-select-form" id="select-5">
												<option value="val1">тонна</option>
												<option value="val2">килограмм</option>
											</select>
										</div>
										<div class="col-6">
											<div class="price__result-quantity">
												<span class="minus">-</span>
												<input class="price__result-quantity-input" type="text" name="quantity" value="1">
												<span class="plus">+</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-lg-3">
									<div class="price__result-value">29 000	₽</div>
								</div>
								<div class="col-12 col-lg-4">
									<button class="btn price__result-btn" type="button">В корзину</button>
								</div>
							</div>
						</div>
						<!-- price__result-line end -->
						<div class="price__result-files">
							<input class="price__result-files-input" type="file" multiple>
							<div class="price__result-files-drop">
								<p class="price__result-files-title">В вашей заявке много позиций?</p>
								<p class="price__result-files-subtitle">Вы можете прикрепить файл и отправить, ответ получите очень быстро!</p>
							</div>
							<div class="price__result-files-fake"><span class="sm-hide">Перетащите файлы сюда или</span> <span class="fake-btn">Выберите файл</span><span class="file-msg"></span></div>
						</div>
					</div>
					<!-- price__result-inner end -->
				</div>
				<!-- container end -->
			</div>
			<!-- price__result end -->
		</section>
		<!-- price end -->



		<section class="services animate">

			<!-- services__title -->
			<div class="section-title-wrap">
				<div class="container">
					<h2 class="title section-title section-title--white">Услуги</h2>
				</div>
			</div>
			<!-- services__title end-->

			<div class="container">
				<div class="row">
					<div class="col-12 col-xl-6 d-flex justify-content-center ml-auto">
						<div class="services__list">
						<div class="row">
							<div class="col-12 col-md-4">
								<div class="services__item">Комплектация сложных заказов</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Правка в прутки арматуры</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Резка металла</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Изготовление арматурных каркасов</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Отмотка рулонов</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Профнастил изготовление</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Изготовление сетки</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Изготовление штрипсов</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Изготовление ЦПВС</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Горячее оцинковывание металла</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Грунтование</div>
							</div>
							<div class="col-12 col-md-4">
								<div class="services__item">Порошковая окраска</div>
							</div>

						</div>
						<!-- row end -->
					</div>
					<!-- services__list end -->
					</div>
					<!-- col end -->
				</div>
				<!-- row end -->
			</div>
			<!-- container end -->

		</section>
		<!-- services end -->

		<!-- logos -->
		<div class="logos animate">
			<div class="container">
				<div class="logos__block">
					<div class="logos__img">
						<img src="img/company-logo/logo1.png" alt="НЛМК" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo2.png" alt="ЕВРАЗ" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo3.png" alt="ЭСМК" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo4.png" alt="ЧТПЗ" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo5.png" alt="alt" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo6.png" alt="СЕВЕРСТАЛЬ" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo7.png" alt="СТЗ" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo8.png" alt="AMET" class="img-responsive">
					</div>
					<div class="logos__img">
						<img src="img/company-logo/logo9.png" alt="alt" class="img-responsive">
					</div>
				</div>
				<!-- logos__block end -->
			</div>
			<!-- container end -->
		</div>
		<!-- logos end -->


		<!-- info -->
		<div class="info animate">
			<div class="container-fluid">
				<div class="row no-gutters">
					<div class="col-12 col-xl-6">
						<div class="info__contacts">
							<div class="info__tel"><a class="info__tel-link" href="tel:+73433020157">+7 (343) 302-01-57</a></div>
							<div class="info__data">
								<div class="row align-items-end">
									<div class="col-12 col-md-8"><span class="info__city">Екатеринбург,</span>ул. Мамина-Сибиряка 52, оф. 406</div>
									<div class="col-12 col-md-4"><a class="info__data-email" href="mailto:sale@mpk66.ru">sale@mpk66.ru</a></div>
								</div>
							</div>
						</div>
						<!-- info__contacts end -->
						<div class="info__map">
							<iframe src="https://snazzymaps.com/embed/73928" width="100%" height="555px" style="border:none;"></iframe>
						</div>
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
	<!-- page__main end -->







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
