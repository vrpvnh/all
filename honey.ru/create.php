<?php 
	session_start();
	include 'db.php';
	if(isset($_SESSION["auth"]) == 1)
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
	<title>РЕГИСТРАЦИЯ</title>
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
	<div class="create_all">
		<div class="create_content content">
			<div class="create_form_title">Создать аккаунт</div>
			<form action="create.php" method="post">
				<input type="text" minlength="0" maxlength="12" placeholder="ИМЯ"class="create_form_name" name="create_form_name">
				<input type="text" minlength="11" maxlength="11"  pattern="[0-9]*" placeholder="+7(000)000-00-00" id="elementphone" class="create_form_phone" name="create_form_phone">
				<input type="email" placeholder="ПОЧТА"class="create_form_mail" name="create_form_mail">
				<input type="text" minlength="6" maxlength="20" placeholder="ЛОГИН"class="create_form_login" name="create_form_login">

				<input type="password" minlength="6" maxlength="20" placeholder="ПАРОЛЬ" class="create_form_pass0" name="create_form_pass0">
				<input type="password" minlength="6" maxlength="20" placeholder="ПОВТОРИТЬ ПАРОЛЬ" class="create_form_pass1" name="create_form_pass1">
				
				<input type="submit" class="create_form__button" value="СОЗДАТЬ" name="create_form_submit">
			</form>
<?php 
	if(isset($_POST['create_form_name']))
		{
			$create_form_name = $_POST['create_form_name'];
			if($create_form_name == '')
				{
					unset($create_form_name);
				}
		}
	if(isset($_POST['create_form_phone']))
		{
			$create_form_phone = $_POST['create_form_phone'];
			if($create_form_phone == '')
				{
					unset($create_form_phone);
				}
		}
	if(isset($_POST['create_form_mail']))
		{
			$create_form_mail = $_POST['create_form_mail'];
			if($create_form_mail == '')
				{
					unset($create_form_mail);
				}
		}
	if(isset($_POST['create_form_login']))
		{
			$create_form_login = $_POST['create_form_login'];
			if($create_form_login == '')
				{
					unset($create_form_login);
				}
		}
	if(isset($_POST['create_form_pass0']))
		{

			$create_form_pass0 = $_POST['create_form_pass0'];
			$num_pasw0 = strlen($create_form_pass0);			
			if($create_form_pass0 == '')
				{
					unset($create_form_pass0);
				}
		}
	if(isset($_POST['create_form_pass1']))
		{
			$create_form_pass1 = $_POST['create_form_pass1'];
			if($create_form_pass1 == '')
				{
					unset($create_form_pass1);
				}
		}
	if(isset($_POST['create_form_submit']))
		{
			if(isset($create_form_name) && 
		  	   isset($create_form_phone) && 
		   	   isset($create_form_mail) && 
		  	   isset($create_form_login) && 
		  	   isset($create_form_pass0) && 
		  	   isset($create_form_pass1))
				{
					$create_form_submit = $_POST['create_form_submit'];
				}
			else
				{
					unset($create_form_submit);
				}
		}

if(isset($create_form_submit))
	{	
			$query = "SELECT * FROM users WHERE phone = '$create_form_phone'";
			if($result = $mysqli->query($query))
				{
    			foreach($result as $row)
    				{
    					$phonedb = $row['phone'];
    					$logindb = $row['login'];
    					$maildb = $row['mail'];
    				}
			}
			$num_pasw01 = strlen($create_form_pass0);	
		if($create_form_phone != $phonedb && 
			$create_form_login != $logindb &&
			$create_form_mail != $maildb &&
			$create_form_pass0 == $create_form_pass1)
			// $num_pasw0 <= 6 && $num_pasw0 >= 20
			{
			// $num_pasw0 < 5 &&
			// $num_pasw0 >= 20
				$pass_old = $create_form_pass1;
				$pass_new = md5($pass_old);

				$_SESSION["name"] = $create_form_name;
				$_SESSION["phone"] = $create_form_phone;
				$_SESSION["mail"] = $create_form_mail;
				$_SESSION["login"] = $create_form_login;
				$_SESSION["auth"] = 1;
				
				$insert = "INSERT INTO users (name,phone,mail,login,password) VALUES ('$create_form_name','$create_form_phone','$create_form_mail','$create_form_login','$pass_new')";
				// if($insert == true){}
								$mysqli->query($insert);
								
						// header("Location: index.php");
				echo "<script>window.location.href = 'index.php';</script>";
									
			}
	else
		{
if($create_form_phone == $phonedb)
	{
		echo " <div class='error_form_cr'>НОМЕР ТЕЛЕФОНА УЖЕ ЕСТЬ !</div>";
	}
else if($create_form_login == $logindb)
	{
		echo " <div class='error_form_cr'>ЛОГИН СУЩЕСТВУЕТ !</div> ";
	}
else if($create_form_mail == $maildb)
	{
		echo " <div class='error_form_cr'>ПОЧТА СУЩЕСТВУЕТ !</div> ";
	}

else if($num_pasw0 <= 6)
	{
		echo " <div class='error_form_cr'>ПАРОЛЬ МЕННЬШЕ 6 СИМВОЛОВ !</div> ";
	}
else if($num_pasw0 >= 20)
	{
		echo " <div class='error_form_cr'>ПАРОЛЬ БОЛЬШЕ 20 СИМВОЛОВ !</div> ";
	}
else if($create_form_pass0 !== $create_form_pass1)
	{
		echo "<div class='error_form_cr'>ПАРОЛИ НЕ СОВПОДАЮТ !</div>";
	}				
				
		}				
	}
else
	{
		if(!empty($create_form_name) || 
		   !empty($create_form_phone)|| 
		   !empty($create_form_mail) ||
		   !empty($create_form_login)|| 
		   !empty($create_form_pass0)|| 
		   !empty($create_form_pass1))
				{
					echo "<div class='error_form_cr'> ВЫ НЕ ЗАПОЛНИЛИ ПОЛЯ!</div>";
				}
	}
?>
		</div>
	</div>
	<?php 
		include "data/block/footer.php";
	?>
	<script type="text/javascript" src="data/main.js"></script>
</body>
</html>