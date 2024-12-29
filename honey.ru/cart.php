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
	<title>КОРЗИНА</title>
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
	<div class="cart_all">
		<div class="cart_content content">
			
		</div>
	</div>


	<?php 
		include "data/block/footer.php";
	?>
	<script type="text/javascript" src="data/main.js"></script>
</body>
</html>