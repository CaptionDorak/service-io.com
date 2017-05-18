<?php
	if(isset($_COOKIE['business-content'])) {
			true;
	}
	elseif(!isset($_COOKIE['business-content'])) {
		setcookie('business-content',12,time()+3600,'/');
		setcookie('user-content',11,time()-3600,'/');
		setcookie("TestCookieSecond",$dool,time()-3600,'/');
	}
	header( 'Location: http://service-io.com/', true, 307 );
	
?>