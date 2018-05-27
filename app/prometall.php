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

	<title>Prometall</title>

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

	<!-- page__prometall -->
	<div class="page__prometall">

		<!-- header -->
		<?php include("header.php");?>
		<!-- header end -->


		<!-- prometall -->
		<section class="prometall">
			<div class="container">
				<h2 class="title prometall__title section-title--black">Prometall</h2>
			</div>
			<div class="prometall__inner">
				<div class="container">
					<div class="prometall__folders">
						<div class="row">
							<div class="col-12 col-md-6 col-xl-4">
								<a href="#" class="prometall__folders-item">
									<div class="prometall__folders-img">
										<img class="img-responsive" src="img/prometall/handbook.svg" alt="image">
									</div>
									<div class="prometall__folders-descr">Справочник покупателя металлопродукции</div>
								</a>
							</div>
							<div class="col-12 col-md-6 col-xl-4">
								<a href="#" class="prometall__folders-item">
									<div class="prometall__folders-img">
										<img class="img-responsive" src="img/prometall/meetings.svg" alt="image">
									</div>
									<div class="prometall__folders-descr">Конференции, семинары, тренинги, выставки</div>
								</a>
							</div>
							<div class="col-12 col-md-6 col-xl-4">
								<a href="#" class="prometall__folders-item">
									<div class="prometall__folders-img">
										<img class="img-responsive" src="img/prometall/history.svg" alt="image">
									</div>
									<div class="prometall__folders-descr">История развития металлургии на Урале</div>
								</a>
							</div>
							<div class="col-12 col-md-6 col-xl-4">
								<a href="#" class="prometall__folders-item">
									<div class="prometall__folders-img">
										<img class="img-responsive" src="img/prometall/literature.svg" alt="image">
									</div>
									<div class="prometall__folders-descr">Современная литература по металлу</div>
								</a>
							</div>
						</div>
					</div>
					<!-- prometall__folders end -->
				</div>
				<!-- container end -->
			</div>
			<!-- prometall__inner end -->
		</section>
		<!-- prometall end -->



		<!-- footer -->
		<?php include("footer.php");?>
		<!-- footer end -->

	</div>
	<!-- page__prometall end -->







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
