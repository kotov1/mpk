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

	<title>О нас</title>

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

<body>

	<!-- page__about -->
	<div class="page__about">

		<!-- header -->
		<?php include("header.php");?>
		<!-- header end -->
	
	
		<!-- intro -->
		<section class="intro about__intro">
			<!--  Video is muted & autoplays  -->
			<video class="intro__video-bg" autoplay loop muted>
				<source src="video/Commercical.mp4" type="video/mp4">
			</video>
			<div class="container">
	
				<div class="about__titles">
					<h2 class="title section-title--white about__title">О нас</h2>
					
					<h2 class="title section-title--white about__title about__title--big">МПК — <span class="about__title-br">стопудовое решение!</span></h2>
				</div>
	
			</div>
			<!-- container end -->
		</section>
		<!-- intro end -->

		<!-- about__info -->
		<div class="about__info animate">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-xl-6 d-flex align-items-center">
						<div class="about__info-block">
							<div class="about__info-year">Компания МПК работает <span class="br">для клиентов <span class="nowrap">с 2009 г.</span></span> </div>
							<div class="about__info-products">Мы продаём металлопрокат, сопровождая каждую сделку клиентоориентированным обслуживанием и сервисными услугами.</div>
							<div class="about__info-service">К сервису мы относим: доставку на собственном автотранспорте, круглосуточный склад с металлообрабатывающим оборудованием и порядок в отгрузочный документах.</div>
						</div>
					</div>
					<div class="col-12 col-xl-6 d-flex align-items-center bg-gray">
						<div class="about__info-block">
							<div class="about__info-managers">Наши менеджеры обученные, вежливы и на связи 24/7.   </div>
							<div class="about__info-call">выбирайте мпк</div>
							<div class="about__info-right">— самое правильное, стопудовое решение !</div>
						</div>
					</div>
				</div>
				<!-- row end -->
			</div>
			<!-- container-fluid end -->
		</div>
		<!-- about__info end -->

		<!-- about__advantages -->
		<section class="about__advantages animate">

			<!-- services__title -->
			<div class="container">

				<h2 class="about__advantages-title section-title--white">
					Металлопрокат
					<span class="about__advantages-title-accent">без посредников!</span>
				</h2>

				<div class="row">
					<div class="col-12 col-xl-6 d-flex justify-content-center">
						<div class="about__advantages-list">
						<div class="row">
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Чёрный, цветной, нержавеющий металлопрокат и спецстали в одном месте</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Отгрузка на крытом складе круглосуточно в режиме 7/24</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Работа по ОБС (обособленный банковский счёт) с госзаказами</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Цех для производства металлоконструкций на складе</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Кредитная линия постоянным клиентам</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Станок по производству ЦПВС и правки бухт в прутки </div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Порядок в документах. Нам нечего скрывать: бух баланс и налоговая декларация предоставляется до отгрузки</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item">Доставка по всей РФ от дозагруза до вагона</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="about__advantages-item mb-0">Мы вежливы, внимательны и на связи 24/7 с нашими клиентами</div>
							</div>

						</div>
						<!-- row end -->
					</div>
					<!-- about__advantages-list end -->
					</div>
					<!-- col end -->
				</div>
				<!-- row end -->
			</div>
			<!-- container end -->

		</section>
		<!-- about__advantages end -->


		<!-- footer -->
		<?php include("footer.php");?>
		<!-- footer end -->

	</div>
	<!-- page__about end -->



	<!-- modal login form -->
	<?php include("lk.php");?>
	<!-- modal login form end -->



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
