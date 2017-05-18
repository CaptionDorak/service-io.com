<?php 
//Проверка автроризации и регистрации
include('../config.php');

 $login = htmlspecialchars($_POST['login_log']);
 $password = htmlspecialchars($_POST['password_log']);

 $login_connection = mysqli_query($connection_thor,"SELECT * FROM `users` WHERE `login` = '$login'");
 $password_connection = mysqli_query($connection_thor,"SELECT * FROM `users` WHERE `password` = '$password'");

$doo = hash_hmac('sha224', 'pass', $login).'<br>';
$dool = hash_hmac('sha224', 'pass', $password).'<br>';

if (isset($login_connection) && isset($password_connection)) {
	header( 'Location: http://service-io.com/', true, 307 );
	setcookie("TestCookie",$doo,time()+3600,"/");
	setcookie("TestCookieSecond",$dool,time()+3600,"/");
	exit;
}

 /*$name = htmlspecialchars($_POST['name_reg']);
 $surname = htmlspecialchars($_POST['surname_reg']);
 $login_reg = htmlspecialchars($_POST['login_eg']);
 $password_reg = htmlspecialchars($_POST['password_reg']);
 $password_true_reg = htmlspecialchars($_POST['password_true_reg']);
 $mail_reg = htmlspecialchars($_POST['mail_reg']);*/
?>