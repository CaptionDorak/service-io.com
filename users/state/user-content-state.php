<?php
/*Подлкючение к личным покупка и услугам*/
if (isset($_COOKIE['user-content-state'])) {
		true;
}
if (!isset($_COOKIE['user-content-state'])) {
	setcookie('user-content-state',11,time()+3600,'/');
	setcookie('user-content',11,time()+3600,'/');
	setcookie('user-content-state-push',11,time()-3600,'/');
	setcookie('user-content-state-data',11,time()-3600,'/');
	setcookie('business-content',12,time()-3600,'/');
	setcookie('business-content-state',12,time()-3600,'/');
	setcookie('business-content-state-data',12,time()-3600,'/');
}
header( 'Location: http://service-io.com/', true, 307 );
?>