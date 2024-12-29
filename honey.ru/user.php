<?php 
	session_start();
	include 'db.php';
	if(!isset($_SESSION["auth"]) == 1)
		{
			header("Location: index.php");
			exit();
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="data/img/logo.svg" type="image/x-icon">
	<link rel="shortcut icon" href="data/img/logo.svg" type="image/x-icon">
	<title>ПРОФИЛЬ</title>
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
	<div class="users_all">
		<div class="users_content content">
			<div class="users_content_title">Профиль</div>
			<div class="info_user">
				<?php 
					echo "
							Имя:".$_SESSION['name']."
						</br>
							Телефон:".$_SESSION['phone']."
						</br>
							Почта:".$_SESSION['mail']."
						</br>
							Логин:".$_SESSION['login']."
						 ";	
				?>
			</div>
			<div class="edit_pass_user">
				<form action="user.php" method="post">
				<input type="password" placeholder="СТАРЫЙ ПАРОЛЬ"class="" name="edit_pass0">
				<input type="password" placeholder="НОВЫЙ ПАРОЛЬ"  class="" name="edit_pass1">
				
				<input type="submit" class="" value="ИЗМЕНИТЬ" name="edit_pass_but">
			</form>
<?php 
		if(isset($_POST['edit_pass0']))
			{
				$edit_pass0 = $_POST['edit_pass0'];
				// $num_pasw01 = strlen($edit_pass0);			
				if($edit_pass0 == '')
					{
						unset($edit_pass0);
					}
			}
		if(isset($_POST['edit_pass1']))
			{
				$edit_pass1 = $_POST['edit_pass1'];
				if($edit_pass1 == '')
					{
						unset($edit_pass1);
					}
			}
		if(isset($_POST['edit_pass_but']))
			{
				if(isset($edit_pass0) && isset($edit_pass1))		   	   
					{
						$edit_pass_but = $_POST['edit_pass_but'];
					}
				else
					{
						unset($edit_pass_but);
					}
		}
		if(isset($edit_pass_but))
			{
				$logins = $_SESSION['login'];
				$query = "SELECT * FROM users WHERE login = '$logins'";
				if($result = $mysqli->query($query))
					{
    				foreach($result as $row)
    					{
    						$logindb = $row['login'];
    						$passuser = $row['password'];
    					}
					}
				$pass_old_md5 = md5($edit_pass0);

				if($pass_old_md5 == $passuser)
					{
						$new_pass_md5 = md5($edit_pass1);
						$update = "UPDATE users SET password = '$new_pass_md5' WHERE login = '$logins'";
						$mysqli->query($update);
						echo "вы изминили пароль";
						// echo "<script>window.location.href = 'user.php';</script>";
					}
				else
					{
						echo "no pas";
					}
			}
			else
				{
					// echo "no but";
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