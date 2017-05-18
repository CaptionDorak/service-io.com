<?php
include('include/config.php');
include('mainclass.php');
		

if(!isset($_COOKIE["TestCookie"]) && !isset($_COOKIE["TestCookieSecond"])) {
	include('include/html/html.php');
}
elseif (isset($_COOKIE["TestCookie"]) && isset($_COOKIE["TestCookieSecond"])) {
	include('include/html/html.php');
}
elseif (isset($_COOKIE["TestCookie"]) && !isset($_COOKIE["TestCookieSecond"]) && isset($_COOKIE['business-content'])){
		include('business/html.php');
		}
elseif (isset($_COOKIE["TestCookie"]) && !isset($_COOKIE["TestCookieSecond"]) && isset($_COOKIE['user-content'])){
		include('users/html.php');
		}
		include('include/database/database_close/closedb.php');
		unset($mainclass);
?>