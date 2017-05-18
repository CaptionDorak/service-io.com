<?php
	if(isset($_COOKIE["TestCookie"]) && isset($_COOKIE["TestCookieSecond"])){
			session_name("push");
			session_start();
		}
	
	include('database/odinbase.php');
	include('database/thorbase.php');
	include('database/lokibase.php');
 ?>