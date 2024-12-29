<?php 
	session_start();
	include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="data/img/logo.svg" type="image/x-icon">
	<link rel="shortcut icon" href="data/img/logo.svg" type="image/x-icon">
	<title>ГЛАВНАЯ</title>
	<link rel="stylesheet" type="text/css" href="data/main.css">
</head>
<body>
<?php 
	include "data/block/phone_menu.php";
	include "data/block/login_window.php";
	include "data/block/header.php";
?>
	<div class="intro_all">
		<div class="intro_content content">
			<div class="intro_description">
				<div class="intro_title">ДОМАШНИЙ МЁД ДЛЯ ВСЕЙ СЕМЬИ !</div>
				<div class="intro_text">
					Мёд— сладкий, густой, вязкий продукт, вырабатываемый пчёлами и некоторыми другими родственными насекомыми. Натуральный пчелиный мёд представляет собой частично переработанный в зобе медоносной пчелы (Apis mellifera) нектар, либо сахаристые выделения некоторых растений (медвяная роса), или некоторых, питающихся соками растений, насекомых (падь)
				</div>
				<div class="intro_button"><a href="">НАША ПРОДУКЦИЯ</a></div>
			</div>
			<div class="intro_img"></div>
		</div>
	</div>
<!-- 	<div class="who_all">
		<div class="who_content content">
			<div class="who_title">КТО МЫ ?</div>
			<div class="who_text">
				Мёд — сладкий, густой, вязкий продукт, вырабатываемый пчёлами и некоторыми другими родственными насекомыми. Натуральный пчелиный мёд представляет собой частично переработанный в зобе медоносной пчелы (Apis mellifera) нектар, либо сахаристые выделения некоторых растений (медвяная роса), или некоторых, питающихся соками растений, насекомых (падь)
			</div>
		</div>
	</div> -->
	<div class="products_all">
		<div class="products_content content">
			<div class="products_title">ПРОДУКЦИЯ</div>
			<div class="list_products">

				<div class="list_products_item">
					<div class="list_products_item_img"><img src="data/img/product.webp"></div>
					<div class="list_products_item_title">Мёд мягкий</div>
					<div class="list_products_item_text">
						Оформление заказа в стандартном режиме выглядит следующим образом. Заполняете полностью форму по последовательным 
					</div>
					<div class="list_products_item_price">250 руб./шт</div>
					<div class="list_products_item_button">В КОРЗИНУ</div>
				</div>

				<div class="list_products_item">
					<div class="list_products_item_img"><img src="data/img/product.webp"></div>
					<div class="list_products_item_title">Мёд мягкий</div>
					<div class="list_products_item_text">
						Оформление заказа в стандартном режиме выглядит следующим образом. Заполняете полностью форму по последовательным 
					</div>
					<div class="list_products_item_price">250 руб./шт</div>
					<div class="list_products_item_button">В КОРЗИНУ</div>
				</div>

				<div class="list_products_item">
					<div class="list_products_item_img"><img src="data/img/product.webp"></div>
					<div class="list_products_item_title">Мёд мягкий</div>
					<div class="list_products_item_text">
						Оформление заказа в стандартном режиме выглядит следующим образом. Заполняете полностью форму по последовательным 
					</div>
					<div class="list_products_item_price">250 руб./шт</div>
					<div class="list_products_item_button">В КОРЗИНУ</div>
				</div>

				<div class="list_products_item">
					<div class="list_products_item_img"><img src="data/img/product.webp"></div>
					<div class="list_products_item_title">Мёд мягкий</div>
					<div class="list_products_item_text">
						Оформление заказа в стандартном режиме выглядит следующим образом. Заполняете полностью форму по последовательным 
					</div>
					<div class="list_products_item_price">250 руб./шт</div>
					<div class="list_products_item_button">В КОРЗИНУ</div>
				</div>

				<div class="list_products_item">
					<div class="list_products_item_img"><img src="data/img/product.webp"></div>
					<div class="list_products_item_title">Мёд мягкий</div>
					<div class="list_products_item_text">
						Оформление заказа в стандартном режиме выглядит следующим образом. Заполняете полностью форму по последовательным 
					</div>
					<div class="list_products_item_price">250 руб./шт</div>
					<div class="list_products_item_button">В КОРЗИНУ</div>
				</div>
				<div class="list_products_item">
					<div class="list_products_item_img"><img src="data/img/product.webp"></div>
					<div class="list_products_item_title">Мёд мягкий</div>
					<div class="list_products_item_text">
						Оформление заказа в стандартном режиме выглядит следующим образом. Заполняете полностью форму по последовательным 
					</div>
					<div class="list_products_item_price">250 руб./шт</div>
					<div class="list_products_item_button">В КОРЗИНУ</div>
				</div>

			</div>
		</div>
	</div>
	<div class="team_all">
		<div class="team_content content">
			<div class="team_title">КОМАНДА</div>
			<div class="list_team">
				<?php 
					$query = "SELECT * FROM teams";
					if($result = $mysqli->query($query))
						{
    						foreach($result as $row)
    							{
			        				echo '
				<div class="list_team_item">
					<div class="list_team_item_img"><img src="'.$row['img'].'"></div>
					<div class="list_team_item_title">'.$row['title'].'</div>
					<div class="list_team_item_text">
						'.$row['text'].'
					</div>
				</div>
			        				';
	    						}
						}
				?>
			</div>
		</div>
	</div>
	<?php 
		include "data/block/footer.php";
	?>
	<script type="text/javascript" src="data/main.js"></script>
</body>
</html>