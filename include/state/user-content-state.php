<?php
if (isset($_COOKIE['user-content'])) {
		true;
}
 elseif(!isset($_COOKIE['user-content'])) {
	setcookie('user-content',11,time()+3600,'/');
	setcookie('business-content',12,time()-3600,'/');
	setcookie("TestCookieSecond",$dool,time()-3600,'/');
}
header( 'Location: http://service-io.com/', true, 307 );
?>