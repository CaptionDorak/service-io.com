<?php 
if (isset($_COOKIE['TestCookie']) || isset($_COOKIE['TestCookieSecond'])) {
	header( 'Location: /', true, 307 );
}
elseif(!isset($_COOKIE['TestCookie']) || !isset($_COOKIE['TestCookieSecond'])) {
	true;
}
?>
<div class="content-login">
		<div class="login-quard">
			<div class="form-login">
			<form class="login-form" method="post">
				<input name="login_log" type="text" id="login_log" placeholder="Введите логин"><br>
				<input name="password_log" type="password" id="password_log" placeholder="Введите пароль"><br>
				<input name="submit" type="submit" value="Войти" onmousedown="checkPush()" id="login-id">
			</form>
			</div>
		</div>
</div>
