<?php 
	session_start();
	if(isset($_SESSION["auth"]) == 1)
		{
			session_destroy();
			header("Location: index.php");
			exit();
		}
?>