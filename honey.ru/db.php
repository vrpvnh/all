<?php
	$DB = 
			[
				"host" => "127.0.0.1",
				"user" => "root",
				"pass" => "",
				"db" => "honey"
			];
	$mysqli = new mysqli($DB["host"],$DB["user"],$DB["pass"],$DB["db"]);
?>