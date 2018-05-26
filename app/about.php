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

<body>

	<!-- page__about -->
	<div class="page__about">

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
	


		<!-- footer -->
		<?php include("footer.php");?>
		<!-- footer end -->

	</div>
	<!-- page__about end -->







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
