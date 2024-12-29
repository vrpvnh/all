	<div class="menu_phone_window">
		<div class="menu_phone_window_logo"></div>
			<ul>
				<li><a href="index.php">ГЛАВНАЯ</a></li>
						<!-- <li><a href="">КТО МЫ</a></li> -->
						<li><a href="#">ПРОДУКЦИЯ</a></li>
						<li><a href="#">КОМАНДА</a></li>
						<li><a><img src="data/img/card.svg">0</a></li>
					<?php 
						if(isset($_SESSION["auth"]) == 1)	
							{
							echo '<li><a href="user.php" class="">'.$_SESSION["name"].'</a></li>';
							echo '<li><a href="exit.php" class="">EXIT</a></li>';
							}
						else
							{
								echo '<li><a href="#" class="login_form_window_open">ВОЙТИ</a></li>';
							}
					?>
			</ul>
	</div>