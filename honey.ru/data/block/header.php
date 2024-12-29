	<div class="header_all">
		<div class="header">
			<div class="header_content content">
				<div class="logo"></div>
				<div class="menu">
					<ul>
						<li><a href="index.php">ГЛАВНАЯ</a></li>
						<!-- <li><a href="">КТО МЫ</a></li> -->
						<li><a href="#">ПРОДУКЦИЯ</a></li>
						<li><a href="#">КОМАНДА</a></li>
						<li><a href="cart.php"><img src="data/img/card.svg">0</a></li>
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
				<div class="phone_menu">
					<div class="phone_menu_element0"></div>
					<div class="phone_menu_element1"></div>
				</div>
			</div>
		</div>
	</div>