<!doctype html>
<html lang="ru">
<head>
	<?php include('blocks/head_tags.php'); ?>
</head>
<body class="topPadidng">
	<?php include('blocks/header.php'); ?>
	<div class="adb_pic_wd" style="background-image: url(img/category_bg.jpg);">
		<div class="wrapper">
			<ul class="breadcrumbs">
				<li><a class="underscore" href="index.php">Главная</a></li>
				<li><a class="underscore" href="index.php">Каталог</a></li>
				<li><span>Живопись</span></li>
			</ul>
		</div>
	</div>
	<section class="category">
		<div class="wrapper">
			<h1 class="title">Каталог</h1>
			<div class="category_nav">
				<a href="category.php" class="button || active"><span>Живопись</span><i class="ic_dir_arrow"></i></a>
				<a href="category.php" class="button"><span>Графика</span><i class="ic_dir_arrow"></i></a>
				<a href="category.php" class="button"><span>Изделия</span><i class="ic_dir_arrow"></i></a>
			</div>
			<div class="rows">
				<!-- CATEGORY SIDEBAR -->
				<aside class="category_sidebar">
					<h3 class="h3">Показать</h3>
					<div class="filterWrap isOpened">
						<div class="filterHead">Все категории</div>
						<ul class="filterBody">
							<li><a href="#">Все</a></li>
							<li><a href="#">Рейпольский А.Д.</a></li>
							<li><a href="#">Рудаева Е.Л.</a></li>
							<li><a href="#">Митков Павел</a></li>
							<li><a href="#">Уркинеев Д.Л.</a></li>
							<li><a href="#">Живопись</a></li>
							<li><a href="#">Графика</a></li>
							<li><a href="#">Масло</a></li>
							<li><a href="#">Акрил</a></li>
							<li><a href="#">Акварель</a></li>
							<li><a href="#">Карандаш</a></li>
							<li><a href="#">Тушь</a></li>
							<li><a href="#">Гусев Валерий</a></li>
							<li><a href="#">Лабрадорит</a></li>
							<li><a href="#">Сердолик</a></li>
							<li><a href="#">Агат</a></li>
							<li><a href="#">Мрамор</a></li>
							<li><a href="#">Каменная живопись</a></li>
						</ul>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Цена</div>
						<div class="filterBody filterSlider">
							<div id="filter_price"></div>
							<div class="rows">
								<input type="text" id="amount_from" class="from" readonly style="border:0;">
								<input type="text" id="amount_to" class="to" readonly style="border:0;">
							</div>
						</div>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Мастер</div>
						<ul class="filterBody">
							<li>
								<input type="checkbox" class="checkbox" id="filter_ch_1">
								<label for="filter_ch_1">Рейпольский А.Д.</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ch_2">
								<label for="filter_ch_2">Митков Павел</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ch_3">
								<label for="filter_ch_3">Рудаева Е.Л.</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ch_4">
								<label for="filter_ch_4">Уркинеев Д.Л.</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ch_5">
								<label for="filter_ch_5">Гусев Валерий</label>
							</li>
						</ul>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Категория</div>
						<ul class="filterBody">
							<li>
								<input type="checkbox" class="checkbox" id="filter_cc_1">
								<label for="filter_cc_1">Живопись</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_cc_2">
								<label for="filter_cc_2">Графика</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_cc_3">
								<label for="filter_cc_3">Изделия</label>
							</li>
						</ul>
					</div>
					<div class="filterWrap isOpened">
						<div class="filterHead">Техника</div>
						<ul class="filterBody">
							<li>
								<input type="checkbox" class="checkbox" id="filter_ct_1">
								<label for="filter_ct_1">Карандаш</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ct_2">
								<label for="filter_ct_2">Акрил</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ct_3">
								<label for="filter_ct_3">Акварель</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ct_4">
								<label for="filter_ct_4">Масло</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ct_5">
								<label for="filter_ct_5">Тушь</label>
							</li>
							<li>
								<input type="checkbox" class="checkbox" id="filter_ct_6">
								<label for="filter_ct_6">Каменая живопись</label>
							</li>
						</ul>
					</div>
				</aside>
				<!-- CATEGORY CONTENT -->
				<div class="category_content">
					<div class="rows">
						<select name="" class="filter_sort_by" data-placeholder="Сортировка">
							<option value=""></option>
							<option value="">Новейшие</option>
							<option value="">По возрастанию цены</option>
							<option value="">По убыванию цены</option>
							<option value="">Название А-Я</option>
							<option value="">Название Я-А</option>
						</select>
					</div>
					<div class="category_items">
						<?php for ($i=0; $i < 12; $i++) { ?>
						<div class="category_item" style="background-image: url(img/pic1.jpg);">
							<div class="img" style="background-image: url(img/pic1.jpg);"></div>
							<div class="category_info">
								<h3 class="hh"><span>Цикл Литографий  «Маскарад» Лит.№26</span></h3>
								<div class="currency || js_DropWrap">
									<div><span>30,000 руб.</span><i class="currency_btn || js_DropBtn"></i></div>
									<ul class="currency_box || js_DropBox">
										<li class="cur_item">USD</li>
										<li class="cur_item">EUR</li>
									</ul>
								</div>
								<div class="category_btns">
									<a href="product.php" class="button"><span>Подробнее</span><i class="ic_dir_arrow"></i></a>
									<button class="button"><span>В корзину</span><svg class="icon icon-cart"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="img/svgdefs.svg#icon-cart"></use></svg></button>
								</div>
							</div>
						</div>
						<? } ?>
					</div>
					<?php include('blocks/pagination.php'); ?>
				</div>
			</div>
		</div>
	</section>
	<?php include('blocks/footer.php'); ?>
	<?php include('blocks/dialog.php'); ?>
	<script>
		$(document).ready(function () {
			$('#active_menu_3').addClass('active');
		});
	</script>
</body>
</html>