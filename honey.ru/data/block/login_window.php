	<div class="login_window">
		<div class="login_form_window_close"></div>
		<div class="login_form_window">
			<div class="login_form_window_title">Авторизация</div>
			<form action="" method="post">
				<input type="text" minlength="6" maxlength="20" placeholder="ЛОГИН"class="login_form_login" name="login_form_login">
				<input type="password" minlength="6" maxlength="20" placeholder="ПАРОЛЬ" class="login_form_password" name="login_form_password">
				<input type="submit" class="login_form_button" value="ВОЙТИ" name="login_form_button">
			</form>
			<?php 
				if(isset($_POST['login_form_login']))
					{
						$login_form_login = $_POST['login_form_login'];
						if($login_form_login == '')
							{
								unset($login_form_login);
							}
					}
				if(isset($_POST['login_form_password']))
					{
						$login_form_password = $_POST['login_form_password'];
						if($login_form_password == '')
							{
								unset($login_form_password);
							}
					}
				if(isset($_POST['login_form_button']))
					{
						if(isset($login_form_login) && isset($login_form_password))
							{
								$login_form_button = $_POST['login_form_button'];
							}
						else
							{
								unset($login_form_button);
							}
					}
				if(isset($login_form_button))
					{				

					$queryp = "SELECT * FROM users WHERE login = '$login_form_login'";
					if($result = $mysqli->query($queryp))
						{
    						foreach($result as $row)
    							{
    								$id = $row['id'];
    								$name = $row['name'];
    								$phone = $row['phone'];
    								$mail = $row['mail'];
    								$login = $row['login'];
    								$password = $row['password'];
    							}
						}
							$pass_md5 = $password;
							$pass_old = md5($login_form_password);

						if($login_form_login == $login && $pass_md5 == $pass_old)
							{
								$_SESSION["name"] = $name;
								$_SESSION["phone"] = $phone;
								$_SESSION["mail"] = $mail;
								$_SESSION["login"] = $login;
								$_SESSION["auth"] = 1;
								header("Location: index.php");
								exit();
							}
						else
							{
								echo "no";
							}

					}


			?>
			<div class="link"><a href="create.php">Создать аккаунт</a></div>
		</div>
	</div>