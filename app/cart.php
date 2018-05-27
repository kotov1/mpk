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

	<title>Корзина</title>

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

	<!-- page__cart -->
	<div class="page__cart">

		<!-- header -->
		<?php include("header.php");?>
		<!-- header end -->

		<!-- cart -->
		<section class="cart">

			<div class="container">
				<h2 class="title cart__title section-title--black">Ваша корзина</h2>
			</div>
			<!-- container end -->

				<div class="cart__container">
					<div class="container">
						<div class="cart__inner">
							<table class="cart__table">
								<thead>
									<tr>
										<th class="cart__item-img">Фото</th>
										<th class="cart__item-name">Наименование</th>
										<th class="cart__item-units">Ед. измерения</th>
										<th class="cart__item-quantity">Количество</th>
										<th class="cart__item-price">Цена</th>
									</tr>
								</thead>
								<tbody>
									<!-- 1 -->
									<tr>
										<td class="cart__item-img" data-label="Фото"><img src="img/cart/product1.jpg" alt="alt" class="img-responsive"></td>
										<td class="cart__item-name" data-label="Наименование">Уголок - равнополочный, 09г2с, 110x8</td>
										<td class="cart__item-units" data-label="Ед. измерения">
											<select name="units" class="custom-select-form" id="select-2">
													<option value="val1">тонна</option>
													<option value="val2">килограмм</option>
												</select>
											</td>
											<td class="cart__item-quantity" data-label="Количество">
												<div class="price__result-quantity">
													<span class="minus">-</span>
													<input class="price__result-quantity-input" type="text" name="quantity" value="1">
													<span class="plus">+</span>
												</div>
											</td>
											<td class="cart__item-price" data-label="Цена">29 000 ₽</td>
											<td class="cart__item-del"><i class="item-delete"></i></td>
									</tr>
									<!-- 1 -->

									<!-- 2 -->
									<tr>
										<td class="cart__item-img" data-label="Фото"><img src="img/cart/product2.jpg" alt="alt" class="img-responsive"></td>
										<td class="cart__item-name" data-label="Наименование">Уголок - равнополочный, 09г2с, 110x8</td>
										<td class="cart__item-units" data-label="Ед. измерения">
											<select name="units" class="custom-select-form" id="select-2">
													<option value="val1">тонна</option>
													<option value="val2">килограмм</option>
												</select>
											</td>
											<td class="cart__item-quantity" data-label="Количество">
												<div class="price__result-quantity">
													<span class="minus">-</span>
													<input class="price__result-quantity-input" type="text" name="quantity" value="1">
													<span class="plus">+</span>
												</div>
											</td>
											<td class="cart__item-price" data-label="Цена">100 000 ₽</td>
											<td class="cart__item-del"><i class="item-delete"></i></td>
									</tr>
									<!-- 2 -->

									<!-- 3 -->
									<tr>
										<td class="cart__item-img" data-label="Фото"><img src="img/cart/product3.jpg" alt="alt" class="img-responsive"></td>
										<td class="cart__item-name" data-label="Наименование">Уголок - равнополочный, 09г2с, 110x8</td>
										<td class="cart__item-units" data-label="Ед. измерения">
											<select name="units" class="custom-select-form" id="select-2">
													<option value="val1">тонна</option>
													<option value="val2">килограмм</option>
												</select>
											</td>
											<td class="cart__item-quantity" data-label="Количество">
												<div class="price__result-quantity">
													<span class="minus">-</span>
													<input class="price__result-quantity-input" type="text" name="quantity" value="1">
													<span class="plus">+</span>
												</div>
											</td>
											<td class="cart__item-price" data-label="Цена">55 000 ₽</td>
											<td class="cart__item-del"><i class="item-delete"></i></td>
									</tr>
									<!-- 3 -->

									<!-- 4 -->
									<tr>
										<td class="cart__item-img" data-label="Фото"><img src="img/cart/product4.jpg" alt="alt" class="img-responsive"></td>
										<td class="cart__item-name" data-label="Наименование">Уголок - равнополочный, 09г2с, 110x8</td>
										<td class="cart__item-units" data-label="Ед. измерения">
											<select name="units" class="custom-select-form" id="select-2">
													<option value="val1">тонна</option>
													<option value="val2">килограмм</option>
												</select>
											</td>
											<td class="cart__item-quantity" data-label="Количество">
												<div class="price__result-quantity">
													<span class="minus">-</span>
													<input class="price__result-quantity-input" type="text" name="quantity" value="1">
													<span class="plus">+</span>
												</div>
											</td>
											<td class="cart__item-price" data-label="Цена">1 900 ₽</td>
											<td class="cart__item-del"><i class="item-delete"></i></td>
									</tr>
									<!-- 4 -->
								</tbody>

								<tfoot>
									<tr>
										<td colspan="4" class="cart__purchase"><button class="btn cart__purchase-btn">оформить заказ</button></td>
										<td colspan="2" class="cart__sum-price">250 050 ₽</td>
									</tr>
								</tfoot>

							</table>
						</div>
						<!-- cart__inner end -->
					</div>
					<!-- container end -->
				</div>
				<!-- cart__container end -->
		</section>
		<!-- cart end -->
	





		<!-- footer -->
		<?php include("footer.php");?>
		<!-- footer end -->

	</div>
	<!-- page__cart end -->



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
