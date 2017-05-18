<?php 
if (isset($_COOKIE['TestCookie']) || isset($_COOKIE['TestCookieSecond'])) {
	header( 'Location: /', true, 307 );
}
elseif(!isset($_COOKIE['TestCookie']) || !isset($_COOKIE['TestCookieSecond'])) {
	true;
}
?>
<div class="content-regin">
	<div class="regin-quard">
		<div class="form-regin">
			<form method="POST">
				<input name="name_reg" type="tex" id="name_reg" placeholder="Введите имя"><br>
				<input name="surname_reg" type="text" id="surname_reg" placeholder="Введите фамилию"><br>
				<input name="login_eg" type="text" id="login_reg" placeholder="Введите логин"><br>
				<input name="password_reg" type="password" id="password_reg" placeholder="Введите пароль"><br>
				<input name="password_true_reg" type="password" id="password_true_reg" placeholder="Повторите пароль"><br>
				<input name="mail_reg" type="mail" id="mail_reg" placeholder="Введите почтовый ящик"><br>
				<input name="submit-regin" type="submit" id="submit-regin" onmousedown="checkPush()">
			</form>
		</div>
	</div>
</div>