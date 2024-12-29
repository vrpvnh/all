<?php

if($create_form_phone == $phonedb)
	{
		echo " <div class='error_form_cr'>НОМЕР ТЕЛЕФОНА УЖЕ ЕСТЬ !</div>";
	}
else if($create_form_login == $logindb)
	{
		echo " <div class='error_form_cr'>ЛОГИН СУЩЕСТВУЕТ !</div> ";
	}
else if($num_pasw0 < 3)
	{
		echo " <div class='error_form_cr'>ПАРОЛЬ МЕННЬШЕ 3 СИМВОЛОВ !</div> ";
	}
else if($num_pasw0 > 20)
	{
		echo " <div class='error_form_cr'>ПАРОЛЬ БОЛЬШЕ 20 СИМВОЛОВ !</div> ";
	}
else if($create_form_pass0 != $create_form_pass1)
	{
		echo "<div class='error_form_cr'>ПАРОЛИ НЕ СОВПОДАЮТ !</div>";
	}